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
  <script>
    function validatePasswords(event) {
      // Get the password and confirm password fields
      const password = document.getElementById("pass").value;
      const confirmPassword = document.getElementById("confirm").value;

      // Check if passwords match
      if (password !== confirmPassword) {
        // Prevent form submission
        event.preventDefault();
        // Display an error message
        alert("Passwords do not match. Please try again.");
        return false;
      }

      // If passwords match, allow form submission
      return true;
    }
  </script>
</head>

<body class="">
  <div class="wrapper ">
    <?php include_once('sidebar.php') ?>
    <div class="main-panel" id="main-panel" style="background: rgb(30, 27, 75) !important">
      <!-- Navbar -->
      <?php include_once('header.php') ?>

      <div class="content">
        
        <div class="row">
            
          <div class="col-md-6 p-2">

          <div class="card">
              <div class="card-header">
                <h5 class="title text-2xl">Change Password</h5>
                
              </div>
              <div class="card-body px-3">
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
                <form action="processupdate.php" method="post" onsubmit="return validatePasswords(event)">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Old Password</label>
                        <input type="password" required name="old_pass" class="form-control"  placeholder="" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 px-1">
                      <div class="form-group">
                        <label>New Password</label>
                        <input type="password" required name="pass" id="pass" class="form-control">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" required name="confirm" id="confirm" class="form-control">
                      </div>
                    </div>
                    
                  </div>
                  
                  
                  <input type="hidden" name="userid" value="<?php echo $user_id ?>">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                      <button type="submit" name="update_pass" style="background:#3730a3 !important"
                                class="btn btn-danger block w-full font-bold text-white px-3 py-3 rounded-md text-center hover:text-white hover:bg-indigo-950 transition duration-300">
                                Change Password
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