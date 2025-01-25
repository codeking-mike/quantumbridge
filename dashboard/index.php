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
  <link rel="shortcut icon" href="../assets/quantum_icon.png" type="image/x-icon">
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
          <div class="col-md-12">
         <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500 Index"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100 Cash CFD"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR to USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    },
    {
      "description": "Solana",
      "proName": "BINANCE:SOLUSDT"
    }
  ],
  "showSymbolLogo": true,
  "isTransparent": false,
  "displayMode": "adaptive",
  "colorTheme": "dark",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
          </div>
        </div>
      <div class="row">
          <div class="col-lg-4 mb-1">
            <div class="card card-chart bg-indigo-900 p-3">
              
              <div class="card-body">
              <h5 class="card-category text-xl text-white font-bold">Wallet Balance</h5>
              <h3 class="card-title text-2xl text-orange-600 font-bold">$<?php echo $account_balance ?></h3>
              </div>
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart bg-indigo-900 p-3">
              
              <div class="card-body">
              <h5 class="card-category text-xl text-white font-bold">Interest Earned</h5>
              <h3 class="card-title text-2xl text-orange-600 font-bold">$<?php
              if(isset($interest_balance)){
                echo $interest_balance;
              }else{
                echo "0.00";
              }
               ?></h3>
               <a
                                href="processwithdraw.php?interest=1" style="text-decoration:none"
                                class="px-4 w-full md:max-w-[26%] py-2 bg-indigo-950 text-white rounded-r-md hover:bg-indigo-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            >
                            Withdraw Interest

               </a>
              </div>
              
            </div>
          </div>
          <div class="col-lg-4 ">
          <div class="card card-chart bg-indigo-900 p-3">
              
              <div class="card-body">
              <h5 class="card-category text-xl font-bold text-white">Total Deposit</h5>
              <h3 class="card-title text-orange-600 font-bold text-2xl">$<?php
              if(isset($total_deps)){
                echo $total_deps;
              }else{
                echo "0.00";
              }
               ?></h3>
              </div>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
          <div class="card card-chart bg-indigo-900 p-3">
              
                <div class="card-body">
                <h5 class="card-category text-xl text-white font-bold">Total Investments</h5>
                <h3 class="card-title text-orange-600 font-bold text-2xl">$<?php
              if(isset($total_invs)){
                echo $total_invs;
              }else{
                echo "0.00";
              }
               ?></h3>
               <a
                                href="#" style="text-decoration:none"
                                class="px-4 w-full md:max-w-[26%] py-2 bg-indigo-950 text-white rounded-r-md hover:bg-indigo-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            >
                            View Investments

               </a>
                </div>
              
            </div>
          </div>
        
          <div class="col-lg-4">
          <div class="card card-chart bg-indigo-900 p-3">
              
              <div class="card-body">
              <h5 class="card-category text-white text-xl font-bold">Total Withdrawal</h5>
              <h3 class="card-title text-orange-600 text-2xl font-bold">$<?php
              if(isset($total_with)){
                echo $total_with;
              }else{
                echo "0.00";
              }
               ?></h3>
              </div>
              
            </div>
          </div>
        
          <div class="col-lg-4">
          <div class="card card-chart bg-indigo-900 p-3">
              
              <div class="card-body">
              <h5 class="card-category text-white text-xl font-bold">Referral Commission</h5>
              <h3 class="card-title text-orange-600 text-2xl font-bold">$<?php
              if(isset($referral_bonus)){
                echo $referral_bonus;
              }else{
                echo "0.00";
              }
               ?></h3>
              </div>
              
            </div>
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 mx-4 my-3">
            <div class="card  card-tasks bg-indigo-900">
              <div class="card-header ">
                <h5 class="card-category text-xl text-white font-bold text-center">Portfolio Balance</h5>
                <h4 class="card-title text-orange-600 text-2xl font-bold text-center">$<?php
                $tot_bal = $account_balance + $interest_balance;
                echo $tot_bal;
              
               ?></h4>
              </div>
              <hr class="text-white">
              <div class="card-body flex flex-col">
                <div class="flex flex-row w-full justify-between items-center">
                   <p class="text-lg text-white font-light">Available Funds</p>
                   <p class="text-lg text-orange-600 font-bold">$<?php echo $account_balance ?></p>
                  
                </div>
                <div class="flex flex-row w-full justify-between items-center">
                   <p class="text-lg text-white font-light">Interest Earned</p>
                   <p class="text-lg text-orange-600 font-bold">$<?php echo $interest_balance ?></p>
                  
                </div>
                <div class="flex flex-row w-full justify-between items-center">
                   <p class="text-lg text-white font-light">Total Balance</p>
                   <p class="text-lg text-orange-600 font-bold">$<?php echo $tot_bal; ?></p>
                  
                </div>
              </div>
              <div class="card-footer flex flex-col md:flex-row w-full justify-center items-center space-x-4 gap-2">
                <a href="./withdraw.php" 
                  class="flex-1 w-full md:max-w-[48%] bg-white hover:no-underline text-indigo-950 px-3 py-3 rounded-md text-center hover:text-indigo-950 hover:bg-indigo-800 transition duration-300">
                  <i class="now-ui-icons business_money-coins px-2"></i>Withdraw Funds
                </a>
                <a href="./deposit.php" 
                  class="flex-1 w-full md:max-w-[48%] bg-indigo-600 hover:no-underline text-white px-3 py-3 rounded-md text-center hover:text-white hover:bg-indigo-800 transition duration-300">
                  <i class="now-ui-icons business_bank px-2"></i>Deposit Funds
                </a>
          </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 mx-4 my-3">
            <div class="card  card-tasks bg-indigo-900">
              <div class="card-header ">
                <h5 class="card-category text-xl text-white font-bold text-center">My Referrals</h5>
                <h4 class="card-title text-orange-600 text-2xl font-bold text-center">0</h4>
              </div>
              <hr class="text-white">
              
              <div class="card-footer">
                <h4 class="card-title text-white text-2xl font-bold">Refer and Earn</h4>
                <p class="card-title paragraph text-white">Refer your friends and earn a commission</p>
              <div class="flex mx-auto items-center space-x-2 p-4 bg-gray-100 rounded-lg w-full">
              <input 
                id="copyInput" 
                type="text" 
                class="flex-1 w-full md:max-w-[70%] px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" 
                placeholder="Enter text to copy" 
                value=<?php echo "https://quantumbridgeus.com/register.php?ref=" . $username ?>
                readonly
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