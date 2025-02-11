
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
            <a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3">tambah</a>
        </div>
    </div>
<div class="row">
    <div class="col-md-12">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>no</th>
          <th>nama konsumen</th>
          <th>nama kontak</th>
          <th>alamat</th>
          <th>kota</th>
          <th>kode pos</th>
          <th>negara</th>
          <th>status</th>
          <th>aksi</th>
        </tr>
      </thead>
      <tbody>
      @foreach ( $qurey as $item)
        {{-- 2451241404105122550821052452585462581212051114--}}
      <tr>
        <td>{{ $loop->iteration +$qurey->firstItem()-1 }}</td>
        <td>{{ $item->nama_konsumen }}</td>
        <td>{{ $item->nama_kontak }}</td>
        <td>{{ $item->alamat }}</td>
        <td>{{ $item->kota }}</td>
        <td>{{ $item->kode_pos }}</td>
        <td>{{ $item->negara }}</td>
        <td>{{ $item->status }}</td>
        <td>  <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pelanggan.destroy', $item->id) }}" method="POST">
          <a href="{{ route('pelanggan.edit', $item->id) }}" class="btn btn-sm btn-primary">EDIT</a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
      </form></td>
      </tr>
      @endforeach  
        
      </tbody>
    </table>
    {{ $qurey->links() }}
  </div>
 </div>
</div>
@endsection