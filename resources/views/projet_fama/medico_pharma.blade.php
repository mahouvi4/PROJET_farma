<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pharma-Plat Systems &mdash; Systems</title>
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
   <style>
       .dova{
           height:80px;
       }
   </style>
</head>

<body>
    
    <div class="site-wrap">

        <div class="site-navbar py-2">

            <div class="search-wrap">
                <div class="container">
                    <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
                        <div class="form-group">
                            <input type="text" id="tri" class="form-control" placeholder="Search keyword and hit enter...">
                            <br><br>
                           <ul class="list-group" id="charge" style="display:block"></ul>

                        </div>

                </div>

            </div>

            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <div class="site-logo">
                            <a href="{{'/'}}" class="js-logo-clone">Pharma</a>
                        </div>
                    </div>
                    <div class="main-nav d-none d-lg-block">
                        <nav class="site-navigation text-right text-md-center" role="navigation">
                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                <li class="active"><a href="#">Home</a></li>
                                
                                <li class="has-children">
                                  
                                    <li><a href="{{url('ma_commande/oljsg/'.request()->session()->get('key'))}}">My Order</a></li>
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
                    
                        <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
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

           
    <input type="hidden" value="{{$pharma->id}}" class="id_pharmacie">
       
            
         
          <!-- inter_pharma     -->
              
    
<div class="site-blocks-cover" style="background-image: url('{{asset('farm/images/hero_1.jpg')}}');">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
                <div class="site-block-cover-content text-center">
                    <h2 class="sub-title">Effective Medicine, New Medicine Everyday</h2>
                    <h1>Welcome To {{$pharma->name_pharma}}</h1>
                    <p>
                        <a href="#" class="btn btn-primary px-5 py-3">Shop Now</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row align-items-stretch section-overlap">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="banner-wrap bg-primary h-100">
                    <a href="#" class="h-100">
                        <h5>Free <br> Shipping</h5>
                        <p>
                            Amet sit amet dolor
                            <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="banner-wrap h-100">
                    <a href="#" class="h-100">
                        <h5>Season <br> Sale 50% Off</h5>
                        <p>
                            Amet sit amet dolor
                            <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="banner-wrap bg-warning h-100">
                    <a href="#" class="h-100">
                        <h5>Buy <br> A Gift Card</h5>
                        <p>
                            Amet sit amet dolor
                            <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                        </p>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-12">
                <h2 class="text-uppercase">Products</h2>
            </div>
        </div>

        <div class="row">
         

                @foreach ($medico_pharma as $item)
                  @if($item->statut == 1)
                <div class="col-sm-6 col-lg-4 text-center item mb-4">
                    @if ($item->desconte > 0)
                        <span class="tag">{{$item->desconte}}%</span>
                    @else
                    <span class="tag">Sale</span>
                        
                    @endif
                    <a href="{{url('description_medico/'.$item->id.''.'XX'.$item->pharmacie->email)}}"> <img src="{{asset('medico/'.$item->photo)}}" alt="Image" height="350px" width="250px"></a>
                    <h3 class="text-dark"><a href="shop-single.html">{{$item->nom_pro}}</a></h3>
                     @if ($item->desconte > 0)
                     <p class="price"><del>${{$item->prix}}.00</del> &mdash; ${{$item->prix - ($item->prix * $item->desconte/100)}}.00</p>
                        @else
                        <p class="price"> ${{$item->prix}}.00</p>

                     @endif
                </div>
                @endif
                @endforeach
           

        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
            </div>
        </div>
    </div>
</div>


<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-12">
                <h2 class="text-uppercase">All Products</h2>
            </div>
        </div>
        <div class="row">
          
            <div class="col-md-12 block-3 products-wrap">
                <div class="nonloop-block-3 owl-carousel">
                        
                     @foreach ($medico_pharma as $item)
                     @if($item->statut == 1)
                     @php
                        // $mail = $pharma->email;
                     @endphp
                     <div class="text-center item mb-4">
                        <a href="{{url('description_medico/'.$item->id.'XX'.$item->pharmacie->email)}}"> <img src="{{asset('medico/'.$item->photo)}}" alt="Image" height="350px" width="170px"></a>
                        <h3 class="text-dark"><a href="shop-single.html">{{$item->Reference}}</a></h3>
                          @if ($item->desconte > 0)
                          <p class="price"><del>${{$item->prix}}.00</del> &mdash; ${{$item->prix - ($item->prix * $item->desconte/100)}}.00</p>
                              @else
                              <p class="price">${{$item->prix}}.00</p>

                          @endif
                    </div>
                    @endif
                     @endforeach

                   

                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-12">
                <h2 class="text-uppercase">Testimonials</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 block-3 products-wrap">
                <div class="mro no-direction owl-carousel">
            @if(isset($commentaire) && count($commentaire))
            @foreach($commentaire as $d)
            @if($d->statut == 1)
            <div class="testimony">
          
             <blockquote>
             
                 <img src="{{asset('user/'.$d->photo)}}" alt="Image" class="img-fluid w-25 mb-4 rounded-circle dova">
                 <p>&ldquo;
                     {{$d->messages}}
                 &rdquo;</p>
                
             </blockquote>

             <p>&mdash; {{$d->name}}</p>
            
         </div>
         

         @endif
            @endforeach
            @endif
        </div>
    </div>

            
                
                   
                    
                   
                  
                  


                
            
            

        </div>
    </div>
</div>

 
          <!-- fin domaine inter_pharma -->

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
            <div class="container-fluid">
            
                <div class="row">
                    
                        <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
                        <div class="block-7">
                            <h3 class="footer-heading mb-4">Share Your Opinion</h3>
                          <form>
                            <div id="notax"></div>
                            <div class="form-group">
                              
                                <input type="hidden" name="id_u"  value="{{session('info_user')[0]->id}}" class="form-control" id="id_u"/>
                            </div>
                            <div class="form-group">
                               
                                <input type="hidden" name="id_f" value="{{$pharma->id}}" class="form-control" id="id_f"/>
                            </div>
                            <div class="form-group">
                               
                                <textarea class="form-control" name="meganx"  cols="15px" rows="3px" id="messages"></textarea>
                            </div><br>
                            <div class="form-group">
                               <button class="btn btn-primary" type="button" id="valider">SEND</button>
                            
                            </div>
                          </form>
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
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

<input type="hidden" id="idfama" value="{{$pharma->email}}">
    <script src="{{asset('farm/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('farm/js/jquery-ui.js')}}"></script>
    <script src="{{asset('farm/js/popper.min.js')}}"></script>
    <script src="{{asset('farm/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('farm/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('farm/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('farm/js/aos.js')}}"></script>
    <script src="{{asset('farm/js/main.js')}}"></script>

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
                    count_card()
                }

            });
        }
     </script>
<script>
    $(document).on('keyup','#tri',function(){
        var mot=$(this).val();
        var idfar=$('#idfama').val();
        var id_pharmacie = $('.id_pharmacie').val();
        //console.log(id_pharmacie);
     if(mot!=""){
        $.post("{{route('buscar_remedio')}}",{data:mot,id_pharmacie:id_pharmacie},(response)=>{
        var _html="";
        response.forEach(element=>{
            _html+=`<li class="list-group-item"><a href="{{url('description_medico/${element.id}${idfar}')}}">${element.nom_pro}</a></li>`;
        })
        $('#charge').html(_html);
    })
     }
    })

</script>
      
<script>
    function count_card(){
     var xxx = $('.id_pharmacie').val();
    // console.log(xxx)
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
         $(document).on('click','#valider',function(){
            $.post("{{route('add_coment2')}}",{id_u:$('#id_u').val(),id_f:$('#id_f').val(),meganx:$('#messages').val()},(result)=>{
               if(result.status==200){
                $('#notax').text(result.message);
                $('#notax').addClass('alert alert-success');

               }
            })
         })
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



