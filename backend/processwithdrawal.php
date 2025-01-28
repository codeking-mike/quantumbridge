<?php
 include("auth.php");
 
 if(isset($_GET['id'])){
     $with_id = $_GET['id'];
     $sql = "SELECT * FROM client_withdrawals WHERE with_id='$with_id'";
     $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
     extract($result);
     
     $sql2 = "SELECT * FROM fx_client_db WHERE username='$receiver'";
     $result2 = mysqli_fetch_assoc(mysqli_query($conn, $sql2));
     extract($result2);
 }
 
 if(isset($_GET['pid'])){
     $with_id = $_GET['pid'];
     $sql = "SELECT * FROM client_withdrawals WHERE with_id='$with_id'";
     $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
     extract($result);
     
     $sql2 = "SELECT * FROM fx_client_db WHERE username='$receiver'";
     $result2 = mysqli_fetch_assoc(mysqli_query($cxn, $sql2));
     extract($result2);
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
<script>
      function copyLink3() {
  /* Get the text field */
  var copyText = document.getElementById("link");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Link Copied: " + copyText.value);
}

function copyLink4() {
  /* Get the text field */
  var copyText = document.getElementById("link2");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Link Copied: " + copyText.value);
}
function copyLink5() {
  /* Get the text field */
  var copyText = document.getElementById("link3");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Link Copied: " + copyText.value);
}
  
  </script>

</head>
<body>

<div class="wrapper">
<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    		<?php include("head.php"); ?>
        <?php
					if(isset($_SESSION['error'])){
						$msg=$_SESSION['error'];
						phpAlert($msg);
						unset($_SESSION['error']);
					}
					
				?>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                
            </div>
        </nav>

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
                    <div class=" col-md-12">
                        <div class="card card-user" style="background:#333 !important">
                            
                            <h3 style="padding:10px;text-align:center;">PROCESS WITHDRAWALS</h3>
                            <hr>
                            <div>
							    <div class="row">
                                    <div class="col-md-8 col-md-offset-1">
                                        <h5>Client Name:		<b><?php echo $firstname. ' '. $lastname ?></b></h5>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-1">
                                        <h5>Amount:		<b>$<?php echo $with_amount ?></b></h5>
                                    </div>
                                    
                                </div>
							
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-1">
                                        <h5>Withdrawal Method:	<b><?php 
										 
										echo strtoupper($method);
										 ?></b></h5>
                                    </div>
                                    
                                </div>
							<?php if($method == 'btc'){ ?>
                                 <div class="row">
                                    <div class="col-md-8 col-md-offset-1">
                                        <h5>Bitcoin Wallet Address:	<input type="text" style="color:#000;width:300px" id="link" value="<?php echo $btc_wallet ?>" /></h5>
										<button id="copy" onclick="copyLink3()" class="btn btn-warning">Copy</button>
                                    </div>
                                    
                                </div>
							<?php }elseif($method == 'eth'){ ?>
                                    <div class="row">
                                    <div class="col-md-8 col-md-offset-1">
                                        <h5>Ethereum Wallet Address:	<input type="text" style="color:#000;width:300px" id="link2" value="<?php echo $eth_wallet ?>" /></h5>
										<button id="copy" onclick="copyLink4()" class="btn btn-warning">Copy</button>
                                    </div>
                                    
                                </div>
                               
							<?php }else{ ?>
							<div class="row">
                                    <div class="col-md-8 col-md-offset-1">
                                        <h5>USDT Wallet:	<input type="text"  style="color:#000;width:300px" id="link3" value="<?php echo $usdt_wallet ?>" /></h5>
										<button id="copy" onclick="copyLink5()" class="btn btn-warning">Copy</button>
                                    </div>
                                    
                                </div>
							<?php } ?>
							<p style="padding:20px;margin:10px;background:#fff;color:#000">After making payment to user, click 'COMPLETE PAYOUT' to complete withdrawal</p>
                            <a href="complete.php?id=<?php echo $with_id ?>">
                                 <div class="row" style="background:#f98604;color:#fff;padding:10px;font-size:18px text-align:center">
                                     
                                     COMPLETE PAYOUT
                                 </div>   
                                </a>
                            
                            </div>
                        </div>
                        
                    </div>
                    


                </div>
            </div>
        </div>


<?php include('footer.php'); ?>