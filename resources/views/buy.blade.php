@extends('layouts.main')
@section('content')
    


<div class="bg-gray-200 px-10 py-20 md:px-0">

    <div class="py-7 text-center">
        <h1 class="text-black font-semibold text-3xl">{{ $detail->nama }}</h1>
    </div>
    <div class="flex flex-col gap-3  md:flex-row md:justify-center md:max-h-[400px]">
        
        <img src="{{ asset('/storage/' . $detail->image_1) }}" class="object-cover md:max-w-4xl md:max-h-sm rounded-lg" alt="">
        
        <div class="flex gap-2 justify-center md:flex-col">
            <img src="{{ asset('/storage/' . $detail->image_2) }}" class="w-1/4 rounded-lg md:w-full md:max-h-32" alt="">
            <img src="{{ asset('/storage/' . $detail->image_3) }}" class="w-1/4 rounded-lg  md:w-full md:max-h-32" alt="">
            <img src="{{ asset('/storage/' . $detail->image_4) }}" class="w-1/4 rounded-lg  md:w-full md:max-h-32" alt="">
        </div>
    </div>

</div>

<div class="px-10 my-7 flex justify-center pb-20 flex-wrap gap-10">
    <div class="sm:max-w-52 lg:max-w-lg">

        <h1 class="font-semibold text-black text-xl md:text-2xl">Deskripsi</h1>
        <article class="text-sm">{!! $detail->deskripsi !!}</article>
    </div>
    <div class="px-10  shadow-xl rounded-xl">
        <span class="text-xl font-semibold text-black md:text-2xl">Beli Barang</span>
        <h1 class="my-3 text-base">Rp {{ $detail->harga }}</h1>
        <div class="flex flex-col gap-3 ">
            <form action="/buy/{{ $detail->id }}" method="post"  id="submitForm">
                @method('post')
                
                @csrf
               

                <input type="hidden" name="nama_produk" value="{{ $detail->nama }}">
                <div class="flex flex-col gap-2">
    
                    <label for="nama">Nama Pembeli:</label>
                    <input type="text" class="border border-gray-700 focus:outline-none focus:border-orange-700 focus:ring-orange-700 px-4 py-2 rounded-lg" name="nama" id="nama" required>
                </div>
                <div class="flex flex-col gap-2">
    
                    <label for="alamat">Alamat :</label>
                    <input type="text" class="border border-gray-700 focus:outline-none focus:border-orange-700 focus:ring-orange-700 px-4 py-2 rounded-lg" name="alamat" id="alamat" required>
                </div>
                
                <label for="">Jumlah Barang</label>
                <div class="flex items-center mt-1">
                    
                    <button class="bg-gray-300 px-2 py-1 rounded-l-md" onclick="decrementQuantity()" type="button">-</button>
                    <input 
                    type="text" 
                    id="quantity" 
                    name="quantity" 
                    class="mx-2 p-2 border rounded-md w-14 h-6 text-center"
                    value="1"
                    readonly
                    >
                    <button class="bg-gray-300 px-2 py-1 rounded-r-md" onclick="incrementQuantity()" type="button">+</button>
                </div>
                <div class="flex flex-col gap-2">
    
                    <label for="total_harga">Total Harga :</label>
                    <input type="text" class="border border-gray-700 focus:outline-none focus:border-orange-700 focus:ring-orange-700 px-4 py-2 rounded-lg" name="total_harga" id="total_harga" value="{{ $detail->harga }}" required>
                </div>
                <div class="flex flex-col gap-2">
    
                    <label for="deskrpsi">Deskripsi (Opsional) :</label>
                    <textarea name="deskripsi" class="border border-gray-700 focus:outline-none focus:border-orange-700 focus:ring-orange-700 px-4 py-2 rounded-lg" id="" cols="30" rows="10" id="deskripsi" name="deskripsi"></textarea>
                </div>
                <button class="bg-orange-700 px-4 py-2 text-white rounded-lg my-2"  type="submit" >Beli</button>
            </form>
            
            
            
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
