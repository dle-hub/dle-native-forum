<?php
/*
=====================================================
 DLE Native Forum (Nexus) - Dil Dosyası (Türkçe)
-----------------------------------------------------
 https://github.com/dlehub
-----------------------------------------------------
 Copyright (c) 2024-2026 Dlehub & Elegance
=====================================================
 File: language/Turkish/forum.lng.php
=====================================================
*/

global $lang;

$lang = array_merge((array)$lang, array(

// ══════════════════════════════════════════════════
// GENEL / CORE
// ══════════════════════════════════════════════════
'forum_error'                    => 'Hata',
'forum_warning'                  => 'Uyarı',
'forum_success'                  => 'Başarılı',
'forum_save'                     => 'Kaydet',
'forum_cancel'                   => 'İptal',
'forum_action'                   => 'İşlem',
'forum_confirm_delete'           => 'Silmek istediğinize emin misiniz?',
'forum_confirm_del_post'         => 'Bu mesajı silmek istediğinize emin misiniz?',
'forum_date'                     => 'Tarih',
'forum_new'                      => 'YENİ',
'forum_forum'                    => 'Forum',
'forum_title'                    => 'Forum',
'forum_home'                     => 'Ana Sayfa',
'forum_topic'                    => 'Konu',
'forum_post'                     => 'Mesaj',
'forum_reply'                    => 'Cevap',
'forum_replies'                  => 'Cevap',
'forum_replies_count'            => 'Cevaplar',
'forum_views'                    => 'Görüntülenme',
'forum_views_count'              => 'Görüntülenme',
'forum_status'                   => 'Durum',
'forum_pin'                      => 'Sabit',
'forum_lock'                     => 'Kilitli',
'forum_guest'                    => 'Misafir',
'forum_member'                   => 'Üye',
'forum_no_posts'                 => 'Henüz mesaj yok',
'forum_topic_author'             => 'Açan:',
'forum_stats'                    => 'İstatistikler',
'forum_last_posts'               => 'Son Mesajlar',
'forum_new_topic'                => 'Yeni Konu',
'forum_new_topic_btn'            => 'Yeni Konu Aç',
'forum_deleted_topic'            => 'Silinmiş konu',
'forum_no_prefix'                => 'Önek Yok',
'forum_ph_tags'                  => 'etiket1, etiket2...',
'forum_all_cats'                 => 'Tüm Kategoriler',
'forum_topics'                   => 'Konular',
'forum_posts'                    => 'Mesajlar',
'forum_group'                    => 'Grup',
'forum_active'                   => 'Aktif',
'forum_passive'                  => 'Pasif',
'forum_expand_all'               => 'Tümünü Aç',
'forum_collapse_all'             => 'Tümünü Kapat',
'forum_order_fail'               => 'Sıralama kaydedilemedi!',
'forum_order_ok'                 => 'Kategori sıralaması güncellendi.',

// ══════════════════════════════════════════════════
// YENİ TPL ETİKETLERİ (v1.2.4)
// ══════════════════════════════════════════════════
'forum_attachments'              => 'Ekler',
'forum_edit'                     => 'Düzenle',
'forum_delete'                   => 'Sil',
'forum_quote'                    => 'Alıntı',
'forum_like'                     => 'Beğen',
'forum_dislike'                  => 'Beğenme',
'forum_pm_send'                  => 'Özel Mesaj',
'forum_edited'                   => 'düzenlendi',
'forum_posts'                    => 'Mesaj',
'forum_points'                   => 'Puan',
'forum_rep'                      => 'Rep',
'forum_follow'                   => 'Takip Et',
'forum_unfollow'                 => 'Takipten Çık',
'forum_bump'                     => 'Güncelle',
'forum_unlock'                   => 'Kilidi Aç',
'forum_unpin'                    => 'Sabitten Kaldır',
'forum_delete_topic'             => 'Konuyu Sil',
'forum_send'                     => 'Gönder',
'forum_mark_read'                => 'Tümünü Okundu Say',
'forum_mark_all_read'            => 'Tümünü Okundu İşaretle',
'forum_unanswered'               => 'Yanıtlanmamış Konular',
'forum_unanswered_desc'          => 'Cevap bekleyen konular.',
'forum_no_unanswered'            => 'Yanıtlanmamış konu yok.',
'forum_active'                   => 'Aktif Konular',
'forum_active_desc'              => 'Belirtilen zaman diliminde güncellenen forum konuları.',
'forum_no_active'                => 'Bu dönemde aktif konu yok.',
'forum_filter_today'             => 'Bugün',
'forum_filter_days'              => 'Son %d Gün',
'forum_notif_'                   => 'Bildirim',
'forum_notif_like'               => 'Beğeni',
'forum_notif_reply'              => 'Cevap',
'forum_notif_mention'            => 'Bahsetme',
'forum_notif_quote'              => 'Alıntı',

// ══════════════════════════════════════════════════
// HATA MESAJLARI
// ══════════════════════════════════════════════════
'forum_err_login_pm'             => 'Özel mesaj göndermek için giriş yapmalısınız.',
'forum_err_pm_user'              => 'Geçerli bir kullanıcı bulunamadı.',
'forum_err_login_notif'          => 'Bildirimleri görüntülemek için giriş yapmalısınız.',
'forum_err_no_cats'              => 'Forum kategorisi bulunamadı.',
'forum_err_no_topics'            => 'Bu kategoride konu bulunmuyor.',
'forum_err_search_empty'         => 'Arama terimi boş olamaz.',
'forum_err_search_min'           => 'Arama terimi en az 3 karakter olmalıdır.',
'forum_err_cat_invalid'          => 'Geçersiz kategori.',
'forum_err_cat_not_found'        => 'Kategori bulunamadı.',
'forum_err_login_topic'          => 'Konu oluşturmak için giriş yapmalısınız.',
'forum_err_no_perm_cat'          => 'Bu kategoriye konu açma izniniz yok.',
'forum_err_cat_select'           => 'Lütfen bir kategori seçin.',
'forum_err_csrf_retry'           => 'Güvenlik doğrulaması başarısız, lütfen tekrar deneyin.',
'forum_err_title_len'            => 'Başlık en az 3 karakter olmalıdır.',
'forum_err_title_long'           => 'Başlık en fazla 255 karakter olabilir.',
'forum_err_content_len'          => 'Mesaj içeriği en az 10 karakter olmalıdır.',
'forum_err_must_login'           => 'Bu işlem için giriş yapmalısınız.',
'forum_err_no_permission'        => 'Bu işlemi gerçekleştirme izniniz yok.',
'forum_err_title_short'          => 'Başlık en az 3 karakter olmalıdır.',
'forum_err_post_short'           => 'Mesaj içeriği en az 10 karakter olmalıdır.',
'forum_err_post_min'             => 'Mesaj en az %d karakter olmalıdır.',
'forum_err_topic_not_found'      => 'Konu bulunamadı.',
'forum_err_topic_locked'         => 'Bu konu kilitli, cevap yazamazsınız.',
'forum_err_post_not_found'       => 'Mesaj bulunamadı.',
'forum_err_own_like'             => 'Kendi mesajınızı beğenemezsiniz.',
'forum_err_complaint_short'      => 'Şikayet nedeni en az 5 karakter olmalıdır.',
'forum_err_complaint_dup'        => 'Bu mesaj için zaten bir şikayetiniz var.',
'forum_err_msg_not_found'        => 'Mesaj bulunamadı.',
'forum_err_bump_locked'          => 'Kilitli bir konuyu güncelleyemezsiniz.',
'forum_err_bump_owner'           => 'Sadece kendi konunuzu güncelleyebilirsiniz.',
'forum_err_bump_cooldown'        => 'Konuyu tekrar güncellemek için %s beklemelisiniz.',
'forum_err_move_cat'             => 'Hedef kategori bulunamadı.',
'forum_err_invalid_action'       => 'Geçersiz işlem.',
'forum_err_upload_none'          => 'Yüklenecek dosya seçilmedi.',
'forum_err_upload_disabled'      => 'Dosya yükleme özelliği kapalı.',
'forum_err_upload_error'         => '%s dosyası yüklenirken hata oluştu.',
'forum_err_upload_size'          => '%s dosyası boyut sınırını aşıyor (Maks: %s MB).',
'forum_err_upload_ext'           => '%s dosya türüne izin verilmiyor.',
'forum_err_pm_self'              => 'Kendinize mesaj gönderemezsiniz.',
'forum_err_pm_title'             => 'Mesaj başlığı en az 2 karakter olmalıdır.',
'forum_err_pm_text'              => 'Mesaj içeriği en az 5 karakter olmalıdır.',
'forum_err_user_not_found'       => 'Kullanıcı bulunamadı.',
'err_flood_blocked'              => 'Çok fazla mesaj denemesi. Hesap geçici olarak engellendi.',
'err_flood_ip'                   => 'IP adresinizden çok fazla istek gönderildi. Lütfen bekleyin.',
'err_flood_post'                 => 'Ardı ardına mesaj göndermek için lütfen biraz bekleyin.',
'forum_err_csrf'                 => 'Güvenlik doğrulaması başarısız!',
'forum_err_db'                   => 'Veritabanı hatası oluştu: ',
'forum_err_upload_mime'          => 'Dosya türü doğrulanamadı!',
'forum_err_pm_fail'              => 'PM gönderilemedi',
'forum_err_no_link_perm'         => 'Grubunuzun link paylaşma izni bulunmuyor. Yöneticilerle iletişime geçin.',
'forum_err_pm_name'              => 'Geçersiz alıcı adı!',
'forum_err_no_edit_perm'         => 'Bu mesajı düzenleme yetkiniz yok!',
'forum_err_no_edit_time'         => 'Bu mesaj düzenlenemez!',
'forum_err_invalid_msg'          => 'Geçersiz mesaj formatı.',
'forum_err_msg_len'              => 'Mesaj en az 3 karakter olmalıdır.',
'forum_adm_topic_title_empty'    => 'Konu başlığı boş olamaz!',
'forum_adm_topic_updated'        => 'Konu başarıyla güncellendi!',

// ══════════════════════════════════════════════════
// BAŞARILI MESAJLARI
// ══════════════════════════════════════════════════
'forum_ok_pm_sent'               => 'Mesaj başarıyla gönderildi.',
'forum_ok_approval_pending'      => 'Mesajınız onay bekliyor.',
'forum_ok_complaint'             => 'Şikayetiniz başarıyla iletildi.',
'forum_ok_bump'                  => 'Konu başarıyla güncellendi.',

// ══════════════════════════════════════════════════
// ARAMA
// ══════════════════════════════════════════════════
'forum_search'                   => 'Arama',
'forum_search_no_results'        => 'Aramanızla eşleşen sonuç bulunamadı.',
'forum_search_results'           => 'Arama Sonuçları',
'forum_topics_found'             => '%d konu bulundu.',

// ══════════════════════════════════════════════════
// EDITOR
// ══════════════════════════════════════════════════
'forum_edit_msg'                 => 'Mesajı Düzenle',
'forum_write_reply'              => 'Cevap Yaz',
'forum_topic_locked'             => 'Konu Kilitli',
'forum_must_login'               => 'Giriş Yapmalısınız',
'forum_attach_label'             => 'Dosya Ekle',

// ══════════════════════════════════════════════════
// MODERASYON LOG ETİKETLERİ
// ══════════════════════════════════════════════════
'forum_log_lock'                 => 'Kilitlendi',
'forum_log_unlock'               => 'Kilidi Açıldı',
'forum_log_pin'                  => 'Sabitlendi',
'forum_log_unpin'                => 'Sabitten Kaldırıldı',
'forum_log_del_topic'            => 'Konu Silindi',
'forum_log_del_post'             => 'Mesaj Silindi',
'forum_log_edit_mod'             => 'Mod Düzenleme',
'forum_log_edit_own'             => 'Kendi Düzenleme',
'forum_log_move'                 => 'Taşındı',
'forum_log_bump'                 => 'Güncellendi',

// ══════════════════════════════════════════════════
// ÖZEL MESAJLAR
// ══════════════════════════════════════════════════
'forum_pm'                       => 'Özel Mesajlar',
'forum_pm_not_found'             => 'Mesaj bulunamadı.',
'forum_pm_empty'                 => 'Henüz mesaj yok.',
'forum_notifications'            => 'Bildirimler',
'forum_no_notifs'                => 'Henüz bildirim yok.',

// ══════════════════════════════════════════════════
// PROFİL / KULLANICI
// ══════════════════════════════════════════════════
'forum_no_user_posts'            => 'Bu kullanıcının henüz forum mesajı yok.',

// ══════════════════════════════════════════════════
// ETİKETLER
// ══════════════════════════════════════════════════
'forum_tags'                     => 'Etiketler',
'forum_tags_desc'                => 'Forumda en çok kullanılan etiketler.',
'forum_no_tags'                  => 'Henüz etiket yok.',
'forum_no_topics_tag'            => 'Bu etiketle konu bulunamadı.',
'forum_tagged_topics'            => 'Bu etikete sahip konular',

// ══════════════════════════════════════════════════
// ADMIN PANEL - GENEL
// ══════════════════════════════════════════════════
'forum_admin_title'              => 'DLE Native Forum',
'forum_admin_subtitle'           => 'Admin Panel',
'forum_adm_ver_new'              => 'v%s mevcut!',
'forum_adm_ver_ok'               => 'Güncel',

// ADMIN PANEL - NAVIGASYON
'forum_adm_nav_summary'          => 'Özet',
'forum_adm_nav_cats'             => 'Kategoriler',
'forum_adm_nav_ranks'            => 'Rütbeler',
'forum_adm_nav_words'            => 'Yasaklı Kelimeler',
'forum_adm_nav_complaints'       => 'Şikayetler',
'forum_adm_nav_topics'           => 'Konular',
'forum_adm_nav_pending'          => 'Onay Bekleyenler',
'forum_adm_nav_logs'             => 'Moderasyon Logları',
'forum_adm_nav_settings'         => 'Ayarlar',
'forum_adm_nav_prefixes'         => 'Önekler',
'forum_adm_nav_tags'             => 'Etiketler',
'forum_adm_nav_promotions'       => 'Grup Terfisi',

// ADMIN PANEL - KATEGORİLER
'forum_adm_cat_saved'            => 'Kategori başarıyla kaydedildi.',
'forum_adm_cat_added'            => 'Yeni kategori başarıyla eklendi.',
'forum_adm_cat_del_subs'         => 'Bu kategorinin alt kategorileri var. Önce alt kategorileri silin.',
'forum_adm_cat_del_topics'       => 'Bu kategoride konular var. Önce konuları silin veya taşıyın.',
'forum_adm_cat_del'              => 'Kategori başarıyla silindi.',
'forum_adm_cat_manage'           => 'Kategori Yönetimi',
'forum_adm_cat_add'              => 'Yeni Kategori Ekle',
'forum_adm_no_cats'              => 'Henüz kategori eklenmemiş.',
'forum_adm_cat_edit'             => 'Kategoriyi Düzenle',
'forum_adm_cat_new'              => 'Yeni Kategori',
'forum_adm_cat_name'             => 'Kategori Adı',
'forum_adm_cat_desc'             => 'Açıklama',
'forum_adm_parent_cat'           => 'Üst Kategori',
'forum_adm_cat_icon'             => 'İkon',
'forum_adm_cat_icon_fa'          => 'FontAwesome sınıfı, örn: fa-folder',
'forum_adm_priv_cat'             => 'Özel Kategori',
'forum_adm_priv_cat_desc'        => 'sadece belirli gruplara görünür',
'forum_adm_require_approval'     => 'Ön Onay Zorunlu',
'forum_adm_require_approval_desc'=> 'bu kategorideki konular admin onayına düşer',
'forum_adm_allowed_groups'       => 'İzin Verilen Gruplar',
'forum_adm_groups_comma'         => 'virgülle, örn: 2,3',
'forum_adm_read_groups'          => 'Okuma Grupları',
'forum_adm_write_groups'         => 'Yazma Grupları',
'forum_main_cat'                 => 'Ana Kategori',
'forum_ph_cat_name'              => 'Kategori adını girin',
'forum_ph_cat_desc'              => 'Kısa açıklama (isteğe bağlı)',

// ADMIN PANEL - RÜTBELER
'forum_adm_rank_saved'           => 'Rütbe başarıyla kaydedildi.',
'forum_adm_rank_del'             => 'Rütbe başarıyla silindi.',
'forum_adm_rank_manage'          => 'Rütbe Yönetimi',
'forum_adm_rank_add'             => 'Yeni Rütbe Ekle',
'forum_adm_rank_points'          => 'Min. Puan',
'forum_adm_rank_color'           => 'Renk',
'forum_adm_rank_icon'            => 'İkon',
'forum_adm_rank_edit'            => 'Rütbeyi Düzenle',
'forum_adm_rank_new'             => 'Yeni Rütbe',
'forum_adm_rank_name'            => 'Rütbe Adı',
'forum_adm_rank_badge'           => 'Rozet Metni',

// ADMIN PANEL - ÖNEKLER
'forum_adm_prefix_saved'         => 'Önek başarıyla kaydedildi.',
'forum_adm_prefix_added'         => 'Önek başarıyla eklendi.',
'forum_adm_prefix_del'           => 'Önek başarıyla silindi.',
'forum_adm_prefixes'             => 'Önek Yönetimi',
'forum_adm_prefix_add'           => 'Yeni Önek Ekle',
'forum_adm_prefix_title'         => 'Önek Adı',
'forum_adm_prefix_cat'           => 'Kategori',
'forum_adm_prefix_color'         => 'Yazı Rengi',
'forum_adm_prefix_bg_color'      => 'Arka Plan Rengi',
'forum_adm_prefix_order'         => 'Sıra',
'forum_adm_prefix_text_color'    => 'Yazı Rengi',
'forum_adm_prefix_bg_color'      => 'Arka Plan Rengi',
'forum_adm_prefix_edit'          => 'Öneki Düzenle',
'forum_adm_prefix_new'           => 'Yeni Önek',

// ADMIN PANEL - ETİKETLER
'forum_adm_tag_saved'            => 'Etiket başarıyla kaydedildi.',
'forum_adm_tag_del'              => 'Etiket başarıyla silindi.',
'forum_adm_tags_manage'          => 'Etiket Yönetimi',
'forum_adm_tag_name'             => 'Etiket Adı',
'forum_adm_tag_slug'             => 'Slug',
'forum_adm_tag_count'            => 'Kullanım',
'forum_adm_tag_edit'             => 'Etiketi Düzenle',

// ADMIN PANEL - YASAKLI KELİMELER
'forum_adm_word_saved'           => 'Kelime başarıyla kaydedildi.',
'forum_adm_word_del'             => 'Kelime başarıyla silindi.',
'forum_adm_word_manage'          => 'Yasaklı Kelime Yönetimi',
'forum_adm_word_add'             => 'Yeni Kelime Ekle',
'forum_adm_word_word'            => 'Kelime',
'forum_adm_word_repl'            => 'Yerine Geçen',
'forum_adm_word_edit'            => 'Kelimeyi Düzenle',
'forum_adm_word_new'             => 'Yeni Kelime',

// ADMIN PANEL - ŞİKAYETLER
'forum_adm_complaint_del'        => 'Şikayet başarıyla silindi.',
'forum_adm_complaints_title'     => 'Şikayet Yönetimi',
'forum_adm_complaint_from'       => 'Şikayetçi',
'forum_adm_complaint_content'    => 'İçerik',

// ADMIN PANEL - LOG
'forum_adm_logs_title'           => 'Moderasyon Logları',
'forum_adm_log_mod'              => 'Moderatör',
'forum_adm_log_action'           => 'İşlem',
'forum_adm_log_topic'            => 'Konu ID',
'forum_adm_log_post'             => 'Mesaj ID',
'forum_adm_log_ip'               => 'IP Adresi',

// ADMIN PANEL - AYARLAR
'forum_adm_settings_saved'       => 'Ayarlar başarıyla kaydedildi.',
'forum_adm_settings_title'       => 'Forum Ayarları',
'forum_set_posts_per_page'       => 'Sayfa başına mesaj',
'forum_set_topics_per_page'      => 'Sayfa başına konu',
'forum_set_topics_per_page_desc' => 'Sayfa başına gösterilecek konu sayısı.',
'forum_set_guest_view'           => 'Misafir görüntüleme (1/0)',
'forum_set_guest_view_desc'      => 'Misafirler forumu görüntüleyebilsin mi?',
'forum_set_min_post'             => 'Min. mesaj uzunluğu',
'forum_set_min_post_desc'        => 'Minimum mesaj karakter sayısı.',
'forum_set_max_post'             => 'Max. mesaj uzunluğu',
'forum_set_max_post_desc'        => 'Maksimum mesaj karakter sayısı.',
'forum_set_allow_member_edit'    => 'Üye Mesaj Düzenleme',
'forum_set_allow_member_edit_desc' => 'Üyeler kendi yazdıkları mesajları düzenleyebilsin mi? Kapalıysa yalnızca Admin ve Editör düzenleyebilir.',
'forum_set_flood'                => 'Flood süre (sn)',
'forum_set_allow_attach'         => 'Dosya eki (1/0)',
'forum_set_max_attach'           => 'Max. dosya boyutu (byte)',
'forum_set_allowed_ext'          => 'İzin verilen dosya türleri',
'forum_set_points_topic'         => 'Yeni konu puan',
'forum_set_points_reply'         => 'Cevap puan',
'forum_set_points_like'          => 'Beğeni puan',
'forum_set_approval'             => 'Onay eşiği (0=kapalı)',
'forum_set_bump_cd'              => 'Güncelleme bekleme (saat)',
'forum_set_sticky_op'            => 'Sabit ilk mesaj (1/0)',
'forum_set_link_min_posts'       => 'Link için min. mesaj',
'forum_set_link_min_points'      => 'Link için min. puan',
'forum_set_captcha'              => 'Captcha (1/0)',
'forum_set_promotion'            => 'Otomatik terfi (1/0)',
'forum_clean_readlog_days'       => 'Okuma geçmişi temizleme (gün)',

// ADMIN PANEL - BAKIM
'forum_adm_maintenance'          => 'Bakım İşlemleri',
'forum_adm_recalc'               => 'İstatistikleri Yeniden Hesapla',
'forum_adm_clear_cache'          => 'Önbelleği Temizle',
'forum_adm_recalc_running'       => 'Bir yeniden hesaplama şu an çalışıyor, lütfen 5 dakika bekleyin.',
'forum_adm_recalc_done'          => 'İstatistikler başarıyla yeniden hesaplandı.',
'forum_adm_cache_cleared'        => 'Önbellek başarıyla temizlendi.',

// ADMIN PANEL - KONULAR
'forum_adm_topic_list'           => 'Konu Listesi',
'forum_adm_no_topics'            => 'Kayıtlı konu bulunmuyor.',
'forum_adm_topics_found'         => 'konu bulundu',
'forum_adm_topic_title'          => 'Konu Başlığı',
'forum_adm_topic_cat'            => 'Kategori',
'forum_adm_topics_author'        => 'Yazar',
'forum_adm_select_all'           => 'Tümünü Seç',
'forum_adm_action_select'        => 'İşlem Seçin',
'forum_adm_unpin'                => 'Sabitlemeyi Kaldır',
'forum_bulk_move'                => 'Taşı',
'forum_adm_apply'                => 'Uygula',
'forum_adm_bulk_confirm'         => 'Seçili konulara bu işlemi uygulamak istediğinize emin misiniz?',
'forum_adm_bulk_done'            => 'Toplu işlem başarıyla tamamlandı.',
'forum_adm_sel_cat'              => 'Kategori Seç',

// ADMIN PANEL - KONU DÜZENLE
'forum_adm_edit_topic'           => 'Konuyu Düzenle',
'forum_adm_back'                 => 'Geri Dön',
'forum_adm_topic_prefix'         => 'Önek',
'forum_adm_topic_desc'           => 'Açıklama',
'forum_adm_topic_tags'           => 'Etiketler',
'forum_adm_topic_content'        => 'İçerik',
'forum_adm_topic_options'        => 'Seçenekler',
'forum_adm_pin_topic'            => 'Sabit Konu Yap',
'forum_adm_lock_topic'           => 'Konuyu Kilitle',

// ADMIN PANEL - ONAY BEKLEYENLER
'forum_adm_pending_ok'           => 'Başarıyla onaylandı.',
'forum_adm_pending_reject'       => 'Başarıyla reddedildi.',
'forum_adm_pending_title'        => 'Onay Bekleyenler',
'forum_adm_pending_user'         => 'Kullanıcı',
'forum_adm_pending_preview'      => 'Önizleme',
'forum_adm_pending_approve'      => 'Onayla',
'forum_adm_pending_reject_btn'   => 'Reddet',
'forum_adm_pending_empty'        => 'Onay bekleyen mesaj yok.',
'forum_adm_pending_topics_title' => 'Onay Bekleyen Konular',
'forum_adm_pending_posts_title'  => 'Onay Bekleyen Mesajlar',

// ADMIN PANEL - GRUP TERFİSİ
'forum_adm_promotion_saved'      => 'Terfi kuralı başarıyla kaydedildi.',
'forum_adm_promotion_del'        => 'Terfi kuralı başarıyla silindi.',
'forum_adm_promotions_title'     => 'Otomatik Grup Terfi Kuralları',
'forum_adm_promotion_add'        => 'Yeni Terfi Kuralı Ekle',
'forum_adm_from_group'           => 'Mevcut Grup',
'forum_adm_to_group'             => 'Hedef Grup',
'forum_adm_min_points'           => 'Min Puan',
'forum_adm_min_likes'            => 'Min Beğeni',
'forum_adm_min_posts'            => 'Min Mesaj',
'forum_adm_rule_active'          => 'Kural Aktif',
'forum_adm_promotion_edit'       => 'Terfi Kuralı Düzenle',
'forum_adm_promotion_new'        => 'Yeni Terfi Kuralı',
'forum_adm_no_promotions'        => 'Henüz terfi kuralı tanımlanmamış.',

// ADMIN PANEL - DASHBOARD
'forum_adm_stat_topics'          => 'Konular',
'forum_adm_stat_posts'           => 'Mesajlar',
'forum_adm_stat_users'           => 'Üyeler',
'forum_adm_stat_writers'         => 'Yazarlar',
'forum_adm_stat_complaints'      => 'Şikayetler',
'forum_adm_stat_last_reg'        => 'Son Kayıt',
'forum_adm_last_post'            => 'Son Mesaj',
'forum_adm_last_post_by'         => 'tarafından',
'forum_adm_recent_topics'        => 'Son Konular',
'forum_adm_recent_posts'         => 'Son Mesajlar',
'forum_adm_top_users'            => 'En Aktif Kullanıcılar',
'forum_adm_prefix_sel'           => '-- Önek Seç --',
'forum_adm_topic_desc_label'     => 'Konu Açıklaması (Opsiyonel)',
'forum_adm_topic_desc_ph'        => 'Konuyu özetleyen kısa bir alt başlık girin...',
'forum_adm_quick_actions'        => 'Hızlı İşlemler',
'forum_adm_tab_general'          => 'Genel Ayarlar',
'forum_adm_tab_security'         => 'Güvenlik',
'forum_adm_tab_gamification'     => 'Oyunlaştırma',
'forum_adm_tab_maintenance'      => 'Bakım',

// ADMIN PANEL - RANKS
'forum_adm_rank_type'            => 'Tür',
'forum_adm_rank_for_group'       => 'Grup Bazlı Rütbe',
'forum_adm_rank_for_group_desc'  => 'Sadece belirli gruplara özel rütbe. 0 = Herkes (puan bazlı).',
'forum_adm_rank_all_groups'      => 'Tüm Gruplar (Puan Bazlı)',
'forum_group_admin'              => 'Grup 1: Yönetici',
'forum_group_editor'             => 'Grup 2: Editör',
'forum_group_moderator'          => 'Grup 3: Moderatör',
'forum_adm_rank_saved'           => 'Rütbe başarıyla kaydedildi.',

// ADMIN PANEL - IP YASAKLARI
'forum_adm_nav_bans'             => 'IP Yasakları',
'forum_adm_bans_title'           => 'IP Yasakları',
'forum_adm_ban_add'              => 'Ban Ekle',
'forum_adm_ban_ip'               => 'IP Adresi',
'forum_adm_ban_reason'           => 'Sebep',
'forum_adm_ban_contact'          => 'İletişim (e-posta)',
'forum_adm_ban_days'             => 'Süre (gün, 0=kalıcı)',
'forum_adm_ban_delete'           => 'Sil',
'forum_adm_ban_permanent'        => 'Kalıcı',
'forum_adm_ban_expires'          => 'Bitiş',
'forum_adm_ban_by'               => 'Yöneten',
'forum_adm_ban_date'             => 'Tarih',
'forum_adm_bans_empty'           => 'Aktif ban bulunmuyor.',
'forum_adm_ban_added'            => 'Ban başarıyla eklendi.',
'forum_adm_ban_deleted'          => 'Ban başarıyla silindi.',

// ADMIN PANEL - SEO
'forum_adm_tab_seo'              => 'SEO Ayarları',
'forum_set_schema_jsonld'        => 'Schema.org JSON-LD',
'forum_set_schema_jsonld_desc'   => 'Konu sayfalarına SEO için yapısal veri (DiscussionForumPosting) ekle. Google zengin sonuçlar için kullanır.',
'forum_set_nested_quotes'        => 'İç İçe Alıntı',
'forum_set_nested_quotes_desc'   => 'Kullanıcılar [quote=Ad]...[/quote] ile iç içe alıntı yapabilsin',
'forum_set_quote_depth'          => 'Alıntı Derinliği',
'forum_set_quote_depth_desc'     => 'İç içe alıntı maksimum derinliği (1-10). Daha yüksek = daha fazla iç içe kutu.',
'forum_set_canonical'            => 'Canonical URL',
'forum_set_canonical_desc'       => 'Her konu sayfasına canonical link tag ekle (duplicate content önler)',
'forum_set_meta_desc'            => 'Meta Açıklama',
'forum_set_meta_desc_desc'       => 'Konu sayfasında ilk mesajdan otomatik meta description oluştur',
'forum_set_meta_desc_len'        => 'Meta Açıklama Uzunluğu',
'forum_set_meta_desc_len_desc'   => 'Otomatik meta description maksimum karakter sayısı',

));
?>