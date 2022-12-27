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

<?php get_header(); ?>

	<main id="main">
        <style>
			main#main { margin-top: 50vh !important; }
            .main {
                top: 25vh;
                color: #fff;
                line-height: 4em;
            }
            .main > .site-content > .title {
                text-transform: capitalize;
                font-weight:700;
                text-align: center;
            }
            .background-overlay {
                min-height: 440px;
                background-color: rgb(75 53 96 / 78%);
            }
        </style>
		<section class="main">
            <div id="content" class="site-content">
			<?php
                if ( have_posts() ) : 
                    while ( have_posts() ) : 
                        the_post(); ?>
                        <h2 class="ms-5 title caption-header"><?php the_title(); ?></h2>
                    <?php                        
                    endwhile;
                endif;
            ?>
			</div>
		</section>
		
		<section class="background-overlay"></section>
               
        <section class="content">
			<?php the_content(); ?>
        </section>
    </main>

<?php get_footer();
