<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nata Bali Tours - Package Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('client.links')
  <style>
    #hero {
        width: 100%;
        height: 100vh;
        background: url("{{$package->getImageUrl()}}") top right;
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
    .bank-logo-small {
    width: 70px; /* Adjust the width to your preference */
    height: auto; /* Maintain aspect ratio */
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
      <h1>{{$package->package_name}}</h1>
      <h2>Tour Package</h2>
    </div>
  </section><!-- End Hero -->

    <!-- ======= About Me Section ======= -->
    <section class="about">
        <div class="container">
          <div class="section-title">
            <span>About {{$package->package_name}}</span>
            <h2>About {{$package->package_name}}</h2>
            
          </div>
          <p>{!!$package->description!!}</p>
        </div>
      </section><!-- End About Me Section -->
          <!-- ======= Contact Me Section ======= -->
    <section class="contact">
        <div class="container">
  
            <div class="section-title">
                <span>Booking Form</span>
                <h2>Booking Form</h2>
                <p>Kindly note that prior to filling out the booking form, we kindly request our clients to transfer the total amount to the following bank account:</p>
                <div class="bank-info mb-3">
                    <img src="{{ asset('photos/bca.png') }}" alt="Bank Logo" class="bank-logo-small">
                    <div class="account-details">
                        <p><strong>0491621728</strong></p>
                        <p>I KETUT NATA</p>
                    </div>
                </div>
            <div>
  
          <div>
  
            <div>
              <form action="{{ route('packages.book') }}" enctype="multipart/form-data" method="post" class="needs-validation form-frame" novalidate>
                  @csrf
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                          <div class="invalid-feedback">Please enter your name.</div>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                          <div class="invalid-feedback">Please enter a valid email address.</div>
                      </div>
                  </div>
                  <div class="row mt-3">
                      <div class="col-md-6 form-group">
                          <input type="number" name="number_of_people" class="form-control" placeholder="Number of People" required>
                          <div class="invalid-feedback">Please enter the number of people.</div>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                          <input type="date" name="date" class="form-control" required>
                          <div class="invalid-feedback">Please select a date.</div>
                      </div>
                  </div>
                  <div class="row mt-3">
                      <div class="col-md-6 form-group">
                          <input type="number" name="phone_number" class="form-control" placeholder="Phone Number. Ex: 62xxxxxx" required>
                          <div class="invalid-feedback">Please enter your phone number.</div>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                          <input type="hidden" name="package_id" value="{{ $package->id }}" required>
                          <input type="text" name="package" class="form-control" value="{{ $package->package_name }} - Rp{{ $package->price }}" readonly required>
                      </div>
                  </div>
                  <div class="form-group mt-3">
                      <label class="mb-2" for="address">Pickup Address</label>
                      <input type="text" class="form-control" name="address" id="address" placeholder="Your Pickup Address" required>
                      <div class="invalid-feedback">Please enter your pickup address.</div>
                  </div>
                  <div class="form-group mt-3">
                      <label class="mb-2" for="image">Upload Your Payment Here</label>
                      <input type="file" class="form-control" name="image" id="image" required>
                      <div class="invalid-feedback">Please upload your payment image.</div>
                  </div>
          
                  <div class="text-center mt-3">
                      <button type="submit" id="submitBtn">Book</button>
                  </div>
              </form>
          </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Me Section -->
      
  </main>

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
  <script>
    // Get the input elements
    var numberOfPeopleInput = document.querySelector('input[name="number_of_people"]');
    var priceInput = document.querySelector('input[name="package"]');

    // Add event listener to the number of people input
    numberOfPeopleInput.addEventListener('input', function() {
        // Get the number of people entered by the user
        var numberOfPeople = numberOfPeopleInput.value;
        
        // Calculate the new price
        var newPrice = numberOfPeople * {{ $package->price }};
        
        // Update the price input value
        priceInput.value = "{{ $package->package_name }} - Rp" + newPrice;
    });
</script>
<script>
  // Disable form submission if there are invalid fields
  document.getElementById('submitBtn').addEventListener('click', function(event) {
      var form = document.getElementsByClassName('needs-validation')[0];
      if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
      }
      form.classList.add('was-validated');
  });
</script>
</body>

</html>