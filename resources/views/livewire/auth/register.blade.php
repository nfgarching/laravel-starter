<div class="flex flex-col gap-6">
    <x-auth-header title="Create an account" description="Enter your details below to create your account" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register">

        <!-- Name -->
        <div class="mb-3">
            <label for="InputName" class="form-label">Name</label>
            <input wire:model="name" type="text" class="form-control" id="InputName" placeholder="Full Name">
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <label for="InputEmail" class="form-label">Email address</label>
            <input wire:model="email" type="email" class="form-control" id="InputEmail"
                placeholder="email@example.com">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="InputPassword" class="form-label">Password</label>
            <div class="input-group has-validation">
                <input wire:model="password" type="password" class="form-control" id="InputPassword"
                    placeholder="Password">
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="InputConfirmPassword" class="form-label">Confirm Password</label>
            <input wire:model="password_confirmation" type="password" class="form-control" id="InputConfirmPassword"
                placeholder="Confirm password">
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
        <a class="nav-link" href="{{ route('login') }}" role="button" wire:navigate>Already have an account?
            Log in</a>
    </div>

</div>
