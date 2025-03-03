<div class="flex flex-col gap-6">

    <x-auth-header title="Log in to your account" description="Enter your email and password below to log in" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="login">

        <!-- Email Address -->
        <div class="mb-3">
            <x-bs.field.input field="email" type="email" />
        </div>
        
        <!-- Password -->
        <div class="mb-3">
            <x-bs.field.input field="password" type="password" />
            @if (Route::has('password.request'))
                <a class="nav-link" href="{{ route('password.request') }}" role="button" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <div class="form-check form-switch">
            <input wire:model="remember" class="form-check-input" type="checkbox" role="switch"
                id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Remember me</label>
        </div>

        <div class="form-check form-switch">
            <button type="submit" class="btn btn-primary float-end">

                {{ __('Log in') }}
            </button>
        </div>

    </form>

    @if (Route::has('register'))
        <br>
        <hr>
        <div class="form-check form-switch">
            <a class="nav-link" href="{{ route('register') }}" role="button" wire:navigate>
                Don't have an account? Sign up
            </a>
        </div>
    @endif

</div>
