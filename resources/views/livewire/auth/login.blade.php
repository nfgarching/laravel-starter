{{-- Beispiele bei https://mdbootstrap.com/docs/standard/extended/login/#section-introduction --}}

<div class="flex flex-col gap-6">
    <x-auth-header title="Log in to your account" description="Enter your email and password below to log in" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="login">

        <!-- Email Address -->
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1"
                placeholder="email@example.com">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input wire:model="password" type="password" class="form-control" id="exampleInputPassword1"
                placeholder="Password">
            @if (Route::has('password.request'))
                <flux:link class="absolute right-0 top-0 text-sm" :href="route('password.request')" wire:navigate>
                    {{ __('Forgot your password?') }}
                </flux:link>
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
            <a class="nav-link" href="{{ route('register') }}" role="button" wire:navigate>Don't have an account?
                Sign up</a>
        </div>
    @endif

</div>
