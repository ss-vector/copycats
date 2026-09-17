<?php
/**
 *
*/

if ( !function_exists( 'copycats_site_branding' ) ) {

    function copycats_site_branding() {
        ?>
        <div class="site-branding">
         <?php copycats_brand_logo(); ?>
        </div>
        <?php
    }
}
add_action( 'copycats_header', 'copycats_site_branding', 10 );

function copycats_brand_logo( $echo = true ) {
    if( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
        $logo = get_custom_logo();
        $html = is_home() ? '<span class="logo">' . $logo . '</span>': $logo;
    } else {
        $html = 'No logo defined';
    }

    if ( ! $echo ) {
        return $html;
    }

    echo $html;
}

    /* GOOGLE TAG MANAGER Inline script printed on the header */
    add_action( 'wp_head', 'copycats_google_tag_manager_script' );
    function copycats_google_tag_manager_script() {
    ?>
      <script>
          (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
          j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
          'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
          })(window,document,'script','dataLayer','GTM-TPLMMVL');
      </script>

    <?php
    }

    add_action( 'cc_tags_html', 'copycats_google_tag_manager_html' );
    function copycats_google_tag_manager_html() {
        ?>
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPLMMVL"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
        <?php
    }
