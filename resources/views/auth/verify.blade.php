@extends('layouts.app')
@section('nav')
    @include('partials.nav')
@endsection
@section('content')
<div class="flex items-center py-16">
    <div class="md:w-1/2 md:mx-auto">
        <div class="rounded shadow">
            <div class="font-medium text-lg text-white bg-mstore-dark p-2 rounded-t">
                {{ __('Verify your Email Address') }}
            </div>
            <div class="bg-black p-3 rounded-b">
                @if (session('resent'))
                    <div class="bg-white border border-succes-light text-success-dark text-sm px-4 py-3 rounded mb-4">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                <p class="text-mstore">
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}" class="no-underline text-mstore-lighter hover:text-white">{{ __('click here to request another') }}</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
