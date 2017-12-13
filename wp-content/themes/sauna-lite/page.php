<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Sauna Lite
 */

get_header(); ?>

<?php do_action( 'sauna_lite_page_header' ); ?>

<div id="content-aa" class="container">
    <div class="middle-align">       
		<div class="col-md-12">
			<?php 
            while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title();?></h1>
                <?php the_content();

                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'sauna-lite' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'sauna-lite' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
                ) );
                
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() )
                    comments_template();

                ?>               
            <?php endwhile; // end of the loop. ?>            
        </div>        
        <div class="clear"></div>    
    </div>
</div><!-- container -->

<?php do_action( 'sauna_lite_page_footer' ); ?>

<?php get_footer(); ?>