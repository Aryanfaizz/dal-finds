<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DalFinds - Society Info</title>

  <!-- Removed title to be put in php section -->
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
  </header><!-- End Header -->

            <!-- ======= Single Post Content ======= -->
            <?php
            //check if event number is in query
            if(isset($_GET['event_no'])){
              $eventNumber = isset($_GET['event_no']) ? $_GET['event_no'] : null;
            }

            //open events.csv file to print a certain piece of content
            $eventsFile = fopen("files/events.csv", 'r') or die("Cannot open file. Sorry!");

            //loop through csv file until specified event is found
            while(($eventData = fgetcsv($eventsFile)) !== false){
              if($eventData[0] == $eventNumber){
                $eventNo = $eventData[0];
                $eventName = $eventData[1];
                $eventType = $eventData[2];
                $eventDate = $eventData[3];
                $eventTitle = $eventData[4];
                $description = $eventData[5];
                $imagePath = $eventData[6];
                $contact = $eventData[7];

                //display with heredoc
                echo <<<EVENTINFO
                <section class="single-post-content" style="padding-top: 100px;">
                    <div class="container" style="">
                        <div class="row">
                            <div class="col-md-9 post-content" data-aos="fade-up">
                                <div class="single-post">
                                    <div class="post-meta">
                                        <div class="d-md-flex post-entry-2 half">
                                            <div class="post-details">
                                            <br><br><br><br><br><br><br>
                                            <h1 style="color: black;">$eventName</h1>
                                            <br><br><br>
                                                <div class="post-meta"><span class="date">$eventType</span> <span class="mx-1">&bullet;</span> <span>$eventDate</span></div>
                                                
                                                <div class="author">
                                                    <div class="name">
                                                        <h3 class="m-0 p-0">$eventType</h3>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <a href="single-post.php?event_no=$eventNo" class="me-4 thumbnail">
                                        <img src="$imagePath" alt="$eventName" class="img-fluid" style="width: 550px; height: auto;">
                                    </a>
                                    </div> <br> <br>
                                    <p class="description">$description</p>
                                </div>
                                <br><br>
                                <h3>Contact: $contact</h3>
                                <br><br><br>
                            </div>
                        </div>
                    </div>
                </section>
                EVENTINFO;
                
                
                
                break;
              }
            }
            fclose($eventsFile);

            ?>

<!-- End Single Post Content -->

      

          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <?php include 'footer.php' ; ?>

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