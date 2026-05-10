<div class="df-container">
    <div class="df-header">
        {breadcrumb}
    </div>

    <div class="df-card" style="margin-bottom: 24px; border-left: 4px solid var(--df-accent);">
        <div class="df-card-body" style="padding: 24px;">
            <h1 style="margin: 0; font-size: 24px; color: var(--df-navy); font-weight: 800;">
                <i class="fa fa-search" style="color: var(--df-accent); margin-right: 10px;"></i> Arama Sonuçları
            </h1>
            <p style="color: var(--df-text-muted); margin-top: 8px; font-size: 15px;">
                "<strong>{search_query}</strong>" araması için toplam <strong>{total_results}</strong> sonuç bulundu.
            </p>
        </div>
    </div>

    <div class="df-card" style="margin-bottom: 30px; background: #f8fafc;">
        <div class="df-card-body" style="padding: 24px;">
            <form action="{SITEURL}index.php" method="GET" style="display: flex; flex-direction: column; gap: 20px;">
                <input type="hidden" name="do" value="forum">
                <input type="hidden" name="action" value="search">
                
                <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 15px;">
                    <div class="df-search-input-wrap" style="position: relative;">
                        <i class="fa fa-keyboard-o" style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: var(--df-text-muted);"></i>
                        <input type="text" name="q" class="df-search-input" value="{search_query}" placeholder="Kelime veya konu ara..." required style="padding-left: 45px; height: 50px; background: #fff;">
                    </div>
                    <select name="cat" class="df-search-input" style="height: 50px; background: #fff; cursor: pointer;">
                        {filter_cat_options}
                    </select>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr 1fr auto; gap: 15px; align-items: center;">
                    <div style="position: relative;">
                        <i class="fa fa-user" style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: var(--df-text-muted);"></i>
                        <input type="text" name="user" class="df-search-input" value="{filter_user}" placeholder="Kullanıcı adı..." style="padding-left: 40px; height: 44px; background: #fff;">
                    </div>
                    <input type="date" name="date_from" class="df-search-input" value="{filter_date_from}" title="Başlangıç Tarihi" style="height: 44px; background: #fff;">
                    <input type="date" name="date_to" class="df-search-input" value="{filter_date_to}" title="Bitiş Tarihi" style="height: 44px; background: #fff;">
                    
                    <button type="submit" class="df-btn df-btn-primary" style="height: 44px; padding: 0 30px;">
                        <i class="fa fa-filter"></i> Filtrele
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="df-search-results-list">
        <div class="df-list-header">
            <div class="df-col-icon">#</div>
            <div class="df-col-main">Eşleşen Konular</div>
            <div class="df-col-stats">İstatistikler</div>
            <div class="df-col-last">Son Mesaj</div>
        </div>
        <div class="df-card">
            {topics_list}
        </div>
    </div>

    <div class="df-pagination-wrapper" style="margin-top: 30px;">
        {pagination}
    </div>
</div>
{forum_js_vars}
<script src="{THEME}/forum/js/forum.js"></script>
