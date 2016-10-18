<?php snippet('head') ?>

<!-- HEADER -->

<header class="main-nav">
	<nav>
		<a href="<?php echo $site->url() ?>" class="main-logo"></a>
		<span class="menu-button"><a href="#menu" id="toggle"></a></span>
		<ul>
		<?php foreach ($site->pages()->visible() as $page): ?>

			<?php if ( $page->title() == "progetto" ): ?>
				<li><a href="<?php echo $page->url() ?>" class="<?php e($page->isOpen(), 'active'); ?> menu-item"><span class="<?php e($page->isOpen(), 'active'); ?>"><?php echo $page->title() ?></span></a></li>

				<?php foreach ( $page->children()->visible() as $intpage): ?>
					<li class="menu-item-sec"><a href="<?php echo $intpage->url() ?>" class="<?php e($intpage->isOpen(), 'active'); ?> menu-item"><span class="<?php e($intpage->isOpen(), 'active'); ?>"><?php echo $intpage->title() ?></span></a></li>
				<?php endforeach ?>

	      	<?php else: ?>
      			<li><a href="<?php echo $page->url() ?>" class="<?php e($page->isOpen(), 'active'); ?> menu-item"><span class="<?php e($page->isOpen(), 'active'); ?>"><?php echo $page->title() ?></span></a></li>
      		<?php endif ?>
      		
      	<?php endforeach ?>	
      	</ul>
	</nav>
</header>

<!-- end: HEADER -->
