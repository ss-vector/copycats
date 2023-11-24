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

                    <article class="float-end">

    									<h1 class="display-5 text-white fw-bold">Negocios El Triunfo - Lambayeque</h1>
    									<h2 class="display-6 text-light">Una comunidad local de negocios.</h2>
                      <button type="submit">Visitar</button>

    								</article>

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
        <div class="container">
          <div class="row">

            <div class="featured-box m-5">
              <h1>Material Eléctrico</h1>
              <p>Pedidos al <strong>978 861 145</strong> </p>

              <?php
                  if ( is_user_logged_in() ) {
                  global $current_user;
                  get_currentuserinfo();

                  echo '<ul id="mem" class="clearfix">
                              <li><a href="#">'. esc_html__( 'Inició sesión como: ', 'copycats' ) . '<strong>' . $current_user->display_name . '</strong></a></li>
                              <li><a href="#">Logout</a></li>
                          </ul>';
                  } else {
                  echo '<ul id="mem" class="clearfix">
                              <li><a href="#">Register</a></li>
                              <li><a href="#">Login</a></li>
                          </ul>';
                  }
              ?>

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
