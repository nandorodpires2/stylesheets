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
define('DB_NAME', 'stylesheets');

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
define('AUTH_KEY',         '+%-=4!/X^+sOs|L-&*i+8! ?bl{N[bKp=al3M2[d%~DZ,2:>:AJzf 9>aujfIV*v');
define('SECURE_AUTH_KEY',  '`/|7B[9Gm_U3m`vC-AWKLp]T~6JaZ6v|}{J|,_B~7UQ}rENqA;b)(g]qpelPBt0f');
define('LOGGED_IN_KEY',    'EXm4O}nkb|?4)Ua#`~R7<YKrl~!|2:KN{a#ZOr#|}[[=}k*6=_p7b>|05OPo$}7P');
define('NONCE_KEY',        '|e`n&+|R$J>ylWVEU05N.@-c0L.0qV=;H@684GZ!Pfn?Fa+CH#K&}[uj,OOO%F4M');
define('AUTH_SALT',        'r&+9Qa)@@[x~*6c)|~<2|LD(V=)RD8|Cj99NEJe?<oj:+d~NIrYg@A.~]p]_!~cX');
define('SECURE_AUTH_SALT', 't(P39i *ESLg<(PD.fz])iaNrIS|FsLe,!RAIw1.O;|jx!vl+}cf%^@z)IR<=HVs');
define('LOGGED_IN_SALT',   'xw_G?-|b&/t |gW~GNlvP|x[y#QO[.~z)jcm*G8xAIQF,fld~-0zdUN&$@2eCa-P');
define('NONCE_SALT',       'qb/>.lt|3-Xq7m=-zR$pq V|F2[I36mr_S3;4Ty7|qFY2q4s/h8JTN-5QSl|F}ZR');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


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
