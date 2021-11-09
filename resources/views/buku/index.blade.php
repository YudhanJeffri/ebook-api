@extends('layouts.main')
@section('container')
@php
    $halaman;
@endphp
<div class="container">
  <div class="row justify-content-left">
    {{-- session add --}}
    @if (session()->has('successTambah'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('successTambah') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>          
        
    @elseif (session()->has('gagalTambah'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('gagalTambah') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    {{-- session edit --}}
    @elseif (session()->has('successEdit'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('successEdit') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif (session()->has('gagalEdit'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('gagalEdit') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    {{-- session delete --}}
    @elseif (session()->has('statusDelete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('statusDelete') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif (session()->has('statusDeleteSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('statusDeleteSuccess') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
    @endif
    <h1>{{ $notfound }}</h1>
        
    
          @foreach($book as $data)
          <div class="col-md-3">
              <div class="card mb-4">
                <img src={{asset('storage/' . $data->book_image) }} class="card-img-top" width="500" height="400" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$data->title}}</h5>
                  <p class="card-title">@php
                      echo Str::limit($data->description, 100)
                  @endphp  </p>
                  <p class="card-text">Tanggal rilis : {{ $data->date_of_issue }} <br>
                      {{-- {{$data->keterangan}} --}}
                  </p>
                  <div class="d-grid gap-2 mx-auto">
                    
                  <a href="{{ url('detailBuku') }}/{{ $data->id }}" class="btn btn-primary">Lihat Detail</a>
                  @if ( Session::get('access_token') != null)
                    <a class="btn btn-primary" href="{{ url('editBook') }}/{{ $data->id }}" class="btn btn-primary">Edit Buku</a>
                @else
                    <a class="btn btn-primary" href="/login" >Edit Buku</a>
                @endif
                  </div>
                  @if (Session::get('access_token') != null)
                  <form method="POST" class="justify-content-md-end mt-2" action="/deleteBook/{{ $data->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"onclick="return confirm('yakin?');">Delete</button>
                  </form>
                  @else
                      <a class="btn btn-danger mt-2" href="/login" >Delete</a>
                  @endif
                </div>
              </div>
              </div>
          @endforeach
  </div>
</div>
<div class="container mt-4 mb-4 d-flex justify-content-end">
  {{ $book->links() }}
</div>

@endsection