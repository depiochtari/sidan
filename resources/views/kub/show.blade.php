@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="tabel table-stripped">
                <tbody>
                    <tr>
                        <td width="10%">Nama KUB</td>
                        <td width="1%">:</td>
                        <td>{{ $kub->nama }}</td>
                    </tr>
                    <tr>
                        <td>Alamat KUB</td>
                        <td>:</td>
                        <td>{{ $kub->alamat }}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <p>Data Anggota KUB {{ $kub->nama }} dengan jumlah total {{ count($kub->nelayan) }}</p>
            <table class="table table-stripped">
                <thead>
                    <th>
                        <td>ID</td>
                        <td>KN</td>
                        <td>Nama</td>
                        <td>Alamat</td>
                        <td>Status</td>
                        <td>Nik</td>
                        <td>Kecamatan</td>
                        <td>Desa</td>
                        <td>Tahun</td>
                        <td>Edit</td>
                        <td>Hapus</td>
                    </th>
                </thead>
                <tbody>
                    @foreach($kub->nelayan as $nelayan)
                        <tr>
                            <td>{{ $nelayan->id }}</td>
                            <td>{{ $nelayan->kn }}</td>
                            <td>{{ $nelayan->nama }}</td>
                            <td>{{ $nelayan->alamat }}</td>
                            <td>{{ $nelayan->status }}</td>
                            <td>{{ $nelayan->nik }}</td>
                            <td>{{ $nelayan->kecamatan }}</td>
                            <td>{{ $nelayan->desa }}</td>
                            <td>{{ $nelayan->tahun }}</td>
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
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
