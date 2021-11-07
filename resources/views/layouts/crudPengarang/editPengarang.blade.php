@extends('layouts.main')
@section('container')
@php
    $halaman = "pengarang";
@endphp
<h1>Edit Pengarang</h1>
<form action="{{ url('/pengarangUpdate/'.$data->id) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
      <div class="form-floating mb-3">
        <input value="{{ $data->name }}" type="text" name="name" class="form-control" id="name" placeholder="Nama" required maxlength="100"  @error('name') is-invalid @enderror>
        <label for="name">Nama Pengarang</label>
      </div>
      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <div> 
          <label for="date_of_birth" class="form-floating mb-3">Tanggal Lahir</label>
        </div>
        <div class="form-floating mb-3">
          <input class="datepicker" value="{{ $data->date_of_birth }}" name="date_of_birth" type="date" required> 
        </div>
        <div class="form-floating mb-3"> 
          <input value="{{ $data->place_of_birth }}" type="text" name="place_of_birth" class="form-control" placeholder="place_of_birth" maxlength="50" required  @error('author') is-invalid @enderror>
          <label for="place_of_birth">Tempat Lahir</label>
        </div>
        <div class="form-floating mb-3">
            <div>

                @php
                    $gender = $data->gender;
                @endphp
           @if ($gender == 'Perempuan')
            <input checked="checked" type="radio" id="perempuan" name="gender" value="Perempuan">
            <label for="perempuan">Perempuan</label><br> 
            <input type="radio" id="laki" name="gender" value="Laki - Laki">
           <label for="laki">Laki - Laki</label><br>    
           @else
           <input checked="checked" type="radio" id="laki" name="gender" value="Laki - Laki">
           <label for="laki">Laki - Laki</label><br> 
           <input  type="radio" id="perempuan" name="gender" value="Perempuan">
            <label for="perempuan">Perempuan</label><br> 
           @endif
            </div>
          
      </div>
      <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Description" name="author_description" id="description" style="height: 100px" required  @error('author_description') is-invalid @enderror>{{ $data->author_description }}</textarea>
        <label for="description">Deskripsi Pengarang</label>
      </div>
      @error('author_description')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror    
      <div>
        <label for="image" class="form-label">Upload gambar Pengarang</label>
      <div>
        <input type="hidden" name="oldImage" value="{{ $data->author_image }}">
        @if ($data->author_image)
          <img src="{{ asset('storage/' . $data->author_image) }}" class="img-preview img-fluid mb-3 col-sm-3">
          @else
          <img class="img-preview img-fluid mb-3 col-sm-3">
          @endif
      </div>
      <div class="input-group mb-3">  
        <input required type="file" onchange="previewImage()" class="form-control" id="image" name="image" @error('image') is-invalid @enderror>
      </div>
      
      @error('image')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <div class="col-auto mb-5">
          <button type="submit" class="btn btn-primary">Edit Pengarang</button>
        <a href="{{ url('/detailAuthor/'.$data->id) }}" class="text-decoration-none ms-3">kembali</a>
      </div>

  </form>
@endsection