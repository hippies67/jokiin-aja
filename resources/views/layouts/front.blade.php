<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('logo/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('logo/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('logo/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('logo/site.webmanifest')}}">

    @foreach($web as $webs)
    <title>{{ $webs->name }}</title>
    @endforeach
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .nav-link:hover{
            color: #a2dc4d !important;
        }

        .img-tim{
            border-radius: 10px;
            width: 200px;
        }

        .brand {
            font-size: 24px;
            font-weight: 700;
        }

      .upper {
          background-color: #232525;
      }
  
      .active {
          color: #a2dc4d !important;
      }
  
      .small {
        font-weight: 100;
        color: gray !important;
      }

      footer {
        background-color: #232525 !important;
      }    
   
      .fixed-top {
          top: -40px;
          transform: translateY(40px);
          transition: transform .3s;
      }

      .navbar-dark .navbar-toggler {
        color: rgba(255,255,255,.55);
        border-color: rgb(35 37 37);
      }

      .navbar-dark .navbar-nav .nav-link:link {
        color: rgba(255,255,255,.55) ;
      }
    </style>
  </head>
 <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="200">
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar_top" style="background-color: #232525;">
      <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}" style="color: #a2dc4d;">
            @foreach($web as $webs)
            <img src="{{ Storage::url($webs->logo) }}" style="width: 70px;">
            @endforeach
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              </ul>
              <div class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link nav-button nav_section4 scrollLink active" id="berandaLink" aria-current="page"
                          href="#section0">Beranda</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link nav-button nav_section1 scrollLink" id="jasaLink" href="#section1">Jasa</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link nav-button nav_section2 scrollLink" href="#section2">Kontak</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link nav-button nav_section3 scrollLink" href="#section3">Tim</a>
                  </li>
              </div>
          </div>
      </div>
  </nav>
    <!-- Optional JavaScript; choose one of the two! -->
    @yield('container')
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
          <!-- Left -->
          <div class="me-5 d-none d-lg-block">
              <span>Terhubung dengan kami di jejaring sosial :</span>
          </div>
          <!-- Left -->

          <!-- Right -->
          @foreach($web as $webs)
          <div>
              <a href="https://facebook.com/{{ $webs->facebook }}" class="me-4 text-reset">
                  <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/{{ $webs->twitter }}" class="me-4 text-reset">
                  <i class="fab fa-twitter"></i>
              </a>
              <a href="https://instagram.com/{{ $webs->instagram }}" class="me-4 text-reset">
                  <i class="fab fa-instagram"></i>
              </a>
          </div>
          @endforeach
          <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
          <div class="container text-center text-md-start mt-5">
              <!-- Grid row -->
              <div class="row mt-3">
                  <!-- Grid column -->
                  @foreach($web as $webs)
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                      <!-- Content -->
                      <img src="{{ asset('logo.png') }}" style="width: 100px;">
                      <h6 class="text-uppercase fw-bold mb-4" style="color: #a2dc4d; margin-top: 30px;">
                          <i class="fas fa-gem me-3"></i>{{ $webs->name }}
                      </h6>
                      <p>
                        {!! $webs->description !!}
                      </p>
                  </div>
                  @endforeach
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                      <!-- Links -->
                      <h6 class="text-uppercase fw-bold mb-4" style="color: #a2dc4d;">
                          Jasa
                      </h6>
                      @foreach($allJasa as $jasa)
                      <p>
                          <a href="#1-jasa" class="text-reset scrollLink">{{ $jasa->name }}</a>
                      </p>
                      @endforeach
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->

                  <!-- Grid column -->

                  <!-- Grid column -->
                  @foreach ($web as $webs)
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                      <!-- Links -->
                      <h6 class="text-uppercase fw-bold mb-4" style="color: #a2dc4d;">
                          Kontak
                      </h6>
                      <p><i class="fas fa-home me-3" style="color: #a2dc4d;"></i> {{ $webs->address }}</p>
                      <p>
                          <i class="fas fa-envelope me-3" style="color: #a2dc4d;"></i>
                          {{ $webs->email }}
                      </p>
                      <p><i class="fas fa-phone me-3" style="color: #a2dc4d;"></i>{{ $webs->phone }}</p>
                  </div>             
                  @endforeach
                  <!-- Grid column -->
              </div>
              <!-- Grid row -->
          </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
          © 2021 Hak Cipta
          @foreach ($web as $webs)
          <a class="text-reset fw-bold" href="{{ url('/') }}">{{ $webs->name }}</a>
          @endforeach
      </div>
      <!-- Copyright -->
  </footer>
<!-- Footer -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{ asset('slick/slick.js')}}" type="text/javascript" charset="utf-8"></script>
    <script>
        $(document).ready(function() {
             $("a.scrollLink").click(function(event) {
                 var navbarId = document.getElementById("navbarSupportedContent");
                 navbarId.classList.remove('show');
                 
                 event.preventDefault();
                 
                 $("html, body").animate({
                     scrollTop: $($(this).attr("href")).offset().top
                 }, 500);
             });
         });
    </script>

    <script>  
        $('.regular').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        });
    </script>

    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function(){
        
        window.addEventListener('scroll', function() {
             
          if (window.scrollY > 200) {
            document.getElementById('navbar_top').classList.add('fixed-top');
            // add padding top to show content behind navbar
            navbar_height = document.querySelector('.navbar').offsetHeight;
            document.body.style.paddingTop = navbar_height + 'px';
          } else {
             document.getElementById('navbar_top').classList.remove('fixed-top');
             // remove padding top from body
            document.body.style.paddingTop = '0';
          } 
        });
      }); 
    </script>

    <script>
        $('.nav-button').click(function(){
            $('a').removeClass('active');
            $('.nav_' + $(this).attr('href').replace('#', '')).addClass('active');
        });
    </script>

    <script>
        $("#berandaLink").click(function () {
            window.location = `{{ url('/') }}`;
        });
    </script>
  </body>
</html>