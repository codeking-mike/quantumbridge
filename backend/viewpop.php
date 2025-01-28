<?php
 include("auth.php");

if(isset($_GET['trans'])){ 
 $trans = $_GET['trans'];
 $query = "SELECT * FROM client_deposit WHERE transid='$trans'";
 $res = mysqli_query($conn, $query);
 $row=mysqli_fetch_assoc($res);
 extract($row);

 /*
 if($pop == ''){
	  $_SESSION['error'] = "No POP uploaded!"; 
							            header("location:investment.php");
                                        $stmt->close(); 
										exit(0);
 }*/
}


 
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
                   
                    <div class="col-lg-8 col-md-7">
                        <div class="card" style="background:#333 !important; color:#f3f3f3">
                            <div class="header">
                                <h4 class="title" style="color:#fefefe !important">Confirm User Payment</h4>
                                
                            </div>
                            <div class="content">
                                <form action="processupdate.php" method="post">
								
                                    <div class="row">
                                        
                                        
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                
												<!--<img src="../act_pop/<?php echo $pop ?>" width="250" height="300" /> -->
												
												<input type="hidden" name="trans" value="<?php echo $trans ?>" />
												<input type="hidden" name="amount" value="<?php echo $fund_amount ?>" />
												<input type="hidden" name="payer" value="<?php echo $payer ?>" />
												
												
                                               <p><b>Deposit Method:</b>  <?php 
											     
											   echo strtoupper($method). " Deposit";
												 
												 ?></p>
											    <p><b>Amount(USD): </b> <?php echo $fund_amount ?></p>
                                            </div>
                                        </div>
										
										
										
                                    </div>
                                    
                                    <div class="text-center">
								
                                        
										<button type="submit" name="confirmpayment" class="btn btn-info btn-fill btn-wd" style="background:orange;color:white">Confirm Payment</button>
									
									
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> Uchaincoins</a>
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

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
<?php
mysqli_close($cxn);

?>
