<?php
error_reporting(0);
session_start();
include_once('../db/db.php');
?>
<?php include_once('session.php');?>

	

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
    <title>Sri Gaanapriya Music</title>
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
          <h1><i class="fa fa-bell-o"></i> Set Reminder</h1>
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
                <form method="post" action="insertReminder.php">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Client Name</label>
                    <input class="form-control"  type="text" name="name" />
					<small class="form-text text-muted" id="emailHelp">To whome you want meet or call</small>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Client Mobile Number</label>
                    <input class="form-control" type="text" name="mobile"/>
					
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Client Email</label>
                    <input class="form-control"  type="text" name="email" />
					<small class="form-text text-muted" id="emailHelp">To whom you want meet or call</small>
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Meeting Date</label>
                    <input class="form-control"  type="date"  name="date">
					
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Meeting Time</label>
                    <input class="form-control"  type="time"  name="time" />
					
                  </div>
				  
                  <div class="animated-radio-button">
					<label>
						<input type="radio" name="conv" value="AM"><span class="label-text">AM</span>
					</label>
				</div>
				<div class="animated-radio-button">
					<label>
						<input type="radio" name="conv" value="PM"><span class="label-text">PM</span>
					</label>
				</div>
                 
                  
                  <div class="form-group">
                    <label for="exampleTextarea">Note</label>
                    <textarea class="form-control" name="note" rows="4"></textarea>
                  </div>
                  
				 <button class="btn btn-primary" type="submit" name="sub">Set Reminder</button>
                  
                 
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