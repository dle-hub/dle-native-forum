# 📘 DLE Native Forum — Comprehensive TPL Tag Documentation (v1.2.0)

This documentation contains all `.tpl` files, valid tags, conditional blocks, and usage examples used in the DLE Native Forum plugin (including Group Priority Rank and MyBB Style Icon System).

---

# 📂 Folder Structure

For the plugin to work, the `forum/` directory and related `.tpl` files must be in your theme folder.

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

# 📁 1. `main.tpl` — Forum Home Page

Main index page of the forum. All categories are listed here.
**Used in:** `actions/main.php`

## 🧩 Tags

| Tag | Description | Example Output |
|---|---|---|
| `{forum_cats}` | Full category HTML output | Category list |
| `{total_topics}` | Total number of topics | `1,234` |
| `{total_posts}` | Total number of posts | `5,678` |
| `{total_members}` | Total number of members | `890` |
| `{online_count}` | Total online users | `42` |
| `{online_members}` | Online member count | `15` |
| `{online_guests}` | Online guest count | `27` |
| `{today_visitors}` | Daily unique visitors | `120` |
| `{last_member}` | Last registered member name | `john_doe` |
| `{forum_url}` | Forum home page URL | `/forum/` |
| `{breadcrumb}` | Breadcrumb HTML | `<nav>...</nav>` |
| `{SITEURL}` | Site root URL | `https://site.com/` |

## 🔀 Conditional Blocks

```html
[is-logged]
    <div class="user-panel">Welcome back!</div>
[/is-logged]

[not-logged]
    <div class="guest-panel">
        <a href="/index.php?do=register">Register</a>
    </div>
[/not-logged]
```

---

# 📁 2. `category.tpl` — Category Page

Lists topics within a category.
**Used in:** `actions/category.php`, `active.php`, `tag.php`, `unanswered.php`

## 🧩 Tags

| Tag | Description |
|---|---|
| `{cat_name}` | Category name |
| `{cat_desc}` | Category description |
| `{cat_id}` | Category ID |
| `{sub_forums}` | Sub-forums HTML |
| `{topics_list}` | Topic list HTML |
| `{pagination}` | Pagination HTML |
| `{breadcrumb}` | Breadcrumb HTML |
| `{SITEURL}` | Site URL |

## 🔀 Conditional Blocks

```html
[has-subforums]
    <div class="subforums">{sub_forums}</div>
[/has-subforums]

[has-desc]
    <div class="cat-desc">{cat_desc}</div>
[/has-desc]

[is-logged]
    <a href="/forum/new-topic/?cat_id={cat_id}" class="btn">New Topic</a>
[/is-logged]

[not-logged]
    <div class="alert">Please login to post</div>
[/not-logged]
```

---

# 📁 3. `topic.tpl` — Topic Page

Shows posts within a topic.
**Used in:** `actions/topic.php`

## 🧩 Main Tags

| Tag | Description |
|---|---|
| `{posts_list}` | Post list HTML |
| `{topic_title}` | Topic title |
| `{topic_description}` | Topic sub-description |
| `{topic_tags}` | Tags HTML |
| `{topic_id}` | Topic ID |
| `{pagination}` | Pagination |
| `{editor}` | WYSIWYG editor HTML (includes hidden inputs) |
| `{csrf_token}` | CSRF token value |
| `{editor_title}` | Editor section title ("Post Reply" / "Edit Message") |
| `{lang_send}` | Submit button text |
| `{reply_error}` | Error message text |
| `{breadcrumb}` | Breadcrumb HTML |
| `{SITEURL}` | Site URL |
| `{forum_js_vars}` | JS global variables |
| `{schema_jsonld}` | Schema.org DiscussionForumPosting JSON-LD script tag |
| `{lang_attach}` | "Add File" text |

## 🧩 Notification Tags

| Tag | Description |
|---|---|
| `{notif_count}` | Unread notification count |
| `{notif_url}` | Notifications page URL |
| `{notif_badge_display}` | Badge CSS display value: `inline-flex` or `none` |

## 🧩 Moderation and Action Tags

| Tag | Description |
|---|---|
| `{lang_follow}` | Follow text |
| `{lang_unfollow}` | Unfollow text |
| `{lang_bump}` | Bump text |
| `{lang_lock}` | Lock text |
| `{lang_unlock}` | Unlock text |
| `{lang_pin}` | Pin text |
| `{lang_unpin}` | Unpin text |
| `{lang_delete_topic}` | Delete Topic text |
| `{edit_topic_url}` | Topic edit page URL |

## 🔀 Conditional Blocks

```html
[is-logged]
    <div class="reply-form">{editor}</div>
[/is-logged]

[not-logged]
    <div class="login-warning">Please login to reply</div>
[/not-logged]

[is-following]
    <button class="unfollow-btn">{lang_unfollow}</button>
[/is-following]

[not-following]
    <button class="follow-btn">{lang_follow}</button>
[/not-following]

[is-locked]
    <div class="locked-warning">This topic is locked.</div>
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
        [is-pinned]<span class="pinned-badge">Pinned</span>[/is-pinned]
        [not-pinned]<span class="normal-badge">Normal</span>[/not-pinned]
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

# 📁 4. `blocks/post_row.tpl` — Post Row ⭐ CRITICAL

Repeated template for each message. Contains all user information, rank, and moderation tools.

## 👤 User Information

| Tag | Description | Example |
|---|---|---|
| `{post_id}` | Post ID (for anchors) | `42` |
| `{post_class}` | CSS class (`df-post-op` if OP) | `df-post-op` |
| `{post_num}` | Post sequence number | `3` |
| `{p_user}` | Username (HTML escaped) | `John_Doe` |
| `{p_user_js}` | Username (JS safe, single quote escaped) | `John_Doe` |
| `{p_avatar}` | Full avatar URL | `https://site.com/uploads/fotos/foto.png` |
| `{p_profile}` | Profile page URL | `https://site.com/user/John_Doe/` |
| `{p_date}` | Post date | `15.01.2025, 14:30` |
| `{p_text}` | Post content (BBCode parsed) | HTML |
| `{p_sig}` | Signature (BBCode parsed) | HTML |
| `{p_reg_date}` | Registration date | `01.06.2023` |
| `{p_id}` | Post ID (short, for JS actions) | `42` |
| `{edit_date}` | Last edit date | `15.01.2025, 15:00` |

## 📊 Statistics

| Tag | Description | Example |
|---|---|---|
| `{forum_post_count}` | Total posts (formatted) | `1,234` |
| `{forum_points}` | Points (formatted) | `550` |
| `{forum_rep}` | Rep / Total likes (formatted) | `42` |
| `{rep_percent}` | Rep percentage (for progress bars) | `45` |
| `{likes_count}` | Like count | `15` |
| `{dislikes_count}` | Dislike count | `2` |

## 🏅 Rank and Group Information (Group Priority System)

| Tag | Description | Example |
|---|---|---|
| `{rank_title}` | Rank title | `Administrator` |
| `{rank_icon}` | Rank icon (FA class OR image path) | `fa-crown` or `ranks/admin.gif` |
| `{rank_color}` | Rank color | `#ef4444` |
| `{group_name}` | DLE Group name | `Administrator` |
| `{group_color}` | DLE Group color | `#ef4444` |

## 🔘 Buttons and Links

| Tag | Description |
|---|---|
| `{edit_url}` | Message edit URL (topic edit if first post) |
| `{edit_topic_url}` | Topic edit URL |
| `{pm_url}` | Send PM URL |
| `{lang_edit}` | "Edit" text |
| `{lang_delete}` | "Delete" text |
| `{lang_quote}` | "Quote" text |
| `{lang_like}` | "Like" text |
| `{lang_dislike}` | "Dislike" text |
| `{lang_pm}` | "Send PM" text |
| `{lang_report}` | "Report" text |
| `{lang_edited}` | "Edited" text |
| `{lang_posts}` | "Posts" text |
| `{lang_points}` | "Points" text |
| `{lang_rep}` | "Rep" text |
| `{lang_attach}` | "Add File" text |

## 📎 Attachments

| Tag | Description |
|---|---|
| `{attachments_html}` | Full HTML output of attachments |

## 🔀 Conditional Blocks

### Online Status
```html
[online]
    <span class="online-badge">Online</span>
[/online]
[offline]
    <span class="offline-badge">Offline</span>
[/offline]
```

### 🏅 Rank Display (MyBB Style Image / Font Awesome Supported)
**Description:** With the group priority rank system, if you enter `fa-crown` for the Admin rank, the FA icon will be shown; if you enter `ranks/admin.gif`, the image icon will be shown automatically.

```html
[has-rank]
    <div class="user-rank">
        [is-img-rank]
            <!-- Image icon: if saved as ranks/admin.gif -->
            <img src="{SITEURL}templates/{skin}/{rank_icon}" alt="{rank_title}" class="df-rank-image">
        [/is-img-rank]

        [is-fa-rank]
            <!-- Font Awesome icon: if saved as fa-crown -->
            <span class="df-rank-badge" style="color:{rank_color}">
                <i class="fa {rank_icon}"></i> {rank_title}
            </span>
        [/is-fa-rank]
    </div>
[/has-rank]
```
> ⚠️ **Important:** `[is-img-rank]` and `[is-fa-rank]` blocks can **only** be used inside `[has-rank]`.

### Signature and Editing
```html
[has-sig]
    <div class="signature">{p_sig}</div>
[/has-sig]

[is-edited]
    <div class="edited-info">{lang_edited}: {edit_date}</div>
[/is-edited]
```

### Attachments
```html
[has-attachments]
    <div class="attachments">{attachments_html}</div>
[/has-attachments]
```

### Login and Permissions
```html
[is-logged]
    <button class="like-btn">{lang_like}</button>
    <button class="dislike-btn">{lang_dislike}</button>
[/is-logged]

[not-logged]
    <span class="text-muted">Login to rate</span>
[/not-logged]

[is-liked]
    <button class="like-btn active">Liked ({likes_count})</button>
[/is-liked]

[is-disliked]
    <button class="dislike-btn active">Disliked ({dislikes_count})</button>
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
    <span class="locked-label">Topic locked</span>
[/is-locked]

[not-locked]
    <!-- Normal message actions -->
[/not-locked]
```

### 🧩 Full `post_row.tpl` Example
```html
<article id="post-{post_id}" class="df-post {post_class}">
    <!-- Left Panel -->
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

    <!-- Right Panel -->
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

# 📁 5. `blocks/forum_row.tpl` — Forum Row

Category or sub-forum row.

## 🧩 Tags
| Tag | Description |
|---|---|
| `{forum_url}` | Forum URL |
| `{icon_class}` | Icon class (fa-folder, fa-comments etc.) |
| `{forum_name}` | Forum name |
| `{forum_desc}` | Description |
| `{sub_cats_html}` | Sub-categories HTML |
| `{topic_count}` | Topic count |
| `{post_count}` | Post count |
| `{last_url}` | Last post URL |
| `{last_user}` | Last post author |
| `{last_title}` | Last topic title |
| `{last_date}` | Last post date |
| `{last_avatar}` | Last post author avatar URL |

## 🔀 Conditional Blocks
```html
[has-last-post]
    <div class="last-post">
        <img src="{last_avatar}" class="micro-avatar">
        <a href="{last_url}">{last_title}</a>
        <span>{last_user} - {last_date}</span>
    </div>
[/has-last-post]

[no-last-post]
    <div class="no-posts">No posts yet</div>
[/no-last-post]

[has-subforums]
    <div class="subforums">{sub_cats_html}</div>
[/has-subforums]
```

---

# 📁 6. `blocks/topic_row.tpl` — Topic Row

Each row in the topic list.

## 🧩 Tags
| Tag | Description |
|---|---|
| `{topic_class}` | CSS class |
| `{t_url}` | Topic URL |
| `{t_title}` | Title |
| `{t_desc}` | Topic short description |
| `{t_user}` | Topic starter |
| `{t_date}` | Start date |
| `{t_replies}` | Reply count (formatted) |
| `{t_views}` | Views (formatted) |
| `{t_prefix}` | Prefix HTML (colored badge) |
| `{t_tags}` | Tags HTML |
| `{last_user}` | Last replier |
| `{last_date}` | Last reply date |
| `{last_avatar}` | Last replier avatar |
| `{last_url}` | Last post URL |

## 🔀 Conditional Blocks
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
    <span class="badge-pinned">📌 Pinned</span>
[/is-pinned]

[is-locked]
    <span class="badge-locked">🔒 Locked</span>
[/is-locked]

[is-normal]
    <span class="badge-normal">💬 Normal</span>
[/is-normal]

[has-desc]
    <div class="desc">{t_desc}</div>
[/has-desc]
```

---

# 📁 7. `blocks/cat_wrap.tpl` — Category Wrapper

Template that wraps main categories.

## 🧩 Tags
| Tag | Description |
|---|---|
| `{cat_name}` | Main category name |
| `{icon}` | Category icon (fa-folder etc.) |
| `{cat_forums}` | HTML list of sub-forums within |

---

# 📁 8. `new_topic.tpl` & `edit_topic.tpl` — Topic Forms

## 🧩 Tags
| Tag | Description |
|---|---|
| `{cat_name}` | Category name |
| `{cat_id}` | Category ID |
| `{prefix_select}` | Prefix select HTML |
| `{tags_input}` / `{tags_val}` | Tag input HTML / value |
| `{description_input}` / `{description_val}` / `{description_field}` | Description fields |
| `{editor}` | WYSIWYG editor HTML |
| `{title_val}` | Title value (restore after error) |
| `{csrf_token}` | CSRF token |
| `{error}` | Error message |
| `{breadcrumb}` | Breadcrumb |
| `{SITEURL}` | Site URL |
| `{forum_js_vars}` | JS variables |
| `{lang_attach}` | Add file text |
| `{pending_text}` | Approval pending message (new_topic only) |

## 🔀 Conditional Blocks
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

# 📁 9. `search.tpl` — Search Results

## 🧩 Tags
| Tag | Description |
|---|---|
| `{search_query}` | Search query |
| `{total_results}` | Number of results found |
| `{topics_list}` | Results HTML |
| `{pagination}` | Pagination |
| `{breadcrumb}` | Breadcrumb |
| `{SITEURL}` | Site URL |
| `{search_url}` | Search form action URL |
| `{filter_user}` | User filter input value |
| `{filter_cat_options}` | Category dropdown options HTML |
| `{filter_date_from}` | Start date value |
| `{filter_date_to}` | End date value |

---

# 📁 10. Notification and User Blocks

## `notifications.tpl`
| Tag | Description |
|---|---|
| `{notif_content}` | Notification list HTML |
| `{forum_url}` | Forum home page URL |
| `{breadcrumb}` | Breadcrumb |
| `{SITEURL}` | Site URL |

## `blocks/notif_row.tpl`
| Tag | Description |
|---|---|
| `{notif_url}` | Notification target URL |
| `{notif_icon}` | Notification type icon (`fa-reply`, `fa-thumbs-up`, `fa-at`) |
| `{notif_color}` | Notification type color |
| `{notif_from}` | Notification sender |
| `{notif_action}` | Notification action text ("replied to") |
| `{notif_topic}` | Related topic title |
| `{notif_date}` | Notification date |

```html
[has-link]
    <a href="{notif_url}" class="notif-row">...</a>
[/has-link]

[no-link]
    <div class="notif-row no-link">...</div>
[/no-link]
```

## `user_posts.tpl` & `blocks/user_post_row.tpl`
**Main Tags:** `{user_name}`, `{user_avatar}`, `{total_posts}`, `{posts_list}`, `{pagination}`, `{breadcrumb}`, `{SITEURL}`
**Row Tags:** `{post_url}`, `{post_title}`, `{cat_url}`, `{cat_name}`, `{post_date}`, `{post_preview}`

---

# 📁 11. Attachment Blocks

## `blocks/attachment_img.tpl`
| Tag | Description |
|---|---|
| `{att_url}` | Full image URL |
| `{att_name}` | Original file name |

## `blocks/attachment_file.tpl`
| Tag | Description |
|---|---|
| `{att_url}` | File download URL |
| `{att_name}` | Original file name |
| `{att_size}` | File size (KB) |

## `blocks/attachments_wrap.tpl`
| Tag | Description |
|---|---|
| `{att_label}` | "Attachments" text |
| `{att_count}` | Total attachment count |
| `{att_images}` | Image attachments HTML |
| `{att_files}` | File attachments HTML |

```html
[has-images]
    <div class="att-images">{att_images}</div>
[/has-images]

[has-files]
    <div class="att-files">{att_files}</div>
[/has-files]
```

---

# 📁 12. Tag and Filter Blocks

## Tag Cloud
**`blocks/tag_item.tpl`**: `{tag_url}`, `{tag_name}`
**`blocks/tag_cloud_item.tpl`**: `{tag_url}`, `{tag_name}`, `{tag_count}`, `{tag_size}`
**`blocks/tag_cloud_wrap.tpl`**: `{tag_cloud_items}`, `{empty_msg}`
```html
[has-tags] <div class="tag-cloud">{tag_cloud_items}</div> [/has-tags]
[no-tags] <div class="empty-tags">{empty_msg}</div> [/no-tags]
```

## Day Filter
**`blocks/day_filter.tpl`**: `{filter_url}`, `{filter_active}`, `{filter_text}`
**`blocks/day_filter_wrap.tpl`**: `{day_filter_items}`

## Empty Content
**`blocks/empty.tpl`**: `{empty_msg}`

---

# 📁 13. Other Templates

## `forum_block.tpl` — Sidebar Widget
| Tag | Description |
|---|---|
| `{title}` | Topic title |
| `{link}` | Topic URL |
| `{author}` | Author name |
| `{category}` | Category name |
| `{replies}` | Reply count |
| `{date}` | Date (formatted) |
| `{avatar}` | Avatar URL |

## `pm.tpl` — Private Message (Inactive)
> ⚠️ This template is not actively used as it redirects to the conversations system.

---

window.FORUM_TOPIC = "456";   // Only in topic.tpl
```

### 🛠 Frontend Functions (forum.js)

Core functions defined in `forum.js` and used in templates (`.tpl`):

| Function | Description | Usage Example |
|---|---|---|
| `forum.like(id, 'like')` | Like / Dislike message | `onclick="forum.like({post_id}, 'like')"` |
| `forum.quote(user, id)` | Quote message | `onclick="forum.quote('{p_user}', {post_id})"` |
| `forum.report(id)` | Report message | `onclick="forum.report({post_id})"` |
| `forum.deletePost(id)` | Delete message (confirmed) | `onclick="forum.deletePost({post_id})"` |
| `forum.bumpTopic(id)` | Bump topic to top | `onclick="forum.bumpTopic({topic_id})"` |
| `forum.toggleFollow(id)` | Toggle topic subscription | `onclick="forum.toggleFollow({topic_id})"` |
| `forum.markAllRead()` | Mark all notifications as read | `onclick="forum.markAllRead()"` |
| `forum.topicAction(act, id)`| Topic management (lock, pin) | `onclick="forum.topicAction('lock', {topic_id})"` |

---

# 🏅 Group Priority Rank System — TPL Integration

Ranks assigned according to the `for_group` value in the admin panel (Ex: Group 1=Administrator, Group 3=Moderator, Group 5=VIP) and their icons are automatically supported.

**Usage Flow:**
1. If you enter `fa-crown` as the rank icon in the admin panel → `[is-fa-rank]` block works.
2. If you enter `ranks/admin.gif` as the rank icon in the admin panel → `[is-img-rank]` block works.
3. If the user is an Admin (Group 1) and has 0 points, the group-based "Administrator" rank will fall into the `[has-rank]` block instead of the point-based "New Member".

```html
<!-- Rank Usage Inside Post Row -->
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

# ✅ Documentation Release Notes

This documentation covers all changes:
- Support for group-based rank system (`for_group`).
- MyBB style image icon (`[is-img-rank]` / `[is-fa-rank]`) support.
- Online/offline (`[online]`/`[offline]`) blocks.
- Advanced search filter tags.
- Schema.org SEO tag (`{schema_jsonld}`).
- All missing JS and moderation tags added.
- `{t_desc}` and `[has-desc]` support expanded to all list pages (category etc.).
- All frontend logic consolidated under `forum.js`.
