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
@if(! session('info_adm'))
                 <script>  
                    window.location.href="{{url('administrateur/create_login_admin')}}";
                </script>
             @endif
<div class="container">
   
       
                 
<div class="card">
    <div class="card-title"><marquee>SALARY</marquee></div> 
  <div class="card-header">ADMIN PHARMACY LOGIN</div>
  <div class="card-body">
    <div class="info2"></div>
    <br><br>
    <form method="POST" id="login_pharmo12">
        <div class="row">
            <div class="col-6">
               <div class="row">
                    
                        <div class="group-control">
                            <h5>Email:</h5><input type="email" class="form-control coul" name="email"  value="{{$log2->email}}">
                          </div>
                    
               </div>
        
               
        
               <div class="row">
               <div class="col-12">
                   
                        <div class="group-control">
                            <h5>Password:</h5><input type="password" class="form-control coul" name="password" value="{{$log2->password}}">
                          </div>
                       
                         
                   </div>
               </div>
           </div> 
               
           
                
           <div class="col-6">
            <div class="col-6">
                    @if($log2->photo)
                    <img src="{{asset('pharmacie/'.$log2->photo)}}" width="470px" height="120px" style="margin-top:20px;border-radius:15px">
                    

                    @endif
            </div>
        </div>
          
   
           <div class="group-control">
            <button type="button" class="btn btn-primary mt-2" style="width:70px;margin-left:-1px" onclick="login1_control3_phar({{$log2->id}})">Login</button> <br><br>
               <input type="hidden"  class="volx" value="{{$log2->id}}"> 
        </div>

        
           
</form>

    

  </div> 


    </div> 
   
           
    </div> 

@section('scripts')
<script>
                function login1_control3_phar(id){
                    
                    alert('Are you sure that you are Admin?');
                    var formdata = new FormData($("#login_pharmo12")[0]);
                   
                    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                    $.ajax({
                   type:"post",
                   url:"{{url('admin/formulaire1_login3_ph')}}/"+id,
                   data:formdata,
                   processData:false,
                   contentType:false,
                   success:function(response){
                       if(response.status==200){
                        window.location.href="{{url('admin/opition_pharma_salaire')}}/"+ $(".volx").val();

                   
                       }else{
                        $(".info2").html("Sorry, it seems that you forgot to fill in a field otherwise, be sure to inform your correct data !!😏").addClass('alert alert-danger');
                       }
                   }
                });
                }
        </script>
@endsection
@endsection




   
