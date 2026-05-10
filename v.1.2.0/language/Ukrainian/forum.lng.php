<?php
/*
=====================================================
 DLE Native Forum (Nexus) - Мовний файл (Українська)
-----------------------------------------------------
 https://github.com/dlehub
-----------------------------------------------------
 Copyright (c) 2024-2026 Dlehub & Elegance
=====================================================
 File: language/Ukrainian/forum.lng.php
=====================================================
*/

global $lang;

$lang = array_merge((array)$lang, array(

// ══════════════════════════════════════════════════
// ЗАГАЛЬНЕ / CORE
// ══════════════════════════════════════════════════
'forum_error'                    => 'Помилка',
'forum_warning'                  => 'Попередження',
'forum_success'                  => 'Успішно',
'forum_save'                     => 'Зберегти',
'forum_cancel'                   => 'Скасувати',
'forum_action'                   => 'Дія',
'forum_confirm_delete'           => 'Ви впевнені, що хочете видалити?',
'forum_confirm_del_post'         => 'Ви впевнені, що хочете видалити це повідомлення?',
'forum_date'                     => 'Дата',
'forum_forum'                    => 'Форум',
'forum_title'                    => 'Форум',
'forum_home'                     => 'Головна',
'forum_topic'                    => 'Тема',
'forum_post'                     => 'Повідомлення',
'forum_reply'                    => 'Відповідь',
'forum_views'                    => 'Перегляди',
'forum_status'                   => 'Статус',
'forum_pin'                      => 'Закріплено',
'forum_lock'                     => 'Закрито',
'forum_guest'                    => 'Гість',
'forum_member'                   => 'Учасник',
'forum_no_posts'                 => 'Повідомлень немає',
'forum_stats'                    => 'Статистика',
'forum_last_posts'               => 'Останні повідомлення',
'forum_new_topic'                => 'Нова тема',
'forum_new_topic_btn'            => 'Створити тему',
'forum_deleted_topic'            => 'Видалена тема',
'forum_no_prefix'                => 'Без префікса',
'forum_ph_tags'                  => 'тег1, тег2...',
'forum_all_cats'                 => 'Усі категорії',
'forum_topics'                   => 'Теми',
'forum_posts'                    => 'Повідомлення',
'forum_group'                    => 'Група',
'forum_active'                   => 'Активно',
'forum_passive'                  => 'Пасивно',
'forum_expand_all'               => 'Розгорнути все',
'forum_collapse_all'             => 'Згорнути все',
'forum_order_fail'               => 'Не вдалося зберегти сортування!',
'forum_order_ok'                 => 'Сортування категорій оновлено.',

// ══════════════════════════════════════════════════
// TPL ТЕГИ (v1.2.4)
// ══════════════════════════════════════════════════
'forum_attachments'              => 'Вкладення',
'forum_edit'                     => 'Редагувати',
'forum_delete'                   => 'Видалити',
'forum_quote'                    => 'Цитата',
'forum_like'                     => 'Подобається',
'forum_dislike'                  => 'Не подобається',
'forum_pm_send'                  => 'Особисте повідомлення',
'forum_edited'                   => 'відредаговано',
'forum_posts'                    => 'Повідомлення',
'forum_points'                   => 'Бали',
'forum_rep'                      => 'Репутація',
'forum_follow'                   => 'Підписатися',
'forum_unfollow'                 => 'Відписатися',
'forum_bump'                     => 'Підняти',
'forum_unlock'                   => 'Відкрити',
'forum_unpin'                    => 'Відкріпити',
'forum_delete_topic'             => 'Видалити тему',
'forum_send'                     => 'Надіслати',
'forum_mark_read'                => 'Прочитано',
'forum_mark_all_read'            => 'Позначити всі як прочитані',
'forum_unanswered'               => 'Теми без відповідей',
'forum_unanswered_desc'          => 'Теми, що очікують на відповідь.',
'forum_no_unanswered'            => 'Немає тем без відповідей.',
'forum_active'                   => 'Активні теми',
'forum_active_desc'              => 'Теми, оновлені за вказаний період.',
'forum_no_active'                => 'За цей період активних тем немає.',
'forum_filter_today'             => 'Сьогодні',
'forum_filter_days'              => 'За останні %d днів',
'forum_notif_'                   => 'Сповіщення',
'forum_notif_like'               => 'Лайк',
'forum_notif_reply'              => 'Відповідь',
'forum_notif_mention'            => 'Згадка',
'forum_notif_quote'              => 'Цитата',

// ══════════════════════════════════════════════════
// ПОВІДОМЛЕННЯ ПРО ПОМИЛКИ
// ══════════════════════════════════════════════════
'forum_err_login_pm'             => 'Ви повинні увійти, щоб надсилати ЛС.',
'forum_err_pm_user'              => 'Користувача не знайдено.',
'forum_err_login_notif'          => 'Ви повинні увійти, щоб бачити сповіщення.',
'forum_err_no_cats'              => 'Категорії форуму не знайдено.',
'forum_err_no_topics'            => 'У цій категорії немає тем.',
'forum_err_search_empty'         => 'Запит не може бути порожнім.',
'forum_err_search_min'           => 'Запит має бути не менше 3 символів.',
'forum_err_cat_invalid'          => 'Невірна категорія.',
'forum_err_cat_not_found'        => 'Категорію не знайдено.',
'forum_err_login_topic'          => 'Ви повинні увійти, щоб створити тему.',
'forum_err_no_perm_cat'          => 'У вас немає прав для створення тем у цій категорії.',
'forum_err_cat_select'           => 'Будь ласка, оберіть категорію.',
'forum_err_csrf_retry'           => 'Помилка безпеки, спробуйте ще раз.',
'forum_err_title_len'            => 'Заголовок має бути не менше 3 символів.',
'forum_err_title_long'           => 'Заголовок не може перевищувати 255 символів.',
'forum_err_content_len'          => 'Повідомлення має бути не менше 10 символів.',
'forum_err_must_login'           => 'Ви повинні увійти для цієї дії.',
'forum_err_no_permission'        => 'У вас немає прав для цієї дії.',
'forum_err_title_short'          => 'Заголовок має бути не менше 3 символів.',
'forum_err_post_short'           => 'Повідомлення має бути не менше 10 символів.',
'forum_err_post_min'             => 'Повідомлення має бути не менше %d символів.',
'forum_err_topic_not_found'      => 'Тему не знайдено.',
'forum_err_topic_locked'         => 'Тема закрита, ви не можете відповісти.',
'forum_err_post_not_found'       => 'Повідомлення не знайдено.',
'forum_err_own_like'             => 'Ви не можете оцінити власне повідомлення.',
'forum_err_complaint_short'      => 'Причина скарги має бути не менше 5 символів.',
'forum_err_complaint_dup'        => 'Ви вже подали скаргу на це повідомлення.',
'forum_err_msg_not_found'        => 'Повідомлення не знайдено.',
'forum_err_bump_locked'          => 'Не можна підняти закриту тему.',
'forum_err_bump_owner'           => 'Тільки автор теми може її підняти.',
'forum_err_bump_cooldown'        => 'Зачекайте %s перед повторним підняттям.',
'forum_err_move_cat'             => 'Цільову категорію не знайдено.',
'forum_err_invalid_action'       => 'Невірна дія.',
'forum_err_upload_none'          => 'Файл не обрано.',
'forum_err_upload_disabled'      => 'Завантаження файлів вимкнено.',
'forum_err_upload_error'         => 'Помилка завантаження: %s.',
'forum_err_upload_size'          => 'Файл %s занадто великий (Макс: %s МБ).',
'forum_err_upload_ext'           => 'Тип файлу %s не дозволений.',
'forum_err_pm_self'              => 'Ви не можете надіслати повідомлення самому собі.',
'forum_err_pm_title'             => 'Тема має бути не менше 2 символів.',
'forum_err_pm_text'              => 'Повідомлення має бути не менше 5 символів.',
'forum_err_user_not_found'       => 'Користувача не знайдено.',
'err_flood_blocked'              => 'Забагато спроб. Аккаунт тимчасово заблоковано.',
'err_flood_ip'                   => 'Забагато запитів з вашої IP. Зачекайте.',
'err_flood_post'                 => 'Зачекайте трохи перед відправкою повідомлень.',
'forum_err_csrf'                 => 'Помилка перевірки безпеки!',
'forum_err_db'                   => 'Помилка бази даних: ',
'forum_err_upload_mime'          => 'Тип файлу не підтверджено!',
'forum_err_pm_fail'              => 'Не вдалося надіслати ПМ',
'forum_err_no_link_perm'         => 'У вашої групи немає прав на посилання.',
'forum_err_pm_name'              => 'Невірне ім\'я одержувача!',
'forum_err_no_edit_perm'         => 'У вас немає прав для редагування!',
'forum_err_no_edit_time'         => 'Це повідомлення не можна редагувати!',
'forum_err_invalid_msg'          => 'Невірний формат повідомлення.',
'forum_err_msg_len'              => 'Повідомлення має бути не менше 3 символів.',
'forum_adm_topic_title_empty'    => 'Заголовок теми не може бути порожнім!',
'forum_adm_topic_updated'        => 'Тему оновлено!',

// ══════════════════════════════════════════════════
// ПОВІДОМЛЕННЯ ПРО УСПІХ
// ══════════════════════════════════════════════════
'forum_ok_pm_sent'               => 'Повідомлення надіслано.',
'forum_ok_approval_pending'      => 'Повідомлення очікує на перевірку.',
'forum_ok_complaint'             => 'Скаргу успішно надіслано.',
'forum_ok_bump'                  => 'Тему успішно оновлено.',

// ══════════════════════════════════════════════════
// ПОШУК
// ══════════════════════════════════════════════════
'forum_search'                   => 'Пошук',
'forum_search_no_results'        => 'Нічого не знайдено.',
'forum_search_results'           => 'Результати пошуку',
'forum_topics_found'             => 'Знайдено тем: %d.',

// ══════════════════════════════════════════════════
// РЕДАКТОР
// ══════════════════════════════════════════════════
'forum_edit_msg'                 => 'Редагувати повідомлення',
'forum_write_reply'              => 'Відповісти',
'forum_topic_locked'             => 'Тема закрита',
'forum_must_login'               => 'Потрібно увійти',
'forum_attach_label'             => 'Прикріпити файл',

// ══════════════════════════════════════════════════
// ЖУРНАЛ МОДЕРАЦІЇ
// ══════════════════════════════════════════════════
'forum_log_lock'                 => 'Закрито',
'forum_log_unlock'               => 'Відкрито',
'forum_log_pin'                  => 'Закріплено',
'forum_log_unpin'                => 'Відкріплено',
'forum_log_del_topic'            => 'Тема видалена',
'forum_log_del_post'             => 'Повідомлення видалено',
'forum_log_edit_mod'             => 'Правка модератором',
'forum_log_edit_own'             => 'Правка автором',
'forum_log_move'                 => 'Переміщено',
'forum_log_bump'                 => 'Оновлено',

// ══════════════════════════════════════════════════
// ОСОБИСТІ ПОВІДОМЛЕННЯ
// ══════════════════════════════════════════════════
'forum_pm'                       => 'Особисті повідомлення',
'forum_pm_not_found'             => 'Повідомлення не знайдено.',
'forum_pm_empty'                 => 'Повідомлень поки немає.',
'forum_notifications'            => 'Сповіщення',
'forum_no_notifs'                => 'Сповіщень поки немає.',

// ══════════════════════════════════════════════════
// ПРОФІЛЬ / КОРИСТУВАЧ
// ══════════════════════════════════════════════════
'forum_no_user_posts'            => 'У цього користувача ще немає повідомлень.',

// ══════════════════════════════════════════════════
// ТЕГИ
// ══════════════════════════════════════════════════
'forum_tags'                     => 'Теги',
'forum_tags_desc'                => 'Популярні теги форуму.',
'forum_no_tags'                  => 'Тегів поки немає.',
'forum_no_topics_tag'            => 'Тем з таким тегом немає.',
'forum_tagged_topics'            => 'Теми з цим тегом',

// ══════════════════════════════════════════════════
// АДМІН-ПАНЕЛЬ - ЗАГАЛЬНЕ
// ══════════════════════════════════════════════════
'forum_admin_title'              => 'DLE Native Forum',
'forum_admin_subtitle'           => 'Панель управління',
'forum_adm_ver_new'              => 'v%s доступна!',
'forum_adm_ver_ok'               => 'Актуально',

// АДМІН-ПАНЕЛЬ - НАВІГАЦІЯ
'forum_adm_nav_summary'          => 'Огляд',
'forum_adm_nav_cats'             => 'Категорії',
'forum_adm_nav_ranks'            => 'Звання',
'forum_adm_nav_words'            => 'Фільтр слів',
'forum_adm_nav_complaints'       => 'Скарги',
'forum_adm_nav_topics'           => 'Теми',
'forum_adm_nav_pending'          => 'На модерації',
'forum_adm_nav_logs'             => 'Журнал',
'forum_adm_nav_settings'         => 'Налаштування',
'forum_adm_nav_prefixes'         => 'Префікси',
'forum_adm_nav_tags'             => 'Теги',
'forum_adm_nav_promotions'       => 'Підвищення',

// АДМІН-ПАНЕЛЬ - КАТЕГОРІЇ
'forum_adm_cat_saved'            => 'Категорія збережена.',
'forum_adm_cat_added'            => 'Категорія додана.',
'forum_adm_cat_del_subs'         => 'Видаліть спочатку підкатегорії.',
'forum_adm_cat_del_topics'       => 'Видаліть або перенесіть спочатку теми.',
'forum_adm_cat_del'              => 'Категорія видалена.',
'forum_adm_cat_manage'           => 'Керування категоріями',
'forum_adm_cat_add'              => 'Додати категорію',
'forum_adm_no_cats'              => 'Категорій ще немає.',
'forum_adm_cat_edit'             => 'Змінити категорію',
'forum_adm_cat_new'              => 'Нова категорія',
'forum_adm_cat_name'             => 'Назва',
'forum_adm_cat_desc'             => 'Опис',
'forum_adm_parent_cat'           => 'Батько',
'forum_adm_cat_icon'             => 'Іконка',
'forum_adm_cat_icon_fa'          => 'FA клас, напр: fa-folder',
'forum_adm_priv_cat'             => 'Приватна',
'forum_adm_priv_cat_desc'        => 'тільки для груп',
'forum_adm_require_approval'     => 'Премодерація',
'forum_adm_require_approval_desc'=> 'теми вимагають схвалення',
'forum_adm_allowed_groups'       => 'Доступні групи',
'forum_adm_groups_comma'         => 'через кому, напр: 2,3',
'forum_adm_read_groups'          => 'Читання',
'forum_adm_write_groups'         => 'Запис',
'forum_main_cat'                 => 'Головна категорія',
'forum_ph_cat_name'              => 'Назва категорії',
'forum_ph_cat_desc'              => 'Короткий опис',

// АДМІН-ПАНЕЛЬ - ЗВАННЯ
'forum_adm_rank_saved'           => 'Звання збережено.',
'forum_adm_rank_del'             => 'Звання видалено.',
'forum_adm_rank_manage'          => 'Керування званнями',
'forum_adm_rank_add'             => 'Додати звання',
'forum_adm_rank_points'          => 'Мін. балів',
'forum_adm_rank_color'           => 'Колір',
'forum_adm_rank_icon'            => 'Іконка',
'forum_adm_rank_edit'            => 'Змінити звання',
'forum_adm_rank_new'             => 'Нове звання',
'forum_adm_rank_name'            => 'Назва',
'forum_adm_rank_badge'           => 'Текст значка',

// АДМІН-ПАНЕЛЬ - ПРЕФІКСИ
'forum_adm_prefix_saved'         => 'Префікс збережено.',
'forum_adm_prefix_added'         => 'Префікс додано.',
'forum_adm_prefix_del'           => 'Префікс видалено.',
'forum_adm_prefixes'             => 'Керування префіксами',
'forum_adm_prefix_add'           => 'Додати префікс',
'forum_adm_prefix_title'         => 'Назва',
'forum_adm_prefix_cat'           => 'Категорія',
'forum_adm_prefix_color'         => 'Колір тексту',
'forum_adm_prefix_bg_color'      => 'Фон',
'forum_adm_prefix_order'         => 'Порядок',
'forum_adm_prefix_text_color'    => 'Колір тексту',
'forum_adm_prefix_bg_color'      => 'Фон',
'forum_adm_prefix_edit'          => 'Змінити префікс',
'forum_adm_prefix_new'           => 'Новий префікс',

// АДМІН-ПАНЕЛЬ - ТЕГИ
'forum_adm_tag_saved'            => 'Тег збережено.',
'forum_adm_tag_del'              => 'Тег видалено.',
'forum_adm_tags_manage'          => 'Керування тегами',
'forum_adm_tag_name'             => 'Назва',
'forum_adm_tag_slug'             => 'ЧПУ',
'forum_adm_tag_count'            => 'Використання',
'forum_adm_tag_edit'             => 'Змінити тег',

// АДМІН-ПАНЕЛЬ - ФІЛЬТР СЛІВ
'forum_adm_word_saved'           => 'Слово збережено.',
'forum_adm_word_del'             => 'Слово видалено.',
'forum_adm_word_manage'          => 'Фільтр заборонених слів',
'forum_adm_word_add'             => 'Додати слово',
'forum_adm_word_word'            => 'Слово',
'forum_adm_word_repl'            => 'Заміна',
'forum_adm_word_edit'            => 'Змінити слово',
'forum_adm_word_new'             => 'Нове слово',

// АДМІН-ПАНЕЛЬ - СКАРГИ
'forum_adm_complaint_del'        => 'Скарга видалена.',
'forum_adm_complaints_title'     => 'Керування скаргами',
'forum_adm_complaint_from'       => 'Скарга від',
'forum_adm_complaint_content'    => 'Контент',

// АДМІН-ПАНЕЛЬ - ЖУРНАЛ
'forum_adm_logs_title'           => 'Журнал модерації',
'forum_adm_log_mod'              => 'Модератор',
'forum_adm_log_action'           => 'Дія',
'forum_adm_log_topic'            => 'ID теми',
'forum_adm_log_post'             => 'ID повідомлення',
'forum_adm_log_ip'               => 'IP адреса',

// АДМІН-ПАНЕЛЬ - НАЛАШТУВАННЯ
'forum_adm_settings_saved'       => 'Налаштування збережені.',
'forum_adm_settings_title'       => 'Налаштування форуму',
'forum_set_posts_per_page'       => 'Повідомлень на сторінку',
'forum_set_topics_per_page'      => 'Тем на сторінку',
'forum_set_guest_view'           => 'Гості бачать (1/0)',
'forum_set_min_post'             => 'Мін. довжина повідомлення',
'forum_set_max_post'             => 'Макс. довжина повідомлення',
'forum_set_flood'                => 'Флуд-контроль (сек)',
'forum_set_allow_attach'         => 'Вкладення (1/0)',
'forum_set_max_attach'           => 'Макс. розмір файлу (байт)',
'forum_set_allowed_ext'          => 'Дозволені типи',
'forum_set_points_topic'         => 'Бали за тему',
'forum_set_points_reply'         => 'Бали за відповідь',
'forum_set_points_like'          => 'Бали за лайк',
'forum_set_approval'             => 'Поріг схвалення',
'forum_set_bump_cd'              => 'Кулдаун підйому (год)',
'forum_set_sticky_op'            => 'Перший пост завжди вгорі (1/0)',
'forum_set_link_min_posts'       => 'Мін. повідомлень для посилань',
'forum_set_link_min_points'      => 'Мін. балів для посилань',
'forum_set_captcha'              => 'Капча (1/0)',
'forum_set_promotion'            => 'Авто-підвищення (1/0)',
'forum_clean_readlog_days'       => 'Очищення історії (днів)',

// АДМІН-ПАНЕЛЬ - ОБСЛУГОВУВАННЯ
'forum_adm_maintenance'          => 'Обслуговування',
'forum_adm_recalc'               => 'Перерахунок статистики',
'forum_adm_clear_cache'          => 'Очищення кешу',
'forum_adm_recalc_running'       => 'Перерахунок триває, зачекайте 5 хвилин.',
'forum_adm_recalc_done'          => 'Статистика перерахована.',
'forum_adm_cache_cleared'        => 'Кеш очищено.',

// АДМІН-ПАНЕЛЬ - ТЕМИ
'forum_adm_topic_list'           => 'Список тем',
'forum_adm_no_topics'            => 'Теми не знайдені.',
'forum_adm_topics_found'         => 'тем знайдено',
'forum_adm_topic_title'          => 'Заголовок',
'forum_adm_topic_cat'            => 'Категорія',
'forum_adm_topics_author'        => 'Автор',
'forum_adm_select_all'           => 'Вибрати все',
'forum_adm_action_select'        => 'Оберіть дію',
'forum_adm_unpin'                => 'Відкріпити',
'forum_bulk_move'                => 'Перенести',
'forum_adm_apply'                => 'Застосувати',
'forum_adm_bulk_confirm'         => 'Ви впевнені?',
'forum_adm_bulk_done'            => 'Масова дія виконана.',
'forum_adm_sel_cat'              => 'Оберіть категорію',

// АДМІН-ПАНЕЛЬ - ПРАВКА ТЕМИ
'forum_adm_edit_topic'           => 'Змінити тему',
'forum_adm_back'                 => 'Назад',
'forum_adm_topic_prefix'         => 'Префікс',
'forum_adm_topic_desc'           => 'Опис',
'forum_adm_topic_tags'           => 'Теги',
'forum_adm_topic_content'        => 'Контент',
'forum_adm_topic_options'        => 'Опції',
'forum_adm_pin_topic'            => 'Закріпити тему',
'forum_adm_lock_topic'           => 'Закрити тему',

// АДМІН-ПАНЕЛЬ - МОДЕРАЦІЯ
'forum_adm_pending_ok'           => 'Схвалено.',
'forum_adm_pending_reject'       => 'Відхилено.',
'forum_adm_pending_title'        => 'Черга модерації',
'forum_adm_pending_user'         => 'Користувач',
'forum_adm_pending_preview'      => 'Попередній перегляд',
'forum_adm_pending_approve'      => 'Схвалити',
'forum_adm_pending_reject_btn'   => 'Відхилити',
'forum_adm_pending_empty'        => 'Немає заявок.',
'forum_adm_pending_topics_title' => 'Теми, що очікують',
'forum_adm_pending_posts_title'  => 'Повідомлення, що очікують',

// АДМІН-ПАНЕЛЬ - ПІДВИЩЕННЯ
'forum_adm_promotion_saved'      => 'Правило збережено.',
'forum_adm_promotion_del'        => 'Правило видалено.',
'forum_adm_promotions_title'     => 'Авто-підвищення груп',
'forum_adm_promotion_add'        => 'Додати правило',
'forum_adm_from_group'           => 'Поточна група',
'forum_adm_to_group'             => 'Цільова група',
'forum_adm_min_points'           => 'Мін. балів',
'forum_adm_min_likes'            => 'Мін. лайків',
'forum_adm_min_posts'            => 'Мін. повідомлень',
'forum_adm_rule_active'          => 'Активно',
'forum_adm_promotion_edit'       => 'Змінити правило',
'forum_adm_promotion_new'        => 'Нове правило',
'forum_adm_no_promotions'        => 'Правил ще немає.',

// АДМІН-ПАНЕЛЬ - ДАШБОРД
'forum_adm_stat_topics'          => 'Теми',
'forum_adm_stat_posts'           => 'Повідомлення',
'forum_adm_stat_users'           => 'Учасники',
'forum_adm_stat_writers'         => 'Автори',
'forum_adm_stat_complaints'      => 'Скарги',
'forum_adm_stat_last_reg'        => 'Новачок',
'forum_adm_last_post'            => 'Останній пост',
'forum_adm_last_post_by'         => 'від',
'forum_adm_recent_topics'        => 'Свіжі теми',
'forum_adm_recent_posts'         => 'Свіжі повідомлення',
'forum_adm_top_users'            => 'Топ авторів',
'forum_adm_prefix_sel'           => '-- Оберіть префікс --',
'forum_adm_topic_desc_label'     => 'Опис (опц.)',
'forum_adm_topic_desc_ph'        => 'Короткий опис теми...',
'forum_adm_quick_actions'        => 'Дії',
'forum_adm_tab_general'          => 'Загальні',
'forum_adm_tab_security'         => 'Безпека',
'forum_adm_tab_gamification'     => 'Гейміфікація',
'forum_adm_tab_maintenance'      => 'Обслуговування',

// АДМІН-ПАНЕЛЬ - РАНГИ
'forum_adm_rank_type'            => 'Тип',
'forum_adm_rank_for_group'       => 'Звання за групою',
'forum_adm_rank_for_group_desc'  => 'Тільки для груп. 0 = Усім (за балами).',
'forum_adm_rank_all_groups'      => 'Усі групи (за балами)',
'forum_group_admin'              => 'Група 1: Адмін',
'forum_group_editor'             => 'Група 2: Редактор',
'forum_group_moderator'          => 'Група 3: Модератор',

// АДМІН-ПАНЕЛЬ - IP БАН
'forum_adm_nav_bans'             => 'IP Бан',
'forum_adm_bans_title'           => 'Керування банами',
'forum_adm_ban_add'              => 'Додати бан',
'forum_adm_ban_ip'               => 'IP адреса',
'forum_adm_ban_reason'           => 'Причина',
'forum_adm_ban_contact'          => 'Контакт (email)',
'forum_adm_ban_days'             => 'Термін (днів, 0=перм)',
'forum_adm_ban_delete'           => 'Видалити',
'forum_adm_ban_permanent'        => 'Постійно',
'forum_adm_ban_expires'          => 'Закінчується',
'forum_adm_ban_by'               => 'Ким',
'forum_adm_ban_date'             => 'Дата',
'forum_adm_bans_empty'           => 'Активних банів немає.',
'forum_adm_ban_added'            => 'Бан додано.',
'forum_adm_ban_deleted'          => 'Бан успішно видалений.',

// АДМІН-ПАНЕЛЬ - SEO
'forum_adm_tab_seo'              => 'Налаштування SEO',
'forum_set_schema_jsonld'        => 'Schema.org JSON-LD',
'forum_set_schema_jsonld_desc'   => 'Додавати структуровані дані (DiscussionForumPosting) для SEO. Google використовує їх для розширених результатів.',
'forum_set_nested_quotes'        => 'Вкладені цитати',
'forum_set_nested_quotes_desc'   => 'Дозволити користувачам робити вкладені цитати [quote=Ім\'я]...[/quote]',
'forum_set_quote_depth'          => 'Глибина цитат',
'forum_set_quote_depth_desc'     => 'Максимальна глибина вкладених цитат (1-10). Чим вище, тим більше вкладених блоків.',
'forum_set_canonical'            => 'Canonical URL',
'forum_set_canonical_desc'       => 'Додавати тег canonical link на кожну сторінку теми (запобігає дублюванню контенту)',
'forum_set_meta_desc'            => 'Meta Description',
'forum_set_meta_desc_desc'       => 'Автоматично створювати мета-опис з першого повідомлення теми',
'forum_set_meta_desc_len'        => 'Довжина Meta Description',
'forum_set_meta_desc_len_desc'   => 'Максимальна кількість символів для автоматичного мета-опису',

));
?>
