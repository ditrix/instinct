<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */


define('DB_NAME', 'instinct');


define('DB_USER', 'root');


define('DB_PASSWORD', '');


define('DB_HOST', 'localhost');


define('DB_CHARSET', 'utf8mb4');


define('DB_COLLATE', '');


/*

define('DB_NAME', 'instinkt');


define('DB_USER', 'instinktDBU');


define('DB_PASSWORD', 'instinktDBPASS19');


define('DB_HOST', 'localhost');


define('DB_CHARSET', 'utf8mb4');


define('DB_COLLATE', '');

*/

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zWT5Wgjeh/(2 ^v{kkUSv-(18,c~5$q&Q|2)7 ~t6n4gR[ZdY>$1/)5~@GZqc)0N');
define('SECURE_AUTH_KEY',  'Z>Spe3Yc~*dzn.{XE@F94Z%pfjbcEM;0!2iMBkHixP+9dh~.+IypLW_?<R$3Ak#w');
define('LOGGED_IN_KEY',    'K^.!f4oiDX- <L/:`%<n8f_D3$wW*h4u<5ZJ(d/(d_:TM:, HU{f*;0y(ePS2xp7');
define('NONCE_KEY',        '/`s6+jRlKH04[[w-q &(E=/ d/Oab0fTP?/PT6Yn2h+15MG2?.DO5.0Y ;obs(:(');
define('AUTH_SALT',        'v#vnP4|b:||qL$k,V&/`Ui*T.R7JUL-`c~uxdRU@P/lN2&xZzBQ6)Q3lAJpH+PIr');
define('SECURE_AUTH_SALT', 'g)V?>+`&o{qjSM2TBZzf F)Nzq&T[2BzL5wb-> IdZkx_e0S8WA27)|<$Vr_sUQH');
define('LOGGED_IN_SALT',   'Lk0ZWy.WO0<o${eKyS){MsD2?6JC_EH9%??{`@U/msf8&mwZyhVkw+^_#D8kh d]');
define('NONCE_SALT',       'N7Bde__^mrP[m1A&hYGuzJ$lb}IZ``&o(b|l^_RcdqjMBI/KvWg4a0PL?!|!Lcoj');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
