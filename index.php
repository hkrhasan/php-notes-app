<?php 
    include './includes/header.php'; 
    include './includes/nav.php'; 
?>
  <body>
  <div class="container" style="margin-top: 6rem !important;">
    <div class="row">
      <div class="col-8">
        <?php
          include './includes/db.php';
          if(!$conn){
            echo '<h5 class="mt-3"> Our website facing some issue press CTRL+R </h5>';
            die();
          }

          try {
            $sql = 'SELECT * FROM posts ORDER BY id DESC';

            $stmt = $conn->prepare($sql);
            
            $stmt->execute();
            
            $results = $stmt->fetchAll(PDO::FETCH_OBJ);
            
            if(!$results){
                $conn = null;
                echo '<h5 class="mt-3">There is no post</h5>'; 
            }
            $conn = null;

            foreach ($results as $post) {
              echo '
              <div class="mb-3 card">
                <div class="card-body">
                  <h5 class="card-title">'.$post->title.'</h5>
                  <div>
                    '.$post->body.'
                  </div>
                  <small>'.$post->user.'</small>
                </div>
              </div>
              ';
            }
        } catch (\Throwable $th) {
            echo '<h5 class="mt-3" style="color: red;"> Something went wrong! </h5>';
            die();
        }
        
        ?>
      </div>
      <div class="col-4">
        <div class="card">
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item active" aria-current="true">Recent Post</li>
              <?php
                if(!$results){
                  $conn = null;
                  echo '<li class="list-group-item">There is no post</li>';
                  die(); 
                }
                foreach ($results as $post) {
                  echo '<li class="list-group-item">'.$post->title.'</li>';
                }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
<?php include './includes/footer.php' ?>