<div>
    <main class="main">
      @if (session()->has('success'))
        <div id="flash-message" class="alert alert-success">
            {{ session('success') }}
        </div>
      @endif


     <!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <img src="assets/img/hero_image_1.jpg" alt="" data-aos="fade-in" class="hero-bg">

  <div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="container position-relative">

      <div class="carousel-item active">
        <div class="carousel-container">
          <h2>Welcome to Moderna</h2>
          <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="url{{url('/donation')}}" wire:navigate class="btn-get-started">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <div class="carousel-container">
          <h2>Lorem Ipsum Dolor</h2>
          <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="url{{url('/donation')}}" wire:navigate class="btn-get-started">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <div class="carousel-container">
          <h2>Sequi ea ut et est quaerat</h2>
          <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="url{{url('/donation')}}" wire:navigate class="btn-get-started">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div><!-- End Carousel Item -->

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators"></ol>

    </div>

  </div>

</section><!-- /Hero Section -->

    
          <!-- Call to action -->
        <section id="featured-services" class="featured-services section">
          <div class="container">
            <div class="row gy-4 justify-content-center align-items-end">
    
               
               <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item item-cyan text-center middle-card">
                  <div class="icon">
                    <i class="fas fa-people-carry"></i>
                  </div>
                  <h3>Volunteer Opportunities</h3>
                  <p>Your support helps us reach more people in need. Make a donation today and change lives.</p>
                  
                  <a href="url{{url('/volunteer')}}" wire:navigate class="custom-btn mt-3">Get Involved</a>
                  
                </div>
              </div>
            
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item item-cyan text-center">
                  <div class="icon">
                    <i class="fa-solid fa-circle-dollar-to-slot"></i>
                  </div>
                  <h3>Donate</h3>
                  <p>Join us in making a difference. Explore opportunities to contribute your time and skills for a better world.</p>
                  <a href="url{{url('/donation')}}" wire:navigate class="custom-btn mt-3">Donate Now</a>
                </div>
              </div>
    
            
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item item-cyan text-center">
                  <div class="icon">
                    <i class="fas fa-handshake-angle"></i>
                  </div>
                  <h3>Partner With Us</h3>
                  <p>Collaborate with us to create sustainable impact. Together, we can achieve more.</p>
                  <a href="url{{url('/partner')}}" wire:navigate class="custom-btn mt-3">Partner Now</a>
                </div>
              </div>
    
            </div>
          </div>
        </section><!-- /Call to action -->
    
        <!-- About Section -->
        <!-- About Section -->
    <section id="about" class="about section light-background">
      <div class="container">
        <div class="row gy-4">
          <!-- Image with Overlay Card -->
          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
            <div class="image-container position-relative">
              <img src="assets/img/hero_image_1.jpg" class="img-fluid w-100" alt="About Us">
              <a href="https://www.youtube.com/watch?v=FLEkwtCoWV8" class="glightbox pulsating-play-btn"></a>
    
              <!-- Overlay Stats Card -->
              <div class="stats-card">
                <div class="stats-item">
                  <h4>300+</h4>
                  <p>Trained in Digital Skills</p>
                </div>
                <div class="stats-item">
                  <h4>1000+</h4>
                  <p>Families Supported</p>
                </div>
              </div>
            </div>
          </div>
    
          <!-- Content Section -->
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Who we are</h3>
            <h4>Bridging Gaps, Building Futures...</h4>
            <p class="fst-italic">
              At EmpowerEdTech Innovations Foundation, we believe in creating opportunities for everyone. Founded with a mission to support underserved and ethnic minority communities, we’re tackling the digital divide, alleviating poverty, and championing sustainability.
            </p>
            <h5>Our work focuses on three pillars</h5>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Digital Empowerment</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Environmental Sustainability</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Essential Support</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->
    
        <!-- Projects Section -->
        <section id="features" class="features section">
          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Projects Coming Up</h2>
            <p class="px-5">
              Explore EmpowerEdTech Innovations Foundation's impactful projects, including the Digital Empowerment Academy, Green Futures Initiative, and Essential Support Programs.
            </p>
          </div>
    
          <div class="container">
            <div class="row gy-4 align-items-center features-item">
              <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                <div class="image-container">
                  <img src="assets/img/charity3.jpg" class="img-fluid" alt="Project Image">
                </div>
              </div>
              <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check"></i><span> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check"></i><span> Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check"></i><span> Ullam est qui quos consequatur eos accusamus.</span></li>
                </ul>
              </div>
            </div>
    
            <div class="row gy-4 align-items-center features-item">
              <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <div class="image-container">
                  <img src="assets/img/charity2.jpg" class="img-fluid" alt="Project Image">
                </div>
              </div>
              <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                <h3>Corporis temporibus maiores provident</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
            </div>
    
            <div class="row gy-4 align-items-center features-item">
              <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                <div class="image-container">
                  <img src="assets/img/charity.jpg" class="img-fluid" alt="Project Image">
                </div>
              </div>
              <div class="col-md-7" data-aos="fade-up">
                <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                <p>
                  Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.
                </p>
                <ul>
                  <li><i class="bi bi-check"></i><span> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check"></i><span> Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check"></i><span> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</span></li>
                </ul>
              </div>
            </div>
    
            <div class="row gy-4 align-items-center features-item">
              <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                <div class="image-container">
                  <img src="assets/img/charity2.jpg" class="img-fluid" alt="Project Image">
                </div>
              </div>
              <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
            </div>
          </div>
        </section>
    
      </main>
</div>
