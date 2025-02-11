@extends('temple.master')
@section('content')


<div class="container">
<div class="row">
<div class="col-md-12">
    <form action="{{ route("kariyawan.store") }}" method="POST">


        @csrf

        <div class="mb-3 mt-3">
          <label for="nama" class="form-label">nama</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name" name="nama">
        </div>

        <div class="mb-3">
            <label for="nip" class="form-label">nip</label>
            <input type="number" class="form-control" id="nip" placeholder="Enter your nip" name="nip">
          </div>

        <div class="mb-3">
          <label for="tgl_lahir" class="form-label">tgl lahir</label>
          <input type="date" class="form-control" id="tgl_lahir" placeholder="Enter " name="tgl_lahir">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>





</div>
</div> 
</div>
@endsection