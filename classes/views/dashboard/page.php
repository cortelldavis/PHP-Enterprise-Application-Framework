<div id="page">
  <div class="container-fluid">
    <div class="container">
      <div class="panel" >
        <div class="panel-heading">
          <h3 class="panel-title"> Dashboard</h3>
        </div>
        <div class="panel-body" >
          <div class="row">
            <div id="left content" class=""></div>
            <div class="col-md-4" align="center"> <img alt="User Pic" src="assets/img/blank_portrait.png" class="img-circle"> </div>
            <div class=" col-md-4"> 
              <table class="table table-user-information">
                <tbody>
                  <tr>
                    <td>Username:</td>
                    <td> <?php echo($_SESSION['user']['username']); ?> </td>
                  </tr>
                  <tr>
                    <td>Full name:</td>
                    <td><?php echo($_SESSION['user']['first_name'] .' ' . $_SESSION['user']['last_name']); ?></td>
                  </tr>      
                  <tr>
                    <td>Email Address:</td>
                    <td><?php echo($_SESSION['user']['email']); ?></td>
                  </tr>
                  <tr>
                    <td>Date of Birth:</td>
                    <td><?php echo($_SESSION['user']['birth_date']); ?></td>
                  </tr>
                  <tr>
                    <tr>
                      <td>Gender:</td>
                      <td>
                        <?php 
                        if ($_SESSION['user']['gender']==1) {
                          echo "Male";
                        }else{
                          echo "Female";
                        }
                        ?> 
                      </td>
                    </tr>
                    <tr>
                      <td>Physical Address:</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Account Creation Date:</td>
                      <td><?php echo($_SESSION['user']['date_created']); ?></td>
                    </tr>
                    <tr>
                      <td>Phone Number:</td>
                      <td><?php echo($_SESSION['user']['phone_number']); ?></td>
                    </tr>                  
                    <tr>
                      <td>Last Logged in:</td>
                      <td><?php echo($_SESSION['user']['last_login']); ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="panel-footer">
            <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">cancel</a>
            <span class="pull-right">
              <a href="?update=true" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-success">update <i class="fa fa-edit"></i></a>
            </span>
          </div>
        </div>  
      </div> 
    </div> 
  </div>


