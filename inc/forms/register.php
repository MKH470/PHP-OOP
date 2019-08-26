
   <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form-horizontal" style="    padding: 15px;
                background: #fff;
                margin-bottom: 15px;
                border-radius: 5px;
                border: solid 1px #dadada;
                color:#333">
          <div class="form-group">
            <label for="firstname" class="col-sm-4 control-label">First Name</label>
            <div class="col-sm-6">
                <input type="text" name="firstname" value="<?php echo isset($_POST['firstname'])? $_POST['firstname']:null;?> " class="form-control" id="firstname" placeholder="enter your name">
            </div>
          </div>
          <div class="form-group">
            <label for="lastname" class="col-sm-4 control-label">Last Name</label>
            <div class="col-sm-6">
                <input type="text" name="lastname" value="<?php echo isset($_POST['lastname'])? $_POST['lastname']:null;?> "class="form-control" id="lastname" placeholder="enter your last name">
            </div>
          </div>
            <div class="form-group">
            <label for="email" class="col-sm-4 control-label">Email</label>
            <div class="col-sm-6">
                <input type="text" name="email" value="<?php echo isset($_POST['email'])? $_POST['email']:null;?> "class="form-control" id="email" placeholder="enter your email">
            </div>
          </div>
          <div class="form-group">
            <label for="pass" class="col-sm-4 control-label">Password </label>
            <div class="col-sm-6">
                <input type="password" name="pass" class="form-control" id="pass" placeholder="enter the Password">
            </div>
          </div>
            
          <div class="form-group">
            <label for="con_pass" class="col-sm-4 control-label">Confirm Password</label>
            <div class="col-sm-6">
                <input type="password" name="con_pass" class="form-control" id="con_pass" placeholder="Enter Confirm Password">
            </div>
          </div>
            
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-6">
                <button type="submit" name="register"  class="btn btn-success btn-block">Create a new accont </button>
            </div>
          </div>
        </form>