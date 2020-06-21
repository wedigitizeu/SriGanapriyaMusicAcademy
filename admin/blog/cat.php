<div class="widget categories">
<h4 class="widget-title">All Categories</h4>
<ul class="categories-list">
<?php 
			$sel="SELECT * FROM `blog_category`";
			$exe=mysqli_query($con,$sel);
			if(mysqli_num_rows($exe)>0)
				{
					while($data=mysqli_fetch_assoc($exe))
						{
			
			?>
						<li>
							<a href="blog-by-category.php?cat=<?php echo $data['category'];?>">
							<i class=""></i>
							<?php echo $data['category'];?><span class="category-counter"></span>
							</a>
						</li>
			<?php
						}
				}
							
					else
						{
								echo "No data";
						}
						?>
	
</ul>
</div>