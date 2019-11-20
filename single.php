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
        
            
            <?php the_post(); ?>

			<div class="post_section">
				
				
				<h2><?php the_title(); ?></h2>
					
		
				<?php echo get_the_date('F d, Y'); ?> | <strong>Author:</strong> <?php the_author(); ?> 

				<?php the_post_thumbnail('thumbnail'); ?>
					
				<div><?php the_content(); ?></div>
					
			</div>	

                
            
                
		</div>
    
  <div class="cleaner"></div>
  </div> 
    <!-- end of templatemo_main -->
  <div class="cleaner_h20"></div>



<?php get_footer(); ?>