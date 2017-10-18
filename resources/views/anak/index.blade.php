@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Anak</div>
                <div class="panel-body">
                   <table id="datatable" class="table table-condensed">
                        <tr>
                            <td>ID</td>
                            <td>Nama</td>
                            <td>Umur</td>
                            <td>Alamat</td>
                            <td>Saudara Kandung</td>
                            <td>Nama Ayah</td>
                            <td>Nama Ibu</td>
                            <td>Pendidikan</td>
                            <td>Edit</td>
                            <td>Hapus</td>
                        </tr>
                        @foreach($dataanak as $anak)
                        <tr>
                            <td>{{ $anak->id }}</td>
                            <td>{{ $anak->nama }}</td>
                            <td>{{ $anak->umur }}</td>
                            <td>{{ $anak->alamat }}</td>
                            <td>{{ $anak->saudara }}</td>
                            <td>{{ $anak->ayah }}</td>
                            <td>{{ $anak->ibu }}</td>
                            <td>{{ $anak->pendidikan }}</td>
                            <td><a href="{{ url('anak/'.$anak->id.'/edit') }}">Edit</a></td>
                            <td>
                                <form action="{{ url('anak/'.$anak->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
