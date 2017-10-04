@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Ahli Waris</div>
                <div class="panel-body">
                    <ol
                        @foreach($datawaris as $ahli_waris)
                        
                        <li>{{$ahli_waris->ahli_waris}}</li>

                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
