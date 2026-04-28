İşte güncellenmiş ve GitHub’a README.md olarak ekleyebileceğin Markdown formatında doküman:

```markdown
# DLE Native Forum – Ultimate Core v1.1.2

**DataLife Engine için kapsamlı, modern forum eklentisi**

---

## İçindekiler

- [Genel Bakış](#genel-bakış)
- [Öne Çıkan Özellikler](#öne-çıkan-özellikler)
- [Sistem Gereksinimleri](#sistem-gereksinimleri)
- [Kurulum](#kurulum)
- [Yükseltme (Güncelleme)](#yükseltme-güncelleme)
- [Kaldırma](#kaldırma)
- [Admin Paneli Ayarları](#admin-paneli-ayarları)
- [Kullanım Kılavuzu (Ön Yüz)](#kullanım-kılavuzu-ön-yüz)
- [SEO & URL Yapısı](#seo--url-yapısı)
- [Entegrasyonlar](#entegrasyonlar)
- [Şablon Sistemi](#şablon-sistemi)
- [Güvenlik Önlemleri](#güvenlik-önlemleri)
- [Performans & Önbellek](#performans--önbellek)
- [Sürüm Geçmişi](#sürüm-geçmişi)
- [Sık Sorulan Sorular (SSS)](#sık-sorulan-sorular-sss)
- [Destek & Katkı](#destek--katkı)

---

## Genel Bakış

**DLE Native Forum – Ultimate Core**, DataLife Engine 18.0+ için yepyeni bir **OOP forum eklentisidir**.  
XenForo / vBulletin tadında kullanıcı deneyimi sunarken DLE altyapısıyla %100 uyumludur.

- 🚀 **Sürüm:** 1.1.2  
- ⚙️ **DLE Uyumu:** 18.0 ve üzeri  
- 🔐 **Güvenlik:** CSRF, XSS, SQL Injection korumalı  
- 🌍 **Çoklu dil:** `forum.lng.php` ile dilediğiniz dile çevirin  
- 🔗 **SEO URL:** FastRoute ile tam entegre

---

## Öne Çıkan Özellikler

- Sınırsız ana/alt kategori, sıralama, Font Awesome ikonlar
- Sabitleme, kilitleme, bump, taşıma, yumuşak silme
- BBCode / WYSIWYG editör, alıntı, düzenleme geçmişi
- Yasaklı kelime filtresi, flood koruması
- Beğeni / beğenmeme (AJAX), konu takibi, @mention bildirimleri
- Conversation tabanlı özel mesaj sistemi
- Şikayet, onay kuyruğu, moderasyon logları
- Puan tabanlı otomatik rütbe sistemi
- Dosya eki (image, pdf, zip) – MIME kontrolü & WebP desteği
- Profil sayfası entegrasyonu (mesaj sayısı, puan, rütbe)
- Sidebar için “Son Konular” bloğu (cache destekli)
- Performans için yerleşik önbellek (cache)

---

## Sistem Gereksinimleri

- **DataLife Engine:** v18.0+
- **PHP:** 7.4 – 8.2
- **MySQL:** 5.7+ / MariaDB 10.3+
- **PHP Eklentileri:** `fileinfo`, `mbstring`, `json`, `gd` (önerilir)

---

## Kurulum

> ⚡ **Tek tıkla kurulum!** Sadece ZIP dosyasını yükleyin, her şey otomatik.

1. **Eklentiyi yükleyin**  
   - DLE Yönetici Paneli → **Eklentiler** → **Eklenti Yükle**  
   - `dle-native-forum-ultimate-core-v112.zip` dosyasını seçip yükleyin.  
   - Veritabanı tabloları, ayarlar, rütbeler ve admin menüsü **otomatik** oluşturulur.

2. **Dil dosyasını kontrol edin**  
   Eklenti `language/Turkish/forum.lng.php` dil dosyasıyla gelir.  
   Farklı bir dil kullanıyorsanız bu dosyayı kendi dil klasörünüze kopyalayıp çevirebilirsiniz.

3. **Tema şablonlarını kopyalayın**  
   ZIP dosyasındaki `templates/Default/forum/` klasörünü, **kendi temanızın** klasörüne kopyalayın:  
```

/templates/SizinTema/forum/

```
   Alternatif olarak bu klasörü ZIP’ten çıkarıp manuel olarak da yükleyebilirsiniz.

4. **Tamamdır!**  
   `https://siteadiniz.com/forum/` adresinden forumu kullanmaya başlayabilirsiniz.

---

## Yükseltme (Güncelleme)

> Aynı kolaylıkla güncelleyin – veri kaybı olmaz!

- Yeni sürümün ZIP dosyasını **Eklenti Yükle** sayfasından tekrar yükleyin.
- DLE, `<mysqlupgrade>` ve `<phpupgrade>` komutlarını çalıştırarak eksik sütunları ve tabloları ekler, SEO kurallarını günceller.
- Eğer yeni şablon etiketleri eklenmişse, `templates/Default/forum/` dizinindeki `.tpl` dosyalarını kendi tema klasörünüze kopyalamayı unutmayın.

---

## Kaldırma

- Yönetici Paneli → **Eklentiler** → **Forum Yönetimi** → **Sil**
- Tüm forum tabloları, kullanıcı sütunları ve admin menüsü otomatik kaldırılır.
- Dilerseniz `engine/forum/` klasörünü ve ilgili `.tpl` dosyalarını manuel olarak da silebilirsiniz.

---

## Admin Paneli Ayarları

Sol menüden **Forum Yönetimi** bağlantısına tıklayın.

| Sekme | Açıklama |
|-------|----------|
| **Genel Ayarlar** | Sayfa başına konu/cevap, puanlar, flood süresi, dosya eki limitleri, onay eşiği vb. |
| **Kategoriler** | Ekle / düzenle / sil, ana kategori seçimi, sıralama, ikon |
| **Rütbeler** | Puan tabanlı rütbeler: başlık, renk, ikon, rozet metni |
| **Yasaklı Kelimeler** | Otomatik sansür kelimeleri ve yerine yazılacak metinler |
| **Şikayetler** | `[FORUM]` önekiyle DLE şikayet sistemine düşer |
| **Konular** | Toplu kilitleme, sabitleme, taşıma, silme |
| **Onay Kuyruğu** | Onay eşiğine takılan mesajları toplu onaylama / reddetme |
| **Loglar** | Moderasyon işlemlerinin IP kayıtları |
| **Bakım** | İstatistik yeniden hesaplama, önbellek temizleme |

---

## Kullanım Kılavuzu (Ön Yüz)

### Forum Ana Sayfası
- Üstte toplam istatistikler ve “Yeni Konu” butonu
- Mavi başlıklar altında ana kategoriler ve alt forumlar
- Her satırda konu/cevap sayıları, son mesaj bilgisi

### Kategori Sayfası
- Alt forumlar (varsa) en üstte listelenir
- Konular sabitlenmiş olanlar en başta olacak şekilde sıralanır
- Durum ikonu (kilit, raptiye), okunmadı noktası

### Konu İçi
- Solda kullanıcı paneli (avatar, isim, rütbe rozeti, grup, istatistikler, PM butonu)
- Sağda mesaj içeriği, ek dosyalar
- Mesaj altı: beğeni / beğenmeme, alıntı, düzenle, sil, şikayet
- En altta WYSIWYG editör ile hızlı cevap

### Yeni Konu Açma
- `/forum/new-topic/` – Başlık + zengin metin editörü
- Flood ve karakter sınırı kontrolleri mevcut

### Beğeni Sistemi
- Kullanıcılar kendi mesajlarını beğenemez
- Like/dislike arasında geçiş yapılabilir
- Beğeni alan kullanıcıya puan ve bildirim gider

### Takip & Bildirim
- “Takip Et” ile konuya abone olun, cevaplar bildirim gelsin
- `@kullaniciadi` ile mention yaparak kişiyi etiketleyin
- Tüm bildirimler `/forum/notifications/` altında toplanır

### Özel Mesajlaşma
- Konuşma (conversation) tabanlı
- Yeni mesaj aynı konuşmaya eklenir, dağınık PM yerine düzenli iletişim
- WYSIWYG editör destekli

### Arama
- `/forum/search/?q=aranan`
- Konu başlıklarında FULLTEXT arama
- Flood koruması uygulanır

---

## SEO & URL Yapısı

DLE “Arama motoru dostu URL” özelliği açıksa, forum aşağıdaki temiz linkleri kullanır:

| Sayfa | URL |
|-------|-----|
| Ana sayfa | `/forum/` |
| Kategori | `/forum/{kategori-slug}/` |
| Konu | `/forum/{kategori}/{id}-{konu-slug}.html` |
| Yeni konu | `/forum/new-topic/` |
| Arama | `/forum/search/` |
| Bildirimler | `/forum/notifications/` |
| PM | `/forum/pm/` |
| PM Okuma | `/forum/pm/read/{id}/` |

> Kapalıysa `index.php?do=forum&action=...` formatına döner.

---

## Entegrasyonlar

### Profil Sayfası
Şablonunuza şu etiketleri ekleyin:
- `{forum-post-count}` – Forum mesaj sayısı
- `{forum-points}` – Forum puanı
- `{forum-rank}` – Rütbe rozeti (renkli HTML)

### Sidebar – Son Konular Bloğu
```php
{include file="engine/modules/forum_block.php?limit=5"}
```

· limit ile gösterilecek konu sayısını ayarlayın (1–50)
· Cache desteklidir

---

Şablon Sistemi

Aşağıdaki .tpl dosyalarını kendi tema klasörünüzün forum/ altında bulundurun:

Şablon Kullanım
main.tpl Ana sayfa
category.tpl Kategori / arama sonuçları
topic.tpl Konu görüntüleme
new_topic.tpl Yeni konu formu
pm.tpl Özel mesajlar
notifications.tpl Bildirimler
user_posts.tpl Kullanıcı mesajları
forum_block.tpl Son konular bloğu

Her şablondaki etiketler için ilgili .php dosyasındaki $tpl->set() satırlarını inceleyin.

---

Güvenlik Önlemleri

· ✅ XSS: Tüm çıktılar htmlspecialchars() / json_encode HEX escape ile
· ✅ SQL Injection: $db->safesql() ve intval() zorunlu
· ✅ CSRF: Tüm istekler dle_login_hash ile imzalanır
· ✅ Dosya yükleme: finfo MIME kontrolü, PHP çalıştırma engelli .htaccess
· ✅ Flood: _forum_flood tablosu ile işlem hız limiti

---

Performans & Önbellek

· Kategori, istatistik, yasaklı kelime verileri DLE cache ile diskte saklanır
· Görüntülenme sayacı cookie tabanlı 1 saat beklemelidir
· Flood tablosu brute-force ve spam’i sınırlar
· İstatistik yeniden hesaplama toplu işlem olarak yapılabilir (lock dosyası ile eş zamanlı çalıştırma engellenir)

---

Sürüm Geçmişi

· v1.1.2 (Güncel)
  · 🔗 SEO URL yapısı iyileştirildi, slug çakışmaları giderildi
  · 👤 Profil sayfası entegrasyonu – mesaj sayısı, puan, rütbe
  · 🛡 SQL güvenlik yamaları (edit history safesql)
  · 🏷 Mention regex güncellendi
  · 🗑 Konu silme işleminde mesajlar düzgün şekilde yumuşak siliniyor
  · Mini hata düzeltmeleri
· v1.1.1
  · PHP 8 uyumluluğu (string/array hataları)
  · Like/dislike butonları AJAX’a taşındı
  · Admin panel Türkçeleştirildi
· v1.1.0
  · Conversation PM sistemi
  · Dosya yükleme, MIME kontrolü, WebP desteği
  · Onay kuyruğu, moderasyon logları
· v1.0.0
  · İlk kararlı sürüm

---

Sık Sorulan Sorular (SSS)

DLE 17.x ile çalışır mı?
Hayır, minimum 18.0 gereklidir. FastRoute ve editör yapısı 18+’dır.

Forum İngilizce görünüyor?
language/Turkish/forum.lng.php dosyası sunucuda mevcut olmalı. Eksik anahtarlar fallback olarak İngilizce basar.

SEO URL’ler 404 veriyor?

· DLE → Ayarlar → “Arama motoru dostu URL” aktif olmalı.
· Eklentiyi devre dışı bırakıp tekrar etkinleştirin (URL kuralları yenilenir).

Beğeni butonu hata veriyor?
AJAX istekleri /forum/ajax/ adresine gider. config.php içindeki $config['http_home_url'] değeri doğru ayarlanmış olmalı.

Dosya yüklenmiyor?
uploads/forum/ klasör yazma izni (755) ve upload_max_filesize değerini kontrol edin.

---

Destek & Katkı

· 🌐 Resmi site: https://dlehub.com.tr
· 🐞 Hata bildirimi / Öneri: GitHub Issues

---

DLE Native Forum – Ultimate Core v1.1.2
Geliştiriciler: Dlehub & Elegance ❤️

```
Destek ve Katkı

· Resmi Site: https://dlehub.com.tr/
· GitHub: https://github.com/dle-hub/dle-native-forum
· Hata bildirimi ve öneriler için GitHub Issues kullanabilirsiniz.