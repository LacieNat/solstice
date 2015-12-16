<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title('Access Comm'); ?></title>

		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="msapplication-TileColor" content="#f01d4f">
        <meta name="msapplication-TileImage" content="">

        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/library/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/library/css/styles.css" />

		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png" />
		<link rel="icon" href="">
		<!--[if IE]>
			<link rel="shortcut icon" href="" />
		<![endif]-->

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php wp_head(); ?>

        <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/library/css/ie8.css" />
        <![endif]-->

        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery-1.10.1.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/bowser.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/greensock/TweenMax.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.superscrollorama.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/iscroll.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/load.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/queryloader2.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/instafeed.min.js"></script>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/web fonts/bebasneue_regular_english/stylesheet.css" type="text/css" charset="utf-8" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/fonts/Lato-Regular.css" type="text/css" charset="utf-8" />
        <script type="text/javascript">
            // GA CODE
        </script>
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/library/js/html5shiv.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/library/js/response.min.js"></script>
        <![endif]-->
	</head>
	
	<style>
	body {
	    font-family: bebas_neueregular;
	    font-weight: thin;
	    overflow: visible;
	}
	</style>

	<body <?php body_class(); ?>>
        <?php
        $header = get_page_by_title('header');
        $logoUrl = get_field('logo', $header->ID);
        $headerBGColor = get_field('header_background_color', $header->ID);
        $general = get_page_by_title('general');
        $typeKit = get_field('typekit_code', $general->ID);
        $typeKitFamily = get_field('typekit_family', $general->ID);
        $homePage = get_page_by_title('home');
        

        ?>
        <script type="text/javascript">
            $(document).ready(function() {
               /* $('.dropdown').on('show.bs.dropdown', function(){
                    $(this).find(".dropdown-toggle").addClass("active");
                });
                $('.dropdown').on('hide.bs.dropdown', function(){
                    $(this).find(".dropdown-toggle").removeClass("active");
                });
                if($(window).width() < 768){
                    $('body').addClass("mobile");
                }
                $("body").queryLoader2({
                    barColor: "#6e6d73",
                    backgroundColor: "#000",
                    percentage: true,
                    barHeight: 1,
                    completeAnimation: "grow",
                    minimumTime: 100
                });*/

            	//$("#menuPage").hide();
            	/*setTimeout(function(){
            		$("#menuPage").fadeIn(500);
            	}, 2500);
				$(".header").css({
					'width': document.body.clientWidth+'px'
				});*/
   
            	
                <?php if($typeKit): ?>
                    typekitLoad('<?php echo $typeKit; ?>', function(){
                        // Typekit has downloaded and initialised successfully
                    });
                <?php endif; ?>

    			$('.menuListVerticalItems').hover(
    	    			function(){
        	    		
    	    			},
    	    			function(){
        	    			
    	    			}
    	    	);
                
            });

            function showMenu(){
				$("#menuPage").fadeToggle(500);
				$("#menuPage").offset({top:$(document).scrollTop()});
            }
            
        </script>
        <style type="text/css">
            *{
                font-family: <?php echo $typeKitFamily; ?> !important;
            }
            
            #menuPage {
            	height: 100%;
            	width: 100%;
            	background-color: #000;
            	opacity: 0.8;
            	z-index: 3;
            	display: none;
            	position: fixed;
            	top: 0;
            	left: 0;
            }
            
            #menuListVertical {
            	color: white;
            	font-size: 36px;
            	text-align: center;
            	list-style-type: none;
            	margin-top: 200px;
            	letter-spacing: 4px;
            }
            
            .menuListVerticalItems{
            	color: white;
            	margin-top:30px;
            	margin-bottom:30px;
            	position: relative;
            	z-index: 30;
            }
            
            .menuListHorizontalItems{
            	display: inline;
            	list-style-type: none;
            	font-size: 20px;
            	text-decoration: underline;
            }
            
            #menuListHorizontal{
            	text-align:center;
            	
            }
            
            .header {
            	top:10px;
            	margin: 60px;
            	position: fixed;
            	z-index: 9999;
            	display: inline;
            	width: 92%;
            }
            
            #menuButton{
            	color:white;
            	font-size:30px;
            	font-weight: thin;
            	text-align: right;
            	letter-spacing: 2px;
            	padding-right: 3%;
            }
            
            #menuButton:hover{
            	cursor: pointer;
            }
            
            #homePageNav {
            	height:50px;
            	width: auto;
            	margin-left: 13%;
            }
            
            a.vertical:hover {
            	background-image: url('<?php echo get_template_directory_uri();?>/library/menubg.png');
            	background-repeat: no-repeat;
            	background-position: center;
            }
            
            a.horizontal:hover{
            	font-size: 23px;
            }
        </style>
        
        <div class="row margin-0 header">
        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding-0">
        		<a href="<?php echo get_page_link($homePage->ID); ?>"><img id="homePageNav" src="<?php echo get_template_directory_uri(); ?>/library/logo.png"/></a>
        	</div>
      	  	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding-0" onclick="showMenu()" id="menuButton">MENU</div>
        </div>

        <div class="row margin-0" id="menuPage">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
        		<div class="row margin-0">
        	    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
        				<ul id="menuListVertical">
        					<?php 
        					$menu_name = 'main';
        					if(($locations = get_nav_menu_locations())&&isset($locations[$menu_name])):
        						$menu = wp_get_nav_menu_object($locations[$menu_name]);
        						$menu_items = wp_get_nav_menu_items($menu->term_id);
        						foreach((array)$menu_items as $key=>$menu_item):
        							$title = $menu_item->title;
        							$url = $menu_item->url;
        							$class = $menu_item->classes[0];
        							?>
        				    		<li class="menuListVerticalItems"><a class="vertical" style="color:white;" rel="<?php echo strtoupper($title); ?>" href="<?php echo $url; ?>"><?php echo strtoupper($title); ?></a></li>
                        		<?php endforeach; ?>
                   			<?php endif; ?>
        				</ul>
        			</div>
        		</div>
        		<div class="row margin-0">
        	    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
        	    	<div class="row margin-0">
        	    	<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 padding-0"></div>
        	    	<ul id="menuListHorizontal">
        	    		<?php 
        					$menu_name_horizontal = 'footer';
        					if(($locations_horizontal = get_nav_menu_locations())&&isset($locations_horizontal[$menu_name_horizontal])):
        						$menu_horizontal = wp_get_nav_menu_object($locations_horizontal[$menu_name_horizontal]);
        						$menu_items_horizontal = wp_get_nav_menu_items($menu_horizontal->term_id);
        						foreach((array)$menu_items_horizontal as $key=>$menu_item_horizontal):
        							$title = $menu_item_horizontal->title;
        							$url = $menu_item_horizontal->url;
        							$class = $menu_item_horizontal->classes[0];
        							?>
        				    		<div class="col-lg-1 col-md-12 col-sm-12 col-xs-12 padding-0"><li class="menuListHorizontalItems"><a class="horizontal" style="color:white" rel="<?php echo strtoupper($title); ?>" href="<?php echo $url; ?>"><?php echo strtoupper($title); ?></a></li></div>
                        		<?php endforeach; ?>
                   			<?php endif; ?>
                   	</ul>
                   	<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 padding-0"></div>
                   	</div>
        	    	</div>
        	    </div>
        	</div>
        </div>
        <!-- 
        <div class="row margin-0">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
                <div id="header" class="row margin-0">
                    <nav class="navbar" role="navigation" style="background-color: <?php echo $headerBGColor; ?>;">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo site_url(); ?>">-->
                                <!--<img height="100%" src="<?php echo $logoUrl; ?>" />-->
                                <!-- 
                            </a>
                        </div>
                        <div class="collapse navbar-collapse float-right" id="bs-example-navbar-collapse-1" style="background-color: <?php echo $headerBGColor; ?>;">
                            <ul class="nav navbar-nav">

                                <?php
                                $menu_name = 'main';
                                if(($locations = get_nav_menu_locations())&&isset($locations[$menu_name])):
                                    $menu = wp_get_nav_menu_object($locations[$menu_name]);
                                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                                    foreach((array)$menu_items as $key => $menu_item):
                                        $title = $menu_item->title;
                                        $url = $menu_item->url;
                                        $class = $menu_item->classes[0];
                                        ?>
                                        <li class="<?php echo $class; ?>"><a onclick="return false" rel="<?php echo strtolower($title); ?>" class="mobileMenuItem" href="<?php echo $url; ?>"><?php echo $title; ?></a></li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul> 
                        </div>--><!-- /.navbar-collapse -->
                        <!-- 
                    </nav>
                </div>
            </div>-->
            <!--<img id="fixed-logo" height="100%" src="<?php echo $logoUrl; ?>" />-->
           <div id="page" style="<?php echo (!isset($menu))? '' : 'padding: 0px 0px 0px 0px;'; ?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">