<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="./images/logo-no-tag-svg.svg">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./components/loginFirst/loginFirst.css">
  <?PHP
    if($_GET['loginpoint']=="registerseller"){
  ?>
  <link rel="stylesheet" href="./components/sellerSignUp/sellerSignUp.css">
  <?PHP
    }  else if($_GET['loginpoint']=="customersignup"){
  ?>
  <link rel="stylesheet" href="./components/customerSignup/customerSignup.css">
  <?PHP
    } else if($_GET['loginpoint']=="customerlogin"){
  ?>
  <link rel="stylesheet" href="./components/customerLogin/customerLogin.css">
  <?PHP
    }
  ?>
  <title>DBQ Mart - Login</title>
</head>

<body id="body">
  <header>
    <?PHP
    include "./components/nav/nav.php";
    ?>
  </header>
  <!-- Header Ends -->
  <?PHP
  include "./components/darkToggle/darkToggle.php";
  ?>
  <!-- Dark Toggle Ends -->
  <?PHP
  include "./components/searchbox/searchbox.php";
  ?>
  <!-- Search Box Ends -->
  <?PHP
    if($_GET['loginpoint']=="mainpage"){
      include "./components/loginFirst/loginFirst.php";
    }
    else if($_GET['loginpoint']=="registerseller"){
      include "./components/sellerSignUp/sellerSignUp.php";
    }
    else if($_GET['loginpoint']=="customersignup"){
      include "./components/customerSignup/customerSignup.php";
    }
    else if($_GET['loginpoint']=="customerlogin"){
      include "./components/customerLogin/customerLogin.php";
    }
    else{
      header('Location: ./index.php');
    }
  ?>
  <!-- LoginFirst Login Ends -->
  <footer>
    <?PHP
    include "./components/footer/footer.php";
    ?>
  </footer>
  <!-- Footer Ends -->
  <script src="./js/main.js"></script>
</body>

</html>