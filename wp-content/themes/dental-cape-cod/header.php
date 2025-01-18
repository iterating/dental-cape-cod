<?php
/**
 * The header for our theme
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
<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="site-branding">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="custom-logo-link" rel="home">
                    <img src="<?php echo get_theme_file_uri('images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" class="custom-logo">
                </a>
                <div class="header-contact">
                    <div class="contact-item">
                        <img src="<?php echo get_theme_file_uri('images/phone-icon.png'); ?>" alt="Phone" class="contact-icon">
                        <a href="tel:+1234567890">Call Us</a>
                    </div>
                    <div class="contact-item">
                        <img src="<?php echo get_theme_file_uri('images/email-icon.png'); ?>" alt="Email" class="contact-icon">
                        <a href="mailto:info@dentalcapecod.com">Email Us</a>
                    </div>
                </div>
            </div>

            <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>
            </nav>
        </div>
    </header>
