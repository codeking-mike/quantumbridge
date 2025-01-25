<?php include_once('auth.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Account Dashboard
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
          <div class="card-body">
              <h5 class="card-category text-base text-blue-300">Welcome!</h5>
              <h3 class="card-title text-2xl text-white font-bold"><?php echo $firstname. ' '. $lastname ?></h3>
              </div>
          </div>
        </div>
        <div class="row">
            
          <div class="col-md-8 p-2">

          <div class="card">
              <div class="card-header">
                <h5 class="title text-2xl">Edit Profile</h5>
                <div class="row flex flex-row p-3 mb-3">
               
               <a href="changepassword.php" class="px-3 py-2 bg-blue-800 text-white" style="background:rgb(249 88 55) !important;text-decoration:none">
               <i class="now-ui-icons ui-1_settings-gear-63 p-1"></i>Change Password</a>
               <a href="changemethod.php" class="px-3 py-2 bg-blue-800 text-white" style="background:rgb(55 88 249) !important;text-decoration:none">
               <i class="now-ui-icons ui-1_settings-gear-63 p-1"></i>Change Method</a>
           
            </div>
              </div>
              <div class="card-body">
              <?php
				      if(isset($_SESSION['error'])){
						  $msg = $_SESSION['error'];
						  echo "<p style='padding:20px;color:#e00;'>$msg</p>";
						  unset($_SESSION['error']);
					  }
					  if(isset($_SESSION['success'])){
						  $msg = $_SESSION['success'];
						  echo "<p style='padding:20px;color:#0e0;'>$msg</p>";
						  unset($_SESSION['success']);
					  }
				 
				 
				 ?>
                <form action="processupdate.php" method="post">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label class="text-white">Username</label>
                        <input type="text" class="form-control" disabled="" placeholder="" value="<?php echo $username ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 px-1">
                      <div class="form-group">
                        <label class="text-white">Phone Number</label>
                        <input type="text" name="phone" class="form-control" placeholder="Username" value="<?php echo $phone_no ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1" class="text-white">Email address</label>
                        <input type="email" name="email" class="form-control text-orange-500 focus:text-blue-900" placeholder="Email" value="<?php echo $user_email ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label class="text-white">First Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="Company" value="<?php echo $firstname ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label class="text-white">Last Name</label>
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php echo $lastname ?>">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label class="text-white">Country</label>
                        <input type="text" name="country" class="form-control" placeholder="Country" value="<?php echo $country ?>">
                      </div>
                    </div>
                    
                  </div>
                  <input type="hidden" name="userid" value="<?php echo $user_id ?>">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      <button type="submit" name="update_user" style="background:#3730a3 !important"
                                class="btn btn-danger text-xl block w-full font-bold text-white px-3 py-3 rounded-md text-center hover:text-white hover:bg-indigo-950 transition duration-300">
                                Update Profile
                      </button>
                    
                    </div>
                    </div>
                  </div>
                </form>
              </div>

          </div>
        </div>
      
        
        </div>
        
        
        
      </div>
      
    <?php include_once('footer.php') ?>