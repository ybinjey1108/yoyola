<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodoController extends Controller
{
    public function index()
    {
        return view('Todo.index');
    }
    public function update(Request $request) 
    {
        $word = $request->name;
        
       
    }
}
