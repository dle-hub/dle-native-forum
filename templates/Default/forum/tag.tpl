<link rel="stylesheet" href="{THEME}/forum/forum.css?v=7">

<div class="df-page-wrap">

    <nav class="df-breadcrumb">
        <a href="{SITEURL}" class="df-breadcrumb-link">Ana Sayfa</a>
        <i class="fa fa-chevron-right df-breadcrumb-sep"></i>
        <a href="{SITEURL}index.php?do=forum" class="df-breadcrumb-link">Forum</a>
        <i class="fa fa-chevron-right df-breadcrumb-sep"></i>
        <span class="df-breadcrumb-current">Etiket: #{current_tag}</span>
    </nav>

    [has-tag-cloud]
    <div class="df-card" style="margin-bottom: 20px;">
        <div class="df-card-header">
            <h3 class="df-card-title"><i class="fa fa-tags"></i> Popüler Etiketler</h3>
        </div>
        <div class="df-card-body">
            <div class="df-tag-cloud">
                {tag_cloud_html}
            </div>
        </div>
    </div>
    [/has-tag-cloud]

    <div class="df-category-hero">
        <div class="df-hero-info">
            <div class="df-hero-icon">
                <i class="fa fa-tag"></i>
            </div>
            <div>
                <h1 class="df-hero-title">#{current_tag}</h1>
                <p class="df-hero-desc">{total_count} konu bu etiketle işaretlenmiş.</p>
            </div>
        </div>
    </div>

    <div class="df-category-block">
        <div class="df-list-header df-topics-header">
            <div class="df-header-icon"></div>
            <div class="df-header-title">Konu Başlığı</div>
            <div class="df-header-stats">İstatistik</div>
            <div class="df-header-last">Son Mesaj</div>
        </div>
        <div class="df-forum-list">
            {topics_list}
        </div>
    </div>

    <div class="df-pagination-wrap">
        {pagination}
    </div>

</div>
