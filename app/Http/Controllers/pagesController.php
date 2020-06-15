<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class pagesController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }
    public function about()
    {
      return view('pages.about');
    }
    public function home()
    {
    	return view('pages.welcome');
    }
    public function contact()
    {
    	return view('pages.contact');
    }
    public function products()
    {
      // $products = product::all();
      // $products = select * from 'products' order by 'id' desc;
      $products = Product::orderBy('id', 'desc')->get();
       return view('pages.product.index')->with('products', $products);
      // return $products;

    }
}
