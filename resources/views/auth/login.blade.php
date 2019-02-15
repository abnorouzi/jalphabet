@extends('login-temp')
@section('title')
    صفحه ورود
@stop
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-offset-5 col-md-4 text-center">
                <form action="{{route('login')}}" method="Post">
                    @csrf
                    <h1 class='text-white'>فرم ورود به صفحه کاربری</h1>
                    <div class="form-login"></br>
                        <h4>ورود ایمن</h4>
                        </br>
                        <input type="email" name="email" id="userName" class="form-control input-sm chat-input" placeholder="پست الکترونیک"/>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </br></br>
                        <input type="password" name="password" id="userPassword" class="form-control input-sm chat-input" placeholder="رمز عبور"/>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </br></br>
                                <div class="form-group row">

                                        <div class="form-check offset-4">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            &nbsp;&nbsp;&nbsp;<label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>

                        <div class="wrapper">
                            <button type="submit" class="btn btn-primary btn-md">
                                login
                                <i class="fas fa-sign-in-alt"></i>
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
            @include('partials.footer')
        </div>
    </div>
@endsection
