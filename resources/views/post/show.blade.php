@extends('home_temp')

@section('header')
    <header class="masthead" style="background-image: url('/storage/{{$post->image}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>{{$post->title}}</h1>
                        <span class="subheading">
                            <p class="post-meta"> تاریخ ارسال پست :
                                {{verta($post->created_at)}}
                            </p>
                            <p class="post-meta">نوشته شده توسط :
                                {{$post->author->name}}
                            </p>
                        </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-x-12">
                    <img src="/img/logo-home.png" alt="logo">
                </div>
            </div>
        </div>
    </header>
@stop
@section('content')
    {!! $post->body !!}
@stop