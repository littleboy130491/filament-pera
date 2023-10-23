  <nav class="nav" id="nav">

      <div class="social-media">
          <a href="tel:{{ config('app.phone_number') }}">
              <span><i class="fa-solid fa-phone"></i></span>
          </a>
          <a href="mailto:{{ config('app.email') }}">
              <span><i class="fa-solid fa-envelope"></i></span>
          </a>
          <a href="{{ config('app.instagram_link') }}" target="_blank">
              <span><i class="fa-brands fa-instagram"></i></span>
          </a>
      </div>
      <i class="uil uil-bars navOpenBtn">
          <h3>Menu</h3>
      </i>
      <ul class="nav-links" id="primary-menu">
          <i class="uil uil-times navCloseBtn"></i>
          <img class="logo" src="{{ asset('uploads/images/PERA Logo.jpg') }}" alt="PERA Logo">
          <li><a class="menu-item nav-item center {{ request()->routeIs('home') ? 'curent-item' : '' }}"
                  href="{{ route('home') }}">Home</a></li>
          <li><a class="menu-item nav-item center {{ request()->routeIs('about') ? 'curent-item' : '' }}"
                  href="{{ route('about') }}">About</a></li>
          <li><a class="menu-item nav-item center {{ request()->routeIs('products') ? 'curent-item' : '' }}"
                  href="{{ route('products') }}">Products</a></li>
          <li><a class="menu-item nav-item center {{ request()->routeIs('distributor') ? 'curent-item' : '' }}"
                  href="{{ route('distributor') }}">Distributor/Agent</a></li>
          <li><a class="menu-item nav-item center {{ request()->routeIs('contact') ? 'curent-item' : '' }}"
                  href="{{ route('contact') }}">Contact</a></li>
          <li>
              <div class="gtranslate_wrapper"></div>
              <script>
                  window.gtranslateSettings = {
                      "default_language": "en",
                      "languages": ["en", "id"],
                      "wrapper_selector": ".gtranslate_wrapper"
                  }
              </script>
              <script src="https://cdn.gtranslate.net/widgets/latest/lc.js" defer></script>
          </li>
      </ul>

  </nav>
