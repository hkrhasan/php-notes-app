<?php 
    include './includes/header.php'; 
    include './includes/nav.php'; 

    
    if(!isset($_SESSION['user'])){
        header('Location: http://localhost/new_notes_app/login.php');
    }
?>
  <body>
    <div class="container">
      <div class="row">
        <!-- cloumns 1 -->
        <div class="mt-5 col">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="mb-2 card-subtitle text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        </div>
        <!-- column 2 -->
        <div class="mt-5 col">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="mb-2 card-subtitle text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        </div>
        <!-- column 3 -->
        <div class="mt-5 col">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="mb-2 card-subtitle text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </body>
<?php include './includes/footer.php' ?>