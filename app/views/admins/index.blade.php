@extends('adminlayout.master')
@section('content')

<h4 class="username">{{Auth::check() ? "Welcome, ".Auth::user()->name : "" }}</h4>

@stop