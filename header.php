<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iptvsmart
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	 <!-- Start Navbar Area -->
	 <div class="navbar-area">
		<div class="pakap-responsive-nav">
            <div class="container">
                <div class="pakap-responsive-menu mean-container">
					<div class="mean-bar">
						<a href="#nav" class="meanmenu-reveal" style="right:0;left:auto;">
							<span></span>
							<span></span>
							<span></span>
						</a>
						<nav class="mean-nav">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
										'container' 	 => false,
										'menu_class'     => 'navbar-nav',
										'add_li_class'   => 'nav-item'
									)
								);
							?>
						</nav>
					</div>
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>">
							<?php
								echo wp_get_attachment_image( 
								get_field('header_logo', 'options'), 
								array('278', '92'),
								"",
								array( "class" => "img-fluid", 'style' => "width: 60%;" ) ); 
							?>
						</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="pakap-nav">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
						<?php
							echo wp_get_attachment_image( 
							get_field('header_logo', 'options'), 
							array('278', '92'),
							"",
							array( "class" => "img-fluid", 'style' => "width: 80%;" ) ); 
						?>
					</a>
                    <div class="collapse navbar-collapse mean-menu">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'container' 	 => false,
									'menu_class'     => 'navbar-nav',
									'add_li_class'   => 'nav-item'
								)
							);
						?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->