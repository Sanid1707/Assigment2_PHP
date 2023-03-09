
<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
include('connect.php');
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
  </head>
  <body>
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
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>

   
  </body>
</html>