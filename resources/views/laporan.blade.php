<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="0">
  <tr>
    <td width="10%" height="176"><img src="file:///C|/Users/userr/Downloads/logo-kebumen.png" width="100" height="100" /></td>
    <td width="80%"><blockquote>
      <blockquote>
        <blockquote>
          <blockquote>
            <blockquote>
              <p>SISTEM INFORMASI DINAS KELAUTAN DAN ERIKANAN</p>
              <blockquote>
                     <blockquote>
                       <blockquote>
                         <p> KABUPATEN KEBUMEN</p>
                       </blockquote>
                     </blockquote>
              </blockquote>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote></td>
    <td width="10%"><img src="file:///C|/Users/userr/Downloads/school-learn-study-hat-graduate-256.png" width="100" height="100" /></td>
  </tr>
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
                            <td>Edit</td>
                            <td>Hapus</td>
                        </tr>
                        @foreach($datanelayan as $nelayan)
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
                            <td><a href="{{ url('nelayan/'.$nelayan->id.'/edit') }}">Edit</a></td>
                            <td><a href="{{ url('nelayan/'.$nelayan->id) }}">Hapus</a></td>
                        </tr>
                        @endforeach
</table>
</body>
</html>
