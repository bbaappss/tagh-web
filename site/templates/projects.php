<h2>Episodes</h2>

<ul class="teaser cf">
	<?php foreach($data->children()->visible() as $episode): ?>
  <li>
    <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
