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
        <tr>
            <th>stt</th>
            <th>fullname</th>
            <th>username</th>
            <th>password</th>
            <th>gender</th>
            <th>email</th>
            <th>address</th>
        </tr>
        <?php 

            $sql = $conn->query("SELECT id ,fullname,username,password,gender,email,address  FROM tbl_user");

            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            while ($a <= 10) {
                # code...
            }
        ?>
        
    </table>

</body>

</html>