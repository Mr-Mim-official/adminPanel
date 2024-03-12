<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use function Termwind\style;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'parent_id'];


    protected function allParent(): Attribute
    {
        return Attribute::make(get: function () {
            foreach (Category::all() as $category) {

                if (!$this->parent_id == 0) {
                    $parent = $category->find($this->parent_id);
                    echo "$parent->name | ";


                    if ($parent->parent_id == 0) break; else {
                        echo $this->find($parent->parent_id)->name;
                        if (!$parent->parent_id == 0) break;
                    }
                } else {
                    echo "---";
                    break;
                };
            }

        });
    }

    protected function parent(): Attribute
    {
        return Attribute::make(get: function ()
        {
            if (!$this->parent_id == 0)
            {
                echo $this->find($this->parent_id)->name;
            }
        });
    }
    public function category(): MorphToMany
    {
return $this->morphToMany(Categoriables::class , "categoriable");
    }
}

