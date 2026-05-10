# 📘 DLE Native Forum — Kapsamlı TPL Etiket Dokümantasyonu (v1.2.0)

Bu dokümantasyon, DLE Native Forum eklentisinde (Grup Öncelikli Rütbe ve MyBB Tarzı İkon Sistemi dahil) kullanılan tüm `.tpl` dosyaları, geçerli etiketler (tags), koşullu bloklar ve kullanım örneklerini içerir.

---

# 📂 Klasör Yapısı

Eklentinin çalışması için tema klasörünüzde `forum/` dizini ve ilgili `.tpl` dosyaları bulunmalıdır.

```text
templates/your_theme/
└── forum/
    ├── main.tpl
    ├── category.tpl
    ├── topic.tpl
    ├── new_topic.tpl
    ├── edit_topic.tpl
    ├── search.tpl
    ├── forum_block.tpl
    ├── notifications.tpl
    ├── user_posts.tpl
    ├── pm.tpl
    └── blocks/
        ├── cat_wrap.tpl
        ├── forum_row.tpl
        ├── topic_row.tpl
        ├── post_row.tpl
        ├── user_post_row.tpl
        ├── empty.tpl
        ├── notif_row.tpl
        ├── attachment_img.tpl
        ├── attachment_file.tpl
        ├── attachments_wrap.tpl
        ├── tag_item.tpl
        ├── tag_cloud_item.tpl
        ├── tag_cloud_wrap.tpl
        ├── day_filter.tpl
        └── day_filter_wrap.tpl
```

---

# 📁 1. `main.tpl` — Forum Ana Sayfası

Forumun ana dizin sayfasıdır. Tüm kategoriler burada listelenir.
**Kullanıldığı yer:** `actions/main.php`

## 🧩 Etiketler

| Etiket | Açıklama | Örnek Çıktı |
|---|---|---|
| `{forum_cats}` | Tüm kategori HTML çıktısı | Kategori listesi |
| `{total_topics}` | Toplam konu sayısı | `1,234` |
| `{total_posts}` | Toplam mesaj sayısı | `5,678` |
| `{total_members}` | Toplam üye sayısı | `890` |
| `{online_count}` | Toplam çevrimiçi kullanıcı | `42` |
| `{online_members}` | Çevrimiçi üye sayısı | `15` |
| `{online_guests}` | Çevrimiçi misafir sayısı | `27` |
| `{today_visitors}` | Günlük tekil ziyaretçi | `120` |
| `{last_member}` | Son kayıt olan üye adı | `john_doe` |
| `{forum_url}` | Forum ana sayfa URL'si | `/forum/` |
| `{breadcrumb}` | Ekmek kırıntısı HTML | `<nav>...</nav>` |
| `{SITEURL}` | Site ana URL | `https://site.com/` |

## 🔀 Koşullu Bloklar

```html
[is-logged]
    <div class="user-panel">Hoşgeldin!</div>
[/is-logged]

[not-logged]
    <div class="guest-panel">
        <a href="/index.php?do=register">Kayıt Ol</a>
    </div>
[/not-logged]
```

---

# 📁 2. `category.tpl` — Kategori Sayfası

Kategori içindeki konuları listeler.
**Kullanıldığı yerler:** `actions/category.php`, `active.php`, `tag.php`, `unanswered.php`

## 🧩 Etiketler

| Etiket | Açıklama |
|---|---|
| `{cat_name}` | Kategori adı |
| `{cat_desc}` | Kategori açıklaması |
| `{cat_id}` | Kategori ID |
| `{sub_forums}` | Alt kategoriler HTML |
| `{topics_list}` | Konu listesi HTML |
| `{pagination}` | Sayfalama HTML |
| `{breadcrumb}` | Breadcrumb HTML |
| `{SITEURL}` | Site URL |

## 🔀 Koşullu Bloklar

```html
[has-subforums]
    <div class="subforums">{sub_forums}</div>
[/has-subforums]

[has-desc]
    <div class="cat-desc">{cat_desc}</div>
[/has-desc]

[is-logged]
    <a href="/forum/new-topic/?cat_id={cat_id}" class="btn">Yeni Konu</a>
[/is-logged]

[not-logged]
    <div class="alert">Lütfen giriş yapın</div>
[/not-logged]
```

---

# 📁 3. `topic.tpl` — Konu Sayfası

Konu içindeki mesajları gösterir.
**Kullanıldığı yer:** `actions/topic.php`

## 🧩 Ana Etiketler

| Etiket | Açıklama |
|---|---|
| `{posts_list}` | Mesaj listesi HTML |
| `{topic_title}` | Konu başlığı |
| `{topic_description}` | Konu alt açıklaması |
| `{topic_tags}` | Etiketler HTML |
| `{topic_id}` | Konu ID |
| `{pagination}` | Sayfalama |
| `{editor}` | WYSIWYG editör HTML (gizli input dahil) |
| `{csrf_token}` | CSRF token değeri |
| `{editor_title}` | Editör bölümü başlığı ("Cevap Yaz" / "Mesajı Düzenle") |
| `{lang_send}` | Gönder butonu metni |
| `{reply_error}` | Hata mesajı metni |
| `{breadcrumb}` | Breadcrumb HTML |
| `{SITEURL}` | Site URL |
| `{forum_js_vars}` | JS global değişkenleri |
| `{schema_jsonld}` | Schema.org DiscussionForumPosting JSON-LD script etiketi |
| `{lang_attach}` | "Dosya Ekle" metni |

## 🧩 Bildirim Etiketleri

| Etiket | Açıklama |
|---|---|
| `{notif_count}` | Okunmamış bildirim sayısı |
| `{notif_url}` | Bildirimler sayfası URL |
| `{notif_badge_display}` | Badge CSS display değeri: `inline-flex` veya `none` |

## 🧩 Moderasyon ve Aksiyon Etiketleri

| Etiket | Açıklama |
|---|---|
| `{lang_follow}` | Takip Et metni |
| `{lang_unfollow}` | Takibi Bırak metni |
| `{lang_bump}` | Güncelle metni |
| `{lang_lock}` | Kilitle metni |
| `{lang_unlock}` | Kilidi Aç metni |
| `{lang_pin}` | Sabitle metni |
| `{lang_unpin}` | Sabitliği Kaldır metni |
| `{lang_delete_topic}` | Konuyu Sil metni |
| `{edit_topic_url}` | Konu düzenleme sayfası URL |

## 🔀 Koşullu Bloklar

```html
[is-logged]
    <div class="reply-form">{editor}</div>
[/is-logged]

[not-logged]
    <div class="login-warning">Lütfen giriş yapın</div>
[/not-logged]

[is-following]
    <button class="unfollow-btn">{lang_unfollow}</button>
[/is-following]

[not-following]
    <button class="follow-btn">{lang_follow}</button>
[/not-following]

[is-locked]
    <div class="locked-warning">Bu konu kilitlenmiştir.</div>
[/is-locked]

[not-locked]
    <div class="reply-form">{editor}</div>
[/not-locked]

[can-bump]
    <button class="bump-btn">{lang_bump}</button>
[/can-bump]

[can-moderate]
    <div class="mod-tools">
        <button>{lang_lock}</button>
        <button>{lang_pin}</button>
        [is-pinned]<span class="pinned-badge">Sabit</span>[/is-pinned]
        [not-pinned]<span class="normal-badge">Normal</span>[/not-pinned]
    </div>
[/can-moderate]

[has-tags]
    <div class="topic-tags">{topic_tags}</div>
[/has-tags]

[has-desc]
    <div class="topic-desc">{topic_description}</div>
[/has-desc]

[has-error]
    <div class="error-message">{reply_error}</div>
[/has-error]

[allow-upload]
    <input type="file" name="forum_file[]" multiple>
    <span>{lang_attach}</span>
[/allow-upload]
```

---

# 📁 4. `blocks/post_row.tpl` — Mesaj Satırı ⭐ EN KRİTİK

Her mesaj için tekrar eden şablondur. Tüm kullanıcı bilgileri, rütbe ve moderasyon araçları burada yer alır.

## 👤 Kullanıcı Bilgileri

| Etiket | Açıklama | Örnek |
|---|---|---|
| `{post_id}` | Mesaj ID (anchor için) | `42` |
| `{post_class}` | CSS sınıfı (OP ise `df-post-op`) | `df-post-op` |
| `{post_num}` | Mesaj sıra numarası | `3` |
| `{p_user}` | Kullanıcı adı (HTML escaped) | `John_Doe` |
| `{p_user_js}` | Kullanıcı adı (JS güvenli, tek tırnak escaped) | `John_Doe` |
| `{p_avatar}` | Avatar tam URL | `https://site.com/uploads/fotos/foto.png` |
| `{p_profile}` | Profil sayfası URL | `https://site.com/user/John_Doe/` |
| `{p_date}` | Mesaj tarihi | `15.01.2025, 14:30` |
| `{p_text}` | Mesaj içeriği (BBCode parse edilmiş) | HTML |
| `{p_sig}` | İmza (BBCode parse edilmiş) | HTML |
| `{p_reg_date}` | Kayıt tarihi | `01.06.2023` |
| `{p_id}` | Mesaj ID (kısa, JS aksiyonları için) | `42` |
| `{edit_date}` | Düzenleme tarihi | `15.01.2025, 15:00` |

## 📊 İstatistikler

| Etiket | Açıklama | Örnek |
|---|---|---|
| `{forum_post_count}` | Toplam mesaj (formatlı) | `1,234` |
| `{forum_points}` | Puan (formatlı) | `550` |
| `{forum_rep}` | Rep / Toplam beğeni (formatlı) | `42` |
| `{rep_percent}` | Rep yüzdesi (progress bar için) | `45` |
| `{likes_count}` | Beğeni sayısı | `15` |
| `{dislikes_count}` | Beğenmeme sayısı | `2` |

## 🏅 Rütbe ve Grup Bilgileri (Grup Öncelikli Sistem)

| Etiket | Açıklama | Örnek |
|---|---|---|
| `{rank_title}` | Rütbe adı | `Yönetici` |
| `{rank_icon}` | Rütbe ikonu (FA sınıfı VEYA resim yolu) | `fa-crown` veya `ranks/admin.gif` |
| `{rank_color}` | Rütbe rengi | `#ef4444` |
| `{group_name}` | DLE Grup adı | `Yönetici` |
| `{group_color}` | DLE Grup rengi | `#ef4444` |

## 🔘 Butonlar ve Linkler

| Etiket | Açıklama |
|---|---|
| `{edit_url}` | Mesaj düzenleme URL (ilk mesajsa konu düzenleme) |
| `{edit_topic_url}` | Konu düzenleme URL |
| `{pm_url}` | PM gönderme URL |
| `{lang_edit}` | "Düzenle" metni |
| `{lang_delete}` | "Sil" metni |
| `{lang_quote}` | "Alıntı" metni |
| `{lang_like}` | "Beğen" metni |
| `{lang_dislike}` | "Beğenme" metni |
| `{lang_pm}` | "PM Gönder" metni |
| `{lang_report}` | "Şikayet Et" metni |
| `{lang_edited}` | "Düzenlendi" metni |
| `{lang_posts}` | "Mesajlar" metni |
| `{lang_points}` | "Puan" metni |
| `{lang_rep}` | "Rep" metni |
| `{lang_attach}` | "Dosya Ekle" metni |

## 📎 Ekler

| Etiket | Açıklama |
|---|---|
| `{attachments_html}` | Eklerin tam HTML çıktısı |

## 🔀 Koşullu Bloklar

### Çevrimiçi Durumu
```html
[online]
    <span class="online-badge">Çevrimiçi</span>
[/online]
[offline]
    <span class="offline-badge">Çevrimdışı</span>
[/offline]
```

### 🏅 Rütbe Gösterimi (MyBB Tarzı Resim / Font Awesome Destekli)
**Açıklama:** Grup öncelikli rütbe sistemiyle, Admin rütbesine `fa-crown` yazarsanız FA ikon, `ranks/admin.gif` yazarsanız resim ikon otomatik gösterilir.

```html
[has-rank]
    <div class="user-rank">
        [is-img-rank]
            <!-- Resim ikon: ranks/admin.gif gibi kaydedilmişse -->
            <img src="{SITEURL}templates/{skin}/{rank_icon}" alt="{rank_title}" class="df-rank-image">
        [/is-img-rank]

        [is-fa-rank]
            <!-- Font Awesome ikon: fa-crown gibi kaydedilmişse -->
            <span class="df-rank-badge" style="color:{rank_color}">
                <i class="fa {rank_icon}"></i> {rank_title}
            </span>
        [/is-fa-rank]
    </div>
[/has-rank]
```
> ⚠️ **Önemli:** `[is-img-rank]` ve `[is-fa-rank]` blokları **sadece** `[has-rank]` içinde kullanılabilir.

### İmza ve Düzenleme
```html
[has-sig]
    <div class="signature">{p_sig}</div>
[/has-sig]

[is-edited]
    <div class="edited-info">{lang_edited}: {edit_date}</div>
[/is-edited]
```

### Ekler ve Yükleme
```html
[has-attachments]
    <div class="attachments">{attachments_html}</div>
[/has-attachments]

[/has-attachments]
```

### Giriş ve Yetki
```html
[is-logged]
    <button class="like-btn">{lang_like}</button>
    <button class="dislike-btn">{lang_dislike}</button>
[/is-logged]

[not-logged]
    <span class="text-muted">Beği için giriş yapın</span>
[/not-logged]

[is-liked]
    <button class="like-btn active">Beğendim ({likes_count})</button>
[/is-liked]

[is-disliked]
    <button class="dislike-btn active">Beğenmedim ({dislikes_count})</button>
[/is-disliked]

[not-self]
    <a href="{pm_url}">{lang_pm}</a>
[/not-self]

[can-edit]
    <a href="{edit_url}">{lang_edit}</a>
[/can-edit]

[can-delete]
    <button class="delete-btn">{lang_delete}</button>
[/can-delete]

[is-locked]
    <span class="locked-label">Konu kilitli</span>
[/is-locked]

[not-locked]
    <!-- Normal mesaj aksiyonları -->
[/not-locked]
```

### 🧩 Tam `post_row.tpl` Örneği
```html
<article id="post-{post_id}" class="df-post {post_class}">
    <!-- Sol Panel -->
    <div class="df-post-author">
        <div class="df-avatar-wrap">
            <img src="{p_avatar}" alt="{p_user}">
            [online]<span class="df-online-dot"></span>[/online]
            [offline]<span class="df-offline-dot"></span>[/offline]
        </div>
        
        <div class="df-username" style="color:{group_color}">
            <a href="{p_profile}">{p_user}</a>
        </div>
        <div class="df-group-label">{group_name}</div>

        [has-rank]
            <div class="df-rank">
                [is-img-rank]
                    <img src="{SITEURL}templates/{skin}/{rank_icon}" alt="{rank_title}">
                [/is-img-rank]
                [is-fa-rank]
                    <span style="color:{rank_color}"><i class="fa {rank_icon}"></i> {rank_title}</span>
                [/is-fa-rank]
            </div>
        [/has-rank]

        <div class="df-stats">
            <div>{lang_posts}: {forum_post_count}</div>
            <div>{lang_points}: {forum_points}</div>
            <div>{lang_rep}: {forum_rep}</div>
        </div>
    </div>

    <!-- Sağ Panel -->
    <div class="df-post-body">
        <div class="df-post-header">
            <span class="df-post-num">#{post_num}</span>
            <span class="df-post-date">{p_date}</span>
        </div>
        <div class="df-post-text">{p_text}</div>

        [has-attachments]
            <div class="df-attachments">{attachments_html}</div>
        [/has-attachments]

        [is-edited]
            <div class="df-edited">{lang_edited}: {edit_date}</div>
        [/is-edited]

        [has-sig]
            <div class="df-signature">{p_sig}</div>
        [/has-sig]

        <div class="df-post-actions">
            [is-logged]
                <button onclick="forumQuote('{p_user_js}', {post_id})">{lang_quote}</button>
                [not-self]<a href="{pm_url}">{lang_pm}</a>[/not-self]
                <button onclick="forumLike({post_id}, 'like')">{lang_like} ({likes_count})</button>
                <button onclick="forumLike({post_id}, 'dislike')">{lang_dislike} ({dislikes_count})</button>
                <button onclick="forumReport({post_id})">{lang_report}</button>
            [/is-logged]
            [can-edit]<a href="{edit_url}">{lang_edit}</a>[/can-edit]
            [can-delete]<button onclick="forumDeletePost({post_id})">{lang_delete}</button>[/can-delete]
        </div>
    </div>
</article>
```

---

# 📁 5. `blocks/forum_row.tpl` — Forum Satırı

Kategori veya alt forum satırı.

## 🧩 Etiketler
| Etiket | Açıklama |
|---|---|
| `{forum_url}` | Forum URL |
| `{icon_class}` | İkon sınıfı (fa-folder, fa-comments vb.) |
| `{forum_name}` | Forum adı |
| `{forum_desc}` | Açıklama |
| `{sub_cats_html}` | Alt kategoriler HTML |
| `{topic_count}` | Konu sayısı |
| `{post_count}` | Mesaj sayısı |
| `{last_url}` | Son mesaj URL |
| `{last_user}` | Son mesaj yazarı |
| `{last_title}` | Son konu başlığı |
| `{last_date}` | Son mesaj tarihi |
| `{last_avatar}` | Son mesaj atanın avatar URL |

## 🔀 Koşullu Bloklar
```html
[has-last-post]
    <div class="last-post">
        <img src="{last_avatar}" class="micro-avatar">
        <a href="{last_url}">{last_title}</a>
        <span>{last_user} - {last_date}</span>
    </div>
[/has-last-post]

[no-last-post]
    <div class="no-posts">Henüz mesaj yok</div>
[/no-last-post]

[has-subforums]
    <div class="subforums">{sub_cats_html}</div>
[/has-subforums]
```

---

# 📁 6. `blocks/topic_row.tpl` — Konu Satırı

Konu listesindeki her satır.

## 🧩 Etiketler
| Etiket | Açıklama |
|---|---|
| `{topic_class}` | CSS sınıfı |
| `{t_url}` | Konu URL |
| `{t_title}` | Başlık |
| `{t_desc}` | Konu kısa açıklaması |
| `{t_user}` | Konuyu açan |
| `{t_date}` | Açılış tarihi |
| `{t_replies}` | Cevap sayısı (formatlı) |
| `{t_views}` | Görüntülenme (formatlı) |
| `{t_prefix}` | Prefix HTML (renkli badge) |
| `{t_tags}` | Etiketler HTML |
| `{last_user}` | Son cevaplayan |
| `{last_date}` | Son cevap tarihi |
| `{last_avatar}` | Son cevaplayan avatar |
| `{last_url}` | Son mesaj URL |

## 🔀 Koşullu Bloklar
```html
[has-tags]
    <div class="tags">{t_tags}</div>
[/has-tags]

[has-last-post]
    <div class="last-post">
        <img src="{last_avatar}" class="micro-avatar">
        <a href="{last_url}">{last_user}</a> - {last_date}
    </div>
[/has-last-post]

[/has-last-post]

[is-pinned]
    <span class="badge-pinned">📌 Sabit</span>
[/is-pinned]

[is-locked]
    <span class="badge-locked">🔒 Kilitli</span>
[/is-locked]

[is-normal]
    <span class="badge-normal">💬 Normal</span>
[/is-normal]

[/is-normal]

[has-desc]
    <div class="desc">{t_desc}</div>
[/has-desc]
```

---

# 📁 7. `blocks/cat_wrap.tpl` — Kategori Sarmalayıcı

Ana kategorileri sarmalayan şablondur.

## 🧩 Etiketler
| Etiket | Açıklama |
|---|---|
| `{cat_name}` | Ana kategori adı |
| `{icon}` | Kategori ikonu (fa-folder vb.) |
| `{cat_forums}` | İçindeki alt forumların HTML listesi |

---

# 📁 8. `new_topic.tpl` & `edit_topic.tpl` — Konu Formları

## 🧩 Etiketler
| Etiket | Açıklama |
|---|---|
| `{cat_name}` | Kategori adı |
| `{cat_id}` | Kategori ID |
| `{prefix_select}` | Prefix select HTML |
| `{tags_input}` / `{tags_val}` | Etiket input HTML / değeri |
| `{description_input}` / `{description_val}` / `{description_field}` | Açıklama alanları |
| `{editor}` | WYSIWYG editör HTML |
| `{title_val}` | Başlık değeri (hata sonrası geri yükleme) |
| `{csrf_token}` | CSRF token |
| `{error}` | Hata mesajı |
| `{breadcrumb}` | Breadcrumb |
| `{SITEURL}` | Site URL |
| `{forum_js_vars}` | JS değişkenleri |
| `{lang_attach}` | Dosya ekle metni |
| `{pending_text}` | Onay bekleme mesajı (sadece new_topic) |

## 🔀 Koşullu Bloklar
```html
[error]
    <div class="alert alert-danger">{error}</div>
[/error]

[allow-upload]
    <input type="file" name="forum_file[]" multiple>
[/allow-upload]

[pending-notice]
    <div class="alert alert-warning">{pending_text}</div>
[/pending-notice]

[is-logged] ... [/is-logged]
[not-logged] ... [/not-logged]
```

---

# 📁 9. `search.tpl` — Arama Sonuçları

## 🧩 Etiketler
| Etiket | Açıklama |
|---|---|
| `{search_query}` | Aranan kelime |
| `{total_results}` | Bulunan sonuç sayısı |
| `{topics_list}` | Sonuç HTML |
| `{pagination}` | Sayfalama |
| `{breadcrumb}` | Breadcrumb |
| `{SITEURL}` | Site URL |
| `{search_url}` | Arama formu action URL |
| `{filter_user}` | Kullanıcı filtresi input değeri |
| `{filter_cat_options}` | Kategori dropdown option'ları HTML |
| `{filter_date_from}` | Başlangıç tarihi değeri |
| `{filter_date_to}` | Bitiş tarihi değeri |

---

# 📁 10. Bildirim ve Kullanıcı Blokları

## `notifications.tpl`
| Etiket | Açıklama |
|---|---|
| `{notif_content}` | Bildirim listesi HTML |
| `{forum_url}` | Forum ana sayfa URL |
| `{breadcrumb}` | Breadcrumb |
| `{SITEURL}` | Site URL |

## `blocks/notif_row.tpl`
| Etiket | Açıklama |
|---|---|
| `{notif_url}` | Bildirim hedef URL |
| `{notif_icon}` | Bildirim tipi ikonu (`fa-reply`, `fa-thumbs-up`, `fa-at`) |
| `{notif_color}` | Bildirim tipi rengi |
| `{notif_from}` | Bildirimi gönderen |
| `{notif_action}` | Bildirim eylem metni ("cevap verdi") |
| `{notif_topic}` | İlgili konu başlığı |
| `{notif_date}` | Bildirim tarihi |

```html
[has-link]
    <a href="{notif_url}" class="notif-row">...</a>
[/has-link]

[no-link]
    <div class="notif-row no-link">...</div>
[/no-link]
```

## `user_posts.tpl` & `blocks/user_post_row.tpl`
**Ana Etiketler:** `{user_name}`, `{user_avatar}`, `{total_posts}`, `{posts_list}`, `{pagination}`, `{breadcrumb}`, `{SITEURL}`
**Satır Etiketleri:** `{post_url}`, `{post_title}`, `{cat_url}`, `{cat_name}`, `{post_date}`, `{post_preview}`

---

# 📁 11. Ek (Attachment) Blokları

## `blocks/attachment_img.tpl`
| Etiket | Açıklama |
|---|---|
| `{att_url}` | Resim tam URL |
| `{att_name}` | Orijinal dosya adı |

## `blocks/attachment_file.tpl`
| Etiket | Açıklama |
|---|---|
| `{att_url}` | Dosya indirme URL |
| `{att_name}` | Orijinal dosya adı |
| `{att_size}` | Dosya boyutu (KB) |

## `blocks/attachments_wrap.tpl`
| Etiket | Açıklama |
|---|---|
| `{att_label}` | "Ekler" metni |
| `{att_count}` | Toplam ek sayısı |
| `{att_images}` | Resim ekleri HTML |
| `{att_files}` | Dosya ekleri HTML |

```html
[has-images]
    <div class="att-images">{att_images}</div>
[/has-images]

[has-files]
    <div class="att-files">{att_files}</div>
[/has-files]
```

---

# 📁 12. Etiket (Tag) ve Filtre Blokları

## Etiket Bulutu
**`blocks/tag_item.tpl`**: `{tag_url}`, `{tag_name}`
**`blocks/tag_cloud_item.tpl`**: `{tag_url}`, `{tag_name}`, `{tag_count}`, `{tag_size}`
**`blocks/tag_cloud_wrap.tpl`**: `{tag_cloud_items}`, `{empty_msg}`
```html
[has-tags] <div class="tag-cloud">{tag_cloud_items}</div> [/has-tags]
[no-tags] <div class="empty-tags">{empty_msg}</div> [/no-tags]
```

## Gün Filtresi
**`blocks/day_filter.tpl`**: `{filter_url}`, `{filter_active}`, `{filter_text}`
**`blocks/day_filter_wrap.tpl`**: `{day_filter_items}`

## Boş İçerik
**`blocks/empty.tpl`**: `{empty_msg}`

---

# 📁 13. Diğer Şablonlar

## `forum_block.tpl` — Yan Panel Widget
| Etiket | Açıklama |
|---|---|
| `{title}` | Konu başlığı |
| `{link}` | Konu URL |
| `{author}` | Yazar adı |
| `{category}` | Kategori adı |
| `{replies}` | Cevap sayısı |
| `{replies}` | Cevap sayısı |
| `{date}` | Tarih (formatlı) |
| `{avatar}` | Avatar URL |

## `pm.tpl` — Özel Mesaj (Pasif)
> ⚠️ conversations sistemine yönlendirme yapıldığından bu şablon aktif kullanılmamaktadır.

---

window.FORUM_TOPIC = "456";   // Sadece topic.tpl'de
```

### 🛠 Frontend Fonksiyonları (forum.js)

`forum.js` içerisinde tanımlı olan ve şablonlarda (`.tpl`) kullanılan temel fonksiyonlar:

| Fonksiyon | Açıklama | Kullanım Örneği |
|---|---|---|
| `forum.like(id, 'like')` | Mesajı beğenme / beğenmeme | `onclick="forum.like({post_id}, 'like')"` |
| `forum.quote(user, id)` | Mesajı alıntılama | `onclick="forum.quote('{p_user}', {post_id})"` |
| `forum.report(id)` | Mesajı şikayet etme | `onclick="forum.report({post_id})"` |
| `forum.deletePost(id)` | Mesajı silme (onaylı) | `onclick="forum.deletePost({post_id})"` |
| `forum.bumpTopic(id)` | Konuyu yukarı taşı (Bump) | `onclick="forum.bumpTopic({topic_id})"` |
| `forum.toggleFollow(id)` | Konu takibini aç/kapat | `onclick="forum.toggleFollow({topic_id})"` |
| `forum.markAllRead()` | Tüm bildirimleri okundu say | `onclick="forum.markAllRead()"` |
| `forum.topicAction(act, id)`| Konu yönetimi (lock, pin) | `onclick="forum.topicAction('lock', {topic_id})"` |

---

# 🏅 Grup Öncelikli Rütbe Sistemi — TPL Entegrasyonu

Admin panelde `for_group` değerine göre atanan rütbeler (Örn: Grup 1=Yönetici, Grup 3=Moderatör, Grup 5=VIP) ve ikonları otomatik desteklenir.

**Kullanım Akışı:**
1. Admin panelde rütbe ikonuna `fa-crown` yazarsanız → `[is-fa-rank]` bloğu çalışır.
2. Admin panelde rütbe ikonuna `ranks/admin.gif` yazarsanız → `[is-img-rank]` bloğu çalışır.
3. Kullanıcı Admin (Grup 1) ise ve 0 puanı varsa bile, puan bazlı "Yeni Üye" yerine grup bazlı "Yönetici" rütbesi `[has-rank]` bloğuna düşer.

```html
<!-- Post Row İçinde Rütbe Kullanımı -->
[has-rank]
    <div class="author-rank">
        [is-img-rank]
            <img src="{SITEURL}templates/{skin}/{rank_icon}" alt="{rank_title}">
        [/is-img-rank]
        [is-fa-rank]
            <span style="color:{rank_color}"><i class="fa {rank_icon}"></i> {rank_title}</span>
        [/is-fa-rank]
    </div>
[/has-rank]
```

---

# ✅ Dokümantasyon Sürüm Notları

Bu dokümantasyon tüm değişiklikleri kapsar:
- Grup bazlı rütbe sistemi (`for_group`) desteği.
- MyBB tarzı resim ikon (`[is-img-rank]` / `[is-fa-rank]`) desteği.
- Çevrimiçi/çevrimdışı (`[online]`/`[offline]`) blokları.
- Gelişmiş arama filtreleri etiketleri.
- Schema.org SEO etiketi (`{schema_jsonld}`).
- Eksik tüm JS ve moderate etiketleri eklenmiştir.
- `{t_desc}` ve `[has-desc]` desteği tüm liste sayfalarına (kategori vb.) yayılmıştır.
- Tüm frontend mantığı `forum.js` altında konsolide edilmiştir.
