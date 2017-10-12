@extends('agent.main')

@section('title', 'Agent')

@section('content')

    <div class="row">
        <div class="col-md-12 col-md-offset-5">
            <h1 class="page-header">
                Add new auto
            </h1>


        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> New Auto</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('auto.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('car_brand') ? ' has-error' : '' }}">
                            <label for="car_brand" class="col-md-4 control-label">Car Brand *</label>

                            <div class="col-md-6">
                                <div class="form-group">
                                    {{--<label for="categories[][title]">Category Title*:</label>--}}
                                    <select name="mark" class="form-control" id="select-place" required>
                                        <option value="" disabled selected >Enter Mark</option>
                                        @foreach($marks as $mark)
                                            <option value="{{$mark->id}}">{{$mark->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('model_of_car') ? ' has-error' : '' }}">
                            <label for="model_of_car" class="col-md-4 control-label select_model">Model of Car *</label>
                                <div class="col-md-6" id="type_car">

                                </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
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