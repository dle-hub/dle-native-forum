<link rel="stylesheet" href="{THEME}/forum/forum.css?v=7">

<div class="df-page-wrap">

    <nav class="df-breadcrumb">
        <a href="{SITEURL}" class="df-breadcrumb-link">Ana Sayfa</a>
        <i class="fa fa-chevron-right df-breadcrumb-sep"></i>
        <a href="{SITEURL}forum/" class="df-breadcrumb-link">Forum</a>
        <i class="fa fa-chevron-right df-breadcrumb-sep"></i>
        <span class="df-breadcrumb-current">{topic_title}</span>
    </nav>

    <div class="df-topic-bar">
        <div class="df-topic-info">
            <span class="df-topic-label">KONU:</span>
            <h1 class="df-topic-title">{topic_title}</h1>
            {topic_description}
        </div>
        <div class="df-topic-actions">
            {bump_btn}
            {follow_btn}
            {notif_btn}
            <a href="#reply" class="df-btn-submit" style="padding: 8px 16px; font-size: 11px;">
                <i class="fa fa-reply"></i> Cevap Yaz
            </a>
        </div>
    </div>

    {admin_toolbar}
    {lock_notice}

    <div class="df-posts-list">
        {posts_list}
    </div>

    <div class="df-pagination-wrap">
        {pagination}
    </div>

    <div id="reply" class="df-card" style="margin-top: 20px;">
        <div class="df-card-header">
            <h3 class="df-card-title"><i class="fa fa-pencil"></i> {editor_title}</h3>
        </div>
        <div class="df-card-body">
            
            [logged]
            {reply_error_block}
            
            <form method="post" name="dle-comments-form" id="dle-comments-form" class="df-form-layout" enctype="multipart/form-data">
                
                <input type="hidden" name="csrf_token" value="{csrf_token}">
                <div class="df-form-group">
                    <label class="df-form-label">Mesajınız</label>
                    <div class="df-editor-box">
                        {editor}
                    </div>
                </div>

                {upload_form}

                <div class="df-form-actions">
                    <div></div> 
                    <button type="submit" name="submit_reply" class="df-btn-submit">
                        <i class="fa fa-paper-plane"></i> Gönder
                    </button>
                </div>
            </form>
            [/logged]

            [not-logged]
            <div class="df-alert" style="border-color: #cbd5e1; background: #f8fafc; padding: 20px; text-align: center;">
                Cevap yazmak için lütfen <a href="{SITEURL}index.php?do=login" style="color:var(--df-accent); font-weight:700;">giriş yapın</a> veya üye olun.
            </div>
            [/not-logged]

        </div>
    </div>

</div>
