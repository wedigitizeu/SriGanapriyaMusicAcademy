<?php include_once('../db/db.php');?>

<!DOCTYPE html>
<html lang="en">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Sangameshwara Florist Mathikere</title>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="assets/css/main.css">

<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>
<body>

<!----Nav Bar Starts--------------->
<?php include_once('nav-bar.php');?>
<!----Nav Bar ends--------------->

<div class="page-header" style="background: url(assets/img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Sangameshwara Florist</h2>
<ol class="breadcrumb">
<!--<li><a href="#">Home /</a></li>
<li class="current">Blog</li>-->
</ol>
</div>
</div>
</div>
</div>
</div>


<div id="content" class="section-padding">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-12 col-xs-12">







<?php include_once('blog-by-category-select-query.php')?>




<!---------Video Blog Starts-----
<div class="blog-post video-post">

<div class="post-thumb">
<div class="video-wrapper">
<iframe width="100%" height="315" src="https://www.youtube.com/embed/qighCE8WfBk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
</div>


<div class="post-content">
<div class="meta">
<span class="meta-part"><a href="#"><i class="lni-user"></i> Clasified</a></span>
<span class="meta-part"><a href="#"><i class="lni-alarm-clock"></i> June 21, 2018</a></span>
<span class="meta-part"><a href="#"><i class="lni-folder"></i> Sticky</a></span>
<span class="meta-part"><a href="#"><i class="lni-comments-alt"></i> 1 Comments</a></span>
</div>
<h2 class="post-title"><a href="single-post.html">Exercitation Photo Booth</a></h2>
<div class="entry-summary">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis soluta libero molestiae, id reiciendis ipsum consequuntur odit sapiente accusantium odio. Esse nemo quos quaerat illo! Enim saepe impedit distinctio, placeat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate voluptatum dolores mollitia consequatur velit, veritatis in pariatur ducimus numquam ipsa iusto! Rem eveniet dolorum, quisquam neque beatae quas ea tenetur!</p>
</div>
<a href="single-post.html" class="btn btn-common">Read More</a>
</div>

</div>

---Video Blog ends-------------->


<div class="pagination-bar">
<nav>
<ul class="pagination">
<li class="page-item"><a class="page-link active" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>
</nav>
</div>

</div>

<aside id="sidebar" class="col-lg-4 col-md-12 col-xs-12 right-sidebar">

<div class="widget_search">
<form role="search" id="search-form">
<input type="search" class="form-control" autocomplete="off" name="s" placeholder="Search..." id="search-input" value="">
<button type="submit" id="search-submit" class="search-btn"><i class="lni-search"></i></button>
</form>
</div>

<!--- All-category-->
<?php include_once('cat.php')?>
<!------Recent Posts Starts------------->
	<?php include_once('recent-post.php');?>
<!-----Recent Posts Ends------->
<!---<div class="widget">
<h4 class="widget-title">Advertisement</h4>
<div class="add-box">
<img src="assets/img/img1.jpg" alt="">
</div>
</div>-->
</aside>

</div>
</div>
</div>


<?php include_once('blog-footer.php');?>


<a href="#" class="back-to-top">
<i class="lni-chevron-up"></i>
</a>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>


<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/color-switcher.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.min.js"></script>
<script src="assets/js/summernote.js"></script>
</body>


</html>