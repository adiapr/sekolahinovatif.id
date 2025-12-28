<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        @include('partials.meta')
        @include('partials.styles')
    </head>
    <body class="font-sans antialiased bg-gray-50">
        
        <!-- Sticky Navbar -->
        @include('partials.navbar')

        {{ $slot }}

        <!-- Footer -->
        @include('partials.footer')

        <!-- Scripts -->
        @include('partials.scripts')
    </body>
</html>
