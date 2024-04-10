<?php
require_once "./conection.php";

if(!isset($_SESSION['userdata']))
{
   header("Location:index.php");
}
else
{
    $userdata = $_SESSION['userdata'];
    echo "Welcome ". $userdata['usern'];
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="logout()">
        Logout
    </button>


    <script>
        function logout(){
            window.location.href="logout.php";
        }
    </script>
</body>
</html>




    <?php
}
?>