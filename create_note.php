<?php 
    include './includes/header.php'; 
    include './includes/nav.php'; 

    
    if(!isset($_SESSION['user'])){
        header('Location: http://localhost/new_notes_app/login.php');
    }
?>
  <body>
    
  </body>
<?php include './includes/footer.php' ?>