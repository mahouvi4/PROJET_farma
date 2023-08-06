<!DOCTYPE html>
<!-- saved from url=(0033)https://technext.github.io/elate/ -->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" style=""><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pharma-Plat &mdash; Systems</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO">
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive">
	<meta name="author" content="FREEHTML5.CO">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
	 integrity="sha512-g06pohSHYbSOHKq8tdDGXckE6C23Yt30xlTFDhrO0OcO/bNO2MWXb63oqU/Y23GDMNOon100eGHxZPBnT4QgMw=="
	  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="">
	<meta property="og:image" content="">
	<meta property="og:url" content="">
	<meta property="og:site_name" content="">
	<meta property="og:description" content="">
	<meta name="twitter:title" content="">
	<meta name="twitter:image" content="">
	<meta name="twitter:url" content="">
	<meta name="twitter:card" content="">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="https://technext.github.io/elate/favicon.ico">

	<link href="{{asset('pub/./Elate/css')}}" rel="stylesheet" type="text/css">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('pub/./Elate/animate.css')}}">
	<!-- Icomoon Icon Fonts-->

	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="{{asset('pub/./Elate/simple-line-icons.css')}}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('pub/./Elate/magnific-popup.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('pub/./Elate/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
     integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- 
	Default Theme Style 
	You can change the style.css (default color purple) to one of these styles
	
	1. pink.css
	2. blue.css
	3. turquoise.css
	4. orange.css
	5. lightblue.css
	6. brown.css
	7. green.css

	-->
	<link rel="stylesheet" href="{{asset('pub/./Elate/style.css')}}">

	<!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
	<link rel="stylesheet" id="theme-switch" href="{{asset('pub/./Elate/style.css')}}">
	<!-- End demo purposes only -->


	<style>
	/* For demo purpose only */
	
	/* For Demo Purposes Only ( You can delete this anytime :-) */
	#colour-variations {
		padding: 10px;
		-webkit-transition: 0.5s;
	  	-o-transition: 0.5s;
	  	transition: 0.5s;
		width: 140px;
		position: fixed;
		left: 0;
		top: 100px;
		z-index: 999999;
		background: #fff;
		/*border-radius: 4px;*/
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
		-webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
	}
	#colour-variations.sleep {
		margin-left: -140px;
	}
	#colour-variations h3 {
		text-align: center;;
		font-size: 11px;
		letter-spacing: 2px;
		text-transform: uppercase;
		color: #777;
		margin: 0 0 10px 0;
		padding: 0;;
	}
	#colour-variations ul,
	#colour-variations ul li {
		padding: 0;
		margin: 0;
	}
	#colour-variations li {
		list-style: none;
		display: block;
		margin-bottom: 5px!important;
		float: left;
		width: 100%;
	}
	#colour-variations li a {
		width: 100%;
		position: relative;
		display: block;
		overflow: hidden;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		-ms-border-radius: 4px;
		border-radius: 4px;
		-webkit-transition: 0.4s;
		-o-transition: 0.4s;
		transition: 0.4s;
	}
	#colour-variations li a:hover {
	  	opacity: .9;
	}
	#colour-variations li a > span {
		width: 33.33%;
		height: 20px;
		float: left;
		display: -moz-inline-stack;
		display: inline-block;
		zoom: 1;
		*display: inline;
	}
	

	.option-toggle {
		position: absolute;
		right: 0;
		top: 0;
		margin-top: 5px;
		margin-right: -30px;
		width: 30px;
		height: 30px;
		background: #f64662;
		text-align: center;
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
		color:  /* #fff;*/
		cursor: pointer;
		-webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
	}
	.option-toggle i {
		top: 2px;
		position: relative;
	}
	.option-toggle:hover, .option-toggle:focus, .option-toggle:active {
		color:  rgb(8, 8, 8);
		text-decoration: none;
		outline: none;
	}

    .ego{
        background-color: rgb(75, 75, 75);
       
        font-size:1.7rem;
        color:#fff;
       
        
    }

	.ul .i{
		background-color: rgb(75, 75, 75);
       font-family:aharoni;
	}
.fa{
	
}

 a{
	text-decoration:none;

  }

	</style>
	<!-- End demo purposes only -->

    
	<!-- Modernizr JS -->
	<script src="{{asset('pub/./Elate/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<body>
	<header role="banner" id="fh5co-header" class="">
			<div class="container">
				<!-- <div class="row"> -->
			    <nav class="navbar navbar-default">
		        <div class="navbar-header">
		        	<!-- Mobile Toggle Menu Button -->
					<a href="https://technext.github.io/elate/#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<a class="navbar-brand" href="{{url('/')}}">Pharma-Plat</a> 

		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right">
                  <li class=""><a href="https://technext.github.io/elate/#" data-nav-section="work"><span>About Us</span></a></li>

		            <li class=""><a href="https://technext.github.io/elate/#" data-nav-section="testimonials"><span>Testimonials</span></a></li>
		            <li class=""><a href="https://technext.github.io/elate/#" data-nav-section="contact"><span>Contact</span></a></li>
                    <li class=""><a href="{{url('/')}}" id="houe"><span>Sign In</span></a></li>

				</ul>
		        </div>
			    </nav>
				
				
		  </div>
	</header>
	
	<section id="fh5co-home" data-section="home" style=" background-position: 0px 0px;height:250px" data-stellar-background-ratio="0.5" class="animated">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h1 class="to-animate fadeInUp animated">Do Only What You Love.</h1>
							<h2 class="to-animate fadeInUp animated">Elate is a Free HTML5 Bootstrap Template Released Under <a href="http://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons 3.0</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slant"></div>
	
	</section>

    <div class="container">
            <div class="row">
                <form action="">
                <div class="col-12">
               
                </div>

                </form>
                    </div>

       </div>

	

	<section id="fh5co-work" data-section="work" class="animated">
	

		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate fadeInUp animated">WELCOME TO PHARMA-PLAT</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate fadeInUp animated">
							<h3>If there's a bustle in your hedgerow. Don't be alarmed now. It's just a spring clean for the May queen.</h3>
						</div>
					</div>
				</div>
				<div class="row row-bottom-padded-sm" style="margin-left:-7px" id="section11">
      
			</div>
           
			<div class="col-md-12">
					   <div class="row">
                       <div class="card" style="background-color:#fff;padding:15px 15px;border-radius:10px">
                           <div class="card-body">
                            <strong style="font-size:3em;color:#00CED1;font-family:cambria">Who are we?</strong><br>
                                <p style="color:#000">Les DEU ont fait l’objet d’études ayant trait aux thématiques développées, aux liens avec les médias, l’opinion ou la personnalité du président.
                                 Notre angle d’approche est volontairement plus abstrait et plus fondamental. Il est plus abstrait car 
                                 ce ne sont pas les thèmes qui retiennent notre attention mais la manière dont on choisit de représenter
                                  de manière structurée certains de leurs éléments constitutifs. Il est abstrait aussi car le jalonnement
                                   numérique ne dit pas grand-chose des objets qu’il ordonne, si ce n’est qu’en raison de la linéarité de
                                    la chaîne parlée, il construit une hiérarchisation du dire qu’on retrouve <a href="{{url('/')}}" style="font-size:0.8em;color:#00CED1;font-family:cambria"> Click here to access our Platform</a></p>
                           </div>
                       </div>	
                       </div>			
				</div>
				
		</div>
			
		
	</section>
	<section id="fh5co-testimonials" data-section="testimonials" class="animated">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate fadeInUp animated">Testimonials</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate fadeInUp animated">
							<h3>Yes, there are two paths you can go by but in the long run, There's still time to change the road you're on!</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				@if(isset($data) && count($data)>0)
				@foreach($data as $d)
				
				<div class="col-md-4">
				
					@if($d->statut == 1)
					<div class="box-testimony">
						<blockquote class="to-animate-2 fadeInDown animated" style="height:300px;width:357px">
							<p class="d-flex justify-content-start"> {{$d->messages}}</p>
						</blockquote>
						<div class="author to-animate fadeInUp animated">
							<figure><img src="{{asset('images/font_pharmacie2.jpg')}}" alt="{{$d->imageuser->name}}" height="62px"></figure>
							<p>
								{{$d->imageuser->name}}, Senior UI <a href="https://technext.github.io/elate/#">FREEHTML5.co</a> <span class="subtext">Creative Director</span>
							</p>
						</div>
					</div>
					@endif
				
				</div>
				
				@endforeach
				@endif
				
			</div>
		</div>
	</section>



	
	
	<section id="fh5co-counters"  data-stellar-background-ratio="0.5" class="animated">
		<div class="fh5co-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center to-animate fadeInUp animated">
					<h2>Fun Facts</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate fadeInUp animated">
						
						<i class="fas fa-house-user" style="font-size:50px; color:rgb(21, 168, 226)"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="89" data-speed="5000" data-refresh-interval="50">89%</span>
						<span class="fh5co-counter-label">Finished projects</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate fadeInUp animated">
						<i class="fa-solid fa-right-left" style="font-size:50px; color:rgb(245, 28, 136)"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="2343409" data-speed="5000" data-refresh-interval="50">2343409</span>
						<span class="fh5co-counter-label">Line of codes</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate fadeInUp animated">
						<i class="fas fa-trophy" style="font-size:50px; color:yellow"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="1302" data-speed="5000" data-refresh-interval="50">1302</span>
						<span class="fh5co-counter-label">Cup of coffees</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate fadeInUp animated">
						<i class="far fa-smile-beam" style="font-size:50px; color:rgb(17, 238, 227)"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="52" data-speed="5000" data-refresh-interval="50">52</span>
						<span class="fh5co-counter-label">Happy clients</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="fh5co-contact" data-section="contact" class="animated">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate fadeInUp animated">Get In Touch</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate fadeInUp animated">
							<h3>Hello? Hello? Hello? Is there anybody in there? Just nod if you can hear me. Is there anyone at home? </h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-6 to-animate fadeInUp animated">
					<h3>Contact Info</h3>
					<ul class="fh5co-contact-info">
						<li class="fh5co-contact-address ">
							<i class="fas fa-map-marker-alt"></i>
							Travessa Raiumundo Maciel Pereira 19 , <br>Nossa Senhora de Fatima 62900-000, Russas-Ceara Brasil
						</li>
						<li><i class="fas fa-phone"></i> +55 (85) 99677-6852</li>
						<li><i class="fas fa-phone"></i> +55 (84) 99808-7249</li>
						<li><i class="fas fa-envelope-open-text"></i></i>manuagondanou229@gmail.com</li>
						<li><i class="fas fa-envelope-open-text"></i></i>ambroise200agossou@gmail.com</li>
						<li><i class="fas fa-at"></i> <a href="https://technext.github.io/elate/#">freehtml5.co</a></li>
					</ul>
				</div>

			
			</div>
		   
			</section>
	
	
	<footer id="footer" role="contentinfo">
		<a href="url('//technext.github.io/elate/#')" class="gotop js-gotop">To<i class="icon-arrow-up2">Top</i></a>
		<div class="container">
			<div class="">
				<div class="col-md-12 text-center">
					<p>© Elate Free HTML5. All Rights Reserved. <br>Created by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Images: <a href="http://pexels.com/" target="_blank">Pexels</a>, <a href="http://plmd.me/" target="_blank">plmd.me</a></p>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="social social-circle">
						<i class="fab fa-facebook"></i>
						<i class="fab fa-instagram-square"></i>
						<i class="fab fa-twitter-square"></i>
					</ul>
				</div>
			</div>
		
		</div>

	</footer>
	
	

	
	<!-- jQuery -->
	<script src="{{asset('pub/./Elate/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('pub/./Elate/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('pub/./Elate/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('pub/./Elate/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('pub/./Elate/jquery.stellar.min.js')}}"></script>
	<!-- Counter -->
	<script src="{{asset('pub/./Elate/jquery.countTo.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('pub/./Elate/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('pub/./Elate/magnific-popup-options.js')}}"></script>
	

	<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
	<script src="{{asset('pub/./Elate/jquery.style.switcher.js')}}"></script>
	<script>
		$(function(){
			$('#colour-variations ul').styleSwitcher({
				defaultThemeId: 'theme-switch',
				hasPreview: false,
				cookie: {
		          	expires: 30,
		          	isManagingLoad: true
		      	}
			});	
			$('.option-toggle').click(function() {
				$('#colour-variations').toggleClass('sleep');
			});
			
		});
	</script>
	<!-- End demo purposes only -->

	<!-- Main JS (Do not remove) -->
	<script src="{{asset('pub/./Elate/main.js')}}"></script>
       
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
 integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <script>
         $(function(){
            $("#houe").on("click",function(){
                window.location.href="{{url('/')}}";
            })
         })
     </script>

</body>
</html>