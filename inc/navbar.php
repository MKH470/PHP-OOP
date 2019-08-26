<nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0px">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="."><span><img src="libs/image/logo.png" width="30" /><?php echo SITENAME;?></span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li><a href="."><i class="glyphicon glyphicon-home"></i> Home<span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-th-list"></i> Sections<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="#"><i class="glyphicon glyphicon-menu-left"></i> Entertainment Movies</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-menu-left"></i> Sports Movies</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-menu-left"></i> Educational Movies</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-menu-left"></i> Cultural Movies</a></li>
          </ul>
        </li>
      </ul>
        
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter the movie name">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-left">
          <?php if(isset($_SESSION['is_logged']) and $_SESSION['is_logged'] == TRUE): ?>
          <li style="margin-top: 14px; padding: 0px 15px;"><span>Welcome <?php echo ucwords($_SESSION['user']['fname']).' '.ucwords($_SESSION['user']['lname']);  ?></span></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-cog"></i> Settings<span class="caret"></span></a>
          <ul class="dropdown-menu" style="right: -75px;">
              <li><a href="profile.php?id=<?php echo $_SESSION['user']['id'];?>"><i class="glyphicon glyphicon-edit"></i> Edit profile</a></li>
            <li role="separator" class="divider"></li>
            <?php if($_SESSION['user']['isAdmin'] == 1):?>
            <li><a href="admincp/index.php"><i class="glyphicon glyphicon-dashboard"></i> Control Board</a></li>
            <?php endif;?>
            <li><a href="index.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
          </ul>
        </li>
          <?php else :?>
          <li><a href="register.php"><i class="glyphicon glyphicon-user"></i> Registration</a></li>
          <li><a href="login.php"><i class="glyphicon glyphicon-log-in"></i> log in</a></li>
          <?php endif;?>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

