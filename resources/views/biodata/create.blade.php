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
                <form action="{{ route("biodata.store") }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3 mt-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter nama" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" class="form-control" id="umur" placeholder="Enter umur" name="umur" required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Enter alamat" name="alamat">
                    </div>

                    <div class="mb-3">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" accept="image/*" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection