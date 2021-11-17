@extends('layouts.main')
@section('container')
<div>
  @php
  $halaman = "";
@endphp
    <div class="card mb-3" style="max-height: 100%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('storage/' . $data->author_image) }}" width="797" height="1181" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h2 class="card-title">{{ $data->name }}</h2>
              <p>Tempat Tanggal Lahir : {{ $data->date_of_birth }}, {{ $data->place_of_birth }}</p>
              <p>Gender   : {{ $data->gender }}</p>
              <span> Deskripsi : </span>
              <p class="card-title"> @php
                  echo $data->author_description
              @endphp  </p>
              <p class="card-text"><small class="text-muted">Last updated at {{ $data->updated_at }}</small></p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  @if ( Session::get('access_token') != null)
                    <a class="btn btn-primary" href="{{ url('editPengarang') }}/{{ $data->id }}" class="btn btn-primary">Edit Pengarang</a>
                @else
                    <a class="btn btn-primary" href="/login" >Edit Pengarang</a>
                @endif
                  @if (Session::get('access_token') != null)
                  <form method="POST" class="justify-content-md-end" action="/deletePengarang/{{ $data->id }}">
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
      
      <div class="container">
        <div class="row justify-content-left">
          <h5>Daftar Buku : </h5>
          @foreach($data->book as $book)
          <div class="col-md-3">
              <div class="card mb-4">
                <img src={{asset('storage/' . $book->book_image) }} class="card-img-top" width="500" height="400" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$book->title}}</h5>
                  <p class="card-title">@php
                      echo Str::limit($book->description, 100)
                  @endphp  </p>
                  <p class="card-text">{{ $book->date_of_issue }} <br>
                      {{$book->keterangan}}
                  </p>
                  <div class="d-grid gap-2 mx-auto">
                    
                  <a href="{{ url('detailBuku') }}/{{ $book->id }}" class="btn btn-primary">Lihat Detail</a>
                  @if ( Session::get('access_token') != null)
                    <a class="btn btn-primary" href="{{ url('editBook') }}/{{ $book->id }}" class="btn btn-primary">Edit Buku</a>
                @else
                    <a class="btn btn-primary" href="/login" >Edit Buku</a>
                @endif
                  </div>
                  @if (Session::get('access_token') != null)
                  <form method="POST" class="justify-content-md-end" action="/deleteBook/{{ $book->id }}">
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
          @endforeach
        </div>
        </div>
</div>
@endsection
