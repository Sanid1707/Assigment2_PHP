<!-- coppied the base code same as the signup form and changed the code to login form -->


<?php
$login=0;
$invalid=0;




if($_SERVER['REQUEST_METHOD']=='POST')
{
include('connect.php');
$username=$_POST['username'];
$password=$_POST['password'];


//used the same code as the signup form but changed the code to check the username and password
$sql="SELECT * FROM `registration`
 WHERE username='$username' AND password='$password'";
$result=mysqli_query($con,$sql);
if($result)
{
  $nums=mysqli_num_rows($result);
  if($nums>0)
  {
//    echo "Login successfully";
//started the session and redirected to the index page
    $login=1;
    session_start();
    $_SESSION['username']=$username;
    header("location:index.php");




  }
  else
  { 

    // echo "Login failed";
    $invalid=1;
      
    }
}
}




?>




<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> Login Page</title>

    <style>
    body {
        background-image: url('images/net.jpg');
        background-repeat: no-repeat;
        background-size: cover;





    }
    </style>
</head>

<body>


    <!-- Php tags to print out bootstrap classes  -->

    <?php
if($login)
{
  echo' <div class="alert alert-primary" role="alert">
   login  SignUp
     </div>';
}

?>
<?php
if($invalid)
{
  echo' <div class="alert alert-danger" role="alert">
       Invalid credentials 
        </div>';
}
?>

<div class="container-fluid mt-5">
  <div class="row justify-content-end">
    <div class="col-sm-4">
    <h1 class="text-center mb-4 text-light">Login to the site</h1>
      <div class="card p-4">
        
        <form action="login.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">UserName</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" name="username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" placeholder="Enter password" name="password">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>



</body>

</html>