<link rel="stylesheet" href="{THEME}/forum/forum.css?v=4">

<div class="df-page-wrap">

    <nav class="df-breadcrumb">
        <a href="{SITEURL}" class="df-breadcrumb-link">Ana Sayfa</a>
        <i class="fa fa-chevron-right df-breadcrumb-sep"></i>
        <span class="df-breadcrumb-current">Forum</span>
    </nav>

    <div class="df-main-header">
        <div class="df-main-header-brand">
            <div class="df-main-header-icon">
                <i class="fa fa-comments"></i>
            </div>
            <div>
                <h1 class="df-main-title">Topluluk Forumu</h1>
                <p class="df-main-subtitle">Tartışın, Paylaşın, Öğrenin.</p>
            </div>
        </div>
        
        <div class="df-main-header-actions">
            
            <form action="{SITEURL}forum/search/" method="get" class="df-search-form">
                <input type="text" name="q" placeholder="Forumda ara..." class="df-search-input">
                <button type="submit" class="df-search-btn">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </div>


    <div class="df-cats-wrap">
        {forum_cats}
    </div>

    <!-- Yatay İstatistik Pilleri -->
    <div class="df-pills-bar">
        <div class="df-pill">
            <div class="df-pill-body">
                <span class="df-pill-label">MESAJ</span>
                <span class="df-pill-sep">|</span>
                <span class="df-pill-val">{total_posts}</span>
            </div>
            <div class="df-pill-icon"><i class="fa fa-comments"></i></div>
        </div>
        <div class="df-pill">
            <div class="df-pill-body">
                <span class="df-pill-label">KONU</span>
                <span class="df-pill-sep">|</span>
                <span class="df-pill-val">{total_topics}</span>
            </div>
            <div class="df-pill-icon"><i class="fa fa-pencil"></i></div>
        </div>
        <div class="df-pill">
            <div class="df-pill-body">
                <span class="df-pill-label">ÜYE</span>
                <span class="df-pill-sep">|</span>
                <span class="df-pill-val">{total_members}</span>
            </div>
            <div class="df-pill-icon"><i class="fa fa-users"></i></div>
        </div>
        <div class="df-pill">
            <div class="df-pill-body">
                <span class="df-pill-label">AKTİF</span>
                <span class="df-pill-sep">|</span>
                <span class="df-pill-val">{online_count}</span>
            </div>
            <div class="df-pill-icon"><i class="fa fa-user"></i></div>
        </div>
    </div>

    <!-- Forum Bilgileri -->
    <div class="df-info-block">
        <div class="df-info-head">
            <h3 class="df-info-head-title">
                <i class="fa fa-info-circle"></i> FORUM BİLGİLERİ
            </h3>
        </div>
        <div class="df-info-body">
            <div class="df-info-row">
                <strong>Kimler Çevrimiçi:</strong>
                Toplam <strong>{online_count}</strong> kullanıcı aktif. Son Üye: <strong>{last_member}</strong>
            </div>
        </div>
    </div>

    <!-- Yasal Uyarı -->
    <div class="df-info-block" style="margin-top: 10px;">
        <div class="df-info-head">
            <h3 class="df-info-head-title">
                <i class="fa fa-exclamation-triangle"></i> YASAL UYARI
            </h3>
        </div>
        <div class="df-info-body">
            <div class="df-info-row" style="display: flex; gap: 12px; align-items: flex-start;">
                <i class="fa fa-gavel" style="color: var(--df-accent); font-size: 18px; margin-top: 3px; flex-shrink: 0;"></i>
                <p style="margin: 0; font-size: 12px; line-height: 1.6; color: var(--df-text-muted);">
                    İçerik sağlayıcı paylaşım sitesi olarak hizmet veren forumumuzda 5651 Sayılı Kanun'un 8. Maddesine ve T.C.K'nın 125. Maddesine göre tüm üyelerimiz yaptıkları paylaşımlardan kendileri sorumludur. Hukuki tüm sorumluluk içeriği paylaşan üyeye aittir. Sitemiz hakkında yapılacak tüm hukuksal şikayetleri <a href="{SITEURL}index.php?do=feedback">İletişim</a> sayfamızdan bize ulaştırabilirsiniz.
                </p>
            </div>
        </div>
    </div>

    <!-- Footer Linkler -->
    <div class="df-footer-links">
        <a href="{SITEURL}index.php?do=feedback"><i class="fa fa-envelope"></i> İletişim</a>
        <a href="{SITEURL}"><i class="fa fa-home"></i> Ana Sayfa</a>
        <a href="{SITEURL}index.php?do=rss" target="_blank"><i class="fa fa-rss"></i> RSS</a>
    </div>

</div>
