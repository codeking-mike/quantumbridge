<?php 
session_start();
if(isset($_GET['ref'])){
  $ref = $_GET['ref'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuantumFX | Create Account</title>
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
                  class="mx-auto inline-block max-w-[260px]"
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
                    Sign Up
                </h4>
                <p>Create an account to start trading and investing</p>
                <?php
                if(isset($_SESSION['error'])){
                  $errors = $_SESSION['error'];
                  
                ?>
                <p class="bg-white text-base leading-relaxed text-red-600">
                  <?php 
                      

                        echo $error;
                  
                  ?>
                </p>
                <?php 
                unset($_SESSION['error']);
                }
                ?>
              </div>
              <form action="processdata.php" method="post">
              <div class="mb-6">
                  <input
                    type="text"
                    placeholder="First Name"
                    class="w-full rounded-md border border-stroke bg-transparent px-5 py-3 text-base text-body-color outline-none focus:border-primary focus-visible:shadow-none dark:border-dark-3 dark:text-white"
                    name="fname" required
                    />
                </div>
                <div class="mb-6">
                  <input
                    type="text" name="lname" required
                    placeholder="Last Name"
                    class="w-full rounded-md border border-stroke bg-transparent px-5 py-3 text-base text-body-color outline-none focus:border-primary focus-visible:shadow-none dark:border-dark-3 dark:text-white"
                  />
                </div>
                <div class="mb-6">
                <select>
	
	<option>Albania</option>
	<option>Algeria</option>
	<option>American Samoa</option>
	<option>Andorra</option>
	<option>Angola</option>
	
	<option>Argentina</option>
	<option>Armenia</option>
	
	<option>Australia</option>
	<option>Austria</option>
	<option>Azerbaijan</option>
	<option>Bahamas</option>
	<option>Bahrain</option>
	<option>Bangladesh</option>
	<option>Barbados</option>
	<option>Belarus</option>
	<option>Belgium</option>
	
	<option>Bosnia and Herzegovina</option>
	<option>Botswana</option>
	<option value="BV">Bouvet Island</option>
	<option value="BR">Brazil</option>
	<option value="IO">British Indian Ocean Territory</option>
	
	<option value="BG">Bulgaria</option>
	<option>Canada</option>
	
	<option value="CL">Chile</option>
	<option value="CN">China</option>
	
	
	<option value="CY">Cyprus</option>
	<option value="CZ">Czech Republic</option>
	<option value="DK">Denmark</option>
	
	<option value="EG">Egypt</option>
	<option value="SV">El Salvador</option>
	<option value="GQ">Equatorial Guinea</option>
	<option value="ER">Eritrea</option>
	<option value="EE">Estonia</option>
	<option value="ET">Ethiopia</option>
	
	<option value="FI">Finland</option>
	<option value="FR">France</option>
	
	<option value="GM">Gambia</option>
	<option value="GE">Georgia</option>
	<option value="DE">Germany</option>
	<option value="GH">Ghana</option>
	<option value="GI">Gibraltar</option>
	<option value="GR">Greece</option>
	<option value="GL">Greenland</option>
	<option value="GD">Grenada</option>
	
	<option value="HN">Honduras</option>
	<option value="HK">Hong Kong</option>
	<option value="HU">Hungary</option>
	<option value="IS">Iceland</option>
	<option value="IN">India</option>
	<option value="ID">Indonesia</option>
	
	<option value="IE">Ireland</option>
	
	<option value="IL">Israel</option>
	<option value="IT">Italy</option>
	<option value="JM">Jamaica</option>
	<option>Japan</option>
	
	<option value="JO">Jordan</option>
	<option value="KZ">Kazakhstan</option>
	<option value="KE">Kenya</option>
	
	<option value="KP">Korea, Democratic People's Republic of</option>
	<option value="KR">Korea, Republic of</option>
	<option value="KW">Kuwait</option>
	
	
	<option value="LI">Liechtenstein</option>
	<option value="LT">Lithuania</option>
	<option value="LU">Luxembourg</option>
	
	<option value="MY">Malaysia</option>
	<option value="MV">Maldives</option>
	<option value="ML">Mali</option>
	<option value="MT">Malta</option>
	
	<option>Mexico</option>
	
	<option value="MC">Monaco</option>
	<option value="MN">Mongolia</option>
	
	<option value="MA">Morocco</option>
	
	<option value="NP">Nepal</option>
	<option value="NL">Netherlands</option>
	<option value="NC">New Caledonia</option>
	<option value="NZ">New Zealand</option>
	<option value="NI">Nicaragua</option>
	<option value="NE">Niger</option>
	<option>Nigeria</option>
	
	<option>Norway</option>
	<option value="OM">Oman</option>
	<option value="PK">Pakistan</option>
	<option value="PW">Palau</option>
	<option value="PS">Palestinian Territory, Occupied</option>
	<option value="PA">Panama</option>
	<option value="PG">Papua New Guinea</option>
	<option value="PY">Paraguay</option>
	<option value="PE">Peru</option>
	<option value="PH">Philippines</option>
	<option>Poland</option>
	<option>Portugal</option>
	<option value="PR">Puerto Rico</option>
	<option value="QA">Qatar</option>
	
	<option value="RO">Romania</option>
	<option value="RU">Russian Federation</option>
	<option value="RW">Rwanda</option>
	
	<option>Saudi Arabia</option>
	<option value="SN">Senegal</option>
	<option value="RS">Serbia</option>
	<option value="SC">Seychelles</option>
	<option value="SL">Sierra Leone</option>
	<option value="SG">Singapore</option>
	
	<option>South Africa</option>
	<option>Swaziland</option>
	<option value="SE">Sweden</option>
	<option value="CH">Switzerland</option>

	<option value="TZ">Tanzania, United Republic of</option>
	<option value="TH">Thailand</option>

	<option value="TT">Trinidad and Tobago</option>
	<option value="TN">Tunisia</option>
	<option value="TR">Turkey</option>

	<option value="UA">Ukraine</option>
	<option value="AE">United Arab Emirates</option>
	<option value="GB">United Kingdom</option>
	<option value="US">United States</option>

	<option value="UY">Uruguay</option>
	<option value="UZ">Uzbekistan</option>
	<option value="VU">Vanuatu</option>
	<option value="VE">Venezuela, Bolivarian Republic of</option>
	<option value="VN">Viet Nam</option>

	<option value="ZW">Zimbabwe</option>
</select>
                 <select name="country" class="w-full rounded-md border border-stroke bg-indigo-900 px-5 py-3 text-base text-body-color outline-none focus:border-primary focus-visible:shadow-none dark:border-dark-3 dark:text-white"
                 >
                    <option>United States</option>
                    <option>United Kingdom</option>
                    <option>Canada</option>
                    <option>Japan</option>
                 </select>

                  
                </div>
                <div class="mb-6">
                  <input
                    type="text"
                    placeholder="Your Phone Number" required
                    class="w-full rounded-md border border-stroke bg-transparent px-5 py-3 text-base text-body-color outline-none focus:border-primary focus-visible:shadow-none dark:border-dark-3 dark:text-white"
                    name="phoneNumber"
                    />
                </div>
                <div class="mb-6">
                  <input
                    type="email"
                    placeholder="Enter Email Address" required
                    class="w-full rounded-md border border-stroke bg-transparent px-5 py-3 text-base text-body-color outline-none focus:border-primary focus-visible:shadow-none dark:border-dark-3 dark:text-white"
                   name="email"
                    />
                </div>
                <div class="mb-6">
                  <input
                    type="text"
                    placeholder="User Name" required
                    class="w-full rounded-md border border-stroke bg-transparent px-5 py-3 text-base text-body-color outline-none focus:border-primary focus-visible:shadow-none dark:border-dark-3 dark:text-white"
                   name="userName"
                    />
                </div>
                <div class="mb-6">
                  <input
                    type="password"
                    placeholder="Password" required
                    class="w-full rounded-md border border-stroke bg-transparent px-5 py-3 text-base text-body-color outline-none focus:border-primary focus-visible:shadow-none dark:border-dark-3 dark:text-white"
                   name="password"
                    />
                </div>
                <div class="mb-6">
                  <input
                    type="password"
                    placeholder="Password" required
                    class="w-full rounded-md border border-stroke bg-transparent px-5 py-3 text-base text-body-color outline-none focus:border-primary focus-visible:shadow-none dark:border-dark-3 dark:text-white"
                   name="confirmPassword"
                    />
                </div>
                <input type="hidden" name="ref" value="<?php echo $ref ?>">
                <div class="mb-10">
                  <input
                    type="submit"
                    value="Create Account"
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
                <span class="pr-0.5">Already a member?</span>
                <a
                  href="./login.php"
                  class="text-orange-600 hover:underline"
                >
                  Sign In
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