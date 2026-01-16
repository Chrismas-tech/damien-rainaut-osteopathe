<header class="">
    @if (Route::has('login'))
        <nav class="">
            @auth
                @if (Auth::user()->role === 'admin')
                    <a href="{{ route('admin.dashboard') }}" class="">
                        Votre espace Admin
                    </a>
                @elseif (Auth::user()->role === 'employee')
                    <a href="{{ route('employee.dashboard') }}" class="">
                        Votre espace Salarié
                    </a>
                @elseif (Auth::user()->role === 'beneficiary')
                    <a href="{{ route('beneficiary.dashboard') }}" class="">
                        Votre espace Bénéficiaire
                    </a>
                @endif
            @else
                <a href="{{ route('login') }}" class="">
                    Log in
                </a>
                {{-- @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="">
                        Register
                    </a>
                @endif --}}
            @endauth

            <li class="">
                <a href="#">
                    @if ($website->lang === 'fr')
                        <div class="">
                            <img src="{{ asset('img/website/lang/french.png') }}" alt="french">
                            <span class="">FR</span>
                        </div>
                    @elseif($website->lang === 'it')
                        <div class="">
                            <img src="{{ asset('img/website/lang/italian.png') }}" alt="italian">
                            <span class="">IT</span>
                        </div>
                    @elseif($website->lang === 'de')
                        <div class="">
                            <img src="{{ asset('img/website/lang/german.png') }}" alt="german">
                            <span class="">DE</span>
                        </div>
                    @elseif($website->lang === 'fr')
                        <div class="">
                            <img src="{{ asset('img/website/lang/english.png') }}" alt="english">
                            <span class="">EN</span>
                        </div>
                    @endif
                </a>
                <ul>
                    <li>
                        @if ($website->lang === 'fr')
                            <a href="{{ route('lang.fr') }}">
                                <div class="">
                                    <img class="me-2" src="{{ asset('img/website/lang/english.png') }}"
                                        alt="english">
                                    <span>
                                        English
                                    </span>
                                </div>
                            </a>
                        @elseif($website->lang === 'it')
                            <a href="{{ route('lang.it') }}">
                                <div class="">
                                    <img class="me-2" src="{{ asset('img/website/lang/italian.png') }}"
                                        alt="italian">
                                    <span>
                                        Italian
                                    </span>
                                </div>
                            </a>
                        @elseif($website->lang === 'de')
                            <a href="{{ route('lang.de') }}">
                                <div class="">
                                    <img class="me-2" src="{{ asset('img/website/lang/german.png') }}"
                                        alt="english">
                                    <span>
                                        English
                                    </span>
                                </div>
                            </a>
                        @elseif($website->lang === 'en')
                            <a href="{{ route('lang.en') }}">
                                <div class="">
                                    <img class="me-2" src="{{ asset('img/website/lang/english.png') }}"
                                        alt="french">
                                    <span>
                                        English
                                    </span>
                                </div>
                            </a>
                        @endif
                    </li>
                    <li class="dropdown"><a href="#"><span>Deep Dropdown</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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
        </nav>
    @endif
</header>
