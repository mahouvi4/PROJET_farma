@extends('template')

@section('css')
    

 
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

                <div class="col-sm-6 col-lg-4 text-center item mb-4">
                    @if ($item->desconte > 0)
                        <span class="tag">{{$item->desconte}}%</span>
                    @else
                    <span class="tag">Sale</span>
                        
                    @endif
                    <a href="{{url('description_medico/'.$item->id.''.'XX'.$item->pharmacie->email)}}"> <img src="{{asset('farm/images/product_01.png')}}" alt="Image"></a>
                    <h3 class="text-dark"><a href="shop-single.html">{{$item->nom_pro}}</a></h3>
                     @if ($item->desconte > 0)
                     <p class="price"><del>${{$item->prix}}.00</del> &mdash; ${{$item->prix - ($item->prix * $item->desconte/100)}}.00</p>
                        @else
                        <p class="price"> ${{$item->prix}}.00</p>

                     @endif
                </div>
                @endforeach
            <div class="col-sm-6 col-lg-4 text-center item mb-4">
                <a href="shop-single.html"> <img src="{{asset('farm/images/product_02.png')}}" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.html">Chanca Piedra</a></h3>
                <p class="price">$70.00</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center item mb-4">
                <a href="shop-single.html"> <img src="{{asset('farm/images/product_03.png')}}" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
                <p class="price">$120.00</p>
            </div>

            <div class="col-sm-6 col-lg-4 text-center item mb-4">

                <a href="shop-single.html"> <img src="{{asset('farm/images/product_04.png')}}" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.html">Cetyl Pure</a></h3>
                <p class="price"><del>45.00</del> &mdash; $20.00</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center item mb-4">
                <a href="shop-single.html"> <img src="{{asset('farm/images/product_05.png')}}" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.html">CLA Core</a></h3>
                <p class="price">$38.00</p>
            </div>
            <div class="col-sm-6 col-lg-4 text-center item mb-4">
                <span class="tag">Sale</span>
                <a href="shop-single.html"> <img src="{{asset('farm/images/product_06.png')}}" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.html">Poo Pourri</a></h3>
                <p class="price"><del>$89</del> &mdash; $38.00</p>
            </div>
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
                     @php
                        // $mail = $pharma->email;
                     @endphp
                     <div class="text-center item mb-4">
                        <a href="{{url('description_medico/'.$item->id.'XX'.$item->pharmacie->email)}}"> <img src="{{asset('farm/images/product_03.png')}}" alt="Image"></a>
                        <h3 class="text-dark"><a href="shop-single.html">{{$item->Reference}}</a></h3>
                          @if ($item->desconte > 0)
                          <p class="price"><del>${{$item->prix}}.00</del> &mdash; ${{$item->prix - ($item->prix * $item->desconte/100)}}.00</p>
                              @else
                              <p class="price">${{$item->prix}}.00</p>

                          @endif
                    </div>
                     @endforeach

                    <div class="text-center item mb-4">
                        <a href="shop-single.html"> <img src="{{asset('farm/images/product_01.png')}}" alt="Image"></a>
                        <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
                        <p class="price">$120.00</p>
                    </div>

                    <div class="text-center item mb-4">
                        <a href="shop-single.html"> <img src="{{asset('farm/images/product_02.png')}}" alt="Image"></a>
                        <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
                        <p class="price">$120.00</p>
                    </div>

                    <div class="text-center item mb-4">
                        <a href="shop-single.html"> <img src="{{asset('farm/images/product_04.png')}}" alt="Image"></a>
                        <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
                        <p class="price">$120.00</p>
                    </div>

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
                <div class="nonloop-block-3 no-direction owl-carousel">

                    <div class="testimony">
                        <blockquote>
                            <img src="{{asset('farm/images/person_1.jpg')}}" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                            <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit
                                quaerat unde.&rdquo;</p>
                        </blockquote>

                        <p>&mdash; Kelly Holmes</p>
                    </div>

                    <div class="testimony">
                        <blockquote>
                            <img src="{{asset('farm/images/person_2.jpg')}}" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                            <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit
                                quaerat unde.&rdquo;
                            </p>
                        </blockquote>

                        <p>&mdash; Rebecca Morando</p>
                    </div>

                    <div class="testimony">
                        <blockquote>
                            <img src="{{asset('farm/images/person_3.jpg')}}" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                            <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit
                                quaerat unde.&rdquo;
                            </p>
                        </blockquote>

                        <p>&mdash; Lucas Gallone</p>
                    </div>

                    <div class="testimony">
                        <blockquote>
                            <img src="{{asset('farm/images/person_4.jpg')}}" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                            <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit
                                quaerat unde.&rdquo;
                            </p>
                        </blockquote>

                        <p>&mdash; Andrew Neel</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

