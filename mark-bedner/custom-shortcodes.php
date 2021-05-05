<?php 

// My Work Shortcode

 function myWorkShortcode() {

    $myWorkHTML = '';


    $myWorkHTML .= '<div class="splide">';
    $myWorkHTML .= '<div class="splide__track">';
    $myWorkHTML .= '<ul class="splide__list">';

    $args = array(  
        'post_type' => 'portfolio',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'date', 
        'order' => 'DESC', 
    );
    
    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 

    $portfolioItemName = get_the_title();
    $portfolioItemThumb = get_the_post_thumbnail();
    $portfolioPermalink = get_the_permalink();
    $portfolioClass = get_field( 'portfolio_card_class' );

    $myWorkHTML .= '<li class="splide__slide ' . $portfolioClass . '">';
    $myWorkHTML .= '<a href="' . $portfolioPermalink . '" class="img-mask">';
    $myWorkHTML .= '<figure>';
    $myWorkHTML .= $portfolioItemThumb;
    $myWorkHTML .= '</figure>';
    $myWorkHTML .= '</a>';
    $myWorkHTML .= '<a href="' . $portfolioPermalink . '">';
    $myWorkHTML .= '<h3>' . $portfolioItemName . '</h3>';
    $myWorkHTML .= '</a>';
    $myWorkHTML .= '</li>';
    endwhile;

    $myWorkHTML .= '</ul>';
    $myWorkHTML .= '</div>';
    $myWorkHTML .= '</div>';



    wp_reset_postdata(); 


    return $myWorkHTML;
}

add_shortcode('work-loop', 'myWorkShortcode');


// Employers Shortcode

function employersShortcode() {

$employersRows = get_field('employers_repeater', 'option');

    if( $employersRows ):

        $employersHTML = '';
        $employersHTML .= '<div class="container employers">';
        $employersHTML .= '<div class="employers__container">';
        $employersHTML .= '<ul>';

        foreach ($employersRows as $employer) :

        $employers_logo = $employer['employer_logos_default'];
        
        $employersHTML .= '<li class="employer__item">';
        $employersHTML .= '<img src="' . $employers_logo['url'] . '" alt="' . $employers_logo['alt'] . '">';
        $employersHTML .= '</li>';

    
        // End loop.
        endforeach;

        $employersHTML .= '</ul>';
        $employersHTML .= '</div>';
        $employersHTML .= '</udiv>';

    endif;

    echo $employersHTML;
}

add_shortcode('employers-repeater', 'employersShortcode');

