<?php 
    include './base/header.php';
    include './base/navbar.php';

    session_start();
    if(isset($_SESSION['user'])){
        header("Location: http://localhost/auth/");
    }
?>
<body>
    <div class="container">
        <div style="display: grid; place-content: center; height: 90vh;">
            <form action="#" method="post">
                <h4 style="margin-top:-50px;">Sign In </h4>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="*************" name="password">
                </div>
                <div class="mb-3">
                    <input type="submit" class="form-control btn btn-primary" value="submit" name="submit">
                </div>
                <h6>Dont havn't account. <a href="/auth/register.php">Register</a></h6>
            </form>
            <?php
                if(isset($_POST['submit'])){
                    include './base/utility.php';
                    
                    $error = login($_POST['email'], $_POST['password']);
                    
                    if($error){
                        echo '<h6 style="color:red;">'.$error.'</h6>';
                    }
                }
            ?>
        </div>
    </div>
</body>
<?php
    include './base/footer.php';
?>
