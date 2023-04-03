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
function getAcfValue($key)
{
  echo empty(get_field($key)) ? acf_get_field($key)['default_value'] : get_field($key);
}

get_header();
?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- hero banner -->
<main id="primary" class="site-main">
    <div class="hero-banner">
        <h1 class="hero-banner__head"><?php getAcfValue("hero_title");?></h1>     
        <p class="hero-banner__description"><?php getAcfValue("hero_description");?></p>     
    </div>

<!-- about section -->
    <div class="about">
        <div class="about-col1">
            <h2 class="about-col1__head"><?php getAcfValue("about_head");?></h2>     
            <p class="about-col1__intro"><?php getAcfValue("about_description");?></p>
            <?php $iconlist = get_field('icon_list');
            $iconlist2 = get_field('icon_list2');
            $iconlist3 = get_field('icon_list3');
            $iconlist4 = get_field('icon_list4') ;
            $aboutimage = get_field('about_image');?>
            <div class="lists">
                <div class="list-wrapper">   
                    <div class="icon-list">
                        <img src="<?php echo $iconlist;?>" class="imagelist">
                    </div>

                    <div class="list">
                        <p class="list__items"><?php getAcfValue("list");?></p>
                    </div>
                </div>

                <div class="list-wrapper">
                    <div class="icon-list">
                        <img src="<?php echo $iconlist2;?>" class="imagelist">
                    </div>
                    <div class="list">
                        <p class="list__items"><?php getAcfValue("list2");?></p>
                    </div>
                </div>

                <div class="list-wrapper">
                    <div class="icon-list">
                        <img src="<?php echo $iconlist3;?>" class="imagelist">
                    </div>
                    <div class="list">
                        <p class="list__items"><?php getAcfValue("list3");?></p>
                    </div>
                </div>

                <div class="list-wrapper">
                    <div class="icon-list">
                        <img src="<?php echo $iconlist4;?>" class="imagelist">
                    </div>
                    <div class="list">
                        <p class="list__items"><?php getAcfValue("list4");?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-col2">  
            <img src="<?php echo $aboutimage;?>" class="aboutimage" >
        </div>
    </div>

<!-- card section -->
    <div class="card-section">
        <h2 class="card-section__head"><?php getAcfValue("card_head");?></h2>     
        <p class="card-section__info"><?php getAcfValue("card_subhead");?></p>     
        <div class="card-wrapper">
            <div class="card-wrapper__card">
                <?php $cardicon = get_field('card_icon');
                $cardicon2 = get_field('card_icon2');
                $cardicon3 = get_field('card_icon3') ;?>
                <img src="<?php echo $cardicon;?>" class="card__icon">
                <h3 class="card__title"><?php getAcfValue("card_title");?></h3>     
                <p class="card__description"><?php getAcfValue("card_description");?></p>     
            </div>
            <div class="card-wrapper__card">
                <img src="<?php echo $cardicon2;?>" class="card__icon">
                <h3 class="card__title"><?php getAcfValue("card_title2");?></h3>     
                <p class="card__description"><?php getAcfValue("card_description2");?></p>     
            </div>   
            <div class="card-wrapper__card">
                <img src="<?php echo $cardicon3;?>" class="card__icon">
                <h3 class="card__title"><?php getAcfValue("card_title3");?>></h3>     
                <p class="card__description"><?php getAcfValue("card_description3");?></p>     
            </div>
        </div>
    </div>

<!-- comments section -->
    <div class="comments">
        <div class="comments-col1">
            <h2 class="comments__heading"><?php getAcfValue("comments_head");?></h2>     
            <p class="comments__introduction"><?php getAcfValue("comments_description");?></p>     
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
                    <p class="comments__quote"><?php getAcfValue("quote_description");?></p>             
                    <div class="comments-profile">
                        <div class="comments-profile__container-picture">
                            <div class="comments-profile__picture"> 
                                <?php $commentpicture = get_field('comment_profile_picture') ;?>
                                <img src="<?php echo $commentpicture;?>" class="comments__picture">
                            </div>
                        </div>
                        <div class="comments-profile__container-info">
                            <div class="comments-profile__name"> 
                                <h3 class="comments__name"><?php getAcfValue("comment_name");?></h3>     
                            </div>
                            <div class="comments-profile__description"> 
                                <p class="comment__description"><?php getAcfValue("comment_description");?></p>     
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
                    <p class="comments__quote"><?php getAcfValue("quote_description2");?></p>                           
                    <div class="comments-profile">
                        <div class="comments-profile__container-picture">
                            <div class="comments-profile__picture"> 
                                <?php $commentpicture2 = get_field('comment_profile_picture2') ;?>
                                <img src="<?php echo  $commentpicture2?>" class="comments__picture">
                            </div>
                        </div>
                        <div class="comments-profile__container-info">
                            <div class="comments-profile__name"> 
                                <h3 class="comments__name"><?php getAcfValue("comment_name2");?></h3>     
                            </div>
                            <div class="comments-profile__description"> 
                                <p class="comment__description"><?php getAcfValue("comment_description2");?></p>     
                            </div>
                        </div>
                    </div>
                </div>  
            </div>  
        </div>
    </div>

<!-- message section -->
    <div class="message">
        <h1 class="message__heading"><?php getAcfValue("message_head");?></h1>     
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
</main><!-- #main -->

<?php

get_footer();
