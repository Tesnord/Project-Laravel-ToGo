<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyValue extends Model
{


    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    use HasFactory;
}
