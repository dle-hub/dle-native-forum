<?php
/*
=====================================================
 DLE Native Forum - Russian Language File
=====================================================
*/

global $lang; // DLE ana dil dizisine erişim sağlar (Sidebar bozulmasını önler)

// Mevcut $lang dizisini koruyarak üzerine ekle
$lang = array_merge((array)$lang, array(

    /* ───────── GENERAL ───────── */
    'forum_title'             => 'Форум сообщества',
    'forum_error'             => 'Ошибка',
    'forum_warning'           => 'Предупреждение',
    'forum_success'           => 'Успешно',
    'forum_cancel'            => 'Отмена',
    'forum_save'              => 'Сохранить',
    'forum_delete'            => 'Удалить',
    'forum_edit'              => 'Редактировать',
    'forum_yes'               => 'Да',
    'forum_no'                => 'Нет',
    'forum_forum'             => 'Форум',
    'forum_topic'             => 'Тема',
    'forum_topics'            => 'Темы',
    'forum_post'              => 'Сообщение',
    'forum_posts'             => 'Сообщения',
    'forum_reply'             => 'Ответ',
    'forum_replies'           => 'Ответы',
    'forum_views'             => 'Просмотры',
    'forum_online'            => 'Онлайн',
    'forum_member'            => 'Пользователь',
    'forum_members'           => 'Пользователи',
    'forum_stats'             => 'Статистика',
    'forum_last_posts'        => 'Последние сообщения',
    'forum_no_posts'          => 'Нет сообщений',
    'forum_new_topic'         => 'Новая тема',
    'forum_new_topic_btn'     => 'Создать тему',
    'forum_date'              => 'Дата',
    'forum_action'            => 'Действие',
    'forum_status'            => 'Статус',
    'forum_search'            => 'Поиск',
    'forum_guest'             => 'Гость',
    'forum_write_reply'       => "Написать ответ",

    /* ───────── AUTH / PERMISSIONS ───────── */
    'forum_err_must_login'       => 'Необходимо войти.',
    'forum_err_login_pm'         => 'Необходимо войти для доступа к личным сообщениям.',
    'forum_err_login_notif'      => 'Необходимо войти для просмотра уведомлений.',
    'forum_err_login_topic'      => 'Необходимо войти для создания темы.',
    'forum_err_no_permission'    => 'У вас нет прав!',
    'forum_err_no_perm_cat'      => 'У вас нет прав для создания тем в этой категории.',
    'forum_err_must_login_short' => 'Требуется вход',

    /* ───────── CSRF ───────── */
    'forum_err_csrf'       => 'Ошибка проверки безопасности!',
    'forum_err_csrf_retry' => 'Ошибка проверки безопасности! Обновите страницу и попробуйте снова.',

    /* ───────── CATEGORY ERRORS ───────── */
    'forum_err_cat_invalid'   => 'Неверная ссылка на категорию.',
    'forum_err_cat_not_found' => 'Категория не найдена или удалена.',
    'forum_err_no_cats'       => 'Категории ещё не добавлены.',
    'forum_err_cat_select'    => 'Неверный выбор категории.',

    /* ───────── TOPIC ERRORS ───────── */
    'forum_err_topic_not_found' => 'Тема не найдена!',
    'forum_err_topic_locked'    => 'Эта тема закрыта!',
    'forum_err_locked_notice'   => 'Эта тема была закрыта.',
    'forum_err_title_short'     => 'Заголовок должен быть не менее 3 символов!',
    'forum_err_title_long'      => 'Заголовок слишком длинный!',
    'forum_err_content_short'   => 'Содержимое должно быть не менее 10 символов!',
    'forum_err_no_topics'       => 'В этой категории ещё нет тем.',
    'forum_err_invalid_action'  => 'Неверное действие.',

    /* ───────── POST ERRORS ───────── */
    'forum_err_post_not_found' => 'Сообщение не найдено!',
    'forum_err_post_short'     => 'Сообщение слишком короткое!',
    'forum_err_post_min'       => 'Сообщение должно быть не менее %d символов!',

    /* ───────── FLOOD ───────── */
    'forum_err_flood_topic' => 'Вы создаёте темы слишком быстро! Подождите %d секунд.',
    'forum_err_flood_reply' => 'Вы отправляете сообщения слишком быстро! Подождите %d секунд.',
    'forum_err_flood_like'  => 'Вы ставите лайки слишком быстро! Подождите %d сек.',
    'err_flood_blocked'    => 'Вы сделали слишком много запросов! Подождите 10 минут.',
    'err_flood_ip'         => 'Достигнут часовой лимит запросов. Пожалуйста, подождите.',
    'err_flood_post'       => 'Вы выполняете действия слишком быстро! Подождите %s секунд.',

    /* ───────── BUMP ───────── */
    'forum_err_bump_locked'    => 'Закрытые темы нельзя поднимать!',
    'forum_err_bump_owner'     => 'Только автор темы может её поднять!',
    'forum_err_bump_cooldown'  => 'Подождите ещё %d часов перед подъёмом темы!',
    'forum_ok_bump'            => 'Тема поднята!',
    'forum_bump_btn'           => 'Поднять',

    /* ───────── LIKES ───────── */
    'forum_err_own_like'      => 'Нельзя оценить своё сообщение!',
    'forum_js_liked'          => 'Сообщение понравилось!',
    'forum_js_disliked'       => 'Сообщение не понравилось.',
    'forum_js_vote_removed'   => 'Оценка снята.',

    /* ───────── FOLLOW ───────── */
    'forum_follow_btn'      => 'Подписаться',
    'forum_unfollow_btn'    => 'Отписаться',
    'forum_js_followed'     => 'Подписка оформлена.',
    'forum_js_unfollowed'   => 'Подписка отменена.',

    /* ───────── COMPLAINTS ───────── */
    'forum_err_complaint_short' => 'Причина жалобы слишком короткая!',
    'forum_err_complaint_dup'   => 'Вы уже пожаловались на это сообщение!',
    'forum_ok_complaint'        => 'Ваша жалоба отправлена.',

    /* ───────── UPLOADS ───────── */
    'forum_err_upload_none'     => 'Файл не выбран!',
    'forum_err_upload_disabled' => 'Загрузка файлов отключена!',
    'forum_err_upload_error'    => 'Ошибка загрузки: %s',
    'forum_err_upload_size'     => '%s слишком большой! Макс: %s МБ',
    'forum_err_upload_ext'      => '%s: тип файла не разрешён.',

    /* ───────── SEARCH ───────── */
    'forum_err_search_empty'   => 'Введите поисковый запрос.',
    'forum_err_search_min'     => 'Поисковый запрос должен быть не менее 3 символов!',
    'forum_search_results'     => 'Результаты поиска',
    'forum_topics_found'       => 'Найдено тем: %d.',
    'forum_search_no_results'  => 'По вашему запросу ничего не найдено.',

    /* ───────── APPROVAL QUEUE ───────── */
    'forum_ok_approval_pending' => 'Ваше сообщение ожидает проверки модератором.',

    /* ───────── PM (PRIVATE MESSAGES) ───────── */
    'forum_pm_empty'         => 'Ваши входящие пусты.',
    'forum_pm_not_found'     => 'Сообщение не найдено.',
    'forum_err_pm_user'      => 'Пользователь не найден.',
    'forum_ok_pm_sent'       => 'Сообщение успешно отправлено.',
    'forum_err_pm_invalid'   => 'Неверное имя получателя!',
    'forum_err_pm_notfound'  => 'Пользователь не найден!',
    'forum_err_pm_title'     => 'Тема слишком короткая!',
    'forum_err_pm_text'      => 'Сообщение слишком короткое!',
    'forum_err_pm_self'      => 'Неверный получатель!',

    /* ───────── NOTIFICATIONS ───────── */
    'forum_notifications'  => 'Уведомления',
    'forum_no_notifs'      => 'У вас пока нет уведомлений.',
    'forum_notif_reply'    => 'ответил(а) в вашей теме',
    'forum_notif_like'     => 'оценил(а) ваше сообщение',
    'forum_notif_pm'       => 'отправил(а) вам личное сообщение',
    'forum_notif_mention'  => 'упомянул(а) вас',
    'forum_deleted_topic'  => 'Удалённая тема',

    /* ───────── JS & GENERAL ───────── */
    'forum_js_conn_error'     => 'Ошибка соединения!',
    'forum_err_move_cat'      => 'Категория не найдена!',
    'forum_admin_label'       => 'МОДЕРАЦИЯ:',
    'forum_lock'              => 'Закрыть',
    'forum_unlock'            => 'Открыть',
    'forum_pin'               => 'Закрепить',
    'forum_unpin'             => 'Открепить',
    'forum_delete_topic'      => 'Удалить тему',
    'forum_confirm_del_post'  => 'Вы уверены, что хотите удалить?',
    'forum_confirm_del_topic' => 'Вы уверены, что хотите удалить эту тему?',
    'forum_confirm_delete'    => 'Вы уверены?',
    'forum_group_admin'       => 'Администратор',
    'forum_group_editor'      => 'Редактор',
    'forum_group_author'      => 'Автор',
    'forum_group_member'      => 'Участник',
    'forum_edited_hint'       => '(изменено: %s)',
    'forum_reply_title'       => 'Написать ответ',
    'forum_topic_locked_t'    => 'Тема закрыта',

    /* ══════════════════════════════════════
       ADMIN PANEL WORDS (inc/forum.php)
       ══════════════════════════════════════ */
    'forum_admin_title'    => 'DLE Native Forum',
    'forum_admin_subtitle' => 'Панель управления',

    /* Navbar */
    'forum_adm_nav_summary'    => 'Обзор',
    'forum_adm_nav_cats'       => 'Категории',
    'forum_adm_nav_ranks'      => 'Звания',
    'forum_adm_nav_words'      => 'Запрещённые слова',
    'forum_adm_nav_complaints' => 'Жалобы',
    'forum_adm_nav_topics'     => 'Темы',
    'forum_adm_nav_pending'    => 'Очередь проверки',
    'forum_adm_nav_logs'       => 'Журнал модерации',
    'forum_adm_nav_settings'   => 'Настройки',

    /* Category Management */
    'forum_adm_cat_manage'     => 'Управление категориями',
    'forum_adm_cat_add'        => 'Добавить категорию',
    'forum_adm_cat_edit'       => 'Редактировать категорию',
    'forum_adm_cat_new'        => 'Новая категория',
    'forum_adm_cat_name'       => 'Название категории',
    'forum_adm_cat_desc'       => 'Описание',
    'forum_adm_cat_parent'     => 'Родительская категория',
    'forum_adm_cat_icon'       => 'Иконка Font Awesome (fa-xxxx)',
    'forum_adm_cat_icn'        => 'Иконка',
    'forum_adm_cat_order'      => 'Порядок',
    'forum_adm_cat_slug'       => 'Слаг (ЧПУ)',
    'forum_adm_cat_saved'      => 'Категория обновлена.',
    'forum_adm_cat_added'      => 'Новая категория создана.',
    'forum_adm_cat_del'        => 'Категория удалена.',
    'forum_adm_cat_del_subs'   => 'Сначала удалите или переместите подкатегории.',
    'forum_adm_cat_del_topics' => 'Сначала удалите или переместите темы в этой категории.',
    'forum_adm_no_parent'      => '— Главная категория —',

    /* Rank Management */
    'forum_adm_rank_manage' => 'Управление званиями',
    'forum_adm_rank_add'    => 'Добавить звание',
    'forum_adm_rank_name'   => 'Название звания',
    'forum_adm_rank_points' => 'Порог очков',
    'forum_adm_rank_color'  => 'Цвет',
    'forum_adm_rank_icon'   => 'FA Иконка',
    'forum_adm_rank_edit'   => 'Редактировать звание',
    'forum_adm_rank_new'    => 'Новое звание',
    'forum_adm_rank_badge'  => 'Текст значка',
    'forum_adm_rank_saved'  => 'Звание сохранено.',
    'forum_adm_rank_del'    => 'Звание удалено.',

    /* Banned Words */
    'forum_adm_word_manage' => 'Запрещённые слова',
    'forum_adm_word_add'    => 'Добавить слово',
    'forum_adm_word_word'   => 'Запрещённое слово',
    'forum_adm_word_repl'   => 'Замена',
    'forum_adm_word_edit'   => 'Редактировать слово',
    'forum_adm_word_new'    => 'Новое слово',
    'forum_adm_word_saved'  => 'Слово сохранено.',
    'forum_adm_word_del'    => 'Слово удалено.',

    /* Complaints */
    'forum_adm_complaints_title'  => 'Жалобы форума',
    'forum_adm_complaint_from'    => 'Жалоба от',
    'forum_adm_complaint_content' => 'Содержание',
    'forum_adm_complaint_del'     => 'Жалоба удалена.',

    /* Mod Logs */
    'forum_adm_logs_title' => 'Журнал модерации',
    'forum_adm_log_mod'    => 'Модератор',
    'forum_adm_log_action' => 'Действие',
    'forum_adm_log_topic'  => 'ID темы',
    'forum_adm_log_post'   => 'ID сообщения',
    'forum_adm_log_ip'     => 'IP',

    /* Log Action Labels */
    'forum_log_move'       => 'Тема перемещена',
    'forum_log_bump'       => 'Тема поднята',
    'forum_log_lock'       => 'Закрыть',
    'forum_log_unlock'     => 'Открыть',
    'forum_log_pin'        => 'Закрепить',
    'forum_log_unpin'      => 'Открепить',
    'forum_log_del_topic'  => 'Удалить тему',
    'forum_log_del_post'   => 'Удалить сообщение',
    'forum_log_edit_mod'   => 'Редактировать сообщение',
    'forum_log_edit_own'   => 'Редактировать своё сообщение',

    /* Settings and Maintenance */
    'forum_adm_settings_title' => 'Настройки форума',
    'forum_adm_maintenance'    => 'Обслуживание',
    'forum_adm_recalc'         => 'Пересчитать статистику',
    'forum_adm_clear_cache'    => 'Очистить кэш',
    'forum_adm_settings_saved' => 'Настройки обновлены.',
    'forum_adm_recalc_running' => 'Пересчёт уже выполняется. Пожалуйста, подождите.',
    'forum_adm_recalc_done'    => 'Статистика пересчитана.',
    'forum_adm_cache_cleared'  => 'Кэш форума очищен.',

    /* Setting Labels */
    'forum_set_posts_per_page'  => 'Сообщений на страницу',
    'forum_set_topics_per_page' => 'Тем на страницу',
    'forum_set_guest_view'      => 'Гости могут просматривать (1/0)',
    'forum_set_min_post'        => 'Мин. длина сообщения',
    'forum_set_max_post'        => 'Макс. длина сообщения',
    'forum_set_flood'           => 'Время флуда (сек)',
    'forum_set_allow_attach'    => 'Разрешить вложения (1/0)',
    'forum_set_max_attach'      => 'Макс. размер файла (байт)',
    'forum_set_allowed_ext'     => 'Разрешённые типы файлов',
    'forum_set_points_topic'    => 'Очки за новую тему',
    'forum_set_points_reply'    => 'Очки за новый ответ',
    'forum_set_points_like'     => 'Очки за полученный лайк',
    'forum_set_approval'        => 'Очередь проверки (первые N сообщений)',
    'forum_set_bump_cd'         => 'Кулдаун подъёма темы (часы)',

    /* Topics */
    'forum_adm_topics_title'  => 'Все темы',
    'forum_adm_topics_cat'    => 'Категория',
    'forum_adm_topics_author' => 'Автор',
    'forum_adm_topics_del'    => 'Тема удалена.',

    /* Approval Queue */
    'forum_adm_pending_title'      => 'Ожидающие проверки',
    'forum_adm_pending_user'       => 'Пользователь',
    'forum_adm_pending_preview'    => 'Предпросмотр',
    'forum_adm_pending_approve'    => 'Одобрить',
    'forum_adm_pending_reject_btn' => 'Отклонить',
    'forum_adm_pending_empty'      => 'Нет сообщений, ожидающих проверки.',
    'forum_adm_pending_ok'         => 'Сообщение опубликовано.',
    'forum_adm_pending_reject'     => 'Сообщение удалено.',

    /* Dashboard Statistics */
    'forum_adm_stat_topics'     => 'Всего тем',
    'forum_adm_stat_posts'      => 'Всего сообщений',
    'forum_adm_stat_users'      => 'Всего пользователей',
    'forum_adm_stat_writers'    => 'Авторы форума',
    'forum_adm_stat_complaints' => 'Жалобы',
    'forum_adm_stat_last_reg'   => 'Последняя регистрация',
    'forum_adm_last_post'       => 'Последнее сообщение',
    'forum_adm_last_post_by'    => 'от',
    'forum_adm_recent_topics'   => 'Последние 10 тем',
    'forum_adm_recent_posts'    => 'Последние 5 сообщений',
    'forum_adm_top_users'       => 'Активные пользователи',
    'forum_adm_quick_actions'   => 'Быстрые действия',

    /* Move Modal */
    'forum_adm_move_title' => 'Переместить тему',
    'forum_adm_move_label' => 'Выберите целевую категорию:',
    'forum_adm_move_btn'   => 'Переместить',
    'forum_adm_move_ok'    => 'Тема успешно перемещена!',

));
?>