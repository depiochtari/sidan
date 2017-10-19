 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sidan |Sistem Informasi Data Asuransi Nelayan</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/responsive.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/responsive.jqueryui.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/responsive.dataTables.min.css') }}">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Sidan
                </a>
            </div>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="0">
  <tr>
    <td width="10%" height="176"><img src="{{ url('images/logo.png') }}" width="100" height="100" /></td>
    <td width="80%">
              <center><p>SISTEM INFORMASI DINAS KELAUTAN DAN PERIKANAN</p>
                         <p> KABUPATEN KEBUMEN</p>
                         <p> Jalan Arungbinang No.21 Kebumen</p></center>
    </td>
    <td width="10%"><img src="{{ url('images/ikan.png') }}" width="100" height="100" /></td>
  </tr>
</table>
</body>
</html>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
{{--                <ul class="nav navbar-nav">
                </ul> --}}

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nelayan <span class="caret"></span></a>
                      <ul class="dropdown-menu">
					    <li><a href="{{ url('/nelayan') }}">Nelayan</a></li>
					    <li><a href="{{ url('/nelayan/create') }}">Tambah Nelayan</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ahli Waris <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ url('/ahli-waris') }}">Ahli Waris</a></li>
                        <li><a href="{{ url('/ahli-waris/create') }}">Tambah Ahli Waris</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kub <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ url('/kub') }}">KUB</a></li>
                        <li><a href="{{ url('/kub/create') }}">Tambah KUB</a></li>
                      </ul>
                    </li>
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/datatables.min.js') }}"></script>
    <script src="{{ url('js/responsive.jqueryui.min.js') }}"></script>
    <script src="{{ url('js/responsive.bootstrap.min.js') }}"></script>
    <script src="{{ url('js/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#datatable').DataTable();
        } );
    </script>
</body>
</html>
