@extends('base')

@section('css')
@endsection

@section('content')

       <br><br>
    <div class="container">
        <div class="inf2"></div>
        <form method="POST" id="canxd">
        <div class="row">
            
           
           <div class="col-6">
            <div class="group-control">
                Email:<input type="email" name="email"class="form-control eka">
             </div>
           </div>
           <div class="col-6">
            <div class="group-control">
                Password:<input type="password" name="password1" class="form-control eki">
             </div>
           </div>
           
           <div class="col-6">
            <div class="group-control">
                Latitude:<input type="text" name="latitude" class="form-control lol">
             </div>
           </div>
           <div class="col-6">
            <div class="group-control">
                Longitude:<input type="text" name="longitude" class="form-control lal">
             </div>
           </div>
           <div class="col-6">
             <button type="button" class="btn btn-primary mt-2 bot" id="bass">Enter</button>
           </div>
       </div>
       <spam></spam>
           </form>
    </div>
       

@section('scripts')


       <script>
          var  name,email,password1,password2,latitude,longitude;
           
            navigator.geolocation.getCurrentPosition(function(position){
      
          document.querySelector('spam').innerHTML = "latitude = "+ position.coords.latitude + "longitude = "+ position.coords.longitude;
     
            lat2 = position.coords.latitude;
            $(".lol").val(lat2);
            //console.log(lat2);
            lon2= position.coords.longitude;
             $(".lal").val(lon2);

               $("#bass").on('click',function(){
                //recuperer latitude
                     $(".lol").each(function(){
                       var latitude = $(this).val();
                         //alert(latitude);

                        });

                         ////recuperer longitude
                         $('.lal').each(function(){
                            var lon = $(this).val();
                            //alert(lon);
                        })

                        //recuperer name
                        $(".eko").each(function(){
                         var name = $(this).val();
                        // alert(name)
                        });

                         //recuperer email
                         $(".eka").each(function(){
                         var email = $(this).val();
                        // alert(email)
                        });

                         //recuperer password1
                         $(".eki").each(function(){
                         var password1 = $(this).val();
                         //alert(password1)
                        });

                         //recuperer name
                         $(".eku").each(function(){
                         var password2 = $(this).val();
                         //alert(password2);
                        });
                            
                       

                       // name,email,password1,password2,latitude,longitude,
                       var formdata = new FormData($("#canxd")[0]);
                       $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
 
                        $.ajax({
                              type:"post",
                              url:"{{url('login_control')}}",
                              data:formdata,
                                  processData:false,
                                   contentType:false,
                              success:function(response){
                                console.log(response);
                                 if(response.status==500){
                                            $(".inf2").html(response.message).addClass('alert alert-danger');
                                 } 
                                   

                                 if(response.status==400){
                                            $(".inf2").html(response.message).addClass('alert alert-danger');
                                 }  
                                        
                                        
                                if(response.status==200){
                                        window.location.href="{{url('/')}}";
                              }
                              }  // alert('hummmm error');
                              
                        });
                        
               });
              
             

              });
            
        
       </script>


    
@endsection
@endsection