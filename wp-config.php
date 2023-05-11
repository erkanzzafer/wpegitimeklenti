<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'tema1' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':E3ece4DC`jqPEKRhul**!z}LYuEUA`OxYv!vTd]tG>YT@#pGX<osL-`-v8lrLe8' );
define( 'SECURE_AUTH_KEY',  'YIo:u{wA$F]MbygQni`ac4Jw$8Ns>M0$G$>Hfq;9[HFU?wQn6&59SQ#aAJZ^)afu' );
define( 'LOGGED_IN_KEY',    ',nn/*m~)l|Ea p3XtuZ]dEqiGF2fz>[p]6@=*n0aHL{,D@ll|([t,VtK]}YnCD?C' );
define( 'NONCE_KEY',        'm:8m:5i!9Fv_BYFRqOVv@[UW|<[2k=:k_C3j^9:S6!}@&WnV[c=6Ez0&s<iA,yX0' );
define( 'AUTH_SALT',        'Nt^P`>RC/Yi5 Iyf Z_bO[|bJiBYW}Bn(DO],!Hiu~>/1Fz^s:IykhGj,L]r@t2k' );
define( 'SECURE_AUTH_SALT', 'VNG5Ib?D8ZDve.}4--/RD.&9J?*7^mnPcJb:C=^j6BPK&o|Q%#Rg]:zx<iPE8YSn' );
define( 'LOGGED_IN_SALT',   '$60%=hWN(w=c2PT,*X3eAe;?^L~nc`;{juN.RLG*Q*b+W$Q,5hWcs~tRt+]QlsXo' );
define( 'NONCE_SALT',       '/7o`2s NxPAuycnbngeCajP |<SkDJ7aQC[TU1~Hpt-696n:HYpO##dZyN.]TlR;' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';