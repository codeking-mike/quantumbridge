<?php
 include("auth.php");
 
 
 if(isset($_GET['del'])){
	$del = $_GET['del'];
mysqli_query($conn, "DELETE FROM support WHERE mid='$del'");	
	 
 }
 
?>
<!doctype html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
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
.fa{display:none !important}
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

    	<?php include("head.php"); ?>

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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" style="color:#fff !important">Support Messages</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width" style="overflow-x:scroll !important;overflow-y:scroll !important;max-height:500px;">
                                <table class="table table-striped" style="overflow-x:scroll !important;overflow-y:scroll !important">
                                    <thead>
                                    
                                    	
                                        <th>SN</th>
                                    	<th>Sender</th>
                                    	<th>Title</th>
										
										<th>Action</th>
										
										<th>Action</th>
                                    	
                                    
                                    	
                                    </thead>
                                    <tbody>
									<?php  
                        			    
                        	
                        				   $qry = "SELECT * FROM support WHERE receiver='Admin' AND status='0'";
                        				   $g = mysqli_query($conn, $qry);
                        				   if(mysqli_num_rows($g) > 0){
                        				    $n = 1;
                        					   while($row = mysqli_fetch_assoc($g)){
                        						   extract($row);
                        						   echo "<tr> 
                        						             <td>$n</td>
                        									<td>$sender</td>
														    <td>$title</td>
                        								    <td><a href='viewmessages.php?sid=$mid' style='background:#000;color:#fff;padding:10px'>Read</a></td>
															
															<td><a href='support.php?del=$mid' style='background:#900;color:#fff;padding:10px'>Trash</a></td>";
															
															
                        						$n++;		
                        						   
                        					   }
											 
                        				   } 					   
				 
				?>
				</tbody>
                                </table>

                            </div>
                        </div>
                    </div>
            </div>
			
			
			</form>
        </div>


        <?php include_once('footer.php'); ?>