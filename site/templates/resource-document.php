<?php snippet('header') ?>

  <main>

    <a href="<?php echo page('risorse')->url() ?>" class="link link-back"><span>Torna indietro</span></a>
    
    <h1 class="title-article"><?php echo ucfirst( page()->title()->html() ) ?></h1>

    <div class="resource-document">

      <!-- document download button -->
      <?php foreach (page()->documents()->filterBy('extension', 'pdf') as $pdf): ?>
        <a href="<?php echo $pdf->url() ?>" target="_blank" title="<?php echo $pdf->fileName() ?>" class="button button-download">Scarica il documento</a>
      <?php endforeach ?>
      <!-- end -->

      
      <?php if(page()->image()): ?>

        <?php 
          // retrieve the alt text from the image, if not present, use a generic one
          $img = $page->image();
          if($img->alt()->isNotEmpty()) {
            $alt_img = $img->alt()->html();
          }
          else {
            $alt_img = "Fotografia rappresentativa dell'evento " . page()->title()->html();
          }
        ?>

        <img src="<?php echo $img->url() ?>" alt="<?php echo $alt_img ?>">
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
          <?php echo page()->long()->kt()->html() ?>
        </div>
      </div>
    </div>

  </main>
  
<?php snippet('footer') ?>