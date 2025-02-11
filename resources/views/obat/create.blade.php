@extends('temple.master')
@section('content')


<div class="container">
<div class="row">
<div class="col-md-12">
    <form action="{{ route("obat.store") }}" method="POST">


        @csrf

        <div class="mb-3 mt-3">
          <label for="nama" class="form-label">nama obat</label>
          <input type="text" class="form-control" id="name" placeholder="Enter  name" name="nama_obat">
        </div>

        <div class="mb-3">
            <label for="nama_kontak" class="form-label">merek</label>
            <input type="text" class="form-control" id="nama_kontak" placeholder="Enter merek" name="merek">
          </div>

        <div class="mb-3">
          <label for="alamat" class="form-label">supplayer</label>
          <input type="text" class="form-control" id="alamat" placeholder="Enter " name="supplayer">
        </div>

        <div class="mb-3">
            <label for="kota" class="form-label">jumlah</label>
            <input type="number" class="form-control" id="kota" placeholder="Enter " name="jumlah">
        </div>
        <div class="mb-3">
            <label for="kode_pos" class="form-label"></label>
            <input type="date" class="form-control" id="kode_pos" placeholder="Enter " name="tanggal_exp">
          </div>
          
         
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>





</div>
</div> 
</div>
@endsection