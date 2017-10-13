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
                            <td>BANK</td>
                            <td>No Rekening</td>
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
                            <td>{{ $nelayan->bank }}</td>
                            <td>{{ $nelayan->norek }}</td>
                            <td><a href="{{ url('nelayan/'.$nelayan->id.'/edit') }}">Edit</a></td>
                            <td>
                                <form action="{{ url('nelayan/'.$nelayan->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
