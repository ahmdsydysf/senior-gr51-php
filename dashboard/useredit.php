<?php
$page_name = 'edit user';

include "header.php";

require_once '../config.php';

if(isset($_GET['id'])) {
    $statment = "select * from users where id = $_GET[id]";
    $query = mysqli_query($con, $statment);
    $userdata = mysqli_fetch_assoc($query);
}
if(isset($_POST['email'])) {
    $statment = "update users set name='$_POST[name]' , email='$_POST[email]' , password='$_POST[password]' , is_admin='$_POST[is_admin]' where id = $_GET[id]";
    $query = mysqli_query($con, $statment);
    header('location:allusers.php');
}



?>

  
              <li class="breadcrumb-item active"><?= $page_name ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="card col-12">
              <div class="card-header">
                
              delete user data
              </div>
              <!-- /.card-header -->
              <!-- /.card-header -->
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail2">username</label>
                    <input type="text" name="name" value="<?= $userdata['name'] ?>" class="form-control" id="exampleInputEmail2" placeholder="Enter username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email"  value="<?= $userdata['email'] ?>" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text"  value="<?= $userdata['password'] ?>" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                
                  <div class="form-group">
                  <label for="exampleInputPassword1">user type</label>

                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" <?= $userdata['is_admin'] ==  'user' ? 'checked' : ' ' ?> id="customRadio1" value="user" name="is_admin">
                          <label for="customRadio1" class="custom-control-label">normal user</label>
                        
                        </div>
                        <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio2"  <?= $userdata['is_admin'] ==  'admin' ? 'checked' : ' ' ?>  value="admin" name="is_admin">
                          <label for="customRadio2" class="custom-control-label">admin</label>
                        
                        </div>
                      
                      </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="allusers.php" class="btn btn-danger">Submit</a>
                </div>
              </form>
            </div>
            </div>
        </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
