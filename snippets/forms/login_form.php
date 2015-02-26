<div class="panel panel-info" >
    <div class="panel-heading">
        <div class="panel-title">Log In</div>
    </div>     

    <div style="padding-top:30px" class="panel-body" >

        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

        <form id="loginform" class="form-horizontal" role="form">

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">                                        
            </div>

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
            </div>

            <div class="input-group">
                <div class="checkbox">
                    <label>
                        <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                    </label>
                </div>
            </div>


            <div style="margin-top:10px" class="form-group">
            <!-- Log in Button -->

                <div class="col-sm-12 controls">
                <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </div>


            <div class="form-group">
                <div class="col-md-12 control">

                        <a href="#">Create a new Account </a><br/>
                        <a href="#">Forgot Password </a>

                </div>
            </div>    
        </form>     

    </div>                     
</div>  
