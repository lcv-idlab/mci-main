<!-- ENTI SOSTENITORI --> 

<section class="enti">
    <h2 class="title-enti">Enti sostenitori</h2>
    <ul>
	<?php foreach( page('footer/enti-sostenitori')->images() as $image): ?>
		<li>
			<img src="<?php echo $image->url() ?>" alt="<?php echo $image->alt()->html() ?>">
		</li>
	<?php endforeach ?>
	</ul>
</section>

<!-- end: ENTI SOSTENITORI --> 