<!DOCTYPE html>
<html>
  
    <head>
        <title>Login</title>
        <meta charset="UTF -8">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

       <style>
           
           body{
        ;
        background-size:100%;
        background-attachment:fixed;
           }


           @include('stylo');
           
          
       </style>
       
    </head>
    <body style="background-image: url('{{asset('images/bingo.jpg')}}');background-repeat:no-repeat;background-attachment:fixed;background-size:cover">
         
          
        <div class="container">
                   
            <div class="drop">
                
                <div class="content">
                   <div id="eio"></div>
                    <h2 class="antonia" style="font-family:Forte;font-size:2rem">Login</h2>
                    <form method="POST" id="canx">
                        <div class="inf2" style="margin-left:35px"></div>
                        <div class="inputBox">
                            <input type="email" name="email" placeholder="Email" class="eka">
                        </div>

                        <div class="inputBox">
                            <input type="password" name="password1" placeholder="Password" class="eki">
                        </div>

                       
                            <input type="hidden" name="latitude"  class="lol">
                        

                        
                            <input type="hidden"  name="longitude"  class="lal">
                       
                           
                        <div class="form-control" style="width:50%;margin-left:-40px">

            <input type="button" value="Login ♣" id="bass" style="background-color: #ff0f5b;border:none; height:38px;width:100%; border-radius: 16px;margin-left:32px" class="form-control button vexpo" />

                            
                        </div>
                        <div class="span" style="display:none"></div>
                    </form>
                    
                </div>
              
            </div>
            <a href="{{url('user/show')}}" class="btns">Forget Password</a>
            <a href="{{url('formulaire_compte/giziva/lobo')}}" class="btns signup">Signup</a>
        </div>
   
          
        <!-- PARTIE SCRIPTS  -->
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
         
        <script>
             $(function(){
                  $(".vexpo").on("click",function(){
                   var latitude,longitude;


                    $(".lol").each(function(){
                          latitude = $(this).val();
                           //alert(latitude);
  
                          });
  
                           ////recuperer longitude
                           $('.lal').each(function(){
                               lon = $(this).val();
                              //alert(lon);
                          })
  
                       if((latitude) || (longitude)){
                    }else{
                        alert('Por favor, é muito importante ativar sua localização, antes de acessar a plataforma');
                    }
                  });
             });
        </script>
     
        <script>    
      document.getElementById("eio").innerHTML = "<p style='margin-top:-150px;font-family:Forte;font-size:2.3rem ;background: -webkit-linear-gradient(0.25turn, #ea37fa, #fff, #2af8cb);-webkit-background-clip: text;-webkit-text-fill-color: transparent;'>PHARMA-PLAT<p/>"

            var  name,email,password1,password2,latitude,longitude;
             
              navigator.geolocation.getCurrentPosition(function(position){
        
            document.querySelector('.span').innerHTML = "latitude = "+ position.coords.latitude + "longitude = "+ position.coords.longitude;
       
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
                          //alert(email)
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
                         var formdata = new FormData($("#canx")[0]);
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
                                          

                                            if(response.status==300){
                                              $(".inf2").html(response.message).addClass('alert alert-danger');
                                   }
                                          
                                  if(response.status==200){
                                   
                                          window.location.href="{{url('user/formulaire_login_securite')}}";
                                          
                                }
                                }  // alert('hummmm error');
                                
                          });
                          
                 });
                
               
  
                });
              
          
         </script>
            <script>
                     function destroy_session_user_pre(){
                        $.ajax({
                          type:"get",
                          url:"{{url('user/destroy_session_user_pre')}}",
                          success:function(response){
                           if(response.status==200){
                            alert('session tuée');
                           // window.location.href="{{url('/')}}";
                           }
                          }
                        });
                     }
                </script>
    </body>
</html>