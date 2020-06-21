<div id="comments">
<div class="comment-box">
<h3>Comments</h3>
<ol class="comments-list">
<li>

<?php
		$sel="SELECT * FROM `blog-comments`";
		$exe=mysqli_query($con,$sel);
		if(mysqli_num_rows($exe)==0)
		{
			echo "<h3>No Comments</h3>";
		}
		else
		{
			while($data=mysqli_fetch_assoc($exe))
			{
	?>
			<?php		
				if($data['blog_id']==$id)
				{
					
			?>
				
			
			
					<div class="">
					<div class="thumb-left">
					<!--<a href="#">
					<img class="img-fluid" src="assets/img/blog/user1.jpg" alt="">
					</a>-->
					</div>
					<div class="info-body">
					<div class="media-heading">
					<p style="font-weight:bold;color:black;"> <?php echo $data['name']; ?> <p>
					<span class="comment-date"><i class="lni-date"></i> <?php echo $data['date']; ?></span>
					<!--<a href="#" class="reply-link"><i class="lni-reply"></i> Reply</a>-->
					</div>
					<p><?php echo $data['comment'];?></p>
					</div>
					</div>
					<br/>
				<?php }?>
<?php
			}
		}
	?>
	
<ul>
<li>

</li>
</ul>
</li>
<li>

</li>
</ol>

<div id="respond">
<h2 class="respond-title">Leave A Comment</h2>

<script>
$(document).ready(function (){
	
	$('#submit').click(function (){
		
		var name=$("#uname").val();
		var email=$("#uemail").val();
		var comment=$("#ucomment").val();
		
		if(name && email && comment !="")
		{
			$.post("insert-comment.php",{name:name,email:email,comment:comment},function (data){
				
				$("#result").html(data);
				
			});
		}
		
		else{
			alert("Fill all the Fields");
		}
	});
	
});
</script>
	<div class="row">
	<div class="col-lg-6 col-md-6 col-xs-12">
	<div class="form-group">
	<input id="uname" class="form-control" name="author" type="text" value="" size="30" placeholder="Your Name">
	</div>
	 </div>
	<div class="col-lg-6 col-md-6 col-xs-12">
	<div class="form-group">
	<input id="uemail" class="form-control" name="email" type="text" value="" size="30" placeholder="Your E-Mail">
	</div>
	</div>
	</div>
	<div class="row">
	<div class="col-lg-12 col-md-12col-xs-12">
	<div class="form-group">
	<textarea id="ucomment" class="form-control" name="comment" cols="45" rows="8" placeholder="Massage..."></textarea>
	</div>
	<button type="submit" id="submit" class="btn btn-common">Post Comment</button>
	<p id="result"></p>
	</div>
	</div>

</div>

</div>
</div>

</div>

<aside id="sidebar" class="col-lg-4 col-md-12 col-xs-12 right-sidebar">

<div class="widget_search">
<form id="search-form">
<input type="search" class="form-control" autocomplete="off" name="s" placeholder="Search..." id="search-input" value="">
<button type="submit" id="search-submit" class="search-btn"><i class="lni-search"></i></button>
</form>
</div>

<!--------Categories start----------->
<?php include_once('cat.php');?>
<!--------Categories ends----------->
<!------Recent Post Starts--------->
<?php  include_once('recent-post.php');?>
<!------Recent Post Ends--------->
<!-----<div class="widget">
<h4 class="widget-title">Advertisement</h4>
<div class="add-box">
<img src="assets/img/img1.jpg" alt="">
</div>
</div>----->
</aside>

</div>
