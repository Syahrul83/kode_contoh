@extends('temple.master')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- menampilkan error input-->
                @if ($errors->any())
                    <div class="alert alert-danger md-3">
                        <strong>Whoops!</strong> Input anda anda yang salah<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form action="{{ route("user.update", $data->id) }}" method="POST">


                    @csrf
                    @method('PUT')

                    <div class="mb-3 mt-3">
                        <label for="nama" class="form-label">nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Enter " name="name"
                            value="{{ old('name', $data->name) }}">
                    </div>

                    <div class="mb-3">
                        <label for="nip" class="form-label">email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter " name="email"
                            value="{{ old('email', $data->email) }}">
                    </div>

                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter " name="password">
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>





            </div>
        </div>
    </div>
@endsection