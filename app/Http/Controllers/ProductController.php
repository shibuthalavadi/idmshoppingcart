<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function index()
    {
       $data = product::all();
       return  view('product',['products'=>$data]);
    }
}
