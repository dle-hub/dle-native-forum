<link rel="stylesheet" href="{THEME}/forum/forum.css?v=8">

<div class="df-page-wrap">
    {breadcrumb}

    <div class="df-card">
        <div class="df-card-header" style="display: flex; align-items: center; gap: 15px;">
            <img src="{user_avatar}" style="width: 45px; height: 45px; border-radius: 50%; object-fit: cover; border: 2px solid var(--df-border);">
            
            <div style="flex: 1;">
                <h1 class="df-card-title" style="margin: 0; display: flex; align-items: center; gap: 8px;">
                    {user_name} 
                    <span style="background: var(--df-accent); color: #fff; padding: 2px 8px; border-radius: 12px; font-size: 11px;">
                        {total_posts} Mesaj
                    </span>
                </h1>
                <div style="font-size: 12px; color: var(--df-text-muted); margin-top: 3px;">
                    Kullanıcının forumdaki tüm etkileşimleri
                </div>
            </div>

            <div class="df-header-actions">
                <a href="{SITEURL}forum/" class="df-btn-back">
                    <i class="fa fa-arrow-left"></i> Foruma Dön
                </a>
            </div>
        </div>

        <div class="df-card-body" style="padding: 15px; background: #f8fafc;">
            {posts_list}
        </div>
    </div>

    <div style="margin-top: 15px;">
        {pagination}
    </div>
</div>