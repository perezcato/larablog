@extends('layouts.auth')

@section('content')
    <div class="auth-container">
        <h1 class="bg-blue-900 text-white mx-auto w-16 text-center py-5 px-4 font-bold rounded-full">{{__('B')}}</h1>
        <form method="POST" class=" mt-4" action="{{ route('login') }}">
            @csrf
            <div class="form-group row">
                <label for="email" class="login-label">{{ __('E-Mail Address') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="auth-input focus:shadow-outline focus:outline-none
                            @error('email') border border-red-500 @enderror"
                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="text-xs text-red-600 font-bold"  role="alert">
                                        <strong>{{$message}} </strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="mt-5">
                <label for="password" class="login-label">{{ __('Password') }}</label>
                <div class="col-md-6">
                    <input id="password" type="password" class=" auth-input focus:outline-none focus:shadow-outline
                                            @error('password') border border-red-500 @enderror"
                           name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="text-xs text-red-600 font-bold" role="alert">
                        <strong> {{$message}} </strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="mt-4">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember"
                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="login-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex items-baseline">
                <button type="submit" class="w-2/4 bg-blue-700 text-white py-2 rounded mt-4 ">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="text-xs font-bold text-blue-900 text-right w-2/4" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

            <div class="mt-4 w-full">
                <a href="{{route('github.login')}}" class="w-full inline-block text-center text-white bg-gray-800 py-2 rounded  ">
                    Login with GitHub
                </a>
            </div>

        </form>
    </div>
@endsection
