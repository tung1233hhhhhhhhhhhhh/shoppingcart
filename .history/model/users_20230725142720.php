<?php
    function insert_user($username, $password, $email, $fullname, $phone) {
        $sql = "INSERT INTO users(username, password, email, fullname, phone) VALUES('$username', '$password', '$email', '$fullname', '$phone')";
        return pdo_execute($sql);
    }

    function select_user($username, $password)
    {
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        return pdo_query_one($sql);
    }
    function select_email($email
    ) {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        return pdo_query_one($sql);
    }
    function select_user_username($username) {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        return pdo_query_one($sql);
    }
    function select_user_email($email){
        $sql = "SELECT * FROM users WHERE email = '$email'";
        return pdo_query_one($sql);
    }
?>