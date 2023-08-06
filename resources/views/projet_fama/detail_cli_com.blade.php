
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
            border-radius : 48px;
        }

       body{
        background-color:#000;
        }   
</style>
</head>
<body>
@if(! session('info_user'))
                 <script>  
                    window.location.href="{{url('formulaire_login/vegazi/nino')}}";
                </script>
             @endif
   <div class="viviox"></div>
<div class="blur"></div>

		<div class="container">
            <div class="content">
                <div class="row">
                   <div class="card" style="background-color:rgba(3, 20, 26, 0.885)">
                    <div class="card-header"><p>Order Holder:</p><marquee><h2 style="color:rgba(55, 140, 238, 0.885);font-family:Matura MT Script Capitals">{{session('info_user')[0]->firstname.' '.session('info_user')[0]->name}}</h2></marquee></div>
                    <div class="card-body col-8">
                        
                        <div class="form-group">
                            @foreach($comm as $item)
                            <p><img src="{{asset('medico/'.$item->medico->photo)}}" width="250px" height="150px"></p>
                        <p>PRODUCT:  {{$item->medico->nom_pro}}</p>
                        @if($item->desconte > 0)
                          @if($item->aller_retirer == 1)
                        <p> PRICE + FREIGHT:  ${{$item->prix_frete}}</p>
                          @elseif($item->aller_retirer == 0)
                           <p> PRICE:  ${{$item->medico->prix - ($item->medico->prix * $item->medico->desconte/100)}}</p>
                        @endif
                        @endif

                          @if($item->desconte == 0)
                          @if($item->aller_retirer == 1)
                        <p> PRICE + FREIGHT:  ${{$item->prix_frete}}</p>
                          @elseif($item->aller_retirer == 0)
                           <p> PRICE:  ${{$item->medico->prix - ($item->medico->prix * $item->medico->desconte/100)}}</p>
                        @endif
                        @endif

                        <p>QUANTITY: {{$item->qt_list}}</p>
                        
                        @if($item->statut == 4)
                        <p style="color:red;font-family:aharoni">returned</p>
                            @else
                          @if($item->statut == 1)
                          <p style="color:yellow;font-family:aharoni">STATUS: paid. . .</p>
                             @elseif($item->statut == 2)
                                    <p style="color:green;font-family:aharoni">STATUS:out for delivery. . .  </p>
                                    
                                      @else
                                            @if($item->statut == 0)
                                            <p style="color:red;font-family:aharoni">STATUS: awaiting payment. . .</p>
                                                @else
                                                <p style="color:blue;font-family:aharoni">STATUS: Product delivered. . .</p>

                                  @endif                                    
                          @endif
                          @endif
                        @endforeach
                        <p><h2 style="font-family:Matura MT Script Capitals;color:#ff0f5b">TOTAL:</div><strong style="font-size:2rem"> ${{number_format($det_cli_com->total_list, 2,".","")}}</strong></h2></p>

@if($xut->verifier_statut_entrega == 1)
         @if($id_address_dif->receiv_user_com == NULL)
           <div class="card" style=" box-shadow: 0 25px 25px rgba(248, 248, 252, 0.885);text-align:center;font-family:Times New Roman;margin-top:-5px;border-radius : 25px;background-color:rgba(3, 20, 26, 0.885);color:rgb(20, 183, 233)" width="550px">
                 <p>ORDER ADDRESS:<br> {{$det_cli_com->commande->country.', '.$det_cli_com->commande->state.', '.$det_cli_com->commande->city}}<br>{{$det_cli_com->commande->street.' '.$det_cli_com->commande->n_apto.', '.$det_cli_com->commande->zipcode}}<br> <a style="font-size:1.5rem;color:rgb(215, 228, 227)" href="{{url('ma_commande/oljsg/'.$det_cli_com->id_pharmacie)}}">Return¬</a></p>
    
           </div>
             @else
             <div class="card" style=" box-shadow: 0 25px 25px rgba(248, 248, 252, 0.885);text-align:center;font-family:Times New Roman;margin-top:-5px;border-radius : 25px;background-color:rgba(3, 20, 26, 0.885);color:rgb(20, 183, 233)" width="550px">
                 <p>ORDER ADDRESS:<br> <h2 style="color:#fff">Receiver Name:{{$id_address_dif->receiv_user_com}}</h2><br>
                   <h3>CPF:{{$id_address_dif->receiv_cpf}}</h3>
                 <br>{{$id_address_dif->receiv_country.', '.$id_address_dif->receiv_state.', '.$id_address_dif->receiv_city}}<br>{{$id_address_dif->receiv_street.' '.$id_address_dif->receiv_npt.', '.$id_address_dif->receiv_zipcode}}<br> <a style="font-size:1.5rem;color:rgb(215, 228, 227)" href="{{url('ma_commande/oljsg/'.$det_cli_com->id_pharmacie)}}">Return¬</a></p>
    
           </div>
         @endif
    @elseif($xut->verifier_statut_entrega == 0)
    <div class="card" style=" box-shadow: 0 25px 25px rgba(248, 248, 252, 0.885);text-align:center;font-family:Times New Roman;margin-top:-5px;border-radius : 25px;background-color:rgba(3, 20, 26, 0.885);color:rgb(20, 183, 233)" width="550px">
                 <p>ORDER ADDRESS:<br> From the information that is registered, it seems that he decided to go to the Pharmacy to pick up his order.<br> <a style="font-size:1.5rem;color:rgb(215, 228, 227)" href="{{url('ma_commande/oljsg/'.$det_cli_com->id_pharmacie)}}">Return¬</a></p>
    
           </div>
        
 @endif

                    </div>
                      
                   </div>
                </div>
            </div>
        </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.1.js"></script> 

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
 integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
 integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
    function add_user(){
       var formdata = new FormData($("#uzav")[0]);
       $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
       $.ajax({
         type:"post",
         url:"{{url('add_user')}}",
         data:formdata,
         processData:false,
         contentType:false,
         success:function(response){
            console.log(response);
            if(response.status==400){
             $(".notif4").html(response.message).addClass('alert alert-danger');
            }else
              if(response.status==300){
                $(".notif4").html(response.message).addClass('alert alert-danger');

              }else{
                  window.location.href="{{url('/')}}";
              }
         }
       });
    }
 </script>

</body>
</html>