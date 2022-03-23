          <?php
          //index.php

          $connect = new PDO("mysql:host=localhost;dbname=routine", "root", "");
          function fill_unit_select_box($connect)
          { 
           $output = '';
           $query = "SELECT * FROM credit ORDER BY id ASC";
           $statement = $connect->prepare($query);
           $statement->execute();
           $result = $statement->fetchAll();
           foreach($result as $row)
           {
            $output .= '<option value="'.$row["id"].'">'.$row["id"].'</option>';
           }
           return $output;
          }

          ?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Routine</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script><!-- 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/customStyle.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Automated Routine System</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
<!--       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.html">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item active" href="blank.html">Blank Page</a>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="routine.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Routine</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_teacher.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Add Teacher</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_student.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Add Student</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Make Routine</a>
          </li>
          <li class="breadcrumb-item active">Blank Page</li>
        </ol>

        <!-- Page Content -->
        <h1>Make Routine</h1>
        <hr>
        <div class="main content">
          <form>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Select Session</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>2014-2015</option>
                <option>2015-2016</option>
                <option>2016-2017</option>
                <option>2017-2018</option>
                <option>2018-2019</option>
                <option>2019-2020</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Select Semester</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>1st Semester</option>
                <option>2nd Semester</option>
                <option>3rd Semester</option>
                <option>4th Semester</option>
                <option>5th Semester</option>
                <option>6th Semester</option>
                <option>7th Semester</option>
                <option>8th Semester</option>
              </select>
            </div>
            <div class="text">
              <p>* if Routine not Created Before</p>
            </div>
            <!----
            <div class="form-group">
              <label for="exampleFormControlSelect1">Select Number of Subject</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Select Number of Lab</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          -->
          <div>

           <form method="post" id="insert_form">
            <div class="table-repsonsive">
             <span id="error"></span> 
          <table class="table table-bordered" id="sub"> 
            <tr>
          <th>Enter Subject Code</th> 
          <th>Enter Subject Name</th> 
          <th>Select Credit</th>
          <th>
            <button type="button" name="add" class="btn btn-success btn-sm add">
              <span><i class="fas fa-plus"></i></span>
        </button>
          </th> 
          </tr> 
        </table> 
        <div align="center"> 
          <input type="submit" name="submit" class="btn btn-info"
          value="Insert" />
        </div> 
      </div> 
    </form>
    </div>

          <script>
          $(document).ready(function(){
           
           $(document).on('click', '.add', function(){
            var html = '';
            html += '<tr>';
            html += '<td><input type="text" name="sub_code[]" class="form-control sub_code" /></td>';
            html += '<td><input type="text" name="item_quantity[]" class="form-control item_quantity" /></td>';
            html += '<td><select name="item_unit[]" class="form-control item_unit"><option value="">Select Unit</option><?php echo fill_unit_select_box($connect); ?></select></td>';
            html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span><i class="fas fa-minus"></i></span></button></td></tr>';
            $('#sub').append(html);
           });
           
           $(document).on('click', '.remove', function(){
            $(this).closest('tr').remove();
           });
           
           $('#insert_form').on('submit', function(event){
            event.preventDefault();
            var error = '';
            $('.sub_code').each(function(){
             var count = 1;
             if($(this).val() == '')
             {
              error += "<p>Enter Subject Code at "+count+" Row</p>";
              return false;
             }
             count = count + 1;
            });
            
            $('.item_quantity').each(function(){
             var count = 1;
             if($(this).val() == '')
             {
              error += "<p>Enter Subject Name at "+count+" Row</p>";
              return false;
             }
             count = count + 1;
            });
            
            $('.item_unit').each(function(){
             var count = 1;
             if($(this).val() == '')
             {
              error += "<p>Select Credit at "+count+" Row</p>";
              return false;
             }
             count = count + 1;
            });
            var form_data = $(this).serialize();
            if(error == '')
            {
             $.ajax({
              url:"insert.php",
              method:"POST",
              data:form_data,
              success:function(data)
              {
               if(data == 'ok')
               {
                $('#sub').find("tr:gt(0)").remove();
                $('#error').html('<div class="alert alert-success">Subject Details Saved</div>');
               }
              }
             });
            }
            else
            {
             $('#error').html('<div class="alert alert-danger">'+error+'</div>');
            }
           });
           
          });
          </script>

            
            </form>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © BDU 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

</body>

</html>
