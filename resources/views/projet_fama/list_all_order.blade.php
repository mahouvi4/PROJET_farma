<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pharma &mdash;  </title>
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
    @yield('css')
</head>
<body>
@if(! session('info_adm'))
                 <script>  
                    window.location.href="{{url('administrateur/create_login_admin')}}";
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
      @php
      $h_1 = 0;
      $h_acto =  0;
      $soma = 0;
      $dato = 0;
     $created_at = 0;


      
          @endphp
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
            <strong class="text-black"> Order not delivered List</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">

      <div class="container">
       Search:<input type="text"  class="form-control recherche"  name="recherche" style="border:none;background-color:#1fe9e6"><br>
        <div class="row mb-5">

        <div class="row mb-5">
        
          <form class="col-md-12" method="post">
          <a href="{{url('admin/list_phamacie')}}"><button type="button" class="btn btn-primary btn-md btn-block">Return to Pharmacy List♣</button></a><br> 

            <div class="site-blocks-table">
              <table class="table table-bordered">
              @include('mood_xixi')
                <thead>
                  
                  <tr>
                    
                    
                  <th>ID</th>
                                <th>Full Name Custumer & Cpf</th>
                                <th>Order Code</th>
                                <th>Total</th>
                                <th>Date</th>
                                <th>Pharmacy</th>
                                <th class="product-total">Emergency</th>
                            
                                <th>Statut</th>
                                <th>ACTION</th>
                              
                                
           
                    
                  </tr>
                </thead>
                
                <tbody id="op1">
                  
                @foreach($list_all_order as $item)
                @php
                                    $h_1 = date('0000-00-00 1:0:0');
                                    $h_acto =  $item->created_at;
                                    $soma = strtotime($h_1) + strtotime($h_acto);
                                    $dato = date("H:i:s",$soma);
                                  $created_at = Date("d-m-y",strtotime($h_acto));


                                 
                                        @endphp
                                        <tr>
                                          <div id="ilo"></div>
                                            <td>{{$item->id}}</td> 
                                            <td>{{$item->firstname.' '.$item->name.' ->'.$item->cpf}}</td> 
                                            <td>{{$item->code_commande}}</td> 
                                            <td>${{$item->total_commande}}</td>  
                                            <td>{{$created_at}} {{$dato}}</td>
                                            <td>{{$item->pharmacie->name_pharma}}</td>
                                        
                                            @if($item->commentax == NULL)
                                            <td style="color:blue">No Emergency</td>
                                            @else
                                            <td style="color:green">{{$item->commentax}}</td>
                                            @endif
                                   
                                   @if($item->statut == 4)
                                   <td style="color:#00008B;font-family:aharoni">returned</td>
                                    @elseif($item->statut == 1)
                                   
                                       <td style="color:#00008B;font-family:aharoni">Paid</td>
  
                                     @elseif($item->statut == 2)
                                     <td style="color:#00008B;font-family:aharoni">Out for delivery. . .</td>
                                     
                                          
                                      @else
                                       

                                      @if($item->statut == 0)
                                     <td style="color:#DC143C;font-family:aharoni">Awaiting payment. . .</td>
                                     @else
                                     <td style="color:green;font-family:aharoni"> product Delivered. . .</td>

                                     @endif
                              
                          @endif

                          <td> <button type="button" class="btn btn-info devop" style="background_color:#F9381B" value="{{$item->id}}"> TREATMENT</button>
                          <button type="button" class="btn btn-delete divop" style="background_color:#F9381B" value="{{$item->id}}" onclick="apagar_commandex({{$item->id}})"> DELETE</button>                        </td>
                                       
                        </tr>
                             
                    @endforeach
                </tbody>
                <div id="opaxi"></div>
              </table>
            </div>
          </form>
        </div>
    
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <a href="{{url('admin/list_phamacie')}}"><button class="btn btn-primary btn-md btn-block;width:100%">Home</button></a>
              </div>
              <div class="col-md-6">
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
                   $(function (){
                       $("#aplyx").on("click",{},function(){
                        $("#genix").modal('show');
                       });
                   });
               </script>



        <script>
           $(function(){
               $(".recherche").on("keyup",function(){
                 //alert('okk')
                 var recherche = $(this).val();
                 //alert(command);
                 $.ajax({
                 type : "get",
                 url : "{{url('admin/recherche_comm')}}",
                 data : {
                  recherche : $(this).val(),
                 },
                     success:function(response){
                      $("#op1").hide();
                      $("#opaxi").html(response);
                     }
                 });
               })
           })
        </script>



          <script>
                     $(function(){
                      $(".devop").on("click",{},function(){
                          var id_commande = $(this).val();
                         // alert(id_commande);
                         $.get("{{url('admin/formulaire_devolution')}}/"+ id_commande,{},function(data){
                              $("#rabelo").html(data);
                              $("#g21").modal('show');
                         })
                      })
                     })

          </script>

<script>




                   function apagar_commandex(id){
                     //alert($(".divop").val());
                    $.get({
                      type : "get",
                      url : "{{url('admin/apagar_commande')}}/"+ $(".divop").val(),
                     success:function(response){
                      if(response.status==200){
                        alert('okk');
                      }
                     }
                    })
                   }
                </script>


</body>

</html>
