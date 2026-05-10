<div class="df-row">
    <div class="df-col-icon">
        <div class="df-forum-icon">
            <i class="fa {icon_class}"></i>
        </div>
    </div>
    
    <div class="df-col-main">
        <div class="df-row-content">
            <a href="{forum_url}" class="df-row-title">{forum_name}</a>
            <div class="df-row-desc">{forum_desc}</div>
            [has-subforums]
            <div class="df-subcats-list">
                <span class="df-subcats-label">Alt Forumlar:</span>
                {sub_cats_html}
            </div>
            [/has-subforums]
        </div>
    </div>

    <div class="df-col-stats">
        <div class="df-stats-inner">
            <div class="df-stat-count">
                <strong>{topic_count}</strong>
                <span>Konu</span>
            </div>
            <div class="df-stat-count">
                <strong>{post_count}</strong>
                <span>Mesaj</span>
            </div>
        </div>
    </div>

    <div class="df-col-last">
        [has-last-post]
        <div class="df-last-post-box">
            <img src="{last_avatar}" class="df-last-avatar" alt="{last_user}">
            <div class="df-last-post-info">
                <a href="{last_url}" class="df-last-post-title" title="{last_title}">{last_title}</a>
                <div class="df-last-post-meta">
                    <span class="df-last-post-user">{last_user}</span>
                    <span class="df-last-post-date">{last_date}</span>
                </div>
            </div>
        </div>
        [/has-last-post]
        [no-last-post]
        <div class="df-no-last-post">
            <i class="fa fa-commenting-o"></i>
            <span>Henüz mesaj yok</span>
        </div>
        [/no-last-post]
    </div>
</div>
