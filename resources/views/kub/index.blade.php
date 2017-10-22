@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">KUB</div>
                <div class="panel-body">
                    <table id="datatable" class="table table-condensed">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Nama</td>
                                <td>Alamat</td>
                                <td>Edit</td>
                                <td>Hapus</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datakub as $kub)
                                <tr>
                                    <td>{{ $kub->id }}</td>
                                    <td><a href="{{ url('kub/'.$kub->id) }}">{{ $kub->nama }}</a></td>
                                    <td>{{ $kub->alamat }}</td>
                                    <td><a href="{{ url('kub/'.$kub->id.'/edit') }}">Edit</a></td>
                                    <td>
                                        <form action="{{ url('kub/'.$kub->id) }}" method="POST">
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
        </div
    </div>
</div>
@endsection
