/**
 * DLE Native Forum — Frontend JS (v1.2.5 Refactored)
 * Light theme, vanilla JS + minimal jQuery (DLE compatible)
 */
document.addEventListener('DOMContentLoaded', function() {

    // ========================================
    // Like / Dislike toggle
    // ========================================
    document.querySelectorAll('.df-like-btn, .df-dislike-btn').forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            if (typeof df_is_logged === 'undefined' || !df_is_logged) {
                alert('Bu işlem için giriş yapmalısınız.');
                return;
            }

            var postId = this.getAttribute('data-post-id');
            var type = this.classList.contains('df-dislike-btn') ? 'dislike' : 'like';
            var formData = new FormData();
            formData.append('act', 'like');
            formData.append('post_id', postId);
            formData.append('ltype', type);
            formData.append('csrf', df_csrf || '');

            fetch(df_ajax_url || (SITEURL + 'index.php?do=forum&action=ajax'), {
                method: 'POST',
                body: formData
            })
            .then(function(r) { return r.json(); })
            .then(function(data) {
                if (data.error) { alert(data.error); return; }
                // Update counts
                var row = document.querySelector('.df-post-row[data-post-id="' + postId + '"]');
                if (!row) return;
                var likesEl = row.querySelector('.df-likes-count');
                var dislikesEl = row.querySelector('.df-dislikes-count');
                if (likesEl && data.likes !== undefined) likesEl.textContent = data.likes;
                if (dislikesEl && data.dislikes !== undefined) dislikesEl.textContent = data.dislikes;

                // Update button states
                var likeBtn = row.querySelector('.df-like-btn');
                var dislikeBtn = row.querySelector('.df-dislike-btn');
                if (data.status === 'liked') {
                    if (likeBtn) likeBtn.classList.add('df-active');
                    if (dislikeBtn) dislikeBtn.classList.remove('df-active');
                } else if (data.status === 'disliked') {
                    if (dislikeBtn) dislikeBtn.classList.add('df-active');
                    if (likeBtn) likeBtn.classList.remove('df-active');
                } else if (data.status === 'removed') {
                    if (likeBtn) likeBtn.classList.remove('df-active');
                    if (dislikeBtn) dislikeBtn.classList.remove('df-active');
                }
            })
            .catch(function() {});
        });
    });

    // ========================================
    // Follow / Unfollow topic
    // ========================================
    var followBtn = document.querySelector('.df-follow-btn');
    if (followBtn) {
        followBtn.addEventListener('click', function(e) {
            e.preventDefault();
            if (typeof df_is_logged === 'undefined' || !df_is_logged) return;

            var formData = new FormData();
            formData.append('act', 'follow');
            formData.append('topic_id', df_topic_id || 0);
            formData.append('csrf', df_csrf || '');

            fetch(df_ajax_url || (SITEURL + 'index.php?do=forum&action=ajax'), {
                method: 'POST',
                body: formData
            })
            .then(function(r) { return r.json(); })
            .then(function(data) {
                if (data.error) return;
                if (data.status === 'followed') {
                    followBtn.innerHTML = '<i class="fa fa-bell-slash"></i> Takibi Bırak';
                    followBtn.classList.add('df-following');
                } else {
                    followBtn.innerHTML = '<i class="fa fa-bell"></i> Takip Et';
                    followBtn.classList.remove('df-following');
                }
            })
            .catch(function() {});
        });
    }

    // ========================================
    // Confirm delete actions
    // ========================================
    document.querySelectorAll('[data-confirm]').forEach(function(el) {
        el.addEventListener('click', function(e) {
            if (!confirm(this.getAttribute('data-confirm') || 'Emin misiniz?')) {
                e.preventDefault();
            }
        });
    });

    // ========================================
    // Quick reply toggle
    // ========================================
    var replyToggle = document.querySelector('.df-reply-toggle');
    if (replyToggle) {
        replyToggle.addEventListener('click', function() {
            var form = document.getElementById('reply');
            if (form) {
                form.scrollIntoView({ behavior: 'smooth' });
                var textarea = form.querySelector('textarea');
                if (textarea) textarea.focus();
            }
        });
    }

    // ========================================
    // Notification badge refresh (polling)
    // ========================================
    function refreshNotifBadge() {
        if (typeof df_is_logged === 'undefined' || !df_is_logged) return;

        var formData = new FormData();
        formData.append('act', 'notif_count');
        formData.append('csrf', df_csrf || '');

        fetch(df_ajax_url || (SITEURL + 'index.php?do=forum&action=ajax'), {
            method: 'POST',
            body: formData
        })
        .then(function(r) { return r.json(); })
        .then(function(data) {
            var badge = document.querySelector('.df-notif-badge');
            if (badge && data.count !== undefined) {
                badge.textContent = data.count;
                badge.style.display = data.count > 0 ? 'inline-flex' : 'none';
            }
        })
        .catch(function() {});
    }

    // Poll every 60 seconds
    if (typeof df_is_logged !== 'undefined' && df_is_logged) {
        setInterval(refreshNotifBadge, 60000);
    }

});
