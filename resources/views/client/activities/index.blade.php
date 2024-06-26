<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nata Bali Tours - Activities</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('client.links')
  <style>
    #hero {
        width: 100%;
        height: 100vh;
        background: url("{{ asset('photos/bali2.jpg') }}") top right;
        background-size: cover;
        position: relative;
    }
    .testimonials {
    padding: 80px 0;
    background: url("{{ asset('photos/bali3.jpg') }}") no-repeat;
    background-position: center center;
    background-size: cover;
    position: relative;
    }
    #footer {
    background: url("{{ asset('photos/bali1.jpg') }}") top center no-repeat;
    background-size: cover;
    color: #fff;
    font-size: 14px;
    text-align: center;
    padding: 80px 0;
    position: relative;
    }
</style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">

    @include('client.nav')

  </header><!-- End Header -->

  <main id="main">
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Nata Bali Tours</h1>
      <h2>Tour Guide & Driver</h2>
    </div>
  </section><!-- End Hero -->
    <!-- ======= About Me Section ======= -->
    <section class="about">
      <div class="container">

        <div class="section-title">
          <span>Our Activities</span>
          <h2>Our Activities</h2>
          <p>Explore an array of exhilarating activities with our selection of adventure-packed experiences. Dive into thrilling outdoor pursuits, from hiking majestic trails to conquering challenging peaks. Immerse yourself in cultural discoveries as you engage in authentic local traditions and crafts. Whether you seek adrenaline-fueled adventures or tranquil nature escapes, our curated activities offer something for every explorer. Embark on a journey of discovery and create unforgettable moments with our diverse range of activities.</p>
        </div>
      </div>
    </section><!-- End About Me Section -->


    <!-- ======= Pricing Section ======= -->
    <section class="pricing">
      <div class="container">

        <div class="row">
        @foreach($activities as $activity)
        <div class="col-lg-3 col-md-6">
          <div class="box">
              <h3>{{ $activity->activity_name }}</h3>
              <img src="{{ $activity->getImageUrl() }}" alt="{{ $activity->activity_name }}" class="img-fluid mb-3">
              <h4><sup>Rp</sup>{{ $activity->price }}<span> / pax</span></h4>
              <p>{!! implode(' ', array_slice(str_word_count(strip_tags($activity->description), 1), 0, 20)) !!} ...</p>
              <div class="btn-wrap">
                  <a href="{{ route('activities.details', ['activity' => $activity]) }}" class="btn-buy">Book</a>
              </div>
          </div>
      </div>
        @endforeach
        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Nata Bali Tours</h3>
      <div class="social-links">
        <a href="https://web.facebook.com/Natabalitours?mibextid=LQQJ4d&paipv=0&eav=AfZxk3jUn_zuy0l-p19afuOh-q7AW7QP8VHaQB5rECeQy8pBqxgCQdkX1jR2U5z0QjY&_rdc=1&_rdr" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/nata_bali_tours/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.tripadvisor.com/Attraction_Review-g297696-d8749516-Reviews-Bali_Nata_Tour-Jimbaran_South_Kuta_Bali.html" class="instagram"><i class="bi bi-airplane"></i></i></a>\
        <a href="https://wa.me/6285737125637" class="instagram"><i class="bi bi-whatsapp"></i></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Nata Bali Tours</span></strong>. All Rights Reserved
        <br>Jalan Dewi Sri Gang Jeruk IV No 16 Batubulan
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  @include('client.scripts')

</body>

</html>