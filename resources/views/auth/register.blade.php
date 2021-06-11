@extends('layouts.app')

@section('content')
<div class="mx-auto h-full flex justify-center items-center bg-gray-300">
    <div class="w-96 bg-blue-900 rounded-lg shadow-xl p-6">
        <div class="col-md-8">
            <div class="card">
                <div class="text-white text-3xl pb-8">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="uppercase text-blue-500 text-xs font-bold absolute p-3">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Your name" autofocus>

                                @if ($errors->has('name'))
                                    <span class="text-red-600 text-sm pt-1" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="relative pt-3">
                            <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute p-3">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="your@email.com">

                                @if ($errors->has('email'))
                                    <span class="text-red-600 text-sm pt-1" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="relative pt-3">
                            <label for="password" class="uppercase text-blue-500 text-xs font-bold absolute p-3">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Your password">

                                @if ($errors->has('password'))
                                    <span class="text-red-600 text-sm pt-1" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="relative pt-3">
                            <label for="password-confirm" class="uppercase text-blue-500 text-xs font-bold absolute p-3">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="password_confirmation" placeholder="Confirm password">
                            </div>
                        </div>

                        <div class="pt-8">
                            <div class="w-full bg-gray-400 py-2 px-3 text-left uppercase rounded text-blue-800 font-bold">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
