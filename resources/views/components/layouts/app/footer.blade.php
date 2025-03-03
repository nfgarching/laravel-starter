<hr>

<div class="container">

    <div class="btn-group btn-group-sm float-start">
        <small>{{ date('H:i:s') }}</small>
    </div>

    {{-- {{ url()->current() . '/' }} | {{ url()->previous() }} --}}


    <div class="btn-group btn-group-sm float-end">
        @if (url()->current() . '/' != url()->previous())
            <x-bs.button.link :href="old(' url', url()->previous())" type="outline-secondary">
                <i class="bi bi-arrow-left-square"></i> &nbsp; Zurück
            </x-bs.button.link>
        @endif
        <x-bs.button.link href="#" type="outline-secondary">
            <i class="bi bi-arrow-up-square"></i> &nbsp; Oben
        </x-bs.button.link>
    </div>

</div>

<br>
