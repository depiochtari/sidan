@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Visi</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/kub') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('visi') ? ' has-error' : '' }}">
                            <label for="visi" class="col-md-4 control-label">Visi</label>

                            <div class="col-md-6">
                                <input id="visi" type="text" class="form-control" name="visi" value="{{ old('visi') }}">

                                @if ($errors->has('visi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('visi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Simpan
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
