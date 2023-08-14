<?php
   //pdo connection function
    function pdo_connect(){
         $host = "localhost";
         $dbname = "shoplaptop";
         $username = "root";
         $password = "";
         $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         return $pdo;
    }
    //pdo query function
    function pdo_query($query){
        $pdo = pdo_connect();
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    //pdo query one function
    function pdo_query_one($query){
        $pdo = pdo_connect();
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }

    //pdo query all function
    function pdo_query_all($query){
        $pdo = pdo_connect();
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }


    //pdo insert function
    function pdo_insert($table, $data){
        $pdo = pdo_connect();
        $columns = implode(',', array_keys($data));
        $values = implode(',', array_map(function($value) use ($pdo) {
            return $pdo->quote($value);
        }, array_values($data)));
        $query = "INSERT INTO $table ($columns) VALUES ($values)";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    //pdo update function
    function pdo_update($table, $data, $where){
        $pdo = pdo_connect();
        $columns = implode(',', array_keys($data));
        $values = implode(',', array_map(function($value) use ($pdo) {
            return $pdo->quote($value);
        }, array_values($data)));
        $query = "UPDATE $table SET $columns = $values WHERE $where";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    //pdo delete function
    function pdo_delete($table, $where){
        $pdo = pdo_connect();
        $query = "DELETE FROM $table WHERE $where";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt;
    }
?>