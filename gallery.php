<?php
include_once('db/db.php');
?>

<!DOCTYPE html>
<html lang="en">


<!-- speakers-117:31-->
<head>
   <!-- Basic Page Needs ================================================== -->
   <meta charset="utf-8">

   <!-- Mobile Specific Metas ================================================== -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

   <!-- Site Title -->
   <title>SRI GAANAPRIYA MUSIC ACADEMY</title>

   <!-- CSS
         ================================================== -->
   <!-- Bootstrap -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- magnific -->
   <link rel="stylesheet" href="css/magnific-popup.css">
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
   <style type="text/css">
      .page-btn
      {

         background-color:#ff007a;
         border:none;outline:none;
         color:white;
         
      }

   @media screen and (max-width: 480px)
   {
    
       .page-btn
       {
           padding:2%; 
           margin-top:2%;
       }
       .ag
       {
         line-height:1.2;
       }
   }

       @media screen and (min-width: 481px)
       {
          .page-btn
          {
             padding:0.5%; 
          }
      }
       

   </style>
   

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
               <h2 class="ag">Our Awesome Gallery</h2>
               <ol class="breadcrumb">
                  <li>
                     <a href="index.php">Home /</a>
                  </li>
                  <li>
                    Gallery
                  </li>
               </ol>
            </div>
         </div><!-- Subpage title end -->
      </div><!-- Page Banner end -->

      <!-- ts speaker start-->
      <section id="ts-speakers-standard" class="ts-speakers-standard ts-speakers speaker-classic section-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 mx-auto">
                  <h2 class="section-title text-center">
                     <span>PREVIUS MOMENTS</span>
                  Event Gallery
                  </h2>
               </div><!-- col end-->
            </div><!-- row end-->
            <div class="row">
               
<?php 
         
     if(isset($_GET['page']))
     {
         $limit=$_GET['page'];
     }

      

      if($limit=="" || $limit=="1")
      {
         $limitFrom=0;
      }
      else
      {
          $limitFrom=($limit*5)-5;
          
      }    
        $sel="SELECT * FROM `gallery` ORDER BY id DESC LIMIT $limitFrom,6";
            $exe=mysqli_query($conn,$sel);
            if($a=mysqli_num_rows($exe)==0)
            {
               echo "No Images to show";
            }
            else
            {
               
               while($data=mysqli_fetch_assoc($exe))
               {

               




         ?>    
               <div class="col-md-4">
                  <!---ts-speaker---->
                  <div class="grid-item">
                     <div class="speaker-img">
                         <a href="<?php echo 'gallery/'.$data['photo_path'] ?>" class="ts-popup">
                         <img src="<?php echo 'gallery/'.$data['photo_path'] ?>" alt="sri-gaanapriya-music-academy-wedigitizeu" title="Sri Gaanapriya Music Academy" />
                     </div>
                     <br>
                  </div>
               </div> 

            
              <?php 
               }
            }

              ?>
              
             

            </div>
            <!-- row end-->
         </div>
         <!-- container end-->

      </section>
      <!-- ts speaker end-->

 <?php
                  $sel1="SELECT * FROM `gallery`";
                  $exe=mysqli_query($conn,$sel1);
                  $count=mysqli_num_rows($exe);
                  $count=ceil($count/6);
                  ?>
                  <br><br>
                  
                  <center>
                     <?php

                     for($i=1;$i<=$count;$i++)
                  {
                     ?>
                    
                        
                     
                       
                       <a href="gallery.php?page=<?php echo $i ?>">
                        <button class="page-btn">
                          <?php echo $i; ?>
                        </button>
                        </a>

                      
                      

         <?php     }

         ?>
                  </center>
                

      <!-- ts footer area start-->
      <div class="footer-area">
            <?php include_once('public/footer.php');?>
        </div>
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
   <!-- Body inner end -->
   <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d22f07b1a9dfeb9"></script>
</body>


<!-- speakers-117:31-->
</html>