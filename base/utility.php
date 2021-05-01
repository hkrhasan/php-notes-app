<?php

    function register($email, $password, $conpassword){

        if(!$email || !$password){    
            $missing = !$email ? "Email" : "Password";
            $error = $missing.' is Required!';
            return $error;
        }

        if($password !== $conpassword){
            return "passwor and confirm-password is mismatch!";
        }

        include './base/conn.php';

        if(!$conn){
            return "DB connection is not extablished";
        }

        try {
            $sql = "INSERT INTO users (email, password) VALUES (?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$email, $password]);
            $conn = null;
            header("Location: http://localhost/auth/login.php");
        } catch (\Throwable $th) {
            $conn = null;
            return 'Something went Wrong';

        }

    }

    function login($email, $password){

        if(!$email || !$password){    
            $missing = !$email ? "Email" : "Password";
            $error = $missing.' is Required!';
            return $error;
        }

        include './base/conn.php';

        if(!$conn){
            return "DB connection is not extablished";
        }

        try {
            $sql = "SELECT *  FROM users WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute(["admin@gmail.com"]);
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            
            if(!$user){
                return "User not Found";
            }

            if($password !== $user->password){
                return "incorrect password";
            } 

            session_start();
            $_SESSION['user'] = $user;            

            $conn = null;
            header("Location: http://localhost/auth");
            
        } catch (\Throwable $th) {
            $conn = null;
            return 'Something went Wrong';

        }
    }

?>