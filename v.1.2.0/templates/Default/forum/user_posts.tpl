<div class="df-container">
    <div class="df-header">
        {breadcrumb}
    </div>

    <div class="df-user-posts-header df-card" style="margin-bottom: 24px;">
        <div class="df-card-body" style="display: flex; align-items: center; gap: 20px;">
            <div class="df-user-avatar">
                <img src="{user_avatar}" alt="{user_name}" style="width: 64px; height: 64px; border-radius: 50%; border: 3px solid var(--df-accent);">
            </div>
            <div class="df-user-info">
                <h1 style="margin: 0; font-size: 24px; color: var(--df-text-main);">
                    {user_name}
                </h1>
                <p style="color: var(--df-text-muted); margin-top: 4px; font-size: 15px;">
                    Toplam <strong>{total_posts}</strong> forum mesajı bulundu.
                </p>
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
