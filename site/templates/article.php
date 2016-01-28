<?php snippet('header') ?>

<?php snippet('jumbotron-title') ?>

<?php snippet('jumbotron-buttons') ?>

<div class="container">

  <?php snippet('article-author') ?>

  <div class="row">
    <?php snippet('share') ?>
    <div class="col-md-8">
      <article class="new">
        <?php echo $page->text()->kirbytext() ?>
      </article>
    </div>
  </div>
  <?php snippet('prev-next-buttons') ?>
</div>

<?php snippet('footer') ?>
