<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{

    public function getLabel()
    {
        return Label::query()
            ->where('entity_type', '=', Label::class)
            ->where('entity_id', '=', $this->getAttribute('id'))
            ->get();
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    use HasFactory;
}
