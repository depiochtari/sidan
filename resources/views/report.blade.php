<body>
<table width="100%" border="0">
  <tr>
    <td width="10%" height="176"><img src="{{ url('images/logo.png') }}" width="100" height="100" /></td>
    <td width="80%">
              <center><p>SISTEM INFORMASI DATA ASURANSI NELAYAN</p>
              			<p>DINAS KELAUTAN DAN PERIKANAN</p>
                         <p> KABUPATEN KEBUMEN</p>
                         <p> Jalan Arungbinang No.21 Kebumen</p></center>
    </td>
    <td width="10%"><img src="{{ url('images/ikan.png') }}" width="100" height="100" /></td>
  </tr>
</table>
</body>
</html>
<table id="datatable" class="table table-condensed">
 <tr>
     <td>ID</td>
     <td>KN</td>
     <td>Nama</td>
     <td>Alamat</td>
     <td>Status</td>
     <td>KUB</td>
     <td>HP</td>
     <td>BANK</td>
     <td>No Rekening</td>
     <td>Nama Ahli Waris</td>
     <td>Nama Suami</td>
     <td>NIK</td>
     <td>Alamat</td>
     <td>Status Hubungan</td>
   @foreach($datanelayan as $nelayan, $dataahli_waris as $ahli_waris)
 <tr>
     <td>{{ $nelayan->id }}</td>
     <td>{{ $nelayan->kn }}</td>
     <td>{{ $nelayan->nama }}</td>
     <td>{{ $nelayan->alamat }}</td>
     <td>{{ $nelayan->status }}</td>
     <td>{{ $nelayan->kub }}</td>
     <td>{{ $nelayan->hp }}</td>
     <td>{{ $nelayan->bank }}</td>
     <td>{{ $nelayan->norek }}</td>
     <td>{{ $ahli_waris->nama }}</td>
     <td>{{ $ahli_waris->suami }}</td>
     <td>{{ $ahli_waris->nik }}</td>
     <td>{{ $ahli_waris->alamat }}</td>
     <td>{{ $ahli_waris->status }}</td>
 </tr>
</table>