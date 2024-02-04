@extends('layouts.main')
@section('content')

<div class="w-full h-screen bg-orange-700 flex justify-center items-center">
    <div class="bg-white rounded-xl shadow-lg">
        
        <h1 class="text-center py-4 font-bold text-xl uppercase">Feedback Page</h1>
        <form method="post" action="/feedback_post/{{ $id }}" class="flex flex-col gap-5 p-4 mt-9">
          @csrf
            <div class="flex flex-col gap-3">
                <label for="nama_produk" class="text-sm ">Nama Produk : </label>
                <input name="nama_produk" id="nama_produk" class="border p-3 rounded-md" value="{{ $produk->nama_produk }}" readonly>
            </div>
            <div class="flex flex-col gap-3">
                <label for="nama" class="text-sm text-gray-600">Nama : </label>
                <input name="nama" type="text" id="nama" class="border p-3 rounded-md" placeholder="Nama" autofocus>
            </div>
            <div class="flex flex-col gap-3">
                <label for="nama" class="text-sm text-gray-600">Rating : </label>
                <input name="rating" type="number" min="1" max="5" class="border p-3 rounded-md" placeholder="Rating">
            </div>
            <button type="submit" class="bg-orange-700 text-white py-2 rounded-lg">Submit</button>
        </form>
    </div>
</div>

@endsection