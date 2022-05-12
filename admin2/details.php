



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
   @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');



html, body{
    margin: 0;
    padding: 0;
    
  }
  .section{
 background-image: url('./assets/bg.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    box-shadow: inset 0 0 0 2000px rgb(0 0 0 / 62%);
    height: 85vh;
  }


  *{
    font-family: 'Montserrat', sans-serif;
  }


.navbar-brand img{
     height: 80px; width: 150px;
    }

nav a{
  text-decoration:none;
  color: #454545;
}

table a{
  text-decoration:none;
  color:white;
}

  </style>
     <?php

include("connect.php");

$id = $_GET ['id'];

$sql = " SELECT * FROM eevent WHERE id=".$id;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $name = $row['name'];
    $mobile = $row['mobile'];
    $venue = $row['venue'];
    $evente = $row['event'];
    $guest = $row['guest'];
    $date = $row['date'];
    $request = $row['request'];

?>



</head>
<body>

<div class="container-fluid m-0 p-0">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand fst-italic" href="#">      <?php 
                              if (file_exists ('./assets/b-logo.png')) {
                                  echo '<img src="./assets/b-logo.png" title="contrast" class="contrast">'; 
                              } 
                                  else 
                              { 
                                  echo ''; 
                              }
                          ?></a>
 

      <div class="navbar-nav ml-auto">
      <a href="list.php" onclick="goBack()"> <h5>Go Back</h5></a>
    </div>
  </div>
</nav>
</div>
<div class="section">
    <div class="container pt-5">

                    <table class="table table-dark table-striped">

                        <thead>
                                    <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Mobile Number</th>
                                            <th scope="col">Event</th>
                                    </tr>
                        </thead>

                        <tbody>
                                    <tr>
                                    
                                            <td><?php echo  $row ['name']; ?></td>
                                            <td><?php echo  $row ['mobile']; ?></td>
                                            <td><?php echo  $row ['event']; ?></td>

                                    </tr>
                            
                        </tbody>




                </table>
                <!--end of table1-->

                      <table class="table table-dark table-striped">

                                <thead>
                                            <tr>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Guest</th>
                                            </tr>
                                </thead>

                                <tbody>
                                            <tr>
                                            
                                                    <td><?php echo  $row ['date']; ?></td>
                                                    <td><?php echo  $row ['guest']; ?></td>

                                            </tr>
                                    
                                </tbody>




                       </table>

                         <!--end of table2-->
                <table class="table table-dark table-striped">

                <thead>
                            <tr>
                                    <th scope="col">Venue</th>
                            </tr>
                </thead>

                <tbody>
                            <tr>
                            
                                    <td><?php echo  $row ['venue']; ?></td>

                            </tr>
                    
                </tbody>




                </table>


<!--end of table3-->
         <table class="table table-dark table-striped">

                <thead>
                            <tr>
                                     <th scope="col">Special Request</th>
                            </tr>
                </thead>
               
                <tbody>
                            <tr>
                            
                                    <td><?php echo  $row ['request']; ?></td>

                            </tr>
                    
                </tbody>




         </table>
<!--end of table4-->

</div>

<!--end of container-->
</div>

<script>
        function goBack() {
  window.history.back()
}
</script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
 integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>