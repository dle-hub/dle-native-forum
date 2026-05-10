<div class="df-post {post_class}" id="post-{post_id}">
    <div class="df-post-user">
        <div class="df-user-panel">
            <div class="df-avatar-box">
                <img src="{p_avatar}" alt="{p_user}" class="df-avatar">
                [online]<span class="df-online-status is-online" title="Çevrimiçi"></span>[/online]
                [offline]<span class="df-online-status is-offline" title="Çevrimdışı"></span>[/offline]
            </div>

            <a href="{p_profile}" class="df-post-username" style="color: {group_color};">{p_user}</a>

            <div class="df-user-badge" style="background: {group_color}; margin-bottom: 12px;">
                {group_name}
            </div>

            [has-rank]
            <div class="df-user-rank" style="margin-bottom: 15px;">
                [is-fa-rank]<span style="color:{rank_color}; font-size: 14px;"><i class="fa {rank_icon}"></i> {rank_title}</span>[/is-fa-rank]
                [is-img-rank]<img src="{THEME}/forum/ranks/{rank_icon}" alt="{rank_title}" style="max-width: 100%;">[/is-img-rank]
                <div class="df-rank-text" style="margin-top: 5px; font-size: 11px;">{rank_title}</div>
            </div>
            [/has-rank]

            <div class="df-user-meta-list" style="border-top: 1px dashed var(--df-border); padding-top: 15px;">
                <div class="df-meta-item">
                    <i class="fa fa-comments-o" style="color: var(--df-accent);"></i>
                    <span class="df-meta-label">{lang_posts}:</span>
                    <span class="df-meta-val">{forum_post_count}</span>
                </div>
                <div class="df-meta-item">
                    <i class="fa fa-diamond" style="color: var(--df-warning);"></i>
                    <span class="df-meta-label">{lang_points}:</span>
                    <span class="df-meta-val">{forum_points}</span>
                </div>
                <div class="df-meta-item">
                    <i class="fa fa-calendar" style="color: var(--df-text-muted);"></i>
                    <span class="df-meta-label">Kayıt:</span>
                    <span class="df-meta-val">{p_reg_date}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="df-post-main">
        <div class="df-post-header">
            <div class="df-post-date">
                <i class="fa fa-clock-o"></i> {p_date}
            </div>
            <div class="df-post-number">
                #{post_num}
            </div>
        </div>

        <div class="df-post-content">
            {p_text}
        </div>

        {attachments_html}

        [has-sig]
        <div class="df-post-signature">
            {p_sig}
        </div>
        [/has-sig]

        <div class="df-post-footer">
            <div class="df-post-reactions">
                [is-logged]
                <button onclick="forum.like({post_id}, 'like')" class="df-react-btn df-react-like [is-liked]active[/is-liked]" title="Beğen">
                    <i class="fa fa-thumbs-up"></i> <span id="likes-{post_id}">{likes_count}</span>
                </button>
                <button onclick="forum.like({post_id}, 'dislike')" class="df-react-btn df-react-dislike [is-disliked]active[/is-disliked]" title="Beğenme">
                    <i class="fa fa-thumbs-down"></i> <span id="dislikes-{post_id}">{dislikes_count}</span>
                </button>
                [/is-logged]
            </div>

            <div class="df-post-actions">
                [is-logged]
                <button onclick="forum.quote('{p_user_js}', {post_id})" class="df-btn df-btn-sm df-btn-outline">
                    <i class="fa fa-quote-left"></i> {lang_quote}
                </button>
                [can-edit]
                <a href="{edit_url}" class="df-btn df-btn-sm df-btn-outline">
                    <i class="fa fa-pencil"></i> {lang_edit}
                </a>
                [/can-edit]
                [can-delete]
                <button onclick="forum.deletePost({post_id})" class="df-btn df-btn-sm df-btn-danger">
                    <i class="fa fa-trash"></i>
                </button>
                [/can-delete]
                [/is-logged]
                <button onclick="forum.report('{post_id}')" class="df-btn df-btn-sm df-btn-outline" title="{lang_report}">
                    <i class="fa fa-flag"></i>
                </button>
            </div>
        </div>
    </div>
</div>
