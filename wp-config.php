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

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordbase');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '3D`X9^,wBx^(sYPneI(&!/5#jKi$N{^C)dp4 HN+q+o,d+)Vt-IUp|Yzf[~(gU~A');
define('SECURE_AUTH_KEY',  'dP3$#g}Ur`[[cUch)BD|JJ%K-|AC2Co!M((($Bmim`t-Es@Q8_vQJ7UC[C$,?u&q');
define('LOGGED_IN_KEY',    'SCO|hSeV=Yo7Cr4Zy<mpiUG@1.]g>ZOZ_p*DD7}G_zh#]+iWW~3#r](|-hRz{jCd');
define('NONCE_KEY',        '!F+|-hm+lt|{^|ww9~}HI dl}-F?S{&[e|-RU_[XPQ-6q?Uf|6i.&S-fb~cxGNOs');
define('AUTH_SALT',        'CHC`0d DE./:Z5-!VJA/10,GVp]HGs2n<r+ZNDvHMX&Xi=*++EkNK*[-a_wKc/G-');
define('SECURE_AUTH_SALT', 'buU$]}K|Jw-wIKB<bJBA7k--^u:YMIx5l>N<Yfm <Rl:e:fS5}oB`Q,`*T1YMFF2');
define('LOGGED_IN_SALT',   'mjWM42qfPDws1Vh`BK[f>M-WhbVcK[+cw9KI|[&mRix/kA@mqSu+h3z,C|s ^7HP');
define('NONCE_SALT',       'M}?&`@1/:@FG|qR+Lyy-i/HUBR{t 6p.u^=4($9%FO]+-kjTN,y<Iz2S9e5U0Df@');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');