# 🏛️ DLE Native Forum — Ultimate Core (v1.2.0)

[![DLE Version](https://img.shields.io/badge/DLE-19.x-blue.svg)](https://dle-news.ru)
[![PHP](https://img.shields.io/badge/PHP-8.x-777bb4.svg)](https://php.net)
[![License](https://img.shields.io/badge/License-Commercial-orange.svg)](#)

**DLE Native Forum**, DataLife Engine için geliştirilmiş, modern, hızlı ve tamamen şablon bazlı çalışan profesyonel bir forum eklentisidir. **Nexus Ultimate** tasarımıyla birlikte gelir ve premium forum deneyimi sunar.

---

## ✨ Öne Çıkan Özellikler

- **🎨 Nexus Premium Tasarımı**: Modern, responsive (mobil uyumlu) ve kullanıcı dostu arayüz.
- **🚀 Full AJAX Altyapısı**: Sayfa yenilemeden beğeni, takip, bildirim ve yönetim işlemleri.
- **🏅 Gelişmiş Rütbe Sistemi**: Grup öncelikli (MyBB stili) rütbe ikonları ve FontAwesome desteği.
- **🔍 SEO Optimizasyonu**: Schema.org JSON-LD entegrasyonu, temiz URL yapısı ve meta etiket yönetimi.
- **🔔 Akıllı Bildirim Sistemi**: Gerçek zamanlı bildirim zili ve tarayıcı dostu uyarılar.
- **🌍 Çoklu Dil Desteği**: Türkçe, İngilizce ve Rusça dil dosyaları hazır.
- **🔥 Konu Güncelleme (Bump)**: Konuları tek tıkla yukarı taşıma özelliği.
- **✅ DLE 19.1 Tam Uyum**: En son DLE sürümü ile test edilmiş, native UI (DLEPush, DLEconfirm) desteği.
- **🐘 PHP 8.x Desteği**: PHP 8.1, 8.2 ve 8.3 sürümleriyle tam uyumlu modern kod yapısı.

---

## 📥 Kurulum (Installation)

1. **Eklenti Yükleme**:
   - DLE Admin Paneli -> **Eklentiler** (Plugins) bölümüne gidin.
   - **Eklenti Yükle** butonuna tıklayın.
   - Size verilen `dle-native-forum-ultimate-core-v120.zip` dosyasını seçip yükleyin.
2. **Tema Ayarları**:
   - Eklenti ile gelen `templates/Default/forum/` klasörünü kendi tema klasörünüzün içine kopyalayın.

---

## 🆙 Güncelleme Notu (Update Notice)

> [!IMPORTANT]  
> **Eğer mevcut bir sürümü güncelliyorsanız:**  
> Temalarınızda (TPL/CSS) yaptığınız özelleştirmelerin kaybolmaması için, güncelleme yapmadan önce `/templates/SİZİN_TEMANIZ/forum/` klasörünün yedeğini mutlaka alın. Eklentiyi zip olarak yükledikten sonra, varsa özel düzenlemelerinizi yedeklerinizden kontrol ederek tekrar uygulayın.

---

## 🛠 Özelleştirme (Customization)

Forum görünümünü tamamen CSS değişkenleri ile değiştirebilirsiniz. `forum.css` dosyasındaki `:root` bölümünden renkleri, köşeleri ve gölgeleri düzenleyebilirsiniz:

```css
:root {
    --df-accent: #3b82f6;      /* Ana Renk */
    --df-orange: #f97316;      /* Vurgu Rengi */
    --df-navy: #0f172a;        /* Başlıklar */
    --df-radius: 12px;         /* Kenar Yuvarlaklığı */
}
```

---

## 📄 Dokümantasyon

Tüm TPL etiketleri ve detaylı kullanım kılavuzu için dizindeki dokümanlara göz atabilirsiniz:
- 🇹🇷 [Türkçe Doküman](forum_detay.md)
- 🇺🇸 [English Documentation](forum_detay_en.md)
- 🇷🇺 [Russian Documentation](forum_detay_ru.md)

---

## ⚖️ Lisans

Bu yazılım **DLEHub** tarafından geliştirilmiştir. İzinsiz kopyalanması, dağıtılması veya satışa sunulması yasaktır.

---
*Geliştirici: [DLEHub](https://dlehub.com.tr)*
