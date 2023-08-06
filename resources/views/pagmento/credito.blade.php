<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pharma-Plat Systems &mdash; Systems</title>
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
   
</head>
    
<body>

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
                        <a href="{{url('show_medico_pharma/'.$data_pagar->id_pharmacie.''.$data_pagar->pharmacie->email)}}" class="js-logo-clone">Pharma</a>
                    </div>
                </div>
                <div class="main-nav d-none d-lg-block">
                    <nav class="site-navigation text-right text-md-center" role="navigation">
                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li class="has-children">
                                
                            </li>
                            @if(session('info_user'))
                            <li><a href="#" style="color: aqua">{{session('info_user')[0]->name}}</a></li>
                            <li><a href="#" onclick="destroy_session_user()">Sign out</a></li>
    
                            @endif
                        </ul>
                    </nav>
                </div>
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

      <br><br><br>
    <div class="comodox"></div>
       @include('modal1')
       <div class="container">
          <div class="content">
   
          <div class="card">
          
          
     
               <div class="xx">
   
               
                  <!--    ADRESSE USER VRAI     -->
                
           
                 
                   <form method="POST" id="edson">

                    <div class="group-control">
                       
                        <input type="hidden" name="id_user" value="{{session('info_user')[0]->id}}" class="form-control id_user"><br>
                    </div>

                    <div class="group-control">
                       
                        <input type="hidden" name="id_list_con" class="form-control listo" value="{{$data_pagar->id_commande}}"><br>
                    </div>

                   <div class="group-control">
                       <input type="hidden" name="id_pharmacie" class="form-control id_pharmacie" value="{{$data_pagar->id_pharmacie}}"><br>
                   </div>
   
                
   
                                  
                  <div class="card-title"  style="font-family:aharoni;font-size:5rem;text-align:center;color:rgb(136, 240, 240)"><h2>Bank Data:</h2></div>
                 <!--    ADRESSE DE USER COMPLEMENTAIRE      -->

                
   
            
              
              <div class="col-md-12">
                         <div class="row">
                             <div class="col-md-6">
                                <div class="group-control">
                    
                                    <input type="hidden" name="hashseller" class="hashseller" style="margin-left:-15px">
                                </div>
                
                                
                               
                                       <div class="group-control">
                                           <label for="">Your credit card number*</label>
                                           <input type="text" name="ncredito" class="form-control ncredito"  placeholder="Be sure to enter the 16 numbers of your credit card...">
                                       </div>
                       
                                       <div class="group-control">
                                           <label for="" >CVV*</label>
                                           <input type="text" name="ncvv"  class="form-control ncvv" placeholder="Just inform the numbers or cvv on your card...">
                                       </div>
                       
                                       <div class="group-control">
                                           <label for="">Expiration Month*</label>
                                           <input type="number" name="mesexp" class="form-control mesexp"  placeholder="Just inform the month of expiry of the card...">
                                       </div>
                                       <div class="group-control">
                                           <label for="">Expiry Year*</label>
                                           <input type="number" name="anoexp" class="form-control anoexp" placeholder="Just inform the year of expiry of the card...">
                                       </div>  
                   
                             </div>

                             <div class="col-md-6">
                                <div class="group-control">
                                  
                                    <input type="hidden" name="bandeira" class="bandeira" style="margin-left:-15px">
                                </div>
                                
                                <div class="group-control">
                                    <label for="">Installment*</label>
                                    <input type="text" name="nparcela"  class="form-control nparcela"   placeholder="Inform only the Installment number: Installment < or egal a 11...">
                                </div>
                                
                               <div class="group-control">
                                   <label for="">Cardholder Name*</label>
                                   <input type="text" name="nomecartao"  class="form-control nomecartao" placeholder="Inform the holder's full name on the card...">
                               </div>
               
                              
                               <div class="group-control">
                                   <label for="">Total value*</label>
                                   <input type="text" name="totalfinal" class="form-control totalfinal" style="font-family:aharoni;font-size:2em;background-color:rgb(23, 81, 88);color:rgb(18, 178, 252)" value="{{number_format($data_pagar->total_list,2,'.','')}}" readonly="">
                               </div>                                                                             
                                                                                                       
                               <div class="group-control">
                                <label for="">Amount Payable per Installment*</label>
                                <input type="text" name="totalparcela" class="form-control totalparcela" style="font-size:2em;background-color:rgb(23, 81, 88);color:rgb(244, 244, 248)" readonly="">
                            </div> 
                         </div>
 

                         
               

                </div>         
   
   
                <!--    ADRESSE DE LIVRAISON      -->
               
   

                   <div class="group-control">
                    <label for="">Total value plus tax*</label>
                    <input type="text" name="totalapagar" class="form-control totalapagar" style="font-size:2em;background-color:rgb(23, 81, 88);color:rgb(244, 244, 248)" readonly="">
                </div>  
           
   
            </div> 
   
            <div class="form-group">
               
                <button type="button" class="btn btn-info pagar mt-3" style="margin-left: 16px">Pay</button>
               </div>
   
                 </form>
        </div>


             
           </div>
       
                 <!--    TABLE INFO     -->
   
   
     
       
     
    </div>
</div>
      
      <br><br><br><br>

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
                          <script>
                              document.write(new Date().getFullYear());
                          </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                  </div>

              </div>
          </div>
      </footer>

      <script src="{{asset('farm/js/jquery-3.3.1.min.js')}}"></script>

      <script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
     

      <script src="{{asset('farm/js/jquery-ui.js')}}"></script>
      <script src="{{asset('farm/js/popper.min.js')}}"></script>
      <script src="{{asset('farm/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('farm/js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('farm/js/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{asset('farm/js/aos.js')}}"></script>
      <script src="{{asset('farm/js/main.js')}}"></script>
 <script>
    function carregar(){
     PagSeguroDirectPayment.setSessionId('{{$sessionID}}');
       
    }

      $(function(){
    carregar()
        $(".ncredito").on('blur',function(){
               PagSeguroDirectPayment.onSenderHashReady(function(response){
                     if(response.status =='error'){
                        console.log(response.message);
                        return false;
                     }

                     var hash = response.senderHash;
                     $(".hashseller").val(hash);  
                     
           });

            let ncartao = $(this).val();
            $(".bandeira").val("");
            if(ncartao.length > 6){
                let prefixcartao = ncartao.substr(0, 6);
                PagSeguroDirectPayment.getBrand({
                cardBin : prefixcartao,
                success:function(response){
                    $(".bandeira").val(response.brand.name);
                },
                error:function(response){
                  
                    $("#vox").html("Invalid Credit Card Number, Make sure the number entered is valid!!").addClass('alert alert-success');
                  $("#general1").modal('show');
                   
                }
                });
            }
             
       });

       $(".nparcela").on('blur',function(){
                var bandeira = $(".bandeira").val();
                var totalparcelas = $(this).val();
                 
                  if(bandeira == ""){
                  
                    $("#vox").html("Invalid CVV number, Please insert a valid number!!").addClass('alert alert-success');
                  $("#general1").modal('show');
                    return;
                  }
            PagSeguroDirectPayment.getInstallments({
            amount:$(".totalfinal").val(),
            maxIntallmentNoInterest:2,
            brand:bandeira,
            success:function(response){
            console.log(response); 
            let status = response.error;
            if(status){
                $("#vox").html("Sorry, no installment option found!!").addClass('alert alert-success');
                  $("#general1").modal('show');
                
                return;
                  }  

                    let indice = totalparcelas - 1;
                    let totalapagar = response.installments[bandeira][indice].totalAmount;
                    let valorTotalParcela = response.installments[bandeira][indice].installmentAmount;
                    
                    $(".totalparcela").val(valorTotalParcela);
                    $(".totalapagar").val(totalapagar);

            }
            
        });
    });

    //recuperer id_list
     
          var id_list_com =  $(".listo").val();
          //alert(id_list_com)
   
         //recuperer data carte bancaire!!
         $(".pagar").on('click',function(){
            const load=true;
           if(load){
            $("#general1").show();
           }
           
            var numerocartao = $(".ncredito").val();
            var iniciocartao = numerocartao.substr(0, 6);
            var ncvv = $(".ncvv").val();
            var anoexp = $(".anoexp").val();
            var mesexp = $(".mesexp").val();
            var hashseller = $(".hashseller").val();
            var bandeira = $(".bandeira").val();
            var totalfinal = $(".totalfinal").val();
            var totalparcela = $(".totalparcela").val();
           // var ncredito = $(".ncredito ").val(),
            //alert(totalparcela);

            //data personnel titulaire
            var id_pharmacie = $(".id_pharmacie").val();
            // console.log(id_pharmacie);
            var name = $(".nomecartao").val();
            

            //adress titulaire cart
            
           

            //data produit
           // var id_list_com = $(".listo").val(id_list_com);
           
            //data user(client)
            var id_user = $(".id_user").val();
          

           

            PagSeguroDirectPayment.createCardToken({
                 
                 cardNumber : numerocartao,
                 brand : bandeira,
                 cvv : ncvv,
                 expirationMonth : mesexp,
                 expirationYear : anoexp,
                 success:function(response){
                    //alert("Token da transacçao recuperado com successo!!");
                    console.log(response);
                    $.post("{{route('pagar_success')}}",{
                     hashseller : hashseller,
                     cardtoken : response.card.token,

                     numerocartao : $(".ncredito ").val(),
                      ncvv : $(".ncvv").val(),
                       anoexp : $(".anoexp").val(),
                       mesexp : $(".mesexp").val(),
                      bandeira : $(".bandeira").val(),
                     nparcela : $(".nparcela").val(),
                     totalapagar : $(".totalapagar").val(),
                     totalparcela :$(".totalparcela").val(),
                     id_list_com : $(".listo").val(),
                     id_user   : $(".id_user").val(),
                     hashseller : $(".hashseller").val(),
                     totalfinal : $(".totalfinal").val(),
                     //hashseller : $(".hashseller").val(),

                     id_pharmacie : $(".id_pharmacie").val(),
                   
                      nomecartao : $(".nomecartao").val(),
                     
                          

                    }
                    ,function(result){
                       //alert("eyon");
                      console.log(result.message);
                     /*$("#vox").html(result.message).addClass('alert alert-success');
                      $("#general1").modal('show');*/
                       window.location.href="{{url('merci_fin/aziz/folade/eko')}}";
                    });
                 },
                    error:function(err){
                     $("#vox").html("I couldn't get the card token, check all the fields!!!!").addClass('alert alert-danger');
                     $("#general1").modal('show');
                       
                        console.log(err);
                    }
            });
     });


   });

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


</body>

</html>
   
  


       