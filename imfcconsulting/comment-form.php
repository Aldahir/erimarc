<?php
/**
 * Ficheiro Comment Form
 *
 * @author Aldair Cajicua
 * 
 * @package IMFC Consulting
 *
 * @year 2022
 */
?>

<div id="respond" class="comment-respond">
    <form action="<?php echo get_site_url(); ?>/wp-comments-post.php" method="post" id="commentform" class="comment-form">
        <div class="form-group">
            <label for="comment" style="margin-top:20px;">E-mail:</label>
            <input type="text" class="form-control" placeholder="Seu email" name="email">
        </div>

        <div class="form-group mt-3">
            <label for="comment">Comentário:</label>
            <textarea class="form-control" name="comment" rows="5" id="comment"></textarea>
        </div>

        <div class="align-items-center d-flex form-group mt-3">
            <button type="submit" class="btn btn-warning">Comentar</button>
            <div class="form-group-checkbox">
                <input style="width: 30px" type="checkbox" value="yes" name="subscribe" checked="checked">
                <input type="hidden" name="comment_post_ID" value="<?php echo get_the_id() ?>" id="comment_post_ID">
                <b>Receba as últimas novidades</b>
            </div>
        </div>
    </form>
</div>