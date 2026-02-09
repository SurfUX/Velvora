<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Velvora Travels</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="destinations-page">

<?php include 'header.php'; ?>


  <main class="main">

<!-- Page Title -->
<div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/travel/showcase-8.webp);">
  <div class="container position-relative">
    <h1>Destinations</h1>
    <p>Journey through Sri Lanka’s wonders, where golden beaches, timeless cities, emerald mountains, and untamed wildlife await. Experience authentic village life, wander ancient temples, breathe the mist of rolling hills, and hear the jungle whisper its secrets. </p>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li class="current">Destinations</li>
      </ol>
    </nav>
  </div>
</div>

<!-- Travel Destinations Section -->
<section id="travel-destinations" class="travel-destinations section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2>Discover Sri Lanka with Velvora Travels</h2>
        <p class="mb-5">
          From golden beaches to misty mountains, from ancient temples to wild safaris, Sri Lanka is an adventure for every sense. Let Velvora Travels guide you through unforgettable moments, where every corner whispers adventure, every view takes your breath away.
        </p>
      </div>
    </div>

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

      <ul class="destination-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
        <li data-filter="*" class="filter-active">All Destinations</li>
        <li data-filter=".filter-tropical">Beaches</li>
        <li data-filter=".filter-mountain">Hill Country</li>
        <li data-filter=".filter-urban">Cities</li>
        <li data-filter=".filter-historical">Cultural Sites</li>
        <li data-filter=".filter-coastal">Coastal Escapes</li>
      </ul>

      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

     

        <!-- Sigiriya & Cultural Triangle -->
        <div class="col-lg-4 col-md-6 destination-item isotope-item filter-historical">
          <a href="#" class="destination-tile">
            <div class="tile-image">
              <img src="assets/img/travel/culture.jpg" alt="Cultural Sri Lanka" class="img-fluid" loading="lazy">
              <div class="overlay-content">
                <span class="destination-tag cultural">Heritage</span>
                <div class="destination-info">
                  <h4>Cultural Triangle</h4>
                  <p>Ancient cities, UNESCO ruins, sacred temples, and Sri Lanka’s legendary royal history.</p>
                  <div class="destination-stats">
                    <span class="tours-available"><i class="bi bi-map"></i> 12 Tours</span>
                    <span class="starting-price">From €1,350</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Hill Country -->
        <div class="col-lg-4 col-md-6 destination-item isotope-item filter-mountain">
          <a href="#" class="destination-tile">
            <div class="tile-image">
              <img src="assets/img/travel/ella.webp" alt="Sri Lanka Hill Country" class="img-fluid" loading="lazy">
              <div class="overlay-content">
                <span class="destination-tag adventure">Nature</span>
                <div class="destination-info">
                  <h4>Ella & Tea Highlands</h4>
                  <p>Cool mountain air, scenic train rides, tea plantations, waterfalls, and breathtaking views.</p>
                  <div class="destination-stats">
                    <span class="tours-available"><i class="bi bi-map"></i> 10 Experiences</span>
                    <span class="starting-price">From €1,250</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Wildlife & Nature -->
        <div class="col-lg-4 col-md-6 destination-item isotope-item filter-tropical">
          <a href="#" class="destination-tile">
            <div class="tile-image">
              <img src="assets/img/travel/yala.jpg" alt="Sri Lanka Wildlife Safari" class="img-fluid" loading="lazy">
              <div class="overlay-content">
                <span class="destination-tag nature">Wildlife</span>
                <div class="destination-info">
                  <h4>National Parks</h4>
                  <p>Elephants, leopards, birds, and unforgettable safari adventures in pristine nature.</p>
                  <div class="destination-stats">
                    <span class="tours-available"><i class="bi bi-map"></i> 9 Safaris</span>
                    <span class="starting-price">From €1,180</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Colombo & Cities -->
        <div class="col-lg-4 col-md-6 destination-item isotope-item filter-urban">
          <a href="#" class="destination-tile">
            <div class="tile-image">
              <img src="assets/img/travel/galle.webp" alt="Colombo City" class="img-fluid" loading="lazy">
              <div class="overlay-content">
                <span class="destination-tag modern">City Life</span>
                <div class="destination-info">
                  <h4>Colombo & Galle</h4>
                  <p>Vibrant city culture, colonial heritage, local markets, cafés, and oceanfront views.</p>
                  <div class="destination-stats">
                    <span class="tours-available"><i class="bi bi-map"></i> 8 City Tours</span>
                    <span class="starting-price">From €950</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Beaches -->
        <div class="col-lg-4 col-md-6 destination-item isotope-item filter-coastal">
          <a href="#" class="destination-tile">
            <div class="tile-image">
              <img src="assets/img/travel/beach.jpeg" alt="Sri Lanka Beaches" class="img-fluid" loading="lazy">
              <div class="overlay-content">
                <span class="destination-tag romantic">Beach Paradise</span>
                <div class="destination-info">
                  <h4>Southern Coast</h4>
                  <p>Golden sands, surfing hotspots, sunset views, and relaxing seaside resorts.</p>
                  <div class="destination-stats">
                    <span class="tours-available"><i class="bi bi-map"></i> 14 Beach Escapes</span>
                    <span class="starting-price">From €1,100</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Ayurveda -->
        <div class="col-lg-4 col-md-6 destination-item isotope-item filter-tropical">
          <a href="#" class="destination-tile">
            <div class="tile-image">
              <img src="assets/img/travel/ayurweda.webp" alt="Sri Lanka Ayurveda Retreat" class="img-fluid" loading="lazy">
              <div class="overlay-content">
                <span class="destination-tag popular">Wellness</span>
                <div class="destination-info">
                  <h4>Ayurveda Retreats</h4>
                  <p>Holistic healing, yoga, meditation, and traditional wellness experiences by the ocean.</p>
                  <div class="destination-stats">
                    <span class="tours-available"><i class="bi bi-map"></i> 6 Retreats</span>
                    <span class="starting-price">From €1,900</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Adventure Hiking -->
        <div class="col-lg-4 col-md-6 destination-item isotope-item filter-mountain">
          <a href="#" class="destination-tile">
            <div class="tile-image">
              <img src="assets/img/travel/hiking.jpg" alt="Sri Lanka Adventure Trails" class="img-fluid" loading="lazy">
              <div class="overlay-content">
                <span class="destination-tag trekking">Adventure</span>
                <div class="destination-info">
                  <h4>Hiking Trails</h4>
                  <p>Mountain treks, rainforest walks, waterfalls, and panoramic viewpoints.</p>
                  <div class="destination-stats">
                    <span class="tours-available"><i class="bi bi-map"></i> 7 Adventures</span>
                    <span class="starting-price">From €1,300</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Sacred Sites -->
        <div class="col-lg-4 col-md-6 destination-item isotope-item filter-historical">
          <a href="#" class="destination-tile">
            <div class="tile-image">
              <img src="assets/img/travel/temple.jpg" alt="Sacred Sri Lanka" class="img-fluid" loading="lazy">
              <div class="overlay-content">
                <span class="destination-tag ancient">Spiritual</span>
                <div class="destination-info">
                  <h4>Sacred Temples</h4>
                  <p>Ancient Buddhist temples, sacred relics, and spiritual journeys across the island.</p>
                  <div class="destination-stats">
                    <span class="tours-available"><i class="bi bi-map"></i> 9 Pilgrimages</span>
                    <span class="starting-price">From €1,050</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Surfing -->
        <div class="col-lg-4 col-md-6 destination-item isotope-item filter-urban">
          <a href="#" class="destination-tile">
            <div class="tile-image">
              <img src="assets/img/travel/surf.webp" alt="Sri Lanka Surfing Spots" class="img-fluid" loading="lazy">
              <div class="overlay-content">
                <span class="destination-tag family">Surf Life</span>
                <div class="destination-info">
                  <h4>Surf Coast</h4>
                  <p>World-famous waves, relaxed beach towns, surf schools, and vibrant coastal culture.</p>
                  <div class="destination-stats">
                    <span class="tours-available"><i class="bi bi-map"></i> 6 Surf Trips</span>
                    <span class="starting-price">From €1,150</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

      </div>

    </div>

    <div class="row mt-5">
      <div class="col-lg-10 mx-auto text-center" data-aos="fade-up" data-aos-delay="400">
        <div class="planning-assistance">
          <div class="assistance-content">
            <h3>Plan Your Perfect Sri Lanka Journey</h3>
            <p>Not sure which destinations suit your travel style? Our Velvora Travels experts will create a personalized itinerary just for you.</p>
            <div class="assistance-actions">
              <a href="#" class="btn btn-primary">Get Free Travel Consultation</a>
              <a href="#" class="btn btn-outline">View All Tour Packages</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>
<!-- /Travel Destinations Section -->


  </main>

<?php include 'footer.php'; ?>
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>