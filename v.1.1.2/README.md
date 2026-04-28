<div align="center">

# 🚀 DLE Native Forum - Nexus Ultimate Core

**DataLife Engine 18.0+ için XenForo kalitesinde, %100 Native, SEO uyumlu ve yüksek performanslı forum eklentisi.**

[![Sürüm](https://img.shields.io/badge/Sürüm-v1.1.2-0ea5e9?style=for-the-badge&logo=github)](https://github.com/dle-hub/dle-native-forum/tree/master/v.1.1.2)
[![DLE Uyumluluk](https://img.shields.io/badge/DLE-18.0%2B-10b981?style=for-the-badge&logo=php)](https://dle-news.ru/)
[![Geliştirici](https://img.shields.io/badge/Geliştirici-Dlehub_%26_Elegance-8b5cf6?style=for-the-badge)](https://dlehub.com.tr)

[Özellikler](#-temel-özellikler) • [v1.1.2 Yenilikleri](#-v112-ile-gelen-yenilikler) • [Kurulum](#-kurulum) • [İletişim](#-destek-ve-iletişim)

</div>

---

## 🌟 Hakkında
**DLE Native Forum**, DataLife Engine sitenize dışarıdan ağır bir forum yazılımı (XenForo, vBulletin vb.) kurmanıza gerek kalmadan, tamamen DLE'nin çekirdeğine (Native) entegre çalışan modern bir forum altyapısı sunar. 

Hiçbir köprü (bridge) gerektirmez; sitenizin üyeleri, bildirimleri, avatar sistemi ve veritabanı ile **%100 eşzamanlı** çalışır. CSS Grid mimarisi ile ultra hızlı ve mobil uyumludur.

---

## 🔥 v1.1.2 İle Gelen Yenilikler (Ultimate Core)
Bu sürüm, eklentiyi "kusursuzluk" seviyesine taşımak için devasa altyapı iyileştirmeleri ve hata düzeltmeleri içerir:

- 🛡️ **HTMLPurifier & Çökme (Fatal Error) Çözümleri:** DLE 18'in yeni mimarisine tam uyum sağlandı. Sınıf çakışmaları ve güvenlik duvarı hataları kökünden giderildi.
- 📩 **Kusursuz Özel Mesaj (PM) Sistemi:** - Bozuk karakter hataları düzeltildi, UTF-8 tam stabil hale getirildi.
  - PM kutusuna **"Çoklu Mesaj Seçme ve Silme"** altyapısı eklendi.
  - Özel mesaj okuma sayfası modern tasarıma kavuşturuldu.
  - Kullanıcı grup limitleri ve engelleme (Ignore) listesi aktif edildi.
- 🔗 **Gelişmiş SEO URL (Shadowing Fix):** FastRoute çakışmaları düzeltildi. Alt kategoriler ve `forum_block.php` (Son Konular) modülündeki sayfa çökmeleri `Absolute Path` mimarisiyle fixlendi.
- ⚙️ **Akıllı Admin Paneli (Auto-Update):** Yönetim paneline entegre edilen GitHub sistemi sayesinde, sistemi hiç yormadan yeni sürümleri otomatik kontrol eden bildirim altyapısı kuruldu.
- 🎨 **Mantık ve UX İyileştirmeleri:** Kilitli konularda anlamsızca beliren "Cevap yazmak için giriş yapın" hatası kaldırıldı, sadece yetkili işlemlere izin verildi.

---

## ⚡ Temel Özellikler

### 💬 Forum & Konu Yönetimi
- Sınırsız Kategori ve Alt Forum hiyerarşisi.
- AJAX destekli anında mesajlaşma, alıntı yapma ve etiketleme (@kullaniciadi).
- Konu kilitleme, sabitleme, taşıma, silme ve "Yukarı Taşı (Bump)" özelliği.
- Modern Dosya Ekleme (Attachment) ve resim/belge önizleme altyapısı.

### 👥 Üye & Etkileşim Sistemi
- XenForo tarzı "Like / Dislike" sistemi.
- Konu takip etme ve DLE Ziline düşen anlık **Bildirim Sistemi** (PM, Beğeni, Etiket, Cevap).
- Puan ve Rütbe (Badge) sistemi (Örn: Aktif Üye, Uzman).

### 🛠️ Gelişmiş Moderasyon ve Admin Paneli
- Gelişmiş Log sistemi (Hangi moderatör ne yapmış?).
- Yasaklı kelimeler (Sansür) filtresi.
- Üye şikayet sistemi ve onay bekleyen mesajlar (Pending) yönetimi.
- DLE Admin Paneli ile %100 uyumlu, şık ve istatistik odaklı Dashboard.

---

## 🚀 Kurulum

Eklentiyi kurmak DLE 18 mimarisi sayesinde saniyeler sürer:

1. Bu repodaki `dle-native-forum-ultimate-core-v112.xml` dosyasını indirin.
2. DLE Yönetim Panelinize giriş yapın.
3. **Eklentiler (Plugins) > Eklenti Yükle** kısmına gidin.
4. İndirdiğiniz `.xml` dosyasını yükleyin ve kurulumu onaylayın.
5. Kurulum bittikten sonra DLE Yönetim Panelinden **Tüm Önbelleği Temizle (Clear Cache)** işlemini mutlaka yapın.
6. İşlem tamam! Sitenizin sonuna `/forum/` ekleyerek forumunuza ulaşabilirsiniz.

> **Not:** Son Konular bloğunu sitenizin herhangi bir yerinde (Örn: `main.tpl`) göstermek için şu kodu kullanabilirsiniz:
> `{include file="engine/modules/forum_block.php?limit=5"}`

---

## 🤝 Destek ve İletişim

Bu eklenti tamamen açık kaynak kodlu olarak geliştirilmektedir. Karşılaştığınız hataları (bug) veya yeni özellik taleplerinizi GitHub üzerinden **Issues** kısmına yazabilirsiniz.

- **Web Sitemiz:** [Dlehub.com.tr](https://dlehub.com.tr)
- **Geliştirici:** Elegance

<div align="center">
  <sub>DLE Native Forum, DataLife Engine topluluğuna katkı sağlamak amacıyla gururla geliştirilmiştir. 💙</sub>
</div>
