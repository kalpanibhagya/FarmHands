<div class="container">
  <div class="single-page-artical">
  <h2><?php echo $post['title']; ?></h2>
  <small class="post-date">Posted at:<?php echo$post['created'];?></small><br>
  <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
  <div class="post-body">
	<?php echo $post['body']; ?>
  </div>
  <hr>
  <a class="btn btn-default pull-left" href="edit/<?php echo $post['slug']; ?>">Edit</a>
  <?php echo form_open('/index.php/blog/delete/'.$post['id']); ?>
    <input type="submit" value="delete" class="btn btn-danger">
  </form>
</div>
</div>
