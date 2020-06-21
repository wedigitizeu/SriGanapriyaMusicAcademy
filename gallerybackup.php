<?php
include_once('db/db.php');
?>


<!DOCTYPE html>
<html lang="en">

   
<!-- gallery15:54-->
<head>
      <!-- Basic Page Needs ================================================== -->
      <meta charset="utf-8">

      <!-- Mobile Specific Metas ================================================== -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

      <!-- Site Title -->
      <title> Sri Gaanapriya Music Academy at Vidyaranyapura</title>
      
         <!-- CSS
         ================================================== -->
   <!-- Bootstrap -->
   <link rel="stylesheet" href="css/bootstrap.min.css">

   <!-- FontAwesome -->
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <!-- Animation -->
   <link rel="stylesheet" href="css/animate.css">
   <!-- magnific -->
   <link rel="stylesheet" href="css/magnific-popup.css">
   <!-- carousel -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- isotop -->
   <link rel="stylesheet" href="css/isotop.css">
   <!-- ico fonts -->
   <link rel="stylesheet" href="css/xsIcon.css">
   <!-- Template styles-->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive styles-->
   <link rel="stylesheet" href="css/responsive.css">

      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      

   </head>

   <body>
      <div class="body-inner">
      <!-- Header start -->
      <?php include_once('public/header.php');?>
      <!--/ Header end -->

		<div id="page-banner-area" class="page-banner-area" style="background-image:url(images/hero_area/banner_bg.jpg)">
			<!-- Subpage title start -->
			<div class="page-banner-title">
					<div class="text-center">
                  <h2>Event Gallery</h2>
                  <ol class="breadcrumb">
                     <li>
                        <a href="#">Exibit /</a>
                     </li>
                     <li>
                           Gallery
                     </li>
                  </ol>
				</div>
			</div><!-- Subpage title end -->
		</div><!-- Page Banner end -->

		<section id="main-container" class="main-container ts-gallery">
			<div class="container">
					<div class="row">
							<div class="col-lg-8 mx-auto">
									<h2 class="section-title text-center">
											<span>Previus Moments</span>
											Event Gallery
									</h2>
							</div><!-- col end-->
					</div>

				<div class="grid ts-grid-item">
			<?php 

            $sel="SELECT * FROM `gallery` ORDER BY id DESC";
            $exe=mysqli_query($conn,$sel);
            if(mysqli_num_rows($exe)==0)
            {
               echo "No Images to show";
            }
            else
            {
               while($data=mysqli_fetch_assoc($exe))
               {

               




         ?>

               <div class="grid-item">
					<a href="<?php echo 'gallery/'.$data['photo_path'] ?>" class="ts-popup">
                  <img src="<?php echo 'gallery/'.$data['photo_path'] ?>" alt="" />
               </a>
               <center style="color:#3e1e83;">
                  <?php echo $data['title'];?>

               </center>
               
                  
                  
              
              
                 
					</div>

<?php 
      }
}

?>
					
				
					
					
					
				 </div>


			</div><!-- Conatiner end -->
		</section><!-- Main container end -->

		<!-- ts footer area start-->
		<?php include_once('public/footer.php');?>
		<!-- ts footer area end-->
		

      
        
    

      <!-- Javascript Files
            ================================================== -->
      <!-- initialize jQuery Library -->
      <script src="js/jquery.js"></script>

      <script src="js/popper.min.js"></script>
      <!-- Bootstrap jQuery -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Counter -->
      <script src="js/jquery.appear.min.js"></script>
      <!-- Countdown -->
      <script src="js/jquery.jCounter.js"></script>
      <!-- magnific-popup -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- carousel -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Waypoints -->
      <script src="js/wow.min.js"></script>
      <!-- isotop -->
      <script src="js/isotope.pkgd.min.js"></script>

      <!-- Template custom -->
      <script src="js/main.js"></script>


      </div>
      <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d22f07b1a9dfeb9"></script>

      <!-- Body inner end -->
   </body>

<!-- gallery16:34-->
</html>