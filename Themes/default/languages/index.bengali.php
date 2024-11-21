<?php
// Version: 2.1.3; index

global $forum_copyright, $webmaster_email, $scripturl, $context, $boardurl;

// Native name, please use full HTML entities to write your language's name.
$txt['native_name'] = 'Bengali';

// Locale (strftime, basename). For more information see:
//   - https://php.net/function.setlocale
$txt['lang_locale'] = 'bn_India';
$txt['lang_dictionary'] = 'bn';
//https://developers.google.com/recaptcha/docs/language
$txt['lang_recaptcha'] = 'bn';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set right to left?  0 = ltr; 1 = rtl
$txt['lang_rtl'] = '0';
// Number format.
$txt['number_format'] = '1,234.00';

$txt['days_title'] = 'দিন';
$txt['days'] = array('রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'শনিবার');
$txt['days_short'] = array('রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহস্পতি', 'শুক্র', 'শনি');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months_title'] = 'মাস';
$txt['months'] = array(1 => 'জানুয়ারি', 2 => 'ফেব্রুয়ারী', 3 => 'মার্চ', 4 => 'এপ্রিল', 5 => 'মে', 6 => 'জুন', 7 => 'জুলাই', 8 => 'অগাস্ট', 9 => 'সেপ্টেম্বর', 10 => 'অক্টোবর', 11 => 'নভেম্বর', 12 => 'ডিসেম্বর');
$txt['months_titles'] = array(1 => 'জানুয়ারি', 2 => 'ফেব্রুয়ারী', 3 => 'মার্চ', 4 => 'এপ্রিল', 5 => 'মে', 6 => 'জুন', 7 => 'জুলাই', 8 => 'অগাস্ট', 9 => 'সেপ্টেম্বর', 10 => 'অক্টোবর', 11 => 'নভেম্বর', 12 => 'ডিসেম্বর');
$txt['months_short'] = array(1 => 'জানুয়ারি', 2 => 'ফেব্রুয়ারী', 3 => 'মার্চ', 4 => 'এপ্রিল', 5 => 'মে', 6 => 'জুন', 7 => 'জুলাই', 8 => 'অগাস্ট', 9 => 'সেপ্টেম্বর', 10 => 'অক্টোবর', 11 => 'নভেম্বর', 12 => 'ডিসেম্বর');
$txt['prev_month'] = 'গত মাস';
$txt['next_month'] = 'পরবর্তী মাস';
$txt['start'] = 'শুরু';
$txt['end'] = 'শেষ';
$txt['starts'] = 'শুরু';
$txt['ends'] = 'শেষ';
$txt['none'] = 'কোনোটাই নয়';

$txt['minutes_label'] = 'মিনিট';
$txt['hours_label'] = 'ঘন্টা';
$txt['years_title'] = 'বছর';

$txt['time_am'] = 'am';
$txt['time_pm'] = 'pm';

// Short form of minutes
$txt['minutes_short'] = 'মিনিট';
// Short form of hour
$txt['hour_short'] = 'ঘন্টা';
// Short form of hours
$txt['hours_short'] = 'ঘন্টা';
// Descimal sign
$txt['decimal_sign'] = '.';

$txt['admin'] = 'প্রশাসক';
$txt['moderate'] = 'পরিবর্তন';

$txt['save'] = 'সংরক্ষণ';
$txt['reset'] = 'রিসেট';
$txt['upload'] = 'আপলোড';
$txt['upload_all'] = 'সব আপলোড করুন';
$txt['processing'] = 'প্রক্রিয়াকরণ...';

$txt['modify'] = 'পরিবর্তন';
$txt['forum_index'] = '%1$s - সূচক';
$txt['members'] = 'সদস্যগন';
$txt['board_name'] = 'বোর্ডের নাম';
$txt['posts'] = 'পোস্ট';

$txt['member_postcount'] = 'পোস্ট';
$txt['no_subject'] = '(বিষয়বস্তু ছাড়া)';
$txt['view_profile'] = 'প্রোফাইল দেখুন';
$txt['guest_title'] = 'অতিথি';
$txt['author'] = 'লেখক';
$txt['on'] = 'চালু';
$txt['remove'] = 'সরানো';
$txt['start_new_topic'] = 'নতুন বিষয় শুরু করুন';

$txt['login'] = 'লগ ইন';
// Use numeric entities in the below string.
$txt['username'] = 'সদস্যের নাম';
$txt['password'] = 'পাসওয়ার্ড';

$txt['username_no_exist'] = 'ওই সদস্যের নাম নেই.';
$txt['no_user_with_email'] = 'সেই ইমেইলের সাথে যুক্ত কোনো সদস্যের নাম নেই.';

$txt['board_moderator'] = 'বিভাগ পরিবর্তনকারী';
$txt['remove_topic'] = 'বিষয় সরান';
$txt['topics'] = 'বিষয়';
$txt['modify_msg'] = 'বার্তা পরিবর্তন করুন';
$txt['name'] = 'নাম';
$txt['email'] = 'ইমেইল';
$txt['user_email_address'] = 'ইমেইল ঠিকানা';
$txt['subject'] = 'বিষয়বস্তু';
$txt['message'] = 'বার্তা';
$txt['redirects'] = 'দিকপরিবর্তন';
$txt['quick_modify'] = 'ভিতরে পরিবর্তন';
$txt['quick_modify_message'] = 'আপনি সফলতার সাথে বার্তা পরিবর্তন করেছেন.';
$txt['reason_for_edit'] = 'পরিবর্তনের কারণ';

$txt['choose_pass'] = 'পাসওয়ার্ড নির্বাচন করুন';
$txt['verify_pass'] = 'পাসওয়ার্ড যাচাই করুন';
$txt['notify_announcements'] = 'প্রশাসকদের ইমেইল মারফত গুরুত্বপূর্ণ খবর পাঠানোর অনুমতি দিন';

$txt['position'] = 'স্থান';

// argument(s): username
$txt['view_profile_of_username'] = 'প্রোফাইল দেখুন এর %1$s';
$txt['total'] = 'সমস্ত';
$txt['website'] = 'ওয়েবসাইট';
$txt['register'] = 'সাইন আপ';
$txt['warning_status'] = 'সতর্কতা অবস্থা';
$txt['user_warn_watch'] = 'সদস্যটি পরিবর্তনকারীর ওয়াচ লিস্টে আছে';
$txt['user_warn_moderate'] = 'সদস্যটির পোস্ট অনুমোদন সারিতে আছে';
$txt['user_warn_mute'] = 'সদস্যটি পোস্ট করতে পারবেননা';
$txt['warn_watch'] = 'ওয়াচড';
$txt['warn_moderate'] = 'পরিবর্তন';
$txt['warn_mute'] = 'নিঃশব্দ';

$txt['message_index'] = 'বার্তা সূচক';
$txt['news'] = 'খবর';
$txt['home'] = 'বাড়ি';
$txt['page'] = 'পাতা';
$txt['prev'] = 'পূর্ববর্তী পাতা';
$txt['next'] = 'পরবর্তী পাতা';

$txt['lock_unlock'] = 'বন্ধ/খোলা বিষয়';
$txt['post'] = 'পোস্ট';
$txt['error_occured'] = 'একটি ভুল ধরা পড়েছে';
$txt['at'] = 'এ';
$txt['by'] = 'দ্বারা';
$txt['logout'] = 'লগ আউট';
$txt['started_by'] = 'দ্বারা শুরু';
$txt['topic_started_by'] = 'দ্বারা শুরু <strong>%1$s</strong> ভিতরে <em>%2$s</em>';
$txt['replies'] = 'উত্তর';
$txt['last_post'] = 'শেষ পোস্ট';
$txt['first_post'] = 'প্রথম পোস্ট';
$txt['last_poster'] = 'দ্বারা শেষ পোস্ট';
$txt['last_post_message'] = '<strong>শেষ পোস্ট:</strong>%3$s<span class="postby">%2$s দ্বারা %1$s</span>';
$txt['last_post_topic'] = '%1$s<br>দ্বারা %2$s';
$txt['post_by_member'] = '<strong>%1$s</strong> দ্বারা <strong>%2$s</strong><br>';
$txt['boardindex_total_posts'] = '%1$s পোস্ট ভিতরে %2$s বিষয়গুলি দ্বারা %3$s সদস্যরা';
$txt['show'] = 'দেখানো';
$txt['hide'] = 'লুকানো';

$txt['admin_login'] = 'প্রশাসন লগইন';
// Use numeric entities in the below string.
$txt['topic'] = 'বিষয়';
$txt['help'] = 'সাহায্য';
$txt['terms_and_rules'] = 'শর্তাবলী এবং নিয়ম';
$txt['watch_board'] = 'বিভাগটি দেখুন';
$txt['unwatch_board'] = 'বিভাগটি দেখা বন্ধ করুন';
$txt['watch_topic'] = 'বিষয়টি দেখুন';
$txt['unwatch_topic'] = 'বিষয়টি দেখা বন্ধ করুন';
$txt['watching_topic'] = 'আপনি যে বিষয় দেখছেন';
$txt['watching_this_topic'] = 'আপনি এই বিষয়টি দেখছেন, এবং এটি সম্পর্কে বিজ্ঞপ্তি পাবেন.';
$txt['notify'] = 'অবহিত করা';
$txt['unnotify'] = 'অ অবহিত করা';

// Use numeric entities in the below string.
// argument(s): forum name
$txt['regards_team'] = 'Regards,
%1$s টীম.';

$txt['notify_replies'] = 'উত্তর সম্পর্কে অবহিত করুন';
$txt['move_topic'] = 'বিষয়টি সরানো';
$txt['move_to'] = 'সরানো';
$txt['pages'] = 'পাতা';
$txt['users_active'] = 'সদস্যরা গত %1$d মিনিটে সক্রিয়';
$txt['personal_messages'] = 'ব্যক্তিগত বার্তা';
$txt['reply_quote'] = 'উদৃত্তি দিয়ে উত্তর দিন';
$txt['reply'] = 'উত্তর';
$txt['reply_noun'] = 'উত্তর';
$txt['reply_number'] = 'উত্তর #%1$s%2$s';
$txt['approve'] = 'অনুমোদন';
$txt['unapprove'] = 'অননুমোদন';
$txt['approve_all'] = 'সব অনুমোদন';
$txt['issue_warning'] = 'ইস্যু সতর্কতা';
$txt['awaiting_approval'] = 'অনুমোদনের অপেক্ষায়';
$txt['attach_awaiting_approve'] = 'সংযুক্তি অনুমোদনের অপেক্ষায়';
$txt['post_awaiting_approval'] = 'এই বার্তাটি সভাপতির অনুমোদনের অপেক্ষায় আছে.';
$txt['there_are_unapproved_topics'] = 'আছে %1$s বিষয় এবং %2$s এই বোর্ডে অনুমোদনের অপেক্ষায় পোস্ট. ক্লিক <a href="%3$s">হেয়ার</a>তাদের সব দেখতে.';
$txt['send_message'] = 'বার্তা পাঠান';

$txt['msg_alert_no_messages'] = 'আপনার কাছে কোনো বার্তা নেই';
$txt['msg_alert_one_message'] = 'আপনার আছে <a href="%1$s">1বার্তা</a>';
$txt['msg_alert_many_message'] = 'আপনার আছে <a href="%1$s">%2$d বার্তা</a>';
$txt['msg_alert_one_new'] = '1 হয় নতুন';
$txt['msg_alert_many_new'] = '%1$d হয় নতুন';
$txt['new_alert'] = 'নতুন সতর্কতা';
$txt['remove_message'] = 'পোস্টটি সরিয়েদিন';
$txt['remove_message_question'] = 'পোস্টটি সরিয়েদিন?';

$txt['topic_alert_none'] = 'কোনো বার্তা নেই...';
$txt['pm_alert_none'] = 'কোনো বার্তা নেই...';
$txt['no_messages'] = 'কোনো বার্তা নেই';

$txt['online_users'] = 'সদস্য অনলাইন';
$txt['jump_to'] = 'ঝাঁপ দাও';
$txt['go'] = 'যাওয়া';
$txt['are_sure_remove_topic'] = 'আপনি কি সত্যিই এই বিষয়টি সরিয়ে দিতে চান?';
$txt['yes'] = 'হাঁ';
$txt['no'] = 'না';

$txt['search_end_results'] = 'ফলাফলের শেষ';
$txt['search_on'] = 'চালু';

$txt['search'] = 'অনুসন্ধান';
$txt['all'] = 'সব';
$txt['search_entireforum'] = 'পুরো ফোরাম';
$txt['search_thisboard'] = 'এই বোর্ড';
$txt['search_thistopic'] = 'এই বিষয়';
$txt['search_members'] = 'সদস্যগন';

$txt['back'] = 'পিছনে';
$txt['continue'] = 'চলমান';
$txt['password_reminder'] = 'পাসওয়ার্ড অনুস্মারক';
$txt['topic_started'] = 'বিষয় দ্বারা শুরু';
$txt['title'] = 'শিরোনাম';
$txt['post_by'] = 'দ্বারা পোস্ট';
$txt['memberlist_searchable'] = 'সমস্ত নিবন্ধিত সদস্যদের অনুসন্ধানযোগ্য তালিকা.';
$txt['welcome_newest_member'] = 'স্বাগতম %1$s, আমাদের নতুন সদস্যকে.';
$txt['admin_center'] = 'প্রশাসন সেন্টার';
$txt['last_edit_by'] = '<span class="lastedit">শেষ সম্পাদনা</span>: %1$s দ্বারা %2$s';
$txt['last_edit_reason'] = '<span id="reason" class="lastedit">কারণ</span>: %1$s';
$txt['notify_deactivate'] = 'আপনি কি এই বিষয়ে বিজ্ঞপ্তি নিষ্ক্রিয় করতে চান?';
$txt['modified_time'] = 'শেষ সম্পাদনা';
$txt['modified_by'] = 'দ্বারা সম্পাদিত';

$txt['recent_posts'] = 'সাম্প্রতিক পোস্ট';

$txt['location'] = 'অবস্থান';
$txt['location_desc'] = 'ভৌগোলিক অবস্থান.';
$txt['gender'] = 'লিঙ্গ';
$txt['gender_0'] = 'কোনোটাই নয়';
$txt['gender_1'] = 'পুরুষ';
$txt['gender_2'] = 'মহিলা';
$txt['gender_desc'] = 'আপনার লিঙ্গ.';
$txt['icq'] = 'ICQ';
$txt['icq_desc'] = 'এটি আপনার ICQ নম্বর.';
$txt['skype'] = 'Skype';
$txt['skype_desc'] = 'আপনার Skype সদস্যপদ';
$txt['personal_text'] = 'ব্যক্তিগত পাঠ্য';
$txt['date_registered'] = 'তারিখ নিবন্ধিত';

$txt['recent_view'] = 'ফোরামে সবচেয়ে সাম্প্রতিক পোস্ট দেখুন.';
$txt['recent_updated'] = 'সবচেয়ে সাম্প্রতিক আপডেট করা বিষয়';
$txt['is_recent_updated'] = '%1$s সবচেয়ে সাম্প্রতিক আপডেট করা বিষয়';

$txt['male'] = 'পুরুষ';
$txt['female'] = 'মহিলা';

$txt['error_invalid_characters_username'] = 'Invalid character used in Username.';

// argument(s): forum name, login URL, login JavaScript snippet
$txt['welcome_guest'] = 'Welcome to <strong>%1$s</strong>. Please <a href="%2$s" onclick="%3$s">log in</a>.';

// argument(s): forum name, login URL, login JavaScript snippet, signup URL
$txt['welcome_guest_register'] = 'Welcome to <strong>%1$s</strong>. Please <a href="%2$s" onclick="%3$s">log in</a> or <a href="%4$s">sign up</a>.';

// argument(s): $scripturl
$txt['welcome_guest_activate'] = '<a href="%1$s?action=activate">Did you miss your activation email?</a>';

// argument(s): $scripturl
$txt['register_prompt'] = 'Don\'t have an account? <a href="%1$s?action=signup">Sign up</a>.';

// argument(s): forum name
$txt['welcome_to_forum'] = 'Welcome to <strong>%1$s</strong>.';

// @todo the following to sprintf
$txt['hello_member'] = 'Hey,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Welcome,';
$txt['select_destination'] = 'Please select a destination';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Posted by';

$txt['icon_smiley'] = 'Smiley';
$txt['icon_angry'] = 'Angry';
$txt['icon_cheesy'] = 'Cheesy';
$txt['icon_laugh'] = 'Laugh';
$txt['icon_sad'] = 'Sad';
$txt['icon_wink'] = 'Wink';
$txt['icon_grin'] = 'Grin';
$txt['icon_shocked'] = 'Shocked';
$txt['icon_cool'] = 'Cool';
$txt['icon_huh'] = 'Huh';
$txt['icon_rolleyes'] = 'Roll Eyes';
$txt['icon_tongue'] = 'Tongue';
$txt['icon_embarrassed'] = 'Embarrassed';
$txt['icon_lips'] = 'Lips sealed';
$txt['icon_undecided'] = 'Undecided';
$txt['icon_kiss'] = 'Kiss';
$txt['icon_cry'] = 'Cry';

$txt['moderator'] = 'Moderator';
$txt['moderators'] = 'Moderators';

$txt['views'] = 'Views';
$txt['new'] = 'New';

$txt['view_all_members'] = 'View all Members';
$txt['view'] = 'View';

$txt['viewing_members'] = 'Viewing Members %1$s to %2$s';
$txt['of_total_members'] = 'of %1$s total members';

$txt['forgot_your_password'] = 'Forgot your password?';

$txt['date'] = 'Date';
// Use numeric entities in the below string.
$txt['from'] = 'From';
$txt['check_new_messages'] = 'Check for new messages';
$txt['to'] = 'To';

$txt['board_topics'] = 'Topics';
$txt['members_title'] = 'Members';
$txt['members_list'] = 'Members List';
$txt['new_posts'] = 'New Posts';
$txt['old_posts'] = 'No New Posts';
$txt['redirect_board'] = 'Redirect Board';

$txt['sendtopic_send'] = 'Send';
$txt['report_sent'] = 'Your report has been sent successfully.';
$txt['post_becomes_unapproved'] = 'Your message was not approved because it was posted in an unapproved topic. Once the topic is approved your message will be approved too.';

$txt['time_offset'] = 'Time Offset';
$txt['or'] = 'or';

$txt['no_matches'] = 'Sorry, no matches were found';

$txt['notification'] = 'Notification';

$txt['your_ban'] = 'Sorry %1$s, you are banned from using this forum!';
$txt['your_ban_expires'] = 'This ban is set to expire %1$s.';
$txt['your_ban_expires_never'] = 'This ban is not set to expire.';
$txt['ban_continue_browse'] = 'You may continue to browse the forum as a guest.';

$txt['mark_as_read'] = 'Mark ALL messages as read';

$txt['locked_topic'] = 'Locked Topic';
$txt['normal_topic'] = 'Normal Topic';
$txt['participation_caption'] = 'Topic you have posted in';
$txt['moved_topic'] = 'Moved Topic';

$txt['go_caps'] = 'GO';

$txt['print'] = 'Print';
$txt['profile'] = 'Profile';
$txt['topic_summary'] = 'Topic summary';
$txt['not_applicable'] = 'N/A';
$txt['name_in_use'] = 'This name is already in use by another member.';

$txt['total_members'] = 'Total Members';
$txt['total_posts'] = 'Total Posts';
$txt['total_topics'] = 'Total Topics';

$txt['time_logged_in'] = 'Time to stay logged in';

$txt['preview'] = 'Preview';
$txt['always_logged_in'] = 'Forever';

$txt['logged'] = 'Logged';
$txt['show_ip'] = 'Show IP address';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';
$txt['url'] = 'URL';
$txt['www'] = 'WWW';

$txt['hours'] = 'hours';
$txt['minutes'] = 'minutes';
$txt['seconds'] = 'seconds';

// Used upper case in Paid subscriptions management
$txt['hour'] = 'Hour';
$txt['days_word'] = 'days';

$txt['search_for'] = 'Search for';
$txt['search_match'] = 'Match';

$txt['forum_in_maintenance'] = 'Your forum is in Maintenance Mode. Only administrators can currently log in.';
$txt['maintenance_page'] = 'You can turn off Maintenance Mode from the <a href="%1$s">Server Settings</a> area.';

$txt['read_one_time'] = 'Read 1 time';
$txt['read_many_times'] = 'Read %1$d times';

$txt['forum_stats'] = 'Forum Stats';
$txt['latest_member'] = 'Latest Member';
$txt['total_cats'] = 'Total Categories';
$txt['latest_post'] = 'Latest Post';

$txt['total_boards'] = 'Total Boards';

$txt['print_page'] = 'Print Page';
$txt['print_page_text'] = 'Text only';
$txt['print_page_images'] = 'Text with Images';

$txt['valid_email'] = 'This must be a valid email address.';

$txt['geek'] = 'I am a geek!!';
$txt['info_center_title'] = '%1$s - Info Center';

$txt['watch'] = 'Watch';
$txt['unwatch'] = 'Stop watching';

$txt['check_all'] = 'Select all';

// Use numeric entities in the below string.
$txt['database_error'] = 'Database Error';
$txt['try_again'] = 'Please try again. If you come back to this error screen, report the error to an administrator.';
$txt['file'] = 'File';
$txt['line'] = 'Line';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF has detected and automatically tried to repair an error in your database. If you continue to have problems, or continue to receive these emails, please contact your host.';
$txt['database_error_versions'] = '<strong>Note:</strong> It appears that your database <em>may</em> require an upgrade. Your forum\'s files are currently at version %1$s, while your database is at version %2$s. The above error might possibly go away if you execute the latest version of upgrade.php.';
$txt['template_parse_error'] = 'Template Parse Error!';
$txt['template_parse_error_message'] = 'It seems something has gone sour on the forum with the template system. This problem should only be temporary, so please come back later and try again. If you continue to see this message, please contact the administrator.<br><br>You can also try <a href="javascript:location.reload();">refreshing this page</a>.';
// argument(s): filename, $boardurl, $scripturl
$txt['template_parse_error_details'] = 'There was a problem loading the <pre><strong>%1$s</strong></pre> template or language file. Please check the syntax and try again - remember, single quotes (<pre>\'</pre>) often have to be escaped with a slash (<pre>\\</pre>). To see more specific error information from PHP, try <a href="%2$s%1$s">accessing the file directly</a>.<br><br>You may want to try to <a href="javascript:location.reload();">refresh this page</a> or <a href="%3$s?theme=1">use the default theme</a>.';
$txt['template_parse_errmsg'] = 'Unfortunately more information is not available at this time as to exactly what is wrong.';

$txt['today'] = '<strong>Today</strong> at ';
$txt['yesterday'] = '<strong>Yesterday</strong> at ';
$txt['new_poll'] = 'New poll';
$txt['poll_question'] = 'Question';
$txt['poll_vote'] = 'Submit Vote';
$txt['poll_total_voters'] = 'Total Members Voted';
$txt['poll_results'] = 'View results';
$txt['poll_lock'] = 'Lock Voting';
$txt['poll_unlock'] = 'Unlock Voting';
$txt['poll_edit'] = 'Edit Poll';
$txt['poll'] = 'Poll';
$txt['one_hour'] = '1 Hour';
$txt['one_day'] = '1 Day';
$txt['one_week'] = '1 Week';
$txt['two_weeks'] = '2 Weeks';
$txt['one_month'] = '1 Month';
$txt['two_months'] = '2 Months';
$txt['forever'] = 'Forever';
$txt['moved'] = 'MOVED';
$txt['move_why'] = 'Please enter a brief description as to<br>why this topic is being moved.';
$txt['board'] = 'Board';
$txt['in'] = 'in';
$txt['sticky_topic'] = 'Sticky Topic';

$txt['delete'] = 'Delete';
$txt['no_change'] = 'No change';

$txt['your_pms'] = 'Your Personal Messages';

$txt['kilobyte'] = 'KB';
$txt['megabyte'] = 'MB';

$txt['more_stats'] = '[More Stats]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Code';
$txt['code_select'] = 'Select';
$txt['code_expand'] = 'Expand';
$txt['code_shrink'] = 'Shrink';
$txt['quote_from'] = 'Quote from';
$txt['quote'] = 'Quote';
$txt['quote_action'] = 'Quote';
$txt['quote_selected_action'] = 'Quote selected text';
$txt['fulledit'] = 'Full&nbsp;edit';
$txt['edit'] = 'Edit';
$txt['quick_edit'] = 'Quick Edit';
$txt['post_options'] = 'More...';

$txt['merge_to_topic_id'] = 'ID of target topic';
$txt['split'] = 'Split Topic';
$txt['merge'] = 'Merge Topics';
$txt['target_id'] = 'Select target by topic ID';
$txt['target_below'] = 'Select target from the list below';
$txt['subject_new_topic'] = 'Subject For New Topic';
$txt['split_this_post'] = 'Only split this post.';
$txt['split_after_and_this_post'] = 'Split topic after and including this post.';
$txt['select_split_posts'] = 'Select posts to split.';
$txt['new_topic'] = 'New Topic';
$txt['split_successful'] = 'Topic successfully split into two topics.';
$txt['origin_topic'] = 'Original Topic';
$txt['please_select_split'] = 'Please select which posts you wish to split.';
$txt['merge_successful'] = 'Topics successfully merged.';
$txt['new_merged_topic'] = 'Newly Merged Topic';
$txt['topic_to_merge'] = 'Topic to be merged';
$txt['target_board'] = 'Target board';
$txt['target_topic'] = 'Target topic';
$txt['merge_desc'] = 'This function will merge the messages of two topics into one topic. The messages will be sorted according to the time of posting. Therefore, the earliest posted message will be the first message of the merged topic.';

$txt['set_sticky'] = 'Set topic sticky';
$txt['set_nonsticky'] = 'Set topic non-sticky';
$txt['set_lock'] = 'Lock topic';
$txt['set_unlock'] = 'Unlock topic';

$txt['search_advanced'] = 'Advanced search';

$txt['security_risk'] = 'MAJOR SECURITY RISK:';
$txt['not_removed'] = 'You have not removed ';
$txt['not_removed_extra'] = '%1$s is a backup of %2$s that was not generated by SMF. It can be accessed directly and used to gain unauthorized access to your forum. You should delete it immediately.';
$txt['generic_warning'] = 'Warning';
$txt['agreement_missing'] = 'You are requiring new users to accept a registration agreement; however, the file (agreement.txt) does not exist.';
$txt['policy_agreement_missing'] = 'You are requiring new users to accept a privacy policy; however, the privacy policy is empty.';
$txt['auth_secret_missing'] = 'Unable to set authentication secret in Settings.php. This weakens the security of your forum and puts it at risk for attacks. Check the file permissions on Settings.php to make sure SMF can write to the file.';

$txt['cache_writable'] = 'The cache directory is not writable - this will adversely affect the performance of your forum.';

$txt['page_created_full'] = 'Page created in %1$.3f seconds with %2$d queries.';

$txt['report_to_mod_func'] = 'Use this function to inform the moderators and administrators of an abusive or problematic message.';
$txt['report_profile_func'] = 'Use this function to inform the administrators of abusive profile content, such as spam or inappropriate images.';

$txt['online'] = 'Online';
$txt['member_is_online'] = '%1$s is online';
$txt['offline'] = 'Offline';
$txt['member_is_offline'] = '%1$s is offline';
$txt['pm_online'] = 'Personal Message (Online)';
$txt['pm_offline'] = 'Personal Message (Offline)';
$txt['status'] = 'Status';

$txt['go_up'] = 'Go Up';
$txt['go_down'] = 'Go Down';

// argument(s): SMF_FULL_VERSION, SMF_SOFTWARE_YEAR, $scripturl
$forum_copyright = '<a href="%3$s?action=credits" title="License" target="_blank" rel="noopener">%1$s &copy; %2$s</a>, <a href="https://www.simplemachines.org" title="Simple Machines" target="_blank" rel="noopener">Simple Machines</a>';

$txt['birthdays'] = 'Birthdays:';
$txt['events'] = 'Events:';
$txt['birthdays_upcoming'] = 'Upcoming Birthdays:';
$txt['events_upcoming'] = 'Upcoming Events:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = 'Holidays:';
$txt['calendar_month'] = 'Month';
$txt['calendar_year'] = 'Year';
$txt['calendar_day'] = 'Day';
$txt['calendar_event_title'] = 'Event Title';
$txt['calendar_event_options'] = 'Event Options';
$txt['calendar_post_in'] = 'Post in';
$txt['calendar_edit'] = 'Edit Event';
$txt['calendar_export'] = 'Export Event';
$txt['calendar_view_week'] = 'View Week';
$txt['event_delete_confirm'] = 'Delete this event?';
$txt['event_delete'] = 'Delete Event';
$txt['calendar_post_event'] = 'Post Event';
$txt['calendar'] = 'Calendar';
$txt['calendar_link'] = 'Link to Calendar';
$txt['calendar_upcoming'] = 'Upcoming Calendar';
$txt['calendar_today'] = 'Today\'s Calendar';
$txt['calendar_week'] = 'Week';
$txt['calendar_week_title'] = 'Week %1$d of %2$d';
// %1$s is the month, %2$s is the day, %3$s is the year. Change to suit your language.
$txt['calendar_week_beginning'] = 'Week beginning %1$s %2$s, %3$s';
$txt['calendar_numb_days'] = 'Number of Days';
$txt['calendar_how_edit'] = 'how do you edit these events?';
$txt['calendar_link_event'] = 'Link Event To Post';
$txt['calendar_confirm_delete'] = 'Are you sure you want to delete this event?';
$txt['calendar_linked_events'] = 'Linked Events';
$txt['calendar_click_all'] = 'click to see all %1$s';
$txt['calendar_allday'] = 'All day';
$txt['calendar_timezone'] = 'Time zone';
$txt['calendar_list'] = 'List';
$txt['calendar_empty'] = 'There are no events to display.';

$txt['movetopic_change_subject'] = 'Change the topic\'s subject';
$txt['movetopic_new_subject'] = 'New subject';
$txt['movetopic_change_all_subjects'] = 'Change every message\'s subject';
$txt['move_topic_unapproved_js'] = 'Warning! This topic has not yet been approved.\\n\\nIt is not recommended that you create a redirection topic unless you intend to approve the post immediately following the move.';
$txt['movetopic_auto_board'] = '[BOARD]';
$txt['movetopic_auto_topic'] = '[TOPIC LINK]';

// argument(s): $txt['movetopic_auto_board'], $txt['movetopic_auto_topic']
$txt['movetopic_default'] = 'This topic has been moved to %1$s.

%2$s';

$txt['movetopic_redirect'] = 'Redirect to the moved topic';

$txt['post_redirection'] = 'Post a redirection topic';
$txt['redirect_topic_expires'] = 'Automatically remove the redirection topic';
$txt['mergetopic_redirect'] = 'Redirect to the merged topic';
$txt['merge_topic_unapproved_js'] = 'Warning! This topic has not yet been approved.\\n\\nIt is not recommended that you create a redirection topic unless you intend to approve the post immediately following the merge.';

$txt['theme_template_error'] = 'Unable to load the \'%1$s\' template.';
$txt['theme_language_error'] = 'Unable to load the \'%1$s\' language file.';

$txt['sub_boards'] = 'Sub-Boards';
$txt['restricted_board'] = 'Restricted Board';

$txt['smtp_no_connect'] = 'Could not connect to SMTP host';
$txt['smtp_port_ssl'] = 'SMTP port setting incorrect; it should be 465 for SSL servers. Hostname may need ssl:// prefix.';
$txt['smtp_bad_response'] = 'Could not get mail server response codes';
$txt['smtp_error'] = 'Ran into problems sending mail. Error: ';
$txt['mail_send_unable'] = 'Unable to send mail to the email address \'%1$s\'';

$txt['mlist_search'] = 'Search for Members';
$txt['mlist_search_again'] = 'Search again';
$txt['mlist_search_filter'] = 'Search options';
$txt['mlist_search_email'] = 'Search by email address';
$txt['mlist_search_messenger'] = 'Search by messenger nickname';
$txt['mlist_search_group'] = 'Search by position';
$txt['mlist_search_name'] = 'Search by name';
$txt['mlist_search_website'] = 'Search by website';
$txt['mlist_search_results'] = 'Search results for';
$txt['mlist_search_by'] = 'Search by %1$s';
$txt['mlist_menu_view'] = 'View the memberlist';

$txt['attach_downloaded'] = 'downloaded %1$d times';
$txt['attach_viewed'] = 'viewed %1$d times';

$txt['settings'] = 'Settings';
$txt['never'] = 'Never';
$txt['more'] = 'more';
$txt['etc'] = 'etc.';

$txt['hostname'] = 'Hostname';
$txt['you_are_post_banned'] = 'Sorry %1$s, you are banned from posting and sending personal messages on this forum.';
$txt['ban_reason'] = 'Reason';
$txt['select_item_check'] = 'Please select at least one item in the list';

$txt['tables_optimized'] = 'Database tables optimized';

$txt['add_poll'] = 'Add poll';
$txt['poll_options_limit'] = 'You may only select up to %1$s options.';
$txt['poll_remove'] = 'Remove Poll';
$txt['poll_remove_warn'] = 'Are you sure you want to remove this poll from the topic?';
$txt['poll_results_expire'] = 'Results will be shown when voting has closed';
$txt['poll_expires_on'] = 'Voting closes';
$txt['poll_expired_on'] = 'Voting closed';
$txt['poll_change_vote'] = 'Remove Vote';
$txt['poll_return_vote'] = 'Voting options';
$txt['poll_cannot_see'] = 'You cannot see the results of this poll at the moment.';

$txt['quick_mod_approve'] = 'Approve selected';
$txt['quick_mod_remove'] = 'Remove selected';
$txt['quick_mod_lock'] = 'Lock/Unlock selected';
$txt['quick_mod_sticky'] = 'Sticky/Unsticky selected';
$txt['quick_mod_move'] = 'Move selected to';
$txt['quick_mod_merge'] = 'Merge selected';
$txt['quick_mod_markread'] = 'Mark selected read';
$txt['quick_mod_markunread'] = 'Mark selected unread';
$txt['quick_mod_selected'] = 'With the selected options do';
$txt['quick_mod_go'] = 'Go';
$txt['quickmod_confirm'] = 'Are you sure you want to do this?';

$txt['spell_check'] = 'Spell Check';

$txt['quick_reply'] = 'Quick Reply';
$txt['quick_reply_warning'] = 'Warning! This topic is currently locked, only admins and moderators can reply.';
$txt['quick_reply_verification'] = 'After submitting your post you will be directed to the regular post page to verify your post %1$s.';
$txt['quick_reply_verification_guests'] = '(required for all guests)';
$txt['quick_reply_verification_posts'] = '(required for all users with less than %1$d posts)';
$txt['wait_for_approval'] = 'Note: this post will not display until it has been approved by a moderator.';

$txt['notification_enable_board'] = 'Are you sure you wish to enable notification of new topics for this board?';
$txt['notification_disable_board'] = 'Are you sure you wish to disable notification of new topics for this board?';
$txt['notification_enable_topic'] = 'Are you sure you wish to enable notification of new replies for this topic?';
$txt['notification_disable_topic'] = 'Are you sure you wish to disable notification of new replies for this topic?';

// Mentions
$txt['mentions'] = 'Mentions';

// Likes
$txt['likes'] = 'Likes';
$txt['like'] = 'Like';
$txt['unlike'] = 'Unlike';
$txt['like_success'] = 'Your content was successfully liked.';
$txt['like_delete'] = 'Your content was successfully deleted.';
$txt['like_insert'] = 'Your content was successfully inserted.';
$txt['like_error'] = 'There was an error with your request.';
$txt['like_disable'] = 'Likes feature is disabled.';
$txt['not_valid_like_type'] = 'The liked type is not a valid type.';
// Translators, if you need to make more strings to suit your language, e.g. $txt['likes_2'] = 'Two people like this', please do so.
$txt['likes_1'] = '<a href="%1$s">%2$s person</a> likes this.';
$txt['likes_n'] = '<a href="%1$s">%2$s people</a> like this.';
$txt['you_likes_0'] = 'You like this.';
$txt['you_likes_1'] = 'You and <a href="%1$s">%2$s other person</a> like this.';
$txt['you_likes_n'] = 'You and <a href="%1$s">%2$s other people</a> like this.';

$txt['report_to_mod'] = 'Report to moderator';
$txt['report_profile'] = 'Report profile of %1$s';

$txt['unread_topics_visit'] = 'Recent Unread Topics';
// argument(s): scripturl
$txt['unread_topics_visit_none'] = 'No unread topics found since your last visit. <a href="%1$s?action=unread;all">Click here to try all unread topics</a>.';
$txt['updated_topics_visit_none'] = 'No updated topics found since your last visit.';
$txt['unread_topics_all'] = 'All Unread Topics';
$txt['unread_replies'] = 'Updated Topics';

$txt['who_title'] = 'Who\'s Online';
$txt['who_and'] = ' and ';
$txt['who_viewing_topic'] = ' are viewing this topic.';
$txt['who_viewing_board'] = ' are viewing this board.';
$txt['who_member'] = 'Member';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_css'] = 'Valid CSS';

$txt['rss'] = 'RSS';
$txt['atom'] = 'Atom';
$txt['html'] = 'HTML';

$txt['guest'] = 'Guest';
$txt['guests'] = 'Guests';
$txt['user'] = 'User';
$txt['users'] = 'Users';
$txt['hidden'] = 'Hidden';

// Plural form of hidden for languages other than English
$txt['hidden_s'] = 'Hidden';
$txt['buddy'] = 'Buddy';
$txt['buddies'] = 'Buddies';
$txt['most_online_ever'] = 'Most Online Ever';
$txt['most_online_today'] = 'Most Online Today';

$txt['merge_select_target_board'] = 'Select the target board of the merged topic';
$txt['merge_select_poll'] = 'Select which poll the merged topic should have';
$txt['merge_topic_list'] = 'Select topics to be merged';
$txt['merge_select_subject'] = 'Select subject of merged topic';
$txt['merge_custom_subject'] = 'Custom subject';
$txt['merge_include_notifications'] = 'Include notifications?';
$txt['merge_check'] = 'Merge?';
$txt['merge_no_poll'] = 'No poll';
$txt['merge_why'] = 'Please enter a brief description as to why these topics are being merged.';
$txt['merged_subject'] = '[MERGED] %1$s';
// argument(s): $txt['movetopic_auto_topic']
$txt['mergetopic_default'] = 'This topic has been merged into %2$s.';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = 'Current Icon';
$txt['message_icon'] = 'Message Icon';

$txt['smileys_current'] = 'Current Smiley Set';
$txt['smileys_none'] = 'No Smileys';
$txt['smileys_forum_board_default'] = 'Forum/Board Default';

$txt['search_results'] = 'Search Results';
$txt['search_no_results'] = 'Sorry, no matches were found';

$txt['total_time_logged_days'] = ' days, ';
$txt['total_time_logged_hours'] = ' hours and ';
$txt['total_time_logged_minutes'] = ' minutes';
$txt['total_time_logged_d'] = 'd ';
$txt['total_time_logged_h'] = 'h ';
$txt['total_time_logged_m'] = 'm';

$txt['approve_members_waiting'] = 'Member Approvals';

$txt['activate_code'] = 'Your activation code is';

$txt['find_members'] = 'Find Members';
$txt['find_username'] = 'Name, username, or email address';
$txt['find_buddies'] = 'Show Buddies Only?';
$txt['find_wildcards'] = 'Allowed Wildcards: *, ?';
$txt['find_no_results'] = 'No results found';
$txt['find_results'] = 'Results';
$txt['find_close'] = 'Close';

$txt['unread_since_visit'] = 'Show unread posts since last visit.';
$txt['show_unread_replies'] = 'Show new replies to your posts.';

$txt['change_color'] = 'Change color';

$txt['quickmod_delete_selected'] = 'Remove selected';
$txt['quickmod_split_selected'] = 'Split selected';

$txt['show_personal_messages_heading'] = 'New messages';
$txt['show_personal_messages'] = 'You have <strong>%1$s</strong> unread personal messages in your inbox.<br><br><a href="%2$s">Go to your inbox</a>';

$txt['help_popup'] = 'A little lost? Let me explain:';

$txt['previous_next_back'] = 'Previous topic';
$txt['previous_next_forward'] = 'Next topic';

$txt['mark_unread'] = 'Mark unread';

$txt['ssi_not_direct'] = 'Please do not access SSI.php by URL directly; you may want to use the path (%1$s) or add ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php was unable to load a session! This may cause problems with logout and other functions - please make sure SSI.php is included before *anything* else in all your scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Preview post';
$txt['preview_fetch'] = 'Fetching preview...';
$txt['preview_new'] = 'New message';
$txt['pm_error_while_submitting'] = 'The following error or errors occurred while sending this personal message:';
$txt['error_while_submitting'] = 'The message has the following error or errors that must be corrected before continuing:';
$txt['error_old_topic'] = 'Warning: this topic has not been posted in for at least %1$d days.<br>Unless you\'re sure you want to reply, please consider starting a new topic.';

$txt['split_selected_posts'] = 'Selected posts';
$txt['split_selected_posts_desc'] = 'The posts below will form a new topic after splitting.';
$txt['split_reset_selection'] = 'reset selection';

$txt['modify_cancel'] = 'Cancel';
$txt['modify_cancel_all'] = 'Cancel All';
$txt['mark_read_short'] = 'Mark Read';

$txt['alerts'] = 'Alerts';

$txt['pm_short'] = 'My Messages';
$txt['pm_menu_read'] = 'Read your messages';
$txt['pm_menu_send'] = 'Send a message';

$txt['unapproved_posts'] = 'Unapproved Posts (Topics: %1$d, Posts: %2$d)';

$txt['ajax_in_progress'] = 'Loading...';

$txt['mod_reports_waiting'] = 'Reported Posts';

$txt['view_unread_category'] = 'Unread Posts';
$txt['new_posts_in_category'] = 'Click to see the new posts in %1$s';
$txt['verification'] = 'Verification';
$txt['visual_verification_hidden'] = 'Please leave this box empty';
$txt['visual_verification_description'] = 'Type the letters shown in the picture';
$txt['visual_verification_sound'] = 'Listen to the letters';
$txt['visual_verification_request_new'] = 'Request another image';

// Sub menu labels
$txt['summary'] = 'Summary';
$txt['account'] = 'Account Settings';
$txt['theme'] = 'Look and Layout';
$txt['forumprofile'] = 'Forum Profile';
$txt['activate_changed_email_title'] = 'Email Address Changed';
$txt['activate_changed_email_desc'] = 'You\'ve changed your email address. In order to validate this address you will receive an email. Click the link in that email to reactivate your account.';
$txt['modSettings_title'] = 'Features and Options';
$txt['package'] = 'Package Manager';
$txt['errorlog'] = 'Error Log';
$txt['edit_permissions'] = 'Permissions';
$txt['mc_unapproved_attachments'] = 'Unapproved Attachments';
$txt['mc_unapproved_poststopics'] = 'Unapproved Posts and Topics';
$txt['mc_reported_posts'] = 'Reported Posts';
$txt['mc_reported_members'] = 'Reported Members';
$txt['modlog_view'] = 'Moderation Log';
$txt['calendar_menu'] = 'View Calendar';

// @todo Send email strings - should move?
$txt['send_email'] = 'Send Email';

$txt['ignoring_user'] = 'You are ignoring this user.';
$txt['show_ignore_user_post'] = 'Show me the post.';

$txt['spider'] = 'Spider';
$txt['spiders'] = 'Spiders';

$txt['downloads'] = 'Downloads';
$txt['filesize'] = 'Filesize';

// Restore topic
$txt['restore_topic'] = 'Restore Topic';
$txt['restore_message'] = 'Restore';
$txt['quick_mod_restore'] = 'Restore Selected';

// Editor prompt.
$txt['prompt_text_email'] = 'Please enter the email address.';
$txt['prompt_text_ftp'] = 'Please enter the FTP address.';
$txt['prompt_text_url'] = 'Please enter the URL you wish to link to.';
$txt['prompt_text_img'] = 'Enter image location';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Delete Item';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Templates: ';
$txt['debug_subtemplates'] = 'Sub templates: ';
$txt['debug_language_files'] = 'Language files: ';
$txt['debug_stylesheets'] = 'Style sheets: ';
$txt['debug_files_included'] = 'Files included: ';
$txt['debug_memory_use'] = 'Memory used: ';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'show';
$txt['debug_cache_hits'] = 'Cache hits: ';
$txt['debug_cache_misses'] = 'Cache misses: ';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s bytes';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss for %2$s bytes';
$txt['debug_queries_used'] = 'Queries used: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'Queries used: %1$d, %2$d warnings.';
$txt['debug_query_in_line'] = 'in <em>%1$s</em> line <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'which took %1$s seconds.';
$txt['debug_query_which_took_at'] = 'which took %1$s seconds at %2$s into request.';
$txt['debug_show_queries'] = '[Show Queries]';
$txt['debug_hide_queries'] = '[Hide Queries]';
$txt['debug_tokens'] = 'Tokens: ';
$txt['debug_browser'] = 'Browser ID: ';
$txt['debug_hooks'] = 'Hooks called: ';
$txt['debug_instances'] = 'Instances created: ';
$txt['are_sure_mark_read'] = 'Are you sure you want to mark messages as read?';

// Inline attachments messages.
$txt['attachments_not_enable'] = 'Attachments are disabled';
$txt['attachments_no_data_loaded'] = 'Not a valid attachment ID.';
$txt['attachments_not_allowed_to_see'] = 'You cannot view this attachment.';
$txt['attachments_no_msg_associated'] = 'No message is associated with this attachment.';
$txt['attachments_unapproved'] = 'Attachment is awaiting approval.';

// Accessibility
$txt['hide_category'] = 'Hide Category';
$txt['show_category'] = 'Show Category';
$txt['hide_infocenter'] = 'Hide Info Center';
$txt['show_infocenter'] = 'Show Info Center';

// Notification post control
$txt['notify_topic_0'] = 'Not Following';
$txt['notify_topic_1'] = 'No Alerts or Emails';
$txt['notify_topic_2'] = 'Receive Alerts';
$txt['notify_topic_3'] = 'Receive Emails and Alerts';
$txt['notify_topic_0_desc'] = 'You will not receive any emails or alerts for this topic and it will also not show up in your unread replies and topics list. You will still receive @mentions for this topic.';
$txt['notify_topic_1_desc'] = 'You will not receive any emails or alerts but only @mentions by other members.';
$txt['notify_topic_2_desc'] = 'You will receive alerts for this topic.';
$txt['notify_topic_3_desc'] = 'You will receive both alerts and e-mails for this topic.';
$txt['notify_board_1'] = 'No Alerts or Emails';
$txt['notify_board_2'] = 'Receive Alerts';
$txt['notify_board_3'] = 'Receive Emails and Alerts';
$txt['notify_board_1_desc'] = 'You will not receive any emails or alerts for new topics';
$txt['notify_board_2_desc'] = 'You will receive alerts for this board.';
$txt['notify_board_3_desc'] = 'You will receive both alerts and e-mails for this board.';

$txt['notify_board_prompt'] = 'Do you want a notification email when someone posts a new topic in this board?';
$txt['notify_board_subscribed'] = '%1$s has been subscribed to new topic notifications for this board.';
$txt['notify_board_unsubscribed'] = '%1$s has been unsubscribed from new topic notifications for this board.';

$txt['notify_topic_prompt'] = 'Do you want a notification email if someone replies to this topic?';
$txt['notify_topic_subscribed'] = '%1$s has been subscribed to new reply notifications for this topic.';
$txt['notify_topic_unsubscribed'] = '%1$s has been unsubscribed from new reply notifications for this topic.';

$txt['notify_announcements_prompt'] = 'Do you want to receive forum newsletters, announcements and important notifications by email?';
$txt['notify_announcements_subscribed'] = '%1$s has been subscribed to forum newsletters, announcements and important notifications.';
$txt['notify_announcements_unsubscribed'] = '%1$s has been unsubscribed from forum newsletters, announcements and important notifications.';

$txt['unsubscribe_announcements_plain'] = 'To unsubscribe from forum newsletters, announcements and important notifications, follow this link: %1$s';
$txt['unsubscribe_announcements_html'] = '<span style="font-size:small"><a href="%1$s">Unsubscribe</a> from forum newsletters, announcements and important notifications.</span>';
$txt['unsubscribe_announcements_manual'] = 'To unsubscribe from forum newsletters, announcements and important notifications, contact us at %1$s with your request.';

// Mobile Actions
$txt['mobile_action'] = 'User actions';
$txt['mobile_moderation'] = 'Moderation';
$txt['mobile_user_menu'] = 'Main Menu';
$txt['mobile_generic_menu'] = '%1$s Menu';

// Formats for lists in a sentence (e.g. "Alice, Bob, and Charlie")
// Examples:
// 	$txt['sentence_list_format'][2] specifies a format for a list with two items
// 	$txt['sentence_list_format']['n'] specifies the default format
// Notes on placeholders:
// 	{1} = first item in the list, {2} = second item, etc.
// 	{-1} = last item in the list, {-2} = second last item, etc.
// 	{series} = concatenated string of the rest of the items in the list
$txt['sentence_list_format'][1] = '{1}';
$txt['sentence_list_format'][2] = '{1} and {-1}';
$txt['sentence_list_format'][3] = '{series}, and {-1}';
$txt['sentence_list_format'][4] = '{series}, and {-1}';
$txt['sentence_list_format'][5] = '{series}, and {-1}';
$txt['sentence_list_format']['n'] = '{series}, and {-1}';
// Separators used to build lists in a sentence
$txt['sentence_list_separator'] = ', ';
$txt['sentence_list_separator_alt'] = '; ';

?>
<?php
// Version: 2.1.3; index

global $forum_copyright, $webmaster_email, $scripturl, $context, $boardurl;

// Native name, please use full HTML entities to write your language's name.
$txt['native_name'] = 'বাংলা';

// Locale (strftime, basename). For more information see:
//   - https://php.net/function.setlocale
$txt['lang_locale'] = 'bn_BD';
$txt['lang_dictionary'] = 'bn';
// https://developers.google.com/recaptcha/docs/language
$txt['lang_recaptcha'] = 'bn';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set right to left?  0 = ltr; 1 = rtl
$txt['lang_rtl'] = '0';
// Number format.
$txt['number_format'] = '১,২৩৪.০০'; // Bengali number format

$txt['days_title'] = 'দিন';
$txt['days'] = array('রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'শনিবার');
$txt['days_short'] = array('রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহস্পতি', 'শুক্র', 'শনি');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months_title'] = 'মাস';
$txt['months'] = array(1 => 'জানুয়ারী', 2 => 'ফেব্রুয়ারী', 3 => 'মার্চ', 4 => 'এপ্রিল', 5 => 'মে', 6 => 'জুন', 7 => 'জুলাই', 8 => 'আগস্ট', 9 => 'সেপ্টেম্বর', 10 => 'অক্টোবর', 11 => 'নভেম্বর', 12 => 'ডিসেম্বর');
$txt['months_titles'] = array(1 => 'জানুয়ারী', 2 => 'ফেব্রুয়ারী', 3 => 'মার্চ', 4 => 'এপ্রিল', 5 => 'মে', 6 => 'জুন', 7 => 'জুলাই', 8 => 'আগস্ট', 9 => 'সেপ্টেম্বর', 10 => 'অক্টোবর', 11 => 'নভেম্বর', 12 => 'ডিসেম্বর');
$txt['months_short'] = array(1 => 'জন', 2 => 'ফেব', 3 => 'মার্চ', 4 => 'এপ্রি', 5 => 'মে', 6 => 'জুন', 7 => 'জুলাই', 8 => 'আগ', 9 => 'সেপ্ট', 10 => 'অক্টো', 11 => 'নভে', 12 => 'ডিসে');
$txt['prev_month'] = 'পূর্ববর্তী মাস';
$txt['next_month'] = 'পরবর্তী মাস';
$txt['start'] = 'শুরু';
$txt['end'] = 'শেষ';
$txt['starts'] = 'শুরু হয়';
$txt['ends'] = 'শেষ হয়';
$txt['none'] = 'কিছুই নেই';

$txt['minutes_label'] = 'মিনিট';
$txt['hours_label'] = 'ঘণ্টা';
$txt['years_title'] = 'বছর';

$txt['time_am'] = 'এএম'; // Bengali equivalent for am
$txt['time_pm'] = 'পিএম'; // Bengali equivalent for pm

// Short form of minutes
$txt['minutes_short'] = 'মিন';
// Short form of hour
$txt['hour_short'] = 'ঘন্টা'; // Bengali equivalent for hour
// Short form of hours
$txt['hours_short'] = 'ঘণ্টা'; // Bengali equivalent for hours
// Decimal sign
$txt['decimal_sign'] = '.';

$txt['admin'] = 'অ্যাডমিন'; // Bengali equivalent for Admin
$txt['moderate'] = 'মডারেট'; // Bengali equivalent for Moderate

$txt['save'] = 'সংরক্ষণ করুন';
$txt['reset'] = 'পুনরায় সেট করুন';
$txt['upload'] = 'আপলোড করুন';
$txt['upload_all'] = 'সব আপলোড করুন';
$txt['processing'] = 'প্রক্রিয়াকরণ হচ্ছে...';

$txt['modify'] = 'সংশোধন করুন';
$txt['forum_index'] = '%1$s - সূচি';
$txt['members'] = 'সদস্য';
$txt['board_name'] = 'বোর্ডের নাম';
$txt['posts'] = 'পোস্ট';

$txt['member_postcount'] = 'পোস্ট';
$txt['no_subject'] = '(বিষয় নেই)';
$txt['view_profile'] = 'প্রোফাইল দেখুন';
$txt['guest_title'] = 'অতিথি';
$txt['author'] = 'লেখক';
$txt['on'] = 'এতে';
$txt['remove'] = 'অপসারণ করুন';
$txt['start_new_topic'] = 'নতুন বিষয় শুরু করুন';

$txt['login'] = 'লগ ইন করুন';
// Use numeric entities in the below string.
$txt['username'] = 'ব্যবহারকারীর নাম';
$txt['password'] = 'পাসওয়ার্ড';

$txt['username_no_exist'] = 'এটি ব্যবহারকারীর নাম বিদ্যমান নেই।';
$txt['no_user_with_email'] = 'এই ইমেইলের সাথে যুক্ত কোনো ব্যবহারকারীর নাম নেই।';

$txt['board_moderator'] = 'বোর্ড মডারেটর';
$txt['remove_topic'] = 'বিষয় অপসারণ করুন';
$txt['topics'] = 'বিষয়সমূহ';
$txt['modify_msg'] = 'বার্তা সংশোধন করুন';
$txt['name'] = 'নাম';
$txt['email'] = 'ইমেইল';
$txt['user_email_address'] = 'ইমেইল ঠিকানা';
$txt['subject'] = 'বিষয়';
$txt['message'] = 'বার্তা';
$txt['redirects'] = 'রিডাইরেক্টস';
$txt['quick_modify'] = 'লাইন ইন সংশোধন করুন';
$txt['quick_modify_message'] = 'আপনি সফলভাবে এই বার্তাটি সংশোধন করেছেন।';
$txt['reason_for_edit'] = 'সংশোধনের কারণ';

$txt['choose_pass'] = 'পাসওয়ার্ড নির্বাচন করুন';
$txt['verify_pass'] = 'পাসওয়ার্ড নিশ্চিত করুন';
$txt['notify_announcements'] = 'প্রশাসকদের আমাকে গুরুত্বপূর্ণ সংবাদ ইমেইল দ্বারা পাঠাতে অনুমতি দিন';

$txt['position'] = 'পদ';

// argument(s):username
$txt['view_profile_of_username'] = '%1$s এর প্রোফাইল দেখুন';
$txt['total'] = 'মোট';
$txt['website'] = 'ওয়েবসাইট';
$txt['register'] = 'সাইন আপ করুন';
$txt['warning_status'] = 'সতর্কতা স্থিতি';
$txt['user_warn_watch'] = 'ব্যবহারকারী মডারেটর নজরদারি তালিকায় রয়েছে';
$txt['user_warn_moderate'] = 'ব্যবহারকারীর পোস্ট অনুমোদনের জন্য অপেক্ষমাণ তালিকায়';
$txt['user_warn_mute'] = 'ব্যবহারকারী পোস্ট করার জন্য নিষিদ্ধ';
$txt['warn_watch'] = 'নজরদারি';
$txt['warn_moderate'] = 'মডারেটেড';
$txt['warn_mute'] = 'নিষিদ্ধ';

$txt['message_index'] = 'বার্তা সূচি';
$txt['news'] = 'সংবাদ';
$txt['home'] = 'হোম';
$txt['page'] = 'পৃষ্ঠা';
$txt['prev'] = 'পূর্ববর্তী পৃষ্ঠা';
$txt['next'] = 'পরবর্তী পৃষ্ঠা';

$txt['lock_unlock'] = 'বিষয় লক/আনলক করুন';
$txt['post'] = 'পোস্ট';
$txt['error_occured'] = 'একটি ত্রুটি ঘটেছে';
$txt['at'] = 'এতে';
$txt['by'] = 'দ্বারা';
$txt['logout'] = 'লগ আউট';
$txt['started_by'] = 'শুরু করেছেন';
$txt['topic_started_by'] = '<strong>%1$s</strong> দ্বারা শুরু হয়েছে <em>%2$s</em>';
$txt['replies'] = 'প্রতিক্রিয়া';
$txt['last_post'] = 'শেষ পোস্ট';
$txt['first_post'] = 'প্রথম পোস্ট';
$txt['last_poster'] = 'শেষ পোস্ট করেছেন';
$txt['last_post_message'] = '<strong>শেষ পোস্ট: </strong>%3$s <span class="postby">%2$s দ্বারা %1$s</span>';
$txt['last_post_topic'] = '%1$s<br>%2$s দ্বারা';
$txt['post_by_member'] = '<strong>%1$s</strong> দ্বারা <strong>%2$s</strong><br>';
$txt['boardindex_total_posts'] = '%1$s পোস্ট %2$s বিষয়ের মধ্যে %3$s সদস্য দ্বারা';
$txt['show'] = 'দেখান';
$txt['hide'] = 'লুকান';

$txt['admin_login'] = 'প্রশাসন লগইন';
// Use numeric entities in the below string.
$txt['topic'] = 'বিষয়';
$txt['help'] = 'সাহায্য';
$txt['terms_and_rules'] = 'শর্তাবলী এবং নিয়ম';
$txt['watch_board'] = 'এই বোর্ডটি নজরদারি করুন';
$txt['unwatch_board'] = 'বোর্ডটি নজরদারি বন্ধ করুন';
$txt['watch_topic'] = 'এই বিষয়টি নজরদারি করুন';
$txt['unwatch_topic'] = 'বিষয়টি নজরদারি বন্ধ করুন';
$txt['watching_topic'] = 'আপনি যে বিষয়টি নজরদারি করছেন';
$txt['watching_this_topic'] = 'আপনি এই বিষয়টি নজরদারি করছেন এবং এর সম্পর্কে বিজ্ঞপ্তি পাবেন।';
$txt['notify'] = 'বিজ্ঞপ্তি দিন';
$txt['unnotify'] = 'বিজ্ঞপ্তি বন্ধ করুন';
