@extends('layouts.main')
@section('content')

<div>
      <h1>Feedback Page</h1>
      <form method="post" action="/feedback/{{ $id }}">
        @csrf
          <div>
              <input name="nama" type="text" placeholder="Nama">
          </div>
          <div>
              <input name="rating" type="number" placeholder="Rating">
          </div>
              <button type="submit">Submit</button>
      </form>
</div>

@endsection