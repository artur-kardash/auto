@extends('admin.main')

@section('title', 'Admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                All Agents
            </h1>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-agent">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name:</th>
                                    <th>Email:</th>
                                    <th>Mark of car</th>
                                    <th>Model of car</th>
                                </tr>
                            </thead>
                            @foreach($agents as $agent)
                                <div>
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$agent->user->name}}</td>
                                        <td>{{$agent->user->email}}</td>
                                        <td>
                                        @foreach($agent->autos as $auto)
                                            {{$auto->mark}}<br>
                                        @endforeach
                                        </td>
                                        <td>
                                            @foreach($agent->autos as $auto)
                                                {{$auto->type}}<br>
                                            @endforeach
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
            $('#dataTables-agent').dataTable();
        });
    </script>
@endsection