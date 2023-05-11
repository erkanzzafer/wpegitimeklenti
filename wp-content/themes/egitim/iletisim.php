<?php /*Template Name: İletişim Sayfası*/

include (TEMPLATEPATH.'/header.php');

?>

 <div class="page-content">
          <div class="wt-bnr-inr overlay-wraper" style="background-image:url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'full')[0]; ?>)">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
            <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="<?php echo get_home_url(); ?>"><i class="fa fa-home"></i> Anasayfa</a></li>
                        <li><?php echo get_the_title(); ?></li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->
             
            <!-- SECTION CONTENTG START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                
                	<!-- CONTACT DETAIL BLOCK -->
                    <div class="section-content m-b30">
 
                        <div class="row">
                        
                            <div class="col-md-4 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                                    <div class="icon-sm text-white m-b10"><i class="iconmoon-smartphone-1"></i></div>
                                    <div class="icon-content">
                                        <h5 class="text-white">Telefon Numarası</h5>
                                        <p class="text-gray-dark"><?php echo $ayar['iletisim_tel']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                                    <div class="icon-sm text-white m-b10"><i class="iconmoon-email"></i></div>
                                    <div class="icon-content">
                                        <h5 class="text-white">Email adresi</h5>
                                        <p class="text-gray-dark"><?php echo $ayar['iletisim_email'];?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                                    <div class="icon-sm text-white m-b10"><i class="iconmoon-travel"></i></div>
                                    <div class="icon-content">
                                        <h5 class="text-white">Açık Adres</h5>
                                        <p class="text-gray-dark"><?php echo $ayar['iletisim_adres'];?></p>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
          
                    </div>
                    
                    <!-- GOOGLE MAP & CONTACT FORM -->
                    <div class="section-content m-b50">
                        <div class="row">
                        

                  
                        	<!-- LOCATION BLOCK-->
                            <div class="wt-box col-md-6">
                            
                                 <h4 class="text-uppercase">Konum</h4>
                                <div class="wt-separator-outer m-b30">
                                   <div class="wt-separator style-square">
                                       <span class="separator-left bg-primary"></span>
                                       <span class="separator-right bg-primary"></span>
                                   </div>
                               </div>     

                 
<iframe width="500" height="500" src="//maps.google.com/maps?q=<?php echo $ayar['iletisim_map']['latitude'].','.$ayar['iletisim_map']['longitude']; ?>&z=15&output=embed"></iframe>


                                <div class="gmap-outline m-b30">
                                    <div id="gmap_canvas" class="google-map"></div>
                                </div>
                                    
                            </div>

                            <!-- CONTACT FORM-->
                            <div class="wt-box col-md-6">
                            
                                <h4 class="text-uppercase">İletişim Formu </h4>
                                <div class="wt-separator-outer m-b30">
                                    <div class="wt-separator style-square">
                                       <span class="separator-left bg-primary"></span>
                                       <span class="separator-right bg-primary"></span>
                                    </div>
                                    
                                </div>
                            
                            	<div class="p-a30 bg-gray">
                            
                                    <form class="cons-contact-form" method="post" action="form-handler.php">
                            
                                        <div class="row">
                                        
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                        <input name="username" type="text" required class="form-control" placeholder="Name">
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                        <input name="email" type="text" class="form-control" required placeholder="Email">
                                                    </div>
                                                </div>
            
                                            </div>
            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                                        <textarea name="message" rows="3" class="form-control " required placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="col-md-12">
                                                <button name="submit" type="submit" value="Submit" class="site-button  m-r15">Submit  <i class="fa fa-angle-double-right"></i></button>
                                                <button name="Resat" type="reset" value="Reset"  class="site-button " >Reset  <i class="fa fa-angle-double-right"></i></button>
                                            </div>
            
                                        </div>
    
                                    </form>
                                
                                </div>
                        
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
           </div>
            <!-- SECTION CONTENT END -->
            
        </div>

<?php


include (TEMPLATEPATH.'/footer.php');
 ?>