<aside class="content-sidebar">
        <?php
            if (get_post_type() == 'luis_logolate_clases') {
                dynamic_sidebar('sidebar_catalogos');
            } else {
                dynamic_sidebar('sidebar_blog');
            }
        ?>
    </aside>