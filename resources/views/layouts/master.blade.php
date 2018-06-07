<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    @include('includes.head')
</head>

<body>

<div>
    @include('includes.header')
</div>

<div>
    @yield('content')
</div>

<div>
    @include('includes.footer')
</div>

<div>
    @include('includes.foot')
</div>

</body>

</html>