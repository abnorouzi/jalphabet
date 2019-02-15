@extends('login-temp')
@section('title')
    ثبت نام
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-offset-5 col-md-4 text-center">
                <form action="{{ route('sign-up') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 class='text-white'>فرم ثبت نام کاربر جدید</h1>
                    <div class="form-login"></br>
                        <h4 style="text-align: right;direction: rtl">به Jalphabet خوش آمدید</h4>
                        </br>
                        <input type="text" name="name" id="userName" class="form-control input-sm chat-input" placeholder="نام کاربری"/>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $errors->first('name') }}</strong>
                            </span>
                         @endif
                        </br>
                        <input type="password" name="password" id="userPassword" class="form-control input-sm chat-input" placeholder="رمز عبور"/>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </br>
                        <input id="password-confirm" type="password" class="form-control input-sm chat-input" placeholder="تکرار رمز عبور" name="password_confirmation" required>
                        <br>
                        <input type="email" name="email" class="form-control input-sm chat-input" placeholder="پست الکترونیک"/>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                 </span>
                            @endif
                        </br>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" readonly>
                                <div class="input-group-btn">
                          <span class="fileUpload btn">
                              <span class="upl" id="upload">آپلود عکس</span>
                              <input type="file" name="avatar" class="upload up" id="up" onchange="readURL(this);" />
                            </span><!-- btn-orange -->
                                </div><!-- btn -->
                            </div>
                            </br></br>
                            <div class="wrapper">
                                <button type="submit" class="btn btn-md btn-success">
                                    register
                                    <i class="fas fa-user-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('partials.footer')
    </div>
@endsection
