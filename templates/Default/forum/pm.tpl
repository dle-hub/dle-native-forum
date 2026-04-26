<link rel="stylesheet" href="{THEME}/forum/forum.css?v=7">

<div class="df-page-wrap">

    <nav class="df-breadcrumb">
        <a href="{SITEURL}" class="df-breadcrumb-link">Ana Sayfa</a>
        <i class="fa fa-chevron-right df-breadcrumb-sep"></i>
        <a href="{SITEURL}index.php?do=forum" class="df-breadcrumb-link">Forum</a>
        <i class="fa fa-chevron-right df-breadcrumb-sep"></i>
        <span class="df-breadcrumb-current">Özel Mesajlar</span>
    </nav>

    <div class="df-card">
        <div class="df-card-header">
            <h1 class="df-card-title">
                <i class="fa fa-envelope"></i> 
                [inbox]Gelen Kutusu[/inbox]
                [compose]Yeni Mesaj Yaz[/compose]
                [read]Mesajı Oku[/read]
            </h1>
            
            <div class="df-header-actions">
                [inbox]
                <a href="{SITEURL}index.php?do=forum&action=pm&sub=compose" class="df-btn-submit" style="padding: 8px 16px; font-size: 11px;">
                    <i class="fa fa-plus"></i> Yeni Mesaj
                </a>
                [/inbox]
                [compose]
                <a href="{SITEURL}index.php?do=forum&action=pm" class="df-btn-back">
                    <i class="fa fa-arrow-left"></i> Gelen Kutusu
                </a>
                [/compose]
                [read]
                <a href="{SITEURL}index.php?do=forum&action=pm" class="df-btn-back">
                    <i class="fa fa-arrow-left"></i> Geri
                </a>
                [/read]
            </div>
        </div>

        <div class="df-card-body">
            
            {alert}

            [inbox]
            <div class="df-pm-list">
                {pm_list}
            </div>
            {pm_pagination}
            [/inbox]

            [compose]
            <form method="post" class="df-form-layout">
                <input type="hidden" name="user_hash" value="{user_hash}">
                
                <div class="df-form-group">
                    <label class="df-form-label">Alıcı</label>
                    <input type="text" name="name" value="{recipient}" class="df-input" required placeholder="Kullanıcı adı">
                </div>

                <div class="df-form-group">
                    <label class="df-form-label">Konu</label>
                    <input type="text" name="subject" value="{subject}" class="df-input" required>
                </div>

                <div class="df-form-group">
                    <label class="df-form-label">Mesajınız</label>
                    <div class="df-editor-box">{editor}</div>
                </div>

                <div class="df-form-actions">
                    <div></div>
                    <button type="submit" name="submit_pm" class="df-btn-submit">
                        <i class="fa fa-paper-plane"></i> Gönder
                    </button>
                </div>
            </form>
            [/compose]

            [read]
            <div class="df-pm-read-view">
                
                <div class="df-pm-read-header">
                    <div>
                        <h1 class="df-pm-read-title">{pm_title}</h1>
                        <div class="df-pm-read-meta">
                            <strong>{pm_from}</strong> ile konuşma
                        </div>
                    </div>
                    <div class="df-topic-actions" style="display:flex; gap:8px;">
                        
                        <form method="post" onsubmit="return confirm('Bu mesajı silmek istediğinize emin misiniz?');">
                            <input type="hidden" name="user_hash" value="{user_hash}">
                            <input type="hidden" name="pm_id" value="{pm_id}">
                            <button type="submit" name="delete_pm" class="df-btn-back" style="color:var(--df-danger); border-color:var(--df-danger); background:transparent;">
                                <i class="fa fa-trash"></i> Sil
                            </button>
                        </form>
                        
                        <a href="{reply_link}" class="df-btn-submit" style="padding: 8px 16px; font-size: 11px;"><i class="fa fa-reply"></i> Yanıtla</a>
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
