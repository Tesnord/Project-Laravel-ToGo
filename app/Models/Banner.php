<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public function getImages()
    {
        return File::query()
            ->where('entity_type', '=', Banner::class)
            ->where('entity_id', '=', $this->getAttribute('id'))
            ->get();
    }

    public function promotion()
    {
        return $this->belongsTo(Promotions::class);
    }

    use HasFactory;
}
