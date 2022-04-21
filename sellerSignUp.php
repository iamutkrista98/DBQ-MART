<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="./images/logo-no-tag-svg.svg">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./components/sellerSignUp/sellerSignUp.css">
  <title>DBQ Mart - Seller Login</title>
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
  include "./components/sellerSignUp/sellerSignUp.php";
  ?>
  <!-- Seller Login Ends -->
  <footer>
    <?PHP
    include "./components/footer/footer.php";
    ?>
  </footer>
  <!-- Footer Ends -->
  <script src="./js/main.js"></script>
</body>

</html>