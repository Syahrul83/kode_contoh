@extends('temple.master')
@section('content')

    <div class="container">
        <div class="row">

        </div>
        <div class="row">
            <div class="col-md-1">
                <a href="#" class="btn btn-primary mb-3">tambah</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>nama </th>
                            <th>nip</th>
                            <th>tgl_lahir</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Agustina </td>
                            <td>12345</td>
                            <td>1985-06-02</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary">EDIT</button>
                                <button type="button" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection