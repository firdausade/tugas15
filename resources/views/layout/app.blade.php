<!DOCTYPE html>
<html lang="en">

<head>
<title>@yield('title')</title>
@include('includes.head')
</head>
<body>
    <header>
    @include('includes.header')
    </header>
    <div class="container"></div>
    @yield('content')
    @include('includes.footer')
</body>
</html>