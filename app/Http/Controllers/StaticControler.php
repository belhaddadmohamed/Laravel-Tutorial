<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticControler extends Controller
{
    function index() {
        return view('index');
    }

    function about(){
        return view('about');
    }

    function portfolio(){
        return view('portfolio');
    }

    function shop($category=null, $item=null) {
        if (isset($category)){
            if(isset($item)){
                return "This item is: <h3> $item </h3> From <h3> $category </h3>";
            }
            return "This category is : <h3> $category </h3>";
        }
        return "<h1>SHOP PRODUCTS</h1>";
    }

    function store() {
        $filter = request('type');
    
        if (isset($filter)){
            return 'You are seeing <span style="color:green;">'.$filter.'</span>';
        }
    
        return 'You are seeing <span style="color:blue;"> All the products </span>';
    }
}
