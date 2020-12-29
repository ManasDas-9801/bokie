<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-light sticky-top" style="background-color: #EE5A24">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="{{url('/book')}}">Bookie <small style="color: black">.Com</small></a>
          <form class="d-flex" action="{{ route('book.index')}}" method="GET">
            <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search" style="width: 460px" name="search" >
            <button class="btn btn-primary" type="submit">Search</button>
          </form>
           <button class="btn btn-warning"><a href="{{route('book.create')}}" style="text-decoration: none;color:white;">Insert</a></button>
        </div>
      </nav>

 @yield('content')

 

</body>
</html>