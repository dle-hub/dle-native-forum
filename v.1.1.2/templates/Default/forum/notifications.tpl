<link rel="stylesheet" href="{THEME}/forum/forum.css?v=7">

<div class="df-page-wrap">

    <!-- Breadcrumb -->
    <nav class="df-breadcrumb">
        <a href="{SITEURL}" class="df-breadcrumb-link">Ana Sayfa</a>
        <i class="fa fa-chevron-right df-breadcrumb-sep"></i>
        <a href="{SITEURL}index.php?do=forum" class="df-breadcrumb-link">Forum</a>
        <i class="fa fa-chevron-right df-breadcrumb-sep"></i>
        <span class="df-breadcrumb-current">Bildirimler</span>
    </nav>

    <!-- Kart Yapısı -->
    <div class="df-card">
        <div class="df-card-header">
            <h1 class="df-card-title">
                <i class="fa fa-bell"></i> Bildirimler
            </h1>
            <div class="df-header-actions">
                <a href="{SITEURL}index.php?do=forum" class="df-btn-back">
                    <i class="fa fa-arrow-left"></i> Foruma Dön
                </a>
            </div>
        </div>

        <div class="df-card-body">
            <!-- Bildirim Listesi -->
            <div class="df-notif-list">
                {notif_content}
            </div>
        </div>
    </div>

</div>