<?php  //include('connect.php');//require('blog/wp-blog-header.php');//$posts = get_posts('numberposts=3&order=DESC&orderby=date');?><!DOCTYPE html>
<html>
   <head>
      <title>JPLoft: Top Mobile App Development | Web Development | Digital Marketing Company</title>
      <meta name="description" content="JPLoft Solutions is an Award Winning International Mobile Application Development and Website Development Company in USA, UK, Australia, India, also providing services in Game Development, Digital Marketing, and Hosting" />
      <meta name="title" content="Best IT Company | Top IT Company | Website Development | App Development | Hybrid Application Development | Android App Development | iOS App Development | Best website development company| E-commerce website development company | SEO company | Best Digital marketing Company"/>
      <meta name="keywords" content="Best IT Company, Top IT Company, Website Development, App Development, Hybrid Application Development, Android App Development, iOS App Development, Best website development company, E-commerce website development company, SEO company,Best Digital marketing Company">
      <meta itemprop="description" content="JPLoft Solutions is an Award Winning International Mobile Application Development and Website Development Company in USA, UK, Australia, India, also providing services in Game Development, Digital Marketing, and Hosting" />
     
      <meta name= "author" content="jploft.com">
      <meta name= "content-language" content="english">
      <meta name="audience" content="all">
      <meta name= "revisit-after" content="5 days">
      <meta name=" distribution" content="global">
      <meta property="article:tag" content="Best IT Company" />
      <meta property="article:tag" content="Top IT Company" />
      <meta property="article:tag" content="Website and App Development" />
      <meta property="article:tag" content="Hybrid Application Development" />
      <meta property="article:tag" content="Ecommerce Website and App Development" />
      <meta property="article:section" content="Digital Marketing trusted Company" />
   
      <meta name="publisher" content="Jploft">
      <meta name="copyright" content="Copyright 2019">
      <meta name="Designer" content="Jploft">
      <meta name="Abstract" contetnt="Best Website and Application Development">
      <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
      <meta name="format-detection" content="telephone=no">
      <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link href="css/cus.css" rel="stylesheet" type="text/css">
      <link href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css" rel="stylesheet" type="text/css">
      <link href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css" rel="stylesheet" type="text/css">
      <?php require("googleanalytics.php"); ?>   
      <style>
          .slick-slide img{
border-radius: 0px !important;
}

.post {
  display: flex;
  text-decoration: none;
  color: inherit;
  position: relative;
  background-color: #FFF;
  cursor: pointer;
}
.post:before {
  position: absolute;
  left: 0;
  bottom: 0;
  content: "";
  display: block;
  width: 100%;
  height: 100%;
  /*background-color: #000;*/
  background: rgb(0,74,111);
  background: radial-gradient(circle, rgba(0,74,111,1) 0%, rgba(0,50,75,1) 100%);
  transform-origin: 0 bottom 0;
  transform: scaleY(0);
  transition: 0.4s ease-out;
	z-index: 0;

}
.post:hover .post-title {
  color: #FFF;
}
.post:hover:before {
  transform: scaleY(1);
}
.post:hover .post-title h3 {
    width: 100%;
    font-size: 21px;
}
.post:hover .post-title p {
    width: 100%;
}
.post:hover .normal{
	display: none;
}

.post-title {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  transition: 0.4s ease-out;
  padding: 15px;
}

 
:root {
  --background: #f3a683;
  --base: #303952;
  --accent: #786fa6;
  --shadow: #e77f67;
}


.cool {
/*  font: bold 3rem/1.2 sans-serif;
  max-width: 20rem;*/
}
.cool span {
  color: var(--shadow);
  display: inline-block !important;
  position: relative;
  font-weight: 600;
}
.cool span:nth-child(1)::before, .cool span:nth-child(1)::after {
  -webkit-animation-delay: 0.1s;
          animation-delay: 0.1s;
}
.cool span:nth-child(2)::before, .cool span:nth-child(2)::after {
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s;
}
.cool span:nth-child(3)::before, .cool span:nth-child(3)::after {
  -webkit-animation-delay: 0.3s;
          animation-delay: 0.3s;
}
.cool span:nth-child(4)::before, .cool span:nth-child(4)::after {
  -webkit-animation-delay: 0.4s;
          animation-delay: 0.4s;
}
.cool span:nth-child(5)::before, .cool span:nth-child(5)::after {
  -webkit-animation-delay: 0.5s;
          animation-delay: 0.5s;
}
.cool span:nth-child(6)::before, .cool span:nth-child(6)::after {
  -webkit-animation-delay: 0.6s;
          animation-delay: 0.6s;
}
.cool span:nth-child(7)::before, .cool span:nth-child(7)::after {
  -webkit-animation-delay: 0.7s;
          animation-delay: 0.7s;
}
.cool span:nth-child(8)::before, .cool span:nth-child(8)::after {
  -webkit-animation-delay: 0.8s;
          animation-delay: 0.8s;
}
.cool span:nth-child(9)::before, .cool span:nth-child(9)::after {
  -webkit-animation-delay: 0.9s;
          animation-delay: 0.9s;
}
.cool span:nth-child(10)::before, .cool span:nth-child(10)::after {
  -webkit-animation-delay: 1s;
          animation-delay: 1s;
}
@media (prefers-reduced-motion) {
  .cool span {
    color: var(--base);
  }
}
.cool span::before {
  -webkit-animation: max-height 0.4s cubic-bezier(0.61, 1, 0.88, 1) 1 normal both;
          animation: max-height 0.4s cubic-bezier(0.61, 1, 0.88, 1) 1 normal both;
  color: var(--accent);
}
.cool span::after {
  -webkit-animation: max-width 0.7s cubic-bezier(0.61, 1, 0.88, 1) 1 normal both;
          animation: max-width 0.7s cubic-bezier(0.61, 1, 0.88, 1) 1 normal both;
  color: var(--base);
}
.cool span::before, .cool span::after {
  content: attr(data-text);
  left: 0;
  overflow: hidden;
  position: absolute;
  speak: none;
}
@media (prefers-reduced-motion) {
  .cool span::before, .cool span::after {
    -webkit-animation: none;
            animation: none;
    content: "";
  }
}

@-webkit-keyframes max-width {
  from {
    max-width: 0;
  }
  to {
    max-width: 100%;
  }
}

@keyframes max-width {
  from {
    max-width: 0;
  }
  to {
    max-width: 100%;
  }
}
@-webkit-keyframes max-height {
  from {
    max-height: 0;
  }
  to {
    max-height: 100%;
  }
}
@keyframes max-height {
  from {
    max-height: 0;
  }
  to {
    max-height: 100%;
  }
}
      </style>

   </head>
   <body class="wrapper">
      <div class="wraper hom-new">
         <?php require("header.php"); ?>                                    
         <div class="banner">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-6 bnr-text">
                     <h1 class="cool">
                        <span data-text="JPLoft">JPLoft</span>
                        <span data-text="is">is</span>
                        <span data-text="the">the</span>
                        <span data-text="Ace">Ace</span>
                        <span data-text="in">in</span>
                        <span data-text="the">the</span><br>
                        <span data-text="Deck">Deck</span>
                        <span data-text="of">of</span>
                        <span data-text="IT">IT</span>
                        <span data-text="Industry....">Industry....</span>
                        <!-- JPLoft is the Ace in the <small>Deck of IT Industry....</small> --></h1>
                     <p>As we love developing masterpiece mobile applications and websites along with digital marketing services because somewhere someone is in need of it</p>
                     <div class="">
                        <button class="btn btn-primary my-2 my-sm-0 myButt four hvr-bubble-right" type="submit">
                           <div class="icon"><img src="images/home/animation.svg" alt=""/></div>
                           <span>Get a Free Consultation</span>                            
                        </button>
                     </div>  

                  </div>
                  <div class="col-lg-6 bnr-img text-center">
                     <div class="column-right slide banr-slide-bg">
                        <div><img src="images/home/m-slide1.1.png" alt=""/></div>
                        <div><img src="images/home/m-slide2.1.png" alt=""/></div>
                        <div><img src="images/home/m-slide3.1.png" alt=""/></div>
                        <div><img src="images/home/m-slide4.1.png" alt=""/></div>
                        <div><img src="images/home/m-slide5.1.png" alt=""/></div>
                        <div><img src="images/home/m-slide6.1.png" alt=""/></div>
                        <div><img src="images/home/m-slide7.1.png" alt=""/></div>
                        <div><img src="images/home/m-slide8.1.png" alt=""/></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <section class="over-services">
            <div class="container">
               <div class="services-title">
                  <h2 class="text-left">we help you grow with our services 
                  <button class="btn btn-primary four hvr-bubble-right myButt float-right" type="submit">
                        <span>Enquire Now <img src="images/home/next-errow.svg" alt=""></span>
                     </button> 
                  </h2>
               </div>
               <div class="row">
                  <div class="col-lg-4 col-md-4 mb-4"> 
                  	<div class="service-type-title website-dev item-content post">
                     	<div class="normal">
	                        <div class="ser-img">
	                           <img src="images/home/website-dev.svg" alt="">
	                        </div>
	                        <h3>Web Development</h3>
	                        <p>Get your own website and reach new heights of success. Grow your business with a website built by JPLoft.</span></p>
	                    </div>
	                    <div class="post-title">
	                        <div class="srvecs mobile-type"> 
	                        	<h3>Web Development</h3>
	                        <p>Get your own website and reach new heights of success. Grow your business with a website built by JPLoft.</span></p>
	                              <ul>
	                                 <li><a href="laravel-development-services" target=”_blank”>Laravel</a></li>
	                                 <li><a href="cake-php-development-services" target=”_blank”>Cake PHP</a></li>
	                                 <li><a href="codeigniter-development-services" target=”_blank”>CodeIgniter/Ci</a></li>
	                                 <li><a href="yii-development-services" target=”_blank”>Yii</a></li>
	                                 <li><a href="magento-development-services" target=”_blank”>Magento</a></li>
	                                 <li><a href="shopify-development-services" target=”_blank”>Shopify</a></li>
	                                 <li><a href="retail-ecommerce-app-development" target=”_blank”>Opencart</a></li>
	                                 <li><a href="drupal-development-services" target=”_blank”>Drupal</a></li>
	                                 <li><a href="moodle-development-services" target=”_blank”>Moodle</a></li> 
	                                 <li><a href="wordpress-development-services" target=”_blank”>Wordpress / Woo Commerce</a></li>
	                              </ul>
	                        </div>
	                    </div>
                     </div> 

                        
                  </div>

                  
               <div class="col-lg-3 col-md-3 col-sm-4 mb-4"> 
                  <div class="service-type-title full-stack-dev item-content post">
                  	<div class="normal">
	                     <div class="ser-img">
	                        <img src="images/home/full-stack.svg" alt="">
	                     </div>
	                     <h3>Full Stack</h3>
	                     <p>We are specialized in offering wide-ranging full-stack development services consisting</p>
	                 </div>
	                 <div class="post-title">
	                     <div class="srvecs mobile-type">
	                     	<h3>Full Stack</h3>
	                     	<p>We are specialized in offering wide-ranging full-stack development services consisting</p>
	                        <ul>
	                           <li><a href="angular-js-development-services" target=”_blank”>Angular JS</a></li>
	                           <li><a href="node-js-development-services" target=”_blank”>Node JS</a></li>
	                           <li><a href="" target=”_blank”>Vue / Nuxt JS</a></li>
	                           <li><a href="react-js-development-services" target=”_blank”>React JS</a></li>
	                        </ul>
	                     </div>
	                 </div>
                  </div> 
            	</div>
               <div class="col-lg-5 col-md-5 mb-4"> 
                     <div class="service-type-title mobile-app item-content post">
                           <div class="normal">
                              <div class="ser-img">
                                 <img src="images/home/mobile-appp.svg" alt="">
                              </div>
                              <h3>Mobile App Development</h3>
                              <p>We offer a wide range of mobile app services that helps your business reach...</p>
                          </div>
                           <div class="post-title">
                              <div class="srvecs mobile-type">
                                 <h3>Mobile App Development</h3>
                              <p>We offer a wide range of mobile app services that helps your business reach every person</p>
                                 <ul>
                                    <li><a href="android-app-development" target=”_blank”>Android</a></li>
                                    <li><a href="ios-app-development" target=”_blank”>iOS</a></li>
                                    <li><a href="react-native-app-development" target=”_blank”>React Native</a></li>
                                    <li><a href="" target=”_blank”>Flutter</a></li>
                                    <li><a href="" target=”_blank”>Cross Platform</a></li>
                                 </ul>
                              </div>
                          </div>
                        </div> 
               </div>


               </div>
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-4 mb-4"> 
                     <div class="service-type-title Sales-force item-content post">
                     	<div class="normal">
	                        <div class="ser-img">
	                           <img src="images/home/Sales-force.svg" alt="">
	                        </div>
	                        <h3>Salesforce</h3>
	                        <p>To help you enjoy the good <span>exposure and to reach potential</span></p>
	                    </div>
	                    <div class="post-title">
	                        <div class="srvecs mobile-type">
	                        	<h3>Salesforce</h3>
	                        	<p>To help you enjoy the good <span>exposure and to reach potential</span></p>
	                           <ul>
	                              <li><a href="android-app-development" target=”_blank”>Android</a></li>
	                              <li><a href="ios-app-development" target=”_blank”>iOS</a></li>
	                              <li><a href="react-native-app-development" target=”_blank”>React Native</a></li>
	                              <li><a href="" target=”_blank”>Flutter</a></li>
	                              <li><a href="" target=”_blank”>Cross Platform</a></li>
	                           </ul>
	                        </div>
	                    </div>

                     </div> 
               </div>
               <div class="col-lg-4 col-md-3 col-sm-4 mb-4"> 
                  <div class="service-type-title ecommerce-marketing item-content post">
                  	<div class="normal">
	                     <div class="ser-img">
	                        <img src="images/home/ecommerce-marketing.svg" alt="">
	                     </div>
	                     <h3>eCommerce & Marketing</h3>
	                     <p>To help you enjoy the good exposure and to reach potential clients</p>
                    </div>
                    <div class="post-title">
	                     <div class="srvecs mobile-type">
	                     	<h3>eCommerce & Marketing</h3>
	                     	<p>To help you enjoy the good exposure and to reach potential clients</span></p>
	                        <ul>
	                           <li><a href="react-native-app-development" target=”_blank”>Magento</a></li>
	                           <li><a href="wordpress-development-services" target=”_blank”>Wordpress / Woo Commerce</a></li>
	                           <li><a href="shopify-development-services" target=”_blank”>Shopify</a></li>
	                           <li><a href="custom-cms-development-services" target=”_blank”>Opencart</a></li>
	                        </ul>
	                     </div>
	                 </div>
                  </div> 
            </div>

         	<div class="col-lg-3 col-md-3 col-sm-4 mb-4"> 
	            <div class="service-type-title elearning-games item-content post">
	            	<div class="normal">
		               <div class="ser-img">
		                  <img src="images/home/elearning-games.svg" alt="">
		               </div>
		               <h3>eLearning and Games</h3>
		               <p>JPLoft uses the latest technologies to reshape learning programs</p>
		           </div>
		           <div class="post-title">
		               <div class="srvecs mobile-type">
		               	<h3>eLearning and Games</h3>
		               	<p>JPLoft uses the latest technologies to reshape learning programs</p>
		                  <ul>
		                     <li><a href="custom-cms-development-services" target=”_blank”>Custom LMS Development</a></li>
		                     <li><a href="moodle-development-services" target=”_blank”>Moodle</a></li>
		                     <li><a href="wordpress-development-services" target=”_blank”>Wordpress LMS</a></li>
		                     <li><a href="lms-elearning-courses-development-services" target=”_blank”>Articulate</a></li>
		                     <li><a href="lms-elearning-courses-development-services" target=”_blank”>Captivate</a></li>
		                     <li><a href="lms-elearning-courses-development-services" target=”_blank”>Scorm Development</a></li>
		                  </ul>
		               </div>
		           </div>
	            </div> 
      		</div>
                        <div class="col-lg-2 col-md-3 col-sm-4 mb-4"> 
               <div class="service-type-title iott item-content post">
                  <div class="normal">
                  <div class="ser-img">
                     <img src="images/home/iot.svg" alt="">
                  </div>
                  <h3>Iot</h3>
                  <p>To help you enjoy the good exposure and to </p>
                </div>
                <div class="post-title">
                  <div class="srvecs mobile-type">
                     <h3>Iot</h3>
                     <p>To help you enjoy the good exposure and to </p>
                     <ul>
                        <li><a href="android-app-development" target=”_blank”>Android</a></li>
                        <li><a href="ios-app-development" target=”_blank”>iOS</a></li>
                        <li><a href="react-native-app-development" target=”_blank”>React Native</a></li>
                        <li><a href="" target=”_blank”>Flutter</a></li>
                        <li><a href="" target=”_blank”>Cross Platform</a></li>
                     </ul>
                  </div>
                </div> 
               </div> 
         </div>
               </div>
            </div>
         </section>         

         <section class="app-solution">
            <div class="container">
               <h2>We Provide Best Solutions For Your Business Ideas</h2>
               <p>We worked not only with big brands but also with the startups and made their business stand out of the competition which took their business to new heights of success. Have a look at the below industries where we have already worked out and have hand-on experience:</p>
               <div class="app-sec">
                  <ul class="tab">
                     <li class="tablinks gym-fit" onclick="openCity(event, 'ontaxi')">GYM, Health & Fitness <img src="images/home/gym-fitness.svg" alt=""></li>
                     <li class="tablinks ods" onclick="openCity(event, 'oncoupon')">On-Demand Services <img src="images/home/ods.svg" alt=""></li>
                     <li class="tablinks food-del" onclick="openCity(event, 'taxidis')">Restaurants & Food Delivery <img src="images/home/food-delivery.svg" alt=""></li>
                     <li class="tablinks grcery" onclick="openCity(event, 'grocery')">E-Commerce & Grocery <img src="images/home/grocery.svg" alt=""></li>
                     <li class="tablinks rl-estate" onclick="openCity(event, 'jbportal')">Real Estate & Property Listing <img src="images/home/building.svg" alt=""></li>
                     <li class="tablinks elearn" onclick="openCity(event, 'jbportal1')">E-Learning, University, School <img src="images/home/elearning.svg" alt=""></li>
                  </ul>
                  <div class="app-screen">
                     <img src="images/home/ontaxi_n.png" alt="Avatar">                    
                     <div id="ontaxi" class="tabcontent"><img src="images/home/health-fitness1.png" alt="Avatar"></div>
                     <div id="oncoupon" class="tabcontent"><img src="images/home/ods1.png" alt="Avatar"></div>
                     <div id="taxidis" class="tabcontent"><img src="images/home/taxidis1.png" alt="Avatar"></div>
                     <div id="grocery" class="tabcontent"><img src="images/home/grocery1.png" alt="Avatar"></div>
                     <div id="jbportal" class="tabcontent"><img src="images/home/jbportal.png" alt="Avatar"></div>
                     <div id="jbportal1" class="tabcontent"><img src="images/home/elearn1.png" alt="Avatar"></div>
                     <div id="dating" class="tabcontent"><img src="images/home/ontaxi_n.png" alt="Avatar"></div>
                     <div id="flightbook" class="tabcontent"><img src="images/home/dating1.png" alt="Avatar"></div>
                     <div id="photoedt" class="tabcontent"><img src="images/home/3dgames.png" alt="Avatar"></div>
                     <div id="elearn" class="tabcontent"><img src="images/home/iot1.png" alt="Avatar"></div>
                     <div id="logist" class="tabcontent"><img src="images/home/flightbook.png" alt="Avatar"></div>
                     <div id="doctor" class="tabcontent"><img src="images/home/doctor1.png" alt="Avatar"></div>
                  </div>
                  <ul class="tab rgt-aps">
                     <li class="tablinks cab-book active" onclick="openCity(event, 'dating')"><img src="images/home/taxi-booking.svg" alt=""> Taxi & Cab Booking</li>
                     <li class="tablinks datng" onclick="openCity(event, 'flightbook')"><img src="images/home/dating.svg" alt=""> Social Networking, Dating</li>
                     <li class="tablinks game" onclick="openCity(event, 'photoedt')"><img src="images/home/3Dgame.svg" alt=""> 2d/3d Mobile Games</li>
                     <li class="tablinks iot" onclick="openCity(event, 'elearn')"><img src="images/home/internet-of-things.svg" alt=""> IoT (Internet Of Things)</li>
                     <li class="tablinks flt-book" onclick="openCity(event, 'logist')"><img src="images/home/flight-book.svg" alt=""> Travels, Flight and Hotel Booking </li>
                     <li class="tablinks dr-patnt" onclick="openCity(event, 'doctor')"><img src="images/home/doc-patient.svg" alt=""> Dr. Patient Appointment, Hospital</li>
                  </ul>
               </div>
               <button class="btn btn-primary my-2 my-sm-0 myButt four hvr-bubble-right" type="submit">
                  <div class="icon"><img src="images/home/animation.svg" alt=""/></div>
                  <span>Request a Free Proposal</span>                
               </button>
            </div>
         </section>

         <div class="slideshow web-portfolio">
               <div class="surec item" id="section-one">  
                  <div class="row">
                     <div class="col-lg-5 col-md-6">
                        <div class="project-detail">
                           <div class="count-logo">
                              <h3 class="count">01</h3>
                              <div class="project-logo">
                                 <img src="images/home/redbull-logo.svg" alt="">
                              </div>
                           </div>
                           <div class="des mt-4">
                              <h4>RedBull and WFFA<br>(World Freestyle Football Association)</h4>
                              <p>The World Freestyle Football Association (WFFA) is the world governing body for the sport of Freestyle Football. It is committed to growing awareness of and participation in Freestyle Football worldwide.</p>
                              <p> Anyone can get into Freestyle Football – All you need is a ball! It is the art and sport of juggling a football using all parts of the body to entertain audiences and outperform opponents in competitions. It is a fusion of tricks with a ball, dance and music.</p>
                              <!-- <p> Watch all the biggest Freestylers in the world compete head-to-head in the BattleZones section of the WFFA app. You can even compete in your own head-to-head battle (in the BattleZones section of the app), get personalized feedback from our virtual coaches to improve your ability, follow your favorite Football Freestylers and more!</p> -->
                              <div class="read-more-btn">
                                 <a href="https://thewffa.org/" target=”_blank”>Visit Site</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-2 mt-4 mid-sec"><img src="images/home/jp-logo.svg" alt=""></div>
                     <div class="col-lg-5 col-md-6">
                        <div class="product-img">
                           <div class="portfolio-imgs">
                              <img src="images/home/red-bull.png" alt="">
                           </div>
                        </div>
                     </div>
                  </div>    
               </div>
               <div class="surec item" id="section-two">
                  <div class="row">
               <div class="col-lg-5 col-md-6">
                  <div class="project-detail">
                     <div class="count-logo">
                        <h3 class="count">02</h3>
                        <div class="project-logo">
                           <img src="images/home/nike-logo.svg" alt="">
                        </div>
                     </div>
                     <div class="des mt-4">
                        <h4>Nike - MFS Playkit</h4>
                        <p>A web-based version of the digital platform is needed to train practitioners, assess participants, and provide data/analytics of more than 2.5 Million Children around the globe. Practitioners will still be able to access the platform on tablets but will need to use a web-browser to do so during this phase.</p>
                        <p>It’s an exclusive portal so no public registration allowed. All type of users will be added via Super User.</p>
                        <p>The system is built in a way to manage and render data of more the 2.5 Million Children in a Go</p>
                        <div class="read-more-btn">
                           <a href="http://mfsplaykit.tasksplan.com/" target=”_blank”>Visit Site</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-2 mt-4 mid-sec"><img src="images/home/jp-logo.svg" alt=""></div>
               <div class="col-lg-5 col-md-6">
                  <div class="product-img">
                     <div class="portfolio-imgs">
                        <img src="images/home/playkit.png" alt="">
                     </div>
                  </div>
               </div>
            </div>     
               </div>
               <div class="surec item" id="section-three">
                     <div class="row">
                     <div class="col-lg-5 col-md-6">
                        <div class="project-detail">
                           <div class="count-logo">
                              <h3 class="count">03</h3>
                              <div class="project-logo">
                                 <img src="images/home/homesbaskt.svg" alt="">
                              </div>
                           </div>
                           <div class="des mt-4">
                              <h4>Homesbasket</h4>
                              <p>This project is an on-demand service app in Miami, Florida through which the user can order food, groceries, and many items such as medicines, beauty items, etc. The app is highly secure and provides benefits such as an easy-to-use interface, secured payment channels, and real-time tracking of orders. Not only this, but it offers economic opportunities to the riders as well as merchant partners.</p>
                              <div class="read-more-btn">
                                 <a href="https://homesbasket.com/" target=”_blank”>Visit Site</a>
                              </div>

                              <div class="app-str">
                                 <span><!-- <img src="images/home/user-people.svg" alt=""> --> User App <!-- <img src="images/home/next-white.svg" alt=""> --></span>
                                 <a href="https://play.google.com/store/apps/details?id=com.home_basket_customer" target=”_blank”><img src="images/home/Google_Play.svg" style="height: 35px;" alt=""></a>
                                 <a href="https://apps.apple.com/us/app/homesbasket/id1583533538" target=”_blank”><img src="images/home/app-store.svg" style="height: 35px;" alt=""></a>
                              </div>
                              <div class="app-str">
                                 <span><!-- <img src="images/home/shop.svg" alt=""> --> Merchant App <!-- <img src="images/home/next-white.svg" alt=""> --></span>
                                 <a href="https://play.google.com/store/apps/details?id=com.homebasket_merchant_app" target=”_blank”><img src="images/home/Google_Play.svg" style="height: 35px;" alt=""></a>
                                 <a href="https://apps.apple.com/us/app/homesbasket-partner/id1583533472" target=”_blank”><img src="images/home/app-store.svg" style="height: 35px;" alt=""></a>
                              </div>
                              <div class="app-str">
                                 <span><!-- <img src="images/home/delivery.svg" alt=""> --> Driver App <!-- <img src="images/home/next-white.svg" alt=""> --></span>
                                 <a href="https://play.google.com/store/apps/details?id=com.homebasket_rider_app" target=”_blank”><img src="images/home/Google_Play.svg" style="height: 35px;" alt=""></a>
                                 <a href="https://apps.apple.com/us/app/homesbasket-driver/id1583533570" target=”_blank”><img src="images/home/app-store.svg" style="height: 35px;" alt=""></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-2 mt-4 mid-sec"><img src="images/home/jp-logo.svg" alt=""></div>
                     <div class="col-lg-5 col-md-6">
                        <div class="product-img">
                           <div class="">
                              <img src="images/home/homsbskt.png" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="surec item" id="section-eighttt">
                     <div class="row">
                     <div class="col-lg-5 col-md-6">
                        <div class="project-detail">
                           <div class="count-logo">
                              <h3 class="count">04</h3>
                              <div class="project-logo">
                                 <img src="images/home/tap-a-tradie-logo.svg" alt="">
                              </div>
                           </div>
                           <div class="des mt-4">
                              <h4>Tap a Tradie (On-demand)</h4>
                              <p>Tap a Tradie is a global marketplace connects in real time, consumers who need a job done with ‘Tradies’, a network of qualified tradespeople, who have the time and skills needed to complete the requested online job request.

Tap a Tradie is an easy and effective way for consumers of services to outsource jobs to qualified tradies in their local area economies.</p>
                              <div class="read-more-btn">
                                 <a href="http://tapatradie.com/" target=”_blank”>Visit Site</a>
                              </div>
                              <br>
                              <div class="app-str">
                                 <span><!-- <img src="images/home/user-people.svg" alt=""> --> User App <!-- <img src="images/home/next-white.svg" alt=""> --></span>
                                 <a href="https://play.google.com/store/apps/details?id=com.si.tradie" target=”_blank”><img src="images/home/Google_Play.svg" style="height: 35px;" alt=""></a>
                                 <a href="https://apps.apple.com/us/app/tradie/id1473400813" target=”_blank”><img src="images/home/app-store.svg" style="height: 35px;" alt=""></a>
                              </div>
                              <div class="app-str">
                                 <span><!-- <img src="images/home/shop.svg" alt=""> --> Tradie App <!-- <img src="images/home/next-white.svg" alt=""> --></span>
                                 <a href="https://play.google.com/store/apps/details?id=com.si.tradie" target=”_blank”><img src="images/home/Google_Play.svg" style="height: 35px;" alt=""></a>
                                 <a href="https://apps.apple.com/us/app/tradie/id1473400813" target=”_blank”><img src="images/home/app-store.svg" style="height: 35px;" alt=""></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-2 mt-4 mid-sec"><img src="images/home/jp-logo.svg" alt=""></div>
                     <div class="col-lg-5 col-md-6">
                        <div class="product-img">
                           <div class="">
                              <img src="images/home/tap-a-tradie.png" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="surec item" id="section-four">
                     <div class="row ">
               <div class="col-lg-5 col-md-6 blzpd">
                  <div class="project-detail">
                     <div class="count-logo">
                        <div class="project-logo">
                           <img src="images/home/blazepod_logo.svg" alt="">
                        </div>
                     </div>
                     <div class="des mt-4 ">
                        <img class="ipad-im" src="images/home/blazepod.png" alt="">
                        <h4>Blazepod</h4>
                        <p>Explore a variety of activities created by experts. With a wide range of sports to choose from, challenge your reaction time, agility, strength, decision making skills, and focus.</p>
                        <div class="read-more-btn">
                           <a href="https://www.blazepod.com/" target=”_blank”>Visit Site</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-2 mt-4 mid-sec"><img src="images/home/jp-logo.svg" alt=""></div>
               <div class="col-lg-5 col-md-6 thinkbly">
                  <div class="project-detail">
                     <div class="count-logo">
                        <div class="project-logo">
                           <img src="images/home/Thinkably-Logo.svg" alt="">
                        </div>
                     </div>
                     <div class="des mt-4 ">
                        <img class="ipad-im" src="images/home/thinbly.png" alt="">
                        <h4>Thinkably</h4>
                        <p>At Thinkably, we nurture conversations that matter. Through fun, imaginative storytelling we give children, and their grown ups, the tools to have open and honest conversations. Using child-friendly technology and imaginative storytelling, </p>
                        <div class="read-more-btn">
                           <a href="https://thinkably.org/" target=”_blank”>Visit Site</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
               </div>
               <div class="surec item" id="section-five">
                  <div class="row ">
               <div class="col-lg-5 col-md-6 blzpd drm-king">
                  <div class="project-detail">
                     <div class="count-logo">
                        <div class="project-logo">
                           <img src="images/home/drking-logo.svg" alt="">
                        </div>
                     </div>
                     <div class="des mt-4 ">
                        <img class="ipad-im" src="images/home/drama-king-app.png" alt="">
                        <h4>Dramaking</h4>
                        <p>Drama King is a short video maker and video creation app that allows you to create amazing videos. You can create all sorts of short videos of 15 seconds or 30 seconds. Not only this but if you like any video then you can download them directly in your WhatsApp Status.</p>
                        <a class="vw-cs-stdy" href="https://www.jploft.com/drama-king" target=”_blank”>View Case Study <img src="images/home/next-errow.svg" alt=""></a>
                        <div class="read-more-btn">
                           <!-- <a href="#"><img src="images/home/download-apple.svg" alt=""></a> -->
                           <a href="https://play.google.com/store/apps/details?id=com.jploft.dramaking" target=”_blank”><img src="images/home/download-google.svg" alt=""></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-2 mt-4 mid-sec"><img src="images/home/jp-logo.svg" alt=""></div>
               <div class="col-lg-5 col-md-6 thinkbly edso">
                  <div class="project-detail">
                     <div class="count-logo">
                        <div class="project-logo">
                           <img src="images/home/edso-logo.svg" alt="">
                        </div>
                     </div>
                     <div class="des mt-4 ">
                        <img class="ipad-im" src="images/home/edso-app.png" alt="">
                        <h4>EDSO</h4>
                        <p>Edso can be considered as a social media platform where you can find your and people and update them with your status so that they can join you. Edso is an amazing app for those who love to meet new people, explore fun place and achieve goals together. </p>
                        <a class="vw-cs-stdy" href="https://www.jploft.com/go-to" target=”_blank”>View Case Study <img src="images/home/next-errow.svg" alt=""></a>
                        <div class="read-more-btn">
                           <!-- <a href="#"><img src="images/home/download-apple.svg" alt=""></a> -->
                           <a href="https://play.google.com/store/apps/details?id=com.Edso" target=”_blank”><img src="images/home/download-google.svg" alt=""></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
               </div>
               <div class="surec item" id="section-six">
                     <div class="row ">
               <div class="col-lg-5 col-md-6 blzpd drm-king">
                  <div class="project-detail">
                     <div class="count-logo">
                        <div class="project-logo">
                           <img src="images/home/brainywoo-logo.svg" alt="">
                        </div>
                     </div>
                     <div class="des mt-4 ">
                        <img class="ipad-im" src="images/home/brainywoo-app.png" alt="">
                        <h4>Brainywood</h4>
                        <p>India’s Best Innovative Learning Platform Equipped with Brain Science. Welcome to the New Era of Learning. Brainywood app is India’s best learning platform equipped with brain science which works completely on a subscription-based model. </p>
                        <div class="read-more-btn">
                           <a href="https://apps.apple.com/in/app/brainywood/id1591356689" target=”_blank”><img src="images/home/download-apple.svg" alt=""></a>
                           <a href="https://play.google.com/store/apps/details?id=com.sharad.brainywood" target=”_blank”><img src="images/home/download-google.svg" alt=""></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-2 mt-4 mid-sec"><img src="images/home/jp-logo.svg" alt=""></div>
               <div class="col-lg-5 col-md-6 thinkbly edso">
                  <div class="project-detail">
                     <div class="count-logo">
                        <div class="project-logo">
                           <img src="images/home/lals-logo.svg" alt="">
                        </div>
                     </div>
                     <div class="des mt-4 ">
                        <img class="ipad-im" src="images/home/lals-app.png" alt="">
                        <h4>Lal's Academy</h4>
                        <p>Lalsacademy have started as a small group of teachers to give education to weaker sections of our village students. Later we moved into Competitive exam training to rural youths as a service. We got tremendous exposure, experience and reputation from this process.</p>
                        <a class="vw-cs-stdy" href="https://www.jploft.com/lals-academy" target=”_blank”>View Case Study <img src="images/home/next-errow.svg" alt=""></a>
                        <div class="read-more-btn">
                           <a href="https://play.google.com/store/apps/details?id=com.lals.lalsacademy" target=”_blank”><img src="images/home/download-apple.svg" alt=""></a>
                           <a href="https://play.google.com/store/apps/details?id=com.lals.lalsacademy" target=”_blank”><img src="images/home/download-google.svg" alt=""></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
               </div>
               <div class="surec item" id="section-seven">
                     <div class="row ">
               <div class="col-lg-5 col-md-6 blzpd drm-king">
                  <div class="project-detail">
                     <div class="count-logo">
                        <div class="project-logo">
                           <img src="images/home/roadz-logo.svg" alt="">
                        </div>
                     </div>
                     <div class="des mt-4 ">
                        <img class="ipad-im" src="images/home/roadz-app.png" alt="">
                        <h4>Roadz</h4>
                        <p>Roadz application provides roadside assistance covering Kuwait areas, where you will be able to subscribe for your car yearly and enjoy unlimited roadside assistance services during the year. Roadz app is supportive, affordable, easy to use, and trustworthy.</p>
                        <a class="vw-cs-stdy" href="https://www.jploft.com/roadz" target=”_blank”>View Case Study <img src="images/home/next-errow.svg" alt=""></a>
                        <div class="read-more-btn">
                           <a href="https://apps.apple.com/us/app/roadz-int/id1491107265?ls=1" target=”_blank”><img src="images/home/download-apple.svg" alt=""></a>
                           <a href="https://play.google.com/store/apps/details?id=com.app.roadz" target=”_blank”><img src="images/home/download-google.svg" alt=""></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-2 mt-4 mid-sec"><img src="images/home/jp-logo.svg" alt=""></div>
               <div class="col-lg-5 col-md-6 thinkbly edso">
                  <div class="project-detail">
                     <div class="count-logo">
                        <div class="project-logo">
                           <img src="images/home/yahya-logo.svg" alt="">
                        </div>
                     </div>
                     <div class="des mt-4 ">
                        <img class="ipad-im" src="images/home/yahya-app.png" alt="">
                        <h4>Yahya Hall booking</h4>
                        <p>The owner has the right to add the Halls and update the prices and dates. Not only this but the owner can also book the hall by themselves for the users. The list of the booked halls and payments can be seen by the owner. The reviews and ratings given by the user can be checked by the owner.
                        </p>
                        <a class="vw-cs-stdy" href="https://www.jploft.com/hall-booking" target=”_blank”>View Case Study <img src="images/home/next-errow.svg" alt=""></a>
                        <!-- <div class="read-more-btn">
                           <a href="https://play.google.com/store/apps/details?id=com.yahya.hallapp" target=”_blank”><img src="images/home/download-google.svg" alt=""></a>
                        </div> -->

                        <div class="app-str">
                                 <span><!-- <img src="images/home/user-people.svg" alt=""> --> User <!-- <img src="images/home/next-white.svg" alt=""> --></span>
                                 <a href="https://play.google.com/store/apps/details?id=com.yahya.hallapp" target=”_blank”><img src="images/home/Google_Play.svg" style="height: 35px;" alt=""></a>
                                 <!-- <a href="" target=”_blank”><img src="images/home/app-store.svg" style="height: 35px;" alt=""></a> -->
                              </div>
                              <div class="app-str">
                                 <span><!-- <img src="images/home/shop.svg" alt=""> --> Owner App <!-- <img src="images/home/next-white.svg" alt=""> --></span>
                                 <a href="https://play.google.com/store/apps/details?id=com.yahya.hallapp.owner" target=”_blank”><img src="images/home/Google_Play.svg" style="height: 35px;" alt=""></a>
                                 <!-- <a href="" target=”_blank”><img src="images/home/app-store.svg" style="height: 35px;" alt=""></a> -->
                              </div>


                     </div>
                  </div>
               </div>
            </div>
               </div>
               
         </div>

        <section class="container clients">
                        <h2>These are some of our amazing clients,<br>
and this is what they have to say...</h2> 
                        <div class="clients-log text-center">

                             <div class="slick-slide border-rgt border-btm border-round">
                              <div class="inner"><img src="images/home/nike1.png" alt="Placeholder" /></div>
                           </div>
                             <div class="slick-slide border-rgt border-btm border-round">
                              <div class="inner"><img src="images/home/redbull1.png" alt="Placeholder" /></div>
                           </div>
                             <div class="slick-slide border-rgt border-btm border-round">
                              <div class="inner"><img src="images/home/wffa1.png" alt="Placeholder" /></div>
                           </div>
                             <div class="slick-slide border-rgt border-btm border-round">
                              <div class="inner"><img src="images/home/redbull-street3.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide border-btm">
                              <div class="inner"><img src="images/home/logo-new1.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide border-rgt border-btm border-round">
                              <div class="inner"><img src="images/home/logo-new2.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide border-rgt border-btm border-round">
                              <div class="inner"><img src="images/home/logo-new3.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide border-rgt border-btm border-round">
                              <div class="inner"><img src="images/home/logo-new4.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide border-rgt border-btm border-round">
                              <div class="inner"><img src="images/home/logo-new5.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide border-btm">
                              <div class="inner"><img src="images/home/logo-new13.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide border-rgt">
                              <div class="inner"><img src="images/home/logo-new8.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide border-rgt">
                              <div class="inner"><img src="images/home/logo-new9.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide border-rgt">
                              <div class="inner"><img src="images/home/logo-new10.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide border-rgt">
                              <div class="inner"><img src="images/home/logo-new11.png" alt="Placeholder" /></div>
                           </div>                           
                           <div class="slick-slide">
                              <div class="inner"><img src="images/home/logo-new12.png" alt="Placeholder" /></div>
                           </div>                           
                        </div>
                     </section>

                     <div class="blu-bg">
         <section class="why-us">
            <div class="content container">
               <div>
                  <div>
                     <div class="row box vid-txt">
                        <div class="col-md-5 why-txt p-0" >
                           <h2>Hear "Why you must choose<span> JPLoft?</span>"</h2>
                           <div class="txt-point">
                              <ul>
                                 <li>Save up to 80% of development cost</li>
                                 <li>Quick team ramp-up & no contract lock-ins</li>
                                 <li>Fixed cost, hourly or monthly engagements</li>
                                 <li>97%+ client retention rate</li>
                                 <li>Strict non-disclosure agreement</li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-7 p-0">
                           <div class="slider single-item" style="width: 100%;">
                              <div class="item panel">
                                 <div class="fluid-width-video-wrapper">
                                    <iframe src="https://www.youtube.com/embed/2LIU1m4-dsc" allowfullscreen="allowfullscreen" ></iframe></div>
                                 <div class="d-flex pt-3 justify-content-between">
                                    <h4>Video Review for<br>Jploft Solutions Pvt. Ltd.</h4>
                                    <img src="images/home/watch-on.svg" alt="">
                                 </div>
                              </div>
                              <div class="item panel">
                                 <div class="fluid-width-video-wrapper"><iframe src="https://www.youtube.com/embed/tmvwsBWzAsE" allowfullscreen="allowfullscreen" id="fitvid995629"></iframe>                                          </div>
                                 <div class="d-flex pt-3 justify-content-between">
                                    <h4>Video Review for<br>Jploft Solutions Pvt. Ltd.</h4>
                                    <img src="images/home/watch-on.svg" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="box key-ftrs" id="creative">                                    				</div>
                     <div class="box key-ftrs" id="mode">
                        <div class="row">
                           <div class="col-lg-2 col-md-3">
                              <div class="client">
                                 <img src="images/home/clutch-icon.svg" alt="">                                            
                                 <h2>5 Starts                                                <span>on Clutch.co</span></h2>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-3">
                              <div class="client blu-bg" id="counter">
                                 <img src="images/home/clients.svg" alt=""><br>                                            
                                 <h2 class="counter-Txt">
                                    <div class="counter-value" data-count="40">0</div>
                                    +                                                <span>Countries served</span>
                                 </h2>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-3">
                              <div class="employi" id="counter">
                                 <img src="images/home/revenue.svg" alt="">                                            
                                 <h2 class="counter-Txt">
                                    $
                                    <div class="counter-value" data-count="160">0</div>
                                    M+                                                <span>Clientele Revenue</span>
                                 </h2>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="cost-saving">
    <div class="container-fluid">

        <div class="testimonial_cust">
            <h2>We Appreciate Our Customers Who Loves Our Work<br>
                <small>Stories From Our Happy Clients</small>
            </h2>
            <div class="slider single-item">
                <div class="item">
                    <div class="row">
                        <div class="col-md-6">  
                           <h3>Very impressed with the process and quality of work</h3>                          
                            <p>Very impressed with the process and quality of work from JPLoft. I would wholeheartedly recommend them and will certainly be using them for more projects.</p>
                            <div class="testi-to">
                                <figure class="client-img"><img src="images/home/creative-business.jpg" alt=""></figure>
                                <figcaption class="client-name">
                                    <h4>Ben O'Hara<span>Co-Founder, The Business Creative</span></h4>
                                </figcaption>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <img src="images/home/the-business-creative.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-6">
                           <h3>My experience with this company so far has been very favourable</h3>  
                           <p>My experience with this company so far has been very favourable. What I particularly like about this company, is that they are proactive in clarifying what is needed and ensuring a good understanding of the problem at hand. In the past, I have experienced other developers who have said they understand what is wanted but in truth they did not fully grasp the scope of the issues. But these guys are different in that they have excellent verbal English, so are happy to initiate a phone call via skype to ensure we are all on the same page. Friendly, reliable and trustworthy. I would certainly recommend.</p>
                            <div class="testi-to">
                                <figure class="client-img"><img src="images/home/eager-people.jpg" alt=""></figure>
                                <figcaption class="client-name">
                                    <h4>Nicolla Eagar<span>Co-Founder, Eagar People</span></h4>
                                </figcaption>
                            </div>
                        </div>
                        <div class="col-md-6">  
                           <img src="images/home/review1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-6">
                           <h3>They have done great work with my website</h3>
                           <p>They have done great work with my website, definitely recommend.</p>
                            <div class="testi-to">
                                <figure class="client-img"><img src="images/home/green-brick-digital.jpg" alt=""></figure>
                                <figcaption class="client-name">
                                    <h4>James Warriner<span>Founder & CEO, Green Brick Digital</span></h4>
                                </figcaption>
                            </div>
                        </div>
                        <div class="col-md-6">  
                           <img src="images/home/green-bricks.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-6">
                           <h3>I wanted to thank JPLoft team for a 5-star</h3>
                           <p>I wanted to thank JPLoft team for a 5-star job they did on my mobile app development project. They are working with us nearly 2 years. Their team is easy to work with and helped me make a terrific Mobile apps for iOS, Android and web admin in a short amount of time and because of their great work I extended their contract. I can without any doubt recommend this team for your next project. The company has very high standards and did an incredible job.</p>
                            <div class="testi-to">
                                <figure class="client-img"><img src="images/home/gps-india.jpg" alt=""></figure>
                                <figcaption class="client-name">
                                    <h4>Falak Agarwal<span>Director, GpsIndia</span></h4>
                                </figcaption>
                            </div>
                        </div>
                        <div class="col-md-6">   
                        <img src="images/home/vahan-track.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-6">
                           <h3>We've been using the expertise of Jploft Solutions</h3>
                           <p>We've been using the expertise of Jploft Solutions for years to develop, customize and maintain our website, mobile app, CRM and digital marketing. Jploft is a one stop solution for all your needs at affordable rates. The project manager was a great chap and he kept me updated about the progress on a daily basis. The team assisting us on all our projects is highly qualified and experienced while being reliable, friendly and flexible in its approach. Highly recommended.</p>
                            <div class="testi-to">
                                <figure class="client-img"><img src="images/home/times-india-travel.jpg" alt=""></figure>
                                <figcaption class="client-name">
                                    <h4>Vijay Yadav<span>Founder & CEO, Times India Travels</span></h4>
                                </figcaption>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/home/times-india-travel.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-6">
                           <h3>Jploft Solutions delivered high-quality work within allotted budgets</h3>
                           <p>Jploft Solutions delivered high-quality work within allotted budgets and time frames for our mobile apps and web admin. Their efficient processes and professional team ensured outstanding project management. Jploft Designs excelled in the areas of transparency, responsiveness, and technical expertise. All the best for your future ventures. Recommended….</p>
                            <div class="testi-to">
                                <figure class="client-img"><img src="images/home/quality-export.jpg" alt=""></figure>
                                <figcaption class="client-name">
                                    <h4>Rajeev Kashyap<span>General Manager, Quality Flavours Export</span></h4>
                                </figcaption>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/home/quality-flv-export.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<section class="about-img-bg w-100">
            <div class="container">
               <div class="slideshow home-team-img">
                  <div class="statcs">
                     <ul>
                        <li>50+<span>Employee Strength</span></li>
                        <li>550+<span>Project Delivered</span></li>
                        <li>40+<span>Country Services</span></li>
                        <li>$160M+<span>Clientele Revenue</span></li>
                     </ul>
                  </div>
                  <div class="slider">
                     <div class="item">
                        <h3>"A Journey to Become the Fastest Growing IT Company"</h3>
                        <p>We have come a long way from where we began along with all the ups and downs to serve you the best.</p>
                        <!-- <img class="about-im" src="images/about-us2.png" alt="About Us"> --> 
                        <iframe class="jp-vdo" src="https://www.youtube.com/embed/j3nW4EXApnI" allowfullscreen="allowfullscreen"></iframe>                     
                     </div>
                     <div class="item">
                        <h3>"We Listen. We Discuss. We Implement"</h3>
                        <p>We dream, architect, design and develop. But more than that, we are a team of passionate people driven by one relentless pursuit- to craft innovative solutions and deliver unparalleled results.</p>
                        <img class="about-im" src="images/about-us3.png" alt="About Us">                            
                     </div>
                     <div class="item">
                        <h3>"Healthy Working Environment Is All That We Consider"</h3>
                        <p>As a team, our motto is not just to serve the clients but to make them feel relaxed and let them experience the excellence of our combined efforts.</p>
                        <img class="about-im" src="images/about-us4.png" alt="About Us">                            
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <section class="achievement">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <img src="images/home/ach-badge.svg" alt="" />
                <h2>Our Clients Simply Love Our Work</h2>
                <p>4.9 out of 5.0 by 1000+ clients globally for Web & Mobile App Development and Digital Marketing projects.</p>
            </div>
            <div class="col-lg-9 col-md-12">
                <ul>
                    <li><span>Extract</span>
                        <p>Evaluated by Extract with 4.8 stars Ratings</p>
                        <img src="images/home/extract.png" alt="" />
                    </li>
                    <li><span class="ach-blu">Clutch</span>
                        <p>Recognized by Clutch with 5 Stars Ratings</p>
                        <img src="images/home/We_Deliver_White.png" alt="" />
                    </li>
                    <li><span class="ach-grn">TopDevelopers</span>
                        <p>Titled as a Top Native Mobile App Development Company</p>
                        <img src="images/home/top-angularjs.png" alt="" />
                    </li>
                    <li><span class="ach-ylo">GoodFirms</span>
                        <p>Top-rated App Development Company on GoodFirms with 5 Star Ratings</p>
                        <img src="images/home/top-software-developers-1.png" alt="" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="container technology">
                     <div class="hdng-qte">
                        <div class="hdng-anrd">
                           <h2>Get Services Blended With Latest Technologies</h2>
                           <p>Jploft Solutions uses cutting-edge technologies to develop unique solutions for your business. The vast area we cover in the <br>technologies makes us stand above other companies.</p> 
                        </div>
                        <button class="btn btn-primary four myButt hvr-bubble-right" type="submit">
                           <span>Request a Quote <img src="images/home/next-errow.svg" alt=""></span>
                        </button>
                     </div>
                        <div class="clients-log text-center">
                             <div class="slick-slide">
                              <div class="inner"><img src="images/home/ios-logo.png" alt="Placeholder" /></div>
                           </div>
                             <div class="slick-slide">
                              <div class="inner"><img src="images/home/android-logo.png" alt="Placeholder" /></div>
                           </div>
                             <div class="slick-slide">
                              <div class="inner"><img src="images/home/java-logo.png" alt="Placeholder" /></div>
                           </div>
                             <div class="slick-slide">
                              <div class="inner"><img src="images/home/php.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide">
                              <div class="inner"><img src="images/home/nodejs.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide">
                              <div class="inner"><img src="images/home/e-learning-logo.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide">
                              <div class="inner"><img src="images/home/magento-logo.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide">
                              <div class="inner"><img src="images/home/shopify.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide">
                              <div class="inner"><img src="images/home/wordpress-logo.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide">
                              <div class="inner"><img src="images/home/salesforce-logo.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide">
                              <div class="inner"><img src="images/home/unity-logo.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide">
                              <div class="inner"><img src="images/home/flutterio-icon.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide">
                              <div class="inner"><img src="images/home/angular-icon.png" alt="Placeholder" /></div>
                           </div>
                           <div class="slick-slide">
                              <div class="inner"><img src="images/home/vue-js.png" alt="Placeholder" /></div>
                           </div>                          
                           <div class="slick-slide">
                              <div class="inner"><img src="images/home/react-native-logo.png" alt="Placeholder" /></div>
                           </div>
                        
                        </div>
                     </section>
         <?php require("top-footer.php"); ?>            <?php require("footer.php"); ?>            <script>            tabControl();var resizeTimer;$(window).on('resize', function(e) {  clearTimeout(resizeTimer);  resizeTimer = setTimeout(function() {    tabControl();  }, 250);});function tabControl() {  var tabs = $('.tabbed-content').find('.tabs');  if(tabs.is(':visible')) {    tabs.find('a').on('click', function(event) {      event.preventDefault();      var target = $(this).attr('href'),          tabs = $(this).parents('.tabs'),          buttons = tabs.find('a'),          item = tabs.parents('.tabbed-content').find('.item');      buttons.removeClass('active');      item.removeClass('active');      $(this).addClass('active');      $(target).addClass('active');    });  } else {    $('.item').on('click', function() {      var container = $(this).parents('.tabbed-content'),          currId = $(this).attr('id'),          items = container.find('.item');      container.find('.tabs a').removeClass('active');      items.removeClass('active');      $(this).addClass('active');      container.find('.tabs a[href$="#'+ currId +'"]').addClass('active');    });  } }            </script>        
      </div>
   </body>
</html>