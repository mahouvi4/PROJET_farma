
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Free download Transparent login form using html and css</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
  crossorigin="anonymous">
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    .card{
        margin-top:110px;
       box-shadow: 0 25px 25px rgba(240, 243, 245, 0.885);
       opacity: 2rem;
       color:rgba(240, 243, 245, 0.885);
       
    }

   
    img{
            border-radius : 75px;
        }

       body{
        background-color:#000;
        }  
        
        .rouge{
            color:red;
        }
</style>
</head>
<body>
@if(! session('info_user'))
                 <script>  
                    window.location.href="{{url('formulaire_login/vegazi/nino')}}";
                </script>
             @endif
<div class="blur"></div>

		<div class="container py-5">
        <div class="group-control">
                    <h1 style="text-align:center">♠Send complaint to Administrator♠</h1>
                   </div>
            <div class="content">
                <div class="kiko"></div>
            <form id="diganx">
                   <div class="control-group mt-4">
                        <label>Email:</label> <input type="email" class="form-control email" name="email" value="{{session('info_user')[0]->email}}" readonly="">
                   </div>

                   <div class="control-group mt-4">
                   <label>Pharmacy Name:</label><input type="type" class="form-control name" name="name" value="{{session('info_user')[0]->name}}" readonly="">
                   </div>

                   <div class="control-group mt-4">
                   <label>Subject:</label> <input type="text" class="form-control objet" name="objet">
                   </div>

                  
                  <div class="control-group mt-4">
                     <label>Message:</label>  <textarea class="form-control message"  name="message" cols="30" row="10"></textarea>
                   </div>
                   
                   <div class="control-group mt-4">
                       <input type="hidden" class="form-control id_pharmacie" name="id_user" value="{{session('info_user')[0]->id}}"> 
                   </div>

                  <div class="group-control">
                         <button type="button" class="btn btn-info" id="reclamx">Send♠</button>
                         <a href="{{url('/')}}" class="btn btn-primary" style="background-color:blue">Return</a>

                        </div>
  
                 
             </form>
            </div>
        </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.1.js"></script> 

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
 integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
 integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <script>
   
          $(document).on('click','#reclamx',function(){
          
             
          var  name = $(".name").val();
          var    email = $(".email").val();
          var    objet = $(".objet").val();
          var     message= $(".message").val();
          var     id_user = $(".id_user").val();
          
     
       $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
           $.ajax({
               type:"post",
               url:"{{url('user/reclama_cliente')}}",
               data:{
                name : $(".name").val(),
                email : $(".email").val(),
                objet : $(".objet").val(),
                message: $(".message").val(),
                id_user : $(".id_user").val(),
               },
            
               success:function(response){
                console.log(response);
                if(response.status == 200){
                    $(".kiko").html(response.message).addClass("alert alert-info");
                   window.location.href="{{url('/')}}";
                }else if(response.status == 100){
                    $(".kiko").html(response.message).addClass("alert alert-danger");
                   window.location.href="{{url('formulaire_login/vegazi/nino')}}";
                }
               }
           });
    
             
          });
  </script>

</body>
</html>
