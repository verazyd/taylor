@extends('adminlayout.master')
@section('content')

<h4 class="username">{{Auth::check() ? "Welcome, ".Auth::user()->email : "" }}</h4>

@stop