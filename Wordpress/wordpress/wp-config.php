<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`;v6fi&6_{=O9XN4PzghLFQ/YJ%^cr#iUBYu|ZA6ukx&,*3EVIh-$;?u;@=E]?-_' );
define( 'SECURE_AUTH_KEY',  '7inBMB}T:c}Z0(~e0Q3L]g&+Zh-^<5PGG&.o|O@Zxdkk8<s}TEj4[L}iefA6]5R|' );
define( 'LOGGED_IN_KEY',    '7`NdW($9r#|h;JiQa|[I dQ5)jM-a+K4C#]]#O&)tV?z^09^VyvANq1eE=?Z[$Sd' );
define( 'NONCE_KEY',        'Vzg*akg0??gD#%;TCSx.5[c~(-bBNtmiOKov@V3QVt}hZ!kK7=/eb/=m>5f[St*W' );
define( 'AUTH_SALT',        'bPpigB[bdt/CE!d&:k<k5(!*zvrv2,)E{^88*=[;K(cjU%>A-|w}%zU[wu;.8,`7' );
define( 'SECURE_AUTH_SALT', '6,,A0&IjUY!Caye76nzK9}Id sgPZDI}%#t z(egK7U_fA#({R/aQp/H3E@L.mQQ' );
define( 'LOGGED_IN_SALT',   '<6A8P`k0#PXub5{SnE>za~NjU,5^2Yd~(ShUZw>nEKHW02hyX^N>LTCZ#Y_|}?FN' );
define( 'NONCE_SALT',       'I52s;>7c^tA{dRV|@E `DeU4GsO|xc|[f,NvS(g`)hc]8dvwd>3rvVduho&|~QeW' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
