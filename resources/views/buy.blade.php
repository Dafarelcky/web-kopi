@extends('layouts.main')
@section('content')
    
    <div class="flex justify-center items-center bg-orange-700 h-screen">
        
        <div class="px-10 py-5 max-w-4xl bg-white shadow  rounded-lg ">
            <h1 class="text-center text-2xl mb-7">Kopi Hitam</h1>
            <div class="flex flex-col justify-around items-center lg:flex-row">

                <div>
            
                    <img src="/img/product.png" class="object-cover" alt="">
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex flex-col">

                        <label class="text-sm" for="name">Nama Anda</label>
                        <input type="text" class="border border-orange-700 px-3 py-1 rounded-md" name="name" id="name">
                    </div>
                    <div class="flex flex-col">

                        <label class="text-sm" for="name">Alamat</label>
                        <input type="text" class="border border-orange-700 px-3 py-1 rounded-md" name="address" id="name">
                    </div>
                    
                    <div class="quantity flex flex-col">
                        <label class="text-sm" for="">Jumlah Pembelian</label>
                        <div>

                            <button class="bg-gray-300 px-2 py-1 rounded-l-md" type="button" onclick="decrementQuantity()">-</button>
                            <input 
                              type="text" 
                              id="quantity" 
                              name="quantity" 
                              class="mx-2 p-2 border rounded-md w-14 h-6 text-center"
                              value="1"
                              readonly
                            >
                            <button class="bg-gray-300 px-2 py-1 rounded-r-md" type="button" onclick="incrementQuantity()">+</button>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <label for="">Deskripsi (Optional)</label>
                        <textarea class="border border-orange-700 px-3 py-1 rounded-md" rows="5" cols="4" name="" id=""></textarea>
                    </div>
                    <button class="px-7 py-2 bg-orange-700 text-white rounded-md">Beli</button>
                   
                </div>
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
