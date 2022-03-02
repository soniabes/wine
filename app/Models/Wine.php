<?php

namespace App\Models;

use App\Models\Country;
use App\Models\Origin;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{

    use HasFactory;

    public function countries()
    {
        return $this->belongsTo(Country::class,'id_country');


    }

    public function origins()
    {
        return $this->belongsTo(Origin::class,'id_origin');


    }

    public function categories()
    {
        return $this->belongsTo(Category::class,'id_category');


    }

    public static function fcellar($cellar)
    {
        return self::where('cellar','=',$cellar);

    }
/*
    public static function fvintage($vingate)
    {
        return self::where('vingate','=','$vingate');
    }
    */

}

