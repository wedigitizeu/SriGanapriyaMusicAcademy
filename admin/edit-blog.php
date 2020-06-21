<?php
error_reporting(0);
session_start();
include_once('../db/db.php');
?>
<?php include_once('session.php');?>

<?php

if(isset($_POST['sub']))
{
	$folder ="blog-images/";
	$_FILES["image"];
	$filename=$_FILES["image"]["name"];
	$temp_name= $_FILES["image"]["tmp_name"];
	$folder ="blog-images/".$filename;
	move_uploaded_file($temp_name,$folder);
	$date=date('d-m-Y');
	$title=$_POST['title'];
	$image=$filename;
	$category=$_POST['cate'];
	$blog=$_POST['blog'];
	
	
	
	$query="INSERT INTO `blog`( `date`, `title`, `image`, `category`, `blog`, `status`) VALUES 
	('$date','$title','$image','$category','$blog','1')";
	
	
	$exe=mysqli_query($con,$query);
	if($exe)
	{
		$_SESSION['msg']="Successfully added as reminder";
			
			echo "<script>
					window.location.href = 'page-error.php'
				</script>";
	}
	else
	{
		$_SESSION['msg']="Please conact to service provider";
			
			echo "<script>
					window.location.href = 'page-error.php';
				</script>";
	}
	
}


?>


<?php
$blog_id=61;
$sel="SELECT * FROM `blog` WHERE id='$blog_id'";
$exe=mysqli_query($con,$sel);
if(mysqli_num_rows($exe)==0)
{
	$_SESSION['msg']="No Blog Found";
			
			echo "<script>
					window.location.href = 'page-error.php';
				</script>";
}
else
{
	$data=mysqli_fetch_assoc($exe);

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Sangameshwara Flowers</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!---------ck Editor----------->
	<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
	
 </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <?php include_once('menu.php')?>
    <main class="app-content">
      
        <div class="app-title">
        <div>
          <h1><i class="fa fa-rss"></i> Blog</h1>
          <p>If you are not emotionally involved, your client is not getting your best effort.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <!--<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">UI</li>
          <li class="breadcrumb-item"><a href="#">Cards</a></li>-->
        </ul>
      </div>
        
      
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-12">
            <form method="post" action="" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input class="form-control"  type="text" name="title" value="<?php echo $data['title']; ?>"/>
					<br/>
					<input class="form-control" type="file" name="image"/>
					<small>Image size 1500X700</small>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select class="form-control" name="cate">
						<option value="">Please Select</option>
						<?php 
							$sel="SELECT * FROM `blog_category`";
							$exe=mysqli_query($con,$sel);
							if(mysqli_num_rows($exe)>0)
							{
								while($data=mysqli_fetch_assoc($exe))
								{
						?>
							<option value="<?php echo $data['category']?>"><?php echo $data['category']?></option>
						<?php
								}
							}
							else
							{
								echo "<option>No data</option>";
							}
						?>
					</select>
					 
					
                  </div>
				  
				  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Add New Category</button>
				  
				  
				<div class="form-group">
                    <label for="exampleTextarea">Note</label>
                    <textarea class="form-control" id="editor1" name="blog">
							<?php echo $data['blog'];?>
					</textarea>
                 </div>
				 
				 <script>
                        CKEDITOR.replace( 'editor1' );
					</script>
                  
				 <!-- Trigger the modal with a button -->


					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					<?php include_once('modal.php');?>
				 
				 
				 
				 
				 <input class="btn btn-success btn-sm" type="submit" name="sub" value="Submit" />
				 
                  
                 
            </form>
              </div>
              
            </div>
            <div class="tile-footer">
              
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>