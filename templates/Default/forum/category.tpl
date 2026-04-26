<link rel="stylesheet" href="{THEME}/forum/forum.css?v=5">

<div class="df-page-wrap">
    
    <!-- Breadcrumb -->
    <nav class="df-breadcrumb">
        <a href="{SITEURL}" class="df-breadcrumb-link">Ana Sayfa</a>
        <i class="fa fa-chevron-right df-breadcrumb-sep"></i>
        <a href="{SITEURL}index.php?do=forum" class="df-breadcrumb-link">Forum</a>
        <i class="fa fa-chevron-right df-breadcrumb-sep"></i>
        <span class="df-breadcrumb-current">{cat_name}</span>
    </nav>

    <!-- Kategori Başlığı ve Aksiyonlar -->
    <div class="df-category-hero">
        <div class="df-hero-info">
            <div class="df-hero-icon">
                <i class="fa fa-folder-open-o"></i>
            </div>
            <div>
                <h1 class="df-hero-title">{cat_name}</h1>
                <p class="df-hero-desc">{cat_desc}</p>
            </div>
        </div>
        <div class="df-hero-actions">
            {new_topic_btn}
            <form action="{SITEURL}index.php" method="get" class="df-search-form">
                <input type="hidden" name="do" value="forum">
                <input type="hidden" name="action" value="search">
                <input type="text" name="q" placeholder="Forumda ara..." class="df-search-input">
                <button type="submit" class="df-search-btn"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

    <!-- Konu Listesi Tablosu -->
    <div class="df-category-block">
        <!-- Tablo Başlığı (Sütunlar) -->
        <div class="df-list-header df-topics-header">
            <div class="df-header-icon"></div>
            <div class="df-header-title">Konu Başlığı</div>
            <div class="df-header-stats">İstatistik</div>
            <div class="df-header-last">Son Mesaj</div>
        </div>
        
        <!-- Konu Satırları (PHP'den gelecek) -->
        <div class="df-forum-list">
            {topics_list}
        </div>
    </div>

    <!-- Sayfalama -->
    <div class="df-pagination-wrap">
        {pagination}
    </div>

</div>