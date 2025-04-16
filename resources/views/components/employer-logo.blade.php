@props(['employer', 'width' => 90])

<img src="http://picsum.photos/seed/{{ rand(1, 1000000) }}/{{ $width }}" alt="" class="rounded-xl">
{{-- 
@props(['employer', 'width' => 90])

<img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}"> --}}