<?php 
require_once "./conection.php";

if(isset($_POST['loginbtn'])){

    $user = $_POST['user-email'];
    $password = $_POST['pass'];

    // echo $password;
    // echo $user;

    $query = "SELECT * FROM `stud` WHERE `usern`='$user' AND `pass`='$password' ";

    $result = mysqli_query($conn, $query);
      

    //  mysqli_num_rows use for count row of data
    if(mysqli_num_rows($result) > 0)
    {
        $data = mysqli_fetch_assoc($result);
        // echo "<pre>";
        // print_r($data); 
        // echo "<pre>";
        // die(); 

        $_SESSION['userdata'] = $data;

        header("Location:dashbord.php");
 
        
    }
    else
    {
        echo "Invalid Username or password!";
        die();
    }
}
else
{

    header("Location:index.php");
}
 
?>