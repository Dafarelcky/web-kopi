@extends('layouts.main')
@section('content')



<div class="bg-[url('{{ asset('/storage/' . $home->bg_image) }}')] w-full bg-no-repeat bg-center h-screen bg-cover relative px-10 lg:px-12">
    {{-- <div class="bg-[url('/public/img/hero-trans.svg')] w-full h-screen bg-cover absolute left-0"></div> --}}
   
    <div class="absolute top-0 bottom-0 translate-y-1/4  max-w-2xl z-40 flex flex-col ">

        <h1 class="text-3xl font-bold text-black lg:text-5xl">{{ $home->tagline }}</h1>
        <a href="#product" class="bg-orange-700 px-8 py-3 text-base text-white rounded-3xl mt-16 max-w-48 ">Pesan sekarang</a>
    </div>
</div>

<div class="px-10">
    {{-- <div>

        <h1 class="text-2xl mt-14">Temukan Kelezatan dalam Setiap Pencarian Kopi</h1>
        <div class="relative w-96 lg:w-[500px]">
            <input type="text" class="w-96  mt-5 px-4 py-2 lg:w-[500px] rounded-lg relative shadow-lg border" placeholder="Cari Produk..." name="search">
            <i class="ri-search-line absolute right-5 bottom-0 -translate-y-1/3 shadow-lg"></i>
        </div>
    </div> --}}

    {{-- about --}}
    <div class="flex flex-wrap my-10 items-center justify-center gap-10 bg-neutral-400 text-neutral-900 py-10 rounded-xl px-3 lg:p-5">
        <div class="max-w-xl bg-white p-5 rounded-lg">
            <h1 class="uppercase text-2xl">Tentang Kami</h1>
            <div class="h-1 w-20 mt-2 mb-3 bg-orange-700"></div>
            <p class="text-sm my-4">{{ $about->tentang_kami }}</p>
            <div class="stats stats-vertical lg:stats-horizontal shadow xl">
      
                <div class="stat place-items-center">
                  <div class="stat-title">Berdiri Sejak</div>
                  <div class="stat-value">2024</div>
                  
                </div>
                
                <div class="stat place-items-center">
                  <div class="stat-title">Total Product</div>
                  <div class="stat-value">4,200</div>
                  
                </div>
                
                <div class="stat place-items-center">
                  <div class="stat-title">Pelanggan yang puas</div>
                  <div class="stat-value">1,200</div>
                  
                </div>
                
              </div>
        </div>
        <div class="flex justify-center gap-3">
            <img src="{{ asset('/storage/' . $about->image_1) }}" class="w-48 h-96 rounded-full" alt="">
           
            <img src="{{ asset('/storage/' . $about->image_2) }}" class="w-48 h-96 rounded-full mt-14 block" alt="">
            {{-- <img src="/img/hero-0.png" alt=""> --}}
        </div>
    </div>

    {{-- end about --}}

    {{-- product --}}

    <div id="product">
        <h1 class="text-2xl mt-14 font-semibold">Product kita</h1>
        <div class="h-1 w-20 mt-2 mb-3 bg-orange-700"></div>
        <div class="flex justify-around flex-wrap">
            @foreach ($products as $product)  
            
                <div class="flex flex-col gap-2 p-5 shadow-lg  rounded-xl">
                    <div class="flex justify-center">
    
                        <img src="/img/product.png" class="w-28" alt="">
                    </div>
                    <h3 class="text-lg font-bold cursor-pointer" onclick="my_modal_2.showModal()">{{ $product->nama }}</h3>
                    <span class="text-xs max-w-56">{{ Str::of($product->deskripsi)->limit(100) }}</span>
                    <h1 class="text-sm font-bold">Rp {{ $product->harga }}</h1>
                    <div class=" my-4">
                        
                        <a href="/buy/{{ $product->id }}" class="px-10 py-2 bg-orange-700 text-white rounded-lg text-center">Beli</a>
                    </div>
                    {{-- <dialog id="my_modal_2" class="modal modal-middle">
                        <div class="modal-box flex flex-wrap justify-around lg:max-w-3xl lg:flex-nowrap hero">
                            <div class="hero-content flex-col lg:flex-row">
                                <img src="/img/product.png" class="max-w-xl" />
                                <div>
                                <h1 class="text-2xl font-bold">Box Office News!</h1>
                                <h3 class="text-base font-bold my-3">Rp 5000</h3>
                                <p class="py-6 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus obcaecati atque ducimus odit, dolorum natus non! Esse mollitia nesciunt eos odio pariatur quos officia nobis omnis earum, dolores doloremque fugit! Iste, soluta laudantium obcaecati corporis vel repudiandae possimus nulla ratione reiciendis illo laboriosam hic dolores, ipsum architecto mollitia quae maxime. Quas omnis distinctio neque sed quam aut enim consequuntur, corporis aspernatur ab, debitis explicabo reiciendis repellendus nostrum magni. Ea, placeat dolor laudantium iure amet obcaecati quidem neque. Voluptates quo nesciunt voluptatum porro quia totam asperiores quasi inventore rem veritatis reiciendis qui, sequi dolorem harum! Suscipit eum quia expedita fugit dolor!</p>
                                
                                <a href="/buy" class="btn bg-orange-700 text-white">beli</a>
                                </div>
                            </div>
                        </div>
                        <form method="dialog" class="modal-backdrop">
                        <button>close</button>
                        </form>
                    </dialog> --}}
    
                </div>
            @endforeach
            
            
            
            
        </div>
    </div>
    
    {{-- end product --}}

   {{-- contact --}}

   <div class="flex flex-wrap  my-20 gap-7 lg:justify-around lg:items-center">
        <div>
            <h1 class="text-2xl">Contact</h1>
            <div class="h-1 w-20 mt-2 mb-3 bg-orange-700"></div>
            <span class="text-lg">Apakah ada pertanyaan? Hubungi kami</span>
            <div class="my-5">

                <div class="text-lg">

                    <i class="ri-map-pin-line"></i>
                    <span>{{ $contact->alamat }}</span>
                </div>
                <div>

                    <i class="ri-phone-fill"></i>
                    <span>{{ $contact->no_telp }}</span>
                </div>
            </div>
            <div class="text-xl">

                <a href="{{ $contact->link_tiktok }}" class="ri-tiktok-line p-2 border   hover:bg-orange-700 rounded-full border-orange-700 hover:text-black text-orange-700"></a>
                <a href="{{ $contact->link_instagram }}" class="ri-instagram-line p-2 border  mx-5 hover:bg-orange-700 rounded-full border-orange-700 hover:text-black text-orange-700"></a>
                <a href="{{ $contact->link_gmail }}" class="ri-mail-line p-2 border  hover:bg-orange-700 rounded-full border-orange-700 hover:text-black text-orange-700"></a>
                
            </div>
        </div>


        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31602.039008649004!2d113.78299826710042!3d-8.075466994399282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6c06742e42539%3A0xc3f96328cb1d49b4!2sSumberwringin%2C%20Sukowono%2C%20Jember%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1705930697766!5m2!1sen!2sid" width="500" height="350" style="border:0;" class="rounded-3xl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
   {{-- end contact --}}
    
</div>


<a href="https://wa.me/6282336819550" class="ri-whatsapp-line fixed bottom-0 right-0 text-4xl  text-white z-50 py-2 px-3  bg-green-500 m-4 rounded-full"></a>

@include('partials.footer')
    


@endsection