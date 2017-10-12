@extends('agent.main')

@section('title', 'Agent')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                 <small>Driver dashboard</small>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-green">
                <div class="panel-body">
                    <i class="fa fa-bar-chart-o fa-5x"></i>
                </div>
                <div class="panel-footer back-footer-green">
                    You have - {{$count['auto']}} cars.
                </div>
            </div>
        </div>
    </div>
@endsection