@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Visie</div>
                <div class="panel-body">
                    <table id="datatable" class="table table-condensed">
                        <ol>
                            @foreach($datavisi as $visi)
                            <li>{{$visi->visi}}</li>
                            @endforeach
                        </ol>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
