<?php snippet('header') ?>

  <main>

    <a href="<?php echo page('home')->url() ?>/#risorse-home" class="link link-back"><span>Torna indietro</span></a>
    
    <h1 class="title-article"><?php echo ucfirst( page()->title()->html() ) ?></h1>

    <div class="resource-document">

      <!-- document download button -->
      <?php foreach (page()->documents()->filterBy('extension', 'pdf') as $pdf): ?>
        <a href="<?php echo $pdf->url() ?>" target="_blank" title="<?php echo $pdf->fileName() ?>" class="button button-download">Scarica il documento</a>
      <?php endforeach ?>
      <!-- end -->

      <?php if(page()->image()): ?>
        <img src="<?php echo page()->image()->url() ?>" alt="<?php echo image()->alt()->html() ?>">
      <?php endif ?>
    </div>

    <div class="resource-document-text">
      <div class="border-top">
        <div class="aside">
          <h3 id="date">Data pubblicazione</h3>
          <time class="body" datetime="<?php echo page()->date('Y-m-d') ?>"><?php echo page()->date('d.m.Y') ?></time>
          <h3 id="authors">Autori</h3>
          <ul class="body">
            <?php foreach (page()->authors()->toStructure() as $author): ?>
              <li><?php echo "{$author->name()->html()} {$author->surname()->html()}" ?></li>
            <?php endforeach ?>
          </ul>
        </div>
        <div id="article">
          <h2 class="subtitle"><?php echo page()->subtitle()->html() ?></h2>
          <p><?php echo page()->long()->html() ?></p>
        </div>
      </div>
    </div>

  </main>
  
<?php snippet('footer') ?>