<?php 
    include './includes/header.php'; 
    include './includes/nav.php'; 

    
    if(!$user){
        header('Location: http://localhost/new_notes_app/login.php');
    }
?>
  <body>
  <script src="https://cdn.tiny.cloud/1/sircwi4vumav73ovrwj64iud3q10p34p38bz336r0yvipk0s/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#mytextarea',
      menubar:false,
      statusbar: false,
    });
  </script>
  
    <div class="container" style="margin-top: 6rem !important;">
      <div class="mt-3 mb-5 border-bottom border-5 border-dark">
        <h1 >CREATE POST</h1>
      </div>
      <form action="#" method="get">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Post Title</label>
          <input type="text" name="title" class="form-control" >
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Body Text</label>
          <textarea class="form-control" id="mytextarea" name="body" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <input type="submit" class="btn btn-primary" name="submit" value="submit" >
        </div>
      </form>
      <?php 
        if(isset($_GET['submit'])){
            
            $title = $_GET['title'];
            $body = $_GET['body'];
                        
            include './utils/utility.php';
            
            $error = create_post($title, $body, $user->username );
            
            if($error){
                echo $error;
            }
            
        }
        ?>
    </div>
  </body>
<?php include './includes/footer.php' ?>