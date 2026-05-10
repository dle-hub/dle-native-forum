# 📘 DLE Native Forum — Полная документация TPL тегов (v1.2.0)

Данная документация содержит описание всех `.tpl` файлов, доступных тегов, условных блоков и примеров использования в плагине DLE Native Forum (включая систему рангов по группам и систему иконок в стиле MyBB).

---

# 📂 Структура папок

Для работы плагина в папке вашего шаблона должна находиться директория `forum/` с соответствующими `.tpl` файлами.

```text
templates/your_theme/
└── forum/
    ├── main.tpl
    ├── category.tpl
    ├── topic.tpl
    ├── new_topic.tpl
    ├── edit_topic.tpl
    ├── search.tpl
    ├── forum_block.tpl
    ├── notifications.tpl
    ├── user_posts.tpl
    ├── pm.tpl
    └── blocks/
        ├── cat_wrap.tpl
        ├── forum_row.tpl
        ├── topic_row.tpl
        ├── post_row.tpl
        ├── user_post_row.tpl
        ├── empty.tpl
        ├── notif_row.tpl
        ├── attachment_img.tpl
        ├── attachment_file.tpl
        ├── attachments_wrap.tpl
        ├── tag_item.tpl
        ├── tag_cloud_item.tpl
        ├── tag_cloud_wrap.tpl
        ├── day_filter.tpl
        └── day_filter_wrap.tpl
```

---

# 📁 1. `main.tpl` — Главная страница форума

Основная страница индекса форума. Здесь перечислены все категории.
**Используется в:** `actions/main.php`

## 🧩 Теги

| Тег | Описание | Пример вывода |
|---|---|---|
| `{forum_cats}` | Полный HTML-вывод категорий | Список категорий |
| `{total_topics}` | Общее количество тем | `1,234` |
| `{total_posts}` | Общее количество сообщений | `5,678` |
| `{total_members}` | Общее количество пользователей | `890` |
| `{online_count}` | Всего пользователей онлайн | `42` |
| `{online_members}` | Участников онлайн | `15` |
| `{online_guests}` | Гостей онлайн | `27` |
| `{today_visitors}` | Уникальных посетителей за сегодня | `120` |
| `{last_member}` | Имя последнего зарегистрированного пользователя | `john_doe` |
| `{forum_url}` | URL главной страницы форума | `/forum/` |
| `{breadcrumb}` | HTML хлебных крошек | `<nav>...</nav>` |
| `{SITEURL}` | Основной URL сайта | `https://site.com/` |

## 🔀 Условные блоки

```html
[is-logged]
    <div class="user-panel">Добро пожаловать!</div>
[/is-logged]

[not-logged]
    <div class="guest-panel">
        <a href="/index.php?do=register">Регистрация</a>
    </div>
[/not-logged]
```

---

# 📁 2. `category.tpl` — Страница категории

Список тем внутри категории.
**Используется в:** `actions/category.php`, `active.php`, `tag.php`, `unanswered.php`

## 🧩 Теги

| Тег | Описание |
|---|---|
| `{cat_name}` | Название категории |
| `{cat_desc}` | Описание категории |
| `{cat_id}` | ID категории |
| `{sub_forums}` | HTML подфорумов |
| `{topics_list}` | HTML списка тем |
| `{pagination}` | HTML пагинации |
| `{breadcrumb}` | HTML хлебных крошек |
| `{SITEURL}` | URL сайта |

## 🔀 Условные блоки

```html
[has-subforums]
    <div class="subforums">{sub_forums}</div>
[/has-subforums]

[has-desc]
    <div class="cat-desc">{cat_desc}</div>
[/has-desc]

[is-logged]
    <a href="/forum/new-topic/?cat_id={cat_id}" class="btn">Новая тема</a>
[/is-logged]

[not-logged]
    <div class="alert">Пожалуйста, войдите, чтобы создать тему</div>
[/not-logged]
```

---

# 📁 3. `topic.tpl` — Страница темы

Отображение сообщений внутри темы.
**Используется в:** `actions/topic.php`

## 🧩 Основные теги

| Тег | Описание |
|---|---|
| `{posts_list}` | HTML списка сообщений |
| `{topic_title}` | Заголовок темы |
| `{topic_description}` | Краткое описание темы |
| `{topic_tags}` | HTML тегов |
| `{topic_id}` | ID темы |
| `{pagination}` | Пагинация |
| `{editor}` | HTML WYSIWYG редактора (включая скрытые поля) |
| `{csrf_token}` | Значение CSRF-токена |
| `{editor_title}` | Заголовок секции редактора ("Ответить" / "Редактировать") |
| `{lang_send}` | Текст кнопки отправки |
| `{reply_error}` | Текст сообщения об ошибке |
| `{breadcrumb}` | HTML хлебных крошек |
| `{SITEURL}` | URL сайта |
| `{forum_js_vars}` | Глобальные переменные JS |
| `{schema_jsonld}` | Тег скрипта JSON-LD DiscussionForumPosting от Schema.org |
| `{lang_attach}` | Текст "Прикрепить файл" |

## 🧩 Теги уведомлений

| Тег | Описание |
|---|---|
| `{notif_count}` | Количество непрочитанных уведомлений |
| `{notif_url}` | URL страницы уведомлений |
| `{notif_badge_display}` | Значение CSS display для бейджа: `inline-flex` или `none` |

## 🧩 Теги модерации и действий

| Тег | Описание |
|---|---|
| `{lang_follow}` | Текст "Подписаться" |
| `{lang_unfollow}` | Текст "Отписаться" |
| `{lang_bump}` | Текст "Поднять тему" |
| `{lang_lock}` | Текст "Закрыть" |
| `{lang_unlock}` | Текст "Открыть" |
| `{lang_pin}` | Текст "Закрепить" |
| `{lang_unpin}` | Текст "Открепить" |
| `{lang_delete_topic}` | Текст "Удалить тему" |
| `{edit_topic_url}` | URL страницы редактирования темы |

## 🔀 Условные блоки

```html
[is-logged]
    <div class="reply-form">{editor}</div>
[/is-logged]

[not-logged]
    <div class="login-warning">Пожалуйста, войдите, чтобы ответить</div>
[/not-logged]

[is-following]
    <button class="unfollow-btn">{lang_unfollow}</button>
[/is-following]

[not-following]
    <button class="follow-btn">{lang_follow}</button>
[/not-following]

[is-locked]
    <div class="locked-warning">Эта тема закрыта.</div>
[/is-locked]

[not-locked]
    <div class="reply-form">{editor}</div>
[/not-locked]

[can-bump]
    <button class="bump-btn">{lang_bump}</button>
[/can-bump]

[can-moderate]
    <div class="mod-tools">
        <button>{lang_lock}</button>
        <button>{lang_pin}</button>
        [is-pinned]<span class="pinned-badge">Закреплено</span>[/is-pinned]
        [not-pinned]<span class="normal-badge">Обычная</span>[/not-pinned]
    </div>
[/can-moderate]

[has-tags]
    <div class="topic-tags">{topic_tags}</div>
[/has-tags]

[has-desc]
    <div class="topic-desc">{topic_description}</div>
[/has-desc]

[has-error]
    <div class="error-message">{reply_error}</div>
[/has-error]

[allow-upload]
    <input type="file" name="forum_file[]" multiple>
    <span>{lang_attach}</span>
[/allow-upload]
```

---

# 📁 4. `blocks/post_row.tpl` — Строка сообщения ⭐ КРИТИЧНО

Повторяющийся шаблон для каждого сообщения. Содержит информацию о пользователе, ранг и инструменты модерации.

## 👤 Информация о пользователе

| Тег | Описание | Пример |
|---|---|---|
| `{post_id}` | ID сообщения (для якорей) | `42` |
| `{post_class}` | CSS класс (если ТС, то `df-post-op`) | `df-post-op` |
| `{post_num}` | Порядковый номер сообщения | `3` |
| `{p_user}` | Имя пользователя (HTML escaped) | `John_Doe` |
| `{p_user_js}` | Имя пользователя (безопасно для JS) | `John_Doe` |
| `{p_avatar}` | Полный URL аватара | `https://site.com/uploads/fotos/foto.png` |
| `{p_profile}` | URL страницы профиля | `https://site.com/user/John_Doe/` |
| `{p_date}` | Дата сообщения | `15.01.2025, 14:30` |
| `{p_text}` | Содержимое сообщения (BBCode обработан) | HTML |
| `{p_sig}` | Подпись (BBCode обработан) | HTML |
| `{p_reg_date}` | Дата регистрации | `01.06.2023` |
| `{p_id}` | ID сообщения (короткий, для JS действий) | `42` |
| `{edit_date}` | Дата редактирования | `15.01.2025, 15:00` |

## 📊 Статистика

| Тег | Описание | Пример |
|---|---|---|
| `{forum_post_count}` | Всего сообщений (отформатировано) | `1,234` |
| `{forum_points}` | Баллы (отформатировано) | `550` |
| `{forum_rep}` | Репутация / Лайки (отформатировано) | `42` |
| `{rep_percent}` | Процент репутации (для progress bar) | `45` |
| `{likes_count}` | Количество лайков | `15` |
| `{dislikes_count}` | Количество дизлайков | `2` |

## 🏅 Информация о рангах и группах (Приоритетная система)

| Тег | Описание | Пример |
|---|---|---|
| `{rank_title}` | Название ранга | `Администратор` |
| `{rank_icon}` | Иконка ранга (класс FA ИЛИ путь к картинке) | `fa-crown` или `ranks/admin.gif` |
| `{rank_color}` | Цвет ранга | `#ef4444` |
| `{group_name}` | Название группы DLE | `Администратор` |
| `{group_color}` | Цвет группы DLE | `#ef4444` |

## 🔘 Кнопки и ссылки

| Тег | Описание |
|---|---|
| `{edit_url}` | URL редактирования сообщения (темы, если это первый пост) |
| `{edit_topic_url}` | URL редактирования темы |
| `{pm_url}` | URL отправки ЛС |
| `{lang_edit}` | Текст "Изменить" |
| `{lang_delete}` | Текст "Удалить" |
| `{lang_quote}` | Текст "Цитата" |
| `{lang_like}` | Текст "Нравится" |
| `{lang_dislike}` | Текст "Не нравится" |
| `{lang_pm}` | Текст "Отправить ЛС" |
| `{lang_report}` | Текст "Пожаловаться" |
| `{lang_edited}` | Текст "Отредактировано" |
| `{lang_posts}` | Текст "Сообщения" |
| `{lang_points}` | Текст "Баллы" |
| `{lang_rep}` | Текст "Репутация" |
| `{lang_attach}` | Текст "Прикрепить файл" |

## 📎 Вложения

| Тег | Описание |
|---|---|
| `{attachments_html}` | Полный HTML-вывод вложений |

## 🔀 Условные блоки

### Статус онлайн
```html
[online]
    <span class="online-badge">В сети</span>
[/online]
[offline]
    <span class="offline-badge">Не в сети</span>
[/offline]
```

### 🏅 Отображение ранга (Стиль MyBB / Поддержка Font Awesome)
**Описание:** В приоритетной системе, если вы укажете `fa-crown` для ранга, отобразится иконка FA; если укажете `ranks/admin.gif`, автоматически отобразится картинка.

```html
[has-rank]
    <div class="user-rank">
        [is-img-rank]
            <!-- Иконка-картинка: если сохранено как ranks/admin.gif -->
            <img src="{SITEURL}templates/{skin}/{rank_icon}" alt="{rank_title}" class="df-rank-image">
        [/is-img-rank]

        [is-fa-rank]
            <!-- Иконка Font Awesome: если сохранено как fa-crown -->
            <span class="df-rank-badge" style="color:{rank_color}">
                <i class="fa {rank_icon}"></i> {rank_title}
            </span>
        [/is-fa-rank]
    </div>
[/has-rank]
```
> ⚠️ **Важно:** Блоки `[is-img-rank]` и `[is-fa-rank]` могут использоваться **только** внутри `[has-rank]`.

### Подпись и редактирование
```html
[has-sig]
    <div class="signature">{p_sig}</div>
[/has-sig]

[is-edited]
    <div class="edited-info">{lang_edited}: {edit_date}</div>
[/is-edited]
```

### Вложения
```html
[has-attachments]
    <div class="attachments">{attachments_html}</div>
[/has-attachments]
```

### Вход и права
```html
[is-logged]
    <button class="like-btn">{lang_like}</button>
    <button class="dislike-btn">{lang_dislike}</button>
[/is-logged]

[not-logged]
    <span class="text-muted">Войдите, чтобы оценить</span>
[/not-logged]

[is-liked]
    <button class="like-btn active">Понравилось ({likes_count})</button>
[/is-liked]

[is-disliked]
    <button class="dislike-btn active">Не понравилось ({dislikes_count})</button>
[/is-disliked]

[not-self]
    <a href="{pm_url}">{lang_pm}</a>
[/not-self]

[can-edit]
    <a href="{edit_url}">{lang_edit}</a>
[/can-edit]

[can-delete]
    <button class="delete-btn">{lang_delete}</button>
[/can-delete]

[is-locked]
    <span class="locked-label">Тема закрыта</span>
[/is-locked]

[not-locked]
    <!-- Обычные действия с сообщением -->
[/not-locked]
```

### 🧩 Пример полного `post_row.tpl`
```html
<article id="post-{post_id}" class="df-post {post_class}">
    <!-- Левая панель -->
    <div class="df-post-author">
        <div class="df-avatar-wrap">
            <img src="{p_avatar}" alt="{p_user}">
            [online]<span class="df-online-dot"></span>[/online]
            [offline]<span class="df-offline-dot"></span>[/offline]
        </div>
        
        <div class="df-username" style="color:{group_color}">
            <a href="{p_profile}">{p_user}</a>
        </div>
        <div class="df-group-label">{group_name}</div>

        [has-rank]
            <div class="df-rank">
                [is-img-rank]
                    <img src="{SITEURL}templates/{skin}/{rank_icon}" alt="{rank_title}">
                [/is-img-rank]
                [is-fa-rank]
                    <span style="color:{rank_color}"><i class="fa {rank_icon}"></i> {rank_title}</span>
                [/is-fa-rank]
            </div>
        [/has-rank]

        <div class="df-stats">
            <div>{lang_posts}: {forum_post_count}</div>
            <div>{lang_points}: {forum_points}</div>
            <div>{lang_rep}: {forum_rep}</div>
        </div>
    </div>

    <!-- Правая панель -->
    <div class="df-post-body">
        <div class="df-post-header">
            <span class="df-post-num">#{post_num}</span>
            <span class="df-post-date">{p_date}</span>
        </div>
        <div class="df-post-text">{p_text}</div>

        [has-attachments]
            <div class="df-attachments">{attachments_html}</div>
        [/has-attachments]

        [is-edited]
            <div class="df-edited">{lang_edited}: {edit_date}</div>
        [/is-edited]

        [has-sig]
            <div class="df-signature">{p_sig}</div>
        [/has-sig]

        <div class="df-post-actions">
            [is-logged]
                <button onclick="forumQuote('{p_user_js}', {post_id})">{lang_quote}</button>
                [not-self]<a href="{pm_url}">{lang_pm}</a>[/not-self]
                <button onclick="forumLike({post_id}, 'like')">{lang_like} ({likes_count})</button>
                <button onclick="forumLike({post_id}, 'dislike')">{lang_dislike} ({dislikes_count})</button>
                <button onclick="forumReport({post_id})">{lang_report}</button>
            [/is-logged]
            [can-edit]<a href="{edit_url}">{lang_edit}</a>[/can-edit]
            [can-delete]<button onclick="forumDeletePost({post_id})">{lang_delete}</button>[/can-delete]
        </div>
    </div>
</article>
```

---

# 📁 5. `blocks/forum_row.tpl` — Строка форума

Строка категории или подфорума.

## 🧩 Теги
| Тег | Описание |
|---|---|
| `{forum_url}` | URL форума |
| `{icon_class}` | Класс иконки (fa-folder, fa-comments и т.д.) |
| `{forum_name}` | Название форума |
| `{forum_desc}` | Описание |
| `{sub_cats_html}` | HTML подкатегорий |
| `{topic_count}` | Количество тем |
| `{post_count}` | Количество сообщений |
| `{last_url}` | URL последнего сообщения |
| `{last_user}` | Автор последнего сообщения |
| `{last_title}` | Заголовок последней темы |
| `{last_date}` | Дата последнего сообщения |
| `{last_avatar}` | Аватар автора последнего сообщения |

## 🔀 Условные блоки
```html
[has-last-post]
    <div class="last-post">
        <img src="{last_avatar}" class="micro-avatar">
        <a href="{last_url}">{last_title}</a>
        <span>{last_user} - {last_date}</span>
    </div>
[/has-last-post]

[no-last-post]
    <div class="no-posts">Нет сообщений</div>
[/no-last-post]

[has-subforums]
    <div class="subforums">{sub_cats_html}</div>
[/has-subforums]
```

---

# 📁 6. `blocks/topic_row.tpl` — Строка темы

Каждая строка в списке тем.

## 🧩 Теги
| Тег | Описание |
|---|---|
| `{topic_class}` | CSS класс |
| `{t_url}` | URL темы |
| `{t_title}` | Заголовок |
| `{t_desc}` | Краткое описание темы |
| `{t_user}` | Автор темы |
| `{t_date}` | Дата создания |
| `{t_replies}` | Кол-во ответов (отформатировано) |
| `{t_views}` | Кол-во просмотров (отформатировано) |
| `{t_prefix}` | HTML префикса (цветной бейдж) |
| `{t_tags}` | HTML тегов |
| `{last_user}` | Последний ответивший |
| `{last_date}` | Дата последнего ответа |
| `{last_avatar}` | Аватар последнего ответившего |
| `{last_url}` | URL последнего сообщения |

## 🔀 Условные блоки
```html
[has-tags]
    <div class="tags">{t_tags}</div>
[/has-tags]

[has-last-post]
    <div class="last-post">
        <img src="{last_avatar}" class="micro-avatar">
        <a href="{last_url}">{last_user}</a> - {last_date}
    </div>
[/has-last-post]

[is-pinned]
    <span class="badge-pinned">📌 Закреплено</span>
[/is-pinned]

[is-locked]
    <span class="badge-locked">🔒 Закрыто</span>
[/is-locked]

[is-normal]
    <span class="badge-normal">💬 Обычная</span>
[/is-normal]

[has-desc]
    <div class="desc">{t_desc}</div>
[/has-desc]
```

---

# 📁 7. `blocks/cat_wrap.tpl` — Обертка категории

Шаблон, оборачивающий основные категории.

## 🧩 Теги
| Тег | Описание |
|---|---|
| `{cat_name}` | Название основной категории |
| `{icon}` | Иконка категории (fa-folder и т.д.) |
| `{cat_forums}` | HTML список подфорумов внутри |

---

# 📁 8. `new_topic.tpl` & `edit_topic.tpl` — Формы тем

## 🧩 Теги
| Тег | Описание |
|---|---|
| `{cat_name}` | Название категории |
| `{cat_id}` | ID категории |
| `{prefix_select}` | HTML выбора префикса |
| `{tags_input}` / `{tags_val}` | HTML ввода тегов / значение |
| `{description_input}` / `{description_val}` / `{description_field}` | Поля описания |
| `{editor}` | HTML WYSIWYG редактора |
| `{title_val}` | Значение заголовка (для восстановления после ошибки) |
| `{csrf_token}` | CSRF токен |
| `{error}` | Сообщение об ошибке |
| `{breadcrumb}` | Хлебные крошки |
| `{SITEURL}` | URL сайта |
| `{forum_js_vars}` | JS переменные |
| `{lang_attach}` | Текст прикрепления файла |
| `{pending_text}` | Сообщение об ожидании модерации (только new_topic) |

## 🔀 Условные блоки
```html
[error]
    <div class="alert alert-danger">{error}</div>
[/error]

[allow-upload]
    <input type="file" name="forum_file[]" multiple>
[/allow-upload]

[pending-notice]
    <div class="alert alert-warning">{pending_text}</div>
[/pending-notice]

[is-logged] ... [/is-logged]
[not-logged] ... [/not-logged]
```

---

# 📁 9. `search.tpl` — Результаты поиска

## 🧩 Теги
| Тег | Описание |
|---|---|
| `{search_query}` | Поисковый запрос |
| `{total_results}` | Количество найденных результатов |
| `{topics_list}` | HTML результатов |
| `{pagination}` | Пагинация |
| `{breadcrumb}` | Хлебные крошки |
| `{SITEURL}` | URL сайта |
| `{search_url}` | URL действия формы поиска |
| `{filter_user}` | Значение фильтра по пользователю |
| `{filter_cat_options}` | HTML опций выпадающего списка категорий |
| `{filter_date_from}` | Значение даты "от" |
| `{filter_date_to}` | Значение даты "до" |

---

# 📁 10. Блоки уведомлений и пользователей

## `notifications.tpl`
| Тег | Описание |
|---|---|
| `{notif_content}` | HTML списка уведомлений |
| `{forum_url}` | URL главной страницы форума |
| `{breadcrumb}` | Хлебные крошки |
| `{SITEURL}` | URL сайта |

## `blocks/notif_row.tpl`
| Тег | Описание |
|---|---|
| `{notif_url}` | URL цели уведомления |
| `{notif_icon}` | Иконка типа уведомления (`fa-reply`, `fa-thumbs-up`, `fa-at`) |
| `{notif_color}` | Цвет типа уведомления |
| `{notif_from}` | Отправитель уведомления |
| `{notif_action}` | Текст действия ("ответил в теме") |
| `{notif_topic}` | Заголовок соответствующей темы |
| `{notif_date}` | Дата уведомления |

```html
[has-link]
    <a href="{notif_url}" class="notif-row">...</a>
[/has-link]

[no-link]
    <div class="notif-row no-link">...</div>
[/no-link]
```

## `user_posts.tpl` & `blocks/user_post_row.tpl`
**Осн. теги:** `{user_name}`, `{user_avatar}`, `{total_posts}`, `{posts_list}`, `{pagination}`, `{breadcrumb}`, `{SITEURL}`
**Теги строки:** `{post_url}`, `{post_title}`, `{cat_url}`, `{cat_name}`, `{post_date}`, `{post_preview}`

---

# 📁 11. Блоки вложений (Attachments)

## `blocks/attachment_img.tpl`
| Тег | Описание |
|---|---|
| `{att_url}` | Полный URL изображения |
| `{att_name}` | Оригинальное имя файла |

## `blocks/attachment_file.tpl`
| Тег | Описание |
|---|---|
| `{att_url}` | URL скачивания файла |
| `{att_name}` | Оригинальное имя файла |
| `{att_size}` | Размер файла (KB) |

## `blocks/attachments_wrap.tpl`
| Тег | Описание |
|---|---|
| `{att_label}` | Текст "Вложения" |
| `{att_count}` | Общее кол-во вложений |
| `{att_images}` | HTML изображений |
| `{att_files}` | HTML файлов |

```html
[has-images]
    <div class="att-images">{att_images}</div>
[/has-images]

[has-files]
    <div class="att-files">{att_files}</div>
[/has-files]
```

---

# 📁 12. Теги и блоки фильтров

## Облако тегов
**`blocks/tag_item.tpl`**: `{tag_url}`, `{tag_name}`
**`blocks/tag_cloud_item.tpl`**: `{tag_url}`, `{tag_name}`, `{tag_count}`, `{tag_size}`
**`blocks/tag_cloud_wrap.tpl`**: `{tag_cloud_items}`, `{empty_msg}`
```html
[has-tags] <div class="tag-cloud">{tag_cloud_items}</div> [/has-tags]
[no-tags] <div class="empty-tags">{empty_msg}</div> [/no-tags]
```

## Фильтр по дням
**`blocks/day_filter.tpl`**: `{filter_url}`, `{filter_active}`, `{filter_text}`
**`blocks/day_filter_wrap.tpl`**: `{day_filter_items}`

## Пустой контент
**`blocks/empty.tpl`**: `{empty_msg}`

---

# 📁 13. Прочие шаблоны

## `forum_block.tpl` — Виджет боковой панели
| Тег | Описание |
|---|---|
| `{title}` | Заголовок темы |
| `{link}` | URL темы |
| `{author}` | Имя автора |
| `{category}` | Название категории |
| `{replies}` | Кол-во ответов |
| `{date}` | Дата (отформатировано) |
| `{avatar}` | URL аватара |

## `pm.tpl` — Личные сообщения (неактивно)
> ⚠️ Этот шаблон не используется активно, так как происходит перенаправление на систему диалогов DLE.

---

# 🎯 Переменные JavaScript

Глобальные переменные, генерируемые тегом `{forum_js_vars}`:

```javascript
window.FORUM_AJAX = "https://site.com/forum/ajax/";
window.FORUM_CSRF = "csrf_token_hash";
window.FORUM_ID = "123";       // ID текущего пользователя
window.SITEURL = "https://site.com/";
window.FORUM_TOPIC = "456";   // Только в topic.tpl
```

### 🛠 Frontend Функции (forum.js)

Основные функции, определенные в `forum.js` и используемые в шаблонах (`.tpl`):

| Функция | Описание | Пример использования |
|---|---|---|
| `forum.like(id, 'like')` | Лайк / Дизлайк сообщения | `onclick="forum.like({post_id}, 'like')"` |
| `forum.quote(user, id)` | Цитата сообщения | `onclick="forum.quote('{p_user}', {post_id})"` |
| `forum.report(id)` | Жалоба на сообщение | `onclick="forum.report({post_id})"` |
| `forum.deletePost(id)` | Удаление сообщения (с подтверждением) | `onclick="forum.deletePost({post_id})"` |
| `forum.bumpTopic(id)` | Поднять тему (Bump) | `onclick="forum.bumpTopic({topic_id})"` |
| `forum.toggleFollow(id)` | Подписка на тему | `onclick="forum.toggleFollow({topic_id})"` |
| `forum.markAllRead()` | Прочитать все уведомления | `onclick="forum.markAllRead()"` |
| `forum.topicAction(act, id)`| Управление темой (lock, pin) | `onclick="forum.topicAction('lock', {topic_id})"` |

---

# 🏅 Система рангов по группам — Интеграция TPL

Ранги, назначенные в админпанели через поле `for_group` (например: Группа 1=Админ, Группа 3=Модератор, Группа 5=VIP), и их иконки поддерживаются автоматически.

**Алгоритм работы:**
1. Если в админке в поле иконки указано `fa-crown` → сработает блок `[is-fa-rank]`.
2. Если в админке в поле иконки указано `ranks/admin.gif` → сработает блок `[is-img-rank]`.
3. Если пользователь Админ (Группа 1), даже при 0 баллов он получит ранг "Администратор" (по группе) вместо ранга "Новичок" (по баллам) в блоке `[has-rank]`.

```html
<!-- Использование ранга внутри post_row -->
[has-rank]
    <div class="author-rank">
        [is-img-rank]
            <img src="{SITEURL}templates/{skin}/{rank_icon}" alt="{rank_title}">
        [/is-img-rank]
        [is-fa-rank]
            <span style="color:{rank_color}"><i class="fa {rank_icon}"></i> {rank_title}</span>
        [/is-fa-rank]
    </div>
[/has-rank]
```

---

# ✅ Примечания к версии документации

Эта документация включает все изменения:
- Поддержка системы рангов по группам (`for_group`).
- Поддержка иконок-картинок в стиле MyBB (`[is-img-rank]` / `[is-fa-rank]`).
- Блоки онлайн/оффлайн (`[online]`/`[offline]`).
- Теги расширенных фильтров поиска.
- Тег Schema.org SEO (`{schema_jsonld}`).
- Добавлены все недостающие теги JS и модерации.
- Поддержка `{t_desc}` и `[has-desc]` расширена на все страницы списков (категории и т.д.).
- Вся фронтенд-логика консолидирована в `forum.js`.
