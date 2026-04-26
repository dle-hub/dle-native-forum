<link rel="stylesheet" href="{THEME}/forum/forum.css?v=6">

<div class="df-page-wrap">
    
    <nav class="df-breadcrumb">
        <a href="{SITEURL}" class="df-breadcrumb-link">Ana Sayfa</a>
        <i class="fa fa-chevron-right df-breadcrumb-sep"></i>
        <a href="{SITEURL}index.php?do=forum" class="df-breadcrumb-link">Forum</a>
        <i class="fa fa-chevron-right df-breadcrumb-sep"></i>
        <span class="df-breadcrumb-current">Yeni Konu</span>
    </nav>

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

                <!-- Başlık Alanı (DÜZELTİLDİ: ID ve FOR eklendi) -->
                <div class="df-form-group">
                    <label for="topic-title" class="df-form-label">Konu Başlığı</label>
                    <input type="text" id="topic-title" name="topic_title" value="{title_val}" class="df-input" placeholder="Konuyu açıklayıcı bir başlık yazın..." required>
                </div>

                <!-- Editör Alanı (DÜZELTİLDİ: for="comments" eklendi) -->
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