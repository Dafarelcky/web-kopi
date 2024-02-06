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
            <div class="flex flex-col gap-3 pb-5">
                <label for="nama" class="text-sm text-gray-600">Rating : </label>
                <input name="rating" id="rating" type="number" min="1" max="5" class="hidden" value="0" placeholder="Rating">
                <div class="flex justify-between" id="rating_icons">
                    <i data-rating='1' class="ri-star-line text-5xl text-yellow-500"></i>
                    <i data-rating='2' class="ri-star-line text-5xl text-yellow-500" ></i>
                    <i data-rating='3' class="ri-star-line text-5xl text-yellow-500" ></i>
                    <i data-rating='4' class="ri-star-line text-5xl text-yellow-500" ></i>
                    <i data-rating='5' class="ri-star-line text-5xl text-yellow-500" ></i>
                </div>
            </div>
            <button type="submit" class="bg-orange-700 text-white py-2 rounded-lg">Submit</button>
        </form>
    </div>
</div>


<script>
    // let currentRating = 0
    const icons = document.querySelectorAll('#rating_icons i')
    icons.forEach((icon, i) => {
        icon.addEventListener('click', function() {
            icons.forEach((icon, i2) => {
                
                if (i >= i2) {
                    icon.classList.remove('ri-star-line')
                    icon.classList.add('ri-star-fill')
                } else {
                    icon.classList.remove('ri-star-fill')
                    icon.classList.add('ri-star-line')
                    
                }
            })
            const valueRating = document.getElementById('rating').value = i + 1
            
        })
    });

    // function setRating(rating, event) {
    //     currentRating = rating

    //     event.stopPropagation()


        // for (let i = 0; i <= 5; i++) {
        //     const icon = document.querySelector(`#rating_icons [data-rating="${i}"]`)
        //     if (i <= rating) {
        //         icon.classList.replace('ri-star-line','ri-star-fill')
        //         // icon.classList.remove('ri-star-line')
        //         // icon.classList.add('ri-star-fill')
        //     } else {
        //         icon.classList.replace('ri-star-fill','ri-star-line')
        //         // icon.classList.remove('ri-star-fill') 
        //         // icon.classList.add('ri-star-line')
              
        //     }

        //   const valueRating = document.getElementById('rating').value = rating
        //   console.log(valueRating)
            
        //}

       
    //}




</script>

@endsection