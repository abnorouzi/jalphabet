@extends('home_temp')

<!-- Page Header -->
@include('partials.header')


@section('content')
    @foreach($post as $posts)
        <div class="post-preview">
            <a href="/post/{{$posts->slug}}">
                <h2 class="post-title">
                    {{$posts->title}}
                </h2>
                <h3 class="post-subtitle">
                    {{$posts->excerpt}}
                </h3>
            </a>
            <p class="post-meta"> تاریخ ارسال پست :
                {{verta($posts->created_at)}}</p>
            <p class="post-meta">نوشته شده توسط :
                {{$posts->author->name}}</p>
        </div>
        <hr>
    @endforeach

    <!-- Pager -->
    <div class="clearfix">
        {{$post->links()}}
    </div>

@stop



