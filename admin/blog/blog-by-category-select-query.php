<?php 
error_reporting(0);
if(isset($_GET['cat']))
{
	$category_name=$_GET['cat'];
}

$sel="SELECT * FROM `blog` ORDER BY id DESC";
$exe=mysqli_query($con,$sel);
	if(mysqli_num_rows($exe)==0)
		{
			
			echo "<h3>No Post</h3>";
			
		}
	else
		{
			while($data=mysqli_fetch_assoc($exe))
			{
				
			?>
	
	<?php if($data['category']==$category_name)
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
		<!--<span class="meta-part"><a href="#"><i class="lni-folder"></i> Sticky</a></span>
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
			else
			{
				
			}
	?>
<?php		
			}
			
		}

?>