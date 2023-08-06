<!DOCTYPE html>
<html>
  
    <head>
        <title>Login</title>
        <meta charset="UTF -8">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

       <style>
           
           @include('stylo');
           
         
       </style>
       
    </head>
    <body style="background-image: url('{{asset('images/bingo.jpg')}}');background-repeat:no-repeat;background-attachment:fixed;background-size:cover">
         
          
        <div class="container">
                   
            <div class="drop">
                
                <div class="content">
                   <div id="eia"></div>
                    <h2 class="antonia" style="font-family:Forte;font-size:2rem">Edit Password!</h2>
                    <form method="POST" id="cinx">
                        <div class="inf2" style="margin-left:35px"></div>
                        <div class="inputBox">
                            <input type="email" name="email" placeholder="Your Email" class="eka">
                        </div>

                        <div class="inputBox">
                            <input type="password" name="password1" placeholder="New Password" class="eki">
                        </div>

                       
                       
                       

                        <div class="form-control" style="width:50%;margin-left:-40px">

            <input type="button" value="Edit Pass ♣" onclick="edit_pass()" style="background-color: #ff0f5b;border:none; height:38px;width:100%; border-radius: 16px;margin-left:32px" class="form-control button" />

                            
                        </div>
                
                    </form>
                    
                </div>
              
            </div>
            <a href="{{url('formulaire_login/vegazi/nino')}}" class="btns">Sign In</a>
            <a href="{{url('formulaire_compte/giziva/lobo')}}" class="btns signup">Signup</a>
        </div>
   
          
        <!-- PARTIE SCRIPTS  -->
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        
    
        <script>
        document.getElementById("eia").innerHTML = "<p style='margin-top:-150px;font-family:Forte;font-size:2.3rem ;background: -webkit-linear-gradient(0.25turn, #ea37fa, #fff, #2af8cb);-webkit-background-clip: text;-webkit-text-fill-color: transparent;'>PHARMA-PLAT<p/>"

              function edit_pass(){
                 //alert('okk')
               var formdata = new FormData($("#cinx")[0]);
                         $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
   
                          $.ajax({
                                type:"post",
                                url:"{{url('user/edit_pass')}}",
                                data:formdata,
                                    processData:false,
                                     contentType:false,
                                success:function(response){
                                  console.log(response);
                                 
                 

                                            if(response.status==300){
                                              $(".inf2").html(response.message).addClass('alert alert-danger');
                                   }
                                          
                                  if(response.status==200){
                                    $(".inf2").html(response.message).addClass('alert alert-info');
                                      window.location.href="{{url('formulaire_login/vegazi/nino')}}";
                                }else if(response.status==100){
                                    $(".inf2").html(response.message).addClass('alert alert-info');
 
                                }
                            }  // alert('hummmm error');
                                
                          });
              }
                    
          
         </script>
  
    </body>
</html>