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
                    <tr>
                        <td>ID</td>
                        <td>KN</td>
                        <td>Nama</td>
                        <td>Alamat</td>
                        <td>Status</td>
                        <td>Nik</td>
                        <td>Kecamatan</td>
                        <td>Desa</td>
                        <td>Tahun</td>
                        <td>Nama Ahli Waris</td>
                        <td>NIK</td>
                        <td>Alamat</td>
                        <td>Status Hubungan</td>
                        <td>Nomor HP</td>
                        <td>Nama Kub</td>
                        <td>Alamat</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datanelayan as $nelayan)
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
                            <td>{{ $nelayan->ahliwaris->nama }}</td>
                            <td>{{ $nelayan->ahliwaris->nik }}</td>
                            <td>{{ $nelayan->ahliwaris->alamat }}</td>
                            <td>{{ $nelayan->ahliwaris->status }}</td>
                            <td>{{ $nelayan->ahliwaris->hp }}</td>
                            <td>{{ $nelayan->kub->nama }}</td>
                            <td>{{ $nelayan->kub->alamat }}</td>
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
