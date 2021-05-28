<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
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
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    /**
     * @return HasMany
     */
    public function childrenRcsv()
    {
        return $this->children()->with(['childrenRcsv']);
    }

    /**
     * @return HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }

    public function qProductsRcsv()
    {
        $res_col = Category::query()
            ->where('id', $this->id)
            ->with(['childrenRcsv'])
            ->get();

        $res_arr = $res_col->toArray();

        $res_flat = $this->flatten($res_arr);

        $categories_ids = array_column($res_flat, 'id');

        return Product::query()
            ->whereIn('category_id', $categories_ids);
    }

    public static function getByPath(string $path, int $parent_id = 0)
    {
        $slugs = explode('/', $path);

        $category = Category::query()
            ->where('parent_id', $parent_id)
            ->where('slug_category', array_shift($slugs))
            ->first();

        if (empty($slugs)) {
            return $category;
        } else {
            return static::getByPath(implode('/', $slugs), $category->id);
        }
    }

    public function getBreadcrumbs($breadcrumbs = [])
    {
        $breadcrumbs[] = [
            'name' => $this->name,
            'slug_category' => $this->getPath(),
        ];

        if ($this->parent_id === 0) {
            return array_reverse($breadcrumbs);
        } else {
            return Category::query()
                ->where('id', $this->parent_id)
                ->first()
                ->getBreadcrumbs($breadcrumbs);
        }
    }

    public function getLevel($level = 0)
    {
        $level++;

        if ($this->parent_id === 0) {
            return $level;
        } else {
            return Category::query()
                ->where('id', $this->parent_id)
                ->first()
                ->getLevel($level);
        }
    }

    public function getPath($slugs = [])
    {
        $slugs[] = $this->slug_category;

        if ($this->parent_id === 0) {
            $reversed = array_reverse($slugs);
            return implode('/', $reversed);
        } else {
            return Category::query()
                ->where('id', $this->parent_id)
                ->first()
                ->getPath($slugs);
        }
    }

    public function getImages()
    {

        return File::query()
            ->where('entity_type', '=', Category::class)
            ->where('entity_id', '=', $this->getAttribute('id'))
            ->get();
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
