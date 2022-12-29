<?php
/**
 * Template Name: Template 3 home
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress-backend-theme
 */

get_header();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Introduction -->

    <div class="intro">
        <div class="intro__first-col">
            <h1 class="intro__head"><?php the_field('introduction_head');?></h1>
            <p class="intro__description"><?php the_field('introduction_description');?></p>
            <a href="https://www.freecodecamp.org/">
            <button class="intro__button">Login</button>
            </a> 
        </div>
    
        <div class="intro__second-col">
            <?php $introimage = get_field('introduction_image') ; ?>
            <img src="<?php echo $introimage;?>" class="intro__image">
        </div>
    </div>

<!-- end of Introduction -->

<!-- message section -->
    <div class="message">
        <h2 class="message__heading"><?php the_field('message_head');?></h2>
        <p class="message__closing-remarks"><?php the_field('message_description');?></p>
    </div>
<!-- end of message section -->

<!-- events section -->
    <div class="events">
        <div class="events-col1">
            <p class="events__list"><?php the_field('events_list');?></p>
        </div>

        <div class="events-col2">
            <hr class="events__line">
            <h3 class="events__latest-events"><?php the_field('latest_events');?></h3>
            <p class="events__description"><?php the_field('events_description');?></p>
        </div>   
    </div>
<!-- end of events section -->

<!-- closing section -->
    <div class="closing">
        <div class="closing-col1">
            <hr class="closing__line">
            <h3 class="closing__head"><?php the_field('closing');?></h3>
            <p class="closing__description"><?php the_field('closing_description');?></p>
        </div>
        
        <div class="closing-col2">
            <?php $closingimg = get_field('closing_image') ; ?>
            <img src="<?php echo $closingimg;?>" class="closing-image">
        </div>
    </div>
<!-- end of CLOSING SECTION -->

	</main><!-- #main -->

<?php

get_footer();
