<?php

namespace App\Http\Controllers;

use App\Models\Home;
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
}
