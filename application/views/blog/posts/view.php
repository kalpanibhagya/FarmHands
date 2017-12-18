<div class="container">
  <div class="single-page-artical">
    <div class="artical-content">
  <h2><?php echo $post['title']; ?></h2>
  <small class="post-date">Posted at:<?php echo$post['created'];?></small><br>
  <img class="img-responsive" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
  <div class="post-body">
	<?php echo $post['body']; ?>
  </div>
  
  <a class="btn btn-default pull-left" href="<?=base_url()?>Blog/edit/<?php echo $post['slug']; ?>">Edit</a>
  <?php echo form_open('/Blog/delete/'.$post['id']); ?>
    <input type="submit" value="delete" class="btn btn-danger">
  </form>
</div>
<div class="artical-links">
      <ul>
        <li><small> </small><span>June 30, 2015</span></li>
        <li><a href="#"><small class="admin"> </small><span>admin</span></a></li>
        <li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
        <li><a href="#"><small class="posts"> </small><span>View posts</span></a></li>
        <li><a href="#"><small class="link"> </small><span>permalink</span></a></li>
      </ul>
    </div>
    <div class="comment-grid-top">
      <h3>Responses</h3>
      <br>
      <?php if ($comments): ?>
        <?php foreach ($comments as $comment):?> 
            <div class="well">
          <h5><?php echo $comment['body'];?>[by  <strong><?php echo $comment['name'];?></strong>]</h5>
        </div>
        <?php endforeach; ?>
      
      <?php else: ?>
        <p>No Comments to Display</p>
      <?php endif; ?>
      
     
    </div>      
    <div class="artical-commentbox">
      <h3>leave a comment</h3>
      <?php echo validation_errors(); ?>
      <div class="table-form">
        <?php echo form_open('comments/create/'.$post['id']);?>
        <div class="form-group">
          <input type="text" class="textbox" name="Name" placeholder="Name">
          <input type="text" class="textbox" name="Email" placeholder="email">
          <textarea name="Message" placeholder="Message"></textarea> 
          <input type="hidden" name="slug" value="<?php echo $post['slug'];?>">
          <input class="btn btn-primary" type="submit" value="Send">
        </form>
      </div>
      </div>
    </div>  
  </div>
<!-- single -->
    </div>
  </div>
<!-- footer -->
  <div class="footer">
    <div class="container">
      <div class="footer-grids">
        <div class="col-md-3 footer-grid">
          <h3>cumque nihil impedit</h3>
          <div class="footer-grd-left">
            <img src="images/11.jpg" class="img-responsive" alt=" " />
          </div>
          <div class="footer-grd-left">
            <p>Nam libero tempore, cum 
              soluta nobis est eligendi optio cumque nihil impedit quo minus 
              id quod maxime placeat facere possimus, omnis voluptas assumenda 
              est, omnis dolor repellendus</p>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="col-md-3 footer-grid">
          <h3>voluptas assumenda</h3>
          <ul>
            <li><a href="#">doloribus asperiores</a></li>
            <li><a href="#">Itaque earum rerum</a></li>
            <li><a href="#">deserunt mollitia</a></li>
            <li><a href="#">facilis est et expedita</a></li>
            <li><a href="#">occaecati cupiditate</a></li>
            <li><a href="#">deserunt mollitia laborum</a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-grid">
          <h3>deserunt mollitia</h3>
          <ul>
            <li><a href="#">doloribus asperiores</a></li>
            <li><a href="#">Itaque earum rerum</a></li>
            <li><a href="#">deserunt mollitia</a></li>
            <li><a href="#">facilis est et expedita</a></li>
            <li><a href="#">occaecati cupiditate</a></li>
            <li><a href="#">deserunt mollitia laborum</a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-grid">
          <h3>Flckr Posts</h3>
          <div class="footer-grd">
            <img src="images/7.jpg" class="img-responsive" alt=" " />
          </div>
          <div class="footer-grd">
            <img src="images/8.jpg" class="img-responsive" alt=" " />
          </div>
          <div class="footer-grd">
            <img src="images/9.jpg" class="img-responsive" alt=" " />
          </div>
          <div class="clearfix"> </div>
          <div class="footer-grd">
            <img src="images/10.jpg" class="img-responsive" alt=" " />
          </div>
          <div class="footer-grd">
            <img src="images/7.jpg" class="img-responsive" alt=" " />
          </div>
          <div class="footer-grd">
            <img src="images/8.jpg" class="img-responsive" alt=" " />
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <p>© 2015 Quickly. All rights reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
    </div>
  </div>
<!-- //footer -->
<!-- for bootstrap working -->
    <script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</div>

</div>

