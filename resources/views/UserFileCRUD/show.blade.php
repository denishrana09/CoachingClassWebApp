@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show PDF</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('userfileCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>View PDF:</strong>
                <a href="{{ asset('assets/pdf/'.$userfile->url) }}">{{ $userfile->url}}</a>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Admin id:</strong>
                {{ $userfile->admin_id}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Std:</strong>
                {{ $userfile->std}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $userfile->description}}
            </div>
        </div>
    </div>
@endsection