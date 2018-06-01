
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-clearmin.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/roboto.css">
    <link rel="stylesheet" type="text/css" href="assets/css/material-design.css">
    <link rel="stylesheet" type="text/css" href="assets/css/small-n-flat.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <title>Clearmin template</title>
</head>
<body class="cm-no-transition cm-1-navbar">
<div id="cm-menu">
    <nav class="cm-navbar cm-navbar-primary">
        <div class="cm-flex"><a href="index.html" class="cm-logo"></a></div>
        <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
    </nav>
    <div id="cm-menu-content">
        <div id="cm-menu-items-wrapper">
            <div id="cm-menu-scroller">
                <ul class="cm-menu-items">
                    <li ><a class="sf-folder-house" href="{{route('admin')}}">Home</a></li>
                    {{--<li><a href="{{route('facultyCRUD.index')}}" class="sf-dashboard">Dashboard</a></li>--}}
                    <li class="cm-submenu">
                        <a class="sf-profile">Manage Faculty <span class="caret"></span></a>
                        <ul>
                            <li><a href="{{route('faculty')}}">View Faculty</a></li>
                            <li><a href="{{ route('faccreate') }}">Add new Faculty</a></li>
                            {{--<li><a href="{{ route('facedit') }}">Edit Faculty</a></li>--}}
                            {{--<li><a href="layouts-tabs.html">2nd nav tabs</a></li>--}}
                        </ul>
                    </li>
                    <li class="cm-submenu">
                        <a class="sf-file-picture">Manage Pictures <span class="caret"></span></a>
                        <ul>
                            <li><a href="{{route('picind')}}">View Pictures</a></li>
                            <li><a href="{{route('picins')}}">Add Picture<Picture></Picture></a></li>
                        </ul>
                    </li>
                    <li class="cm-submenu">
                        <a class="md-pageview">Manage Files <span class="caret"></span></a>
                        <ul>
                            <li><a href="{{route('fileind')}}">View Files</a></li>
                            <li><a href="{{ route('fileins') }}">Add new File</a></li>
                            {{--<li><a href="{{ route('facedit') }}">Edit Faculty</a></li>--}}
                            {{--<li><a href="layouts-tabs.html">2nd nav tabs</a></li>--}}
                        </ul>
                    </li>
                    <li><a href="{{ route('logout') }}" class="sf-lock-open">LogOut</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@yield('content')
<script src="assets/js/lib/jquery-2.1.3.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
<script src="assets/js/jquery.cookie.min.js"></script>
<script src="assets/js/fastclick.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/clearmin.min.js"></script>
<script src="assets/js/demo/home.js"></script>
</body>
</html>
