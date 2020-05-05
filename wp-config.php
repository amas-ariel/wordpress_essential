<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress_essential' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wpuser' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'wppass' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Wf`^L0Yzp*T=FMyrP>7|;A+&UbhW5)hHkh3[?0WL|3y>eq%@Iq1MBk{8!Hru>>qO' );
define( 'SECURE_AUTH_KEY',  '?WNL1$nFcx45|/A6VhVIdK|%&VKl/zr5sM0RS0H;S#W]co eEuRLx*#3lpR@}TS@' );
define( 'LOGGED_IN_KEY',    '{nNZ ;u `hq?:81Wl5^yFcy| voihsxE&mI&?4RZx/@Lja9K?Glc}km8mFY<FuXD' );
define( 'NONCE_KEY',        '7Y%J#*?NN6tXg8 Y9d44NC3Z{~q D1US!jt_=TO,^72gtPh#M[zur72esMg]4+.E' );
define( 'AUTH_SALT',        '<~w)xQ9$jNA+<TH=UTt3Jcl2d8P2{b.@nl~$ulyccIvH>Jg4 =~NSbh(),{-zRjP' );
define( 'SECURE_AUTH_SALT', 'DELNREX_m*Qm[*F Vv>W~AqHb/o6W$iq`H(a$wwa-;;m2@2.bFMX5<8n.JU8[Qiv' );
define( 'LOGGED_IN_SALT',   '<,?CuZWY|Ujzk~}3>/J+Dr0fK^/gxUwwQ^OX<2jb|JY8XcbOR#XB#2)n1 g}zvPW' );
define( 'NONCE_SALT',       'G~h4DPRp7vVB7y=JuVSe6n0WjPkX.`Vi*[&OPOz6Kfx;wz20rD#5a 59QlC$W>&t' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
