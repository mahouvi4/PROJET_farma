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
        margin-left:15px;
        margin-top:-98px;
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
  <div class="card-header">UPDATE DRUG</div>
  <div class="card-body">
 
    <div class="info3"></div>
    <br><br>
    <form method="POST" id="pharmo_product_all">
        <div class="row">
            <div class="col-6">
               <div class="row">
                   <div class="group-control">
                       <h5>Reference:</h5><input type="text" class="form-control coul" name="Reference" value="{{$edit_all_medic->Reference}}">
                     </div>
               </div>
        
        
               <div class="row">
               <div class="col-12">
                   
                       <div class="group-control">
                           <h5>Product name:</h5><input type="text" class="form-control coul" name="nom_pro" value="{{$edit_all_medic->nom_pro}}">
                         </div>
                   </div>
               </div>
           </div> 
           
   
           <!-- xxxxxxxx -->
            <div class="col-6">
               <div class="group-control">
                   <h5>Price:</h5><input type="text" class="form-control coul" name="prix" value="{{$edit_all_medic->prix}}">
                 </div>
                  <div class="row">
                    
                     <div class="col-6"><h5>Discount:</h5><input type="number" class="form-control coul" name="desconte" value="{{$edit_all_medic->desconte}}"></div>
                     <div class="col-6"><h5>Discount Price:</h5><input type="number" class="form-control coul" name="prix_desconte" value="{{$edit_all_medic->prix_desconte}}"></div>

                  
                </div>
            </div>


              <div class="col-12">
                    <div class="group-control">
                        <h5>weight:</h5><input type="number"  name="kilo" class="form-control coul" value="{{$edit_all_medic->kilo}}">
                            
                    </div>
   
                </div> 
           

            
                <div class="col-6">
                    <div class="group-control">
                        <h5>Description:<textarea name="desciption" class="form-control coul" height="80px">{{$edit_all_medic->desciption}}</textarea>
                      </div>
                       <div class="row">
                          <div class="col-12"><h5>Stock</h5><input type="number" class="form-control coul" name="stock" value="{{$edit_all_medic->stock}}"></div>
                       </div>
                      
                 </div>

                
                    <div class="col-6">
                       <h5>Date of Manufacture:</h5><div class="col-12"><input type="date" class="form-control coul" name="date_fabriq" value="{{$edit_all_medic->date_fabriq}}"></div>
                       <h5>Expiration Date:</h5><div class="col-12"><input type="date" class="form-control coul" name="date_expir"  value="{{$edit_all_medic->date_expir}}"></div>
                       
                    </div>
                    
                   
                    <div class="col-12">
                    <div class="group-control">
                        <h5>Statut:</h5><input type="text"  name="statut" class="form-control coul" value="{{$edit_all_medic->statut}}">
                            
                    </div>
   
                </div> 
                   
                        
                    <div class="col-6">
                         
                        <h5></h5><div class="col-12">
                          
                        <h5>Pharmacy ID:</h5><input type="text" class="form-control coul dovo" name="pharmacie" value="{{$edit_all_medic->id_pharmacie}}" readonly="">
                            <input type="hidden" class="form-control coool" name="id_medic" value="{{$edit_all_medic->id}}">
                           
                        </div>
                        
                     </div>

                    

                     <div class="col-6">
                        <h5>Image:</h5><div class="col-12"><input type="file" class="form-control" name="photo"></div><br>
                           @if($edit_all_medic->photo)
                              <img src="{{asset('medico/'.$edit_all_medic->photo)}}" width="80px"  height="35px" />
                           @endif
                     </div>
                    
                   

                       
              
                 </div>
                 
                    
    </div>


    
    <div class="group-control">
        <button type="button" class="btn btn-primary elox" onclick="upd_medico_all({{$edit_all_medic->id}})">Update</button> <br><br>

    </div>
</form>
  </div> 


    </div> 
   
           
    </div> 

@section('scripts')
                        <script>
                            function upd_medico_all(id){

                            // var ooooo = $(".coool").val();
                            //console.log(ooooo);
                            var formdata = new FormData($("#pharmo_product_all")[0]);
                            $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                            $.ajax({
                            type:"post",
                            url:"{{url('admin/upd_medic_all_admin')}}/"+ $(".coool").val(),
                            data:formdata,
                            processData:false,
                            contentType:false,
                            success:function(response){
                                if(response.status==200){
                                    //alert('okk')
                                    $(".info3").html(response.message).addClass('alert alert-success');
                                    window.location.href="{{url('admin/list_medico')}}";
                                }
                            }
                            });
                            }
                            </script>

@endsection
@endsection




   
