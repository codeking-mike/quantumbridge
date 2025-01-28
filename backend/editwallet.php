<?php
 include("auth.php");
 if(isset($_GET['ed'])){
	 $ed = $_GET['ed'];
	 
	 $query = "SELECT username FROM fx_client_db WHERE user_id='$ed' LIMIT 1";
     $res = mysqli_query($conn, $query);
     $row=mysqli_fetch_assoc($res);
         extract($row);
     
     
     $query2 = "SELECT * FROM user_wallet WHERE userid='$username'";
     $result = mysqli_query($conn, $query2);
     while($row=mysqli_fetch_assoc($result)){
         extract($row);
     }
 }else{
     header("location:index.php");
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
                        <div class="card bg-dark" style="">
                            <div class="card-header" style="padding:10px">
                                <h4 class="card-title text-white">Edit Wallet</h4>
                                
                            </div>
                            <div class="content">
                                <form action="processupdate.php" method="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Account Balance</label>
                                                <input type="text" name="balance" class="form-control border-input" placeholder="e.g 1000 no commas" value="<?php echo $account_balance ?>" >
												<input type="hidden" name="userid" class="form-control border-input" placeholder="Name" value="<?php echo  $_GET['ed']; ?>" >
                                            </div>
                                        </div>
									
										
									
									</div>
									<div class="row">
									   <div class="col-md-12">
									    <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Interest Earned</label>
                                                <input type="text" name="interest" class="form-control border-input"  value="<?php echo $interest_balance ?>" >
									
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Referral Bonus</label>
                                                <input type="text" name="bonus" class="form-control border-input"  value="<?php echo $referral_bonus ?>" >
									
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="text-center">
                                        <input type='hidden' name='username' value='<?php echo $username ?>' />
                                        <button type="submit" name="update_wallet" class="btn btn-info btn-fill btn-wd" style="background:#000">Update User Wallet</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


<?php include_once('footer.php'); ?>