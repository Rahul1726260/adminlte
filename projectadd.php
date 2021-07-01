<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Project Add</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"> -->
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?content">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
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
            <form action=" " method="POST" role="form" class="form-horizontal" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Project Name</label>
                  <input type="text" name="projectname" id="projectname" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Project Description</label>
                  <textarea name="desc" id="desc" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                  <label for="inputStatus">Status</label>
                  <select name="status" id="status" class="form-control custom-select">
                    <option selected disabled>Select one</option>
                    <option>On Hold</option>
                    <option>Canceled</option>
                    <option>Success</option>
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
                  <input type="text" name="clientcompany" id="clientcompany" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputProjectLeader">Project Leader</label>
                  <input type="text"  name="projectleader" id="projectleader" class="form-control">
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
                  <input type="number" name="estimatedbudget" id="estimatedbudget" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputSpentBudget">Total amount spent</label>
                  <input type="number" name="spentbudget" id="spentbudget" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputEstimatedDuration">Estimated project duration</label>
                  <input type="number" name="estimatedduration" id="estimatedduration" class="form-control">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <a href="index.php?content" class="btn btn-secondary">Cancel</a>
            <input type="submit" name="submitadd" value="Create new Porject" class="btn btn-success float-right toastadd">
          </div>
        </div>
        </form>
    </section>
    <!-- /.content -->
  </div>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
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
 <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<script>
 $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 30000
    });
    $('.toastadd').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
 });
</script>
</body>
</html>
