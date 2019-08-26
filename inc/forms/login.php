 <form action="<?PHP echo $_SERVER['PHP_SELF']?>" method="post" class="form-horizontal" style="    padding: 15px;
                background: #fff;
                margin-bottom: 15px;
                border-radius: 5px;
                border: solid 1px #dadada;">

            <div class="form-group">
            <label for="email" class="col-sm-4 control-label">Email</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" value="<?php echo isset($_POST['email'])?$_POST['email']:' ';?>" name="email" id="email" placeholder="Enter your email">
            </div>
          </div>
          <div class="form-group">
            <label for="pass" class="col-sm-4 control-label">Password </label>
            <div class="col-sm-8">
                <input type="password" name="pass" class="form-control" id="pass" placeholder="Enter Password ">
            </div>
          </div>
            
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" name="login" class="btn btn-info btn-block">login</button>
            </div>
          </div>
        </form>