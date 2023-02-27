<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pullshoes</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
	  <!-- <style>
		html {
		  scroll-behavior: smooth;
		}
		
		#seven {
		  height: 600px;
		}
		
		#three {
		  height: 600px;
		}
		</style> -->
   </head>
   <!-- body -->
   <body class="main-layout">
	<!-- header section start -->
	<div class="header_section">
		{{-- <div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="logo"><a href="#"><img src="images/sneakersnats.png"></a></div>
				</div>
				<div class="col-sm-9">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           <a class="nav-item nav-link" href="index.html">Home</a>
                           <a class="nav-item nav-link" href="detail.html">Man</a>
                           <a class="nav-item nav-link" href="detailw.html">Women</a>
						   <a class="nav-item nav-link" href="lifestyle.html">Livestyle</a>
						   <a class="nav-item nav-link last">‎ </a>
                            <a class="nav-item nav-link" href="cart.html">🛒</a>
                           <a class="nav-item nav-link last" href="logins.html">/</a>
                           <a class="nav-item nav-link last" href="profile.html">👤</a>

                           <!-- <a class="nav-item nav-link last" href="#"><img src="images/shop_icon.png"></a>
                           <a class="nav-item nav-link last" href="contact.html"><img src="images/icons8-user-24.png"></a> -->
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div> --}}

		@extends('layouts.main')
		@section('content')
		<div class="banner_section">
			<div class="container-fluid">
				<section class="slide-wrapper">
    <div class="container-fluid">
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<p class="mens_taital">Men Shoes</p>
						<div class="page_no">0/2</div>
						<p class="mens_taital_2">Men Shoes</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">New Running Shoes </h1>
							<h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
							<p class="lorem_text">Thousands of authentic sneakers, streetwear, luxury, and lifestyle in palm of your 
								hand. What are you waiting for? immerse yourself in the latest trend in fashion.</p>
							<button class="buy_bt">Buy Now</button>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="shoese_img" style="width: 384px;"><img src="images/jordann.png"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<p class="mens_taital">Men Shoes</p>
						<div class="page_no">0/2</div>
						<p class="mens_taital_2">Men Shoes</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">New Running Shoes </h1>
							<h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
							<p class="lorem_text">Thousands of authentic sneakers, streetwear, luxury, and lifestyle in palm of your 
								hand. What are you waiting for? immerse yourself in the latest trend in fashion.</p>
							<button class="buy_bt">Buy Now</button>
							<!-- <button class="more_bt">See More</button> -->
						</div>
					</div>
					<div class="col-sm-3">
						<div class="shoes_img"><img src="images/running-shoes.png"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<p class="mens_taital">Men Shoes</p>
						<div class="page_no">0/2</div>
						<p class="mens_taital_2">Men Shoes</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">New Running Shoes </h1>
							<h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
							<p class="lorem_text">Thousands of authentic sneakers, streetwear, luxury, and lifestyle in palm of your 
								hand. What are you waiting for? immerse yourself in the latest trend in fashion.</p>
							<button class="buy_bt">Buy Now</button>
							<!-- <button class="more_bt">See More</button> -->
						</div>
					</div>
					<div class="col-sm-3">
						<div class="shoes_img"><img src="images/running-shoes.png"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<p class="mens_taital">Men Shoes</p>
						<div class="page_no">0/2</div>
						<p class="mens_taital_2">Men Shoes</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">New Running Shoes </h1>
							<h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
							<p class="lorem_text">Thousands of authentic sneakers, streetwear, luxury, and lifestyle in palm of your 
								hand. What are you waiting for? immerse yourself in the latest trend in fashion.</p>
							<button class="buy_bt">Buy Now</button>
							<!-- <button class="more_bt">See More</button> -->
						</div>
					</div>
					<div class="col-sm-3">
						<div class="shoes_img"><img src="images/running-shoes.png"></div>
					</div>
				</div>
                </div>
            </div>
        </div>
    </div>
</section>			
			</div>
		</div>
	</div>
	
	<div class="more1">
		<a href="#three"><img src="images/icons8-scroll-down-25.png" alt="scdown"></a>
		
	</div>
	<hr class="new4">
	<div>
		<div class="three"><img src="images/Group 12.png" alt="trhee" id="three"></div>
		
	</div>

	<h1 class="htprdc"><strong>Hot Products 🔥</strong></h1>

	<!-- <div>
		<div class="four"><img src="images/Group 3.png" alt="four"></div>
	</div> -->
	
	<!-- header section end -->
<div class="body-kanan">
    <div class="container-card">
      <div class="product-card">
        <div class="product-img">
          <img src="images/Rectangle 11.png" alt="" />
        </div>
        <div class="nama-sepatu pt-4">
          <h4>Jordan 1 OG Bred Patent</h4>
        </div>
        <div class="rating">
          <div class="bintang">
            <img src="images/bintang.png" alt="" />
          </div>
          <div class="like-cart">
            <i class="uil uil-heart"></i>
            <i class="uil uil-shopping-cart"></i>
          </div>
        </div>
        <div class="harga pt-4">
          <h5>Start From</h5>
          <h4>Rp4.325.000</h4>
        </div>
      </div>
      <div class="product-card">
        <div class="product-img">
          <img src="images/Rectangle 13.png" alt="" />
        </div>
        <div class="nama-sepatu pt-4">
          <h4>Jordan 1 Mid Navy Blue</h4>
        </div>
        <div class="rating">
          <div class="bintang">
            <img src="images/bintang.png" alt="" />
          </div>
          <div class="like-cart">
            <i class="uil uil-heart"></i>
            <i class="uil uil-shopping-cart"></i>
          </div>
        </div>
        <div class="harga pt-4">
          <h5>Start From</h5>
          <h4>Rp4.325.000</h4>
        </div>
      </div>
      <div class="product-card">
        <div class="product-img">
          <img src="images/Rectangle 39.png" alt="" />
        </div>
        <div class="nama-sepatu pt-4">
          <h4>Air Jordan 1 Mid Aqua Blue</h4>
        </div>
        <div class="rating">
          <div class="bintang">
            <img src="images/bintang.png" alt="" />
          </div>
          <div class="like-cart">
            <i class="uil uil-heart"></i>
            <i class="uil uil-shopping-cart"></i>
          </div>
        </div>
        <div class="harga pt-4">
          <h5>Start From</h5>
          <h4>Rp4.325.000</h4>
        </div>
      </div>
	</div>

	<!-- <div>
		<div class="five"><img src="images/Group 4.png" alt="five"></div>
	</div> -->
	<!-- new collection section start -->
	<h1 class="htprdct"><strong>Most Popular 🔥</strong></h1>
    
    <div class="body-kanan">
		<div class="container-card">
		  <div class="product-card">
			<div class="product-img">
			  <img src="images/Rectangle 40.png" alt="" />
			</div>
			<div class="nama-sepatu pt-4">
			  <h4>Jordan 1 OG Bred Patent</h4>
			</div>
			<div class="rating">
			  <div class="bintang">
				<img src="images/bintang.png" alt="" />
			  </div>
			  <div class="like-cart">
				<i class="uil uil-heart"></i>
				<i class="uil uil-shopping-cart"></i>
			  </div>
			</div>
			<div class="harga pt-4">
			  <h5>Start From</h5>
			  <h4>Rp4.325.000</h4>
			</div>
		  </div>
		  <div class="product-card">
			<div class="product-img">
			  <img src="images/Rectangle 41.png" alt="" />
			</div>
			<div class="nama-sepatu pt-4">
			  <h4>Jordan 1 Mid Navy Blue</h4>
			</div>
			<div class="rating">
			  <div class="bintang">
				<img src="images/bintang.png" alt="" />
			  </div>
			  <div class="like-cart">
				<i class="uil uil-heart"></i>
				<i class="uil uil-shopping-cart"></i>
			  </div>
			</div>
			<div class="harga pt-4">
			  <h5>Start From</h5>
			  <h4>Rp4.325.000</h4>
			</div>
		  </div>
		  <div class="product-card">
			<div class="product-img">
			  <img src="images/Rectangle 42.png" alt="" />
			</div>
			<div class="nama-sepatu pt-4">
			  <h4>Air Jordan 1 Mid Aqua Blue</h4>
			</div>
			<div class="rating">
			  <div class="bintang">
				<img src="images/bintang.png" alt="" />
			  </div>
			  <div class="like-cart">
				<i class="uil uil-heart"></i>
				<i class="uil uil-shopping-cart"></i>
			  </div>
			</div>
			<div class="harga pt-4">
			  <h5>Start From</h5>
			  <h4>Rp4.325.000</h4>
			</div>
		  </div>
		</div>

		<!-- <div>
			<div class="five"><img src="images/Group 4.png" alt="five"></div>
		</div>  -->
        <!-- <div class="col-md-6">
			<div class="by_banner">
				<div class="by_shop">
					<button class="by_bt"> Shop</button>
				</div>
			</div>
		</div> -->

		<div class="by_ban">
			<img src="images/Group 113.png" alt="Avatar" class="gambar" style="width:100%">
			<div class="dua">
			  <div class="texti">BUY NOW</div>
			</div>
		  </div>
			
		
	<div>
    <div class="collection_section layout_padding">
    	<div class="container">
    		<h1 class="new_text"><strong>New Arrivals Products</strong></h1>
    	    <p class="consectetur_text">New Arrival Products! These are the new product that had just arrived in our store! Buy now!</p>
    	</div>
    </div>
	<!-- new collection section end -->
	<!-- New Arrivals section start -->
    <div class="layout_padding gallery_section">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Best Shoes </p>
    					<div class="shoes_icon"><img src="images/Nike_Shoe__1_-removebg-preview.png"></div>
    					<div class="star_text">
							<h6 class="ratingi">Jordan 1 Mid Mystic </h6>
    						<div class="left_part">
    							<ul>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    					</ul>
    						</div>
    						<!-- <div class="right_part">
    							<div class="shoes_price">Rp <span style="color: #000000;">60</span></div>
    						</div> -->
							<button class="buttoni button12">Buy Now</button>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Best Shoes </p>
    					<div class="shoes_icon"><img src="images/Nike Shoe (2) 1.png" style="width: 300px; padding-top: 100px; padding-bottom: 53px;"></div>
    					<div class="star_text">
							<h6 class="ratingi">Nike Fly.By Mid 3 </h6>
    						<div class="left_part">
								
								
    							<ul>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    					</ul>
    						</div>
    						<!-- <div class="right_part">
    							<div class="shoes_price">$ <span style="color: #000000;">400</span></div>
    						</div> -->
							<button class="buttoni button12">Buy Now</button>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Basketball Shoes </p>
    					<div class="shoes_icon"><img src="images/Nike Shoe (3) 1.png" style="width: 300px; padding-top: 100px; padding-bottom: 53px;"></div>
    					<div class="star_text">
							<h6 class="ratingi">Nike Men's PG 6 </h6>
    						<div class="left_part">
								
    							<ul>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    					</ul>
    						</div>
    						<!-- <div class="right_part">
    							<div class="shoes_price">$ <span style="color: #000000;">50</span></div>
    						</div> -->
							<button class="buttoni button12">Buy Now</button>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Vintage Shoes</p>
    					<div class="shoes_icon"><img src="images/Nike Shoe (4) 1.png"style="width: 300px; padding-top: 100px; padding-bottom: 53px;"></div>
    					<div class="star_text">
							<h6 class="ratingi">Nike Air Force 1 </h6>
    						<div class="left_part">
    							<ul>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    					</ul>
    						</div>
    						<!-- <div class="right_part">
    							<div class="shoes_price">$ <span style="color: #000000;">70</span></div>
    						</div> -->
							<button class="buttoni button12">Buy Now</button>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Casual Shoes</p>
    					<div class="shoes_icon"><img src="images/Nike Shoe (5) 1.png"style="width: 300px; padding-top: 100px; padding-bottom: 53px;"></div>
    					<div class="star_text">
							<h6 class="ratingi">Court Vision Low Black </h6>
    						<div class="left_part">
    							<ul>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    					</ul>
    						</div>
    						<!-- <div class="right_part">
    							<div class="shoes_price">$ <span style="color: #000000;">100</span></div>
    						</div> -->
							<button class="buttoni button12">Buy Now</button>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Casual Shoes</p>
    					<div class="shoes_icon"><img src="images/Nike Shoe (8) 1.png"style="width: 300px; padding-top: 100px; padding-bottom: 53px;"></div>
    					<div class="star_text">
							<h6 class="ratingi">Court Vision Low White </h6>
    						<div class="left_part">
								
    							<ul>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    					</ul>
    						</div>
    						<!-- <div class="right_part">
    							<div class="shoes_price">$ <span style="color: #000000;">90</span></div>
    						</div> -->
							<button class="buttoni button12">Buy Now</button>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="buy_now_bt">
    			<button class="buy_text">See More</button>
    		</div>
    	</div>
    </div>
   	<!-- New Arrivals section end -->
   	<!-- contact section start -->
    <div class="layout_padding contact_section">
    	<div class="container">
    		<h1 class="new_text"><strong>Contact Now</strong></h1>
    	</div>
    	<div class="container-fluid ram">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="email_box">
                    <div class="input_main">
                       <div class="container">
                          <form action="/action_page.php">
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Name" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Phone Numbar" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Email" name="Email">
                            </div>
                            
                            <div class="form-group">
                                <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                            </div>
                          </form>   
                       </div> 
                       <div class="send_btn">
                        <button class="main_bt">Send</button>
                       </div>                   
                    </div>
    		</div>
    			</div>
    			<div class="col-md-6">
    				<div class="shop_banner">
    					<div class="our_shop">
    						<button class="out_shop_bt">Our Shop</button>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
   	<!-- contact section end -->
	<!-- section footer start -->
    <div class="section_footer">
    	<div class="container">
    		<div class="mail_section">
    			<div class="row">
    				<div class="col-sm-6 col-lg-2">
    					<div><a href="#"><img src="images/sneakersnat.png"></a></div>
    				</div>
    				<div class="col-sm-6 col-lg-2">
    					<div class="footer-logo"><img src="images/phone-icon.png"><span class="map_text">(71) 1234567890</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-3">
    					<div class="footer-logo"><img src="images/email-icon.png"><span class="map_text">Demo@gmail.com</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-3">
    					<div class="social_icon">
    						<ul>
    							<li><a href="#"><img src="images/fb-icon.png"></a></li>
    							<li><a href="#"><img src="images/twitter-icon.png"></a></li>
    							<li><a href="#"><img src="images/in-icon.png"></a></li>
    							<li><a href="#"><img src="images/google-icon.png"></a></li>
    						</ul>
    					</div>
    				</div>
    				<div class="col-sm-2"></div>
    			</div>
    	    </div> 
    	    <div class="footer_section_2">
		        <div class="row">
    		        <div class="col-sm-4 col-lg-2">
    		        	<p class="dummy_text"> ‎</p>
    		        </div>
    		        <div class="col-sm-4 col-lg-2">
    		        	<h2 class="shop_text">Address </h2>
    		        	<div class="image-icon"><img src="images/map-icon.png"><span class="pet_text">No 40 Baria Sreet 15/2 NewYork City, NY, United States.</span></div>
    		        </div>
    		        <div class="col-sm-4 col-md-6 col-lg-3">
    				    <h2 class="shop_text">Our Company </h2>
    				    <div class="delivery_text">
    				    	<ul>
    				    		<li>Delivery</li>
    				    		<li>Legal Notice</li>
    				    		<li>About us</li>
    				    		<li>Secure payment</li>
    				    		<li>Contact us</li>
    				    	</ul>
    				    </div>
    		        </div>
    			<div class="col-sm-6 col-lg-3">
    				<h2 class="adderess_text">Products</h2>
    				<div class="delivery_text">
    				    	<ul>
    				    		<li>Prices drop</li>
    				    		<li>New products</li>
    				    		<li>Best sales</li>
    				    		<li>Contact us</li>
    				    		<li>Sitemap</li>
    				    	</ul>
    				    </div>
    			</div>
    			<div class="col-sm-6 col-lg-2">
    				<h2 class="adderess_text">Newsletter</h2>
    				<div class="form-group">
                        <input type="text" class="enter_email" placeholder="Enter Your email" name="Name">
                    </div>
                    <button class="subscribr_bt">Subscribe</button>
    			</div>
    			</div>
    	        </div> 
	        </div>
    	</div>
    </div>
	<!-- section footer end -->
	<div class="copyright">2019 All Rights Reserved. <a href="https://html.design">PT TANGGUH MULIA</a></div>


      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         
$('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
      </script> 
   </body>
</html>
@endsection