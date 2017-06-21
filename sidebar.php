<!--Created by IntelliJ IDEA.-->
<!--User: apdun-->
<!--Date: 6/20/2017-->
<!--Time: 4:37 PM-->

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>
            <?php the_author_meta( 'description' ); ?></p>
    </div>
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            <?php wp_get_archives( 'type=monthly' ); ?>
            <!-- More archive examples -->
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="<?php echo get_option('github')?>">GitHub</a></li>
            <li><a href="<?php echo get_option('twitter')?>">Twitter</a></li>
            <li><a href="<?php echo get_option('facebook')?>">Facebook</a></li>
        </ol>
    </div>
</div><!-- /.blog-sidebar -->