<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

  <!-- css -->
  <?php echo css('assets/css/main.css'); ?>
  <?php echo css('assets/sass/lightbox.css'); ?>

  <!-- js -->
  <?php echo js('assets/js/nav.js'); ?>
  <?php echo js('assets/js/jquery.min.js'); ?>

</head>
<body class="body senseable-art">

<header class="header senseable-main-nav">
	<nav>
		<h1>Mediation Culture Inclusion</h1>
		<span class="senseable-menu-button"><a href="" id="toggle"></a></span>
		<ul>
			<li><a href="<?php echo page()->url() ?>/#workshop"><span class="link-button">Workshop</span></a> / </li>
			<li><a href="<?php echo page()->url() ?>/#people" class="link-button" >People</a> / </li>
			<!-- <li><a href="<?php echo page()->url() ?>/#projects">Projects</a> / </li> -->
			<li><a href="<?php echo page()->url() ?>/#info" class="link-button">Info</a></li>

      	</ul>
	</nav>
</header>

<main>

	<div class="workshop-title">
		<div class="container">
			<h1><?php echo page()->title()->html() ?></h1>
			<div class="workshop-subtitle"><?php echo page()->subtitle()->kt()->html() ?></div>
			<p class="place-time"><?php echo page()->place()->html() ?>, <?php echo page()->date_time()->html() ?></p>
		</div>
	</div>


	<div class="container">
		<h2 id="workshop">Workshop</h2>
		<p class="description"><?php echo page()->workshop_description()->html() ?></p>
	</div>

	<hr>

	<div class="container">
		<h2 id="people">People</h2>
		<p class="description"><?php echo page()->people_description()->html() ?></p>

		<div class="people-lists">
			<div class="list">
				<h3><?php echo page()->experts_title()->html() ?></h3>
				<ul>
				<?php foreach (page()->experts()->toStructure() as $item ): ?>
					<li><?php if($item->link()->isNotEmpty()): ?><a href="<?php echo $item->link() ?>" target="_blank"><?php endif ?><?php echo $item->name()->html() ?> <?php echo $item->surname()->html() ?><?php if($item->affiliation()->isNotEmpty()): ?>, <?php echo $item->affiliation()->html() ?><?php endif ?><?php if($item->link()->isNotEmpty()): ?></a><?php endif ?></li>
				<?php endforeach ?>
				</ul>
			</div>

			<div class="list">
				<h3><?php echo page()->guests_speakers_title()->html() ?></h3>
				<ul>
				<?php foreach (page()->guests_speakers()->toStructure() as $item ): ?>
					<li><?php if($item->link()->isNotEmpty()): ?><a href="<?php echo $item->link() ?>" target="_blank"><?php endif ?><?php echo $item->name()->html() ?> <?php echo $item->surname()->html() ?><?php if($item->affiliation()->isNotEmpty()): ?>, <?php echo $item->affiliation()->html() ?><?php endif ?><?php if($item->link()->isNotEmpty()): ?></a><?php endif ?></li>
				<?php endforeach ?>
				</ul>
			</div>

			<div class="list">
				<h3><?php echo page()->experts_title()->html() ?></h3>
				<ul>
				<?php foreach (page()->other_partecipants()->toStructure() as $item ): ?>
					<li><?php echo $item->name()->html() ?> <?php echo $item->surname()->html() ?></li>
				<?php endforeach ?>
				</ul>
			</div>

			<div class="list">
				<h3><?php echo page()->research_mentors_title()->html() ?></h3>
				<ul>
				<?php foreach (page()->research_mentors()->toStructure() as $item ): ?>
					<li><?php echo $item->name()->html() ?> <?php echo $item->surname()->html() ?><?php if($item->affiliation()->isNotEmpty()): ?>, <?php echo $item->affiliation()->html() ?><?php endif ?></li>
				<?php endforeach ?>
				</ul>
			</div>

			<div class="list">
				<h3><?php echo page()->coordinator_title()->html() ?></h3>
				<ul>
				<?php foreach (page()->coordinator()->toStructure() as $item ): ?>
					<li><?php echo $item->name()->html() ?> <?php echo $item->surname()->html() ?><?php if($item->affiliation()->isNotEmpty()): ?>, <?php echo $item->affiliation()->html() ?><?php endif ?></li>
				<?php endforeach ?>
				</ul>
			</div>
			
		</div>
	</div>

	<!--
	<hr>

	<div class="container">
		<h2 id="projects">Projects</h2>

		<div class="project-lists">
			<ul>
			<?php foreach(page()->projects()->toStructure() as $item): ?>
				<li class="project">
					<img src="<?php if($item->project_picture()->isNotEmpty()): ?><?php echo image($item->project_picture())->url() ?><?php endif ?>">
					<h3><?php echo $item->title()->html() ?></h3>
				</li>
			<?php endforeach ?>
			</ul>
		</div>
	</div>

	-->

	<hr>

	<div class="container">
		<div class="info-items">
			<div class="info-info">
				<h2 id="info">Info</h2>
				<p><a href="http://www.mci.supsi.ch" target="_blank">www.mci.supsi.ch</a><br><a href="http://www.lcv.supsi.ch" target="_blank">www.lcv.supsi.ch</a></p>
				<p>Campus Trevano SUPSI<br>Lugano, Switzerland</p>
			</div>
			<div class="info-license">
				<h2>License</h2>
				<a href="https://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank"><img src="https://creativecommons.org/wp-content/themes/creativecommons.org/images/chooser_cc.png">
				<img src="https://creativecommons.org/wp-content/themes/creativecommons.org/images/chooser_by.png">
				<img src="https://creativecommons.org/wp-content/themes/creativecommons.org/images/chooser_nc.png">
				<img src="https://creativecommons.org/wp-content/themes/creativecommons.org/images/chooser_sa.png"></a>
			</div>
			<div class="info-repo">
				<h2>Repository</h2>
				<a href=""><img src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Mark.png"></a>
			</div>
		</div>
	</div>

	<footer></footer>


</main>
