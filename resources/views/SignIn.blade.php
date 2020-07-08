<!doctype html>
<html lang="en">
  
<!-- Mirrored from zawiastudio.com/neat/demo/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Apr 2018 10:30:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign In | GDG AAUA</title>
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

    <div class="o-page o-page--center">
      <div class="o-page__card">
      @if( count($errors) > 0)
        <div class="well" style="padding:3px; color:red; border-radius:0px; margin-left:16px">								
            @foreach($errors->all() as $error )										
                {{$error}}<br>											
            @endforeach
        </div>
      @endif

      @if(Session::has('message'))
        <div class="well" style="padding:10px; color:brown; border-radius:0px; margin-left:16px">
              {{Session::get('message')}}
        </div>
      @endif
        <div class="c-card c-card--center">
          <span class="c-icon c-icon--large u-mb-small">
            <img src="img/logo-small.svg" alt="Neat">
          </span>

          <form action="/SignIn" method="post">
          {{csrf_field()}}
            <div class="c-field">
              <label class="c-field__label">Email Address</label>
              <input class="c-input u-mb-small" type="email" name="email" required>
            </div>
            
            <div class="c-field">
              <label class="c-field__label">Password</label>
              <input class="c-input u-mb-small" type="password" name="password" required>
            </div>

             <input type="submit" value="Sign in" class="c-btn c-btn--fullwidth c-btn--info"></br><br>
             Not yet a member? sign up <a href="{{route('SignUp')}}">here</a> 
            <input type="hidden" name="_token" value="{{Session::token()}}">
          </form>
        </div>
      </div>
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

<!-- Mirrored from zawiastudio.com/neat/demo/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Apr 2018 10:30:40 GMT -->
</html>