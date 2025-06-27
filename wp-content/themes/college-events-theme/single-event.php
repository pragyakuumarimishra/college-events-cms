<?php get_header(); ?>
<div class="event">
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
    <p><strong>Date:</strong> <?php the_field('event_date'); ?></p>
    <p><strong>Location:</strong> <?php the_field('event_location'); ?></p>
    <p><strong>Organizer:</strong> <?php the_field('event_organizer'); ?></p>
</div>
<?php get_footer(); ?>
