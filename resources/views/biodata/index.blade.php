@extends('temple.master')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-5">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <strong>Success!</strong> {{ session()->get('message') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <a href="{{ route('biodata.create') }}" class="btn btn-primary mb-3">tambah</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>nama</th>
                            <th>umur</th>
                            <th>alamat</th>
                            <th>image</th>
                            <th>aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration + $data->firstItem() - 1 }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->umur }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td><img src="{{  asset($item->image) }}" alt="gambar" width="100px"></td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('biodata.destroy', $item->id) }}" method="POST">
                                        <a href="{{ route('biodata.edit', $item->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
@endsection