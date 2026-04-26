<?php
/*
=====================================================
 DLE Native Forum - English Language File
=====================================================
*/

global $lang; // DLE ana dil dizisine erişim sağlar (Sidebar bozulmasını önler)

// Mevcut $lang dizisini koruyarak üzerine ekle
$lang = array_merge((array)$lang, array(

    /* ───────── GENERAL ───────── */
    'forum_title'             => 'Community Forum',
    'forum_error'             => 'Error',
    'forum_warning'           => 'Warning',
    'forum_success'           => 'Success',
    'forum_cancel'            => 'Cancel',
    'forum_save'              => 'Save',
    'forum_delete'            => 'Delete',
    'forum_edit'              => 'Edit',
    'forum_yes'               => 'Yes',
    'forum_no'                => 'No',
    'forum_forum'             => 'Forum',
    'forum_topic'             => 'Topic',
    'forum_topics'            => 'Topics',
    'forum_post'              => 'Post',
    'forum_posts'             => 'Posts',
    'forum_reply'             => 'Reply',
    'forum_replies'           => 'Replies',
    'forum_views'             => 'Views',
    'forum_online'            => 'Online',
    'forum_member'            => 'Member',
    'forum_members'           => 'Members',
    'forum_stats'             => 'Statistics',
    'forum_last_posts'        => 'Last Posts',
    'forum_no_posts'          => 'No posts yet',
    'forum_new_topic'         => 'New Topic',
    'forum_new_topic_btn'     => 'Create Topic',
    'forum_date'              => 'Date',
    'forum_action'            => 'Action',
    'forum_status'            => 'Status',
    'forum_search'            => 'Search',
    'forum_guest'             => 'Guest',
    'forum_write_reply'       => "Post a Reply",


    /* ───────── AUTH / PERMISSIONS ───────── */
    'forum_err_must_login'       => 'You must be logged in.',
    'forum_err_login_pm'         => 'You must be logged in to access private messages.',
    'forum_err_login_notif'      => 'You must be logged in to view notifications.',
    'forum_err_login_topic'      => 'You must be logged in to create a topic.',
    'forum_err_no_permission'    => 'You do not have permission!',
    'forum_err_no_perm_cat'      => 'You do not have permission to create topics in this category.',
    'forum_err_must_login_short' => 'Login Required',

    /* ───────── CSRF ───────── */
    'forum_err_csrf'       => 'Security verification failed!',
    'forum_err_csrf_retry' => 'Security verification failed! Please refresh the page and try again.',

    /* ───────── CATEGORY ERRORS ───────── */
    'forum_err_cat_invalid'   => 'Invalid category link.',
    'forum_err_cat_not_found' => 'Category not found or deleted.',
    'forum_err_no_cats'       => 'No categories added yet.',
    'forum_err_cat_select'    => 'Invalid category selection.',

    /* ───────── TOPIC ERRORS ───────── */
    'forum_err_topic_not_found' => 'Topic not found!',
    'forum_err_topic_locked'    => 'This topic is locked!',
    'forum_err_locked_notice'   => 'This topic has been locked.',
    'forum_err_title_short'     => 'Title must be at least 3 characters!',
    'forum_err_title_long'      => 'Title is too long!',
    'forum_err_content_short'   => 'Content must be at least 10 characters!',
    'forum_err_no_topics'       => 'No topics have been created in this category yet.',
    'forum_err_invalid_action'  => 'Invalid action.',

    /* ───────── POST ERRORS ───────── */
    'forum_err_post_not_found' => 'Post not found!',
    'forum_err_post_short'     => 'Post is too short!',
    'forum_err_post_min'       => 'Post must be at least %d characters!',

    /* ───────── FLOOD ───────── */
    'forum_err_flood_topic' => 'You are creating topics too fast! Wait %d seconds.',
    'forum_err_flood_reply' => 'You are posting too fast! Wait %d seconds.',
    'forum_err_flood_like'  => 'You are liking too fast! Wait %d seconds.',

    /* ───────── BUMP ───────── */
    'forum_err_bump_locked'    => 'Locked topics cannot be bumped!',
    'forum_err_bump_owner'     => 'Only the topic owner can bump it!',
    'forum_err_bump_cooldown'  => 'You must wait %d more hours to bump!',
    'forum_ok_bump'            => 'Topic has been bumped!',
    'forum_bump_btn'           => 'Bump',

    /* ───────── LIKES ───────── */
    'forum_err_own_like'      => 'You cannot like your own post!',
    'forum_js_liked'          => 'Post liked!',
    'forum_js_disliked'       => 'Post disliked.',
    'forum_js_vote_removed'   => 'Vote removed.',

    /* ───────── FOLLOW ───────── */
    'forum_follow_btn'      => 'Follow',
    'forum_unfollow_btn'    => 'Unfollow',
    'forum_js_followed'     => 'Topic followed.',
    'forum_js_unfollowed'   => 'Topic unfollowed.',

    /* ───────── COMPLAINTS ───────── */
    'forum_err_complaint_short' => 'Complaint reason is too short!',
    'forum_err_complaint_dup'   => 'You have already reported this post!',
    'forum_ok_complaint'        => 'Your report has been submitted.',

    /* ───────── UPLOADS ───────── */
    'forum_err_upload_none'     => 'No file selected!',
    'forum_err_upload_disabled' => 'File uploads are disabled!',
    'forum_err_upload_error'    => 'Upload error: %s',
    'forum_err_upload_size'     => '%s is too large! Max: %s MB',
    'forum_err_upload_ext'      => '%s: file extension not allowed.',

    /* ───────── SEARCH ───────── */
    'forum_err_search_empty'   => 'Please enter a search term.',
    'forum_err_search_min'     => 'Search term must be at least 3 characters!',
    'forum_search_results'     => 'Search Results',
    'forum_topics_found'       => '%d topics found.',
    'forum_search_no_results'  => 'No topics matched your search.',

    /* ───────── APPROVAL QUEUE ───────── */
    'forum_ok_approval_pending' => 'Your post is awaiting moderator approval.',

    /* ───────── PM (PRIVATE MESSAGES) ───────── */
    'forum_pm_empty'         => 'Your inbox is empty.',
    'forum_pm_not_found'     => 'Message not found.',
    'forum_err_pm_user'      => 'User not found.',
    'forum_ok_pm_sent'       => 'Your message has been sent successfully.',
    'forum_err_pm_invalid'   => 'Invalid recipient name!',
    'forum_err_pm_notfound'  => 'User not found!',
    'forum_err_pm_title'     => 'Subject is too short!',
    'forum_err_pm_text'      => 'Message is too short!',
    'forum_err_pm_self'      => 'Invalid recipient!',

    /* ───────── NOTIFICATIONS ───────── */
    'forum_notifications'  => 'Notifications',
    'forum_no_notifs'      => 'You have no notifications yet.',
    'forum_notif_reply'    => 'replied to your topic',
    'forum_notif_like'     => 'liked your post',
    'forum_notif_pm'       => 'sent you a private message',
    'forum_notif_mention'  => 'mentioned you',
    'forum_deleted_topic'  => 'Deleted Topic',

    /* ───────── JS & GENERAL ───────── */
    'forum_js_conn_error'     => 'Connection error!',
    'forum_err_move_cat'      => 'Category not found!',
    'forum_admin_label'       => 'MODERATION:',
    'forum_lock'              => 'Lock',
    'forum_unlock'            => 'Unlock',
    'forum_pin'               => 'Pin',
    'forum_unpin'             => 'Unpin',
    'forum_delete_topic'      => 'Delete Topic',
    'forum_confirm_del_post'  => 'Are you sure you want to delete?',
    'forum_confirm_del_topic' => 'Are you sure you want to delete this topic?',
    'forum_confirm_delete'    => 'Are you sure?',
    'forum_group_admin'       => 'Administrator',
    'forum_group_editor'      => 'Editor',
    'forum_group_author'      => 'Author',
    'forum_group_member'      => 'Member',
    'forum_edited_hint'       => '(edited: %s)',
    'forum_reply_title'       => 'Write a Reply',
    'forum_topic_locked_t'    => 'Topic Locked',

    /* ══════════════════════════════════════
       ADMIN PANEL WORDS (inc/forum.php)
       ══════════════════════════════════════ */
    'forum_admin_title'    => 'DLE Native Forum',
    'forum_admin_subtitle' => 'Admin Panel',

    /* Navbar */
    'forum_adm_nav_summary'    => 'Summary',
    'forum_adm_nav_cats'       => 'Categories',
    'forum_adm_nav_ranks'      => 'Ranks',
    'forum_adm_nav_words'      => 'Banned Words',
    'forum_adm_nav_complaints' => 'Complaints',
    'forum_adm_nav_topics'     => 'Topics',
    'forum_adm_nav_pending'    => 'Approval Queue',
    'forum_adm_nav_logs'       => 'Mod Logs',
    'forum_adm_nav_settings'   => 'Settings',

    /* Category Management */
    'forum_adm_cat_manage'     => 'Category Management',
    'forum_adm_cat_add'        => 'Add New Category',
    'forum_adm_cat_edit'       => 'Edit Category',
    'forum_adm_cat_new'        => 'New Category',
    'forum_adm_cat_name'       => 'Category Name',
    'forum_adm_cat_desc'       => 'Description',
    'forum_adm_cat_parent'     => 'Parent Category',
    'forum_adm_cat_icon'       => 'Font Awesome Icon (fa-xxxx)',
    'forum_adm_cat_icn'        => 'Icon',
    'forum_adm_cat_order'      => 'Order',
    'forum_adm_cat_slug'       => 'Slug',
    'forum_adm_cat_saved'      => 'Category updated.',
    'forum_adm_cat_added'      => 'New category created.',
    'forum_adm_cat_del'        => 'Category deleted.',
    'forum_adm_cat_del_subs'   => 'Please delete or move subcategories first.',
    'forum_adm_cat_del_topics' => 'Please delete or move topics in this category first.',
    'forum_adm_no_parent'      => '— Main Category —',

    /* Rank Management */
    'forum_adm_rank_manage' => 'Rank Management',
    'forum_adm_rank_add'    => 'Add New Rank',
    'forum_adm_rank_name'   => 'Rank Name',
    'forum_adm_rank_points' => 'Points Threshold',
    'forum_adm_rank_color'  => 'Color',
    'forum_adm_rank_icon'   => 'FA Icon',
    'forum_adm_rank_edit'   => 'Edit Rank',
    'forum_adm_rank_new'    => 'New Rank',
    'forum_adm_rank_badge'  => 'Badge Text',
    'forum_adm_rank_saved'  => 'Rank saved.',
    'forum_adm_rank_del'    => 'Rank deleted.',

    /* Banned Words */
    'forum_adm_word_manage' => 'Banned Words',
    'forum_adm_word_add'    => 'Add New Word',
    'forum_adm_word_word'   => 'Banned Word',
    'forum_adm_word_repl'   => 'Replacement',
    'forum_adm_word_edit'   => 'Edit Word',
    'forum_adm_word_new'    => 'New Word',
    'forum_adm_word_saved'  => 'Word saved.',
    'forum_adm_word_del'    => 'Word deleted.',

    /* Complaints */
    'forum_adm_complaints_title'  => 'Forum Complaints',
    'forum_adm_complaint_from'    => 'Reported By',
    'forum_adm_complaint_content' => 'Content',
    'forum_adm_complaint_del'     => 'Complaint deleted.',

    /* Mod Logs */
    'forum_adm_logs_title' => 'Moderation Logs',
    'forum_adm_log_mod'    => 'Moderator',
    'forum_adm_log_action' => 'Action',
    'forum_adm_log_topic'  => 'Topic ID',
    'forum_adm_log_post'   => 'Post ID',
    'forum_adm_log_ip'     => 'IP',

    /* Log Action Labels */
    'forum_log_lock'       => 'Lock',
    'forum_log_unlock'     => 'Unlock',
    'forum_log_pin'        => 'Pin',
    'forum_log_unpin'      => 'Unpin',
    'forum_log_del_topic'  => 'Delete Topic',
    'forum_log_del_post'   => 'Delete Post',
    'forum_log_edit_mod'   => 'Edit Post',
    'forum_log_edit_own'   => 'Edit Own Post',

    /* Settings and Maintenance */
    'forum_adm_settings_title' => 'Forum Settings',
    'forum_adm_maintenance'    => 'Maintenance',
    'forum_adm_recalc'         => 'Recalculate Statistics',
    'forum_adm_clear_cache'    => 'Clear Cache',
    'forum_adm_settings_saved' => 'Settings updated.',
    'forum_adm_recalc_running' => 'Recalculation is already running. Please wait.',
    'forum_adm_recalc_done'    => 'Statistics recalculated.',
    'forum_adm_cache_cleared'  => 'Forum cache cleared.',

    /* Setting Labels */
    'forum_set_posts_per_page'  => 'Posts Per Page',
    'forum_set_topics_per_page' => 'Topics Per Page',
    'forum_set_guest_view'      => 'Guests Can View (1/0)',
    'forum_set_min_post'        => 'Min. Post Length',
    'forum_set_max_post'        => 'Max. Post Length',
    'forum_set_flood'           => 'Flood Time (sec)',
    'forum_set_allow_attach'    => 'Allow Attachments (1/0)',
    'forum_set_max_attach'      => 'Max File Size (bytes)',
    'forum_set_allowed_ext'     => 'Allowed File Types',
    'forum_set_points_topic'    => 'Points for New Topic',
    'forum_set_points_reply'    => 'Points for New Reply',
    'forum_set_points_like'     => 'Points for Received Like',
    'forum_set_approval'        => 'Approval Queue (first N posts)',
    'forum_set_bump_cd'         => 'Bump Cooldown (hours)',

    /* Topics */
    'forum_adm_topics_title'  => 'All Topics',
    'forum_adm_topics_cat'    => 'Category',
    'forum_adm_topics_author' => 'Author',
    'forum_adm_topics_del'    => 'Topic deleted.',

    /* Approval Queue */
    'forum_adm_pending_title'      => 'Pending Posts',
    'forum_adm_pending_user'       => 'User',
    'forum_adm_pending_preview'    => 'Preview',
    'forum_adm_pending_approve'    => 'Approve',
    'forum_adm_pending_reject_btn' => 'Reject',
    'forum_adm_pending_empty'      => 'No pending posts.',
    'forum_adm_pending_ok'         => 'Post published.',
    'forum_adm_pending_reject'     => 'Post deleted.',

    /* Dashboard Statistics */
    'forum_adm_stat_topics'     => 'Total Topics',
    'forum_adm_stat_posts'      => 'Total Posts',
    'forum_adm_stat_users'      => 'Total Users',
    'forum_adm_stat_writers'    => 'Forum Writers',
    'forum_adm_stat_complaints' => 'Complaints',
    'forum_adm_stat_last_reg'   => 'Last Registration',
    'forum_adm_last_post'       => 'Last Post',
    'forum_adm_last_post_by'    => 'by',
    'forum_adm_recent_topics'   => 'Recent 10 Topics',
    'forum_adm_recent_posts'    => 'Recent 5 Posts',
    'forum_adm_top_users'       => 'Top Users',
    'forum_adm_quick_actions'   => 'Quick Actions',

    /* Move Modal */
    'forum_adm_move_title' => 'Move Topic',
    'forum_adm_move_label' => 'Select target category:',
    'forum_adm_move_btn'   => 'Move',
    'forum_adm_move_ok'    => 'Topic moved successfully!',

));
?>