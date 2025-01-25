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
              <h5 class="card-category text-3xl font-bold text-white text-center">Our Investment Plans</h5>
              <h3 class="card-title text-white text-lg text-center">Choose your prefered investment package and start earning</h3>
                 
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
              
              </div>
              
            </div>
          </div>
            </div>
        
            <div class="row flex-wrap flex-col md:flex-row">

            
            <div class="w-full  px-4 md:w-1/2 xl:w-1/3 py-4 bg-indigo-800">
                <div class="flex flex-col justify-between items-center mb-4 p-4 overflow-hidden rounded-lg bg-indigo-900 shadow-1 duration-300 hover:shadow-3">
                    <div class="rounded-lg p-4 w-32 h-32 flex flex-col items-center justify-center">
                        <h3 class="text-3xl font-bold text-white mb-3">
                            
                            Basic
                        
                        </h3>
                        <p class="text-2xl text-white mb-5"> 6% ROI /<span style="color:gray !important">Day</span></p>
                        <hr style="border: 1px solid white;" />
                    </div>
                   
                   <div class="w-full p-8 text-center sm:p-9 md:p-7 xl:p-9">
                        
                    
                    <div class="flex flex-row w-full justify-between items-center gap-2">
                        <p
                            class="text-white text-base leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Min:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            $60
                        </p>
                    </div>
                    <div class="flex flex-row w-full justify-between items-center gap-2">
                        <p
                            class="text-white text-base leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Max:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            $499
                        </p>
                    </div>
                    <div class="flex flex-row w-full justify-between items-center gap-2">
                        <p
                            class="text-white text-base leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Capital Return:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Yes
                        </p>
                    </div>
                    <div class="flex flex-row w-full justify-between items-center mb-10 gap-2">
                        <p
                            class="text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Total Return:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Capital + Interest
                        </p>
                    </div>
                    <div class="w-full">
                    <a href="#" data-toggle="modal" data-target="#chooseBasic" style="text-decoration:none !important"
                                class="block w-full bg-indigo-950 hover:no-underline text-white px-3 py-3 rounded-md text-center hover:text-white hover:bg-indigo-800 transition duration-300">
                                <i class="now-ui-icons business_bank px-2"></i>Choose Plan
                            </a>
                        
                    </div>

                
              </div>
            </div>
            
          </div>
          <div class="w-full  px-4 md:w-1/2 xl:w-1/3 py-4 bg-indigo-800">
                <div class="flex flex-col justify-between items-center mb-4 p-4 overflow-hidden rounded-lg bg-indigo-900 shadow-1 duration-300 hover:shadow-3">
                    <div class="rounded-lg p-4 w-32 h-32 flex flex-col items-center justify-center">
                        <h3 class="text-3xl font-bold text-white mb-3">
                            
                            Silver
                        
                        </h3>
                        <p class="text-2xl text-white mb-5"> 12% ROI /<span style="color:gray !important">Day</span></p>
                        <hr style="border: 1px solid white;" />
                    </div>
                   
                   <div class="w-full p-8 text-center sm:p-9 md:p-7 xl:p-9">
                        
                    
                    <div class="flex flex-row w-full justify-between items-center gap-2">
                        <p
                            class="text-white text-base leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Min:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            $500
                        </p>
                    </div>
                    <div class="flex flex-row w-full justify-between items-center gap-2">
                        <p
                            class="text-white text-base leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Max:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            $2999
                        </p>
                    </div>
                    <div class="flex flex-row w-full justify-between items-center gap-2">
                        <p
                            class="text-white text-base leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Capital Return:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Yes
                        </p>
                    </div>
                    <div class="flex flex-row w-full justify-between items-center mb-10 gap-2">
                        <p
                            class="text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Total Return:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Capital + Interest
                        </p>
                    </div>
                    <div class="w-full">
                            <a href="#" data-toggle="modal" data-target="#chooseSilver" style="text-decoration:none !important"
                                class="block w-full bg-indigo-950 hover:no-underline text-white px-3 py-3 rounded-md text-center hover:text-white hover:bg-indigo-800 transition duration-300">
                                <i class="now-ui-icons business_bank px-2"></i>Choose Plan
                            </a>
                        
                    </div>

                
              </div>
            </div>
            
          </div>
          <div class="w-full  px-4 md:w-1/2 xl:w-1/3 py-4 bg-indigo-800">
                <div class="flex flex-col justify-between items-center mb-4 p-4 overflow-hidden rounded-lg bg-indigo-900 shadow-1 duration-300 hover:shadow-3">
                    <div class="rounded-lg p-4 w-32 h-32 flex flex-col items-center justify-center">
                        <h3 class="text-3xl font-bold text-white mb-3">
                            
                            Premium
                        
                        </h3>
                        <p class="text-2xl text-white mb-5"> 18% ROI /<span style="color:gray !important">Day</span></p>
                        <hr style="border: 1px solid white;" />
                    </div>
                   
                   <div class="w-full p-8 text-center sm:p-9 md:p-7 xl:p-9">
                        
                    
                    <div class="flex flex-row w-full justify-between items-center gap-2">
                        <p
                            class="text-white text-base leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Min:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            $3000
                        </p>
                    </div>
                    <div class="flex flex-row w-full justify-between items-center gap-2">
                        <p
                            class="text-white text-base leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Max:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            $6,999
                        </p>
                    </div>
                    <div class="flex flex-row w-full justify-between items-center gap-2">
                        <p
                            class="text-white text-base leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Capital Return:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Yes
                        </p>
                    </div>
                    <div class="flex flex-row w-full justify-between items-center mb-10 gap-2">
                        <p
                            class="text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Total Return:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Capital + Interest
                        </p>
                    </div>
                    <div class="w-full">
                            <a href="#" data-toggle="modal" data-target="#choosePremium" style="text-decoration:none !important"
                                class="block w-full bg-indigo-950 hover:no-underline text-white px-3 py-3 rounded-md text-center hover:text-white hover:bg-indigo-800 transition duration-300">
                                <i class="now-ui-icons business_bank px-2"></i>Choose Plan
                            </a>
                        
                    </div>

                
              </div>
            </div>
            
          </div>
          <div class="w-full  px-4 md:w-1/2 xl:w-1/3 py-4 bg-indigo-800">
                <div class="flex flex-col justify-between items-center mb-4 p-4 overflow-hidden rounded-lg bg-indigo-900 shadow-1 duration-300 hover:shadow-3">
                    <div class="rounded-lg p-4 w-32 h-32 flex flex-col items-center justify-center">
                        <h3 class="text-3xl font-bold text-white mb-3">
                            
                            Diamond
                        
                        </h3>
                        <p class="text-2xl text-white mb-5"> 24% ROI /<span style="color:gray !important">Day</span></p>
                        <hr style="border: 1px solid white;" />
                    </div>
                   
                   <div class="w-full p-8 text-center sm:p-9 md:p-7 xl:p-9">
                        
                    
                    <div class="flex flex-row w-full justify-between items-center gap-2">
                        <p
                            class="text-white text-base leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Min:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            $7,000
                        </p>
                    </div>
                    <div class="flex flex-row w-full justify-between items-center gap-2">
                        <p
                            class="text-white text-base leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Max:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            $10,000,000
                        </p>
                    </div>
                    <div class="flex flex-row w-full justify-between items-center gap-2">
                        <p
                            class="text-white text-base leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Capital Return:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Yes
                        </p>
                    </div>
                    <div class="flex flex-row w-full justify-between items-center mb-10 gap-2">
                        <p
                            class="text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Total Return:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Capital + Interest
                        </p>
                    </div>
                    <div class="w-full">
                        
                            
                            <a href="#" data-toggle="modal" data-target="#chooseDiamond" style="text-decoration:none !important"
                                class="block w-full bg-indigo-950 hover:no-underline text-white px-3 py-3 rounded-md text-center hover:text-white hover:bg-indigo-800 transition duration-300">
                                <i class="now-ui-icons business_bank px-2"></i>Choose Plan
                            </a>
                        
                        
                    </div>

                
              </div>
            </div>
            
          </div>
          
          
          

            </div>
        <div class="row">
          
        
          
        
          
        </div>
        </div>
        
        
        
      </div>

      <!-- Choose Basic Modal -->
<div class="modal fade" id="chooseBasic" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered bg-indigo-800 text-white" role="document">
    <div class="modal-content">
      <div class="modal-header flex flex-col">
        <h5 class="modal-title text-xl mx-auto" id="exampleModalLongTitle" style="color:#223366 !important;text-align:center;font-weight:bold;font-size:18px !important">Start Basic Investment</h5>
        <p class="text-white p-2">
          <span class="" style="color:#223366 !important;text-align:center;font-size:14px !important">Invest: $60 - $499</span><br />
           <span class="text-[12px]" style="color:#223366 !important;text-align:center;font-size:14px !important">Interest: 6 %</span>

        </p>
        <?php
             if($account_balance < 60){
        ?>
        <h4 style="color:#223366;font-weight:bold">Wallet Balance: <span class="badge badge-danger p-2"><?php echo $account_balance ?></span></h4>
        <p class="card-text alert-danger"> You account balance is too low to make an investment. Kindly deposit funds to your account</p>
        <?php
             }else{
        ?>
        <h4 style="color:#223366;font-weight:bold">Wallet Balance: <span class="badge badge-success p-2"><?php echo $account_balance ?></span></h4>
        <?php
             }
        ?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                        <form action="./processinvest.php" method="post">
                            <div class="input-group mb-3">
                            <input type="text" name="amount" class="form-control" placeholder="Amount e.g 60" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">USD</span>
                            </div>
                              <input type="hidden" name="plan" value="basic">
                            </div>
                            <button type="submit" name="basic_plan"
                                class="block w-full bg-indigo-950 hover:no-underline text-white px-3 py-3 rounded-md text-center hover:text-white hover:bg-indigo-800 transition duration-300">
                                <i class="now-ui-icons business_bank px-2"></i>Start Investment
                            </button>
                        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


 <!-- Choose Silver Modal -->
 <div class="modal fade" id="chooseSilver" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered bg-indigo-800 text-white" role="document">
    <div class="modal-content">
      <div class="modal-header flex flex-col">
        <h5 class="modal-title text-xl mx-auto" id="exampleModalLongTitle" style="color:#223366 !important;text-align:center;font-weight:bold;font-size:18px !important">Start Silver Investment</h5>
        <p class="text-white p-2">
          <span class="" style="color:#223366 !important;text-align:center;font-size:14px !important">Invest: $500 - $2,999</span><br />
           <span class="text-[12px]" style="color:#223366 !important;text-align:center;font-size:14px !important">Interest: 12 %</span>

        </p>
        <?php
             if($account_balance < 60){
        ?>
        <h4 style="color:#223366;font-weight:bold">Wallet Balance: <span class="badge badge-danger p-2"><?php echo $account_balance ?></span></h4>
        <p class="card-text alert-danger"> You account balance is too low to make an investment. Kindly deposit funds to your account</p>
        <?php
             }else{
        ?>
        <h4>Wallet Balance: <span class="badge badge-success p-2"><?php echo $account_balance ?></span></h4>
        <?php
             }
        ?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                        <form action="./processinvest.php" method="post">
                            <div class="input-group mb-3">
                            <input type="text" name="amount" class="form-control" placeholder="Amount e.g 60" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">USD</span>
                            </div>
                            </div>
                            <input type="hidden" name="plan" value="silver">
                            <button type="submit" name="silver_plan"
                                class="block w-full bg-indigo-950 hover:no-underline text-white px-3 py-3 rounded-md text-center hover:text-white hover:bg-indigo-800 transition duration-300">
                                <i class="now-ui-icons business_bank px-2"></i>Start Investment
                            </button>
                        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

 <!-- Choose Premium Modal -->
 <div class="modal fade" id="choosePremium" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered bg-indigo-800 text-white" role="document">
    <div class="modal-content">
      <div class="modal-header flex flex-col">
        <h5 class="modal-title text-xl mx-auto" id="exampleModalLongTitle" style="color:#223366 !important;text-align:center;font-weight:bold;font-size:18px !important">Start Premium Investment</h5>
        <p class="text-white p-2">
          <span class="" style="color:#223366 !important;text-align:center;font-size:14px !important">Invest: $3,000 - $6,999</span><br />
           <span class="text-[12px]" style="color:#223366 !important;text-align:center;font-size:14px !important">Interest: 18 %</span>

        </p>
        <?php
             if($account_balance < 60){
        ?>
        <h4 style="color:#223366;font-weight:bold">Wallet Balance: <span class="badge badge-danger p-2"><?php echo $account_balance ?></span></h4>
        <p class="card-text alert-danger"> You account balance is too low to make an investment. Kindly deposit funds to your account</p>
        <?php
             }else{
        ?>
        <h4>Wallet Balance: <span class="badge badge-success p-2"><?php echo $account_balance ?></span></h4>
        <?php
             }
        ?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                        <form action="./processinvest.php" method="post">
                            <div class="input-group mb-3">
                            <input type="text" name="amount" class="form-control" placeholder="Amount e.g 60" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">USD</span>
                            </div>
                            </div>
                            <input type="hidden" name="plan" value="premium">
                            <button type="submit" name="premium_plan" 
                                class="block w-full bg-indigo-950 hover:no-underline text-white px-3 py-3 rounded-md text-center hover:text-white hover:bg-indigo-800 transition duration-300">
                                <i class="now-ui-icons business_bank px-2"></i>Start Investment
                            </button>
                        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

 <!-- Choose Diamon Modal -->
 <div class="modal fade" id="chooseDiamond" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered bg-indigo-800 text-white" role="document">
    <div class="modal-content">
      <div class="modal-header flex flex-col">
        <h5 class="modal-title text-xl mx-auto" id="exampleModalLongTitle" style="color:#223366 !important;text-align:center;font-weight:bold;font-size:18px !important">Start Diamond Investment</h5>
        <p class="text-white p-2">
          <span class="" style="color:#223366 !important;text-align:center;font-size:14px !important">Invest: $7,000 - $10,000,000</span><br />
           <span class="text-[12px]" style="color:#223366 !important;text-align:center;font-size:14px !important">Interest: 24 %</span>

        </p>
        <?php
             if($account_balance < 60){
        ?>
        <h4 style="color:#223366;font-weight:bold">Wallet Balance: <span class="badge badge-danger p-2"><?php echo $account_balance ?></span></h4>
        <p class="card-text alert-danger"> You account balance is too low to make an investment. Kindly deposit funds to your account</p>
        <?php
             }else{
        ?>
        <h4>Wallet Balance: <span class="badge badge-success p-2"><?php echo $account_balance ?></span></h4>
        <?php
             }
        ?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                        <form action="./processinvest.php" method="post">
                            <div class="input-group mb-3">
                            <input type="text" name="amount" class="form-control" placeholder="Amount e.g 60" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">USD</span>
                            </div>
                            </div>
                            <input type="hidden" name="plan" value="diamond">
                            <button type="submit" name="diamond_plan"
                                class="block w-full bg-indigo-950 hover:no-underline text-white px-3 py-3 rounded-md text-center hover:text-white hover:bg-indigo-800 transition duration-300">
                                <i class="now-ui-icons business_bank px-2"></i>Start Investment
                            </button>
                        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
      
    <?php include_once('footer.php') ?>