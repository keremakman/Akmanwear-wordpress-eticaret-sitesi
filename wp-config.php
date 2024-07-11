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
define( 'DB_NAME', 'akmangiyim' );

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
define( 'AUTH_KEY',         'Rsgy?N-4-1;szCCIo=3|4gVEp.Ay2@4A8Z944<Q^ V,-pESgH)NY]]UT&gB|m>8r' );
define( 'SECURE_AUTH_KEY',  'Q+Xey@&MKe4D]b1+N%i60Li>x__92jQAwcBhVMfnOm?|;EDQaP0/L1^{,wx+Dzt)' );
define( 'LOGGED_IN_KEY',    'w%^&p|Ckye628%g/z$u~PO_>q:6jVk[4h.v,I*l{1JJ{(U6,WO}=(yI%Fn%F~:XP' );
define( 'NONCE_KEY',        '88-`f;OnX.kaOQ[*[HL%pT[t`D;:#y0wC1`<:=^Ln4t.z9-1!)Sf:mZk?Zn?m0c?' );
define( 'AUTH_SALT',        'B}EshZ6g8`QJ2J>9/=o_#hl9jyK[PJQdZx+3R?m/P^t=AC. LxVf=x@%EOM=!6dU' );
define( 'SECURE_AUTH_SALT', '0,[}&gg;DFIaF>VJa8pWb*Q8wX=UryP6U?by~P6-3tNtu(Xj^C;/z<}|oKY?sZ7t' );
define( 'LOGGED_IN_SALT',   '`_{7oSv~Luy0.?d3}<+lsZ8*o?@@r8,]D4c*.2Q6VThG_sAs/jKRxhIT|6I5c(]T' );
define( 'NONCE_SALT',       ' JyxRkf]g,q6v$3>n&U>tx,Ww:La(7De-NkvzwcGXCbOV38kLGP4CpJ$*EdQzl=|' );

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