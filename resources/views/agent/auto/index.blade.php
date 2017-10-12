@extends('agent.main')

@section('title', 'Agent')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
               All Auto
            </h1>
             <div style="padding:5px 0; float:right;">
                <a href="{{route('auto.create')}}" class="btn btn-sm btn-primary add-new-category"><span class="fa fa-plus"></span> Add new Auto</a>
            </div>
        </div>
        <div class="col-md-12 " >
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered  table-hover add" id="dataTables-auto">
                            <thead>
                                <tr>
                                    <th>¹</th>
                                    <th>Mark</th>
                                    <th>Model</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                             @foreach(Auth::user()->agent->autos as $auto)
                                <div>
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$auto->mark}}</td>
                                        <td>{{$auto->type}}</td>
                                        <td><a href="{{route('auto.edit', $auto->id)}}" class="btn btn-sm btn-block btn-primary">Edit</a>
                                            {!! Form::open(['route'=>['auto.destroy', $auto->id], 'method'=>'delete', 'enctype'=>'multipart/form-data']) !!}
                                            <button class="btn btn-sm btn-block btn-danger">
                                                Delete
                                            </button>
                                            {!! Form::close() !!}
                                        </td>

                                    </tr>
                                </div>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
    @section('stylesheets')
            <!-- TABLE STYLES-->
    <link href="/admin-assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    @endsection

    @section('javascript')
            <!-- DATA TABLE SCRIPTS -->
    <script src="/admin-assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="/admin-assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-auto').dataTable();
        });
    </script>
@endsection