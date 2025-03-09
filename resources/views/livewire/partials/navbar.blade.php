<div>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
    
          <a href="{{url('')}}" class="logo d-flex align-items-center">
            
            <img src="assets/img/main_logo.png" alt="Logo image">
            <h5 class="sitename">EmpowerEdTech</h5>
          </a>
    
          <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="{{url('')}}" class="active">Home</a></li>
              <li><a href="{{url('/about')}}">About</a></li>
              <li><a href="{{url('gallery')}}" wire:navigate>Gallery</a></li>
              <li class="dropdown"><a href="#"><span>Make a move</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{{url('/donation')}}">Donate</a></li>
                  <li><a href="{{url('/volunteer')}}">Volunteer</a></li>
                  <li><a href="{{url('/partner')}}">Partner</a></li>
                </ul>
              </li>
              {{-- <li><a href="contact.html">Contact</a></li> --}}
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>
    
        </div>
      </header>
</div>
