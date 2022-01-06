<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //$results = DB::select('select * from users where id = ?', [1]);
        $products = DB::select('select * from products',[1]);
        $title = 'home';
        return view('home',['title' => $title, 'products' => $products ]);
    }
}
