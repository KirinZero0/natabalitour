<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nata Bali Tours</title>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Nata Bali Tours</h1>
      <h2>Tour Guide & Driver</h2>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <span>About Us</span>
          <h2>About Us</h2>
          <p>Welcome to Nata Bali Tours, where every journey is a tapestry of unforgettable experiences woven with local charm and expert guidance. Nestled in the heart of Bali, our team is dedicated to curating bespoke adventures that immerse you in the island's rich culture, stunning landscapes, and hidden gems. With a deep understanding of Bali's heritage and a passion for sharing its wonders, we strive to craft personalized itineraries that cater to every traveler's desires, whether you seek tranquil retreats, adrenaline-pumping escapades, or cultural encounters.</p>
          <br>
          <p>At Nata Bali Tours, we believe in more than just sightseeing; we believe in fostering meaningful connections between travelers and the destinations they explore. Our knowledgeable guides, fluent in multiple languages, provide insightful commentary, ensuring that every moment of your journey is both enlightening and enjoyable. From exploring ancient temples shrouded in mystique to indulging in delectable culinary delights, we are committed to creating authentic experiences that leave a lasting impression. Whether you're a solo adventurer, a couple seeking romance, or a family yearning for adventure, let Nata Bali Tours be your gateway to the enchanting world of Bali.</p>
        </div>


      </div>
    </section><!-- End About Me Section -->

    <!-- ======= My Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Our Services</span>
          <h2>Our Services</h2>
          <p>
            Discover a comprehensive range of services tailored to suit your every travel need, from guided cultural tours and adventurous excursions to bespoke itineraries meticulously crafted to ensure an unforgettable Bali experience.</p>
        </div>

          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4 class="title"><a href="{{route('packages.index')}}">Packages</a></h4>
                    <p class="description">Embark on a seamless journey with our meticulously curated travel packages, designed to immerse you in the vibrant tapestry of Bali's culture, nature, and adventure.</p>
                </div>
            </div>
        
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4 class="title"><a href="{{route('activities.index')}}">Activities</a></h4>
                    <p class="description">Unleash your sense of exploration with an array of captivating activities, ranging from serene temple visits and exhilarating water sports to authentic culinary experiences, promising to create unforgettable memories in the enchanting realm of Bali.</p>
                </div>
            </div>
          </div>

      </div>
    </section><!-- End My Services Section -->

    <section  class="services">
      <div class="container">

        <div class="section-title">
          <span>Why Choose Us</span>
          <h2>Why Choose Us</h2>
          <p>At Nata Bali Tours, we're dedicated to crafting unforgettable travel experiences tailored to you. With expert local knowledge and personalized service, we ensure seamless journeys. Whether it's adventure, relaxation, or cultural immersion, trust us to make your dream vacation a reality.</p>
        </div>

          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-globe"></i></div>
                    <h4 class="title">Diverse Destinations</h4>
                    <p class="description">Nata Bali Tours have many of the best holiday choices while you are in Bali</p>
                </div>
            </div>
        
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-cash"></i></div>
                    <h4 class="title">Value For Money</h4>
                    <p class="description">The best price for you with the best service from us</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box">
                  <div class="icon"><i class="bi bi-emoji-smile"></i></div>
                  <h4 class="title">Customer Satisfaction</h4>
                  <p class="description">Our commitment to customer satisfaction drives everything we do, ensuring every guest enjoys a memorable and rewarding experience.</p>
              </div>
          </div>
          </div>

      </div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  My experience with Nata Bali Tours was beyond exceptional! From the moment I inquired about their services to the final day of my tour, everything was handled with utmost professionalism and care. Our guide was incredibly knowledgeable, making every stop on our itinerary a memorable adventure. I highly recommend Nata Bali Tours to anyone looking for an authentic and immersive experience in Bali.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Nata Bali Tours exceeded all my expectations! Their attention to detail in planning my itinerary ensured that I got to see all the highlights of Bali while also experiencing some off-the-beaten-path treasures. The guides were friendly, accommodating, and truly passionate about sharing their culture with us. I cannot thank them enough for the wonderful memories I made during my trip.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I had the most amazing time exploring Bali with Nata Bali Tours! From sunrise hikes to waterfall adventures, every day was filled with excitement and beauty. The team went above and beyond to make sure we were comfortable and satisfied throughout the entire trip. I cannot wait to book another tour with them in the future!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Nata Bali Tours provided me with a once-in-a-lifetime experience that I will never forget. Their local expertise allowed me to delve deep into Bali's culture, history, and natural wonders. Each day was perfectly planned, yet flexible enough to accommodate any last-minute changes or requests. I am grateful for the memories created and highly recommend Nata Bali Tours to anyone visiting this incredible island.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I cannot speak highly enough of Nata Bali Tours! Their professionalism and attention to detail made my trip to Bali absolutely unforgettable. From the moment I landed until my departure, everything was taken care of seamlessly. The personalized service and genuine care for their guests truly set them apart. If you're looking for an authentic Bali experience, look no further than Nata Bali Tours.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= My Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Recommendations</span>
          <h2>Recommendations</h2>
          <p>Discover our curated recommendations of must-visit destinations and hidden gems throughout Bali, handpicked by our team of experts to ensure you uncover the island's most intriguing and unforgettable experiences.</p>
        </div>
        <div class="row portfolio-container">
            @foreach($articles as $article)
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-img"><img src="{{$article->getImageUrl()}}" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>{{$article->article_title}}</h4>
                <p>{!! implode(' ', array_slice(str_word_count(strip_tags($article->description), 1), 0, 20)) !!} ...</p>
                <a href="{{route('article.details', ['article' => $article])}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
            @endforeach
        </div>

      </div>
    </section><!-- End My Portfolio Section -->

    <!-- ======= Contact Me Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact Us</span>
          <h2>Contact Us</h2>
          <p>
            For inquiries, cosultation, or personalized tour arrangements, please don't hesitate to reach out to us via links below</p>
        </div>

        <div>

          <div>

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-share-alt"></i>
                  <h3>Social Profiles</h3>
                  <div class="social-links">
                    <a href="https://web.facebook.com/Natabalitours?mibextid=LQQJ4d&paipv=0&eav=AfZxk3jUn_zuy0l-p19afuOh-q7AW7QP8VHaQB5rECeQy8pBqxgCQdkX1jR2U5z0QjY&_rdc=1&_rdr" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/nata_bali_tours/" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.tripadvisor.com/Attraction_Review-g297696-d8749516-Reviews-Bali_Nata_Tour-Jimbaran_South_Kuta_Bali.html" class="instagram"><i class="bi bi-airplane"></i></i></a>
                    <a href="https://wa.me/6285737125637" class="instagram"><i class="bi bi-whatsapp"></i></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>ketutnata2@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+62 85737125637</p>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Contact Me Section -->

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