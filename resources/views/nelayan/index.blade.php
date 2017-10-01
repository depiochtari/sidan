@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Nelayan</div>
                <div class="panel-body">
                    <table class="table table-condensed">
                        <th>
                            <td>ID</td>
                            <td>Nama</td>
                            <td>Alamat</td>
                            <td>Detail</td>
                            <td>Edit</td>
                            <td>Hapus</td>
                        </th>
                        @foreach($datanelayan as $nelayan)
                        <tr>
                            <td>{{ $nelayan->id }}</td>
                            <td>{{ $nelayan->nama }}</td>
                            <td>{{ $nelayan->alamat }}</td>
                            <td><a href="{{ url('nelayan/'.$nelayan->id) }}">Detail</a></td>
                            <td><a href="{{ url('nelayan/'.$nelayan->id.'/edit') }}">Edit</a></td>
                            <td><a href="{{ url('nelayan/'.$nelayan->id) }}">Hapus</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
