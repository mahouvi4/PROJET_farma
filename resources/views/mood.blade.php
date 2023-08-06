@if(! session('info_adm'))
                 <script>  
                    window.location.href="{{url('administrateur/create_login_admin')}}";
                </script>
             @endif
<div class="modal" tabindex="-1" id="genix">
  <div class="modal-dialog">
    <div class="modal-content"><br><br><br>
      <div class="modal-header">
        <h3 class="modal-title" style="text-align:center;font-family:cambria" >Apply Commission</h5>
      </div>
      <div class="modal-body" id="vanx">
         <form id="up_cx">
          <div id="repox">
              <div class="group-control">
                   <input type="radio"  name="comission" value="0" class="voxp">0%<br>
                   <input type="radio"  name="comission" value="0.05" class="voxp">5%<br>
                   <input type="radio"  name="comission" value="0.06" class="voxp">6%<br>
                   <input type="radio"  name="comission" value="0.07" class="voxp">7%<br>
                   <input type="radio"  name="comission" value="0.08" class="voxp">8%<br>
                   <input type="radio"  name="comission" value="0.09" class="voxp">9%<br>
                   <input type="radio"  name="comission" value="0.10" class="voxp">10%<br>
                   <input type="radio"  name="comission" value="0.11" class="voxp">11%<br>
                   <input type="radio"  name="comission" value="0.12" class="voxp">12%<br>
                   <input type="radio"  name="comission" value="0.13" class="voxp">13%<br>
                   <input type="radio"  name="comission" value="0.14" class="voxp">14%<br>
                   <input type="radio"  name="comission" value="0.15" class="voxp">15%<br>
                   <input type="radio"  name="comission" value="0.16" class="voxp">16%<br>
                   <input type="radio"  name="comission" value="0.17" class="voxp">17%<br>
                   <input type="radio"  name="comission" value="0.18" class="voxp">18%<br>
                   <input type="radio"  name="comission" value="0.19" class="voxp">19%<br>
                   <input type="radio"  name="comission" value="0.20" class="voxp">20%<br>
                   <input type="radio"  name="comission" value="0.21" class="voxp">21%<br>
                   <input type="radio"  name="comission" value="0.22" class="voxp">22%<br>
                   <input type="radio"  name="comission" value="0.23" class="voxp">23%<br>
                   <input type="radio"  name="comission" value="0.24" class="voxp">24%<br>
                   <input type="radio"  name="comission" value="0.25" class="voxp">25%<br>
                   <input type="radio"  name="comission" value="0.26" class="voxp">26%<br>
                   <input type="radio"  name="comission" value="0.27" class="voxp">27%<br>
                   <input type="radio"  name="comission" value="0.28" class="voxp">28%<br>
                   <input type="radio"  name="comission" value="0.29" class="voxp">29%<br>
                   <input type="radio"  name="comission" value="0.30" class="voxp">30%<br>
                   <input type="radio"  name="comission" value="0.31" class="voxp">31%<br>
                   <input type="radio"  name="comission" value="0.32" class="voxp">32%<br>
                   <input type="radio"  name="comission" value="0.33" class="voxp">33%<br>
                  </div>

         </form>
      </div>
      <div class="modal-footer">
        <a href="{{url('admin/list_phamacie')}}"  style="width:100%"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="width:100%">Close</button></a>
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

                    
                     $(document).on("click",'.voxp',function(){
                   
                         var reco_p = $(this).val();
                         
                         
                        // $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }});
                         $.ajax({
                             type:"get",
                             url:"{{url('admin/updat_comission')}}",
                             data:{
                              comission: reco_p,
                             },
                            
                             success:function(response){
                                   if(response.status == 200){
                                    $("#repox").html(response.message).addClass("alert alert-info");

                                   }else{
                                    $("#repox").html("sorry").addClass("alert alert-danger");

                                   }
                             }
                         });
                            
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
