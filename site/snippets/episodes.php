<h2>Episodes</h2>

<ul class="teaser cf">
	<?php foreach($data->children()->visible() as $episodes): ?>
  <li>
    <h3><a href="<?php echo $episodes->url() ?>"><?php echo $episodes->title()->html() ?></a></h3>
    <p><?php echo $episodes->notes()->kirbytext) ?></p>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>