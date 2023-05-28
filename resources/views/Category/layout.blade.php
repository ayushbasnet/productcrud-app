<!DOCTYPE html>
<html>
<head>
    <title>Category CRUD - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet" >
</head>
<body>

<nav class="py-2">
    <a href="{{ url('/category') }}" class="btn btn-success btn-sm" title="Home">
        <i class="fa fa-house" aria-hidden="true"></i> Home
    </a>

    <a href="{{ url('/product') }}" class="btn btn-success btn-sm" title="Home">
        <i class="fa fa-plus" aria-hidden="true"></i> Product
    </a>
</nav>
<div class="container">
    @yield('content')
</div>


</body>
</html>