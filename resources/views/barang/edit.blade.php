
@extends('temple.master')
@section('content')


<div class="container">
<div class="row">
<div class="col-md-12">
    <form action="{{ route("barang.update",$qurey->id) }}" method="POST">


        @csrf
        @method('PUT')

        <div class="mb-3 mt-3">
          <label for="nama" class="form-label">nama barang</label>
          <input type="text" class="form-control" id="nama_barang" placeholder="Enter " name="nama_barang" value="{{ old('nama_barang',$qurey->nama_barang) }}">
        </div>

        <div class="mb-3">
            <label for="nama_merek" class="form-label">nama panggilan</label>
            <input type="text" class="form-control" id="nama_merek" placeholder="Enter " name="nama_merek" value="{{ old('nama_merek',$qurey->nama_merek) }}">
          </div>

        <div class="mb-3">
          <label for="harga" class="form-label">harga</label>
          <input type="text" class="form-control" id="harga" placeholder="Enter " name="harga" value="{{ old('harga',$qurey->harga) }}">
        </div>

       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>





</div>
</div> 
</div>
@endsection