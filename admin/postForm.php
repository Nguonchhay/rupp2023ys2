<?php

require_once '../models/Post.php';

// Start PHP session
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['auth'])) {
  header("Location: ../index.php");
  exit();
}

$posts = $GLOBALS['posts'];
// Query all posts from table
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Clean Blog - Posts Form</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="../css/styles.css" rel="stylesheet" />
</head>

<body>
  <!-- Main Content-->
  <main class="mb-4 mt-5">
    <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10">
          <h2>Post Form</h2>
          <div class="my-5">
            <form action="../admin/handlePost.php" method="POST" enctype="multipart/form-data">
              <div class="form-floating">
                <input class="form-control" name="title" type="text" placeholder="Enter your title..." required />
                <label for="title">Title</label>
              </div>
              <div class="form-floating">
                <input class="form-control" name="content" type="text" placeholder="Enter your content..." required />
                <label for="content">Content</label>
              </div>
              <div class="form-floating">
                <input class="form-control" name="img" type="file" placeholder="Enter your Image..." required />
                <label for="img">Image</label>
              </div>
              <div class="d-flex justify-content-between">

                <a href="../admin/posts.php"><button class="mt-2 btn btn-warning text-white text-uppercase" type='button'>Back</button></a>
                <button class="mt-2 btn btn-primary text-uppercase" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- * *                               SB Forms JS                               * *-->
  <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
