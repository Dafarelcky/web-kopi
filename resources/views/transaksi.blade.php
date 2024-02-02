@extends('layouts.main')
@section('content')

<div>
      <h1>Transaction Page</h1>
      <form method="post" action="/transaksi_penjualan">
        @csrf
          <div>
              <input name="nama_produk" type="text" placeholder="Nama Produk">
          </div>
          <div>
              <input name="harga" type="number" placeholder="Harga">
          </div>
          <div>
              <input name="jumlah" type="number" placeholder="Jumlah">
          </div>
              <button type="submit">Submit</button>
      </form>
</div>

@endsection