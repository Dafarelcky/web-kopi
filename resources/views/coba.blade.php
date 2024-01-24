@extends('layouts.main')
@section('content')

<div class="flex flex-wrap my-10 items-center justify-center bg-neutral-400 text-neutral-900 py-10 rounded-xl">
    <div class="max-w-xl">
        <h1 class="uppercase text-2xl">Tentang Kami</h1>
        <p class="text-sm my-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex possimus eos a voluptates odio deserunt cupiditate unde omnis iusto voluptatibus quos dignissimos molestiae nihil, harum excepturi eligendi illum impedit sapiente. Sapiente dolores perferendis, blanditiis commodi reprehenderit tempora temporibus deleniti non ut, consectetur facere, nam quia nihil fuga amet reiciendis exercitationem iusto ex numquam voluptatibus praesentium? Repellendus aperiam animi qui, nemo maxime consectetur? Laborum a voluptatem alias deserunt porro qui cupiditate quasi ipsa nisi rerum quo quas iste, quidem animi. Consequuntur illo iure in ratione quis distinctio, odit at iusto sunt quaerat ex id quod ipsum soluta eligendi molestiae, autem numquam.</p>
        <div class="flex justify-around my-5">
            <div class="text-center">
                <h1 class="text-2xl font-bold">2024</h1>
                <span class="text-sm">Kami Berdiri</span>
            </div>
            <div class="text-center">
                <h1 class="text-2xl font-bold">100</h1>
                <span class="text-sm">Product</span>
            </div>
            <div class="text-center">
                <h1 class="text-2xl font-bold">1000</h1>
                <span class="text-sm">Pelanggan</span>
            </div>
        </div>
    </div>
    <div class="flex gap-3">
        <img src="/img/hero-0.png" class="w-48 h-96 rounded-full" alt="">
        <img src="/img/hero-0.png" class="w-48 h-96 rounded-full mt-14 block" alt="">
        {{-- <img src="/img/hero-0.png" alt=""> --}}
    </div>
</div>
    
@endsection