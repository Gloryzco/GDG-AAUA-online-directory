<!doctype html>
<html lang="en">
  
<!-- Mirrored from zawiastudio.com/neat/demo/dashboard01.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Apr 2018 10:29:37 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Neat">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/neat.minc619.css?v=1.0">
  </head>
  <body>
      
      <div class="o-page">
      @include('constant.sidebar')

        <main class="o-page__content">
          @include('constant.menubar')

        <div class="container">
          @yield('content')
        </div>
      </main>
    </div>

    <!-- Main JavaScript -->
    <script src="js/neat.minc619.js?v=1.0"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-88739867-5"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-88739867-5');

    </script>
  </body>

<!-- Mirrored from zawiastudio.com/neat/demo/dashboard01.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Apr 2018 10:30:23 GMT -->
</html>