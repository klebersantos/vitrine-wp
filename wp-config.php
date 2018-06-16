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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'vitrine');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '?{.>yK+DQ@XWCRV3%ZnK&yfDIf6{7xeBuNkX7Bj$n= t^J<szt(.&`u,fn {J2m0');
define('SECURE_AUTH_KEY',  'n*hB6Y6[8&LnU6BxN=O 397qd/2d:AT DxxyZ{_XBXt2TSjz;lY-km[qF#W~SEhO');
define('LOGGED_IN_KEY',    'ca)nA(y^iRG)L)s.S&*nj&f6p09+yfSDF,g::SH>^?TM&6N5JM`C]`!*|Lg9T@H>');
define('NONCE_KEY',        'ff,,/e!/bz,bze6v`ahiBJJ.dv%N1|(Da6Y@T2GBb_%)=X-r4#]h?T9Q;]vMpW*]');
define('AUTH_SALT',        'K} 5~-M6Z>{bV]=mXE&=BLHrRK?A&LH#?g.>r3}rTLzl0t)ZhtjZ@cW5YKVnl}X/');
define('SECURE_AUTH_SALT', 'iJmUrZq=u(.T#Q|R^XpD=b,VhXV$WHQ<U4Ev-:L~#Wu$Hqgcw_9MvP%c1/U4}Xu~');
define('LOGGED_IN_SALT',   '%oWdd@<E,H9w`wnvPdI`3j`6CqtQl^$HPx=eXVJ<NL%!rrHWU]hf053Ec6p/Dq]v');
define('NONCE_SALT',       '{#xQL/9c[vh<{*@wflWj7zSLAB5)dCot;J)@(]Umbt7-VIn[GIPwigQGEuzpNkGm');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
