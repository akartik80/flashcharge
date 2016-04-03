<!DOCTYPE html>
<html lang="en">
<head>
 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>FlashCharge</title>
	 
	<link href="css/bootstrap.css" rel="stylesheet">
	 
	<link href="css/main.css" rel="stylesheet">
 
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond.min.js"></script>
	<![endif]-->
 
	<link rel="shortcut icon" href="images/favicon.png">
	<script src="js/pace.js"></script>

	<style>
		a:hover {
		    color:white;
		    text-decoration:none;
		    cursor:pointer;
   		}

   		a {
    		text-decoration: none;
		}

		.mybutton {
			transform: translateY(-9px);
		}
	</style>
 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
</head>

<body>
	<! -- ******************** MASTHEAD SECTION ******************** -->
	<main id="top" class="masthead" role="main">
		<div class="container">
			<div class="logo"> <!-- <a href="home.php"><img src="images/logo.png" alt="logo">
			</a>-->

			<h1><b>FlashCharge</b></h1>

			</div>
 
			<h1>Just enter your number<br> <strong>and we will figure the rest</strong> <br><br>
			
			<div class="row">
				<div class="col-md-6 col-sm-12 col-md-offset-3 subscribe">
					<form class="form-horizontal" role="form" action="coupons.php" id="subscribeForm" method="POST">
						<div class="form-group">
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<input class="form-control input-lg" name="numb" type="tel" id="mobile" placeholder="Enter your number" data-validate="validate(required, email)" required="required">
							</div>
							<div class="col-md-5 col-sm-4">
								<button type="submit" class="btn btn-success btn-lg mybutton">NEXT</button>
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
		<br><br><br><br>
 		<section class="row features">
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<a href = "mobile.php">
					
						<img src="images/service_01.png" alt="analytics-icon">
						
						<div class="caption">
							<h3>Mobile Recharge</h3>
						
							<p></p>
						</div>
					
					</a>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
 
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<a href = "electricity.php">
						<img src="images/service_02.png" alt="analytics-icon">
						<div class="caption">
							<h3>Electricity Bill</h3>
							<p></p>
						</div>
					</a>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
 
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<a href="dth.php">
						<img src="images/service_03.png" alt="analytics-icon">
						<div class="caption">
							<h3>DTH</h3>
							<p></p>
						</div>
					</a> 
					
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
 
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<a href="water.php">
						<img src="images/service_04.png" alt="analytics-icon">
						<div class="caption">
							<h3>Water Bill</h3>
							<p></p>
						</div>
					</a>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->

			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<a href="landline.php">
						<img src="images/service_05.png" alt="analytics-icon">
						<div class="caption">
							<h3>Landline</h3>
							<p></p>
						</div>
					</a>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->

			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<a href="gas.php">
						<img src="images/service_06.png" alt="analytics-icon">
						<div class="caption">
							<h3>Gas</h3>
							<p></p>
						</div>
					</a>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->

			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<a href="metro.php">
						<img src="images/service_07.png" alt="analytics-icon">
						<div class="caption">
							<h3>Metro</h3>
							<p></p>
						</div>
					</a>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->

			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<a href="bus.php">
						<img src="images/service_08.png" alt="analytics-icon">
						<div class="caption">
							<h3>Bus</h3>
							<p></p>
						</div>
					</a>
					
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
		</section><! --/section -->
 

	    <! -- ******************** CLIENTS SECTION ******************** -->
		<div class="section-title">
			<h2>Some of our partners</h2>
			<h4>We work with a variety of merchants</h4>
		</div>
	
		<section class="row clientlogo breath">
			<div class="col-md-12 text-center"> 
				<a href="http://paytm.com"><img src="img/paytm.jpeg" alt="client-logos"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="http://freecharge.com"><img src="img/freecharge.png" alt="client-logos"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="http://mobikwik.com"><img src="img/mobikwik.jpg" alt="client-logos"></a>
			</div>
		</section><! --/section -->
 

	    <! -- ******************** TESTIMONIALS SECTION ******************** -->	 
			  
 
		<div class="section-title" >
			<h5>Frequently Asked Questions</h5>
		</div>
		
		<section class="row faq breath">
			<div class="col-md-6">
				<h6>What do I have to do?</h6>
				<p>Welcome to FlashCharge. Get your recharge done in a flash! All you got to do is to provide your mobile number and we 
                    will bring out the best recharge offer for you, everything in a flash!</p>
				<h6>Can I pay bills?</h6>
				<p>Absolutely! FlashCharge picks out best deals for your electricity, water bills and even metro recharges too</p>
			</div><! --/col-md-6 -->
			
			<div class="col-md-6">
				<h6>How it works</h6>
				<p>Ever had a hussle in comparing recharge coupons? Indeed. Everybody did. But not anymore. We compare coupons available on top websites to pick out the best for you </p>
				<h6>How much I have to pay?</h6>
				<p>No, nothing. Yes you read it right, FlashCharge is absolutely free of cost. Just sign up and enjoy recharging at lowest prices.</p>
			</div><! --/col-md-6 -->
		</section><! --/section faq -->
 
	</div><! --/container -->
 
	    
 
		<div class="container">
			<section class="row breath">
				<div class="col-md-12 footerlinks">
					<p>&copy; www.flashcharge.com All Rights Reserved</p>
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
