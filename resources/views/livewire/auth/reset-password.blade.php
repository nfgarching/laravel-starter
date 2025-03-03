<div class="flex flex-col gap-6">
    <x-auth-header title="Reset password" description="Please enter your new password below" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="resetPassword">

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
                {{ __('Reset password') }}
            </button>
        </div>

    </form>
</div>
