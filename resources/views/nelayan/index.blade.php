@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Nelayan</div>
                <div class="panel-body">
                    <table class="table table-condensed">
                        <tr>
                            <td>ID</td>
                            <td>KN</td>
                            <td>Nama</td>
                            <td>Alamat</td>
                            <td>Status</td>
                            <td>KUB</td>
                            <td>HP</td>
                            <td>Edit</td>
                            <td>Hapus</td>
                        </tr>
                        @foreach($datanelayan as $nelayan)
                        <tr>
                            <td>{{ $nelayan->id }}</td>
                            <td>{{ $nelayan->kn }}</td>
                            <td>{{ $nelayan->nama }}</td>
                            <td>{{ $nelayan->alamat }}</td>
                            <td>{{ $nelayan->status }}</td>
                            <td>{{ $nelayan->kub }}</td>
                            <td>{{ $nelayan->hp }}</td>
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
