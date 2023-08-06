<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pharma-Plat &mdash; Systems</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
     integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    
   @yield('css')
</head>

<body>
@if(! session('info_user'))
                 <script>  
                    window.location.href="{{url('formulaire_login/vegazi/nino')}}";
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
                            <a href="{{url('show_medico_pharma/'.$pharma_desc->pharmacie->id .$pharma_desc->pharmacie->email)}}" class="js-logo-clone">Pharma</a>
                        </div>
                    </div>
                    <div class="main-nav d-none d-lg-block">
                        <nav class="site-navigation text-right text-md-center" role="navigation">
                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                
                                
                                <li class="has-children">
                                  
                                    <li style="color: aqua"><a href="{{url('ma_commande/oljsg/'.request()->session()->get('key'))}}">My Order</a></li>
                                </li>
                                @if(session('info_user'))
                                <li><a href="#" style="color: aqua">{{session('info_user')[0]->name}}</a></li>
                                <li><a href="#" onclick="destroy_session_user()">Sign out</a></li>

                                @endif
                            </ul>
                        </nav>
                    </div>
                  
                    @php
                    
                    @endphp
                    <div class="icons">
                    
                        <a href="{{url('card_final/finalisa/home')}}" class="icons-btn d-inline-block bag">
                            <span class="icon-shopping-bag"></span>
                            <span class="number count_card">0</span>
                        </a>
                        <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
                    </div>
                </div>
            </div>
        </div>

           
    


<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="{{url('show_medico_pharma/'.$pharma_desc->pharmacie->id .$pharma_desc->pharmacie->email)}}">Home</a> <span class="mx-2 mb-0">/ <strong class="text-black">{{$pharma_desc->Reference}}, {{$pharma_desc->kilo}}mg</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      @php    
        $number_fix = 0;
        
        @endphp
      <div class="row">
        <div class="col-md-5 mr-auto">
          <div class="border text-center" style="height:620px">
            <img src="{{asset('medico/'.$pharma_desc->photo)}}" alt="Image" class="img-fluid p-5" class="decolax">
          </div>
        </div>
        <div class="col-md-6">
          <h2 class="text-black">{{$pharma_desc->Reference}}, {{$pharma_desc->kilo}}mg</h2>
          <p>{{$pharma_desc->desciption}}.</p>
          
                     <input type="hidden" value="{{$pharma_desc->pharmacie->number_fix}}">
                    @if (($pharma_desc->desconte >= 0))
                    <p><del>${{$pharma_desc->prix}}</del>  <strong class="text-primary h4">${{$pharma_desc->prix - ($pharma_desc->prix * $pharma_desc->desconte/100)}}</strong></p>
                       @else
                       <p><strong class="text-primary h4">${{$pharma_desc->prix}}</strong></p>

                    @endif
                    <form methode="POST" id="kixan">
                      @php  
                      $number_fix = $pharma_desc->pharmacie->number_fix;
                      $val = 0;
                      $val2 = 0;
                      $vv = 0;
                      @endphp
                     <div class="bebi">
                    @if ($pharma_desc->desconte > 0)
                              
                        @if(($distance->distance <= 2) && ($pharma_desc->prix - ($pharma_desc->prix * $pharma_desc->desconte/100) >= $number_fix))
                        <input type="hidden" value="{{($pharma_desc->prix - ($pharma_desc->prix * $pharma_desc->desconte/100) + $pharma_desc->pharmacie->frete1)}}" name="prix_frete">
                        <p>Total value with shipping:<strong class="text-primary h4">${{($pharma_desc->prix - ($pharma_desc->prix * $pharma_desc->desconte/100) + $pharma_desc->pharmacie->frete1)}}</strong></p>
                          @elseif(($distance->distance <= 2) && ($pharma_desc->prix - ($pharma_desc->prix * $pharma_desc->desconte/100) < $number_fix))
                          <input type="hidden" value="{{($pharma_desc->prix - ($pharma_desc->prix * $pharma_desc->desconte/100) + $pharma_desc->pharmacie->frete2)}}" name="prix_frete">
                          <p>Total value with shipping:<strong class="text-primary h4">${{($pharma_desc->prix - ($pharma_desc->prix * $pharma_desc->desconte/100) + $pharma_desc->pharmacie->frete2)}}</strong></p>
                              @else
                               @if((($distance->distance > 2  && $distance->distance <= 4) && ($pharma_desc->prix - ($pharma_desc->prix * $pharma_desc->desconte/100) < $number_fix)) || (($distance->distance > 2  && $distance->distance <= 4) && ($pharma_desc->prix - ($pharma_desc->prix * $pharma_desc->desconte/100) >= $number_fix)))
                               <input type="hidden" value="{{($pharma_desc->prix - ($pharma_desc->prix * $pharma_desc->desconte/100) + $pharma_desc->pharmacie->frete3)}}" name="prix_frete">
                               <p>Total value with shipping:<strong class="text-primary h4">${{($pharma_desc->prix - ($pharma_desc->prix * $pharma_desc->desconte/100) + $pharma_desc->pharmacie->frete3)}}</strong></p>
                                  
                               @endif
                    

                               @if($distance->distance > 4 )

                               @php
                               $vv = number_format(($pharma_desc->desconte/100),2,'.','');
                               $val2 =  ($pharma_desc->desconte/100) * ($pharma_desc->prix);
                      $val = $pharma_desc->prix - ($pharma_desc->prix * $pharma_desc->desconte/100) + $pharma_desc->pharmacie->frete4 ;
                          
                          @dump($val)
                   @endphp
                   



                                  <input type="hidden" value="{{($pharma_desc->prix - ($pharma_desc->prix * $pharma_desc->desconte/100) + $pharma_desc->pharmacie->frete4)}}" name="prix_frete">
                               <p>Total value with shipping:<strong class="text-primary h4">${{($pharma_desc->prix - ($pharma_desc->prix * $pharma_desc->desconte/100) + $pharma_desc->pharmacie->frete4)}}</strong></p>
                              @endif
                          @endif


                    @endif

                    @if($pharma_desc->desconte == 0)
                       @if(($distance->distance <= 2) && ($pharma_desc->prix >= $number_fix))
                        <input type="hidden" value="{{($pharma_desc->prix + $pharma_desc->pharmacie->frete1)}}" name="prix_frete">
                        <p>Total value with shipping:<strong class="text-primary h4">${{($pharma_desc->prix + $pharma_desc->pharmacie->frete1)}}</strong></p>
                          @elseif(($distance->distance <= 2) && ($pharma_desc->prix < $number_fix))
                          <input type="hidden" value="{{($pharma_desc->prix + $pharma_desc->pharmacie->frete2)}}" name="prix_frete">
                          <p>Total value with shipping:<strong class="text-primary h4">${{($pharma_desc->prix + $pharma_desc->pharmacie->frete2)}}</strong></p>
                              @else
                               @if((($distance->distance > 2  && $distance->distance <= 4) &&  ($pharma_desc->prix < $number_fix)) || (($distance->distance > 2  && $distance->distance <= 4) &&  ($pharma_desc->prix >= $number_fix)))
                               <input type="hidden" value="{{($pharma_desc->prix + $pharma_desc->pharmacie->frete3)}}" name="prix_frete">
                               <p>Total value with shipping:<strong class="text-primary h4">${{($pharma_desc->prix + $pharma_desc->pharmacie->frete3)}}</strong></p>
                                  
                               @endif
                               
                             
                          @endif
                          
                          @endif

                          @if($pharma_desc->desconte == 0 && $distance->distance > 4)
                          
                                  <input type="hidden" value="{{($pharma_desc->prix + $pharma_desc->pharmacie->frete4)}}" name="prix_frete">
                               <p>Total value with shipping:<strong class="text-primary h4">${{($pharma_desc->prix + $pharma_desc->pharmacie->frete4)}}</strong></p>
                           
                          @endif


                    </div>
                   <h4 class="vego"><input type="checkbox" style="border-color:red" class="form-group vert vegax" name="aller_retirer"  {{$pharma_desc->aller_retirer=="1" ? 'checked' : ''}}/> 👈I want for delivery</h4><br>

                     <!-- recuperer  -->
                    
                      <input type="hidden" name="id_pharmacie" value="{{$pharma_desc->pharmacie->id}}" class="id_pharmacie">
                      <input type="hidden" name="id_user" value="{{session('info_user')[0]->id}}">
                      <input type="hidden"  name="id_medico" value="{{$pharma_desc->id}}">
                     </form>
                   <!-- recuperer  -->

          <div class="mb-5">
             <input type="hidden" value="{{$pharma_desc->id}}" class="pro">
             <input type="hidden" value="{{$pharma_desc->pharmacie->email}}"  class="phar">

     
          </div>
          @if($pharma_desc->stock>0)
          <p><button type="button" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" onclick="add_card()">ADD TO CARD</button>
          </p>
          @else
          <div class="btn btn-danger">Not in Stock</div>
          @endif
         
          <div class="mt-5">
            <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                  aria-controls="pills-home" aria-selected="true">Ordering Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                  aria-controls="pills-profile" aria-selected="false">Specifications</a>
              </li>
          
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <table class="table custom-table">
                  <thead>
                    <th>Material</th>
                    <th>Description</th>
                    <th>Packaging</th>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">OTC022401</th>
                      <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                      <td>1 BT</td>
                    </tr>
                    <tr>
                      <th scope="row">OTC022401</th>
                      <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                      <td>144/CS</td>
                    </tr>
                    <tr>
                      <th scope="row">OTC022401</th>
                      <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                      <td>1 EA</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          
                <table class="table custom-table">
          
                  <tbody>
                    <tr>
                      <td>HPIS CODE</td>
                      <td class="bg-light">999_200_40_0</td>
                    </tr>
                    <tr>
                      <td>HEALTHCARE PROVIDERS ONLY</td>
                      <td class="bg-light">No</td>
                    </tr>
                    <tr>
                      <td>LATEX FREE</td>
                      <td class="bg-light">Yes, No</td>
                    </tr>
                    <tr>
                      <td>MEDICATION ROUTE</td>
                      <td class="bg-light">Topical</td>
                    </tr>
                  </tbody>
                </table>
          
              </div>
          
            </div>
          </div>

  
        </div>
      </div>
    </div>
  </div>

   
   @include('mood6x')
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
                    <p>Health is like wealth, it is not enough to have it, you have to know how to keep it.
                    </p>                </div>

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
                        <li class="phone"><a href="tel://23923929210">+55 (85) 99677-6852</a></li>
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
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
 integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
function add_card(){
    var formdata = new FormData($("#kixan")[0]);
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

    $.ajax({
        type: "post",
        url:"{{url('add_to_card')}}",
        data:formdata,
        processData:false,
        contentType:false,
        success:function(response){
          count_card()
          if(response.status==300){
            toastr.warning(response.message);

          }else if(response.status==200){
            toastr.info(response.message);

          }
        }

    });
}
</script>

<script>
    function count_card(){
     
                       $.ajax({
                        type:"get",
                        url:"{{url('count_card')}}/"+ $('.id_pharmacie').val(),
                        success:function(response){
                        console.log(response);
                        $(".count_card").html("");
                            $(".count_card").html(response); 
                       
                        }
                 });
            
       /* $.ajax({
            type:"get",
            url:"{{url('count_card')}}",
            success:function(response){
              // console.log(response);
              $(".count_card").html("");
                $(".count_card").html(response); 
            }
        });*/
    }
</script>
<script>
   $(document).ready(function(){
    count_card();
   });
</script>

<script>
  function delete_med_cart(id){
   $.get("{{url('delete_med_cart')}}/"+id,{},function(){
    count_card();
   });
  }
</script>

<script>
    
           function charg_card2(){
            $.get("{{url('show_card')}}",{},function(vlom){
               $("#gomorax").html(vlom);
            });
           }
</script>

<script>
  function destroy_session_user(){
     $.ajax({
       type:"get",
       url:"{{url('destroy_session_user/egozi/cica')}}",
       success:function(response){
        if(response.status==200){
        
        window.location.href="{{url('formulaire_login/vegazi/nino')}}";
        }
       }
     });
  }
</script>

  <script>
     $(function(){
     
      //$(".bebi").hide();
       var elox,phar ,ehe;
       if(ehe){
               
               $(".bebi").show();
               $(".vego").hide();

                 }else{
                  $(".bebi").hide();
                 }
               $(".vegax").on("click",function(){
            //alert('O valor do frete acaba de ser aplicado no valor do seu medicamento! Clique no botão OK para continuar. . .')
                 ehe = $(this).val();
               $("#g30").modal('show');
                 if(ehe){
               
               $(".bebi").show();
               $(".vego").hide();

                 }else{
                  $(".bebi").hide();
                 }
               
              // window.location.href="{{url('description_medico')}}/"+elox ;
               
         })
         
     })
  </script>

      <script>
          
             /* 
             
              $(".pro").each(function(){
                  elox = $(this).val();
                 console.log(elox);
               })

               $(".phar").each(function(){
                phar = $(this).val();
                 console.log(phar);
               })
             
             ///////////////////////////////
             
             
             
             var checkbox = $("#Testeverde input[type='checkbox']");
              checkbox.click(function(event) {
                var checkbox = event.target;
                
                if (checkbox.checked) {
                  alert('okk')
                  $(".vegax").hide();
                  $(".bebi").show();
                } else {
                  $(".bebi").hide();
                }
            });*/
         
      </script>


@yield('scripts')

</body>

</html>

