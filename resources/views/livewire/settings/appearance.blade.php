<div>

    <x-settings.head />

    <x-settings.layout :heading="__('Appearance')" :subheading="__('Update the appearance settings for your account')">

        {{-- <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                {{ __('Light') }}
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                {{ __('Dark') }}
            </label>
        </div> --}}

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">{{ __('Light') }}</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">{{ __('Dark') }}</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
            <label class="form-check-label" for="inlineRadio3">{{ __('System') }} (disabled)</label>
          </div>


        {{-- <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
            <flux:radio value="light" icon="">{{ __('Light') }}</flux:radio>
            <flux:radio value="dark" icon="">{{ __('Dark') }}</flux:radio>
            <flux:radio value="system" icon="">{{ __('System') }}</flux:radio>
        </flux:radio.group> --}}

    </x-settings.layout>

</div>
