<header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center dark-background">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center">
                    <a href="mailto:{{ App\Models\Website::getSettings()->email_website }}">
                        {{ App\Models\Website::getSettings()->email_website }}
                    </a>
                </i>

                <a
                    href="tel:{{ App\Models\Website::getSettings()->country_code_phone_website }}{{ App\Models\Website::getSettings()->phone_website }}">
                    <i class="bi bi-phone d-flex align-items-center ms-4">
                        {{ App\Models\Website::getSettings()->country_code_phone_website }}{{ App\Models\Website::getSettings()->phone_website }}
                    </i>
                </a>

            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="{{ App\Models\Website::getSettings()->link_twitter }}" target="_blank" class="twitter"><i
                        class="bi bi-twitter-x"></i></a>
                <a href="{{ App\Models\Website::getSettings()->link_facebook }}" target="_blank" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <a href="{{ App\Models\Website::getSettings()->link_instagram }}" target="_blank" class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <a href="{{ App\Models\Website::getSettings()->link_linkedin }}" target="_blank" class="linkedin"><i
                        class="bi bi-linkedin"></i></a>
                <a href="https://wa.me/{{ App\Models\Website::getSettings()->whatsapp_phone }}" class="whatsapp"
                    target="_blank">
                    <i class="bi bi-whatsapp"></i>
                    {{ App\Models\Website::getSettings()->country_code_whatsapp_phone }}{{ App\Models\Website::getSettings()->whatsapp_phone }}
                </a>
            </div>

        </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="{{ route('website.home') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="{{ asset('storage/logo/logo.svg') }}" alt="{{ $website->application_name }}"> -->
                <h1 class="sitename">{{ $website->application_name }}</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li>
                        <a href="{{ route('website.home') }}"
                            class="{{ Route::currentRouteName() === 'website.home' ? 'active' : '' }}">
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('website.contact') }}"
                            class="{{ Route::currentRouteName() === 'website.contact' ? 'active' : '' }}">
                            Contact
                        </a>
                    </li>
                    {{--                     <li>
                        <a href="{{ route('website.about') }}" class="{{ Route::currentRouteName() === 'website.about' ? 'active' : '' }}">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('website.departments') }}" class="{{ Route::currentRouteName() === 'website.departments' ? 'active' : '' }}">
                            Departments
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('website.services') }}" class="{{ Route::currentRouteName() === 'website.services' ? 'active' : '' }}">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('website.doctors') }}" class="{{ Route::currentRouteName() === 'website.doctors' ? 'active' : '' }}">
                            Doctors
                        </a>
                    </li> --}}

                    {{-- <li class="dropdown">
                        <a href="#">
                            @if ($website->lang === 'fr')
                                <div>
                                    <img src="{{ asset('img/website/lang/french.png') }}" alt="french">
                                    <span>FR</span>
                                </div>
                            @elseif($website->lang === 'en')
                                <div>
                                    <img src="{{ asset('img/website/lang/english.png') }}" alt="english">
                                    <span>EN</span>
                                </div>
                            @elseif($website->lang === 'it')
                                <div>
                                    <img src="{{ asset('img/website/lang/italian.png') }}" alt="italian">
                                    <span>IT</span>
                                </div>
                            @elseif($website->lang === 'de')
                                <div>
                                    <img src="{{ asset('img/website/lang/german.png') }}" alt="german">
                                    <span>DE</span>
                                </div>
                            @endif
                        </a>
                        <a href="#">
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>


                        <ul>
                            <li>
                                @php
                                    $flags = [
                                        ['fr', 'lang.fr', 'french', 'Français'],
                                        ['en', 'lang.en', 'english', 'English'],
                                        ['it', 'lang.it', 'italian', 'Italiano'],
                                        ['de', 'lang.de', 'german', 'Deutsch'],
                                    ];
                                @endphp
                                @foreach ($flags as $flag)
                                    @if ($website->lang !== $flag[0])
                                        <a href="{{ route($flag[1]) }}">
                                            <div>
                                                <img class="me-2"
                                                    src="{{ asset('img/website/lang/' . $flag[2] . '.png') }}"
                                                    alt="{{ $flag[2] }}">
                                                <span>
                                                    {{ $flag[3] }}
                                                </span>
                                            </div>
                                        </a>
                                    @endif
                                @endforeach
                            </li>
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown">
                                <a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li> --}}

                    <li class="dropdown">
                        <a href="#">
                            @if ($website->lang === 'fr')
                                <div>
                                    <img src="{{ asset('img/website/lang/french.png') }}" alt="french">
                                    <span>FR</span>
                                </div>
                            @elseif($website->lang === 'en')
                                <div>
                                    <img src="{{ asset('img/website/lang/english.png') }}" alt="english">
                                    <span>EN</span>
                                </div>
                            @elseif($website->lang === 'it')
                                <div>
                                    <img src="{{ asset('img/website/lang/italian.png') }}" alt="italian">
                                    <span>IT</span>
                                </div>
                            @elseif($website->lang === 'de')
                                <div>
                                    <img src="{{ asset('img/website/lang/german.png') }}" alt="german">
                                    <span>DE</span>
                                </div>
                            @endif
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul>
                            <li>
                                @php
                                    $flags = [
                                        ['fr', 'lang.fr', 'french', 'Français'],
                                        ['en', 'lang.en', 'english', 'English'],
                                        ['it', 'lang.it', 'italian', 'Italiano'],
                                        ['de', 'lang.de', 'german', 'Deutsch'],
                                    ];
                                @endphp
                                @foreach ($flags as $flag)
                                    @if ($website->lang !== $flag[0])
                                        <a href="{{ route($flag[1]) }}">
                                            <div>
                                                <img class="me-2"
                                                    src="{{ asset('img/website/lang/' . $flag[2] . '.png') }}"
                                                    alt="{{ $flag[2] }}">
                                                <span>
                                                    {{ $flag[3] }}
                                                </span>
                                            </div>
                                        </a>
                                    @endif
                                @endforeach
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#"><span>More Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ route('website.privacy-policy') }}">Privacy</a></li>
                            {{-- <li><a href="{{ route('website.department-details') }}">Department Details</a></li>
                            <li><a href="{{ route('website.service-details') }}">Service Details</a></li>
                            <li><a href="{{ route('website.appointment') }}">Appointment</a></li>
                            <li><a href="{{ route('website.testimonials') }}">Testimonials</a></li>
                            <li><a href="{{ route('website.faq') }}">Frequently Asked Questions</a></li>
                            <li><a href="{{ route('website.gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('website.terms-of-services') }}">Terms</a></li>
                             <li><a href="{{ route('website.404') }}">404</a></li> --}}
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown">
                                <a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </div>
</header>
