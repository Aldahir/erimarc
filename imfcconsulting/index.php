<?php
/**
 * Ficheiro Index
 *
 * @author Aldair Cajicua
 * 
 * @package IMFC Consulting
 *
 * @year 2022
 */
?>

<?php 
    if ( is_search() ) :
        get_search_form(
            array(
                "label" => __("search again", 'imfcconsulting')
            )    
        );
    
    elseif ( have_posts() ) :
        while ( have_posts() ) : 
            the_post();
        endwhile;
    
    endif;
?>
