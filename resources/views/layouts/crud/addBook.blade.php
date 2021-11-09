@extends('layouts.main')
@section('container')
@php
    $halaman;
@endphp
<h1>Tambah Buku</h1>
@if (session()->has('statusAuthor'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('statusAuthor') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<form action="/bookStore" enctype="multipart/form-data" method="POST">
  @csrf
    <div class="form-floating mb-3">
      <input type="text" name="title" class="form-control" id="title" placeholder="Title" required  @error('title') is-invalid @enderror>
      <label for="title">Judul Buku</label>
    </div>
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div>
      <label for="description">Deskripsi</label>
    </div>
    <div class="form-floating mb-3" id="description">
      <textarea class="form-control" id="description" name="description" style="height: 100px" required  @error('description') is-invalid @enderror></textarea>
    </div>
    
               
    @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-floating mb-3 mt-3">
      <input type="text" name="publisher" class="form-control"  placeholder="publisher" maxlength="100" required  @error('publisher') is-invalid @enderror>
      <label for="publisher">Publisher</label>
    </div>
    @error('publisher')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    @if ($author == "")
      <div class="form-floating mb-3"> 
        <input type="text" name="author_id" list="browsers" class="form-control" 
        placeholder="author_id" maxlength="100" required @error('author_id') is-invalid @enderror disabled readonly>
        
      <label for="author_id">Belum ada pengarang</label>
    </div>
    
      @else
      <div class="form-floating mb-3"> 
        <input type="text" name="author_id" list="browsers" class="form-control" 
        placeholder="author_id" maxlength="100" id="fname" required @error('author_id') is-invalid @enderror>
        <datalist id="browsers">
          @foreach ($author as $item)
          <option value="{{ $item->id }}" id="author_id">{{ $item->name }}
          @endforeach
      </datalist>
      <label for="author_id">Pengarang</label>
    </div>

      @endif

  
    
    @error('author_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-floating mb-3">
      <input type="number" name="count_book" class="form-control" placeholder="count_book" maxlength="3" required @error('count_book') is-invalid @enderror>
      <label for="count_book">Jumlah Buku</label>
    </div>
    @error('count_book')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div> 
      <label for="date_of_issue" class="form-floating mb-3">Tanggal Pengeluaran</label>
    </div>
    <div class="form-floating mb-3">
      <input class="datepicker" name="date_of_issue" type="date" required> 
    </div>
    <div>
      <label for="image" class="form-label">Upload cover buku</label>
    </div>
    <div>
      <img class="img-preview img-fluid mb-3 col-sm-3">
    </div>
    <div class="input-group mb-3">  
      
      <input required type="file" onchange="previewImage()" class="form-control" id="image" name="image" @error('image') is-invalid @enderror>
    </div>
    @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="col-auto mb-5">
      <button type="submit" class="btn btn-primary">Tambah Buku</button>
    </div>
</form>
@endsection