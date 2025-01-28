<?php
 include("auth.php");
 if(isset($_GET['del'])){
    
    $del = $_GET['del'];
    mysqli_query($conn, "DELETE FROM fx_client_db WHERE user_id = '$del'");
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
                    <div class="card" style="background:#333 !important">
                            <div class="header">
                                <h4 class="title" style="color:#fff !important">Create User Account</h4>
                                
                            </div>
                            <div class="content">
                            <form action="processupdate.php" method="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Firstname</label>
                                                <input type="text" name="fname" class="form-control border-input" placeholder="Name">
												
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Lastname</label>
                                                <input type="text" name="lname" class="form-control border-input" placeholder="Name" >
												
                                            </div>
                                        </div>
									
										
										<div class="col-md-5">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="email" class="form-control border-input" placeholder="Email">
									
                                            </div>
                                        </div>
									</div>
									
									<div class="row">
										<div class="col-md-5">
                                            <div class="form-group">
                                                <label>Phone number</label>
                                                <input type="text" name="phone" class="form-control border-input"  >
												
                                            </div>
                                        </div>
									</div>
                                    <div class="row">
										<div class="col-md-5">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="username" class="form-control border-input">
												
                                            </div>
                                        </div>
									</div>
                                    <div class="row">
										<div class="col-md-5">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" name="pass" class="form-control border-input">
												
                                            </div>
                                        </div>
									</div>
									
									
									
                                    

                                    

                                    

                                    

                                    
                                    <div class="text-center">
                                        <button type="submit" name="create_user" class="btn btn-info btn-fill btn-wd" style="background:#000">Create User</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    <div class="col-lg-8 col-md-7">
                       
                    </div>


                </div>
				
            </div>
        </div>


<?php include_once('footer.php'); ?>