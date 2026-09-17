<!-- ABOUT US -->
<?php

$slug_home = 'nosotros';
$page = get_page_by_path( $slug_home, OBJECT, 'page' );

?>

  <section class="about reveal-init">
    <div class="container">
      <div class="about-inner">
        <div class="about-text">
          <h2>Sobre Nosotros</h2>
          <p>Somos una tienda familiar dedicada a traer los mejores productos naturales a tu mesa. Creemos en el poder de lo simple: aceites, conservas, miel y alimentos que ayudan a recuperar tu salud</p>
          <p>Cada producto es elegido a mano, trabajando directamente con pequeños productores para garantizar frescura, pureza y un comercio verdaderamente justo.</p>

          <?php 
          
          if( $page ) {
            $url = get_permalink( $page->ID);
          }

          ?>

          <a href="<?php echo $url; ?>" class="btn btn-primary">Conoce Más!</a>
        </div>
        <div class="about-art" aria-hidden="true">🌿🍯💜</div>
      </div>
    </div>
  </section>