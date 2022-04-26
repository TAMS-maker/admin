<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINDS ONLINE</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>  




    
<style>


@import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700&family=Syncopate:wght@400;700&display=swap');
body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    overflow-x: hidden;
    padding-top: 20px;
    background-image: 
    linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(117, 19, 93, 0.73)),
    url('bg.jpg');
    background-position: center;
    background-repeat: no-repeat;
     background-size: cover;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 60%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 60%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}
 
h1{
    font-family: 'Orbitron', sans-serif;
}
p{
    font-family: 'Syncopate', sans-serif;
    font-size: 1rem;
    font-style: bold;
}
.btn-black{
    background-color: #000 !important;
    color: #fff;
}
</style>
</head>
<?php


include ('connect.php');


if (isset($_POST['Login']))
{


    $User = $_POST['User'];
    $Password = $_POST['Password'];

    $sql = "SELECT * FROM adminuser WHERE User = '$User' ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array ($result, MYSQLI_ASSOC);
    $numrow = mysqli_num_rows($result);

    if ($numrow > 0)
    {

        $dbpassword = $row['Password'];

        if ($Password == $dbpassword)
        {
            session_start();
         
            $_SESSION['User'] = $row['User'];

            header ('location: index.php');
            exit ();

        }

        else

        {
            echo '<script>alert("Wrong Password")</script>';
        }

    }

    else
    {
        echo '<script>alert("Wrong Username")</script>';

    }

}




?>
<body>  


<div class="sidenav">
         <div class="login-main-text">
            <h1>Wedding and Event</h1>
            <p>E-events By Elmer Largo</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="admin.php" method="POST">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name" name="User">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" name="Password">
                  </div>
                  <button type="submit" class="btn btn-black" name="Login">Login</button>
                  
               </form>
            </div>
         </div>
      </div>


</body>


</html>