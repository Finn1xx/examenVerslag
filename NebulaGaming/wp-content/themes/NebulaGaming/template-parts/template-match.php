<?php
/**
 * Template Name: Match
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
<body>
<?php get_header(); ?>

    <!-- Matches Banner Section -->
    <div class="matchesBannerContainer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="matchesBannerContent">
                        <h1><?php the_title(); ?></h1>
                        <span><?php the_content() ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Matches Content Section -->
    <div class="matchesContentContainer">
        <div class="container">
            <div class="row">
                <!-- Left Column - Recent Matches -->
                <div class="col-md-6">
                    <div class="matchesList">
                        <h2>Recent Matches</h2>
                        
                        <?php
                        // Get recent matches
                        $args = array(
                            'post_type' => 'matches',
                            'posts_per_page' => 5,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );
                        
                        $matches_query = new WP_Query($args);
                        
                        if ($matches_query->have_posts()) :
                            while ($matches_query->have_posts()) : $matches_query->the_post();
                        ?>
                        
                        <div class="matchesCard">
                            <div class="matchDate">
                                <?php echo get_field('match_date'); ?>
                            </div>
                            <div class="match-details">
                                <h3 class="matchTitle"><?php the_title(); ?></h3>
                                <div class="matchMeta">
                                    <div class="matchGame">
                                        <span class="matchLabel">Game:</span> 
                                        <span class="metaValue"><?php echo get_field('game'); ?></span>
                                    </div>
                                    <div class="matchTeam">
                                        <span class="matchLabel">Team:</span> 
                                        <span class="metaValue"><?php echo get_field('team'); ?></span>
                                    </div>
                                </div>
                                <div class="metaDescription">
                                    <?php echo get_field('description'); ?>
                                </div>
                            </div>
                        </div>
                        
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                        ?>
                        
                        <div class="noMatches">
                            <p>No matches found</p>
                        </div>
                        
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Right Column - Static Content -->
                <div class="col-md-6">
                    <div class="matchesStaticContent">
                            <h2>About Our Matches</h2>
                            <p><?php echo get_field('aboutContent'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<?php get_footer(); ?>