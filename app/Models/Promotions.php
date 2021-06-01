<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotions extends Model
{
    public function getImages()
    {
        return File::query()
            ->where('entity_type', '=', Promotions::class)
            ->where('entity_id', '=', $this->getAttribute('id'))
            ->get();
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_promotions', 'promotions_id', 'products_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    use HasFactory;
}
