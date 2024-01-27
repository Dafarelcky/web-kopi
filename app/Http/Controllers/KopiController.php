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

    public function detailProduct($id)
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

    public function buy(Request $request)
    {   
        
        $validate = $request->validate([
            'nama_product' => 'required',
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'quantity' => 'required|numeric',
            'deskripsi' => 'nullable'
        ]);
        
        $message = urlencode("
            ORDER : {$validate['nama_product']} 
            Nama Pembeli : {$validate['nama']} 
            Jumlah Barang : {$validate['quantity']} 
            Alamat : {$validate['alamat']}
            Deskripsi : {$validate['deskripsi']}
        ");
        return redirect()->to("https://api.whatsapp.com/send?phone=6282336819550&text={$message}");

        
    }

    
}
