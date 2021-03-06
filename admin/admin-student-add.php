<!DOCTYPE html>
<html>
    
<head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>IAS</title>

        <!-- Styles -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		 <link href="../assets/css/chartist.min.css" rel="stylesheet" media="screen">
		<link href="../assets/css/owl.carousel.min.css" rel="stylesheet" media="screen">
		<link href="../assets/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
        <link href="../assets/css/style.css" rel="stylesheet" media="screen">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="../assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">

    </head>
    <body>
		<!-- HEADER -->
        <?php include('includes/admin-header.php'); ?>
        	
		<div class="parent-wrapper" id="outer-wrapper">
			<!-- SIDE MENU -->
			<?php include('includes/admin-sidebar.php'); ?>
			
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-user"></i>ADD STUDENT</h5>
							<div class="section-divider"></div>
						</div>
					</div>
                    <h2 class="error-msg"><?php include_once('../includes/message.php'); ?></h2>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-md-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-user"></i>STUDENT INFO</h6>
									<div class="inner-item">
                                        
                                        <form action="php/admin-student-add-submit.php" method="post" enctype="multipart/form-data">
                                            <div class="dash-form">
                                            <div class="col-sm-4">
                                                    <label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>Year</label>
                                                    <select name="year">
                                                        <option>18</option>
                                                        <option>19</option>
                                                        <option>20</option>
                                                        <option>21</option>
                                                        <option>22</option>
                                                        <option>23</option>
                                                        <option>24</option>
                                                        <option>25</option>
                                                        <option>26</option>
                                                     </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>Level</label>
                                                    <select name="level"> 
                                                        <option>E</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="col-sm-4">
                                                    <label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>ID Number</label>
                                                    <input type="text" placeholder="00" name="number" required />
                                                </div>
                                                <div class="clearfix"></div><br>
                                                
                                                <div class="col-sm-6">
                                                    <label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>First Name</label>
                                                    <input type="text" placeholder="FIRST NAME" name="first_name" required/>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>Last Name</label>
                                                    <input type="text" placeholder="LAST NAME" name="last_name" required/>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-4">
                                                    <label><i class="fa fa-home"></i>Address</label>
                                                    <input type="text" placeholder="address" name="address" required />
                                                </div>
                                                <div class="col-sm-4">
                                                    <label><i class="fa fa-calendar"></i>Date of Birth</label>
                                                  <input type="date" placeholder="YYYY-MM-DD" name="dob" required/>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label><i class="fa fa-phone"></i>NIC</label>
                                                    <input type="text" placeholder="xxxxxxxxxV/X" name="nic" minlength="10" maxlength="12" required/>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-4">
                                                    <label><i class="fa fa-phone"></i>Phone</label>
                                                    <input type="text" placeholder="07xxxxxxxx" name="phone" minlength="10" maxlength="10" required/>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label><i class="fa fa-envelope-o"></i>E-Mail</label>
                                                    <input type="email" placeholder="xx@xx.com" name="email" required/>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label><i class="fa fa-key"></i>Password</label>
                                                    <input type="text" placeholder="password" name="password" required/>
                                                </div>
                                                
                                                <div class="clearfix"></div>
    
                                                <div class="col-sm-12">
                                                    <label><i class="fa fa-file-picture-o"></i>Upload Photo</label>
                                                    <input type="file" name="fileToUpload" id="fileToUpload"required>
                                                </div>
    
                                                <div class="col-sm-3">
    <!--												<a href="#"><i class="fa fa-paper-plane"></i> SAVE</a>-->
                                                    <br><br>
                                                    <input style="background-color:#ed1d24; color:#fff;" type="submit" value="ADD STUDENT" name="submit">
                                                </div>                                                                                         
                                            </div>
                                        </form>
                                        
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
				            </div>
						</div>
					</div>
				</div>
				<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>
				<div class="dash-footer col-lg-12">
					<p>IAS. Copyright 2018. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	
		<!-- Scripts -->
        <script src="../assets/js/jQuery_v3_2_0.min.js"></script>
		<script src="../assets/js/jquery-ui.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/plugins/owl.carousel.min.js"></script>
		<script src="../assets/plugins/Chart.min.js"></script>
		<script src="../assets/plugins/jquery.dataTables.min.js"></script>
		<script src="../assets/plugins/dataTables.responsive.min.js"></script>
        <script src="../assets/js/js.js"></script>
		
    </body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0381'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='../../../../../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>

</html>