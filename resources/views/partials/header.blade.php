<header class="header">
  <img alt="header background" class="header__img" src="@asset('images/header.jpg')" loading="lazy" width="1440"
    height="828" />
  <div class="header__content">
    <div class="container">
      <nav class="header__nav navbar navbar-dark">
        <a class="brand" href="{{ home_url('/') }}">
          {{ $siteName }}
        </a>
        <ul class="header__nav__links" id="navbarToggler">
          <li class="nav-item">
            <a class="nav-link" href="#">{{ __('Home', 'lopper') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">{{ __('Services', 'lopper') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">{{ __('Work', 'lopper') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">{{ __('About', 'lopper') }}</a>
          </li>
        </ul>
        <div class="header__nav__contact">
          <img class="phone-icon" src="@asset('images/phone.svg')" alt="phone" loading="lazy" width="18" height="29">  
          <span>(01) 666 - 693 - 456</span>
        </div>
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
          <span class="navbar-toggler__icon"></span>
        </button>
      </nav>
      <div class="header__headline">
        <p class="header__headline__intro">{{ __('What we do?', 'lopper') }}</p>
        <h1 class="header__headline__title">{{ __('We grow', 'lopper') }}
          <span>{{ __('great business', 'lopper') }}</span>
        </h1>
      </div>
      <div class="header__subheader">
        <a href="#">{{ __('Velit laoreet id donec ultrices. Ut lectus arcu bibendum varius.', 'lopper') }}</a>
        <span class="header__subheader__icon-right">
          <img src="@asset('images/arrow-right.svg')" alt="arrow right" loading="lazy" width="15" height="8">
        </span>
      </div>
      <a href="#" class="header__scroll">
        <span>{{ __('Scroll to see more', 'lopper') }}</span>
        <div class="header__scroll__icon-bottom">
          <img src="@asset('images/arrow-bottom.svg')" alt="arrow bottom" loading="lazy" width="8" height="28">
        </div>
      </a>
    </div>
  </div>
</header>
