<div class="df-user-post-card df-card" style="margin-bottom: 20px; transition: all 0.3s ease; border: 1px solid rgba(0,0,0,0.05); border-radius: 16px; overflow: hidden; background: var(--df-bg-card);">
    <div class="df-card-body" style="padding: 20px;">
        <div class="df-user-post-meta" style="display: flex; align-items: center; gap: 15px; margin-bottom: 12px; font-size: 13px;">
            <span class="df-user-post-cat" style="background: var(--df-bg-body); padding: 4px 10px; border-radius: 6px; color: var(--df-accent); font-weight: 600;">
                <i class="fa fa-folder-open-o" style="margin-right: 5px;"></i> <a href="{cat_url}" style="color: inherit; text-decoration: none;">{cat_name}</a>
            </span>
            <span class="df-user-post-date" style="color: var(--df-text-muted);">
                <i class="fa fa-calendar-o" style="margin-right: 5px;"></i> {post_date}
            </span>
        </div>
        
        <h3 class="df-user-post-title" style="margin: 0 0 10px 0; font-size: 18px; line-height: 1.4;">
            <a href="{post_url}" style="color: var(--df-text-main); text-decoration: none; font-weight: 700; transition: color 0.2s;">{post_title}</a>
        </h3>
        
        <div class="df-user-post-preview" style="color: var(--df-text-muted); font-size: 15px; line-height: 1.6; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; position: relative; padding-left: 15px; border-left: 3px solid rgba(var(--df-accent-rgb), 0.2);">
            {post_preview}
        </div>
        
        <div style="margin-top: 15px; display: flex; justify-content: flex-end;">
            <a href="{post_url}" style="font-size: 13px; font-weight: 600; color: var(--df-accent); text-decoration: none; display: flex; align-items: center; gap: 5px;">
                Mesajı Görüntüle <i class="fa fa-long-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
