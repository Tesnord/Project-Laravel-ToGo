<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{

    public function getImages()
    {
        return File::query()
            ->where('entity_type', '=', Description::class)
            ->where('entity_id', '=', $this->getAttribute('id'))
            ->get();
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    use HasFactory;
}
