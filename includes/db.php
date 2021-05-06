
<?php
    try {
        $conn = new PDO('mysql:host=localhost;dbname=notes_app', "root", '');
    } catch (PDOException $e) {
        // print "Error!: " . $e->getMessage() . "<br/>";
        // die();
        $conn = null;
    }
?>
