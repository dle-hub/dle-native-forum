<?php
/*
=====================================================
 DLE Native Forum - Ukrainian Language File
=====================================================
*/

global $lang; // Забезпечує доступ до головного масиву мови DLE

// Об'єднуємо з існуючим масивом $lang
$lang = array_merge((array)$lang, array(

    /* ───────── ЗАГАЛЬНЕ ───────── */
    'forum_title'             => 'Форум спільноти',
    'forum_error'             => 'Помилка',
    'forum_warning'           => 'Попередження',
    'forum_success'           => 'Успішно',
    'forum_cancel'            => 'Скасувати',
    'forum_save'              => 'Зберегти',
    'forum_delete'            => 'Видалити',
    'forum_edit'              => 'Редагувати',
    'forum_yes'               => 'Так',
    'forum_no'                => 'Ні',
    'forum_forum'             => 'Форум',
    'forum_topic'             => 'Тема',
    'forum_topics'            => 'Теми',
    'forum_post'              => 'Повідомлення',
    'forum_posts'             => 'Повідомлення',
    'forum_reply'             => 'Відповідь',
    'forum_replies'           => 'Відповіді',
    'forum_views'             => 'Перегляди',
    'forum_online'            => 'Онлайн',
    'forum_member'            => 'Учасник',
    'forum_members'           => 'Учасники',
    'forum_stats'             => 'Статистика',
    'forum_last_posts'        => 'Останні повідомлення',
    'forum_no_posts'          => 'Повідомлень поки немає',
    'forum_new_topic'         => 'Нова тема',
    'forum_new_topic_btn'     => 'Створити тему',
    'forum_date'              => 'Дата',
    'forum_action'            => 'Дія',
    'forum_status'            => 'Статус',
    'forum_search'            => 'Пошук',
    'forum_guest'             => 'Гість',
    'forum_write_reply'       => "Написати відповідь",

    /* ───────── ВХІД / ПРАВА ДОСТУПУ ───────── */
    'forum_err_must_login'       => 'Необхідно увійти.',
    'forum_err_login_pm'         => 'Необхідно увійти для доступу до особистих повідомлень.',
    'forum_err_login_notif'      => 'Необхідно увійти для перегляду сповіщень.',
    'forum_err_login_topic'      => 'Необхідно увійти для створення теми.',
    'forum_err_no_permission'    => 'У вас немає прав!',
    'forum_err_no_perm_cat'      => 'У вас немає прав для створення тем у цій категорії.',
    'forum_err_must_login_short' => 'Потрібен вхід',

    /* ───────── CSRF ───────── */
    'forum_err_csrf'       => 'Помилка перевірки безпеки!',
    'forum_err_csrf_retry' => 'Помилка перевірки безпеки! Оновіть сторінку та спробуйте ще раз.',

    /* ───────── ПОМИЛКИ КАТЕГОРІЙ ───────── */
    'forum_err_cat_invalid'   => 'Невірне посилання на категорію.',
    'forum_err_cat_not_found' => 'Категорія не знайдена або видалена.',
    'forum_err_no_cats'       => 'Категорії ще не додані.',
    'forum_err_cat_select'    => 'Невірний вибір категорії.',

    /* ───────── ПОМИЛКИ ТЕМ ───────── */
    'forum_err_topic_not_found' => 'Тема не знайдена!',
    'forum_err_topic_locked'    => 'Ця тема закрита!',
    'forum_err_locked_notice'   => 'Ця тема була закрита.',
    'forum_err_title_short'     => 'Заголовок має бути не менше 3 символів!',
    'forum_err_title_long'      => 'Заголовок занадто довгий!',
    'forum_err_content_short'   => 'Вміст має бути не менше 10 символів!',
    'forum_err_no_topics'       => 'У цій категорії ще немає тем.',
    'forum_err_invalid_action'  => 'Невірна дія.',

    /* ───────── ПОМИЛКИ ПОВІДОМЛЕНЬ ───────── */
    'forum_err_post_not_found' => 'Повідомлення не знайдено!',
    'forum_err_post_short'     => 'Повідомлення занадто коротке!',
    'forum_err_post_min'       => 'Повідомлення має бути не менше %d символів!',

    /* ───────── ФЛУД ───────── */
    'forum_err_flood_topic' => 'Ви створюєте теми занадто швидко! Зачекайте %d секунд.',
    'forum_err_flood_reply' => 'Ви надсилаєте повідомлення занадто швидко! Зачекайте %d секунд.',
    'forum_err_flood_like'  => 'Ви ставите лайки занадто швидко! Зачекайте %d сек.',
    'err_flood_blocked'    => 'Ви зробили забагато запитів! Зачекайте 10 хвилин.',
    'err_flood_ip'         => 'Досягнуто погодинний ліміт запитів. Будь ласка, зачекайте.',
    'err_flood_post'       => 'Ви виконуєте дії занадто швидко! Зачекайте %s секунд.',

    /* ───────── ПІДНЯТТЯ ТЕМИ (BUMP) ───────── */
    'forum_err_bump_locked'    => 'Закриті теми не можна піднімати!',
    'forum_err_bump_owner'     => 'Тільки автор теми може її підняти!',
    'forum_err_bump_cooldown'  => 'Зачекайте ще %d годин перед підняттям теми!',
    'forum_ok_bump'            => 'Тему піднято вгору!',
    'forum_bump_btn'           => 'Підняти',

    /* ───────── ОЦІНКИ ───────── */
    'forum_err_own_like'      => 'Не можна оцінити власне повідомлення!',
    'forum_js_liked'          => 'Повідомлення сподобалося!',
    'forum_js_disliked'       => 'Повідомлення не сподобалося.',
    'forum_js_vote_removed'   => 'Оцінку знято.',

    /* ───────── ПІДПИСКА ───────── */
    'forum_follow_btn'      => 'Підписатися',
    'forum_unfollow_btn'    => 'Відписатися',
    'forum_js_followed'     => 'Ви підписалися на тему.',
    'forum_js_unfollowed'   => 'Ви відписалися від теми.',

    /* ───────── СКАРГИ ───────── */
    'forum_err_complaint_short' => 'Причина скарги занадто коротка!',
    'forum_err_complaint_dup'   => 'Ви вже поскаржилися на це повідомлення!',
    'forum_ok_complaint'        => 'Ваша скарга надіслана.',

    /* ───────── ЗАВАНТАЖЕННЯ ───────── */
    'forum_err_upload_none'     => 'Файл не обрано!',
    'forum_err_upload_disabled' => 'Завантаження файлів вимкнено!',
    'forum_err_upload_error'    => 'Помилка завантаження: %s',
    'forum_err_upload_size'     => '%s занадто великий! Макс: %s МБ',
    'forum_err_upload_ext'      => '%s: цей тип файлу не дозволений.',

    /* ───────── ПОШУК ───────── */
    'forum_err_search_empty'   => 'Будь ласка, введіть пошуковий запит.',
    'forum_err_search_min'     => 'Запит має бути не менше 3 символів!',
    'forum_search_results'     => 'Результати пошуку',
    'forum_topics_found'       => 'Знайдено тем: %d.',
    'forum_search_no_results'  => 'За вашим запитом нічого не знайдено.',

    /* ───────── ЧЕРГА ПЕРЕВІРКИ ───────── */
    'forum_ok_approval_pending' => 'Ваше повідомлення очікує на перевірку модератором.',

    /* ───────── ПМ (ОСОБИСТІ ПОВІДОМЛЕННЯ) ───────── */
    'forum_pm_empty'         => 'Ваша скринька порожня.',
    'forum_pm_not_found'     => 'Повідомлення не знайдено.',
    'forum_err_pm_user'      => 'Користувача не знайдено.',
    'forum_ok_pm_sent'       => 'Повідомлення успішно надіслано.',
    'forum_err_pm_invalid'   => 'Невірне ім\'я отримувача!',
    'forum_err_pm_notfound'  => 'Користувача не знайдено!',
    'forum_err_pm_title'     => 'Тема занадто коротка!',
    'forum_err_pm_text'      => 'Повідомлення занадто коротке!',
    'forum_err_pm_self'      => 'Невірний отримувач!',

    /* ───────── СПОВІЩЕННЯ ───────── */
    'forum_notifications'  => 'Сповіщення',
    'forum_no_notifs'      => 'У вас поки немає сповіщень.',
    'forum_notif_reply'    => 'відповів(ла) у вашій темі',
    'forum_notif_like'     => 'оцінив(ла) ваше повідомлення',
    'forum_notif_pm'       => 'надіслав(ла) вам особисте повідомлення',
    'forum_notif_mention'  => 'згадав(ла) вас',
    'forum_deleted_topic'  => 'Видалена тема',

    /* ───────── JS ТА ЗАГАЛЬНЕ ───────── */
    'forum_js_conn_error'     => 'Помилка з\'єднання!',
    'forum_err_move_cat'      => 'Категорія не знайдена!',
    'forum_admin_label'       => 'МОДЕРАЦІЯ:',
    'forum_lock'              => 'Закрити',
    'forum_unlock'            => 'Відкрити',
    'forum_pin'               => 'Закріпити',
    'forum_unpin'             => 'Відкріпити',
    'forum_delete_topic'      => 'Видалити тему',
    'forum_confirm_del_post'  => 'Ви впевнені, що хочете видалити?',
    'forum_confirm_del_topic' => 'Ви впевнені, що хочете видалити цю тему?',
    'forum_confirm_delete'    => 'Ви впевнені?',
    'forum_group_admin'       => 'Адміністратор',
    'forum_group_editor'      => 'Редактор',
    'forum_group_author'      => 'Автор',
    'forum_group_member'      => 'Учасник',
    'forum_edited_hint'       => '(змінено: %s)',
    'forum_reply_title'       => 'Написати відповідь',
    'forum_topic_locked_t'    => 'Тема закрита',

    'forum_js_mod_ok' => 'Дію успішно виконано, сторінка перезавантажується...',
    'forum_js_del_ok' => 'Тему видалено, ви будете перенаправлені на форум.',

    /* ══════════════════════════════════════
       АДМІН-ПАНЕЛЬ (inc/forum.php)
       ══════════════════════════════════════ */
    'forum_admin_title'    => 'DLE Native Forum',
    'forum_admin_subtitle' => 'Панель управління',

    /* Навігація */
    'forum_adm_nav_summary'    => 'Огляд',
    'forum_adm_nav_cats'       => 'Категорії',
    'forum_adm_nav_ranks'      => 'Звання',
    'forum_adm_nav_words'      => 'Заборонені слова',
    'forum_adm_nav_complaints' => 'Скарги',
    'forum_adm_nav_topics'     => 'Теми',
    'forum_adm_nav_pending'    => 'Черга перевірки',
    'forum_adm_nav_logs'       => 'Журнал модерації',
    'forum_adm_nav_settings'   => 'Налаштування',

    /* Керування категоріями */
    'forum_adm_cat_manage'     => 'Керування категоріями',
    'forum_adm_cat_add'        => 'Додати категорію',
    'forum_adm_cat_edit'       => 'Редагувати категорію',
    'forum_adm_cat_new'        => 'Нова категорія',
    'forum_adm_cat_name'       => 'Назва категорії',
    'forum_adm_cat_desc'       => 'Опис',
    'forum_adm_cat_parent'     => 'Батьківська категорія',
    'forum_adm_cat_icon'       => 'Іконка Font Awesome (fa-xxxx)',
    'forum_adm_cat_icn'        => 'Іконка',
    'forum_adm_cat_order'      => 'Порядок',
    'forum_adm_cat_slug'       => 'Слаг (ЧПУ)',
    'forum_adm_cat_saved'      => 'Категорію оновлено.',
    'forum_adm_cat_added'      => 'Нову категорію створено.',
    'forum_adm_cat_del'        => 'Категорію видалено.',
    'forum_adm_cat_del_subs'   => 'Спочатку видаліть або перемістіть підкатегорії.',
    'forum_adm_cat_del_topics' => 'Спочатку видаліть або перемістіть теми в цій категорії.',
    'forum_adm_no_parent'      => '— Головна категорія —',

    /* Керування званнями */
    'forum_adm_rank_manage' => 'Керування званнями',
    'forum_adm_rank_add'    => 'Додати звання',
    'forum_adm_rank_name'   => 'Назва звання',
    'forum_adm_rank_points' => 'Поріг балів',
    'forum_adm_rank_color'  => 'Колір',
    'forum_adm_rank_icon'   => 'FA Іконка',
    'forum_adm_rank_edit'   => 'Редагувати звання',
    'forum_adm_rank_new'    => 'Нове звання',
    'forum_adm_rank_badge'  => 'Текст значка',
    'forum_adm_rank_saved'  => 'Звання збережено.',
    'forum_adm_rank_del'    => 'Звання видалено.',

    /* Заборонені слова */
    'forum_adm_word_manage' => 'Заборонені слова',
    'forum_adm_word_add'    => 'Додати слово',
    'forum_adm_word_word'   => 'Заборонене слово',
    'forum_adm_word_repl'   => 'Заміна',
    'forum_adm_word_edit'   => 'Редагувати слово',
    'forum_adm_word_new'    => 'Нове слово',
    'forum_adm_word_saved'  => 'Слово збережено.',
    'forum_adm_word_del'    => 'Слово видалено.',

    /* Скарги */
    'forum_adm_complaints_title'  => 'Скарги форуму',
    'forum_adm_complaint_from'    => 'Скарга від',
    'forum_adm_complaint_content' => 'Зміст',
    'forum_adm_complaint_del'     => 'Скаргу видалено.',

    /* Журнали модерації */
    'forum_adm_logs_title' => 'Журнал модерації',
    'forum_adm_log_mod'    => 'Модератор',
    'forum_adm_log_action' => 'Дія',
    'forum_adm_log_topic'  => 'ID теми',
    'forum_adm_log_post'   => 'ID повідомлення',
    'forum_adm_log_ip'     => 'IP',

    /* Мітки дій журналу */
    'forum_log_move'       => 'Тему переміщено',
    'forum_log_bump'       => 'Тему піднято',
    'forum_log_lock'       => 'Закрити',
    'forum_log_unlock'     => 'Відкрити',
    'forum_log_pin'        => 'Закріпити',
    'forum_log_unpin'      => 'Відкріпити',
    'forum_log_del_topic'  => 'Видалити тему',
    'forum_log_del_post'   => 'Видалити повідомлення',
    'forum_log_edit_mod'   => 'Редагувати повідомлення',
    'forum_log_edit_own'   => 'Редагувати власне повідомлення',

    /* Налаштування та обслуговування */
    'forum_adm_settings_title' => 'Налаштування форуму',
    'forum_adm_maintenance'    => 'Обслуговування',
    'forum_adm_recalc'         => 'Перерахувати статистику',
    'forum_adm_clear_cache'    => 'Очистити кеш',
    'forum_adm_settings_saved' => 'Налаштування оновлено.',
    'forum_adm_recalc_running' => 'Перерахунок уже триває. Будь ласка, зачекайте.',
    'forum_adm_recalc_done'    => 'Статистику перераховано.',
    'forum_adm_cache_cleared'  => 'Кеш форуму очищено.',

    /* Мітки налаштувань */
    'forum_set_posts_per_page'  => 'Повідомлень на сторінку',
    'forum_set_topics_per_page' => 'Тем на сторінку',
    'forum_set_guest_view'      => 'Гості можуть переглядати (1/0)',
    'forum_set_min_post'        => 'Мін. довжина повідомлення',
    'forum_set_max_post'        => 'Макс. довжина повідомлення',
    'forum_set_flood'           => 'Час флуду (сек)',
    'forum_set_allow_attach'    => 'Дозволити вкладення (1/0)',
    'forum_set_max_attach'      => 'Макс. розмір файлу (байт)',
    'forum_set_allowed_ext'     => 'Дозволені типи файлів',
    'forum_set_points_topic'    => 'Бали за нову тему',
    'forum_set_points_reply'    => 'Бали за нову відповідь',
    'forum_set_points_like'     => 'Бали за отриманий лайк',
    'forum_set_approval'        => 'Черга перевірки (перші N повідомлень)',
    'forum_set_bump_cd'         => 'Кулдаун підняття теми (години)',

    /* Теми */
    'forum_adm_topics_title'  => 'Усі теми',
    'forum_adm_topics_cat'    => 'Категорія',
    'forum_adm_topics_author' => 'Автор',
    'forum_adm_topics_del'    => 'Тему видалено.',

    /* Черга перевірки */
    'forum_adm_pending_title'      => 'Очікують на перевірку',
    'forum_adm_pending_user'       => 'Користувач',
    'forum_adm_pending_preview'    => 'Попередній перегляд',
    'forum_adm_pending_approve'    => 'Схвалити',
    'forum_adm_pending_reject_btn' => 'Відхилити',
    'forum_adm_pending_empty'      => 'Немає повідомлень, що очікують на перевірку.',
    'forum_adm_pending_ok'         => 'Повідомлення опубліковано.',
    'forum_adm_pending_reject'     => 'Повідомлення видалено.',

    /* Статистика дашборду */
    'forum_adm_stat_topics'     => 'Усього тем',
    'forum_adm_stat_posts'      => 'Усього повідомлень',
    'forum_adm_stat_users'      => 'Усього користувачів',
    'forum_adm_stat_writers'    => 'Автори форуму',
    'forum_adm_stat_complaints' => 'Скарги',
    'forum_adm_stat_last_reg'   => 'Остання реєстрація',
    'forum_adm_last_post'       => 'Останнє повідомлення',
    'forum_adm_last_post_by'    => 'від',
    'forum_adm_recent_topics'   => 'Останні 10 тем',
    'forum_adm_recent_posts'    => 'Останні 5 повідомлень',
    'forum_adm_top_users'       => 'Активні користувачі',
    'forum_adm_quick_actions'   => 'Швидкі дії',

    /* Модальне вікно переміщення */
    'forum_adm_move_title'    => 'Перемістити тему',
    'forum_adm_move_label'    => 'Оберіть цільову категорію:',
    'forum_adm_move_btn'      => 'Перемістити',
    'forum_adm_move_ok'       => 'Тему успішно переміщено!',

    /* ───────── v1.1.3 НОВІ ФУНКЦІЇ ───────── */
    'forum_prefix'            => 'Префікс',
    'forum_tag_input'         => 'Теги (через кому)',
    'forum_description'       => 'Опис теми',
    'forum_unanswered'        => 'Теми без відповідей',
    'forum_no_unanswered'     => 'Тем без відповідей не знайдено.',
    'forum_active'            => 'Активні теми',
    'forum_no_active'         => 'Немає активних тем за цей період.',
    'forum_tags'              => 'Теги',
    'forum_no_tags'           => 'Теги ще не додані.',
    'forum_no_topics_tag'     => 'Тем із цим тегом не знайдено.',
    'forum_mark_all_read'     => 'Позначити всі як прочитані',

    /* ───────── v1.1.3 МАСОВА МОДЕРАЦІЯ ТА АДМІН ───────── */
    'forum_adm_bulk_done'     => 'Масову дію успішно застосовано.',
    'forum_adm_bulk_confirm'  => 'Ви впевнені, що хочете застосувати цю дію до вибраних тем?',
    'forum_adm_move_cat'      => 'Цільова категорія',
    'forum_adm_select_all'    => 'Вибрати все',
    'forum_adm_sort_hint'     => 'Порядок (менші числа виводяться першими)',
    'forum_adm_prefixes'      => 'Керування префіксами',

    /* ───────── v1.1.3 АДМІН-ПАНЕЛЬ: КЕРУВАННЯ ПРЕФІКСАМИ ТА ТЕГАМИ ───────── */
    'forum_adm_nav_prefixes'   => 'Префікси',
    'forum_adm_nav_tags'       => 'Теги',
    'forum_adm_prefixes'       => 'Керування префіксами',
    'forum_adm_prefix_add'     => 'Додати новий префікс',
    'forum_adm_prefix_title'   => 'Заголовок префікса',
    'forum_adm_prefix_cat'     => 'Категорія',
    'forum_adm_prefix_color'   => 'Кольори',
    'forum_adm_prefix_order'   => 'Порядок',
    'forum_adm_prefix_edit'    => 'Редагувати префікс',
    'forum_adm_prefix_new'     => 'Новий префікс',
    'forum_adm_prefix_saved'   => 'Префікс успішно оновлено.',
    'forum_adm_prefix_added'   => 'Новий префікс додано.',
    'forum_adm_prefix_del'     => 'Префікс видалено.',
    'forum_adm_tags_manage'    => 'Керування тегами',
    'forum_adm_tag_edit'       => 'Редагувати тег',
    'forum_adm_tag_name'       => 'Назва тега',
    'forum_adm_tag_slug'       => 'Слаг (ЧПУ)',
    'forum_adm_tag_count'      => 'Використання',
    'forum_adm_tag_saved'      => 'Тег успішно оновлено.',
    'forum_adm_tag_del'        => 'Тег видалено.',

    /* ───────── v1.1.3 НАЛАШТУВАННЯ ТА ІНШЕ ───────── */
    'forum_clean_readlog_days' => 'Очищення історії читання (днів)',
    'forum_err_msg_format'    => 'Невірний формат повідомлення.',
    'forum_err_file_verify'   => 'Тип файлу не вдалося підтвердити!',
    'forum_err_pm_fail'       => 'Не вдалося надіслати приватне повідомлення.',
    'forum_all_cats'          => 'Усі категорії',
    'forum_filter_today'      => 'Сьогодні',
    'forum_filter_week'       => 'За останні 7 днів',
    'forum_filter_month'      => 'За останні 30 днів',
    'forum_save_order'        => 'Зберегти порядок',
    'forum_order_ok'          => 'Порядок успішно оновлено!',
    'forum_no_cats_found'     => 'Категорій не знайдено.',
    'forum_color_text'        => 'Колір тексту',
    'forum_color_bg'          => 'Фон',
    'forum_bulk_apply'        => 'Застосувати',
    'forum_bulk_move'         => 'Перемістити',
    'forum_new_msg_alert'     => 'Є нове повідомлення',
    'forum_adm_ver_ok'        => 'ВЕРСІЯ АКТУАЛЬНА',
    'forum_adm_ver_new'       => 'НОВА ВЕРСІЯ: v%s',
    'forum_home'              => 'Головна',

    /* ───────── НОВЕ (v1.1.3 Очищення) ───────── */
    'forum_err_pm_invalid'    => 'Невірне ім\'я одержувача!',
    'forum_js_msg_del_ok'     => 'Повідомлення видалено, сторінка оновлюється...',
    'forum_ph_cat_name'       => 'Введіть назву категорії',
    'forum_ph_cat_desc'       => 'Короткий опис (необов\'язково)',
    'forum_main_cat'          => 'Основна категорія',
    'forum_adm_priv_cat'      => 'Приватна категорія',
    'forum_adm_priv_cat_desc' => 'видима тільки певним групам',
    'forum_adm_action_select' => 'Виберіть дію',

    /* ───────── НОВЕ (Сторінка редагування теми) ───────── */
    'forum_adm_edit_topic'        => 'Редагувати тему',
    'forum_adm_back'              => 'Назад',
    'forum_adm_topic_title'       => 'Заголовок теми',
    'forum_adm_topic_prefix'      => 'Префікс теми',
    'forum_adm_topic_desc'        => 'Короткий опис',
    'forum_adm_topic_tags'        => 'Теги',
    'forum_adm_topic_cat'         => 'Категорія',
    'forum_adm_topic_content'     => 'Вміст повідомлення',
    'forum_adm_topic_options'     => 'Опції',
    'forum_adm_pin_topic'         => 'Закріпити тему (тримати вгорі)',
    'forum_adm_lock_topic'        => 'Закрити тему (відповіді заборонені)',
    'forum_adm_topic_not_found'   => 'Тему не знайдено!',
    'forum_adm_topic_updated'     => 'Тему успішно оновлено!',
    'forum_adm_topic_title_empty' => 'Заголовок теми не може бути порожнім!',
    'forum_no_prefix'             => '-- Без префікса --',

    /* ───────── v1.1.3 Sticky OP & Nexus ───────── */
    'forum_set_sticky_op'    => 'Sticky OP: Закріплювати перше повідомлення на кожній сторінці',
    'forum_topic_starter'    => 'Автор теми',
    'forum_original_post'    => 'Початок теми',

    /* ───────── v1.1.3 Admin Topic List ───────── */
    'forum_adm_topic_list'    => 'Список тем',
    'forum_adm_no_topics'     => 'Тем поки немає.',
    'forum_adm_topics_found'  => 'тем знайдено',
    'forum_adm_sel_cat'       => '-- Виберіть категорію --',
    'forum_adm_apply'         => 'Застосувати',
    'forum_adm_bulk_confirm'  => 'Ви впевнені, що хочете застосувати цю дію до вибраних тем?',
    'forum_adm_manage'        => 'Управління форумом',
    'forum_order_ok'          => 'Сортування успішно оновлено!',
    'forum_ph_tags'           => 'тег1, тег2',
    'forum_view_profile'      => 'Перейти до профілю',
    'forum_confirm_del_post'  => 'Ви впевнені, що хочете видалити це повідомлення?',

));
?>
