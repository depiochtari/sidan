@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
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
                        <td>Nama Kub</td>
                        <td>Alamat</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datanelayan as $nelayan)
                        <tr>
                            <td>{{ $n++ }}</td>
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
                            <td>{{ $nelayan->kub->nama }}</td>
                            <td>{{ $nelayan->kub->alamat }}</td>
                            <td><Edit</td>
                            <td><Hapus</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
<tr><td> <width="53%" ></td>
<td width="53%" ><div class="ji" align='right'>Kepala Dinas Kelautan dan Perikanan</div>
<div class="ji" align='right'>Kabupaten Kebumen</div><br></br>
<div class="ji" align='right'<b><u>Drs. H. La Ode Haslan</div></b></u>
<div class="ji" align='right'>NIP. 19621231 199003 1 214</div>
</td>
</tr>
        </div>
    </div>
</div>
@endsection
