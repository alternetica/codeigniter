<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<link rel="dns-prefetch" href="http://fonts.googleapis.com" />
	<link rel="dns-prefetch" href="http://themes.googleusercontent.com" />
	
	<link rel="dns-prefetch" href="http://ajax.googleapis.com" />
	<link rel="dns-prefetch" href="http://cdnjs.cloudflare.com" />
	<link rel="dns-prefetch" href="http://agorbatchev.typepad.com" />
	
	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
	   More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Login - Mango: Slick and Responsive Admin Template</title>
	<meta name="description" content="Mango is a slick and responsive Admin Template build with modern techniques like HTML5 and CSS3 to be used for backend solutions of any size.">
	<meta name="author" content="Simon Stamm & Markus Siemens">

	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- iPhone: Don't render numbers as call links -->
	<meta name="format-detection" content="telephone=no">
	
	<link rel="shortcut icon" href="favicon.ico" />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
	<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
	
	
	<!-- The Styles -->
	<!-- ---------- -->
	
	<!-- Layout Styles -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/layout.css">
	
	<!-- Icon Styles -->
	<link rel="stylesheet" href="css/icons.css">
	<link rel="stylesheet" href="css/fonts/font-awesome.css">
	<!--[if IE 8]><link rel="stylesheet" href="css/fonts/font-awesome-ie7.css"><![endif]-->
	
	<!-- External Styles -->
	<link rel="stylesheet" href="css/external/jquery-ui-1.8.21.custom.css">
	<link rel="stylesheet" href="css/external/jquery.chosen.css">
	<link rel="stylesheet" href="css/external/jquery.cleditor.css">
	<link rel="stylesheet" href="css/external/jquery.colorpicker.css">
	<link rel="stylesheet" href="css/external/jquery.elfinder.css">
	<link rel="stylesheet" href="css/external/jquery.fancybox.css">
	<link rel="stylesheet" href="css/external/jquery.jgrowl.css">
	<link rel="stylesheet" href="css/external/jquery.plupload.queue.css">
	<link rel="stylesheet" href="css/external/syntaxhighlighter/shCore.css" />
	<link rel="stylesheet" href="css/external/syntaxhighlighter/shThemeDefault.css" />
	
	<!-- Elements -->
	<link rel="stylesheet" href="css/elements.css">
	<link rel="stylesheet" href="css/forms.css">
	
	<!-- OPTIONAL: Print Stylesheet for Invoice -->
	<link rel="stylesheet" href="css/print-invoice.css">
	
	<!-- Typographics -->
	<link rel="stylesheet" href="css/typographics.css">
	
	<!-- Responsive Design -->
	<link rel="stylesheet" href="css/media-queries.css">
	
	<!-- Bad IE Styles -->
	<link rel="stylesheet" href="css/ie-fixes.css">
	
	
	
	
	
	<!-- The Scripts -->
	<!-- ----------- -->
	
	
	<!-- JavaScript at the top (will be cached by browser) -->
	
	<!-- Load Webfont loader -->
	<script type="text/javascript">
		window.WebFontConfig = {
			google: { families: [ 'PT Sans:400,700' ] },
			active: function(){ $(window).trigger('fontsloaded') }
		};
	</script>
	<script defer async src="https://ajax.googleapis.com/ajax/libs/webfont/1.0.28/webfont.js"></script>
	
	<!-- Essential polyfills -->
	<script src="js/mylibs/polyfills/modernizr-2.6.1.min.js"></script>
	<script src="js/mylibs/polyfills/respond.js"></script>
	<script src="js/mylibs/polyfills/matchmedia.js"></script>
	<!--[if lt IE 9]><script src="js/mylibs/polyfills/selectivizr-min.js"></script><![endif]-->
	<!--[if lt IE 10]><script src="js/mylibs/charts/excanvas.js"></script><![endif]-->
	<!--[if lt IE 10]><script src="js/mylibs/polyfills/classlist.js"></script><![endif]-->
	
	<!-- Grab frameworks from CDNs -->
		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
	
		<!-- Do the same with jQuery UI -->
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
	<script>window.jQuery.ui || document.write('<script src="js/libs/jquery-ui-1.8.21.min.js"><\/script>')</script>
	
		<!-- Do the same with Lo-Dash.js -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/lodash.js/0.4.2/lodash.min.js"></script>
	<script>window._ || document.write('<script src="js/libs/lodash.min.js"><\/script>')</script>
	
	
	
	<!-- scripts concatenated and minified via build script -->
	
	<!-- General Scripts -->
	<script src="js/mylibs/jquery.hashchange.js"></script>
	<script src="js/mylibs/jquery.idle-timer.js"></script>
	<script src="js/mylibs/jquery.plusplus.js"></script>
	<script src="js/mylibs/jquery.jgrowl.js"></script>
	<script src="js/mylibs/jquery.scrollTo.js"></script>
	<script src="js/mylibs/jquery.ui.touch-punch.js"></script>
	<script src="js/mylibs/jquery.ui.multiaccordion.js"></script>
	<script src="js/mylibs/number-functions.js"></script>
	
	<!-- Forms -->
	<script src="js/mylibs/forms/jquery.autosize.js"></script>
	<script src="js/mylibs/forms/jquery.checkbox.js"></script>
	<script src="js/mylibs/forms/jquery.chosen.js"></script>
	<script src="js/mylibs/forms/jquery.cleditor.js"></script>
	<script src="js/mylibs/forms/jquery.colorpicker.js"></script>
	<script src="js/mylibs/forms/jquery.ellipsis.js"></script>
	<script src="js/mylibs/forms/jquery.fileinput.js"></script>
	<script src="js/mylibs/forms/jquery.fullcalendar.js"></script>
	<script src="js/mylibs/forms/jquery.maskedinput.js"></script>
	<script src="js/mylibs/forms/jquery.mousewheel.js"></script>
	<script src="js/mylibs/forms/jquery.placeholder.js"></script>
	<script src="js/mylibs/forms/jquery.pwdmeter.js"></script>
	<script src="js/mylibs/forms/jquery.ui.datetimepicker.js"></script>
	<script src="js/mylibs/forms/jquery.ui.spinner.js"></script>
	<script src="js/mylibs/forms/jquery.validate.js"></script>
	<script src="js/mylibs/forms/uploader/plupload.js"></script>
	<script src="js/mylibs/forms/uploader/plupload.html5.js"></script>
	<script src="js/mylibs/forms/uploader/plupload.html4.js"></script>
	<script src="js/mylibs/forms/uploader/plupload.flash.js"></script>
	<script src="js/mylibs/forms/uploader/jquery.plupload.queue/jquery.plupload.queue.js"></script>
		
	<!-- Charts -->
	<script src="js/mylibs/charts/jquery.flot.js"></script>
	<script src="js/mylibs/charts/jquery.flot.orderBars.js"></script>
	<script src="js/mylibs/charts/jquery.flot.pie.js"></script>
	<script src="js/mylibs/charts/jquery.flot.resize.js"></script>
	
	<!-- Explorer -->
	<script src="js/mylibs/explorer/jquery.elfinder.js"></script>
	
	<!-- Fullstats -->
	<script src="js/mylibs/fullstats/jquery.css-transform.js"></script>
	<script src="js/mylibs/fullstats/jquery.animate-css-rotate-scale.js"></script>
	<script src="js/mylibs/fullstats/jquery.sparkline.js"></script>
	
	<!-- Syntax Highlighter -->
	<script src="js/mylibs/syntaxhighlighter/shCore.js"></script>
	<script src="js/mylibs/syntaxhighlighter/shAutoloader.js"></script>
	
	<!-- Dynamic Tables -->
	<script src="js/mylibs/dynamic-tables/jquery.dataTables.js"></script>
	<script src="js/mylibs/dynamic-tables/jquery.dataTables.tableTools.zeroClipboard.js"></script>
	<script src="js/mylibs/dynamic-tables/jquery.dataTables.tableTools.js"></script>
	
	<!-- Gallery -->
	<script src="js/mylibs/gallery/jquery.fancybox.js"></script>
	
	<!-- Tooltips -->
	<script src="js/mylibs/tooltips/jquery.tipsy.js"></script>
	
	<!-- Do not touch! -->
	<script src="js/mango.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script>
	
	<!-- Your custom JS goes here -->
	<script src="js/app.js"></script>
	
	<!-- end scripts -->
	
<!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  --></head>

<body class=login>

	<!-- Some dialogs etc. -->

	<!-- The loading box -->
	<div id="loading-overlay"></div>
	<div id="loading">
		<span>Loading...</span>
	</div>
	<!-- End of loading box -->
	
	<!--------------------------------->
	<!-- Now, the page itself begins -->
	<!--------------------------------->
	
	<!-- The toolbar at the top -->
	<section id="toolbar">
		<div class="container_12">
		
			<!-- Left side -->
			<div class="left">
				<ul class="breadcrumb">
				
					<li><a href="javascript:void(0);">Mango</a></li>
					<li><a href="javascript:void(0);">Login</a></li>
					
				</ul>
			</div>
			<!-- End of .left -->
			
			<!-- Right side -->
			<div class="right">
				<ul>
				
					<li><a href="dashboard.html"><span class="icon i14_bended-arrow-left"></span>Back to Dashboard</a></li>
					
					<li class="red"><a href="#">Purchase</a></li>
					
				</ul>
			</div><!-- End of .right -->
			
			<!-- Phone only items -->
			<div class="phone">
				
				<!-- User Link -->
				<li><a href="#"><span class="icon icon-home"></span></a></li>
				<!-- Navigation -->
				<li><a href="#"><span class="icon icon-heart"></span></a></li>
			
			</div><!-- End of .phone -->
			
		</div><!-- End of .container_12 -->
	</section><!-- End of #toolbar -->
	
	<!-- The header containing the logo -->
	<header class="container_12">
		
		<div class="container">
		
			<!-- Your logos -->
			<a href="/tf-mango/"><img src="img/logo-light.png" alt="Mango" width="210" height="67"></a>
			<a class="phone-title" href="login.html"><img src="img/logo-mobile.png" alt="Mango" height="22" width="70" /></a>
			
			<!-- Right link -->
			<div class="right">
				<span>Got no account?</span>
				<a href="javascript:void(0);">Register</a>
			</div>
			
		</div><!-- End of .container -->
	
	</header><!-- End of header -->
	
	<!-- The container of the sidebar and content box -->
	<section id="login" class="container_12 clearfix">
	
		<form action="dashboard.php" method="post" class="box validate">
		
			<div class="header">
				<h2><span class="icon icon-lock"></span>Login</h2>
			</div>
			
			<div class="content">
				
				<!-- Login messages -->
				<div class="login-messages">
					<div class="message welcome">Welcome back!</div>
					<div class="message failure">Invalid credentials.</div>
				</div>
			
				<!-- The form -->
				<div class="form-box">
				
					<div class="row">
						<label for="login_name">
							<strong>Username</strong>
							<small>Or email address</small>
						</label>
						<div>
							<input tabindex=1 type="text" class="required noerror" name=login_name id=login_name />
						</div>
					</div>
					
					<div class="row">
						<label for="login_pw">
							<strong>Password</strong>
							<small><a href="javascript:void(0);" id="">Forgot it?</a></small>
						</label>
						<div>
							<input tabindex=2 type="password" class="required noerror" name=login_pw id=login_pw />
						</div>
					</div>
					
				</div><!-- End of .form-box -->
				
			</div><!-- End of .content -->
			
			<div class="actions">
				<div class="left">
					<div class="rememberme">
						<input tabindex=4 type="checkbox" name="login_remember" id="login_remember" checked /><label for="login_remember">Remember me?</label>
					</div>
				</div>
				<div class="right">
					<input tabindex=3 type="submit" value="Sign In" name="login_btn" />
				</div>
			</div><!-- End of .actions -->
			
		</form><!-- End of form -->

	</section>
	
	<!-- Spawn $$.loaded -->
	<script>
		$$.loaded();
	</script>
	
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	   chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	<script defer src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

</body>
</html>
