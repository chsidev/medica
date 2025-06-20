@extends('layouts.base')

@section('body')
    <div class="flex flex-col bg-white pt-3 min-h-screen pb-12 md:px-6 lg:px-8">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection
