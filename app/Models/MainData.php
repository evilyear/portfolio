<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class MainData extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    public $translatedAttributes = [
        "text"
    ];

    protected $fillable = [
        "key"
    ];

    public static function getTitleByKey($key, $currentLocale)
    {
        $main_data = self::where('key', $key)->first();
        
        if ($main_data) {
            $fallbackLocale = config('translatable.fallback_locale');
            
            return $main_data->translateOrNew($currentLocale)->text ?? $main_data->translateOrNew($fallbackLocale)->text;
        }
        
        return null;
    }
}
