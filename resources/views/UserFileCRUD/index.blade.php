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
            <h2 style="margin-top:0;">Files</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>UserFile CRUD</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('fileins') }}"> Add New PDF</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>pdf</th>
                    <th>Admin id</th>
                    <th>Std</th>
                    <th>Description</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($userfiles as $userfile)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td><a href="{{ asset('assets/pdf/'.$userfile->url) }}" target="_blank">{{ $userfile->url}}</a></td>
                        <td>{{ $userfile->admin_id}}</td>
                        <td>{{ $userfile->std}}</td>
                        <td>{{ $userfile->description}}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('userfileCRUD.show',$userfile->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('userfileCRUD.edit',$userfile->id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['userfileCRUD.destroy', $userfile->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </table>
    {{ $userfiles->links() }}
        </div>
    </div>

@endsection
