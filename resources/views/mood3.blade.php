
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
@if(! session('info_boutique'))
                 <script>  
                    window.location.href="{{url('formulaire1_login_pharmacie/ekodide/lazaro')}}";
                </script>
             @endif
<div class="blur"></div>

		<div class="container">
             
            <div class="content">
                <div class="kiko"></div>
            <form id="flaviox">
                 <input type="hidden" value="{{$up->id}}" name="id_commande">
                  <!--<h1><input type="radio" class="form-group rouge"  name="statut" value="0" {{$up->statut=="0" ? 'checked' : ''}}/>Awaiting payment</h1><br>-->
                  <h1><input type="radio"  class="form-group orange" name="statut" value="1" {{$up->statut=="1" ? 'checked' : ''}}/>Paid </h1><br>
                  <h1> <input type="radio"  class="form-group bleu" name="statut" value="2" {{$up->statut=="2" ? 'checked' : ''}}/>Out for delivery </h1><br>
                  <h1> <input type="radio"  class="form-group vert" name="statut" value="3" {{$up->statut=="3" ? 'checked' : ''}}/>product Delivered </h1><br>

                  <div class="group-control">
                         <button type="button" class="btn btn-info" onclick="upxx({{$up->id}})">Update♠</button>
                  </div>
  
             </form>
            </div>
        </div>
</div>
<script src="https://code.jquery.com/jquery-1.11.1.js"></script> 

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
 integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
 integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <script>
     function upxx(id){
           var formdata = new FormData($("#flaviox")[0]);
     
       $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
           $.ajax({
               type:"post",
               url:"{{url('admin/upd_stat_com')}}/"+id,
               data:formdata,
               processData:false,
               contentType:false,
               success:function(response){
                if(response.status == 200){
                    $(".kiko").html(response.message).addClass("alert alert-info");
                   window.location.href="{{url('admin/list_com_cli_bout_adm')}}/"+id;
                }
               }
           });
     }
  </script>

</body>
</html>
