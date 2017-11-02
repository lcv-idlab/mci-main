<?php snippet('header') ?>

  <main>

    <a href="<?php echo page('risorse')->url() ?>" class="link link-back"><span>Torna indietro</span></a>

    <h1 class="title-article"><?php echo ucfirst( page()->title()->html() ) ?></h1>

    <div class="resource-experience">


    <?php if( page()->movie()->isNotEmpty() ): ?>

      <h2 class="visuallyhidden">Video dell'evento</h2>

        <?php if( page()->alt_video()->isNotEmpty()) : ?>

          <div class="video" aria-label="<?php echo page()->alt_video() ?>">
        
            <iframe src="https://player.vimeo.com/video/<?php echo page()->movie() ?>" allowFullScreen></iframe>
    
          </div>

        <?php else: ?>

          <div class="video" aria-label="<?php echo "Video dell'evento " . page()->title()->html() ?>">
  
            <iframe src="https://player.vimeo.com/video/<?php echo page()->movie() ?>" allowFullScreen></iframe>
      
          </div>

        <?php endif ?>
        

    <?php else: ?>

      <?php if(page()->ext_link()->isNotEmpty()): ?>

        <a href="<?php echo page()->ext_link()->url() ?>">
        <img src="<?php echo page()->image(page()->main_image())->url() ?>" alt="<?php echo page()->image(page()->main_image())->alt()->html() ?>">
        </a>

      <?php else: ?>

        <?php if(page()->gallery()->isNotEmpty()): ?>

          <a href="<?php echo page()->url()?>/#gallery" alt="Galleria fotografica dell'evento">

          <img src="<?php echo page()->image(page()->main_image())->url() ?>" alt="<?php echo page()->image(page()->main_image())->alt()->html() ?>">

          </a>

        <?php else: ?>

          <img src="<?php echo page()->image(page()->main_image())->url() ?>" alt="<?php echo page()->image(page()->main_image())->alt()->html() ?>">

        <?php endif ?>

      <?php endif ?>

    <?php endif ?>

    </div>

    <div class="resource-experience-text">
      <div class="border-top">
        <div class="aside">
          <h3 id="partners">In collaborazione con</h3>
          <p><?php echo page()->partner()->html() ?></p>
          <h3 id="location">Data e luogo</h3>
          <p><?php echo page()->date('d.m.Y') ?>, <?php echo page()->location()->html() ?></p>

          <?php if(page()->ext_link()->isNotEmpty()): ?>
  
            <a href="<?php echo page()->ext_link()->url() ?>" id="ext_resource" title="<?php echo page()->title() ?>" class="button"><?php echo page()->ext_link_desc()->kt() ?></a>

          <?php endif ?>

          <?php if(page()->docs()->isNotEmpty()): ?>
            <?php foreach(page()->docs()->toStructure() as $doc): ?>
              <a href="<?php echo page()->document($doc->doc())->url() ?>" target="_blank" title="<?php echo $doc->doc_title() ?>" class="button button-download main-document"><?php echo $doc->doc_title() ?></a>
            <?php endforeach ?>
          <?php endif ?>

        </div>
        <div id="article">
          <h3 class="subtitle">Descrizione dell'evento</h3>
          <?php echo page()->long()->kt() ?>

          <!-- Audio recordings -->

          <?php if(page()->recordings()->isNotEmpty()): ?>
            <div id="audio_recordings">
            <ul id="artworks_list_audio">
            <?php foreach(page()->recordings()->toStructure() as $rec): ?>
              <li>
                <h4><?php echo $rec->title() ?></h4>
                <?php if($rec->caption()->isNotEmpty()): ?>
                  <?php echo $rec->caption()->kt() ?>
                <?php endif ?>
                <img src="<?php echo page()->image($rec->picture())->url() ?>">
                <p class="image_copyright"><?php echo $rec->copyright() ?></p>

                <?php if( $rec->audio()->isNotEmpty()): ?>

                  <ul class="audio_files">

                  <?php 
                    $filenames = $rec->audio()->split(',');
                    if(count($filenames) < 2) $files = array_pad($filenames, 2, '');
                    $files = call_user_func_array(array(page()->files(), 'find'), $filenames);
                  ?>
                  <?php foreach($files as $file): ?>
                    <li>
                      <?php if($file->alt()->isNotEmpty()): ?>
                        <h5><?php echo $file->alt()->html() ?></h5>
                      <?php endif ?>
                      <audio controls controlsList="nodownload">
                        <source src="<?php echo $file->url() ?>" type="audio/mp3" >
                      </audio>

                      <!--[if lt IE 9]>
 
                      <object id="myTuneObj" type="audio/x-mpeg" data="<?php echo $file->url() ?>" autoplay="false" height="45">
                        <param name="src" value="<?php echo $file->url() ?>" />
                        <param name="controller" value="true" />
                        <param name="autoplay" value="false" />
                        <param name="autostart" value="0" />
                      </object>
                     
                    <![endif]-->



                    </li>
                  <?php endforeach ?>

                  </ul>
                <?php endif ?>

              </li>
            <?php endforeach ?>
            </ul>
          </div>
          <?php endif ?>

        </div>
      </div>
    </div>

    <?php if(page()->gallery()->isNotEmpty()): ?>

    <?php echo js('assets/js/lightbox.js'); ?>

    <section class="resource-experience-gallery" id="gallery">
      <h2>Fotografie dell'evento</h2>

      
      <ul>
        <?php foreach(page()->gallery()->yaml() as $image): ?>
        <li>
          <figure>

          <?php 
            // retrieve the alt text from the image, if not present, use a generic one
            $img = $page->image($image);
            if($img->alt()->isNotEmpty()) {
              $alt_img = $img->alt()->html();
            }
            else {
              $alt_img = "Fotografia dell'evento " . page()->title()->html();
            }
          ?>

            <a href="<?php  echo $img? $img->url() : '' ?>" data-lightbox="prova1" data-title="<?php echo $alt_img ?>">
            <img src="<?php echo $img? $img->url() : '' ?>" alt="<?php echo $alt_img ?>" class="<?php e($img->dimensions()->portrait(), 'portrait', 'landscape'); ?>" />
        </a>
          </figure>
        </li>
        <?php endforeach ?>
        </ul>
      

    </section>

  <?php endif ?>

  </main>

<?php snippet('footer') ?>

