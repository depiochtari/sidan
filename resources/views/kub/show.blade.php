@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="tabel table-stripped">
                <tr>
                    <td width="10%" height="176"><img src="{{ url('images/logo.png') }}" width="100" height="100" /></td>
                    <td width="80%">
                    <center><p>SISTEM INFORMASI ASURANSI NELAYAN</p>
                        <p>DINAS KELAUTAN DAN PERIKANAN</p>
                        <p>KABUPATEN KEBUMEN</p>
                        <p>Jalan Arungbinang No.21 Kebumen</p></center>
                    </td>
                    <td width="10%"><img src="{{ url('images/ikan.png') }}" width="100" height="100" /></td>
                </tr>
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
            </table>
            <hr>
            <p>Data Anggota KUB {{ $kub->nama }} dengan jumlah total {{ count($kub->nelayan) }}</p>
            <table class="table table-stripped">
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
                        <td class="hidden-print">Edit</td>
                        <td class="hidden-print">Hapus</td>
                    </tr>
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
                            <td class="hidden-print"><a href="{{ url('nelayan/'.$nelayan->id.'/edit') }}">Edit</a></td>
                            <td class="hidden-print">
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
