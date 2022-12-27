<?php
/**
 * Ficheiro Search Form
 *
 * @author Aldair Cajicua
 * 
 * @package IMFC Consulting
 *
 * @year 2022
 */
?>

<form role="search" method="get" class="search-field" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="screen-reader-text" for="s">Pesquisar por:</label>
    <input type="search" id="search-field" class="search-field" placeholder="Pesquisar produtos…" value="<?php echo get_search_query(); ?>" name="s" autocomplete="off" required="required">
    <button type="submit" value="Pesquisar"><i class="fas fa-search"></i></button>
</form>
