<div class="jumbotron" style="padding:0;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-6 col-sm-4 flat-button <?php if($page->url()==url('articles')){ echo 'active'; }?>"><a href="<?php echo url('articles'); ?>">articles</a></div>
      <div class="col-xs-6 col-sm-4 flat-button <?php if($page->url()==url('projects')){ echo 'active'; }?>"><a href="<?php echo url('projects'); ?>">projets</a></div>
      <div class="col-xs-12 col-sm-4 flat-button <?php if($page->url()==url('association')){ echo 'active'; }?>"><a href="<?php echo url('association'); ?>">association</a></div>
    </div>
  </div>
</div>
