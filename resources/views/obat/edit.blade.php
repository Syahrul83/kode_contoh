@extends('temple.master')
@section('content')


<div class="container">
<div class="row">
<div class="col-md-12">
    <form action="{{ route("obat.update",$qurey->id) }}" method="POST">


        @csrf
        @method('PUT')

        <div class="mb-3 mt-3">
          <label for="nama" class="form-label">nama obat</label>
          <input type="text" class="form-control" id="nama_obat" placeholder="Enter " name="nama_obat"value="{{ old('nama_obat',$qurey->nama_obat) }}">
        </div>

        <div class="mb-3">
            <label for="nama_kontak" class="form-label">merek</label>
            <input type="text" class="form-control" id="merek" placeholder="Enter " name="merek" value="{{ old('merek',$qurey->merek) }}">
          </div>

        <div class="mb-3">
          <label for="alamat" class="form-label">supplayer</label>
          <input type="text" class="form-control" id="alamat" placeholder="Enter " name="supplayer" value="{{ old('supplayer',$qurey->supplayer) }}">
        </div>

        <div class="mb-3">
            <label for="kota" class="form-label">jumlah </label>
            <input type="number" class="form-control" id="kota" placeholder="Enter " name="jumlah" value="{{ old('jumlah',$qurey->jumlah) }}">
        </div>
        <div class="mb-3">
            <label for="kode_pos" class="form-label">TGL EXP</label>
            <input type="date" class="form-control" id="kode_pos" placeholder="Enter  " name="tanggal_exp" value="{{ old('tanggal_exp',$qurey->tanggal_exp) }}">
          </div>
          
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>





</div>
</div> 
</div>
@endsection