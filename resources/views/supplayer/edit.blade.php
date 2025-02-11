@extends('temple.master')
@section('content')


<div class="container">
<div class="row">
<div class="col-md-12">
    <form action="{{ route("supplayer.update",$qurey->id) }}" method="POST">


        @csrf
        @method('PUT')

        <div class="mb-3 mt-3">
          <label for="nama" class="form-label">nama</label>
          <input type="text" class="form-control" id="nama" placeholder="Enter " name="nama" value="{{ old('nama',$qurey->nama) }}">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Enter " name="alamat" value="{{ old('alamat',$qurey->alamat) }}">
          </div>

        <div class="mb-3">
          <label for="bidang" class="form-label">bidang</label>
          <input type="text" class="form-control" id="bidang" placeholder="Enter " name="bidang" value="{{ old('bidang',$qurey->bidang) }}">
        </div>

        <div class="mb-3">
            <label for="id_supplayer" class="form-label">id_supplayer</label>
            <input type="number" class="form-control" id="id_supplayer" placeholder="Enter " name="id_supplayer" value="{{ old('id_supplayer',$qurey->id_supplayer) }}">
          </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
        </foam>



</div>
</div> 
</div>
@endsection