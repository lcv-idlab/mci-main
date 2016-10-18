<?php snippet('header') ?>

<main>
	<h1 class="title"><?php echo page()->title()->html() ?></h1>
	<ul class="project-team">
		<?php foreach ( page()->people()->toStructure() as $people ): ?>
			<li>
				<article>
					<div>
						<h2><?php echo $people->name()->html() ?> <?php echo $people->surname() ?></h2>
						<p class="affiliation"><?php echo $people->affiliation() ?></p>
					</div>
					<p class="biography"><?php echo $people->biography() ?></p>
				</article>
			</li>
		<?php endforeach ?>
	</ul>
</main>

<?php snippet('footer') ?>