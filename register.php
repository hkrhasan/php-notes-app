<?php 
    include './includes/header.php'; 
    include './includes/nav.php'; 
?>
  <body>
    <div class="container" style="display:grid; place-content:center; height:80vh; margin-top: 4rem !important;">
        <h1>Sign Up </h1>
    <form action="#" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input name="uname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="passwd" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input name="c-passwd" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <input type="submit" class="btn btn-primary" value="Register" name="submit" />
        </form>
        <div style="font-size:14px" class="mt-1">
            if you have account <a href="./login.php" >click hrere</a>
        </div>
        <?php 
            if(isset($_POST['submit'])){
                $uname = $_POST['uname'];
                $email = $_POST['email'];
                $passwd = $_POST['passwd'];
                $cpasswd = $_POST['c-passwd'];
                
                include './utils/utility.php';
                
                $error = register($uname, $email, $passwd, $cpasswd);
                
                if($error){
                    echo $error;
                }
                
            }
        ?>
    </div>
  </body>
<?php include './includes/footer.php' ?>