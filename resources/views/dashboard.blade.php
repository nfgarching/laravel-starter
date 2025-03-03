<x-layouts.app>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <hr>
    </x-slot>

    <div class="row row-cols-1 row-cols-md-2 g-4">

        <div class="col">
            <div class="card">
                <div class="placeholder bg-primary" style="width: 100%; height: 250px;"></div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="placeholder bg-secondary" style="width: 100%; height: 250px;"></div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="placeholder bg-success" style="width: 100%; height: 250px;"></div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="placeholder bg-info" style="width: 100%; height: 250px;"></div>
            </div>
        </div>

    </div>

</x-layouts.app>
