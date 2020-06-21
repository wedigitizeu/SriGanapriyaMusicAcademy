
<?php include_once('../../db/db.php')?>
<?php
if(isset($_GET['reject']))
{
  $id=$_GET['reject'];
  $update="UPDATE `booking` SET `status`='1' WHERE id='$id'";
  if($obj->insertQuery($update))
  {
    echo "Rejected";
    header('Location:../bookings.php');
    exit();
  }
  else
  {
    echo "Rejected";
    exit();
  }
  
  
}
?>




<?php
$num=$_POST['num'];


if($num==1)
{

	$date=date('Y-m-d');
	$date1=strtotime(date('Y-m-d'));

 	$sel="SELECT * FROM `booking`  WHERE (status='0') ORDER BY id DESC";
	$exe=mysqli_query($conn,$sel);
	if(mysqli_num_rows($exe)>0)

	{
			$i=0;
			while($data=mysqli_fetch_assoc($exe))
			{
				
			?>
		<div class="row">
		<div class="col-md-6">
          <div class="tile">
            <div class="tile-title-w-btn">
    <h3 class="title">Booking No. <?php echo $data['id'] ?></h3>
              
              <p>
              	

              <a href="scripts/select-mybookings.php?reject=<?php echo $data['id']?>"
              <button class="btn btn-danger btn-sm icon-btn">
              		<i class="fa fa-times" aria-hidden="true"></i>
              		<?php echo 'Reject'?>	
              </button>
              </a>
              </p>
            </div>
            <div class="tile-body">
              <b><?php echo $data['date']?></b>
              <br>
              	<div><?php echo $data['name']?></div>
             	<div><?php echo $data['mobile']?></div>
             	<div><?php echo $data['email']?></div>
             	<div><?php echo $data['address']?></div>
             	<h2>About Service</h2>
              <div><?php echo $data['productName']?></div>
             	<div><?php echo $data['serviceType']?></div>
             	<div><?php echo $data['productType']?></div>
              
              

            </div>
          </div>
        </div>
	  </div>
			<?php			
			}

	}

	else
	{

		
			$_SESSION['msg']="No Bookings";
			$_SESSION['today_clients_meeting']=0;
			echo "<script>
					window.location.href = 'page-error.php';
				</script>";
			
		
		
	}

}

?>