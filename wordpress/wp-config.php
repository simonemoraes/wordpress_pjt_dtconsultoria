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
define('DB_NAME', 'pjt_dtconsultoria');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '442332si');

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
define('AUTH_KEY',         '^G#U*CM**p}xTS/G(7Q-JO@DH_4;7W[pGfP:z;JXHx[9]u&-awPZOe*>;ary+Nxa');
define('SECURE_AUTH_KEY',  'q9I1i1+D5L8^3ljRRz:!D0yu2SdO@]dXROwCvx9L9aM2LXlo~:F~&$yI_pF>f&ci');
define('LOGGED_IN_KEY',    '4B4<]h.Sa85CG_7dCMupa]lt]^tpII@9FTvlUdN/ojWN5JFQ|C^g|y:gYMfq.xQ)');
define('NONCE_KEY',        '<8Y]dk(JyErI*e}VxVft%s{R@r7MJ.[dhTAD+SRtk4|eXU4GpN9`tf.8pmW?vW-!');
define('AUTH_SALT',        'u _l7kq-e ,mc(?#B/9R7da?XNZ<j~3iYKDL$^69Fr>Cw7?DXoszmZe#lxRtB_m|');
define('SECURE_AUTH_SALT', 'P4xv:hvJ6UkZjS mz)#Ex|Owmr;tm]WDLIY2JAFbfT <0-O-z;HQ  q3;=%X2k%u');
define('LOGGED_IN_SALT',   'B^;+}uS$XE+)<BDz-H6Pa>Chb*cu},zwy_Z2#pwnE/T~b=C~f8F!S#0L!@.UHX>i');
define('NONCE_SALT',       '.w3W8LT(yZcUkKZFfnc9&t<ouTvUqI|PSq]2a&1LkU#Hr1g+%/D Y->:([-;j6mw');

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
