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
  <div class="card-header">PHARMACY REGISTRATION</div>
 
  <div class="card-body">
    <div class="info1"></div>
    <br><br>
    <form method="POST" id="pharmf">
        <div class="row">
            <div class="col-6">
               <div class="row">
                   <div class="group-control">
                       <h5>Email:</h5><input type="email" class="form-control coul" name="email" value="{{$edit_phramax->email}}">
                    
                     </div>
               </div>
        
        
               <div class="row">
               <div class="col-12">
                   
                       <div class="group-control">
                           <h5>Password:</h5><input type="password" class="form-control coul" name="password" value="{{$edit_phramax->password}}">
                         
                         </div>
                   </div>
               </div>
           </div> 
           
   
           <!-- xxxxxxxx -->
            <div class="col-6">
               <div class="group-control">
                   <h5>Pharmacy name:</h5><input type="text" class="form-control coul" name="name_pharma" value="{{$edit_phramax->name_pharma}}">
                 </div>
                  <div class="row">
                    
                     <div class="col-6"><h5>Opening day:</h5><select id="open_day" name="open_day" class="form-control coul">
                         <option>Monday</option>
                        <option>Tuesday</option>
                        <option>Wednesday</option>
                        <option>Thursday</option>
                        <option>Friday</option>
                        <option>Saturday</option>
                        <option>Sunday</option>
                    </select></div>
                     <div class="col-6"><h5>Closing day:</h5><select id="close_day" name="close_day" class="form-control coul" value="{{$edit_phramax->close_day}}">
                    
                        <option>Monday</option>
                        <option>Tuesday</option>
                        <option>Wednesday</option>
                        <option>Thursday</option>
                        <option>Friday</option>
                        <option>Saturday</option>
                        <option>Sunday</option>
                    </select></div>
                  
                </div>
            </div>


      
            
                <div class="col-12">
                    <div class="group-control">
                        <h5>Holiday:</h5><select id="holiday" name="holiday" class="form-control coul" value="{{$edit_phramax->holiday}}">
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                            <option>Sunday</option>
                        </select>
                    </div>
   
                </div> 
           

            
                <div class="col-6">
                    <div class="group-control">
                        <h5>Address Pharmacy:<textarea name="address" class="form-control coul" height="80px">{{$edit_phramax->address}}</textarea>
                          @error('address')
                          <small class="text-danger">{{$message}}</small>
                          @enderror
                          
                      </div>
                       <div class="row">
                          <div class="col-6"><h5>Opening Time:</h5><input type="time" class="form-control coul" name="on_time" value="{{$edit_phramax->on_time}}"></div>
                          <div class="col-6"><h5>Closing Time:</h5><input type="time" class="form-control coul" name="close_time" value="{{$edit_phramax->close_time}}"></div>
                       </div>
                      
                 </div>

                
                    <div class="col-6">
                       <h5>Longitude:</h5><div class="col-12"><input type="text" class="form-control coul" name="longitude" value="{{$edit_phramax->longitude}}"></div>
                       <h5>Latitude:</h5><div class="col-12"><input type="text" class="form-control coul" name="latitude" value="{{$edit_phramax->latitude}}"></div>
                       
                    </div>
                    
                   
                 
                    <div class="col-6">
                        <h5>Status:</h5><div class="col-12"><input type="text" class="form-control coul" name="statut" value="{{$edit_phramax->statut}}"></div>
                        
                     </div>
                   
                        
                    <div class="col-6">
                        <h5>Map:</h5><div class="col-12"><textarea type="text" class="form-control coul" name="rastrear">{{$edit_phramax->rastrear}}</textarea></div>
                        
                     </div>

                          
                    <div class="col-6">
                        <h5>Tel:</h5><div class="col-12"><input type="text" class="form-control coul" name="tel" value="{{$edit_phramax->tel}}"></div>
                        
                     </div>

                     <div class="col-6">
                        <h5>CNPJ:</h5><div class="col-12"><details><input type="text" class="form-control coul" name="cpf" placeholder="Mandatory your Cpf. . ." value="{{$edit_phramax->cpf}}"></details></div>
                        
                     </div>
                     
                     <div class="col-6">
                        <h5>Fix Number Limit:</h5><div class="col-12"><input type="number" class="form-control coul" name="number_fix" value="{{$edit_phramax->number_fix}}"></div>
                        
                     </div>
                     
                     <div class="col-6">
                        <h5>Frete1->]0,->2km] &&  Price_Item >= FIX</h5><div class="col-12"><input type="number" class="form-control coul" name="frete1" value="{{$edit_phramax->frete1}}"></div>
                        
                     </div>

                     <div class="col-6">
                        <h5>Frete2->]0,->2km] && Price_Item < FIX</h5><div class="col-12"><input type="number" class="form-control coul" name="frete2" value="{{$edit_phramax->frete2}}"></div>
                        
                     </div>

                     <div class="col-6">
                        <h5>Frete3->]2,->4km] && Price_Item < FIX or Price_Item >= FIX</h5><div class="col-12"><input type="number" class="form-control coul" name="frete3" value="{{$edit_phramax->frete3}}"></div>
                        
                     </div>

                     <div class="col-6">
                        <h5>Frete4->]4,-> +00[</h5><div class="col-12"><input type="number" class="form-control coul" name="frete4" value="{{$edit_phramax->frete4}}"></div>
                        
                     </div>

                       
                     <div class="col-6">
                        
                        <h5></h5><div class="col-6">
                            Certificat:<input type="file" name="certificatx" class="form-control mt-2">
                        </div><br>

                @if($edit_phramax->certificatx)
                    
               

                <img src="{{asset('pharmacie/'.$edit_phramax->certificatx)}}" width="85px" height="60px"/>


                @endif
                        
                     </div>


                     <div class="col-6">
                        <h5></h5><div class="col-6">
                            <input type="file" name="photo" class="form-control mt-2">
                        </div><br>

                @if($edit_phramax->photo)
                    
                    <img src="{{asset('pharmacie/'.$edit_phramax->photo)}}" width="85px" height="60px" />
               
                @endif
                        
                     </div>

                    
                    
                    
                   

                       
              
                 </div>
                 
                    
    </div>


    
    <div class="group-control">
        <button type="button" class="btn btn-primary" onclick="update_pharmacie({{$edit_phramax->id}})">Edit</button> <br><br>

    </div>
</form>
  </div> 


    </div> 
   
           
    </div> 

@section('scripts')
@endsection
@endsection




   
