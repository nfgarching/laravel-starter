<div class="flex flex-col gap-6">
    <x-auth-header title="Create an account" description="Enter your details below to create your account" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register">

        <!-- Name -->
        <div class="mb-3">
            <x-bs.field.input field="name" />
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <x-bs.field.input field="email" type="email" />
        </div>

        <!-- Password -->
        <div class="mb-3">
            <x-bs.field.input field="password" type="password" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <x-bs.field.input field="password_confirmation" label="Confirm Password" type="password" />
        </div>

        <div class="form-check form-switch">
            <button type="submit" class="btn btn-primary float-end">
                {{ __('Create account') }}
            </button>
        </div>

    </form>

    <br>
    <hr>
    <div class="form-check form-switch">
        <a class="nav-link" href="{{ route('login') }}" role="button" wire:navigate>
            Already have an account? Log in
        </a>
    </div>

</div>
