<?php snippet('header') ?>

<?php snippet('jumbotron-title') ?>

<?php snippet('jumbotron-projects') ?>

<?php snippet('jumbotron-buttons') ?>

<div class="container">
  <div class="row">
    <div class="col-md-2">
      <p class="infobar-left">projets</p>
      <div class="tagbar-left">
        <?php $tagcloud = tagcloud(page('projects'), array('limit' => 20)) ?>
          <ul>
            <?php foreach($tagcloud as $tag): ?>
              <li><a href="<?php echo $tag->url() ?>" class="btn btn-default btn-xs"><?php echo $tag->name() ?></a></li>
            <?php endforeach ?>
          </ul>
        </p>
      </div>
    </div>
    <div class="col-md-8">
      <?php $projects = $page->children()->visible(); ?>

      <?php if($tag = param('tag')) {
        $projects = $projects->filterBy('tags', $tag, ',');
      } ?>

      <?php foreach($projects as $project): ?>
      <article style="border:none;">
        <h1><a class="categorie" href="<?php echo $project->url() ?>"><?php echo $project->title() ?></a></h1>
        <h4><?php echo $project->author() ?>&nbsp;/
          <?php echo $project->tags() ?>
        </h4>
        <p><img src="<?php echo $project->url() ?>/vignette.png" alt="vignette" /></p>
      </article>
      <?php endforeach ?>
    </div>
  </div>
</div>


<?php snippet('footer') ?>
