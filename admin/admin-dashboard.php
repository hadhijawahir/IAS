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
			<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>
				
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-home"></i>HOME</h5>
							<div class="section-divider"></div>
							<div class="dashboard-stats">
								<div class="col-md-6 col-md-6">
									<div class="stat-item">
										<div class="stats">
                                     <div class="col-md-6 count">
                                                <?php
                                                    $sql = "SELECT COUNT(*) as total FROM `students`";
											        $result = mysqli_query($connection, $sql);
                                                    $row = $result->fetch_assoc();
                                                    echo "<h1>".$row['total']."</h1>";   
                                                ?>
												
												<p>STUDENTS</p>
											</div>
											<div class="col-xs-4 icon">
												<i class="fa fa-users ex-icon"></i>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="stat-item">
										<div class="stats">
											<div class="col-md-6 count">
                                                <?php
                                                    $sql = "SELECT COUNT(*) as total FROM `lecturers`";
											        $result = mysqli_query($connection, $sql);
                                                    $row = $result->fetch_assoc();
                                                    echo "<h1>".$row['total']."</h1>";   
                                                ?>
												
												<p>LECTURERS</p>
											</div>
											<div class="col-xs-4 icon">
												<i class="fa fa-user-secret danger-icon"></i>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
							<br>
							<br>
							</div>

							<div class="row">
							<div class="col-md-6 ">
							<table class="table" cellspacing="0" width="80%">
											<thead>
												<tr>
													<th><i class="fa fa-user"></i>STUDENT ID</th>
													<th><i class="fa fa-id-card"></i>FIRST NAME</th>
													<th><i class="fa fa-book"></i>LAST NAME</th>
													<th><i class="fa fa-phone"></i>PHONE</th>
													
												</tr>
											</thead>
											<tbody>
											<?php
											$sql = "SELECT * FROM `students` ";
											$result = mysqli_query($connection, $sql);

											while($row = $result->fetch_assoc()) {
											 echo 
												"<tr>
                                                    <td> ".$row['student_id']."</td>
                                                    <td>".$row['first_name']."</td>
                                                    <td>".$row['last_name']."</td>
                                                   	<td> ".$row['phone']."</td>
                                                    
                                                </tr>";

												}
												?>												
											</tbody>
										</table>
							</div>
							<div class="col-md-6 ">
							<table class="display responsive nowrap table" cellspacing="0" width="80%">
											<thead>
												<tr>
													<th><i class="fa fa-user"></i> LECTURER ID</th>
													<th><i class="fa fa-graduation-cap"></i >FIRST NAME</th>
													<th><i class="fa fa-building"></i> LAST NAME</th>
													<th><i class="fa fa-puzzle-piece"> PHONE</i></th>
													
												</tr>
											</thead>
											<tbody>
											<?php
											$sql = "SELECT * FROM `lecturers` ";
											$result = mysqli_query($connection, $sql);

											while($row = $result->fetch_assoc()) {
											 echo 
												"<tr>
												<td> ".$row['lecturer_id']."</td>
												<td>".$row['first_name']."</td>
												<td>".$row['last_name']."</td>
												<td> ".$row['phone']."</td>";

												}
												?>
												
											</tbody>
										</table>
							</div>
							</div>
									
		
					
		</div>
                <div class="dash-footer col-lg-12">
					<p>IAS. Copyright 2018. All Rights Reserved.</p>
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