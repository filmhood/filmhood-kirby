<?php snippet('header') ?>

<?php snippet('jumbotron-title') ?>

<?php snippet('jumbotron-buttons') ?>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <article class="new">
        <?php echo $page->text()->kirbytext() ?>
      </article>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
