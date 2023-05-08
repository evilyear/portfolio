<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class SkillElement extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    protected $fillable = [
        "skill_id"
    ];

    public $translatedAttributes = [
        "title",
        "text"
    ];

    public function skill(){
        return $this->belongsTo(Skill::class, 'skill_id');
    }

    


}
