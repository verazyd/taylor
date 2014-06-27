@include('layouts.partials._header')
    @if(Session::has('message'))
    <div class="alert alert-info" style="color: red;">{{ Session::get('message') }}</div>
    @endif
    @yield('content')
@include('layouts.partials._footer')