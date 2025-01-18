<?php
/**
 * The template for displaying the front page
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="hero-section" style="background-image: url('<?php echo get_theme_file_uri('wp-content/uploads/2025/01/Lighthusebg.jpg'); ?>');">
        <div class="container">
            <h1>For a Healthy Lifestyle!</h1>
            <p>Creating Vibrant Smiles</p>
            <a href="#" class="btn-primary">Meet The Team</a>
        </div>
    </section>

    <section class="services-section">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <img src="<?php echo get_theme_file_uri('wp-content/uploads/2025/01/Initial-Oral-Examination.png'); ?>" alt="Emergency Care" class="service-icon">
                    <h3>Emergency Care</h3>
                    <p>Simple toothaches can often be relieved by rinsing the mouth to clear it of debris and other matter. Sometimes, a toothache can be caused or aggravated by a piece of debris lodged between the tooth and another tooth.</p>
                    <a href="#" class="btn-primary">Learn More</a>
                </div>

                <div class="service-card">
                    <img src="<?php echo get_theme_file_uri('wp-content/uploads/2025/01/Veneers.png'); ?>" alt="Cosmetic Dentistry" class="service-icon">
                    <h3>Cosmetic Dentistry</h3>
                    <p>People choose esthetic dental procedures for various reasons, to repair a defect or just to improve their overall appearances. Whatever the reason is our ultimate goal is to help bring you a beautiful smile.</p>
                    <a href="#" class="btn-primary">Learn More</a>
                </div>

                <div class="service-card">
                    <img src="<?php echo get_theme_file_uri('wp-content/uploads/2025/01/Orthodontic-Care-Invisalign.png'); ?>" alt="Traditional Orthodontics" class="service-icon">
                    <h3>Traditional Orthodontics</h3>
                    <p>We offer a full range of orthodontic treatment for both children and adults. We offer options for banding such as Damon, Ceramic brackets etc.</p>
                    <a href="#" class="btn-primary">Learn More</a>
                </div>

                <div class="service-card">
                    <img src="<?php echo get_theme_file_uri('wp-content/uploads/2025/01/Invisalign.png'); ?>" alt="Invisalign" class="service-icon">
                    <h3>Invisalign</h3>
                    <p>Invisalign's® invisible, removable, and comfortable aligners will give you the beautiful straight teeth you've always wanted.</p>
                    <a href="#" class="btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="why-choose-us">
        <div class="container">
            <h2>Why Choose Us</h2>
            <div class="features-grid">
                <div class="feature">
                    <h3>Advanced Dentistry</h3>
                    <p>We offer top of the line dental care for people of all ages.</p>
                </div>
                <div class="feature">
                    <h3>High Quality Equipment</h3>
                    <p>With the help of cutting-edge technology, we provide a seamless experience during every visit.</p>
                </div>
                <div class="feature">
                    <h3>Caring Staff</h3>
                    <p>All members of our team are fully trained and highly skilled in their area of expertise.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
