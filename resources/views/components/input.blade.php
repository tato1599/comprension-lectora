@props(['disabled' => false])

<input class="border-red-500" {{ $disabled ? 'disabled' : '' }}>
