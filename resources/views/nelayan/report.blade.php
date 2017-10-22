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
                        <td>HP</td>
                        <td>Nama Kub</td>
                        <td>Alamat</td>
                    </th>
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
                            <td>{{ $nelayan->ahli_waris->nama }}</td>
                            <td>{{ $nelayan->ahli_waris->nik }}</td>
                            <td>{{ $nelayan->ahli_waris->alamat }}</td>
                            <td>{{ $nelayan->ahli_waris->status }}</td>
                            <td>{{ $nelayan->ahli_waris->hp }}</td>
                            <td>{{ $nelayan->kub->nama }}</td>
                            <td>{{ $nelayan->kub->alamat }}</td>
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
