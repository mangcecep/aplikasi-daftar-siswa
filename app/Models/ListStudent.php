<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListStudent extends Model
{
    protected $fillable = [
        "name",
        "classes",
        "major",
        "birth_date",
        "photo_profile"
    ];
}
