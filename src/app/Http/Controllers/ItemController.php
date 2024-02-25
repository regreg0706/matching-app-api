<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ItemController extends Controller
{
    //
    public function index()
    {
        $items = Item::paginate(5); 
        return response()->json($items);
    }
}
