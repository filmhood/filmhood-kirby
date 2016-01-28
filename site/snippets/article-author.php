<div class="row author">
  <div class="col-xs-4 col-md-offset-2">
    <p><img class="img-circle" src="<?php echo $site->user($page->author())->avatar()->url(); ?>" alt="avatar"/><?php echo $page->author() ?> / <?php echo $page->time() ?></p>
  </div>
  <div class="col-xs-4">
    <p class="right">
      <?php echo $page->tags() ?>
      <?php if($page->categorie()=='think') {
        echo '<span class="label label-primary">penser</span>';
      } elseif($page->categorie()=='make') { echo '<span class="label label-danger">faire</span>'; } ?>
    </p>
  </div>
</div>
