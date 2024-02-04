<?php

namespace App\Models;

use App\Models\Feedback;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'nama_produk',
    //     'harga_produk',
    //     'total_harga',
    // ];
    protected $guarded = ['id'];

    
}
