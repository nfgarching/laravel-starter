@props([
    'field',
    'attri' => '',
    'class' => '',
    'dirty' => '', # e.g. bg-info
    'fname' => '',
    'label' => '',
    'modifier' => '',
    'token' => rand(),
    'value' => '',
    // input special
    'datalist' => [],
    'type' => 'text',
])

@php
    if ($label == '') {
        $label = ucfirst($field);
    }
    if (isset($this->form->$field)) {
        $field = 'form.' . $field;
    } elseif (isset($this->item[$field])) {
        $field = 'item.' . $field;
    }
    if ($slot->isNotEmpty()) {
        $value = $slot;
    }
    $class = 'form-control ' . $class;
@endphp

<div class="form-floating @error($field) is-invalid @enderror">

    <input {{ $attri }}
        @switch($modifier)
            @case('blur')
                wire:model.blur="{{ $field }}"                
                @break
            @case('change')
                wire:model.change="{{ $field }}"                
                @break
            @case('lazy')
                wire:model.lazy="{{ $field }}"                
                @break
            @case('live')
                wire:model.live="{{ $field }}"                
                @break
            @default
                wire:model="{{ $field }}"                
        @endswitch
        @if ($dirty) wire:dirty.class="{{ $dirty }}" @endif
        class="{{ $class }} @error($field) is-invalid @enderror"
        @if ($datalist) list="datalist_{{ $token }}" @endif type="{{ $type }}"
        id="field-{{ $token }}" value="{{ $value }}">

    @if ($datalist)
        <datalist id="datalist-{{ $token }}">
            @forelse($datalist as $txt)
                <option>
                    {{ $txt }}
                </option>
            @empty
            @endforelse
        </datalist>
    @endif

    <label for="field-{{ $token }}">{{ $label }}</label>

    <div class="invalid-feedback">
        @error($field)
            {{ $message }}
        @enderror
    </div>

</div>
