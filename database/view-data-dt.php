<?php include_once(__DIR__."/db/connection.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>

<body>

  <h2 class="text-center py-3">Students Record Table</h2>

  <div class="container col-md">

    <table id="studentsdata" class="table table-striped table-hover" style="width:100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Full Name</th>
          <th>DOB</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Country</th>
          <th>Actions</th>
        </tr>
      </thead>

      <?php

// $sth = $connection->prepare("SELECT * FROM `students` LIMIT 2");
// $sth = $connection->prepare("SELECT * FROM `students` LIMIT 1, 3");
    $sth = $connection->prepare("SELECT * FROM `students`");

    $sth->setFetchMode(PDO:: FETCH_OBJ);

    $sth->execute();

    while($row = $sth->fetch()){

      $del = 'http://localhost/php-app/database/delete.php?uid='.$row->id;
      $upd = 'http://localhost/php-app/database/update-student-profile.php?uid='.$row->id;

    echo '
    <tr>
      <td>'.$row->id.'</td>
      <td>'.ucwords($row->first_name. ' ' .$row->last_name). '</td>
      <td>'.date('d-m-Y', strtotime($row->dob)).'</td>
      <td>'.strtolower($row->email).'</td>
      <td>'.$row->mobile_no.'</td>
      <td>'.ucwords($row->country).'</td>
      <td><a href="'.$del.'" target="_blank">Delete</a> &nbsp;/&nbsp; <a href="'.$upd.'" target="_blank">Update</a></td>
    </tr>
    ';
    
    }
    ?>
    </table>

    
    <center><a href="form.html">Add New Student</a></center>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

  <script>
    $(document).ready(function () {
      $('#studentsdata').DataTable();
    });
  </script>
</body>

</html>