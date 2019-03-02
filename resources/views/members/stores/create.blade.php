@extends('layouts.app')

@section('nav')
  @include('partials.nav')
@endsection

@section('content')
    

<form class="w-full max-w-2xl bg-white shadow-md rounded-lg p-3 mx-auto py-4 mt-6 mb-6">
    {{ csrf_field() }}
    
    <label class="block font-bold mb-1" for="raddressInput">Search</label>
    <input type="text" id="addressInput" 
    class="w-full md:w-3/5 px-4 h-10 border-2 focus:border-mstore rounded-lg bg-white text-grey-darker outline-none mb-3 border-grey-light"/>
    

    <label for="radiusSelect">รัศมี:</label>
        <select id="radiusSelect" label="Radius">
          <option value="50" selected>50 kms</option>
          <option value="30">30 kms</option>
          <option value="20">20 kms</option>
          <option value="10">10 kms</option>
        </select>
    <input type="button" id="searchButton" 
        class= "items-center bg-mstore hover:bg-mstore-dark text-white font-bold py-3 px-4 rounded focus:outline-none focus:shadow-outline" type="submit"
    value="Search"/>
    
  

    <div>
      <select id="locationSelect" style="width: 10%; visibility: hidden"></select>
    </div>

    <div  id="map"  style="width:100%;height:600px; ">
        
    </div>
</form>

@endsection
@push('scripts')
    <script src="/js/mapInput.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&language=th&region=TH&callback=initMap"
                    type="text/javascript">
    </script>
@endpush