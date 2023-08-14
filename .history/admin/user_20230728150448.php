<?php 

    require '../admin/database.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<style>
    th ,td{
        padding: 1rem;
        border-bottom: 1px solid #ccc;
    }

    tr:nth-child(even){
        background-color: #ccc;
    }
</style>

<body>

    <table border="0">
        <thead>
        <tr>
            <th>STT</th>
            <th>Fullname</th>
            <th>Username</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php 

    $sql = $conn->query("SELECT * FROM tbl_users");

    $sql->execute();
   

        while ($row=$sql->fetch()) {
       echo"
        <tr>
            <td>$row[id]</td>
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
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>

</body>

</html>