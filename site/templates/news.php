<?php snippet('header') ?>

<?php snippet('jumbotron-title') ?>

<?php snippet('jumbotron-buttons') ?>

<div class="container">
  <div class="col-md-8 col-md-offset-2" style="margin-top:30px;">
    <?php foreach(page('blog')->children()->visible() as $new): ?>
    <article>
      <h1><a class="categorie think" href="<?php echo $new->url() ?>"><?php echo $new->title() ?></a></h1>
      <h4><?php echo $new->author() ?></h4>
      <p><?php echo $new->text()->kirbytext()->excerpt(300) ?></p>
    </article>
    <?php endforeach ?>
  </div>
</div>

<?php snippet('footer') ?>
