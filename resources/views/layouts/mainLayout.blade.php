@extends('layouts.head')
@section('title')
    @yield('title')
@endsection
<body>
    @include('partials.header')
    <main>
        <div class="container">
            @yield('main_content')
        </div>
    @include('partials.footer')
    </main>
</body>
</html>
