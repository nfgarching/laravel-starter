<h6>
    <span>
        <x-nav.link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav.link>
    </span>
</h6>
<hr>
<ul class="nav flex-column">

    <li class="btn-group nav-item">
        <a class="nav-link dropdown-toggle" href="#" role="a" data-bs-toggle="dropdown" aria-expanded="false">
            {{ __('Controllers') }}
        </a>
        <ul class="dropdown-menu">
            @if (Route::has('bookings.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('bookings.index')">
                        {{ __('Bookings') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('sipcalls.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('sipcalls.index')">
                        {{ __('Calls') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('compose.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('compose.index')">
                        {{ __('Compose') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('disks.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('disks.index')">
                        {{ __('Disks') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('documents.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('documents.index')">
                        {{ __('Documents') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('files.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('files.index')">
                        {{ __('Files') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('mailboxes'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('mailboxes')">
                        {{ __('Mailboxes') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('mails'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('mails')">
                        {{ __('Mails') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('names.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('names.index')">
                        {{ __('Names') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('registers.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('registers.index')">
                        {{ __('Registers') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('sipgate.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('sipgate::index')">
                        {{ __('Sipgate') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('upload.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('upload.index')">
                        {{ __('Upload') }}
                    </x-nav.link>
                </li>
            @endif

            <hr>

            @if (Route::has('compose.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('compose.index')" target="_blank">
                        {{ __('Compose') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('mailboxes'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('mailboxes')">
                        {{ __('Imap') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('items.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('items.index')">
                        {{ __('Items') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('props.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('props.index')">
                        {{ __('Props') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('sipgate.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('sipgate.index')">
                        {{ __('Sipgate') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('tables.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('tables.index')">
                        {{ __('Tabellen') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('times.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('times.index')">
                        {{ __('Timetoken') }}
                    </x-nav.link>
                </li>
            @endif
        </ul>
    </li>

    @if (Route::has('compose.index'))
        <li class="dropdown-item">
            <x-nav.link :href="route('compose.index')">
                {{ __('Compose') }}
            </x-nav.link>
        </li>
    @endif

    @if (Route::has('mailboxes'))
    <li class="dropdown-item">
        <x-nav.link :href="route('mailboxes')">
            {{ __('Mailboxes') }}
        </x-nav.link>
    </li>
@endif

</ul>

<hr>
<h6>{{ __('Heutige Termine') }}</h6>
<hr>
<ul class="nav flex-column mb-2">
    <livewire:akv.dok.listing.today pageLimit="3" scope="today" />
</ul>

<hr>
<h6>{{ __('Akenverwaltung') }}</h6>
<hr>
<ul class="nav flex-column mb-2">
    <li class="btn-group nav-item">
        @if (Route::has('akten.index'))
    <li class="dropdown-item">
        <x-nav.link :href="route('akten.index')">
            {{ __('Akten') }}
        </x-nav.link>
    </li>
    @endif
    @if (Route::has('buchungen.index'))
        <li class="dropdown-item">
            <x-nav.link :href="route('buchungen.index')">
                {{ __('Buchungen') }}
            </x-nav.link>
        </li>
    @endif
    @if (Route::has('dokumente.index'))
        <li class="dropdown-item">
            <x-nav.link :href="route('dokumente.index')">
                {{ __('Dokumente') }}
            </x-nav.link>
        </li>
    @endif
    @if (Route::has('namen.index'))
        <li class="dropdown-item">
            <x-nav.link :href="route('namen.index')">
                {{ __('Namen') }}
            </x-nav.link>
        </li>
    @endif

    <hr>

    @if (Route::has('akten.index'))
        @include('akv.reg.navigation')
    @endif
    @if (Route::has('buchungen.index'))
        @include('akv.buc.navigation')
    @endif
    @if (Route::has('dokumente.index'))
        @include('akv.dok.navigation')
    @endif
    @if (Route::has('namen.index'))
        @include('akv.nam.navigation')
    @endif
    @if (Route::has('sipgate.index'))
        @include('akv.sip.navigation')
    @endif
</ul>
<hr>

<h6><a class="nav-link" href="/admin" target="_blank">{{ __('Administration') }}</a></h6>
<hr>
<ul class="nav flex-column mb-2">

    <li class="btn-group nav-item">
        <a class="nav-link dropdown-toggle" href="#" role="a" data-bs-toggle="dropdown"
            aria-expanded="false">
            {{ __('Docker') }}
        </a>
        <ul class="dropdown-menu">
            <li class="dropdown-item">
                <a class="nav-link" href="{{ env('APP_URL') }}:9000" target="_blank">
                    {{ __('Portainer') }}
                </a>
            </li>
            <li class="dropdown-item">
                <a class="nav-link" href="{{ env('APP_URL') }}:8025" target="_blank">
                    {{ __('Mailpit') }}
                </a>
            </li>
            <li class="dropdown-item">
                <a class="nav-link" href="{{ env('APP_URL') }}:7700" target="_blank">
                    {{ __('Meilisearch') }}
                </a>
            </li>
            <li class="dropdown-item">
                <a class="nav-link" href="{{ env('APP_URL') }}:9010" target="_blank">
                    {{ __('phpMyAdmin') }}
                </a>
            </li>
            <li class="dropdown-item">
                <a class="nav-link" href="/telescope" target="_blank">
                    {{ __('Telescope') }}
                </a>
            </li>
        </ul>
    </li>

    <li class="btn-group nav-item">
        <a class="nav-link dropdown-toggle" href="#" role="a" data-bs-toggle="dropdown"
            aria-expanded="false">
            {{ __('Filament') }}
        </a>
        <ul class="dropdown-menu">
            <li class="nav-item">
                <a class="nav-link" href="/admin/registers" target="_blank">{{ __('Akten') }} </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/dokuments" target="_blank">{{ __('Dokumente') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/names" target="_blank">{{ __('Namen') }} </a>
            </li>
        </ul>
    </li>

    <li class="btn-group nav-item">
        <a class="nav-link dropdown-toggle" href="#" role="a" data-bs-toggle="dropdown"
            aria-expanded="false">
            {{ __('Storage') }}
        </a>
        <ul class="dropdown-menu">
            @if (Route::has('disks.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('disks.index')">
                        {{ __('Disks') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('files.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('files.index')">
                        {{ __('Files') }}
                    </x-nav.link>
                </li>
            @endif
            @if (Route::has('upload.index'))
                <li class="dropdown-item">
                    <x-nav.link :href="route('upload.index')">
                        {{ __('Upload') }}
                    </x-nav.link>
                </li>
            @endif
        </ul>
    </li>

    <li class="btn-group nav-item">
        <a class="nav-link dropdown-toggle" href="#" role="a" data-bs-toggle="dropdown"
            aria-expanded="false">
            {{ __('Sonstiges') }}
        </a>
        <ul class="dropdown-menu">
            <li class="dropdown-item">
                <a class="nav-link" href="/telescope" target="_blank">
                    {{ __('Telescope') }}
                </a>
            </li>
        </ul>
    </li>

    <li class="btn-group nav-item">
        <a class="nav-link dropdown-toggle" href="#" role="a" data-bs-toggle="dropdown"
            aria-expanded="false">
            {{ __('Testpages') }}
        </a>
        <ul class="dropdown-menu">
            <li class="dropdown-item"><a class="nav-link" href="/guestpage" target="_blank">{{ __('Guestpage') }}
                </a></li>
            <li class="dropdown-item"><a class="nav-link" href="/testing" target="_blank">{{ __('Testing') }} </a>
            </li>
            <li class="dropdown-item"><a class="nav-link" href="/testpage" target="_blank">{{ __('Testpage') }}
                </a></li>
            <li class="dropdown-item"><a class="nav-link" href="/welcome" target="_blank">{{ __('Welcome') }} </a>
            </li>
        </ul>
    </li>

</ul>
<hr>

<h6>{{ __('Externe Links') }}</h6>
<hr>
<ul class="nav flex-column mb-2">
    <li class="nav-item"><a class="nav-link" href="#" target="_blank">{{ __('#') }}</a></li>
</ul>
<hr>

<center><x-copyright /></center>

<br>
