@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Nelayan</div>
                <div class="panel-body">
					<ol>
						@foreach($datanelayan as $nelayan)
						<li>{{$nelayan->nama_nelayan}}</li>
						@endforeach
					</ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection