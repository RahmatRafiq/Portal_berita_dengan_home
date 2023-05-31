<!DOCTYPE html>
<!--
 24 News by FreeHTML5.co
 Twitter: https://twitter.com/fh5co
 Facebook: https://fb.com/fh5co
 URL: https://freehtml5.co
-->
<html lang="en" class="no-js">

<head>
    @include('frontend.includes.head-html')
</head>

<body>
    {{-- Section untuk header dan navbar --}}
    @include('frontend.includes.header')
    {{-- Akhir section untuk header dan navbar --}}
    {{-- Section untuk content --}}
    @yield('content')
    {{-- Akhir section untuk content --}}
    {{-- Section untuk footer --}}
    @include('frontend.includes.footer')
    {{-- Section akhir untuk footer --}}


</body>

</html>
