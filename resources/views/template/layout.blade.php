<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.partials.meta')
    <title>{{ config('app.name') }} - @yield('title')</title>
    @include('template.partials.css')
</head>
<body>
    <div id="wrapper">
        @include('template.partials.nav')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('title')</h1>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
    @include('template.partials.js')
</body>
</html>