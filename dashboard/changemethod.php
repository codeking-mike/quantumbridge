<?php include_once('auth.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Account Dashboard | Withdraw
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
            <div class="col-lg-12 ">
          <div class="card card-chart bg-indigo-950 p-3">
              
              <div class="card-body">
              <h5 class="card-category text-3xl font-bold text-white text-center">Change Method</h5>
              <h3 class="card-title text-white text-lg text-center">Update / Add your wallets for easy withdrawal processing</h3>
                 
              <?php
                if(isset($_SESSION['error'])){
                  $errors[] = $_SESSION['error'];
                  
                ?>
                <p class="text-base leading-relaxed text-orange-600">
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
              
              </div>
              
            </div>
          </div>
            </div>
        
            <div class="row flex-wrap flex-col md:flex-row">

            
            <div class="w-full  px-4 md:w-1/2 xl:w-1/3 py-4 bg-indigo-800">
                <div class="flex flex-col justify-between items-center mb-4 p-4 overflow-hidden rounded-lg bg-indigo-900 shadow-1 duration-300 hover:shadow-3">
                    
              
                   <div class="w-full p-8 text-center sm:p-9 md:p-7 xl:p-9">
                        <h3 class="text-xl font-bold text-white mb-10">
                        
                            Wallet Addresses
                        
                        </h3>
                        <p class="text-white mb-2">Add your wallet addresses for easy processing</p>
                    <hr class="w-full" />
                    
                    
                    <div class="w-full">
                        <form action="./processupdate.php" method="post">
                            
                            
                            <div class="input-group mb-3">
                                    <input type="text" name="btc" value="<?php echo $btc_wallet ?>" class="form-control" placeholder="BTC Wallet Address" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">BTC</span>
                                    </div>
                            </div>
                            <div class="input-group mb-3">
                                    <input type="text" name="eth" value="<?php echo $eth_wallet ?>" class="form-control" placeholder="ETH Wallet Address" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">ETH</span>
                                    </div>
                            </div>
                            <div class="input-group mb-3">
                                    <input type="text" name="usdt" value="<?php echo $usdt_wallet ?>" class="form-control" placeholder="USDT Wallet" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">USD</span> 
                                    </div>
                            </div>
                            <input type="hidden" name="userid" value="<?php echo $user_id ?>">
                            <button type="submit" name="update_wallet"
                                class="block w-full bg-indigo-950 hover:no-underline text-white px-3 py-3 rounded-md text-center hover:text-white hover:bg-indigo-800 transition duration-300">
                                UPDATE WALLET
                            </button>
                        </form>
                        
                    </div>

                
              </div>
            </div>
            
          </div>
          
          
          
          

            </div>
       
        </div>
        
        
        
      </div>
      
    <?php include_once('footer.php') ?>