<?php
session_start();

if (!ISSET($_REQUEST["userid"]) && !ISSET($_REQUEST["password"]) ){
    echo '<center style="color: red;">Please Input the UserID and Password</center>';
}else if(empty($_REQUEST["userid"])){
    echo '<center style="color: red;">Please Input the UserID</center>';
}else if(empty($_REQUEST["password"])){
    echo '<center style="color: red;">Please Input the Password</center>';
}else{
    if (($_REQUEST["userid"] == "itsbhm") && ($_REQUEST["password"] == "admin")){
        $_SESSION["_checkLogin"] = true;
        header("Location: check-login.php");
    }else{
        echo '<center style="color: red;">Incorrect UserId and Password</center>';
    }
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

    <form action="login.php" method="get">
        <pre>
            UserID:   <input type="text" placeholder="Input Your UserID" name="userid">

            Password: <input type="password" placeholder="Input Your Password" name="password">
        </pre> 
        <div style="padding-top: 5%; padding-left: 12%;">
            <button type="submit">LogIn</button>
        </div>
        
    </form>
</body>
</html>