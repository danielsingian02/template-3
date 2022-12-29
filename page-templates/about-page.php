<?php
/**
 * Template Name: Template 3
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

<!-- hero banner -->
<main id="primary" class="site-main">
    <div class="hero-banner">
        <h1 class="hero-banner__head"><?php the_field('hero_title');?></h1>
        <p class="hero-banner__description"><?php the_field('hero_description');?></p>
    </div>
<!-- end of hero banner -->

<!-- about section -->
    <div class="about">
        <div class="about-col1">
            <h2 class="about-col1__head"><?php the_field('about_head');?></h2>
            <p class="about-col1__intro"><?php the_field('about_description');?></p>
            <?php $iconlist = get_field('icon_list') ;
            $aboutimage = get_field('about_image');?>
            <div class="lists">
                <div class="list-wrapper">   
                    <div class="icon-list">
                        <img src="<?php echo $iconlist;?>" class="imagelist">
                    </div>

                    <div class="list">
                        <p class="list__items"><?php the_field('list');?></p>
                    </div>
                </div>

                <div class="list-wrapper">
                    <div class="icon-list">
                        <img src="<?php echo $iconlist;?>" class="imagelist">
                    </div>

                    <div class="list">
                        <p class="list__items"><?php the_field('list2');?></p>
                    </div>
                </div>

                <div class="list-wrapper">
                    <div class="icon-list">
                        <img src="<?php echo $iconlist;?>" class="imagelist">
                    </div>

                    <div class="list">
                        <p class="list__items"><?php the_field('list3');?></p>
                    </div>
                </div>

                <div class="list-wrapper">
                    <div class="icon-list">
                        <img src="<?php echo $iconlist;?>" class="imagelist">
                    </div>

                    <div class="list">
                        <p class="list__items"><?php the_field('list4');?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-col2">  
            <img src="<?php echo $aboutimage;?>" class="aboutimage" >
        </div>
    </div>
<!-- end of about section -->

<!-- card section -->
    <div class="card-section">
        <h2 class="card-section__head"><?php the_field('card_head');?></h2>
        <p class="card-section__info"><?php the_field('card_subhead');?></p>
        <div class="card-wrapper">

            <div class="card-wrapper__card">
                <?php $cardicon = get_field('card_icon') ;?>
                <div class=""><img src="<?php echo $cardicon;?>" class=""></div>
                <h3 class="card__title"><?php the_field('card_title');?></h3>
                <div class=""><?php the_field('card_description');?></div>
            </div>

            <div class="card-wrapper__card"><?php the_field('second_card');?>
                <?php $cardicon = get_field('card_icon') ;?>
                <div class=""><img src="<?php echo $cardicon;?>" class=""></div>
                <h3 class="card__title"><?php the_field('card_title');?></h3>
                <div class=""><?php the_field('card_description');?></div>
            </div>
            
            <div class="card-wrapper__card"><?php the_field('third_card');?>
                <?php $cardicon = get_field('card_icon') ;?>
                <div class=""><img src="<?php echo $cardicon;?>" class=""></div>
                <h3 class="card__title"><?php the_field('card_title');?></h3>
                <div class=""><?php the_field('card_description');?></div>
                </div>

        </div>
    </div>
<!-- end of card section -->

<!-- comments section -->
    <div class="comments">
        <div class="comments-col1">
            <h2 class="comments__heading"><?php the_field('comments_head');?></h2>
            <h2 class="comments__introduction"><?php the_field('comments_description');?></h2>
            <a href="#" class="comments__button">Button</a>
        </div>

        <div class="comments-col2">
            <div class="comments-card">
                <div class="comments__quote">
                    <?php $quoteicon = get_field('quote_icon') ;?>
                    <img src="<?php echo $quoteicon;?>">
                </div>
                
                <div class="comments__description">
                    <div class="comments__rate">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>

                    <p class="comments__quote"><?php the_field('quote_description');?></p>
                    
                    <div class="comments-profile">
                        <div class="comments-profile__container-picture">
                            <div class="comments-profile__picture"> 
                                <?php $commentpicture = get_field('comment_profile_picture') ;?>
                                <img src="<?php echo $commentpicture;?>" class="comments__picture">
                            </div>
                        </div>

                        <div class="comments-profile__container-info">
                            <div class="comments-profile__name"> 
                                <h3 class="comments__name"><?php the_field('comment_name');?></h3>
                            </div>
                            <div class="comments-profile__description"> 
                                <p class="comment__description"><?php the_field('comment_description');?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="comments-card">
                <div class="comments__quote">
                    <?php $quoteicon = get_field('quote_icon') ;?>
                    <img src="<?php echo $quoteicon;?>">
                </div>

                <div class="comments__description">
                    <div class="comments__rate">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    
                    <p class="comments__quote"><?php the_field('quote_description');?></p>
                        
                    <div class="comments-profile">
                        <div class="comments-profile__container-picture">
                            <div class="comments-profile__picture"> 
                                <?php $commentpicture = get_field('comment_profile_picture') ;?>
                                <img src="<?php echo $commentpicture;?>" class="comments__picture">
                            </div>
                        </div>

                        <div class="comments-profile__container-info">
                            <div class="comments-profile__name"> 
                                <h3 class="comments__name"><?php the_field('comment_name');?></h3>
                            </div>
                            <div class="comments-profile__description"> 
                                <p class="comment__description"><?php the_field('comment_description');?></p>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            
        </div>
    </div>

<!-- end of comments section -->

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
