<?php snippet('header') ?>

<main>

	<h1 class="title"><?php echo page()->title()->html() ?></h1>

	<div class="contacts-contacts">
		<address><?php echo page()->main()->kt() ?></address>
		<ul>
		<?php foreach( page()->contacts()->toStructure() as $contact ): ?>
			<li>
				<address>
					<strong><?php echo $contact->name()->html() ?> <?php echo $contact->surname()->html() ?></strong>
					<?php echo $contact->phone()->kt() ?>
					<a href="mailto:<?php echo $contact->email()->html() ?>"><?php echo $contact->email()->html() ?></a>
				</address>
			</li>
		<?php endforeach ?>
		</ul>
	</div>

	<section class="contacts-colophon">
		<h2 class="title">colophon</h2>
		<div class="colophon"><?php echo page()->colophon()->kt() ?></div>
	</section>

</main>

<?php snippet('enti-promotori') ?>
<?php snippet('enti-sostenitori') ?>
<?php snippet('footer') ?>