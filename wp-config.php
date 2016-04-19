<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */
 $host = php_uname('n');
 if ($host == "191")
 {
 	define("ENVIRONMENT", "develop");
 }
 else
 {
 	define("ENVIRONMENT", "production");
 }
 if (ENVIRONMENT == "develop")
 {
 	define('DB_NAME', 'timelapse');
 	define('DB_USER', 'root');
 	define('DB_PASSWORD', '');
 	define('DB_HOST', 'localhost');
 }
 else
 {
 	define('DB_NAME', 'toptencomics');
 	define('DB_USER', 'root');
 	define('DB_PASSWORD', '');
 	define('DB_HOST', 'localhost');
 }

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E?i[QNg.(~7#t)pbe^#uGv~_qTYU:uBz FyBPH@?e<Oxm&u8:G`imN6Du?s#-c-T');
define('SECURE_AUTH_KEY',  't2uu+v<u!j$}j[N]%c~8Jw,22 fgzHArM+`K%;?|nsdyI+EH,fS07Rk&EpB10eMY');
define('LOGGED_IN_KEY',    'Y{7rwdsp[hv$ledu(KKQ&uT}3f!;`,.6,P=44|u#vksJJqM6ai8>Yb-(n0=:JU%t');
define('NONCE_KEY',        '/g1}dv!6$Ki>tWU1Mg,RX!|)$ BgSL-x8zVb#`K2.)B|WtM r~d_?^n)`EhE_@JM');
define('AUTH_SALT',        'y)v<{0PzlaMDMd~al?XTe{I+v$,AvytNk>*n[,F-$0SB4lRG)h&2T<^9@9>/n<%{');
define('SECURE_AUTH_SALT', 'V)lG[8JD8^{u%JuMuhJH^54zs#j~U[aLI_jK5y6a}[hus >yqnTnndhh?|4sv$6I');
define('LOGGED_IN_SALT',   '_NavB.T4zpHv&pmW&-9=Zd>+0(BuDE-{_Gl2B:J<:{zmP]  ~mSb{A0[ybE*d/~`');
define('NONCE_SALT',       'DQ)_h50ZW&v)TymzQ{tg(^a o0]/bI]4y[bv)prV(y|5 |4Jah[Q_l3cUg=+Sog[');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_tl2k16';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
