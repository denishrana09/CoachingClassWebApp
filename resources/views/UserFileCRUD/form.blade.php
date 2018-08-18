<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Select PDF :</strong>
            <input type="file" accept="application/pdf" name="myfile" id="myfile">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Select std :</strong>
            {{--<select name="std">--}}
                {{--<option value="">Select</option>--}}
                {{--<option value="9">9</option>--}}
                {{--<option value="10">10</option>--}}
            {{--</select>--}}
            <select name="std">
                @for ($i = 5; $i <= 12; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
                <option value="13">F.Y-B.Com</option>
                <option value="14">S.Y-B.Com</option>
                <option value="15">T.Y-B.Com</option>
            </select>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description(Optional) :</strong>
            {!! Form::text('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>