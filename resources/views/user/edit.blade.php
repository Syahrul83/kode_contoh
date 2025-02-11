@extends('temple.master')
@section('content')


<div class="container">
<div class="row">
<div class="col-md-12">
    <form action="{{ route("user.update",$qurey->id) }}" method="POST">


        @csrf
        @method('PUT')

        <div class="mb-3 mt-3">
          <label for="nama" class="form-label">nama</label>
          <input type="text" class="form-control" id="nama" placeholder="Enter " name="name" value="{{ old('name',$qurey->name) }}">
        </div>

        <div class="mb-3">
            <label for="nip" class="form-label">email</label>
            <input type="email" class="form-control" id="nip" placeholder="Enter " name="email" value="{{ old('email',$qurey->email) }}">
          </div>

        <div class="mb-3">
          <label for="tgl_lahir" class="form-label">password</label>
          <input type="password" class="form-control" id="tgl_lahir" placeholder="Enter " name="password" >
        </div>

       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>





</div>
</div> 
</div>
@endsection