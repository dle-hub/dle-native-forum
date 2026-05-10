<div class="df-container">
    <div class="df-header">
        {breadcrumb}
    </div>

    <div class="df-card">
        <div class="df-card-header">
            <h1 class="df-card-title">
                <i class="fa fa-envelope-o"></i> 
                [inbox]Gelen Kutusu[/inbox]
                [compose]Yeni Mesaj Yaz[/compose]
                [read]Mesajı Oku[/read]
            </h1>
            
            <div class="df-header-actions">
                [inbox]
                <a href="{SITEURL}index.php?do=forum&action=pm&sub=compose" class="df-btn df-btn-sm df-btn-primary">
                    <i class="fa fa-plus"></i> Yeni Mesaj
                </a>
                [/inbox]
                [compose]
                <a href="{SITEURL}index.php?do=forum&action=pm" class="df-btn df-btn-sm df-btn-outline">
                    <i class="fa fa-arrow-left"></i> Gelen Kutusu
                </a>
                [/compose]
                [read]
                <a href="{SITEURL}index.php?do=forum&action=pm" class="df-btn df-btn-sm df-btn-outline">
                    <i class="fa fa-arrow-left"></i> Geri
                </a>
                [/read]
            </div>
        </div>

        <div class="df-card-body" style="padding: 24px;">
            
            {alert}

            [inbox]
            <div class="df-pm-list">
                {pm_list}
            </div>
            <div class="df-pagination-wrapper" style="margin-top: 20px;">
                {pm_pagination}
            </div>
            [/inbox]

            [compose]
            <form method="post" class="df-form-layout">
                <input type="hidden" name="user_hash" value="{user_hash}">
                
                <div class="df-form-group">
                    <label class="df-form-label">Alıcı</label>
                    <input type="text" name="name" value="{recipient}" class="df-search-input" required placeholder="Kullanıcı adı" style="height: 44px;">
                </div>

                <div class="df-form-group" style="margin-top: 15px;">
                    <label class="df-form-label">Konu</label>
                    <input type="text" name="subject" value="{subject}" class="df-search-input" required placeholder="Mesaj konusu" style="height: 44px;">
                </div>

                <div class="df-form-group" style="margin-top: 15px;">
                    <label class="df-form-label">Mesajınız</label>
                    <div class="df-editor-box" style="border: 1px solid var(--df-border); border-radius: 8px;">{editor}</div>
                </div>

                <div class="df-form-actions" style="margin-top: 20px; display: flex; justify-content: flex-end;">
                    <button type="submit" name="submit_pm" class="df-btn df-btn-primary">
                        <i class="fa fa-paper-plane"></i> Gönder
                    </button>
                </div>
            </form>
            [/compose]

            [read]
            <div class="df-pm-read-view">
                
                <div class="df-pm-read-header" style="display: flex; justify-content: space-between; align-items: flex-start; padding-bottom: 20px; border-bottom: 1px solid var(--df-border); margin-bottom: 24px;">
                    <div>
                        <h1 class="df-pm-read-title" style="margin: 0; font-size: 22px; color: var(--df-navy); font-weight: 800;">{pm_title}</h1>
                        <div class="df-pm-read-meta" style="margin-top: 5px; color: var(--df-text-muted);">
                            <strong>{pm_from}</strong> ile özel yazışma
                        </div>
                    </div>
                    <div class="df-topic-actions" style="display:flex; gap:10px;">
                        
                        <form method="post" onsubmit="return confirm('Bu mesajı silmek istediğinize emin misiniz?');">
                            <input type="hidden" name="user_hash" value="{user_hash}">
                            <input type="hidden" name="pm_id" value="{pm_id}">
                            <button type="submit" name="delete_pm" class="df-btn df-btn-sm" style="color:var(--df-danger); border-color:var(--df-danger); background: #fff5f5;">
                                <i class="fa fa-trash"></i> Sil
                            </button>
                        </form>
                        
                        <a href="{reply_link}" class="df-btn df-btn-sm df-btn-primary"><i class="fa fa-reply"></i> Yanıtla</a>
                    </div>
                </div>

                <div class="df-pm-messages">
                    {pm_text}
                </div>

            </div>
            [/read]

        </div>
    </div>
</div>
{forum_js_vars}
<script src="{THEME}/forum/js/forum.js"></script>
