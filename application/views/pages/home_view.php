<?php echo validation_errors(); ?>

  <div class="imgbg">
    <div class="dark-overlay">

      <div class="col-lg-12 d-lg-block">
        <div class="mx-5">
          <h1 class="title">Student Management System</h1>
        </div>
      </div>
        <div id="first">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 mx-auto mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class= "text-center">
                          Login  
                        </h4>
                        <hr style = "border-color:white; border-style:solid;">
                        <div class="card-body">
                              <form action="<?php echo base_url().'home_controller/login' ?>" method="post">
                               
                                 <div class="form-group"> 
                                    
                                     <input type="email" class="form-control" name="log_email" placeholder ="Email" required >
                                </div>

                                                          
                                 <div class="form-group">
                                     
                                        <input type="password" class="form-control" name = "log_password" placeholder = "Password">
                                    </div>
                                    <a href="forget.php" id="forgot" class="forgot">Forget Password?</a>
                                        
                                  <br>
                                  <input type="submit" class="btn btn-primary btn-block mt-1" value="Login" name = "login_button">

                                    <br>                                                
                                     <a href="#" id="signup" class="signup">Need an account? Register here!</a>
                                                                                    
                             </form>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </div>   
    </div>

      <div id="second">
      <div class="container">
        <div class="row">
            <div class=" card col-lg-4 mx-auto border-dark">
                <div class="card-body text-center">
                    <h3 class="display-5"> Sign Up Today </h3>
                    <p class="lead">Please fill out this form to register</p>
                    <hr style = "border-color:white; border-style:solid;">
                      <form action="<?php echo base_url().'home_controller/register' ?>" method="post"  autocomplete="off">
                        <div class="form-group">
                            <input type="text" name="reg_fname" placeholder="First Name" required class="form-control">   
                        </div>
                        <div class="form-group">
                            <input type="text" name="reg_lname" placeholder="Last Name" required class="form-control">
                        </div>
                        <div class="form-group">
                         <input type="email" name="reg_email" placeholder="Email" required class="form-control">
                         </div>
                        <div class="form-group">
                         <input type="email" name="reg_email2" placeholder="Confirm Email" required class="form-control">
                        </div>
                        <div class="form-group">
                         <input type="password" name="reg_password" placeholder="Password" required class="form-control"> 
                        </div>                    
                        <div class="form-group">
                         <input type="password" name="reg_password2" placeholder=" Confirm Password" required class="form-control" >
                        </div>
                        <div class="form-group">
                        <select class="form-control" required autofocus name="user_type">
                        <option value="student">Student</option>
                        <option value="mentor">Mentor</option>
                        <option value="university">University</option>
                        </select>
                        </div>
                        <input type="submit" value="Register" class="btn btn-block btn-danger" name="reg_button" id="reg_button">
                    </form>
                       <br>
                        <a href="#" id="signin" class="signin">Already have an account? Sign in here!</a>
                </div>
            </div>
        </div>
      </div>         
</div>
</body>

