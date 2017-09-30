@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Data Nelayan</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/nelayan') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama</label>

<<<<<<< HEAD
                             <label for="alamat" class="col-md-4 control-label">Alamat</label>

=======
>>>>>>> 6a1e6d097f45b9252ffc64db45396c35cef66340
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}">
<<<<<<< HEAD


                                 @if ($errors->has('nama'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('nama') }}</strong>
=======
                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
>>>>>>> 6a1e6d097f45b9252ffc64db45396c35cef66340
                                    </span>
                                @endif

                                @if ($errors->has('alamat'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div 
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-save"></i> Simpan
                                </button>
                            </div>
                        </div>
                </div>
            </div>
<<<<<<< HEAD
@endsection
=======
        </div>
    </div>
</div>
@endsection
>>>>>>> 6a1e6d097f45b9252ffc64db45396c35cef66340
