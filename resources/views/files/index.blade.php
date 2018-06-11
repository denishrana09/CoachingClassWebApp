@extends('layouts.filesbar')
@section('contentforhome')

    <div style="width:800px; margin:0 auto;">
    @if($files->count() > 0)

        <table class="table table-responsive-sm table-condensed table-hover">
        <tr>
            <th>Description</th><th>Link</th>
        </tr>
        @foreach($files as $file)
            <tr>
                <td>{{$file->description}}</td>
                <td><a href="{{asset('assets/pdf/').$file->url}}"> Link </a></td>
            </tr>
            @endforeach
    </table>

        @else
    <H2>NO PAPERS AVAILABLE. PLEASE CONTACT ADMINISTRATOR.</H2>
        @endif
    </div>

    @endsection