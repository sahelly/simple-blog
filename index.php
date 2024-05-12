<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.ico">
    <title>simple blog</title>
    <!-- Bootstrap core CSS -->
    <link href="<?= asset('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?= asset('assets/css/mediumish.css')?>" rel="stylesheet">
</head>
<body>

<!-- Begin Nav
================================================== -->
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <?php
    //menu
    require_once 'layouts/header.php'
    ?>

</nav>
<!-- End Nav
================================================== -->

<!-- Begin Site Title
================================================== -->
<div class="container">
    <div class="mainheading">
        <h1 class="sitetitle">Posts</h1>
    </div>
    <!-- End Site Title
    ================================================== -->


    <!-- Begin List Posts
    ================================================== -->
    <section class="recent-posts">
        <div class="section-title">
            <h2><span>All posts</span></h2>
        </div>
        <div class="card-columns listrecent">

            <!-- begin post -->
            <div class="card">
                <a href="post.html">
                    <img class="img-fluid" src="assets/img/demopic/5.jpg" alt="">
                </a>
                <div class="card-block">
                    <h2 class="card-title"><a href="post.html">Autumn doesn't have to be nostalgic, you know?</a></h2>
                    <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>
                </div>
            </div>
            <!-- end post -->

        </div>
    </section>
    <!-- End List Posts
    ================================================== -->


</div>
<!-- /.container -->

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= asset('assets/js/jquery.min.js')?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="<?= asset('assets/js/bootstrap.min.js')?>"></script>
<script src="<?= asset('assets/js/ie10-viewport-bug-workaround.js')?>"></script>
</body>
</html>
