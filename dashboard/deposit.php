<?php include_once('auth.php'); ?>
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
  <style>
    img{
        width:180px !important;
        height: 180px !important;
    }
  </style>
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
              <h5 class="card-category text-3xl font-bold text-white text-center">Deposit Methods</h5>
              <h3 class="card-title text-white text-lg text-center">Choose a deposit method below to add money to your account</h3>
                 
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
                    <div class="rounded-lg p-4 w-32 h-32 bg-white flex items-center justify-center">
                        <img
                            src="./assets/img/btc.png"
                            alt="BTC"
                            class="w-3/4 h-3/4 object-contain"
                        />
                    </div>
              
                   <div class="w-full p-8 text-center sm:p-9 md:p-7 xl:p-9">
                        <h3 class="text-3xl font-bold text-white mb-10">
                        
                            Bitcoin
                        
                        </h3>
                    <hr class="w-full" />
                    <div class="flex flex-row w-full justify-between items-center gap-2">
                        <p
                            class="text-white text-base leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Limit:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            $60-$1000000
                        </p>
                    </div>
                    <div class="flex flex-row w-full justify-between items-center mb-10 gap-2">
                        <p
                            class="text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Charges:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            0 USD + 0%
                        </p>
                    </div>
                    <div class="w-full">
                        <form action="./btc.php" method="post">
                            <div class="input-group mb-3">
                            <input type="text" name="amount" class="form-control" placeholder="Amount e.g 60" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">USD</span>
                            </div>
                            </div>
                            <button type="submit" 
                                class="block w-full bg-indigo-950 hover:no-underline text-white px-3 py-3 rounded-md text-center hover:text-white hover:bg-indigo-800 transition duration-300">
                                <i class="now-ui-icons business_bank px-2"></i>Deposit
                            </button>
                        </form>
                        
                    </div>

                
              </div>
            </div>
            
          </div>
          <div class="w-full  px-4 md:w-1/2 xl:w-1/3 py-4 bg-indigo-800">
                <div class="flex flex-col justify-between items-center mb-4 p-4 overflow-hidden rounded-lg bg-indigo-900 shadow-1 duration-300 hover:shadow-3">
                    <div class="rounded-lg p-4 w-32 h-32 bg-white flex items-center justify-center">
                        <img
                            src="./assets/img/eth.png"
                            alt="BTC"
                            class="w-3/4 h-3/4 object-contain"
                        />
                    </div>
              
                   <div class="w-full p-8 text-center sm:p-9 md:p-7 xl:p-9">
                        <h3 class="text-3xl font-bold text-white mb-10">
                        
                            Ethereum
                        
                        </h3>
                    <hr class="w-full" />
                    <div class="flex flex-row w-full justify-between items-center gap-2">
                        <p
                            class="text-white text-base leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Limit:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            $60-$1000000
                        </p>
                    </div>
                    <div class="flex flex-row w-full justify-between items-center mb-10 gap-2">
                        <p
                            class="text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Charges:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            0 USD + 0%
                        </p>
                    </div>
                    <div class="w-full">
                    <form action="./eth.php" method="post">
                            <div class="input-group mb-3">
                            <input type="text" name="amount" class="form-control" placeholder="Amount e.g 60" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">USD</span>
                            </div>
                            </div>
                            <input type="hidden" name="user" value="<?php echo $username ?>">

                            <button type="submit" 
                                class="block w-full bg-indigo-950 hover:no-underline text-white px-3 py-3 rounded-md text-center hover:text-white hover:bg-indigo-800 transition duration-300">
                                <i class="now-ui-icons business_bank px-2"></i>Deposit
                            </button>
                        </form>
                    </div>

                
              </div>
            </div>
            
          </div>
          
          <div class="w-full  px-4 md:w-1/2 xl:w-1/3 py-4 bg-indigo-800">
                <div class="flex flex-col justify-between items-center mb-4 p-4 overflow-hidden rounded-lg bg-indigo-900 shadow-1 duration-300 hover:shadow-3">
                    <div class="rounded-lg p-4 w-32 h-32 bg-white flex items-center justify-center">
                        <img
                            src="./assets/img/usdt.jpg"
                            alt="BTC"
                            class="w-3/4 h-3/4 object-contain"
                        />
                    </div>
              
                   <div class="w-full p-8 text-center sm:p-9 md:p-7 xl:p-9">
                        <h3 class="text-3xl font-bold text-white mb-10">
                        
                            USDT(Trc20)
                        
                        </h3>
                    <hr class="w-full" />
                    <div class="flex flex-row w-full justify-between items-center gap-2">
                        <p
                            class="text-white text-base leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Limit:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            $60-$1000000
                        </p>
                    </div>
                    <div class="flex flex-row w-full justify-between items-center mb-10 gap-2">
                        <p
                            class="text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Charges:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            0 USD + 0%
                        </p>
                    </div>
                    <div class="w-full">
                    <form action="./usdt.php" method="post">
                            <div class="input-group mb-3">
                            <input type="text" name="amount" class="form-control" placeholder="Amount e.g 60" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">USD</span>
                            </div>
                            </div>
                            <button type="submit" 
                                class="block w-full bg-indigo-950 hover:no-underline text-white px-3 py-3 rounded-md text-center hover:text-white hover:bg-indigo-800 transition duration-300">
                                <i class="now-ui-icons business_bank px-2"></i>Deposit
                            </button>
                        </form>
                    </div>

                
              </div>
            </div>
            
          </div>
          

            </div>
        <div class="row">
          
        <div class="col-md-6">
            <a href="deposithistory.php" style="text-decoration:none;background:#ea580c" 
                                class="block w-full bg-orange-600 hover:no-underline text-white px-3 py-3 rounded-md text-center hover:text-white hover:bg-indigo-800 transition duration-300">
                                View Deposit History
            </a>
            </div>
          
        
          
        </div>
        </div>
        
        
        
      </div>
      
    <?php include_once('footer.php') ?>