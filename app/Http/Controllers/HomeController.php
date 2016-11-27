<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Item;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function add()
    {
        return view('add');
    }
    public function store(Request $request)
    {

        $data = $request->all();
        $item = new Item;
        $item->fill($data);

        $item->save();

        return redirect('/add');
    }
}
