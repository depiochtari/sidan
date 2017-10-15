@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Ahli Waris</div>
                <div class="panel-body">
                    <table class="table table-condensed">
                        <tr>
                            <td>ID</td>
                            <td>Nama Ahli Waris</td>
                            <td>Nama Suami</td>
                            <td>NIK</td>
                            <td>Alamat</td>
                            <td>Status Hubungan</td>
                            <td>HP</td>
                            <td>BANK</td>
                            <td>No Rekening</td>
                            <td>Edit</td>
                            <td>Hapus</td>
                        </tr>
                        @foreach($dataahli_waris as $ahli_waris)
                        <tr>
                            <td>{{ $ahli_waris->id }}</td>
                            <td>{{ $ahli_waris->nama }}</td>
                            <td>{{ $ahli_waris->suami }}</td>
                            <td>{{ $ahli_waris->nik }}</td>
                            <td>{{ $ahli_waris->alamat }}</td>
                            <td>{{ $ahli_waris->status }}</td>
                            <td>{{ $ahli_waris->hp }}</td>
                            <td>{{ $ahli_waris->bank }}</td>
                            <td>{{ $ahli_waris->norek }}</td>
                            <td><a href="{{ url('ahli-waris/'.$ahli_waris->id.'/edit') }}">Edit</a></td>
                            <td><a href="{{ url('ahli-waris/'.$ahli_waris->id) }}">Hapus</a></td>
                        </tr>

                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
