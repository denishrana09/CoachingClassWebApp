@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Pictures</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pictureCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>URL:</strong>
                {{ $picture->url}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong><br>
                <img src="{{asset('assets/img/Gallery/'.$picture->url)}}"  style="max-height: 300px; max-width: 400px;" class="img-rounded" />
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Admin id:</strong>
                {{ $picture->admin_id}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $picture->description}}
            </div>
        </div>
    </div>
@endsection