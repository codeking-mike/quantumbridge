<?php
 include("./auth.php");
 include_once("./db_connect.php")



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
    <div class="sidebar" data-background-color="orange" data-active-color="danger">

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
                    
                    
					<a href="users2.php">
                    <div class="col-lg-3 col-sm-6">
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
                                            <p>All Users</p>
                                            <?php
                                             
                                             $sql = "SELECT * FROM fx_client_db WHERE is_admin='no'";
                                             $result = mysqli_query($conn, $sql);
                                             if(mysqli_num_rows($result) > 0){
                                                 $num = mysqli_num_rows($result);
                                                 echo $num;
                                                 
                                             }else{
                                                 echo '0';
                                             }
                                            
                                            ?>
                                        </div>
										
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats" style="color:#f9e845 !important">
                                        <i class="ti-reload"></i> View & Edit User details
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="investment.php">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card" style="background:#333 !important">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center" style="color:#f98604 !important">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers" style="color:#f9e845 !important">
                                            <p>Deposit Request</p>
                                            <?php
                                             
                                             $sql = "SELECT * FROM client_deposit WHERE payment_confirmed='no' ";
                                             $result = mysqli_query($conn, $sql);
                                             if(mysqli_num_rows($result) > 0){
                                                 $num = mysqli_num_rows($result);
                                                 echo $num;
                                                 
                                             }else{
                                                 echo '0';
                                             }
                                            
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats" style="color:#f9e845 !important">
                                        <i class="ti-calendar"></i>View Request
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="investment2.php">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card" style="background:#333 !important">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center" style="color:#f98604 !important">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers" style="color:#f9e845 !important">
                                            <p>Active Investments</p>
                                            <?php
                                             
                                             $sql = "SELECT * FROM client_investment WHERE status='active' ";
                                             $result = mysqli_query($conn, $sql);
                                             if(mysqli_num_rows($result) > 0){
                                                 $num = mysqli_num_rows($result);
                                                 echo $num;
                                                 
                                             }else{
                                                 echo '0';
                                             }
                                            
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats" style="color:#f9e845 !important">
                                        <i class="ti-calendar"></i>View Investments
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
				
                    <a href="withdrawal.php">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card" style="background:#333 !important">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center" style="color:#f98604 !important">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers" style="color:#f9e845 !important">
                                            <p>Withdrawal Request</p>
                                            <?php
                                             
                                             $sql = "SELECT * FROM client_withdrawals WHERE completed='no'";
                                             $result = mysqli_query($conn, $sql);
                                             if(mysqli_num_rows($result) > 0){
                                                 $num = mysqli_num_rows($result);
                                                 echo $num;
                                                 
                                             }else{
                                                 echo '0';
                                             }
                                            
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats" style="color:#f9e845 !important">
                                        <i class="ti-calendar"></i>View Request
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                 <!--   
					<a href="bonus.php">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card" style="background:#333 !important">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center" style="color:#f98604 !important">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers" style="color:#f9e845 !important">
                                            <p>Commission Withdrawal</p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats" style="color:#f9e845 !important">
                                        <i class="ti-calendar"></i>View Bonus
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>-->
					
						
					
                    <a href="support.php">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card" style="background:#333 !important">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center" style="color:#f98604 !important">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers" style="color:#f9e845 !important">
                                            <p>Support Messages</p>
                                            <?php
                                             
                                             $sql = "SELECT * FROM support WHERE status='0' AND receiver='Admin'";
                                             $result = mysqli_query($conn, $sql);
                                             if(mysqli_num_rows($result) > 0){
                                                 $num = mysqli_num_rows($result);
                                                 echo $num;
                                                 
                                             }else{
                                                 echo '0';
                                             }
                                            
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats" style="color:#f9e845 !important">
                                        <i class="ti-calendar"></i>View Messages
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
					
                    
                    
                    
                
            </div>
           
        </div>
       

  
                                          
        <footer class="footer">
            <div class="container-fluid">
                
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>Quantum Bridge</a>
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
