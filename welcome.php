<!-- jwt.io -->

<!-- setcookie("variable", $value(ANYTHING), time() + 5(how much), "/") -->

<?php
    // session_start();
    // $isLoggedIn=isset($_SESSION['auth']);
    // if (!$isLoggedIn)
    // {
    //     echo"Not loggedin";
    // }
    // else{
    //     echo"loggedin";
    // }

    // cookie
    $isLoggedIn=isset($_COOKIE['auth']);
    if (!$isLoggedIn)
    {
        echo"Not loggedin";
    }
    else{
        echo"loggedin";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome</h1>
</body>
</html>