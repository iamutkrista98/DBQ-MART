<section id="seller-login">
  <div class="container">
    <div class="seller-login-elements">
      <div class="seller-login-picture">
        <img src="./images/login-page/seller-form-image.png" alt="" id="seller-login-img">
      </div>
      <div class="seller-login-form">
        <div class="seller-login-form-text">
          <h1>Want to be a Seller?</h1>
          <h3>Fill the form below</h3>
        </div>
        <form action="">
          <div class="seller-login-form-element">
            <label for="Shop Name">Shop Name</label>
            <br>
            <input type="text" name="Shop Name" required>
          </div>
          <br>
          <div class="seller-login-form-element">
            <label for="Name">Your Username</label>
            <br>
            <input type="text" name="Name" required>
          </div>
          <br>
          <div class="seller-login-form-element">
            <label for="email">Your Email</label>
            <br>
            <input type="email" name="email" required>
          </div>
          <br>
          <div class="seller-login-form-element">
            <label for="password">Your Password</label>
            <br>
            <input type="password" name="password" required>
          </div>
          <br>
          <div class="seller-login-form-element last-seller-form-element">
            <label for="Confirm_password">Confirm Password</label>
            <br>
            <input type="password" name="Confirm_password" required>
          </div>
          <br>
          <button type="Submit">Submit</button>
        </form>
        <span>Not a Seller? <a href="./login.php?loginpoint=sellerLogin"> Register Now </a></span>
      </div>
    </div>
  </div>
</section>