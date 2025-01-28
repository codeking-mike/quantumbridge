<?php
 include("functions/auth.php");
 unset($_SESSION['user']);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin :: Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
<?php
    function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>
<style>
  .modal-body table{
      position:relative;
      width:100%;
      padding:2px;
  }
  .modal-body tr{
      width:100%;
      border:1px solid #888;
  }
  .modal-body tr{
      padding:2px;
      border-left:1px solid #888;
  }
</style>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<?php
		//include header and menu file
		include("head.php");
		?>

        <?php
					if(isset($_SESSION['error'])){
						$msg=$_SESSION['error'];
						phpAlert($msg);
						unset($_SESSION['error']);
					}
					
				?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
                    
					
                    <div class="col-lg-6 col-sm-8">
                        <div class="card" style="background:#333 !important">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center" style="color:#f98604 !important">
                                            <i class="ti-server"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers" style="color:#f9e845 !important">
                                            <p>Available Funds</p>
                                            <?php
                                             
                                           $qry = "SELECT SUM(fund_amount) as total FROM client_investment WHERE payment_confirmed ='yes' AND completed='no'";
                        				   $g = mysqli_query($cxn, $qry);
                        				   $row = mysqli_fetch_assoc($g);
										   $sum = $row['total'];
										   echo $sum;
                                            
                                            ?>
                                        </div>
										
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
			</div>
			 <div class="row">
                    
                    <div class="col-lg-6 col-sm-8">
                        <div class="card" style="background:#333 !important">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers" style="color:#f9e845 !important">
                                            <p>Expected Payouts</p>
                                            <?php
                                             
                                           $qry = "SELECT SUM(with_amount) as total2 FROM client_withdrawals WHERE completed='no' AND type='invest'";
                        				   $g = mysqli_query($cxn, $qry);
                        				   $row = mysqli_fetch_assoc($g);
										   $sum2 = $row['total2'];
										   echo $sum2;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats" style="color:#f9e845 !important">
                                        <i class="ti-calendar"></i>View
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
			</div>
			 <div class="row">
                    
                    <div class="col-lg-6 col-sm-8">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center" style="color:#f9e845 !important">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers" style="color:#f9e845 !important">
                                            <p>Bonus Payouts</p>
                                            <?php
                                             
                                            $qry = "SELECT SUM(with_amount) as total2 FROM client_withdrawals WHERE completed='no' AND type='bonus'";
                        				   $g = mysqli_query($cxn, $qry);
                        				   $row = mysqli_fetch_assoc($g);
										   $sum2 = $row['total2'];
										   echo $sum2;
                                            
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats" style="color:#f9e845 !important">
                                        <i class="ti-calendar"></i>View
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
					
                    
                    
                
            </div>
           
        </div>
		<div class="container-fluid">
                <div class="row">
				   <div class="col-md-12">
                        <div class="card" style="color:#f9e845 !important">
                            <div class="header">
                                <h4 class="title">Active Investments</h4>
                         
                            </div>
                            <div class="content table-responsive table-full-width" style="padding:4px !important">
                                <table class="table table-striped" style="overflow-x:scroll !important;overflow-y:scroll !important">
                                    <thead>
                                        <th>Username</th>
                                    	<th>AMount</th>
										<th>Maturity</th>
										<th>Action</th>
                                    	
										
                                    	
                                    </thead>
                                    <tbody>
									
									<?php  
                        			    
                        	               $td = time();
                        				   $qry = "SELECT * FROM client_investment WHERE payment_confirmed ='yes' AND completed='no' ORDER BY fund_id ASC";
                        				   $g = mysqli_query($cxn, $qry);
                        				   while($row = mysqli_fetch_assoc($g)){
										   extract($row);
										   echo "<tr>
												<td>$payer</td>
												<td>$expected_returns</td>";
												if(strtotime($return_date) > $td){
													echo "<td>$return_date</td>";
												}else{
													echo "<td><span style='color:098'>Pay Out</span></td>";
												}
											echo "<td><a href='editinvestment.php?id=$fund_id'>Edit</a></td></tr>";
										   }
                        						   
											 
                        				    					   
				 
				?>
				
				</tbody>
                      </table>
                            </div>
                        </div>
                    </div>
				</div>
		</div>
       

  
                                          
        <footer class="footer">
            <div class="container-fluid">
                
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>First Equity Investment</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	
	
	

</html>
