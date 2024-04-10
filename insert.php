<?php
require_once "./conection.php";


if(isset($_POST['signbtn']))
{

    // echo "<pre>";
    // print_r($_POST);
    // echo "<pre>";

    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];


    $query = "INSERT INTO `stud` (`usern`,`email`,`pass`) VALUES('$user','$email','$pass')";
    $result = mysqli_query($conn,$query);

    if($result)
    {
        // echo "data insert succesfully.";
        ?>
            <script>
                alert("Data Saved Succesfully");
                window.location.href="index.php";
            </script>

        <?php
    }
    else
    {
        echo "ERROR";
    }

}



?>