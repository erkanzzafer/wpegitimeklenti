<?php  /*Template Name: Ürünler Sayfası */
include_once(TEMPLATEPATH.'/header.php'); ?>




    <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/our-team-banner.jpg);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
                        
            <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="<?php  the_permalink(); ?>"><?php the_title(); ?></a></li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END --> 
                              
            <!-- TEAM STYLE ONE START -->
            <div class="section-full p-t80 p-b50 bg-gray">
                <div class="container">
                    <div class=" m-b70">
                        <!-- TITLE START -->
                        <div class="section-head text-center">
                           <h2 class="text-uppercase"><?php the_title(); ?></h2>
                           <div class="wt-separator-outer">
                               <div class="wt-separator style-square">
                                   <span class="separator-left bg-primary"></span>
                                   <span class="separator-right bg-primary"></span>
                               </div>
                           </div>
                           <p><?php echo $post->post_content; ?></p>
                        </div>
                        <!-- TITLE END -->
                    </div> 
                    <div class="section-content">
                        <div class="row">
               <?php 

                            $query = new WP_Query(array(
                            'post_type'       => 'urun',
                            'category__in'    => array(1),
                            'post_status'     => 'public',
                            'order_by'        => 'date',
                            'order'           => 'ASC',
                            'showposts'         =>2,
                            'paged'             => $paged,
                            ));
                         
                            while($query->have_posts()){
                            $query->the_post();
                            $post_id = get_the_ID();
                            $term = get_the_terms($post_id,'urun');
                            ?>                 
                            <!-- COLUMNS 1 -->
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                            
                                <div class="wt-team-one bg-white p-a10">
                                    <div class="wt-team-media">
                                        <a href="javascript:void(0);"><img src="images/our-team/pic1.jpg" alt=""></a>
                                    </div>
  
                             
                                    <div class="wt-team-info text-center bg-white p-a10">
                                    	           <h4 class="wt-team-title"><a href="javascript:void(0);"><?php the_title(); ?></a></h4>
                                        <p><?php echo get_post_meta($post_id,"urun_marka",true); ?></p>
                                        <ul class="social-icons social-square social-dark">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                      <?php } the_pagination($query->max_num_pages); ?>
                  
                    </div>
                </div>
            </div>
            <!-- TEAM STYLE ONE END -->   
                     
           
        </div>














<?php include_once(TEMPLATEPATH.'/footer.php'); ?>