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
            <a href="{{ route('supplayer.create') }}" class="btn btn-primary mb-3">tambah</a>
        </div>
    </div>
<div class="row">
    <div class="col-md-12">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>no</th>
          <th>nama </th>
          <th>alamat</th>
          <th>bidang</th>
          <th>id supplayer</th>
          <th>aksi</th>
       
        </tr>
      </thead>
      <tbody>
      @foreach ( $qurey as $item)
        {{-- 2451241404105122550821052452585462581212051114--}}
      <tr>
        <td>{{ $loop->iteration +$qurey->firstItem()-1 }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->alamat }}</td>
        <td>{{ $item->bidang }}</td>
        <td>{{ $item->id_supplayer }}</td>
                                     

        <td>  <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('supplayer.destroy', $item->id) }}" method="POST">
          <a href="{{ route('supplayer.edit', $item->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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