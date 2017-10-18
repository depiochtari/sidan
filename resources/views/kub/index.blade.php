@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">KUB</div>
                <div class="panel-body">
                    <table class="table table-condensed">
                        <tr>
                            <td>ID</td>
                            <td>Nama</td>
                            <td>Nama Nelayan</td>
                            <td>Edit</td>
                            <td>Hapus</td>
                        </tr>
                        @foreach($datakub as $kub)
                        <tr>
                            <td>{{ $kub->id }}</td>
                            <td>{{ $kub->nama }}</td>
                            <td>{{ $kub->nelayan }}</td>
                            <td><a href="{{ url('kub/'.$kub->id.'/edit') }}">Edit</a></td>
                            <td>
                                <form action="{{ url('kub/'.$kub->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                </div>
            </div>
        </div
    </div>
</div>
@endsection
