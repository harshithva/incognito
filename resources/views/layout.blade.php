<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Incognito</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Styles --> 
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-primary" id="navbar">
            <a class="navbar-brand" href="#">
              <img src="img/logo.png" class="btn-animation" height="50" alt="">
            </a>
          </nav>

         @yield('content')
         <script src="//code.tidio.co/giritt6uqceo9ksifkscugeqbflfkyat.js" async></script>
    </body>
</html>
