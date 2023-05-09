<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferenceTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        "text",
        "title"
    ];
}
