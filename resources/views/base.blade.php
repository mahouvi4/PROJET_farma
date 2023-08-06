<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>Document</title>
    @yield('css')
</head>
<body>
  
    
      
    

    @include('menu')
    @include('modal1')
    @include('modal2')
    @yield('content')
   

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
     integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
 integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

 
 <script>
    $(document).on('keyup','#s',function(){
        var name=$(this).val();
        if(name){
            $.post("{{route('filter')}}",{name:name},(response)=>{
               $('#datapp').html(response);
            })
        }
    })
 </script>
 
      <script>
              function store_pharmacie(){
                var formdata = new FormData($("#pharmo")[0]);
                $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                $.ajax({
                   type:"post",
                   url:"{{url('store_pharmacie')}}",
                   data:formdata,
                   processData:false,
                   contentType:false,
                   success:function(response){
                       if(response.status==200){
                        window.location.href="{{url('formulaire1_login_pharmacie/ekodide/lazaro')}}";
                       }else{
                        $(".info1").html("Sorry !! there may have been a problem while registering, please try again 😏").addClass('alert alert-danger');
                       }
                   }
                });
              }
        </script>

        <script>
                function login1_control(){
                    var formdata = new FormData($("#login_pharmo1")[0]);
                    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                    $.ajax({
                   type:"post",
                   url:"{{url('login1_control')}}",
                   data:formdata,
                   processData:false,
                   contentType:false,
                   success:function(response){
                       if(respnse.status==200){
                        window.location.href="{{url('formulaire_medico/tchizo/dagazi')}}";

                       alert('okkk');
                       }else{
                        $(".info2").html("Sorry, it seems that you forgot to fill in a field otherwise, be sure to inform your correct data !!😏").addClass('alert alert-danger');
                       }
                   }
                });
                }
        </script>
          
                    <script>
                       /* function destroy_session_pharmacie(){
                            $.ajax({
                                type:"get",
                                url:"{{url('destroy_session_pharmacie')}}/egozi/cica",
                                success:function(response){
                                    if(response.status==200){
                                        window.location.href="{{url('formulaire1_login_pharmacie/ekodide/lazaro')}}";
                                    }else{
                                        hummm
                                    }
                                }
                            })
                        }*/
                    </script>
 

                <script>
                    function add_medico(){
                        /*var allx = $(".aovo").val();
                        alert(allx)*/
                    var formdata = new FormData($("#pharmo_product")[0]);
                    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                    $.ajax({
                        type:"post",
                        url:"{{url('add_medicament')}}",
                        data:formdata,
                        processData:false,
                        contentType:false,
                        success:function(response){
                            if(response.status==200){
                                $(".info3").html(response.message).addClass('alert alert-success');
                                window.location.href="{{url('admin/list_medic_phar_admin')}}/"+ $(".couliz").val();
                                // alert('Success!!')
                            }else if(response.status == 300){
                                window.location.href="{{url('formulaire1_login_pharmacie/ekodide/lazaro')}}";
                            } else{
                            $(".info3").html("Sorry, it seems that you forgot to fill in a field otherwise, be sure to inform your correct data !! 😏").addClass('alert alert-danger');
                            }
                        }
                    });
                    }
                </script>

                <script>
                     function destroy_session_user(){
                        $.ajax({
                          type:"get",
                          url:"{{url('destroy_session_user')}}",
                          success:function(response){
                           if(response.status==200){
                            alert('session tuée');
                           // window.location.href="{{url('/')}}";
                           }
                          }
                        });
                     }
                </script>

<script>
              function update_pharmacie(id){
                var formdata = new FormData($("#pharmf")[0]);
                $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                $.ajax({
                   type:"post",
                   url:"{{url('admin/update_pharma')}}/"+id,
                   data:formdata,
                   processData:false,
                   contentType:false,
                   success:function(response){
                       if(response.status==200){
                        window.location.href="{{url('admin/list_phamacie')}}";
                       }else{
                        $(".info1").html("Sorry !! there may have been a problem while updating, please try again 😏").addClass('alert alert-danger');
                       }
                   }
                });
              }
        </script>
 
          <script>
              function delete_pharma(id){
                $.get("{{url('admin/delete_pharma')}}/"+id,{}, function(e){
                    e.preventdefault();
                    window.location.href="{{url('admin/list_phamacie')}}";
                })
              }
          </script>

<script>
                function login1_control2_phar(){
                    var formdata = new FormData($("#login_pharmo11")[0]);
                    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                    $.ajax({
                   type:"post",
                   url:"{{url('admin/formulaire1_login2_ph')}}",
                   data:formdata,
                   processData:false,
                   contentType:false,
                   success:function(response){
                       if(respnse.status==200){
                        window.location.href="{{url('formulaire_medico/tchizo/dagazi')}}";

                       alert('Are you sure that you are Admin?');
                       }else{
                        $(".info2").html("Sorry, it seems that you forgot to fill in a field otherwise, be sure to inform your correct data !!😏").addClass('alert alert-danger');
                       }
                   }
                });
                }
        </script>

<script>
                    function upd_medico_adm(id){

                       // var ooooo = $(".coool").val();
                        //console.log(ooooo);
                    var formdata = new FormData($("#pharmo_productxx")[0]);
                    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                    $.ajax({
                        type:"post",
                        url:"{{url('admin/upd_medic_admin')}}/"+ $(".coool").val(),
                        data:formdata,
                        processData:false,
                        contentType:false,
                        success:function(response){
                            if(response.status==200){
                                $(".info3").html(response.message).addClass('alert alert-success');
                                window.location.href="{{url('admin/list_medic_phar_admin')}}/"+ $(".dovo").val();
                            }else{
                            $(".info3").html(response.message).addClass('alert alert-danger');
                            }
                        }
                    });
                    }
                </script>

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
                                    
                                    $(".info3").html(response.message).addClass('alert alert-success');
                                    //window.location.href="{{url('admin/list_medico')}}";
                                }
                            }
                            });
                            }
                            </script>

 
<script>
                     function destroy_session_adm(){
                        $.ajax({
                          type:"get",
                          url:"{{url('administrateur/destroy_session_adm')}}",
                          success:function(response){
                           if(response.status==200){
                            alert('session tuée');
                           window.location.href="{{url('administrateur/create_login_admin')}}";
                           }
                          }
                        });
                     }
                </script>

          
                      
 @yield('scripts')
</body>
</html>