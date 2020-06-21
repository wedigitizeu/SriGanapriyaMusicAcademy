<?php
error_reporting(0);
session_start();
include_once('../db/db.php');
?>
<?php include_once('session.php');?>
<?php
if(isset($_POST['add']))
{
	$credit=$_POST['money'];
	$reason=$_POST['reason'];
	$day=date('d');
	$month=date('m');
	$year=date('Y');
	$date=date('d-m-Y');
	
	
	$query="INSERT INTO `my-earnings`(`date`, `day`, `month`, `year`, `credit`, `debit`, `time`, `reason`, `status`) VALUES 
	('$date','$day','$month','$year','$credit','0','time','$reason','0')";
	
	$exe=mysqli_query($con,$query);
	if($exe)
	{
		$_SESSION['msg']="Successfully added as reminder";
			
			echo "<script>
					window.location.href = 'page-error.php';
				</script>";
	}
	else
	{
		$_SESSION['msg']="Oops..<br/> Please contact to service provider";
			
			echo "<script>
					window.location.href = 'page-error.php';
				</script>";
	}
	
}

?>

<?php

if(isset($_POST['remove']))
{
	$debit=$_POST['money'];
	$reason=$_POST['reason'];
	$day=date('d');
	$month=date('m');
	$year=date('Y');
	$date=date('d-m-Y');
	
	
	$query="INSERT INTO `my-earnings`(`date`, `day`, `month`, `year`, `credit`, `debit`, `time`, `reason`, `status`) VALUES 
	('$date','$day','$month','$year','0','$debit','time','$reason','0')";
	
	$exe=mysqli_query($con,$query);
	if($exe)
	{
		$_SESSION['msg']="Successfully added as reminder";
			
			echo "<script>
					window.location.href = 'page-error.php';
				</script>";
	}
	else
	{
		$_SESSION['msg']="Oops..<br/> Please contact to service provider";
			
			echo "<script>
					window.location.href = 'page-error.php';
				</script>";
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
    <title>Sangameshwara Flowers</title>
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
    <?php include_once('menu.php')?>
    <main class="app-content">
      
        <div class="app-title">
        <div>
          <h1><i class="fa fa-money"></i> Money tracker</h1>
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
              <div class="col-lg-6">
                <form method="post" action="">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Amount </label>
                    <input class="form-control"  type="number" name="money" placeholder="Rs." />
					<small class="form-text text-muted" id="emailHelp">Your earnings</small>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Reason</label>
                    <input class="form-control" type="text" name="reason"/>
					
                  </div>
				  <button class="btn btn-success" type="submit" name="add">Add to earning</button>
				  <button class="btn btn-danger" type="submit" name="remove">Remove from earning</button>
				    <br/><br/>
				  </form>
              </div>
			  </div>
				<div class="row">
					
				</div>
				<h2>Today's</h2>
				<div class="row">
					<div class="col-md-4">
						<div class="tile">
						<h3 class="tile-title" style="color:green">Total Earning</h3>
						<?php 
						$today=date('d-m-Y');
						 $sel="SELECT * FROM `my-earnings` WHERE date='$today'";
						 $exe=mysqli_query($con,$sel);
						if(mysqli_num_rows($exe)>0)
						{
							$total=0;
						while($data=mysqli_fetch_assoc($exe))
							{
								
								$sum=$data['credit'];
								$total=$total+$sum;
								
							}
								$msg1=$total;
						}
						?>
			
			
			
						<div class="tile-body"><h1>
						<?php if(isset($msg1))
						{
							echo "Rs."." ".$msg1;
						}?>
						</h1></div>
						
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="tile">
						<h3 class="tile-title" style="color:#FF4500">Debit</h3>
						
						<?php 
						$today=date('d-m-Y');
						 $sel="SELECT * FROM `my-earnings` WHERE date='$today'";
						 $exe=mysqli_query($con,$sel);
						if(mysqli_num_rows($exe)>0)
						{
							$debit=0;
						while($data=mysqli_fetch_assoc($exe))
							{
								
								$sum=$data['debit'];
								$debit+=$sum;
								
							}
								$msg2=$debit;
						}
						?>
						<div class="tile-body">
							<h1>
								<?php if(isset($msg2))
							{
								echo "Rs."." ".$msg2;
							}?>
							</h1>
						</div>
						
						</div>
					</div>
						<div class="col-md-4">
						<div class="tile">
						<h3 class="tile-title" style="color:red">Balance</h3>
						<div class="tile-body">
							<h1>
								<?php 
								$msg3=$msg1-$msg2;
								echo "Rs."." ".$msg3;
								
							?>
							</h1>
						</div>
						
						</div>
					</div>
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