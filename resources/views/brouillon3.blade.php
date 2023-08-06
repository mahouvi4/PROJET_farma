
    @extends('base')

    @section('content')
        

     @dump($position_user)
         @foreach ($list_pharma as $item)
                 
             
   
   
                               
                       <img src="{{asset('pharmacie/'.$item->photo)}}" width="90px" height="70px">
                       <p>{{$item->name_pharma}}</p>
                      
   
                        lat farma <input type="text" value="{{$item->latitude}}" class="pax">
                       long farma  <input type="text" value="{{$item->longitude}}" class="pox">
   
                  @endforeach

                   <br>

                    @foreach ($position_user as $item)
                    lat cli  <input type="text" class="lat_user" value="{{$item->latitude}}">
                    long cli    <input type="text" class="long_user" name="longx2"  value="{{$item->longitude}}"> 
                    @endforeach

   
                  </table>
   
        
        
   
      @section('scripts')
               <script>
            function get_position_user(){
              var lat2,lon2,lat1,lon1;
            $(".lat_user").each(function(){
                   lat2 =  $(this).val();
                  // console.log(lat2);
              });

              $(".long_user").each(function(){
                   lon2 =  $(this).val();
                  // console.log(lon2);
              });

              $(".pax").each(function(){
                   lat1 =  $(this).val();
                   //console.log(lat1);
              });

              $(".long_user").each(function(){
                   lon1 =  $(this).val();
                  // console.log(lon1);
              });

            }
            
                                               function getDistanceFromLatLonInKm(position1, position2) {
                                                   "use strict";
                                                 
                                                    
                                                   var deg2rad = function (deg) { return deg * (Math.PI / 180); },
                                                       R = 6371,
                                                       dLat = deg2rad(position2.lat - position1.lat),
                                                       dLng = deg2rad(position2.lng - position1.lng),
                                                       a = Math.sin(dLat / 2) * Math.sin(dLat / 2)
                                                           + Math.cos(deg2rad(position1.lat))
                                                           * Math.cos(deg2rad(position2.lat))
                                                           * Math.sin(dLng / 2) * Math.sin(dLng / 2),
                                                       c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
                                                   return ((R * c * 1000).toFixed());
                                               }

   

                                               // DISTANCE 
                            var lonx,lony,latx,laty;

              $(".pax").each(function(){
                   lat1 =  $(this).val();
                   //console.log(lat1);
              });

              $(".long_user").each(function(){
                   lon1 =  $(this).val();
                  // console.log(lon1);
              });

              $(".lat_user").each(function(){
                   lat2 =  $(this).val();
                  // console.log(lat2);
              });

              $(".long_user").each(function(){
                   lon2 =  $(this).val();
                  // console.log(lon2);
              });
                                               var distancia = (getDistanceFromLatLonInKm(
                                               {lat: lat1, lng: lon1},
                                               {lat: lat2, lng: lon2}
                                               ));
   
                                               //console.log(distancia);

                                               var  km = (distancia/1000);
                                               console.log(km);
                                              


     
                       </script>         
           
      

               

   
        
            

       
          
         
   
   
   
          
                                  
         
           
      @endsection
    @endsection