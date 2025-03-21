<div>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
    
          <a href="{{url('')}}" class="logo d-flex align-items-center" wire:navigate>
            
            <img src="assets/img/logo.png" alt="Logo image">
            <h5 class="sitename">EmpowerEdTech</h5>
          </a>
    
          <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="{{url('')}}" class="active-----rename" wire:navigate>Home</a></li>
              <li><a href="{{url('/about')}}" wire:navigate>About</a></li>
              <li><a href="{{url('/projectsBlog')}}" wire:navigate>Projects</a></li>
              <li class="dropdown"><a href="#"><span>Our Goals</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{{url('/digitalEmpowerment')}}" wire:navigate>Digital Empowerment</a></li>
                  <li><a href="{{url('/environmentalSustainability')}}" wire:navigate>Environmental Sustainability</a></li>
                  <li><a href="{{url('/essentialSupport')}}" wire:navigate>Essential Support</a></li>
                  
                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>Make a Move</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{{url('/donation')}}" wire:navigate>Donate</a></li>
                  <li><a href="{{url('/volunteer')}}" wire:navigate>Volunteer</a></li>
                  <li><a href="{{url('/partner')}}" wire:navigate>Partner</a></li>
                </ul>
              </li>

              
             
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>
    
        </div>
      </header>
</div>
