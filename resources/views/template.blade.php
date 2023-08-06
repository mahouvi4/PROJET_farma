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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')
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
                            <a href="{{url('show_medico_pharma/'.request()->session()->get('idemail'))}}" class="js-logo-clone">Pharma</a>
                        </div>
                    </div>
                    <div class="main-nav d-none d-lg-block">
                        <nav class="site-navigation text-right text-md-center" role="navigation">
                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                <li class="has-children">
                                  
                                </li>
                                <li><a href="{{url('ma_commande/oljsg/'.request()->session()->get('key'))}}">My Order</a></li>
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

           

            @yield('content')
     

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
                    alert('okkk');
                }

            });
        }
     </script>

      <script>
            function count_card(){
                $.ajax({
                    type:"get",
                    url:"{{url('count_card')}}",
                    success:function(response){
                      // console.log(response);
                      $(".count_card").html("");
                        $(".count_card").html(response); 
                    }
                });
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

   @yield('scripts')
</body>

</html>