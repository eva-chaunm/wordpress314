<?php
/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress314');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U6ZxQ[srAZTqdHkxHSJ$E>FfCfW@1Y` vlax(b|poVc{^L9)H7=%]D!8W(6&{k5/');
define('SECURE_AUTH_KEY',  'EFN9rv[6]ukvNR#x(4RlK uGOl%wSmGm,[nv<Z-6Gk(&3a5})lwhMkJYqnl^v8g|');
define('LOGGED_IN_KEY',    'CfHNiVUV9tg304.O@fpM76uS%Q0yRm>%Ls9@|ko~!PAWdKH[:3NI:YQDXpE_A9Ok');
define('NONCE_KEY',        'yMEZ3c>|<HLLM_D8dj8-Pr5RvJ6:m%p~hv^@y@pDO*rV|e[+@TI^(fnl1ZMk i ~');
define('AUTH_SALT',        'KxFL46K_QF*<Bz@%*-E!bVYbm;vmRLNiGngi4n_7<nFWN-P6X_j4(FkK,!IM4CE2');
define('SECURE_AUTH_SALT', 'NPq~|x~dMB6x3$^T4^:W0bkvAsK&_MI#n`G5w2E4z(N+{5j]*`!o-;(+lV@#8VW_');
define('LOGGED_IN_SALT',   '6=7m`k1#wps]`,0NlR|=ak(,{=/UMqYJUApc4uH#+u++f-bBXOCYIRVRWaGT%O1i');
define('NONCE_SALT',       '+Ax`&1Gz7O&L{!.~Vj$ >_4W%ld+$|7yW88t[SQq ~(YQp,]cBNxSG>V2/mF.>wd');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
