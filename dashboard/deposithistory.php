<?php 
include_once('auth.php'); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Account Dashboard | Deposit
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="../output.css">
  
</head>

<body class="">
  <div class="wrapper ">
    <?php include_once('sidebar.php') ?>
    <div class="main-panel" id="main-panel" style="background: rgb(30, 27, 75) !important">
      <!-- Navbar -->
      <?php include_once('header.php') ?>

      <div class="content">
            <div class="row" style="background:#3730a3 !important">
                    <div class="col-lg-12 ">
                            <div class="card card-chart p-3" style="background:#3730a3 !important">
                                
                                <div class="card-body">
                                <h5 class="card-category text-3xl font-bold text-white text-center">Deposit History</h5>
                                <h3 class="card-title text-white text-lg text-center">View the status of your deposit request</h3>
                                </div>
                                
                            </div>
                    </div>
                    <div class="col-lg-12 bg-indigo-800 text-white">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="font-bold" style="font-size:12px !important;font-weight:bold !important;color:orange !important">
                                    <th>
                                        TransID
                                    </th>
                                    <th>
                                        Amount
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    
                                    
                                    
                                    </thead>
                                    <tbody>

                                    <?php
					  $check_dep = "SELECT * FROM client_deposit WHERE payer='$username'";
						$res_dep =mysqli_query($conn, $check_dep);
						if(mysqli_num_rows($res_dep) > 0 ){
							while($row = mysqli_fetch_assoc($res_dep)){
							extract($row);
							
							echo "<tr style='color:white !important'>
							        <td>$orderid</td>
									<td>USD$fund_amount in $method</td>
                                    <td>$fund_date</td>
                                    <td><span style='color:yellow !important'>$status</status><br /><a href='uploadpop.php?id=$transid' class='p-2 text-white rounde-lg'>Upload</a></td>
                                    
									
									</tr>";
							}
						}else{
							echo "<tr>
							        <td rowspan='4'>No records found. </td>
									
									</tr>";
							}
							
						
					?>


                                    </tbody>
                                </table>
                            
                            </div>
                        </div>
                    </div>
            </div>
        
            
        
        </div>
        
        
        
      </div>
      
    <?php include_once('footer.php') ?>