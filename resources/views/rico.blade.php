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


</head>

<body>

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
                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><a href="shop.html">Store</a></li>
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
                        @foreach ($show_checkout as $position => $item)
                            @if($position == 0)
                            <input type="hidden" value="{{$item->pharmacie->id}}" class="id_pharmacie">
                            <a href="{{url('card_final/finalisa/home')}}" class="icons-btn d-inline-block bag">
                                <span class="icon-shopping-bag"></span>
                                <span class="number count_card">0</span>
                            </a>
                            @endif
                        @endforeach
                        <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0">
                        <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
                        <strong class="text-black">Checkout</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="bg-light rounded p-3">
                            <p class="mb-0">Returning customer? <a href="#" class="d-inline-block">Click here</a> to login</p>
                        </div>
                    </div>
                </div>
                <form methode="POST" id="ped_x">
                <div class="row">
                     
                    <div class="col-md-6 mb-5 mb-md-0">
                        <h2 class="h3 mb-3 text-black">Billing Details</h2>
                        <div class="p-3 p-lg-5 border">
                            <div id="alerterror"></div>
                            @foreach ($show_checkout as $position => $item)
                            @if($position == 0)
                            <input type="hidden" value="{{$item->pharmacie->id}}" class="id_pharmacie" name="id_pharmacie" class="efo">
                           
                            @endif

                        @endforeach
                              
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_fname" placeholder="Your Firstname" name="firstname" value="{{session('info_user')[0]->firstname}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_lname" name="name" value="{{session('info_user')[0]->name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_address" class="text-black">Birth Day<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="c_address" name="nacimento" placeholder="Birth Day" value="{{session('info_user')[0]->nacimento}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_address" class="text-black">Email<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="c_address" name="email" placeholder="Email address" value="{{session('info_user')[0]->email}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_address" class="text-black">CPF<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="c_address" name="cpf" placeholder="your cpf" value="{{session('info_user')[0]->cpf}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_address" class="text-black">State<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_address" name="state" placeholder="State address" value="{{session('info_user')[0]->state}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_address" class="text-black">City<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_address" name="city" placeholder="City address" value="{{session('info_user')[0]->city}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_address" class="text-black">District<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_address" name="district" placeholder="district address" value="{{session('info_user')[0]->district}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_address" class="text-black">Street<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_address" name="street" placeholder="Street address" value="{{session('info_user')[0]->street}}">
                                </div>
                            </div>

                           

                           

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_address" class="text-black">N°APT<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="c_address" name="n_apt" placeholder="Number APT address" value="{{session('info_user')[0]->ddd}}">
                                </div>
                            </div>

                            

                            

                          <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="c_state_country" class="text-black">Country <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_state_country" placeholder="Country address" name="country" value="{{session('info_user')[0]->country}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="c_postal_zip" placeholder="ZipCode Number"  name="codzip" value="{{session('info_user')[0]->codzip}}">
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <div class="col-md-6">
                                    <label for="c_email_address" class="text-black">DDD <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="c_email_address"placeholder="DDD of Your Phone Number" name="ddd" value="{{session('info_user')[0]->ddd}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="c_phone" name="tel" placeholder="Phone Number" value="{{session('info_user')[0]->tel}}">
                                </div>
                            </div>

                          


                   <!-- ADDRESSE COMMANDE DIFFERENTE  -->

                            <div class="form-group">
                                <label for="c_ship_different_address" class="text-black" data-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address">
                  Ship To A Different Address?</label>
                                <div class="collapse" id="ship_different_address">
                                    <div class="py-2">

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="c_diff_address" class="text-black">Receiver's Full Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="c_diff_address" name="receiv_user_com" placeholder="Receiver's Full Name">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="c_diff_fname" class="text-black">Country <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="c_diff_fname" name="receiv_country">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="c_diff_lname" class="text-black">State <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="c_diff_lname" name="receiv_state">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="c_diff_lname" class="text-black">City <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="c_diff_lname" name="receiv_city">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="c_diff_fname" class="text-black">Street <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="c_diff_fname" name="receiv_street">
                                            </div>
                                           
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="c_diff_fname" class="text-black">N_APT <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" id="c_diff_fname" name="receiv_npt">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="c_diff_lname" class="text-black">CPF <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="c_diff_lname" name="receiv_cpf">
                                            </div>
                                        </div>

                                        

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="c_diff_address" class="text-black">District City <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="c_diff_address" name="receiv_district" placeholder="District City">
                                            </div>
                                        </div>

                                        


                                        

                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="c_order_notes" class="text-black">Order Notes</label>
                                <textarea name="commentax" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Accompany the order with a message to the pharmacy manager..."></textarea>
                            </div>
                            
                            </div>
                            </div>
                            <div class="col-md-6">
                            
                            <div class="row mb-5">
                            <div class="col-md-12">
                                <h2 class="h3 mb-3 text-black">Coupon Code</h2>
                                <div class="p-3 p-lg-5 border">
                            
                                    <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
                                    <div class="input-group w-75">
                                        <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-sm px-4" type="button" id="button-addon2">Apply</button>
                                        </div>
                                    </div>
                            
                                </div>
                            </div>
                            </div>
                            
                            <div class="row mb-5">
                            <div class="col-md-12">
                                <h2 class="h3 mb-3 text-black">Your Order</h2>
                                <div class="p-3 p-lg-5 border">
                                    <table class="table site-block-order-table mb-5">
                                        <thead>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </thead>
                                        <tbody>
                                            @php
                                                 $total = 0;
                                            @endphp
                                           @foreach ($show_checkout as $item)
                                          
                                           <tr>
                                            <td>{{$item->medico->nom_pro}} <strong class="mx-2">x</strong> {{$item->qt}}</td>
                            
                                            @if($item->medico->desconte > 0)
                                            <td>${{$item->qt * ($item->medico->prix - $item->medico->prix * $item->medico->desconte/100)}}.00</td>
                                              @else
                                              <td>${{$item->medico->prix * $item->qt}}.00</td>
                                            @endif
                                            
                                        </tr>
                            
                                                 @php
                                                    if($item->medico->desconte > 0){
                                                       
                                                    $total += $item->qt * ($item->medico->prix - ($item->medico->prix * $item->medico->desconte/100));
                            
                                                }else{
                                                    
                                                    $total += $item->qt * ($item->medico->prix - ($item->medico->prix * $item->medico->desconte/100));
                            
                                                }
                                                     
                            
                                                 @endphp
                                        @endforeach
                                        
                                        <tr>
                                           
                                            <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                                           
                                          
                                          
                                           <td class="text-black" class="subtoto">${{$total}}.00</td>
                                         
                                       </tr>
                                        <tr>
                                            <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                                            <td class="text-black font-weight-bold"><strong>${{$total}}.00</strong></td>
                            
                                            <td class="text-black font-weight-bold totax" id="piam">{{$total}}</td>
                            
                                            <input type="hidden" class="recuper_toto" name="total_commande">
                            
                                            
                                        </tr>
                                          
                                        </tbody>
                                    </table>
                            
                                    <div class="border mb-3">
                                        <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>
                            
                                        <div class="collapse" id="collapsebank">
                                            <div class="py-2 px-4">
                                                <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="border mb-3">
                                        <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>
                            
                                        <div class="collapse" id="collapsecheque">
                                            <div class="py-2 px-4">
                                                <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="border mb-5">
                                        <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>
                            
                                        <div class="collapse" id="collapsepaypal">
                                            <div class="py-2 px-4">
                                                <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-lg btn-block" type="button" onclick="add_commande()">Place Order</button>
                                    </div>
                            
                                </div>
                            </div>
                            </div>
                            
                            </div>
               
                
                </div>
            </form>
                <!-- </form> -->
            </div>
        
        </div>


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
    </div>

    <script src="{{asset('farm/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('farm/js/jquery-ui.js')}}"></script>
    <script src="{{asset('farm/js/popper.min.js')}}"></script>
    <script src="{{asset('farm/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('farm/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('farm/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('farm/js/aos.js')}}"></script>

    <script src="{{asset('farm/js/main.js')}}"></script>
    
      
<script>
    function count_card(){
     var xxx = $('.id_pharmacie').val();
     console.log(xxx)
                       $.ajax({
                        type:"get",
                        url:"{{url('count_card')}}/"+ $('.id_pharmacie').val(),
                        success:function(response){
                        console.log(response);
                        $(".count_card").html("");
                            $(".count_card").html(response); 
                       
                        }
                 });
    }
</script>
       <script>
           $(document).ready(function(){
            count_card()
           });
       </script>

       <script>
          function delete_med_cart(id){
           $.get("{{url('delete_med_cart')}}/"+id,{},function(){
            count_card()
           });
          }
       </script>

       <script>
             $(function(){
                 $(".totax").each(function(){
                    var t1 = $(this).html();
                   $(".recuper_toto").val(parseInt(t1));
                 });
             });
       </script>

     <script>
         function add_commande(){
             
              var formdata = new FormData($("#ped_x")[0]);
              $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

              $.ajax({
                  type:"post",
                  url:"{{url('add_commande')}}",
                  data:formdata,
                  processData:false,
                  contentType:false,
                  success:function(response){
                      //console.log(response);
                      
                      if(response.status=="200"){
                        window.location.href="{{url('show_command_uniq')}}/"+ $(".id_pharmacie").val();
                        count_card()
                      }else if(response.status==401){
                        $('#alerterror').text(response.message);
                        $('#alerterror').addClass('alert alert-danger');
                      }
                  }
              })
         }
     </script>

      
      <script  type="text/javascript">
       $(".table").each(function(){
        document.getElementById('piam').style.visibility = 'hidden';

       });
  </script>

</body>

</html>