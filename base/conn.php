
<?php
    try {
        $conn = new PDO('mysql:host=localhost;dbname=fullweb', "root", "");
    } catch (PDOException $e) {
        $conn = null;
    }
?>
