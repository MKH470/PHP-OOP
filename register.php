<?php
require_once 'inc/topHeader.php';
?>
<title>Create a new accont-<?php echo SITENAME;?></title>
<?php require_once 'inc/header.php'; ?>
<!-- NAVBAR START -->
<?php require_once 'inc/navbar.php'; ?>
<!-- NAVBAR END ---->
<!-- HEADER START -->
<?php require_once 'inc/welcome.php'; ?>
<!-- HEADER END --->

<!-- INDEX MAIN -->

<main class="container" style="background-color: #333; color: #f5f5f5;">
  <div class="row">
      <article class="col-xs-12 col-md-12">
         
          <div class="col-md-12 ">
              <div class="page-header">
            <h1><i class="glyphicon glyphicon-user" aria-hidden="true"></i>  
                Create a new accont <small style="color: red;">Please fill in all the fields</small></h1>
          </div>
               <div class="col-md-8 col-offset-3" style="padding: 0px; text-align: center;">
              <?php 
              if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['register'])){
                   $register= new Register();
                   $register->setInput($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['pass'], $_POST['con_pass']);
                   $register->DesplayError();
              }
              
              ?>
          </div>
               <div class="col-md-2 "></div>

              <div class="col-md-8 col-offset-3">
           <?php
           if(isset($_SESSION['is_inloged']) and $_SESSION['is_inloged']==TRUE){
                 Messages::setMsg("Hi ".$_SESSION['user']['fname'].' '.$_SESSION['user']['lname'], " You are already registered whith us","info");
            echo Messages::getMsg();
            echo '<meta http-equiv="refresh" content="5 ; index.php" />';
           }
           else{
               require_once 'inc/forms/register.php';
           }
           
           ?>
              </div>
          </div>
          
      </article>
  </div>
</main>

<!-- END INDEX MAIN -->
<!-- FOOTER START -->
<?php require_once 'inc/footer.php'; ?>
