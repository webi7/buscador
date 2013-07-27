<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'buscadorfind');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'brc#aUmAYMwd3y#6YKphkRP/EaOd&y%oNTHt^=|&5WcCsAW}v9/ECG,{Fm13%E[o');
define('SECURE_AUTH_KEY',  '9lTue@A&[RP=A<ros&2V2h1k9~T9g3(:%.:U*xZzW<b[<VttJMRFI<E@O9sBNh*q');
define('LOGGED_IN_KEY',    '$MGD(#&eAv<Z+g$/n]~g^6DVXAgXG+Y2yT3`O]D,C3OamZ<&yWUz)a4d(!?(57gj');
define('NONCE_KEY',        '?uvkCm L%vH2hB+Jsh_>!u<sm2YJ9V(=uo TEb_HlM.+l~}+I>C-,{n7^/S8.D.)');
define('AUTH_SALT',        'm`:CzrGd6J.WMzkSy_A]ZzzP4[D|(uJ6HVTl+EHvq!]76gd@O+0$t;p?eg+w/viF');
define('SECURE_AUTH_SALT', ']5?2/9Ulqa>Eg<s)-<)y#y2m3c%t@~(m1+^OW9|I(_MLaHv$8#GwDt.;pOBPXya8');
define('LOGGED_IN_SALT',   'K}}M8x=Mh}LRh%Y|j]Fe:P,[&qi$U3M+:B*I${)P|TQ=2ac{o%lw0mlyJ,Ypu#+@');
define('NONCE_SALT',       'lkN6GH!EAlb[x^1-OsEOj:&i6H?ln-WcOfZ)kr;*D}-%.G=}Y%bPHMpiW/>|-&};');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'bf_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
