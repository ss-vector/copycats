<div id="featuredCarouselFade"  class="carousel slide carousel-fade">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <div class="cover-display main-banner">
      	<div class="primary-container">

      		<div class="container-fluid">

      			<div class="article-wrapper">

      				<div class="home fs-slider-content">
                <div class="container">
                  <div class="row">

                    <section class="float-end">

    									<h1 class="display-5 text-white fw-bold">Negocios El Triunfo - Lambayeque</h1>
    									<h2 class="display-6 text-light">Una comunidad local de negocios.</h2>
                      <button type="submit">Visitar</button>

    								</section>

                  </div>

                </div>

      				</div>

      			</div>

      		</div>
      	</div>
      </div>

    </div>

    <div class="carousel-item">
        <div class="cover-display hardware-banner">
          <div class="primary-container">
          		<div class="container-fluid">
                <div class="article-wrapper">
                  <div class="home fs-slider-content">
                    <div class="container">
                      <div class="row">

                <section class="float-end">
                  <h1 class="display-5 text-white fw-bold">Contruye con Nosotros</h1>
                  <p class="display-6 text-light">Conce nuestro catálogo de <stroing>Materiales para construcción</strong></p>
                  <button type="submit">Más información</button>

                <?php
                    if ( is_user_logged_in() ) {
                    global $current_user;
                    get_currentuserinfo();

                    echo '<ul id="mem" class="clearfix">
                                <li><a href="#">'. esc_html__( 'Inició sesión como: ', 'copycats' ) . '<strong>' . $current_user->display_name . '</strong></a></li>
                            </ul>';
                    } else {

                    }
                ?>

              </section>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#featuredCarouselFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#featuredCarouselFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>
</div>
