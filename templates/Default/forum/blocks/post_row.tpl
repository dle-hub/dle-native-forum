<div class="df-post-row {post_class}" id="post-{post_id}">
  <div class="df-post-sidebar">
    <div class="df-post-author">
      <div class="df-post-avatar">{p_avatar}</div>
      <div class="df-post-username">
        <a href="{p_profile}" class="df-username">{p_user}</a>
      </div>
      <div class="df-post-group" style="color:{group_color}">{group_name}</div>
      [has-rank]
      <div class="df-post-rank">
        [is-img-rank]
        <img src="{THEME}/forum/ranks/{rank_icon}" alt="{rank_title}" class="df-rank-img">
        [/is-img-rank]
        [is-fa-rank]
        <i class="fa {rank_icon}" style="color:{rank_color}"></i> <span style="color:{rank_color}">{rank_title}</span>
        [/is-fa-rank]
      </div>
      [/has-rank]
      <div class="df-post-stats">
        <div class="df-stat-line">
          <i class="fa fa-comments"></i> {lang_posts}: {forum_post_count}
        </div>
        <div class="df-stat-line">
          <i class="fa fa-star"></i> {lang_points}: {forum_points}
        </div>
        <div class="df-stat-line">
          <i class="fa fa-heart"></i> {lang_rep}: {forum_rep} <span class="df-rep-bar"><span class="df-rep-fill" style="width:{rep_percent}%"></span></span>
        </div>
      </div>
    </div>
  </div>
  <div class="df-post-content">
    <div class="df-post-header">
      <span class="df-post-date">{p_date}</span>
      <span class="df-post-num">#{post_num}</span>
      <div class="df-post-actions">
        [is-logged]
        [not-self]
        <a href="{pm_url}" class="df-btn df-btn-sm" title="{lang_pm}"><i class="fa fa-envelope"></i></a>
        [/not-self]
        <a href="#" class="df-btn df-btn-sm df-quote-btn" data-post="{post_id}" title="{lang_quote}"><i class="fa fa-quote-right"></i></a>
        <a href="#" class="df-btn df-btn-sm df-like-btn" data-post="{post_id}" title="{lang_like}"><i class="fa fa-thumbs-up"></i> <span class="df-like-count">{likes_count}</span></a>
        <a href="#" class="df-btn df-btn-sm df-dislike-btn" data-post="{post_id}" title="{lang_dislike}"><i class="fa fa-thumbs-down"></i> <span class="df-dislike-count">{dislikes_count}</span></a>
        [can-edit]<a href="{edit_url}" class="df-btn df-btn-sm" title="{lang_edit}"><i class="fa fa-pencil"></i></a>[/can-edit]
        [can-delete]<a href="#" class="df-btn df-btn-sm df-delete-btn" data-post="{post_id}" title="{lang_delete}"><i class="fa fa-trash"></i></a>[/can-delete]
        [/is-logged]
      </div>
    </div>
    <div class="df-post-text">
      {p_text}
    </div>
    [is-edited]
    <div class="df-post-edited">
      <i class="fa fa-pencil-square-o"></i> {lang_edited}: {edit_date}
    </div>
    [/is-edited]
    [has-attachments]
    <div class="df-post-attachments">
      {attachments_html}
    </div>
    [/has-attachments]
    [has-sig]
    <div class="df-post-signature">
      {p_sig}
    </div>
    [/has-sig]
  </div>
</div>
