<header class="c-navbar u-mb-medium">
<button class="c-sidebar-toggle js-sidebar-toggle">
  <i class="feather icon-align-left"></i>
</button>

<h2 class="c-navbar__title">@yield('menuname')</h2>
<div class="c-dropdown dropdown">
  <div class="c-avatar c-avatar--xsmall dropdown-toggle" id="dropdownMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
    <img class="c-avatar__img" src="img/avatar-72.jpg" alt="Adam Sandler">
  </div>

  <div class="c-dropdown__menu has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuAvatar">
    <a class="c-dropdown__item dropdown-item" href="#">Edit Profile</a>
    <a class="c-dropdown__item dropdown-item" href="#">View Activity</a>
    <a class="c-dropdown__item dropdown-item" href="#">Log out</a>
  </div>
</div>
</header>