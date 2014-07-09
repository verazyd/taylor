@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 175px; margin-bottom: 10%;">
    <div class="row">
        <div class="col-md-8">

            <h3>  {{ $service->name }}</h3>
            <a target="_blank" href={{$service->url }}>{{$service->url}}</a>
            <div class="fb-like" data-href={{Request::url()}} data-layout="standard" data-action="like" data-show-faces="true" ></div>
            <br><br>
            <a target="_blank" href="{{ Share::load(Request::url(), 'check this'.$service->name)->facebook() }}" >
                <i class="fa fa-lg fa-facebook btn btn-sm btn-primary social_logo"></i>
            </a>
            <a target="_blank" href="{{ Share::load(Request::url(), 'check this')->twitter() }}" >
                <i class="fa fa-lg fa-twitter btn btn-sm btn-primary social_logo"></i>
            </a>
            <a target="_blank" href="{{ Share::load(Request::url(), 'check this')->gplus() }}" >
                <i class="fa fa-lg fa-google-plus btn btn-sm btn-primary social_logo"></i>
            </a>
            <a target="_blank" href="{{ Share::load(Request::url(), 'check this ')->linkedin() }}" >
                <i class="fa fa-lg fa-linkedin btn btn-sm btn-primary social_logo"></i>
            </a>
            <br>
            <br>
            {{ $service->description }}
        </div>
    </div>
</div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
@stop