<?php

namespace App\Models;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_transaksi',
        'nama_produk',
        'nama',
        'rating',
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}
