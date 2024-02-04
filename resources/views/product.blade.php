@extends('layouts.main')
@section('content')

@include('partials.navbar')

<div class="text-center px-10 pt-20 pb-10">
    <form action="/product">
        <input type="text" class="border border-gray-700 px-4 py-2 w-full max-w-96 focus:outline-none focus:border-orange-700 focus:ring-orange-700" placeholder="Cari Product..." name="search" value="{{ request('search') }}">
        <button class="bg-orange-700 px-4 py-2 text-white" type="submit">Cari</button>
    </form>
</div>

<div class="flex flex-wrap justify-around pb-20">
    @if ($products->count() > 0)
    
    
        @foreach ($products as $product)
        
        <div class="flex flex-col gap-2 p-5 shadow-lg  rounded-xl">
            <div class="flex justify-center">

                <img src="{{ asset('/storage/' . $product->image_1) }}" class="w-28" alt="">
            </div>
            <h3 class="text-lg font-bold cursor-pointer">{{ $product->nama }}</h3>
            <span class="text-xs max-w-56">{!! Str::of($product->deskripsi)->limit(100) !!}</span>
            <h1 class="text-sm font-bold">Rp {{ $product->harga }}</h1>
            <div class=" my-4">
                
                <a href="/buy/{{ $product->id }}" class="px-10 py-2 bg-orange-700 text-white rounded-lg text-center">Beli</a>
            </div>
        

        </div>
        @endforeach
    @else
        <h1>Pencarian Tidak Ditemukan</h1>
        
    @endif
</div>
    
@endsection