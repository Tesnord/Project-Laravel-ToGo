<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Filters\QueryFilter;


class Brand extends Model
{
    use HasFactory;
    use Sluggable;

    public function getImages()
    {
        return File::query()
            ->where('entity_type', '=', Brand::class)
            ->where('entity_id', '=', $this->getAttribute('id'))
            ->get();
    }

    public function getImagesLabel()
    {
        return File::query()
            ->where('entity_var', '=', Brand::class)
            ->where('entity_id', '=', $this->getAttribute('id'))
            ->get();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function promotions()
    {
        return $this->hasMany(Promotions::class);
    }

    public function sluggable (): array
    {
        return [
            'slug_brand' => [
                'source' => 'title'
            ]
        ];
    }

    public function letters()
    {
        return $this->belongsToMany(Letter::class);
    }

    public function scopeFilter(Builder $builder, QueryFilter $filter)
    {
        return $filter->apply($builder);
    }

}
