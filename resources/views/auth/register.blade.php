@extends('layouts.website.register.master')

@section("body")

    <section id="wrapper"
             class=" d-grid justify-content-center  col-2 mx-27 my-6  border-small border-color overflow-hidden gap-5">

        <div class="left-section d-flex flex-columns justify-content-center  p-relative">

            <div class="background z-index-1 p-absolute bg-primary"></div>
            <div class="logo z-index-2 mt-2 ml-5 white bold title btn-hover">Sing-up</div>

            <div class="content z-index-5 ml-10 mt-25 d-flex flex-columns text-center">
                <div class="title mb-2">
                    <h3 class=" white bold title">Already singed up?</h3>
                </div>
                <div class="description mx-8 mb-4">
                    <p class="description white subtitle line-height-2 ">All user on Myspace will know that there are
                        milion of people out there . Every day besides so many people joining this community.</p>
                </div>
                <div class="button mb-25">
                    <a href="{{route("login")}}" class="btn px-4 py-1 white upperCase underLine  sky-btn"> Log in</a>
                </div>
            </div>

        </div>

        <div class="right-section">
            <div class="container d-flex flex-columns mx-1 mb-6 text-center ">
                <div class="title mt-8 mb-3">
                    <h3 class="title bold ">sign up for An account </h3>
                </div>
                <div class="subtitle mb-4 mx-17 bold ">
                    <p class="subtitle  line-height-2">let get you all setup so you can creating your first onboarding
                        experience.</p>
                </div>
                <div class="form text-start">
                    <form action="{{route("register")}}" method="POST" class="form">
                        @csrf
                        <div class="container d-grid row-5 ml-1 mr-1 align-items-center justify-content-center ">

                            <div class="inputs d-flex flex-row mx-10">
                                <div class="items ">
                                    <label class="bolder" for="first_name">First Name</label>
                                    <input required class="w100 pl-1  py-1 mt-1 " type="text" id="name"
                                           pattern="[a-z A-z].{1,}" placeholder="your name" name="name">
                                    <span class="error danger small bolder">Please enter a valid First Name (name should : more than 1 character and between a-z )</span>
                                </div>
                                <div class="items ">
                                    <label class="bolder" for="lasttName">Last Name</label>
                                    <input required class="w100 pl-1  py-1 mt-1 " type="text" id="lasttName"
                                           placeholder="your family" pattern="[a-z A-z].{1,}" name="last_name">
                                    <span class="error danger small bolder">Please enter a valid Last Name (name should : more than 1 character and between a-z )</span>
                                </div>
                            </div>

                            <div class="inputs d-flex flex-columns mx-10 ">
                                <div class="items mb-1">
                                    <label class="bolder" for="email">Email</label>
                                    <input required class="w100  pl-1 py-1 mt-1 " type="text" id="email"
                                           placeholder="your email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"
                                           name="email">
                                    <span class="error danger small bolder">Please enter a valid Email (example : yourname@gmail.com)</span>
                                </div>
                            </div>

                            <div class="inputs d-flex flex-columns mx-10 ">
                                <div class="items mb-1">
                                    <label class="bolder" for="password">Password</label>
                                    <input required class="w100  pl-1 py-1 mt-1 " type="password" id="password "
                                           placeholder="your password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$"
                                           name="password">
                                    <span class="error danger small bolder">Please enter a valid password (At least one lowercase letter,

                                        One uppercase letter ,

                                        One digit ,

                                        Length minimum eight characters)</span>
                                </div>
                            </div>

                            <div class="inputs d-flex flex-row mx-10 ">
                                <div class="items ">

                                    <input class="d-inline-block" type="checkbox" id="checked" placeholder="your name"
                                           required>
                                    <p class="subtitle d-inline-block bold">i acssept BoardMs <a href="#"
                                                                                                 class="primary">temrs &
                                            Conditions</a></p>
                                    <span class="error danger small bolder ">please read and accept the rules </span>
                                </div>
                            </div>

                            <div class="inputs d-flex flex-columns mx-10 ">
                                <div class="items ">
                                    <button class="btn bg-primary upperCase white bold w100 py-2 border-small sky-btn ">
                                        sing
                                        up
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="social-media d-flex flex-columns">
                    <p class="subtitle">
                        or sign up using
                    </p>
                    <div class="sing-up icons mb-2 d-flex flex-row gap-2 justify-content-center mt-2">
                        <div class="item"><img src="/assets/media/icons/gmail-icon.png" class="w100" alt=""></div>
                        <div class="item"><img src="/assets/media/icons/facebook-icon.png" class="w100" alt=""></div>
                        <div class="item"><img src="/assets/media/icons/twiter-icon.png" class="w100" alt=""></div>
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
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

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
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
