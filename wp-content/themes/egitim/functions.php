<?php
$temayolu = get_bloginfo('template_directory');
$site_yolu= get_bloginfo('url');

include_once(TEMPLATEPATH.'/codestar-framework-master/codestar-framework.php');
include_once(TEMPLATEPATH.'/codestar-framework-master/samples/admin-options.php');

add_theme_support('nav_menus');
add_action('init','my_menus');
function my_menus(){
	register_nav_menus(
		array(
			'header-menu' => 'Header Menu',
			'footer-menu' => 'Footer Menu',
		));
 }

function the_pagination($num_pages=0){
	
	global $wp_query;
	if ($num_pages !=0) {
		$wp_query -> max_num_pages = $num_pages;
	}
	
	if ($wp_query -> max_num_pages <=1)return;
	$paged = get_query_var('paged') ? absint(get_query_var('paged')) :1;
	$max= intval($wp_query-> max_num_pages);
	/*for ($i=1; $i <=$max ; $i++) { 
		$links[]= $i;

	}*/

	if ($paged >=1){
		$links[]=$paged;
	}
		 

	if ($paged>=3){
		 $links[]=$paged-1;
	}
		
	if (($paged+1)<=$max)
		 $links[]=$paged+1;

	echo '<div class="pagination-bx col-lg-12 clearfix"><ul class = "custom-pagination pagination">';

   

    if (get_previous_posts_link()){
    	printf('<li>%s</li>',get_previous_posts_link());
    }
    	

    if (!in_array(1,$links)){
    	$class= 1==$paged ? ' class="active"' : "";
		printf('<li%s><a href="%s">%s</a></li>',$class,esc_url(get_pagenum_link(1)),'1');
    }


	sort($links);
	foreach ((array) $links as $link){
		$class= $paged==$link ? ' class="active"' : "";
		printf('<li%s><a href="%s">%s</a></li>',$class,esc_url(get_pagenum_link($link)),$link);
	}


    if (get_next_posts_link()){
    	 printf('<li>%s</li>',get_next_posts_link());
    }
}

    add_action('init','change_rewrite_rules');
    if (!function_exists('change_rewrite_rules')){
    	function change_rewrite_rules(){
    			global $wp_rewrite;
    			$wp_rewrite->pagination_base='sayfa';
    	}
    }


add_theme_support('post-thumbnails');
add_image_size('oneCikan', 360,202);
add_image_size('anasayfa_alan', 458,560);

function egitim_comment_form_default_fields($fields){
	$fields = [
		'author' => '  <p class="comment-form-author">
                                            <label for="author">Ad Soyad <span class="required">*</span></label>
                                            <input type="text" value="" name="author"  placeholder="Ad Soyad" id="author">
                                        </p>',
        'email' => '<p class="comment-form-email">
                                            <label for="email">Email <span class="required">*</span></label>
                                            <input type="text" value="" placeholder="Email" name="email" id="email">
                                        </p>',

        'comment_field' => '  <p class="comment-form-comment">
                                            <label for="comment">Comment</label>
                                            <textarea rows="8" name="comment" placeholder="Comment" id="comment"></textarea>
                                        </p>',


	];
	return $fields;

}

add_filter('comment_form_default_fields', 'egitim_comment_form_default_fields');

function egitim_commentfield_delete($defaults){
	if (isset($defaults['comment_field'])){
		$defaults['comment_field']='';
	}
	return $defaults;
}
add_filter('comment_form_defaults', 'egitim_commentfield_delete',10,1);



add_action('init', 'calisanlar_posttype' ) ;
function calisanlar_posttype(){
	$labels=array(
		'name'					=>	_x('Çalışanlar', 'Calisanlar'),
		'singular_name'			=>  _x('Çalışan', 'Calisan'),
		'menu_name'				=>  _x('Çalışanlar','Calisanlar'),
		'name_admin_bar'		=>  _x('Çalışanlar', 'calisanlar'),
		'add_new'				=>  _x('Çalışan Ekle', 'calisan ekle'),
		'add_new_item'			=>  __('Yeni Çalışan Ekle'),
		'new_item'				=>  __('Yeni çalışan'),
		'edit_item'				=>  __('Çalışanı Düzenle'),
		'view_item'				=>	__('Çalışanı Görüntüle'),
		'all_items'				=>  __('Tüm çalışanlar'),
		'search_items'			=>  __('Çalışan Ara'),
		'not_found'				=>  __('Çalışan Bulunamadı'),
		'not_found_in_trash'	=>  __('Çalışan çöp kutusunda bulunamadı'),
	);

	$args = array(
		'labels'				=>  $labels,
		'description'			=>  __('Çalışanlar Post Type'),
		'public'				=>  true,
		'has_archive'			=>  true,
		'publicly_queryable'	=>  true,
		'show_ui'				=>  true,
		'show_in_menu'			=>  true,
		'query_var'				=>  true,
		'rewrite'				=> 	array(
			'slug'				=> 	'calisanlar',
			'with_front'		=>	false,
			'hierarchical'		=>  true,
			'show_in_nav_menus'	=>	true,
			'menu_position'		=>	5,
			'menu_icon'			=>	'dashicons-admin-users',
			'supports'			=>	array('title','editor','thumbnail'),

	));

		register_taxonomy('calisanlar_tag', 'calisanlar',array(
				'hierarchical'			=> false,
				'label'					=> __('Çalışan Etiket'),
				'singular_name'			=> __('Etiket'),
				'rewrite'				=> true,
		));


		register_post_type('calisanlar',$args);
}

	function calisan_add_metabox(){
		add_meta_box("calisanBilgileri","Çalışan Bilgileri","calisan_bilgiler","calisanlar","normal","high",null);
	}

add_action ("add_meta_boxes","calisan_add_metabox");
	function calisan_bilgiler($object){
		echo '<inpt type="hidden" name="calisanlar_meta_box_nonce" value="',wp_create_nonce(basename(__FILE__)),'"/>'
		?>
		<div>
			<label for="gorev">Ünvanı</label><br>
			<input type="text" name="unvani"  class="regular-text">
		</div>
		<div>
			<label for="facebook">Facebook Linki</label><br>
			<input type="text" name="facebook"  class="regular-text">
		</div>
		<div>
			<label for="twitter">Twitter linki</label><br>
			<input type="text" name="twitter" class="regular-text">
		</div>
		<div>
			<label for="instagram">Instagram Linki</label><br>
			<input type="text" name="instagram"  class="regular-text">
		</div>
		<div>
			<label for="youtube">Youtube Linki</label><br>
			<input type="text" name="youtube"  class="regular-text">
		</div>

<?php
	}
	


add_action('init', 'musterilist_posttype');
function musterilist_posttype(){
	$labels = array(
			'name'				=>	_x('Emailler','musteri-email'),
			'singular_name'		=>	_x('Email', 'musteri-email'),
			'menu_name'			=>	_x('Müşteri Portföy', 'musteri-email'),
			'name_admin_bar'	=>	_x('Muşteri Portföy', 'musteri-email'),
			'all_items'			=>  __('Bütün emailler'),
			'search_items'		=>  __('Email Ara'),

		);

	$args=array(
			'labels'			=>	$labels,
			'description'		=>	__('Müşteri Email Post Type'),
			'public'			=>	false,
			'has_archive'		=>	true,
			'publicly_queryable'=>	true,
			'show_ui'			=>	true,
			'show_in_menu'		=>	true,
			'query_var'			=>	true,
			'rewrite'			=>  array(

					'slug'   		=>  'porftoy',
					'with_front'	=>  false,
					'hierarchical'	=>  true,
					'query_var'			=>	true,
			),

			'capability_type'	=>  'post',
			'capabilities'		=> 	array('create_posts' => 'do_not_allow',),
			'hierarchical'		=>	false,
			'show_in_nav_menus'	=>  true,
			'menu_position'		=>  5,
			'menu_icon'			=>	'dashicons-admin-users',
			'supports'			=>	array('title'),

	);
		register_post_type('porftoy',$args);
}

	if (isset($_POST['news-letter'])){
		//echo "doğru"; die();
		/*$data['post_title'] = "Yeni Haber";
		$data['post_content'] = "İçerik Bölümü Burası";
		$data['post_status']  = "publish";
		$data['author']  = 1;
		$data['post_category']  = array(1,6);	*/

		$data=array();
		$data['post_title'] = "news-letter";
		$data['post_type']='porftoy';
	
		

		wp_insert_post($data);

	}


add_action( 'init', 'create_urun_posttype' );
function create_urun_posttype() {
    $args = array(
      'public' => true,
      'show_ui' => true,
      'menu_icon' => 'dashicons-admin-post',
      'capability_type' => 'page',
      'label'  => 'Ürün Yönetimi',
      'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes'),
      'taxonomies' => array('category')
    );
    register_post_type( 'urun', $args );
}

//metaboxlar
function urun_metaboxlar(){

    //Referans Bilgileri
    add_meta_box(
        'urun_bilgileri_id',
        'Ürün Bilgileri',
        'urun_bilgileri',
        'urun'
    );
    }
    add_action('add_meta_boxes','urun_metaboxlar');
    function urun_bilgileri(){
        global $post;
        ?>
<div class="row">
    <div class="label">Markası</div>
    <div class="fields">
        <input type="text" name="_urun_marka_n" value="<?php echo get_post_meta($post->ID, 'urun_marka', true)?>"/>
    </div>
    <div class="label">Stok Kodu</div>
    <div class="fields">
        <input type="text" name="_urun_stokkodu_n" value="<?php echo get_post_meta($post->ID, 'urun_stokkodu', true)?>"/>
    </div>
    <div class="label">Barkodu</div>
    <div class="fields">
        <input type="text" name="urun_barkod_n" value="<?php echo get_post_meta($post->ID, 'urun_barkod', true)?>"/>
    </div>
</div>
<?php
    }
    function urun_save_custom_metabox(){
 
        global $post;
     
        if(isset($_POST["_urun_marka_n"])):
             
            update_post_meta($post->ID, 'urun_marka', $_POST["_urun_marka_n"]);
         
        endif;
        if(isset($_POST["_urun_stokkodu_n"])):
             
            update_post_meta($post->ID, 'urun_stokkodu', $_POST["_urun_stokkodu_n"]);
         
        endif;
        if(isset($_POST["urun_barkod_n"])):
             
            update_post_meta($post->ID, 'urun_barkod', $_POST["urun_barkod_n"]);
         
        endif;
    }
     
    add_action('save_post', 'urun_save_custom_metabox');
























?>

