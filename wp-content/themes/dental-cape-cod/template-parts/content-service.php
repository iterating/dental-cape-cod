<?php
/**
 * Template part for displaying services
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('service-item'); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="service-thumbnail">
            <?php the_post_thumbnail('large'); ?>
        </div>
    <?php endif; ?>

    <div class="service-content">
        <header class="service-header">
            <?php
            if ( is_singular() ) :
                the_title( '<h1 class="service-title">', '</h1>' );
            else :
                the_title( '<h2 class="service-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;
            ?>
        </header>

        <div class="service-description">
            <?php
            if ( is_singular() ) :
                the_content();
            else :
                the_excerpt();
                ?>
                <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn-primary">Learn More</a>
            <?php endif; ?>
        </div>
    </div>
</article>
