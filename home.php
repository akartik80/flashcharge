<!DOCTYPE html>
<html lang="en">
<head>
 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>LANDON - Free Bootstrap 3 Landing Page</title>
	 
	<link href="css/bootstrap.css" rel="stylesheet">
	 
	<link href="css/main.css" rel="stylesheet">
 
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond.min.js"></script>
	<![endif]-->
 
	<link rel="shortcut icon" href="images/favicon.png">
	<script src="js/pace.js"></script>
 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
</head>

<body>
	<! -- ******************** MASTHEAD SECTION ******************** -->	
	<main id="top" class="masthead" role="main">
		<div class="container">
			<div class="logo"> <a href="home.php"><img src="images/logo.png" alt="logo"></a>
			</div>
 
			<h1>Just enter your number <strong>and we will figure the rest</strong> <br>
			
			<div class="row">
				<div class="col-md-6 col-sm-12 col-md-offset-3 subscribe">
					<form class="form-horizontal" role="form" action="subscribe.php" id="subscribeForm" method="POST">
						<div class="form-group">
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<input class="form-control input-lg" name="mobile" type="mobile" id="mobile" placeholder="Enter your number" data-validate="validate(required, email)" required="required">
							</div>
							<div class="col-md-5 col-sm-4">
								<button type="submit" class="btn btn-success btn-lg">FLASHCHARGE</button>
							</div>
						</div>
					</form>
					<span id="result" class="alertMsg"></span> </div>
				</div>
 
				<a href="#explore" class="scrollto">
				<p class="scrollto--arrow"><img src="images/scroll_down.png" alt="scroll down arrow"></p>
				</a>
		</div><! --/container -->
	</main><! --/main -->
 

    <! -- ******************** FEATURES SECTION ******************** -->	
	<div class="container" id="explore">
 
		<div class="section-title">
			<h2>Showcase your product with style.</h2>
			<h4>This theme is ideal for your Web Project or your App.</h4>
		</div>

		<section class="row heroimg breath">
			<div class="col-md-12 text-center"> 
				<img src="images/flat-mockup-template.png" alt="flat-mockup-template">
			</div>
		</section><! --/section -->
 
		<div class="section-title">
			<h2>More information about your product.</h2>
			<h4>Always detail some important features.</h4>
		</div>
		
		<section class="row features">
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="images/service_01.png" alt="analytics-icon">
					<div class="caption">
						<h3>Important Feature 1</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
 
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="images/service_02.png" alt="analytics-icon">
					<div class="caption">
						<h3>Important Feature 2</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
 
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="images/service_03.png" alt="analytics-icon">
					<div class="caption">
						<h3>Important Feature 3</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
 
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="images/service_04.png" alt="analytics-icon">
					<div class="caption">
						<h3>Important Feature 4</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
		</section><! --/section -->
 

	    <! -- ******************** CLIENTS SECTION ******************** -->	 
		<div class="section-title">
			<h2>Some of our clients</h2>
			<h4>We work with different kind of brands</h4>
		</div>
	
		<section class="row clientlogo breath">
			<div class="col-md-12 text-center"> 
				<img src="images/client-logos.png" alt="client-logos">
			</div>
		</section><! --/section -->
 
	</div><! --/container -->
 

	    <! -- ******************** TESTIMONIALS SECTION ******************** -->	 
		<div class="highlight testimonials">
			<div class="container">
				<div class="section-title">
					<h2>What our customers said</h2>
					<h4>Don't take our word. See our testimonials </h4>
				</div>
				
				<section class="row breath">
					<div class="col-md-6">
						<div class="testblock">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
						<div class="clientblock"> 
							<img src="images/customer-img-1.jpg" alt=".">
							<p><strong>John Doe</strong> <br>
								Founder of <a href="index.html#">Blacktie.co</a>
							</p>
						</div>
					</div><! --/col-md-6 -->
					
					<div class="col-md-6">
						<div class="testblock">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
						<div class="clientblock"> 
							<img src="images/customer-img-2.jpg" alt=".">
							<p><strong>Richard Sommer</strong> <br>
								CEO of <a href="index.html#">Blacktie.co</a>
							</p>
						</div>
					</div><! --/col-md-6 -->
				</section><! --/section -->
 
			</div><! --/container -->
		</div><! --/highlight Testimonials -->
 

	    <! -- ******************** PRICING LIST ******************** -->	  
		<div class="container">
 
			<div class="section-title">
				<h2>Honest pricing. No surprises.</h2>
				<h4>No contract. No risk. No credit card required. </h4>
			</div>
			<section class="row breath planpricing">
			
				<div class="col-md-4">
					<div class="pricing color1">
						<div class="planname">Personal</div>
						<div class="price"> <span class="curr">$</span>14<span class="per">/MO</span></div>
						<div class="billing">Billed Annually</div>
					</div><! --/pricing -->
				</div><! --/col-md-4-->
				
				<div class="col-md-4">
					<div class="pricing color2">
						<div class="planname">Agency</div>
						<div class="price"> <span class="curr">$</span>49<span class="per">/MO</span></div>
						<div class="billing">Billed Annually</div>
					</div><! --/pricing -->
				</div><! --/col-md-4-->
				
				<div class="col-md-4">
					<div class="pricing color3">
						<div class="planname">Enterprise</div>
						<div class="price"> <span class="curr">$</span>99<span class="per">/MO</span></div>
						<div class="billing">Billed Annually</div>
					</div><! --/pricing -->
				</div><! --/col-md-4-->
			</section><!-- /section planpricing -->
 

	    <! -- ******************** FAQ ******************** -->	  
 
		<div class="section-title">
			<h5>Frequently Asked Questions</h5>
		</div>
		
		<section class="row faq breath">
			<div class="col-md-6">
				<h6>How does the free trial work?</h6>
				<p>Our 10 day trial is 100% free and does not require credit card information to start. If at the end of your trial you would like to upgrade, great. If not, you can cancel your account altogether, or let us mark it as inactive for you to come back to later.</p>
				<h6>Can I switch plans later?</h6>
				<p>Absolutely. You can switch between our paid plans, or cancel your account altogether, whenever you like. We will adjust any payments accordingly.</p>
			</div><! --/col-md-6 -->
			
			<div class="col-md-6">
				<h6>Do I need to choose a plan now?</h6>
				<p>No. You get the full featured, unlimited version of our service completely free for 10 days. Once you're ready to upgrade, you may choose a plan which suits your needs.</p>
				<h6>What payment types do you accept?</h6>
				<p>We accept payments from MasterCard, Visa, Visa Debit and American Express. We do not accept PayPal. Remember, you do not need to supply card details to start your free trial.</p>
			</div><! --/col-md-6 -->
		</section><! --/section faq -->
 
	</div><! --/container -->
 
	    <! -- ******************** FOOTER ******************** -->	  
		<main class="footercta" role="main">
			<div class="container">
				<h1>The Most Simple & <strong>Powerful Way</strong> <br>
					to <strong>launch</strong> your product</h1>
 
				<div class="row">
					<div class="col-md-12 breath text-center"> 
						<a href="index.html#top" class="btn btn-success btn-lg gototop">GET EARLY ACCESS</a> 
					</div>
				</div>
			</div><! --/container -->
		</main><! --/main -->
 
		<div class="container">
			<section class="row breath">
				<div class="col-md-12 footerlinks">
					<p>&copy; 2014 BlackTie.co. All Rights Reserved</p>
				</div>
			</section><! --/section -->
		</div><! --/container -->
 
 
 
 
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/easing.js"></script>
<script src="js/nicescroll.js"></script>
 
 
<script>


 $(function() {
    $('.scrollto, .gototop').bind('click',function(event){
		 var $anchor = $(this);
		 $('html, body').stop().animate({
         scrollTop: $($anchor.attr('href')).offset().top
          }, 1500,'easeInOutExpo');
     event.preventDefault();
      });
  });
        

</script>
 
</body>
</html>
