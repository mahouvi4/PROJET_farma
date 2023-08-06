
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
   
@if(! session('info_adm'))
                 <script>  
                    window.location.href="{{url('administrateur/create_login_admin')}}";
                </script>
             @endif
<div class="blur"></div>

		<div class="container">
             
            <div class="content">
                <div class="kiko"></div>
            <form id="fluixax">
            
                <input type="hidden" value="{{$list_com->pharmacie->email}}" name="email" class="email">
                 <input type="hidden" value="{{$list_com->id}}" name="id_list" class="id_list">
                 <input type="hidden" value="{{$list_com->id_commande}}" name="id_commande" class="id_commande">
                 <h1><input type="radio"  class="form-group orange" name="statut" value="0" {{$list_com->statut=="0" ? 'checked' : ''}}/>unpaid </h1><br>
                 <h1><input type="radio"  class="form-group orange" name="statut" value="1" {{$list_com->statut=="1" ? 'checked' : ''}}/>paid </h1><br>
                  <h1> <input type="radio"  class="form-group bleu" name="statut" value="2" {{$list_com->statut=="2" ? 'checked' : ''}}/>out for delivery </h1><br>
                  <h1> <input type="radio"  class="form-group vert" name="statut" value="3" {{$list_com->statut=="3" ? 'checked' : ''}}/>product Delivered </h1><br>
                  <h1> <input type="radio"  class="form-group vert" name="statut" value="4" {{$list_com->statut=="4" ? 'checked' : ''}}/>devolution </h1><br>
                        

                   Devolution Tax: <select id="devolux" name="devolux"  class="form-group devixo">
                           <option value="0.00">0.00%</option>        
                           <option value="0.05">0.05%</option>
                           <option value="0.10">0.10%</option>
                           <option value="0.15">0.15%</option>
                           <option value="0.20">0.20%</option>
                           <option value="0.25">0.25%</option>
                           <option value="0.30">0.30%</option>
                           <option value="0.35">0.35%</option>        
                           <option value="0.40">0.40%</option>
                           <option value="0.45">0.45%</option>
                           <option value="0.50">0.50%</option>
                           <option value="0.55">0.55%</option>
                           <option value="0.60">0.60%</option>
                           <option value="0.65">0.65%</option>
                           <option value="0.70">0.70%</option>
                           <option value="0.75">0.75%</option>
                           <option value="0.80">0.80%</option>        
                           <option value="0.85">0.85%</option>
                           <option value="0.90">0.90%</option>
                           <option value="0.95">0.95%</option>
                           <option value="1">100%</option>
                          

                    </select>








                  <div class="group-control">
                         <button type="button" class="btn btn-info" onclick="olxx({{$list_com->id}})">Update♠</button>
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
     function olxx(id){
           /* var id_list = $(".id_list").val();
            //alert(id_list);

            var id_commande = $(".id_commande").val();
            //alert(id_commande);

            $(".form-group").change(function(){
            var statut = $(this).val();
           alert(statut);
            })*/
     
    var formdata = new FormData($("#fluixax")[0]);
     
     $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
      
           $.ajax({
               type:"post",
               url:"{{url('admin/devolution')}}/"+ $(".id_list").val(),
               data : formdata,
               processData : false,
               contentType: false,
            
               success:function(response){
                if(response.status == 200){
                    $(".kiko").html(response.message).addClass("alert alert-info");
                   window.location.href="{{url('admin/list_all_order')}}";
                }
               }
           });
     }
  </script>

</body>
</html>
