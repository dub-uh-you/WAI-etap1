<div class="col-21">
    <div class="col-2 divider"></div>
    <div class="col-8" id="form">
            <form method="post" action="/register">
                <fieldset>
                  <legend>Register!</legend>
                  Email
                  <input type="text" placeholder="Enter Email" name="email" required><br/>
                   Your nick:
                   <input type="text" placeholder="Enter Your Nick" name="nick" id="nick" required>
                   <br/><br/>
                   <label for="pswd">Your password:</label>
                   <input type="password" placeholder="Enter Password" name="pswd" required><br/>
                  <label for="pswd_repeat">Repeat your password:</label>
                  <input type="password" placeholder="Repeat Password" name="pswd_repeat" required><br/>
                   Your gender:
                   <label for="female">Female</label>
                   <input type="radio" name="gender" id="female" value="female">
                   <label for="male">Male</label>
                   <input type="radio" name="gender" id="male" value="male">
                   <br/><br/>
                   By creating an account you agree to our <a href="#">Terms & Privacy</a>.<br/>
                   <input type="checkbox" name="agreement" value="agreement" required>I agree to the processing of my personal data
                   <br/> <br/>
                   <input type="submit" name="register" value="Send">
                   <input type="reset">
                </fieldset>
            </form> 
    </div>
    <div class="col-1 divider"></div>
    <div class="col-8">
            <form method="post" action="/login">
              <fieldset>
                  <legend>Log in!</legend>
                  Your nick:
                   <input type="text" placeholder="Enter Your Nick" name="nick" id="nick" required>
                   <br/>
                  <label for="pswd">Your password:</label>
                  <input type="password" placeholder="Enter Password" name="pswd" id="pswd" required><br/><br/>
                  <!-- Forgot your password?<a href="#"><strong>Click here!</strong></a><br/><br/> -->
                  <input type="submit" name="Login" value="Log in!">
              </fieldset>
            </form>   
    </div>
    <div class="col-2 divider"></div>
  </div>
</div>