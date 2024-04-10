<?php require_once "./conection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Of Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>

    <h1 class="bg-info text-center p-3">
        Student Data
    </h1>
    <div class="container mt-5">


        <div class="d-flex justify-content-end my-3">
            <a href="./form.php" class="btn btn-primary">Add New</a>
        </div>

        <table class="table">
            <thead>
                <tr class="table-danger">
                    <th>Sr No.</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>User Name</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM `studata`";
                $result = mysqli_query($conn, $query);

                $i=1;
                if ($result) {
                    while ($data = mysqli_fetch_assoc($result)) {
                        //   echo "<pre>";  
                        //   print_r ($data) ;  
                        //   echo "<pre>";           

                        echo "<tr class='table-primary'>";
                                echo "<td>".$i."</td>";
                                echo "<td>".$data['fname'].' '.$data['lname']."</td>";
                                echo "<td>".$data['gender']."</td>";
                                echo "<td>".$data['city']."</td>";
                                echo "<td>".$data['state']."</td>";
                                echo "<td>".$data['email']."</td>";
                                echo "<td>".$data['monbile']."</td>";
                                echo "<td>".$data['usern']."</td>";
                                echo "<td><a href='update.php?id=".$data['sid']."'><i class='bi bi-pencil-square'></i></a></td>";
                               
                                echo "<td><a href='javascript:void(0);' onclick='deletedata(".$data['sid'].")' ><i class='bi bi-trash3-fill'></i></a></td>";
                                echo "</tr>";
                        $i++;
                    }
                }
                ?>
                
                </a>
                <script>

                    function deletedata(id)
                    {

                        let del=confirm("Do You Want To Delete Data?");


                        if(del)
                        {                               
                            window.location.href="delete.php?id="+id;
                        }
                    }


                    
                </script>

            </tbody>
        </table>
    </div>



</body>

</html>