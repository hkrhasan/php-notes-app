<?php 
    echo '
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mb-2 navbar-nav me-auto mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/new_notes_app">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./create_post.php">Create Post</a>
            </li>
            
            </ul>
            <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">';
        session_start();
        $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
        $button = $user ? '<a href="./includes/logout.php" class="btn btn-outline-success" type="submit">Logout</a>' :  '<a href="./login.php" class="btn btn-outline-success" type="submit">login</a>';
        
        echo $button;
        echo  '</form>
        </div>
        </div>
    </nav>
    ';
?>