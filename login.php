<?php 
    include './includes/header.php'; 
    include './includes/nav.php';
    
    session_start();
    if($_SESSION['user']){
        header('Location: http://localhost/new_notes_app');
    }
    
?>
  <body>
    <div class="container" style="display:grid; place-content:center; height:80vh;">
        <h1>Sign In </h1>
    <form action="#" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="passwd" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <input name="submit" value="Login" type="submit" class="btn btn-primary">
        </form>
        <?php 
            if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $passwd = $_POST['passwd'];
                
                include './utils/utility.php';
                
                $error = login($email, $passwd);
                
                if($error){
                    echo $error;
                }
                
            }
        ?>
    </div>
  </body>
<?php include './includes/footer.php' ?>