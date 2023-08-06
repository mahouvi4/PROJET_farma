<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pharma &mdash; Colorlib Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('farm/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('farm/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('farm/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('farm/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('farm/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('farm/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('farm/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('farm/css/style.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('css')
</head>
<body>

@if(! session('info_boutique'))
                 <script>  
                    window.location.href="{{url('formulaire1_login_pharmacie/ekodide/lazaro')}}";
                </script>
             @endif
  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone">Pharma</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
             
            </nav>
          </div>
          <div class="icons">
            <a href="cart.html" class="icons-btn d-inline-block bag">
           
              
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none">
          </div>
        </div>
      </div>
    </div>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="{{url('destroy_session_pharmacie')}}">Home</a> <span class="mx-2 mb-0">/</span> 
            <strong class="text-black">Option</strong>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                
                <thead>
                    <tr>
                        <td>Pharmacy Name: <h1 style="color:rgb(0, 247, 255) ;font-family:cambria;width:100%">{{$opt->name_pharma}}</h1>
                        @if($opt->statut == 1)
			   <i class="fas fa-thumbs-up likux" style="color:#31F9F6;margin-top:-15px;font-size:3rem"></i><span style="color:#313030;font-size:2rem;font-family:aharoni">{{$count_pharmo_like}}</span>
                 @endif     
                    </td>

                   
                 
                       
                    </tr>

                  
                  
                  
                </thead>
                <tbody>
                   
                           <input type="hidden" value="{{session('info_boutique')[0]->id}}">
                   
                  <tr>

                  <td class="product-thumbnail">
                           <img src="{{asset('Pharmacie/'.$opt->photo)}}" alt="" height="200px" width="100%" style="border-radius:15px">
                          </td>
                    </tr>

                    <tr>
                    
                    
                    <td class="product-name"><h1>OPTION</h1></td>
                    
           
                    
                  </tr>
                       @if(session('info_boutique')[0]->statut == 1)

                      

                     <tr>
                            <td> <a href="{{url('admin/list_medic_phar_admin/'.$opt->id)}}" class="btn btn-danger height-auto btn-sm mt-2" style="width:100%">Drug List</a></td>
                     
                     </tr>

                     <tr>
                        
                  
                        <td><a href="{{url('formulaire_medico/tchizo/dagazi')}}" class="btn btn-info height-auto btn-sm mt-2" style="width:100%">Add Drug</a></td>
                
                     </tr>

                     <tr>
                        
                  
                        <td><a href="{{url('admin/list_client_bout_admin/'.$opt->id)}}" class="btn btn-dark height-auto btn-sm mt-2" style="width:100%">Custumer List</a></td>
                
                     </tr>

                     <tr>
                        
                  
                        <td><a href="{{url('admin/list_com_cli_bout_adm/'.$opt->id)}}" class="btn btn-primary height-auto btn-sm mt-2" style="width:100%">Order List <h1>({{$commande}})</h1></a></td>
                
                     </tr>

                     <tr>
                        
                  
                        <td><a href="{{url('admin/order_unpaid/'.$opt->id)}}" class="btn btn-dark height-auto btn-sm mt-2" style="width:100%">unpaid order <h1>({{$command_o_count}})</h1></a></td>
                
                     </tr>
                       @endif
                       

                       @if(isset($count_pharmo_reclam) && $count_pharmo_reclam->statut == 0)
                     <tr>
                    
                       <td><i style="font-size:3rem">💌 No answered</i><a href="{{url('admin/create_reclam/'.$opt->id)}}" class="btn btn-info height-auto btn-sm mt-2" style="width:100%; background-color:blue">Contact Administrator</a></td>
                
                     </tr>
                      
                         @else

                         <tr>
                    
                              <td><a href="{{url('admin/create_reclam/'.$opt->id)}}" class="btn btn-info height-auto btn-sm mt-2" style="width:100%; background-color:blue">Contact Administrator</a></td>
             
                  </tr>
                  
                         @endif

                        
                         <a href="{{url('admin/dublon_chat')}}" class="olox">.</a>
                </tbody>
              </table>
            </div>
          </form>
        </div>
    
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <a href="{{url('destroy_session_pharmacie/eco/polis')}}" onclick="destroy_session_pharmacie()"><button class="btn btn-primary btn-md btn-block">Sign Out</button></a>
              </div>
              <div class="col-md-6">
              </div>
            </div>
           
          </div>
          
         
        </div>
      </div>
    </div>
    <div class="site-section bg-secondary bg-image" style="background-image: url('{{asset('farm/images/bg_2.jpg')}}');">
      <div class="container">
          <div class="row align-items-stretch">
              <div class="col-lg-6 mb-5 mb-lg-0">
                  <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('{{asset('farm/images/bg_1.jpg')}}');">
                      <div class="banner-1-inner align-self-center">
                          <h2>Pharma Products</h2>
                          <p>Health is like wealth, it is not enough to have it, you have to know how to keep it.
                          </p>
                      </div>
                  </a>
              </div>
              <div class="col-lg-6 mb-5 mb-lg-0">
                  <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('{{asset('farm/images/bg_2.jpg')}}');">
                      <div class="banner-1-inner ml-auto  align-self-center">
                          <h2>Rated by Experts</h2>
                          <p>Health is like wealth, it is not enough to have it, you have to know how to keep it.
                          </p>
                      </div>
                  </a>
              </div>
          </div>
      </div>
  </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>Health is like wealth, it is not enough to have it, you have to know how to keep it.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="#">Supplements</a></li>
              <li><a href="#">Vitamins</a></li>
              <li><a href="#">Diet &amp; Nutrition</a></li>
              <li><a href="#">Tea &amp; Coffee</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
                <h3 class="footer-heading mb-4">Contact Info</h3>
                <ul class="list-unstyled">
                    <li class="address">Travessa Raiumundo Maciel Pereira 19 , Nossa Senhora de Fatima 62900-000, Russas-Ceara Brasil</li>
                    <li class="phone"><a href="tel:// +55 (85) 996776852">+55 (84) 99808-7249</a></li>
                    <li class="email">manuagondanou229@gmail.com</li>
                </ul>
            </div>

        </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
              with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"
                class="text-primary">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="{{asset('farm/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('farm/js/jquery-ui.js')}}"></script>
  <script src="{{asset('farm/js/popper.min.js')}}"></script>
  <script src="{{asset('farm/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('farm/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('farm/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('farm/js/aos.js')}}"></script>
  <script src="{{asset('farm/js/main.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

        <script>
              function delete_pharma(id){
                $.get("{{url('admin/delete_pharma')}}/"+id,{}, function(e){
                  alert('Are you sure deleted this Pharmacy ??');
                    window.location.href="{{url('admin/list_phamacie')}}";
                   // e.preventdefault();
                })
              }
          </script>

  
          
          <script>
                  
                 /* function pay_salaire(){
                    
                    $(".bete").on("click",function(){
                       // alert('0000000')
                        
                       $(".eza1").each(function(){
                          var total = $(this).text();
                          //alert(total);
                        });

                        $(".eza2").each(function(){
                          var benefice_platform = $(this).text();
                          //alert(benefice_platform);
                        });

                        $(".eza3").each(function(){
                          var benefice_final_pharma = $(this).text();
                          //alert(benefice_final_pharma);
                        });

                        $.ajax({
                            type:"get",
                            url:"{{url('salaire_pharmacie/ogoxi')}}",
                            data:{
                                total : $(".eza1").text(),
                                benefice_platform:$(".eza2").text(),
                                benefice_final_pharma:$(".eza3").text(),
                            },
                            success:function(response){
                                if(response.status==200){
                                  
                                  $("#ckol").html(response.message).addClass('alert alert-success');
                                }
                            }
                         });
                       
                         });

                         
                  }*/
                   
            </script>

            <script>
               $(function(){
                  $(".olox").on("click",function(){
                     $.get("{{url('admin/create_reclam')}}/"+ $(".id_pharmacie").val(),{},function(data){
                        
                       // console.log(data)
                     
                      
                     });
                  })
               })
            </script>

</body>

</html>
