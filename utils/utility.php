<?php
    function register($uname, $email, $passwd, $cpasswd){
        if(!$uname || !$email || !$passwd || !$cpasswd){
            $missing = !$email ? "Email" : (!$uname ? "Username" : (!$passwd ? "Password" : "Confirm Password"));
            
            return '<h5 class="mt-3" style="color: red;">'.$missing." is Required</h5>";
        }

        if($passwd != $cpasswd){
            return '<h5 class="mt-3" style="color: red;">password and confirm password mismatch </h5>';
        }        

        include './includes/db.php';
        
        if(!$conn){
            return '<h5 class="mt-3" style="color: red;"> Connection Problem </h5>';
        }

        try {
            $sql = 'INSERT INTO users(username, email, pass) VALUES(:username, :email, :pass)';

            $stmt = $conn->prepare($sql);
            
            $stmt->execute([
                ':username' => $uname,
                ':email' => $email,
                ':pass' => $passwd
            ]);
            
            $conn = null;
            header('Location: http://localhost/new_notes_app/login.php');
        } catch (\Throwable $th) {
            return '<h5 class="mt-3" style="color: red;"> Something went wrong! </h5>';
        }

        
    }


    function login($email, $passwd){
        if(!$email || !$passwd){
            $missing = !$email ? "Email" : "Password";
            return '<h5 class="mt-3" style="color: red;">'.$missing." is Required</h5>";
        }

        include './includes/db.php';
        
        if(!$conn){
            return '<h5 class="mt-3" style="color: red;"> Connection Problem </h5>';
        }

        
        // SELECT * FROM `users` WHERE email='kapil@gmail.com'
        try {
            $sql = 'SELECT * FROM users WHERE email=?';

            $stmt = $conn->prepare($sql);
            
            $stmt->execute([$email]);
            
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            
            if(!$result){
                $conn = null;
                return '<h5 class="mt-3" style="color: red;"> User not found! </h5>'; 
            }

            if($result->pass != $passwd){
                $conn = null;
                return '<h5 class="mt-3" style="color: red;"> Incorrect Password! </h5>';
            }
            
            session_start();
            $_SESSION["user"] = $result;
            $conn = null;
            header('Location: http://localhost/new_notes_app');
        } catch (\Throwable $th) {
            return '<h5 class="mt-3" style="color: red;"> Something went wrong! </h5>';
        } 
    }
?>