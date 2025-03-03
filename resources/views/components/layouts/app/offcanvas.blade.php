<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarDark">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">Seitenleiste</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">

        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

            <li class="nav-item"><a class="nav-link active" href="#">Links</a>
                <ul class="">

                    <li class="nav-item">
                        <a class="nav-link" href="#" target=_blank>Link #1</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" target=_blank>Link #2</a>
                    </li>

                </ul>
            </li>

            <hr>

            @if (Route::has('settings.profile'))
                <li class="nav-item"><a class="nav-link active" href="#">
                        {{ __('Login') }}: {{ auth()->user()->name }}
                    </a>
                    <ul class="">

                        <li class="nav-item">

                            {{-- {{ auth()->user() }} --}}

                            <x-bs.nav.link :href="route('settings.profile')">
                                {{ __('Profile') }}
                            </x-bs.nav.link>
                        </li>
                        <li class="nav-item">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-bs.nav.link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-bs.nav.link>
                            </form>
                        </li>

                    </ul>
                </li>
                <hr>
            @endif

            <li class="nav-item text-info-emphasis">
                <center>
                    <small>
                        Hostname: {{ gethostname() }}
                    </small>
                </center>
            </li>

        </ul>

    </div>
</div>
