@extends('layouts.app')

@section('content')
<div class="mx-auto h-full flex justify-center items-center bg-gray-300">
    <div class="w-96 bg-blue-900 rounded-lg shadow-xl p-6">
        <div class="fill-current text-white w-16">LOGO</div>
        <h1 class="text-white text-3xl pt-8">Wellcome back</h1>
        <h2 class="text-blue-300">Enter you enterise</h2>
        <div class="col-md-8">
            <div class="card">
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="pt-8 ">
                        @csrf

                        <div class="relative ">
                            <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute p-3">Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="email" value="{{ old('email') }}"  autofocus placeholder="your@email.com">

                                @if ($errors->has('email'))
                                    <span class="text-red-600 text-sm pt-1" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="relative pt-3">
                            <label for="password" class="uppercase text-blue-500 text-xs font-bold absolute p-3">password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="password"  placeholder="your password">

                                @if ($errors->has('password'))
                                    <span class="text-red-600 text-sm pt-1" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="pt-2">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="text-white" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                            <div class="pt-8 ">
                                <button type="submit" class="w-full bg-gray-400 py-2 px-3 text-left uppercase rounded text-blue-800 font-bold">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        <div class="flex justify-between pt-8 text-white text-sm font-bold">
                            <a class="" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            <a class="" href="{{ route('register') }}">
                                Register
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
