
@extends('temple.master')
@section('content')


<div class="container">
<div class="row">
<div class="col-md-12">
    <form action="{{ route("barang.store") }}" method="POST">


        @csrf

        <div class="mb-3 mt-3">
          <label for="nama" class="form-label">nama barang</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name" name="nama_barang">
        </div>

        <div class="mb-3">
            <label for="nama_kontak" class="form-label">nama merek</label>
            <input type="text" class="form-control" id="nama_kontak" placeholder="Enter your nickname" name="nama_merek">
          </div>

        <div class="mb-3">
          <label for="alamat" class="form-label">harga</label>
          <input type="number" class="form-control" id="alamat" placeholder="Enter your address" name="harga">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>





</div>
</div> 
</div>
@endsection