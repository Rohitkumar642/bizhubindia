<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Bizhub India</title>
      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/icomoon.css" rel="stylesheet">
      <link href="css/fontawesome-all.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
      <link href="css/owl.carousel.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
      <!-- Custom CSS -->
      <link href="css/aos.css" rel="stylesheet" type="text/css">
      <link href="css/global.css" rel="stylesheet" type="text/css">
      <link href="css/header.css" rel="stylesheet" type="text/css">
      <link href="css/bizindia.css" rel="stylesheet" type="text/css">
      <link href="css/responsive.css" rel="stylesheet" type="text/css">
      <style>
         .dropdown:hover .dropdown-menu {display: block;}
         .header-navigation {z-index:9;}
      </style>
   </head>
   <body>
      <header class="header" style="">
         <!-- Main Header -->
         <div class="main_header">
            <div class="container">
               <div class="main_header_inner">
                  <div class="main_header_logo">
                     <figure>
                       
                     </figure>
                  </div>
                  <div class="main_header_menu menu_area">
                     <!--Mobile Navigation Toggler-->
                     <div class="mobile-nav-toggler">
                        <div class="menu-bar">
                           <i class="fas fa-bars"></i>
                        </div>
                     </div>
                     <nav class="main-menu">
                        <div class="collapse navbar-collapse show" id="navbarSupportedContent">
                           <ul class="navigation">
                              <li id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-21">
                                 <a title="Home" href="{{route('default')}}" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Home</a>
                              </li>
                              <li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998"><a title="About Us" href="{{route('about')}}" class="hvr-underline-from-left1" data-scroll="" data-options="easing: easeOutQuart">About Us</a></li>
                              <li id="menu-item-30" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-30">
                                 <a title="Services" href="{{route('services')}}" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Services</a>
                              </li>
                              <li id="menu-item-32" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-32 dropdown">
                                 <a title="Pages" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Pages</a>
                                 <ul role="menu" class="submenu">
                                    <li id="menu-item-1142" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1142"><a title="Success Stories" href="#">Success Stories</a></li>
                                    <li id="menu-item-1523" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1523"><a title="Products" href="#">Products</a></li>
                                 </ul>
                              </li>
                              <li id="menu-item-1399" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1399"><a title="Contact Us" href="{{ route('contact') }}" class="hvr-underline-from-left1" data-scroll="" data-options="easing: easeOutQuart">Contact Us</a></li>
                              <li id="menu-item-32" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-32 dropdown">
                                 <a title="Login" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Login</a>
                                 <ul role="menu" class="submenu">
                                    <li id="menu-item-1142" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1142"><a title="Login" href="{{ route('login') }}">Login</a></li>
                                    <li id="menu-item-1523" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1523"><a title="SignUp" href="{{ route('signup') }}">Signup</a></li>
                                    <li id="menu-item-1523" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1523"><a title="Admin Login" href="{{ route('admin.login') }}">Admin</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Main Header -->
         <!-- Sticky Header-->
         <div class="sticky_header ">
            <div class="container">
               <div class="main_header_inner">
                  <div class="main_header_logo">
                     <figure>
                        <a href="#" title="Bizhub India"><img src="img/bizhub-india-logo.png" alt="logo" style=""></a>                        
                     </figure>
                  </div>
                  <div class="main_header_menu menu_area">
                     <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Sticky Header-->
         <!-- Mobile Menu  -->
         <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn">X</div>
            <nav class="menu-box">
               <div class="nav-logo"><a href="#" title="Bizhub India"><img src="img/bizhub-india-logo.png" alt="logo" style=""></a></div>
               <div class="menu-outer">
                  <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
               </div>
            </nav>
         </div>
         <!-- End Mobile Menu -->    
      </header>
      <!-- Content -->
      <section class="banner_style_two">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-12">
                  <div class="banner_content aos-init aos-animate" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                     <h1 class="te-title wow fadeInUp animated">Powering Smart <br>B2B Transactions</h1>
                     <p class="te-text wow fadeInUp animated">Connect with verified vendors, secure deals, and streamline business operations with our trusted B2B marketplace.</p>
                     <div class="subscribe-inner wow fadeInUp animated">
                        <div class="subscribe-form">
                           <script>
                              (function() {
                              	window.mc4wp = window.mc4wp || {
                              		listeners: [],
                              		forms: {
                              			on: function(evt, cb) {
                              				window.mc4wp.listeners.push(
                              					{
                              						event   : evt,
                              						callback: cb
                              					}
                              				);
                              			}
                              		}
                              	}
                              })();
                           </script>
                           <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-38" method="post" data-id="38" data-name="">
                              <div class="mc4wp-form-fields">
                                 <div class="form-group">
                                    <input type="email" name="EMAIL" placeholder="Enter your email" required="">
                                    <button type="submit" class="btn_style_one">Subscribe</button>
                                 </div>
                              </div>
                              <label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"></label>
                              <input type="hidden" name="_mc4wp_timestamp" value="1740731946"><input type="hidden" name="_mc4wp_form_id" value="38"><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
                              <div class="mc4wp-response"></div>
                           </form>
                           <!-- / Mailchimp for WordPress Plugin -->                            
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <div class="banner_left_image aos-init aos-animate" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 clomun">
                           <div class="chart_box float-bob-y">
                              <div class="tranding_icon"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                              <div class="shape_four"><img decoding="async" src="img/shape_icon_4.png" alt="Awesome Image"></div>
                              <div class="chart_image"><img decoding="async" src="img/chart_4.png" alt="Awesome Image"></div>
                           </div>
                           <div class="income_chart float-bob-y">
                              <div class="title_box">
                                 <h6>Total Income</h6>
                                 <div class="rate">&#8377; 1,18,532.52</div>
                              </div>
                              <div class="percentage"><i class="fa fa-solid fa-arrow-trend-up"></i> +11%</div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 clomun">
                           <div class="banner_image_two wow fadeInDown animated">
                              <img decoding="async" src="img/banner_image_1.jpg" alt="Awesome Image">
                           </div>
                           <div class="banner_image_three wow fadeInUp animated">
                              <img decoding="async" src="img/Group-1000004740.png" alt="Awesome Image">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Content -->
      <div class="financer-client-section">
         <div class="container">
            <div id="five-item-carousel" class="owl-carousel owl-theme">
               <div class="item">
                  <div class="clients_block_one">
                     <img src="img/client-1.png">
                  </div>
               </div>
               <div class="item">
                  <div class="clients_block_one">
                     <img src="img/client-1.png">
                  </div>
               </div>
               <div class="item">
                  <div class="clients_block_one">
                     <img src="img/client-1.png">
                  </div>
               </div>
               <div class="item">
                  <div class="clients_block_one">
                     <img src="img/client-1.png">
                  </div>
               </div>
               <div class="item">
                  <div class="clients_block_one">
                     <img src="img/client-1.png">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Content -->
      <section class="whychooseus">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-xs-12 text-center">
                  <div class="tag_text">
                     <h6 class="te-subtitle">Why Choose us</h6>
                  </div>
                  <h5 class="choose-hd">Why Pick India's Bizhub? We Are the Market Leader</h5>
               </div>
               <div class="col-md-4 col-xs-12 wow fadeInLeft animated">
                  <div class="choose-points">
                     <div class="choose-icon"><img src="img/verified-suppliers.png"></div>
                     <!-- <h4 class="choose-title">Expert Consultant</h4> -->
                     <p class="choose-text">Connect with reliable manufacturers and wholesalers through Verified Vendors & Quality Products.</p>
                     <div class="choose-btn"><a href="#">Read More <i class="fa fa-solid fa-angle-right"></i></a></div>
                  </div>
               </div>
               <div class="col-md-4 col-xs-12 wow fadeInUp animated">
                  <div class="choose-points">
                     <div class="choose-icon"><img src="img/purchasing.png"></div>
                     <p class="choose-text">Purchasing in bulk and negotiating prices will help your company get the greatest deals.</p>
                     <div class="choose-btn"><a href="#">Read More <i class="fa fa-solid fa-angle-right"></i></a></div>
                  </div>
               </div>
               <div class="col-md-4 col-xs-12 wow fadeInRight animated">
                  <div class="choose-points">
                     <div class="choose-icon"><img src="img/flexible-payment.png"></div>
                     <p class="choose-text">Expand your business financing and credit-based transactions by offering a variety of flexible payment options.</p>
                     <div class="choose-btn"><a href="#">Read More <i class="fa fa-solid fa-angle-right"></i></a></div>
                  </div>
               </div>
               <div class="col-md-4 col-xs-12 wow fadeInRight animated">
                  <div class="choose-points">
                     <div class="choose-icon"><img src="img/automated-inventory.png"></div>
                     <p class="choose-text">Simplify your business operations with automated inventory and invoicing solutions.</p>
                     <div class="choose-btn"><a href="#">Read More <i class="fa fa-solid fa-angle-right"></i></a></div>
                  </div>
               </div>
               <div class="col-md-4 col-xs-12 wow fadeInRight animated">
                  <div class="choose-points">
                     <div class="choose-icon"><img src="img/secured-transactions.png"></div>
                     <p class="choose-text">Secure Transactions & Direct Communication: Instantaneous chat and phone calls with verified sellers.</p>
                     <div class="choose-btn"><a href="#">Read More <i class="fa fa-solid fa-angle-right"></i></a></div>
                  </div>
               </div>
               <div class="col-md-4 col-xs-12 wow fadeInRight animated">
                  <div class="choose-points">
                     <div class="choose-icon"><img src="img/smart-search.png"></div>
                     <p class="choose-text">Discover the greatest products at competitive costs with our price-based listings and smart search.</p>
                     <div class="choose-btn"><a href="#">Read More <i class="fa fa-solid fa-angle-right"></i></a></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Content -->
      <section class="features">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-xs-12 wow fadeInLeft animated">
                  <div class="icon_box_one float-bob-y"><i class="fa fa-chart-line" aria-hidden="true"></i></div>
                  <div class="icon_box_two float-bob-y"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                  <div class="feture_image">
                     <img decoding="async" src="img/keybanr.png" alt="Key Benefits">
                  </div>
                  <div class="chart_image_five float-bob-x">
                     <img decoding="async" src="img/chart_5.png" alt="Key Features">
                  </div>
               </div>
               <div class="col-md-6 col-xs-12 wow fadeInRight animated">
                  <div class="elementor-widget-container">
                     <!-- Sec Title -->
                     <div class="section_title p-0 m-0 aos-init financer-title-section aos-animate" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                        <div class="tag_text">
                           <h6 class="te-subtitle">Features</h6>
                        </div>
                        <h2 class="te-title financer-size-default">Key Features & Benefits</h2>
                     </div>
                  </div>
                  <div class="panel-group" id="biz-accordion" role="tablist" aria-multiselectable="true">
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                           <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" data-parent="#biz-accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              1. Verified Vendors & Secure Transactions
                              </a>
                           </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                           <div class="panel-body">
								<p><i class="fa fa-check"></i> Connect with trusted suppliers</p>
								<p><i class="fa fa-check"></i> Safe, seamless, and protected payments</p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#biz-accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              2. Bulk Buying with Best Prices
                              </a>
                           </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                           <div class="panel-body">
								<p><i class="fa fa-check"></i> Wholesale discounts</p>
								<p><i class="fa fa-check"></i> Cost-effective deals for large orders</p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#biz-accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              3. Credit-Based Payments & Business Financing
                              </a>
                           </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                           <div class="panel-body">
                              <p><i class="fa fa-check"></i> Check buyer creditworthiness</p>
							  <p><i class="fa fa-check"></i> Access flexible funding options</p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#biz-accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              4. Smart Tools: Invoicing & Inventory
                              </a>
                           </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                           <div class="panel-body">
                              <p><i class="fa fa-check"></i> Automated billing</p>
							  <p><i class="fa fa-check"></i> Efficient stock management</p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#biz-accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              5. Easy Search & Direct Communication
                              </a>
                           </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                           <div class="panel-body">
                              <p><i class="fa fa-check"></i> Find products quickly with smart search</p>
							  <p><i class="fa fa-check"></i> Chat or call suppliers to close deals fast</p>
                           </div>
                        </div>
                     </div>
					 
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Content -->
      <section class="howit-work">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-xs-12 text-center wow fadeInDown animated">
                  <div class="tag_text">
                     <h6 class="te-subtitle">Work Process</h6>
                  </div>
                  <h2 class="howit-work-hd">How it works</h2>
               </div>
               <div class="col-md-4 col-xs-12 text-center wow fadeInUp animated step">
                  <div class="process_icon te-icon"><img src="img/register.png"></div>
                  <h4 class="te-title">Step 1: Register as a Vendor, Buyer, or Seller</h4>
                  <p class="te-text">Create an account in just a few minutes.</p>
               </div>
               <div class="col-md-4 col-xs-12 text-center wow fadeInDown animated step">
                  <div class="process_icon te-icon"><img src="img/verified-suppliers.png"></div>
                  <h4 class="te-title">Step 2: Explore Verified Suppliers & Quality Products</h4>
                  <p class="te-text">Search, compare & connect with trusted vendors.</p>
               </div>
               <div class="col-md-4 col-xs-12 text-center wow fadeInUp animated step">
                  <div class="process_icon te-icon"><img src="img/negotiate.png"></div>
                  <h4 class="te-title">Step 3: Negotiate & Finalize Your Deals</h4>
                  <p class="te-text">Get the best pricing & bulk discounts.</p>
               </div>
               <div class="col-md-2 col-xs-12 text-center wow fadeInDown animated step"></div>
               <div class="col-md-4 col-xs-12 text-center wow fadeInDown animated step">
                  <div class="process_icon te-icon"><img src="img/transactions.png"></div>
                  <h4 class="te-title">Step 4: Use Credit-Based Transactions & Financing</h4>
                  <p class="te-text">Expand with secure business funding.</p>
               </div>
               <div class="col-md-4 col-xs-12 text-center wow fadeInUp animated step">
                  <div class="process_icon te-icon"><img src="img/order.png"></div>
                  <h4 class="te-title">Step 5: Seamless Order Processing & Invoicing</h4>
                  <p class="te-text">Manage transactions with ease.</p>
               </div>
            </div>
         </div>
      </section>
      <!-- Content -->
      <section class="solutions">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-xs-12 text-center wow fadeInDown animated">
                  <div class="tag_text">
                     <h6 class="te-subtitle">Our Services</h6>
                  </div>
                  <h2 class="choose-hd">Our Services at Bizhub India</h2>
               </div>
               <div class="col-md-4 col-xs-12 wow fadeInUp animated">
                  <div class="solutions_box">
                     <div class="solutions_icon"><img src="img/trusted-vendor.png"></div>
                     <h4 class="solutions-title"><a href="#">Trusted Vendors & Quality Products</a></h4>
                     <p class="solutions_txt">We connect you with a wide network of verified manufacturers and wholesalers</p>
                     <div class="solutions_btn"><a href="#">Discover More</a></div>
                  </div>
               </div>
               <div class="col-md-4 col-xs-12 wow fadeInUp animated">
                  <div class="solutions_box">
                     <div class="solutions_icon"><img src="img/better-pricing.png"></div>
                     <h4 class="solutions-title"><a href="#">Bulk Buying with Better Pricing</a></h4>
                     <p class="solutions_txt">Save more when you buy more! Bizhub helps you get wholesale discounts and</p>
                     <div class="solutions_btn"><a href="#">Discover More</a></div>
                  </div>
               </div>
               <div class="col-md-4 col-xs-12 wow fadeInUp animated">
                  <div class="solutions_box">
                     <div class="solutions_icon"><img src="img/pay-later.png"></div>
                     <h4 class="solutions-title"><a href="#">Pay Later & Business Financing</a></h4>
                     <p class="solutions_txt">Don’t let cash flow slow you down. Buy now, pay later with credit-based</p>
                     <div class="solutions_btn"><a href="#">Discover More</a></div>
                  </div>
               </div>
               <div class="col-md-4 col-xs-12 wow fadeInDown animated">
                  <div class="solutions_box">
                     <div class="solutions_icon"><img src="img/smart-billing.png"></div>
                     <h4 class="solutions-title"><a href="#">Smart Billing & Inventory Tools</a></h4>
                     <p class="solutions_txt">Automate your invoicing and inventory in one place. Save time and reduce errors</p>
                     <div class="solutions_btn"><a href="#">Discover More</a></div>
                  </div>
               </div>
               <div class="col-md-4 col-xs-12 wow fadeInDown animated">
                  <div class="solutions_box">
                     <div class="solutions_icon"><img src="img/secure-transactions.png"></div>
                     <h4 class="solutions-title"><a href="#">Secure Transactions & Easy Communication</a></h4>
                     <p class="solutions_txt">Stay safe and connected. All payments are secure, and you can chat or call</p>
                     <div class="solutions_btn"><a href="#">Discover More</a></div>
                  </div>
               </div>
			   
            </div>
         </div>
      </section>
      <!-- Content -->
      <section class="pricing">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-xs-12 text-center wow fadeInDown animated">
                  <div class="tag_text">
                     <h6 class="te-subtitle">Our Pricing</h6>
                  </div>
                  <h2 class="choose-hd">Why We Are Different?</h2>
               </div>
               <div class="col-md-4 col-xs-12 pricing_block wow fadeInUp animated">
                  <div class="pricing_block_one">
                     <div class="pricing_table">
                        <div class="table_header">
                           <h5>Feature</h5>
                        </div>
                        <div class="table_content">
                           <ul class="feature_list">
                              <li>Verified & Trusted Vendors</li>
                              <li>Bulk Buying with Best Deals</li>
                              <li>Credit-Based Transactions & Financing</li>
                              <li>Automated Invoicing & Inventory Management</li>
                              <li>Secure & Transparent Transactions</li>
                              <li>Smart Search & AI-Powered Listings</li>
                              <li>End-to-End B2B Marketplace Solutions</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-xs-12 pricing_block wow fadeInDown animated">
                  <div class="pricing_block_one aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
                     <div class="pricing_table">
                        <div class="table_header">
                           <h5>What we offer</h5>
                        </div>
                        <div class="table_content">
                           <ul class="feature_list">
                              <li>Only pre-verified manufacturers, wholesalers, and suppliers</li>
                              <li>Negotiated pricing and exclusive discounts on wholesale purchases</li>
                              <li>"Buy Now, Pay Later" and easy financing options</li>
                              <li>AI-powered order tracking, invoicing, and stock updates</li>
                              <li>Encrypted payment gateways and direct vendor communication</li>
                              <li>Price-based listings and advanced search filters</li>
                              <li>One platform for buying, selling, financing, and automation</li>
                           </ul>
                           <div class="link_btn">
                              <a href="#" class="btn_style_two"><span>Select This Package</span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-xs-12 pricing_block wow fadeInUp animated">
                  <div class="pricing_block_one aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
                     <div class="pricing_table">
                        <div class="table_header">
                           <h5>How it benefits you</h5>
                        </div>
                        <div class="table_content">
                           <ul class="feature_list">
                              <li>No risk of fraud, ensuring reliability and product quality</li>
                              <li>Maximize cost savings and increase profit margins</li>
                              <li>Expand your business without immediate financial strain</li>
                              <li>Saves time, reduces errors, and streamlines operations</li>
                              <li>100% safe transactions with real-time tracking</li>
                              <li>Quickly find the best products at the most competitive prices</li>
                              <li>A seamless experience for vendors, buyers, and sellers</li>
                           </ul>
                           <div class="link_btn">
                              <a href="#" class="btn_style_two"><span>Select This Package</span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      <!-- Content -->
      <section class="testimonials">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-xs-12 text-center wow fadeInDown animated">
                  <div class="tag_text">
                     <h6 class="te-subtitle">Testimonials</h6>
                  </div>
                  <h2 class="choose-hd">Success Stories</h2>
               </div>
               <div class="col-md-4 col-xs-12 wow fadeInUp animated">
                  <div class="news_block_one aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
                     <div class="inner_box">
                        <figure class="image_box"><a href="#"><img loading="lazy" decoding="async" width="410" height="250" src="img/blog_15-410x250.jpg" alt=""></a></figure>
                        <div class="lower_content">
                           <!-- <div class="testimonials-category"><span><a href="#" rel="category tag">Health</a></span></div> -->
                           <h3 class="testimonials-hd"><a href="#">Game-Changer for Our Business!</a></h3>
						   <p>Bizhub India has completely transformed how we source products. The verified vendors and bulk pricing options have helped us save costs while maintaining quality. The platform is easy to use, and the financing options are a huge plus!</p>
                           <!--<ul class="post-info">
                               <li><i class="fa fa-calendar"></i>March 13, 2024</li>
                              <li><i class="fa fa-user-circle"></i><a href="#">admin</a></li> 
                           </ul>-->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-xs-12 wow fadeInDown animated">
                  <div class="news_block_one aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
                     <div class="inner_box">
                        <figure class="image_box"><a href="#"><img loading="lazy" decoding="async" width="410" height="250" src="img/blog_16-410x250.jpg" alt=""></a></figure>
                        <div class="lower_content">
                           <h3 class="testimonials-hd"><a href="#">Seamless & Secure Transactions!</a></h3>
						   <p>We struggled with unreliable suppliers until we found Bizhub India. Now, we connect with trusted vendors, negotiate prices, and complete transactions securely. The automated invoicing and inventory tracking have made our operations so much smoother!</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-xs-12 wow fadeInUp animated">
                  <div class="news_block_one aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
                     <div class="inner_box">
                        <figure class="image_box"><a href="#"><img loading="lazy" decoding="async" width="410" height="250" src="img/blog_14-410x250.jpg" alt=""></a></figure>
                        <div class="lower_content">
                           <h3 class="testimonials-hd"><a href="#">Best B2B Platform for Growth!</a></h3>
                           <p>As a seller, Bizhub India has given me access to a wider network of buyers. The direct communication tools and secure payments have made my business more efficient. Highly recommend it to any SME looking for growth!</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Footer -->
      <footer class="main_footer">
         <div class="footer_top">
            <div class="container">
               <div class="widget_style">
                  <div class="col-md-4 col-xs-12 wow fadeInUp animated">
                     <div id="financer_about_us-2" class="footer_widget footer-widget widget_financer_about_us">
                        <div class="about_widget">
                           <figure class="footer_logo">
                              <a href="#"><img src="img/bizhub-india-logo.png" alt="Bizhub India"></a>
                           </figure>
                           <p>The future is fast approaching, and the consumer industry is on the precipice of dramatic change</p>
                           <ul class="social-links">
                              <li><a target="_blank" href="#"><i class="fab  fa-facebook-f"></i></a></li>
                              <li><a target="_blank" href="#"><i class="fab  fa-linkedin-in"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-2 col-xs-12 wow fadeInDown animated">
                     <div id="nav_menu-2" class="footer_widget footer-widget widget_nav_menu">
                        <h4 class="footer_widget_title">Quick Links</h4>
                        <div class="menu-footer-quick-links-menu-container">
                           <ul class="footer-menu">
                              <li><a href="{{ route('about') }}">About Us</a></li>
                              <li><a href="#">Blog Standard</a></li>
                              <li><a href="#">Projects</a></li>
                              <li><a href="#">Services</a></li>
                              <li><a href="#">Team</a></li>
                              <li><a href="{{ route('faq') }}">FAQs</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-2 col-xs-12 wow fadeInUp animated">
                     <div id="nav_menu-3" class="footer_widget footer-widget widget_nav_menu">
                        <h4 class="footer_widget_title">Services</h4>
                        <div class="menu-services-menu-container">
                           <ul class="footer-menu">
                              <li id="menu-item-1580" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1580"><a href="https://wp1.themevibrant.com/newwp/financer/wealth-management/">Wealth Management</a></li>
                              <li><a href="#">Risk &amp; Compliance</a></li>
                              <li><a href="#">Fraud &amp; Protect</a></li>
                              <li><a href="#">Retirement Solutions</a></li>
                              <li><a href="#">Expert Consultant</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-xs-12 wow fadeInDown animated">
                     <div id="financer_newsletter-2" class="footer_widget footer-widget widget_financer_newsletter">
                        <div class="newsletter_widget">
                           <h4 class="footer_widget_title">Subscribe Newsletter</h4>
                           <p>To add complexity, this is happening against a back drop of significant challenges</p>
                           <div class="subscribe-inner">
                              <div class="subscribe-form">
                                 <script>(function() {
                                    window.mc4wp = window.mc4wp || {
                                    	listeners: [],
                                    	forms: {
                                    		on: function(evt, cb) {
                                    			window.mc4wp.listeners.push(
                                    				{
                                    					event   : evt,
                                    					callback: cb
                                    				}
                                    			);
                                    		}
                                    	}
                                    }
                                    })();
                                 </script><!-- Mailchimp for WordPress v4.10.2 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                 <form id="mc4wp-form-3" class="mc4wp-form mc4wp-form-38" method="post" data-id="38" data-name="">
                                    <div class="mc4wp-form-fields">
                                       <div class="form-group">
                                          <input type="email" name="EMAIL" placeholder="Enter your email" required="">
                                          <button type="submit" class="btn_style_one">Subscribe</button>
                                       </div>
                                    </div>
                                    <label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"></label>
                                    <input type="hidden" name="_mc4wp_timestamp" value="1741064862"><input type="hidden" name="_mc4wp_form_id" value="38">
                                    <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-3">
                                    <div class="mc4wp-response"></div>
                                 </form>
                                 <!-- / Mailchimp for WordPress Plugin -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer_bottom">
            <div class="container">
               <div class="copyright">Copyright © 2024 &nbsp;<a href="#">Bizhub India</a>.  All Rights Reserved</div>
            </div>
         </div>
         <div class="footer_shape"></div>
      </footer>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
      <script src="js/frontend.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="https://www.antworksmoney.com/assets/js/wow.min.js"></script>
      <script>
         $("#five-item-carousel").owlCarousel({
                 pagination : false,
                 items:1,
                 loop:true,
                 margin:10,
                 dots:false,
                 nav:false,
                 autoplay:true,
                 autoplayTimeout:10000,
                 autoplayHoverPause:false,
                 responsiveClass:true,
                 responsive: {
                     0:{
                         items:2
                     },
                     600:{
                         items:2
                     },
                     1000:{
                         items:5
                     }
                 }
             });
			 new WOW().init();
			//smoothScroll
			smoothScroll.init();
      </script>
   </body>
</html>