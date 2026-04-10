<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>System Control</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    @include('layout.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="hold-transition sidebar-mini">
    <div class="wrapper fixed-footer">
        @include('layout.nav')
        @include('layout.side')
        <div class="content-wrapper" style="overflow-y:auto; max-height: calc(100vh - 60px); padding: 20px;">
            <main>
                <x-toast />
                @yield('content')
            </main>
        </div>
        <footer class="main-footer">
            <strong><a href="#"></a></strong>

            <div class="float-right d-none d-sm-inline-block">
                <b></b>
            </div>
        </footer>
    </div>
    @include('layout.script')

</body>

</html>
