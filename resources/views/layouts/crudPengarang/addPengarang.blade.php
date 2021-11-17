@extends('layouts.main')
@section('container')
<h1>Tambah Pengarang</h1>
<form action="/pengarangStore" enctype="multipart/form-data" method="POST">
  @csrf
    <div class="form-floating mb-3">
      <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required maxlength="100"  @error('name') is-invalid @enderror>
      <label for="name">Nama Pengarang</label>
    </div>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div> 
        <label for="date_of_birth" class="form-floating mb-3">Tanggal Lahir</label>
      </div>
      <div class="form-floating mb-3">
        <input class="datepicker" name="date_of_birth" type="date" required> 
      </div>
      <div class="form-floating mb-3"> 
        <input type="text" name="place_of_birth" class="form-control" placeholder="place_of_birth" maxlength="50" required  @error('author') is-invalid @enderror>
        <label for="place_of_birth">Tempat Lahir</label>
      </div>
      <div class="form-floating mb-3">
          <div>
           
        <input type="radio" id="laki" name="gender" value="Laki - Laki">
        <label for="laki">Laki - Laki</label><br>
        <input type="radio" id="perempuan" name="gender" value="Perempuan">
        <label for="perempuan">Perempuan</label><br>
          </div>
        
    </div>
    <div class="form-floating mb-3">
      <textarea class="form-control"  placeholder="Description" name="author_description" id="description" style="height: 100px" required  @error('author_description') is-invalid @enderror></textarea>
     
    </div>
    @error('author_description')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror    
    <div>
      <label for="image" class="form-label">Upload gambar Pengarang</label>
    </div>
    <div>
      <img class="img-preview img-fluid mb-3 col-sm-3">
    </div>
    <div class="input-group mb-3">  
      <input required type="file" onchange="previewImage()" class="form-control" id="image" name="author_image" @error('author_image') is-invalid @enderror>
    </div>
    @error('author_image')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="col-auto mb-5">
      <button type="submit" class="btn btn-primary">Tambah Pengarang</button>
    </div>
</form>
@endsection