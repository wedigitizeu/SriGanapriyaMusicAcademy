<div class="widget widget-popular-posts">


	<h4 class="widget-title">Recent Posts</h4>
	<ul class="posts-list">	
		
		<?php 
			include_once('../db/db.php');
			$sel="SELECT * FROM `blog` ORDER BY id DESC LIMIT 4";
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
			<li>
				<div class="widget-thumb">
					<a href="recent-blog.php?blog=<?php echo $data['id'];?>"><img src="../blog-images/<?php echo $data['image']?>" alt="" /></a>
				 </div>
				<div class="widget-content">
					<a href="recent-blog.php?blog=<?php echo $data['id'];?>"> <?php echo $data['title'];?></a>
					
					<span><i class="icon-calendar"></i><?php echo$data['date'];?></span>
				</div>
				<div class="clearfix"></div>
			</li>
		
		<?php 
			}
		}
		?>
		
		
	</ul>
		
		
</div>