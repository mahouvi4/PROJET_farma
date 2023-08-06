<meta name="csrf-token" content="{{ csrf_token() }}">



@if(! session('info_adm'))
                 <script>  
                    window.location.href="{{url('administrateur/create_login_admin')}}";
                </script>
             @endif
<div class="modal" tabindex="-1" id="gemo">
  <div class="modal-dialog">
    <div class="modal-content"><br><br><br>
      <div class="modal-header">
        <h3 class="modal-title" style="text-align:center;font-family:cambria" >Apply Number Fix</h5>
      </div>
      <div id="olfox"></div>
      <div class="modal-body" id="vx">
         <form id="up_co">
         
              <div class="group-control">
                   <label>Number Fix</label><input type="number" class="form-control number_fix" name="number_fix"><br>
                   <button type="button" class="btn btn-info voaxp">Apply</button> 
                </div>
          
         </form>
      </div>
      
    </div>
  </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

   <script>
               /*function update_comission(){
                    $(".vopx").on("click",function(){
                      var reco_p = $(this).val();
                         console.log(reco_p);
                                  $.ajax({
                                type:"get",
                                url:"{{url('admin/updat_comission')}}",
                                data:{
                                  comission : reco_p,
                                },
                                success:function(response){
                                  alert('okkk')
                                }
                          });
                              });
               
               }*/
   </script>
      <script>

                    
                     $(document).on("click",'.voaxp',function(){
                      var number_fix = $('.number_fix').val();
                          //alert(number_fix);
                         
                         if(number_fix){
                          if((number_fix)  && (number_fix < 0)){
                          alert('Por favor certifique-se que o valor informado é um valor positivo');
                        }else{
                          $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }});
                         $.ajax({
                             type:"post",
                             url:"{{url('admin/updat_fixo_number')}}",
                             data:{
                              number_fix : number_fix,
                             },
                            
                             success:function(response){
                                   if(response.status == 200){
                                    $("#olfox").html(response.message).addClass("alert alert-info");
                                      window.location.href="{{url('admin/list_phamacie')}}";
                                   }else{
                                    $("#olfox").html("sorry").addClass("alert alert-danger");

                                   }
                             }
                         });

                        } 
                        
                         

                        }else{
                            alert('voce deve necessariamente definir um valor Fixo');
                         }



                            
                     })
                      
               
      </script>

      <script>

        // var formdata = new FormData($("#up_cx")[0]);
                      //class="voxp"
                     /* $(".voxp").on("click",function(){
                              alert('okk');
                              /*var reco = $(this).val();
                               console.log(reco);
                             })
                           /* $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }});
                         $.get({
                            type:"post",
                            url:"{{url('admin/updat_comission')}}",
                            data:{
                              
                            },
                            success:function(response){
                              //alert("okkk");
                            }
                         });*/
      </script>
