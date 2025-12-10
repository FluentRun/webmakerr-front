<?php
/**
 * Template Name: Home Page
 * Template Post Type: page
 *
 * Routes the site front page through the Webmakerr Cart experience
 * while preserving all of its scripts, layouts, and interactions.
 */

$cart_template = locate_template('page-webmakerr-cart.php');

if ($cart_template) {
    include $cart_template;
    return;
}

get_header();
?>

<main class="page-webmakerr-cart">
    <section class="py-5">
        <div class="container">
            <div class="alert alert-warning" role="alert">
                Webmakerr Cart template missing. Please ensure <code>page-webmakerr-cart.php</code> exists in the theme.
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
