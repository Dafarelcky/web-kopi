<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'alamat',
        'no_telp',
        'link_tiktok',
        'link_gmail',
        'link_instagram',
    ];
}
