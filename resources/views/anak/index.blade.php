@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Anak</div>
                <div class="panel-body">
                    <ol>
                        @foreach($dataanak as $anak)

                        <li>{{ $anak->nama }}</li>

                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
