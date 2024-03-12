@extends('layouts.website.register.master')
@section("body")

    <section id="wrapper testGitHub"
             class=" d-grid justify-content-center  col-2 mx-27 my-6  border-small border-color overflow-hidden gap-5">
        <div class="left-section d-flex flex-columns justify-content-center  p-relative">

            <div class="background z-index-1 p-absolute bg-primary"></div>
            <div class="logo z-index-2 mt-2 ml-5 white bold title">log-in</div>

            <div class="content z-index-5 ml-10 mt-25 d-flex flex-columns text-center">
                <div class="title mb-2">
                    <h3 class=" white bold title">Already signed up?</h3>
                </div>
                <div class="description mx-8 mb-4">
                    <p class="description white subtitle line-height-2 ">All user on Myspace will know that there are milions of people out there . Every day besides so many people joining this community.</p>
                </div>
                <div class="button mb-25">
                    <a href="{{route("register")}}" class="btn px-4 py-1 white upperCase underLine sky-btn "> sing-up</a>
                </div>
            </div>

        </div>

        <div class="right-section">
            <div class="container d-flex flex-columns mx-1 mb-6 text-center ">
                <div class="title mt-8 mb-3">
                    <h3 class="title bold ">log in for An account </h3>
                </div>
                <div class="subtitle mb-4 mx-17 bold ">
                    <p class="subtitle  line-height-2">let get you all setup so you can creating your first onboarding experience.</p>
                </div>
                <div class="form text-start">
                    <form action="{{route("login")}}" method="POST" class="form">
                        @csrf
                        <div class="container d-grid row-3 ml-1 mr-1 align-items-center justify-content-center ">



                            <div class="inputs d-flex flex-columns mx-10 ">
                                <div class="items mb-1">
                                    <label class="bolder" for="email">Email</label>
                                    <input required name="email" class="w100  pl-1 py-1 mt-1 " type="text" id="email"  placeholder="your email"  pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" >
                                    <span  class="error danger small bolder">Please enter a valid Email (example@yahoo.com)</span>

                                </div>
                            </div>

                            <div class="inputs d-flex flex-columns mx-10 ">
                                <div class="items mb-1">
                                    <label class="bolder" for="password">Password</label>
                                    <input name="password" required class="w100  pl-1 py-1 mt-1 " type="password" id="password "  placeholder="your password"   pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$">
                                    <span class="error danger small bolder">Please enter a valid password (At least one lowercase letter,

                                        One uppercase letter ,

                                        One digit ,

                                        Length minimum eight characters)</span>

                                </div>
                            </div>


                            <div class="inputs d-flex flex-columns mx-9 ">
                                <div class="items ">
                                    <button class="btn bg-primary ml-1 upperCase white bold w100 py-2 border-small sky-btn "  >log in</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="social-media d-flex flex-columns">
                    <p class="subtitle bold text-start mx-18 mt-2">
                        <a href="#">Forget your password ?</a>
                    </p>
                    <div class="sing-up icons mb-2 d-flex flex-row gap-2 justify-content-center mt-2">
                        <div class="item pointer"><a href="#" ><img src="https://freesvg.org/img/1534129544.png" class="w100" alt="google icon "></a> </div>
                        <div class="item pointer"><a href="#" ><img src="https://cdn-icons-png.flaticon.com/512/9227/9227719.png" class="w100" alt="facebook icon"></a> </div>
                        <div class="item pointer"><a href="#" ><img src="https://www.iconpacks.net/icons/2/free-twitter-logo-icon-2429-thumb.png" class="w100" alt="twitter icon"></a> </div>
                    </div>

                </div>
            </div>


        </div>
    </section>
@endsection
{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
