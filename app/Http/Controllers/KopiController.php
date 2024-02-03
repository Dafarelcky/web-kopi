<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Product;
use App\Models\Transaksi;
use App\Models\Feedback;
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

    public function buy(Request $request, $id)
    {   
        
        $validate = $request->validate([
            'nama_produk' => 'required',
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'quantity' => 'required|numeric',
            'total_harga' => 'required|numeric',
            'deskripsi' => 'nullable',
        ]);
        $product = Product::find($id);
       
        if (!$product) {
            // Handle the case where the product is not found
            return redirect()->back()->with('error', 'Product not found');
        }

        // Calculate the total based on the product's harga and the requested quantity
        $total = $product->harga * $request->quantity;

        $validate['nama_produk'] = $product['nama'];
        $validate['total_harga'] = $total;
        

        Transaksi::insert($validate);
        
        // $message = urlencode("
        //     ORDER : {$validate['nama_product']} 
        //     Nama Pembeli : {$validate['nama']} 
        //     Jumlah Barang : {$validate['quantity']} 
        //     Alamat : {$validate['alamat']}
        //     Deskripsi : {$validate['deskripsi']}
        // ");

        // Transaksi::create($validate);
        // return redirect()->to("https://api.whatsapp.com/send?phone=6282336819550&text={$message}");

        
    }

    // public function transaksi_penjualan()
    // {
    //     dump(request()->get('nama_produk'));
    //     $data = new Transaksi([
    //         'nama_produk' => request()->get('nama_produk'),
    //         'harga_produk' => request()->get('harga'),
    //         'total_harga' => request()->get('harga')*request()->get('jumlah'),
    //     ]);

    //     $data->save();

    //     return redirect()->route('home');
    // }
    
    public function feedback($id)
    {
        dump(request()->get('nama'));
        $data = new Feedback([
            'nama' => request()->get('nama'),
            'rating' => request()->get('rating'),
            'id_transaksi' => $id,
        ]);

        $data->save();

        return redirect()->route('home');
    }
}
