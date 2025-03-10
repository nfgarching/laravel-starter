<x-bs.card>

    <x-slot name="header"></x-slot>

    <div class="row">

        <div class="col-3">

            <div class="list-group">
                <a href="{{ route('settings.profile') }}"
                    class="list-group-item list-group-item-action @if (url()->current() == route('settings.profile')) active @endif">
                    {{ __('Profile') }}
                </a>
                <a href="{{ route('settings.password') }}"
                    class="list-group-item list-group-item-action @if (url()->current() == route('settings.password')) active @endif">
                    {{ __('Password') }}
                </a>
                <a href="{{ route('settings.appearance') }}"
                    class="list-group-item list-group-item-action @if (url()->current() == route('settings.appearance')) active @endif">
                    {{ __('Appearance') }}
                </a>
            </div>

        </div>

        <div class="col-9">

            <p class="fs-4">{{ $heading ?? '' }}</p>
            <p class="fs-6">{{ $subheading ?? '' }}</p>

            <hr>

            <div class="">
                {{ $slot }}
            </div>

        </div>

    </div>

</x-bs.card>
