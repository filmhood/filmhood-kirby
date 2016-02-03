<div class="jumbotron no-margin custom-background" style="background-image:url(<?php if($image = $page->image('cover.jpg')) { echo $image->url(); } ?>);">
  <div class="container text-center">
    <p>&nbsp;</p>
    <h1><?php echo $page->title() ?></h1>
    <h3><?php echo $page->subtitle() ?></h3>
    <p>&nbsp;</p>
  </div>
</div>
