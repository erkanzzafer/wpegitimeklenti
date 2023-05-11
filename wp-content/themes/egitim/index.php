 <?php include(TEMPLATEPATH.'/header.php'); ?>
   <!-- CONTENT START -->
        <div class="page-content">
            <!-- SLIDER START -->
            <div class="main-slider style-two default-banner">
           		<div class="tp-banner-container">
                    <div class="tp-banner" >
                        <!-- START REVOLUTION SLIDER 5.4.1 -->
                        <div id="rev_slider_1077_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="scroll-effect136" data-source="gallery" style="background-color:#111111;padding:0px;">
                        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                            <div id="rev_slider_1077_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                                <ul>	

                                    <?php $rs=100; foreach ($ayar['slider'] as $slide)  { ?>
                                        

                                   
                                    <!-- SLIDE  -->
                                    <li data-index="rs-<?php echo $rs ?>" data-transition="slideoverhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"  data-thumb="<?php echo $slide['slider_image']['thumbnail']; ?>"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Big &amp; Bold" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo $slide['slider_image']['url']; ?>"  alt="<?php echo $slide['slider_image']['alt']; ?>"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                        
                                        <!-- LAYER NR. 1 -->
                                		<div class="tp-caption tp-shape tp-shapewrapper" 
                                            id="slide-<?php echo $rs ?>-layer-1" 
                                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                            data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
                                            data-width="full"
                                            data-height="['400','400','400','550']"
                                            data-whitespace="nowrap"
                                            data-type="shape" 
                                            data-basealign="slide" 
                                            data-responsive_offset="off" 
                                            data-responsive="off"
                                            data-frames='[{"from":"opacity:0;","speed":100,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":0,"to":"opacity:0;","ease":"nothing"}]'
                                            data-textAlign="['left','left','left','left']"
                                            data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]"
                                            data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 5;text-transform:left;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                            border-width:0px;background:linear-gradient(to top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.4) 100%);cursor:default;"> 
                                        </div>
                                        
                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption tp-shape tp-shapewrapper  " 
                                            id="slide-<?php echo $rs ?>-layer-2" 
                                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
                                            data-width="full"
                                            data-height="['400','400','400','550']"
                                            data-whitespace="nowrap"
                                            data-type="shape" 
                                            data-basealign="slide" 
                                            data-responsive_offset="off" 
                                            data-responsive="off"
                                            data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                            data-textAlign="['left','left','left','left']"
                                            data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]"
                                            data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 5;text-transform:left;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                            border-width:0px;background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 100%);cursor:default;"> 
                                        </div>
                                
                                        <!-- LAYER NR. 3 -->
                                        <div class="tp-caption BigBold-Title   tp-resizeme" 
                                            id="slide-<?php echo $rs ?>-layer-3" 
                                            data-x="['left','left','left','left']" data-hoffset="['50','50','30','17']" 
                                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['110','110','180','180']" 
                                            data-fontsize="['90','70','50','30']"
                                            data-lineheight="['100','90','60','60']"
                                            data-fontweight="['800','800','800','800']"
                                            data-width="['none','none','none','400']"
                                            data-height="none"
                                            data-whitespace="['nowrap','nowrap','nowrap','normal']"
                                 
                                            data-type="text" 
                                            data-basealign="slide" 
                                            data-responsive_offset="off" 
                                
                                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},
                                            {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                            data-textAlign="['left','left','left','left']"
                                            data-paddingtop="[10,10,10,10]"
                                            data-paddingright="[0,0,0,0]"
                                            data-paddingbottom="[10,10,10,10]"
                                            data-paddingleft="[0,0,0,0]"
                                
                                            style="z-index: 6; 
                                            text-transform:uppercase;
                                            color:#fff;
                                            font
                                            "><span class="text-primary"> <?php echo $slide['slider_baslik_1']; ?></span> <?php echo $slide['slider_baslik_1_2']; ?> </div>
                                
                                        <!-- LAYER NR. 4 -->
                                        <div class="tp-caption BigBold-SubTitle  " 
                                            id="slide-<?php echo $rs ?>-layer-4" 
                                            data-x="['left','left','left','left']" data-hoffset="['55','55','33','20']" 
                                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','1','74','78']" 
                                            data-fontsize="['15','15','15','13']"
                                            data-lineheight="['24','24','24','20']"
                                            data-width="['410','410','410','280']"
                                            data-height="['60','100','100','100']"
                                            data-whitespace="normal"
                                 
                                            data-type="text" 
                                            data-basealign="slide" 
                                            data-responsive_offset="off" 
                                            data-responsive="off"
                                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                            data-textAlign="['left','left','left','left']"
                                            data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]"
                                            data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                
                                            style="z-index: 7; 
                                            color:#fff;
                                            "><?php echo $slide['slider_baslik_2']; ?> 
                                            </div>
                                
                                        <!-- LAYER NR. 5 -->
                                         <?php if ($slide['slider_buton_switch']==1){ ?>
                                        <div class="tp-caption BigBold-Button rev-btn " 
                                            id="slide-<?php echo $rs; ?>-layer-5" 
                                            data-x="['left','left','left','left']" data-hoffset="['480','480','30','20']" 
                                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['35','35','35','35']"  
                                            data-width="none"
                                            data-height="none"
                                            data-whitespace="nowrap"                                 
                                            data-type="button" 
                                            data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                                            data-basealign="slide" 
                                            data-responsive_offset="off" 
                                            data-responsive="off"
                                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                            data-textAlign="['left','left','left','left']"
                                            data-paddingtop="[15,15,15,15]"
                                            data-paddingright="[50,50,50,50]"
                                            data-paddingbottom="[15,15,15,15]"
                                            data-paddingleft="[50,50,0,0]"
                                
                                            style="z-index: 8; ">
                                           
                                            <a href="<?php echo $slide['slider_buton_link']; ?>" class="site-button outline white"><?php echo $slide['slider_buton_text']; ?></a> </div>    
                                        <?php } ?>
                                    </li>
                                     <?php $rs+=100; }  ?>
                                    <!-- SLIDE  -->

                                </ul>
                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
                            </div>
                        </div>
                        <!-- END REVOLUTION SLIDER -->
                    </div>
            	</div>
            </div>
            <!-- SLIDER END -->
            
            <!-- ABOUT COMPANY SECTION START -->
            <div class="section-full p-tb100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-6 col-xs-100pc">
                            <div class="about-com-pic">
                                <img src="<?php echo $ayar['homepage']['homepage_hakkimizda_image']['url']; ?>" alt="" class="img-responsive"/>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-6 col-xs-100pc">
                            <div class="section-head text-left">
                                <h2 class="text-uppercase"><?php echo $ayar['homepage']['homepage_hakkimizda_baslik']; ?> </h2>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator style-square">
                                        <span class="separator-left bg-primary"></span>
                                        <span class="separator-right bg-primary"></span>
                                    </div>
                                </div>
                                <?php echo $ayar['homepage']['homepage_hakkimizda_description'];?>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="about-types row">
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc p-tb20">
                                    <div class="wt-icon-box-wraper left">
                                        <div class="icon-sm text-primary">
                                            <a href="#" class="icon-cell p-t5 center-block"><i class="<?php echo $ayar['homepage']['homepage_hakkimizda_alan1_icon']; ?>" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0"><?php  echo $ayar['homepage']['homepage_hakkimizda_alan1_title']; ?></h5>
                                            <p><?php  echo $ayar['homepage']['homepage_hakkimizda_alan1_text']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                  <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc p-tb20">
                                    <div class="wt-icon-box-wraper left">
                                        <div class="icon-sm text-primary">
                                            <a href="#" class="icon-cell p-t5 center-block"><i class="<?php echo $ayar['homepage']['homepage_hakkimizda_alan2_icon']; ?>" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0"><?php  echo $ayar['homepage']['homepage_hakkimizda_alan2_title']; ?></h5>
                                            <p><?php  echo $ayar['homepage']['homepage_hakkimizda_alan2_text']; ?></p>
                                        </div>
                                    </div>
                                </div>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- ABOUT COMPANY SECTION END -->   
                     
            <!-- LATEST PROJECT SECTION START -->
            <div class="section-full p-tb80 bg-no-repeat bg-black" style="background-image:url(images/background/bg5.jpg);">
            	<div class="overlay-main"></div>
                
                <!-- IMAGE CAROUSEL START -->
                
                <!-- TITLE START -->
                <div class="container">
                    <div class="section-head">
                        <div class="container">
                            <h2 class="text-uppercase text-white">LATEST PROJECT </h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator style-square has-bg">
                                    <span class="separator-left bg-primary"></span>
                                    <span class="separator-right bg-primary"></span>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TITLE END -->
                <div class="section-content">
                    <!-- CAROUSEL -->
                    <div class="section-content ">
                        <div class="owl-carousel home-carousel-1 mfp-gallery gallery owl-btn-vertical-center">
                            
                            <!-- COLUMNS 1 -->
                            <div class="item">
                                <div class="flip-container">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx">
                                            <img src="<?php echo $temayolu; ?>/images/gallery/portrait/pic1.jpg" alt="">	
                                        </div>
                                        <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                            <div class="wt-info-media-zoom">
                                                <a href="images/latest-projects/large/pic1.jpg"  class="mfp-link">
                                                    <i class="fa fa-search-plus font-24 p-a10"></i>
                                                </a>
                                            </div>
                                        	<div class="wt-info-text p-a30">
                                            	<span><i  class="flaticon-golden-gate-bridge text-primary"></i></span>
                                                <h3 class="text-uppercase">Bridge Construction</h3>
                                                <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants.</p>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="item">
                                <div class="flip-container">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx">
                                            <img src="<?php echo $temayolu; ?>/images/gallery/portrait/pic2.jpg" alt="">	
                                        </div>
                                        <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                            <div class="wt-info-media-zoom">
                                                <a href="images/latest-projects/large/pic2.jpg"  class="mfp-link">
                                                    <i class="fa fa-search-plus font-24 p-a10"></i>
                                                </a>
                                            </div>
                                        	<div class="wt-info-text p-a30">
                                               <span><i  class="flaticon-construction-12 text-primary"></i></span>
                                                <h3 class="text-uppercase">Bridge Construction</h3>
                                                <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants.</p>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="item">
                                <div class="flip-container">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx">
                                            <img src="<?php echo $temayolu; ?>/images/gallery/portrait/pic3.jpg" alt="">	
                                        </div>
                                        <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                            <div class="wt-info-media-zoom">
                                                <a href="images/latest-projects/large/pic3.jpg"  class="mfp-link">
                                                    <i class="fa fa-search-plus font-24 p-a10"></i>
                                                </a>
                                            </div>
                                        	<div class="wt-info-text p-a30">
                                                <span><i class="flaticon-work-tools text-primary"></i></span>
                                                <h3 class="text-uppercase">Road Construction</h3>
                                                <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants.</p>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="item">
                                <div class="flip-container">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx">
                                            <img src="<?php echo $temayolu; ?>/images/gallery/portrait/pic4.jpg" alt="">	
                                        </div>
                                        <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                            <div class="wt-info-media-zoom">
                                                <a href="images/latest-projects/large/pic4.jpg"  class="mfp-link">
                                                    <i class="fa fa-search-plus font-24 p-a10"></i>
                                                </a>
                                            </div>
                                        	<div class="wt-info-text p-a30">
                                            	<span><i  class="flaticon-transport-1 text-primary"></i></span>
                                                <h3 class="text-uppercase">Digging</h3>
                                                <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants.</p>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="item">
                                <div class="flip-container">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx">
                                            <img src="<?php echo $temayolu; ?>/images/gallery/portrait/pic5.jpg" alt="">	
                                        </div>
                                        <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                            <div class="wt-info-media-zoom">
                                                <a href="images/latest-projects/large/pic5.jpg"  class="mfp-link">
                                                    <i class="fa fa-search-plus font-24 p-a10"></i>
                                                </a>
                                            </div>
                                        	<div class="wt-info-text p-a30">
                                            	<span><i  class="flaticon-wall text-primary"></i></span>
                                                <h3 class="text-uppercase">Building</h3>
                                                <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants.</p>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 6 -->
                            <div class="item">
                                <div class="flip-container">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx">
                                            <img src="<?php echo $temayolu; ?>/images/gallery/portrait/pic6.jpg" alt="">	
                                        </div>
                                        <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                            <div class="wt-info-media-zoom">
                                                <a href="images/latest-projects/large/pic6.jpg"  class="mfp-link">
                                                    <i class="fa fa-search-plus font-24 p-a10"></i>
                                                </a>
                                            </div>
                                        	<div class="wt-info-text p-a30">
                                                <span><i  class="flaticon-sea-dyke text-primary"></i></span>
                                                <h3 class="text-uppercase">Dam Construction</h3>
                                                <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants.</p>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 7 -->
                            <div class="item">
                                <div class="flip-container">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx">
                                            <img src="<?php echo $temayolu; ?>/images/gallery/portrait/pic7.jpg" alt="">	
                                        </div>
                                        <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                            <div class="wt-info-media-zoom">
                                                <a href="images/latest-projects/large/pic7.jpg"  class="mfp-link">
                                                    <i class="fa fa-search-plus font-24 p-a10"></i>
                                                </a>
                                            </div>
                                        	<div class="wt-info-text p-a30">
                                            	<span><i class="flaticon-tool-1 text-primary"></i></span>
                                                <h3 class="text-uppercase">Bridge Construction</h3>
                                                <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants.</p>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 8 -->
                            <div class="item">
                                <div class="flip-container">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx">
                                            <img src="<?php echo $temayolu; ?>/images/gallery/portrait/pic8.jpg" alt="">	
                                        </div>
                                        <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                            <div class="wt-info-media-zoom">
                                                <a href="images/latest-projects/large/pic8.jpg"  class="mfp-link">
                                                    <i class="fa fa-search-plus font-24 p-a10"></i>
                                                </a>
                                            </div>
                                        	<div class="wt-info-text p-a30">
                                                <span><i  class="flaticon-construction text-primary"></i></span>
                                                <h3 class="text-uppercase">Office Construction</h3>
                                                <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants.</p>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
         	</div>
            <!-- LATEST PROJECT SECTION END -->
          
            <!-- WHY CHOOSE US SECTION START  -->
            <div class="section-full  p-t80 p-b80 bg-gray">
            	<div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h2 class="text-uppercase">Why Choose us</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content no-col-gap">
                        <div class="row">
                        
                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-6 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-sm text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="fa fa-life-ring" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">BEST QUALITY</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-md-4 col-sm-6 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-sm text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="fa fa-trophy" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content ">
                                        <h5 class="wt-tilte text-uppercase">INTEGRITY</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-md-4 col-sm-6 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-sm text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">STRATEGY</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="col-md-4 col-sm-6 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-sm text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="fa fa-users" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">SAFETY</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="col-md-4 col-sm-6 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-sm text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="fa fa-area-chart" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">COMMUNITY</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 6 -->
                            <div class="col-md-4 col-sm-6 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-sm text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="fa fa-cogs" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">SUSTAINABILITY</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </div>
            </div>
            <!-- WHY CHOOSE US SECTION END -->              
           
            <!-- COMPANY DETAIL SECTION START -->
            <div class="section-full p-t50 p-b50 overlay-wraper bg-parallax"  data-stellar-background-ratio="0.5" style="background-image:url(images/background/bg-5.jpg);">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                        	<div class="text-right text-white">
                            	<h3 class="font-24">The Construction Company</h3>
                                <h1 class="font-60">AWESOME FACTS</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Curabitur tortor mi, eleifend ornare lobortis non. Nulla porta purus quis iaculis ultrices. Proin aliquam sem at nibh hendrerit sagittis. Nullam ornare odio eu lacus tincidunt malesuada.</p>
                            </div>
                         </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-2 col-sm-4">
                            <div class="status-marks  text-white m-tb10">
                                <div class="status-value text-right">
                                	<span class="counter">1150</span>
                                    <i class="fa fa-building font-26 m-l15"></i>
                                </div>
                                <h6 class="text-uppercase text-white text-right">PROJECT COMPLETED</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="status-marks  text-white m-tb10">
                                <div class="status-value text-right">
                                	<span class="counter">5223</span>
                                    <i class="fa fa-users font-26 m-l15"></i>
                                </div>
                                <h6 class="text-uppercase text-white text-right">HAPPY CLIENTS</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-">
                            <div class="status-marks  text-white m-tb10">
                                <div class="status-value text-right">
                                	<span class="counter">4522</span>
                                    <i class="fa fa-user-plus font-26 m-l15"></i>
                                </div>
                                <h6 class="text-uppercase text-white text-right">WORKERS EMPLOYED</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COMPANY DETAIL SECTION End --> 
            
            <!-- OUR TEAM MEMBER SECTION START -->
            <div class="section-full wt-our-team bg-white p-t80 p-b50">
                <div class="container">
                
                	<!-- TITTLE START -->
                    <div class="section-head text-center">
                        <h2 class="text-uppercase">Our team</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <!-- TITLE END -->
                    
                    <div class="section-content">
                        <div class="row">
                        
                            <!-- COLUMNS 1 --> 
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                                <div class="wt-team-four">
                                    <div class="wt-team-media">
                                        <a href="javascript:void(0);"><img src="<?php echo $temayolu; ?>/images/our-team/pic1.jpg" alt="" ></a>
                                    </div>
                                    <div class="wt-team-info">
                                        <div class="wt-team-skew-block">
                                            <div class="social-icons-outer p-a20">
                                                <ul class="social-icons social-square social-dark white-border m-b0">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                                </ul>
                                            </div>
                                         </div>
                                         <div class="p-a20">
                                            <h4 class="wt-team-title text-uppercase"><a href="javascript:void(0);">Richard Wagner</a></h4>
                                            <p>Building Worker</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                                <div class="wt-team-four">
                                    <div class="wt-team-media">
                                        <a href="javascript:void(0);"><img src="<?php echo $temayolu; ?>/images/our-team/pic2.jpg" alt="" ></a>
                                    </div>
                                    <div class="wt-team-info">
                                        <div class="wt-team-skew-block">
                                            <div class="social-icons-outer p-a20">
                                                <ul class="social-icons social-square social-dark white-border m-b0">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                                </ul>
                                            </div>
                                      </div>
                                         <div class="p-a20">
                                            <h4 class="wt-team-title text-uppercase"><a href="javascript:void(0);">Lisa Anderson</a></h4>
                                            <p>Building Worker</p>
                                        </div>
                                  </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                                <div class="wt-team-four">
                                    <div class="wt-team-media">
                                        <a href="javascript:void(0);"><img src="<?php echo $temayolu; ?>/images/our-team/pic3.jpg" alt="" ></a>
                                    </div>
                                    <div class="wt-team-info">
                                        <div class="wt-team-skew-block">
                                            <div class="social-icons-outer p-a20">
                                                <ul class="social-icons social-square social-dark white-border m-b0">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                                </ul>
                                            </div>
                                      </div>
                                         <div class="p-a20">
                                            <h4 class="wt-team-title text-uppercase"><a href="javascript:void(0);">Tommy Atkins</a></h4>
                                            <p>Building Worker</p>
                                        </div>
                                  </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                                <div class="wt-team-four">
                                    <div class="wt-team-media">
                                        <a href="javascript:void(0);"><img src="<?php echo $temayolu; ?>/images/our-team/pic4.jpg" alt="" ></a>
                                    </div>
                                    <div class="wt-team-info">
                                        <div class="wt-team-skew-block">
                                            <div class="social-icons-outer p-a20">
                                                <ul class="social-icons social-square social-dark white-border m-b0">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                                </ul>
                                            </div>
                                      </div>
                                         <div class="p-a20">
                                            <h4 class="wt-team-title text-uppercase"><a href="javascript:void(0);">John Halpern</a></h4>
                                            <p>Building Worker</p>
                                        </div>
                                  </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                
                </div>
            </div>
            <!-- OUR TEAM MEMBER SECTION End -->
            
            <!-- SECTION CONTENT START -->
            <div class="section-full bg-secondry no-col-gap">
            	
                <div class="container-fluid">
                        
                        <div class="row">
                        	<div class="col-md-6">
                            	<div class="section-content  p-tb50 p-r30">
                                	<div class="wt-left-part">
                                    	<div class="section-head">
                                            <h2 class="text-white">Frequently Asked Questions</h2>
                                            <div class="wt-separator-outer">
                                                <div class="wt-separator style-square has-bg">
                                                    <span class="separator-left bg-primary"></span>
                                                    <span class="separator-right bg-primary"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wt-accordion acc-bg-primary acc-has-bg" id="accordion6">
                                            <div class="panel wt-panel">
                                            
                                                <div class="acod-head acc-actives">
                                                     <h6 class="acod-title text-uppercase">
                                                        <a data-toggle="collapse" href="#collapseOne6" data-parent="#accordion6" ><i class="fa fa-globe"></i>
                                                            When was the Constitution adopted?
                                                            <span class="indicator"><i class="fa fa-plus"></i></span>
                                                        </a>
                                                     </h6>
                                                </div>
                                                
                                                <div id="collapseOne6" class="acod-body collapse in">
                                                    <div class="acod-content p-tb15">Web design lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised sheets containing Lorem Ipsum passagese.popularised sheets containing Lorem Ipsum passagese.popularised sheets containing Lorem Ipsum passagese.</div>
                                                </div>
                                                
                                            </div>
                                            <div class="panel wt-panel">
                                                <div class="acod-head">
                                                     <h6 class="acod-title text-uppercase">
                                                        <a data-toggle="collapse" href="#collapseTwo6" class="collapsed" data-parent="#accordion6" ><i class="fa fa-photo"></i>
                                                        What is the necessity of the Preamble? 
                                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                                        </a>
                                                     </h6>
                                                </div>
                                                <div id="collapseTwo6" class="acod-body collapse">
                                                    <div class="acod-content p-tb15">Graphic design lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised sheets containing Lorem Ipsum passagese.</div>
                                                </div>
                                            </div>
                                            <div class="panel wt-panel">
                                                <div class="acod-head">
                                                 <h6 class="acod-title text-uppercase">
                                                    <a data-toggle="collapse"  href="#collapseThree6" class="collapsed"  data-parent="#accordion6"><i class="fa fa-cog"></i>
                                                   When did the Constitution come into force? 
                                                    <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                 </h6>
                                                </div>
                                                <div id="collapseThree6" class="acod-body collapse">
                                                    <div class="acod-content p-tb15">Developement lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised sheets containing Lorem Ipsum passagese.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                               
                            </div>
                            <div class="col-md-6">
                            	<div class="section-content overlay-wraper p-tb50 p-l30 bg-cover"  style="background-image:url(images/background/bg9.jpg);">
                                	<div class="overlay-main bg-black opacity-07"></div>
                                    <div class="wt-right-part">
                                        <div class="section-head">
                                            <h2 class="text-white">Market Sectors</h2>
                                            <div class="wt-separator-outer">
                                                <div class="wt-separator style-square has-bg">
                                                    <span class="separator-left bg-primary"></span>
                                                    <span class="separator-right bg-primary"></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <span class="progressText text-white"><B>Commercial</B></span>
                                        <div class="progress wt-probar-1 with-overlay m-b30">
                                            <div class="progress-bar bg-primary " role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" >
                                                <span  class="popOver" data-toggle="tooltips" data-placement="top" title="85%"></span>
                                            </div>
                                        </div>
                                        
                                        <span class="progressText text-white"><B>Healthcare</B></span>
                                        <div class="progress wt-probar-1 with-overlay m-b30">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="75" aria-valuemin="10" aria-valuemax="100">
                                                <span  class="popOver" data-toggle="tooltips" data-placement="top" title="75%"></span>
                                            </div>
                                        </div>
            
                                        <span class="progressText text-white"><B>Entertainment</B></span>
                                        <div class="progress wt-probar-1 with-overlay m-b30">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                <span  class="popOver" data-toggle="tooltips" data-placement="top" title="65%"></span>
                                            </div>
                                        </div>
                                        
                                        <span class="progressText text-white"><B>Residential</B></span>
                                        <div class="progress wt-probar-1 with-overlay m-b30">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                                <span  class="popOver" data-toggle="tooltips" data-placement="top" title="55%"></span>
                                            </div>
                                        </div>
            
                                        <span class="progressText text-white"><B>Transportation</B></span>
                                        <div class="progress wt-probar-1 with-overlay m-b30">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                <span  class="popOver" data-toggle="tooltips" data-placement="top" title="70%"></span>
                                            </div>
                                        </div>
                                        
                                        <span class="progressText text-white"><B>Religious</B></span>
                                        <div class="progress wt-probar-1 with-overlay">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                <span  class="popOver" data-toggle="tooltips" data-placement="top" title="75%"></span>
                                            </div>
                                        </div>
                                        
                                        <span class="progressText text-white"><B>Green Home</B></span>
                                        <div class="progress wt-probar-1 with-overlay">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                <span  class="popOver" data-toggle="tooltips" data-placement="top" title="85%"></span>
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
            <!-- SECTION CONTENT  END --> 
                     
            <!-- LATEST BLOG SECTION START -->
            <div class="section-full latest-blog bg-gray p-t80 p-b50">
                <div class="container">
                	<!-- TITLE -->
                    <div class="section-head text-center">
                        <h2 class="text-uppercase">Latest blog post</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been tahe industry.</p>
                    </div>
                    <!-- TITLE -->
                    
                    <div class="section-content ">
                        <div class="row equal-wraper">
                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="blog-post latest-blog-1 date-style-2">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="javascript:;"><img src="<?php echo $temayolu; ?>/images/blog/latest-blog/pic1.jpg" alt=""></a>
                                    </div>
                                    <div class="wt-post-info p-a30 p-b20 bg-white">
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="javascript:;">Blogpost With Image</a></h3>
                                        </div>
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><i class="fa fa-calendar"></i><strong>6 Dec</strong> <span> 2017</span></li>
                                                <li class="post-author"><i class="fa fa-user"></i>By <a href="javascript:;">John</a> </li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">0 comment</a> </li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since
                                             the when an printer .</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="blog-post latest-blog-1 date-style-2">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="javascript:;"><img src="<?php echo $temayolu; ?>/images/blog/latest-blog/pic2.jpg" alt=""></a>
                                    </div>
                                    <div class="wt-post-info p-a30 p-b20 bg-white">
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="javascript:;">Blogpost With Image</a></h3>
                                        </div>
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><i class="fa fa-calendar"></i><strong>6 Dec</strong> <span> 2017</span></li>
                                                <li class="post-author"><i class="fa fa-user"></i>By <a href="javascript:;">John</a> </li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">0 comment</a> </li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since
                                          the when an printer .</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="blog-post latest-blog-1 date-style-2">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="javascript:;"><img src="<?php echo $temayolu; ?>/images/blog/latest-blog/pic3.jpg" alt=""></a>
                                    </div>
                                    <div class="wt-post-info p-a30 p-b20 bg-white">
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="javascript:;">Blogpost With Image</a></h3>
                                        </div>
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><i class="fa fa-calendar"></i><strong>6 Dec</strong> <span> 2017</span></li>
                                                <li class="post-author"><i class="fa fa-user"></i>By <a href="javascript:;">John</a> </li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">0 comment</a> </li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since
                                          the when an printer .</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LATEST BLOG SECTION END -->         
            
            <!-- TESTIMONIAL SECTION START -->
            <div class="section-full p-t80 p-b50 overlay-wraper bg-parallax" data-stellar-background-ratio="0.5" style="background-image:url(images/background/bg2.jpg);">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="section-head text-white text-center">
                        <h2 class="text-uppercase">What Our Client Say</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square has-bg">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="owl-carousel testimonial-three">
                            <div class="item">
                                <div class="testimonial-3 testimonial-bg">
                                    <div class="quote-left"></div>
                                    <div class="testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy .</p>
                                    </div>
                                    <div class="testimonial-detail">
                                        <strong class="testimonial-name">David Matin</strong>
                                        <span class="testimonial-position">Student</span>
                                    </div>
                                    <div class="testimonial-pic radius shadow"><img src="<?php echo $temayolu; ?>/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-3 testimonial-bg">
                                    <div class="quote-left"></div>
                                    <div class="testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy .</p>
                                    </div>
                                    <div class="testimonial-detail">
                                        <strong class="testimonial-name">David Matin</strong>
                                        <span class="testimonial-position">Student</span>
                                    </div>
                                    <div class="testimonial-pic radius shadow"><img src="<?php echo $temayolu; ?>/images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-3 testimonial-bg">
                                    <div class="quote-left"></div>
                                    <div class="testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy .</p>
                                    </div>
                                    <div class="testimonial-detail">
                                        <strong class="testimonial-name">David Matin</strong>
                                        <span class="testimonial-position">Student</span>
                                    </div>
                                    <div class="testimonial-pic radius shadow"><img src="<?php echo $temayolu; ?>/images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-3 testimonial-bg">
                                    <div class="quote-left"></div>
                                    <div class="testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy .</p>
                                    </div>
                                    <div class="testimonial-detail">
                                        <strong class="testimonial-name">David Matin</strong>
                                        <span class="testimonial-position">Student</span>
                                    </div>
                                    <div class="testimonial-pic radius shadow"><img src="<?php echo $temayolu; ?>/images/testimonials/pic43.jpg" width="100" height="100" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TESTIMONIAL  SECTION END -->
            
            <!-- OUR CLIENT SLIDER START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                
                	<!-- TITLE START -->
                    <div class="section-head text-center">
                        <h2 class="text-uppercase">Our Client</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <!-- TITLE END -->
                    
                    <!-- IMAGE CAROUSEL START -->
                    <div class="section-content">
                        <div class="owl-carousel client-logo-carousel">
                        
                        	<!-- COLUMNS 1 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="<?php echo $temayolu; ?>/images/client-logo/logo1.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="<?php echo $temayolu; ?>/images/client-logo/logo2.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="<?php echo $temayolu; ?>/images/client-logo/logo3.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="<?php echo $temayolu; ?>/images/client-logo/logo4.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="<?php echo $temayolu; ?>/images/client-logo/logo5.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 6 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="<?php echo $temayolu; ?>/images/client-logo/logo6.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 7 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="<?php echo $temayolu; ?>/images/client-logo/logo1.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 8 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="<?php echo $temayolu; ?>/images/client-logo/logo2.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 9 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="<?php echo $temayolu; ?>/images/client-logo/logo3.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 10 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="<?php echo $temayolu; ?>/images/client-logo/logo4.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 11 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="<?php echo $temayolu; ?>/images/client-logo/logo5.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 12 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="<?php echo $temayolu; ?>/images/client-logo/logo6.png" alt=""></a>
                                    </div>
                                </div>
                            </div>                        
                        
                        </div>
                    </div>
                    <!-- IMAGE CAROUSEL START -->
                </div>
            
            </div>
            <!-- OUR CLIENT SLIDER END -->             
              
        </div>
        <!-- CONTENT END -->
         <?php include(TEMPLATEPATH.'/footer.php'); ?>