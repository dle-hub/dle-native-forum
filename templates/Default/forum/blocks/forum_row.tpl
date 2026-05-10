<div class="df-forum-row {icon_class}">
  <div class="df-forum-row-main">
    <div class="df-forum-icon">
      <i class="fa {icon_class}"></i>
    </div>
    <div class="df-forum-info">
      <h4 class="df-forum-name">
        <a href="{forum_url}">{forum_name}</a>
      </h4>
      <div class="df-forum-desc">{forum_desc}</div>
      [has-subforums]<div class="df-forum-subcats"><i class="fa fa-folder-open"></i> {sub_cats_html}</div>[/has-subforums]
    </div>
  </div>
  <div class="df-forum-stats">
    <div class="df-stat-item">
      <span class="df-stat-count">{topic_count}</span>
      <span class="df-stat-label">{lang_topic}</span>
    </div>
    <div class="df-stat-item">
      <span class="df-stat-count">{post_count}</span>
      <span class="df-stat-label">{lang_post}</span>
    </div>
  </div>
  <div class="df-forum-last">
    [has-last-post]
    <div class="df-last-post">
      <a href="{last_url}" class="df-last-title">{last_title}</a>
      <div class="df-last-meta">
        <span class="df-last-author">{lang_post} {last_user}</span>
        <span class="df-last-date">{last_date}</span>
      </div>
    </div>
    [/has-last-post]
    [no-last-post]
    <div class="df-no-posts">{lang_no_posts}</div>
    [/no-last-post]
  </div>
</div>
