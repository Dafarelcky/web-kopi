<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Product;
use Illuminate\Http\Request;


class KopiController extends Controller
{
    public function home()
    {
        $data = Home::first();
 
        
        return view('home', [
            'tagline' => $data->tagline,
            'bg_image' => $data->bg_image,
        ]);
    }

    public function product()
    {
        $data = Product::all();

        

        return view('home', [
           'components' => $data
        ]);
    }

    public function buy($id)
    {   
        
        return view('buy', [
            'detail' => Product::find($id)
        ]);
    }
}
