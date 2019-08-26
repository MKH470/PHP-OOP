<?php require_once 'inc/topHeader.php';?>
 <title>Dashboard-<?php echo SITENAME;?></title>
 <?php require_once 'inc/header.php';?>  
<div class="container-fluid">
    <div class="row">
         <?php require_once 'inc/navbar.php';?> 
       
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header"><i class="glyphicon glyphicon-th"></i> Site-Sections</h1>
                <div class="col-sm-9" style="text-align: center;">
            <?php
            if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['addCate'])){
                $add= new Category();
                $add->addSetInput($_POST['cateName'],$_POST['cateLink']);
                $add->displayAddError();
               
            }
            
            ?>
            
        </div>
                  <div class="col-md-12">
                      <div class="row">
                          <div class="col-md-8">
                            <div class="table-responsive">

                                  <table class="table table-hover">
                                      <thead>
                                          <tr>
                                              <th>#</th>
                                              <th>Section Name</th>
                                              <th>Unique Name</th>
                                              <th>Edit</th>
                                              <th>Delete</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>1</td>
                                              <td>muhanad</td>
                                              <td>khalaf</td>
                                              <td><a href="" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i> Edit</a></td>
                                              <td><a href="" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
                                          </tr>
                                      </tbody>
                                  </table>
                                          <div class=" col-sm-12" style="text-align: center;"></div> 
                            </div>
                          </div>
                          <div class="col-md-4">
                              <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form-horizontal">
                                    <div class="form-group">
                                      <label for="cateName" class="col-sm-6 control-label">Section Name</label>
                                      <div class="col-sm-6">
                                          <input type="text" name="cateName"  class="form-control" id="cateName" placeholder="enter Section Name">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="cateLink" class="col-sm-6 control-label">Unique Name</label>
                                      <div class="col-sm-6">
                                          <input type="text" name="cateLink" class="form-control"  id="cateLink" placeholder="enter Unique Name">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <div class="col-sm-offset-3 col-sm-9">
                                          <button type="submit" name="addCate" class="btn btn-success btn-block">Add new section</button>
                                      </div>
                                    </div>
                                 </form>
                          </div>
                      </div>
                  </div>
                     <?php require_once 'inc/sidebar.php';?>  
         </div>
    </div>
</div>
         <?php require_once 'inc/footer.php';?>  
