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
		$aContext = array(
		    'http' => array(
		        'proxy' => 'tcp://172.31.1.4:8080',
		        'request_fulluri' => true,
		    ),
		);

		$cxContext = stream_context_create($aContext);
		$numb = $_POST['numb'];
		$url = "http://bmobile.in/".$numb;

		$page = file_get_contents($url, False, $cxContext);
		$pos = strpos($page, "Operator:");

		$pos += 55;
		$pos1 = $pos;

		while ($page[$pos] != '<') {
			$pos++;
		}

		$operator = substr($page, $pos1, $pos - $pos1);
		$operator = strtolower($operator);



		//echo $operator;
	?>

	<! -- ******************** MASTHEAD SECTION ******************** -->
	<main id="top" class="masthead" role="main">
		<div class="container">
			<div class="logo"> <!-- <a href="home.php"><img src="images/logo.png" alt="logo">
			</a>-->

			<h1><b>FlashCharge</b></h1>
			<h3 class="right"> <b>-Recharge in a flash!</b> </h3>

			</div>
 
			<h1>Just enter your number<br> <strong>and we will figure the rest</strong> <br><br>
			
			<div class="row">
				<div class="col-md-6 col-sm-12 col-md-offset-4 trans">
					<form class="form-horizontal" role="form" action="deals.php" id="subscribeForm" method="POST">
						<div class="form-group">
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<select class="form-control input-lg" name="operator">
								  <option value="aircel" name="aircel" <?php if ($operator == 'aircel') echo ' selected="selected"'; ?> >Aircel</option>
								  <option value="airtel" name="airtel" <?php if ($operator == 'airtel') echo ' selected="selected"'; ?> >Airtel</option>
								  <option value="bsnl" name="bsnl" <?php if ($operator == 'bsnl') echo ' selected="selected"'; ?> >BSNL</option>
								  <option value="idea" name="idea" <?php if ($operator == 'idea') echo ' selected="selected"'; ?> >Idea</option>
								  <option value="mtnl" name="mtnl" <?php if ($operator == 'mtnl') echo ' selected="selected"'; ?> >MTNL</option>
								  <option value="mts" name="mts" <?php if ($operator == 'mts') echo ' selected="selected"'; ?> >MTS</option>
								  <option value="reliancecdma" name="reliancecdma" <?php if ($operator == 'reliance cdma') echo ' selected="selected"'; ?> >Reliance CDMA</option>
								  <option value="reliancegsm" name="reliancegsm" <?php if ($operator == 'reliance gsm') echo ' selected="selected"'; ?> >Reliance GSM</option>
								  <option value="t24" name="t24" <?php if ($operator == 't24') echo ' selected="selected"'; ?> >T24</option>
								  <option value="tatadocomo" name="tatadocomo" <?php if ($operator == 'tatadocomo') echo ' selected="selected"'; ?> >Tata Docomo</option>
								  <option value="tataindicom" name="tataindicom" <?php if ($operator == 'tataindicom') echo ' selected="selected"'; ?> >Tata Indicom</option>
								  <option value="telenor" name="telenor" <?php if ($operator == 'telenor') echo ' selected="selected"'; ?> >Telenor</option>
								  <option value="videocon" name="videocon" <?php if ($operator == 'videocon') echo ' selected="selected"'; ?> >Videocom</option>
								  <option value="vodafone" name="vodafone" <?php if ($operator == 'vodafone') echo ' selected="selected"'; ?> >Vodafone</option>
								</select>
								
								<input type="text" name="amount" id="amount" placeholder="Enter recharge amount" class="form-control input-lg margin"></input>
								<button type="submit" class="btn btn-success btn-lg mybutton">FLASHCHARGE NOW</button>
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
