
<?php
$success = 0;
$user=0;


if($_SERVER['REQUEST_METHOD']=='POST')
{
include('connect.php');
$username=$_POST['username'];
$password=$_POST['password'];


// this given code is working fine but i want to check that if username already exists then it should not insert the data in database and it should show that username already exists
$sql="SELECT * FROM `registration`
 WHERE username='$username'";
$result=mysqli_query($con,$sql);
if($result)
{
  $nums=mysqli_num_rows($result);
  if($nums>0)
  {
    // echo "Username exists";
    $user=1;
  }
  else
  {
      $sql="INSERT INTO `registration`(`username`, `password`)
     values ('$username','$password')";
      $result=mysqli_query($con,$sql);
      if($result)
          {
                //  echo "successfully SignUp  ";
                $success=1;
          }
      else
          {
                die(mysqli_error($con));
          }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SignUp page</title>
    <style>
body 
{
background-image:url('images/net.jpg') ;
background-repeat:no-repeat; 
background-size:cover;





}

    </style>

  </head>
  <body>

<?php
if($user)
{
  echo' <div class="alert alert-danger" role="alert">
        Oops! Username already exists.
        </div>';
}



?>
<?php
if($success)
{
  echo' <div class="alert alert-primary" role="alert">
    Successfully Signed Up
     </div>';
}

?>



    <h1 class ="text-center">SignUp page</h1>
     <div class="container-fluid mt-5 ">              <!--   creating a form inside of this  -->
        
     <form action="sign.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">UserName</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter  username
    " name="username">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  placeholder=" Enter password " name="password">
  </div>
 
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>

    </div>

   
  </body>
</html>