<html class="no-js" lang="en-US">  <!--<![endif]-->
<head>

<!-- META DATA -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Title -->
<title>Tarot 4 All </title>


<!-- CSS Global Compulsory -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css" >

<!-- CSS Implementing Plugins -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/ionicons.min.css" />
<link rel="stylesheet" type="text/css" href="css/animate.min.css" />
<link rel="stylesheet" type="text/css" href="css/flexslider.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="css/owl.theme.css" />
<link rel="stylesheet" type="text/css" href="css/vegas.min.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />
<link rel="stylesheet" type="text/css" href="css/sidebar.css" />

<!-- Fonts -->	
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,700italic,400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,900' rel='stylesheet' type='text/css'>


<!-- JS -->
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/snap.svg-min.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://webnextbd.net/demo/js/respond.min.js"></script>
<![endif]-->

<!--[if lt IE 11]>
<link rel="stylesheet" type="text/css" href="http://webnextbd.net/demo/css/ie.css">
<![endif]-->

</head>
<body class="image-background">

<!-- Preloader -->
<div id="preloader">
<div id="loading-animation">&nbsp;</div>
</div>
<!-- /Preloader -->

<!-- Overlay -->
<div id="section-home" class="home-section-wrap center">
<div class="section-overlay"></div>
</div>
<!-- /Overlay -->

<!-- container -->
<div class="containers">

<!-- main -->
<div class="main">
<!-- header -->
<header class="header-site">
<div class="logo-site animated bounceInDown" data-animation-delay="700">
<img class="img-responsive" src="images/logo.png" data-at2x="images/logo@2x.png" alt="Logo" />
</div>
</header>
<!-- /header -->

<!-- section -->                 
<section class="section fullscreen site-main">
<div class="container-section">
<div class="container-table">
<div class="content-table">
<!-- bt-carousel -->
<div class="bt-carousel">

<!-- services section -->
<div class="item-slide show">
<!-- container -->
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">

<!-- header section -->
<div class="header-section animated bounceInDown" data-animation-delay="700">
<!-- title section -->
<h2 class="title-section">Our Subscribers</h2><!-- /title section -->
<div class="line-separate line-white line-center"><span></span></div>
<p>
<?php

	if( isset($_GET['user'])) {
		$file = file_get_contents('./logs.txt', FILE_USE_INCLUDE_PATH);
		echo $file;
   	} else {
   		echo "Empty";      
   	}


?>
</p>
</div>
<!-- /header section -->
	
<!-- content slide -->
<div class="content-slide">
<div class="row">
<div class="col-md-6 animated bounceInLeft" data-animation-delay="700">
<!-- service list -->
<div class="service-list">

<!-- row -->
<div class="row animated bounceInUp" data-animation-delay="700">
<div class="col-md-6">
<!-- service list -->
<div class="service-list">

<div class="col-md-6">
<!-- service list -->
<div class="service-list">

</div><!-- /content slide -->
</div>
</div><!-- /row -->
</div><!-- /container -->
</div>
<!-- /services section -->

</div><!-- /bt-carousel -->
</div>
</div>
</div>
</section><!-- /section -->  
</div><!-- /main -->
</div><!-- /container -->


<!-- JS -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/retina.min.js"></script>
<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
<script type="text/javascript" src="js/jquery.parallaxify.min.js"></script>
<script type="text/javascript" src="js/jquery.particleground.min.js"></script>
<script type="text/javascript" src="js/vegas.min.js"></script>
<script type="text/javascript" src="js/trianglify.min.js"></script>
<script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/sidebar.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>