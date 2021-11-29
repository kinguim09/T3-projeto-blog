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
define( 'DB_NAME', 'wp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wp' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '151527' );

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
define( 'AUTH_KEY',         'D&9o7Fq8:?[w=#JUl_}MXw^BO6kq^:,.DTbm(bvcMv|Q1L8;wT@=IWa>Lp]MznM]' );
define( 'SECURE_AUTH_KEY',  'r?Z3/Ipbx$c,^}7FZgcI`bYK,S@>R=AoE=b~@ /~T;k>OX,x~SPxCfAb5e{@g?rT' );
define( 'LOGGED_IN_KEY',    '7A<ka1tk$xxdW_NaJw!,)Z)j(%lE@NZYsLjY^j22|^VGL&4>FNih7v{U:] 0#VK5' );
define( 'NONCE_KEY',        'w|7d:bYeg;yvR#)XPH?<A]r#|_3/*>|Iy?.llL:J-A,5SLpbWKe(FkO20Rlk?Ea:' );
define( 'AUTH_SALT',        'hRUjRq[E(X72_}uWxGoq<nps0;.K522u07U97;iI?5hUC,`(ETmtSJ&#hP1jq:Id' );
define( 'SECURE_AUTH_SALT', ')tPDX8,98`>-LqH&nj?&wub3F+qp=yNTA1n4D1>PX?(x)+S=m)xNaQzp=#SWky<q' );
define( 'LOGGED_IN_SALT',   'SUK?ULHxlYqGk/#%LhpUKU+q|x;5V;6f4dmPX.l|8K6zP~rUK,)z&~&x*|e[X786' );
define( 'NONCE_SALT',       'r#sey(d6;^8PW(N5.](_ULtv~J)p*!OKpM5_V%~w?[Ps| @L|(M;Y~-5GZ|ze-uZ' );

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
