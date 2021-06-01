<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
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



    use HasFactory;
}
