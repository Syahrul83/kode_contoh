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


                <form action="{{ route("user.store") }}" method="POST">


                    @csrf

                    <div class="mb-3 mt-3">
                        <label for="nama" class="form-label">nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="bidang" class="form-label">password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your  password"
                            name="password" required>
                    </div>



                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>





            </div>
        </div>
    </div>
@endsection
