<div class="df-container">
    <div class="df-header">
        {breadcrumb}
    </div>

    <div class="df-user-profile-header df-card" style="margin-bottom: 30px; overflow: hidden; position: relative; border: none; background: linear-gradient(135deg, var(--df-bg-card) 0%, var(--df-bg-body) 100%); box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
        <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: var(--df-accent); opacity: 0.03; border-radius: 50%;"></div>
        
        <div class="df-card-body" style="padding: 30px; display: flex; align-items: center; gap: 25px; position: relative; z-index: 1;">
            <div class="df-user-avatar-wrapper" style="position: relative;">
                <img src="{user_avatar}" alt="{user_name}" style="width: 80px; height: 80px; border-radius: 22px; object-fit: cover; box-shadow: 0 8px 20px rgba(0,0,0,0.1); border: 2px solid #fff;">
                <div style="position: absolute; bottom: -5px; right: -5px; width: 20px; height: 20px; background: #2ecc71; border-radius: 50%; border: 3px solid var(--df-bg-card);" title="Online"></div>
            </div>
            <div class="df-user-details">
                <h1 style="margin: 0; font-size: 28px; font-weight: 800; color: var(--df-text-main); letter-spacing: -0.5px;">
                    {user_name}
                </h1>
                <div style="display: flex; align-items: center; gap: 10px; margin-top: 6px;">
                    <span style="background: rgba(var(--df-accent-rgb), 0.1); color: var(--df-accent); padding: 4px 12px; border-radius: 100px; font-size: 13px; font-weight: 600;">
                        {total_posts} Mesaj
                    </span>
                    <span style="color: var(--df-text-muted); font-size: 14px;">
                        Kullanıcının forumdaki son aktiviteleri
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="df-posts-list">
        {posts_list}
    </div>

    <div class="df-pagination-wrapper" style="margin-top: 24px;">
        {pagination}
    </div>
</div>

{forum_js_vars}
<script src="{THEME}/forum/js/forum.js"></script>
