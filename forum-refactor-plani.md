# DLE Native Forum — PHP Refactoring Rehberi
# "Klasik DLE Mimarisi" Geçiş Planı
# Hazırlayan: MWS / Dlehub
# Versiyon: v1.2.4 baz alınmıştır

=======================================================
## TEMEL FİKİR
=======================================================

DLE'nin kendi yapısına bak:

  show.full.php   → fullstory.tpl     (tek dosya)
  profile.php     → userinfo.tpl      (tek dosya)
  pm.php          → pm.tpl            (tek dosya)
  search.php      → searchresult.tpl  (tek dosya)

Birebir eşleşme. Tema yapan adam tek TPL açıyor, içine
her şeyi yazıyor. PHP sadece veriyi hazırlıyor.

Forum şu an böyle değil. main.php 10 tane TPL yüklüyor.
Bu belge bunu düzeltiyor.

=======================================================
## GENEL KURAL
=======================================================

Her action dosyası için:

  ÖNCE:  PHP döngüde her satır için TPL yükler,
         compile eder, ana gövdeye (content) basar.

  SONRA: PHP döngüde sadece ROW TPL'yi yükler,
         $html değişkenine biriktirir.
         En son MASTER TPL yükler, {etiket} ile basar.

Silinecek TPL'ler (artık gerekmiyor):
  forum/blocks/cat_head.tpl
  forum/blocks/cat_foot.tpl
  forum/blocks/forum_list_head.tpl
  forum/blocks/forum_list_foot.tpl
  forum/blocks/day_filter_wrap.tpl
  forum/blocks/sub_forums_wrap.tpl
  forum/blocks/subcat_links.tpl
  forum/blocks/empty.tpl
  forum/blocks/tag_cloud_wrap.tpl
  forum/blocks/attachments_wrap.tpl

Kalacak ROW TPL'ler (döngüde hâlâ kullanılıyor):
  forum/blocks/forum_row.tpl
  forum/blocks/topic_row.tpl
  forum/blocks/post_row.tpl
  forum/blocks/tag_item.tpl
  forum/blocks/tag_cloud_item.tpl
  forum/blocks/notif_row.tpl
  forum/blocks/user_post_row.tpl
  forum/blocks/attachment_img.tpl
  forum/blocks/attachment_file.tpl
  forum/blocks/day_filter.tpl

=======================================================
## DOSYA BAZINDA REFACTOR PLANI
=======================================================

-------------------------------------------------------
### 1. engine/forum/actions/main.php
-------------------------------------------------------

MEVCUT DURUM — 10 TPL yüklüyor:
  cat_head.tpl, forum_list_head.tpl, forum_row.tpl,
  subcat_links.tpl, forum_list_foot.tpl, empty.tpl,
  cat_foot.tpl, main.tpl

HEDEF — 2 TPL kalacak:
  forum/blocks/forum_row.tpl   (döngü)
  forum/main.tpl               (master)

YAPILACAK DEĞİŞİKLİK:

  // SİL: cat_head, forum_list_head, cat_foot,
  //       forum_list_foot, subcat_links, empty
  //       load_template + compile bloklarını tamamen kaldır.

  // DEĞİŞTİR: forum_row döngüsünü şöyle yap:

  $forum_cats_html = "";
  foreach ($cats as $cat_id => $cat) {

      $forum_rows_html = "";
      foreach ($cat['forums'] as $forum) {

          // Son mesaj bilgisi
          if ($forum['last_post_id']) {
              $has_last_post_open  = "";
              $has_last_post_close = "";
              $no_last_post_open   = "<!--";
              $no_last_post_close  = "-->";
          } else {
              $has_last_post_open  = "<!--";
              $has_last_post_close = "-->";
              $no_last_post_open   = "";
              $no_last_post_close  = "";
          }

          // Alt forum linkleri
          $sub_html = "";
          if (!empty($forum['subforums'])) {
              foreach ($forum['subforums'] as $sf) {
                  $sub_html .= '<a href="' . $sf['url'] . '">' . $sf['name'] . '</a> ';
              }
          }

          $tpl->load_template('forum/blocks/forum_row.tpl');
          $tpl->set('{forum_url}',    $forum['url']);
          $tpl->set('{icon_class}',   $forum['icon']);
          $tpl->set('{forum_name}',   $forum['name']);
          $tpl->set('{forum_desc}',   $forum['desc']);
          $tpl->set('{topic_count}',  $forum['topic_count']);
          $tpl->set('{post_count}',   $forum['post_count']);
          $tpl->set('{sub_cats_html}',$sub_html);
          $tpl->set('{last_user}',    $forum['last_user']);
          $tpl->set('{last_date}',    $forum['last_date']);
          $tpl->set('{last_title}',   $forum['last_title']);
          $tpl->set('{last_url}',     $forum['last_url']);
          $tpl->set('{last_avatar}',  $forum['last_avatar']);
          // has-last-post / no-last-post blokları
          $tpl->set('[has-last-post]',  $has_last_post_open);
          $tpl->set('[/has-last-post]', $has_last_post_close);
          $tpl->set('[no-last-post]',   $no_last_post_open);
          $tpl->set('[/no-last-post]',  $no_last_post_close);
          // has-subforums
          if ($sub_html) {
              $tpl->set('[has-subforums]',  "");
              $tpl->set('[/has-subforums]', "");
          } else {
              $tpl->set_block("'\\[has-subforums\\](.*?)\\[/has-subforums\\]'si", "");
          }
          $tpl->compile('forum_row_block');
          $forum_rows_html .= $tpl->result['forum_row_block'];
          $tpl->clear();
      }

      // Kategori grubunu HTML string olarak biriktir
      $forum_cats_html .= '<div class="df-cat-group">';
      $forum_cats_html .= '<div class="df-cat-head">' . $cat['name'] . '</div>';
      $forum_cats_html .= $forum_rows_html;
      $forum_cats_html .= '</div>';
  }

  // Hiç forum yoksa
  if (!$forum_cats_html) {
      $forum_cats_html = '<div class="df-empty"><p>' . fl('no_forums') . '</p></div>';
  }

  // MASTER TPL
  $tpl->load_template('forum/main.tpl');
  $tpl->set('{forum_list}',    $forum_cats_html);
  $tpl->set('{total_topics}',  $total_topics);
  $tpl->set('{total_posts}',   $total_posts);
  $tpl->set('{total_members}', $total_members);
  $tpl->set('{online_count}',  $online_count);
  $tpl->set('{online_members}',$online_members);
  $tpl->set('{online_guests}', $online_guests);
  $tpl->set('{last_member}',   $last_member_link);
  $tpl->set('{breadcrumb}',    $breadcrumb);
  $tpl->set('{SITEURL}',       $config['http_home_url']);
  if ($is_logged) {
      $tpl->set_block("'\\[is-logged\\](.*?)\\[/is-logged\\]'si",   "\\1");
      $tpl->set_block("'\\[not-logged\\](.*?)\\[/not-logged\\]'si", "");
  } else {
      $tpl->set_block("'\\[is-logged\\](.*?)\\[/is-logged\\]'si",   "");
      $tpl->set_block("'\\[not-logged\\](.*?)\\[/not-logged\\]'si", "\\1");
  }
  $tpl->compile('content');
  $tpl->clear();
  $metatags['title'] = fl('forum_title');

FORUM/MAIN.TPL'DE OLMASI GEREKEN ETİKETLER:
  {forum_list}      ← tüm kategori+forum HTML'i buraya gelir
  {total_topics}
  {total_posts}
  {total_members}
  {online_count}
  {online_members}
  {online_guests}
  {last_member}
  {breadcrumb}
  [is-logged]...[/is-logged]
  [not-logged]...[/not-logged]

-------------------------------------------------------
### 2. engine/forum/actions/category.php
-------------------------------------------------------

MEVCUT DURUM — 9 TPL yüklüyor:
  forum_row.tpl, subcat_links.tpl, sub_forums_wrap.tpl,
  empty.tpl, topic_row.tpl, tag_item.tpl, category.tpl

HEDEF — 3 TPL kalacak:
  forum/blocks/topic_row.tpl    (döngü)
  forum/blocks/tag_item.tpl     (mini döngü)
  forum/category.tpl            (master)

NOT: Alt forumlar (subforums) artık category.tpl içinde
     {sub_forums_html} etiketi ile gösterilecek.
     PHP string olarak hazırlayıp basacak.

YAPILACAK DEĞİŞİKLİK:

  // Sub forums HTML'i PHP'de string olarak hazırla
  $sub_forums_html = "";
  if (!empty($subforums)) {
      foreach ($subforums as $sf) {
          $sub_forums_html .= '<a href="'.$sf['url'].'" class="df-subforum-link">';
          $sub_forums_html .= '<i class="fa fa-folder-o"></i> '.$sf['name'];
          $sub_forums_html .= '</a> ';
      }
  }

  // Topic satırları
  $topics_html = "";
  foreach ($topics as $topic) {

      // Tag'ler
      $tags_html = "";
      if ($topic['tags']) {
          foreach (explode(',', $topic['tags']) as $tag) {
              $tag = trim($tag);
              $tpl->load_template('forum/blocks/tag_item.tpl');
              $tpl->set('{tag_name}', $tag);
              $tpl->set('{tag_url}',  fl_url('tag') . urlencode($tag));
              $tpl->compile('tag_item_block');
              $tags_html .= $tpl->result['tag_item_block'];
              $tpl->clear();
          }
      }

      // Son mesaj
      $last_open = $last_close = $no_last_open = $no_last_close = "";
      if ($topic['last_post_id']) {
          $no_last_open = "<!--"; $no_last_close = "-->";
      } else {
          $last_open = "<!--"; $last_close = "-->";
      }

      $tpl->load_template('forum/blocks/topic_row.tpl');
      $tpl->set('{topic_class}', $topic['is_pinned'] ? 'df-topic-pinned' : '');
      $tpl->set('{t_url}',       $topic['url']);
      $tpl->set('{t_title}',     $topic['title']);
      $tpl->set('{t_prefix}',    $topic['prefix_html']);
      $tpl->set('{t_desc}',      $topic['description']);
      $tpl->set('{t_tags}',      $tags_html);
      $tpl->set('{t_user}',      $topic['autor']);
      $tpl->set('{t_date}',      $topic['date']);
      $tpl->set('{t_replies}',   $topic['replies']);
      $tpl->set('{t_views}',     $topic['views']);
      $tpl->set('{last_user}',   $topic['last_user']);
      $tpl->set('{last_date}',   $topic['last_date']);
      $tpl->set('{last_avatar}', $topic['last_avatar']);
      $tpl->set('{last_url}',    $topic['last_url']);
      // Bloklar
      $tpl->set('[has-last-post]',  $last_open);
      $tpl->set('[/has-last-post]', $last_close);
      $tpl->set('[no-last-post]',   $no_last_open);
      $tpl->set('[/no-last-post]',  $no_last_close);
      $tpl->set_block("'\\[is-pinned\\](.*?)\\[/is-pinned\\]'si",
          $topic['is_pinned'] ? "\\1" : "");
      $tpl->set_block("'\\[not-pinned\\](.*?)\\[/not-pinned\\]'si",
          !$topic['is_pinned'] ? "\\1" : "");
      $tpl->set_block("'\\[is-locked\\](.*?)\\[/is-locked\\]'si",
          $topic['is_locked'] ? "\\1" : "");
      $tpl->set_block("'\\[is-normal\\](.*?)\\[/is-normal\\]'si",
          (!$topic['is_pinned'] && !$topic['is_locked']) ? "\\1" : "");
      $tpl->set_block("'\\[is-unread\\](.*?)\\[/is-unread\\]'si",
          $topic['is_unread'] ? "\\1" : "");
      $tpl->set_block("'\\[has-desc\\](.*?)\\[/has-desc\\]'si",
          $topic['description'] ? "\\1" : "");
      $tpl->set_block("'\\[has-tags\\](.*?)\\[/has-tags\\]'si",
          $tags_html ? "\\1" : "");
      $tpl->compile('topic_row_block');
      $topics_html .= $tpl->result['topic_row_block'];
      $tpl->clear();
  }

  if (!$topics_html) {
      $topics_html = '<div class="df-empty"><p>' . fl('no_topics') . '</p></div>';
  }

  // MASTER TPL
  $tpl->load_template('forum/category.tpl');
  $tpl->set('{cat_name}',       $cat_info['name']);
  $tpl->set('{cat_desc}',       $cat_info['desc']);
  $tpl->set('{cat_id}',         $cat_info['id']);
  $tpl->set('{sub_forums_html}',$sub_forums_html);
  $tpl->set('{topics_list}',    $topics_html);
  $tpl->set('{pagination}',     $pagination_html);
  $tpl->set('{new_topic_url}',  $new_topic_url);
  $tpl->set('{mark_read_url}',  $mark_read_url);
  $tpl->set('{breadcrumb}',     $breadcrumb);
  $tpl->set('{SITEURL}',        $config['http_home_url']);
  if ($sub_forums_html) {
      $tpl->set('[has-subforums]',  "");
      $tpl->set('[/has-subforums]', "");
  } else {
      $tpl->set_block("'\\[has-subforums\\](.*?)\\[/has-subforums\\]'si", "");
  }
  if ($is_logged) {
      $tpl->set_block("'\\[is-logged\\](.*?)\\[/is-logged\\]'si",   "\\1");
      $tpl->set_block("'\\[not-logged\\](.*?)\\[/not-logged\\]'si", "");
  } else {
      $tpl->set_block("'\\[is-logged\\](.*?)\\[/is-logged\\]'si",   "");
      $tpl->set_block("'\\[not-logged\\](.*?)\\[/not-logged\\]'si", "\\1");
  }
  $tpl->compile('content');
  $tpl->clear();

FORUM/CATEGORY.TPL'DE OLMASI GEREKEN ETİKETLER:
  {cat_name}
  {cat_desc}
  {sub_forums_html}   ← PHP'nin hazırladığı HTML string
  {topics_list}       ← tüm topic satırları buraya gelir
  {pagination}
  {new_topic_url}
  {mark_read_url}
  {breadcrumb}
  [has-subforums]...[/has-subforums]
  [is-logged]...[/is-logged]
  [not-logged]...[/not-logged]

-------------------------------------------------------
### 3. engine/forum/actions/topic.php
-------------------------------------------------------

MEVCUT DURUM — 8 TPL yüklüyor:
  post_row.tpl (3x), attachment_img.tpl,
  attachment_file.tpl, attachments_wrap.tpl,
  tag_item.tpl, topic.tpl

HEDEF — 4 TPL kalacak:
  forum/blocks/post_row.tpl        (döngü)
  forum/blocks/attachment_img.tpl  (iç döngü)
  forum/blocks/attachment_file.tpl (iç döngü)
  forum/blocks/tag_item.tpl        (mini döngü)
  forum/topic.tpl                  (master)

NOT: attachments_wrap.tpl kalkıyor. Attachment sarmalayıcı
     HTML doğrudan topic.tpl veya post_row.tpl'ye yazılır.

YAPILACAK DEĞİŞİKLİK:

  // TAG HTML
  $tags_html = "";
  foreach (explode(',', $topic['tags']) as $tag) {
      $tag = trim($tag);
      if (!$tag) continue;
      $tpl->load_template('forum/blocks/tag_item.tpl');
      $tpl->set('{tag_name}', $tag);
      $tpl->set('{tag_url}',  fl_url('tag') . urlencode($tag));
      $tpl->compile('tag_item_block');
      $tags_html .= $tpl->result['tag_item_block'];
      $tpl->clear();
  }

  // POSTS DÖNGÜSÜ
  $posts_html = "";
  foreach ($posts as $post) {

      // Ekler
      $att_imgs_html  = "";
      $att_files_html = "";
      foreach ($post['attachments'] as $att) {
          if ($att['is_image']) {
              $tpl->load_template('forum/blocks/attachment_img.tpl');
              $tpl->set('{att_url}',  $att['url']);
              $tpl->set('{att_name}', $att['name']);
              $tpl->compile('att_img_block');
              $att_imgs_html .= $tpl->result['att_img_block'];
              $tpl->clear();
          } else {
              $tpl->load_template('forum/blocks/attachment_file.tpl');
              $tpl->set('{att_url}',  $att['url']);
              $tpl->set('{att_name}', $att['name']);
              $tpl->set('{att_size}', $att['size']);
              $tpl->compile('att_file_block');
              $att_files_html .= $tpl->result['att_file_block'];
              $tpl->clear();
          }
      }

      // Ek sarmalayıcı HTML - artık PHP string'i
      $attachments_html = "";
      if ($att_imgs_html || $att_files_html) {
          $attachments_html  = '<div class="df-attachments">';
          $attachments_html .= '<div class="df-att-images">' . $att_imgs_html . '</div>';
          $attachments_html .= '<div class="df-att-files">'  . $att_files_html . '</div>';
          $attachments_html .= '</div>';
      }

      // Post satırı
      $tpl->load_template('forum/blocks/post_row.tpl');
      $tpl->set('{post_id}',          $post['id']);
      $tpl->set('{post_class}',       $post['is_op'] ? 'df-post-op' : '');
      $tpl->set('{post_num}',         $post['num']);
      $tpl->set('{p_user}',           $post['autor']);
      $tpl->set('{p_avatar}',         $post['avatar']);
      $tpl->set('{p_profile}',        $post['profile_url']);
      $tpl->set('{p_date}',           $post['date']);
      $tpl->set('{p_text}',           $post['text']);
      $tpl->set('{p_sig}',            $post['signature']);
      $tpl->set('{edit_date}',        $post['edit_date']);
      $tpl->set('{edit_url}',         $post['edit_url']);
      $tpl->set('{forum_post_count}', $post['forum_posts']);
      $tpl->set('{forum_points}',     $post['points']);
      $tpl->set('{forum_rep}',        $post['rep']);
      $tpl->set('{rep_percent}',      $post['rep_percent']);
      $tpl->set('{group_name}',       $post['group_name']);
      $tpl->set('{group_color}',      $post['group_color']);
      $tpl->set('{rank_title}',       $post['rank_title']);
      $tpl->set('{rank_icon}',        $post['rank_icon']);
      $tpl->set('{rank_color}',       $post['rank_color']);
      $tpl->set('{likes_count}',      $post['likes']);
      $tpl->set('{dislikes_count}',   $post['dislikes']);
      $tpl->set('{attachments_html}', $attachments_html);
      $tpl->set('{pm_url}',           $post['pm_url']);
      // BLOKLAR
      if ($is_logged) {
          $tpl->set_block("'\\[is-logged\\](.*?)\\[/is-logged\\]'si",   "\\1");
          $tpl->set_block("'\\[not-logged\\](.*?)\\[/not-logged\\]'si", "");
          $tpl->set_block("'\\[can-edit\\](.*?)\\[/can-edit\\]'si",
              $post['can_edit'] ? "\\1" : "");
          $tpl->set_block("'\\[can-delete\\](.*?)\\[/can-delete\\]'si",
              $post['can_delete'] ? "\\1" : "");
          $tpl->set_block("'\\[not-self\\](.*?)\\[/not-self\\]'si",
              !$post['is_self'] ? "\\1" : "");
          $tpl->set_block("'\\[is-liked\\](.*?)\\[/is-liked\\]'si",
              $post['user_liked'] ? "\\1" : "");
          $tpl->set_block("'\\[is-disliked\\](.*?)\\[/is-disliked\\]'si",
              $post['user_disliked'] ? "\\1" : "");
      } else {
          $tpl->set_block("'\\[is-logged\\](.*?)\\[/is-logged\\]'si",     "");
          $tpl->set_block("'\\[not-logged\\](.*?)\\[/not-logged\\]'si",   "\\1");
          $tpl->set_block("'\\[not-self\\](.*?)\\[/not-self\\]'si",       "");
          $tpl->set_block("'\\[is-liked\\](.*?)\\[/is-liked\\]'si",       "");
          $tpl->set_block("'\\[is-disliked\\](.*?)\\[/is-disliked\\]'si", "");
          $tpl->set_block("'\\[can-edit\\](.*?)\\[/can-edit\\]'si",       "");
          $tpl->set_block("'\\[can-delete\\](.*?)\\[/can-delete\\]'si",   "");
      }
      $tpl->set_block("'\\[has-rank\\](.*?)\\[/has-rank\\]'si",
          $post['rank_title'] ? "\\1" : "");
      $tpl->set_block("'\\[is-fa-rank\\](.*?)\\[/is-fa-rank\\]'si",
          $post['rank_is_fa'] ? "\\1" : "");
      $tpl->set_block("'\\[is-img-rank\\](.*?)\\[/is-img-rank\\]'si",
          $post['rank_is_img'] ? "\\1" : "");
      $tpl->set_block("'\\[has-sig\\](.*?)\\[/has-sig\\]'si",
          $post['signature'] ? "\\1" : "");
      $tpl->set_block("'\\[is-edited\\](.*?)\\[/is-edited\\]'si",
          $post['edit_date'] ? "\\1" : "");
      $tpl->set_block("'\\[has-attachments\\](.*?)\\[/has-attachments\\]'si",
          $attachments_html ? "\\1" : "");
      $tpl->compile('post_row_block');
      $posts_html .= $tpl->result['post_row_block'];
      $tpl->clear();
  }

  // MASTER TPL
  $tpl->load_template('forum/topic.tpl');
  $tpl->set('{topic_title}',       $topic['title']);
  $tpl->set('{topic_description}', $topic['description']);
  $tpl->set('{topic_tags}',        $tags_html);
  $tpl->set('{topic_id}',          $topic['id']);
  $tpl->set('{posts_list}',        $posts_html);
  $tpl->set('{pagination}',        $pagination_html);
  $tpl->set('{editor}',            $editor_html);
  $tpl->set('{reply_error}',       $reply_error);
  $tpl->set('{csrf_token}',        $csrf_token);
  $tpl->set('{notif_url}',         $notif_url);
  $tpl->set('{notif_count}',       $notif_count);
  $tpl->set('{notif_badge_display}', $notif_count > 0 ? 'inline-flex' : 'none');
  $tpl->set('{forum_js_vars}',     $forum_js_vars);
  $tpl->set('{breadcrumb}',        $breadcrumb);
  $tpl->set('{SITEURL}',           $config['http_home_url']);
  // Konu durum blokları
  $tpl->set_block("'\\[is-pinned\\](.*?)\\[/is-pinned\\]'si",
      $topic['is_pinned'] ? "\\1" : "");
  $tpl->set_block("'\\[not-pinned\\](.*?)\\[/not-pinned\\]'si",
      !$topic['is_pinned'] ? "\\1" : "");
  $tpl->set_block("'\\[is-locked\\](.*?)\\[/is-locked\\]'si",
      $topic['is_locked'] ? "\\1" : "");
  $tpl->set_block("'\\[not-locked\\](.*?)\\[/not-locked\\]'si",
      !$topic['is_locked'] ? "\\1" : "");
  $tpl->set_block("'\\[has-tags\\](.*?)\\[/has-tags\\]'si",
      $tags_html ? "\\1" : "");
  $tpl->set_block("'\\[has-error\\](.*?)\\[/has-error\\]'si",
      $reply_error ? "\\1" : "");
  // Oturum blokları
  if ($is_logged) {
      $tpl->set_block("'\\[is-logged\\](.*?)\\[/is-logged\\]'si",   "\\1");
      $tpl->set_block("'\\[not-logged\\](.*?)\\[/not-logged\\]'si", "");
      $tpl->set_block("'\\[is-following\\](.*?)\\[/is-following\\]'si",
          $is_following ? "\\1" : "");
      $tpl->set_block("'\\[not-following\\](.*?)\\[/not-following\\]'si",
          !$is_following ? "\\1" : "");
      $tpl->set_block("'\\[can-moderate\\](.*?)\\[/can-moderate\\]'si",
          $can_moderate ? "\\1" : "");
      $tpl->set_block("'\\[can-bump\\](.*?)\\[/can-bump\\]'si",
          $can_bump ? "\\1" : "");
  } else {
      $tpl->set_block("'\\[is-logged\\](.*?)\\[/is-logged\\]'si",     "");
      $tpl->set_block("'\\[not-logged\\](.*?)\\[/not-logged\\]'si",   "\\1");
      $tpl->set_block("'\\[is-following\\](.*?)\\[/is-following\\]'si",   "");
      $tpl->set_block("'\\[not-following\\](.*?)\\[/not-following\\]'si", "");
      $tpl->set_block("'\\[can-moderate\\](.*?)\\[/can-moderate\\]'si",   "");
      $tpl->set_block("'\\[can-bump\\](.*?)\\[/can-bump\\]'si",           "");
  }
  $tpl->compile('content');
  $tpl->clear();

FORUM/TOPIC.TPL'DE OLMASI GEREKEN ETİKETLER:
  {topic_title}
  {topic_description}
  {topic_tags}         ← PHP'nin hazırladığı tag HTML'leri
  {posts_list}         ← tüm post satırları buraya gelir
  {pagination}
  {editor}
  {reply_error}
  {csrf_token}
  {notif_url}
  {notif_count}
  {notif_badge_display}
  {breadcrumb}
  [is-pinned]...[/is-pinned]
  [not-pinned]...[/not-pinned]
  [is-locked]...[/is-locked]
  [not-locked]...[/not-locked]
  [has-tags]...[/has-tags]
  [has-error]...[/has-error]
  [is-logged]...[/is-logged]
  [not-logged]...[/not-logged]
  [is-following]...[/is-following]
  [not-following]...[/not-following]
  [can-moderate]...[/can-moderate]
  [can-bump]...[/can-bump]

-------------------------------------------------------
### 4. engine/forum/actions/notifications.php
-------------------------------------------------------

MEVCUT DURUM — 3 TPL:
  notif_row.tpl, empty.tpl, notifications.tpl

HEDEF — 2 TPL kalacak:
  forum/blocks/notif_row.tpl   (döngü)
  forum/notifications.tpl      (master)

YAPILACAK DEĞİŞİKLİK:

  $notifs_html = "";
  foreach ($notifications as $notif) {
      $tpl->load_template('forum/blocks/notif_row.tpl');
      $tpl->set('{notif_icon}',    $notif['icon']);
      $tpl->set('{notif_color}',   $notif['color']);
      $tpl->set('{notif_from}',    $notif['from_user']);
      $tpl->set('{notif_topic}',   $notif['topic_title']);
      $tpl->set('{notif_url}',     $notif['url']);
      $tpl->set('{notif_date}',    $notif['date']);
      $tpl->set('{notif_action}',  $notif['action_text']);
      $tpl->set('{notif_content}', $notif['content']);
      if ($notif['url']) {
          $tpl->set('[has-link]',  "");
          $tpl->set('[/has-link]', "");
      } else {
          $tpl->set_block("'\\[has-link\\](.*?)\\[/has-link\\]'si", "");
      }
      $tpl->compile('notif_row_block');
      $notifs_html .= $tpl->result['notif_row_block'];
      $tpl->clear();
  }

  if (!$notifs_html) {
      $notifs_html = '<div class="df-empty"><p>' . fl('no_notifications') . '</p></div>';
  }

  $tpl->load_template('forum/notifications.tpl');
  $tpl->set('{notif_content}', $notifs_html);
  $tpl->set('{forum_url}',    fl_url('main'));
  $tpl->set('{breadcrumb}',   $breadcrumb);
  $tpl->set('{SITEURL}',      $config['http_home_url']);
  $tpl->compile('content');
  $tpl->clear();

-------------------------------------------------------
### 5. engine/forum/actions/search.php
-------------------------------------------------------

MEVCUT DURUM:
  topic_row.tpl, category.tpl (search için category.tpl kullanıyor!)

HEDEF — 2 TPL kalacak:
  forum/blocks/topic_row.tpl    (döngü - aynı)
  forum/search.tpl              (YENİ master - category.tpl DEĞİL)

ÖNEMLİ: search.php şu an category.tpl'yi yüklüyor.
Bu yanlış. Arama sonuçları için ayrı forum/search.tpl
oluşturulacak. Böylece tasarımcı ikisini bağımsız tasarlayabilir.

  // topic_row döngüsü category.php ile aynı mantık (yukarıya bak)
  // sadece master TPL değişiyor:

  $tpl->load_template('forum/search.tpl');   // category.tpl değil!
  $tpl->set('{search_query}',  $search_query);
  $tpl->set('{result_count}',  $result_count);
  $tpl->set('{topics_list}',   $topics_html);
  $tpl->set('{pagination}',    $pagination_html);
  $tpl->set('{breadcrumb}',    $breadcrumb);
  $tpl->set('{SITEURL}',       $config['http_home_url']);
  $tpl->compile('content');
  $tpl->clear();

FORUM/SEARCH.TPL'DE OLMASI GEREKEN ETİKETLER:
  {search_query}   ← arama terimi
  {result_count}   ← kaç sonuç bulundu
  {topics_list}    ← topic satırları
  {pagination}
  {breadcrumb}

-------------------------------------------------------
### 6. engine/forum/actions/user_posts.php
-------------------------------------------------------

MEVCUT DURUM — 4 TPL:
  user_post_row.tpl, empty.tpl, user_posts.tpl

HEDEF — 2 TPL kalacak:
  forum/blocks/user_post_row.tpl   (döngü)
  forum/user_posts.tpl             (master)

  $posts_html = "";
  foreach ($user_posts as $post) {
      $tpl->load_template('forum/blocks/user_post_row.tpl');
      $tpl->set('{post_url}',      $post['url']);
      $tpl->set('{post_title}',    $post['topic_title']);
      $tpl->set('{cat_url}',       $post['cat_url']);
      $tpl->set('{cat_name}',      $post['cat_name']);
      $tpl->set('{post_date}',     $post['date']);
      $tpl->set('{post_preview}',  $post['preview']);
      $tpl->compile('user_post_row_block');
      $posts_html .= $tpl->result['user_post_row_block'];
      $tpl->clear();
  }

  if (!$posts_html) {
      $posts_html = '<div class="df-empty"><p>' . fl('no_posts') . '</p></div>';
  }

  $tpl->load_template('forum/user_posts.tpl');
  $tpl->set('{user_name}',   $user['name']);
  $tpl->set('{user_avatar}', $user['avatar']);
  $tpl->set('{total_posts}', $user['forum_posts']);
  $tpl->set('{posts_list}',  $posts_html);
  $tpl->set('{pagination}',  $pagination_html);
  $tpl->set('{breadcrumb}',  $breadcrumb);
  $tpl->set('{SITEURL}',     $config['http_home_url']);
  $tpl->compile('content');
  $tpl->clear();

-------------------------------------------------------
### 7. engine/forum/actions/unanswered.php
       engine/forum/actions/active.php
       engine/forum/actions/tag.php
-------------------------------------------------------

MEVCUT DURUM: Hepsi category.tpl kullanıyor.
Bu yanlış. Her biri ayrı master TPL almalı.

HEDEF:
  unanswered.php → forum/unanswered.tpl  (YENİ)
  active.php     → forum/active.tpl      (YENİ)
  tag.php        → forum/tag.tpl         (YENİ)

Mantık topic_row döngüsü için category.php ile aynı.
Sadece master TPL ismi değişiyor.

active.php için day_filter HTML'i:
  // day_filter_wrap da kalkıyor
  // day_filter.tpl döngüsünden çıkan HTML doğrudan
  // {day_filter_html} etiketiyle active.tpl'ye basılıyor

  $day_filter_html = "";
  foreach ($day_filters as $filter) {
      $tpl->load_template('forum/blocks/day_filter.tpl');
      $tpl->set('{filter_label}', $filter['label']);
      $tpl->set('{filter_url}',   $filter['url']);
      $tpl->set('{filter_class}', $filter['active'] ? 'df-active' : '');
      $tpl->compile('day_filter_block');
      $day_filter_html .= $tpl->result['day_filter_block'];
      $tpl->clear();
  }

  $tpl->load_template('forum/active.tpl');
  $tpl->set('{day_filter_html}', $day_filter_html);
  $tpl->set('{topics_list}',     $topics_html);
  // ...
  $tpl->compile('content');

tag.php için tag cloud:
  $tag_cloud_html = "";
  foreach ($all_tags as $tag) {
      $tpl->load_template('forum/blocks/tag_cloud_item.tpl');
      $tpl->set('{tag_name}',  $tag['name']);
      $tpl->set('{tag_url}',   $tag['url']);
      $tpl->set('{tag_count}', $tag['count']);
      $tpl->set('{tag_size}',  $tag['size']);
      $tpl->compile('tag_cloud_item_block');
      $tag_cloud_html .= $tpl->result['tag_cloud_item_block'];
      $tpl->clear();
  }

  if (!$tag_cloud_html) {
      $tag_cloud_html = '<div class="df-empty"><p>' . fl('no_tags') . '</p></div>';
  }

  $tpl->load_template('forum/tag.tpl');
  $tpl->set('{tag_cloud_html}', $tag_cloud_html);
  $tpl->set('{topics_list}',    $topics_html);     // tag'e ait konular
  $tpl->set('{current_tag}',    $current_tag);
  // ...
  $tpl->compile('content');

-------------------------------------------------------
### 8. engine/forum/actions/pm.php
-------------------------------------------------------

MEVCUT DURUM: Zaten doğru. pm.tpl tek master TPL.
Sadece içindeki 3 görünüm PHP blok tag'larıyla yönetiliyor.

  [compose]...[/compose]   ← yeni mesaj yazma
  [inbox]...[/inbox]       ← gelen kutusu listesi
  [read]...[/read]         ← mesaj okuma

DEĞİŞİKLİK GEREKMİYOR. ✅

=======================================================
## YENİ TPL DOSYA LİSTESİ (Refactor Sonrası)
=======================================================

MASTER TPL'ler (tema yapan bunları düzenler):
  forum/main.tpl          ← forum ana sayfa
  forum/category.tpl      ← kategori / konu listesi
  forum/topic.tpl         ← konu / mesajlar
  forum/search.tpl        ← arama sonuçları (YENİ)
  forum/pm.tpl            ← özel mesajlar
  forum/notifications.tpl ← bildirimler
  forum/new_topic.tpl     ← yeni konu formu
  forum/user_posts.tpl    ← kullanıcı mesajları
  forum/unanswered.tpl    ← cevapsız konular (YENİ)
  forum/active.tpl        ← aktif konular (YENİ)
  forum/tag.tpl           ← etiket sayfası (YENİ)
  forum/forum_block.tpl   ← sidebar widget (değişmez)

ROW TPL'ler (tema yapan bunları da düzenler):
  forum/blocks/forum_row.tpl
  forum/blocks/topic_row.tpl
  forum/blocks/post_row.tpl
  forum/blocks/tag_item.tpl
  forum/blocks/tag_cloud_item.tpl
  forum/blocks/notif_row.tpl
  forum/blocks/user_post_row.tpl
  forum/blocks/attachment_img.tpl
  forum/blocks/attachment_file.tpl
  forum/blocks/day_filter.tpl

TOPLAM: 12 master + 10 row = 22 TPL dosyası
(Eski yapıda 28+ dosya vardı, 6+ gereksiz dosya silindi)

=======================================================
## SİLİNECEK TPL DOSYALARI
=======================================================

  forum/blocks/cat_head.tpl          → KALDIRILACAK
  forum/blocks/cat_foot.tpl          → KALDIRILACAK
  forum/blocks/forum_list_head.tpl   → KALDIRILACAK
  forum/blocks/forum_list_foot.tpl   → KALDIRILACAK
  forum/blocks/day_filter_wrap.tpl   → KALDIRILACAK
  forum/blocks/sub_forums_wrap.tpl   → KALDIRILACAK
  forum/blocks/subcat_links.tpl      → KALDIRILACAK
  forum/blocks/empty.tpl             → KALDIRILACAK
  forum/blocks/tag_cloud_wrap.tpl    → KALDIRILACAK
  forum/blocks/attachments_wrap.tpl  → KALDIRILACAK

=======================================================
## TEMA YAPAN İÇİN ÖZET
=======================================================

Refactor tamamlandığında tema yapan kişi şunu görür:

  forum/
  ├── main.tpl            "Forum ana sayfa"
  ├── category.tpl        "Konu listesi"
  ├── topic.tpl           "Mesajlar"
  ├── search.tpl          "Arama sonuçları"
  ├── pm.tpl              "Özel mesajlar"
  ├── notifications.tpl   "Bildirimler"
  ├── new_topic.tpl       "Yeni konu formu"
  ├── user_posts.tpl      "Kullanıcı mesajları"
  ├── unanswered.tpl      "Cevapsız konular"
  ├── active.tpl          "Aktif konular"
  ├── tag.tpl             "Etiket sayfası"
  ├── forum_block.tpl     "Sidebar widget"
  └── blocks/
      ├── forum_row.tpl   "Tek forum satırı"
      ├── topic_row.tpl   "Tek konu satırı"
      ├── post_row.tpl    "Tek mesaj satırı"
      ├── tag_item.tpl    "Tek etiket"
      ├── tag_cloud_item  "Etiket bulutu öğesi"
      ├── notif_row.tpl   "Tek bildirim"
      ├── user_post_row   "Kullanıcı mesaj satırı"
      ├── attachment_img  "Resim eki"
      ├── attachment_file "Dosya eki"
      └── day_filter.tpl  "Gün filtre butonu"

DLE'nin kendi yapısıyla birebir paralel. Temiz, net, kolay.
