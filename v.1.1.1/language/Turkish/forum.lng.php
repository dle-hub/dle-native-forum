<?php
/*
=====================================================
 DLE Native Forum - Turkish Language File
=====================================================
*/

global $lang; // DLE ana dil dizisine erişim sağlar (Sidebar bozulmasını önler)

// Mevcut $lang dizisini koruyarak üzerine ekle
$lang = array_merge((array)$lang, array(

    /* ───────── GENEL ───────── */
    'forum_title'             => 'Topluluk Forumu',
    'forum_error'             => 'Hata',
    'forum_warning'           => 'Uyarı',
    'forum_success'           => 'Başarı',
    'forum_cancel'            => 'İptal',
    'forum_save'              => 'Kaydet',
    'forum_delete'            => 'Sil',
    'forum_edit'              => 'Düzenle',
    'forum_yes'               => 'Evet',
    'forum_no'                => 'Hayır',
    'forum_forum'             => 'Forum',
    'forum_topic'             => 'Konu',
    'forum_topics'            => 'Konular',
    'forum_post'              => 'Mesaj',
    'forum_posts'             => 'Mesajlar',
    'forum_reply'             => 'Cevap',
    'forum_replies'           => 'Cevaplar',
    'forum_views'             => 'Görüntülenme',
    'forum_online'            => 'Çevrimiçi',
    'forum_member'            => 'Üye',
    'forum_members'           => 'Üyeler',
    'forum_stats'             => 'İstatistik',
    'forum_last_posts'        => 'Son Mesajlar',
    'forum_no_posts'          => 'Henüz mesaj yok',
    'forum_new_topic'         => 'Yeni Konu',
    'forum_new_topic_btn'     => 'Yeni Konu Aç',
    'forum_date'              => 'Tarih',
    'forum_action'            => 'İşlem',
    'forum_status'            => 'Durum',
    'forum_search'            => 'Ara',
    'forum_guest'             => 'Misafir',
    'forum_write_reply'       => "Cevap Yaz",


    /* ───────── GİRİŞ / YETKİ ───────── */
    'forum_err_must_login'       => 'Giriş yapmalısınız.',
    'forum_err_login_pm'         => 'Özel mesajlara erişmek için giriş yapmalısınız.',
    'forum_err_login_notif'      => 'Bildirimlere erişmek için giriş yapmalısınız.',
    'forum_err_login_topic'      => 'Konu açmak için giriş yapmalısınız.',
    'forum_err_no_permission'    => 'Yetkiniz yok!',
    'forum_err_no_perm_cat'      => 'Bu kategoride konu açma yetkiniz yok.',
    'forum_err_must_login_short' => 'Giriş Yapmalısınız',

    /* ───────── CSRF ───────── */
    'forum_err_csrf'       => 'Güvenlik doğrulaması başarısız!',
    'forum_err_csrf_retry' => 'Güvenlik doğrulaması başarısız! Sayfayı yenileyip tekrar deneyin.',

    /* ───────── KATEGORİ HATALARI ───────── */
    'forum_err_cat_invalid'   => 'Geçersiz kategori bağlantısı.',
    'forum_err_cat_not_found' => 'Kategori bulunamadı veya silinmiş.',
    'forum_err_no_cats'       => 'Henüz kategori eklenmemiş.',
    'forum_err_cat_select'    => 'Geçersiz kategori seçimi.',

    /* ───────── KONU HATALARI ───────── */
    'forum_err_topic_not_found' => 'Konu bulunamadı!',
    'forum_err_topic_locked'    => 'Bu konu kilitli!',
    'forum_err_locked_notice'   => 'Bu konu kilitlendi.',
    'forum_err_title_short'     => 'Başlık en az 3 karakter olmalı!',
    'forum_err_title_long'      => 'Başlık çok uzun!',
    'forum_err_content_short'   => 'İçerik en az 10 karakter olmalı!',
    'forum_err_no_topics'       => 'Bu kategoride henüz konu açılmamış.',
    'forum_err_invalid_action'  => 'Geçersiz işlem.',

    /* ───────── MESAJ HATALARI ───────── */
    'forum_err_post_not_found' => 'Mesaj bulunamadı!',
    'forum_err_post_short'     => 'Mesaj çok kısa!',
    'forum_err_post_min'       => 'Mesaj en az %d karakter olmalı!',

    /* ───────── FLOOD ───────── */
    'forum_err_flood_topic' => 'Çok hızlı konu açıyorsunuz! %d saniye bekleyin.',
    'forum_err_flood_reply' => 'Çok hızlı mesaj gönderiyorsunuz! %d saniye bekleyin.',
    'forum_err_flood_like'  => 'Çok hızlı beğeni yapıyorsunuz! %d saniye bekleyin.',

    /* ───────── BUMP ───────── */
    'forum_err_bump_locked'    => 'Kilitli konu bump edilemez!',
    'forum_err_bump_owner'     => 'Sadece konu sahibi bump yapabilir!',
    'forum_err_bump_cooldown'  => 'Bump için %d saat daha beklemelisiniz!',
    'forum_ok_bump'            => 'Konu yukarı taşındı!',
    'forum_bump_btn'           => 'Bump',

    /* ───────── BEĞENİ ───────── */
    'forum_err_own_like'      => 'Kendi mesajınızı beğenemezsiniz!',
    'forum_js_liked'          => 'Mesaj beğenildi!',
    'forum_js_disliked'       => 'Mesaj beğenilmedi.',
    'forum_js_vote_removed'   => 'Oy kaldırıldı.',

    /* ───────── TAKİP ───────── */
    'forum_follow_btn'      => 'Takip Et',
    'forum_unfollow_btn'    => 'Takipten Çık',
    'forum_js_followed'     => 'Konu takibe alındı.',
    'forum_js_unfollowed'   => 'Konu takibi bırakıldı.',

    /* ───────── ŞİKAYET ───────── */
    'forum_err_complaint_short' => 'Şikayet nedeni çok kısa!',
    'forum_err_complaint_dup'   => 'Bu mesajı zaten şikayet ettiniz!',
    'forum_ok_complaint'        => 'Şikayetiniz iletildi.',

    /* ───────── DOSYA YÜKLEME ───────── */
    'forum_err_upload_none'     => 'Dosya seçilmedi!',
    'forum_err_upload_disabled' => 'Ek dosya yükleme kapalı!',
    'forum_err_upload_error'    => 'Yükleme hatası: %s',
    'forum_err_upload_size'     => '%s çok büyük! Max: %s MB',
    'forum_err_upload_ext'      => '%s: izin verilmeyen uzantı.',

    /* ───────── ARAMA ───────── */
    'forum_err_search_empty'   => 'Lütfen bir arama terimi girin.',
    'forum_err_search_min'     => 'Arama terimi en az 3 karakter olmalı!',
    'forum_search_results'     => 'Arama Sonuçları',
    'forum_topics_found'       => '%d konu bulundu.',
    'forum_search_no_results'  => 'Aramanızla eşleşen bir konu bulunamadı.',

    /* ───────── ONAY KUYRUĞU ───────── */
    'forum_ok_approval_pending' => 'Mesajınız moderatör onayı bekliyor.',

    /* ───────── PM (ÖZEL MESAJ) ───────── */
    'forum_pm_empty' => 'Gelen kutunuz boş.',
    'forum_pm_not_found' => 'Mesaj bulunamadı.',
    'forum_err_pm_user' => 'Kullanıcı bulunamadı.',
    'forum_ok_pm_sent' => 'Mesajınız başarıyla gönderildi.',
    'forum_err_pm_invalid'   => 'Geçersiz alıcı adı!',
    'forum_err_pm_notfound'  => 'Kullanıcı bulunamadı!',
    'forum_err_pm_title'     => 'Konu çok kısa!',
    'forum_err_pm_text'      => 'Mesaj çok kısa!',
    'forum_err_pm_self'      => 'Geçersiz alıcı!',

    /* ───────── BİLDİRİMLER ───────── */
    'forum_notifications'  => 'Bildirimler',
    'forum_no_notifs'      => 'Henüz bildiriminiz yok.',
    'forum_notif_reply'    => 'konunuza cevap yazdı',
    'forum_notif_like'     => 'mesajınızı beğendi',
    'forum_notif_pm'       => 'size özel mesaj gönderdi',
    'forum_notif_mention'  => 'sizi etiketledi',
    'forum_deleted_topic'  => 'Silinen Konu',

    /* ───────── JS VE GENEL ───────── */
    'forum_js_conn_error' => 'Bağlantı hatası!',
    'forum_err_move_cat' => 'Kategori bulunamadı!',
    'forum_admin_label' => 'YÖNETİM:',
    'forum_lock' => 'Kilitle',
    'forum_unlock' => 'Kilidi Aç',
    'forum_pin' => 'Sabitle',
    'forum_unpin' => 'Sabitlemeyi Kaldır',
    'forum_delete_topic' => 'Konuyu Sil',
    'forum_confirm_del_post' => 'Silinecek emin misiniz?',
    'forum_confirm_del_topic' => 'Konuyu silmek üzeresiniz, emin misiniz?',
    'forum_confirm_delete'    => 'Silinsin mi?',
    'forum_group_admin' => 'Yönetici',
    'forum_group_editor' => 'Editör',
    'forum_group_author' => 'Yazar',
    'forum_group_member' => 'Üye',
    'forum_edited_hint' => '(düzenlendi: %s)',
    'forum_reply_title' => 'Cevap Yaz',
    'forum_topic_locked_t' => 'Konu Kilitli',

    /* ══════════════════════════════════════
       ADMIN PANELİ KELİMELERİ (inc/forum.php)
       ══════════════════════════════════════ */
    'forum_admin_title' => 'DLE Native Forum',
    'forum_admin_subtitle' => 'Yönetim Paneli',

    /* Navbar */
    'forum_adm_nav_summary' => 'Özet',
    'forum_adm_nav_cats' => 'Kategoriler',
    'forum_adm_nav_ranks' => 'Rütbeler',
    'forum_adm_nav_words' => 'Yasaklı Kelimeler',
    'forum_adm_nav_complaints' => 'Şikayetler',
    'forum_adm_nav_topics' => 'Konular',
    'forum_adm_nav_pending' => 'Onay Kuyruğu',
    'forum_adm_nav_logs' => 'Mod Logları',
    'forum_adm_nav_settings' => 'Ayarlar',

    /* Kategori Yönetimi */
    'forum_adm_cat_manage' => 'Kategori Yönetimi',
    'forum_adm_cat_add' => 'Yeni Kategori Ekle',
    'forum_adm_cat_edit' => 'Kategoriyi Düzenle',
    'forum_adm_cat_new' => 'Yeni Kategori',
    'forum_adm_cat_name' => 'Kategori Adı',
    'forum_adm_cat_desc' => 'Açıklama',
    'forum_adm_cat_parent' => 'Üst Kategori',
    'forum_adm_cat_icon' => 'Font Awesome İkon (fa-xxxx)',
    'forum_adm_cat_icn' => 'İkon',
    'forum_adm_cat_order' => 'Sıra',
    'forum_adm_cat_slug' => 'Slug',
    'forum_adm_cat_saved' => 'Kategori güncellendi.',
    'forum_adm_cat_added' => 'Yeni kategori oluşturuldu.',
    'forum_adm_cat_del' => 'Kategori silindi.',
    'forum_adm_cat_del_subs' => 'Önce alt kategorileri silin veya taşıyın.',
    'forum_adm_cat_del_topics' => 'Önce kategorideki konuları silin veya taşıyın.',
    'forum_adm_no_parent' => '— Ana Kategori —',

    /* Rütbe Yönetimi */
    'forum_adm_rank_manage' => 'Rütbe Yönetimi',
    'forum_adm_rank_add' => 'Yeni Rütbe Ekle',
    'forum_adm_rank_name' => 'Rütbe Adı',
    'forum_adm_rank_points' => 'Puan Sınırı',
    'forum_adm_rank_color' => 'Renk',
    'forum_adm_rank_icon' => 'FA İkon',
    'forum_adm_rank_edit' => 'Rütbeyi Düzenle',
    'forum_adm_rank_new' => 'Yeni Rütbe',
    'forum_adm_rank_badge' => 'Rozet Metni',
    'forum_adm_rank_saved' => 'Rütbe kaydedildi.',
    'forum_adm_rank_del' => 'Rütbe silindi.',

    /* Yasaklı Kelimeler */
    'forum_adm_word_manage' => 'Yasaklı Kelimeler',
    'forum_adm_word_add' => 'Yeni Kelime Ekle',
    'forum_adm_word_word' => 'Yasaklı Kelime',
    'forum_adm_word_repl' => 'Yerine Gelecek',
    'forum_adm_word_edit' => 'Kelimeyi Düzenle',
    'forum_adm_word_new' => 'Yeni Kelime',
    'forum_adm_word_saved' => 'Kelime kaydedildi.',
    'forum_adm_word_del' => 'Kelime silindi.',

    /* Şikayetler */
    'forum_adm_complaints_title' => 'Forum Şikayetleri',
    'forum_adm_complaint_from' => 'Şikayet Eden',
    'forum_adm_complaint_content' => 'İçerik',
    'forum_adm_complaint_del' => 'Şikayet silindi.',

    /* Mod Logları */
    'forum_adm_logs_title' => 'Moderasyon Logları',
    'forum_adm_log_mod' => 'Moderatör',
    'forum_adm_log_action' => 'İşlem',
    'forum_adm_log_topic' => 'Konu ID',
    'forum_adm_log_post' => 'Mesaj ID',
    'forum_adm_log_ip' => 'IP',

    /* Log Aksiyon Etiketleri */
    'forum_log_lock' => 'Kilitle',
    'forum_log_unlock' => 'Kilidini Aç',
    'forum_log_pin' => 'Sabitle',
    'forum_log_unpin' => 'Sabitlemeyi Kaldır',
    'forum_log_del_topic' => 'Konu Sil',
    'forum_log_del_post' => 'Mesaj Sil',
    'forum_log_edit_mod' => 'Mesaj Düzenle',
    'forum_log_edit_own' => 'Kendi Mesajı Düzenle',

    /* Ayarlar ve Bakım */
    'forum_adm_settings_title' => 'Forum Ayarları',
    'forum_adm_maintenance' => 'Bakım İşlemleri',
    'forum_adm_recalc' => 'İstatistikleri Yeniden Hesapla',
    'forum_adm_clear_cache' => 'Önbelleği Temizle',
    'forum_adm_settings_saved' => 'Ayarlar güncellendi.',
    'forum_adm_recalc_running' => 'Hesaplama zaten çalışıyor. Lütfen bekleyin.',
    'forum_adm_recalc_done' => 'İstatistikler yeniden hesaplandı.',
    'forum_adm_cache_cleared' => 'Forum önbelleği temizlendi.',

    /* Ayar Etiketleri */
    'forum_set_posts_per_page' => 'Sayfa Başına Mesaj',
    'forum_set_topics_per_page' => 'Sayfa Başına Konu',
    'forum_set_guest_view' => 'Misafirler Görebilir (1/0)',
    'forum_set_min_post' => 'Min. Mesaj Uzunluğu',
    'forum_set_max_post' => 'Max. Mesaj Uzunluğu',
    'forum_set_flood' => 'Flood Süresi (sn)',
    'forum_set_allow_attach' => 'Ek Dosyaya İzin Ver (1/0)',
    'forum_set_max_attach' => 'Max Dosya Boyutu (byte)',
    'forum_set_allowed_ext' => 'İzin Verilen Uzantılar',
    'forum_set_points_topic' => 'Konu Açma Puanı',
    'forum_set_points_reply' => 'Mesaj Yazma Puanı',
    'forum_set_points_like' => 'Beğeni Alma Puanı',
    'forum_set_approval' => 'Onay Kuyruğu (ilk kaç mesaja kadar)',
    'forum_set_bump_cd' => 'Bump Bekleme Süresi (saat)',

    /* Konular */
    'forum_adm_topics_title' => 'Tüm Konular',
    'forum_adm_topics_cat' => 'Kategori',
    'forum_adm_topics_author' => 'Yazar',
    'forum_adm_topics_del' => 'Konu silindi.',

    /* Onay Kuyruğu */
    'forum_adm_pending_title' => 'Onay Bekleyen Mesajlar',
    'forum_adm_pending_user' => 'Kullanıcı',
    'forum_adm_pending_preview' => 'Önizleme',
    'forum_adm_pending_approve' => 'Onayla',
    'forum_adm_pending_reject_btn' => 'Reddet',
    'forum_adm_pending_empty' => 'Onay bekleyen mesaj yok.',
    'forum_adm_pending_ok' => 'Mesaj yayınlandı.',
    'forum_adm_pending_reject' => 'Mesaj silindi.',

    /* Dashboard İstatistikleri */
    'forum_adm_stat_topics' => 'Toplam Konu',
    'forum_adm_stat_posts' => 'Toplam Mesaj',
    'forum_adm_stat_users' => 'Toplam Üye',
    'forum_adm_stat_writers' => 'Forum Yazanlar',
    'forum_adm_stat_complaints' => 'Şikayetler',
    'forum_adm_stat_last_reg' => 'Son Kayıt',
    'forum_adm_last_post' => 'Son Mesaj',
    'forum_adm_last_post_by' => 'tarafından',
    'forum_adm_recent_topics' => 'Son 10 Konu',
    'forum_adm_recent_posts' => 'Son 5 Mesaj',
    'forum_adm_top_users' => 'En Aktif Üyeler',
    'forum_adm_quick_actions' => 'Hızlı İşlemler',

    /* Taşıma Modalı */
    'forum_adm_move_title' => 'Konuyu Taşı',
    'forum_adm_move_label' => 'Hedef kategoriyi seçin:',
    'forum_adm_move_btn' => 'Taşı',
    'forum_adm_move_ok' => 'Konu başarıyla taşındı!',

));
?>