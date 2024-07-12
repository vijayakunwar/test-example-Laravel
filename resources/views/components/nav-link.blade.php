{{-- THIS IS LARAVEL COMMENT --}}
<!-- <a href="/">Home</a> --> {{-- THIS html  COMMENT  is usedin HTML tags --}}
<!-- <a href="/about">About</a> -->
<!-- <a href="/contact">Contact</a> -->


{{-- to make it dynamic 
        getting attribute value passed in <x-nav-link> definition at layout.blade.php file  
    --}}

<?php // we can use PHP comments in blade 
?>


<!-- <a {{ $attributes }}>{{$slot}}</a> -->


<!-- @ IS PHP DIRECTIVE -->
@props(['active' => false])

<!-- <a class="{{ request()->is('/')  ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
   aria-current="{{ request()->is('/') ? 'page': 'false' }}"

   {{ $attributes }}

>{{ $slot }}</a> -->


<a class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
   aria-current="{{ $active ? 'page': 'false' }}"

   {{ $attributes }}
   
>{{ $slot }}</a>