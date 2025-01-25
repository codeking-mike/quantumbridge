<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuantumFX | Account Login</title>
    <link rel="stylesheet" href="./output.css">
</head>
<body>
    <div class="wrapper">

    <section class="bg-indigo-950 text-white py-20 px-8 lg:py-[120px] dark:bg-dark">
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
            <div
              class="relative mx-auto max-w-[525px] overflow-hidden rounded-lg bg-indigo-900 px-10 py-16 text-center sm:px-12 md:px-[60px] dark:bg-dark-2"
            >
              <div class="mb-10 text-center md:mb-16">
                <a
                  href="./index.html"
                  class="mx-auto inline-block max-w-[160px]"
                >
                <img
                    src="./assets/quantumbridge_logo.png"
                    alt="Quantum Bridge"
                    class="h-24 w-32 mr-2 max-w-[180px]" style="width:223px !important; height:98px !important"
                  />
                </a>
              </div>
              <div class="mb-10 text-left font-light">
                <h4 class="text-orange-600 font-bold text-2xl">
                    Account Login
                </h4>
                <p>Access your dashboard using your Username and Password</p>
                <?php
                if(isset($_SESSION['error'])){
                  $errors[] = $_SESSION['error'];
                  
                ?>
                <p class="bg-white text-base leading-relaxed text-red-600 p-3">
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
              <form action="processlogin.php" method="post">
              
                
                
                
                
                <div class="mb-6">
                  <input
                    type="text"
                    placeholder="User Name"
                    class="w-full rounded-md border border-stroke bg-transparent px-5 py-3 text-base text-body-color outline-none focus:border-primary focus-visible:shadow-none dark:border-dark-3 dark:text-white"
                   name="userName"
                    />
                </div>
                <div class="mb-6">
                  <input
                    type="password"
                    placeholder="Password"
                    class="w-full rounded-md border border-stroke bg-transparent px-5 py-3 text-base text-body-color outline-none focus:border-primary focus-visible:shadow-none dark:border-dark-3 dark:text-white"
                   name="password"
                    />
                </div>
                
                <div class="mb-10">
                  <input
                    type="submit"
                    value="Sign In"
                    class="w-full cursor-pointer rounded-md border border-primary bg-orange-700 px-5 py-3 text-base font-medium text-white transition hover:bg-opacity-90"
                    name="create"
                    />
                </div>
              </form>
              
              <a
                href="javascript:void(0)"
                class="mb-2 inline-block text-base text-dark hover:text-primary hover:underline dark:text-white"
              >
                Forget Password?
              </a>
              <p class="text-base text-body-color dark:text-dark-6">
                <span class="pr-0.5">Don't have an account?</span>
                <a href="./register.php" class="text-orange-600 hover:underline">
                  Sign Up
                </a>
              </p>

              <div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    </div>
    <script src="./assets/js/alpine.min.js"></script>
    
</body>
</html>