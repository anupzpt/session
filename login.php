<?php
// session_start();
if($_SERVER['REQUEST_METHOD']==='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $db_email="anu@gmail.com";
    $db_password="anuanu";
    if($email==$db_email && $password==$db_password)
    {
      // $_SESSION['auth']=true;  
      setcookie("auth", $email, time() + 5, "/");
      header('location: ./welcome.php');
    }
    else{
      header('location: ./login.php');
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-7 mt-5">
    <h1 >LOGIN</h1>
    <form action="" method="POST">

      <div class="mb-4">
    <input type="email"  style="width: 50%;"  class="form-control" name="email" placeholder="Email">

      </div>  
      <div class="mb-4">
      <input type="password" style="width: 50%;" class="form-control" name="password" placeholder="Password">

      </div>  
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

