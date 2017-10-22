@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Ahli Waris</div>
                <div class="panel-body">
                    <table id="datatable" class="table table-condensed">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Nama Ahli Waris</td>
                                <td>NIK</td>
                                <td>Alamat</td>
                                <td>Status Hubungan</td>
                                <td>HP</td>
                                <td>BANK</td>
                                <td>No Rekening</td>
                                <td>Edit</td>
                                <td>Hapus</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataahli_waris as $ahli_waris)
                                <tr>
                                    <td>{{ $ahli_waris->id }}</td>
                                    <td>{{ $ahli_waris->nama }}</td>
                                    <td>{{ $ahli_waris->nik }}</td>
                                    <td>{{ $ahli_waris->alamat }}</td>
                                    <td>{{ $ahli_waris->status }}</td>
                                    <td>{{ $ahli_waris->hp }}</td>
                                    <td>{{ $ahli_waris->bank }}</td>
                                    <td>{{ $ahli_waris->norek }}</td>
                                    <td><a href="{{ url('ahli-waris/'.$ahli_waris->id.'/edit') }}">Edit</a></td>
                                    <td>
                                        <form action="{{ url('ahli-waris/'.$ahli_waris->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
