<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-1 shadow">

    <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">{{ config('app.name') }}</a>

    {{-- <livewire:search /> --}}
    search

    <button class="navbar-toggler" type="button" x-data="{ modalName: 'modalUpload' }"
        @click="$dispatch( modalName, { switchTo: 'files' })">
        <span class="bi bi-upload"></span>
    </button>


    &nbsp;

    abc

    &nbsp;

    def

    &nbsp;

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark">
        <span class="bi bi-three-dots-vertical"></span>
    </button>
    @include('components.layouts.app.offcanvas')

</header>

