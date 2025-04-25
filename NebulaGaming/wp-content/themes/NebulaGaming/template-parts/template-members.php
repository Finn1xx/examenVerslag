<?php
/* 
Template Name: members
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
    <div class="membersBanner container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="membersBannerContent"></div>
        </div>
    </div>
</div>

<div class="membersGrid container-fluid">
    <div class="row justify-content-evenly">
        <?php
        $members = new WP_Query(array(
            'post_type' => 'member',
            'posts_per_page' => -1
        ));

        if ($members->have_posts()) :
            while ($members->have_posts()) : $members->the_post();
        ?>
<div class="col-5 memberCard">
  <div class="card-content">
    <h2><?php the_title(); ?></h2>

    <?php $image = get_field('image'); ?>
    <?php if ($image): ?>
      <div class="memberPortrait">
        <img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>" />
      </div>
    <?php endif; ?>

    <h4>Game: <?php the_field('type_game'); ?></h4>
    <p><?php the_field('description'); ?></p>
  </div>
</div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No members found.</p>';
        endif;
        ?>
    </div>
</div>
    <?php get_footer(); ?>
</html>