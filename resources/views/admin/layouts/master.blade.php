<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.head')
</head>

<body>

<div>
    @include('admin.includes.navbar')
</div>

<div>
    @include('admin.includes.sidebar')
</div>

<div>
    @yield('content')
</div>

<div>
    @include('admin.includes.footer')
</div>

</body>

</html>