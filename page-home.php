<?php
/**
 * Template Name: Home Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package iptvsmart
 */

get_header();
?>

<?php /*
  <!-- Start Gradient Banner Area -->
  <div class="gradient-banner-area" id="accueil" style="background: linear-gradient(279.99deg, #9F5FF1 -1.19%, #FF54B0 50.96%, #FF9F5A 99.95%);padding-top: 130px;">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-6 col-md-12">
                  <div class="gradient-banner-content">
                      <h1><?php echo esc_html( get_field('hb_title') ); ?></h1>
                      <p><?php echo esc_html( get_field('hb_description') ); ?></p>

                      <?php 
                        $button = get_field('hb_button');

                        if( is_array( $button ) ) :
                      ?>
                          <a href="<?php echo esc_url( $button['url'] ); ?>" class="default-btn" target="<?php echo esc_attr( $button['target'] ); ?>">
                            <?php echo esc_html( $button['title'] ); ?>
                          </a>
                      <?php
                        endif;
                      ?>
                  </div>
              </div>
              <div class="col-lg-6 col-md-12">
                  <div class="gradient-banner-image" data-aos="fade-up">
                      <?php
                          echo wp_get_attachment_image( 
                          get_field('hb_image'), 
                          array('650', '590'),
                          "",
                          array( "class" => "img-fluid", "style" => "border-radius: 35px;" ) ); 
                      ?>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Gradient Banner Area -->
  */ 
  
        $hb_video_poster = wp_get_attachment_image_src( 
        get_field('hb_video_poster'), 
        array('650', '590'),
        "",
        array( "class" => "img-fluid" ) ); 

    ?>

    <video autoplay muted loop id="myVideo" poster="<?php echo esc_attr( $hb_video_poster[0] ); ?>">
        <source src="<?php echo esc_url( get_field('hb_video') ); ?>" type="video/mp4">
    </video>



    <div class="hero-content pt-5" id="accueil">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 col-md-12">
                    <div class="position-relative">
                        <span style="left: -90px;top: 10px;">4K Live</span>
                        <h1><?php echo esc_html( get_field('hb_title') ); ?></h1>
                        <p><?php echo esc_html( get_field('hb_description') ); ?></p>
                        <?php 
                            $button = get_field('hb_button');

                            if( is_array( $button ) ) :
                        ?>
                            <a href="<?php echo esc_url( $button['url'] ); ?>" class="default-btn" target="<?php echo esc_attr( $button['target'] ); ?>">
                                <?php echo esc_html( $button['title'] ); ?>
                            </a>
                        <?php
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



  <!-- Start Partner Area -->
  <div class="partner-area ptb-100">
    <div class="container">
        <div class="partner-slides owl-carousel owl-theme">
        <?php
          if( have_rows('partner_logos') ) :
            while( have_rows('partner_logos') ) : the_row();
        ?>            
              <div class="partner-item">
                  <a href="#" class="d-block">
                    <?php
                      echo wp_get_attachment_image( 
                      get_sub_field('image'), 
                      'medium',
                      "",
                      array( "class" => "img-fluid") ); 
                    ?>
                  </a>
              </div>
        <?php
            endwhile;
          endif;
        ?>
        </div>
    </div>
  </div>
  <!-- End Partner Area -->


  <!-- Start Features Area -->
  <div class="features-area pb-75" id="iptvsmarters">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-6 col-md-12">
                  <div class="features-content">
                      <h2><?php echo esc_html( get_field('service_title') ); ?></h2>
                      <ul class="features-list">
                      <?php
                        if( have_rows('service_details') ) : $i = 1;
                          while( have_rows('service_details') ) : the_row();
                      ?>   
                            <li>
                                <div class="icon <?php echo 'bg' . $i; ?>">
                                    <i class="ri-<?php echo esc_attr( get_sub_field('icon') ); ?>"></i>
                                </div>
                                <h3><?php echo esc_html( get_sub_field('title') ); ?></h3>
                                <p><?php echo esc_html( get_sub_field('description') ); ?></p>
                            </li>
                      <?php
                          $i++;
                          if( $i > 3 ) {
                            $i = 1;
                          }
                          endwhile;
                        endif;
                      ?>
                      </ul>

                      <?php 
                        $button = get_field('service_button');

                        if( is_array( $button ) ) :
                      ?>
                          <div class="btn-box">
                              <a href="<?php echo esc_url( $button['url'] ); ?>" class="default-btn" target="<?php echo esc_attr( $button['target'] ); ?>">
                                <?php echo esc_html( $button['title'] ); ?>
                              </a>
                          </div>
                      <?php
                        endif;
                      ?>
                  </div>
              </div>
              <div class="col-lg-6 col-md-12">
                  <div class="row align-items-center appsSect" style="text-align: center;margin: 30px 0px;">
                  <?php
                    if( have_rows('list_items') ) :
                      while( have_rows('list_items') ) : the_row();
                  ?>
                        <div role="listitem" class="supported-devices--list-item apps col-xs-6 col-md-3 col-lg-3">
                            <a>
                                <?php
                                  echo wp_get_attachment_image( 
                                  get_sub_field('image'), 
                                  array('72', '72'),
                                  "",
                                  array( "class" => "img-fluid") ); 
                                ?>
                                <p class="supported-devices--device-title"><?php echo esc_html( get_sub_field('title') ); ?></p>
                                <p class="supported-devices--device-subtitle"><?php echo esc_html( get_sub_field('tagline') ); ?></p>
                            </a>
                        </div>
                  <?php
                      endwhile;
                    endif;
                  ?> 
                  </div>
              </div>
          </div>
      </div>
      <div class="bg-shape1"><img src="<?php echo bloginfo('template_directory'); ?>/assets/img/shape/bg-shape1.png" alt="bg-shape"></div>
  </div>
  <!-- End Features Area -->
    
  
  <!-- Start Features Area -->
  <div class="features-area pt-100 pb-75" style="padding-top: 0px;">
      <div class="container">
          <div class="row justify-content-center">
          <?php
            if( have_rows('service_cards') ) : $i = 1;
              while( have_rows('service_cards') ) : the_row();
          ?> 
                <div class="col-xl-3 col-lg-4 col-sm-6 col-md-6">
                    <div class="single-features-box" style="min-height: 100%;">
                        <div class="icon <?php echo 'bg' . $i; ?>">
                            <i class="ri-<?php echo esc_html( get_sub_field('icon') ); ?>"></i>
                        </div>
                        <h3><?php echo esc_html( get_sub_field('title') ); ?></h3>
                        <p><?php echo esc_html( get_sub_field('description') ); ?></p>
                    </div>
                </div>
          <?php
              $i++;
              if( $i > 3 ) {
                $i = 1;
              }
              endwhile;
            endif;
          ?> 
          </div>

          <?php 
            $button = get_field('service_button');

            if( is_array( $button ) ) :
          ?>
              <div class="btn-box" style="text-align: center; margin-top: 40px;">
                  <a href="<?php echo esc_url( $button['url'] ); ?>" class="default-btn" target="<?php echo esc_attr( $button['target'] ); ?>">
                    <?php echo esc_html( $button['title'] ); ?>
                  </a>
              </div>
          <?php
            endif;
          ?>
      </div>
  </div>
  <!-- End Features Area -->


    <!-- Start Video Area -->
    <div class="video-area  pb-75">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 col-md-12">
                    <?php
                        echo wp_get_attachment_image( 
                        get_field('hb_image'), 
                        array('650', '590'),
                        "",
                        array( "class" => "img-fluid", "style" => "border-radius: 35px;" ) ); 
                    ?>
                </div>
            </div>
            <!-- <div class="video-box">   
                <img src="<?php// echo bloginfo('template_directory'); ?>/assets/img/video/screen2.png" alt="video-bg1">
                <a href="<?php// echo bloginfo('template_directory'); ?>/assets/img/video/promo.mp4" class="video-btn popup-video"><i class="ri-play-line"></i></a>
            </div> -->
        </div>
    </div>
    <!-- End Video Area -->


    <!-- Start Screenshots Area -->
    <div class="screenshots-area ptb-100" style="background: linear-gradient(279.99deg, #9F5FF1 -1.19%, #FF54B0 50.96%, #FF9F5A 99.95%);">
        <div class="container">
            <div class="section-title" style="max-width: 100%;">
                <h2 style="color: white;"><?php echo esc_html( get_field('ms_title') ); ?></h2>
            </div>
            <div class="screenshots-slides owl-carousel owl-theme">
            <?php
                if( have_rows('movies_slider') ) :
                    while( have_rows('movies_slider') ) : the_row();
            ?>
                        <div class="single-screenshot-item">
                            <?php
                                echo wp_get_attachment_image( 
                                get_sub_field('image'), 
                                array('240', '245'),
                                "",
                                array( "class" => "img-fluid") ); 
                            ?>
                        </div>
            <?php
                    endwhile;
                endif;
            ?> 
            </div>
        </div>
    </div>
    <!-- End Screenshots Area -->

    
    <!-- Start Features Area -->
    <div class="features-area ptb-100 bg-F7F7FF" id="channelslist">
        <div class="container">
            <div class="section-title">

                <h2>La liste Des Chainess De Notre Abonnement IPTV</h2>
                <span class="sub-title">Cherchez votre Pays et Chaines Préférées</span>

            </div>

            <div class="row">
                <div class="col">
                    <div class="filterBox">
                        <div class="input-search">
                            <span><i class="fa-solid fa-magnifying-glass"></i></span>
                            <input type="text" name="s" class="search-channel" placeholder="Search..." />
                        </div>
                        <div class="categories-box">
                            <ul>
                                <li data-continent='europe'><a href="javascript:void(0);" class="selected">EUROPE</a></li>
                                <li data-continent='usa'><a href="javascript:void(0);">USA</a></li>
                                <li data-continent='canada'><a href="javascript:void(0);">CANADA</a></li>
                                <li data-continent='scandinavia'><a href="javascript:void(0);">SCANDINAVIA</a></li>
                                <li data-continent='arabic'><a href="javascript:void(0);">ARABIC</a></li>
                                <li data-continent='latino'><a href="javascript:void(0);">LATINO</a></li>
                                <li data-continent='africa'><a href="javascript:void(0);">AFRICA</a></li>
                                <li data-continent='asia'><a href="javascript:void(0);">ASIA</a></li>
                                <li data-continent='australia'><a href="javascript:void(0);">AUSTARLIA</a></li>
                                <li data-continent='radio'><a href="javascript:void(0);">RADIO</a></li>
                                <li data-continent='others'><a href="javascript:void(0);">OTHERS</a></li>
                            </ul>
                        </div>
                        <div class="row box-data">
                            <div class="col col-md-3 col-xs-12">
                                <div class="toggle-countries">
                                    <span id="active-country">France</span>
                                    <span id="toggleSpan"><i class="fa-solid fa-caret-up"></i></span>
                                </div>
                                <div class="filter-countries-box">
                                    <div class="country selected " data-country='europe'>France</div>
                                    <div class="country " data-country='europe'>United Kingdom</div>
                                    <div class="country " data-country='europe'>Belgium</div>
                                    <div class="country " data-country='europe'>Spain</div>
                                    <div class="country " data-country='europe'>Germany</div>
                                    <div class="country " data-country='europe'>Netherlands</div>
                                    <div class="country " data-country='europe'>Portugal</div>
                                    <div class="country " data-country='europe'>Ireland</div>
                                    <div class="country " data-country='europe'>Italy</div>
                                    <div class="country " data-country='europe'>Turkey</div>
                                    <div class="country " data-country='europe'>Albania</div>
                                    <div class="country " data-country='europe'>EXYU</div>
                                    <div class="country " data-country='europe'>Hebrew</div>
                                    <div class="country " data-country='europe'>Armenia</div>
                                    <div class="country " data-country='europe'>Austria</div>
                                    <div class="country " data-country='europe'>Bosnia</div>
                                    <div class="country " data-country='europe'>Bulgaria</div>
                                    <div class="country " data-country='europe'>Croatia</div>
                                    <div class="country " data-country='europe'>Cyprus</div>
                                    <div class="country " data-country='europe'>Czech</div>
                                    <div class="country " data-country='europe'>Denmark</div>
                                    <div class="country " data-country='europe'>Estonia</div>
                                    <div class="country " data-country='europe'>Finland</div>
                                    <div class="country " data-country='europe'>Greece</div>
                                    <div class="country " data-country='europe'>Latvia</div>
                                    <div class="country " data-country='europe'>Lithuania</div>
                                    <div class="country " data-country='europe'>Macedonia</div>
                                    <div class="country " data-country='europe'>Malta</div>
                                    <div class="country " data-country='europe'>Montenegro</div>
                                    <div class="country " data-country='europe'>Norway</div>
                                    <div class="country " data-country='europe'>Poland</div>
                                    <div class="country " data-country='europe'>Romania</div>
                                    <div class="country " data-country='europe'>Russia</div>
                                    <div class="country " data-country='europe'>Serbia</div>
                                    <div class="country " data-country='europe'>Slovakia</div>
                                    <div class="country " data-country='europe'>Slovenia</div>
                                    <div class="country " data-country='europe'>Sweden</div>
                                    <div class="country " data-country='europe'>Switzerland</div>
                                    <div class="country " data-country='europe'>Ukraine</div>
                                    <div class="country " data-country='europe'>Hungarie</div>
                                    <div class="country " data-country='europe'>Kurdish</div>
                                    <div class="country d-none" data-country='usa'>All</div>
                                    <div class="country d-none" data-country='usa'>GENERALE</div>
                                    <div class="country d-none" data-country='usa'>SPORT</div>
                                    <div class="country d-none" data-country='usa'>PAID</div>
                                    <div class="country d-none" data-country='canada'>ALL</div>
                                    <div class="country d-none" data-country='scandinavia'>Sweden</div>
                                    <div class="country d-none" data-country='scandinavia'>Denmark</div>
                                    <div class="country d-none" data-country='scandinavia'>Finland</div>
                                    <div class="country d-none" data-country='scandinavia'>Greece</div>
                                    <div class="country d-none" data-country='scandinavia'>Norway</div>
                                    <div class="country d-none" data-country='scandinavia'>Albania</div>
                                    <div class="country d-none" data-country='arabic'>Arabic</div>
                                    <div class="country d-none" data-country='arabic'>SPORT</div>
                                    <div class="country d-none" data-country='arabic'>CINEMA</div>
                                    <div class="country d-none" data-country='africa'>GENERAL</div>
                                    <div class="country d-none" data-country='africa'>All</div>
                                    <div class="country d-none" data-country='latino'>CINEMA</div>
                                    <div class="country d-none" data-country='latino'>GENERAL</div>
                                    <div class="country d-none" data-country='latino'>All</div>
                                    <div class="country d-none" data-country='asia'>Afghanistan</div>
                                    <div class="country d-none" data-country='asia'>Azerbaijan</div>
                                    <div class="country d-none" data-country='asia'>Bangladesh</div>
                                    <div class="country d-none" data-country='asia'>English</div>
                                    <div class="country d-none" data-country='asia'>Hindi</div>
                                    <div class="country d-none" data-country='asia'>India</div>
                                    <div class="country d-none" data-country='asia'>Pakistan Europa</div>
                                    <div class="country d-none" data-country='asia'>Indonesia</div>
                                    <div class="country d-none" data-country='asia'>China</div>
                                    <div class="country d-none" data-country='asia'>Malaysia</div>
                                    <div class="country d-none" data-country='asia'>Indonesia</div>
                                    <div class="country d-none" data-country='asia'>Iran</div>
                                    <div class="country d-none" data-country='asia'>Japan</div>
                                    <div class="country d-none" data-country='asia'>Thailand</div>
                                    <div class="country d-none" data-country='asia'>Taiwan</div>
                                    <div class="country d-none" data-country='asia'>South Korea</div>
                                    <div class="country d-none" data-country='asia'>Vietnam</div>
                                    <div class="country d-none" data-country='asia'>Philippines</div>
                                    <div class="country d-none" data-country='australia'>GENERAL</div>
                                    <div class="country d-none" data-country='radio'>GENERAL</div>
                                    <div class="country d-none" data-country='others'>FORMULA 1</div>
                                    <div class="country d-none" data-country='others'>HORSE</div>
                                    <div class="country d-none" data-country='others'>SURINAME</div>
                                    <div class="country d-none" data-country='others'>TVM</div>

                                </div>
                            </div>
                            <div class="col col-md-9 col-xs-12">
                                <div class="chaineShow row">
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">SPORT - HEVC</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT 1 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT 2 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 3 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 4 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 5 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 6 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 7 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 8 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 9 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 10 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 11 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 12 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 13 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 14 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 15 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS 1 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS 2 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS 3 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS MAX 4 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS MAX 5 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS MAX 6 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS MAX 7 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS MAX 8 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS MAX 9 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TRACE SPORT STARS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FOOT+ HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">INFOSPORT+ HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EQUIPE 21 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EUROSPORTS 1 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EUROSPORTS 2 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EQUIDIA HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AUTOMOTO HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">GOLF+ HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">GOLF CHANNEL HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TELECLUB ZOOM HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MULTISPORTS 1 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MULTISPORTS 2 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MULTISPORTS 3 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MULTISPORTS 4 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MULTISPORTS 5 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MULTISPORTS 6HD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">SPORTS - HD</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ SPORTS HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ SPORTS SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ PREMIER LEAGUE HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ PREMIER LEAGUE SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ MOTOGP HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ FORMULE1 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ TOP14 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT 1 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT 1 HD [Backup]</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT 1 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT 2 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT 2 HD [Backup]</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT 2 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 3 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 3 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 4 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 4 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 5 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 5 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 6 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 6 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 7 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 7 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 8 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 8 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 9 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 9 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 10 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 10 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 11 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 11 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 12 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 12 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 13 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 13 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 14 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 14 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 15 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC SPORT LIVE 15 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS 1 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS 1 HD [Backup]</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS 1 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS 2 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS 2 HD [Backup]</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS 2 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS 3 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS 3 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS MAX 4 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS MAX 5 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS MAX 6 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS MAX 7 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS MAX 8 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BEIN SPORTS MAX 9 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TRACE SPORT STARS HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TRACE SPORT STARS SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FOOT+ HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FOOT+ SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">INFOSPORT+ HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">INFOSPORT+ SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EQUIPE 21 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EQUIPE 21 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EUROSPORTS 1 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EUROSPORTS 1 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EUROSPORTS 2 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EUROSPORTS 2 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EQUIDA HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EQUIDA SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AUTOMOTO HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AUTOMOTO SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">GOLF CHANNEL HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">GOLF CHANNEL SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">GOLF+ HD  ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">GOLF+ SD </a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TELECLUB ZOOM HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TELECLUB ZOOM SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MULTISPORT 1 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MULTISPORT 1 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MULTISPORT 2 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MULTISPORT 2 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MULTISPORT 3 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MULTISPORT 3 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MULTISPORT 4 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MULTISPORT 4 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MULTISPORT 5 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MULTISPORT 5 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MULTISPORT 6 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MULTISPORT 6 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EUROSPORT 360 1 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EUROSPORT 360 2 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EUROSPORT 360 3 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EUROSPORT 360 4 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EUROSPORT 360 5 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EUROSPORT 360 6 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EUROSPORT 360 7 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EUROSPORT 360 8 HD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">AMAZON - HD</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">#### AMAZON HD ####</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME MULTIPLEX HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 1 HD </a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 2 HD </a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 3 HD </a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 4 HD </a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 5 HD </a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 6 HD </a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 7 HD </a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 8 HD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">AMAZON - SD</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">#### AMAZON SD ####</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 1 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 2 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 3 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 4 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 5 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 6 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 7 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 8 SD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">AMAZON - 4K</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">#### AMAZON ####</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 1 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 2 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 3 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AMAZON PRIME VIDEO 4 HD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">TNT - HEVC</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TF1 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE 2 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE 3 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE 3 NOA HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE 4 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE 5 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">M6 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TFX HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TF1 SERIES FILMS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">C8 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">C9 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">W9 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NRJ 12 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CSTAR HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TMC HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">SYFY HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">13EME RUE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">E! HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">6TER HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TEVA HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RTL 9 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RTS UN HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RTS DEUX HD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">CANAL+ - HEVC</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ CINEMA HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ DECALE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ SERIES HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ SPORT HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ PREMIER LEAGUE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ MOTOGP HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ FORMULE 1 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ TOP14 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ KIDS HD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">CINEMA - HEVC</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CINE+ PREMIER HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CINE+ FRISSON HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CINE+ EMOTION HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CINE+ FAMIZ HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CINE+ CLUB HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CINE+ CLASSIC HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">OCS MAX HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">OCS CITY HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">OCS CHOC HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">OCS GEANTS HD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">DIVERTISSEMENT - HEVC</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ALTICE STUDIO HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">COMEDY CENTRAL HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">WARNER TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NOVELAS TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">POLAR+ HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CRIME DISTRICT HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PARAMOUNT CHANNEL HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PARAMOUNT DECALE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ARTE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC STORY HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CHERIE 25 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">IDF 1 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ACTION HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TCM CINEMA HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">COMEDIE+ HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">OLYMPIA TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AB1 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AB3 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">SERIE CLUB HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PARIS PREMIERE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TV BREIZH HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MY CUISINE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">VICELAND HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BET HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ROUGE TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MUSEUM HD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">AFRICAINES - HEVC</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NOLLYWOOD TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NOLLYWOOD EPIC HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">A+ HD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">INFOS - HEVC</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">LA CHAINE METEO HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">C NEWS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE INFO HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL NEWS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BFM HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BFM BUSINESS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BFM PARIS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EURONEWS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">LCI HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">LCP HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TV5 MONDE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE 24 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">I24 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">KTO HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RT FRANCE HD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">DECOUVERTE - HEVC</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PLANETE+ HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PLANETE+ A&E HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PLANETE+ CI HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NATIONAL GEO HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NATIONAL GEO WILD HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISCOVERY CHANNEL HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISCOVERY SCIENCE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISCOVERY ID HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISCOVERY FAMILY HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISCOVERY INVESTIGATION HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">M6 INTERNATIONAL HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TREK HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">HISTOIRE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TOUTE L HISTOIRE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">SEASONS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">SCIENCE ET VIE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC DECOUVERTE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">USHUAIA TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ANIMAUX HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CHASSE ET PECHE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TV8 MONT-BLANC HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NAUTICAL CHANNEL HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MY ZEN NATURE HD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">ENFANCE - HEVC</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BABY TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PIWI+ HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TIJI HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TELETOON+ HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TELETOON+ 1 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISNEY CHANNEL HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISNEY CHANNEL +1 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISNEY PLUS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISNEY JUNIOR HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NICKELODEON JUNIOR HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NICKELODEON HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NICKELODEON +1 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NICKELODEON 4TEEN HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TOONAMI HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BOOMERANG HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BOING HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CARTOON NETWORK HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">GULLI HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL J HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MANGAS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">J-ONE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">GAME ONE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">GAME ONE +1 HD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">MUSIQUE - HEVC</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CLIQUE.TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TRACE URBAN HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MELODY HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">M6 MUSIC HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NRJ HITS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MCM HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MCM TOP HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MTV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MTV DANCE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MTV HITS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RFM TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ONE TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MEZZO HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MEZZO LIVE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TRACE AFRICA HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TRACE TROPICAL HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TRACE GOSPEL HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">GENERATION TV HD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">AUTRES - HEVC</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">LFM TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">LEMAN BLEU HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BOOSTER TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">VIAGRANDPARIS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL 31 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL 8 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL 9 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">THE SWIZZ HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">OLTV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">A LA CARTE 1 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">A LA CARTE 3 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">A LA CARTE 4 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">A LA CARTE 5 HD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">REGIONALES</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TF1 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TF1 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE 2 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE 2 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE 3 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE 3 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE 3 NOA HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE 3 SD NOA</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE 4 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE 4 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE 5 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE 5 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">M6 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">M6 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TFX HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TFX SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TF1 SERIES FILMS HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TF1 SERIES FILMS SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL 8 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL 8 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL 9 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL 9 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">W9 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">W9 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NRJ12 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NRJ12 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CSTAR HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CSTAR SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TMC HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TMC SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">SYFY HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">SYFY SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">13EME RUE HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">13EME RUE SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">6TER HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">6TER SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">E! HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">E! SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TEVA HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TEVA SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">LEMAN BLEU HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">LEMAN BLEU SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ROUGE TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ROUGE TV SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RTL9 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RTL9 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RTS UN HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RTS UN SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RTS DEUX HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RTS DEUX SD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">DIVERTISSEMENT</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">COMEDY CENTRAL HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">COMEDY CENTRAL SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">WARNER TV HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">WARNER TV SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NOVELAS TV HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NOVELAS TV SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">POLAR+ HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">POLAR+ SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ARTE HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ARTE SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC STORY HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC STORY SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CHERIE 25 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CHERIE 25 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">COMEDIE+ HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">COMEDIE+ SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">OLYMPIA TV HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">OLYMPIA TV SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AB1 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AB1 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AB3 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">AB3 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PARIS PREMIERE HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PARIS PREMIERE SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TV BREIZH HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TV BREIZH SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MY CUISINE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MY CUISINE SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">VICELAND TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">VICELAND TV SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BET HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BET SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MTV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MTV SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">THE MUSEUM CHANNEL HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">THE MUSEUM CHANNEL SD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">INFOS</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">LA CHAINE METEO HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">LA CHAINE METEO SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CNEWS HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CNEWS SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE INFO HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE INFO SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL NEWS HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL NEWS SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BFM HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BFM SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BFM BUSINESS HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BFM BUSINESS SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EURONEWS HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">EURONEWS SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">LCI HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">LCI SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">LCP HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">LCP SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TV5 MONDE HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TV5 MONDE SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE 24 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FRANCE 24 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">I24 NEWS HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">I24 NEWS SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BOOSTER TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BOOSTER TV SD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">MUSIQUE</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CLIQUE.TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CLIQUE.TV SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TRACE URBAN HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TRACE URBAN SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MELODY HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MELODY SD </a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">M6 MUSIC HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">M6 MUSIC SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NRJ HITS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NRJ HITS SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MCM HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MCM SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MCM TOP HD </a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MCM TOP SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MTV HITS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MTV HITS SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RFM TV HD </a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RFM TV SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ONE TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ONE TV SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MEZZO HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MEZZO SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MEZZO LIVE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MEZZO LIVE SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TRACE AFRICA HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">GENERATION TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">GENERATION TV SD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">AUTRES</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BFM PARIS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BFM PARIS SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">VIAGRANDPARIS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">VIAGRANDPARIS SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL 31 HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL 31 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">LFM TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">LFM TV SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TVM3 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TVM3 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">IDF 1 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">IDF 1 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">THE SWIZZ HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">THE SWIZZ SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">OLTV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NOLLYWOOD TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">A+</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">D5TV HD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">CANAL+ - HD</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ CINEMA HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ CINEMA SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ DECALE HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ DECALE SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ SERIES HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ SERIES SD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">CINEMA - HD</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CINE+ PREMIER HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CINE+ PREMIER SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CINE+ FRISSON HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CINE+ FRISSON SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CINE+ EMOTION HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CINE+ EMOTION SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CINE+ FAMIZ HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CINE+ FAMIZ SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CINE+ CLUB HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CINE+ CLUB SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CINE+ CLASSIC HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CINE+ CLASSIC SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">OCS MAX HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">OCS MAX SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">OCS CITY HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">OCS CITY SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">OCS CHOC HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">OCS CHOC SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">OCS GEANTS HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">OCS GEANTS SD </a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">SERIE CLUB HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">SERIE CLUB SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PARAMOUNT DECALE HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PARAMOUNT DECALE SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ALTICE STUDIOS HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ALTICE STUDIOS SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CRIME DISTRICT HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CRIME DISTRICT SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PARAMOUNT CHANNEL HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PARAMOUNT CHANNEL SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ACTION HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ACTION SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TCM CINEMA HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TCM CINEMA SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ZEE MAGIC SD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">DECOUVERTE - HD</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PLANETE+ HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PLANETE+ SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PLANET A&E HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PLANETE+ A&E SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PLANETE+ CI HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PLANETE+ CI SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NATIONAL GEO HD </a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NATIONL GEO SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NATIONL GEO WILD HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NATIONAL GEO WILD SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISCOVERY CHANNEL HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISCOVERY CHANNEL SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISCOVERY SCIENCE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISCOVERY SCIENCE SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISCOVERY ID HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISCOVERY ID SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISCOVERY FAMILY HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISCOVERY FAMILY SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISCOVERY INVESTIGATION HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISCOVERY INVESTIGATION SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">M6 INTERNATIONAL HD ◉</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">M6 INTERNATIONAL SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TREK HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TREK SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">HISTOIRE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">HISTOIRE SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TOUTE L HISTOIRE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TOUTE L HISTOIRE SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">SEASON HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">SEASON SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">SCIENCE ET VIE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">SCIENCE ET VIE SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC DECOUVERTE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">RMC DECOUVERTE SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">USHUAIA TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">USHUAIA TV SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ANIMAUX HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">ANIMAUX SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CHASSE ET PECHE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CHASSE ET PECHE SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TV8 MONT-BLANC HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TV8 MONT-BLANC SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NAUTICAL CHANNEL HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NAUTICAL CHANNEL SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MY ZEN NATURE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MY ZEN NATURE SD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">JEUNESSE TV - HD</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ KIDS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL+ KIDS SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BABY TV HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BABY TV SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PIWI+ HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">PIWI+ SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TIJI HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TIJI SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TELETOON+ HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TELETOON+ SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TELETOON+ 1 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TELETOON+ 1 SD </a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISNEY CHANNEL HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISNEY CHANNEL SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISNEY CHANNEL+1 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISNEY CHANNEL+1 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TOONAMI HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">TOONAMI SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BOOMERANG HD </a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BOOMERANG SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BOING HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">BOING SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CARTOON NETWORK HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CARTOON NETWORK SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">GULLI HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">GULLI SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL J HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">CANAL J SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISNEY JUNIOR HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISNEY JUNIOR SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NICKELODEON JUNIOR HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NICKELODEON JUNIOR SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NICKELODEON HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NICKELODEON SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NICKELODEON+ HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NICKELODEON+ SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NICKELODEON 4 TEEN HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">NICKELODEON 4 TEEN SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MANGAS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">MANGAS SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">J-ONE HD </a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">J-ONE SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">GAME ONE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">GAME ONE SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">GAME ONE +1 HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">GAME ONE +1 SD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISNEY PLUS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">DISNEY PLUS SD</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">FLIX MUSIC</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MUSIC FRENCH</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MUSIC DANCE</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MUSIC AFRO</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MUSIC HIT</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MUSIC RAP</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MUSIC POP</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MUSIC MIX</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MUSIC DEEP HOUSE</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">FLIX KIDS</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS TOM AND JERRY</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS THE PINK PANTHER</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS TELETUBBIES</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS SIMBA LE ROI LION</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS THE DALTONS</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS TEEN TITANS</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS BEN 10</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS GUMBALL</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS APPLE AND ONION</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS WE BARE BEARS</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS PYJAMASQUES</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS ZIG AND SHARKO</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS OGGY AND CAFARD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS SCOOBY-DOO</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS CAILLOU</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS THE SMURFS</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS PEPPA PIG</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS COCOMELON</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX KIDS SHAUN THE SHEEP</a>
                                        </div>

                                    </div>
                                    <div class="col col-md-12 col-xs-12 channel-country">
                                        <a href="#" class="sign">FLIX MOVIES</a>
                                    </div>
                                    <div class="row allchannels">
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES ACTION HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES CHRISTMAS</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES DRAMA HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES ROMANCE HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES COMEDY</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES HORROR HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES CRIME HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES WESTERN HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES AVENTURE</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES HISTORIQUE</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES DOCUMENTAIRE</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES ANIMATION HD</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES JASON STATHAM</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES ANGELINA JOLIE</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES TOM CRUISE</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES MORGAN FREEMAN</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES JACKIE CHAN</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES VAN DAMME</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES JOHN TRAVOLTA</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES NICOLAS CAGE</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES MEL GIBSON</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES ROBERT DE NIRO</a>
                                        </div>
                                        <div class="col col-md-4 col-xs-12">
                                            <a href="#">FLIX MOVIES JIM CARREY</a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->



    <!-- Start Pricing Area -->
    <div class="pricing-area bg-gradient-color ptb-100" id="price">
        <div class="container">
            <div class="pricing-tabs">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-monthly" role="tabpanel">
                                <div class="row">
                                <?php
                                    if( have_rows('pricing') ) :
                                        while( have_rows('pricing') ) : the_row();
                                ?>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="single-pricing-table">
                                                    <div class="title">
                                                        <h3><?php echo esc_html( get_sub_field('title') ); ?></h3>
                                                    </div>
                                                    <!-- <span class="popular">Le plus populaire</span> -->
                                                    <div class="price">
                                                        <?php echo get_sub_field('price'); ?>
                                                    </div>
                                                    <a href="#" class="default-btn">Abonnez-vous</a>
                                                    <ul class="features-list">
                                                    <?php
                                                        if( have_rows('feature_list') ) :
                                                            while( have_rows('feature_list') ) : the_row();
                                                    ?>
                                                                <li><i class="ri-check-line"></i><?php echo esc_html( get_sub_field('title') ); ?></li>
                                                    <?php
                                                            endwhile;
                                                        endif;
                                                    ?>
                                                    </ul>
                                                </div>
                                            </div>
                                <?php
                                        endwhile;
                                    endif;
                                ?> 
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape7"><img src="<?php echo bloginfo('template_directory'); ?>/assets/img/shape/shape6.png" alt="shape"></div>
        <div class="shape8"><img src="<?php echo bloginfo('template_directory'); ?>/assets/img/shape/shape7.png" alt="shape"></div>
    </div>
    <!-- End Pricing Area -->


     <!-- Start Feedback Area -->
     <div class="feedback-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2><?php echo esc_html( get_field('testi_title') ); ?></h2>
                <span class="sub-title"><?php echo esc_html( get_field('testi_sub_title') ); ?></span>

                <span class="sub-title"><img src="<?php echo bloginfo('template_directory'); ?>/assets/img/stars-4.5.svg"  style="width: 50%;"></span>

            </div>
            <div class="feedback-slides owl-carousel owl-theme">
            <?php
                if( have_rows('testimonials') ) :
                    while( have_rows('testimonials') ) : the_row();
            ?>
                        <div class="single-feedback-box">
                            <div style="margin: 15px 0px;">
                                <?php
                                    echo wp_get_attachment_image( 
                                    get_sub_field('image'), 
                                    array('240', '245'),
                                    "",
                                    array( "class" => "img-fluid", "style" => "max-width: 100%;height: 350px;object-fit:cover;") ); 
                                ?>
                            </div>
                            <div class="client-info">
                                <div class="d-flex align-items-center">
                                    <div class="title" style="margin-left: 0px;">
                                        <h3><?php echo esc_html( get_sub_field('name') ); ?></h3>
                                        <span><?php echo esc_html( get_sub_field('country') ); ?></span>
                                    </div>
                                </div>

                            </div>
                            <p style="min-height: 202px;"><?php echo esc_html( get_sub_field('description') ); ?></p>
                            <div class="rating d-flex align-items-center justify-content-between">
                                <h5>Excellent</h5>
                                <div>
                                    <i class="ri-star-fill" style="color: #00b67a;"></i>
                                    <i class="ri-star-fill" style="color: #00b67a;"></i>
                                    <i class="ri-star-fill" style="color: #00b67a;"></i>
                                    <i class="ri-star-fill" style="color: #00b67a;"></i>
                                    <i class="ri-star-fill" style="color: #00b67a;"></i>
                                </div>
                            </div>
                        </div>
            <?php
                    endwhile;
                endif;
            ?> 
            </div>
        </div>
    </div>
    <!-- End Feedback Area -->



    <!-- Start Pricing Area -->
    <div class="pricing-area bg-gradient-color ptb-100" id="applications">
        <div class="container">
            <div class="page-title-content">
                <h2><?php echo esc_html( get_field('app_title') ); ?></h2>
                <span class="sub-title" style="color: white;"><?php echo esc_html( get_field('app_sub_title') ); ?></span>
            </div>

            <div class="row align-items-center appsSect" style="text-align: center;margin: 30px 0px;">
            <?php
                if( have_rows('applications') ) :
                    while( have_rows('applications') ) : the_row();
            ?>
                        <div role="listitem" class="supported-devices--list-item apps col-xs-6 col-md-3 col-lg-2">
                            <a>
                                <?php
                                    echo wp_get_attachment_image( 
                                    get_sub_field('image'), 
                                    array('240', '245'),
                                    "",
                                    array( "class" => "img-fluid") ); 
                                ?>
                                <p class="supported-devices--device-title"><?php echo esc_html( get_sub_field('title') ); ?></p>
                                <p class="supported-devices--device-subtitle"><?php echo esc_html( get_sub_field('tagline') ); ?></p>
                            </a>
                        </div>
            <?php
                    endwhile;
                endif;
            ?> 
            </div>
        </div>
    </div>
    <!-- End Pricing Area -->


<?php

get_footer();
