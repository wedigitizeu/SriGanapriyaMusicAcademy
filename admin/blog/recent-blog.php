<?php
error_reporting(0);
session_start();
include_once('../db/db.php');

?>
<?php
if(isset($_GET['blog']))
{
	$id=$_GET['blog'];
	$_SESSION['blog_id']=$id;
	$sel="SELECT * FROM `blog` WHERE id='$id'";
	$exe=mysqli_query($con,$sel);
				if(mysqli_num_rows($exe)==0)
					{
						/*echo "<script>
							alert('Available')
						</script>";
						*/
						
					}
				else
					{
						$data=mysqli_fetch_assoc($exe);
						  $blog_id=$data['id'];
						  $date=$data['date'];
						  $title=$data['title'];
						  $image=$data['image'];
						  $category=$data['category'];
						  $blog=$data['blog'];
						
						 
					}

				
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Sangameshwara Florist Mathikere </title>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="assets/css/main.css">

<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<!---Jquery--------------->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
<h2 class="product-title"><?php echo $title ?></h2>
<ol class="breadcrumb">
<!--<li><a href="#">Home /</a></li>
<li class="current">Blog Details</li>-->
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

<div class="blog-post single-post">

<div class="post-thumb">
<a href="#"><img class="img-fluid" src="../blog-images/<?php echo $data['image']?>" alt=""></a>
<div class="hover-wrap">
</div>
</div>


<div class="post-content">

<h2 class="post-title"><a href="single-post.html"><?php echo $title?></a></h2>


<div class="meta">
<span class="meta-part"><a href="#"><i class="lni-date"></i> <?php echo " ".$category?></a></span>
<span class="meta-part"><a href="#"><i class="lni-alarm-date"></i> <?php echo " ".$date?></a></span>
<!--<span class="meta-part"><a href="#"><i class="lni-folder"></i> Sticky</a></span>
<span class="meta-part"><a href="#"><i class="lni-comments-alt"></i> 1 Comments</a></span>-->
</div>
<div class="entry-summary">

<p><?php echo $blog ?></p>
</div>
</div>

</div>

<!----------Blog Comment Section Starts ------------->
<?php include_once("blog-comment-section.php")?>
<!---------Blog Comment section Ends------------>

</div>
</div>


<?php include_once('blog-footer.php');?>


<a href="#" class="back-to-top">
<i class="lni-chevron-up"></i>
</a>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-min.js"></script>
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

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>

</body>

</html>