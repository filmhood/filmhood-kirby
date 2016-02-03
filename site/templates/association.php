<?php snippet('header') ?>

<div class="jumbotron no-margin custom-background" style="background-image:url(<?php if($image = $page->image('cover.jpg')) { echo $image->url(); } ?>);">
  <div class="container text-center">
    <p>&nbsp;</p>
    <h1>Filmhood</h1>
    <h3><?php echo $page->subtitle() ?></h3>
    <p>&nbsp;</p>
  </div>
</div>

<?php snippet('jumbotron-buttons') ?>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <article class="new">
        <?php echo $page->text()->kirbytext() ?>
      </article>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-md-2 col-md-offset-3 flat-button light-flat"><a href="<?php echo url('blog'); ?>">Actualité</a></div>
    <div class="col-md-2 flat-button light-flat"><a href="#">Adhérer</a></div>
    <div class="col-md-2 flat-button light-flat"><a href="#">Membres</a></div>
  </div>
</div>

<?php snippet('footer') ?>
