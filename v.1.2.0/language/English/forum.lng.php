<?php
/*
=====================================================
 DLE Native Forum (Nexus) - Language File (English)
-----------------------------------------------------
 https://github.com/dlehub
-----------------------------------------------------
 Copyright (c) 2024-2026 Dlehub & Elegance
=====================================================
 File: language/English/forum.lng.php
=====================================================
*/

global $lang;

$lang = array_merge((array)$lang, array(

// ══════════════════════════════════════════════════
// GENERAL / CORE
// ══════════════════════════════════════════════════
'forum_error'                    => 'Error',
'forum_warning'                  => 'Warning',
'forum_success'                  => 'Success',
'forum_save'                     => 'Save',
'forum_cancel'                   => 'Cancel',
'forum_action'                   => 'Action',
'forum_confirm_delete'           => 'Are you sure you want to delete?',
'forum_confirm_del_post'         => 'Are you sure you want to delete this post?',
'forum_date'                     => 'Date',
'forum_forum'                    => 'Forum',
'forum_title'                    => 'Forum',
'forum_home'                     => 'Home',
'forum_topic'                    => 'Topic',
'forum_post'                     => 'Post',
'forum_reply'                    => 'Reply',
'forum_views'                    => 'Views',
'forum_status'                   => 'Status',
'forum_pin'                      => 'Pinned',
'forum_lock'                     => 'Locked',
'forum_guest'                    => 'Guest',
'forum_member'                   => 'Member',
'forum_no_posts'                 => 'No posts',
'forum_stats'                    => 'Statistics',
'forum_last_posts'               => 'Last Posts',
'forum_new_topic'                => 'New Topic',
'forum_new_topic_btn'            => 'Create New Topic',
'forum_deleted_topic'            => 'Deleted topic',
'forum_no_prefix'                => 'No Prefix',
'forum_ph_tags'                  => 'tag1, tag2...',
'forum_all_cats'                 => 'All Categories',
'forum_topics'                   => 'Topics',
'forum_posts'                    => 'Posts',
'forum_group'                    => 'Group',
'forum_active'                   => 'Active',
'forum_passive'                  => 'Passive',
'forum_expand_all'               => 'Expand All',
'forum_collapse_all'             => 'Collapse All',
'forum_order_fail'               => 'Failed to save ordering!',
'forum_order_ok'                 => 'Category ordering updated.',

// ══════════════════════════════════════════════════
// TPL TAGS (v1.2.4)
// ══════════════════════════════════════════════════
'forum_attachments'              => 'Attachments',
'forum_edit'                     => 'Edit',
'forum_delete'                   => 'Delete',
'forum_quote'                    => 'Quote',
'forum_like'                     => 'Like',
'forum_dislike'                  => 'Dislike',
'forum_pm_send'                  => 'Private Message',
'forum_edited'                   => 'edited',
'forum_posts'                    => 'Posts',
'forum_points'                   => 'Points',
'forum_rep'                      => 'Rep',
'forum_follow'                   => 'Follow',
'forum_unfollow'                 => 'Unfollow',
'forum_bump'                     => 'Bump',
'forum_unlock'                   => 'Unlock',
'forum_unpin'                    => 'Unpin',
'forum_delete_topic'             => 'Delete Topic',
'forum_send'                     => 'Send',
'forum_mark_read'                => 'Mark as Read',
'forum_mark_all_read'            => 'Mark All as Read',
'forum_unanswered'               => 'Unanswered Topics',
'forum_unanswered_desc'          => 'Topics awaiting a response.',
'forum_no_unanswered'            => 'No unanswered topics.',
'forum_active'                   => 'Active Topics',
'forum_active_desc'              => 'Topics updated within the specified period.',
'forum_no_active'                => 'No active topics in this period.',
'forum_filter_today'             => 'Today',
'forum_filter_days'              => 'Last %d Days',
'forum_notif_'                   => 'Notification',
'forum_notif_like'               => 'Like',
'forum_notif_reply'              => 'Reply',
'forum_notif_mention'            => 'Mention',
'forum_notif_quote'              => 'Quote',

// ══════════════════════════════════════════════════
// ERROR MESSAGES
// ══════════════════════════════════════════════════
'forum_err_login_pm'             => 'You must login to send private messages.',
'forum_err_pm_user'              => 'Valid user not found.',
'forum_err_login_notif'          => 'You must login to view notifications.',
'forum_err_no_cats'              => 'Forum categories not found.',
'forum_err_no_topics'            => 'No topics in this category.',
'forum_err_search_empty'         => 'Search term cannot be empty.',
'forum_err_search_min'           => 'Search term must be at least 3 characters.',
'forum_err_cat_invalid'          => 'Invalid category.',
'forum_err_cat_not_found'        => 'Category not found.',
'forum_err_login_topic'          => 'You must login to create a topic.',
'forum_err_no_perm_cat'          => 'You do not have permission to create topics in this category.',
'forum_err_cat_select'           => 'Please select a category.',
'forum_err_csrf_retry'           => 'Security verification failed, please try again.',
'forum_err_title_len'            => 'Title must be at least 3 characters.',
'forum_err_title_long'           => 'Title can be max 255 characters.',
'forum_err_content_len'          => 'Message content must be at least 10 characters.',
'forum_err_must_login'           => 'You must login for this action.',
'forum_err_no_permission'        => 'You do not have permission for this action.',
'forum_err_title_short'          => 'Title must be at least 3 characters.',
'forum_err_post_short'           => 'Message content must be at least 10 characters.',
'forum_err_post_min'             => 'Message must be at least %d characters.',
'forum_err_topic_not_found'      => 'Topic not found.',
'forum_err_topic_locked'         => 'This topic is locked, you cannot reply.',
'forum_err_post_not_found'       => 'Message not found.',
'forum_err_own_like'             => 'You cannot like your own message.',
'forum_err_complaint_short'      => 'Complaint reason must be at least 5 characters.',
'forum_err_complaint_dup'        => 'You already have a complaint for this message.',
'forum_err_msg_not_found'        => 'Message not found.',
'forum_err_bump_locked'          => 'You cannot bump a locked topic.',
'forum_err_bump_owner'           => 'Only the topic owner can bump it.',
'forum_err_bump_cooldown'        => 'You must wait %s to bump the topic again.',
'forum_err_move_cat'             => 'Target category not found.',
'forum_err_invalid_action'       => 'Invalid action.',
'forum_err_upload_none'          => 'No file selected for upload.',
'forum_err_upload_disabled'      => 'File upload feature is disabled.',
'forum_err_upload_error'         => 'Error uploading file: %s.',
'forum_err_upload_size'          => '%s file exceeds size limit (Max: %s MB).',
'forum_err_upload_ext'           => '%s file type is not allowed.',
'forum_err_pm_self'              => 'You cannot send a message to yourself.',
'forum_err_pm_title'             => 'Message title must be at least 2 characters.',
'forum_err_pm_text'              => 'Message content must be at least 5 characters.',
'forum_err_user_not_found'       => 'User not found.',
'err_flood_blocked'              => 'Too many message attempts. Account temporarily blocked.',
'err_flood_ip'                   => 'Too many requests from your IP address. Please wait.',
'err_flood_post'                 => 'Please wait a while to send consecutive messages.',
'forum_err_csrf'                 => 'Security verification failed!',
'forum_err_db'                   => 'Database error occurred: ',
'forum_err_upload_mime'          => 'File type could not be verified!',
'forum_err_pm_fail'              => 'PM could not be sent',
'forum_err_no_link_perm'         => 'Your group does not have permission to share links.',
'forum_err_pm_name'              => 'Invalid recipient name!',
'forum_err_no_edit_perm'         => 'You do not have permission to edit this message!',
'forum_err_no_edit_time'         => 'This message cannot be edited!',
'forum_err_invalid_msg'          => 'Invalid message format.',
'forum_err_msg_len'              => 'Message must be at least 3 characters.',
'forum_adm_topic_title_empty'    => 'Topic title cannot be empty!',
'forum_adm_topic_updated'        => 'Topic updated successfully!',

// ══════════════════════════════════════════════════
// SUCCESS MESSAGES
// ══════════════════════════════════════════════════
'forum_ok_pm_sent'               => 'Message sent successfully.',
'forum_ok_approval_pending'      => 'Your message is awaiting approval.',
'forum_ok_complaint'             => 'Your complaint has been successfully submitted.',
'forum_ok_bump'                  => 'Topic updated successfully.',

// ══════════════════════════════════════════════════
// SEARCH
// ══════════════════════════════════════════════════
'forum_search'                   => 'Search',
'forum_search_no_results'        => 'No results matched your search.',
'forum_search_results'           => 'Search Results',
'forum_topics_found'             => '%d topics found.',

// ══════════════════════════════════════════════════
// EDITOR
// ══════════════════════════════════════════════════
'forum_edit_msg'                 => 'Edit Message',
'forum_write_reply'              => 'Write a Reply',
'forum_topic_locked'             => 'Topic Locked',
'forum_must_login'               => 'You Must Login',
'forum_attach_label'             => 'Attach File',

// ══════════════════════════════════════════════════
// MODERATION LOG TAGS
// ══════════════════════════════════════════════════
'forum_log_lock'                 => 'Locked',
'forum_log_unlock'               => 'Unlocked',
'forum_log_pin'                  => 'Pinned',
'forum_log_unpin'                => 'Unpinned',
'forum_log_del_topic'            => 'Topic Deleted',
'forum_log_del_post'             => 'Post Deleted',
'forum_log_edit_mod'             => 'Mod Edit',
'forum_log_edit_own'             => 'Self Edit',
'forum_log_move'                 => 'Moved',
'forum_log_bump'                 => 'Updated',

// ══════════════════════════════════════════════════
// PRIVATE MESSAGES
// ══════════════════════════════════════════════════
'forum_pm'                       => 'Private Messages',
'forum_pm_not_found'             => 'Message not found.',
'forum_pm_empty'                 => 'No messages yet.',
'forum_notifications'            => 'Notifications',
'forum_no_notifs'                => 'No notifications yet.',

// ══════════════════════════════════════════════════
// PROFILE / USER
// ══════════════════════════════════════════════════
'forum_no_user_posts'            => 'This user has no forum messages yet.',

// ══════════════════════════════════════════════════
// TAGS
// ══════════════════════════════════════════════════
'forum_tags'                     => 'Tags',
'forum_tags_desc'                => 'Most used tags in the forum.',
'forum_no_tags'                  => 'No tags yet.',
'forum_no_topics_tag'            => 'No topics found with this tag.',
'forum_tagged_topics'            => 'Topics with this tag',

// ══════════════════════════════════════════════════
// ADMIN PANEL - GENERAL
// ══════════════════════════════════════════════════
'forum_admin_title'              => 'DLE Native Forum',
'forum_admin_subtitle'           => 'Admin Panel',
'forum_adm_ver_new'              => 'v%s available!',
'forum_adm_ver_ok'               => 'Up to date',

// ADMIN PANEL - NAVIGATION
'forum_adm_nav_summary'          => 'Summary',
'forum_adm_nav_cats'             => 'Categories',
'forum_adm_nav_ranks'            => 'Ranks',
'forum_adm_nav_words'            => 'Banned Words',
'forum_adm_nav_complaints'       => 'Complaints',
'forum_adm_nav_topics'           => 'Topics',
'forum_adm_nav_pending'          => 'Pending Approval',
'forum_adm_nav_logs'             => 'Moderation Logs',
'forum_adm_nav_settings'         => 'Settings',
'forum_adm_nav_prefixes'         => 'Prefixes',
'forum_adm_nav_tags'             => 'Tags',
'forum_adm_nav_promotions'       => 'Promotions',

// ADMIN PANEL - CATEGORIES
'forum_adm_cat_saved'            => 'Category saved successfully.',
'forum_adm_cat_added'            => 'New category added successfully.',
'forum_adm_cat_del_subs'         => 'This category has subcategories. Please delete them first.',
'forum_adm_cat_del_topics'       => 'This category has topics. Please delete or move them first.',
'forum_adm_cat_del'              => 'Category deleted successfully.',
'forum_adm_cat_manage'           => 'Category Management',
'forum_adm_cat_add'              => 'Add New Category',
'forum_adm_no_cats'              => 'No categories added yet.',
'forum_adm_cat_edit'             => 'Edit Category',
'forum_adm_cat_new'              => 'New Category',
'forum_adm_cat_name'             => 'Category Name',
'forum_adm_cat_desc'             => 'Description',
'forum_adm_parent_cat'           => 'Parent Category',
'forum_adm_cat_icon'             => 'Icon',
'forum_adm_cat_icon_fa'          => 'FontAwesome class, e.g.: fa-folder',
'forum_adm_priv_cat'             => 'Private Category',
'forum_adm_priv_cat_desc'        => 'visible only to specific groups',
'forum_adm_require_approval'     => 'Approval Required',
'forum_adm_require_approval_desc'=> 'topics in this category require admin approval',
'forum_adm_allowed_groups'       => 'Allowed Groups',
'forum_adm_groups_comma'         => 'comma separated, e.g.: 2,3',
'forum_adm_read_groups'          => 'Read Permissions',
'forum_adm_write_groups'         => 'Write Permissions',
'forum_main_cat'                 => 'Main Category',
'forum_ph_cat_name'              => 'Enter category name',
'forum_ph_cat_desc'              => 'Short description (optional)',

// ADMIN PANEL - RANKS
'forum_adm_rank_saved'           => 'Rank saved successfully.',
'forum_adm_rank_del'             => 'Rank deleted successfully.',
'forum_adm_rank_manage'          => 'Rank Management',
'forum_adm_rank_add'             => 'Add New Rank',
'forum_adm_rank_points'          => 'Min. Points',
'forum_adm_rank_color'           => 'Color',
'forum_adm_rank_icon'            => 'Icon',
'forum_adm_rank_edit'            => 'Edit Rank',
'forum_adm_rank_new'             => 'New Rank',
'forum_adm_rank_name'            => 'Rank Name',
'forum_adm_rank_badge'           => 'Badge Text',

// ADMIN PANEL - PREFIXES
'forum_adm_prefix_saved'         => 'Prefix saved successfully.',
'forum_adm_prefix_added'         => 'Prefix added successfully.',
'forum_adm_prefix_del'           => 'Prefix deleted successfully.',
'forum_adm_prefixes'             => 'Prefix Management',
'forum_adm_prefix_add'           => 'Add New Prefix',
'forum_adm_prefix_title'         => 'Prefix Title',
'forum_adm_prefix_cat'           => 'Category',
'forum_adm_prefix_color'         => 'Text Color',
'forum_adm_prefix_bg_color'      => 'Background Color',
'forum_adm_prefix_order'         => 'Order',
'forum_adm_prefix_text_color'    => 'Text Color',
'forum_adm_prefix_bg_color'      => 'Background Color',
'forum_adm_prefix_edit'          => 'Edit Prefix',
'forum_adm_prefix_new'           => 'New Prefix',

// ADMIN PANEL - TAGS
'forum_adm_tag_saved'            => 'Tag saved successfully.',
'forum_adm_tag_del'              => 'Tag deleted successfully.',
'forum_adm_tags_manage'          => 'Tag Management',
'forum_adm_tag_name'             => 'Tag Name',
'forum_adm_tag_slug'             => 'Slug',
'forum_adm_tag_count'            => 'Usage',
'forum_adm_tag_edit'             => 'Edit Tag',

// ADMIN PANEL - BANNED WORDS
'forum_adm_word_saved'           => 'Word saved successfully.',
'forum_adm_word_del'             => 'Word deleted successfully.',
'forum_adm_word_manage'          => 'Banned Word Management',
'forum_adm_word_add'             => 'Add New Word',
'forum_adm_word_word'            => 'Word',
'forum_adm_word_repl'            => 'Replacement',
'forum_adm_word_edit'            => 'Edit Word',
'forum_adm_word_new'             => 'New Word',

// ADMIN PANEL - COMPLAINTS
'forum_adm_complaint_del'        => 'Complaint deleted successfully.',
'forum_adm_complaints_title'     => 'Complaint Management',
'forum_adm_complaint_from'       => 'Complainant',
'forum_adm_complaint_content'    => 'Content',

// ADMIN PANEL - LOG
'forum_adm_logs_title'           => 'Moderation Logs',
'forum_adm_log_mod'              => 'Moderator',
'forum_adm_log_action'           => 'Action',
'forum_adm_log_topic'            => 'Topic ID',
'forum_adm_log_post'             => 'Post ID',
'forum_adm_log_ip'               => 'IP Address',

// ADMIN PANEL - SETTINGS
'forum_adm_settings_saved'       => 'Settings saved successfully.',
'forum_adm_settings_title'       => 'Forum Settings',
'forum_set_posts_per_page'       => 'Posts per page',
'forum_set_topics_per_page'      => 'Topics per page',
'forum_set_topics_per_page_desc' => 'Number of topics to show per page.',
'forum_set_guest_view'           => 'Guest view (1/0)',
'forum_set_guest_view_desc'      => 'Allow guests to view the forum?',
'forum_set_min_post'             => 'Min. post length',
'forum_set_min_post_desc'        => 'Minimum number of characters in a post.',
'forum_set_max_post'             => 'Max. post length',
'forum_set_max_post_desc'        => 'Maximum number of characters in a post.',
'forum_set_allow_member_edit'    => 'Member Post Editing',
'forum_set_allow_member_edit_desc' => 'Allow members to edit their own posts? If disabled, only Admins and Editors can edit.',
'forum_set_flood'                => 'Flood cooldown (sec)',
'forum_set_allow_attach'         => 'Allow attachments (1/0)',
'forum_set_max_attach'           => 'Max file size (bytes)',
'forum_set_allowed_ext'          => 'Allowed file extensions',
'forum_set_points_topic'         => 'Points for new topic',
'forum_set_points_reply'         => 'Points for reply',
'forum_set_points_like'          => 'Points for like',
'forum_set_approval'             => 'Approval threshold (0=off)',
'forum_set_bump_cd'              => 'Bump cooldown (hours)',
'forum_set_sticky_op'            => 'Sticky first post (1/0)',
'forum_set_link_min_posts'       => 'Min. posts for links',
'forum_set_link_min_points'      => 'Min. points for links',
'forum_set_captcha'              => 'Captcha (1/0)',
'forum_set_promotion'            => 'Auto promotion (1/0)',
'forum_clean_readlog_days'       => 'Cleanup read history (days)',

// ADMIN PANEL - MAINTENANCE
'forum_adm_maintenance'          => 'Maintenance',
'forum_adm_recalc'               => 'Recalculate Statistics',
'forum_adm_clear_cache'          => 'Clear Cache',
'forum_adm_recalc_running'       => 'Recalculation is running, please wait 5 minutes.',
'forum_adm_recalc_done'          => 'Statistics recalculated successfully.',
'forum_adm_cache_cleared'        => 'Cache cleared successfully.',

// ADMIN PANEL - TOPICS
'forum_adm_topic_list'           => 'Topic List',
'forum_adm_no_topics'            => 'No topics registered.',
'forum_adm_topics_found'         => 'topics found',
'forum_adm_topic_title'          => 'Topic Title',
'forum_adm_topic_cat'            => 'Category',
'forum_adm_topics_author'        => 'Author',
'forum_adm_select_all'           => 'Select All',
'forum_adm_action_select'        => 'Select Action',
'forum_adm_unpin'                => 'Unpin',
'forum_bulk_move'                => 'Move',
'forum_adm_apply'                => 'Apply',
'forum_adm_bulk_confirm'         => 'Apply action to selected topics?',
'forum_adm_bulk_done'            => 'Bulk action completed successfully.',
'forum_adm_sel_cat'              => 'Select Category',

// ADMIN PANEL - EDIT TOPIC
'forum_adm_edit_topic'           => 'Edit Topic',
'forum_adm_back'                 => 'Back',
'forum_adm_topic_prefix'         => 'Prefix',
'forum_adm_topic_desc'           => 'Description',
'forum_adm_topic_tags'           => 'Tags',
'forum_adm_topic_content'        => 'Content',
'forum_adm_topic_options'        => 'Options',
'forum_adm_pin_topic'            => 'Pin Topic',
'forum_adm_lock_topic'           => 'Lock Topic',

// ADMIN PANEL - PENDING APPROVAL
'forum_adm_pending_ok'           => 'Approved successfully.',
'forum_adm_pending_reject'       => 'Rejected successfully.',
'forum_adm_pending_title'        => 'Approval Queue',
'forum_adm_pending_user'         => 'User',
'forum_adm_pending_preview'      => 'Preview',
'forum_adm_pending_approve'      => 'Approve',
'forum_adm_pending_reject_btn'   => 'Reject',
'forum_adm_pending_empty'        => 'No pending messages.',
'forum_adm_pending_topics_title' => 'Pending Topics',
'forum_adm_pending_posts_title'  => 'Pending Posts',

// ADMIN PANEL - PROMOTIONS
'forum_adm_promotion_saved'      => 'Promotion rule saved.',
'forum_adm_promotion_del'        => 'Promotion rule deleted.',
'forum_adm_promotions_title'     => 'Auto Group Promotions',
'forum_adm_promotion_add'        => 'Add New Rule',
'forum_adm_from_group'           => 'Current Group',
'forum_adm_to_group'             => 'Target Group',
'forum_adm_min_points'           => 'Min Points',
'forum_adm_min_likes'            => 'Min Likes',
'forum_adm_min_posts'            => 'Min Posts',
'forum_adm_rule_active'          => 'Rule Active',
'forum_adm_promotion_edit'       => 'Edit Rule',
'forum_adm_promotion_new'        => 'New Rule',
'forum_adm_no_promotions'        => 'No promotion rules defined yet.',

// ADMIN PANEL - DASHBOARD
'forum_adm_stat_topics'          => 'Topics',
'forum_adm_stat_posts'           => 'Posts',
'forum_adm_stat_users'           => 'Users',
'forum_adm_stat_writers'         => 'Writers',
'forum_adm_stat_complaints'      => 'Complaints',
'forum_adm_stat_last_reg'        => 'Last Reg',
'forum_adm_last_post'            => 'Last Post',
'forum_adm_last_post_by'         => 'by',
'forum_adm_recent_topics'        => 'Recent Topics',
'forum_adm_recent_posts'         => 'Recent Posts',
'forum_adm_top_users'            => 'Most Active Users',
'forum_adm_prefix_sel'           => '-- Select Prefix --',
'forum_adm_topic_desc_label'     => 'Description (Optional)',
'forum_adm_topic_desc_ph'        => 'Enter sub-description...',
'forum_adm_quick_actions'        => 'Quick Actions',
'forum_adm_tab_general'          => 'General Settings',
'forum_adm_tab_security'         => 'Security',
'forum_adm_tab_gamification'     => 'Gamification',
'forum_adm_tab_maintenance'      => 'Maintenance',

// ADMIN PANEL - RANKS
'forum_adm_rank_type'            => 'Type',
'forum_adm_rank_for_group'       => 'Group-Based Rank',
'forum_adm_rank_for_group_desc'  => 'Specific groups only. 0 = Everyone (point-based).',
'forum_adm_rank_all_groups'      => 'All Groups (Point-Based)',
'forum_group_admin'              => 'Group 1: Admin',
'forum_group_editor'             => 'Group 2: Editor',
'forum_group_moderator'          => 'Group 3: Moderator',

// ADMIN PANEL - IP BANS
'forum_adm_nav_bans'             => 'IP Bans',
'forum_adm_bans_title'           => 'IP Bans',
'forum_adm_ban_add'              => 'Add Ban',
'forum_adm_ban_ip'               => 'IP Address',
'forum_adm_ban_reason'           => 'Reason',
'forum_adm_ban_contact'          => 'Contact (email)',
'forum_adm_ban_days'             => 'Duration (days, 0=perm)',
'forum_adm_ban_delete'           => 'Delete',
'forum_adm_ban_permanent'        => 'Permanent',
'forum_adm_ban_expires'          => 'Expires',
'forum_adm_ban_by'               => 'Banned by',
'forum_adm_ban_date'             => 'Date',
'forum_adm_bans_empty'           => 'No active bans.',
'forum_adm_ban_added'            => 'Ban added successfully.',
'forum_adm_ban_deleted'          => 'Ban deleted successfully.',

// ADMIN PANEL - SEO
'forum_adm_tab_seo'              => 'SEO Settings',
'forum_set_schema_jsonld'        => 'Schema.org JSON-LD',
'forum_set_schema_jsonld_desc'   => 'Add structured data (DiscussionForumPosting) to topic pages for SEO. Used by Google for rich results.',
'forum_set_nested_quotes'        => 'Nested Quotes',
'forum_set_nested_quotes_desc'   => 'Allow users to make nested quotes with [quote=Name]...[/quote]',
'forum_set_quote_depth'          => 'Quote Depth',
'forum_set_quote_depth_desc'     => 'Maximum depth of nested quotes (1-10). Higher = more nested boxes.',
'forum_set_canonical'            => 'Canonical URL',
'forum_set_canonical_desc'       => 'Add canonical link tag to every topic page (prevents duplicate content)',
'forum_set_meta_desc'            => 'Meta Description',
'forum_set_meta_desc_desc'       => 'Automatically create meta description from the first post on topic pages',
'forum_set_meta_desc_len'        => 'Meta Description Length',
'forum_set_meta_desc_len_desc'   => 'Maximum character count for automatic meta description',

));
?>