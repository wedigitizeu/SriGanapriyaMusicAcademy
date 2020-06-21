<?php
error_reporting(0);
session_start();

include_once('../db/db.php');
?>
<?php include_once('session.php');?>
<?php
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$update="UPDATE `reminder` SET `status`='1' WHERE id='$id'";
	if($obj->insertQuery($update))
	{
		echo "Updated";
	}
	else
	{
		echo "Not Updated";
	}
	
	
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
    <title>Sangameshwara</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
		<?php include_once('menu.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-laptop"></i> Today's Meeting</h1>
          <p>If you are not emotionally involved, your client is not getting your best effort.</p>
        </div>
        
      </div>
      <?php
		
		
	    $date=date('Y-m-d');
		$date1=strtotime(date('Y-m-d'));
		
		
	    $sel="SELECT * FROM `reminder` WHERE (date='$date') AND (status='0')";
		$exe=mysqli_query($conn,$sel);
		if(mysqli_num_rows($exe)>0)
		
		
		{
			
			$i=0;
			
			while($data=mysqli_fetch_assoc($exe))
			{
				
				$i=$i+1;
		
	  ?>
				<div class="row">
        
					<div class="col-md-6">
					<div class="tile">
					<div class="tile-title-w-btn">
					<h3 class="title"><?php echo $data['name'];?></h3>
					<p><a class="btn btn-primary icon-btn" href="meetings.php?id=<?php echo $data['id'];?>"></i>I met this client</a></p>
				</div>
				<div class="tile-body">
					<b><?php echo $data['date'];?> </b><br>
					<b><?php echo $data['time']." ".$data['conv']?> </b><br>
					<b><?php echo $data['mobile'];?> </b><br>
					<b><?php echo $data['email'];?> </b><br>
				 
					<p style="color:red";> <?php echo $data['note'];?> </p>
              
              
					</div>
					</div>
					</div>
		
        
					<div class="clearfix"></div>
        
       
					</div>
	  
	  <?php
			}
			 
			 $_SESSION['today_clients_meeting']=$i;
			
		}
		else
		{
			
			$_SESSION['msg']="No Meetings";
			$_SESSION['today_clients_meeting']=0;
			echo "<script>
					window.location.href = 'page-error.php';
				</script>";
			
		
		}
		
			
		
		?>
		
		
		
	  
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