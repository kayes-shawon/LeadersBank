<?php
session_start();
if(session_is_registered("email1") && session_is_registered("passward1")){
//session_destroy();
?>
<!--  start  --> 

<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Home</title>
  	<meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.cycle.all.min.js"></script>
    <script type="text/javascript">
		$(function(){
			$('.mp-slider').cycle({
				pager: '#mp-pags',
				timeout:7000,
				pagerAnchorBuilder: pagerFactory
				});
			function pagerFactory(index, slide) {
				var titles = []
				titles[0] = $("#mp-pags-cont li:eq(0)").text()
				titles[1] = $("#mp-pags-cont li:eq(1)").text()
				titles[2] = $("#mp-pags-cont li:eq(2)").text()
			return '<li><a href="#">'+(titles[index])+'</a></li>';
			}; 
		})
	</script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body id="page1">

<!-- Header -->
<header>
    <div class="inner">
        <h1 class="logo"><a href="index.html">Point</a></h1>
	</div>
    <nav>
        <ul class="sf-menu">
            <li class="current"><a href="index.html">home</a></li>
	
            <li><a href="about.html">about</a></li>
            <li>
                <a href="services.html">Banking</a>
                <ul>
                    <li><a href="#">Online Banking</a></li>
                    <li><a href="#">Corporate Banking</a></li>
                    <li>
                        <a href="#">Remote Banking</a>
                        <ul>
                            <li><a href="#">ATM</a></li>
                            <li><a href="#">Sms</a></li>
							<li><a href="#">Contact Centre</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Student Banking</a></li>
                </ul>
            </li>
            <li><a href="products.html">Carrer</a></li>
            <li><a href="registration.html">Registration</a></li>
			 <ul>
                    <li><a href="#">Maecenas faucibus</a></li>
                    <li><a href="#">Fusce tincidunt</a></li>
                    <li>
                        <a href="#">tempor eros</a>
                        <ul>
                            <li><a href="#">ut viverra</a></li>
                            <li><a href="#">hendrerit mauris</a></li>
                        </ul>
        </ul>
        <div class="clear"></div>
    </nav>
    <div>
	<!--    -->
	<div style="width:100%;">


</div>

	
	<!--  -->
	</div>
</header>
<!-- Content -->
<br>
<br>
<br>
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - August 06, 2011!</div>
    <div class="container_24">
    	<div class="grid_24 content-border">
            <div class="top-content-box">
                <ul id="mp-pags-cont">
                    <li><a href="#">business strategy</a></li>
                    <li><a href="#">marketing research</a></li>
                    <li><a href="#">financial &amp; banking</a></li>
                </ul>
                <ul id="mp-pags"></ul>
            </div>
            <div class="top-row">
            	<h1 class="aligncenter">Our experience is the base for <br>your innovations.</h1>
                <div class="wrapper">
                	<div class="grid_5 prefix_1 alpha">
                    	<div class="wrapper">
                        	<span class="dropcap color-1">A.</span>
                            <div class="extra-wrap">
                            	<strong class="str-1 color-1">
                                	Vivamus hendrerit <br>mauris ut dui gravida ut viverra lectus tincidunt cras mattis.
                                </strong>
                                <a href="#" class="link">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="grid_5">
                    	<span class="dropcap color-2">B.</span>
                            <div class="extra-wrap">
                            <strong class="str-1 color-2">
                                Cras mattis tempor <br>eros nec tristique sed sed felis arcu vel vehicula augue. 
                            </strong>
                            <a href="#" class="link">read more</a>
                        </div>
                    </div>
                    <div class="grid_5">
                    	<span class="dropcap color-3">C.</span>
                        <div class="extra-wrap">
                            <strong class="str-1 color-3">
                                Sed sed felis arcu, vel vehicula maecenas faucibus sagittis cursus fusce tincidunt. 
                            </strong>
                            <a href="#" class="link">read more</a>
                        </div>
                    </div>
                    <div class="grid_7 suffix_1 omega">
                    	<span class="dropcap color-4">D.</span>
                        <div class="extra-wrap">
                            <strong class="str-1 color-4">
                                Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. Maecenas faucibus cursus. Fusce tincidunt tellus eget tristique. cursus.
                            </strong>
                            <a href="#" class="link">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper indent-top">
            	<article class="grid_15 suffix_1 prefix_1 alpha">
                	<h2>Welcome to our Bank </h2>
                    <p>
                    	<a href="http://blog.templatemonster.com/free-website-templates/" rel="nofollow">Click here</a> for more info about this free website created by kayes shawon. This website template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid.  Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec tristique. 
                    </p>
                    <div class="wrapper">
                    	<div class="grid_5 alpha">
                        	<figure class="img-indent-bot">
                            	<img src="images/page1-img1.jpg" alt="">
                            </figure>
                            <div class="alignright author">Kayes Shawon <em>managing Director </em>
                            </div>
                        </div>
                        <div class="grid_5">
                        	<figure class="img-indent-bot">
                            	<img src="images/page1-img2.jpg" alt="">
                            </figure>
                            <div class="alignright author">
                            	Thom Smith
                                <em>marketolog</em>
                            </div>
                        </div>
                        <div class="grid_5 omega">
                        	<figure class="img-indent-bot">
                            	<img src="images/page1-img3.jpg" alt="">
                            </figure>
                            <div class="alignright author">
                            	April Black
                                <em>manager</em>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="grid_6 suffix_1 omega">
                	<h2>Latest news:</h2>
                    <dl class="news-list">
                    	<dt>
                        	<a href="#">Nov. <strong>25</strong>, 2012</a></dt>
                        <dd>
                        	The PSD source files of this Point template are available for free for the registered members of TemplateMonster.com. Feel free to get them! 
                        </dd>
                        <dt>
                        	<a href="#">Nov. <strong>20</strong>, 2012</a>
                        </dt>
                        <dd class="last">
                        	This website template has several pages:  Home, About, Services, Products, Contacts (note that contact us form - doesn't work)
                        </dd>
                    </dl>
                    <div class="alignright">
                        <a href="#" class="link">read more</a>
                    </div>
                </article>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</section>
<aside>
	<div class="container_24">
    	<div class="wrapper">
        	<div class="grid_24 aside-bg">
            	<div class="wrapper">
                	<article class="grid_5 prefix_1 alpha">
                    	<h4>Services:</h4>
                        <ul class="list-1">
                        	<li><a href="#">Vivamus hendrerit mauris</a></li> 
                            <li><a href="#">ut dui gravida ut viverra</a></li> 
                            <li><a href="#">lectus tincidunt Cras</a></li> 
                            <li><a href="#">mattis tempor eros nec</a></li>
                        </ul>
                    </article>
                    <article class="grid_5">
                    	<h4>Solutions:</h4>
                        <ul class="list-1">
                        	<li><a href="#">lectus tincidunt Cras</a></li>
                            <li><a href="#">mattis tempor eros nec</a></li> 
                            <li><a href="#">tristique Sed sed felis</a></li>
							<li><a href="#">arcu vel vehicula augue</a></li>
                        </ul>
                    </article>
                    <article class="grid_5">
                    	<h4>Programs:</h4>
                        <ul class="list-1">
                        	<li><a href="#">mattis tempor eros nec</a></li> 
                            <li><a href="#">tristique Sed sed felis</a></li> 
                            <li><a href="#">arcu vel vehicula augue</a></li>
                            <li><a href="#">Maecenas faucibus </a></li>
                        </ul>
                    </article>
                    <article class="grid_8 omega">
                    	<h4 class="pad-1">Testimonials:</h4>
                        <blockquote class="quote">
                        	<div class="inner">
                            	Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue.
                            </div>
                        </blockquote>
                        <div class="author alignright pad-2">
                        	April Black <span>( manager )</span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- Footer -->
<footer>
    <div class="copyright">
        &copy; 2014
        <div>Designed by Kayes Shawon </div>
    </div>
    <ul class="social-list">
    	<li><a href="www.facebook.com"><img src="images/social-link-1.jpg" alt="" border="0"></a></li>
        <li><a href="#"><img src="images/social-link-2.jpg" alt=""></a></li>
        <li><a href="#"><img src="images/social-link-3.jpg" alt=""></a></li>
    </ul>
</footer>
</body>
</html>


<!-- end  -->
<?php  }else{ ?>


<!-- <meta http-equiv="refresh" content="0" URL="registration.php" />  -->

<meta http-equiv="refresh" content="0;url=registration.php">

<?php  } ?>
