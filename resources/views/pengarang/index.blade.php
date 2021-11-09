@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-left">
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
      @elseif (session()->has('statusSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('statusSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>          
        
    @elseif (session()->has('statusFailed'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('statusFailed') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif (session()->has('statusDeleteSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('statusDeleteSuccess') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif (session()->has('statusDeleteFailed'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('statusDeleteFailed') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
      @endif
      <h1>{{ $notfound }}</h1>
            @foreach($pengarang as $data)
            <div class="col-md-3">
                <div class="card">
                  <img src={{asset('storage/' . $data->author_image) }} class="card-img-top" width="500" height="400" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{$data->name}}</h5>
                    <p class="card-title">@php
                        echo Str::limit($data->author_description, 100)
                    @endphp  </p>
                     <p class="card-text"><small class="text-muted">Last updated at {{ $data->updated_at }}</small></p>
                        {{$data->keterangan}}
                    </p>
                    <div class="d-grid gap-2 mx-auto">
                    
                      <a href="{{ url('detailAuthor') }}/{{ $data->id }}" class="btn btn-primary">Lihat Detail</a>
                      @if ( Session::get('access_token') != null)
                        <a class="btn btn-primary" href="{{ url('editPengarang') }}/{{ $data->id }}" class="btn btn-primary">Edit Pengarang</a>
                    @else
                        <a class="btn btn-primary" href="/login" >Edit Pengarang</a>
                    @endif
                      </div>
                      @if (Session::get('access_token') != null)
                      <form method="POST" class="justify-content-md-end mt-2" action="/deletePengarang/{{ $data->id }}">
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
    {{ $pengarang->links() }}
  </div>

@endsection