<link rel="stylesheet" href="{THEME}/forum/forum.css?v=6">

<div class="df-page-wrap">
    
    {breadcrumb}

    <div class="df-card">
        <div class="df-card-header">
            <h1 class="df-card-title">
                <i class="fa fa-edit"></i> {cat_name}: Yeni Konu Oluştur
            </h1>
        </div>

        <div class="df-card-body">
            <form method="POST" class="df-form-layout">
                
                <input type="hidden" name="csrf_token" value="{csrf_token}">
                <input type="hidden" name="cat_id" value="{cat_id}">

                [error]
                <div class="df-alert df-alert-error">
                    <i class="fa fa-exclamation-triangle"></i> 
                    <span>{error}</span>
                </div>
                [/error]

                <div class="df-form-group">
                    <label class="df-form-label">Önek</label>
                    <select name="prefix_id" class="df-input" style="max-width:200px;">
                        {prefix_options}
                    </select>
                </div>

                <div class="df-form-group">
                    <label for="topic-title" class="df-form-label">Konu Başlığı</label>
                    <input type="text" id="topic-title" name="topic_title" value="{title_val}" class="df-input" placeholder="Konuyu açıklayıcı bir başlık yazın..." required>
                </div>

                <div class="df-form-group">
                    <label class="df-form-label">Etiketler</label>
                    <input type="text" name="tags" value="{tags_value}" class="df-input" placeholder="etiket1, etiket2, etiket3 (max 5)" maxlength="150">
                </div>

                <div class="df-form-group">
                    <label class="df-form-label">Kısa Açıklama</label>
                    <input type="text" name="description" value="{description_value}" class="df-input" placeholder="Kısa konu açıklaması (opsiyonel)" maxlength="500">
                </div>

                <!-- Editör Alanı -->
                <div class="df-form-group">
                    <label for="comments" class="df-form-label">Mesaj İçeriği</label>
                    <div class="df-editor-box">
                        {editor}
                    </div>
                </div>

                <!-- Aksiyonlar -->
                <div class="df-form-actions">
                    <a href="javascript:history.back()" class="df-btn-back">
                        <i class="fa fa-times"></i> İptal
                    </a>
                    <button type="submit" name="submit_topic" class="df-btn-submit">
                        <i class="fa fa-paper-plane"></i> Konuyu Gönder
                    </button>
                </div>

            </form>
        </div>
    </div>

</div>