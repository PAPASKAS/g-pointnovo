<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'g-pointnovo' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'g-pointnovo' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Vr9-c!vS-WNmnqPA' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<kmwrzJK/R=vNKG`vhfniIB|$|?/(MVUEGbzAE:#i~$TP283?&CVW8vzwmNo|5-O' );
define( 'SECURE_AUTH_KEY',  'S{,:VRH/#Z{Ymf<#z1Pn#2Dkz_wS* M][)T,T@f)l*YMKKN_r%);3SSNU@!fa^^F' );
define( 'LOGGED_IN_KEY',    '+pL>(HxbUk;1bMv` (*~mJcWWm>{H<VFRmH>$+mcwut<2##E7O;Ytl:]VbC3EL! ' );
define( 'NONCE_KEY',        'DU$Z<Qn?G!VT2E_ibnh[!o4H0cu|o]A(HCZ>`whq# ml_9|~!~=+x:ffyLb7;t/n' );
define( 'AUTH_SALT',        '-0DJ~6zz(S87?,[+wSO,nEV>@$3$y,5b4|lM?8yIx$VUdk(U*H`WssARxE`:[zbZ' );
define( 'SECURE_AUTH_SALT', 'qdxFe]*2d2UeCvD_L(*p8;G_7P&6DL4z~[PYK:.W54SnvOlzGM6<2-oY}k3y%2;<' );
define( 'LOGGED_IN_SALT',   'leDVSQdb]=;7Z<!0@Sf$fWXN?ngyMsP?ir{Q;{7Vyf#+96tRe~%2-L psc#ga~i+' );
define( 'NONCE_SALT',       'puFv,{C<1FKJK#w@*20g7ioWvaK<X`KXxg^A?XOBXv&zad&#5-L5a*8AtXoso2V~' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
