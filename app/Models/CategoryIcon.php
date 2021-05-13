<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryIcon extends Model
{
    public function getImages()
    {

        return File::query()
            ->where('entity_type', '=', CategoryIcon::class)
            ->where('entity_id', '=', $this->getAttribute('id'))
            ->get();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    use HasFactory;
}
