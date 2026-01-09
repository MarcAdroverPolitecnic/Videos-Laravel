@props(['name'])
@error($name)
<p class="text-xs text-red-500 font-bold mt-5">{{ $message }}</p>
@enderror
