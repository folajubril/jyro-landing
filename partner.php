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
									<a style = "color: #424242" href="/">Home</a>
								</li>
								<!-- <li>
									<a href="#feature">Feature</a>
								</li>
								<li>
									<a href="#overview">Overview</a>
								</li>
								<li>
									<a href="#How">How it Works?</a>
								</li> -->
								<li>
									<!-- <button  style="width: 180px; height: 42px; background-color: #ff9100; color: #ffffff; border-radius: 4px; border: none;" href="/">Sign up as a partner</button> -->
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
		<div id="homes" class="hero  style-angle bg-trans-1" style = "background-color: #FFF">
			<div class="container">
				<div class="row hero-content">
					<div class="row">
						<div class="col-sm-6">
							<div class="intro-text dark">
								<h1>Earn working on your own time.<br>With Jyro!</h1>
								<div class="spce"></div>
								<p class="large">Leverage on Jyro's vast network to expand your business reach to more users</p>
								<p class="large">Leverage on Jyro's reliable technology to expand your business to more customers</p>
								<div class="btn-holder">
									<!-- <a href=""><img alt="" src="img/is-badge.png"></a>
									<a href=""><img alt="" src="img/an-badge.png"></a> -->
									<button  style="width: 180px; height: 42px; background-color: #ff9100; color: #ffffff; border-radius: 4px; border: none;" href="/">Sign up as a partner</button>
						
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="img-pred">
								<img style="" class="" alt="" src="img/finance.png">
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
					<p class="meta-head">Partners</p>
					<h3>Jyro extends partnership to:</h3>
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
								<p>User's that carry out requests and get paid</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 res-margin wow animated fadeInUp" data-wow-duration="1.4s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.4s; animation-delay: 0.2s; animation-name: none;">
							<div class="item">
								<div class="icon-md">
									<span class="ti-car clr-red"></span>
								</div>
								<div class="spce"></div>
								<h5>Verified Riders</h5>
								<p>People who involve in the transfering of goods</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 res-margin wow animated fadeInUp" data-wow-duration="1.6s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.6s; animation-delay: 0.2s; animation-name: none;">
							<div class="item">
								<div class="icon-md">
									<span class="ti-shopping-cart clr-green"></span>
								</div>
								<div class="spce"></div>
								<h5>Stores</h5>
								<p>Signup your stores to Jyro, and get connected.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 res-margin wow animated fadeInUp" data-wow-duration="1.8s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.8s; animation-delay: 0.2s; animation-name: none;">
							<div class="item">
								<div class="icon-md clr-cyan">
									<span class="ti-dashboard"></span>
								</div>
								<div class="spce"></div>
								<h5>Store Admins</h5>
								<p>Have access to multiple stores? Control all on Jyro</p>
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
								<h3>Know who your customers are</h3>
								<div class="spce"></div>
								<p>Monitor your requests and get a notification when they are completed.</p>
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
												<span class="ti-money" aria-hidden="true"></span>
											</div>
											<div class="text">
												<p class="large"><strong>Get paid</strong>  instantly.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-md-offset-1 col-sm-6 animated wow animated fadeInUp" data-wow-duration="2s" style="visibility: hidden; animation-duration: 2s; animation-name: none;">
							<img alt="" src="img/hugo-107.png">
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
								<img alt="" src="img/happy.png">
							</div>
						</div>
						<div class="col-sm-6 col-md-5 col-md-offset-1">
							<div class="overview-text wow animated fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: none;">
								<div class="head-bdr">
									<div class="text grad-blue">
										<h3>Control your daily schedule</h3>
										<p>Earn money within a transparent community of users. Think security, think cashflow .</p>
										<div class="spce"></div>
										<!-- <div class="row">
											<div class="col-sm-4">
												<div class="item text-center">
													<div class="icon-sm">
														<span class="ti-comments clip-txt"></span>
													</div>
													<h6>Riders</h6>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="item text-center">
													<div class="icon-sm">
														<span class="ti-clip clip-txt"></span>
													</div>
													<h6>Agents</h6>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="item text-center">
													<div class="icon-sm">
														<span class="ti-headphone clip-txt"></span>
													</div>
													<h6>Stores</h6>
												</div>
											</div>
										</div> -->
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

	<!-- video --
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
									<span class="ti-email"></span>
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
									<span class="ti-comments-smiley"></span>
								</div>
								<h6>Verify Riders</h6>
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
								<p>Join the amazing community of partners</p>
							</div>
						</div>
						<div class="col-sm-4 res-margin-sm wow animated fadeInUp" data-wow-duration="1.4s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.4s; animation-delay: 0.2s; animation-name: none;">
							<div class="item">
								<div class="icon-bg-md grdnt-blue">
									<span>2</span>
								</div>
								<div class="spce"></div>
								<h5>Get Verified</h5>
								<p>Jyro Team contacts you and verifies.</p>
							</div>
						</div>
						<div class="col-sm-4 res-margin wow animated fadeInUp" data-wow-duration="1.6s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 1.6s; animation-delay: 0.2s; animation-name: none;">
							<div class="item">
								<div class="icon-bg-md grdnt-cyan">
									<span>3</span>
								</div>
								<div class="spce"></div>
								<h5>Get Requests</h5>
								<p>Fully onboarded? Get access to all Jyro's core functions.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End feature -->


	<!-- FAQS--
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


	<!--  -->
	<!-- download-section --
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

	<!--  -->

	<?php include "footer.php"; ?>	

	<!-- script -->
	<script src="js/vendor.bundle.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/script.js"></script>


</body></html>