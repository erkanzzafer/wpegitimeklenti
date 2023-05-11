<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'my_settings';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => 'Tema Paneli',
  'menu_slug'  => 'panel',
) );

//
// Create a Zection
//Site Bilgileri
CSF::createSection( $prefix, array(
  'title'  => 'Genel Ayarlar',
  'icon'   => 'fas fa-rocket',
  'fields' => array( 
    array(
      'id'    => 'site_logo',
      'type'  => 'media',
      'title' => 'Site Logo',
      'url'   => false,
    ),
     array(
      'id'    => 'site_favicon',
      'type'  => 'media',
      'title' => 'Favicon',
      'url'   => false,
    ), array(
      'id'    => 'site_keywords',
      'type'  => 'textarea',
      'title' => 'Anahtar Kelimeler',
      'help'  => 'Anahtar kelimerin arasına virgül koyunuz.'
    ), array(
      'id'    => 'site_analytic',
      'type'  => 'textarea',
      'title' => 'Google Analytic Kod',
    ),
     array(
      'id'    => 'site_footer',
      'type'  => 'textarea',
      'title' => 'Footer yazısı',
      'help'  => 'Footerda görünecek yazıyı buradan değiştirebilirsiniz'
    ),array(
      'id'    => 'site_footer_aciklama',
      'type'  => 'wp_editor',
      'title' => 'Footer yazısı',
      'help'  => 'Footerdaki Açıklama Yazısı'
    ),
  )
  ));
//Site Bilgileri
CSF::createSection( $prefix, array(
  'id'    => 'hakkimizda',
  'title' => 'Hakkımızda Sayfası',
  'icon'  => 'fas fa-plus-circle',
) );

//Neler
CSF::createSection( $prefix, array(
  'title'  => 'Neler Yaparız?',
  'icon'   => 'fas fa-home',
  'parent' => 'hakkimizda',
  'fields' => array(

    array(
      'id'    => 'neler_baslik',
      'type'  => 'text',
      'title' => 'Başlık',
    ), array(
      'id'    => 'neler_aciklama',
      'type'  => 'textarea',
      'title' => 'Textarea',
      'help'  => 'Açıklama',
    ),array(
      'id'         => 'neler_alan',
      'type'       => 'accordion',
      'title'      => 'Alanlar',
      'accordions' => array(

        array(
          'title'  => '1. Alan',
          'fields' => array(
            array(
              'id' => 'Neler_alan_1_icon',
              'type' => 'icon',
              'title' => 'icon',
            ),
            array(
              'id'    => 'neler_alan_1_baslik',
              'type'  => 'text',
              'title' => 'Başlık',
            ),
            array(
              'id'    => 'neler_alan_1_aciklama',
              'type'  => 'textarea',
              'title' => 'Açıklama',
            ),
          )
        ),array(
          'title'  => '2. Alan',
          'fields' => array(
            array(
              'id' => 'Neler_alan_2_icon',
              'type' => 'icon',
              'title' => 'icon',
            ),
            array(
              'id'    => 'neler_alan_2_baslik',
              'type'  => 'text',
              'title' => 'Başlık',
            ),
            array(
              'id'    => 'neler_alan_2_aciklama',
              'type'  => 'textarea',
              'title' => 'Açıklama',
            ),
          )
        ),array(
          'title'  => '3. Alan',
          'fields' => array(
            array(
              'id' => 'Neler_alan_3_icon',
              'type' => 'icon',
              'title' => 'icon',
            ),
            array(
              'id'    => 'neler_alan_3_baslik',
              'type'  => 'text',
              'title' => 'Başlık',
            ),
            array(
              'id'    => 'neler_alan_3_aciklama',
              'type'  => 'textarea',
              'title' => 'Açıklama',
            ),
          )
        ),array(
          'title'  => '4. Alan',
          'fields' => array(
            array(
              'id' => 'Neler_alan_4_icon',
              'type' => 'icon',
              'title' => 'icon',
            ),
            array(
              'id'    => 'neler_alan_4_baslik',
              'type'  => 'text',
              'title' => 'Başlık',
            ),
            array(
              'id'    => 'neler_alan_4_aciklama',
              'type'  => 'textarea',
              'title' => 'Açıklama',
            ),
          )
        ),array(
          'title'  => '5. Alan',
          'fields' => array(
            array(
              'id' => 'Neler_alan_5_icon',
              'type' => 'icon',
              'title' => 'icon',
            ),
            array(
              'id'    => 'neler_alan_5_baslik',
              'type'  => 'text',
              'title' => 'Başlık',
            ),
            array(
              'id'    => 'neler_alan_5_aciklama',
              'type'  => 'textarea',
              'title' => 'Açıklama',
            ),
          )
        ),array(
          'title'  => '6. Alan',
          'fields' => array(
            array(
              'id' => 'Neler_alan_6_icon',
              'type' => 'icon',
              'title' => 'icon',
            ),
            array(
              'id'    => 'neler_alan_6_baslik',
              'type'  => 'text',
              'title' => 'Başlık',
            ),
            array(
              'id'    => 'neler_alan_6_aciklama',
              'type'  => 'textarea',
              'title' => 'Açıklama',
            ),
          )
        ),
      )
    ),
)));

//ikonlar alanı
CSF::createSection($prefix, array(
 'id'    => 'iconlar_alani',
  'title' => 'İkonlar alanı',
  'icon'  => 'fas fa-plus-circle',
'parent' => 'hakkimizda',
 'fields' => array(

  array(
      'id'         => 'ikon_alan',
      'type'       => 'tabbed',
      'title'      => 'Alanlar',
      'tabs' => array(

        array(
          'title'  => '1. Alan',
          'fields' => array(
            array(
              'id' => 'ikon_alan_1_icon',
              'type' => 'icon',
              'title' => 'icon',
            ),
            array(
              'id'    => 'ikon_alan_1_sayi',
              'type'  => 'text',
              'title' => 'Sayı',
            ),
            array(
              'id'    => 'ikon_alan_1_aciklama',
              'type'  => 'textarea',
              'title' => 'Açıklama',
            ),
          )
        ),array(
          'title'  => '2. Alan',
          'fields' => array(
            array(
              'id' => 'ikon_alan_2_icon',
              'type' => 'icon',
              'title' => 'icon',
            ),
            array(
              'id'    => 'ikon_alan_2_sayi',
              'type'  => 'text',
              'title' => 'Sayı',
            ),
            array(
              'id'    => 'ikon_alan_2_aciklama',
              'type'  => 'textarea',
              'title' => 'Açıklama',
            ),
          )
        ),array(
          'title'  => '3. Alan',
          'fields' => array(
            array(
              'id' => 'ikon_alan_3_icon',
              'type' => 'icon',
              'title' => 'icon',
            ),
            array(
              'id'    => 'ikon_alan_3_sayi',
              'type'  => 'text',
              'title' => 'Sayı',
            ),
            array(
              'id'    => 'ikon_alan_3_aciklama',
              'type'  => 'textarea',
              'title' => 'Açıklama',
            ),
          )
        ),array(
          'title'  => '4. Alan',
          'fields' => array(
            array(
              'id' => 'ikon_alan_4_icon',
              'type' => 'icon',
              'title' => 'icon',
            ),
            array(
              'id'    => 'ikon_alan_4_sayi',
              'type'  => 'text',
              'title' => 'Sayı',
            ),
            array(
              'id'    => 'ikon_alan_4_aciklama',
              'type'  => 'textarea',
              'title' => 'Açıklama',
            ),
          )
        ),
        ),
      )
    ),
));


//çalışan alanı
CSF::createSection( $prefix, array(

  'title'  => 'Çalışan Alanı',
  'icon'   => 'fas fa-th',
  'parent' => 'hakkimizda',
  'fields' => array (
                      array
                        (
                            'id' => 'calisan_baslik',
                            'title' =>'Ekip Başlık',
                            'type' => 'text',
                          
                        ), array
                        (
                              'id' => 'calisan_aciklama',
                              'title' =>'Ekip Başlık2',
                              'type' => 'text',
                        ), array
                        (
                              'id'    => 'calisan_kisi_bilgi',
                              'type' => 'accordion',
                              'accordions' => array(
                                  array(
                                      'title'  => 'Çalışan Kişi 1',
                                      'fields' => array(
                                        array(
                                          'id'    => 'calisan_kisi_1_adi',
                                          'type'  => 'text',
                                          'title' => '1. Çalışan İsim: ',
                                        ),
                                       array(
                                          'id'    => 'calisan_kisi_1_gorevi',
                                          'title' => '1. Çalışan Görevi: ',
                                          'type'  => 'text',
                                        ), array(
                                          'id'    => 'calisan_kisi_1_linkedin',
                                          'title' =>  'LinkedIn Hesabı: ',
                                          'type'  => 'text',                                    
                                        ),
                                      )
                                    ), array(
                                      'title'  => 'Çalışan Kişi 2',
                                      'fields' => array(
                                        array(
                                          'id'    => 'calisan_kisi_2_adi',
                                          'type'  => 'text',
                                          'title' => '2. Çalışan İsim: ',
                                        ),
                                       array(
                                          'id'    => 'calisan_kisi_2_gorevi',
                                          'type'  => 'text',
                                          'title' => '2. Çalışan Görevi: ',
                                        ),
                                       array(
                                          'id'    => 'calisan_kisi_2_linkedin',
                                          'title' =>  'LinkedIn Hesabı: ',
                                          'type'  => 'text',
                                    
                                        ),
                                      )
                                    ), array(
                                      'title'  => 'Çalışan Kişi 3',
                                      'fields' => array(
                                        array(
                                          'id'    => 'calisan_kisi_3_adi',
                                          'type'  => 'text',
                                          'title' => '3. Çalışan İsim: ',
                                        ),
                                       array(
                                          'id'    => 'calisan_kisi_3_gorevi',
                                          'type'  => 'text',
                                          'title' => '3. Çalışan Görevi: ',
                                        ),array(
                                          'id'    => 'calisan_kisi_3_linkedin',
                                          'title' =>  'LinkedIn Hesabı: ',
                                          'type'  => 'text',
                                    
                                        ),
                                      )
                                    ), array(
                                      'title'  => 'Çalışan Kişi 4',
                                      'fields' => array(
                                        array(
                                          'id'    => 'calisan_kisi_4_adi',
                                          'type'  => 'text',
                                          'title' => '4. Çalışan İsim: ',
                                        ),
                                       array(
                                          'id'    => 'calisan_kisi_4_gorevi',
                                          'type'  => 'text',
                                          'title' => '4. Çalışan Görevi: ',
                                        ),array(
                                          'id'    => 'calisan_kisi_4_linkedin',
                                          'title' =>  'LinkedIn Hesabı: ',
                                          'type'  => 'text',
                                    
                                        ),
                                      )
                                    ),


                              )
                        )
                    ),
                     
));

//hakkımızda ayarları
CSF::createSection ($prefix, array(
'parent' => 'hakkimizda',
'title'  => 'Sayfa Ayarları',
'icon'   => 'fas fa-bars',
'fields' => array(

    array(
        'id'    => 'neler_yapariz_switch',
        'type'  => 'switcher',
        'title' => 'Neler Yaparız Aktif / Pasif',
    ),array(
        'id'    => 'ikonlar_switch',
        'type'  => 'switcher',
        'title' => 'İkonlar Durum Aktif / Pasif',
    ),array(
        'id'    => 'hakkimizda_calisanlar_switch',
        'type'  => 'switcher',
        'title' => 'Çalışanlar Aktif / Pasif',
    ),


)));




//iletişim sayfası
CSF::createSection( $prefix, array(
  'title'  => 'İletişim Sayfası',
  'icon'   => 'fas fa-rocket',
  'fields' => array(
        array(
      'id'    => 'iletisim_tel',
      'type'  => 'text',
      'title' => 'Telefon Numarası',
        ),array(
      'id'    => 'iletisim_fax',
      'type'  => 'text',
      'title' => 'Fax Numarası',
        ),array(
      'id'    => 'iletisim_email',
      'type'  => 'text',
      'title' => 'Email Adresi',
        ),array(
      'id'    => 'iletisim_adres',
      'type'  => 'text',
      'title' => 'Açık Adres',
        ),array(
      'id'    => 'iletisim_facebook',
      'type'  => 'text',
      'title' => 'Facebook Linki',
        ),array(
      'id'    => 'iletisim_twitter',
      'type'  => 'text',
      'title' => 'Twitter Linki',
        ),array(
      'id'    => 'iletisim_youtube',
      'type'  => 'text',
      'title' => 'Youtube Linki',
        ),array(
      'id'    => 'iletisim_instagram',
      'type'  => 'text',
      'title' => 'Instagram Linki',
        ),array(
      'id'            => 'iletisim_map',
      'type'          => 'map',
      'title'         => 'Harita',
    ),
      ),
),);


//Slider alan 
CSF::createSection( $prefix, array(
  'title'  => 'Slider Alanı',
  'icon'   => 'fas fa-images',
  'fields' => array(
  array(
      'id'     => 'slider',
      'type'   => 'repeater',
      'title'  => 'Slidelar',
      'fields' => array(
        array(
          'id'    => 'slider_image',
          'type'  => 'media',
          'title' => 'Resim',
        ),array(
          'id'    => 'slider_baslik_1',
          'type'  => 'textarea',
          'title' => 'Başlık 1 Renkli',
        ),array(
          'id'    => 'slider_baslik_1_2',
          'type'  => 'textarea',
          'title' => 'Başlık 1 Renksiz',
        ),array(
          'id'    => 'slider_baslik_2',
          'type'  => 'textarea',
          'title' => 'Başlık 2',
        ),array(
          'id'    => 'slider_buton_switch',
          'type'  => 'switcher',
          'title' => 'Buton Görünürlük?',
        ),array(
          'id'    => 'slider_buton_text',
          'type'  => 'text',
          'title' => 'Buton Yazı',
          'dependency' =>array('slider_buton_switch', '==', true),
        ),array(
          'id'    => 'slider_buton_link',
          'type'  => 'text',
          'title' => 'Buton Link',
          'dependency' =>array('slider_buton_switch', '==', true),
        ),
      ),
    ),


  )

));

//Anasayfa alanı
CSF::createSection( $prefix, array(
  'title'  => 'Anasayfa',
  'icon'   => 'fas fa-star',
  'fields' => array(
        array(
            'id'      =>    'homepage',
            'type'    =>    'accordion',
            'title'   =>    'Anasayfa Düzeni',
            'accordions'=>  array(

                array(
                  'title' =>'Hakkımızda Alanı',
                  'fields'=> array(
                      array(  
                        'id' => 'homepage_hakkimizda_image',
                        'type' => 'media',
                        'title' => 'Görsel',
                      ),//acordion iç
                      array(  
                        'id' => 'homepage_hakkimizda_baslik',
                        'type' => 'text',
                        'title' => 'Başlık',
                      ),//acordion iç
                      array(  
                        'id' => 'homepage_hakkimizda_description',
                        'type' => 'wp_editor',
                        'title' => 'Açıklama',
                      ),//acordion iç
                       array(  
                        'id' => 'homepage_hakkimizda_alan1_icon',
                        'type' => 'icon',
                        'title' => '1. alan İkon',
                      ),//acordion iç
                        array(  
                        'id' => 'homepage_hakkimizda_alan1_title',
                        'type' => 'wp_editor',
                        'title' => '1. Başlık',
                      ),//acordion iç
                        array(  
                        'id' => 'homepage_hakkimizda_alan1_text',
                        'type' => 'wp_editor',
                        'title' => '1. Açıklama',
                      ),//acordion iç
                         array(  
                        'id' => 'homepage_hakkimizda_alan2_icon',
                        'type' => 'icon',
                        'title' => '2. alan İkon',
                      ),//acordion iç
                        array(  
                        'id' => 'homepage_hakkimizda_alan2_title',
                        'type' => 'wp_editor',
                        'title' => '2. Başlık',
                      ),//acordion iç
                        array(  
                        'id' => 'homepage_hakkimizda_alan2_text',
                        'type' => 'wp_editor',
                        'title' => '2. Açıklama',
                      ),//acordion iç
                  ),
                ),/*alan1 */
            ),


    )
  





  )



  ));






