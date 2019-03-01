<?php if(is_app_request()) return; ?>


               <div class="box">
                  <h6></h6>
					<ul>
                      <li><a href="/">صفحه نخست</a></li>
                     <?php wp_list_pages( array( 'title_li' => '' ) ); ?>	

                    </ul>
                </div>



               <div class="box">
                    <h6>آخرین نوشته ها</h6>
                    <ul>
   
						<?php
							$recent_posts = wp_get_recent_posts(array('post_status' =>'publish','numberposts' => '30'));
							$i=0;
							foreach( $recent_posts as $recent ){
								
								echo '<li style="border-bottom:1px dashed #cccccc;padding-top:7px;padding-bottom:7px"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
							}
							wp_reset_query();
						?>

                    </ul>
                </div>
				
			
				

				<div class="box">
                    <h6>آرشیو ماهانه</h6>
                    <ul>
                      <?php wp_get_archives('type=monthly'); ?>
                    </ul>
                </div>


                <div class="box">
                    <h6>آرشیو موضوعی</h6>
					 <ul>
					<?php
                    $categories = get_categories(array('orderby' => 'name','order'   => 'ASC'));
                    foreach( $categories as $category ) {
                     echo '<li><a href="' . get_category_link( $category->term_id ) . '">' .   $category->name.' ('. $category->category_count.')</a> </li> ';
				
				     }
                   ?>
				    </ul>
                </div>
				
				
				
					<?php
					/*
					?> <div class="box">
                    <h6>برچسب ها</h6><?php

					$tags = wp_tag_cloud(array(
						'echo' => true,
						'orderby' => 'count',
						'order' => 'DESC',
						'number' => 10,
						 
					));
					
					?></div><?php
					*/
					?>
               

	<?php if ( is_active_sidebar( 'lbar' )  ) : ?>
		<?php dynamic_sidebar( 'lbar' ); ?>
	<?php endif; ?>



