<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>Jithin Jose - My Personal Portfolio</title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Cache-control" content="public">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Jithin Jose - My Personal Portfolio.">
<meta name="author" content="Jithin Jose">
<link rel="author" href="https://plus.google.com/+JithinJose2"/>

<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-35006431-2"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-35006431-2');
</script>


    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Retina Images -->
<script>if((window.devicePixelRatio===undefined?1:window.devicePixelRatio)>1)
    document.cookie='HTTP_IS_RETINA=1;path=/';</script>
<!-- End Retina Images -->

<!-- Google Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,700,500' rel='stylesheet' type='text/css'>

<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="colors/blue.css" id="colors" />
<link rel="stylesheet" type="text/css" href="css/animations.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/flaticon.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>

<body itemscope itemtype="http://data-vocabulary.org/Person">

<!-- Facebook Source -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Loader -->
<div id="page-loader">	</div>
<!-- Loader / End -->

<!-- Header  -->
<header id="nav-content" class="vertical-nav nav-white">

	<!-- Logo -->
	<div class="my-logo">
    	<a href="#profile"><img src="images/jithin.jpg" alt="Jithin Jose" itemprop="photo"/></a>
    </div>
    
    <!-- Navigation -->
    <ul class="menu nav me-nav">
    	<li class="menu-item active"><a href="#profile"><span>Profile</span><i class="fa fa-user"></i></a></li>
        <li class="menu-item"><a href="#resume"><span>Resume</span><i class="fa fa-pencil"></i></a></li>
        <li class="menu-item"><a href="#portfolio"><span>Portfolio</span><i class="fa fa-desktop"></i></a></li>
        <li class="menu-item"><a href="#blog"><span>Latest Posts</span><i class="fa fa-comment"></i></a></li>
        <li class="menu-item"><a href="#contact"><span>Contact</span><i class="fa fa-phone"></i></a></li>
    </ul>
    
    <!-- Copyright -->
    <span class="copyright hidden-md">&copy; <?php echo date('Y')?> <b itemprop="name">Jithin Jose</b>.</span>

</header>
<!-- Header / End -->

<!-- Page Content -->
<div id="page-content">

	<!-- Profile -->
	<section id="profile" class="black">
    
    	<div class="content padded dark">
        
        	<!-- Top Bar -->
        	<div class="top-bar">
            
            	<!-- Social media -->
            	<div class="pull-left">
                	<span class="hiddend-sm hidden-xs">Check my public profiles! &nbsp; &nbsp; </span>
                    <ul class="social-icons si-pull-up">
                        <li><a href="https://github.com/jithinjose2" target="_blank"><i class="fa fa-github"></i></a></li>
                        <li><a href="https://stackoverflow.com/story/jithinjose2" target="_blank"><i class="fa fa-stack-overflow"></i></a></li>
                        <li><a href="https://twitter.com/jithinjose02" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/+JithinJose2" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/jithin-jose-08226041/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                
                <!-- URL -->
                <div class="pull-right">
                	<a href="http://jithin.pw/" class="hidden-xs" itemprop="url">jithin.pw</a>
                </div>
                
            </div>
        
			<!-- Profile Content -->
            <div class="profile-content">
            	<h1 class="short">Jithin Jose</h1>
                <h5>I am <span class="text-primary">professional</span> Backend Developer.</h5>
                <a href="jithin.jose.pdf" class="btn btn-primary" target="_blank">Download My CV</a>
                <a href="#contact" class="btn btn-default">Contact me</a>
            </div>
            
            <!-- Bottom Bar -->
            <div class="bottom-bar profile-bottom-bar hidden-xs">
            
            	<!-- Contact List -->
                <ul class="list-inline">
                  <li><i class="inline-icon icon-before-and-after text-primary fa fa-map-marker"></i>Kallarakkal House, Angamaly,Eranakulam,Kerala State 683572, India</li>
                  <li><i class="inline-icon icon-before-and-after text-primary fa fa-comment"></i>jithinjose2@gmail.com</li>
                  <li><i class="inline-icon icon-before-and-after text-primary fa fa-phone"></i>+91 9400771075</li>
                </ul>
             
            </div>
                    
        </div>    	
        
    </section>
    <!-- Profile / End -->

    <?php require "resume.php"; ?>
    
    <!-- Portfolio -->
    <section id="portfolio">
    
    	<!-- Projects Holder -->
    	<div class="projects-holder black dark clearfix">
            <div class="single-project animated fade-in">
                <div class="project-image" style="width:400px;height: 340px;overflow: hidden">
                    <img src="images/portfolio/InstantChat-A-WebSocket-Library-Implementation.jpg" alt=""  style="max-width: inherit;"/>
                </div>
                <div class="project-mask">
                    <div class="project-info">
                        <div class="project-title">PHP WebSocket Library</div>
                        <div class="project-caption text-red">Scalable websocket library with laravel 5.5 support</div>
                        <div class="project-buttons"><a href="https://github.com/jithinjose2/websocket" class="btn btn-red btn-sm" target="_blank">View it</a></div>
                    </div>
                </div>
            </div>
          <!-- Single Project --> 
          <div class="single-project animated fade-in">
            <div class="project-image" style="width:400px;height: 340px;overflow: hidden">
                <img src="images/portfolio/8085-simulator.png" alt="" style="max-width: inherit;"/>
            </div>
            <div class="project-mask">
              <div class="project-info">
                <div class="project-title">8085 Simulator</div>
                <div class="project-caption text-blue">Windows app which simulate 8085 microprocessor</div>
                <div class="project-buttons"><a href="http://www.jtechsoftwares.in/8085-simulator.html" class="btn btn-blue btn-sm" target="_blank">View it</a> </div>
              </div>
            </div>
          </div>
          <!-- Single Project --> 
          <div class="single-project animated fade-in appear-second">
            <div class="project-image" style="width:400px;height: 340px;overflow: hidden">
                <img src="images/portfolio/pc-boost.png" alt=""  style="max-width: inherit;"/>
            </div>
            <div class="project-mask">
              <div class="project-info">
                <div class="project-title">Pc Boost</div>
                <div class="project-caption text-orange">Windows optimisation and customization software</div>
                <div class="project-buttons"><a href="http://www.jtechsoftwares.in/pc-boost.html" class="btn btn-orange btn-sm"  target="_blank">View it</a> </div>
              </div>
            </div>
          </div>
          <!-- Single Project --> 
          <div class="single-project animated fade-in appear-fourth">
            <div class="project-image" style="width:400px;height: 340px;overflow: hidden">
                <img src="images/maxresdefault.png" alt=""  style="max-width: inherit;"/>
            </div>
            <div class="project-mask">
              <div class="project-info">
                <div class="project-title">Home Automation</div>
                <div class="project-caption text-blue">MagicMirror Augmented Home Automation system using PHP & Websockets</div>
                <div class="project-buttons"><a href="http://poojyam.in" class="btn btn-red btn-sm">View it</a></div>
              </div>
            </div>
          </div>

          <div class="single-project animated fade-in appear-second">
            <div class="project-image" style="width:400px;height: 340px;overflow: hidden">
                <img src="images/portfolio/APC-Admin-Memory-fragmentation.jpg" alt=""  style="max-width: inherit;"/>
            </div>
            <div class="project-mask">
              <div class="project-info">
                <div class="project-title">APC Admin</div>
                <div class="project-caption text-green">New real time admin interface for PHP APC Cache</div>
                <div class="project-buttons"><a href="http://www.techzonemind.com/apc-admin-new-generation-admin-interface-php-apc/" class="btn btn-green btn-sm" target="_blank">View it</a></div>
              </div>
            </div>
          </div>
          <div class="single-project animated fade-in appear-fourth">
            <div class="project-image" style="width:400px;height: 340px;overflow: hidden">
                <img src="images/portfolio/progle.png" alt=""  style="max-width: inherit;"/>
            </div>
            <div class="project-mask">
		<div class="project-info">
		    <div class="project-title">Progle</div>
		    <div class="project-caption text-blue">Product search engine built with PHP,APC,Sphinx & Mysql</div>
		    <div class="project-buttons"><a href="http://www.progle.info/" class="btn btn-blue btn-sm" target="_blank">View it</a></div>
		</div>
            </div>
          </div>
        </div>
        
        <!-- Ajax Project Details -->
        <div class="project-content"></div>
        
    </section>
    <!-- Portfjolo / End -->
    
    <!-- Blog -->
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);
    $posts  = json_decode(file_get_contents('http://www.techzonemind.com/api/get_recent_posts/'),true);
    $excluded_tags =  array('apc-admin','facebook','communication','server-monitoring', 'ESP8266');
    
    ?>
    <section id="blog">
    
    	<div class="content padded">
        
          <div  class="row">
          
            <div class="col-lg-12">
                
              <!-- Post Carousel --> 
              <div class="post-carousel animated slide-in-top">
		
		<?php
        $postIDs = [];
		foreach($posts['posts'] as $post)  {
            if (in_array($post['id'], $postIDs)) {
                continue;
            }
            $postIDs[] = $post['id'];
		    $image = "";
		    if(isset($post['thumbnail_images']['full']['url']) && $post['thumbnail_images']['full']['width']>=500 && $post['thumbnail_images']['full']['width']>=300){
			$image = $post['thumbnail_images']['full']['url'];
		    }else{
			foreach($post['attachments'] as $attch){
			    if(isset($attch['images']['full']['url']) && $attch['images']['full']['width']>=500 && $attch['images']['full']['height']>=300){
				$image = $attch['images']['full']['url'];
			    }
			}
		    }
		?>
		<!-- Single Post -->
                <article class="post post-carousel-item">
                    <div class="post-image" style="width: 477px;height: 286px;overflow:hidden">
			<img src="<?php echo $image?>" alt="<?php echo $post['title']?>" style="max-width: inherit"/>
		    </div>
                    <div class="post-content-holder">
                        <div class="post-content">
                            <div class="post-info clearfix">
                                <span class="post-date"><?php echo date('j F, Y',strtotime($post['modified']));?></span>
                                <div class="post-meta">
				    <?php
                    $post['tags'] = array_slice($post['tags'], 0 , 2);
				    foreach($post['tags'] as $tag) {
					if(in_array($tag['slug'],$excluded_tags)){
					    continue;
					}
					?>
                                    <span><i class="fa fa-tag"></i><a href="http://www.techzonemind.com/tag/<?php echo $tag['slug']?>/"><?php echo $tag['title']?></a></span>
				    <?php } ?>
                                </div>
                            </div>
                            <div class="post-text">
                                <h3  style="font-size: 30px"><a href="<?php echo $post['url']?>"><?php echo $post['title']?></a></h3>
                                <p><?php echo $post['excerpt']?> </p>
                                <a href="<?php echo $post['url']?>" class="btn btn-primary btn-sm">Read more</a>
                            </div>
                        </div>
                    </div>
                </article>
		<?php } ?>
		
              </div> 
               
              <!-- End Of Section -->
              <div class="end-of-section">
          
                <!-- Left Caption -->
                <div class="pull-left">
                  <span class="hiddend-sm hidden-xs">Would you like to check all of my posts? &nbsp; &nbsp;</span><a href="http://www.techzonemind.com/" class="btn btn-black btn-sm" target="_blank">Check my Blog Page!</a>
                </div>
                 <?php if(count($posts['posts'])>0){ ?>
                <!-- Post Carousel Navigation -->  
                <div class="post-carousel-control">
                  <a class="post-carousel-prev" href="#">Previous</a>
                  <a class="post-carousel-next" href="#">Next</a>
                </div>
				<?php } ?>
              </div>
                
            </div>
          
          </div>
            
        </div>
        
    </section>
    <!-- Blog / End -->
    
    <!-- Contact -->
    <section id="contact" class="black">
    
    	<!-- Google Map -->
    	<div id="google-map" class="animated zoom-out"></div>
        
        <!-- Contact Content -->
        <div class="content contact-content padded dark animated slide-in-left">
        	<i class="title-icon text-primary flaticon-speech43"></i>
        	<h2>Do you want to hire me?</h2>
            <!-- Contact List -->Kallarakkal House, Angamaly,Eranakulam,Kerala State 683572, India
            <ul class="list-unstyled list-unstyled-icons">
              <li itemprop="address"><i class="inline-icon icon-before-and-after text-primary fa fa-map-marker"></i>Kallarakkal House, Angamaly,<br />Eranakulam,Kerala <br />State 683572, India</li>
              <li><i class="inline-icon icon-before-and-after text-primary fa fa-comment"></i>jithinjose2@gmail.com</li>
              <li><i class="inline-icon icon-before-and-after text-primary fa fa-phone"></i>+91 9400771075</li>
            </ul>
            <br/><br/>
            <p><a href="jithin.jose.pdf" class="btn btn-primary">Download my CV</a></p>
            <!-- Bottom Bar -->
            <div class="bottom-bar contact-bottom-bar">
            	<div class="row">
                	<div class="col-md-12 col-lg-12">
                    	<h5>Check my social media!</h5>
                        <!-- Social Icons -->
                        <ul class="social-icons medium">
                            <li><a href="https://github.com/jithinjose2" target="_blank"><i class="fa fa-github"></i></a></li>
                            <li><a href="https://stackoverflow.com/story/jithinjose2" target="_blank"><i class="fa fa-stack-overflow"></i></a></li>
                            <li><a href="https://twitter.com/jithinjose02" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://plus.google.com/+JithinJose2" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/jithin-jose-08226041/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        
    </section>
    <!-- Contact / End -->
	
</div>
<!-- Page Content / End -->

<!-- Scripts -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/page-loader.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<!-- Custom Script -->
<script type="text/javascript" src="js/custom.js"></script>


</body>

</html>
