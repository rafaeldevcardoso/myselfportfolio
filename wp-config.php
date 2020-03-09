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
define( 'DB_NAME', 'miport' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '7)T5SL&}`M-afv^+xu-1(|_)``2@l!16~s4RHSaTx$9QI@fC>Z@^99~CP`zGM7]+' );
define( 'SECURE_AUTH_KEY',  '[%C-qBN_Z}+iE+NIX{jF2,FPSKCkq0NRo+P.xrllI7H8)QBTdR0`&H*tFS?k`BZd' );
define( 'LOGGED_IN_KEY',    'i%5}2g%gMmt5r3W>^bZmmPO^FYa#W<}?2;~;2s/o@tSI$F@;<L|zBghjtF)v3.c#' );
define( 'NONCE_KEY',        '{K,[Y7E!?zD,boNs:KyNocOLh(tek=>$H.DYh27a7Md2~q0=BT}@x5ra9UXtf]8r' );
define( 'AUTH_SALT',        ']#XD!|VtbO`m.V<%;bL7f%t.?3KJ7T69KO%4YKw3Ub$6?k&?{hZ,a:HUN>X8<-s;' );
define( 'SECURE_AUTH_SALT', ',%&5CPYuqs<nP.nS<%Y@!.0=z?L(Fil.,mM2n9Q$GrlS[4!#ISKF;bqMW<8I>H&j' );
define( 'LOGGED_IN_SALT',   't8:.R$Cl}lpdjm:#Qw`O-|<%sv>Io[_(}O+A;49(5RFm8.9O4mMPzM>6^6THlmI/' );
define( 'NONCE_SALT',       'PHzFv,9`Kg6MW6up6P<i}-5%D_.P?G`Q[B hdLd2Km1)7-#.j:Ult)It-)U)As:P' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
