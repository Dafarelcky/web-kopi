@extends('layouts.main')
@section('content')

@dd($bg_image)
<div class="bg-[url('{{ asset('storage/app/public/' . $bg_image) }}')] w-full bg-no-repeat bg-center h-screen bg-cover relative px-10 lg:px-12 z-10 after:content-[''] after:block after:absolute after:w-full after:h-full after:left-0 after:bg-gradient-to-r from-black to-transparent">
    <div class="absolute top-0 bottom-0 translate-y-1/4  max-w-2xl z-40 flex flex-col ">
        <img src="{{ asset('storage/app/public/' . $bg_image) }}" alt="">
        <h1 class="text-3xl font-bold text-white lg:text-5xl">{{ $tagline }}</h1>
        <a href="#product" class="bg-orange-700 px-8 py-3 text-base text-white rounded-3xl mt-16 max-w-48 ">Pesan sekarang</a>
    </div>
</div>

<div class="px-10">
    
    @include('about')

    @include('product')

    @include('contact')
    
</div>


<a href="https://wa.me/6282336819550" class="ri-whatsapp-line fixed bottom-0 right-0 text-4xl  text-white z-50 py-2 px-3  bg-green-500 m-4 rounded-full"></a>

@include('partials.footer')
    


@endsection