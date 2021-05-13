<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /**
     * @return mixed
     */
    public static function roots()
    {
        return self::where('parent_id', 0)->get();
    }

    /**
     * @return HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * @return int
     */
    public function getProductsCount(): int
    {
        $products_count = Product::query()
            ->where('category_id', $this->getAttribute('id'))
            ->count('id');

        return $products_count;
    }

    /**
     * @return int
     */
    public function getProductsCountRcsv(): int
    {
        $res_col = Category::with(['products', 'childrenRcsv', 'childrenRcsv.products'])
            ->where('id', $this->getAttribute('id'))
            ->get();

        $res_arr = $res_col->toArray();

        $res_flat = $this->flatten($res_arr);

        $products = [];

        foreach ($res_flat as $res_el) {
            if (array_key_exists('category_id', $res_el)) {
                $products[] = $res_el;
            }
        }

        $products_ids = array_column($products, 'id');

        $products_count = count($products_ids);

        return $products_count;
    }

    /**
     * @return HasMany
     */
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    /**
     * @return HasMany
     */
    public function childrenRcsv()
    {
        return $this->children()->with('childrenRcsv');
    }


    public function icons()
    {
        return $this->hasMany(CategoryIcon::class);
    }

    /**
     * @param array $array
     * @return array
     */
    public function flatten(array $array): array
    {
        $flat = [];

        foreach ($array as $key => $value) {
            if (is_array($value) || is_object($value)) {
                $flat = array_merge($flat, $this->flatten($value));
            } else {
                $flat[0][$key] = $value;
            }
        }

        return $flat;
    }

    use HasFactory;
}
