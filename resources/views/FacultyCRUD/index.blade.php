@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Faculty CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('facultyCRUD.create') }}"> Add New Faculty</a>
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
            <th>FName</th>
            <th>LName</th>
            <th>Qualification</th>
            <th>Subject</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($faculties as $faculty)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $faculty->fname}}</td>
                <td>{{ $faculty->lname}}</td>
                <td>{{ $faculty->qualification}}</td>
                <td>{{ $faculty->Subject}}</td>
                <td>{{ $faculty->description}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('facultyCRUD.show',$faculty->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('facultyCRUD.edit',$faculty->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['facultyCRUD.destroy', $faculty->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {{ $faculties->links() }}
@endsection