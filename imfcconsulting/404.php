<?php
/**
 * Ficheiro Index
 * 
 * Template Name: IMFC Consulting
 *
 * @author Aldair Cajicua
 * @package IMFC Consulting
 * @since IMFC Consulting v1.0.1
 * @year 2022
 */
?>

<?php get_header() ?>

    <main id="main">
        <section class="mb-5">
            <div class="d-flex title justify-content-center">
                <h1><?php esc_html_e('A página que pretende buscar não foi encontrada!', 'imfcconsulting') ?></h1>
            </div>
            
            <div class="d-flex justify-content-center">
                <a href="<?php echo get_site_url(); ?>">Voltar ao início</a>
            </div>
        </section>
    </main>

<?php get_footer() ?>
