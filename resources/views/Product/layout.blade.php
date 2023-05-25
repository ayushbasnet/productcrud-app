<!DOCTYPE html>
<html>
<head>
    <title>Product CRUD - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<nav class="py-2">
    <a href="{{ url('/product') }}" class="btn btn-success btn-sm" title="Home">
        <i class="fa fa-plus" aria-hidden="true"></i> Home
    </a>

    <a href="{{ url('/welcome') }}" class="btn btn-success btn-sm" title="Home">
        <i class="fa fa-plus" aria-hidden="true"></i> Welcome
    </a>
</nav>
<div class="container">
    @yield('content')
</div>


</body>
</html>