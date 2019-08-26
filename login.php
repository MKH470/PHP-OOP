<?php require_once 'inc/topHeader.php'; ?>
<title>login-<?php echo SITENAME;?></title>
<?php require_once 'inc/header.php'; ?>
<!-- NAVBAR START -->
<?php require_once 'inc/navbar.php'; ?>
<!-- NAVBAR END ---->
<!-- HEADER START -->
<?php require_once 'inc/welcome.php'; ?>
<!-- HEADER END --->
<!-- INDEX MAIN -->

<main class="container">
  <div class="row">
      <article class="col-xs-12 col-md-12">
          <div class="col-md-6 col-md-offset-3" style="padding: 0px;">
             <?php
                if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['login'])){
                   $login= new Login;
                   $login->setInput($_POST['email'],$_POST['pass']);
                   $login->DesplayError();
                   
                }
             
             ?> 
              
              
          </div>
          <div class="col-md-6 col-md-offset-3" style="background: #eeeeee;border: solid 1px #dadada;margin-bottom: 20px;">
            <div class="page-header">
                <h1 style="font-size: 32px;"><i class="glyphicon glyphicon-log-in"></i> Login</h1>
            </div>
              <?php
              if(isset($_SESSION['is_logged']) and $_SESSION['is_logged'] ==TRUE ){
                  Messages::setMsg("Hello ".$_SESSION['user']['fname']," You are already registered whith us","info");
                  echo Messages::getMsg();
                   echo '<meta http-equiv="refresh" content="5 ; index.php" />';
              }
              else{
                  require_once 'inc/forms/login.php';
              }
              
              ?>
             
          </div>
      </article>
  </div>
</main>

<!-- END INDEX MAIN -->
<!-- FOOTER START -->
<?php require_once 'inc/footer.php'; ?>

