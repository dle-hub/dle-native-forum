
🚀 DLE Native Forum — Ultimate Core v1.1.3+

DataLife Engine için profesyonel forum eklentisi.
Object-Oriented PHP, AJAX, SEO uyumlu, XenForo tarzı arayüz, yönetim paneli ile tam kontrol.

📌 İçindekiler

1. Özellikler
2. Gereksinimler
3. Dosya Yapısı
4. Kurulum (Adım Adım)
5. Kurulum Sonrası Yapılması Gerekenler
6. Tema Yapımcıları İçin
7. Sık Karşılaşılan Hatalar ve Çözümleri
8. Güncelleme (v1.1.2 → v1.1.3)
9. Etiket Referansı
10. S.S.S.
11. Katkıda Bulunanlar
12. Lisans

---

Özellikler

· Tam forum sistemi: Kategoriler, konular, mesajlar.
· AJAX ile sayfa yenilemeden beğeni, takip, düzenleme.
· XenForo tarzı hiyerarşik kategori listesi.
· Çift SEO motoru: DLE 18 (.htaccess) ve DLE 19+ (DLEUrl) desteği.
· Konu önekleri (Prefix) ve etiket sistemi (Tags).
· Sticky OP: İlk mesajı tüm sayfalarda sabitler.
· Okundu / okunmadı takibi (üye ve misafir).
· Gelişmiş yönetim paneli: Kategori drag-drop, toplu moderasyon, konu düzenleme, log kayıtları.
· DLE native conversations entegrasyonu (PM'ler DLE'nin kendi mesaj sistemini kullanır).
· Rütbe sistemi, şikayetler, yasaklı kelimeler, dosya yükleme ve çok daha fazlası.

---

Gereksinimler

· DLE sürümü: 18.0 ve üzeri (19+ önerilir).
· PHP: 7.4+ (8.1+ önerilir).
· MySQL: 5.7+ veya MariaDB 10.0+.
· Eklenti: DLE'nin orijinal dosyaları değiştirilmez, çakışma yaratmaz.

---

Dosya Yapısı

```
/engine/forum/          → Forum çekirdeği (sınıflar, aksiyonlar)
/engine/inc/forum.php   → Yönetim paneli
/engine/modules/        → Profil ve yan blok entegrasyonları
/templates/Default/forum/ → Örnek tema dosyaları (TPL + CSS)
/language/              → Dil dosyaları (forum.lng.php)
```

Eklentiyi kurduğunuzda sadece gerekli dosyalar sisteme eklenir. Hiçbir çekirdek DLE dosyası değiştirilmez.

---

Kurulum (Adım Adım)

⚠️ Önemli: Sadece XML dosyasını yüklemek yetmez. Aşağıdaki tüm adımları sırayla uygulayın.

1. XML Kurulumu

1. DLE Yönetim Paneli → Eklentiler → Eklenti Yükle.
2. dle-native-forum-ultimate-core-v113.xml dosyasını seç ve yükle.
3. Eklentiyi etkinleştir.
4. Eklenti otomatik olarak şunları yapar:
   · Gerekli veritabanı tablolarını ve sütunlarını oluşturur.
   · .htaccess dosyasına SEO kurallarını ekler (DLE 18 için).

2. Dil Dosyasını Yükleme

1. Repodaki language/Turkish/forum.lng.php dosyasını (veya kullandığınız dilin klasörünü) alın.
2. Sunucunuzda /language/Turkish/forum.lng.php (veya kendi diliniz) yoluna yükleyin.
3. Eğer dosya zaten varsa üzerine yazın.
4. Yoksa forum, hata mesajları ve yönetim paneli İngilizce fallback metinlerle görünür.

3. Tema Dosyalarını (TPL) Yükleme

· Repoda templates/Default/forum/ klasörünün içindeki tüm dosyaları alın.
· Kendi tema klasörünüzün altına /templates/TEMA_ADINIZ/forum/ şeklinde kopyalayın.
· Örnek: /templates/Default/forum/ → /templates/MyTheme/forum/
· Şablonlar:
  ```
  main.tpl           → Ana sayfa
  category.tpl       → Kategori ve arama sonuçları
  topic.tpl          → Konu görüntüleme
  new_topic.tpl      → Yeni konu açma
  notifications.tpl  → Bildirimler
  pm.tpl             → Özel mesajlar (artık DLE'nin kendi sistemine yönlendirir)
  user_posts.tpl     → Kullanıcı mesajları
  forum_block.tpl    → Yan blok (son konular)
  ```
· Dosyaları düzenleyip kendi tasarımınıza uyarlayabilirsiniz.

4. CSS ve JS Güncellemesi

· Repodaki forum.css dosyasını, tema CSS'inizin yanına koyun veya kendi CSS'inize import edin.
· CSS yeniliklerini atlamayın: .df-post-sticky, .df-sticky-label, .df-prefix, .df-tags-bar gibi sınıflar yeni sürümde eklendi.
· Forum sayfalarında TinyMCE editörü çalışması için {js-files} ve {AJAX} şablon etiketleri header'da bulunmalı.

5. Cache Temizliği

1. DLE Yönetim Paneli → Ayarlar → Önbelleği Temizle.
2. Ayrıca forumun kendi cache'ini temizlemek için:
      ?mod=forum&action=clear_cache (Admin panelinde "Cache Temizle" butonu) veya doğrudan /engine/cache/ klasöründeki forum_ ile başlayan dosyaları silin.

6. İstatistikleri Güncelleme

· İlk kurulumdan sonra, İstatistik Yeniden Hesapla butonuna tıklayın (?mod=forum → Bakım bölümü).
· Bu işlem, kategori ve kullanıcı sayaçlarını düzeltir.

---

Kurulum Sonrası Yapılması Gerekenler

· SEO Çalışmıyorsa: DLE 18 için .htaccess dosyasının yazılabilir olduğundan emin olun. DLE 19+ için herhangi bir ek işlem gerekmez.
· Yönetici grubu otomatik olarak her şeye erişir. Diğer gruplar için "Kategori İzinleri"ni ayarlayın.
· Prefix ve Etiketleri yönetim panelinden (?mod=forum&action=prefixes, ?mod=forum&action=tags) oluşturun.
· Sticky OP ayarının açık olduğundan emin olun: ?mod=forum&action=settings → "Sticky OP" değeri 1.

---

Tema Yapımcıları İçin

Tüm .tpl dosyalarında kullanılan etiketlerin listesini Etiket Referansı bölümünde bulabilirsiniz.
Önemli noktalar:

· {posts_list} içinde mesajlar gelir; yapısı topic.php içinde oluşturulur. Özel tasarım yapmak isterseniz direkt PHP'ye müdahale edebilirsiniz.
· [logged]...[/logged] ve [not-logged]...[/not-logged] blok etiketleri ile misafir/üye ayrımı yapabilirsiniz.
· {editor} etiketi, cevap yazma alanını getirir (WYSIWYG veya BBCode).
· Yönetim paneli (engine/inc/forum.php) şablonu ayrıdır, tema ile ilgisi yoktur.

---

Sık Karşılaşılan Hatalar ve Çözümleri

🐞 "MySQL hatası alıyorum", tablolar oluşmamış

· MySQL 5.7 kullanıyorsanız ADD COLUMN IF NOT EXISTS çalışmaz. Eklentiyi devre dışı bırakıp tekrar etkinleştirin, upgrade SQL'ini yeniden çalıştıracaktır.
· Hala sorun varsa, manuel olarak gerekli tabloları oluşturun (bkz. mysqlupgrade bölümü XML içinde).

🐞 Tasarım bozuk, yeni stiller görünmüyor

· CSS dosyasını güncellememişsinizdir. Repodaki forum.css'i temanıza ekleyin.
· TPL dosyalarını tam yüklemediniz. /templates/TEMA/forum/ klasörünü kontrol edin.

🐞 "Sticky OP çalışmıyor", ilk mesaj diğer sayfalarda yok

· Ayarlar sayfasında sticky_op değerinin 1 olduğundan emin olun.
· Cache'i temizleyin (forumun kendi cache'i).
· Sticky OP yalnızca 2. sayfadan itibaren görünür (ilk sayfada zaten ilk mesaj vardır).

🐞 Son mesaja tıklayınca ilk mesaja gidiyor (link bozuk)

· Bu hata v1.1.2'de mevcut. Eğer güncelleme yaptıysanız engine/forum/actions/main.php ve category.php dosyalarının güncellendiğinden emin olun.
· TPL şablonlarınızda {last_post_link} etiketini doğrudan kullanıyorsanız sorun olmaz.

🐞 Yönetim paneli / forum metinleri çevrilmemiş (Rusça, İngilizce vb.)

· Dil dosyanız eski. Yeni sürümle gelen anahtarlar eksik. Repodan güncel forum.lng.php dosyasını indirip dil klasörünüze yükleyin.
· Çevirileriniz yoksa, fonksiyon İngilizce fallback metni gösterir. Çeviri yaparak katkıda bulunabilirsiniz.

🐞 "Düzenle" butonu konuyu hızlı cevap editörüne taşıyor

· Bu normal bir davranıştır. Mesaj düzenleme aynı sayfada, cevap editörü üzerinden yapılır.
· Admin panelinde ?mod=forum&action=edit_topic&id=X ile WYSIWYG editörde düzenleyebilirsiniz.

---

Güncelleme (v1.1.2 → v1.1.3)

1. Yeni XML dosyasını panele yükleyin (eski sürümün üzerine yazacaktır).
2. Eklentiyi devre dışı bırakın ve tekrar etkinleştirin. Bu, yeni tabloları ve sütunları ekler.
3. TPL dosyalarını ve CSS'i repodaki son sürümle değiştirin.
4. Dil dosyasını güncelleyin (birçok yeni anahtar eklendi).
5. Cache temizliği yapın.
6. İstatistikleri yeniden hesaplayın.

---

Etiket Referansı

Aşağıda, tema şablonlarında kullanabileceğiniz tüm etiketler verilmiştir.
(Tam liste Rusça olarak da mevcuttur. README_RU.md dosyasına bakın.)

Ana Sayfa (main.tpl)

Etiket Açıklama
{forum_cats} Kategori listesi
{breadcrumb} Navigasyon
{total_topics}, {total_posts}, {total_members} Sayaçlar
{online_total}, {online_members}, {online_guests} Çevrimiçi durum
{today_visitors} Bugünkü ziyaretçi
{last_member} Son üye (HTML)
{new_topic_btn} Yeni konu butonu
[last-post]...[/last-post] Son mesaj bloğu
{last_post_topic}, {last_post_user}, {last_post_date}, {last_post_link}, {last_post_avatar} Son mesaj detayları

Kategori / Arama (category.tpl)

Etiket Açıklama
{cat_name}, {cat_desc} Kategori bilgisi
{sub_forums} Alt forumlar
{topics_list} Konu listesi
{pagination} Sayfalama
{mark_read_btn} Tümünü okundu say

Konu (topic.tpl)

Etiket Açıklama
{topic_title}, {topic_prefix}, {topic_tags}, {topic_description} Konu bilgileri
{posts_list} Mesajlar
{admin_toolbar} Moderatör butonları
{follow_btn}, {bump_btn}, {notif_btn} Aksiyon butonları
{upload_form} Dosya yükleme
{editor} Cevap editörü
{editor_title} Editör başlığı
[logged]...[/logged], [not-logged]...[/not-logged] Görünürlük blokları

Diğerleri

· new_topic.tpl, notifications.tpl, pm.tpl, user_posts.tpl, forum_block.tpl ve profil etiketleri için lütfen repository'deki tam listeye bakın.

---

S.S.S.

· Sadece XML yükleyerek kullanabilir miyim?
    Hayır. TPL ve CSS dosyalarını da tema klasörüne atmanız gerekir.
· DLE 18'de SEO çalışmıyor.
    .htaccess dosyasının yazılabilir olduğundan emin olun ve eklentiyi tekrar etkinleştirin.
· Bot sayısı neden hep 0?
    DLE _users tablosunda botlar tutulmaz (grup 6/7 kullanılmaz). Bot sayacı şimdilik sıfırdır.
· Rusça dil dosyası tam değil?
    Güncel Rusça dosyası için repository'i kontrol edin veya kendiniz çevirip katkıda bulunun.

---

Katkıda Bulunanlar

· Dlehub – Geliştirme ve mimari
· Elegance – Test ve optimizasyon
· 
---

Lisans

Copyright © 2024-2026 Dlehub & Elegance.
Tüm hakları saklıdır. İzinsiz dağıtılamaz, satılamaz.

---
