@extends('layouts.adminDef')
@section('content')
    <header id="cm-header">
        <nav class="cm-navbar cm-navbar-primary">
            <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
            <div class="cm-flex">
                <h1>Faculty</h1>
            </div>
            <div class="dropdown pull-right">
            </div>
        </nav>
    </header>

    <div id="global">
        <div class="container-fluid cm-container-white">
            <h2 style="margin-top:0;">Add new Picture</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Add New Picture</h2>
                    </div>
                    <div class="pull-right">
                    </div>
                </div>
            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
    @endif
    {!! Form::open(array('route' => 'pictureCRUD.store','method'=>'POST','enctype'=>'multipart/form-data')) !!}
    @include('PictureCRUD.form')
    {!! Form::close() !!}
        </div>
    </div>
@endsection
