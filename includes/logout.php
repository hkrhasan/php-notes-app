<?php
    session_start();
    unset($_SESSION['user']);
    session_destroy();
    header('Location: http://localhost/new_notes_app');
?>