<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Societies</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  

      <?php include 'navigation.php'; ?> <!-- Navbar -->
      

  <main id="main">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9" data-aos="fade-up">
            <nav id="navbar" class="navbar" >
            <ul class="dropdown"><a href="#"><h3 class="category-title">Category: Sports</h3></a>
            <ul>
                <li><a href="societies.php">All</a></li>
                <li><a href="societies_sports.php">Sports</a></li>
                <li><a href="societies_academic.php">Academic</a></li>
                <li><a href="societies_cultural.php">Cultural</a></li>
            </ul>
          </ul>
          </nav>
            


            <?php

            $eventsFile = 'files/events.csv';
            
        
            $file1 = fopen($eventsFile, 'r');
            $events = [];

            while (($line = fgetcsv($file1)) !== false) {

                $events[] = $line;

            }


            fclose($file1);

             foreach ($events as $event) {
                
                if ($event[2] != "Sports") {
                    continue;
                }
                $eventNo = $event[0];
                $eventName = $event[1];
                $eventType = $event[2];
                $eventDate = $event[3];
                $eventTitle = $event[4];
                $description = $event[5];
                $imagePath = $event[6];
                


   

                  
                

                echo <<<EVENTINFO
                 <div class="d-md-flex post-entry-2 half">
                  <a href="single-post.php?event_no=$eventNo" class="me-4 thumbnail">
                  <img src="$imagePath" alt="" class="img-fluid" style="width: 450px; height: auto; ">
                   </a>
                 <div>
                    <div class="post-meta"><span class="date">$eventType</span> <span class="mx-1">&bullet;</span> <span>$eventDate</span></div>
                     <h3><a href="single-post.php?event_no=$eventNo">$eventName</a></h3>
                    <div class="d-flex align-items-center author">
                     
                      <div class="name">
                       <h3 class="m-0 p-0">$eventType</h3>
                        </div>
                     </div>
                     </div>
                    </div>
                EVENTINFO;
                   }
                
                
            

        
           ?>

          </div>

          <div class="col-md-3">
            <!-- ======= Sidebar ======= -->
            <div class="aside-block">

              <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill" data-bs-target="#pills-trending" type="button" role="tab" aria-controls="pills-trending" aria-selected="false">Upcoming</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Latest Added</button>
                </li>
              </ul>

              <div class="tab-content" id="pills-tabContent">

                
              <!-- Upcoming Section -->
<div class="tab-pane fade show active" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">
    <div class="post-entry-1 border-bottom">
        <div class="post-meta"><span class="date">Campus Events</span> <span class="mx-1">&bullet;</span> <span>Mar 25th '24</span></div>
        <h2 class="mb-2"><a href="#">Dalhousie University Announces New Research Initiative</a></h2>
        <span class="author mb-3 d-block">John Smith</span>
    </div>

    <div class="post-entry-1 border-bottom">
        <div class="post-meta"><span class="date">Campus Updates</span> <span class="mx-1">&bullet;</span> <span>Mar 25th '24</span></div>
        <h2 class="mb-2"><a href="#">Construction of New Student Residence Underway at Dalhousie</a></h2>
        <span class="author mb-3 d-block">Jane Doe</span>
    </div>

    <div class="post-entry-1 border-bottom">
        <div class="post-meta"><span class="date">Campus News</span> <span class="mx-1">&bullet;</span> <span>Mar 25th '24</span></div>
        <h2 class="mb-2"><a href="#">Dalhousie Students Organize Climate Action Rally on Campus</a></h2>
        <span class="author mb-3 d-block">Emma Johnson</span>
    </div>

    <div class="post-entry-1 border-bottom">
        <div class="post-meta"><span class="date">Research</span> <span class="mx-1">&bullet;</span> <span>Mar 25th '24</span></div>
        <h2 class="mb-2"><a href="#">Dalhousie Scientists Discover Breakthrough in Cancer Treatment</a></h2>
        <span class="author mb-3 d-block">Michael Brown</span>
    </div>
</div>
<!-- End Upcoming Section -->

<!-- Latest Added Section -->
<div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">
    <div class="post-entry-1 border-bottom">
        <div class="post-meta"><span class="date">Student Life</span> <span class="mx-1">&bullet;</span> <span>Mar 25th '24</span></div>
        <h2 class="mb-2"><a href="#">Dalhousie Student Union Launches Mental Health Awareness Campaign</a></h2>
        <span class="author mb-3 d-block">Jessica Williams</span>
    </div>

    <div class="post-entry-1 border-bottom">
        <div class="post-meta"><span class="date">Campus Events</span> <span class="mx-1">&bullet;</span> <span>Mar 25th '24</span></div>
        <h2 class="mb-2"><a href="#">Dalhousie University Hosts Annual Career Fair for Students</a></h2>
        <span class="author mb-3 d-block">Alex Thompson</span>
    </div>

    <div class="post-entry-1 border-bottom">
        <div class="post-meta"><span class="date">Academic Updates</span> <span class="mx-1">&bullet;</span> <span>Mar 25th '24</span></div>
        <h2 class="mb-2"><a href="#">Dalhousie Faculty of Science Introduces New Degree Program in Data Science</a></h2>
        <span class="author mb-3 d-block">Chris Wilson</span>
    </div>

    <div class="post-entry-1 border-bottom">
        <div class="post-meta"><span class="date">Campus News</span> <span class="mx-1">&bullet;</span> <span>Mar 25th '24</span></div>
        <h2 class="mb-2"><a href="#">Dalhousie University Receives Funding for Indigenous Student Scholarships</a></h2>
        <span class="author mb-3 d-block">Sarah Martinez</span>
    </div>
</div>
<!-- End Latest Added Section-->

              </div>
            </div>

            <div class="aside-block">
              <h3 class="aside-title">Events</h3>
              <ul class="aside-links list-unstyled"> <!-- Changed the Event tags and fixed link -->
                <li><a href="societies.php?event_No=All"><i class="bi bi-chevron-right"></i> All Events</a></li>
                <li><a href="societies_cultural.php"><i class="bi bi-chevron-right"></i> Culture</a></li>
                <li><a href="societies_sports.php?type=sports"><i class="bi bi-chevron-right"></i> Sports</a></li>
                <li><a href="societies_academic.php?"><i class="bi bi-chevron-right"></i> Academic</a></li>

              </ul>
            </div><!-- End Categories -->

            <div class="aside-block">
              <h3 class="aside-title">Tags</h3>
              <ul class="aside-tags list-unstyled"> <!-- Changed the tags and fixed link -->
                <li><a href="societies.php?type=All">All Events</a></li>
                <li><a href="societies_cultural.php?type=art%2Bculture">Culture</a></li>
                <li><a href="societies_sports.php?type=art%2Bculture">Sports</a></li>
                <li><a href="societies_academic.php?type=Sports">Academic</a></li>

              </ul>
              <br><br>
              <h3 class="aside-title">Filter By Age</h3>

              
<input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3" style="-webkit-appearance: none; background-color: transparent; cursor: pointer;">
<style>
  /* CSS to change the color of the thumb */
  input[type="range"]::-webkit-slider-thumb {
    background-color: black; /* Change to black */
  }
</style>
          </div>

        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <?php include 'footer.php'; ?> <!-- Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>