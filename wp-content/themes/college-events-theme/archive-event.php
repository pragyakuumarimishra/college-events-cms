<?php get_header(); ?>
<h1>College Events</h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="event-summary">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><strong>Date:</strong> <?php the_field('event_date'); ?></p>
        <p><strong>Location:</strong> <?php the_field('event_location'); ?></p>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
