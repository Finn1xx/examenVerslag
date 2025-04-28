<?php
/*
Template Name: Contact
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<?php get_header(); ?>
<body>
    <div class="contactContainer container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-10 col-md-6 text-center">
                <h1 class="mb-4"><?php the_title()?></h1>
                <p><?php the_content()?></p>

                <?php echo do_shortcode('[contact-form-7 id="9ec129f" title="Contactformulier 1"]'); ?>
            </div>
        </div>
    </div>
</body>
<?php get_footer(); ?>
</html>
