<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    //
    protected $table='items';
    
    public function getAllItems()
    {
        return
            $this->select(['items.*', 'categories.name as category_name'])
                ->leftJoin('cat_items', 'cat_items.items_id', '=', 'items.id')
                ->leftJoin('categories', 'cat_items.cat_id', '=', 'categories.id')
                ->get();
    }

    protected $fillable = ['name', 'img', 'text', 'price', 'discont'];

    
}
