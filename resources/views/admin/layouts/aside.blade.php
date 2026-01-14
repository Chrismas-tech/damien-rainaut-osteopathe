<!-- start navbar -->
<nav class="navbar-vertical navbar aside">
    <div id="myScrollableElement" class="h-screen" data-simplebar>
        <!-- brand logo -->
        <a class="navbar-brand text-3xl text-white font-bold" href="{{ route('admin.dashboard') }}">
            {{ \App\Models\Website::getSettings()->application_name }}
        </a>

        <!-- navbar nav -->
        <ul class="navbar-nav flex-col" id="sideNavbar">
            <li class="nav-item my-4">
                <a class="nav-link {{ Route::currentRouteName() === 'admin.dashboard' ? 'active' : '' }}"
                    href="{{ route('admin.dashboard') }}">
                    <i class="fa-solid fa-home fa-md me-2"></i>
                    Dashboard
                </a>
            </li>

            <div class="border border-white"></div>

            <li class="nav-item my-4">
                <a class="nav-link"
                    {{ Route::currentRouteName() === 'admin.website-settings' ||
                    Route::currentRouteName() === 'admin.seo' ||
                    Route::currentRouteName() === 'admin.images-gallery' ||
                    Route::currentRouteName() === 'admin.youtube-videos' ||
                    Route::currentRouteName() === 'admin.email-scheduler'
                        ? 'collapse show active'
                        : '' }}
                    href="#!" data-bs-toggle="collapse" data-bs-target="#navPages" x-data="{ isOpen: false }"
                    @click="isOpen = !isOpen" :aria-expanded="isOpen" aria-controls="navPages">
                    <div class="w-full flex justify-between items-center">
                        <div>
                            <i class="fa-solid fa-layer-group fa-md me-1"></i>
                            <span>
                                Website Manager
                            </span>
                        </div>
                        <i class="fa-solid fa-caret-down fa-md" :class="{ 'rotate-180': isOpen }"></i>
                    </div>
                </a>

                <div id="navPages"
                    class="
                    {{ Route::currentRouteName() === 'admin.website-settings' ||
                    Route::currentRouteName() === 'admin.seo' ||
                    Route::currentRouteName() === 'admin.email-scheduler'
                        ? 'show'
                        : '' }} collapse collapsed"
                    data-bs-parent="#sideNavbar">

                    <ul class="nav flex-col">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'admin.website-settings' ? 'active' : '' }}"
                                href="{{ route('admin.website-settings') }}">
                                <i class="fas fa-cogs  fa-md mr-2"></i>
                                General Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'admin.seo' ? 'active' : '' }}"
                                href="{{ route('admin.seo') }}">
                                <i class="fas fa-chart-line fa-md mr-2"></i>
                                Seo Configuration
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'admin.email-scheduler' ? 'active' : '' }}"
                                href="{{ route('admin.email-scheduler') }}">
                                <i class="fas fa-envelope fa-md mr-2"></i>
                                Email Scheduler
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <div class="border border-white"></div>

            <li class="nav-item my-4">
                <a class="nav-link"
                    {{ Route::currentRouteName() === 'admin.website.components.google-reviews' ||
                    Route::currentRouteName() === 'admin.website.components.slider' ||
                    Route::currentRouteName() === 'admin.website.components.nanogallery' ||
                    Route::currentRouteName() === 'admin.website.components.jumbotrons' ||
                    Route::currentRouteName() === 'admin.website.components.contact-form'
                        ? 'active collapse show'
                        : '' }}
                    href="#!" data-bs-toggle="collapse" data-bs-target="#WebsiteComponents" x-data="{ isOpen: false }"
                    @click="isOpen = !isOpen" :aria-expanded="isOpen" aria-controls="WebsiteComponents">
                    <div class="w-full flex justify-between items-center">
                        <div>
                            <i class="fas fa-hammer me-2"></i>
                            <span>
                                Components
                            </span>
                        </div>
                        <i class="ms-2 fa-solid fa-caret-down" :class="{ 'rotate-180': isOpen }"></i>
                    </div>
                </a>

                <div id="WebsiteComponents"
                    class="
                {{ Route::currentRouteName() === 'admin.website.components.google-reviews' ||
                Route::currentRouteName() === 'admin.website.components.slider' ||
                Route::currentRouteName() === 'admin.website.components.nanogallery' ||
                Route::currentRouteName() === 'admin.website.components.jumbotrons' ||
                Route::currentRouteName() === 'admin.website.components.contact-form' ||
                Route::currentRouteName() === 'admin.website.components.images-gallery' ||
                Route::currentRouteName() === 'admin.website.components.youtube-videos'
                    ? 'show'
                    : '' }} collapse collapsed"
                    data-bs-parent="#sideNavbar">


                    <ul class="nav flex-col">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'admin.website.components.images-gallery' ? 'active' : '' }}"
                                href="{{ route('admin.website.components.images-gallery') }}">
                                <i class="fas fa-images fa-md mr-2"></i>
                                Images Gallery
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'admin.website.components.youtube-videos' ? 'active' : '' }}"
                                href="{{ route('admin.website.components.youtube-videos') }}">
                                <i class="fab fa-youtube fa-md mr-2"></i>
                                Youtube Videos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'admin.website.components.contact-form' ? 'active' : '' }}"
                                href="{{ route('admin.website.components.contact-form') }}">
                                <i class="fa-regular fa-rectangle-list me-2  mr-2"></i>
                                Contact Form
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'admin.website.components.slider' ? 'active' : '' }}"
                                href="{{ route('admin.website.components.slider') }}">
                                <i class="fas fa-pager me-2"></i>
                                Slider
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'admin.website.components.google-reviews' ? 'active' : '' }}"
                                href="{{ route('admin.website.components.google-reviews') }}">
                                <i class="fab fa-google me-2"></i>
                                Google Reviews
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'admin.website.components.jumbotrons' ? 'active' : '' }}"
                                href="{{ route('admin.website.components.jumbotrons') }}">
                                <i class="fa-regular fa-window-maximize me-2"></i>
                                Jumbotrons
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'admin.website.components.nanogallery' ? 'active' : '' }}"
                                href="{{ route('admin.website.components.nanogallery') }}">
                                <i class="fa-solid fa-panorama me-2"></i>
                                Nanogallery
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <div class="border border-white"></div>

            <li class="nav-item my-4">
                <a class="nav-link {{ Route::currentRouteName() === 'website.home' ? 'active' : '' }}" target="_blank"
                    href="{{ route('website.home') }}">
                    <i class="fas fa-arrow-circle-right fa-md mr-2"></i>
                    Go to Website
                </a>
            </li>

            <li class="nav-item cursor-pointer">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="nav-link"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt fa-md mr-2"></i>
                        Logout
                    </a>
                </form>
            </li>
        </ul>
    </div>
</nav>
<!--end of navbar-->
