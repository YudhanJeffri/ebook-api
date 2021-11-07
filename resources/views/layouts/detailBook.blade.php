@extends('layouts.main')
@section('container')
<div>
  @php
  $halaman = "";
@endphp
    <div class="card mb-3" style="max-height: 100%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('storage/' . $data->book_image) }}" width="797" height="1181" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h2 class="card-title">{{ $data->title }}</h2>
              @if ($data->authors != null)
              <p>Author      : <a href="{{ url('detailAuthor') }}/{{ $data->authors->id }}" class="text-decoration-none">{{ $data->authors->name }}</a></p>      
              @else
              <p>Author      : <a href="" class="text-decoration-none">Tidak ada Author</a></p>
              @endif
        
            
              <p>Publisher   : {{ $data->publisher }}</p>
              <p>Jumlah Buku : {{ $data->count_book }}</p>
              <p>Tanggal Pengeluaran : {{ $data->date_of_issue }}</p>
              <span> Deskripsi : </span>
              <p class="card-title"> @php
                  echo $data->description
              @endphp  </p>
              <p class="card-text"><small class="text-muted">Last updated at {{ $data->updated_at }}</small></p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                @if ( Session::get('access_token') != null)
                    <a href="{{ url('editBook') }}/{{ $data->id }}" class="btn btn-primary">Edit Buku</a>
                @else
                    <a class="btn btn-primary" href="/login" >Edit Buku</a>
                @endif
                @if (Session::get('access_token') != null)
                <form method="POST" action="/deleteBook/{{ $data->id }}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger"onclick="return confirm('yakin?');">Delete</button>
                </form>
                @else
                    <a class="btn btn-danger" href="/login" >Delete</a>
                @endif
                
              </div>
            </div>
            
          </div>
        
        </div>
      </div>

    {{-- <img src="{{ asset('storage/' . $data->book_image) }}" width="300" height="500" alt="">
    <h1>{{ $data->title }}</h1> --}}
</div>
@endsection
