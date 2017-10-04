@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Data Ahli Waris</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/waris') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('waris') ? ' has-error' : '' }}">
                            <label for="waris" class="col-md-4 control-label">Ahli Waris</label>

                            <div class="col-md-6">
                                <input id="waris" type="text" class="form-control" name="waris" value="{{ old('waris') }}">

                                @if ($errors->has('waris'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('waris') }}</strong>
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
