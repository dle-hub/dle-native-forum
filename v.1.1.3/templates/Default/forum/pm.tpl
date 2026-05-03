<link rel="stylesheet" href="{THEME}/forum/forum.css?v=7">

<div class="df-page-wrap">

    {breadcrumb}

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
                <a href="{SITEURL}forum/pm/?sub=compose" class="df-btn-submit" style="padding: 8px 16px; font-size: 11px;">
                    <i class="fa fa-plus"></i> Yeni Mesaj
                </a>
                [/inbox]
                [compose]
                <a href="{SITEURL}forum/pm/" class="df-btn-back">
                    <i class="fa fa-arrow-left"></i> Gelen Kutusu
                </a>
                [/compose]
                [read]
                <a href="{SITEURL}forum/pm/" class="df-btn-back">
                    <i class="fa fa-arrow-left"></i> Geri
                </a>
                [/read]
            </div>
        </div>

        <div class="df-card-body">
            
            {alert}

            [inbox]
            <form method="post">
                <input type="hidden" name="user_hash" value="{user_hash}">
                
                <div class="df-pm-controls" style="margin-bottom:15px; display:flex; justify-content:space-between; align-items:center; background:#f9fafb; padding:10px; border-radius:8px; border:1px solid #edf2f7;">
                    <div style="display:flex; align-items:center; gap:10px;">
                        <input type="checkbox" id="selectAll" class="df-checkbox" onclick="var cbs=document.getElementsByName('selected_pms[]'); for(var i=0; i<cbs.length; i++) cbs[i].checked=this.checked;">
                        <label for="selectAll" style="font-size:12px; color:#64748b; cursor:pointer;">Tümünü Seç</label>
                    </div>
                    <button type="submit" name="delete_selected_pms" class="df-btn-back" style="color:var(--df-danger); border-color:var(--df-danger); background:transparent; padding:6px 12px; font-size:11px;" onclick="return confirm('Seçili mesajları silmek istediğinize emin misiniz?');">
                        <i class="fa fa-trash"></i> Seçilenleri Sil
                    </button>
                </div>

                <div class="df-pm-list">
                    {pm_list}
                </div>
                {pm_pagination}
            </form>
            [/inbox]

            [compose]
            <form method="post" class="df-form-layout">
                <input type="hidden" name="user_hash" value="{user_hash}">
                <input type="hidden" name="conv_id" value="{conv_id}">
                
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
                
                <div class="df-pm-read-header" style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px; padding:20px; margin-bottom:25px;">
                    <div style="flex:1;">
                        <h1 class="df-pm-read-title" style="margin:0 0 8px 0; font-size:20px; color:#1e293b;">{pm_title}</h1>
                        <div class="df-pm-read-meta" style="color:#64748b; font-size:13px;">
                            <i class="fa fa-comments-o"></i> <strong>{pm_from}</strong> ile olan yazışmanız
                        </div>
                    </div>
                    <div class="df-topic-actions" style="display:flex; gap:10px; align-items:center;">
                        
                        <form method="post" onsubmit="return confirm('Tüm konuşmayı silmek istediğinize emin misiniz?');">
                            <input type="hidden" name="user_hash" value="{user_hash}">
                            <input type="hidden" name="pm_id" value="{pm_id}">
                            <button type="submit" name="delete_pm" class="df-btn-back" style="color:#ef4444; border-color:#fee2e2; background:#fff1f2; height:38px; padding:0 15px;">
                                <i class="fa fa-trash"></i> Konuşmayı Sil
                            </button>
                        </form>
                        
                        <a href="{reply_link}" class="df-btn-submit" style="height:38px; padding:0 20px; display:inline-flex; align-items:center; gap:8px;">
                            <i class="fa fa-reply"></i> Yanıt Yaz
                        </a>
                    </div>
                </div>

                <div class="df-pm-messages" style="display:flex; flex-direction:column; gap:20px;">
                    {pm_text}
                </div>

            </div>
            [/read]

        </div>
    </div>

</div>
