@extends('layouts.app')


@section('content')

@include('partials.header')

<form 
    class="bg-white shadow-md rounded-lg p-4 max-w-login mx-auto" method="POST" action="{{ route('login') }}">

    {{ csrf_field() }}
    @component('partials.heading')
        {{ __('auth.Login') }}
    @endcomponent

    @if ($errors->any())
        <p class="text-center font-semibold text-red my-3">
            @if ($errors->has('email'))
            {{ $errors->first('email') }}
            @else
            {{ $error->first('password') }}           
            @endif
        </p>
        
    @endif

    <div class="mb-1 {{ $errors->has('email') ? ' has-error' : ''  }}">
        <label  class="block font-bold mb-1" for="email">{{ __('auth.email') }}</label>
        <input class="w-full px-4 h-10 border-2 focus:border-mstore rounded-lg bg-white text-grey-darker outline-none mb-3 border-grey-light" id="email" type="email"  name="email" value="{{ old('email') }}" required autofocus>
    </div>

    <div class="mb-1 {{ $errors->has('password') ? 'has-error' : '' }}">
        <label class="block font_bold mb-1" for="password">{{ __('auth.password') }}</label>  
        <input class="w-full px-4 h-10 border-2 focus:border-mstore rounded-lg bg-white text-grey-darker outline-none mb-3 border-grey-light" id="password" type="password" name="password" required>
    </div>

    <div class="flex mb-6">
        <label class="flex items-center block text-xl font-bold">
            <input class="" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
            <span class="text-base text-grey-dark ml-2"> {{ __('auth.remember me') }}</span>
        </label>
        <div class="ml-auto">
            <a class=" text-grey-darker font-bold no-underline hover:text-mstore" href="{{ route('password.request') }}">
                {{ __('auth.forgot your password?') }}
            </a>
        </div>
    </div>

    <button class="w-full bg-mstore hover:bg-mstore-dark text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" >
        {{ __('auth.Login') }}
    </button>
        
 </form>
         
@endsection
