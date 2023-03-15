<!DOCTYPE html >
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="w3.css">
</head>
<body class="w3-light-grey ">
<div class="w3-container ">
  <div class="w3-container  w3-hover-border-grey w3-display-right"id ="a"><nav>
  <a class="w3-button  w3-round-large w3-text-cyan " href="home.php">Home</a>
  <a class="w3-button  w3-round-large w3-text-cyan"  href="customer.html#customer">Services</a>
  <a class="w3-button  w3-round-large w3-text-cyan"  href="#Staff.html">About US</a>
  </nav></div>
  <div><img src="home.png"  class="w3-image w3-border w3-round-xxlarge"></div>

<div class="w3-container w3-center w3-display-rightfr  w3-panel w3-border w3-round-xxlarge w3-hover-border-green w3-light-grey ">
    <div class="w3-row-padding">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5 w3-text-blue">Login Form</h2>
        <div class="text-center mb-5 text-dark w3-text-cyan"> Pound System</div>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" action="logcon.php" method="post" autocomplete="off">
        

            <div class="mb-3">
              <br>
              <label for="unameemail">Username or Email :</label>
              <input type="text" class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue w3-padding-small w3-border w3-round-xxlarge" id="unameemail" aria-describedby="emailHelp"
                placeholder="User Name" name="unameemail">
            </div>
              </br>
            <div class="mb-3">
               <label for="password">Password :</label>
              <input type="password" class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue w3-padding-small w3-border w3-round-xxlarge" id="password" placeholder="password" name="password" required value="">
            </div>
              </br>
            <div class=""><button type="submit" class="w3-button w3-green w3-border w3-round-large" name="login" id="login">Login</button></div>
              </br>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark w3-text-light-green" >Not
              Registered? <a href="register.php" class="text-dark fw-bold"> Create an
                Account</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
 </body>

</html>
