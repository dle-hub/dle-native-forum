<?php
/*
=====================================================
 DLE Native Forum (Nexus) - Языковой файл (Русский)
-----------------------------------------------------
 https://github.com/dlehub
-----------------------------------------------------
 Copyright (c) 2024-2026 Dlehub & Elegance
=====================================================
 File: language/Russian/forum.lng.php
=====================================================
*/

global $lang;

$lang = array_merge((array)$lang, array(

// ══════════════════════════════════════════════════
// ОБЩЕЕ / CORE
// ══════════════════════════════════════════════════
'forum_error'                    => 'Ошибка',
'forum_warning'                  => 'Предупреждение',
'forum_success'                  => 'Успешно',
'forum_save'                     => 'Сохранить',
'forum_cancel'                   => 'Отмена',
'forum_action'                   => 'Действие',
'forum_confirm_delete'           => 'Вы уверены, что хотите удалить?',
'forum_confirm_del_post'         => 'Вы уверены, что хотите удалить это сообщение?',
'forum_date'                     => 'Дата',
'forum_new'                      => 'НОВОЕ',
'forum_forum'                    => 'Форум',
'forum_title'                    => 'Форум',
'forum_home'                     => 'Главная',
'forum_topic'                    => 'Тема',
'forum_post'                     => 'Сообщение',
'forum_reply'                    => 'Ответ',
'forum_replies'                  => 'Ответ',
'forum_replies_count'            => 'Ответов',
'forum_views'                    => 'Просмотры',
'forum_views_count'              => 'Просмотров',
'forum_status'                   => 'Статус',
'forum_pin'                      => 'Закреплено',
'forum_lock'                     => 'Закрыто',
'forum_guest'                    => 'Гость',
'forum_member'                   => 'Участник',
'forum_no_posts'                 => 'Сообщений пока нет',
'forum_topic_author'             => 'Автор:',
'forum_stats'                    => 'Статистика',
'forum_last_posts'               => 'Последние сообщения',
'forum_new_topic'                => 'Новая тема',
'forum_new_topic_btn'            => 'Создать тему',
'forum_deleted_topic'            => 'Удаленная тема',
'forum_no_prefix'                => 'Без префикса',
'forum_ph_tags'                  => 'тег1, тег2...',
'forum_all_cats'                 => 'Все категории',
'forum_topics'                   => 'Темы',
'forum_posts'                    => 'Сообщения',
'forum_group'                    => 'Группа',
'forum_active'                   => 'Активно',
'forum_passive'                  => 'Пассивно',
'forum_expand_all'               => 'Развернуть все',
'forum_collapse_all'             => 'Свернуть все',
'forum_order_fail'               => 'Не удалось сохранить сортировку!',
'forum_order_ok'                 => 'Сортировка категорий обновлена.',

// ══════════════════════════════════════════════════
// TPL ТЕГИ (v1.2.4)
// ══════════════════════════════════════════════════
'forum_attachments'              => 'Вложения',
'forum_edit'                     => 'Редактировать',
'forum_delete'                   => 'Удалить',
'forum_quote'                    => 'Цитата',
'forum_like'                     => 'Нравится',
'forum_dislike'                  => 'Не нравится',
'forum_pm_send'                  => 'Личное сообщение',
'forum_edited'                   => 'отредактировано',
'forum_posts'                    => 'Сообщения',
'forum_points'                   => 'Баллы',
'forum_rep'                      => 'Репутация',
'forum_follow'                   => 'Подписаться',
'forum_unfollow'                 => 'Отписаться',
'forum_bump'                     => 'Поднять',
'forum_unlock'                   => 'Открыть',
'forum_unpin'                    => 'Открепить',
'forum_delete_topic'             => 'Удалить тему',
'forum_send'                     => 'Отправить',
'forum_mark_read'                => 'Прочитано',
'forum_mark_all_read'            => 'Отметить все как прочитанные',
'forum_unanswered'               => 'Темы без ответов',
'forum_unanswered_desc'          => 'Темы, ожидающие ответа.',
'forum_no_unanswered'            => 'Нет тем без ответов.',
'forum_active'                   => 'Активные темы',
'forum_active_desc'              => 'Темы, обновленные за указанный период.',
'forum_no_active'                => 'За этот период активных тем нет.',
'forum_filter_today'             => 'Сегодня',
'forum_filter_days'              => 'За последние %d дней',
'forum_notif_'                   => 'Уведомление',
'forum_notif_like'               => 'Лайк',
'forum_notif_reply'              => 'Ответ',
'forum_notif_mention'            => 'Упоминание',
'forum_notif_quote'              => 'Цитата',

// ══════════════════════════════════════════════════
// СООБЩЕНИЯ ОБ ОШИБКАХ
// ══════════════════════════════════════════════════
'forum_err_login_pm'             => 'Вы должны войти, чтобы отправлять ЛС.',
'forum_err_pm_user'              => 'Пользователь не найден.',
'forum_err_login_notif'          => 'Вы должны войти, чтобы видеть уведомления.',
'forum_err_no_cats'              => 'Категории форума не найдены.',
'forum_err_no_topics'            => 'В этой категории нет тем.',
'forum_err_search_empty'         => 'Запрос не может быть пустым.',
'forum_err_search_min'           => 'Запрос должен быть не менее 3 символов.',
'forum_err_cat_invalid'          => 'Неверная категория.',
'forum_err_cat_not_found'        => 'Категория не найдена.',
'forum_err_login_topic'          => 'Вы должны войти, чтобы создать тему.',
'forum_err_no_perm_cat'          => 'У вас нет прав для создания тем в этой категории.',
'forum_err_cat_select'           => 'Пожалуйста, выберите категорию.',
'forum_err_csrf_retry'           => 'Ошибка безопасности, попробуйте еще раз.',
'forum_err_title_len'            => 'Заголовок должен быть не менее 3 символов.',
'forum_err_title_long'           => 'Заголовок не может превышать 255 символов.',
'forum_err_content_len'          => 'Сообщение должно быть не менее 10 символов.',
'forum_err_must_login'           => 'Вы должны войти для этого действия.',
'forum_err_no_permission'        => 'У вас нет прав для этого действия.',
'forum_err_title_short'          => 'Заголовок должен быть не менее 3 символов.',
'forum_err_post_short'           => 'Сообщение должно быть не менее 10 символов.',
'forum_err_post_min'             => 'Сообщение должно быть не менее %d символов.',
'forum_err_topic_not_found'      => 'Тема не найдена.',
'forum_err_topic_locked'         => 'Тема закрыта, вы не можете ответить.',
'forum_err_post_not_found'       => 'Сообщение не найдено.',
'forum_err_own_like'             => 'Вы не можете оценить свое сообщение.',
'forum_err_complaint_short'      => 'Причина жалобы должна быть не менее 5 символов.',
'forum_err_complaint_dup'        => 'Вы уже подали жалобу на это сообщение.',
'forum_err_msg_not_found'        => 'Сообщение не найдено.',
'forum_err_bump_locked'          => 'Нельзя поднять закрытую тему.',
'forum_err_bump_owner'           => 'Только автор темы может ее поднять.',
'forum_err_bump_cooldown'        => 'Подождите %s перед повторным поднятием.',
'forum_err_move_cat'             => 'Целевая категория не найдена.',
'forum_err_invalid_action'       => 'Неверное действие.',
'forum_err_upload_none'          => 'Файл не выбран.',
'forum_err_upload_disabled'      => 'Загрузка файлов отключена.',
'forum_err_upload_error'         => 'Ошибка загрузки: %s.',
'forum_err_upload_size'          => 'Файл %s слишком велик (Макс: %s МБ).',
'forum_err_upload_ext'           => 'Тип файла %s не разрешен.',
'forum_err_pm_self'              => 'Вы не можете отправить сообщение самому себе.',
'forum_err_pm_title'             => 'Тема должна быть не менее 2 символов.',
'forum_err_pm_text'              => 'Сообщение должно быть не менее 5 символов.',
'forum_err_user_not_found'       => 'Пользователь не найден.',
'err_flood_blocked'              => 'Слишком много попыток. Аккаунт временно заблокирован.',
'err_flood_ip'                   => 'Слишком много запросов с вашего IP. Подождите.',
'err_flood_post'                 => 'Подождите немного перед отправкой сообщений.',
'forum_err_csrf'                 => 'Ошибка проверки безопасности!',
'forum_err_db'                   => 'Ошибка базы данных: ',
'forum_err_upload_mime'          => 'Тип файла не подтвержден!',
'forum_err_pm_fail'              => 'Не удалось отправить ЛС',
'forum_err_no_link_perm'         => 'У вашей группы нет прав на ссылки.',
'forum_err_pm_name'              => 'Неверное имя получателя!',
'forum_err_no_edit_perm'         => 'У вас нет прав для редактирования!',
'forum_err_no_edit_time'         => 'Это сообщение нельзя редактировать!',
'forum_err_invalid_msg'          => 'Неверный формат сообщения.',
'forum_err_msg_len'              => 'Сообщение должно быть не менее 3 символов.',
'forum_adm_topic_title_empty'    => 'Заголовок темы не может быть пустым!',
'forum_adm_topic_updated'        => 'Тема обновлена!',

// ══════════════════════════════════════════════════
// СООБЩЕНИЯ ОБ УСПЕХЕ
// ══════════════════════════════════════════════════
'forum_ok_pm_sent'               => 'Сообщение отправлено.',
'forum_ok_approval_pending'      => 'Сообщение ожидает проверки.',
'forum_ok_complaint'             => 'Жалоба успешно отправлена.',
'forum_ok_bump'                  => 'Тема успешно обновлена.',

// ══════════════════════════════════════════════════
// ПОИСК
// ══════════════════════════════════════════════════
'forum_search'                   => 'Поиск',
'forum_search_no_results'        => 'Ничего не найдено.',
'forum_search_results'           => 'Результаты поиска',
'forum_topics_found'             => 'Найдено тем: %d.',

// ══════════════════════════════════════════════════
// РЕДАКТОР
// ══════════════════════════════════════════════════
'forum_edit_msg'                 => 'Редактировать сообщение',
'forum_write_reply'              => 'Ответить',
'forum_topic_locked'             => 'Тема закрыта',
'forum_must_login'               => 'Нужно войти',
'forum_attach_label'             => 'Прикрепить файл',

// ══════════════════════════════════════════════════
// ЖУРНАЛ МОДЕРАЦИИ
// ══════════════════════════════════════════════════
'forum_log_lock'                 => 'Закрыто',
'forum_log_unlock'               => 'Открыто',
'forum_log_pin'                  => 'Закреплено',
'forum_log_unpin'                => 'Откреплено',
'forum_log_del_topic'            => 'Тема удалена',
'forum_log_del_post'             => 'Сообщение удалено',
'forum_log_edit_mod'             => 'Правка модератором',
'forum_log_edit_own'             => 'Правка автором',
'forum_log_move'                 => 'Перемещено',
'forum_log_bump'                 => 'Обновлено',

// ══════════════════════════════════════════════════
// ЛИЧНЫЕ СООБЩЕНИЯ
// ══════════════════════════════════════════════════
'forum_pm'                       => 'Личные сообщения',
'forum_pm_not_found'             => 'Сообщение не найдено.',
'forum_pm_empty'                 => 'Сообщений пока нет.',
'forum_notifications'            => 'Уведомления',
'forum_no_notifs'                => 'Уведомлений пока нет.',

// ══════════════════════════════════════════════════
// ПРОФИЛЬ / ПОЛЬЗОВАТЕЛЬ
// ══════════════════════════════════════════════════
'forum_no_user_posts'            => 'У этого пользователя еще нет сообщений.',

// ══════════════════════════════════════════════════
// ТЕГИ
// ══════════════════════════════════════════════════
'forum_tags'                     => 'Теги',
'forum_tags_desc'                => 'Популярные теги форума.',
'forum_no_tags'                  => 'Тегов пока нет.',
'forum_no_topics_tag'            => 'Тем с таким тегом нет.',
'forum_tagged_topics'            => 'Темы с этим тегом',

// ══════════════════════════════════════════════════
// АДМИН-ПАНЕЛЬ - ОБЩЕЕ
// ══════════════════════════════════════════════════
'forum_admin_title'              => 'DLE Native Forum',
'forum_admin_subtitle'           => 'Панель управления',
'forum_adm_ver_new'              => 'v%s доступна!',
'forum_adm_ver_ok'               => 'Актуально',

// АДМИН-ПАНЕЛЬ - НАВИГАЦИЯ
'forum_adm_nav_summary'          => 'Обзор',
'forum_adm_nav_cats'             => 'Категории',
'forum_adm_nav_ranks'            => 'Звания',
'forum_adm_nav_words'            => 'Фильтр слов',
'forum_adm_nav_complaints'       => 'Жалобы',
'forum_adm_nav_topics'           => 'Темы',
'forum_adm_nav_pending'          => 'На модерации',
'forum_adm_nav_logs'             => 'Журнал',
'forum_adm_nav_settings'         => 'Настройки',
'forum_adm_nav_prefixes'         => 'Префиксы',
'forum_adm_nav_tags'             => 'Теги',
'forum_adm_nav_promotions'       => 'Повышения',

// АДМИН-ПАНЕЛЬ - КАТЕГОРИИ
'forum_adm_cat_saved'            => 'Категория сохранена.',
'forum_adm_cat_added'            => 'Категория добавлена.',
'forum_adm_cat_del_subs'         => 'Удалите сначала подкатегории.',
'forum_adm_cat_del_topics'       => 'Удалите или перенесите сначала темы.',
'forum_adm_cat_del'              => 'Категория удалена.',
'forum_adm_cat_manage'           => 'Управление категориями',
'forum_adm_cat_add'              => 'Добавить категорию',
'forum_adm_no_cats'              => 'Категорий еще нет.',
'forum_adm_cat_edit'             => 'Изменить категорию',
'forum_adm_cat_new'              => 'Новая категория',
'forum_adm_cat_name'             => 'Название',
'forum_adm_cat_desc'             => 'Описание',
'forum_adm_parent_cat'           => 'Родитель',
'forum_adm_cat_icon'             => 'Иконка',
'forum_adm_cat_icon_fa'          => 'FA класс, напр: fa-folder',
'forum_adm_priv_cat'             => 'Приватная',
'forum_adm_priv_cat_desc'        => 'только для групп',
'forum_adm_require_approval'     => 'Премодерация',
'forum_adm_require_approval_desc'=> 'темы требуют одобрения',
'forum_adm_allowed_groups'       => 'Доступные группы',
'forum_adm_groups_comma'         => 'через запятую, напр: 2,3',
'forum_adm_read_groups'          => 'Чтение',
'forum_adm_write_groups'         => 'Запись',
'forum_main_cat'                 => 'Главная категория',
'forum_ph_cat_name'              => 'Название категории',
'forum_ph_cat_desc'              => 'Краткое описание',

// АДМИН-ПАНЕЛЬ - ЗВАНИЯ
'forum_adm_rank_saved'           => 'Звание сохранено.',
'forum_adm_rank_del'             => 'Звание удалено.',
'forum_adm_rank_manage'          => 'Управление званиями',
'forum_adm_rank_add'             => 'Добавить звание',
'forum_adm_rank_points'          => 'Мин. баллов',
'forum_adm_rank_color'           => 'Цвет',
'forum_adm_rank_icon'            => 'Иконка',
'forum_adm_rank_edit'            => 'Изменить звание',
'forum_adm_rank_new'             => 'Новое звание',
'forum_adm_rank_name'            => 'Название',
'forum_adm_rank_badge'           => 'Текст значка',

// АДМИН-ПАНЕЛЬ - ПРЕФИКСЫ
'forum_adm_prefix_saved'         => 'Префикс сохранен.',
'forum_adm_prefix_added'         => 'Префикс добавлен.',
'forum_adm_prefix_del'           => 'Префикс удален.',
'forum_adm_prefixes'             => 'Управление префиксами',
'forum_adm_prefix_add'           => 'Добавить префикс',
'forum_adm_prefix_title'         => 'Название',
'forum_adm_prefix_cat'           => 'Категория',
'forum_adm_prefix_color'         => 'Цвет текста',
'forum_adm_prefix_bg_color'      => 'Фон',
'forum_adm_prefix_order'         => 'Порядок',
'forum_adm_prefix_text_color'    => 'Цвет текста',
'forum_adm_prefix_bg_color'      => 'Фон',
'forum_adm_prefix_edit'          => 'Изменить префикс',
'forum_adm_prefix_new'           => 'Новый префикс',

// АДМИН-ПАНЕЛЬ - ТЕГИ
'forum_adm_tag_saved'            => 'Тег сохранен.',
'forum_adm_tag_del'              => 'Тег удален.',
'forum_adm_tags_manage'          => 'Управление тегами',
'forum_adm_tag_name'             => 'Название',
'forum_adm_tag_slug'             => 'ЧПУ',
'forum_adm_tag_count'            => 'Использование',
'forum_adm_tag_edit'             => 'Изменить тег',

// АДМИН-ПАНЕЛЬ - ФИЛЬТР СЛОВ
'forum_adm_word_saved'           => 'Слово сохранено.',
'forum_adm_word_del'             => 'Слово удалено.',
'forum_adm_word_manage'          => 'Фильтр запрещенных слов',
'forum_adm_word_add'             => 'Добавить слово',
'forum_adm_word_word'            => 'Слово',
'forum_adm_word_repl'            => 'Замена',
'forum_adm_word_edit'            => 'Изменить слово',
'forum_adm_word_new'             => 'Новое слово',

// АДМИН-ПАНЕЛЬ - ЖАЛОБЫ
'forum_adm_complaint_del'        => 'Жалоба удалена.',
'forum_adm_complaints_title'     => 'Управление жалобами',
'forum_adm_complaint_from'       => 'Жалоба от',
'forum_adm_complaint_content'    => 'Контент',

// АДМИН-ПАНЕЛЬ - ЖУРНАЛ
'forum_adm_logs_title'           => 'Журнал модерации',
'forum_adm_log_mod'              => 'Модератор',
'forum_adm_log_action'           => 'Действие',
'forum_adm_log_topic'            => 'ID темы',
'forum_adm_log_post'             => 'ID сообщения',
'forum_adm_log_ip'               => 'IP адрес',

// АДМИН-ПАНЕЛЬ - НАСТРОЙКИ
'forum_adm_settings_saved'       => 'Настройки сохранены.',
'forum_adm_settings_title'       => 'Настройки форума',
'forum_set_posts_per_page'       => 'Сообщений на страницу',
'forum_set_topics_per_page'      => 'Тем на страницу',
'forum_set_topics_per_page_desc' => 'Количество тем, отображаемых на одной странице.',
'forum_set_guest_view'           => 'Гости видят (1/0)',
'forum_set_guest_view_desc'      => 'Разрешить гостям просматривать форум?',
'forum_set_min_post'             => 'Мин. длина сообщения',
'forum_set_min_post_desc'        => 'Минимальное количество символов в сообщении.',
'forum_set_max_post'             => 'Макс. длина сообщения',
'forum_set_max_post_desc'        => 'Максимальное количество символов в сообщении.',
'forum_set_allow_member_edit'    => 'Редактирование сообщений пользователями',
'forum_set_allow_member_edit_desc' => 'Разрешить пользователям редактировать свои сообщения? Если отключено, редактировать могут только админы и редакторы.',
'forum_set_flood'                => 'Флуд-контроль (сек)',
'forum_set_allow_attach'         => 'Вложения (1/0)',
'forum_set_max_attach'           => 'Макс. размер файла (байт)',
'forum_set_allowed_ext'          => 'Разрешенные типы',
'forum_set_points_topic'         => 'Баллы за тему',
'forum_set_points_reply'         => 'Баллы за ответ',
'forum_set_points_like'          => 'Баллы за лайк',
'forum_set_approval'             => 'Порог одобрения',
'forum_set_bump_cd'              => 'Кулдаун подъема (час)',
'forum_set_sticky_op'            => 'Первый пост всегда вверху (1/0)',
'forum_set_link_min_posts'       => 'Мин. сообщений для ссылок',
'forum_set_link_min_points'      => 'Мин. баллов для ссылок',
'forum_set_captcha'              => 'Капча (1/0)',
'forum_set_promotion'            => 'Авто-повышение (1/0)',
'forum_clean_readlog_days'       => 'Очистка истории (дней)',

// АДМИН-ПАНЕЛЬ - ОБСЛУЖИВАНИЕ
'forum_adm_maintenance'          => 'Обслуживание',
'forum_adm_recalc'               => 'Пересчет статистики',
'forum_adm_clear_cache'          => 'Очистка кэша',
'forum_adm_recalc_running'       => 'Пересчет выполняется, подождите 5 минут.',
'forum_adm_recalc_done'          => 'Статистика пересчитана.',
'forum_adm_cache_cleared'        => 'Кэш очищен.',

// АДМИН-ПАНЕЛЬ - ТЕМЫ
'forum_adm_topic_list'           => 'Список тем',
'forum_adm_no_topics'            => 'Темы не найдены.',
'forum_adm_topics_found'         => 'тем найдено',
'forum_adm_topic_title'          => 'Заголовок',
'forum_adm_topic_cat'            => 'Категория',
'forum_adm_topics_author'        => 'Автор',
'forum_adm_select_all'           => 'Выбрать все',
'forum_adm_action_select'        => 'Выберите действие',
'forum_adm_unpin'                => 'Открепить',
'forum_bulk_move'                => 'Перенести',
'forum_adm_apply'                => 'Применить',
'forum_adm_bulk_confirm'         => 'Вы уверены?',
'forum_adm_bulk_done'            => 'Массовое действие выполнено.',
'forum_adm_sel_cat'              => 'Выберите категорию',

// АДМИН-ПАНЕЛЬ - ПРАВКА ТЕМЫ
'forum_adm_edit_topic'           => 'Изменить тему',
'forum_adm_back'                 => 'Назад',
'forum_adm_topic_prefix'         => 'Префикс',
'forum_adm_topic_desc'           => 'Описание',
'forum_adm_topic_tags'           => 'Теги',
'forum_adm_topic_content'        => 'Контент',
'forum_adm_topic_options'        => 'Опции',
'forum_adm_pin_topic'            => 'Закрепить тему',
'forum_adm_lock_topic'           => 'Закрыть тему',

// АДМИН-ПАНЕЛЬ - МОДЕРАЦИЯ
'forum_adm_pending_ok'           => 'Одобрено.',
'forum_adm_pending_reject'       => 'Отклонено.',
'forum_adm_pending_title'        => 'Очередь модерации',
'forum_adm_pending_user'         => 'Пользователь',
'forum_adm_pending_preview'      => 'Предпросмотр',
'forum_adm_pending_approve'      => 'Одобрить',
'forum_adm_pending_reject_btn'   => 'Отклонить',
'forum_adm_pending_empty'        => 'Нет заявок.',
'forum_adm_pending_topics_title' => 'Ожидающие темы',
'forum_adm_pending_posts_title'  => 'Ожидающие сообщения',

// АДМИН-ПАНЕЛЬ - ПОВЫШЕНИЯ
'forum_adm_promotion_saved'      => 'Правило сохранено.',
'forum_adm_promotion_del'        => 'Правило удалено.',
'forum_adm_promotions_title'     => 'Авто-повышение групп',
'forum_adm_promotion_add'        => 'Добавить правило',
'forum_adm_from_group'           => 'Текущая группа',
'forum_adm_to_group'             => 'Целевая группа',
'forum_adm_min_points'           => 'Мин. баллов',
'forum_adm_min_likes'            => 'Мин. лайков',
'forum_adm_min_posts'            => 'Мин. сообщений',
'forum_adm_rule_active'          => 'Активно',
'forum_adm_promotion_edit'       => 'Изменить правило',
'forum_adm_promotion_new'        => 'Новое правило',
'forum_adm_no_promotions'        => 'Правил еще нет.',

// АДМИН-ПАНЕЛЬ - ДАШБОРД
'forum_adm_stat_topics'          => 'Темы',
'forum_adm_stat_posts'           => 'Сообщения',
'forum_adm_stat_users'           => 'Участники',
'forum_adm_stat_writers'         => 'Авторы',
'forum_adm_stat_complaints'      => 'Жалобы',
'forum_adm_stat_last_reg'        => 'Новичок',
'forum_adm_last_post'            => 'Последний пост',
'forum_adm_last_post_by'         => 'от',
'forum_adm_recent_topics'        => 'Свежие темы',
'forum_adm_recent_posts'         => 'Свежие сообщения',
'forum_adm_top_users'            => 'Топ авторов',
'forum_adm_prefix_sel'           => '-- Выберите префикс --',
'forum_adm_topic_desc_label'     => 'Описание (опц.)',
'forum_adm_topic_desc_ph'        => 'Краткое описание темы...',
'forum_adm_quick_actions'        => 'Действия',
'forum_adm_tab_general'          => 'Общие',
'forum_adm_tab_security'         => 'Безопасность',
'forum_adm_tab_gamification'     => 'Геймификация',
'forum_adm_tab_maintenance'      => 'Обслуживание',

// АДМИН-ПАНЕЛЬ - РАНГИ
'forum_adm_rank_type'            => 'Тип',
'forum_adm_rank_for_group'       => 'Звание по группе',
'forum_adm_rank_for_group_desc'  => 'Только для групп. 0 = Всем (по очкам).',
'forum_adm_rank_all_groups'      => 'Все группы (по очкам)',
'forum_group_admin'              => 'Группа 1: Админ',
'forum_group_editor'             => 'Группа 2: Редактор',
'forum_group_moderator'          => 'Группа 3: Модератор',

// АДМИН-ПАНЕЛЬ - IP БАН
'forum_adm_nav_bans'             => 'IP Бан',
'forum_adm_bans_title'           => 'Управление банами',
'forum_adm_ban_add'              => 'Добавить бан',
'forum_adm_ban_ip'               => 'IP адрес',
'forum_adm_ban_reason'           => 'Причина',
'forum_adm_ban_contact'          => 'Контакт (email)',
'forum_adm_ban_days'             => 'Срок (дней, 0=перм)',
'forum_adm_ban_delete'           => 'Удалить',
'forum_adm_ban_permanent'        => 'Постоянно',
'forum_adm_ban_expires'          => 'Истекает',
'forum_adm_ban_by'               => 'Кем',
'forum_adm_ban_date'             => 'Дата',
'forum_adm_bans_empty'           => 'Активных банов нет.',
'forum_adm_ban_added'            => 'Бан добавлен.',
'forum_adm_ban_deleted'          => 'Бан удален.',

// АДМИН-ПАНЕЛЬ - SEO
'forum_adm_tab_seo'              => 'Настройки SEO',
'forum_set_schema_jsonld'        => 'Schema.org JSON-LD',
'forum_set_schema_jsonld_desc'   => 'Добавлять структурированные данные (DiscussionForumPosting) для SEO. Google использует их для расширенных результатов.',
'forum_set_nested_quotes'        => 'Вложенные цитаты',
'forum_set_nested_quotes_desc'   => 'Разрешить пользователям делать вложенные цитаты [quote=Имя]...[/quote]',
'forum_set_quote_depth'          => 'Глубина цитат',
'forum_set_quote_depth_desc'     => 'Максимальная глубина вложенных цитат (1-10). Чем выше, тем больше вложенных блоков.',
'forum_set_canonical'            => 'Canonical URL',
'forum_set_canonical_desc'       => 'Добавлять тег canonical link на каждую страницу темы (предотвращает дублирование контента)',
'forum_set_meta_desc'            => 'Meta Description',
'forum_set_meta_desc_desc'       => 'Автоматически создавать мета-описание из первого сообщения темы',
'forum_set_meta_desc_len'        => 'Длина Meta Description',
'forum_set_meta_desc_len_desc'   => 'Максимальное количество символов для автоматического мета-описания',

));
?>