<form action="action_page.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account for the club.</p>
    <hr>

    <label for="email"><b>Customer Email</b></label>
    <input type="text" placeholder="Enter Customer Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

    <label for="duration"><b>Membership Duration</b></label>
    <input type="number" placeholder="Enter Duration" name="duration" id="duration" required min="1">

    <label for="interest"><b>Activity Interest</b></label>
    <input type="text" placeholder="Enter Activity of Interest" name="interest" id="interest" required>

    <label for="age"><b>Customer Age</b></label>
    <input type="number" placeholder="Enter Age" name="age" id="age" required min="18" max="100">

    <label for="payment"><b>Customer Payment</b></label>
    <input type="number" placeholder="Enter Payment Amount" name="payment" id="payment" required>

    <hr>

    <p>By creating an account, you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>