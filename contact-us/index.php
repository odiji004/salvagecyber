<!DOCTYPE html>
<?php ob_start();?>
<?php session_start() ;?>
<?php include("include/connect.php") ;?>

<?php 

// contact us
    $err="";
  if (isset($_POST['sendmsg'])) {
    $ame=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    // insert the info into the database
    $qry=mysqli_query($config, "insert into message(name,email,number,subject,message,regdate) values('$name','$email','$number','$subject','$message',NOW() ) ");
    if (mysqli_affected_rows($config)>0) {
      $err='<div class="alert alert-success text-center p-2 mb-2 mt-1"> Your message has been sent  </div>';
    }else{$err='<div class="alert alert-danger text-center p-2 mb-2 mt-1"> Unable to send message at this time </div>';}
  }

;?>
<html lang="en-US"
	prefix="og: https://ogp.me/ns#" >

<!-- Mirrored from cybersalvage.us/contact-us/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Aug 2021 22:18:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="pingback" href="../wptcfadmn/xmlrpc.php" />

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script><link rel="icon" href="../wptcfadmn/wp-content/uploads/2020/12/favicon.png">
	
	<script>var et_site_url='../wptcfadmn/index.html';var et_post_id='1256';function et_core_page_resource_fallback(a,b){"undefined"===typeof b&&(b=a.sheet.cssRules&&0===a.sheet.cssRules.length);b&&(a.onerror=null,a.onload=null,a.href?a.href=et_site_url+"/?et_core_page_resource="+a.id+et_post_id:a.src&&(a.src=et_site_url+"/?et_core_page_resource="+a.id+et_post_id))}
</script><title>Contact Us | Cyber Salvage</title>

		<!-- All in One SEO 4.1.2.2 -->
		<meta name="google-site-verification" content="imP4HMYVLlNEbiG1KhgUSgHXLaoae03pRFpqojIaaFM" />
		<link rel="canonical" href="index.html" />
		<meta property="og:site_name" content="Cyber Salvage | Delivering the Best Security Solutions" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Contact Us | Cyber Salvage" />
		<meta property="og:url" content="https://cybersalvage.us/contact-us/" />
		<meta property="article:published_time" content="2019-07-05T05:10:57Z" />
		<meta property="article:modified_time" content="2020-06-06T05:25:58Z" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:domain" content="cybersalvage.us" />
		<meta name="twitter:title" content="Contact Us | Cyber Salvage" />
		<script type="application/ld+json" class="aioseo-schema">
			{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebSite","@id":"https:\/\/cybersalvage.us\/#website","url":"https:\/\/cybersalvage.us\/","name":"Cyber Salvage","description":"Delivering the Best Security Solutions","publisher":{"@id":"https:\/\/cybersalvage.us\/#organization"}},{"@type":"Organization","@id":"https:\/\/cybersalvage.us\/#organization","name":"Rajesh Rana","url":"https:\/\/cybersalvage.us\/","contactPoint":{"@type":"ContactPoint","telephone":"+919417131039","contactType":"Technical Support"}},{"@type":"BreadcrumbList","@id":"https:\/\/cybersalvage.us\/contact-us\/#breadcrumblist","itemListElement":[{"@type":"ListItem","@id":"https:\/\/cybersalvage.us\/#listItem","position":"1","item":{"@type":"WebPage","@id":"https:\/\/cybersalvage.us\/","name":"Home","description":"Delivering the Best Security Solutions","url":"https:\/\/cybersalvage.us\/"},"nextItem":"https:\/\/cybersalvage.us\/contact-us\/#listItem"},{"@type":"ListItem","@id":"https:\/\/cybersalvage.us\/contact-us\/#listItem","position":"2","item":{"@type":"WebPage","@id":"https:\/\/cybersalvage.us\/contact-us\/","name":"Contact Us","url":"https:\/\/cybersalvage.us\/contact-us\/"},"previousItem":"https:\/\/cybersalvage.us\/#listItem"}]},{"@type":"WebPage","@id":"https:\/\/cybersalvage.us\/contact-us\/#webpage","url":"https:\/\/cybersalvage.us\/contact-us\/","name":"Contact Us | Cyber Salvage","inLanguage":"en-US","isPartOf":{"@id":"https:\/\/cybersalvage.us\/#website"},"breadcrumb":{"@id":"https:\/\/cybersalvage.us\/contact-us\/#breadcrumblist"},"datePublished":"2019-07-05T05:10:57+05:30","dateModified":"2020-06-06T05:25:58+05:30"}]}
		</script>
		<!-- All in One SEO -->

<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Cyber Salvage &raquo; Feed" href="../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Cyber Salvage &raquo; Comments Feed" href="../comments/feed/index.html" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/cybersalvage.us\/wptcfadmn\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.6.4"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<meta content="Divi Child Theme v.1.1" name="generator"/><style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='../wptcfadmn/wp-includes/css/dist/block-library/style.min77e1.css?ver=5.6.4' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='../wptcfadmn/wp-content/plugins/revslider/public/assets/css/settings84f5.css?ver=5.4.8.1' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='wpcf-slick-css'  href='../wptcfadmn/wp-content/plugins/wp-carousel-free/public/css/slick.min77e6.css?ver=2.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='wp-carousel-free-fontawesome-css'  href='../wptcfadmn/wp-content/plugins/wp-carousel-free/public/css/font-awesome.min77e6.css?ver=2.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='wp-carousel-free-css'  href='../wptcfadmn/wp-content/plugins/wp-carousel-free/public/css/wp-carousel-free-public.min77e6.css?ver=2.2.1' type='text/css' media='all' />
<style id='wp-carousel-free-inline-css' type='text/css'>
#sp-wp-carousel-free-id-1482.sp-wpcp-1482 .wpcp-single-item {
		border: 1px none #dddddd;
	}
	#sp-wp-carousel-free-id-1482.sp-wpcp-1482 .slick-prev,
	#sp-wp-carousel-free-id-1482.sp-wpcp-1482 .slick-next,
	#sp-wp-carousel-free-id-1482.sp-wpcp-1482 .slick-prev:hover,
	#sp-wp-carousel-free-id-1482.sp-wpcp-1482 .slick-next:hover {
		background: none;
		border: none;
		font-size: 30px;
	}
	#sp-wp-carousel-free-id-1482.sp-wpcp-1482 .slick-prev i,
	#sp-wp-carousel-free-id-1482.sp-wpcp-1482 .slick-next i {
		color: #037ef3;
	}
	#sp-wp-carousel-free-id-1482.sp-wpcp-1482 .slick-prev i:hover,
	#sp-wp-carousel-free-id-1482.sp-wpcp-1482 .slick-next i:hover {
		color: #ed492e;
	}
</style>
<link rel='stylesheet' id='divi-style-css'  href='../wptcfadmn/wp-content/themes/Divi-child/style447e.css?ver=4.7.7' type='text/css' media='all' />
<link rel='stylesheet' id='et-builder-googlefonts-cached-css'  href='https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&amp;subset=latin,latin-ext&amp;display=swap' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='../wptcfadmn/wp-includes/css/dashicons.min77e1.css?ver=5.6.4' type='text/css' media='all' />
<script type='text/javascript' src='../wptcfadmn/wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1' id='jquery-core-js'></script>
<script type='text/javascript' src='../wptcfadmn/wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' src='../wptcfadmn/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min84f5.js?ver=5.4.8.1' id='tp-tools-js'></script>
<script type='text/javascript' src='../wptcfadmn/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min84f5.js?ver=5.4.8.1' id='revmin-js'></script>
<link rel="https://api.w.org/" href="../wp-json/index.html" /><link rel="alternate" type="application/json" href="../wp-json/wp/v2/pages/1256.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="../wptcfadmn/xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wptcfadmn/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.6.4" />
<link rel='shortlink' href='../index3003.html?p=1256' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed4c4b.json?url=https%3A%2F%2Fcybersalvage.us%2Fcontact-us%2F" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed9174?url=https%3A%2F%2Fcybersalvage.us%2Fcontact-us%2F&amp;format=xml" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" /><link rel="preload" href="../wptcfadmn/wp-content/themes/Divi/core/admin/fonts/modules.ttf" as="font" crossorigin="anonymous"><link rel="shortcut icon" href="#" /><style type="text/css" id="custom-background-css">
body.custom-background { background-color: #f4f4f4; }
</style>
	<meta name="generator" content="Powered by Slider Revolution 5.4.8.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<script defer src="../../use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script><script type="text/javascript">function setREVStartSize(e){									
						try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
							if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})					
						}catch(d){console.log("Failure at Presize of Slider:"+d)}						
					};</script>
<link rel="stylesheet" id="et-core-unified-tb-1505-1256-cached-inline-styles" href="../wptcfadmn/wp-content/et-cache/1256/et-core-unified-tb-1505-1256-16273718367065.min.css" onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)" /><link rel="stylesheet" id="et-core-unified-1256-cached-inline-styles" href="../wptcfadmn/wp-content/et-cache/1256/et-core-unified-1256-16273718367065.min.css" onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)" /></head>
<body class="page-template-default page page-id-1256 custom-background et-tb-has-template et-tb-has-footer et_button_no_icon et_pb_button_helper_class et_transparent_nav et_fixed_nav et_show_nav et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_left et_cover_background et_pb_gutter windows et_pb_gutters3 et_pb_pagebuilder_layout et_smooth_scroll et_no_sidebar et_divi_theme et-db et_minified_js et_minified_css">
	<div id="page-container">
<div id="et-boc" class="et-boc">
			
		

	<header id="main-header" data-height-onload="66">
		<div class="container clearfix et_menu_container">
					<div class="logo_container">
				<span class="logo_helper"></span>
				<a href="../index.php">
					<img src="../wptcfadmn/wp-content/uploads/2020/12/the-cyber-forensics-logo.png" alt="Cyber Salvage" id="logo" data-height-percentage="85" />
				</a>
			</div>
					<div id="et-top-navigation" data-height="66" data-fixed-height="52">
									<nav id="top-menu-nav">
					<ul id="top-menu" class="nav"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1679"><a href="../index.php">Home</a></li>
<li class="sub-menu-width menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-447"><a>Services</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1318"><a href="../incident-management/index.html">Incident Management</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1137"><a href="../disaster-recovery/index.html">Disaster Recovery</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1138"><a href="../cell-phone-forensics/index.html">Cell Phone Forensics</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1139"><a href="../cyber-security-audit/index.html">Cyber Security Audit</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1324"><a href="../cyber-forensics/index.html">Cyber Forensics</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1325"><a href="../cloud-forensics/index.html">Cloud Forensics</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1313"><a href="../bitcoin-forensic-investigation/index.html">Cryptocurrency Forensic Investigation</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1611"><a href="../it-audit/index.html">IT Audit</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1632"><a href="../financial-fraud-investigation/index.html">Financial Fraud Investigation</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1341"><a href="../incident-response/index.html">Incident Response</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1343"><a href="../data-breach/index.html">Data breach</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1344"><a href="../sim-swapping/index.html">SIM Swapping</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1342"><a href="../blackmail-and-extortion/index.html">Blackmail and extortion</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1408"><a href="../cyberbullying/index.html">Cyberbullying</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1135"><a href="../about-us/index.html">About Us</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-444"><a href="contact-us/index.html">Contact Us</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1427"><a href="https://www.promagzine.com/cryptocurrency-scammed-funds-recovery-hacked-crypto-wallet/">Blog</a></li>
</ul>					</nav>
				
				
				
				
				<div id="et_mobile_nav_menu">
				<div class="mobile_nav closed">
					<span class="select_page">Select Page</span>
					<span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
				</div>
			</div>			</div> <!-- #et-top-navigation -->
		</div> <!-- .container -->
		<div class="et_search_outer">
			<div class="container et_search_form_container">
				<form role="search" method="get" class="et-search-form" action="https://cybersalvage.us/">
				<input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" />				</form>
				<span class="et_close_search_field"></span>
			</div>
		</div>
	</header> <!-- #main-header -->
<div id="et-main-area">
	
<div id="main-content">


			
				<article id="post-1256" class="post-1256 page type-page status-publish hentry">

				
					<div class="entry-content">
					<div class="et-l et-l--post">
			<div class="et_builder_inner_content et_pb_gutters3">
		<div class="et_pb_with_border et_pb_section et_pb_section_0 et_pb_fullwidth_section et_section_regular" >
				
				
				
				
					<section class="et_pb_module et_pb_fullwidth_header et_pb_fullwidth_header_0 top-header-title-align et_pb_text_align_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_fullwidth_header_container left">
					<div class="header-content-container center">
					<div class="header-content">
						
						<h1 class="et_pb_module_header">Contact Us</h1>
						
						<div class="et_pb_header_content_wrapper"></div>
						
					</div>
				</div>
					
				</div>
				<div class="et_pb_fullwidth_header_overlay"></div>
				<div class="et_pb_fullwidth_header_scroll"></div>
			</section>
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_1 et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_0">
				<div class="et_pb_column et_pb_column_1_2 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h1>Contact Info</h1></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_divider et_pb_divider_0 et_pb_divider_position_center et_pb_space"><div class="et_pb_divider_internal"></div></div><div class="et_pb_module et_pb_blurb et_pb_blurb_0  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">
				
				
				
			</div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_1  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#xe076;</span></span></div>
					<div class="et_pb_blurb_container">
						<h3 class="et_pb_module_header"><span>Email</span></h3>
						<div class="et_pb_blurb_description"><p>cyber_salvage@cyberservices.com</p></div>
						<div class="et_pb_blurb_description"><p>salvagecyber@gmail.com</p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_2 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h1>Make An Appointment</h1></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_divider et_pb_divider_1 et_pb_divider_position_center et_pb_space"><div class="et_pb_divider_internal"></div></div>
			<div id="et_pb_contact_form_0" class="et_pb_with_border et_pb_module et_pb_contact_form_0 et_animated et_hover_enabled et_pb_contact_form_container clearfix" data-form_unique_num="0">
				
				
				
				<div class="et-pb-contact-message"></div>
				
				<div class="et_pb_contact">
					<form class="et_pb_contact_form clearfix" method="post" action="">
					<?php echo $err;?>
						<p class="et_pb_contact_field et_pb_contact_field_0 et_pb_contact_field_half" data-id="name" data-type="input">
				
				
				<label for="name" class="et_pb_contact_form_label">Name</label>
				<input type="text" id="name" class="input" value="" name="name" data-required_mark="required" data-field_type="input" data-original_id="name" placeholder="Name">
			</p><p class="et_pb_contact_field et_pb_contact_field_1 et_pb_contact_field_half et_pb_contact_field_last" data-id="email" data-type="email">
				
				
				<label for="email" class="et_pb_contact_form_label">Email Address</label>
				<input type="text" id="email" class="input" value="" name="email" data-required_mark="required" data-field_type="email" data-original_id="email" placeholder="Email Address">
			</p><p class="et_pb_contact_field et_pb_contact_field_2 et_pb_contact_field_half" data-id="phone" data-type="input">
				
				
				<label for="phone" class="et_pb_contact_form_label">Phone</label>
				<input type="text" id="phone" class="input" value="" name="phone" data-required_mark="required" data-field_type="input" data-original_id="phone" placeholder="Phone" pattern="[0-9\s-]{6,12}" title="Only numbers allowed.Minimum length: 6 characters. Maximum length: 12 characters." maxlength="12">
			</p><p class="et_pb_contact_field et_pb_contact_field_3 et_pb_contact_field_half et_pb_contact_field_last" data-id="subject" data-type="input">
				
				
				<label for="subject" class="et_pb_contact_form_label">Subject</label>
				<input type="text" id="subject" class="input" value="" name="subject" data-required_mark="required" data-field_type="input" data-original_id="subject" placeholder="Subject">
			</p><p class="et_pb_contact_field et_pb_contact_field_4 et_pb_contact_field_last" data-id="message" data-type="text">
				
				
				<label for="message" class="et_pb_contact_form_label">Message</label>
				<textarea name="message" id="message" class="et_pb_contact_message input" data-required_mark="required" data-field_type="text" data-original_id="message" placeholder="Message"></textarea>
			</p>
						<div class="et_contact_bottom_container">
							<!-- .et_pb_contact_right -->
							<button name="sendmsg" type="submit" class="et_pb_contact_submit et_pb_button">Submit</button>
						</div>
						<input type="hidden" id="_wpnonce-et-pb-contact-form-submitted-0" name="_wpnonce-et-pb-contact-form-submitted-0" value="0084f0ebd6" /><input type="hidden" name="_wp_http_referer" value="/contact-us/" />
					</form>
				</div> <!-- .et_pb_contact -->
			</div> <!-- .et_pb_contact_form_container -->
			
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_3 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_1 et_pb_row_fullwidth et_pb_gutters1">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_2  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_with_border et_pb_module et_pb_signup_0 et_hover_enabled et_pb_newsletter_layout_left_right et_pb_newsletter et_pb_subscribe clearfix  et_pb_text_align_left et_pb_bg_layout_dark et_pb_with_focus_border">
				
				
				<div class="et_pb_newsletter_description"><h1 class="et_pb_module_header">Subscribe Our Newsletter</h1></div>
				
				<div class="et_pb_newsletter_form">
					<form method="post">
						<div class="et_pb_newsletter_result et_pb_newsletter_error"></div>
						<div class="et_pb_newsletter_result et_pb_newsletter_success">
							<h2>Thank You for Subscribe our Newsletter!</h2>
						</div>
						<div class="et_pb_newsletter_fields">
							
							
							
					<p class="et_pb_newsletter_field et_pb_contact_field_last et_pb_contact_field_last_tablet et_pb_contact_field_last_phone">
						<label class="et_pb_contact_form_label" for="et_pb_signup_email" style="display: none;">Email</label>
						<input id="et_pb_signup_email" class="input" type="text" placeholder="Email" name="et_pb_signup_email">
					</p>
							
							
					<p class="et_pb_newsletter_button_wrap">
						<a class="et_pb_newsletter_button et_pb_button" href="#" data-icon="">
							<span class="et_subscribe_loader"></span>
							<span class="et_pb_newsletter_button_text">Subscribe  Now!</span>
						</a>
					</p>
							
						</div>
						
						<input type="hidden" value="mailchimp" name="et_pb_signup_provider" />
						<input type="hidden" value="null" name="et_pb_signup_list_id" />
						<input type="hidden" value="" name="et_pb_signup_account_name" />
						<input type="hidden" value="true" name="et_pb_signup_ip_address" /><input type="hidden" value="3790197bd111e4f3d467616cc52d02ea" name="et_pb_signup_checksum" />
					</form>
				</div>
			</div>
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section -->		</div><!-- .et_builder_inner_content -->
	</div><!-- .et-l -->
						</div> <!-- .entry-content -->

				
				</article> <!-- .et_pb_post -->

			

</div> <!-- #main-content -->

	<footer class="et-l et-l--footer">
			<div class="et_builder_inner_content et_pb_gutters3">
		<div class="et_pb_section et_pb_section_0_tb_footer et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_0_tb_footer et_pb_gutters2">
				<div class="et_pb_column et_pb_column_1_2 et_pb_column_0_tb_footer  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_0_tb_footer  et_pb_text_align_left et_pb_bg_layout_dark">
				
				
					<div class="et_pb_text_inner"><h3>Cyber Salvage <br /></h3></div>
				</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_blurb et_pb_blurb_0_tb_footer  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
					
					
					<div class="et_pb_blurb_content">
						<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#9742;</span></span></div>
						<div class="et_pb_blurb_container">
						
						<div class="et_pb_blurb_description"><p> (786) 980-6968 </p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_1_tb_footer  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#xe076;</span></span></div>
					<div class="et_pb_blurb_container">
						<div class="et_pb_blurb_description"><p>cyber_salvage@cyberservices.com</p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#xe076;</span></span></div>
					<div class="et_pb_blurb_container">
						<div class="et_pb_blurb_description"><p>salvagecyber@gmail.com</p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_4 et_pb_column_1_tb_footer  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_1_tb_footer  et_pb_text_align_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><h4>Our Services</h4></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_sidebar_0_tb_footer et_pb_widget_area clearfix et_pb_widget_area_left et_pb_bg_layout_dark et_pb_sidebar_no_border">
				
				
				<div id="nav_menu-3" class="et_pb_widget widget_nav_menu"><div class="menu-our-services-container"><ul id="menu-our-services" class="menu"><li id="menu-item-1142" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1142"><a href="../cell-phone-forensics/index.html">Cell Phone Forensics</a></li>
<li id="menu-item-1154" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1154"><a href="../cloud-forensics/index.html">Cloud Forensics</a></li>
<li id="menu-item-1155" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1155"><a href="../cyber-forensics/index.html">Cyber Forensics</a></li>
<li id="menu-item-1143" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1143"><a href="../cyber-security-audit/index.html">Cyber Security Audit</a></li>
<li id="menu-item-1141" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1141"><a href="../disaster-recovery/index.html">Disaster Recovery</a></li>
</ul></div></div> <!-- end .et_pb_widget -->
			</div> <!-- .et_pb_widget_area -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_4 et_pb_column_2_tb_footer  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_2_tb_footer  et_pb_text_align_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><h4>Subscribe Newsletter</h4></div>
			</div> <!-- .et_pb_text --><div class="et_pb_with_border et_pb_module et_pb_signup_0_tb_footer et_pb_newsletter_layout_left_right et_pb_newsletter et_pb_subscribe clearfix  et_pb_text_align_left et_pb_bg_layout_dark et_pb_with_focus_border et_pb_newsletter_description_no_title et_pb_newsletter_description_no_content">
				
				
				<div class="et_pb_newsletter_description et_multi_view_hidden"></div>
				
			</div>
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_1_tb_footer et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_1_tb_footer">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_3_tb_footer  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_3_tb_footer  et_pb_text_align_center et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><p>© Copyright 2013, All Rights Reserved, Cyber Salvage</p></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section -->		</div><!-- .et_builder_inner_content -->
	</footer><!-- .et-l -->
	    </div> <!-- #et-main-area -->

			
		</div><!-- #et-boc -->
		</div> <!-- #page-container -->

				<script type="text/javascript">
				var et_animation_data = [{"class":"et_pb_contact_form_0","style":"slide","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"20%","starting_opacity":"100%","speed_curve":"ease-in-out"}];
				</script>
	<script type='text/javascript' id='divi-custom-script-js-extra'>
/* <![CDATA[ */
var DIVI = {"item_count":"%d Item","items_count":"%d Items"};
var et_shortcodes_strings = {"previous":"Previous","next":"Next"};
var et_pb_custom = {"ajaxurl":"https:\/\/cybersalvage.us\/wptcfadmn\/wp-admin\/admin-ajax.php","images_uri":"https:\/\/cybersalvage.us\/wptcfadmn\/wp-content\/themes\/Divi\/images","builder_images_uri":"https:\/\/cybersalvage.us\/wptcfadmn\/wp-content\/themes\/Divi\/includes\/builder\/images","et_frontend_nonce":"4620c4cc11","subscription_failed":"Please, check the fields below to make sure you entered the correct information.","et_ab_log_nonce":"2dfb11c909","fill_message":"Please, fill in the following fields:","contact_error_message":"Please, fix the following errors:","invalid":"Invalid email","captcha":"Captcha","prev":"Prev","previous":"Previous","next":"Next","wrong_captcha":"You entered the wrong number in captcha.","wrong_checkbox":"Checkbox","ignore_waypoints":"no","is_divi_theme_used":"1","widget_search_selector":".widget_search","ab_tests":[],"is_ab_testing_active":"","page_id":"1256","unique_test_id":"","ab_bounce_rate":"5","is_cache_plugin_active":"no","is_shortcode_tracking":"","tinymce_uri":""}; var et_builder_utils_params = {"condition":{"diviTheme":true,"extraTheme":false},"scrollLocations":["app","top"],"builderScrollLocations":{"desktop":"app","tablet":"app","phone":"app"},"onloadScrollLocation":"app","builderType":"fe"}; var et_frontend_scripts = {"builderCssContainerPrefix":"#et-boc","builderCssLayoutPrefix":"#et-boc .et-l"};
var et_pb_box_shadow_elements = [];
var et_pb_motion_elements = {"desktop":[],"tablet":[],"phone":[]};
var et_pb_sticky_elements = [];
/* ]]> */
</script>
<script type='text/javascript' src='../wptcfadmn/wp-content/themes/Divi/js/custom.unified447e.js?ver=4.7.7' id='divi-custom-script-js'></script>
<script type='text/javascript' src='../wptcfadmn/wp-content/themes/Divi/core/admin/js/common447e.js?ver=4.7.7' id='et-core-common-js'></script>
<script type='text/javascript' src='../wptcfadmn/wp-includes/js/wp-embed.min77e1.js?ver=5.6.4' id='wp-embed-js'></script>
		
			<span class="et_pb_scroll_top et-pb-icon"></span>
	</body>

<!-- Mirrored from cybersalvage.us/contact-us/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Aug 2021 22:18:31 GMT -->
</html>
