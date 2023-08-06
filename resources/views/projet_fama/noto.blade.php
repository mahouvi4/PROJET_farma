<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pharma &mdash; Colorlib Template</title>
   

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
                        <a href="index.html" class="js-logo-clone">Pharma</a>
                    </div>
                </div>
                <div class="main-nav d-none d-lg-block">
                    <nav class="site-navigation text-right text-md-center" role="navigation">
                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="shop.html">Store</a></li>
                            <li class="has-children">
                                <a href="#">Dropdown</a>
                                <ul class="dropdown">
                                    <li><a href="#">Supplements</a></li>
                                    <li class="has-children">
                                        <a href="#">Vitamins</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Supplements</a></li>
                                            <li><a href="#">Vitamins</a></li>
                                            <li><a href="#">Diet &amp; Nutrition</a></li>
                                            <li><a href="#">Tea &amp; Coffee</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Diet &amp; Nutrition</a></li>
                                    <li><a href="#">Tea &amp; Coffee</a></li>

                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="icons">
                    <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
                    <a href="{{url('card_final')}}" class="icons-btn d-inline-block bag">
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
           <div class="card-title" style="margin-left:350px;font-family:aharoni; color:rgba(10, 6, 22, 0.904)"><h1>Order area ♣</h1></div>
               <div class="card-header">
   
               </div>
          
             <div class="card-body">
               <div class="col-md-5 col-lg-10 order-md-last">
   
               
                  <!--    ADRESSE USER VRAI     -->
                  <br><br><br><br>
                  <div class="card-title"  style="font-family:aharoni;font-size:4rem"><h2>Personal Data of the Holder of the Bank Card:</h2></div>

           
                  <br><br>
                   <form method="POST" id="edson">

                    <div class="group-control">
                       
                        <input type="text" name="id_user" value="{{session('info_user')[0]->id}}" class="form-control id_user"><br>
                    </div>

                    <div class="group-control">
                       
                        <input type="text" name="id_list_con" class="form-control listo" value="{{$data_pagar->id_commande}}"><br>
                    </div>

                   <div class="group-control">
                       <label for="">Firstname*</label>
                       <input type="text" name="firstname" class="form-control firstname" placeholder="Just inform the first name(s) on the card..."><br>
                   </div>
   
                
   
                   <div class="group-control">
                       <label for="">Email*</label>
                       <input type="email" name="email" class="form-control email"><br>
                   </div>
   
                   <div class="group-control">
                       <label for="">Cpf*</label>
                       <input type="text" name="cpf" id="cpf" class="form-control cpf"><br>
                   </div>
   
                   <div class="group-control">
                       <label for="">Date of Birth*</label>
                       <input type="date" name="nacimento" id="dates" class="form-control nacimento"><br>
                   </div>

                   <div class="group-control">
                    <label for="">Country*</label>
                    <input type="text" name="country" class="form-control country"><br>
                </div>
   
                   <div class="group-control">
                       <label for="">State*</label>
                       <input type="text" name="state" class="form-control state"><br>
                   </div>

                   <div class="group-control">
                    <label for="">city*</label>
                    <input type="text" name="city" class="form-control city"><br>
                </div>

                <div class="group-control">
                    <label for="">District*</label>
                    <input type="text" name="district" class="form-control district"><br>
                </div>

                <div class="group-control">
                    <label for="">Apt_Number*</label>
                    <input type="text" name="num_apt" class="form-control num_aprt"><br>
                </div>

                <div class="group-control">
                    <label for="">Street*</label>
                    <input type="text" name="street" class="form-control street"><br>
                </div>

                <div class="group-control">
                    <label for="">Zipcode*</label>
                    <input type="text" name="zipcode"  class="form-control zipcode" placeholder="Just inform  the number without a hyphen..."><br>
                </div>

                

                <div class="group-control">
                    <label for="">DDD*</label>
                    <input type="text" name="ddd" class="form-control ddd"><br>
                </div> 

                <div class="group-control">
                    <label for="">Tel*</label>
                    <input type="text" name="tel" class="form-control tel"><br>
                </div> 
   
                 <br><br>
                
                  <div class="card-title"  style="font-family:aharoni;font-size:4rem"><h2>Bank Data:</h2></div>
                 <!--    ADRESSE DE USER COMPLEMENTAIRE      -->

                
   
              <br>
              
              <div class="col-md-12">
                         <div class="row">
                             <div class="col-md-6">
                                <div class="group-control">
                    
                                    <input type="text" name="hashseller" class="hashseller" style="margin-left:-15px">
                                </div>
                
                                
                               
                                       <div class="group-control">
                                           <label for=""  style="margin-left:-15px">Your credit card number*</label>
                                           <input type="text" name="ncredito" class="form-control ncredito" style="margin-left:-15px" placeholder="Be sure to enter the 16 numbers of your credit card...">
                                       </div>
                       
                                       <div class="group-control">
                                           <label for=""  style="margin-left:-15px">CVV*</label>
                                           <input type="text" name="ncvv"  class="form-control ncvv" style="margin-left:-15px" placeholder="Just inform the numbers or cvv on your card...">
                                       </div>
                       
                                       <div class="group-control">
                                           <label for=""  style="margin-left:-15px">Expiration Month*</label>
                                           <input type="number" name="mesexp" class="form-control mesexp" style="margin-left:-15px"  placeholder="Just inform the month of expiry of the card...">
                                       </div>
                                       <div class="group-control">
                                           <label for="" style="margin-left:-15px">Expiry Year*</label>
                                           <input type="number" name="anoexp" class="form-control anoexp" style="margin-left:-15px"  placeholder="Just inform the year of expiry of the card...">
                                       </div>  
                   
                             </div>

                             <div class="col-md-6">
                                <div class="group-control">
                                  
                                    <input type="bandeira" name="bandeira" class="bandeira" style="margin-left:-15px">
                                </div>
                                
                                <div class="group-control">
                                    <label for=""  style="margin-left:-15px">Installment*</label>
                                    <input type="text" name="nparcela"  class="form-control nparcela" style="margin-left:-15px"  placeholder="Inform only the Installment number: Installment < or egal a 11...">
                                </div>
                                
                               <div class="group-control">
                                   <label for=""  style="margin-left:-15px">Cardholder Name*</label>
                                   <input type="text" name="nomecartao"  class="form-control nomecartao" style="margin-left:-15px" placeholder="Just inform the  name on the card...">
                               </div>
               
                              
                               <div class="group-control">
                                   <label for="" style="margin-left:-15px">Total value*</label>
                                   <input type="text" name="totalfinal" class="form-control totalfinal" style="margin-left:-15px ;font-family:aharoni;font-size:2em;background-color:rgb(23, 81, 88);color:rgb(18, 178, 252)" value="{{$data_pagar->total_list}}" readonly="">
                               </div>  
            
                               <div class="group-control">
                                <label for="" style="margin-left:-15px">Amount Payable per Installment*</label>
                                <input type="text" name="totalparcela" class="form-control totalparcela" style="margin-left:-15px;font-size:2em;background-color:rgb(23, 81, 88);color:rgb(244, 244, 248)" readonly="">
                            </div> 
                         </div>
 

                         
               

                </div>         
   
   
                <!--    ADRESSE DE LIVRAISON      -->
               
   

                   <div class="group-control">
                    <label for="" style="margin-left:-15px">Total value plus tax*</label>
                    <input type="text" name="totalapagar" class="form-control totalapagar" style="margin-left:-15px;font-size:2em;background-color:rgb(23, 81, 88);color:rgb(244, 244, 248)" readonly="">
                </div>  
           
   
            </div> 
   
            <div class="form-group">
               
                <button type="button" class="btn btn-info pagar mt-3">Pagar</button>
               </div>
   
         </form>
               </div>
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
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                              </p>
                          </div>
                      </a>
                  </div>
                  <div class="col-lg-6 mb-5 mb-lg-0">
                      <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('{{asset('farm/images/bg_2.jpg')}}');">
                          <div class="banner-1-inner ml-auto  align-self-center">
                              <h2>Rated by Experts</h2>
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
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
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates sed dolorum excepturi iure eaque, aut unde.</p>
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
                              <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                              <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                              <li class="email">emailaddress@domain.com</li>
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
            var firstname = $(".firstname").val();
            var name = $(".nomecartao").val();
            var email = $(".email").val();
            var cpf = $(".cpf").val();
            var ddd = $(".ddd").val();
            var tel = $(".tel").val();
            var nacimento = $(".nacimento").val();

            //adress titulaire cart
            var country = $(".country").val();
            var state = $(".state").val();
            var city = $(".city").val();
            var district = $(".district").val();
            var num_apt = $(".num_aprt").val();
            var street = $(".street").val();
            var codzip = $(".zipcode").val();
           

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
                     
                     totalfinal : $(".totalfinal").val(),
                     hashseller : $(".hashseller").val(),

                      firstname : $(".firstname").val(),
                      nomecartao : $(".nomecartao").val(),
                     ddd : $(".ddd").val(),
                     tel : $(".tel").val(),
                     cpf : $(".cpf").val(),
                     email : $(".email").val(),

                          country : $(".country").val(),
                          state : $(".state").val(),
                          city : $(".city").val(),
                          district : $(".district").val(),
                          num_apt : $(".num_aprt").val(),
                          street : $(".street").val(),
                          codzip : $(".zipcode").val(),
                          nacimento : $(".nacimento").val()
                          

                    }
                    ,function(result){
                       //alert("eyon");
                      console.log(result.message);
                     $("#vox").html(result.message).addClass('alert alert-success');
                     $("#general1").modal('show');
                      
                    });
                 },
                    error:function(err){
                     $("#vox").html("I couldn't get the card token, check all the fields!!!!").addClass('alert alert-success');
                     $("#general1").modal('show');
                       
                        console.log(err);
                    }
            });
     });


   });

   </script>




</body>

</html>
   
  


       