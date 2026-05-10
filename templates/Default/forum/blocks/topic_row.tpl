<div class="df-topic-row {topic_class}">
  <div class="df-topic-icon">
    [is-pinned]<i class="fa fa-thumb-tack"></i>[/is-pinned]
    [is-locked]<i class="fa fa-lock"></i>[/is-locked]
    [is-normal]<i class="fa fa-comment"></i>[/is-normal]
    [is-unread]<i class="fa fa-commenting"></i>[/is-unread]
  </div>
  <div class="df-topic-main">
    <div class="df-topic-title">
      <a href="{t_url}">{t_prefix} {t_title}</a>
    </div>
    [has-desc]<div class="df-topic-desc">{t_desc}</div>[/has-desc]
    [has-tags]<div class="df-topic-tags">{t_tags}</div>[/has-tags]
    <div class="df-topic-meta">
      <span class="df-topic-author">{t_user}</span>
      <span class="df-topic-date">{t_date}</span>
    </div>
  </div>
  <div class="df-topic-stats">
    <div class="df-stat-item">
      <span class="df-stat-count">{t_replies}</span>
      <span class="df-stat-label">{lang_reply}</span>
    </div>
    <div class="df-stat-item">
      <span class="df-stat-count">{t_views}</span>
      <span class="df-stat-label">{lang_views}</span>
    </div>
  </div>
  <div class="df-topic-last">
    [has-last-post]
    <div class="df-last-post">
      <span class="df-last-user">{last_user}</span>
      <span class="df-last-date">{last_date}</span>
    </div>
    [/has-last-post]
    [no-last-post]
    <span class="df-no-posts">-</span>
    [/no-last-post]
  </div>
</div>
