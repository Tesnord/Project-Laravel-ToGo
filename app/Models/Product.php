<?php

namespace App\Models;

use App\Utils\MarketFavorites;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Stem\LinguaStemRu;

class Product extends Model
{

    public function getImages()
    {
        return File::query()
            ->where('entity_type', '=', Product::class)
            ->where('entity_id', '=', $this->getAttribute('id'))
            ->get();
    }

    public function properties_values()
    {
        return $this->hasMany(PropertyValue::class);
    }

    public function getPreviewPictureAttribute()
    {
        return $this->getImages()->first();
    }

    public function price()
    {
        return $this->hasOne(Price::class);
    }

    public function getCatalogPriceAttribute()
    {
        return $this->price()->first();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function baskets()
    {
        return $this->belongsToMany(Basket::class)->withPivot('quantity');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function descriptions()
    {
        return $this->belongsToMany(Description::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function promotions()
    {
        return $this->belongsToMany(Promotions::class);
    }

    public function labels()
    {
        if ($label = $this->belongsToMany(Label::class)->get()->first()) {
            return $label->toArray()['value'];
        }
        return "";
    }

    public function getLabel()
    {
        return Label::query()
            ->where('entity_type', '=', Label::class)
            ->where('entity_id', '=', $this->getAttribute('id'))
            ->get();
    }

    public function isFavorite()
    {
        try {
            $q_favorites = MarketFavorites::getInstance()->isFavorite($this->getAttribute('id'));
        } catch (Exception $exception) {
            $q_favorites = [];
        }
        return $q_favorites;
    }

    /**
     * ?????????????????? ???????????? ???????????? ???? ???????????????? ????????????
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $search
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $search)
    {
        // ???????????????? ?????????????????? ????????????
        $search = iconv_substr($search, 0, 64);
        // ?????????????? ??????, ?????????? ???????? ?? ????????
        $search = preg_replace('#[^0-9a-zA-Z??-????-??????]#u', ' ', $search);
        // ?????????????? ?????????????? ??????????????
        $search = preg_replace('#\s+#u', ' ', $search);
        $search = trim($search);
        if (empty($search)) {
            return $query->whereNull('id'); // ???????????????????? ???????????? ??????????????????
        }
        // ?????????????????? ?????????????????? ???????????? ???? ?????????????????? ??????????
        $temp = explode(' ', $search);
        $words = [];
        $stemmer = new LinguaStemRu();
        foreach ($temp as $item) {
            if (iconv_strlen($item) > 3) {
                // ???????????????? ???????????? ??????????
                $words[] = $stemmer->stem_word($item);
            } else {
                $words[] = $item;
            }
        }
        $relevance = "IF (`products`.`title` LIKE '%" . $words[0] . "%', 2, 0)";
        $relevance .= " + IF (`products`.`desc_title` LIKE '%" . $words[0] . "%', 1, 0)";
        $relevance .= " + IF (`categories`.`name` LIKE '%" . $words[0] . "%', 1, 0)";
//        $relevance .= " + IF (`brands`.`name` LIKE '%" . $words[0] . "%', 2, 0)";
        for ($i = 1; $i < count($words); $i++) {
            $relevance .= " + IF (`products`.`title` LIKE '%" . $words[$i] . "%', 2, 0)";
            $relevance .= " + IF (`products`.`desc_title` LIKE '%" . $words[$i] . "%', 1, 0)";
            $relevance .= " + IF (`categories`.`name` LIKE '%" . $words[$i] . "%', 1, 0)";
//            $relevance .= " + IF (`brands`.`name` LIKE '%" . $words[$i] . "%', 2, 0)";
        }

        $query->join('categories', 'categories.id', '=', 'products.category_id')
//            ->join('brands', 'brands.id', '=', 'products.brand_id')
            ->select('products.*', DB::raw($relevance . ' as relevance'))
            ->where('products.title', 'like', '%' . $words[0] . '%')
            ->orWhere('products.desc_title', 'like', '%' . $words[0] . '%')
            ->orWhere('categories.name', 'like', '%' . $words[0] . '%');
//            ->orWhere('brands.name', 'like', '%' . $words[0] . '%');
        for ($i = 1; $i < count($words); $i++) {
            $query = $query->orWhere('products.title', 'like', '%' . $words[$i] . '%');
            $query = $query->orWhere('products.desc_title', 'like', '%' . $words[$i] . '%');
            $query = $query->orWhere('categories.name', 'like', '%' . $words[$i] . '%');
//            $query = $query->orWhere('brands.name', 'like', '%' . $words[$i] . '%');
        }
        $query->orderBy('relevance', 'desc');
        return $query;
    }

    use HasFactory;
}
