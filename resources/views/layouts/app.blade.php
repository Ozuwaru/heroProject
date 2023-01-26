<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hero project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-light">
        
        <a class="navbar-brand" href="{{{ route('admin') }}}">Hero admin</a>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{route('heroes.index');}}" class="nav-link">Heroes</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('items.index');}}" class="nav-link">Items</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.enemies');}}" class="nav-link">Enemigos</a>
                </li>
            </ul>
    </nav>
    <div class="container" style="margin-top: 10px">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>