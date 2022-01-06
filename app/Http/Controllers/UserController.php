<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function profile()
    {
        $title = 'My profile';
        $user = Auth::user();
        return view('user/profile',['title' => $title, 'user' => $user]);
    }

    public function products()
    {
    
        $title = 'My products';
        $productsId = DB::table('product_user')->where('user_id', '=', 1)->pluck('product_id');
        $products = [];
        foreach($productsId as $id){
        
            $products[] = DB::table('products')->where('id', '=', $id)->get();
        }

        return view('user/products', ['title' => $title, 'products' => $products]);
    }

}
