<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF -8">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
        
        <link rel= "https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" type="text/css" href="stylo.css" rel= "stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">

       <style>
           

           
  
       </style>
    </head>
    <body>
        <div class="container">
            <div class="drop">
                <div class="content">
                    <h2>Sign In</h2>
                    <div class="inf2"></div>
                    <form method="POST" id="canx">
                        <div class="inputBox">
                            <input type="email" name="email" placeholder="Email" class="eka">
                        </div>

                        <div class="inputBox">
                            <input type="password" placeholder="Password" class="eki">
                        </div>

                        <div class="inputBox">
                            lat:<input type="text" name="latitude"  class="lol">
                        </div>

                        <div class="inputBox">
                            long:<input type="text"  name="longitude"  class="lal">
                        </div>

                        <div class="inputBox" style="width:60px;margin-left:-40px">
                            <input type="button" value="Login" id="bass">
                        </div>
                        <spam></spam>
                    </form>
                </div>
            </div>
            <a href="#" class="btns">Forget Password</a>
            <a href="#" class="btns signup">Signup</a>
        </div>

        <!-- PARTIE SCRIPTS  -->
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
         integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
     integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
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
                                          
                                          
                                  if(response.status==200){
                                          window.location.href="{{url('/')}}";
                                }
                                }  // alert('hummmm error');
                                
                          });
                          
                 });
                
               
  
                });
              
          
         </script>
  
    </body>
</html>