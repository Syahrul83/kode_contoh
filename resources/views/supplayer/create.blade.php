@extends('temple.master')
@section('content')


<div class="container">
<div class="row">
<div class="col-md-12">
    <form action="{{ route("supplayer.store") }}" method="POST">


        @csrf

        <div class="mb-3 mt-3">
          <label for="nama" class="form-label">nama</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name" name="nama">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Enter your nickname" name="alamat">
          </div>

        <div class="mb-3">
          <label for="bidang" class="form-label">bidang</label>
          <input type="text" class="form-control" id="bidang" placeholder="Enter your address" name="bidang">
        </div>

        <div class="mb-3">
            <label for="id_supplayer" class="form-label">ID supplayer</label>
            <input type="number" class="form-control" id="id_supplayer" placeholder="Enter your address" name="id_supplayer">
          </div>
  
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>





</div>
</div> 
</div>
@endsection