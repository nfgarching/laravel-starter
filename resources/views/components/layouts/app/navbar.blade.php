<nav class="navbar sticky-top bg-body-tertiary flex-md-nowrap p-1 shadow">

{{-- <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-1 shadow" data-bs-theme="dark"> --}}

{{-- <nav class="navbar bg-body-tertiary sticky-top"> --}}

    <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">{{ config('app.name') }}</a>

    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    &nbsp;
    &nbsp;
    <a class="nav-link" href="#">Link #1</a>
    <a class="nav-link" href="#">Link #2</a>
    <a class="nav-link" href="#">Link #3</a>
    <a class="nav-link disabled">Link #4</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark">
        <span class="bi bi-three-dots-vertical"></span>
    </button>
    @include('components.layouts.app.offcanvas')

</nav>
