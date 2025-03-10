<div>

    <x-settings.head />

    <x-settings.layout :heading="__('Profile')" :subheading="__('Update your name and email address')">

        <form wire:submit="updateProfileInformation">

            <!-- Username -->
            <div class="mb-3">
                <x-bs.field.input field="name" :label="__('Name')" />
            </div>

            <!-- Email Address -->
            <div class="mb-3">
                <x-bs.field.input field="email" type="email" :label="__('Email')" />
            </div>


            {{-- <flux:input wire:model="name" :label="__('Name')" type="text" name="name" required autofocus
                autocomplete="name" /> --}}

            {{-- <flux:input wire:model="email" :label="__('Email')" type="email" name="email" required
                autocomplete="email" /> --}}

            @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !auth()->user()->hasVerifiedEmail())
                <div>
                    {{-- <flux:text class="mt-4">
                        {{ __('Your email address is unverified.') }}

                        <flux:link class="text-sm cursor-pointer" wire:click.prevent="resendVerificationNotification">
                            {{ __('Click here to re-send the verification email.') }}
                        </flux:link>
                    </flux:text> --}}

                    {{ __('Your email address is unverified.') }}

                    <a class="btn btn-outline-primary" role="button" wire:click.prevent="resendVerificationNotification">
                        {{ __('Click here to re-send the verification email.') }}
                    </a>

                    @if (session('status') === 'verification-link-sent')
                        {{ __('A new verification link has been sent to your email address.') }}
                    @endif
                </div>
            @endif




            <div class="flex items-center gap-4">
                {{-- <div class="flex items-center justify-end">
                    <flux:button variant="primary" type="submit" class="w-full">{{ __('Save') }}</flux:button>
                </div> --}}

                <x-action-message class="me-3" on="profile-updated">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>


            <div class="form-check form-switch">
                <button type="submit" class="btn btn-primary float-end">
                    {{ __('Speichern') }}
                </button>
            </div>



        </form>

        <livewire:settings.delete-user-form />

    </x-settings.layout>

</div>
