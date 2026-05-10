<link rel="stylesheet" href="{THEME}/forum/forum.css?v=7">

<div class="df-page-wrap">

    <nav class="df-breadcrumb">
        <a href="{SITEURL}" class="df-breadcrumb-link">Ana Sayfa</a>
        <i class="fa fa-chevron-right df-breadcrumb-sep"></i>
        <a href="{SITEURL}index.php?do=forum" class="df-breadcrumb-link">Forum</a>
        <i class="fa fa-chevron-right df-breadcrumb-sep"></i>
        <span class="df-breadcrumb-current">{topic_title}</span>
    </nav>

    <div class="df-topic-bar">
        <div class="df-topic-info">
            <span class="df-topic-label">KONU:</span>
            <h1 class="df-topic-title">{topic_title}</h1>
        </div>
        <div class="df-topic-actions">
            [can-bump]
            <form method="post" style="display:inline">
                <input type="hidden" name="user_hash" value="{csrf_token}">
                <button type="submit" name="bump_topic" class="df-btn-back" style="padding: 8px 16px; font-size: 11px;">
                    <i class="fa fa-arrow-up"></i> {lang_bump}
                </button>
            </form>
            [/can-bump]

            [is-logged]
            [is-following]
            <form method="post" style="display:inline">
                <input type="hidden" name="user_hash" value="{csrf_token}">
                <button type="submit" name="follow_topic" class="df-btn-back df-following" style="padding: 8px 16px; font-size: 11px;">
                    <i class="fa fa-bell-slash"></i> {lang_unfollow}
                </button>
            </form>
            [/is-following]
            [not-following]
            <form method="post" style="display:inline">
                <input type="hidden" name="user_hash" value="{csrf_token}">
                <button type="submit" name="follow_topic" class="df-btn-back" style="padding: 8px 16px; font-size: 11px;">
                    <i class="fa fa-bell"></i> {lang_follow}
                </button>
            </form>
            [/not-following]

            <a href="{notif_url}" class="df-btn-back" style="padding: 8px 12px; font-size: 11px; position: relative;">
                <i class="fa fa-bell"></i>
                <span class="df-notif-badge" style="display:{notif_badge_display};">{notif_count}</span>
            </a>
            [/is-logged]

            <a href="#reply" class="df-btn-submit df-reply-toggle" style="padding: 8px 16px; font-size: 11px;">
                <i class="fa fa-reply"></i> Cevap Yaz
            </a>
        </div>
    </div>

    [can-moderate]
    <div class="df-admin-toolbar" style="display:flex; gap:8px; padding:8px 0; flex-wrap:wrap;">
        [is-pinned]
        <form method="post" style="display:inline">
            <input type="hidden" name="user_hash" value="{csrf_token}">
            <button type="submit" name="pin_topic" class="df-btn-back" style="font-size:10px; padding:4px 10px;">
                <i class="fa fa-thumb-tack"></i> {lang_unpin}
            </button>
        </form>
        [/is-pinned]
        [not-pinned]
        <form method="post" style="display:inline">
            <input type="hidden" name="user_hash" value="{csrf_token}">
            <button type="submit" name="pin_topic" class="df-btn-back" style="font-size:10px; padding:4px 10px;">
                <i class="fa fa-thumb-tack"></i> {lang_pin}
            </button>
        </form>
        [/not-pinned]

        [is-locked]
        <form method="post" style="display:inline">
            <input type="hidden" name="user_hash" value="{csrf_token}">
            <button type="submit" name="lock_topic" class="df-btn-back" style="font-size:10px; padding:4px 10px;">
                <i class="fa fa-unlock"></i> {lang_unlock}
            </button>
        </form>
        [/is-locked]
        [not-locked]
        <form method="post" style="display:inline">
            <input type="hidden" name="user_hash" value="{csrf_token}">
            <button type="submit" name="lock_topic" class="df-btn-back" style="font-size:10px; padding:4px 10px;">
                <i class="fa fa-lock"></i> {lang_lock}
            </button>
        </form>
        [/not-locked]

        <form method="post" style="display:inline" onsubmit="return confirm('Bu konuyu silmek istediğinize emin misiniz?');">
            <input type="hidden" name="user_hash" value="{csrf_token}">
            <button type="submit" name="delete_topic" class="df-btn-back" style="font-size:10px; padding:4px 10px; color:#ef4444; border-color:#ef4444;">
                <i class="fa fa-trash"></i> {lang_delete_topic}
            </button>
        </form>
    </div>
    [/can-moderate]

    [is-locked]
    <div class="df-alert" style="border-color:#f59e0b; background:#fffbeb; padding:10px 16px; margin-bottom:16px; display:flex; align-items:center; gap:8px;">
        <i class="fa fa-lock" style="color:#f59e0b; font-size:16px;"></i>
        <span>Bu konu kilitlenmiş. Yeni cevap yazılamaz.</span>
    </div>
    [/is-locked]

    <div class="df-posts-list">
        {posts_list}
    </div>

    <div class="df-pagination-wrap">
        {pagination}
    </div>

    <div id="reply" class="df-card" style="margin-top: 20px;">
        <div class="df-card-header">
            <h3 class="df-card-title"><i class="fa fa-pencil"></i> {editor_title}</h3>
        </div>
        <div class="df-card-body">

            [logged]
            [has-error]
            <div class="df-alert df-alert-error" style="border-color:#ef4444; background:#fef2f2; padding:10px 16px; margin-bottom:12px;">
                <i class="fa fa-exclamation-circle"></i> {reply_error}
            </div>
            [/has-error]

            <form method="post" name="dle-comments-form" id="dle-comments-form" class="df-form-layout" enctype="multipart/form-data">

                <input type="hidden" name="csrf_token" value="{csrf_token}">
                <div class="df-form-group">
                    <label class="df-form-label">Mesajınız</label>
                    <div class="df-editor-box">
                        {editor}
                    </div>
                </div>

                [allow-upload]
                <div class="df-form-group">
                    <label class="df-form-label">{lang_attach}</label>
                    <input type="file" name="forum_file[]" multiple class="df-input">
                </div>
                [/allow-upload]

                <div class="df-form-actions">
                    <div></div>
                    <button type="submit" name="submit_reply" class="df-btn-submit">
                        <i class="fa fa-paper-plane"></i> {lang_send}
                    </button>
                </div>
            </form>
            [/logged]

            [not-logged]
            <div class="df-alert" style="border-color: #cbd5e1; background: #f8fafc; padding: 20px; text-align: center;">
                Cevap yazmak için lütfen <a href="{SITEURL}index.php?do=login" style="color:var(--df-accent); font-weight:700;">giriş yapın</a> veya üye olun.
            </div>
            [/not-logged]

        </div>
    </div>

</div>
{forum_js_vars}
