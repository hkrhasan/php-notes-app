<?php 
    include './includes/header.php'; 
    include './includes/nav.php'; 

    session_start();
    if(!$_SESSION['user']){
        header('Location: http://localhost/new_notes_app/login.php');
    }
?>
  <body>
    <h1>Home Page</h1>
  </body>
<?php include './includes/footer.php' ?>