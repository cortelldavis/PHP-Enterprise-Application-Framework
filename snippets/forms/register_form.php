
<div class="panel panel-info">
    <div class="panel-heading">
        <div class="panel-title">Register</div>
    </div>  
    <div class="panel-body" >
        <form id="signupform" class="form-horizontal" role="form" action="register" method="post">

            <div id="signupalert" style="display:none" class="alert alert-danger">
                <p>Error:</p>
                <span></span>
            </div>

            <div class="form-group">
                <label for="username" class="col-md-3 control-label">Username</label>
                <div class="col-md-9">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-md-3 control-label">Email Address</label>
                <div class="col-md-9">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control" name="email" placeholder="Email Address">
                </div>
                </div>
            </div>

            <div class="form-group">
                <label for="firstname" class="col-md-3 control-label">First Name</label>
                <div class="col-md-9">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                    <input type="text" class="form-control" name="first_name" placeholder="First Name">
                </div>
                </div>
            </div>
            <div class="form-group">
                <label for="lastname" class="col-md-3 control-label">Last Name</label>
                <div class="col-md-9">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                    <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                </div>
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-md-3 control-label">Password</label>
                <div class="col-md-9">
                    <div  class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="confirm_password" class="col-md-3 control-label">Confirm Password</label>
                <div class="col-md-9">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                </div>
                </div>
            </div>

            <div class="form-group">
                <!-- Captcha -->
                <label for="captcha" class="col-md-3 control-label">Captcha</label>                                    
                <div class="col-md-offset-3 col-md-9">
                    <img id="captcha" src="plugins/securimage/securimage_show.php" alt="CAPTCHA Image" /><br/><br/>
                    <input type="text" name="captcha_code" size="10" maxlength="6" />&nbsp;
                    <a href="#" onclick="document.getElementById('captcha').src = 'plugins/securimage/securimage_show.php?' + Math.random(); return false"><i class="fa fa-refresh"></i></a>
                </div>
            </div>

            <div class="form-group">
                <!-- Submit Button -->                                        
                <div class="col-md-offset-3 col-md-9">
                    <button name="submit" type="submit" class="btn btn-primary">Sign Up</button>
                </div>
            </div>

        </form>
    </div>
</div>




