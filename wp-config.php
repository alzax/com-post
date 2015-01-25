<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'afb7913o_wp');

/** Имя пользователя MySQL */
define('DB_USER', 'afb7913o_wp');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'M9YxbmEkD');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pC&t*+?2LY.XL1#+[]-t,7(S,+1O{I1ZYM$liW/<a1j)Wu{q3wr@b|7Ocqf$<O*.');
define('SECURE_AUTH_KEY',  '|R_L/]M!=W#m+q4zFH4O;A<m+8*,YiY-#p4q/H+WTG.5Cti{l)anl]xO;|Mt3P1C');
define('LOGGED_IN_KEY',    '#Kyh[$$m(b8S3v2&[zZUl5b#[!41<;fAa5o{q?ob$&s?I9sV2tC+lX7T+*?&=kNe');
define('NONCE_KEY',        ',O$,76*+,?? zilqG,/%~:T+v8BVeuY6]&}JY>XhOm9({+C,N6iY0+Fbo=A%Ni]#');
define('AUTH_SALT',        'aZ , XWwoi)t1wZ~ [8]Zq(OsC7Z+M_;,rpL5ev#X:2<-fW:}l4^n%^`cdl~TO5x');
define('SECURE_AUTH_SALT', 'IdUQ4n/g;TsijFi%cqO3_`_[%q`n bX WU%`*>7FD{?)<Do>Dj=~1)u(+|H.]|e`');
define('LOGGED_IN_SALT',   '-{ko:Do+7YRVZ^@MMHXa`<c#U#R)|-@IAc<X+sM--jOT)VH.FZWf~xx4[K-?vT|>');
define('NONCE_SALT',       '(vo{WgiV8vE#vMf5L@%{ :&np(hfg_=/4Aj=-h9%3%n]>=FG---{XnPrjKF@&EZz');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
