<link rel="stylesheet" href="style.css">
<?php  if (count($surc) > 0) : ?>
  <div class="error">
	  <?php foreach ($surc as $surc) : ?>
  	  <p class="surc"><?php echo $surc ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>