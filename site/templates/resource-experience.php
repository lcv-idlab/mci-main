<?php snippet('header') ?>

  <main>

    <a href="<?php echo page('home')->url() ?>/#risorse-home" class="link link-back"><span>Torna indietro</span></a>

    <h1 class="title-article"><?php echo ucfirst( page()->title()->html() ) ?></h1>

    <div class="resource-experience">
    <?php if( page()->movie()->isNotEmpty() ): ?>

        <div class="video">
          <iframe src="https://player.vimeo.com/video/<?php echo page()->movie() ?>" allowFullScreen></iframe>
        </div>

      <?php else: ?>
        <img src="<?php echo page()->image()->url() ?>" alt="<?php echo page()->image()->alt()->html() ?>">
      <?php endif ?>
    </div>

    <div class="resource-experience-text">
      <div class="border-top">
        <div class="aside">
          <p class="partner-experience"><?php echo page()->partner()->html() ?></p>
          <p><?php echo page()->location()->html() ?></p>
          <time datetime="<?php echo page()->date('Y-m-d') ?>"><?php echo page()->date('d.m.Y') ?></time>
        </div>
        <div id="article"><?php echo page()->long()->html() ?></div>
      </div>
    </div>

    <?php if(page()->gallery()->isNotEmpty()): ?>

    <section class="resource-experience-gallery">
      <h2>Fotografie dell'evento</h2>

      <ul>
        <?php foreach(page()->gallery()->yaml() as $image): ?>
        <li>
          <figure>
            <img src="<?php $img = $page->image($image); echo $img? $img->url() : '' ?>" alt="<?php echo page()->title()->html() ?>" class="<?php e($img->dimensions()->portrait(), 'portrait', 'landscape'); ?>" />
          </figure>
        </li>
        <?php endforeach ?>
        </ul>

    </section>

  <?php endif ?>

  </main>

<?php snippet('footer') ?>


