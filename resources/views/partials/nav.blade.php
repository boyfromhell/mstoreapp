<div class="font-sans antialiased" id="app">
    <nav class="flex justify-between flex-wrap bg-black p-1 mt-0 w-full shadow-md">
      <div class="flex items-center flex-no-shrink  mr-1">
        <a class="flex text-mstore text-base font-semibold no-underline hover:text-white hover:no-underline" href="/"> 
            @include('partials.logo')
        </a>

      </div>
      <div class="text-sm inline-flex md:hidden  mt-2 lg:hidden xl:hidden">
            <div class="flex-1">
              <a href="/" class="no-underline block  sm:mt-0 text-grey-lighter hover:text-mstore px-2 m-2">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>ร้านเด่นวันนี้</title><path d="M10 12a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-3a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm4 2.75V20l-4-4-4 4v-8.25a6.97 6.97 0 0 0 8 0z"/></svg>
              </a>
            </div>
            <div class="flex-1">
              <a href="/" class="no-underline block sm:mt-0 text-grey-lighter hover:text-mstore px-2 m-2">
               <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>หาร้าน</title><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/></svg>
              </a>
            </div>
            <div class="flex-1">
              <a href="/" class="no-underline block sm:mt-0 text-grey-lighter hover:text-mstore px-2 m-2">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>เพิ่มร้าน</title><path d="M10 20S3 10.87 3 7a7 7 0 1 1 14 0c0 3.87-7 13-7 13zm0-11a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
              </a>
            </div>
      
      </div>
      <div class="block sm:hidden md:hidden lg:hidden xl:hidden">
        <button @click="toggle" class="flex items-center px-3 py-2  text-grey-lighter hover:text-mstore ">
          <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
      </div>
      <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto sm:hidden ">
        <div class="text-sm flex-grow">
            
        </div>

        <div class="text-base lg:flex-grow sm:justify-center ">
            <a href="/" class="no-underline block mt-4 sm:inline-block sm:mt-0 text-grey-lighter hover:text-mstore mr-4">
               ร้านเด่นวันนี้
              
            </a>
            <a href="/" class="no-underline block mt-4 sm:inline-block sm:mt-0 text-grey-lighter hover:text-mstore mr-4">
              หาร้าน
            </a>
            <a href="/home" class="no-underline block mt-4 sm:inline-block sm:mt-0 text-grey-lighter hover:text-mstore">
              เพิ่มร้าน
            </a>
        </div>

        <div class="flex items-baseline items-end w-auto">

            @auth

              <div class="relative group">
                <div class="flex items-center cursor-pointer text-lg text-grey-lighter  group-hover:border-mstore hover:text-mstore rounded-t-lg mt-4 px-6 mb-2 sm:mt-0">
                  
                  <img class="w-8 h-8 rounded-full mr-4 mt-1" src="{{ Storage::url(Auth::user()->avatar) }}" alt="Avatar of Jonathan Reinink">
             
                          {{ Auth::user()->name }}
                </div>
                <div class=" w-full tems-center absolute border border-t-0 rounded-b-lg  bg-white p-1 invisible group-hover:visible w-full">
                  <a href="{{ route('show-profile') }}" 
                      class="no-underline px-4 py-2 block text-black hover:bg-grey-lighter">
                      {{ __('auth.Profile') }}
                    
                  </a>
                  <a href="{{ route('settings') }}" 
                      class="no-underline px-4 py-2 block text-black hover:bg-grey-lighter">
                      {{ __('auth.Account Setting') }}
                    
                  </a>
                  
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

                <a href="{{ route('login') }}" class="no-underline inline-block text-base font-semibold px-4 py-2 leading-none text-grey-lighter rounded hover:text-white hover:bg-mstore  mt-4 sm:mt-0">
             
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg>
                    {{ __('auth.Login') }}
                </a>

                <a href="{{ route('register') }}" class="no-underline inline-block text-base font-semibold px-4 py-2 leading-none text-grey-lighter rounded hover:text-white hover:bg-mstore mt-4 sm:mt-0">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2 6H0v2h2v2h2V8h2V6H4V4H2v2zm7 0a3 3 0 0 1 6 0v2a3 3 0 0 1-6 0V6zm11 9.14A15.93 15.93 0 0 0 12 13c-2.91 0-5.65.78-8 2.14V18h16v-2.86z"/></svg>
                  
                    {{ __('auth.register') }}
                </a>

            @endauth

        </div>

      </div>

    </nav>
  </div>

  <!--slide in nav-->
	<div id="header" class="bg-white fixed w-full z-10 pin-t hidden animated" style="opacity: .95;">
		<div class="bg-white">
			<div class="flex flex-wrap items-center content-center">
				<div class="flex w-1/2 justify-start text-white font-extrabold">
					<a class="flex font-semibold text-black no-underline hover:text-mstore hover:no-underline pl-2" href="/">
            @include('partials.logoblack')
					</a>
				</div>
				<div class="flex w-1/2 justify-end content-center">		
					  <p class="hidden sm:block mr-3 text-center h-14 p-4 text-xs"><span class="pr-2">Share this</span> 👉</p>
						<a class="inline-block text-white no-underline hover:text-white hover:text-underline text-center h-10 w-10 p-2 md:h-auto md:w-16 md:p-4" href="#" style="background-color:#33b1ff;">
							<svg class="fill-current text-white h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"></path></svg>
						</a>
						<a class="inline-block text-white no-underline hover:text-white hover:text-underline text-center h-10 w-10 p-2 md:h-auto md:w-16 md:p-4" href="#" style="background-color:#005e99">
							<svg class="fill-current text-white h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path></svg>
						</a>
				</div>
			</div>
			
		</div>
		<!--Progress bar-->
		<div id="progress" class="h-1 bg-white shadow" style="background:linear-gradient(to right,  #FFCF4F var(--scroll), transparent 0);"></div>
    </div>