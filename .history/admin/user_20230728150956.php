<?php 

    require '../admin/database.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>


<style>
    /* th ,td{
        padding: 1rem;
        border-bottom: 1px solid #ccc;
    }

    tr:nth-child(even){
        background-color: #ccc;
    } */
</style>

<body>

<div class="col-md-12">
<table class="table table-striped">
          <thead>
            <tr>
            <th scope="col">STT</th>
            <th scope="col">Fullname</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Gender</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>

          <?php 

            $sql = $conn->query("SELECT * FROM tbl_users");

            $sql->execute();


            while ($row=$sql->fetch()) {
                echo"
                <tr>
                    <th scope='row'>$row[id]</th>
                    <td>$row[fullname]</td>
                    <td>$row[username]</td>
                    <td>$row[password]</td>
                    <td>$row[gender]</td>
                    <td>$row[email]</td>
                    <td>$row[address]</td>
                    <td>
                    <a>edit</a> /
                    <a>delete</a>
                    </td>
                </tr>
                ";
                }
                ?>
         
          </tbody>
        </table>
</div>
    

</body>

</html>