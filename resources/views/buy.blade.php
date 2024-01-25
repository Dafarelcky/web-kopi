@extends('layouts.main')
@section('content')
    
{{-- <div class="grid grid-rows-3 grid-flow-col gap-4 p-10">
    <div class="row-span-12 col-span-3 ">
        <img src="/img/hero-0.png" alt="">
    </div>
    <div class="col-span-1 row-span-4  bg-blue-500">02</div>
    <div class="col-span-1  row-span-4 bg-yellow-500">03</div>
    <div class="col-span-1  row-span-4 bg-yellow-500">03</div>
</div> --}}

<div class="bg-gray-200 px-10 py-10 md:px-0">

    <div class="py-7 text-center">
        <h1 class="text-black font-semibold text-3xl">{{ $detail->nama }}</h1>
    </div>
    <div class="flex flex-col gap-3  md:flex-row md:justify-center md:max-h-[400px]">
        
        <img src="/img/hero-0.png" class="object-cover md:max-w-4xl md:max-h-sm rounded-lg" alt="">
        
        <div class="flex gap-2 justify-center md:flex-col">
            <img src="/img/hero-0.png" class="w-1/4 rounded-lg md:w-full md:max-h-32" alt="">
            <img src="/img/hero-0.png" class="w-1/4 rounded-lg  md:w-full md:max-h-32" alt="">
            <img src="/img/hero-0.png" class="w-1/4 rounded-lg  md:w-full md:max-h-32" alt="">
        </div>
    </div>

</div>

<div class="px-10 my-7 flex justify-center  flex-wrap gap-10">
    <div class="sm:max-w-52 lg:max-w-lg">

        <h1 class="font-semibold text-black text-xl md:text-2xl">Deskripsi</h1>
        <article class="text-sm">{{ $detail->deskripsi }}</article>
    </div>
    <div class="px-10  shadow-xl rounded-xl">
        <span class="text-xl font-semibold text-black md:text-2xl">Beli Barang</span>
        <h1 class="my-3 text-base">Rp {{ $detail->harga }}</h1>
        <div class="flex flex-col gap-3 ">
            <div class="flex flex-col gap-2">

                <label for="nama">Nama :</label>
                <input type="text" class="border border-gray-700 focus:outline-none focus:border-orange-700 focus:ring-orange-700 px-4 py-2 rounded-lg" name="nama" id="nama">
            </div>
            <div class="flex flex-col gap-2">

                <label for="alamat">Alamat :</label>
                <input type="text" class="border border-gray-700 focus:outline-none focus:border-orange-700 focus:ring-orange-700 px-4 py-2 rounded-lg" name="alamat" id="alamat">
            </div>

            <label for="">Jumlah Barang</label>
            <div class="flex items-center mt-1">
                
                <button class="bg-gray-300 px-2 py-1 rounded-l-md" onclick="decrementQuantity()">-</button>
                <input 
                  type="text" 
                  id="quantity" 
                  name="quantity" 
                  class="mx-2 p-2 border rounded-md w-14 h-6 text-center"
                  value="1"
                  readonly
                >
                <button class="bg-gray-300 px-2 py-1 rounded-r-md" onclick="incrementQuantity()">+</button>
            </div>
            <div class="flex flex-col gap-2">

                <label for="deskrpsi">Deskripsi (Opsional) :</label>
                <textarea name="deskripsi" class="border border-gray-700 focus:outline-none focus:border-orange-700 focus:ring-orange-700 px-4 py-2 rounded-lg" id="" cols="30" rows="10" id="deskripsi" name="deskripsi"></textarea>
            </div>
            <button class="bg-orange-700 px-4 py-2 text-white rounded-lg">Beli</button>
            
            
            
        </div>
    </div>

</div>
        
@endsection

<script>
    function incrementQuantity() {
      let input = document.getElementById('quantity');
      let val = parseInt(input.value) || 0;
      input.value = val + 1;
    }

    function decrementQuantity() {
      let input = document.getElementById('quantity');
      let val = parseInt(input.value) || 0;
      if (val > 1) {
        input.value = val - 1;
      }
    }
  </script>
