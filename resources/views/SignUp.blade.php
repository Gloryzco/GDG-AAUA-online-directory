<!doctype html>
<html lang="en">
  
<!-- Mirrored from zawiastudio.com/neat/demo/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Apr 2018 10:30:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign Up | GDG AAUA</title>
    <meta name="description" content="Neat">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/neat.min.css">
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

          <h4 class="u-mb-medium">Sing Up to Get Started</h4>


          <form action="{{route('SignUp')}}" method="post">
          {{csrf_field()}}
            <div class="c-field">
              <label class="c-field__label">Firstname</label>
              <input class="c-input u-mb-small" type="text" placeholder="e.g. Adam Sandler" name="firstname" required>
            </div>

            <div class="c-field">
              <label class="c-field__label">Lastname</label>
              <input class="c-input u-mb-small" type="text" placeholder="e.g. Adam Sandler" name="lastname" required>
            </div>

            <div class="c-field">
              <label class="c-field__label">Email Address</label>
              <input class="c-input u-mb-small" type="email" placeholder="e.g. adam@sandler.com" name="email" required>
            </div>

            <div class="c-field">
              <label class="c-field__label">Date of birth</label>
              <input class="c-input u-mb-small" type="date" placeholder="e.g. adam@sandler.com" name="dob" required>
            </div>

            <div class="c-field">
              <label class="c-field__label">Phone</label>
              <input class="c-input u-mb-small" type="text" placeholder="e.g. adam@sandler.com" name="phone" required>
            </div>

            <div class="c-field u-mb-small">
              <label class="c-field__label">Specification</label>
              <div class="c-select">
                <select class="c-select__input" name="spec">
                  <option>Web</option>
                  <option>Android</option>
                </select>
              </div>
            </div>

            <div class="c-field">
              <label class="c-field__label">Password</label>
              <input class="c-input u-mb-small" type="password" placeholder="password must be at least 6" name="password" required>
            </div>

            <div class="c-field u-mb-small">
              <label class="c-field__label">Confirm Password</label>
              <input class="c-input" type="password" placeholder="Rewrite your password" name="c_password" required>
            </div>
            
            <input type="submit" value="sign up" class="c-btn c-btn--fullwidth c-btn--info"></br>
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

<!-- Mirrored from zawiastudio.com/neat/demo/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Apr 2018 10:30:40 GMT -->
</html>

