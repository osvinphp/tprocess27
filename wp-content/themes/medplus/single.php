<?php
/**
 * The Template for displaying all single posts.
 *
 * @package  Medplus
 */

get_header(); ?>
<div class="post_member_detail">
<div class="heading" style="font-weight: bold;">Mem<span class="sub-heading">bers</span></div>

<hr class="heading-line-doijoin user_profile_border" />
</div>
<div class="testimonial_page_single post-detailpage">
<div class="container">
     <div class="page_content">
        <section class="site-main">            
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'single' ); ?>
                    <?php the_post_navigation(); ?>
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                    	comments_template();
                    ?>
                <?php endwhile; // end of the loop. ?>          
         </section>       
        <?php get_sidebar();?>
       
        <div class="clear"></div>
    </div><!-- page_content -->
</div><!-- container -->	
</div>
<?php get_footer(); ?>