<div class="df-row df-notif-row" style="grid-template-columns: 50px 1fr auto; padding: 15px 24px; border-bottom: 1px solid var(--df-border); align-items: center;">
    <div class="df-col-icon">
        <div class="df-forum-icon" style="width: 38px; height: 38px; background: #eff6ff; color: var(--df-accent); font-size: 16px;">
            <i class="fa {notif_icon}"></i>
        </div>
    </div>
    <div class="df-col-main" style="padding-left: 15px;">
        <div style="font-size: 14px; color: var(--df-text-main);">
            <b style="color: var(--df-navy);">{notif_from}</b> {notif_action} 
            [has-link]
            <a href="{notif_url}" style="font-weight: 700; color: var(--df-accent);">{notif_topic}</a>
            [/has-link]
            [no-link]
            <b style="color: var(--df-navy);">{notif_topic}</b>
            [/no-link]
        </div>
    </div>
    <div class="df-col-date" style="font-size: 12px; color: var(--df-text-muted);">
        {notif_date}
    </div>
</div>
