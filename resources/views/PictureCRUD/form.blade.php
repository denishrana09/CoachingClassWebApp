<div class="row">
    {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}
        {{--<div class="form-group">--}}
            {{--<strong>URL:</strong>--}}
            {{--{!! Form::text('url', null, array('placeholder' => 'URL','class' => 'form-control')) !!}--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--{{Form::open(['files' => true])}}--}}
    {{--{{Form::label('user_photo', 'Add Photo : ',['class' => 'control-label'])}}--}}
    {{--{{Form::file('user_photo')}}--}}
    {{--{{Form::submit('Save', ['class' => 'btn btn-success'])}}--}}
    {{--{{Form::close()}}--}}

    <input type="file" name="myfile" id="myfile">

    {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}
        {{--<div class="form-group">--}}
            {{--<strong>Admin id:</strong>--}}
            {{--{!! Form::text('admin_id', null, array('placeholder' => 'Admin id','class' => 'form-control')) !!}--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            {!! Form::text('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>