<link rel="stylesheet" href="{THEME}/forum/forum.css?v=4">

<div class="df-page-wrap">

    {breadcrumb}

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
        {forum_content}
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
                <span class="df-pill-val">{online_total}</span>
            </div>
            <div class="df-pill-icon"><i class="fa fa-user"></i></div>
        </div>
        <div class="df-pill">
            <div class="df-pill-body">
                <span class="df-pill-label">BUGÜN</span>
                <span class="df-pill-sep">|</span>
                <span class="df-pill-val">{today_visitors}</span>
            </div>
            <div class="df-pill-icon"><i class="fa fa-eye"></i></div>
        </div>
    </div>

    <!-- Forum Bilgileri Panosu -->
    <div class="df-info-panel">

        <!-- Kart 1: Çevrimiçi -->
        <div class="df-info-card">
            <div class="df-info-card-icon"><i class="fa fa-globe"></i></div>
            <div class="df-info-card-body">
                <span class="df-info-card-label">Çevrimiçi</span>
                <strong class="df-info-card-val">{online_total} aktif</strong>
                <small class="df-info-card-sub">{online_members} üye · {online_guests} misafir · {online_bots} bot</small>
            </div>
        </div>

        <!-- Kart 2: Bugün -->
        <div class="df-info-card">
            <div class="df-info-card-icon"><i class="fa fa-eye"></i></div>
            <div class="df-info-card-body">
                <span class="df-info-card-label">Bugün</span>
                <strong class="df-info-card-val">{today_visitors} ziyaretçi</strong>
                <small class="df-info-card-sub">tekil IP bazlı sayım</small>
            </div>
        </div>

        <!-- Kart 3: Son Üye -->
        <div class="df-info-card">
            <div class="df-info-card-icon"><i class="fa fa-user-plus"></i></div>
            <div class="df-info-card-body">
                <span class="df-info-card-label">Yeni Üye</span>
                <strong class="df-info-card-val">{last_member}</strong>
            </div>
        </div>

        <!-- Kart 4: Son Mesaj -->
        [last-post]
        <div class="df-info-card">
            <div class="df-info-card-icon">
                <img src="{last_post_avatar}" class="df-mini-avatar" alt="{last_post_user}">
            </div>
            <div class="df-info-card-body">
                <span class="df-info-card-label">Son Hareketlilik</span>
                <a href="{last_post_link}" class="df-info-card-val df-info-card-link">{last_post_topic}</a>
                <small class="df-info-card-sub">{last_post_user} · {last_post_date}</small>
            </div>
        </div>
        [/last-post]

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
        <a href="{SITEURL}"><i class="fa fa-home"></i> {forum_home}</a>
        <a href="{SITEURL}index.php?do=rss" target="_blank"><i class="fa fa-rss"></i> RSS</a>
    </div>

</div>