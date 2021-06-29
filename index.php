<?php include "header.php"; ?>	

<style scoped>
	/* .img-left-padding {
		padding-left: 100px; 
	} */
	@media (max-width:480px){
		.img-left-padding {
			padding-left: 0; 
		}
	}
	@media (min-width:1280px){
		.img-left-padding {
			padding-left: 100px; 
		}
	}
	@media (min-width:1025px){
		.img-left-padding {
			padding-left: 100px; 
		}
	}
	@media (min-width:960px){
		.img-left-padding {
			padding-left: 100px; 
		}
	}
</style>


<body data-spy="scroll" data-target="#navbar" data-offset="70" style="overflow: visible;">

	<div id="preloader" style="display: none;">
		<div id="status" style="display: none;">&nbsp;</div>
	</div>
	<!--  -->

	<!-- header -->
	<header>
		<!-- navbar -->
		<nav id="navbar" class="navbar navbar-custom navbar-fixed-top affix-top" data-spy="affix" data-offset-top="70">
			<div class="container">
				<div class="row">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<i class="fa fa-bars"></i>
						</button>
						<a class="navbar-brand page-scroll logo-light" style="width: 135px;height: 45px;" href="/"><img alt="" src="img/svgs/MainJyroLogo.svg"></a>
						<a class="navbar-brand page-scroll logo-clr" style="width: 135px;height: 45px;" href="/"><img alt="" src="img/svgs/MainJyroLogo.svg"></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div class="right-nav text-right">
							<ul class="nav navbar-nav menu">
								<li class="active">
									<a href="#home">Home</a>
								</li>
								<li>
									<a href="#feature">Feature</a>
								</li>
								<li>
									<a href="#overview">Overview</a>
								</li>
								<li>
									<a href="#How">How it Works?</a>
								</li>
								<li>
									<button  style="width: 180px; height: 42px; background-color: #ff9100; color: #ffffff; border-radius: 4px; border: none;" onClick='window.location.href="partner.php";'>Become a partner</button>
								</li>
							</ul>
						</div>
					</div>
					<!-- /.navbar-collapse -->
				</div>
			</div>
		</nav>
		<!-- End navbar -->

		<!-- banner -->
		<div id="home" class="hero grdnt-blue style-angle bg-trans-1">
			<div class="container">
				<div class="row hero-content">
					<div class="row">
						<div class="col-sm-6">
							<div class="intro-text light">
								<h1>Get Daily Errands Done Easier Than Before.</h1>
								<div class="spce"></div>
								<p class="large">Order items from accredited stores and get them delivered on time.</p>
								<p class="large">Get dedicated servicemen to run your errands while you focus on your daily works.</p>
								<div class="btn-holder">
									<a href=""><img alt="" src="img/is-badge.png"></a>
									<a href=""><img alt="" src="img/an-badge.png"></a>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="img-pre">
								<img style="height: 100vh;" class="jump-anim img-left-padding" alt="" src="img/image1.png">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Banner -->
	</header>
	<!-- End header -->


	<!-- Feature -->
	<section id="feature" class="sec-pad-sm pb-0">
		<div class="container">
			<div class="row">
				<div class="section-text text-center  wow  fadeInUp animated" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
					<p class="meta-head">Amazing Features</p>
					<h3>A convenient way to get your errands done.</h3>
				</div>
				<div class="items row grad-blue">
					<div class="text-center col-feat shad-item icon-shad">
						<div class="col-md-3 col-sm-6 res-margin wow animated fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: none;">
							<div class="item">
								<div class="icon-md">
									<span class="ti-user clr-blue"></span>
								</div>
								<div class="spce"></div>
								<h5>Agents</h5>
								<p>Have dedicated agents and merchants handle your daily errands</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 res-margin wow animated fadeInUp" data-wow-duration="1.4s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.4s; animation-delay: 0.2s; animation-name: none;">
							<div class="item">
								<div class="icon-md">
									<span class="ti-car clr-red"></span>
								</div>
								<div class="spce"></div>
								<h5>Verified Riders</h5>
								<p>On time delivery of your orders by accredited riders</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 res-margin wow animated fadeInUp" data-wow-duration="1.6s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.6s; animation-delay: 0.2s; animation-name: none;">
							<div class="item">
								<div class="icon-md">
									<span class="ti-time clr-green"></span>
								</div>
								<div class="spce"></div>
								<h5>Track Requests</h5>
								<p>Monitor all your requests till they get to your door step.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 res-margin wow animated fadeInUp" data-wow-duration="1.8s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.8s; animation-delay: 0.2s; animation-name: none;">
							<div class="item">
								<div class="icon-md clr-cyan">
									<span class="ti-dashboard"></span>
								</div>
								<div class="spce"></div>
								<h5>Easy Dashboard</h5>
								<p>Manage all your orders and transactions from an intuitive dashboard.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End feature -->


	<!-- Overview -->
	<section id="overview" class="sec-pad-lg">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="flx-container res-center-sm align-flx-center flx-off-sm row">
						<div class="col-md-5 col-sm-6 res-margin-sm">
							<div class="text">
								<h3>Track orders anytime from anywhere</h3>
								<div class="spce"></div>
								<p>Easily perform tasks and monitor requests carried out in real time</p>
								<div class="spce"></div>
								<div class="right-dir-col grad-blue">
									<div class="list">
										<div class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.2s; animation-name: none;">
											<div class="icon-sm clip-txt">
												<span class="ti-alarm-clock" aria-hidden="true"></span>
											</div>
											<div class="text">
												<p class="large"><strong>Auto notification</strong> that adapts to time and distance</p>
											</div>
										</div>
									</div>
									<div class="spce"></div>
									<div class="list">
										<div class="wow animated fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: none;">
											<div class="icon-sm clip-txt">
												<span class="ti-comment-alt" aria-hidden="true"></span>
											</div>
											<div class="text">
												<p class="large"><strong>Chat with</strong> Agents and recieve one on one customer support.</p>
											</div>
										</div>
									</div>
									<div class="spce"></div>
									<div class="list">
										<div class="wow animated fadeInUp" data-wow-duration="1.4s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.4s; animation-delay: 0.2s; animation-name: none;">
											<div class="icon-sm clip-txt">
												<span class="ti-music-alt" aria-hidden="true"></span>
											</div>
											<div class="text">
												<p class="large"><strong>Flexible payment methods</strong>  and give yourself a little boost on online tracking.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-md-offset-1 col-sm-6 animated wow animated fadeInUp" data-wow-duration="2s" style="visibility: hidden; animation-duration: 2s; animation-name: none;">
							<img alt="" src="img/image7.png">
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- // -->

	<!--overview 2  -->
	<section class="sec-pad-lg pt-0">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="flx-container res-center-sm align-flx-center flx-off-xs row">
						<div class="col-sm-5 res-margin-sm">
							<div class="overview-img wow animated fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: none;">
								<img alt="" src="img/image7.png">
							</div>
						</div>
						<div class="col-sm-6 col-md-5 col-md-offset-1">
							<div class="overview-text wow animated fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: none;">
								<div class="head-bdr">
									<div class="text grad-blue">
										<h3>Human - to - human connection</h3>
										<p>Shop, run errands, deliverys, or request a service using out mobile app, carried out by real humans</p>
										<div class="spce"></div>
										<div class="row">
											<div class="col-sm-4">
												<div class="item text-center">
													<div class="icon-sm">
														<span class="ti-user clip-txt"></span>
													</div>
													<h6>Riders</h6>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="item text-center">
													<div class="icon-sm">
														<span class="ti-user clip-txt"></span>
													</div>
													<h6>Agents</h6>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="item text-center">
													<div class="icon-sm">
														<span class="ti-shopping-cart-full clip-txt"></span>
													</div>
													<h6>Stores</h6>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	<!--  -->

	<!-- video -->
	<section class="grdnt-blue parallaxie overly" style="background: url(&quot;img/bg-parallax.jpg&quot;) center 71.3637px / cover no-repeat fixed;">
		<div class="container sec-pad-lg">
			<div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.1s; animation-name: none;">
				<div class="text-center grad-blue">
					<a class="btn-round video" href="https://www.youtube.com/watch?v=iaj8ktgL3BY"><i class="fa fa-play clip-txt" aria-hidden="true"></i></a>
				</div>
				<div class="spce"></div>
				<div class="text-center light">
					<h3>See How It Works?</h3>
					<p class="large">Watch 60 second video of how it works</p>
				</div>
				<div class="col-md-8 col-md-offset-2 sec-pad-sm pb-0 light">
					<div class="row">
						<div class="col-sm-3 col-xs-6 res-margin-sm">
							<div class="item text-center">
								<div class="icon-sm">
									<span class="ti-shopping-cart"></span>
								</div>
								<h6>Find Stores</h6>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6 res-margin-sm">
							<div class="item text-center">
								<div class="icon-sm">
									<span class="ti-power-off"></span>
								</div>
								<h6>Make requests</h6>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6 res-margin-sm">
							<div class="item text-center">
								<div class="icon-sm">
									<span class="ti-user"></span>
								</div>
								<h6>Get Agent/Riders</h6>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6 res-margin-sm">
							<div class="item text-center">
								<div class="icon-sm">
									<span class="ti-rocket"></span>
								</div>
								<h6>Get your Orders</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End video -->

	<!-- Feature -->
	<section id="How" class="sec-pad-lg">
		<div class="container">
			<div class="row">
				<div class="section-text text-center  wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.2s; animation-name: none;">
					<p class="meta-head">How it Works?</p>
					<h3>Get things done through one touch amazing process.</h3>
				</div>
				<div class="items row grad-blue process">
					<div class="text-center icon-shad">
						<div class="col-sm-4 res-margin-sm wow animated fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: none;">
							<div class="item">
								<div class="icon-bg-md grdnt-orange">
									<span>1</span>
								</div>
								<div class="spce"></div>
								<h5>Create Account</h5>
								<p>Join the amazing community of retailers and servicemen.</p>
							</div>
						</div>
						<div class="col-sm-4 res-margin-sm wow animated fadeInUp" data-wow-duration="1.4s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.4s; animation-delay: 0.2s; animation-name: none;">
							<div class="item">
								<div class="icon-bg-md grdnt-blue">
									<span>2</span>
								</div>
								<div class="spce"></div>
								<h5>Make Request</h5>
								<p>Order food or get an errand done while you relax.</p>
							</div>
						</div>
						<div class="col-sm-4 res-margin wow animated fadeInUp" data-wow-duration="1.6s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.6s; animation-delay: 0.2s; animation-name: none;">
							<div class="item">
								<div class="icon-bg-md grdnt-cyan">
									<span>3</span>
								</div>
								<div class="spce"></div>
								<h5>Chat Now</h5>
								<p>Track your orders from a central dashboard.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End feature -->


	<!-- FAQS-->
	<section class="sec-pad pt-0 grad-blue">
		<div class="container">
			<div class="row">
				<div class="row">
					<div class="text col-md-5 res-margin wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.2s; animation-name: none;">
						<div class="head-bdr">
							<div class="text">
								<h4>Frequently asked quetions</h4>
								<p class="large">Exchange ideas within a transparent.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1 faq wow animated fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: none;">
						<div class="panel-group res-margin" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="">
											<i class="more-less glyphicon glyphicon-minus"></i>
											What is Jyro?
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										<p>We are a decentralized cab hailing platform that guarantees safety for all our users</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
											<i class="more-less glyphicon glyphicon-plus"></i>
											How it works?
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										<p>Users signup and can perform carry out errand, pickup and delivery, service or shop.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
											<i class="more-less glyphicon glyphicon-plus"></i>
											How do users keep safe?
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<p>Inbetween rides, users can record interactions so have a record saved.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--  -->

	<!-- Testimonial -->
	<section class="sec-pad-lg grdnt-blue">
		<div class="container">
			<div class="section-text text-center light">
				<div class="section-text text-center wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.2s; animation-name: none;">
					<p class="meta-head">Testimonial</p>
					<h3>12k+ users and counting...</h3>
				</div>
			</div>
			<div class="owl-carousel col-md-8 col-md-offset-2 quote wow animated fadeInUp owl-theme owl-loaded" data-wow-duration="1.2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: none;">
				
				
				
			<div class="owl-stage-outer">
				<div class="owl-stage" style="transform: translate3d(-1500px, 0px, 0px); transition: all 0s ease 0s; width: 5250px;"><div class="owl-item cloned" style="width: 730px; margin-right: 20px;"><div class="quote-item">
					<div class="quote-text bg-gray">
						<div class="rating">
							<ul class="rating-list">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><p>(5)</p></li>
							</ul>
						</div>
						<p>“This app revolutionized how we perrform certain tasks in live. It's truly top-notch and I'll advice everyone I know to signup.”</p>
						<div class="spce"></div>
						<div class="profile clearfix">
							<h6 class="heading">Adetiwa Olumide</h6>
							<p>Sety</p>
						</div>
					</div>
					<!-- <div class="profile-img"><img alt="" src="img/profile-img-2.jpg"></div> -->
				</div></div>
				
			</div></div></div>
				
		</div>
	</section>
	<!-- End testimonial -->

	<!--  -->
	<!-- download-section -->
	<section class="sec-pad-lg grad-prple">
		<div class="parallax-bg sec-pad-lg cta" style="padding: 0px;background-image: url(&quot;img/bg-parallax-4.png&quot;)" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 text-center wow animated fadeInUp res-margin" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.2s; animation-name: none;">
						<h3>Get it now</h3>
						<p class="large">Available on all native App Store</p>
						<div class="btn-holder">
							<div class="btn-holder">
								<a href="#"><img alt="" src="img/is-badge.png"></a>
								<a href="#"><img alt="" src="img/an-badge.png"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End download-section -->

	<!-- faq -->
	<section class="sec-pad-lg grad-prple">
		<div class="container">
			<div class="row">
				<div class="section-text text-center wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.2s; animation-name: none;">
					<h3>Please contact with us</h3>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1  wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.2s; animation-name: none;">
						<div class="row">
							<div class="col-md-12 col-sm-12 res-margin">
								<div class="row">
									<div class="col-md-4 col-sm-4">
										<span class="icon-sm clip-txt">
                                            <i class="ti-map"></i>
                                        </span>
                                        <div class="text">
                                        	<h6>Address</h6>
                                        	Victoria Island <br> Lagos Island, Lagos State <br> Nigeria
                                        </div>
                                        <div class="spce"></div>
									</div>
									<div class="col-md-4 col-sm-4">
										<span class="icon-sm clip-txt">
                                            <i class="ti-mobile"></i>
                                        </span>
                                        <div class="text"><h6>Phone</h6> +234 811 026 2879 </div>
                                        <div class="spce"></div>
									</div>
									<div class="col-md-4 col-sm-4">
										<span class="icon-sm clip-txt">
                                            <i class="ti-email"></i>
                                        </span>
                                        <div class="text"><h6>Mail</h6><a href = "mailto:hello@ejyro.com">hello@ejyro.com</a></div>
									</div>
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--  -->

	<?php include "footer.php"; ?>	

	<!-- script -->
	<script src="js/vendor.bundle.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/script.js"></script>


</body></html>