<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>

        <ul class="list-unstyled menu-categories" id="accordionExample">
          <li class="menu">
            <a href="{!! route('dashboard') !!}" aria-expanded="false" class="dropdown-toggle">
              <div class="">
                <span> Dashboard </span>
              </div>
            </a>
          </li>
          <li class="menu">
            <a href="{!! route('sitesettingsindex') !!}" aria-expanded="false" class="dropdown-toggle">
              <div class="">
                <span> Site Settings </span>
              </div>
            </a>
          </li>

          <li class="menu">
            <a href="{!! route('AbountIndex') !!}" aria-expanded="false" class="dropdown-toggle">
              <div class="">
                <span> About Us Settings </span>
              </div>
            </a>
          </li>

          <li class="menu">
                <a href="#starter-kit" data-active="true" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div>
                        <span>Sections Settings</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="submenu list-unstyled collapse show" id="starter-kit" data-parent="#accordionExample" style="">
                    <li>
                        <a href="{!! route('bannersectionsettingsindex') !!}"> Banner Sections </a>
                    </li>
                    <li>
                        <a href="{!! route('CasestudiesIndex') !!}">Case Studies</a>
                    </li>
                    <li>
                        <a href="{!! route('ServiceIndex') !!}">Service Section</a>
                    </li>
                    <li>
                        <a href="{!! route('ClientIndex') !!}">Our Clients</a>
                    </li>
                    <li>
                        <a href="{!! route('techIndex') !!}">Our Technologies</a>
                    </li>
                    <li>
                        <a href="{!! route('videoIndex') !!}">Video Section</a>
                    </li>
                </ul>
            </li>
          <li class="menu">
                <a href="#starter-kit1" data-active="true" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div>
                        <span>Contact us</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="submenu list-unstyled collapse show" id="starter-kit1" data-parent="#accordionExample" style="">
                    <li>
                        <a href="{!! route('all_contact') !!}"> Contacts </a>
                    </li>
                </ul>
                <ul class="submenu list-unstyled collapse show" id="starter-kit1" data-parent="#accordionExample" style="">
                    <li>
                        <a href="{!! route('bannersectionsettingsindex') !!}"> Contacts us settings </a>
                    </li>
                </ul>
            </li>


        </ul>

    </nav>

</div>
