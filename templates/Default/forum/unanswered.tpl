<link rel="stylesheet" href="{THEME}/forum/forum.css?v=7">

<div class="df-page-wrap">

    <nav class="df-breadcrumb">
        <a href="{SITEURL}" class="df-breadcrumb-link">Ana Sayfa</a>
        <i class="fa fa-chevron-right df-breadcrumb-sep"></i>
        <a href="{SITEURL}index.php?do=forum" class="df-breadcrumb-link">Forum</a>
        <i class="fa fa-chevron-right df-breadcrumb-sep"></i>
        <span class="df-breadcrumb-current">Cevapsız Konular</span>
    </nav>

    <div class="df-category-hero">
        <div class="df-hero-info">
            <div class="df-hero-icon">
                <i class="fa fa-comments-o"></i>
            </div>
            <div>
                <h1 class="df-hero-title">Cevapsız Konular</h1>
                <p class="df-hero-desc">Henüz cevap almamış {total_count} konu bulunuyor. İlk cevabı sen ver!</p>
            </div>
        </div>
    </div>

    <div class="df-category-block">
        <div class="df-list-header df-topics-header">
            <div class="df-header-icon"></div>
            <div class="df-header-title">Konu Başlığı</div>
            <div class="df-header-stats">İstatistik</div>
            <div class="df-header-last">Açan</div>
        </div>
        <div class="df-forum-list">
            {topics_list}
        </div>
    </div>

    <div class="df-pagination-wrap">
        {pagination}
    </div>

</div>
