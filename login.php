
<!--login-modal start-->
<div class="modal fade bs-example-modal-md-1" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="top_links"><a href="#" data-dismiss="modal" aria-label="Close">Close (X)</a></div>
      <h2 class="modal-title">LOGIN FORM</h2>
      <form class="login-form">
        <fieldset>
          <div class="form-group"> <i class="fa fa-envelope"></i>
            <input type="email" name="email" class="form-control" placeholder="Email" required data-error="Valid email is required.">
          </div>
          <div class="form-group"> <i class="fa fa-lock"></i>
            <input type="password" name="name" class="form-control" placeholder="Password" required data-error="Password is required.">
          </div>
          <div class="form-group">
            <label>
              <input type="checkbox">
              <em>Remember Me</em> </label>
            <a class="forgetpassword" href="#"> <em>Forgot Password</em> <i class="fa fa-question-circle"></i> </a> </div>
          <button class="tg-theme-btn tg-theme-btn-lg" type="submit">login</button>
        </fieldset>
      </form>
      <p>Not a Member?
        <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-md">Create an Account</button>
      </p>
    </div>
  </div>
</div>
<!--login-modal end--> 
<!--registration-modal start-->
<div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="top_links"><a href="#" data-dismiss="modal" aria-label="Close">Close (X)</a></div>
      <h2 class="modal-title">REGISTRATION FORM</h2>
      <form class="login-form">
        <fieldset>
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Username" required data-error="Username is required.">
          </div>
          <div class="form-group">
            <input type="password" name="name" class="form-control" placeholder="Password" required data-error="Password is required.">
          </div>
          <div class="form-group">
            <input type="password" name="name" class="form-control" placeholder="Confirm Password" required data-error="Password is required.">
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email Address" required data-error="Valid email is required.">
          </div>
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="First Name" required data-error="First Name is required.">
          </div>
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Last Name" required data-error="Last Name is required.">
          </div>
          <div class="form-group">
            <label>
              <input type="checkbox" data-error="Last Name is required.">
              <em>I agree with the terms and conditions</em></label>
          </div>
          <button class="tg-theme-btn tg-theme-btn-lg" type="submit">Create an Account</button>
        </fieldset>
      </form>
      <p>Already a Member?
        <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-md-1">Login Here</button>
      </p>
    </div>
  </div>
</div>
<!--registration-modal end--> 