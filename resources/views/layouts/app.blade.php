<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UAS-SultanNabil-2111500852</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        /* Custom CSS untuk footer */
        body {
            position: relative;
            min-height: 100vh;
            margin-bottom: -100px;
        }
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: green;
            color: white;
            padding: 20px 0;
            text-align: center;
            font-size: 14px;
        }
    </style>
  </head>
  <body>
    @include('layouts.navbar')
 
    <div class="container py-5">
        @yield('body')
    </div>
    
    <footer>
        <div class="container">
            <p style="margin-bottom: 0;">&copy; 2111500852 SULTAN NABIL | UAS PWTM KAMIS 6 JULY 2023</p>
        </div>
    </footer>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
