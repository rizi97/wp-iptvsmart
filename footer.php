<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iptvsmart
 */


 if ( ! is_page('thank-you') ) :

?>

    <!-- Start Page Title Area -->
    <div class="page-title-area " id="faq">
        <div class="container">
            <div class="page-title-content">
                <h2>Des Questions Sur Votre Abonnement IPTV </h2>

            </div>
        </div>
        <div class="divider"></div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="banner-shape1"><img src="<?php echo bloginfo('template_directory'); ?>/assets/img/shape/shape9.png" alt="image"></div>
    </div>
    <!-- End Page Title Area -->


    <!-- Start FAQ Area -->
    <div class="faq-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="faq-accordion accordion" id="faqAccordion">
                    <?php
                        if( have_rows('faqs') ) : $i = 0;
                            while( have_rows('faqs') ) : the_row();
                    ?>
                                <div class="accordion-item">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo esc_attr( $i ); ?>" aria-expanded="true" aria-controls="collapse<?php echo esc_attr( $i ); ?>">
                                        <?php echo esc_html( get_sub_field('title') ); ?>
                                    </button>
                                    <div id="collapse<?php echo esc_attr( $i ); ?>" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <?php echo get_sub_field('description'); ?>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            $i++;
                            endwhile;
                        endif;
                    ?>      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End FAQ Area -->


    <!-- Start Contact Info Area -->
    <div class="contact-info-area pb-100" id="contact">
        <div class="container">
            <div class="contact-info-inner">
                <h2 style="max-width: 100%;"><?php echo esc_html( get_field('footer_contact_headline', 'options') ); ?></h2>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-contact-info-box">
                            <div class="icon bg1">
                                <i class="ri-whatsapp-line"></i>
                            </div>
                            <h3><a href="https://api.whatsapp.com/send?phone=<?php echo get_field('phone_number', 'options'); ?>&amp;text=Bonjour%20IPTV%20Smarters!"><?php echo get_field('phone_number', 'options'); ?></a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-contact-info-box">
                            <div class="icon">
                                <i class="ri-mail-line"></i>
                            </div>
                     
                            <h3><a href="mailto: <?php echo get_field('email', 'options'); ?>"><span class="__cf_email__" ><?php echo get_field('email', 'options'); ?></span></a></h3>
                        </div>
                    </div>
                </div>
                <div class="lines">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Info Area -->

<?php endif; ?>


    <!-- Start Footer Area -->
    <div class="footer-area footer-style-two bg-black" id="#footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-footer-widget">
                        <a href="<?php echo home_url(); ?>" class="logo">
                            <?php
                                echo wp_get_attachment_image( 
                                get_field('header_logo', 'options'), 
                                array('180', '120'),
                                "",
                                array( "class" => "img-fluid") ); 
                            ?>
                        </a>

                        <p><?php echo esc_html( get_field('footer_logo_headline', 'options') ); ?></p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-footer-widget pl-2">
                        <h3>Contactez-nous</h3>
                        <ul class="links-list">
                            <li><a href="mailto: <?php echo get_field('email', 'options'); ?>"><i class="ri-mail-fill"></i>&nbsp;<?php echo get_field('email', 'options'); ?></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=<?php echo get_field('phone_number', 'options'); ?>&amp;text=Bonjour%20IPTV%20Smarters!"><i class="ri-whatsapp-line"></i>&nbsp;<?php echo get_field('phone_number', 'options'); ?></a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-footer-widget">
                        <a href="#" class="default-btn">Abonnez-vous maintenant</a>
                        <img src="<?php echo bloginfo('template_directory'); ?>/assets/img/paysecure.jpg" style="margin-top: 20px;max-width: 80%;">
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <p>Copyright
                    <script>
                        document.write(new Date().getFullYear())
                    </script> <strong><?php echo get_bloginfo('name'); ?> </strong>. All Rights Reserved</p>
            </div>
        </div>
    </div>
    <!-- End Footer Area -->

    <div class="go-top"><i class="ri-arrow-up-s-line"></i></div>    



<?php wp_footer(); ?>


</body>
</html>
