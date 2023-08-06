
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Free download Transparent login form using html and css</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
   integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    .card{
        margin-top:110px;
     
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

                       /*chat*/

 .chatBox{
    position:relative;
    width:70%;
    height:calc(100% - 120px);
    padding:15px;
    overflow-y:auto;
    
 }

 .msg{
    position:relative;
    display: flex;
    width:100%;
    height:50%;
    margin: 5px 0;
 }

 .msg p{
   position:relative;
   right:0;
   text-align : right;
   max-width:65%;
   padding:12%;
   background:#fff;
   border-radius:10px;
   font-size:0.9em;
 }

 p::before{
    
    content:'';
    position:absolute;
    top:0;
    right:-12px;
    width:20px;
    height:20px;
    background:linear-gradient(135deg, #dcf8c6 0%, #dcf8c6 50%,transparent 50%,transparent);
 }

 p span{
    display:block;
    margin-top:5px;
    font-size:0.85em;
    opacity:0.5;
 }


 .msg_phar{
    justify-content:flex-end;
 }

 .msg_adm{
    justify-content:flex-start;
 }

 .msg_adm p{
   background:#fff;
   text-align:left;
 }

 .msg_adm p::before{
    content:'';
    position:absolute;
    top:0;
    left:-12px;
    width: 20px;
    height:20px;
    background:linear-gradient(225deg, #dcf8c6 0%, #dcf8c6 50%,transparent 50%,transparent);

 }


.chatBox_input{
    position:relative;
    width:100%;
    height:60px;
    background:#f0f0f0;
    padding:15px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-top:245px;
}

.chatBox_input i{
 cursor:pointer;
 font-size:1.8em;
 color:#5158c;
} 

.chatBox_input textarea{
    position:relative;
    width:90%;
    margin: 0 20px;
    padding: 10px 20px;
    border:none;
    outline:none;
    border-radius:30px;
    font-size:1em;
}

.chatBox_input input{
    position:relative;
    width:90%;
    margin: 0 20px;
    padding: 10px 20px;
    border:none;
    outline:none;
    border-radius:30px;
    font-size:1em;
}

.egoz{
    left:20%;
}

.msg_pharo{
    
   border-radius:7px;
   height:310px;
  
}

.msg_admo{
    
    border-radius:7px;
    height:310px;
 }

 .choto{
    font-family:cambria;
 }
</style>
</head>
<body style="background-image: url('{{asset('images/jipo3.jpg')}}');background-repeat:no-repeat;background-attachment:fixed;background-size:cover">
   
@if(! session('info_boutique'))
                 <script>  
                    window.location.href="{{url('formulaire1_login_pharmacie/ekodide/lazaro')}}";
                </script>
             @endif
<div class="blur"></div>
     @php
            $h_1 = 0;
           $h_acto = 0;
           $dato = 0;
           $soma = 0;
     @endphp
		<div class="container py-5">
        <div>
                    <h1 style="text-align:center;background: -webkit-linear-gradient(0.25turn, #ea37fa, #fff, #2af8cb);font-family:cambria;border-radius:5px;margin-top:-7px" class="choto">Contact Administrator</h1>
       </div>
       <div class="kiko"></div>
       <form id="digo" action="https://formspree.io/f/xgebzvnn" method="POST">

        
                <input type="email" class="form-control email_phar" name="email_phar" value="{{session('info_boutique')[0]->email}}" readonly="">
                <input type="hidden" class="form-control name_phar" name="name_phar" value="{{session('info_boutique')[0]->name_pharma}}" readonly="">
                  
                @if(isset($all_recl_ph))
      @foreach($all_recl_ph as $item)
        @php
      $h_1 = date('0000-00-00 1:0:0');
      $h_acto =  $item->created_at;
      $soma = strtotime($h_1) + strtotime($h_acto);
      $dato = date("H:i:s",$soma);
     $created_at = Date("d-m-Y",strtotime($h_acto));


     
          @endphp

          @if(($item->id_pharmacie == session('info_boutique')[0]->id) && (($item->statut == 1) || ($item->statut == 3)))

          <div class="chatBox egoz">
            <div class="msg msg_phar">
            <p style="background-color:#033325;border-radius:10px; box-shadow: 0 20px 10px rgba(240, 243, 150, 0.88)">{{$item->message}}. <br><span style="color:#09f4b1">{{$created_at}} {{$dato}}</span></p>
            </div>
            @if($item->photo)
          <img src="{{asset('contacto/'.$item->photo)}}" alt="" height="82px"  class="msg msg_pharo">

          @endif
        </div>
       
       

        @elseif(($item->id_pharmacie == session('info_boutique')[0]->id) && ($item->statut == 0))
        

        <div class="chatBox">
            <div class="msg msg_adm egaz">
            <p style="background-color:#080c1c;border-radius:10px;  box-shadow: 0 20px 10px rgba(195, 270, 245, 0.88);">{{$item->message}}. <br><span style="color:#0c85aa">{{$created_at}} {{$dato}}</span></p>
            </div>
            @if($item->photo)
            <img src="{{asset('contacto/'.$item->photo)}}" alt="" height="82px" class="msg msg_admo">

          @endif
        </div>
         

        @endif


        @endforeach
         @endif


         
                       <input type="hidden" class="form-control id_pharmacie" name="id_pharmacie" value="{{session('info_boutique')[0]->id}}">
         
      <div class="chatBox_input">
      <input type="text" class="form-control objet" name="objet" placeholder="type a subject">
      <i class="fa-solid fa-paperclip"></i> 
      <input type="file" name="photo" class="photo">
      <textarea class="form-control message"  name="message" cols="30" row="10" style="font-size:0.5rem" placeholder="type a message"></textarea><button type="submit" class="btn btn-info" id="tout" s>Send♠</button>
      </div>

      



      </form>

</div>
</body>
<script src="http://code.jquery.com/jquery-1.11.1.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
 integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
 integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"crossorigin="anonymous"></script>
 <script>
     
         $(".email_phar").hide();
          $(document).on('click','#tout',function(){
              
         
          var name_phar = $(".name_pharma").val();
          var email = $(".email").val();
          var objet = $(".objet").val();
          var message = $(".message").val();
          var id_pharmacie = $(".id_pharmacie").val();
          var photo = $(".photo").val();
          
          var formdata = new FormData($("#digo")[0]);
       $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
           $.ajax({
               type:"post",
               url:"{{url('admin/reclamation')}}",
              data:formdata,
              processData:false,
              contentType:false,
               success:function(response){
                console.log(response);
                if(response.status == 200){
                    
                    $(".kiko").html(response.message).addClass("alert alert-info");
                  window.location.href="{{url('admin/create_reclam')}}/"+ $(".id_pharmacie").val();
                }
               }
           });
    
             
          });
  </script>

</body>
</html>
