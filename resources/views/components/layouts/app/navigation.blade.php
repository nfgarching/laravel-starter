<h6>
    <span>
        <x-bs.nav.link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-bs.nav.link>
    </span>
</h6>
<hr>

<ul class="nav flex-column">

    <li class="dropdown-item">
        <x-bs.nav.link href="#">
            {{ __('Link #1') }}
        </x-bs.nav.link>
    </li>

    <li class="dropdown-item">
        <x-bs.nav.link href="#">
            {{ __('Link #2') }}
        </x-bs.nav.link>
    </li>

</ul>

<hr>

<h6>{{ __('Externe Links') }}</h6>
<hr>
<ul class="nav flex-column mb-2">
    <li class="nav-item">
        <a class="nav-link" href="https://github.com/laravel/livewire-starter-kit" target="_blank">
            {{ __('Repository') }}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://laravel.com/docs/starter-kits" target="_blank">
            {{ __('Documentation') }}
        </a>
    </li>
    <li class="nav-item"><a class="nav-link" href="#" target="_blank">{{ __('#') }}</a></li>
</ul>

<hr>

<h6>{{ __('Login') }}: <small>{{ auth()->user()->name }}</small></h6>
<hr>
<ul class="nav flex-column mb-2">
    <li class="nav-item">
        <a class="nav-link" href="/settings/profile" role="button" wire:navigate>Settings</a>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}" class="w-full">
            @csrf
            <button type="submit" class="nav-link">{{ __('Log Out') }}</button>
        </form>
    </li>
</ul>

<hr>

<center><i class="bi bi-c-circle"></i> {{ date('Y') }}</center>

<br>
