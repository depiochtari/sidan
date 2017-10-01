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

                         <div class="form-group{{ $errors->has('kn') ? ' has-error' : '' }}">
                            <label for="kn" class="col-md-4 control-label">KN</label>
                            <div class="col-md-6">
                                <input id="kn" type="text" class="form-control" name="kn" value="{{ old('kn') }}">
                                @if ($errors->has('kn'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('kn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                                @if ($errors->has('nama'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>
                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}">
                                @if ($errors->has('alamat'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">Status</label>
                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control" name="status" value="{{ old('status') }}">
                                @if ($errors->has('status'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kub') ? ' has-error' : '' }}">
                            <label for="kub" class="col-md-4 control-label">KUB</label>
                            <div class="col-md-6">
                                <input id="kub" type="text" class="form-control" name="kub" value="{{ old('kub') }}">
                                @if ($errors->has('kub'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('kub') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('hp') ? ' has-error' : '' }}">
                            <label for="hp" class="col-md-4 control-label">HP</label>
                            <div class="col-md-6">
                                <input id="hp" type="text" class="form-control" name="hp" value="{{ old('hp') }}">
                                @if ($errors->has('hp'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('hp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-save"></i> Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
