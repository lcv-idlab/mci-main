<?php snippet('header') ?>

	<main>
		<h1 class="title home-main-title desktop"><?php echo $site->subtitle()->html() ?></h1>
		<h1 class="title home-main-title mobile"><?php echo $site->second_title()->html() ?></h1>

		<!-- RESOURCES -->

		<section>
			<h2 class="hidden home-title-container"><?php echo page('risorse')->title()->html() ?></h2>
			<ul class="container-boxes" id="risorse-home">
			<?php foreach (page('risorse')->children()->visible() as $resource): ?>
			<li><a href="<?php echo $resource->url() ?>" class="link-box">
			
				<!-- Experience -->
				<?php if($resource->intendedTemplate() === "resource-experience"): ?>
					<article class="experience">
						<h3 class="headline"><?php echo $resource->title()->html() ?></h3>
						<p class="partner"><?php echo $resource->partner()->html() ?>, <?php echo $resource->location() ?></p>
						<p class="body"><?php echo $resource->short()->html() ?></p>
					</article>
				<?php if( $resource->image()->isNotEmpty() ): ?>
					<img src="<?php echo $resource->image()->url() ?>" alt="<?php echo $resource->image()->alt()->html() ?>">
				<?php endif ?>

				<!-- Document -->
				<?php elseif($resource->intendedTemplate() === "resource-document"): ?>
					<article class="document">
						<h3 class="headline"><?php echo $resource->title()->html() ?></h3>
						<h4 class="subtitle"><?php echo $resource->subtitle()->html() ?></h4>
						<p class="body"><?php echo $resource->short()->html() ?></p>
					</article>
				<?php endif ?>
			</a></li>
      		<?php endforeach ?>
      		</ul>
		</section>

		<!-- end: RESOURCES -->

		<?php if(page('eventi')->isVisible()): ?>

		<!-- EVENTS -->

		<section>
			<header class="home-title-container">
				<hr class="hr-solid">
				<h2 class="title"><?php echo page('eventi')->title()->html() ?></h2>
				<a href="<?php echo page('eventi')->url() ?>" class="link"><span>vedi tutti gli eventi</span></a>
			</header>
			<ul class="container-events">
				<?php foreach (page('eventi')->children()->visible() as $event): ?>
					<li>
						<a href="<?php echo $event->url() ?>" class="link-box">
							<article>
								<time datetime="<?php echo $event->date('Y-m-d') ?>"><?php echo $event->date('d.m.Y') ?></time>
								<h3 class="event-list-title"><?php echo $event->title()->html() ?></h3>
								
								<p class="body"><span class="location"><?php echo $event->partner() ?>, <?php echo $event->place() ?></span> <?php echo $event->short()->html() ?></p>
							</article>
						</a>
					</li>
				<?php endforeach ?>
			</ul>
		</section>

		<!-- end: EVENTS -->

		<?php endif ?>


		<?php snippet('newsletter') ?>
		<?php snippet('enti-promotori') ?>
		<?php snippet('enti-sostenitori') ?>

	</main>

<?php snippet('footer') ?>