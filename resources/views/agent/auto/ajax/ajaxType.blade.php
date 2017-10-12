<div class="form-group">
    <select name="type" class="form-control" id="select-type" required>
        <option value="" disabled selected >Select Model</option>
        @foreach($types as $type)
            <option value="{{$type->id}}">{{$type->title}}</option>
        @endforeach
    </select>
</div>
