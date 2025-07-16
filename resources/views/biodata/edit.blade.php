@extends('temple.master')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route("biodata.update", $data->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="mb-3 mt-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Enter name" name="nama"
                            value="{{ old('nama', $data->nama) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" class="form-control" id="umur" placeholder="Enter umur" name="umur"
                            value="{{ old('umur', $data->umur) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Enter alamat" name="alamat"
                            value="{{ old('alamat', $data->alamat) }}">
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