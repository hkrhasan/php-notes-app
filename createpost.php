<?php 
    include './base/header.php';
    include './base/navbar.php';
?>
<body>
    <div class="container">
        <div class="mt-3 mb-5">
            <h1>Post Creation</h1>
        </div>

        <form class="mt-10" action="#" method="get">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Post Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Post Content</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="data"></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" value="Submit" name="submit">
            </div>
        </form>
    </div>
</body>

<?php
    include './base/footer.php';
?>
