<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Item;

class IndexController extends Controller
{
    public function show(){
        $items = (new Item)->getAllItems();
        $categories = Category::all();
        return view('index')->with([
            'items'=>$items,
            'categories'=>$categories]);
    }
}
