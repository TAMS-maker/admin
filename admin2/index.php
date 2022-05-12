<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php      
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      

        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from admin where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1 ){  
  
            session_start();
            $_SESSION['username'] = $row['username'];
            
           header('location: list.php');
           exit ();
        }  
        else{  
            echo '<script>alert("wrong password / username")</script>'; 

        }     
?>  

</head>


<body>

<div class="main">


            <div class="center-form">

                                            <h1>Wedding and Event<br> /E-events By Elmer Largo</h1>
                                            <hr />
                                    <form name="f1" action = "index.php" onsubmit = "return validation()" method = "POST">
                                            <div class="form-group mb-5">
                                                <input type="text"  class="form-control" placeholder="Username"  id ="user" name  = "username"autocomplete="off">
                                            </div>
                                            <div class="form-group mb-5">

                                                <input type="password" class="form-control" placeholder="Password" id ="pass" name  = "password" autocomplete="off">
                                            </div>
                                            <div class="row justify-content-center">
                                            <button type="submit" class="btn btn-primary" value="login">Login</button>
                                            </div>


                                        </form>

                                        </div>

</div>
    <!--validation for empty field-->   
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
 integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
 integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</script>
</body>
</html>