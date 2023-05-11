<?php /*Template Name: Hakkımızda Sayfası */
include(TEMPLATEPATH.'/header.php');?>

 <div class="page-content">
            
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'full')[0]; ?>)">
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
                        <li><a href="<?php echo get_home_url(); ?>"><i class="fas fa-home"></i> Anasayfa</a></li>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB  ROW END --> 
            
                <!-- OUR BEST SERVICES SECTION  START-->                  
              <?php if ($ayar['neler_yapariz_switch'] ==1){?>
  <div class="section-full text-center p-t80 p-b50 bg-gray">
                    <div class="container">
                    
                    	<!-- TITLE START -->
                        <div class="section-head text-center">
                            <h2 class="text-uppercase"><?php echo $ayar['neler_baslik'];	 ?></h2>
                            <div class="wt-separator-outer">
                               <div class="wt-separator style-square">
                                   <span class="separator-left bg-primary"></span>
                                   <span class="separator-right bg-primary"></span>
                               </div>
                           </div>
                            <p><?php echo $ayar['neler_aciklama']; ?></p>
                        </div>
                        <!-- TITLE END -->
                        
                        <!-- OUR BEST SERVICES BLOCKS START -->
                        <div class="section-content no-col-gap">
                            <div class="row">
                        
                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-6 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-sm text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="<?php echo $ayar['neler_alan']['Neler_alan_1_icon']; ?>" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase"><?php echo $ayar['neler_alan']['neler_alan_1_baslik']; ?></h5>
                                        <p><?php echo $ayar['neler_alan']['neler_alan_1_aciklama']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-md-4 col-sm-6 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-sm text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="<?php echo $ayar['neler_alan']['Neler_alan_2_icon']; ?>" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content ">
                                        <h5 class="wt-tilte text-uppercase"><?php echo $ayar['neler_alan']['neler_alan_2_baslik']; ?></h5>
                                        <p><?php echo $ayar['neler_alan']['neler_alan_2_aciklama']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-md-4 col-sm-6 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-sm text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="<?php echo $ayar['neler_alan']['Neler_alan_3_icon']; ?>" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase"><?php echo $ayar['neler_alan']['neler_alan_3_baslik']; ?></h5>
                                        <p><?php echo $ayar['neler_alan']['neler_alan_3_aciklama']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="col-md-4 col-sm-6 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-sm text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="<?php echo $ayar['neler_alan']['Neler_alan_4_icon']; ?>" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase"><?php echo $ayar['neler_alan']['neler_alan_4_baslik']; ?></h5>
                                        <p><?php echo $ayar['neler_alan']['neler_alan_4_aciklama']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="col-md-4 col-sm-6 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-sm text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="<?php echo $ayar['neler_alan']['Neler_alan_5_icon']; ?>" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase"><?php echo $ayar['neler_alan']['neler_alan_5_baslik']; ?></h5>
                                        <p><?php echo $ayar['neler_alan']['neler_alan_5_aciklama']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 6 -->
                            <div class="col-md-4 col-sm-6 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-sm text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="<?php echo $ayar['neler_alan']['Neler_alan_6_icon']; ?>" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase"><?php echo $ayar['neler_alan']['neler_alan_6_baslik']; ?></h5>
                                        <p><?php echo $ayar['neler_alan']['neler_alan_6_aciklama']; ?></p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        </div>
                        <!-- OUR BEST SERVICES BLOCKS END -->
                        
                    </div>
                </div>
             <?php } ?>
                <!-- OUR BEST SERVICES SECTION END -->
                            
            
                
                <!-- SECTION CONTENT -->
                <?php if ($ayar['ikonlar_switch']==1) { ?>
                <div class="section-full  p-t50 p-b10 overlay-wraper bg-repeat"  style="background-image:url(<?php echo $temayolu; ?>/images/switcher/switcher-patterns/large/pt12.jpg)">
                    <div class="overlay-main bg-white opacity-07"></div>
                    <div class="container">
                   
                        <div class="section-content">
                            <div class="row">
                                    
                                <div class="col-md-3 col-sm-6">
                                    <div class="m-b30 text-black text-center">
                                        <div class="icon-lg m-b20"><i class="fa fa-building"></i></div>
                                        <div class="counter font-26 font-weight-800 m-b5"><?php echo $ayar['ikon_alan']['ikon_alan_1_sayi']; ?></div>
                                        <span><?php echo $ayar['ikon_alan']['ikon_alan_1_aciklama']; ?></span>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 col-sm-6">
                                    <div class="m-b30 text-black text-center">
                                        <div class="icon-lg m-b20"><i class="fa fa-users"></i></div>
                                        <div class="font-26 font-weight-800 m-b5"><span class="counter"><?php echo $ayar['ikon_alan']['ikon_alan_2_sayi']; ?></span><b>+</b></div>
                                        <span><?php echo $ayar['ikon_alan']['ikon_alan_2_aciklama']; ?></span>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 col-sm-6">
                                    <div class="m-b30  text-black text-center">
                                        <div class="icon-lg m-b20"><i class="fa fa-user-plus"></i></div>
                                        <div class="counter font-26 font-weight-800 m-b5"><?php echo $ayar['ikon_alan']['ikon_alan_3_sayi']; ?></div>
                                        <span><?php echo $ayar['ikon_alan']['ikon_alan_3_aciklama']; ?></span>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 col-sm-6">
                                    <div class="m-b30 text-black text-center">
                                        <div class="icon-lg m-b20"><i class="fa fa-trophy"></i></div>
                                        <div class="counter font-26 font-weight-800 m-b5"><?php echo $ayar['ikon_alan']['ikon_alan_4_sayi']; ?></div>
                                        <span><?php echo $ayar['ikon_alan']['ikon_alan_4_aciklama']; ?></span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            <?php } ?>
                <!-- SECTION CONTENT END -->    
                            
                <!-- TEAM STYLE THREE START -->
                <?php if ($ayar['hakkimizda_calisanlar_switch']==1) { ?>
                <div class="section-full p-t80 p-b50 bg-gray">
                    <div class="container">
                        <div class=" m-b70">
                            <!-- TITLE START -->
                            <div class="section-head text-center">
                                <h2 class="text-uppercase"><?php echo $ayar['calisan_baslik']; ?></h2>
                                <div class="wt-separator-outer">
                                   <div class="wt-separator style-square">
                                       <span class="separator-left bg-primary"></span>
                                       <span class="separator-right bg-primary"></span>
                                   </div>
                               </div>
                                <p><?php echo $ayar['calisan_aciklama']; ?></p>
                            </div>
                            <!-- TITLE START -->
                        </div> 
                        <div class="section-content">
                            <div class="row">
                                
                                <!-- COLUMNS 1 -->
                                <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                                    <div class="wt-team-three bg-white p-a10">
                                        <div class="wt-team-media radius-bx m-a30 ">
                                            <a href="javascript:void(0);"><img src="images/our-team2/pic-1.jpg" alt="" class="radius-bx"></a>
                                        </div>
                                        <div class="wt-team-info p-lr10  text-center">
                                            <h4 class="wt-team-title"><a href="javascript:void(0);"><?php echo $ayar['calisan_kisi_bilgi']['calisan_kisi_1_adi']; ?></a></h4>
                                            <p><?php echo $ayar['calisan_kisi_bilgi']['calisan_kisi_1_gorevi']; ?></p>
                                            <div class="wt-separator bg-primary"></div>
                                            <ul class="social-icons social-radius social-dark">
                                              <li><a href="<?php echo $ayar['calisan_kisi_bilgi']['calisan_kisi_1_linkedin']; ?>" class="fa fab-linkedin"></a></li>
                                           </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 -->
                                  <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                                    <div class="wt-team-three bg-white p-a10">
                                        <div class="wt-team-media radius-bx m-a30 ">
                                            <a href="javascript:void(0);"><img src="images/our-team2/pic-1.jpg" alt="" class="radius-bx"></a>
                                        </div>
                                        <div class="wt-team-info p-lr10  text-center">
                                            <h4 class="wt-team-title"><a href="javascript:void(0);"><?php echo $ayar['calisan_kisi_bilgi']['calisan_kisi_2_adi']; ?></a></h4>
                                            <p><?php echo $ayar['calisan_kisi_bilgi']['calisan_kisi_2_gorevi']; ?></p>
                                            <div class="wt-separator bg-primary"></div>
                                            <ul class="social-icons social-radius social-dark">
                                              <li><a href="<?php echo $ayar['calisan_kisi_bilgi']['calisan_kisi_2_linkedin']; ?>" class="fa fa-linkedin"></a></li>
                                           </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 -->
                                  <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                                    <div class="wt-team-three bg-white p-a10">
                                        <div class="wt-team-media radius-bx m-a30 ">
                                            <a href="javascript:void(0);"><img src="images/our-team2/pic-1.jpg" alt="" class="radius-bx"></a>
                                        </div>
                                        <div class="wt-team-info p-lr10  text-center">
                                            <h4 class="wt-team-title"><a href="javascript:void(0);"><?php echo $ayar['calisan_kisi_bilgi']['calisan_kisi_3_adi']; ?></a></h4>
                                            <p><?php echo $ayar['calisan_kisi_bilgi']['calisan_kisi_3_gorevi']; ?></p>
                                            <div class="wt-separator bg-primary"></div>
                                            <ul class="social-icons social-radius social-dark">
                                              <li><a href="<?php echo $ayar['calisan_kisi_bilgi']['calisan_kisi_3_linkedin']; ?>" class="fa fa-linkedin"></a></li>
                                           </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 4 -->
                                  <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                                    <div class="wt-team-three bg-white p-a10">
                                        <div class="wt-team-media radius-bx m-a30 ">
                                            <a href="javascript:void(0);"><img src="images/our-team2/pic-1.jpg" alt="" class="radius-bx"></a>
                                        </div>
                                        <div class="wt-team-info p-lr10  text-center">
                                            <h4 class="wt-team-title"><a href="javascript:void(0);"><?php echo $ayar['calisan_kisi_bilgi']['calisan_kisi_4_adi']; ?></a></h4>
                                            <p><?php echo $ayar['calisan_kisi_bilgi']['calisan_kisi_4_gorevi']; ?></p>
                                            <div class="wt-separator bg-primary"></div>
                                            <ul class="social-icons social-radius social-dark">
                                              <li><a href="<?php echo $ayar['calisan_kisi_bilgi']['calisan_kisi_4_linkedin']; ?>" class="fa fa-linkedin"></a></li>
                                           </ul>
                                        </div>
                                    </div>
                                </div>
                         
                            
                                
                             </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
                <!-- TEAM STYLE THREE END -->  
                               
 
                    
        </div>
<?php include(TEMPLATEPATH.'/footer.php');?>