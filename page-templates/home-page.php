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
function getAcfValue($key)
{
  echo empty(get_field($key)) ? acf_get_field($key)['default_value'] : get_field($key);
}

get_header();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Introduction -->
<div class="intro">
    <div class="intro__first-col">
        <h1 class="intro__head"><?php getAcfValue("introduction_head");?></h1>     
        <p class="intro__description"><?php getAcfValue("introduction_description");?></p>     
        <a href="https://www.freecodecamp.org/">
        <button class="intro__button">Login</button>
        </a> 
    </div>

    <div class="intro__second-col">
        <?php $introimage = get_field('introduction_image') ; ?>
        <img src="<?php echo $introimage;?>" class="intro__image">
    </div>
</div>

<!-- message section -->
<div class="message">
    <h1 class="intro__head"><?php getAcfValue("message_head");?></h1>     
    <p class="message__closing-remarks"><?php getAcfValue("message_description");?></p>     
</div>

<!-- events section -->
<div class="events">
    <div class="events-col1">
        <p class="events__list"><?php getAcfValue("events_list");?></p>     
    </div>

    <div class="events-col2">
        <hr class="events__line">
        <h3 class="events__latest-events"><?php getAcfValue("latest_events");?></h3>     
        <p class="events__description"><?php getAcfValue("events_description");?></p>     
    </div>   
</div>

<!-- closing section -->
<div class="closing">
    <div class="closing-col1">
        <hr class="closing__line">
        <h3 class="closing__head"><?php getAcfValue("closing");?></h3>    
        <p class="closing__description"><?php getAcfValue("closing_description");?></p>     
    </div>
    
    <div class="closing-col2">
        <?php $closingimg = get_field('closing_image') ; ?>
        <img src="<?php echo $closingimg;?>" class="closing-image">
    </div>
</div>

<?php
get_footer();
