<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>sidebar</title>
  <!-- -------lien css et js -------- -->
  
  <link rel="stylesheet" href="layouts.css" />
  <!-- --- Lien google fonts---- -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Fredoka+One&family=Roboto&display=swap"
    rel="stylesheet">

</head>

<body>
@include('layouts.nav')
        <main>
        @yield('content')
        @include('layouts.footer')
        </main>
</body>

</html>