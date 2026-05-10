<div class="df-row df-topic-row {topic_class}">
    <div class="df-col-icon">
        <div class="df-forum-icon [is-pinned]df-icon-pinned[/is-pinned] [is-locked]df-icon-locked[/is-locked]">
            [is-pinned]<i class="fa fa-thumb-tack"></i>[/is-pinned]
            [is-locked]<i class="fa fa-lock"></i>[/is-locked]
            [is-normal]<i class="fa fa-commenting-o"></i>[/is-normal]
        </div>
    </div>

    <div class="df-col-main">
        <div class="df-row-title-wrap">
            {t_prefix}
            <a href="{t_url}" class="df-row-title">{t_title}</a>
        </div>
        [has-desc]
        <div class="df-row-desc" style="font-size: 13px; color: var(--df-text-muted); margin-top: 4px; line-height: 1.4;">
            {t_desc}
        </div>
        [/has-desc]
        <div class="df-row-meta">
            Açan: <b style="color: var(--df-accent);">{t_user}</b> · {t_date}
            [has-tags]<span class="df-row-tags" style="margin-left: 10px; font-size: 11px; opacity: 0.8;"><i class="fa fa-tags"></i> {t_tags}</span>[/has-tags]
        </div>
    </div>

    <div class="df-col-stats">
        <div class="df-stats-inner">
            <div class="df-stat-count" title="Cevaplar">
                <strong>{t_replies}</strong>
                <span>Cevap</span>
            </div>
            <div class="df-stat-count" title="Görüntülenme">
                <strong>{t_views}</strong>
                <span>İzlenme</span>
            </div>
        </div>
    </div>

    <div class="df-col-last">
        [has-last-post]
        <div class="df-last-post-box">
            <img src="{last_avatar}" class="df-last-avatar" alt="avatar">
            <div class="df-last-post-info">
                <span class="df-last-post-user"><b>{last_user}</b></span>
                <a href="{last_url}" class="df-last-post-meta">{last_date}</a>
            </div>
        </div>
        [/has-last-post]
    </div>
</div>
