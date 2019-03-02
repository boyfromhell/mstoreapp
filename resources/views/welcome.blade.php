@extends('layouts.app')
@section('nav')
    @include('partials.nav')
@endsection

@section('content')
    
    <!--image-->
    <div class="container w-full max-w-4xl mx-auto bg-white bg-cover  rounded "  style="background-image:url('{{  Storage::url('mstorehome.jpg') }}'); height: 60vh;">
    </div>  
    <!--Container-->
	<div class="container max-w-2xl mx-auto -mt-32">
		
		<div class="mx-0 sm:mx-6">
			
			<div class="bg-white bg-transparent w-full p-4 md:p-12 text-lg md:text-2lg text-black leading-normal rounded-lg" style="opacity: .65;" >
				
				<!--Post Content-->
				

				<!--Lead Para-->
				<p class="text-2xl md:text-3xl mb-8 ">
                    👋 ยินดีต้อนรับเข้าสู่ <a class="text-grey-darkest hover:text-mstore no-underline border-b-2 border-mstore" href="https://www.moresmartstore.com">mStore</a>
                     เว็บไซต์ค้นหาและลงโพสร้านแนะนำสินค้า ..ฟรี !
				</p>

				<p class="py-4 text-gray-darkest mt-8">
                    พื้นที่สำหรับการลงโพสแนะนำร้านค้า ปักหมุดตำแหน่งที่ตั้งร้านใน Google โพสเนื้อหารายละเอียดร้านค้า
                    และรายการสินค้าที่มีในร้าน ให้คนทีกำลังค้นหาสินค้าใน mStore หรือใน Google ที่อยู่ในตำแหน่งใกล้เคียง
                    หาร้านของคุณเจอ 
                
                </p>					

						
			</div>
			
            
            <div class="container w-full max-w-2xl mx-auto px-2 py-8">
                <div class="flex flex-wrap -mx-2">

                    <div class="w-full md:w-1/2 px-2 pb-12">
                        <div class="max-w-md w-full lg:flex ">
                            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
                            </div>
                            <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                <div class="mb-8">
                                <p class="text-sm text-grey-dark flex items-center">
                                    <svg class="fill-current text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                                    </svg>
                                    Members only
                                </p>
                                <div class="text-black font-bold text-xl mb-2">Can coffee make you a better developer?</div>
                                <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                                </div>
                                <div class="flex items-center">
                                <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                                <div class="text-sm">
                                    <p class="text-black leading-none">Jonathan Reinink</p>
                                    <p class="text-grey-dark">Aug 18</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 px-2 pb-12">
                        <div class="max-w-md w-full lg:flex ">
                            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t  lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
                            </div>
                            <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                <div class="mb-8">
                                <p class="text-sm text-grey-dark flex items-center">
                                    <svg class="fill-current text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                                    </svg>
                                    Members only
                                </p>
                                <div class="text-black font-bold text-xl mb-2">Can coffee make you a better developer?</div>
                                <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                                </div>
                                <div class="flex items-center">
                                <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                                <div class="text-sm">
                                    <p class="text-black leading-none">Jonathan Reinink</p>
                                    <p class="text-grey-dark">Aug 18</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </div>
            </div>
        
	    </div>
	
        <div class="container font-sans bg-grey rounded mt-4 p-4 md:p-12 text-center">
            <h2 class="break-normal text-2xl md:text-4xl">Subscribe to mStore</h2>
            <h3 class="break-normal font-normal text-white text-sm md:text-xl">รับข่าวสารร้านมาใหม่ ทางอีเมล์</h3>
            <div class="w-full text-center pt-4">
                <form action="#">
                    <div class="w-full max-w-sm mx-auto p-1 pr-0 flex flex items-center">
                        <input type="email" placeholder="youremail@example.com" class=" flex-1 appearance-none rounded shadow p-4 text-grey-dark mr-2 focus:outline-none">
                        <button type="submit" class="rounded-lg flex-1 mt-2 md:mt-0 block md:inline-block appearance-none bg-mstore text-white text-base font-semibold  uppercase p-4 rounded shadow hover:bg-mstore-light">
                            รับข่าวสาร
                        </button>
                    </div>
                </form>
            </div>
        </div>
    
			
	
        

    </div>


@endsection

@section('footer')
    @include('partials.footer')
    
@endsection