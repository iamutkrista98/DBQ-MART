<?PHP
if ($_GET['usertype'] == null) {
  header('Location: ./index.php');
}
?>
<section id="login-box">
  <div class="login-box-window">
    <div class="user login">
      <div class="img-box">
        <?PHP
        if ($_GET['usertype'] == 'Seller') {
          echo "<img src=\"./images/login-page/Hello There.png\" />";
        }
        if ($_GET['usertype'] == 'Buyer') {
          echo "<img src=\"./images/login-page/customer-login.png\" />";
        }
        ?>
      </div>
      <div class="form-box">
        <div class="top">
          <p> Not a User? <span>Register now</span></p>
        </div>
        <form action="" class="form">
          <div class="form-control">
            <p>Login Type:<strong>
                <?PHP
                echo $_GET['usertype'];
                ?>
              </strong>
            </p>
            <h2>Hello There!</h2>
            <p>We're glad to see you back.</p>
            <input type="text" placeholder="Enter Username" />
            <div>
              <input type="password" placeholder="Password" />
              <div class="icon form-icon">
                <img src="./images/login-page/eye.svg" alt="" />
              </div>
            </div>
            <span>Reset Password</span>
            <input type="Submit" value="Login" />
          </div>
          <div class="form-control">
            <p>Or continue with</p>
            <div class="icons">
              <div class="icon">
                <img src="./images/login-page/google.svg" alt="" />
              </div>
              <div class="icon">
                <img src="./images/login-page/facebook.svg" alt="" />
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Login Ends -->

    <div class="user signup">
      <div class="form-box">
        <div class="top">
          <p> Already a member? <span>Login now</span>
          </p>
        </div>
        <form action="" class="form">
          <div class="form-control">
            <p>Login Type:<strong>
                <?PHP
                echo $_GET['usertype'];
                ?>
              </strong>
            </p>
            <h2>Welcome to DBQ Mart</h2>
            <p>It's good to have you here.</p>
            <input type="email" placeholder="Enter Email" />
            <div>
              <input type="password" placeholder="Password" />
              <div class="icon form-icon">
                <img src="./images/login-page/eye.svg" alt="" />
              </div>
            </div>
            <div>
              <input type="password" placeholder="Confirm Password" />
              <div class="icon form-icon">
                <img src="./images/login-page/eye.svg" alt="" />
              </div>
            </div>
            <input type="Submit" value="Register" />
          </div>
          <div class="form-control">
            <p>Or continue with</p>
            <div class="icons">
              <div class="icon">
                <img src="./images/login-page/google.svg" alt="" />
              </div>
              <div class="icon">
                <img src="./images/login-page/facebook.svg" alt="" />
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="img-box">
        <?PHP
        if ($_GET['usertype'] == 'Seller') {
          echo "<img src=\"./images/login-page/register.png\" />";
        }
        if ($_GET['usertype'] == 'Buyer') {
          echo "<img src=\"./images/login-page/customer-register.png\" />";
        }
        ?>
      </div>
    </div>
  </div>

  <!-- Register Ends -->
</section>

<!-- Section Ends -->