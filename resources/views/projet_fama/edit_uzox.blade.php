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
    <div class="card-title">xxxx</div> 
  <div class="card-header">CUSTUMER UPDATE</div>
  <div class="card-body">
    <div class="info2"></div>
    <br><br>
   >
    <form method="POST"  id="upo_diax">
        <div class="row">
            <div class="col-6">
               <div class="row">
                   <div class="group-control">
                       <h5>FirstName:</h5><input type="text" class="form-control coul" name="firstname" value="{{$edit_uzox->firstname}}">
                     </div>
               </div>
        
        
               <div class="row">
               <div class="col-12">
                   
                       <div class="group-control">
                           <h5>Name:</h5><input type="text" class="form-control coul" name="name" value="{{$edit_uzox->name}}">
                         </div>
                   </div>
               </div>
           </div> 
           
   
           <!-- xxxxxxxx -->
            <div class="col-6">
               <div class="group-control">
                   <h5>Email:</h5><input type="email" class="form-control coul" name="email" value="{{$edit_uzox->email}}">
                 </div>
                  <div class="row">
                    
                     <div class="col-6"><h5>Password:</h5><input type="password" class="form-control coul" name="password" value="{{$edit_uzox->password}}"></div>
                     <div class="col-6"><h5>CPF:</h5><input type="number" class="form-control coul" name="cpf" value="{{$edit_uzox->cpf}}"></div>

                  
                </div>
            </div>


      
            
                <div class="col-12">
                    <div class="group-control">
                        <h5>Birth Day:</h5><input type="date"  name="nacimento" class="form-control coul" value="{{$edit_uzox->nacimento}}">
                            
                    </div>
   
                </div> 
           

            
                <div class="col-6">
                    <div class="group-control">
                        <h5>DDD:<input type="number" name="ddd" class="form-control coul" value="{{$edit_uzox->ddd}}">
                        <h5>Tel:<input type="number" name="tel" class="form-control coul" value="{{$edit_uzox->tel}}">
                      </div>
                       <div class="row">
                          <div class="col-12"><h5>Country</h5><input type="text" class="form-control coul" name="country" value="{{$edit_uzox->country}}"></div>
                          <h5>District:</h5><div class="col-12"><input type="text" class="form-control coul" name="district" value="{{$edit_uzox->district}}"></div>
                          <h5>N_Apt:</h5><div class="col-12"><input type="number" class="form-control coul" name="n_apt" value="{{$edit_uzox->n_apt}}"></div>

                                <div class="group-control">
                                <br> <button type="button" class="btn btn-primary" style="margin-left:-5px"  onclick="up_cli_admin({{$edit_uzox->id}})">Update♠</button> <br><br>
                                </div>
                       </div>

                      
                 </div>

                
                    <div class="col-6">
                       <h5>State:</h5><div class="col-12"><input type="text" class="form-control coul" name="state" value="{{$edit_uzox->state}}"></div>
                       <h5>City:</h5><div class="col-12"><input type="text" class="form-control coul" name="city"  value="{{$edit_uzox->city}}"></div>
                       <h5>Street:</h5><div class="col-12"><input type="text" class="form-control coul" name="street" value="{{$edit_uzox->street}}"></div>
                       <h5>CodZip:</h5><div class="col-12"><input type="number" class="form-control coul" name="codzip" value="{{$edit_uzox->codzip}}"></div>
                       <h5>Status:</h5><div class="col-12"><input type="text" class="form-control coul" name="statut" value="{{$edit_uzox->statut}}"></div>

                       <h5>Image:</h5><div class="col-12"><input type="file" class="form-control" name="photo" value="{{$edit_uzox->photo}}"></div><br>

                       @if($edit_uzox->photo)
                        <img src="{{asset('user/'.$edit_uzox->photo)}}" alt="" height="82px" width="88px" style="border-radius:72px" value="{{$edit_uzox->photo}}">

                       @endif
                    </div>
                    
                   
            
                   
                        
                   

                    

                 
                    
                   

                       
              
                 </div>
                 
                    
    </div>


    
              
            

    </form>

    

  </div> 


    </div> 
   
           
    </div> 

@section('scripts')
<script>
    function up_cli_admin(id){
        var formdata = new FormData($("#upo_diax")[0]);
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.ajax({
       type:"post",
       url:"{{url('admin/update_custumer')}}/"+id,
       data:formdata,
       processData:false,
       contentType:false,
       success:function(response){
           if(response.status==200){
            window.location.href="{{url('admin/list_all_custumer_admin')}}";
           //console.log(response.url)

           }else{
            $(".info2").html("Sorry, it seems that you forgot to fill in a field otherwise, be sure to inform your correct data !! 😏").addClass('alert alert-danger');
           }
       }
    });
    }
</script>
@endsection
@endsection




   
