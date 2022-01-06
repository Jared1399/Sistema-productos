<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
class ProductController extends Controller
{
    public function index()
    {
        $title = 'Products available';
        $products = DB::select('select * from products',[1]);
        return view('product/list',['title' => $title, 'products' => $products]);
    }

    public function create()
    {
        $title = 'Create a product';
        return view('product/create',['title' => $title]);
    }

    public function createSave(Request $request)
    {      

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
            
        return redirect('/');
    }


    public function delete()
    {
        $title = 'Delete a product';
        $products = DB::select('select * from products',[1]);
        return view('product/delete',['title' => $title, 'products' => $products]);
    }

    public function deleteSave($id){
        DB::table('products')->delete($id);
        return redirect('/');
    }

    public function sell($id)
    {
        auth()->user()->products()->detach($id);
        // return redirect()->route('user/products');
        return redirect('/user/products');
    }

    public function buy($id)
    {
        auth()->user()->products()->attach($id);
        // return redirect()->route('user/products');
        return redirect('/user/products');
    }



    public function details($id)
    {
        $title = 'Product details';
        $details =  DB::table('products')->find($id);
        return view('product/details',['title' => $title, 'id' => $id, 'details' => $details] );
    }

}
