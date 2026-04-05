<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Control System</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    @include('layouts.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="hold-transition sidebar-mini">
    <div class="wrapper fixed-footer">
        {{-- @include('layouts._navbar')
        @include('layouts._sidebar') --}}
        <div class="content-wrapper" style="overflow-y:auto; max-height: calc(100vh - 60px); padding: 20px;">
            <div class="container">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
        <footer class="main-footer">
            <strong><a href="#"></a></strong>

            <div class="float-right d-none d-sm-inline-block">
                <b></b>
            </div>
        </footer>
    </div>
    @include('layouts.script')
</body>

</html>
