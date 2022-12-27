<?php
/**
 * Ficheiro Single Page
 *
 * @author Aldair Cajicua
 * 
 * @package IMFC Consulting
 *
 * @year 2022
 */
?>

<?php get_header() ?>
    <main id="main">
        <style>
			main#main { margin-top: 50vh !important; }
            .main {
                top: 35vh;
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
                <h2 class="ms-5 title caption-header"><?php the_title(); ?></h2>
            </div>
        </section>
        
        <section class="background-overlay"></section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <?php 
                            if ( have_posts() ) : 
                                while ( have_posts() ) : 
                                    the_post();
                                    the_content();
                                endwhile;
                            endif
                        ?>    
                    </div>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <?php
                            if ( comments_open() || get_comments_number() ):
                                comments_template();
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer() ?>
