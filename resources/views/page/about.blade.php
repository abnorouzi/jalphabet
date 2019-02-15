@extends('home_temp')
@section('header')
    <header class="masthead" style="background-image: url('/storage/pages/February2019/lRL21Fm2I7zQoxFRND4r.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>{{$page->title}}</h1>
                        <span class="subheading">{{$page->excerpt}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop
@section('content')
    <div class="col-lg-12 col-md-10 mx-auto">
        <p class="text-info">{!! $page->body !!}</p>
    </div>
@stop
