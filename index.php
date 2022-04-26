<?php

include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<!--for navbar-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- for pagination-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
 

      <div class="navbar-nav ml-auto">
         Hi,
      <?php session_start();
       echo $_SESSION['User'];?>! &nbsp;
     <a class ="right" href="logout.php"  id="logout">Log-out</a>
    </div>
  </div>
</nav>

<div class="container mt-5">
    
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th class="th-sm">id

                  </th>
                  <th class="th-sm">Fname

                  </th>
                  <th class="th-sm">Lname

                  </th>
                  <th class="th-sm">Pnumber

                  </th>
                  <th class="th-sm">Email

                  </th>
                  <th class="th-sm">Action

                  </th>
                </tr>
              </thead>
              <tbody>
              <?php
            $count=1;
            $sel_query="Select * from userinfo ORDER BY id desc;";
            $result = mysqli_query($con,$sel_query);
            while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                  <td><?php echo  $row ['id']; ?></td>
                  <td><a href="user.php?id=<?php echo $row["id"]; ?>"><?php echo $row["Fname"]; ?></a></td>
                  <td><?php echo  $row ['Lname']; ?></td>
                  <td><?php echo  $row ['Pnumber']; ?></td>
                  <td><?php echo  $row ['Email']; ?></td>
                  <td><a href="delete.php?Del=<?php echo $row["id"]; ?>">Delete</a></td>
                </tr>
                <?php $count++; } ?>
              </tbody>

            </table>

</div>

</body>

    <!-- for pagination-->
<script>
    $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>

<!--for navbar-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
 integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>