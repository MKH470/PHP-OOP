<?php require_once 'inc/topHeader.php';?>
 <title>Dashboard-<?php echo SITENAME;?></title>
 <?php require_once 'inc/header.php';?>  
<div class="container-fluid">
      <div class="row">
        <?php require_once 'inc/navbar.php';?>  
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header"><i class="glyphicon glyphicon-envelope"></i> Inbox</h1>
    <div class="col-md-12 ">
        <div class="row">
            <div class="col-md-1"></div>
          <div class="col-md-10 col-offset-1 ">
             <div class="table-responsive">

                  <table class="table table-hover">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>User-Name</th>
                              <th>User-Email</th>
                              <th>User-Message</th>
                              <th>Delete</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1</td>
                              <td>muhanad</td>
                              <td>khalaf</td>
                              <td> Editff ffffg tggewgew </td>
                              <td><a href="" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
                          </tr>
                          </tbody>
                  </table>
                                    <div class=" col-sm-12" style="text-align: center;"></div> 
              </div>
<!----------------pagination----------------------------------------------->              
            <nav class="text-center">
                <ul class="pagination">
                  <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                  <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                  <li><a href="#">2 </a></li>
                  <li><a href="#">3 </a></li>
                  <li ><a href="#">4</a></li>
                  ...
                </ul>
           </nav>
<!---------------End------pagination---------------------------------------->
          </div>

        </div>
    </div>
             <?php require_once 'inc/sidebar.php';?>  
        </div>
      </div>
    </div>
 <?php require_once 'inc/footer.php';?>  
