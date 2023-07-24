<?php
$page_name = 'Categories';
include "header.php" ;
require_once '../config.php';
if(isset($_POST['name'])) {
    $myimg = $_FILES['image'] ;
    $ext = ['jpg' , 'png' , 'jpeg'];

    $tmp_name = $myimg['tmp_name'];
    $img_erro = $myimg['error'];
    $img_size = $myimg['size'];// byte  / 1024 / 1024
    $imgname = uniqid() . $myimg['name'];
    $expload = explode('.', $imgname); //array
    $end_of  = end($expload);
    $final_ext = strtolower($end_of);


    if(isset($_FILES['image'])) {
        if($img_erro != 4) {
            if($img_size < 1027175) {
                if(in_array($final_ext, $ext)) {
                    move_uploaded_file($tmp_name, 'upload/category/' . $imgname);
                } else {
                    echo "exxxxxxxtintion";
                }
            } else {
                echo "size errorrrrrr";
            }
        }
    }
    $stat = "insert into categories (name , image) values ('$_POST[name]' , '$imgname')";
    mysqli_query($con, $stat);
    header('location:allcat.php');
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
                <h3 class="card-title">New category Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <img src="upload/category/default_image.png" id="img-preview" width="250px" alt="" srcset="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail2">Category Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail2" placeholder="Enter username">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">upload category</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" onchange="showPreview(event)" name="image"  class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <script>
                    function showPreview(event){
                      if(event.target.files.length > 0){
                        let src = URL.createObjectURL(event.target.files[0]);
                        let preview = document.getElementById('img-preview');

                        preview.src = src
                      }
                    }
                  </script>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="allcat.php" class="btn btn-info">cancel</a>
                </div>
              </form>
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
<?php
ob_end_flush();

?>
