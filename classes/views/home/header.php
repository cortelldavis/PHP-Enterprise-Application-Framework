<!--PRIVATE LICENSE-->

<html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

  <title></title>

  <!-- Font Awesome Icon Set -->
  <link rel="stylesheet" href="plugins/font-awesome-4.3.0/css/font-awesome.min.css">

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap-3.3.2.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/theme.css" rel="stylesheet">


  <!-- PHP Mailer -->
  <link href="plugins/PHPMailer/" rel="stylesheet">

  <!--START Modals-->
  <?php include('snippets/modals/login_modal.php') ?>
  <?php include('snippets/modals/register_modal.php') ?>
  <?php include('snippets/modals/logout_modal.php') ?>
  <!--END Modals-->

  <!--START Scripts-->
  <?php include('classes/scripts/init.php') ?>       
  <!--END Scripts-->

  <!--JQuery-->
  <script src="assets/js/jquery-2.1.3.min.js"></script>

  <!--Highcharts-->
  <script src="plugins/Highcharts-4.1.1/js//highcharts.js"></script>

</head>

<header>
  <!-- Spacer -->
  <div class="spacer"></div>

  <!-- Fixed navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Logo</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown active">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-gear"></i> Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="home.php">home</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">   
          <?php
          if(empty($_SESSION['user'])){
            ?>
            <li>
              <!-- Login Button Modal -->
              <button type="button" class="btn no_background white_font" data-toggle="modal" data-target="#loginModal">
               <i class="fa fa-user"></i> Login
             </button>
           </li>
           <li>
            <!-- Register Button Modal -->
            <button type="button" class="btn no_background white_font" data-toggle="modal" data-target="#registerModal">
             <i class="fa fa-pencil"></i> Register
           </button>
         </li>
         <?php
       }else{
        ?>
        <li>
          <!-- Logout Button modal -->
          <button type="button" class="btn no_background white_font" data-toggle="modal" data-target="#logoutModal">
           <i class="fa fa-power-off"></i> Logout
         </button>
       </li>
       <li>
        <?php
      }
      ?>
    </ul>
  </div><!--/.nav-collapse -->
</div>
</nav>
</header>
<body role="document">