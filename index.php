<?php get_header(); ?>

	<div id="templatemo_sidebar">
            <div id="templatemo_rss">
            
                <a href="#">SUBSCRIBE NOW <br /><span>to our rss feed</span></a>
                
            </div>
			
            <?php get_sidebar(); ?>
  
    </div> <!-- end of templatemo_sidebar --> 
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
    
    	
        
        <div id="templatemo_main">
        
            
            <?php if (have_posts()): 
				while (have_posts()): the_post(); ?>
				<div class="post_section">
					
				
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
		
					<?php echo get_the_date('F d, Y'); ?> | <strong>Author:</strong> <?php the_author(); ?> | <strong>Category:</strong> <?php the_category(); ?>
					
					<?php
                    if( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    }
                    else {
                        echo '<img src="'.get_bloginfo("template_url").'/assets/images/templatemo_image_01.jpg" />';
                    } ?>
					
					<p><?php echo CFS() -> get('intro'); ?></p>
					<a href="<?php echo the_permalink(); ?>">Читать далее...</a>
				</div>	
				<?php endwhile; ?>
            <?php else: ?>
				Записей нет!
            <?php endif; ?>
            
			<?php the_posts_pagination($args = array(
                'screen_reader_text' => __( 'Навигация по книгам' )
            )); ?>

                
            
                
		</div>
    
  <div class="cleaner"></div>
  </div> 
    <!-- end of templatemo_main -->
  <div class="cleaner_h20"></div>



<?php get_footer(); ?>