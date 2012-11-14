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
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'talentod_port');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'designer2802');

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
define('AUTH_KEY',         'g#+,paRjiQrgqxU<mhY<[r0|I,9*Vzw57*{|k|AZ7F^xxKCMiqc2h[/??:7%{}o ');
define('SECURE_AUTH_KEY',  'UB(5mS%)4v|:qNN`iR#L)36>CIXS`%|x:bP)-8*l?w#q<tdT{@@P!t%Q^cn.o64m');
define('LOGGED_IN_KEY',    '6B)&&poub%ML>>hzN}M{xqFuZ<sE6s)<.^nX]VU?ENOa7>&XEuDS^Q+L)iyL|8DE');
define('NONCE_KEY',        'fv HY,@N p0*, 0-]A+^A?m5grERc.uBMdG9t4_^zV s`Z9Jrw1-:?|H$Urxxkp5');
define('AUTH_SALT',        '8.Bu6clPn8Or&kH+&<$)~+i3F+0u8gNG%d>G|;is1 zF%b92b:WE/3V}sWt@)WF>');
define('SECURE_AUTH_SALT', '}G-|B#y^x5gVoHp7C6]%[2152+Dq:J=&+hQoo89RTUmVWYp>zw7[JWnyW-|/ dw1');
define('LOGGED_IN_SALT',   '-SKP1!aK)X(0F=Tvm=-qZkEv>,zeN;U4Sv^ y5Q+|6Dd0A/R!-|gCyT.n%IXK]t&');
define('NONCE_SALT',       'vJDE+NVt3[[)Fr+tVdT6e^7Jacws95i$|Y!yEEU^7ustm`4iK-Z(_l;g)/&eq{;u');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
