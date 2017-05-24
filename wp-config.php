<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'br_lojavirtual_loojas');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '123456');

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
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rdh+dltn~L2OP0v]R+P|<pq1rO~/SOK2eV<.*XZM1@~;.,Aa:(-5$^#VLd:cRZ`}');
define('SECURE_AUTH_KEY',  'sm9f1]tqSse`.Zei|&pfOanoBaKq<+r-FdI_I-zsY7TTgZ 8m2-Kd k:!k/(XHon');
define('LOGGED_IN_KEY',    'GzlHr6~LPih4a:]6r/;D{A5;@RfR:=N7@>=%8$8P^{Wmy@I%jR}-p7}XanguQ{k{');
define('NONCE_KEY',        'Tou0,idlS9#h5f0S9#|`4G;<j~ny5o9GH(EkG+F;poMLn :-)L])~~AU+84TQ:]x');
define('AUTH_SALT',        '`3(S?Pxu7h5 H6p!7|q@0s6}Xg!.}iA^%oc{2u?!&tIKl}Bj,[Td>q{^xK,*|Ts$');
define('SECURE_AUTH_SALT', 'c7pz}X#m.~vhAy5G&ymnk#i,rRT7qk%^GYBKfit5Th]~X%k_v6tU2#;}G>id!N&m');
define('LOGGED_IN_SALT',   'Zx<.pH7HZ`(!Iowv}9[rhpM!q/0w& ;Fq!vM6 K[S#=o/8e1J24L5N.I{Voz^rDv');
define('NONCE_SALT',       '2To4lJ+I.[e-oFtK74:#6eD.K~GL:QlYQjS=5_12Y3[<x)t6Gj3/M&WD6/J v3EG');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'lov_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
