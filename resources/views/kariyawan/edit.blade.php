@extends('temple.master')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route("kariyawan.update", $qurey->id) }}" method="POST" enctype="multipart/form-data">


                    @csrf
                    @method('PUT')

                    <div class="mb-3 mt-3">
                        <label for="nama" class="form-label">nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Enter " name="nama"
                            value="{{ old('nama', $qurey->nama) }}">
                    </div>

                    <div class="mb-3">
                        <label for="nip" class="form-label">nip</label>
                        <input type="number" class="form-control" id="nip" placeholder="Enter " name="nip"
                            value="{{ old('nip', $qurey->nip) }}">
                    </div>

                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">tgl_lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" placeholder="Enter " name="tgl_lahir"
                            value="{{ old('tgl_lahir', $qurey->tgl_lahir) }}">
                    </div>

                    <div class="mb-3">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" accept="image/*" id="image" placeholder="image"
                            name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>





            </div>
        </div>
    </div>
@endsection
