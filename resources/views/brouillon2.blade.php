
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
                  
            // DISTANCE 
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
                      
                      


        }
               </script>
        attents.    ceci est un brouillons mal conçu* un instant. faut just utiliser la partie script. javais melange le contenu de cette page a dautre. ou soit laisse moi copier lintegralité de la page login ok
          <script>
            let lat2 ,lon2,lat1,lon1;
             if(navigator.geolocation){
               navigator.geolocation.getCurrentPosition(function(position){
              
                    document.querySelector('spam').innerHTML = "latitude = "+ position.coords.latitude + "longitude = "+ position.coords.longitude;
                   
                    lat2 = position.coords.latitude;
                      $(".latx2").val(lat2);
                          //console.log(lat2);
                     lon2= position.coords.longitude;
                       $(".longx2").val(lon2); 
                     //var gop = document.getElementsByClassName("longx2")[0].value= lon2;
   
       
                     lat1 = document.getElementsByClassName("pax")[0].value;
                      //console.log(lat1);
   
                       lon1 = document.getElementsByClassName("pox")[0].value;
                      // console.log(lon1);
        
                        $(".longx2").each(function(){
                          lon2 = $(this).val();
                          //console.log(lon2); 
                        });
   
                        $(".latx2").each(function(){
                            lat2 = $(this).val();
                          // console.log(lat2); 
                        });
                           
                          
                      }); 
                       
                      console.log(CalculateDistance(88,22,77,40));
                     
             }
        </script>
            

       
          
         
   
   
   
          
                                  
         
           
      @endsection
    @endsection