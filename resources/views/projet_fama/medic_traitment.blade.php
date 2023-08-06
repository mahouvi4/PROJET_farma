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

@if(! session('info_boutique'))
                 <script>  
                    window.location.href="{{url('formulaire1_login_pharmacie/ekodide/lazaro')}}";
                </script>
             @endif
<div class="container">
   
       
                   
<div class="card">
   
    <div class="card-title">xxxx</div> 
  <div class="card-header">MEDICATION REGISTRATION</div>
  <div class="card-body">
 
    <div class="info3"></div>
    <br><br>
    <form method="POST" id="pharmo_productxx">
        <div class="row">
            <div class="col-6">
               <div class="row">
                   <div class="group-control">
                       <h5>Reference:</h5><input type="text" class="form-control coul" name="Reference" value="{{$id_med->Reference}}">
                     </div>
               </div>
        
        
               <div class="row">
               <div class="col-12">
                   
                       <div class="group-control">
                           <h5>Product name:</h5><input type="text" class="form-control coul" name="nom_pro" value="{{$id_med->nom_pro}}">
                         </div>
                   </div>
               </div>
           </div> 
           
   
           <!-- xxxxxxxx -->
            <div class="col-6">
               <div class="group-control">
                   <h5>Price:</h5><input type="number" class="form-control coul" name="prix" value="{{$id_med->prix}}">
                 </div>
                  <div class="row">
                    
                     <div class="col-6"><h5>Discount:</h5><input type="number" class="form-control coul" name="desconte" value="{{$id_med->desconte}}"></div>
                     <div class="col-6"><h5>Discount Price:</h5><input type="number" class="form-control coul" name="prix_desconte" value="{{$id_med->prix_desconte}}"></div>

                  
                </div>
            </div>


              <div class="col-12">
                    <div class="group-control">
                        <h5>weight:</h5><input type="number"  name="kilo" class="form-control coul" value="{{$id_med->kilo}}">
                            
                    </div>
   
                </div> 
           

            
                <div class="col-6">
                    <div class="group-control">
                        <h5>Description:<textarea name="desciption" class="form-control coul" height="80px">{{$id_med->desciption}}</textarea>
                      </div>
                       <div class="row">
                          <div class="col-12"><h5>Stock</h5><input type="number" class="form-control coul" name="stock" value="{{$id_med->stock}}"></div>
                       </div>
                      
                 </div>

                
                    <div class="col-6">
                       <h5>Date of Manufacture:</h5><div class="col-12"><input type="date" class="form-control coul" name="date_fabriq" value="{{$id_med->date_fabriq}}"></div>
                       <h5>Expiration Date:</h5><div class="col-12"><input type="date" class="form-control coul" name="date_expir"  value="{{$id_med->date_expir}}"></div>
                       
                    </div>
                    
                   
                    <div class="col-12">
                    <div class="group-control">
                        <h5></h5><input type="hidden"  name="statut" class="form-control coul" value="{{$id_med->statut}}" readonly="">
                            
                    </div>
   
                </div> 
                   
                        
                    <div class="col-6">
                         
                        <h5></h5><div class="col-12">
                          
                        <h5></h5><input type="hidden" class="form-control coul dovo" name="pharmacie" value="{{session('info_boutique')[0]->id}}" readonly="">
                            <input type="hidden" class="form-control coool" name="id_medic" value="{{$id_med->id}}">
                           
                        </div>
                        
                     </div>

                    

                     <div class="col-6">
                        <h5>Image:</h5><div class="col-12"><input type="file" class="form-control" name="photo"></div><br>
                           @if($id_med->photo)
                              <img src="{{asset('medico/'.$id_med->photo)}}" width="80px"  height="35px" />
                           @endif
                     </div>
                    
                   

                       
              
                 </div>
                 
                    
    </div>


    
    <div class="group-control">
        <button type="button" class="btn btn-primary elox" onclick="upd_medico_adm({{$id_med->id}})">Update</button> <br><br>

    </div>
</form>
  </div> 


    </div> 
   
           
    </div> 

@section('scripts')
@endsection
@endsection




   
