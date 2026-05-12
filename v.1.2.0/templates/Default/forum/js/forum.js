/**
 * DLE Native Forum — Core Frontend Engine
 * PHP Çekirdeği ve TPL yapısıyla tam uyumlu sürüm
 */
var forum = {
  // 1. Beğeni ve Beğenmeme
  like: function (post_id, type) {
    if (!window.FORUM_AJAX) {
      if (typeof DLEPush !== 'undefined') DLEPush.error("Sistem hatası: AJAX adresi bulunamadı.");
      else alert("Sistem hatası: AJAX adresi bulunamadı.");
      return;
    }

    $.post(
      window.FORUM_AJAX,
      {
        act: "like",
        post_id: post_id,
        ltype: type,
        user_hash: window.FORUM_CSRF,
        csrf: window.FORUM_CSRF,
      },
      function (res) {
        if (res.error) {
          if (typeof DLEPush !== 'undefined') DLEPush.error(res.error, "Hata");
          else alert(res.error);
        } else {
          // Dinamik UI Güncellemesi
          $("#likes-" + post_id).text(res.likes);
          $("#dislikes-" + post_id).text(res.dislikes);

          var $btn = $("button[onclick*='forum.like(" + post_id + ", \\'" + type + "\\')']");
          var $otherBtn = $("button[onclick*='forum.like(" + post_id + ", \\'" + (type === 'like' ? 'dislike' : 'like') + "\\')']");

          if (res.status === 'removed') {
              $btn.removeClass('active');
              if (typeof DLEPush !== 'undefined') DLEPush.info("Tepkiniz geri alındı.", "Bilgi");
          } else {
              $btn.addClass('active');
              $otherBtn.removeClass('active');
              if (typeof DLEPush !== 'undefined') DLEPush.info("Tepkiniz başarıyla kaydedildi.", "Başarılı");
          }
        }
      },
      "json"
    ).fail(function() {
        if (typeof DLEPush !== 'undefined') DLEPush.error("Sunucu ile iletişim kurulamadı.", "Hata");
    });
  },

  // 2. Konu Takibi
  toggleFollow: function (topic_id) {
    $.post(
      window.FORUM_AJAX,
      {
        act: "follow",
        topic_id: topic_id,
        user_hash: window.FORUM_CSRF,
        csrf: window.FORUM_CSRF,
      },
      function (res) {
        if (res.error) {
            if (typeof DLEPush !== 'undefined') DLEPush.error(res.error, "Hata");
            else alert(res.error);
        } else {
            if (typeof DLEPush !== 'undefined') DLEPush.info("Abonelik durumu değiştirildi.", "Başarılı");
            setTimeout(function() { location.reload(); }, 1000);
        }
      },
      "json"
    );
  },

  // 3. Alıntı Yapma (v1.2.5 - AJAX ile BBCode koruması)
  quote: function (username, post_id) {
    if (!window.FORUM_AJAX) return alert("Hata: AJAX adresi bulunamadı.");
    
    ShowLoading("");
    $.post(window.FORUM_AJAX, {
      act: 'get_post',
      mode: 'quote',
      post_id: post_id,
      user_hash: window.FORUM_CSRF,
      csrf: window.FORUM_CSRF
    }, function(res) {
      HideLoading("");
      if(res.error) return alert(res.error);
      
      var content = "[quote=" + username + "]" + res.text + "[/quote]\n";
      
      if (typeof tinymce !== "undefined" && tinymce.get("comments")) {
        tinymce.get("comments").execCommand("mceInsertContent", false, content);
      } else if ($("#comments").length) {
        var current = $("#comments").val();
        $("#comments").val(current + content).focus();
      }
      
      var replyBox = $("#reply");
      if (replyBox.length && replyBox.offset()) {
        $("html, body").animate({ scrollTop: replyBox.offset().top - 100 }, 500);
      }
    }, "json").fail(function() {
      HideLoading("");
      alert("Sunucu hatası (Post fetch failed).");
    });
  },

  // 4. Mesaj Silme
  deletePost: function (post_id) {
    DLEconfirm("Bu mesajı tamamen silmek istediğinize emin misiniz?", "Silme Onayı", function() {
      $.post(
        window.FORUM_AJAX,
        {
          act: "delete_post",
          post_id: post_id,
          user_hash: window.FORUM_CSRF,
          csrf: window.FORUM_CSRF,
        },
        function (res) {
          if (res.error) {
              if (typeof DLEPush !== 'undefined') DLEPush.error(res.error, "Hata");
              else alert(res.error);
          } else {
              if (typeof DLEPush !== 'undefined') DLEPush.info("Mesaj başarıyla silindi.", "Başarılı");
              $("#post-" + post_id).slideUp();
          }
        },
        "json"
      );
    });
  },

  // 5. Konu Yönetimi (Kilitle, İğnele, Sil)
  topicAction: function (action, topic_id) {
    var msg = { lock: "kilitlemek", pin: "iğnelemek", delete: "SİLMEK" };
    DLEconfirm("Bu konuyu " + msg[action] + " istediğinize emin misiniz?", "Konu İşlemi", function() {
      $.post(
        window.FORUM_AJAX,
        {
          act: action + "_topic",
          topic_id: topic_id,
          user_hash: window.FORUM_CSRF,
          csrf: window.FORUM_CSRF,
          state: 1,
        },
        function (res) {
          if (res.error) {
              if (typeof DLEPush !== 'undefined') DLEPush.error(res.error, "Hata");
              else alert(res.error);
          } else {
              if (typeof DLEPush !== 'undefined') DLEPush.info("İşlem başarıyla uygulandı.", "Başarılı");
              setTimeout(function() {
                  if (action === "delete") window.location.href = SITEURL + "forum/";
                  else location.reload();
              }, 1000);
          }
        },
        "json"
      );
    });
  },

  // 6. Dosya Yükleme Tetikleyici
  initUploads: function () {
    $(document).on("click", ".df-custom-upload", function (e) {
      if (e.target.tagName !== "INPUT") {
        $(this).find('input[type="file"]').click();
      }
    });

    $(document).on("change", ".df-custom-upload input", function () {
      var files = this.files;
      var $hint = $(this).closest(".df-custom-upload").find(".df-upload-hint");
      if (files.length > 0) {
        var names = [];
        for (var i = 0; i < files.length; i++) names.push(files[i].name);
        $hint.html('<span style="color:var(--df-accent); font-weight:600;"><i class="fa fa-check-circle"></i> ' + files.length + ' dosya seçildi:</span><br>' + names.join(", "));
      } else {
        $hint.text("Dosyaları buraya bırakın veya seçmek için tıklayın");
      }
    });
  },

  // 7. Konuyu Güncelle (Bump)
  bumpTopic: function (topic_id) {
    if (!window.FORUM_AJAX) return;
    $.post(window.FORUM_AJAX, {
        act: "bump_topic",
        topic_id: topic_id,
        user_hash: window.FORUM_CSRF,
        csrf: window.FORUM_CSRF
    }, function (res) {
        if (res.error) {
            if (typeof DLEPush !== 'undefined') DLEPush.error(res.error, "Hata");
            else alert(res.error);
        } else {
            if (typeof DLEPush !== 'undefined') DLEPush.info(res.message || "Konu başarıyla güncellendi.", "Başarılı");
            setTimeout(function() { location.reload(); }, 1000);
        }
    }, "json");
  },

  // 8. Tüm Bildirimleri Okundu İşaretle
  markAllRead: function () {
    if (!window.FORUM_AJAX) return;
    $.post(window.FORUM_AJAX, {
        act: "notifs",
        user_hash: window.FORUM_CSRF,
        csrf: window.FORUM_CSRF
    }, function (res) {
        if (typeof DLEPush !== 'undefined') DLEPush.info("Tüm bildirimler okundu olarak işaretlendi.", "Başarılı");
        setTimeout(function() { location.reload(); }, 1000);
    }, "json");
  },

  // 9. Şikayet Bildir
  report: function (post_id) {
    if (typeof DLEprompt === 'undefined') {
        if (typeof DLEPush !== 'undefined') DLEPush.error("DLE Sistem dosyaları yüklenemedi!");
        else alert("DLE Sistem dosyaları yüklenemedi!");
        return;
    }

    DLEprompt("Lütfen şikayet nedeninizi yazın:", "", "Şikayet Bildir", function(text) {
        if (!text || text.length < 5) {
            if (typeof DLEPush !== 'undefined') DLEPush.error("Şikayet nedeni en az 5 karakter olmalıdır!", "Hata");
            else alert("Şikayet nedeni en az 5 karakter olmalıdır!");
            return false;
        }
        
        $.post(window.FORUM_AJAX, {
            act: 'report',
            id: post_id,
            text: text,
            user_hash: window.FORUM_CSRF,
            csrf: window.FORUM_CSRF
        }, function(data) {
            $("#dlepopup").dialog("close");
            if (data.success) {
                if (typeof DLEPush !== 'undefined') DLEPush.info(data.msg, "Başarılı");
                else alert(data.msg);
            } else {
                if (typeof DLEPush !== 'undefined') DLEPush.error(data.error || "Hata oluştu", "Hata");
                else alert(data.error || "Hata oluştu");
            }
        }, "json").fail(function() {
            $("#dlepopup").dialog("close");
            if (typeof DLEPush !== 'undefined') DLEPush.error("Sunucu reddetti (503).", "Hata");
        });
        
        return false;
    });
  }
};

// Başlat
$(function () {
  forum.initUploads();
});
