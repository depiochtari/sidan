@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row" >
        <div class="col-md-8 col-md-offset-2">
            <table>
                <tr>
                    <td width="10%" height="176"><img src="{{ url('images/logo.png') }}" width="100" height="100" /></td>
                    <td width="80%">
                    <center><p>PEMERINTAH KABUPATEN KEBUMEN</p>
                        <p>DINAS KELAUTAN DAN PERIKANAN KEBUMEN</p>
                        <p>Alamat: Jl. arungbinang No.21 Kebumen. Telp/Fax : 0287-381245 0287-381245</p>
                        <p>Email : dinlutkan.kebumen@gmail.com</p>
                        <p>KEBUMEN 54311</p></center>
                    </td>
                    <td width="10%"><img src="{{ url('images/ikan.png') }}" width="100" height="100" /></td>
                </tr>
            </table>
            <table id="datatable" class="table table-condensed">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nama Ahli Waris</td>
                        <td>NIK</td>
                        <td>Alamat</td>
                        <td>Status Hubungan</td>
                        <td>KN</td>
                        <td>Nama</td>
                        <td>Alamat</td>
                        <td>Status</td>
                        <td>Nik</td>
                        <td>Kecamatan</td>
                        <td>Desa</td>
                        <td>Tahun</td>
                        <td><Edit</td>
                        <td><Hapus</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_waris as $ahli_waris)
                        <tr>
                            <td>{{ $ahli_waris->id }}</td>
                            <td>{{ $ahli_waris->nama }}</td>
                            <td>{{ $ahli_waris->nik }}</td>
                            <td>{{ $ahli_waris->alamat }}</td>
                            <td>{{ $ahli_waris->status }}</td>
                            <td>{{ $ahli_waris->nelayan->kn }}</td>
                            <td>{{ $ahli_waris->nelayan->nama }}</td>
                            <td>{{ $ahli_waris->nelayan->alamat }}</td>
                            <td>{{ $ahli_waris->nelayan->status }}</td>
                            <td>{{ $ahli_waris->nelayan->nik }}</td>
                            <td>{{ $ahli_waris->nelayan->kecamatan }}</td>
                            <td>{{ $ahli_waris->nelayan->desa }}</td>
                            <td>{{ $ahli_waris->nelayan->tahun }}</td>
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
