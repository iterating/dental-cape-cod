<?php
/**
 * The template for displaying the footer
 */
?>

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                    <img src="<?php echo get_theme_file_uri('images/footer-logo.png'); ?>" alt="Dental Associates Of Cape Cod" class="footer-logo">
                    <h3>Dental Associates Of Cape Cod</h3>
                    <p>We are committed to providing excellence in everything we do. Through exceptional care and state-of-the-art technology, we continue to create beautiful, healthy smiles for our patients.</p>
                </div>
                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <p>Phone: [Your Phone Number]</p>
                    <p>Email: [Your Email]</p>
                    <p>Address: [Your Address]</p>
                </div>
                <div class="footer-menu">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer',
                            'menu_id'        => 'footer-menu',
                        )
                    );
                    ?>
                </div>
            </div>
            <div class="site-info">
                <p>&copy; <?php echo date('Y'); ?> Dental Cape Cod. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
