@extends('home_temp')
@section('header')
<header class="masthead" style="background-image: url('/storage/pages/February2019/wghj3619zl3mxKKCgBnE.jpg')">
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
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h4 class="text-info">{!! $page->body !!}</h4>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <form method="POST" action="contact-us" style="text-align: right;direction: rtl">
                @csrf
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="نام شما" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="آدرس پست الکترونیکی شما" id="email" required data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Phone Number</label>
                        <input type="tel" name="phone" class="form-control" placeholder="شماره تماس شما" id="phone" required data-validation-required-message="Please enter your phone number.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Message</label>
                        <textarea rows="5" name="message" class="form-control" placeholder="لطفا پیامتان را در این قسمت بنویسید" id="message" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="sendMessageButton"><h6>پیامم رو بفرست</h6></button>
                </div>
            </form>
        </div>
    </div>
</div>

<hr>
@stop