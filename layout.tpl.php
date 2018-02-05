<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="http://marriagelane.local/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://marriagelane.local/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://marriagelane.local/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://marriagelane.local/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <!--bootstrap slider css-->
  <link rel="stylesheet" href="http://marriagelane.local/plugins/bootstrap-slider/slider.css">
  
  <link rel="stylesheet" href="http://marriagelane.local/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="http://marriagelane.local/dist/css/skins/_all-skins.min.css">

  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="http://marriagelane.local/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="http://marriagelane.local/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="/" class="navbar-brand"><b>Marriage</b>lane</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              </a>
            </li>
            </li>
            <?php if(isset($_SESSION['admin'])):?>
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="http://marriagelane.local/dist/img/avatar.png" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><?=$_SESSION['admin']?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="http://marriagelane.local/dist/img/avatar.png" class="img-circle" alt="User Image">

                    <p>
                      <?=$_SESSION['admin']?>
                    </p>
                  
                  </li>
                  <!-- Menu Body -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="/" class="btn btn-default btn-flat">Home</a>
                    </div>
                    <div class="pull-left">
                      <a href="/add" class="btn btn-default btn-flat">Add</a>
                    </div>
            <?php endif ?>      
                  <div class="pull-right">
                    <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <section class="content">
      <div class="main_content">
        <!-- Small boxes (Stat box) -->
        <?php echo $content;?>
      </div>
      <!--EMAIL TEMPLATES-->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2017-2018 <a href="https://adminlte.io"></a>Harikrishna</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->


<!-- jQuery 3 -->
<script src="http://marriagelane.local/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://marriagelane.local/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Slimscroll -->
<script src="http://marriagelane.local/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="http://marriagelane.local/bower_components/fastclick/lib/fastclick.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="http://marriagelane.local/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sparkline -->
<script src="http://marriagelane.local/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="http://marriagelane.local/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<!-- AdminLTE App -->
<script src="http://marriagelane.local/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://marriagelane.local/dist/js/pages/dashboard.js"></script>

<script src="http://marriagelane.local/bower_components/ckeditor/ckeditor.js"></script>
<script>
$(document).ready(function() {
  CKEDITOR.replace('description')
  CKEDITOR.replace('criteria')
    
});
$(document).ready(function() {
  CKEDITOR.replace('description_round')
});

$(document).ready(function() {
    CKEDITOR.replace('compose-textarea')
});
</script>
<script src="http://marriagelane.local/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="http://marriagelane.local/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="http://marriagelane.local/dist/js/demo.js"></script>
<script src="http://marriagelane.local/dist/js/script.js"></script>
<!--javascript for including ajax in admin side-->
<script src="http://marriagelane.local/dist/js/scorescript.js"></script>
<script src="http://marriagelane.local/dist/js/delete.js"></script>
<script src="http://marriagelane.local/dist/js/register.js"></script>
<script src="http://marriagelane.local/dist/js/sendreportmail.js"></script>
<!--filter Data table script-->
<script>
$(document).ready(function() {
    
    var table = $('#candidateList').DataTable();  
    $('#scoremanagement').DataTable(); 
    // Event listener to the two range filtering inputs to redraw on input
} );

</script>
<script src="http://marriagelane.local/dist/js/form_validation.js"></script>
<!--filter data table custom script-->
</body>
</html>
