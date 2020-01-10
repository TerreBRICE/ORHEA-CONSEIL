<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ORHEA-CONSEIL' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p^]}[.UysLf|/yeeyg?VP@QeJYrbb~S+_ye)HCmNPM^4=BJ*T8H%6#@wiA>X^W~|' );
define( 'SECURE_AUTH_KEY',  ':<EhNQXxprbnKT[q1Gf?_- $#5nq%A1.t+:)|&Y <n0ND@2e!7*KJOf.^NsOM8R%' );
define( 'LOGGED_IN_KEY',    'f+yqfg75I6}x|}6uF02DEW&ivP,PAn9h@<~ni9CmY6 1>Tnt;@mIC)-Yci.]%~d(' );
define( 'NONCE_KEY',        '2`rySeKCeB`8ApZyPS~7sHq.ALjI_gcj%7&tRsg]UN~6?{;0?f+Hnf1M=Ks9SQm<' );
define( 'AUTH_SALT',        'y+9Ehp##f2TZPT|DB[IyZ.VHiD=&g~Nk<+/E`TSuU1f^bhdZ%~![;W%aV3O&%UiY' );
define( 'SECURE_AUTH_SALT', 'g(uMdZR?Nzj+?rCdkC|J )L:aRZ ilHWu%Fe-i$u17~5?jnzIZIx8U^z4ZVUE3u[' );
define( 'LOGGED_IN_SALT',   'll2nIZao;mfju9lqI<(8eSRvYJ4bNSfrl~1{_#qFyOeltk<H;T>v&}BC`*CRolz<' );
define( 'NONCE_SALT',       '!R9A(dl{$cV3T_r$GiEvbl5:<(v|DO$AUPCLERg=}sq952$N|`ao_7me>MNgT<~l' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'oc_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

define('VP_ENVIRONMENT', 'default');
/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
