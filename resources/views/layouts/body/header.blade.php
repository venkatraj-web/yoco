<header class="header">
    <div class="header-container container">
        <div class="logo">
            <a href="{{ url("/") }}"
                ><img src="{{ asset("assets/yoco-logo.png") }}" alt="YOCO labs Logo"
            /></a>
        </div>
        <!-- <nav class="main-nav">
  <ul class="main-nav-list">
    <li class="main-nav-list-item">
      <a class="main-nav-link" href="#">AI Solutions</a>
    </li>
    <li class="main-nav-list-item">
      <a class="main-nav-link" href="#">Products</a>
    </li>
    <li class="main-nav-list-item">
      <a class="main-nav-link" href="#">Industries</a>
      <ul class="main-nav-dropdown">
        <li>
          <a href="#">Retail</a>
        </li>
        <li><a href="#">Enterprise</a></li>
      </ul>
    </li>
    <li class="main-nav-list-item">
      <a class="main-nav-link" href="#">Our Approach</a>
    </li>
    <li class="main-nav-list-item">
      <a class="main-nav-link" href="#">Company</a>
    </li>
  </ul>
</nav> -->
        <nav class="main-nav">
            <div class="dropdownBackground">
                <span class="arrow"></span>
            </div>
            <ul class="main-nav-list">
                <li class="main-nav-list-item">
                    <a class="main-nav-link" href="{{ url("/ai-solutions") }}">AI Solutions</a>
                </li>
                <li class="main-nav-list-item">
                    <a class="main-nav-link" href="{{ url("/product") }}">Products</a>
                    <ul class="dropdown">
                        <li>
                            <a class="dropdown-nav-link" href="#"> Edge Device </a>
                            <summary class="dropdown-nav-link-summary">
                                A compact device that specially focused for small areas
                            </summary>
                        </li>
                    </ul>
                </li>
                <li class="main-nav-list-item">
                    <a class="main-nav-link" href="{{ url("/industries") }}">Industries</a>
                    <ul class="dropdown">
                        <li>
                            <a class="dropdown-nav-link" href="#"> Enterprise Platform</a>
                            <summary class="dropdown-nav-link-summary">
                                A compact device that specially focused for small areas
                            </summary>
                        </li>
                        <li>
                            <a class="dropdown-nav-link" href="#"> Retail Platform</a>
                            <summary class="dropdown-nav-link-summary">
                                A compact device that specially focused for small areas
                            </summary>
                        </li>
                    </ul>
                </li>
                <li class="main-nav-list-item">
                    <a class="main-nav-link" href="#">Our Approach</a>
                </li>
                <li class="main-nav-list-item">
                    <a class="main-nav-link" href="{{ url("/about") }}">Company</a>
                </li>
                <li class="main-nav-list-item">
                    <a class="main-nav-link" href="{{ url("/contact") }}">Contact</a>
                </li>
            </ul>
        </nav>
        <div>
            <button class="action-btn primary-action-btn" onclick="createModal()">
                Contact us
            </button>
        </div>
    </div>
</header>