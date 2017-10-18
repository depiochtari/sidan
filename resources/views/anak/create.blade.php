@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Data Anak</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/anak') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}">

                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('umur') ? ' has-error' : '' }}">
                            <label for="umur" class="col-md-4 control-label">Umur</label>

                            <div class="col-md-6">
                                <input id="umur" type="text" class="form-control" name="umur" value="{{ old('umur') }}">

                                @if ($errors->has('umur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('umur') }}</strong>
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

                        <div class="form-group{{ $errors->has('saudara') ? ' has-error' : '' }}">
                            <label for="saudara" class="col-md-4 control-label">Saudara Kandung</label>

                            <div class="col-md-6">
                                <input id="saudara" type="text" class="form-control" name="saudara" value="{{ old('saudara') }}">

                                @if ($errors->has('saudara'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('saudara') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ayah') ? ' has-error' : '' }}">
                            <label for="ayah" class="col-md-4 control-label">Nama Ayah</label>

                            <div class="col-md-6">
                                <input id="ayah" type="text" class="form-control" name="ayah" value="{{ old('ayah') }}">

                                @if ($errors->has('ayah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ayah') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ibu') ? ' has-error' : '' }}">
                            <label for="ibu" class="col-md-4 control-label">Nama Ibu</label>

                            <div class="col-md-6">
                                <input id="ibu" type="text" class="form-control" name="ibu" value="{{ old('ibu') }}">

                                @if ($errors->has('ibu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ibu') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pendidikan') ? ' has-error' : '' }}">
                            <label for="pendidikan" class="col-md-4 control-label">Pendidikan</label>

                            <div class="col-md-6">
                                <input id="pendidikan" type="text" class="form-control" name="pendidikan" value="{{ old('pendidikan') }}">

                                @if ($errors->has('pendidikan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pendidikan') }}</strong>
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
