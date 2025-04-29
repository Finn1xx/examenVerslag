<?php
/* 
Template Name: About
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title><?php bloginfo('name'); ?> - <?php the_title(); ?></title>
    <?php wp_head() ?>
</head>
<body>
    <?php get_header(); ?>
    
    <div class="aboutBannerContainer container-fluid" style="background-image: url('<?php the_field('bannerimage'); ?>');">
        <div class="row">
            <div class="col-9">
                <div class="aboutBannerContent">
                    <h1><?php the_title(); ?></h1>
                    <div class="bannerText">
                        <h2><?php the_content(); ?></h2>
                    </div>
                </div>
            </div>  
        </div>
    </div>
        
    <div class="aboutContentContainer container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="aboutContent">
                <div class="row founderSection">
                    <div class="col-5 founderImageCol">
                        <?php 
                        $founder_image = get_field('image');
                        if($founder_image) { 
                        ?>
                            <div class="founderImage">
                                <img src="<?php echo esc_url($founder_image['url']); ?>" alt="<?php echo esc_attr($founder_image['alt']); ?>" />
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-7 founderTextCol">
                        <p><?php the_field('content'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <?php get_footer(); ?>
</body>
</html>