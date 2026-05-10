<div class="df-container">
    <div class="df-header">
        {breadcrumb}
    </div>

    <div class="df-card">
        <div class="df-card-header">
            <h1 class="df-card-title">
                <i class="fa fa-bell-o"></i> Bildirimler
            </h1>
            <div class="df-header-actions">
                <a href="javascript:void(0)" onclick="forum.markAllRead()" class="df-btn df-btn-sm" style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.2);">
                    <i class="fa fa-check-all"></i> Tümünü Okundu İşaretle
                </a>
            </div>
        </div>

        <div class="df-card-body" style="padding: 0;">
            <div class="df-notif-list">
                {notif_content}
            </div>
        </div>
    </div>
</div>
{forum_js_vars}
<script src="{THEME}/forum/js/forum.js"></script>