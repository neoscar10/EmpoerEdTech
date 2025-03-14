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
          <h2>The Mission</h2>
          <p>To empower marginalized communities through access to education, technology, and environmental awareness.</p>
          <a href="url{{url('/donation')}}" wire:navigate class="btn-get-started">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <div class="carousel-container">
          <h2>The Vission</h2>
          <p>We envision a world where everyone has the tools, skills, and confidence to thrive in an increasingly digital and interconnected world.</p>
          <a href="url{{url('/donation')}}" wire:navigate class="btn-get-started">Donate <i class="fa-solid fa-heart"></i></a>
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <div class="carousel-container">
          <h2>Why We Matter</h2>
          <p>EmpowerEdTech Innovations Foundation integrates education, technology, and sustainability to empower individuals and build resilient communities.</p>
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
          <div class="container section-title" data-aos="fade-up">
              <h2>Our Projects</h2>
              <p class="px-5">
                  Explore EmpowerEdTech Innovations Foundation's impactful projects.
              </p>
          </div>
      
          <div class="container">
              @foreach($projects as $index => $project)
                  <div class="row gy-4 align-items-center features-item">
                      @if($index % 2 == 0)
                          <!-- Image on the Left, Text on the Right -->
                          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                              <div class="image-container">
                                  <img src="{{ asset('storage/'.$project->image) }}" class="img-fluid" alt="Project Image">
                              </div>
                          </div>
                          <div class="col-md-7" data-aos="fade-up">
                              <h3>{{ $project->title }}</h3>
                              <p><small>Posted on {{$project->created_at->format('d M, Y')}}</small></p>
                              <p class="fst-italic">{{ $project->description }}</p>
                          </div>
                      @else
                          <!-- Image on the Right, Text on the Left -->
                          <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                              <div class="image-container">
                                  <img src="{{ asset('storage/'.$project->image) }}" class="img-fluid" alt="Project Image">
                              </div>
                          </div>
                          <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                              <h3>{{ $project->title }}</h3>
                              <p><small>Posted on {{$project->created_at->format('d M, Y')}}</small></p>
                              <p class="fst-italic">{{ $project->description }}</p>
                          </div>
                      @endif
                  </div>
              @endforeach
          </div>
      </section>
      
    
      </main>
</div>
