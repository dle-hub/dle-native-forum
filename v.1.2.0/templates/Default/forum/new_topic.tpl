<div class="df-container">
    <div class="df-header">
        {breadcrumb}
    </div>

    <div class="df-card">
        <div class="df-card-header">
            <h1 class="df-card-title">
                <i class="fa fa-pencil-square-o"></i> {cat_name}: Yeni Konu Oluştur
            </h1>
        </div>

        <div class="df-card-body" style="padding: 30px;">
            <form method="POST" class="df-form-layout" enctype="multipart/form-data">
                
                <input type="hidden" name="csrf_token" value="{csrf_token}">
                <input type="hidden" name="cat_id" value="{cat_id}">

                [error]
                <div class="df-alert df-alert-error" style="margin-bottom: 24px; background: #fff5f5; border: 1px solid #feb2b2; padding: 15px; border-radius: 8px; color: #c53030; display: flex; align-items: center; gap: 10px;">
                    <i class="fa fa-exclamation-triangle"></i> 
                    <span>{error}</span>
                </div>
                [/error]

                <div style="display: grid; grid-template-columns: 200px 1fr; gap: 20px; margin-bottom: 20px;">
                    <div class="df-form-group">
                        <label class="df-form-label">Konu Ön Ekini Seçin</label>
                        {prefix_select}
                    </div>
                    <div class="df-form-group">
                        <label class="df-form-label">Konu Başlığı</label>
                        <input type="text" name="topic_title" value="{title_val}" class="df-search-input" placeholder="Konuyu açıklayıcı bir başlık yazın..." required style="height: 44px;">
                    </div>
                </div>

                <div class="df-form-group" style="margin-bottom: 20px;">
                    <label class="df-form-label">Konu Açıklaması (Opsiyonel)</label>
                    {description_field}
                </div>

                <div class="df-form-group" style="margin-bottom: 20px;">
                    <label class="df-form-label">Etiketler (Virgül ile ayırın)</label>
                    {tags_input}
                </div>

                <div class="df-form-group">
                    <label class="df-form-label">Mesaj İçeriği</label>
                    <div class="df-editor-box" style="border: 1px solid var(--df-border); border-radius: 8px;">
                        {editor}
                    </div>
                </div>

                [allow-upload]
                <div class="df-upload-zone" style="margin-top: 24px; border: 2px dashed var(--df-border); padding: 20px; border-radius: 12px; text-align: center; background: #f8fafc;">
                    <label class="df-form-label" style="display: block; margin-bottom: 15px;"><i class="fa fa-paperclip"></i> {lang_attach}</label>
                    <div class="df-custom-upload">
                        <input type="file" name="forum_file[]" multiple id="forum_file_input" style="cursor: pointer;">
                        <div class="df-upload-hint" style="margin-top: 10px; font-size: 13px; color: var(--df-text-muted);">Dosyaları buraya bırakın veya seçmek için tıklayın</div>
                    </div>
                </div>
                [/allow-upload]

                <div class="df-form-actions" style="margin-top: 30px; display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--df-border); padding-top: 20px;">
                    <a href="javascript:history.back()" class="df-btn df-btn-outline">
                        <i class="fa fa-times"></i> İptal
                    </a>
                    <button type="submit" name="submit_topic" class="df-btn df-btn-primary" style="padding: 12px 36px;">
                        <i class="fa fa-paper-plane"></i> Konuyu Gönder
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

{forum_js_vars}
<script>var text_upload = "Dosya Yükle";</script>
<script src="{THEME}/forum/js/forum.js"></script>