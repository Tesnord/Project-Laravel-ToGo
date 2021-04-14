<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function images()
    {
        return $this->hasMany(File::class);
    }

    public function properties_values()
    {
        return $this->hasMany(PropertyValue::class);
    }

    public function getPreviewPictureAttribute()
    {
        return $this->images()->first();
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

    use HasFactory;
}
