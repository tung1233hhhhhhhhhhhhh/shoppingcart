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
    th {
        padding: 1rem;
    }
</style>

<body>

    <table border="1">
        <thead>
        <tr>
            <th>stt</th>
            <th>fullname</th>
            <th>username</th>
            <th>password</th>
            <th>gender</th>
            <th>email</th>
            <th>address</th>
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
        </tr>
        ";
        }

        
        ?>
        </tbody>
       
        
        
    </table>

</body>

</html>