
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
   
<div class="blur"></div>

		<div class="container py-5">
        <div class="group-control">
                    <h1 style="text-align:center">Contact Administrator♣</h1>
                   </div>
            <div class="content">
                <div class="kiko"></div>
            <form id="dogo"  action="{{route('add_emil/admn')}}" method="POST">
                   <div class="control-group mt-4">
                        <label>Email:</label> <input type="email" class="form-control email_phar" name="email">
                   </div>

                   <div class="control-group mt-4">
                   <label>Pharmacy Name:</label><input type="type" class="form-control name_phar" name="name" >
                   </div>

                   <div class="control-group mt-4">
                   <label>Subject:</label> <input type="text" class="form-control objet" name="subject">
                   </div>

                  
                  <div class="control-group mt-4">
                     <label>Message:</label>  <textarea class="form-control message"  name="body" cols="30" row="10"></textarea>
                   </div>
                   
            

                  <div class="group-control">
                         <button class="btn btn-info" id="tout">Send♠</button>
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
   
          $(document).on('click','#tout',function(){
          
             
          var name_phar = $(".name_pharma").val();
          var email = $(".email").val();
          var objet = $(".objet").val();
          var message = $(".message").val();
          var id_pharmacie = $(".id_pharmacie").val();
          
     
       $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
           $.ajax({
               type:"post",
               url:"{{url('admin/reclamation')}}",
               data:{
                name_phar : $(".name_phar").val(),
                email_phar : $(".email_phar").val(),
                objet : $(".objet").val(),
                message: $(".message").val(),
                id_pharmacie : $(".id_pharmacie").val(),
               },
            
               success:function(response){
                console.log(response);
                if(response.status == 200){
                    $(".kiko").html(response.message).addClass("alert alert-info");
                   window.location.href="{{url('admin/option_pharma')}}/"+ $(".id_pharmacie").val();
                }
               }
           });
    
             
          });
  </script>

</body>
</html>
