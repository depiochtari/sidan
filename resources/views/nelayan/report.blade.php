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
                        <td>Nama Suami</td>
                        <td>NIK</td>
                        <td>Alamat</td>
                        <td>Status Hubungan</td>
                        <td>HP</td>
                        <td>BANK</td>
                        <td>No Rekening</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datanelayan as $nelayan)
                        <tr>
                            <td>{{ $ahli_waris->id }}</td>
                            <td>{{ $nelayan->kn }}</td>
                            <td>{{ $nelayan->nama }}</td>
                            <td>{{ $nelayan->alamat }}</td>
                            <td>{{ $nelayan->status }}</td>
                            <td>{{ $nelayan->nik }}</td>
                            <td>{{ $nelayan->kecamatan }}</td>
                            <td>{{ $nelayan->desa }}</td>
                            <td>{{ $nelayan->tahun }}</td>
                            <td>{{ $nelayan->ahliwaris->nama }}</td>
                            <td>{{ $nelayan->ahliwaris->suami }}</td>
                            <td>{{ $nelayan->ahliwaris->nik }}</td>
                            <td>{{ $nelayan->ahliwaris->alamat }}</td>
                            <td>{{ $nelayan->ahliwaris->status }}</td>
                            <td>{{ $nelayan->ahliwaris->hp }}</td>
                            <td>{{ $nelayan->ahliwaris->bank }}</td>
                            <td>{{ $nelayan->ahliwaris->norek }}</td>
                            <td><a href="{{ url('ahli-waris/'.$ahli_waris->id.'/edit') }}">Edit</a></td>
                            <td>
                                <form action="{{ url('ahli-waris/'.$ahli_waris->id) }}" method="POST">
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
