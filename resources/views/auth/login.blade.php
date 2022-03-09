@extends('layouts.app')
@section('title', 'Login')

@section('body')

    <section class="flex flex-col justify-center py-12">
        <div class="container">
            <div class="w-full max-w-account-login mx-auto">

                <div class="w-full bg-white shadow-card rounded-8 p-6 md:p-8 xl:p-12">
                    <div class="w-full text-center mb-4">
                        <h2 class="heading-s">{{ __('Welcome Back') }}</h2>
                        <p class="copy-s text-dove-gray">{{ __('Please login to your account.') }}</p>
                    </div>

                    <form action="{{ route('login') }}" method="post">
                        @csrf

                        <div class="w-full mb-3">
                            <label for="email">
                                <span class="block copy-s text-dove-gray mb-1">{{ __('Email address') }}</span>
                                <input type="email" id="email" name="email" class="form-input w-full border-silver-chalice rounded-5" placeholder="{{ __('Email address') }}" required autocomplete="email" autofocus>
                            </label>
                            @error('email')
                                <span class="text-error-red copy-s" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="w-full mb-3">
                            <label for="password">
                                <span class="block copy-s text-dove-gray mb-1">{{ __('Password') }}</span>
                                <input type="password" id="password" name="password" class="form-input w-full border-silver-chalice rounded-5" placeholder="{{ __('Password') }}" required autocomplete="current-password">
                            </label>
                            @error('password')
                                <span class="text-error-red copy-s" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="w-full mb-3">
                            <label for="remember" class="flex items-center">
                                <input type="checkbox" class="form-checkbox">
                                <span class="copy-s ml-2 text-dove-gray">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="w-full">
                            <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection
