 <!-- ======= Header ======= -->
 <header id="header" class="header d-flex align-items-center fixed-top" style="background-color: rgba(230,177,126,255);">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        
        <h1>DalFinds</h1>
      </a>

      <nav id="navbar" class="navbar" >
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="dropdown"><a href="societies.php"><span>Find Society</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
            <li><a href="societies.php">All</a></li>
                <li><a href="societies_sports.php">Sports</a></li>
                <li><a href="societies_academic.php">Academic</a></li>
                <li><a href="societies_cultural.php">Cultural</a></li>
            </ul>
          </li>

          <li><a href="about.php">About Us</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->