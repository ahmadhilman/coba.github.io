<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>eCommerce</title>
	<meta name="description" content="">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="shortcut icon" href="img/favicon.png"> -->

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>

	<!-- Syntax Highlighter -->
	<link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shCore.css" media="all">
	<link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shThemeDefault.css" media="all">

	<!-- Font Awesome CSS-->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Normalize/Reset CSS-->
	<link rel="stylesheet" href="css/normalize.min.css">
	<!-- Main CSS-->
	<link rel="stylesheet" href="css/main.css">

</head>

<body id="welcome">

	<aside class="left-sidebar">
		<div class="logo">
			<a href="#welcome">
				<h1>eCommerce</h1>
			</a>
		</div>
		<nav class="left-nav">
			<ul id="nav">
				<li class="current"><a href="#welcome">Welcome</a></li>
				<li><a href="#installation">Installation</a></li>
				<li><a href="#tmpl-structure">Structure</a></li>
				<li><a href="#css-structure">CSS Files</a></li>
				<li><a href="#javascript">JavaScript Libraries</a></li>
				<li><a href="#contact-form">Contact Form</a></li>
				<li><a href="#subscription-form">Subscription Form</a></li>
				<li><a href="#video">Video Tutorial</a></li>
				<li><a href="#credit">Source and Credit</a></li>
			</ul>
		</nav>
	</aside>

	<div id="main-wrapper">
		<div class="main-content">
			<section id="welcome">
				<div class="content-header">
					<h1>eCommerce</h1>
				</div>
				<div class="welcome">
					<h2 class="twenty">Welcome To eCommerce</h2>

					<p>Firstly, a huge thanks for purchasing this theme, your support is truly appreciated!</p>

					<p>This document covers the installation and use of this theme and often reveals answers to common problems and issues - read this document thoroughly if you are experiencing any difficulties. If you have any questions that are beyond the scope of this document. Thank you so much!</p>
				</div>

				<div class="features">
					<h2 class="twenty">Template Features</h2>

					<ul>
						<li>Clean &amp; Simple Design</li>
						<li>HTML5 &amp; CSS3</li>
						<li>Fully Responsive Design</li>
						<li>PHP/Ajax Powered Working Contact Form</li>
						<li>All files are well commented</li>
						<li>Cross Browser Compatible with IE11+, Firefox, Safari, Opera, Chrome</li>
						<li>Extensive Documentation</li>
					</ul>
				</div>

			</section>

			<section id="installation">
				<div class="content-header">
					<h1>eCommerce</h1>
				</div>
				<h2 class="title">Installing Template.</h2>

				<div class="section-content">
					<ol>
						<li>After unzip the download pack, you'll found a Template Folder with all the files.</li>
						<li>You can view this Template in any browser, you can display or edit the Template without an internet connection.(May not wotrk fonts and google map).</li>
						<li>The only section that will not work is the Contact Section which contains PHP code and requires a server environment for send messages.</li>
						<li>Now go to your cpanel or open your FTP Client (like <a target="_blank" href="https://filezilla-project.org/download.php">Filezilla</a>) and upload the content of the Template on your server root.</li>
						<li>Once the files are done uploading go to www.yourdomainname.com/index.html</li>
					</ol>
				</div>

			</section>


			<section id="tmpl-structure">
				<h2 class="title">Template Structure</h2>
				<p class="fifteen">All information within the main content area is nested within a body tag. The general template structure is pretty the same throughout the template. Here is the general structure of main page (index.html).</p>
				<pre class="brush: html">
					<header class="header_area">

					</header>

					<main class="site-main">
						<section class="section">

						</section>
						<section class="section">

						</section>
						<section class="section">

						</section>
					</main>

					<footer class="footer">

					</footer>
				</pre>
			</section>


			<section id="css-structure">
				<h2 class="title">CSS Files and Structure</h2>
				<p class="fifteen">These are the css files that are loaded into templates in <strong>Head Section</strong>.</p>
				<pre class="brush: html">
		            <!--
                    CSS
                    ============================================= -->
					<!-- CSS here -->
					<link rel="stylesheet" href="assets/css/bootstrap.min.css">
					<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
					<link rel="stylesheet" href="assets/css/flaticon.css">
					<link rel="stylesheet" href="assets/css/slicknav.css">
					<link rel="stylesheet" href="assets/css/animate.min.css">
					<link rel="stylesheet" href="assets/css/magnific-popup.css">
					<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
					<link rel="stylesheet" href="assets/css/themify-icons.css">
					<link rel="stylesheet" href="assets/css/slick.css">
					<link rel="stylesheet" href="assets/css/nice-select.css">
					<link rel="stylesheet" href="assets/css/style.css">
					
                </pre>

                <h2 class="title">Google Web Fonts</h2>

                <p>By default, the template loads this font from Google Web Font Services, you can change the font with the one that suits you best.</p>

                <pre class="brush:html">		                
						<!--
						Google Font
						=========================== -->
						<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,600,700,800|Poppins:400,500,600,700|Yellowtail&display=swap"> 
					</pre>

					<p class="twenty">Remember to change the font into <strong>style.css</strong></p>
				</section>

				<section id="javascript">
					<h2 class="title">Javascript Files and Structure</h2>

					<p class="fifteen">These are the list of Javascript files that are loaded into templates in end of the <strong>Body Section</strong>.

						<pre class="brush: html">
                  <!--
                  JavaScripts
                  ========================== -->
				  
				<!-- All JS Custom Plugins Link Here here -->
				<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
				<!-- Jquery, Popper, Bootstrap -->
				<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
				<script src="./assets/js/popper.min.js"></script>
				<script src="./assets/js/bootstrap.min.js"></script>
				<!-- Jquery Mobile Menu -->
				<script src="./assets/js/jquery.slicknav.min.js"></script>

				<!-- Jquery Slick , Owl-Carousel Plugins -->
				<script src="./assets/js/owl.carousel.min.js"></script>
				<script src="./assets/js/slick.min.js"></script>

				<!-- One Page, Animated-HeadLin -->
				<script src="./assets/js/wow.min.js"></script>
				<script src="./assets/js/animated.headline.js"></script>
				<script src="./assets/js/jquery.magnific-popup.js"></script>

				<!-- Scrollup, nice-select, sticky -->
				<script src="./assets/js/jquery.scrollUp.min.js"></script>
				<script src="./assets/js/jquery.nice-select.min.js"></script>
				<script src="./assets/js/jquery.sticky.js"></script>
				
				<!-- contact js -->
				<script src="./assets/js/contact.js"></script>
				<script src="./assets/js/jquery.form.js"></script>
				<script src="./assets/js/jquery.validate.min.js"></script>
				<script src="./assets/js/mail-script.js"></script>
				<script src="./assets/js/jquery.ajaxchimp.min.js"></script>
				
				<!-- Jquery Plugins, main Jquery -->	
				<script src="./assets/js/plugins.js"></script>
				<script src="./assets/js/main.js"></script>
				
              </pre>

          </section>

          <section id="contact-form">
          	<h2 class="title"> Contact Form </h2>
          	<p>This is a PHP Script for sending messages to your email, you should replace <strong>demo@site.com</strong> to your email to start receive messages.</p>
          	<pre class="brush:php">
          		$to = 'demo@site.com'; // replace this mail with yours
          		$firstname = $_POST["fname"];
          		$email= $_POST["email"];
          		$headers = 'MIME-Version: 1.0' . "\r\n";
          		$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
          		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

          		$message ='<table style="width:100%">
          			<tr>
          				<td>'.$firstname.'  '.$laststname.'</td>
          			</tr>
          			<tr><td>Email: '.$email.'</td></tr>
          		</table>';

          		if (@mail($to, $email, $message, $headers))
          		{
          			echo 'The message has been sent.';
          		}else{
          		echo 'failed';
          	}
          </pre>		            
      </section>
      <section id="subscription-form">
      	<h2 class="title"> Subscription Form </h2>
      	<p>Replace this action with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".</p>
      	<pre class="brush: javascript">
      		<div id="mc_embed_signup">
      			//Replace this action with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".
      			<form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01" method="get" class="subscription relative d-flex justify-content-center"></form>
      		</div>
      	</pre>		            
      </section>
      <section id="video">
      	<h2 class="title"> Video Tutorial </h2>
      	<!-- 21:9 aspect ratio -->
      	<div class="embed-responsive embed-responsive-21by9">
      		<iframe class="embed-responsive-item" width="100%" height="515" src="https://www.youtube.com/embed/i7_PRPLOxVE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      	</div>	            
      </section>
      <section id="credit">
      	<h2 class="title">Source and Credit</h2>		            
      	<div class="script-source">
      		<ul>
      			<li><a target="_blank" href="http://www.pexels.com">Pexels</a></li>
      			<li><a target="_blank" href="http://jquery.com/">jQuery</a></li>
      			<li><a target="_blank" href="http://getbootstrap.com">Bootstrap Framework</a></li>
      			<li><a target="_blank" href="https://dimsemenov.com/plugins/magnific-popup/">magnific popup</a></li>
      			<li><a target="_blank" href="https://masonry.desandro.com/">masonry</a></li>
      			<li><a target="_blank" href="https://www.flaticon.com/home">flaticon</a></li>
      			<li><a target="_blank" href="http://www.owlgraphic.com/owlcarousel">Owl Carousel</a></li>
      			<li><a target="_blank" href="https://github.com/iamMonzurul/jQuery-AJAX-MailChimp">Ajax Mailchimp</a></li>
      			<li><a target="_blank" href="http://fontawesome.io/">FontAwesome</a></li>
      			<li><a target="_blank" href="https://themify.me/themify-icons">Themify Icons</a></li>

      		</ul>
      	</div>
      </section>
  </div>
</div>


		<!-- Essential JavaScript Libraries
			==============================================-->
			<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
			<script type="text/javascript" src="js/jquery.nav.js"></script>
			<script type="text/javascript" src="syntax-highlighter/scripts/shCore.js"></script> 
			<script type="text/javascript" src="syntax-highlighter/scripts/shBrushXml.js"></script> 
			<script type="text/javascript" src="syntax-highlighter/scripts/shBrushCss.js"></script> 
			<script type="text/javascript" src="syntax-highlighter/scripts/shBrushJScript.js"></script> 
			<script type="text/javascript" src="syntax-highlighter/scripts/shBrushPhp.js"></script> 
			<script type="text/javascript">
				SyntaxHighlighter.all()
			</script>
			<script type="text/javascript" src="js/custom.js"></script>

		</body>
		</html>
