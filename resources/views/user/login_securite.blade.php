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
                   <div id="exiao"></div>
                   <h2 class="antonia" style="font-family:Forte;font-size:1.2rem">Please,Inform Security Code sent to your Email!</h2>
                    <form method="POST" id="jiux">
                        <div class="inf2" style="margin-left:35px"></div>
                        <div class="inputBox">
                            <input type="text" name="code_securite" placeholder="put the security code" class="code_securite">
                        </div>
                        <div class="inputBox">
                            <input type="hidden" name="id"  class="id" value="{{session('info_user_auth')[0]->id}}">
                        </div>
                      
                        <div class="form-control" style="width:50%;margin-left:-40px">

            <input type="button" value="Login ♣" id="bamx" style="background-color: #ff0f5b;border:none; height:38px;width:100%; border-radius: 16px;margin-left:32px" class="form-control button vexpo" />

                            
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
           
document.getElementById("exiao").innerHTML = "<p style='margin-top:-150px;font-family:Forte;font-size:2.3rem ;background: -webkit-linear-gradient(0.25turn, #ea37fa, #fff, #2af8cb);-webkit-background-clip: text;-webkit-text-fill-color: transparent;'>PHARMA-PLAT<p/>"

             $(function(){
                    $("#bamx").on("click",function(){
                        var code_securite = $(".code_securite").val();
                        var id = $(".id").val();

                        $.ajax({
                            type : "get",
                            url : "{{url('user/add_security')}}",
                            data: {
                                code_securite : code_securite,
                                id : id,
                            },
                            success:function(response){
                                if(response.status==200){
                                    destroy_session_user_pre();
                                    window.location.href="{{url('/')}}";
                                }else{
                                    alert('Codigo negada, por favor digite o codigo de segurança coreto que enviamos no seu Email.');
                                }
                            } 
                        })
                    })
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