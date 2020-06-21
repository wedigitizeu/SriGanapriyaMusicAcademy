<?php 

$sel="SELECT * FROM `blog` ORDER BY id DESC";
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
			while($data=mysqli_fetch_assoc($exe))
			{
				
			?>

<div class="blog-post">

	<div class="post-thumb">
	<a href="#"><img class="img-fluid" src="../blog-images/<?php echo $data['image']?>" alt=""></a>
	<div class="hover-wrap"></div>
	</div>


	<div class="post-content">
	<div class="meta">
	<span class="meta-part" title="Category"><a href="#"><i class="lni-date"></i> <?php echo $data['category'];?></a></span>
	<span class="meta-part" title="Posted Date"><a href="#"><i class="lni-date"></i><?php echo $data['date'];?></a></span>
	<!--<span class="meta-part"><a href="#"><i class="lni-date"></i> Sticky</a></span>
	<span class="meta-part"><a href="#"><i class="lni-comments-alt"></i> 1 Comments</a></span>-->
	</div>
	<h2 class="post-title"><a href="single-post.html"><?php echo $data['title'];?></a></h2>
	<div class="entry-summary">
	<!--<p><?php echo $data['blog'];?></p>----->
	</div>
	<a href="blog-summury.php?blog=<?php echo $data['id'];?>" class="btn btn-common">Read</a>
	</div>

</div>
<?php		
			}
			
		}

?>