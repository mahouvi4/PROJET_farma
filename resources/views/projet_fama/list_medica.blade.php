<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pharma &mdash; Colorlib </title>
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
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone">Pharma</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
               
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
            
              </ul>
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
            <strong class="text-black"> Drug List</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">

      <div class="container">
         <div class="floxix"></div>
        <div class="row mb-5">
        
          <form class="col-md-12" method="post">
         
          <a href="{{url('admin/list_phamacie')}}"><button type="button" class="btn btn-primary btn-md btn-block"> Pharmacy List♣</button></a><br> 

            <div class="site-blocks-table">
              <table class="table table-bordered">
              @include('mood')
                <thead>
                  
                  <tr>
                    
                  <th class="product-name">ID</th>
                  <th class="product-total">Pharmacy</th>
                    <th class="product-name">Picture</th>
                    <th class="product-total">Name</th>
                    <th class="product-name">Reference</th>
                    <th class="product-total">Description</th>
                    <th class="product-total">Price</th>
                    <th class="product-total">%Price</th>
                    <th class="product-total">Desconte</th>
                    <th class="product-total">Weight</th>
                    <th class="product-total">Stock</th>
                    <th class="product-total">Date Fabrication</th>
                    <th class="product-total">Date Expiration</th>
                    <th class="product-total">Status</th>
                    <th class="product-total">ACTION</th>
           
                  </tr>
                </thead>
                <tbody>
                  
                    @foreach ($liste_medico as $item)
                        
                   
                  <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->pharmacie->name_pharma}}</td>
                  <td class="product-thumbnail">
                           <img src="{{asset('medico/'.$item->photo)}}" alt="" height="82px" width="88px" style="border-radius:72px">
                          </td>
                  
                   <td>{{$item->nom_pro}}</td>
                   <td>{{$item->Reference}}</td>
                   <td>{{$item->desciption}}</td>
                   <td>${{$item->prix}}</td>
                   <td>${{$item->prix_desconte}}</td>
                   <td>{{$item->desconte}}%</td>
                   <td>{{$item->kilo}}mg</td>
                   <td>{{$item->stock}}</td>
                   <td>{{$item->date_fabriq}}</td>
                   <td>{{$item->date_expir}}</td>
                   
                   


                              @if($item->statut == 1)
                              <td style="color:green">Readable</td>
                              @else
                              <td style="color:red"> Unreadable</td>
                            
                              @endif
                 
                   <td>

                  <a href="{{asset('admin/edit_all_medic/'.$item->id)}}" class="btn btn-warning height-auto btn-sm mt-2" style="width:100%">Edit</a>
                  <a href="#" class="btn btn-danger height-auto btn-sm mt-2" onclick="del_med_all({{$item->id}})" style="width:100%">Delete</a>

                
                   </td>
       
                
                    @endforeach
                </tbody>
              </table>
            </div>
          </form>
        </div>
    
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <a href="{{url('destroy_session_pharmacie/eco/polis')}}"><button class="btn btn-primary btn-md btn-block">Sign Out</button></a>
              </div>
              <div class="col-md-6">
              </div>
            </div>
           
          </div>

       
          
          
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <a href="#"><button class="btn btn-primary btn-md btn-block">{{$liste_medico->links()}}</button></a>
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
              function del_med_all(id){
                alert('Are you sure deleted this Drug ??');
                $.get("{{url('admin/delet_med_all')}}/"+id, {}, function(){
                 alert('Are you sure deleted this Drug ??');
                 $('.floxix').html('drug deleted successfull !!').addClass('alert alert-danger');
               });
              }
           </script>

</body>

</html>
