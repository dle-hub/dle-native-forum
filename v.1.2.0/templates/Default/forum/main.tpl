<div class="df-container">
    <div class="df-header">
        {breadcrumb}
    </div>

    {include file="forum/search_form.tpl"}

    <div class="df-cats-wrapper">
        {forum_cats}
    </div>

    <div class="df-footer-counters" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px; margin-top: 30px;">
        <div class="df-counter-card">
            <div class="df-counter-info"><span>MESAJ</span> <strong>{total_posts}</strong></div>
            <i class="fa fa-comments"></i>
        </div>
        <div class="df-counter-card">
            <div class="df-counter-info"><span>KONU</span> <strong>{total_topics}</strong></div>
            <i class="fa fa-pencil"></i>
        </div>
        <div class="df-counter-card">
            <div class="df-counter-info"><span>ÜYE</span> <strong>{total_members}</strong></div>
            <i class="fa fa-users"></i>
        </div>
        <div class="df-counter-card">
            <div class="df-counter-info"><span>AKTİF</span> <strong>{online_count}</strong></div>
            <i class="fa fa-user"></i>
        </div>
    </div>

    <div class="df-counter-card df-today-wide" style="margin-top: 15px; background: #334155;">
        <div class="df-counter-info"><span>BUGÜN</span> <strong>{today_visitors}</strong></div>
        <i class="fa fa-eye"></i>
    </div>

    <div class="df-info-section" style="margin-top: 30px; display: flex; flex-direction: column; gap: 20px;">
        <div class="df-info-box">
            <div class="df-info-head"><i class="fa fa-info-circle"></i> FORUM BİLGİLERİ</div>
            <div class="df-info-body">
                <strong>Kimler Çevrimiçi:</strong> Toplam <b>{online_count}</b> kullanıcı aktif (<b>{online_members}</b> Üye, <b>{online_guests}</b> Misafir).
                Bugün toplam <b>{today_visitors}</b> kişi uğradı. Son Üye: <span style="color: var(--df-orange); font-weight: 800;">{last_member}</span>
            </div>
        </div>

        <div class="df-info-box">
            <div class="df-info-head"><i class="fa fa-exclamation-triangle"></i> YASAL UYARI</div>
            <div class="df-info-body" style="display: flex; gap: 20px; align-items: center;">
                <div style="width: 50px; height: 50px; background: #fff7ed; color: var(--df-orange); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <i class="fa fa-gavel" style="font-size: 24px;"></i>
                </div>
                <p style="margin: 0; font-size: 13.5px; color: var(--df-text-muted); line-height: 1.6;">
                    İçerik sağlayıcı paylaşım sitesi olarak hizmet veren forumumuzda 5651 Sayılı Kanun'un 8. Maddesine ve T.C.K'nın 125. Maddesine göre tüm üyelerimiz yaptıkları paylaşımlardan kendileri sorumludur. Sitemiz hakkında yapılacak şikayetleri <a href="{SITEURL}index.php?do=feedback" style="color: var(--df-orange); text-decoration: none; font-weight: 700;">İletişim</a> sayfamızdan iletebilirsiniz.
                </p>
            </div>
        </div>
    </div>

    <div class="df-footer-nav" style="margin-top: 30px; text-align: center; display: flex; justify-content: center; gap: 20px; color: #475569; font-size: 14px;">
        <a href="{SITEURL}index.php?do=feedback" style="color: #475569; text-decoration: none;"><i class="fa fa-envelope"></i> İletişim</a>
        <a href="{SITEURL}" style="color: #475569; text-decoration: none;"><i class="fa fa-home"></i> Ana Sayfa</a>
        <a href="{SITEURL}index.php?do=forum&action=rss" style="color: #475569; text-decoration: none;"><i class="fa fa-rss"></i> RSS</a>
    </div>
</div>
{forum_js_vars}
<script src="{THEME}/forum/js/forum.js"></script>
