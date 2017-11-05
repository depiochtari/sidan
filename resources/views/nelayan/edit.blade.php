@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data Nelayan</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('nelayan/'.$nelayan->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                         <div class="form-group{{ $errors->has('kn') ? ' has-error' : '' }}">
                            <label for="kn" class="col-md-4 control-label">KN</label>
                            <div class="col-md-6">
                                <input id="kn" type="text" class="form-control" name="kn" value="{{ $nelayan->kn }}">
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
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ $nelayan->nama }}">
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
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ $nelayan->alamat }}">
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
                                <input id="status" type="text" class="form-control" name="status" value="{{ $nelayan->status }}">
                                @if ($errors->has('status'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nik') ? ' has-error' : '' }}">
                            <label for="nik" class="col-md-4 control-label">NIK</label>
                            <div class="col-md-6">
                                <input id="nik" type="text" class="form-control" name="nik" value="{{ $nelayan->nik }}">
                                @if ($errors->has('nik'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('nik') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kecamatan') ? ' has-error' : '' }}">
                            <label for="kecamatan" class="col-md-4 control-label">Kecamatan</label>
                            <div class="col-md-6">
                                <input id="kecamatan" type="text" class="form-control" name="kecamatan" value="{{ $nelayan->kecamatan }}">
                                @if ($errors->has('kecamatan'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('kecamatan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('desa') ? ' has-error' : '' }}">
                            <label for="desa" class="col-md-4 control-label">Desa</label>
                            <div class="col-md-6">
                                <input id="desa" type="text" class="form-control" name="desa" value="{{ $nelayan->desa }}">
                                @if ($errors->has('desa'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('desa') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tahun') ? ' has-error' : '' }}">
                            <label for="tahun" class="col-md-4 control-label">Tahun</label>
                            <div class="col-md-6">
                                <input id="tahun" type="text" class="form-control" name="tahun" value="{{ $nelayan->tahun }}">
                                @if ($errors->has('tahun'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('tahun') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-refresh"></i> Update
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
