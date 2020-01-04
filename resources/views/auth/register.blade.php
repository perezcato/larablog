@extends('layouts.auth')

@section('content')
<div class="auth-container">
    <h1 class="bg-blue-900 text-white mx-auto w-16 text-center py-5 px-4 font-bold rounded-full">{{__('B')}}</h1>
    <form method="POST" class="mt-4" action="{{ route('register') }}">
        @csrf
        <div class="">
            <label for="name" class="login-label">{{ __('Name') }}</label>
            <div class="col-md-6">
                <input id="name" type="text" class="auth-input focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror"
                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="mt-4">
            <label for="email" class="login-label">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="auth-input focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="mt-4">
            <label for="password" class="login-label">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="auth-input focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="mt-4">
            <label for="password-confirm" class="login-label">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="auth-input focus:outline-none focus:shadow-outline" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>
            <button type="submit" class=" w-full bg-blue-700 text-white py-2 rounded-lg mt-6 ">
                {{ __('Register') }}
            </button>

    </form>
</div>
@endsection
