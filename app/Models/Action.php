<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    public function getImages()
    {
        return File::query()
            ->where('entity_type', '=', Action::class)
            ->where('entity_id', '=', $this->getAttribute('id'))
            ->get();
    }

    use HasFactory;
}
