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

		.trans {
			transform: translateX(25px);	
		}

		.margin {
			margin-bottom: 20px;
		}
	</style>
 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
</head>

<body>
	<?php
		$operator = $_POST['operator'];
		$amount = $_POST['amount'];
		exec("java -jar test1.jar $operator $amount", $output);
	?>
 


	    <! -- ******************** CLIENTS SECTION ******************** -->
		<div class="section-title">
			<a href="mobile.php"><h2>FLASHCHARGE</h2></a>
			<h3>Best recharge offers handpicked for you</h3>
			<h4>Currently, we support paytm, freecharge and mobikwik only</h4>
		</div>
	
		<section class="row clientlogo breath">
			<div class="col-md-12 text-center"> 
				<a href="paytm.com"><img src="img/paytm.jpeg" alt="client-logos"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="freecharge.com"><img src="img/freecharge.png" alt="client-logos"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="mobikwik.com"><img src="img/mobikwik.jpg" alt="client-logos"></a>
			</div>

			<div class="col-md-12 text-center"> 
				<div class="col-md-4"><h3>Promocode: <php echo $output[0] ?> </h3></div>
				<div class="col-md-4"><h3>Promocode: <php echo $output[2] ?> </h3></div>
				<div class="col-md-4"><h3>Promocode: <php echo $output[4] ?> </h3></div>
			</div>

			<div class="col-md-12 text-center"> 
				<div class="col-md-4"><h3>Estimated Cashback: <php echo $output[1] ?> </h3></div>
				<div class="col-md-4"><h3>Estimated Cashback: <php echo $output[3] ?> </h3></div>
				<div class="col-md-4"><h3>Estimated Cashback: <php echo $output[5] ?> </h3></div>
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
