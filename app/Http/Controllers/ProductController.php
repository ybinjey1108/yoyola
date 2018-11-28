<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class ProductController extends Controller
{
    public function index()
    {
        return view('Product.index');
    }

}
