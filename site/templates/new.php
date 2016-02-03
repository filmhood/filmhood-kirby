<?php snippet('header') ?>

<?php snippet('jumbotron-title') ?>

<?php snippet('jumbotron-buttons') ?>

<div class="container">

  <?php snippet('article-author') ?>

  <div class="row" style="margin-top:30px;">
    <div class="col-md-8 col-md-offset-2">
      <article class="new">
        <?php echo $page->text()->kirbytext() ?>
      </article>
    </div>
  </div>
  <div class="row"><p>&nbsp;</p></div>
  <?php snippet('share-buttons') ?>
</div>

<?php snippet('footer') ?>
