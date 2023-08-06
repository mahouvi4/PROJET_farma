var deg2rad = function (deg) { return deg * (Math.PI / 180); };
var R = 6371;
var dlat = deg2rad(lat2-lat1);
var dlon = deg2rad(long2-long1);
var a = Math.sin(dlat/2) * Math.sin(dlat/2) + Math.cos(deg2rad(lat1)) *  Math.cos(deg2rad(lat2)) * Math.sin(dlon/2) * Math.sin(dlon/2);
var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
var d= R * c;
//return d,
console.log(long1);


function getDistanceFromLatLonInKm(lat1, lon1, lat2, lon2) {
                                    
    var R = 6371; // Radius of the earth in km
    var dLat = deg2rad(lat2-lat1);  // deg2rad below
    var dLon = deg2rad(lon2-lon1); 
    var a = 
    Math.sin(dLat/2) * Math.sin(dLat/2) +
    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
    Math.sin(dLon/2) * Math.sin(dLon/2)
    ; 
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
    var d = R * c; // Distance in km
    return d;

    }

    function deg2rad(deg) {
    return deg * (Math.PI/180)
    }
   


    function getDistanceFromLatLonInKm(position1, position2) {
        "use strict";
        var deg2rad = function (deg) { return deg * (Math.PI / 180); },
            R = 6371,
            dLat = deg2rad(position2.lat - position1.lat),
            dLng = deg2rad(position2.lng - position1.lng),
            a = Math.sin(dLat / 2) * Math.sin(dLat / 2)
                + Math.cos(deg2rad(position1.lat))
                * Math.cos(deg2rad(position1.lat))
                * Math.sin(dLng / 2) * Math.sin(dLng / 2),
            c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        return ((R * c *1000).toFixed());
    }
    
    var distancia = (getDistanceFromLatLonInKm(
       {lat: -23.522490, lng: -46.736600},
       {lat: -23.4446654, lng: -46.5319316}
    ));
    
    console.log(distancia);


    ------------------------------------------------------------------------

    @extends('base')

    @section('content')
    
         @foreach ($list_pharma as $item)
                 
             
   
   
                               
                       <img src="{{asset('pharmacie/'.$item->photo)}}" width="90px" height="70px">
                       <p>{{$item->name_pharma}}</p>
                       <p class="olo">{{$item->latitude}}"</p>
                         <p>{{$item->longitude}}"</p>
   
                         <input type="text" value="{{$item->latitude}}" class="pax">
                         <input type="text" value="{{$item->longitude}}" class="pox">
   
                         <input type="text" class="latx2">
                         <input type="text" class="longx2" name="longx2">
   
                 
   
              @endforeach
   
                  </table>
   
             <p>ma localisation est:  <spam> </spam></p>
        
   
      @section('scripts')
   
          <script>
            let lat2 ,lon2,lat1,lon1;
             if(navigator.geolocation){
               navigator.geolocation.getCurrentPosition(function(position){
              
                    document.querySelector('spam').innerHTML = "latitude = "+ position.coords.latitude + "longitude = "+ position.coords.longitude;
                   
                    lat2 = position.coords.latitude;
                      $(".latx2").val(lat2);
   
                     lon2= position.coords.longitude;
                    // $(".longx2").val(lon2); 
                      var gop = document.getElementsByClassName("longx2")[0].value= lon2;
   
       
                     lat1 = document.getElementsByClassName("pax")[0].value;
                      // console.log(lat1);
   
                       lon1 = document.getElementsByClassName("pox")[0].value;
                      // console.log(long1);
        
                        $(".longx2").each(function(){
                          lon2 = $(this).val();
                          // console.log(long2); 
                        })
   
                        $(".latx2").each(function(){
                            lat2 = $(this).val();
                          // console.log(lat2); 
                        })
                     //console.log(lat1)
                   
              });
          }
   
   </script>
   
   
                           <script>
                                               function getDistanceFromLatLonInKm(position1, position2) {
                                                   "use strict";
                                                 var lat1 = document.getElementsByClassName("pax")[0].value;
                                                   console.log(lat1);
                                                   var  lon1 = document.getElementsByClassName("pox")[0].value;
                                                    console.log(lon1);
   
                                                    var  lon2 = document.getElementsByName("longx2");
                                                    console.log(lon2);
                                                    
                                                   var deg2rad = function (deg) { return deg * (Math.PI / 180); },
                                                       R = 6371,
                                                       dLat = deg2rad(position2.lat - position1.lat),
                                                       dLng = deg2rad(position2.lng - position1.lng),
                                                       a = Math.sin(dLat / 2) * Math.sin(dLat / 2)
                                                           + Math.cos(deg2rad(position1.lat))
                                                           * Math.cos(deg2rad(position1.lat))
                                                           * Math.sin(dLng / 2) * Math.sin(dLng / 2),
                                                       c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
                                                   return ((R * c *1000).toFixed());
                                               }
   
                                               var distancia = (getDistanceFromLatLonInKm(
                                               {lat: -23.522490, lng: -46.736600},
                                               {lat: -23.4446654, lng: -46.5319316}
                                               ));
   
                                               console.log(distancia);
                       </script>
   
   
          
                                  
         
           
      @endsection
    @endsection

    //
    function CalculateDistance(latx, laty,lonx,lony){
                   
             

      var theta,miles;
          var result = [];
          var pi = Math.PI;
          var lonx,lony,latx,laty;
          
       
         // const degsToRads = deg => (deg * Math.PI) / 180.0;
         // const radsToDegs = rad => rad * 180 / Math.PI;
          //var rad2deg = function (deg) { return deg * (deg * (180/pi)); };
          var rad2deg = function (rad) { return rad * ( 180 / Math.PI); };
         // var rad2deg = require( '@stdlib/math-base-special-rad2deg' );
          var deg2rad = function (deg) { return deg * (Math.PI / 180); };
            theta = lonx - lony;
            miles = (Math.sin(deg2rad(latx))) * Math.sin(deg2rad(laty)) + (Math.cos(deg2rad(latx)) * Math.cos(deg2rad(lat2)) * Math.cos(deg2rad(theta)));
            miles = Math.acos(miles);
           miles = rad2deg(miles);
          result['miles'] = miles * 60 * 1.1515;
          result['feet'] = result['miles'] * 5280;
          result['yards'] = result['feet']/3;
          result['kilometers'] = result['miles']*1.609344;
          result['meters'] = result['kilometers']*1000;
          return result;
         
         


}//////////////////////////////////////////////////////////////////////////////////////////////////////

<h2 style="text-align: center;">Calculate Distance between to location with Latitude Longitude using PHP</h2>


<?php


function calculateDistance($lat1, $long1, $lat2, $long2){
  $theta = $long1 - $long2;
  $miles = (sin(deg2rad($lat1))) * sin(deg2rad($lat2)) + (cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
  $miles = acos($miles);
  $miles = rad2deg($miles);
  $result['miles'] = $miles * 60 * 1.1515;
  $result['feet'] = $result['miles']*5280;
  $result['yards'] = $result['feet']/3;
  $result['kilometers'] = $result['miles']*1.609344;
  $result['meters'] = $result['kilometers']*1000;
  return $result;
}

echo '<pre>';
var_dump(calculateDistance(88,22,77,44));

///

function CalculateDistance(latx, laty,lonx,lony){
             
             //  get_position_user();
               
               var theta,miles;
           var result = [];
           var pi = Math.PI;
           
        
          // const degsToRads = deg => (deg * Math.PI) / 180.0;
          // const radsToDegs = rad => rad * 180 / Math.PI;
           //var rad2deg = function (deg) { return deg * (deg * (180/pi)); };
           var rad2deg = function(rad) {return (rad * 180/ Math.PI)};
          // var rad2deg = require( '@stdlib/math-base-special-rad2deg' );
           var deg2rad = function (deg) { return deg * (Math.PI / 180); };
             theta = lonx - lony;
             miles = (Math.sin(deg2rad(latx))) * Math.sin(deg2rad(laty)) + (Math.cos(deg2rad(latx)) * Math.cos(deg2rad(laty)) * Math.cos(deg2rad(theta)));
             miles = Math.acos(miles);
            miles = rad2deg(miles);
           result['miles'] = miles * 60 * 1.1515;
           result['feet'] = result['miles'] * 5280;
           result['yards'] = result['feet']/3;
           result['kilometers'] = result['miles']*1.609344;
           result['meters'] = result['kilometers']*1000;
           return result;   
                       
                       
 
                
         }

         ///////////////////////////////amb
         
    public function all(Request $request){
        $lat=$request->query('lat');
        $lon=$request->query('lon');
        $sqlDistance = DB::raw('( 111.045 * acos( cos( radians('.$lat.')) 
       * cos( radians( adresses.latitude )) 
       * cos( radians( adresses.longitude ) 
       - radians('.$lon.') ) 
       + sin( radians('.$lat.') ) 
       * sin( radians( adresses.latitude) ) ) )');
       
       $stores = DB::table('adresses') 
       ->join('stores','stores.id','adresses.store_id') 
        ->select('adresses.latitude','adresses.longitude','stores.*') 
        ->selectRaw("{$sqlDistance} AS distance") 
        ->orderBy('distance') 
        ->get();
        return view('data',$stores);  

        ////////////////////////////////////////////////

          public function home_pharmacie(){
      
        if(session('info_user')){
            $position_users = position_user::where('id_user',session('info_user')[0]->id)->OrderBy('id','desc')->take(1)->first();
         
            $sqlDistance = DB::raw('(111.045 * acos( cos( radians('.$position_users->latitude.')) 
           * cos( radians(pharmacies.latitude)) 
           * cos( radians(pharmacies.longitude) 
           - radians('.$position_users->longitude.')) 
           + sin( radians('.$position_users->latitude.') ) 
           * sin( radians(pharmacies.latitude) ) ) )');
           
           $stores = DB::table('pharmacies') 
          
            ->select('latitude','longitude','name_pharma') 
            ->selectRaw("{$sqlDistance} AS distance") 
            ->orderBy('distance') 
            ->get();
           //dd($stores) ; 
          // dd($sqlDistance);
           dd($stores);
        }else{
            return redirect('formulaire_login');
        }
        
     } 

     //distacnce enfin reussie
     

     public function home_pharmacie(){
      
      if(session('info_user')){
          $position_users = position_user::where('id_user',session('info_user')[0]->id)->OrderBy('id','desc')->take(1)->first();
       
          $location = DB::table('pharmacies')
      ->select('name_pharma', 'latitude', 'longitude', DB::raw(sprintf(
          '(6371 * acos(cos(radians(%1$.7f)) * cos(radians(latitude)) * cos(radians(longitude) - radians(%2$.7f)) + sin(radians(%1$.7f)) * sin(radians(latitude)))) AS distance',
          $position_users->latitude,
          $position_users->longitude
      )))
     
      ->orderBy('distance', 'asc')
      ->get();
            dd($location);
  //return $location;
      }else{
          return redirect('formulaire_login');
      }

      ///////////////////////
      
   
  }