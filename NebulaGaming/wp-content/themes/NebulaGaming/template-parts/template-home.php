<?php
/* 
Template Name: Home
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
</head>
    <?php get_header(); ?>
    <body>
        <div class="homeBannerContainer container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="col-12">
                    <h3>
                        <?php the_content(); ?>
                        <a href="#homeContainer"><i class="ph ph-arrow-down"></i></a>
                    </h3>
                </div>
    
            </div>
        </div>
        <div id="homeContainer" class="homeContainer container-fluid">
    <div class="row content-top-row">
        <div class="col-12">
            <div class="content-top-wrapper">
                <h2><?php the_field('content_top'); ?></h2>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-evenly">
        <div class="col-5">
            <h3><?php the_field('content_left'); ?></h3>
        </div>
        <div class="col-5">
            <h3><?php the_field('content_right'); ?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3><?php the_field('content_bottom'); ?></h3>
        </div>
    </div>
</div>
    </body>
    <?php get_footer(); ?>
</html>