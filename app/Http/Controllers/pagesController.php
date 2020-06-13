<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;

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
      $products = product::orderBy('id', 'desc')->get();
      return view('pages.product.index')->with('products', '$products');

    }
}
