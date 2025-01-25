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
           <div class="row">
                <div class="col-md-12">
                <?php
                if(isset($_SESSION['error'])){
                  $errors[] = $_SESSION['error'];
                  
                ?>
                <p style="color:#fbda74 !important;padding:5px">
                  <?php 
                      foreach ($errors as $error) {

                        echo $error;
                    }
                  
                  ?>
                </p>
                <?php 
                unset($_SESSION['error']);
                }
                ?>

<?php
                if(isset($_SESSION['success'])){
                  $errors[] = $_SESSION['success'];
                  
                ?>
                <p style="color:#60af5a !important;padding:5px">
                  <?php 
                      foreach ($errors as $error) {

                        echo $error;
                    }
                  
                  ?>
                </p>
                <?php 
                unset($_SESSION['success']);
                }
                ?>
                        <div class="card card-chart bg-indigo-900 p-3">
                        
                            <div class="card-body">
                            <h5 class="card-category text-xl text-white font-bold">Referral Commission</h5>
                            <h3 class="card-title text-2xl text-orange-600 font-bold">$<?php
              if(isset($referral_bonus)){
                echo $referral_bonus;
              }else{
                echo "0.00";
              }
               ?></h3>
               <a
                                href="processwithdraw.php?bonus=1" style="text-decoration:none"
                                class="px-4 w-full md:max-w-[26%] py-2 bg-indigo-950 text-white rounded-r-md hover:bg-indigo-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            >
                            Withdraw Commission

               </a>
                            </div>
                        
                        </div>
                </div>
           </div>
            <div class="row" style="background:#3730a3 !important">
                    <div class="col-lg-12 " style="background:#3730a3 !important">
                            <div class="card card-chart p-3" style="background:#3730a3 !important">
                                
                                <div class="card-body">
                                <h5 class="card-category text-3xl font-bold text-white text-center">Referrals</h5>
                                <h3 class="card-title text-white text-lg text-center">View friends who have joined from your referral links</h3>
                                </div>
                                
                            </div>
                    </div>
                    <div class="col-lg-12 bg-indigo-800 text-white">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="font-bold" style="font-size:12px !important;font-weight:bold !important;color:orange !important">
                                    <th>
                                        Username
                                    </th>
                                    <th>
                                    Date Joined
                                    </th>
                                    <th>
                                        Country
                                    </th>
                                    
                                    
                                    
                                    
                                    </thead>
                                    <tbody>

                                    <?php
					  $check_dep = "SELECT username, date_joined, country FROM fx_client_db  WHERE reference='$username'";
						$res_dep =mysqli_query($conn, $check_dep);
						if(mysqli_num_rows($res_dep) > 0 ){
							while($row = mysqli_fetch_assoc($res_dep)){
							extract($row);
							
							echo "<tr style='color:white !important'>
							        <td>$username</td>
									<td>$date_joined</td>
                                    
                                    <td><span>$country</status></td>
                                    
									
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
                        <div class="card-body">

                                        <div class="flex mx-auto items-center space-x-2 p-4 bg-gray-100 rounded-lg w-full">
                            <input 
                                id="copyInput" 
                                type="text" 
                                class="flex-1 w-full md:max-w-[70%] px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" 
                                placeholder="Enter text to copy" 
                                value=<?php echo "https://quantumbridgeus.com/register.php?ref=" . $username ?>
                                readonly style="color:#005698 !important"
                            />
                            <button 
                                onclick="copyToClipboard()" 
                                class="px-4 w-full md:max-w-[26%] py-2 bg-indigo-600 text-white rounded-r-md hover:bg-indigo-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            >
                            Copy Invite Link <i class="now-ui-icons files_single-copy-04"></i>

                            </button>
                            </div>

                        </div>
                    </div>



            </div>
        
            
        
        </div>
        
        
        
      </div>
      
    <?php include_once('footer.php') ?>