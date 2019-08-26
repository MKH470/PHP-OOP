<footer class="container-fluid" style="background: #f8f8f8 ; border-top: solid 1px #e7e7e7; padding: 20px;">
    <div class="container">
        <div class="row">
            <div class="pull-right">all rights reserved  &copy; <?php echo date('Y');?></div>
            <div class="pull-left">
                <div class="text-left"><i class="glyphicon glyphicon-send"></i> <a data-toggle="modal" data-target="#myModal" style="cursor: pointer;">call us</a></div>
            </div>
        </div>
    </div>
</footer>

<!-- FOOTER END --->
      
<!-- MODEL START -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">call us</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="email">your email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="username">your name</label>
            <input type="text" class="form-control" id="username" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="message">the message</label>
            <textarea class="form-control" rows="4" id="message"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
        <button type="button" class="btn btn-success">send the message</button>
      </div>
    </div>
  </div>
</div>

<!-- MODEL END ---->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="libs/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="libs/js/bootstrap.min.js"></script>
    <script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
  </body>
</html>