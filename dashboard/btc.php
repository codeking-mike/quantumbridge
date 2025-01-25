<?php 
include_once('auth.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form inputs
    $amount = htmlspecialchars(trim($_POST['amount']));
    if($amount < 60){
        $_SESSION['error'] = "Minimum deposit amount is 60USD";
        header("location:deposit.php");
        exit;   
    }

    $result = mysqli_query($conn, $wallet_query);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        extract($row);
    }

}else{
    header("location:deposit.php");
    exit;
}

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
              <h5 class="card-category text-3xl font-bold text-white text-center">Bitcoin Deposit</h5>
              <h3 class="card-title text-white text-lg text-center">Complete your deposit process below</h3>
              </div>
              
            </div>
          </div>
            </div>
        
            <div class="row flex-wrap flex-col md:flex-row col-md-10">

            
            
                <div class="flex flex-col p-4 justify-between items-center mb-4 overflow-hidden rounded-lg bg-indigo-900 shadow-1 duration-300 hover:shadow-3">
                    
              
                   <div class="w-full flex-1 text-left">
                    <p class="paragraph text-white mb-10">You have requested a deposit of <span class="text-orange-600"><?php echo $amount ?>USD</span> in Bitcoin. Kindly use the details 
                    below to make deposit. 
                    </p>
                    <p class="text-white mb-10">Please ensure you send only bitcoin to the wallet address provided, sending any other coins will result in permanent loss.</p>
                
                    <hr class="w-full" />
                    <div class="flex flex-row w-full justify-between items-center gap-2">
                        <p
                            class="text-white text-base leading-relaxed text-body-color dark:text-dark-6"
                        >
                            Amount:
                        </p>
                        <p
                            class="text-base text-white leading-relaxed text-body-color dark:text-dark-6"
                        >
                        <?php echo $amount ?>USD</span>
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
                        <form action="processdeposit.php" method="post">
                            <div class="input-group mb-3">
                            <input id="copyInput" value="<?php echo $wallet_address ?>" readonly  type="text" name="wallet" class="form-control text-white text-lg" style="background-color:black" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append bg-orange-600" style="" onclick="copyToClipboard()">
                                <span class="input-group-text" style="background-color:orange !important;color:black" id="basic-addon2" style="">Copy <i class="now-ui-icons files_single-copy-04"></i></span>
                            </div>
                            </div>
                            <input type="hidden" name="user" value="<?php echo $username ?>">
                            <input type="hidden" name="amount" value="<?php echo $amount ?>">
                            <input type="hidden" name="method" value="btc">
                            <button type="submit" name="btc" 
                                class="block w-full bg-indigo-950 hover:no-underline text-white px-3 py-3 rounded-md text-center hover:text-white hover:bg-indigo-800 transition duration-300">
                                <i class="now-ui-icons business_bank px-2"></i>Proceed to Payment
                            </button>
                        </form>
                        
                    </div>

                
              
            </div>
            
          </div>
         
          
          
          

            </div>
        
        </div>
        
        
        
      </div>
      
    <?php include_once('footer.php') ?>