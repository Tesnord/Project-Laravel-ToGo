<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{


    public function value()
    {
        return $this->hasOne(PropertyValue::class);
    }

    use HasFactory;
}
