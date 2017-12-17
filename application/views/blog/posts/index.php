
<div class="container">
	<h2><?=$title ?></h2>
<?php foreach($posts as $post) : ?>
	<h3><?php echo $post['title']; ?></h3>
	<div class="row">
		<div class="col-md-3">
			<img class="post-thumb thumbnail" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
			
		</div>
		<div class="col-md-9">
			<small class="post-date">Created at<?php echo$post['created'];?> in <strong><?php echo $post['name']; ?></strong></small>
	        <br>
	        <p><?php echo word_limiter($post['body'],60); ?></p>
	        <br>
	        <p><a class="btn btn-default" href="<?php echo site_url('index.php/blog/'.$post['slug']); ?>">Read more</a></p>
		</div>
		
	</div>
<?php endforeach; ?>
</div>
