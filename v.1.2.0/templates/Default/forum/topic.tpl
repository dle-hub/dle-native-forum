<div class="df-container">
    <div class="df-header">
        {breadcrumb}
    </div>

    <div class="df-topic-header-card df-card">
        <div class="df-card-body" style="display: flex; justify-content: space-between; align-items: flex-start; gap: 20px; flex-wrap: wrap;">
            <div class="df-topic-info">
                <div class="df-topic-title-wrapper">
                    <h1 class="df-topic-title">{topic_title}</h1>
                    [is-pinned]<span class="df-topic-status-badge df-status-pinned" title="Sabitlenmiş Konu"><i class="fa fa-thumb-tack"></i> Sabit</span>[/is-pinned]
                    [is-locked]<span class="df-topic-status-badge df-status-locked" title="Kilitlenmiş Konu"><i class="fa fa-lock"></i> Kilitli</span>[/is-locked]
                </div>
                [has-desc]
                <p class="df-topic-desc">{topic_description}</p>
                [/has-desc]
                [has-tags]
                <div class="df-topic-tags" style="margin-top: 15px; display: flex; flex-wrap: wrap; gap: 8px;">
                    {topic_tags}
                </div>
                [/has-tags]
            </div>

            <div class="df-topic-actions">
                [is-logged]
                <div style="display: flex; gap: 10px; align-items: center;">
                    <!-- Bildirim Zili -->
                    <a href="{notif_url}" class="df-btn df-btn-outline" title="Bildirimler" style="padding: 10px 14px; position: relative;">
                        <i class="fa fa-bell-o"></i>
                        <span class="df-notif-badge" style="display: {notif_badge_display};">{notif_count}</span>
                    </a>

                    <button onclick="forum.toggleFollow({topic_id})" class="df-btn df-btn-outline df-btn-follow [is-following]active[/is-following]">
                        <i class="fa [is-following]fa-bell[/is-following][not-following]fa-bell-o[/not-following]"></i>
                        <span>[is-following]{lang_unfollow}[/is-following][not-following]{lang_follow}[/not-following]</span>
                    </button>

                    [can-bump]
                    <button onclick="forum.bumpTopic({topic_id})" class="df-btn" style="background: var(--df-orange); color: #fff;">
                        <i class="fa fa-arrow-up"></i> <span>{lang_bump}</span>
                    </button>
                    [/can-bump]

                    [can-moderate]
                    <div class="df-dropdown-wrap">
                        <button class="df-btn df-btn-outline df-dropdown-trigger">
                            <i class="fa fa-shield"></i> <span>Yönetim</span>
                        </button>

                        <div class="df-dropdown-menu">
                            <a href="{edit_topic_url}" class="df-dropdown-item">
                                <i class="fa fa-pencil"></i> Konuyu Düzenle
                            </a>

                            <div class="df-dropdown-divider"></div>

                            <a href="javascript:void(0)" onclick="forum.topicAction('lock', {topic_id})" class="df-dropdown-item">
                                [is-locked]<i class="fa fa-unlock"></i> {lang_unlock}[/is-locked]
                                [not-locked]<i class="fa fa-lock"></i> {lang_lock}[/not-locked]
                            </a>

                            <a href="javascript:void(0)" onclick="forum.topicAction('pin', {topic_id})" class="df-dropdown-item">
                                [is-pinned]<i class="fa fa-thumb-tack"></i> {lang_unpin}[/is-pinned]
                                [not-pinned]<i class="fa fa-thumb-tack"></i> {lang_pin}[/not-pinned]
                            </a>

                            <div class="df-dropdown-divider"></div>

                            <a href="javascript:void(0)" onclick="forum.topicAction('delete', {topic_id})" class="df-dropdown-item df-text-danger">
                                <i class="fa fa-trash"></i> {lang_delete_topic}
                            </a>
                        </div>
                    </div>
                    [/can-moderate]
                </div>
                [/is-logged]
            </div>
        </div>
    </div>

    <div class="df-posts-list">
        {posts_list}
    </div>

    <div class="df-pagination-wrapper" style="margin: 24px 0;">
        {pagination}
    </div>

    <div class="df-reply-section df-card" id="reply">
        <div class="df-card-header">
            <h3 class="df-card-title"><i class="fa fa-pencil"></i> {editor_title}</h3>
        </div>
        <div class="df-card-body">
            [has-error]
            <div class="df-alert df-alert-error" style="margin-bottom: 16px;">
                <i class="fa fa-exclamation-circle"></i> {reply_error}
            </div>
            [/has-error]

            <form method="post" action="" enctype="multipart/form-data" class="df-form-layout">
                <input type="hidden" name="csrf_token" value="{csrf_token}">
                <input type="hidden" name="submit_reply" value="1">

                <div class="df-editor-box">
                    {editor}
                </div>

                [allow-upload]
                <div class="df-upload-zone" style="margin-top: 16px;">
                    <label class="df-form-label"><i class="fa fa-paperclip"></i> {lang_attach}</label>
                    <div class="df-custom-upload">
                        <input type="file" name="forum_file[]" multiple id="forum_file_input">
                        <div class="df-upload-hint">Dosyaları buraya bırakın veya seçmek için tıklayın</div>
                    </div>
                </div>
                [/allow-upload]

                <div class="df-form-actions" style="margin-top: 20px; display: flex; justify-content: flex-end;">
                    <button type="submit" class="df-btn df-btn-submit df-btn-lg">
                        <i class="fa fa-paper-plane"></i> {lang_send}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{forum_js_vars}

<script>var text_upload = "Dosya Yükle";</script>

{schema_jsonld}
<script src="{THEME}/forum/js/forum.js"></script>
