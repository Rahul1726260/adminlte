<?php  
include 'conn.php';  
 ?>
 




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Project Edit</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->

<body class="hold-transition sidebar-mini layout-fixed">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form action="" method="POST" role="form" class="form-horizontal" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Project Name</label>
                  <input type="text" name="projectname" id="projectname" class="form-control" value="<?php echo $row['project_name'] ; ?>">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Project Description</label>
                  <textarea name="desc" id="desc" class="form-control" rows="4"> <?php echo $row['project_desc'] ;?> </textarea>
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select name="status" id="status" class="form-control custom-select">
                  <?php
                  echo "<option  value='". $row['project_status'] ."'>" .$row['project_status'] ."</option>";
                  ?>
                   <?php 
                   if($row['project_status'] == "On Hold")
                    {
                    ?>
                    <option>Canceled</option>
                    <option>Success</option>
                    
                 <?php }  ?>
                 <?php 
                   if($row['project_status'] == "Canceled")
                    {
                    ?>
                    <option>On Hold</option>
                    <option>Success</option>
                    
                 <?php }  ?>
                 <?php 
                   if($row['project_status'] == "Success")
                    {
                    ?>
                    <option>On Hold</option>
                    <option>Canceled</option>
                    
                 <?php }  ?>
                  </select>
                </div>
                <div class="form-group">
                        <label for="teammembers">Team members</label>
                        <select name="teammembers[]" id="teammembers[]" multiple class="form-control">
                        <?php
                        include 'conn.php';
                        $sql="SELECT * FROM `users`";
                        $records = mysqli_query($con,$sql);  // Use select query here 

                        while($data = mysqli_fetch_array($records))
                        {
                          echo "<option value='". $data['user_id'] ."'>" .$data['username'] ."</option>";  // displaying data in option menu
                        }	
                        ?>  
                        </select>
                </div>
                  
                <div class="form-group">
                  <label for="inputClientCompany">Client Company</label>
                  <input type="text" name="clientcompany" id="clientcompany" class="form-control" value="<?php echo $row['client_company'] ; ?>">
                </div>
                <div class="form-group">
                  <label for="inputProjectLeader">Project Leader</label>
                  <input type="text"  name="projectleader" id="projectleader" class="form-control" value="<?php echo $row['project_leader'] ; ?>">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Budget</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputEstimatedBudget">Estimated budget</label>
                  <input type="number" name="estimatedbudget" id="estimatedbudget" class="form-control"  value="<?php echo $rowbudget['estimated_budget'] ; ?>">
                </div>
                <div class="form-group">
                  <label for="inputSpentBudget">Total amount spent</label>
                  <input type="number" name="spentbudget" id="spentbudget" class="form-control" value="<?php echo $rowbudget['amount_spent'] ; ?>">
                </div>
                <div class="form-group">
                  <label for="inputEstimatedDuration">Estimated project duration</label>
                  <input type="number" name="estimatedduration" id="estimatedduration" class="form-control" value="<?php echo $rowbudget['estimated_duration'] ; ?>">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <a href="index.php" class="btn btn-secondary">Cancel</a>
            <input type="submit" name="submitupdate" value="Update Porject" class="btn btn-success float-right">
          </div>
        </div>
        </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <!-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer> -->

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>