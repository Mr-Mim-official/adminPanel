<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ComponentController extends Controller
{
    public static function parent($parent_id)
    {
        $cat = Category::find($parent_id)->all();
        dd($cat->parent());
    }
}
