<?php $siguiente_entrada = get_next_post(); ?>
<?php $entrada_anterior = get_previous_post(); ?>
<div class="contieneNotaAnterior">
    <?php if (!empty( $entrada_anterior )){ ?>
        <div class="tituloNotaAnterior">
            <a href="<?php echo get_permalink( $entrada_anterior->ID ); ?>" title="<?php echo $entrada_anterior->post_title; ?>" rel="prev">
               <img src="<?php bloginfo('template_url'); ?>/img/BTN NotaLargoAnterior.png" atl="<?php echo $entrada_anterior->post_title; ?>" title="<?php echo $entrada_anterior->post_title; ?>"/>
            </a>
        </div>
        <div class="imagenNotaAnterior">
            <a href="<?php echo get_permalink( $entrada_anterior->ID ); ?>" title="<?php echo $entrada_anterior->post_title; ?>" rel="prev">
                <?php echo get_the_post_thumbnail( $entrada_anterior->ID ); ?>
            </a>
            <div class="contieneResumenNotaAnterior">
            <div class="resumenNotaAnterior">
              <a href="<?php echo get_permalink( $entrada_anterior->ID ); ?>" title="<?php echo $entrada_anterior->post_title; ?>" rel="prev">
                <?php echo $entrada_anterior->post_title; ?>
              </a>
            </div> 
          </div>
        </div>
    <?php } ?>
</div>
<div class="contieneNotaSigiente">
    <?php if (!empty( $siguiente_entrada )){ ?>
        <div class="tituloNotaSiguiente">
            <a href="<?php echo get_permalink( $siguiente_entrada->ID ); ?>" title="<?php echo $siguiente_entrada->post_title; ?>" rel="next">
               <img src="<?php bloginfo('template_url'); ?>/img/BTN NotaLargoSiguiente.png" atl="<?php echo $siguiente_entrada->post_title; ?>" title="<?php echo $siguiente_entrada->post_title; ?>"/> 
            </a>
       </div>
       <div class="imagenNotaSiguiente">
           <a href="<?php echo get_permalink( $siguiente_entrada->ID ); ?>" title="<?php echo $siguiente_entrada->post_title; ?>" rel="next">
               <?php echo get_the_post_thumbnail( $siguiente_entrada->ID ); ?>
           </a>
          <div class="contieneResumenNotaSiguiente">
            <div class="resumenNotaSiguiente">
              <a href="<?php echo get_permalink( $siguiente_entrada->ID ); ?>" title="<?php echo $siguiente_entrada->post_title; ?>" rel="next">
                  <?php echo $siguiente_entrada->post_title; ?>
              </a>
            </div> 
       </div>
       </div>
    <?php } ?>
</div>