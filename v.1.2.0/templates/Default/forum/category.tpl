<div class="df-container">
    <div class="df-header">
        {breadcrumb}
    </div>

    <div class="df-card" style="margin-bottom: 24px; border-left: 4px solid var(--df-accent);">
        <div class="df-card-body" style="padding: 24px;">
            <h1 class="df-category-title" style="margin:0; font-size: 26px; color: var(--df-navy); font-weight: 800;">{cat_name}</h1>
            [has-desc]
            <p class="df-cat-desc" style="margin: 8px 0 0; color: var(--df-text-muted); font-size: 15px;">{cat_desc}</p>
            [/has-desc]
        </div>
    </div>

    [has-subforums]
    <div class="df-subforums-section" style="margin-bottom: 24px;">
        <div class="df-list-header">
            <div class="df-col-icon">#</div>
            <div class="df-col-main">Alt Forumlar</div>
            <div class="df-col-stats">İstatistikler</div>
            <div class="df-col-last">Son Mesaj</div>
        </div>
        <div class="df-card">
            <div class="df-cat-body">
                {sub_forums}
            </div>
        </div>
    </div>
    [/has-subforums]

    <div class="df-topic-actions" style="margin-bottom: 24px; display: flex; justify-content: flex-end;">
        [is-logged]
        <a href="{SITEURL}index.php?do=forum&action=new_topic&cat_id={cat_id}" class="df-btn df-btn-primary" style="padding: 12px 24px; font-size: 15px;">
            <i class="fa fa-plus-circle"></i> Yeni Konu Aç
        </a>
        [/is-logged]
    </div>

    {include file="forum/search_form.tpl"}

    <div class="df-topics-section">
        <div class="df-list-header">
            <div class="df-col-icon">#</div>
            <div class="df-col-main">Konular</div>
            <div class="df-col-stats">İstatistikler</div>
            <div class="df-col-last">Son Mesaj</div>
        </div>
        <div class="df-card">
            <div class="df-table-body">
                {topics_list}
            </div>
        </div>
    </div>

    <div class="df-pagination-wrapper" style="margin-top: 24px;">
        {pagination}
    </div>
</div>

{forum_js_vars}
<script src="{THEME}/forum/js/forum.js"></script>
