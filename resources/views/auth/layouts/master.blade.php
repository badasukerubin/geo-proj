<!DOCTYPE html>
<html lang="en">

<head>
    @include('auth.includes.head')
</head>

<body>

<div>
    @yield('content')
</div>

<div>
    @include('auth.includes.footer')
</div>

</body>

</html>