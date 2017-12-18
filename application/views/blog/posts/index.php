<div class="container">
  
  <h2><?=$title ?></h2>
<?php foreach($posts as $post) : ?>
<div class="container thumbs">
      <div class="col-sm-12 col-md-12">
        <div class="thumbnail">
            <div class="col-md-6">
          <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="" class="img-responsive" style="width: 100%;">
          </div>

          <div class="caption">
            <h3><?php echo $post['title']; ?></h3>
             <small class="post-date">Created at<?php echo$post['created'];?> in <strong><?php echo $post['name']; ?></strong></small>
            <p><?php echo word_limiter($post['body'],70); ?></p>
            <div class="btn-toolbar text-center" >
             <a href="<?php echo site_url('Blog/'.$post['slug']); ?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
          </div>
        </div>
      </div>
    </div>
      <?php endforeach; ?>
</div>