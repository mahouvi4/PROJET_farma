@extends('base')

@section('css')
<style>
    body{
        background-color:rgb(9, 23, 27);
        color:white;
    }

    .card{
        
        margin-top:50px;
        background-color:rgb(9, 23, 27);
       box-shadow: 0 5px 5px blue, 0 25px 25px rgba(4, 60, 70, 0.885);

    }

    .card-title{
        color:blue;
        text-align:center;
        font-size:3rem;
        font-family:Matura MT Script Capitals;
    }

    .card-header{
        color:rgb(116, 119, 119);
        text-align:center;
        font-size:2rem;
        font-family:Berlin Sans FB;
        box-shadow: 0 5px 5px blue;
    }

    button{
        margin-left:200px;
        width:160px;
    }

    .coul{
        background-color:rgb(185, 212, 253);
    }

</style>
@endsection

@section('content')

<div class="container">
   
       
                 
<div class="card">
    <div class="card-title">xxxx</div> 
  <div class="card-header">PHARMACY LOGIN</div>
  <div class="card-body">
    <div class="info2"></div>
    <br><br>
    <form method="POST" id="login_adm">
        <div class="row">
            <div class="col-6">
               <div class="row">
                   
                        <div class="group-control">
                            <h5>Email:</h5><input type="email" class="form-control coul" name="email_adm">
                          </div>
                

                    <div class="group-control">
                            <h5>Name:</h5><input type="text" class="form-control coul" name="name_adm">
                          </div>
               </div>
        
               
        
               <div class="row">
               <div class="col-12">
                   
                     
                        <div class="group-control">
                            <h5>Password:</h5><input type="password" class="form-control coul" name="password">
                          </div>
                    
                         
                   </div>
               </div>
           </div> 
               
           
                
           <div class="col-6">
            <div class="col-6">
            <h5>Picture:</h5><input type="file" name="photo" class="form-control">
            </div>
        </div>
          
   
           <div class="group-control">
            <button type="button" class="btn btn-primary mt-2" style="width:70px;margin-left:-1px" onclick="create_adm()">Login</button> <br><br>
            
        </div>

        
           
</form>

    

  </div> 


    </div> 
   
           
    </div> 

@section('scripts')
<script>
    function create_adm(){
        var formdata = new FormData($("#login_adm")[0]);
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.ajax({
       type:"post",
       url:"{{url('administrateur/store')}}",
       data:formdata,
       processData:false,
       contentType:false,
       success:function(response){
           if(response.status==100){
            $(".info2").html(response.message).addClass('alert alert-danger');

   
           //console.log(response.url)

           }

          
          if(response.status==200){
          
          $(".info2").html(response.message).addClass('alert alert-danger');

          }

       }
    });
    }
</script>
@endsection
@endsection




   
