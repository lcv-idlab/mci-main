<!-- ENTI SOSTENITORI --> 

<section class="enti">
    <h2 class="title-enti">Enti sostenitori</h2>
    <ul>
	<?php foreach( page('footer/enti-sostenitori')->images() as $image): ?>
		<li>
		<?php if ($image->link()->isNotEmpty() ): ?>
			<a href="<?php echo $image->link() ?>" target="_blank">
				<img src="<?php echo $image->url() ?>" alt="<?php echo $image->alt()->html() ?>">
			</a>
		<?php else: ?>
			<img src="<?php echo $image->url() ?>" alt="<?php echo $image->alt()->html() ?>">
		<?php endif ?>
		</li>
	<?php endforeach ?>
	</ul>
</section>

<!-- end: ENTI SOSTENITORI --> 