<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Product;
use Illuminate\Http\Request;


class KopiController extends Controller
{
    public function home()
    {
        $product = Product::latest()->get();
        $home = Home::first();
        $about = About::first();
        $contact = Contact::first();
        

        return view('home', [
            'home' => $home,
            'about' => $about,
            'products' => $product,
            'contact' => $contact

        ]);
    }

    public function buy($id)
    {   
        
        return view('buy', [
            'detail' => Product::find($id)
        ]);
    }

    public function product()
    {
        $search = request('search');
        $products = Product::latest()->when($search, function($query) use ($search) {
            return $query->search($search);
        })->get();
        return view('product', [
            'products' => $products
        ]);
    }
}
