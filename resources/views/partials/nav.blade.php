<div class="font-sans antialiased" id="app">
    <nav class="flex justify-between flex-wrap bg-black p-2">
      <div class="flex items-center flex-no-shrink text-mstore mr-6">
        <svg class="fill-current h-8 w-8 mr-2" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 9.87V20H2V9.87a4.25 4.25 0 0 0 3-.38V14h10V9.5a4.26 4.26 0 0 0 3 .37zM3 0h4l-.67 6.03A3.43 3.43 0 0 1 3 9C1.34 9 .42 7.73.95 6.15L3 0zm5 0h4l.7 6.3c.17 1.5-.91 2.7-2.42 2.7h-.56A2.38 2.38 0 0 1 7.3 6.3L8 0zm5 0h4l2.05 6.15C19.58 7.73 18.65 9 17 9a3.42 3.42 0 0 1-3.33-2.97L13 0z"/>
        </svg>
      </div>
      <div class="text-sm inline-flex md:hidden  lg:hidden xl:hidden">
            <div class="flex-1">
              <a href="/" class="no-underline block  sm:mt-0 text-mstore-dark hover:text-white px-2 m-2">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>ร้านเด่นวันนี้</title><path d="M10 12a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-3a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm4 2.75V20l-4-4-4 4v-8.25a6.97 6.97 0 0 0 8 0z"/></svg>
              </a>
            </div>
            <div class="flex-1">
              <a href="/" class="no-underline block sm:mt-0 text-mstore-dark hover:text-white px-2 m-2">
               <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>หาร้าน</title><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/></svg>
              </a>
            </div>
            <div class="flex-1">
              <a href="/" class="no-underline block sm:mt-0 text-mstore-dark hover:text-white px-2 m-2">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>เพิ่มร้าน</title><path d="M10 20S3 10.87 3 7a7 7 0 1 1 14 0c0 3.87-7 13-7 13zm0-11a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
              </a>
            </div>
      
      </div>
      <div class="block sm:hidden md:hidden lg:hidden xl:hidden">
        <button @click="toggle" class="flex items-center px-3 py-2  text-mstore hover:text-white ">
          <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
      </div>
      <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto sm:hidden ">
        <div class="text-sm flex-grow">
            
        </div>

        <div class="text-base lg:flex-grow sm:justify-center">
            <a href="/" class="no-underline block mt-4 sm:inline-block sm:mt-0 text-mstore-dark hover:text-white mr-4">
              ร้านเด่นวันนี้
            </a>
            <a href="/" class="no-underline block mt-4 sm:inline-block sm:mt-0 text-mstore-dark hover:text-white mr-4">
              หาร้าน
            </a>
            <a href="/home" class="no-underline block mt-4 sm:inline-block sm:mt-0 text-mstore-dark hover:text-white">
              เพิ่มร้าน
            </a>
        </div>

        <div>
        @auth

            <div class="relative group">
              <div class="flex items-center cursor-pointer text-lg text-mstore  group-hover:border-blue rounded-t-lg mt-4 px-6 sm:mt-0">
                
                <svg class=" mr-2 fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM7 6v2a3 3 0 1 0 6 0V6a3 3 0 1 0-6 0zm-3.65 8.44a8 8 0 0 0 13.3 0 15.94 15.94 0 0 0-13.3 0z"/></svg>
                    {{ Auth::user()->name }}
              </div>
              <div class="  items-center absolute border border-t-0 rounded-b-lg p-1 bg-white p-2 invisible group-hover:visible w-full">
                <a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-lighter">Profile</a>
                <hr class="border-t mx-2 border-grey-ligght">
                <a href="{{ route('logout') }}" class=" no-underline px-4 py-2 block text-black hover:bg-grey-lighter"
                      onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}

                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </div>

            

        @else

            <a href="{{ route('login') }}" class="no-underline inline-block text-lg px-4 py-2 leading-none text-mstore  hover:text-white hover:bg-mstore mt-4 sm:mt-0">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg>
                {{ __('auth.Login') }}
            </a>

            <a href="{{ route('register') }}" class="no-underline inline-block text-lg px-4 py-2 leading-none text-mstore  hover:text-white hover:bg-mstore mt-4 sm:mt-0">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2 6H0v2h2v2h2V8h2V6H4V4H2v2zm7 0a3 3 0 0 1 6 0v2a3 3 0 0 1-6 0V6zm11 9.14A15.93 15.93 0 0 0 12 13c-2.91 0-5.65.78-8 2.14V18h16v-2.86z"/></svg>
              
                {{ __('auth.register') }}
            </a>

        @endauth

        </div>

      </div>

    </nav>
  </div>
