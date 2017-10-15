@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data Ahli Waris</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('ahli-waris/'. $ahli-waris->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama Ahli Waris</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ $ahli-waris->nama }}">

                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('suami') ? ' has-error' : '' }}">
                            <label for="suami" class="col-md-4 control-label">Nama Suami</label>

                            <div class="col-md-6">
                                <input id="suami" type="text" class="form-control" name="suami" value="{{ $ahli-waris->suami }}">

                                @if ($errors->has('suami'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('suami') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nik') ? ' has-error' : '' }}">
                            <label for="nik" class="col-md-4 control-label">NIK</label>

                            <div class="col-md-6">
                                <input id="nik" type="text" class="form-control" name="nik" value="{{ $ahli-waris->nik }}">

                                @if ($errors->has('nik'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nik') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ $ahli-waris->alamat }}">

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">Status Hubungan</label>

                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control" name="status" value="{{ $ahli-waris->status }}">

                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('hp') ? ' has-error' : '' }}">
                            <label for="hp" class="col-md-4 control-label">HP</label>

                            <div class="col-md-6">
                                <input id="hp" type="text" class="form-control" name="hp" value="{{ $ahli-waris->hp }}">

                                @if ($errors->has('hp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bank') ? ' has-error' : '' }}">
                            <label for="bank" class="col-md-4 control-label">BANK</label>

                            <div class="col-md-6">
                                <input id="bank" type="text" class="form-control" name="bank" value="{{ $ahli-waris->bank }}">

                                @if ($errors->has('bank'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bank') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('norek') ? ' has-error' : '' }}">
                            <label for="norek" class="col-md-4 control-label">No Rekening</label>

                            <div class="col-md-6">
                                <input id="norek" type="text" class="form-control" name="norek" value="{{ $ahli-waris->norek }}">

                                @if ($errors->has('norek'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('norek') }}</strong>
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
