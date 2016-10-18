<?php snippet('header') ?>

	<section class="container-title">
		<h1 class="title"><?php echo ucfirst( page()->title()->html() ) ?></h1>
	</section>

	<ul class="container-boxes">

			<?php foreach (page()->children()->visible() as $resource): ?>

				<li>
					<hr>

				<!-- if Experience -->
				<?php if($resource->intendedTemplate() === "resource-experience"): ?>

						<section>
							<span class="caption"><?php echo $resource->location() ?> | </span>
							<time class="caption"><?php echo $resource->date('d.m.Y') ?></time>
							<h4 class="headline"><?php echo $resource->title() ?></h4>							
						</section>
						<article>
							<p id="article-short"><?php echo $resource->short()->html() ?><p/>
							<a href="<?php echo $resource->url() ?>" class="link">Continua a leggere</a>
						</article>
						<?php if( $resource->image()->isNotEmpty() ): ?>
							<img src="<?php echo $resource->image()->url() ?>" alt="<?php echo $resource->image()->alt()->html() ?>">
						<?php endif ?>

				<!-- if Document -->
				<?php elseif($resource->intendedTemplate() === "resource-document"): ?>

						<section>
							<h4 class="headline"><?php echo $resource->title() ?></h4>
							<ul class="body">
								<?php foreach ($resource->authors()->toStructure() as $author): ?>
									<li><?php echo "{$author->name()->html()} {$author->surname()->html()}" ?></li>
								<?php endforeach ?>
							</ul>
							<a href="<?php echo $resource->url() ?>" class="link">Continua a leggere</a>
						</section>
					
				<?php endif ?>

				</li>

      		<?php endforeach ?>

      		</ul>

<?php snippet('footer') ?>
