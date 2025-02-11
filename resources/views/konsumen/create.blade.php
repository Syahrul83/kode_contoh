
@extends('temple.master')
@section('content')


<div class="container">
<div class="row">
<div class="col-md-12">
    <form action="{{ route("pelanggan.store") }}" method="POST">


        @csrf

        <div class="mb-3 mt-3">
          <label for="nama" class="form-label">nama</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name" name="nama_konsumen">
        </div>

        <div class="mb-3">
            <label for="nama_kontak" class="form-label">nama panggilan</label>
            <input type="text" class="form-control" id="nama_kontak" placeholder="Enter your nickname" name="nama_kontak">
          </div>

        <div class="mb-3">
          <label for="alamat" class="form-label">alamat</label>
          <input type="text" class="form-control" id="alamat" placeholder="Enter your address" name="alamat">
        </div>

        <div class="mb-3">
            <label for="kota" class="form-label">kota</label>
            <input type="text" class="form-control" id="kota" placeholder="Enter your city" name="kota">
        </div>
        <div class="mb-3">
            <label for="kode_pos" class="form-label">kode pos</label>
            <input type="number" class="form-control" id="kode_pos" placeholder="Enter your kode pos" name="kode_pos">
          </div>
          
          <div class="mb-3">
            <label for="negara" class="form-label">negara</label>
            <input type="text" class="form-control" id="negara" placeholder="Enter your country" name="negara">
          </div>

          <div class="mb-3">
            <label for="status" class="form-label">status</label>
            <input type="text" class="form-control" id="status" placeholder="Enter " name="status">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>





</div>
</div> 
</div>
@endsection