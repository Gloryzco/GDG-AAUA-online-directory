<div class="o-page__sidebar js-page-sidebar">
  <aside class="c-sidebar">
    <div class="c-sidebar__brand">
      <a href="#"><img src="img/logo.svg" alt="Neat"></a>
    </div>

    <!-- Scrollable -->
    <div class="c-sidebar__body">
      <span class="c-sidebar__title">Dashboards</span>
      <ul class="c-sidebar__list">
        <li>
          <a class="c-sidebar__link is-active" href="{{URL('dashboard')}}">
            <i class="c-sidebar__icon feather icon-home"></i>Dashboard 
          </a>
        </li>
      </ul>

      <span class="c-sidebar__title">General</span>
      <ul class="c-sidebar__list">
        <li>
          <a class="c-sidebar__link" href="{{('members')}}">
            <i class="c-sidebar__icon feather icon-users"></i>Members
          </a>
        </li>
       
          <!-- Always visible submenu -->
          <ul class="c-sidebar__list">
            <li><a class="c-sidebar__link" href="{{URL('SignUp')}}">Sign Up</a></li>
            <li><a class="c-sidebar__link" href="{{URL('SignIn')}}">Sign In</a></li>
            <li><a class="c-sidebar__link" href="reset-password.html">Reset Password</a></li>
            <li><a class="c-sidebar__link" href="forgot-password.html">Forgot Password</a></li>
          </ul>
        </li>
      </ul>   
    </div>
    <a class="c-sidebar__footer" href="#">
      Logout <i class="c-sidebar__footer-icon feather icon-power"></i>
    </a>
  </aside>
</div>