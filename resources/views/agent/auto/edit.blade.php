@extends('agent.main')

@section('title', 'Agent')

@section('content')

    <div class="row">
        <div class="col-md-12 col-md-offset-5">
            <h1 class="page-header">
                Edit auto
            </h1>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Edit Auto</div>
                <div class="panel-body">
                    {!! Form::open(['route'=>['auto.update', $auto->id], 'method'=>'PUT', 'enctype'=>'multipart/form-data']) !!}
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('car_brand') ? ' has-error' : '' }}">
                            <label for="car_brand" class="col-md-4 control-label">Car Brand *</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{--<label for="categories[][title]">Category Title*:</label>--}}
                                    <select name="mark" class="form-control" id="select-place" required>
                                        <option value="{{$auto->mark}}" disabled selected >{{$auto->mark}}</option>
                                        @foreach($marks as $mark)
                                            @if($mark->title == $auto->mark)
                                                @continue;
                                            @endif
                                            <option value="{{$mark->id}}">{{$mark->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('car_model') ? ' has-error' : '' }}">
                            <label for="car_brand" class="col-md-4 control-label">Car model *</label>
                            <div class="col-md-6" id="type_car">
                                <div class="form-group">
                                    {{--<label for="categories[][title]">Category Title*:</label>--}}
                                    <select name="type" class="form-control" id="select-type" required>
                                        <option value="{{$auto->type}}" disabled selected >{{$auto->type}}</option>
                                        @foreach($types as $type)
                                            @if($type->title == $auto->type)
                                                @continue;
                                            @endif
                                            <option value="{{$type->id}}">{{$type->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
@section('javascript')

    <script src="{{ asset('assets/selectize.js/dist/js/standalone/selectize.js')}}"></script>
    <script>
        //   selectize

        var $select = $('#select-place').selectize({
            valueField: 'id',
            labelField: 'value',
            searchField: "value",
            onChange: function(value){

                var token = "{{csrf_token()}}";
                $.ajax({
                    type: 'POST',
                    url: '{{route('agent.select_type')}}',
                    data: {id: value, _token: token},
                    success: function (data) {
                        $('.select_model').css("display", "block");
                        $('#type_car').html(data);
                        var $select = $('#select-type').selectize({
                            valueField: 'id',
                            labelField: 'value',
                            searchField: "value",
                            setValue: $('.selected_mark').val(),
                            onChange: function(value){
                            }
                        });
                    }
                });
            }
        });
    </script>
@endsection

@section('stylesheets')

    <link rel="stylesheet" href="{{ asset('assets/selectize.js/dist/css/selectize.bootstrap3.css')}}"/>
    <style>
        .select_model{
            display: none;
        }
    </style>
@endsection