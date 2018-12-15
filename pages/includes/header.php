<?php
session_start();
//$user_id = $_SESSION['user_id'];

//$user_email = getLoggedInUserName($user_id);
require_once("functions.php");
//session_destroy();
?>
<!--navbar-->
<div class="container-fluid" style="padding:0px">
	<div class="main-content">
		<div class="header">
			<div class="logo">
				<a href="home.html">BookASeat</a>
			</div>
			<ul class="topnavbar">
				<li style="display:inline-block;margin:0 20px 0 20px;color:#d7263d"><i class="fa fa-search" style="margin-right:15px;"></i>
					<input type="text" placeholder="search movie" style="border-top-left-radius:4px;border-bottom-left-radius:4px;"><button  class="btn btn-outline-secondary" type="button" style="margin-left:0; border-top-left-radius:0;border-bottom-left-radius:0;margin-bottom:3px">GO</button></li>
				<li  style="display:inline-block;">
                <?php
                if(!isset($_SESSION['user_id'])){
                                    echo '<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Sign In</button>';
}
                    ?>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <p>x</p></button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
											<!-- Nav tabs -->
											<ul class="nav nav-tabs">
												<li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
												<li><a href="#Registration" data-toggle="tab">Registration</a></li>
											</ul>
											<!-- Tab panes -->
											<div class="tab-content">
												<div class="tab-pane active" id="Login">
													<form role="form" class="form-horizontal" action="http://<?php echo BASE_SERVER;?>/movie_booking/pages/process-login.php" method="post">
														<div class="form-group">
															<label for="email" class="col-sm-2 control-label">
                                        Email</label>
															<div class="col-sm-10">
																<input type="email" name="user_email" class="form-control" id="email1" placeholder="Email" />
<!--																<link rel="stylesheet" href="">-->
															</div>
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
															<div class="col-sm-10">
																<input type="password" name="user_password" class="form-control pass" id="exampleInputPassword1" placeholder="Password" />
															</div>
														</div>
														<div class="row">
															<div class="col-sm-2">
															</div>
															<div class="col-sm-10">
																<button type="submit" name="submit" class="btn btn-primary btn-sm">
                                            Submit</button>
																<a href="javascript:;">Forgot your password?</a>
															</div>
														</div>
													</form>
												</div>
												<div class="tab-pane" id="Registration">
													<form role="form" class="form-horizontal" action="http://<?php echo BASE_SERVER;?>/movie_booking/pages/process-register.php" method="post">

														<div class="form-group">
															<label for="email" class="col-sm-2 control-label">
                                        Email</label>
															<div class="col-sm-10">
																<input type="email" class="form-control" name="user_email" id="email" placeholder="Email" />
															</div>
														</div>

														<div class="form-group">
															<label for="password" class="col-sm-2 control-label">
                                        Password</label>
															<div class="col-sm-10">
																<input type="password" class="form-control" name="user_password" id="password" placeholder="Password" />
															</div>
														</div>
														<div class="row">
															<div class="col-sm-2">
															</div>
															<div class="col-sm-10">
																<button type="submit" class="btn btn-primary btn-sm" name="submit">
                                            Save & Continue</button>
																<button type="button" class="btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">
                                            Cancel</button>
															</div>
														</div>
													</form>
												</div>
											</div>

										</div>

									</div>
								</div>
							</div>
						</div>
					</div>

				</li>
				<?php
                if(isset($_SESSION['user_id'])){
                    
				echo '<li class="dropdown dropdown-user pull-right">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-user fa-2x"></i>
								<span class="username username-hide-on-mobile"></span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <form>
                                <li>
                                    <a href="http://localhost/movie_booking/pages/process-logout.php"">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                                </form>
                            </ul>
                        </li>';
                    //here i need to do some logic for logout 
                }
                ?>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="bootstrap_container">
			<nav class="navbar navbar-default w3_megamenu" role="navigation">
				<div class="navbar-header">
					<button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="home.php" class="navbar-brand"><i class="fa fa-home black"></i></a>
				</div>
				<!-- end navbar-header -->

				<div id="defaultmenu" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="home.php" class="blue">Home</a></li>
						<!-- Mega Menu -->
						

						
						<li><a href="boxofficetop10.php" class="blue">Box Office Top 10</a>

							<!-- end dropdown-menu -->
						</li>
						<li><a href="About-us.php" class="blue">About</a>

							<!-- end dropdown-menu -->
						</li>
						<!-- end standard drop down -->
						<!-- end dropdown w3_megamenu-fw -->
					</ul>
					<!-- end nav navbar-nav -->

					<!-- end nav navbar-nav navbar-right -->
				</div>
				<!-- end #navbar-collapse-1 -->

			</nav>
			<!-- end navbar navbar-default w3_megamenu -->
		</div>
	</div>
</div>
<!-- end container -->
<!--NAVBAR ends-->
