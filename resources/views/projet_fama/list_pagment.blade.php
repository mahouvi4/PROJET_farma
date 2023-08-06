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
     @include('mood2')
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
            <strong class="text-black">Salary</strong>
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
              @php
      $h_1 = 0;
      $h_acto =  0;
      $soma = 0;
      $dato = 0;
     $created_at = 0;


      
          @endphp
                <thead>
                    <tr>
                        <td>Pharmacy Name: <h1 style="color:rgb(0, 247, 255)">{{session('info_boutique')[0]->name_pharma}}</h1></td>
                      
                        <img src="{{asset('pharmacie/'.$phar->photo)}}" alt="" height="150px" width="100%" style="border-radius:7px">

                      
                        <td class="product-thumbnail">
                          </td>
                    </tr>
                  <tr>
                    
                    
                    <th class="product-name">Date</th>
                
                    <th class="product-total">Total</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($list_pagment_phar as $item)
                        
                    @php
                                    $h_1 = date('0000-00-00 1:0:0');
                                    $h_acto =  $item->created_at;
                                    $soma = strtotime($h_1) + strtotime($h_acto);
                                    $dato = date("H:i:s",$soma);
                                  $created_at = Date("d-m-y",strtotime($h_acto));


                                 
                                        @endphp
                   
                  <tr>
                    
                   @if ($item->statut == 5)
                   <td class="product-name">
                    <h2 class="h5 text-black">{{$created_at}} {{$dato}}</h2>
                  </td>
              
                 
                  <td>${{$item->totalfinal}}</td> 
                   @endif
                  </tr>
                      
                  @endforeach
    
                  <input type="hidden" class="id_pharmacie" value="{{session('info_boutique')[0]->id}}">
            
                </tbody> 
                   <tfoot>
                   @php
      $h_1 = 0;
      $h_acto =  0;
      $soma = 0;
      $dato = 0;
     $created_at = 0;


      
          @endphp
                   <br><br>
                                         @if(isset($list_devolu) && count($list_devolu) > 0)
                                            
                                    
                                             <!--   devolution    -->
                                             @foreach($list_devolu as $item)
                                            
                                             @php
                                             $devoxa = 0;
                                             $devoxa += number_format($item->devolution_pharma,"2",".","");
                                                
                                             @endphp
                                             <tr>
                                              

                                              <thead>
                                              @php
                                    $h_1 = date('0000-00-00 1:0:0');
                                    $h_acto =  $item->created_at;
                                    $soma = strtotime($h_1) + strtotime($h_acto);
                                    $dato = date("H:i:s",$soma);
                                  $created_at = Date("d-m-y",strtotime($h_acto));


                                 
                                        @endphp
                   
                                                <tr>
                                                
                                                <th style="color:#ff0f5b">DATE</th>
                                                <th style="color:#ff0f5b">NAME CUSTOMER</th>
                                                 <th style="color:#ff0f5b">CPF</th>
                                                 <th style="color:#ff0f5b">ORDER CODE</th>
                                                 <th style="color:#ff0f5b">TOTAL VALUE ORDER</th>
                                                 <th style="color:#ff0f5b">AMOUNT</th>
                                                 <th style="color:#ff0f5b">STATUS</th>

                                                </tr>
                                                <th style="color:#ff0f5b">{{$created_at}} {{$dato}}</th>
                                                <th style="color:#ff0f5b">{{$item->user->name.' '.$item->user->firstname}}</th>
                                                 <th style="color:#ff0f5b">{{$item->user->cpf}}</th>
                                                 <th style="color:#ff0f5b">{{$item->code_commande}}</th>
                                                 <th style="color:#ff0f5b">${{number_format($item->total_list,2,'.','')}}</th>
                                                 <th style="color:#ff0f5b">{{$item->taxo}}%</th>
                                                    @if($item->statut == 1)
                                                    <th style="color:#ff0f5b">RETURNED</th>
                                                    @endif
                                              </thead>
                                           <td colSpan="6">
                                            <p>TOTAL AMOUNT WITH RETURN FEE <h1 style="color:#27eff6">${{number_format($devoxa,"2",".","")}}</h1></p>
                                           </td>
                                            </tr>
                                            @endforeach
                                             
                                               
                                                
                                                  <!--  findevolution     -->

                                    </tr>
                                         @endif
                   <tfoot>

              </table>
            </div>
          </form>
        </div>
    
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <a href="{{url('admin/opition_pharma_salaire/'.session('info_boutique')[0]->id)}}"><button type="button" class="btn btn-primary btn-md btn-block">Return to Option</button></a>
              </div>

              <div class="col-md-6 mb-3 mb-md-0">
                <button type="button" class="btn btn-primary btn-md btn-block" id="oplyx">Apply Commission</button>
              </div>
              <div class="col-md-6">
              </div>
            </div>


            <input type="hidden" class="comix" value="{{$phar->comission}}">
            <input type="date" class="btn btn primary datax" class="form-control">

          </div>
          
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                    <div id="ckol"></div>
                    @php
                    $total=0;
                    $egonzo=0;
                    @endphp
                  </div>
                </div>
                <div class="col-md-12 text-right">
                Commission: <strong class="text-black comix" style="color: rgb(0, 225, 255);font-size:2.5rem;font-family:aharoni"> {{$phar->comission}}%</strong>
                  </div>
                  -----------------------------------
                <div class="row mb-3">
                  <div class="col-md-6">
                    @foreach($list_pagment_phar as $item)
                    @php
                       if($item->statut == 5){
                        $total +=$item->totalfinal;
                        $egonzo = $list_pagment_phar_im->pharmacie->comission;
                       }else{
                        $total = 0;
                        $egonzo = 0;
                       }
                         
    
                       
                    @endphp
                    @endforeach

                   @php
                  
                   $bifa = 0;
                     $befe = 0;
                     if(isset($T_calcul_devo->total_devolution_pharma) && $T_calcul_devo->total_devolution_pharma > 0){
                     $befe =  number_format((($total - $T_calcul_devo->total_devolution_pharma) * $egonzo) ,0,'.','');
                    }
                    $bifa = number_format(($total * $egonzo),0,'.','');

                     @endphp
                  
               
                    <span class="text-black">Total Sales</span>
                  </div>

                  <div class="col-md-6 text-right">
                   @if(isset($T_calcul_devo->total_devolution_pharma) && $T_calcul_devo->total_devolution_pharma > 0)
                    $ <strong class="text-black eza1">{{$total - $T_calcul_devo->total_devolution_pharma}}</strong>
                   @else
                   $ <strong class="text-black eza1">{{$total}}</strong>

                   @endif
                   
                  </div>
                </div>
                --------------------------------
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Plat-Pharma Benefit</span>
                  </div>
                  @if(isset($T_calcul_devo->total_devolution_pharma) && $T_calcul_devo->total_devolution_pharma > 0)
                  <div class="col-md-6 text-right">
                    $ <strong class="text-black eza2">{{number_format(($total - $T_calcul_devo->total_devolution_pharma) * $egonzo),2,'.',''}}</strong>
                  </div>

                  @else
                  <div class="col-md-6 text-right">
                    $ <strong class="text-black eza2">{{number_format($total * $egonzo),2,'.',''}}</strong>
                  </div>
                  @endif
                        -----------------------------------  
                  <div class="col-md-6">
                    <span class="text-black">Final Benefit of {{session('info_boutique')[0]->name_pharma}}</span>
                  </div>
                  @if(isset($T_calcul_devo->total_devolution_pharma) && $T_calcul_devo->total_devolution_pharma > 0)
                  <div class="col-md-6 text-right">
                  $ <strong class="text-black eza3" style="color: rgb(0, 225, 255);font-size:2.5rem;font-family:aharoni">{{number_format(((($total - $T_calcul_devo->total_devolution_pharma)) - $befe),2) }}</strong>
                  
                  </div>
                       @else

                       <div class="col-md-6 text-right">
                    $ <strong class="text-black eza3" style="color: rgb(0, 225, 255);font-size:2.5rem;font-family:aharoni">{{$total - $bifa}}</strong>
                  </div>
                  @endif
                </div>
    
                <div class="row">

                <div class="col-md-12">
                        <input type="hidden" name="id_pharmacie" value="{{session('info_boutique')[0]->id}}" class="ido">

                      <textarea  class="form-control motiva mt-2" placeholder="Payment Motif" style="text-align:center"></textarea><br>

                 
                  </div>
                  <div class="col-md-12">

                    
                  @if(isset($T_calcul_devo->total_devolution_pharma) && $total > 0 && (($total - $T_calcul_devo->total_devolution_pharma) * $egonzo) > 0)
                     <button type="button" class="btn btn-primary btn-lg btn-block"  id="bete">Pay Salary</button>
                       @elseif(isset($T_calcul_devo->total_devolution_pharma) &&  (($total - $T_calcul_devo->total_devolution_pharma) * $egonzo) < 0)
                    
                              @else @if($total && $total > 0 )
                              <button type="button" class="btn btn-primary btn-lg btn-block"  id="bete">Pay Salary</button>
          
                           @endif
                         
                       @endif
                        
        
                  </div>
                </div>
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
                  
                  $(function(){

                    $("#bete").on("click",function(){
                       // alert('0000000')
                          //alert($(".ido").val());
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

                        
                          var comix = $(".comix").val();
                          //alert(comix);
                        

                          var motiva = $(".motiva").val();
                          //alert(motiva);
                      
                          var datax = $(".datax").val();
                         

                        $.ajax({
                            type:"get",
                            url:"{{url('salaire_pharmacie/ogoxi')}}",
                            data:{
                                total : $(".eza1").text(),
                                benefice_platform:$(".eza2").text(),
                                benefice_final_pharma:$(".eza3").text(),
                                comix : $(".comix").val(),
                                 motiva : $(".motiva").val(),
                                 datax : $(".datax").val(),
                            },
                            success:function(response){
                                if(response.status==200){
                                  window.location.href="{{url('alization/pagamento')}}/"+ $(".ido").val();
                                  $("#ckol").html(response.message).addClass('alert alert-info');
                                }

                                 if(response.status==400){
                                  $("#ckol").html(response.message).addClass('alert alert-danger');
                                 }

                                 if(response.status==300){
                                  $("#ckol").html(response.message).addClass('alert alert-danger');
                                 }

                                 if(response.status==500){
                                  $("#ckol").html(response.message).addClass('alert alert-danger');
                                 }



                            }
                         });
                       
                         });


                  });
                    
                    
                         
                  
                   
            </script>

               
   
            <script>
                   $(function (){
                      $.get("{{url('admin/crt_mood')}}/"+ $(".id_pharmacie").val(),{},function(data){
                        $("#oplyx").on("click",{},function(){
                        $("#ganix").modal('show');
                       });
                      });
                   });
               </script>
</body>

</html>
