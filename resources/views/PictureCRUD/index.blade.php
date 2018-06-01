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
            <h2 style="margin-top:0;">Pictures</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Picture CRUD</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('picins') }}"> Add New Picture</a>
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
                    <th>url</th>
                    <th>Image</th>
                    <th>Admin id</th>
                    <th>Description</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($pictures as $picture)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $picture->url}}</td>
                        <td><img src="{{asset('assets/img/Gallery/'.$picture->url)}}"  style="max-height: 150px; max-width: 200px;" class="img-rounded" /></td>
                        <td>{{ $picture->admin_id}}</td>
                        <td>{{ $picture->description}}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('pictureCRUD.show',$picture->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('pictureCRUD.edit',$picture->id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['pictureCRUD.destroy', $picture->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </table>
    {{ $pictures->links() }}
        </div>
    </div>
@endsection
