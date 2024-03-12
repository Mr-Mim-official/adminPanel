<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    use HasFactory;

    protected  $fillable=['title' , 'description','slug','image_id'];

    public function category(): MorphToMany
    {
        return $this->morphToMany(Categoriables::class , "categoriable");
    }
    protected  function slug():Attribute
    {
        return Attribute::make(get: fn()=>str_replace(" " , "-" , $this->slug));
    }
}
