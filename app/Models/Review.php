<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    public function getImages()
    {

        return File::query()
            ->where('entity_type', '=', Review::class)
            ->where('entity_id', '=', $this->getAttribute('id'))
            ->get();
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
