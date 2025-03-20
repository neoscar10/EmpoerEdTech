<div>
    <footer id="footer" class="footer dark-background">

        <!-- News Letter -->
        <!-- <div class="footer-newsletter">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-lg-6">
                <h4>Join Our Newsletter</h4>
                <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                <form action="forms/newsletter.php" method="post" class="php-email-form">
                  <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                </form>
              </div>
            </div>
          </div>
        </div> -->
    
        <div class="container footer-top">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
              <a href="#" class="d-flex align-items-center">
                <span class="sitename">EmpowerEdTech</span>
              </a>
              <div class="footer-contact pt-3">
                <p>A108 Bafajo Road</p>
                <p>Yelwa, SK 535022</p>
                <p class="mt-3"><strong>Phone:</strong> <span>+1 2345 6789</span></p>
                <p><strong>Email:</strong> <span>neoscar@tech.com</span></p>
              </div>
            </div>
    
            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="{{url('/about')}}" wire:navigate>About us</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="{{url('/partner')}}" wire:navigate>Partnership</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="{{url('/volunteer')}}" wire:navigate>Volunteer</a></li>
                {{-- <li><i class="bi bi-chevron-right"></i> <a href="#">Gallery</a></li> --}}
              </ul>
            </div>
    
            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Our Goals</h4>
              <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="{{route('digitalEmpoerment')}}">Digital Empowerment</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="{{route('environmentalSustainability')}}">Environmental Sustainability</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="{{route('essentialSupport')}}">Essential Support</a></li>
              </ul>
            </div>
    
            <div class="col-lg-4 col-md-12">
              <h4>Follow Us</h4>
              <p>Stay updated with on all of our programs by following us on our social media handles</p>
              <div class="social-links d-flex">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href="https://www.facebook.com/share/168SPp24JK/?mibextid=wwXIfr"><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                {{-- <a href=""><i class="bi bi-linkedin"></i></a> --}}
              </div>
            </div>
    
          </div>
        </div>
    
        <div class="container copyright text-center mt-4">
          <p>© <span>Copyright {{date('Y')}}</span> <strong class="px-1 sitename">EmpowerEdTech</strong> <span>All Rights Reserved</span></p>
        </div>
    
      </footer>






      <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Preloader -->
  {{-- <div id="preloader"></div> --}}
  <!-- Vendor JS Files -->
  <script src="{{ asset( 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset( 'assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset( 'assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset( 'assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset( 'assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset( 'assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset( 'assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset( 'assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset( 'assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset( 'assets/js/main.js') }}?v={{ time() }}"></script>
  {{-- <script src="{{ asset('js/script.js') }}?v={{ time() }}"></script> --}}

  
</div>
