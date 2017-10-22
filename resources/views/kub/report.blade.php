@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table>
                <tr>
                    <td width="10%" height="176"><img src="{{ url('images/logo.png') }}" width="100" height="100" /></td>
                    <td width="80%">
                    <center><p>SISTEM INFORMASI DATA ASURANSI NELAYAN</p>
                        <p>DINAS KELAUTAN DAN PERIKANAN</p>
                        <p>KABUPATEN KEBUMEN</p>
                        <p>Jalan Arungbinang No.21 Kebumen</p></center>
                    </td>
                    <td width="10%"><img src="{{ url('images/ikan.png') }}" width="100" height="100" /></td>
                </tr>
            </table>
            <table id="datatable" class="table table-condensed">
                <thead>
                    <th>
                        <td>ID</td>
                        <td>Nama</td>
                        <td>Nama Nelayan</td>
                        <td>Alamat</td>
                        <td>KN</td>
                        <td>Nama</td>
                        <td>Alamat</td>
                        <td>Status</td>
                        <td>Nik</td>
                        <td>Kecamatan</td>
                        <td>Desa</td>
                        <td>Tahun</td>
                    </th>
                </thead>
                <tbody>
                    @foreach($data_kub as $kub)
                        <tr>
                            <td>{{ $kub->id }}</td>
                            <td>{{ $kub->nama }}</td>
                            <td>{{ $kub->nelayan }}</td>
                            <td>{{ $kub->alamat}}</td>
                            <td>{{ $kub->nelayan->kn }}</td>
                            <td>{{ $kub->nelayan->nama }}</td>
                            <td>{{ $kub->nelayan->alamat }}</td>
                            <td>{{ $kub->nelayan->status }}</td>
                            <td>{{ $kub->nelayan->nik }}</td>
                            <td>{{ $kub->nelayan->kecamatan }}</td>
                            <td>{{ $kub->nelayan->desa }}</td>
                            <td>{{ $kub->nelayan->tahun }}</td>
                            <td><Edit</td>
                            <td><Hapus</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
