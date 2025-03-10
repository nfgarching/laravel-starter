<section class="w-full">

    <x-settings.head />

    <x-settings.layout :heading="__('Update password')" :subheading="__('Ensure your account is using a long, random password to stay secure')">

        <form wire:submit="updatePassword" class="mt-6 space-y-6">

            <!-- Current Password -->
            <div class="mb-3">
                <x-bs.field.input field="current_password" :label="__('Current password')" type="password" />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <x-bs.field.input field="password" :label="__('New password')" type="password" />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <x-bs.field.input field="password_confirmation" :label="__('Confirm Password')" type="password" />
            </div>

            {{-- <flux:input wire:model="current_password" id="update_password_current_passwordpassword"
                :label="__('Current password')" type="password" name="current_password" required
                autocomplete="current-password" />
            <flux:input wire:model="password" id="update_password_password" :label="__('New password')" type="password"
                name="password" required autocomplete="new-password" />
            <flux:input wire:model="password_confirmation" id="update_password_password_confirmation"
                :label="__('Confirm Password')" type="password" name="password_confirmation" required
                autocomplete="new-password" /> --}}

            <div class="form-check form-switch">
                <button type="submit" class="btn btn-primary float-end">
                    {{ __('Speichern') }}
                </button>
            </div>

            <div class="flex items-center gap-4">
                {{-- <div class="flex items-center justify-end">
                    <flux:button variant="primary" type="submit" class="w-full">{{ __('Save') }}</flux:button>
                </div> --}}

                <x-action-message class="me-3" on="password-updated">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>

        </form>

    </x-settings.layout>

</section>
