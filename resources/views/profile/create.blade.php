@extends('layouts.app')
@section('nav')
    @include('partials.nav')
    
@endsection

@section('title')

    <title>Create a Profile</title>

@endsection

@section('content')

<div class="flex-1  mx-auto items-center p-8">
    <div class="w-full max-w-md md:mx-auto">
        <div class="rounded shadow">
            <div class="font-semibold text-base text-grey-lighter bg-mstore-dark p-2 rounded-t">
                {{ __('Create Youe Profile') }}
            </div>
            <div class="bg-black p-3 rounded-b">

                <form class="form-horizontal" method="POST" action="/profile">
                {{ csrf_field() }}
                <!-- first_name Form Input -->
                    <div class="flex items-stretch mb-3">
                        <label for="first_name" class="text-right font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">First Name</label>
                        <div class="flex flex-col w-3/4">
                            <input id="first_name" type="text" class="flex-grow h-8 px-2 border rounded {{ $errors->has('first_name') ? 'border-red-dark' : 'border-grey-light' }}" fist_name="first_name" value="{{ old('first_name') }}" autofocus>
                            {!! $errors->first('first_name', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                        </div>
                    </div>
                    

                    <!-- last_name Form Input -->
                    <div class="flex items-stretch mb-3">
                        <label for="last_name" class="text-right font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">Last Name</label>
                        <div class="flex flex-col w-3/4">
                            <input id="last_name" type="text" class="flex-grow h-8 px-2 border rounded {{ $errors->has('last_name') ? 'border-red-dark' : 'border-grey-light' }}" fist_name="last_name" value="{{ old('last_name') }}" autofocus>
                            {!! $errors->first('last_name', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                        </div>
                    </div>
                    
                   

                    <!-- birthdate Form Input -->
                    <div class="flex items-stretch mb-3">
                        <label for="birthdate" class="text-right font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">Birth date</label>
                        <div class="flex flex-col w-3/4">
                            <input id="birthdate" type="date" class="flex-grow h-8 px-2 border rounded {{ $errors->has('birthdate') ? 'border-red-dark' : 'border-grey-light' }}" fist_name="birthdate" value="{{ old('birthdate') }}" autofocus>
                            {!! $errors->first('birthdate', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                        </div>
                    </div>

                    

                    <!-- Gender Form Input -->
                    <div class="flex items-stretch mb-3">
                        <label for="birthdate" class="text-right font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">Gender</label>
                        <div class="relative">
                            <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" id="gender" name="gender">
                            
                                <option value="{{old('gender')}}">
                                    {{ ! is_null(old('gender')) ?
                                    (old('gender') == 1 ? 'Male' :'Female')
                                    : 'Please Choose One'}}</option>
                                <option value="1">Male</option>
                                <option value="0">Female</option>
                                
                            </select>

                            @if ($errors->has('gender'))

                                <span class="help-block">
                                <strong>{{ $errors->first('gender') }}</strong>
                                </span>

                            @endif
                        </div>
                    </div>

                    <div class="flex">
                        <div class="w-3/4 ml-auto">
                            <button type="submit" class="bg-mstore hover:bg-mstore-dark text-white text-base font-semibold py-2 px-4 rounded mr-3">
                                {{ __('Create') }}
                            </button>
                        </div>
                    </div>


                    

                </form>

            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    @include('partials.footer')
    
@endsection