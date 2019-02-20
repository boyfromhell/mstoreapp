@extends('layouts.app')
@section('nav')
    @include('partials.nav')
@endsection
@section('content')
<div class="flex flex-wrap items-center px-6 py-32 md:px-0">
    <div class="w-full max-w-md md:mx-auto">
        <div class="rounded shadow">
            <div class="font-base text-base text-white bg-mstore p-2 rounded-t">
                {{ __('auth.Login') }}
            </div>
            <div class="bg-black p-3 rounded-b">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="flex items-stretch mb-3">
                        <label for="email" class="text-right font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">{{ __('auth.email') }}</label>
                        <div class="flex flex-col w-3/4">
                            <input id="email" type="email" class="flex-grow h-8 px-2 border rounded {{ $errors->has('email') ? 'border-red-dark' : 'border-grey-light' }}" name="email" value="{{ old('email') }}" required autofocus>
                            {!! $errors->first('email', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                        </div>
                    </div>

                    <div class="flex items-stretch mb-4">
                        <label for="password" class="text-right font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">{{ __('auth.password') }}</label>
                        <div class="flex flex-col w-3/4">
                            <input id="password" type="password" class="flex-grow h-8 px-2 rounded border {{ $errors->has('password') ? 'border-red-dark' : 'border-grey-light' }}" name="password" required>
                            {!! $errors->first('password', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                        </div>
                    </div>

                    <div class="flex mb-4">
                        <label class="w-3/4 ml-auto">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <span class="text-sm text-grey-dark"> {{ __('auth.remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex">
                        <div class="w-3/4 ml-auto">
                            <button type="submit" class="bg-mstore hover:bg-mstore-dark text-white text-base  py-2 px-4 rounded mr-3">
                                {{ __('auth.Login') }}
                            </button>
                            <a class="no-underline hover:underline text-grey-light text-sm" href="{{ route('password.request') }}">
                                {{ __('auth.forgot your password?') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
