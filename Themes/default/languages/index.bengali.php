<?php
// Version: 2.1.3; index

global $forum_copyright, $webmaster_email, $scripturl, $context, $boardurl;

// Native name, please use full HTML entities to write your language's name.
$txt['native_name'] = 'বাংলা';

// Locale (strftime, basename). For more information see:
//   - https://php.net/function.setlocale
$txt['lang_locale'] = 'bn_IN';
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

// Use numeric entities in the below string.
// argument(s): forum name
$txt['regards_team'] = 'শুভেচ্ছা,
%1$s দলের।';

$txt['notify_replies'] = 'প্রতিক্রিয়া সম্পর্কে জানান';
$txt['move_topic'] = 'বিষয়টি স্থানান্তর করুন';
$txt['move_to'] = 'এতে স্থানান্তর করুন';
$txt['pages'] = 'পৃষ্ঠা';
$txt['users_active'] = 'গত %1$d মিনিটে সক্রিয় ব্যবহারকারীরা';
$txt['personal_messages'] = 'ব্যক্তিগত বার্তা';
$txt['reply_quote'] = 'উদ্ধৃতির সাথে উত্তর দিন';
$txt['reply'] = 'উত্তর';
$txt['reply_noun'] = 'উত্তর';
$txt['reply_number'] = 'উত্তর #%1$s%2$s';
$txt['approve'] = 'মঞ্জুর করুন';
$txt['unapprove'] = 'মঞ্জুর বাতিল করুন';
$txt['approve_all'] = 'সব মঞ্জুর করুন';
$txt['issue_warning'] = 'সতর্কতা জারি করুন';
$txt['awaiting_approval'] = 'মঞ্জুরির অপেক্ষায়';
$txt['attach_awaiting_approve'] = 'মঞ্জুরির অপেক্ষায় সংযুক্তি';
$txt['post_awaiting_approval'] = 'এই বার্তাটি একজন মডারেটরের দ্বারা মঞ্জুরির অপেক্ষায় রয়েছে।';
$txt['there_are_unapproved_topics'] = 'এই বোর্ডে %1$s বিষয় এবং %2$s পোস্ট মঞ্জুরির অপেক্ষায় রয়েছে। সব দেখতে <a href="%3$s">এখানে</a> ক্লিক করুন।';
$txt['send_message'] = 'বার্তা পাঠান';

$txt['msg_alert_no_messages'] = 'আপনার কোনো বার্তা নেই';
$txt['msg_alert_one_message'] = 'আপনার কাছে <a href="%1$s">1টি বার্তা</a> আছে';
$txt['msg_alert_many_message'] = 'আপনার কাছে <a href="%1$s">%2$dটি বার্তা</a> আছে';
$txt['msg_alert_one_new'] = '1টি নতুন';
$txt['msg_alert_many_new'] = '%1$dটি নতুন';
$txt['new_alert'] = 'নতুন সতর্কতা';
$txt['remove_message'] = 'এই পোস্টটি মুছে ফেলুন';
$txt['remove_message_question'] = 'এই পোস্টটি মুছে ফেলবেন?';

$txt['topic_alert_none'] = 'কোনো বার্তা নেই...';
$txt['pm_alert_none'] = 'কোনো বার্তা নেই...';
$txt['no_messages'] = 'কোনো বার্তা নেই';

$txt['online_users'] = 'অনলাইনে ব্যবহারকারীরা';
$txt['jump_to'] = 'এতে ঝাঁপ দিন';
$txt['go'] = 'যাও';
$txt['are_sure_remove_topic'] = 'আপনি কি নিশ্চিত যে এই বিষয়টি মুছে ফেলতে চান?';
$txt['yes'] = 'হ্যাঁ';
$txt['no'] = 'না';

$txt['search_end_results'] = 'ফলাফলের শেষ';
$txt['search_on'] = 'এতে';

$txt['search'] = 'অনুসন্ধান';
$txt['all'] = 'সব';
$txt['search_entireforum'] = 'সম্পূর্ণ ফোরাম';
$txt['search_thisboard'] = 'এই বোর্ড';
$txt['search_thistopic'] = 'এই বিষয়';
$txt['search_members'] = 'সদস্যরা';

$txt['back'] = 'পিছনে';
$txt['continue'] = 'চালিয়ে যান';
$txt['password_reminder'] = 'পাসওয়ার্ডের অনুস্মারক';
$txt['topic_started'] = 'বিষয়টি শুরু করেছেন';
$txt['title'] = 'শিরোনাম';
$txt['post_by'] = 'পোস্ট করেছেন';
$txt['memberlist_searchable'] = 'সমস্ত নিবন্ধিত সদস্যদের অনুসন্ধানযোগ্য তালিকা।';
$txt['welcome_newest_member'] = 'আমাদের নতুন সদস্য %1$s কে স্বাগতম জানান।';
$txt['admin_center'] = 'প্রশাসনিক কেন্দ্র';
$txt['last_edit_by'] = '<span class="lastedit">শেষ সম্পাদনা</span>: %1$s দ্বারা %2$s';
$txt['last_edit_reason'] = '<span id="reason" class="lastedit">কারণ</span>: %1$s';
$txt['notify_deactivate'] = 'আপনি কি এই বিষয়ের উপর সতর্কতা নিষ্ক্রিয় করতে চান?';
$txt['modified_time'] = 'শেষ সম্পাদনা';
$txt['modified_by'] = 'দ্বারা সম্পাদিত';

$txt['recent_posts'] = 'সাম্প্রতিক পোস্ট';

$txt['location'] = 'অবস্থান';
$txt['location_desc'] = 'ভৌগলিক অবস্থান।';
$txt['gender'] = 'লিঙ্গ';
$txt['gender_0'] = 'কোনও';
$txt['gender_1'] = 'পুরুষ';
$txt['gender_2'] = 'মহিলা';
$txt['gender_desc'] = 'আপনার লিঙ্গ।';
$txt['icq'] = 'ICQ';
$txt['icq_desc'] = 'এটি আপনার ICQ নম্বর।';
$txt['skype'] = 'Skype';
$txt['skype_desc'] = 'আপনার Skype ব্যবহারকারীর নাম';
$txt['personal_text'] = 'ব্যক্তিগত টেক্সট';
$txt['date_registered'] = 'নিবন্ধনের তারিখ';

$txt['recent_view'] = 'ফোরামে সবচেয়ে সাম্প্রতিক পোস্টগুলি দেখুন।';
$txt['recent_updated'] = 'এটি সবচেয়ে সাম্প্রতিক আপডেট করা বিষয়';
$txt['is_recent_updated'] = '%1$s সবচেয়ে সাম্প্রতিক আপডেট করা বিষয়';

$txt['male'] = 'পুরুষ';
$txt['female'] = 'মহিলা';

$txt['error_invalid_characters_username'] = 'ব্যবহারকারীর নামের জন্য অকার্যকর অক্ষর ব্যবহার করা হয়েছে।';

// argument(s): forum name, login URL, login JavaScript snippet
$txt['welcome_guest'] = '<strong>%1$s</strong> এ স্বাগতম। দয়া করে <a href="%2$s" onclick="%3$s">লগ ইন</a> করুন।';

// argument(s): forum name, login URL, login JavaScript snippet, signup URL
$txt['welcome_guest_register'] = '<strong>%1$s</strong> এ স্বাগতম। দয়া করে <a href="%2$s" onclick="%3$s">লগ ইন</a> করুন অথবা <a href="%4$s">নিবন্ধন করুন</a>।';

// argument(s): $scripturl
$txt['welcome_guest_activate'] = '<a href="%1$s?action=activate">আপনার সক্রিয়করণ ইমেইল মিস করেছেন?</a>';

// argument(s): $scripturl
$txt['register_prompt'] = 'আপনার কি একটি অ্যাকাউন্ট নেই? <a href="%1$s?action=signup">নিবন্ধন করুন</a>।';

// argument(s): forum name
$txt['welcome_to_forum'] = '<strong>%1$s</strong> এ স্বাগতম।';

// @todo the following to sprintf
$txt['hello_member'] = 'হ্যালো,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'স্বাগতম,';
$txt['select_destination'] = 'দয়া করে একটি গন্তব্য নির্বাচন করুন';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'পোস্ট করেছেন';

$txt['icon_smiley'] = 'মিষ্টি মুখ';
$txt['icon_angry'] = 'রাগান্বিত';
$txt['icon_cheesy'] = 'চিজি';
$txt['icon_laugh'] = 'হাসি';
$txt['icon_sad'] = 'দুঃখিত';
$txt['icon_wink'] = 'চোখ মারুন';
$txt['icon_grin'] = 'মুখ বাঁকানো';
$txt['icon_shocked'] = 'আশ্চর্য';
$txt['icon_cool'] = 'কুল';
$txt['icon_huh'] = 'হুঁ';
$txt['icon_rolleyes'] = 'চোখ ঘোরানো';
$txt['icon_tongue'] = 'জিভ';
$txt['icon_embarrassed'] = 'লজ্জিত';
$txt['icon_lips'] = 'হাঁসা বন্ধ';
$txt['icon_undecided'] = 'অবশ্যই সিদ্ধান্তহীন';
$txt['icon_kiss'] = 'চুম্বন';
$txt['icon_cry'] = 'কাঁদছে';

$txt['moderator'] = 'মডারেটর';
$txt['moderators'] = 'মডারেটরগণ';

$txt['views'] = 'দৃশ্য';
$txt['new'] = 'নতুন';

$txt['view_all_members'] = 'সমস্ত সদস্য দেখুন';
$txt['view'] = 'দেখুন';

$txt['viewing_members'] = 'সদস্য দেখছেন %1$s থেকে %2$s';
$txt['of_total_members'] = '%1$s মোট সদস্যদের মধ্যে';

$txt['forgot_your_password'] = 'আপনার পাসওয়ার্ড ভুলে গেছেন?';

$txt['date'] = 'তারিখ';
// Use numeric entities in the below string.
$txt['from'] = 'প্রেরক';
$txt['check_new_messages'] = 'নতুন বার্তার জন্য পরীক্ষা করুন';
$txt['to'] = 'প্রাপক';

$txt['board_topics'] = 'বিষয়বস্তু';
$txt['members_title'] = 'সদস্য';
$txt['members_list'] = 'সদস্যের তালিকা';
$txt['new_posts'] = 'নতুন পোস্ট';
$txt['old_posts'] = 'নতুন পোস্ট নেই';
$txt['redirect_board'] = 'পুনঃনির্দেশ বোর্ড';

$txt['sendtopic_send'] = 'পাঠান';
$txt['report_sent'] = 'আপনার রিপোর্ট সফলভাবে পাঠানো হয়েছে।';
$txt['post_becomes_unapproved'] = 'আপনার বার্তা অনুমোদিত হয়নি কারণ এটি একটি অনুমোদিত বিষয়বস্তুতে পোস্ট করা হয়নি। একবার বিষয়বস্তু অনুমোদিত হলে আপনার বার্তাও অনুমোদিত হবে।';

$txt['time_offset'] = 'সময় অফসেট';
$txt['or'] = 'অথবা';

$txt['no_matches'] = 'দুঃখিত, কোন ম্যাচ পাওয়া যায়নি।';

$txt['notification'] = 'বিজ্ঞপ্তি';

$txt['your_ban'] = 'দুঃখিত %1$s, আপনাকে এই ফোরাম ব্যবহারের জন্য নিষিদ্ধ করা হয়েছে!';
$txt['your_ban_expires'] = 'এই নিষেধাজ্ঞা %1$s তারিখে শেষ হবে।';
$txt['your_ban_expires_never'] = 'এই নিষেধাজ্ঞা কখনোই শেষ হবে না।';
$txt['ban_continue_browse'] = 'আপনি অতিথি হিসেবে ফোরাম ব্রাউজ করতে পারেন।';

$txt['mark_as_read'] = 'সমস্ত বার্তা পড়া হিসেবে চিহ্নিত করুন';

$txt['locked_topic'] = 'লক করা বিষয়';
$txt['normal_topic'] = 'সাধারণ বিষয়';
$txt['participation_caption'] = 'বিষয়ে আপনি পোস্ট করেছেন';
$txt['moved_topic'] = 'স্থানান্তরিত বিষয়';

$txt['go_caps'] = 'যাও';

$txt['print'] = 'মুদ্রণ';
$txt['profile'] = 'প্রোফাইল';
$txt['topic_summary'] = 'বিষয় সারসংক্ষেপ';
$txt['not_applicable'] = 'প্রযোজ্য নয়';
$txt['name_in_use'] = 'এই নামটি ইতিমধ্যে অন্য সদস্য দ্বারা ব্যবহৃত হচ্ছে।';

$txt['total_members'] = 'মোট সদস্য';
$txt['total_posts'] = 'মোট পোস্ট';
$txt['total_topics'] = 'মোট বিষয়';

$txt['time_logged_in'] = 'লগ ইন থাকার সময়';

$txt['preview'] = 'পূর্বদর্শন';
$txt['always_logged_in'] = 'চিরকাল';

$txt['logged'] = 'লগ ইন';
$txt['show_ip'] = 'আইপি ঠিকানা দেখান';
// Use numeric entities in the below string.
$txt['ip'] = 'আইপি';
$txt['url'] = 'ইউআরএল';
$txt['www'] = 'ডাব্লিউডাব্লিউডাব্লিউ';

$txt['hours'] = 'ঘণ্টা';
$txt['minutes'] = 'মিনিট';
$txt['seconds'] = 'সেকেন্ড';

// Used upper case in Paid subscriptions management
$txt['hour'] = 'ঘণ্টা';
$txt['days_word'] = 'দিন';

$txt['search_for'] = 'অনুসন্ধান করুন';
$txt['search_match'] = 'ম্যাচ';

$txt['forum_in_maintenance'] = 'আপনার ফোরাম মেইনটেনেন্স মোডে রয়েছে। বর্তমানে শুধুমাত্র প্রশাসকরা লগ ইন করতে পারবেন।';
$txt['maintenance_page'] = 'আপনি <a href="%1$s">সার্ভার সেটিংস</a> এলাকা থেকে মেইনটেনেন্স মোড বন্ধ করতে পারেন।';

$txt['read_one_time'] = '1 বার পড়ুন';
$txt['read_many_times'] = '%1$d বার পড়ুন';

$txt['forum_stats'] = 'ফোরাম পরিসংখ্যান';
$txt['latest_member'] = 'সর্বশেষ সদস্য';
$txt['total_cats'] = 'মোট ক্যাটাগরি';
$txt['latest_post'] = 'সর্বশেষ পোস্ট';

$txt['total_boards'] = 'মোট বোর্ড';

$txt['print_page'] = 'পৃষ্ঠা মুদ্রণ';
$txt['print_page_text'] = 'শুধুমাত্র টেক্সট';
$txt['print_page_images'] = 'ছবির সাথে টেক্সট';

$txt['valid_email'] = 'এটি একটি বৈধ ইমেল ঠিকানা হতে হবে।';

$txt['geek'] = 'আমি একজন গীক!!';
$txt['info_center_title'] = '%1$s - তথ্য কেন্দ্র';

$txt['watch'] = 'মনে রাখুন';
$txt['unwatch'] = 'মনে রাখা বন্ধ করুন';

$txt['check_all'] = 'সবগুলো নির্বাচন করুন';

// Use numeric entities in the below string.
$txt['database_error'] = 'ডেটাবেস ত্রুটি';
$txt['try_again'] = 'দয়া করে আবার চেষ্টা করুন। যদি আপনি এই ত্রুটি স্ক্রীনে ফিরে আসেন, তবে প্রশাসককে ত্রুটিটি রিপোর্ট করুন।';
$txt['file'] = 'ফাইল';
$txt['line'] = 'লাইন';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF আপনার ডেটাবেসে একটি ত্রুটি সনাক্ত করেছে এবং স্বয়ংক্রিয়ভাবে এটি মেরামত করার চেষ্টা করেছে। যদি আপনি সমস্যা চালিয়ে যান, বা এই ইমেইলগুলি পেতে থাকেন, তাহলে দয়া করে আপনার হোস্টের সাথে যোগাযোগ করুন।';
$txt['database_error_versions'] = '<strong>নোট:</strong> এটি মনে হচ্ছে আপনার ডেটাবেস <em>আপগ্রেড</em> প্রয়োজন হতে পারে। আপনার ফোরামের ফাইলগুলি বর্তমানে সংস্করণ %1$s-এ রয়েছে, যখন আপনার ডেটাবেস সংস্করণ %2$s-এ রয়েছে। যদি আপনি upgrade.php এর সর্বশেষ সংস্করণ কার্যকর করেন তবে উপরের ত্রুটিটি সম্ভবত চলে যেতে পারে।';
$txt['template_parse_error'] = 'টেমপ্লেট পার্স ত্রুটি!';
$txt['template_parse_error_message'] = 'এটি মনে হচ্ছে টেমপ্লেট সিস্টেমের সাথে ফোরামে কিছু সমস্যা হয়েছে। এই সমস্যা শুধুমাত্র অস্থায়ী হওয়া উচিত, তাই দয়া করে পরে ফিরে আসুন এবং আবার চেষ্টা করুন। যদি আপনি এই বার্তাটি দেখতে থাকেন, তাহলে প্রশাসকের সাথে যোগাযোগ করুন।<br><br>আপনি <a href="javascript:location.reload();">এই পৃষ্ঠাটি রিফ্রেশ করার</a> চেষ্টা করতে পারেন।';
// argument(s): filename, $boardurl, $scripturl
$txt['template_parse_error_details'] = 'আপনার <pre><strong>%1$s</strong></pre> টেমপ্লেট বা ভাষা ফাইল লোড করতে একটি সমস্যা হয়েছে। দয়া করে সিনট্যাক্স চেক করুন এবং আবার চেষ্টা করুন - মনে রাখবেন, একক উদ্ধৃতি (<pre>\'</pre>) প্রায়ই একটি স্ল্যাশ (<pre>\\</pre>) দিয়ে এস্কেপ করতে হয়। PHP থেকে আরও নির্দিষ্ট ত্রুটি তথ্য দেখতে, <a href="%2$s%1$s">ফাইলটি সরাসরি অ্যাক্সেস করার</a> চেষ্টা করুন।<br><br>আপনি <a href="javascript:location.reload();">এই পৃষ্ঠাটি রিফ্রেশ করার</a> চেষ্টা করতে পারেন বা <a href="%3$s?theme=1">ডিফল্ট থিম ব্যবহার করুন</a>।';
$txt['template_parse_errmsg'] = 'দুর্ভাগ্যবশত, বর্তমানে ঠিক কি ভুল হয়েছে তা সম্পর্কে আরও তথ্য পাওয়া যাচ্ছে না।';

$txt['today'] = '<strong>আজ</strong> ';
$txt['yesterday'] = '<strong>গতকাল</strong> ';
$txt['new_poll'] = 'নতুন ভোট';
$txt['poll_question'] = 'প্রশ্ন';
$txt['poll_vote'] = 'ভোট জমা দিন';
$txt['poll_total_voters'] = 'মোট সদস্য ভোট দিয়েছেন';
$txt['poll_results'] = 'ফলাফল দেখুন';
$txt['poll_lock'] = 'ভোট বন্ধ করুন';
$txt['poll_unlock'] = 'ভোট খুলুন';
$txt['poll_edit'] = 'ভোট সম্পাদনা করুন';
$txt['poll'] = 'ভোট';
$txt['one_hour'] = '১ ঘণ্টা';
$txt['one_day'] = '১ দিন';
$txt['one_week'] = '১ সপ্তাহ';
$txt['two_weeks'] = '২ সপ্তাহ';
$txt['one_month'] = '১ মাস';
$txt['two_months'] = '২ মাস';
$txt['forever'] = 'চিরকাল';
$txt['moved'] = 'স্থানান্তরিত';
$txt['move_why'] = 'দয়া করে একটি সংক্ষিপ্ত বিবরণ লিখুন যে<br>কেন এই বিষয়টি স্থানান্তরিত হচ্ছে।';
$txt['board'] = 'বোর্ড';
$txt['in'] = 'এতে';
$txt['sticky_topic'] = 'স্টিকি বিষয়';

$txt['delete'] = 'মুছুন';
$txt['no_change'] = 'কোন পরিবর্তন নেই';

$txt['your_pms'] = 'আপনার ব্যক্তিগত বার্তা';

$txt['kilobyte'] = 'কেবি';
$txt['megabyte'] = 'এমবি';

$txt['more_stats'] = '[আরও পরিসংখ্যান]';

// Use numeric entities in the below three strings.
$txt['code'] = 'কোড';
$txt['code_select'] = 'নির্বাচন করুন';
$txt['code_expand'] = 'বিস্তৃত করুন';
$txt['code_shrink'] = 'সঙ্কুচিত করুন';
$txt['quote_from'] = 'উদ্ধৃতি থেকে';
$txt['quote'] = 'উদ্ধৃতি';
$txt['quote_action'] = 'উদ্ধৃতি';
$txt['quote_selected_action'] = 'নির্বাচিত পাঠ্য উদ্ধৃতি করুন';
$txt['fulledit'] = 'সম্পূর্ণ&nbsp;সম্পাদনা';
$txt['edit'] = 'সম্পাদনা করুন';
$txt['quick_edit'] = 'দ্রুত সম্পাদনা';
$txt['post_options'] = 'আরও...';

$txt['merge_to_topic_id'] = 'লক্ষ্য বিষয়ের আইডি';
$txt['split'] = 'বিষয় বিভক্ত করুন';
$txt['merge'] = 'বিষয় একত্রিত করুন';
$txt['target_id'] = 'বিষয় আইডি দ্বারা লক্ষ্য নির্বাচন করুন';
$txt['target_below'] = 'নিচের তালিকা থেকে লক্ষ্য নির্বাচন করুন';
$txt['subject_new_topic'] = 'নতুন বিষয়ের জন্য বিষয়';
$txt['split_this_post'] = 'শুধুমাত্র এই পোস্টটি বিভক্ত করুন।';
$txt['split_after_and_this_post'] = 'এই পোস্টের পরে এবং অন্তর্ভুক্ত করে বিষয় বিভক্ত করুন।';
$txt['select_split_posts'] = 'বিভক্ত করার জন্য পোস্ট নির্বাচন করুন।';
$txt['new_topic'] = 'নতুন বিষয়';
$txt['split_successful'] = 'বিষয় সফলভাবে দুটি বিষয়ে বিভক্ত হয়েছে।';
$txt['origin_topic'] = 'মূল বিষয়';
$txt['please_select_split'] = 'দয়া করে নির্বাচন করুন কোন পোস্টগুলি আপনি বিভক্ত করতে চান।';
$txt['merge_successful'] = 'বিষয় সফলভাবে একত্রিত হয়েছে।';
$txt['new_merged_topic'] = 'নতুন একত্রিত বিষয়';
$txt['topic_to_merge'] = 'একত্রিত করার বিষয়';
$txt['target_board'] = 'লক্ষ্য বোর্ড';
$txt['target_topic'] = 'লক্ষ্য বিষয়';
$txt['merge_desc'] = 'এই কার্যকারিতা দুটি বিষয়ের বার্তাগুলিকে একটি বিষয়ে একত্রিত করবে। বার্তাগুলি পোস্ট করার সময় অনুযায়ী সাজানো হবে। তাই, সবচেয়ে আগে পোস্ট করা বার্তাটি একত্রিত বিষয়ের প্রথম বার্তা হবে।';

$txt['set_sticky'] = 'বিষয়টি স্টিকি করুন';
$txt['set_nonsticky'] = 'বিষয়টি নন-স্টিকি করুন';
$txt['set_lock'] = 'বিষয়টি লক করুন';
$txt['set_unlock'] = 'বিষয়টি আনলক করুন';

$txt['search_advanced'] = 'অগ্রগামী অনুসন্ধান';

$txt['security_risk'] = 'মহা নিরাপত্তা ঝুঁকি:';
$txt['not_removed'] = 'আপনি মুছেননি ';
$txt['not_removed_extra'] = '%1$s হল %2$s এর একটি ব্যাকআপ যা SMF দ্বারা তৈরি হয়নি। এটি সরাসরি অ্যাক্সেস করা যেতে পারে এবং আপনার ফোরামে অনুমোদনহীন প্রবেশাধিকার লাভ করতে ব্যবহৃত হতে পারে। আপনাকে এটি তাত্ক্ষণিকভাবে মুছে ফেলতে হবে।';
$txt['generic_warning'] = 'সতর্কতা';
$txt['agreement_missing'] = 'আপনি নতুন ব্যবহারকারীদের একটি নিবন্ধন চুক্তি গ্রহণ করতে বাধ্য করছেন; তবে, ফাইলটি (agreement.txt) নেই।';
$txt['policy_agreement_missing'] = 'আপনি নতুন ব্যবহারকারীদের একটি গোপনীয়তা নীতির গ্রহণ করতে বাধ্য করছেন; তবে, গোপনীয়তা নীতিটি খালি।';
$txt['auth_secret_missing'] = 'Settings.php তে প্রমাণীকরণ গোপন সেট করতে অক্ষম। এটি আপনার ফোরামের নিরাপত্তা দুর্বল করে এবং আক্রমণের জন্য ঝুঁকিতে ফেলতে পারে। নিশ্চিত করুন যে SMF ফাইলটিতে লিখতে পারে তা নিশ্চিত করতে Settings.php এর ফাইল অনুমতিগুলি পরীক্ষা করুন।';

$txt['cache_writable'] = 'ক্যাশে ডিরেক্টরিটি লেখার জন্য উপযোগী নয় - এটি আপনার ফোরামের কর্মক্ষমতাকে নেতিবাচকভাবে প্রভাবিত করবে।';

$txt['page_created_full'] = '%1$.3f সেকেন্ডে %2$d প্রশ্নের সাথে পৃষ্ঠা তৈরি হয়েছে।';

$txt['report_to_mod_func'] = 'এই কার্যকারিতা ব্যবহার করুন মডারেটর এবং প্রশাসকদের একটি অপমানজনক বা সমস্যাযুক্ত বার্তা সম্পর্কে জানাতে।';
$txt['report_profile_func'] = 'এই কার্যকারিতা ব্যবহার করুন প্রশাসকদের অপমানজনক প্রোফাইল সামগ্রী, যেমন স্প্যাম বা অপ্রাসঙ্গিক চিত্র সম্পর্কে জানাতে।';

$txt['online'] = 'অনলাইনে';
$txt['member_is_online'] = '%1$s অনলাইনে আছে';
$txt['offline'] = 'অফলাইনে';
$txt['member_is_offline'] = '%1$s অফলাইনে আছে';
$txt['pm_online'] = 'ব্যক্তিগত বার্তা (অনলাইনে)';
$txt['pm_offline'] = 'ব্যক্তিগত বার্তা (অফলাইনে)';
$txt['status'] = 'স্থিতি';

$txt['go_up'] = 'উপরে যান';
$txt['go_down'] = 'নিচে যান';

// argument(s): SMF_FULL_VERSION, SMF_SOFTWARE_YEAR, $scripturl
$forum_copyright = '<a href="%3$s?action=credits" title="লাইসেন্স" target="_blank" rel="noopener">%1$s &copy; %2$s</a>, <a href="https://www.simplemachines.org" title="সিম্পল মেশিনস" target="_blank" rel="noopener">সিম্পল মেশিনস</a>';

$txt['birthdays'] = 'জন্মদিন:';
$txt['events'] = 'ইভেন্টস:';
$txt['birthdays_upcoming'] = 'আসন্ন জন্মদিন:';
$txt['events_upcoming'] = 'আসন্ন ইভেন্টস:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = 'ছুটির দিন:';
$txt['calendar_month'] = 'মাস';
$txt['calendar_year'] = 'বছর';
$txt['calendar_day'] = 'দিন';
$txt['calendar_event_title'] = 'ইভেন্টের শিরোনাম';
$txt['calendar_event_options'] = 'ইভেন্টের বিকল্পসমূহ';
$txt['calendar_post_in'] = 'পোস্ট করুন';
$txt['calendar_edit'] = 'ইভেন্ট সম্পাদনা করুন';
$txt['calendar_export'] = 'ইভেন্ট রপ্তানি করুন';
$txt['calendar_view_week'] = 'সপ্তাহ দেখুন';
$txt['event_delete_confirm'] = 'এই ইভেন্টটি মুছে ফেলবেন?';
$txt['event_delete'] = 'ইভেন্ট মুছুন';
$txt['calendar_post_event'] = 'ইভেন্ট পোস্ট করুন';
$txt['calendar'] = 'ক্যালেন্ডার';
$txt['calendar_link'] = 'ক্যালেন্ডারের লিঙ্ক';
$txt['calendar_upcoming'] = 'আসন্ন ক্যালেন্ডার';
$txt['calendar_today'] = 'আজকের ক্যালেন্ডার';
$txt['calendar_week'] = 'সপ্তাহ';
$txt['calendar_week_title'] = '%2$d এর %1$d সপ্তাহ';
// %1$s is the month, %2$s is the day, %3$s is the year. Change to suit your language.
$txt['calendar_week_beginning'] = 'সপ্তাহ শুরু %1$s %2$s, %3$s';
$txt['calendar_numb_days'] = 'দিনের সংখ্যা';
$txt['calendar_how_edit'] = 'আপনি এই ইভেন্টগুলো কিভাবে সম্পাদনা করবেন?';
$txt['calendar_link_event'] = 'ইভেন্টটিকে পোস্টের সাথে লিঙ্ক করুন';
$txt['calendar_confirm_delete'] = 'আপনি কি সত্যিই এই ইভেন্টটি মুছে ফেলতে চান?';
$txt['calendar_linked_events'] = 'লিঙ্ক করা ইভেন্টসমূহ';
$txt['calendar_click_all'] = 'সব %1$s দেখতে ক্লিক করুন';
$txt['calendar_allday'] = 'সারা দিন';
$txt['calendar_timezone'] = 'টাইম জোন';
$txt['calendar_list'] = 'তালিকা';
$txt['calendar_empty'] = 'দেখানোর জন্য কোন ইভেন্ট নেই।';

$txt['movetopic_change_subject'] = 'বিষয়ের শিরোনাম পরিবর্তন করুন';
$txt['movetopic_new_subject'] = 'নতুন শিরোনাম';
$txt['movetopic_change_all_subjects'] = 'প্রতিটি বার্তার শিরোনাম পরিবর্তন করুন';
$txt['move_topic_unapproved_js'] = 'সতর্কতা! এই বিষয়টি এখনো অনুমোদিত হয়নি।\\n\\nআপনি যদি পোস্টটি স্থানান্তরের পরপরই অনুমোদন করার পরিকল্পনা না করেন তবে এটি একটি রিডিরেকশন বিষয় তৈরি করার সুপারিশ করা হয় না।';
$txt['movetopic_auto_board'] = '[বোর্ড]';
$txt['movetopic_auto_topic'] = '[বিষয়ের লিঙ্ক]';

// argument(s): $txt['movetopic_auto_board'], $txt['movetopic_auto_topic']
$txt['movetopic_default'] = 'এই বিষয়টি %1$s-এ স্থানান্তরিত হয়েছে।

%2$s';

$txt['movetopic_redirect'] = 'স্থানান্তরিত বিষয়ের দিকে পুনঃনির্দেশ';

$txt['post_redirection'] = 'একটি পুনঃনির্দেশ বিষয় পোস্ট করুন';
$txt['redirect_topic_expires'] = 'পুনঃনির্দেশ বিষয়টি স্বয়ংক্রিয়ভাবে মুছে ফেলুন';
$txt['mergetopic_redirect'] = 'একত্রিত বিষয়ের দিকে পুনঃনির্দেশ';
$txt['merge_topic_unapproved_js'] = 'সতর্কতা! এই বিষয়টি এখনও অনুমোদিত হয়নি।\\n\\nআপনি যদি একত্রিত করার পরপরই পোস্টটি অনুমোদন করার ইচ্ছা না করেন তবে পুনঃনির্দেশ বিষয় তৈরি করা সুপারিশ করা হয় না।';

$txt['theme_template_error'] = '\'%1$s\' টেমপ্লেট লোড করতে অক্ষম।';
$txt['theme_language_error'] = '\'%1$s\' ভাষার ফাইল লোড করতে অক্ষম।';

$txt['sub_boards'] = 'উপ-বোর্ড';
$txt['restricted_board'] = 'সীমাবদ্ধ বোর্ড';

$txt['smtp_no_connect'] = 'SMTP হোস্টের সাথে সংযোগ করতে অক্ষম';
$txt['smtp_port_ssl'] = 'SMTP পোর্ট সেটিং ভুল; এটি SSL সার্ভারের জন্য 465 হওয়া উচিত। হোস্টনেমের ssl:// প্রিফিক্স প্রয়োজন হতে পারে।';
$txt['smtp_bad_response'] = 'মেইল সার্ভারের প্রতিক্রিয়া কোড পেতে অক্ষম';
$txt['smtp_error'] = 'মেইল পাঠাতে সমস্যা হয়েছে। ত্রুটি: ';
$txt['mail_send_unable'] = 'ইমেইল ঠিকানায় \'%1$s\' মেইল পাঠাতে অক্ষম';

$txt['mlist_search'] = 'সদস্যদের জন্য অনুসন্ধান করুন';
$txt['mlist_search_again'] = 'পুনরায় অনুসন্ধান করুন';
$txt['mlist_search_filter'] = 'অনুসন্ধানের বিকল্প';
$txt['mlist_search_email'] = 'ইমেইল ঠিকানা দ্বারা অনুসন্ধান করুন';
$txt['mlist_search_messenger'] = 'মেসেঞ্জার ডাকনাম দ্বারা অনুসন্ধান করুন';
$txt['mlist_search_group'] = 'পদবী দ্বারা অনুসন্ধান করুন';
$txt['mlist_search_name'] = 'নামের দ্বারা অনুসন্ধান করুন';
$txt['mlist_search_website'] = 'ওয়েবসাইট দ্বারা অনুসন্ধান করুন';
$txt['mlist_search_results'] = 'অনুসন্ধানের ফলাফল';
$txt['mlist_search_by'] = '%1$s দ্বারা অনুসন্ধান করুন';
$txt['mlist_menu_view'] = 'সদস্য তালিকা দেখুন';

$txt['attach_downloaded'] = '%1$d বার ডাউনলোড হয়েছে';
$txt['attach_viewed'] = '%1$d বার দেখা হয়েছে';

$txt['settings'] = 'সেটিংস';
$txt['never'] = 'কখনও নয়';
$txt['more'] = 'আরও';
$txt['etc'] = 'ইত্যাদি।';

$txt['hostname'] = 'হোস্টনেম';
$txt['you_are_post_banned'] = 'দুঃখিত %1$s, আপনি এই ফোরামে পোস্ট এবং ব্যক্তিগত বার্তা পাঠাতে নিষিদ্ধ।';
$txt['ban_reason'] = 'কারণ';
$txt['select_item_check'] = 'দয়া করে তালিকায় অন্তত একটি আইটেম নির্বাচন করুন';

$txt['tables_optimized'] = 'ডাটাবেস টেবিলগুলি অপটিমাইজ করা হয়েছে';

$txt['add_poll'] = 'পোল যোগ করুন';
$txt['poll_options_limit'] = 'আপনি সর্বাধিক %1$s টি বিকল্প নির্বাচন করতে পারেন।';
$txt['poll_remove'] = 'পোল মুছুন';
$txt['poll_remove_warn'] = 'আপনি কি সত্যিই এই পোলটি বিষয় থেকে মুছে ফেলতে চান?';
$txt['poll_results_expire'] = 'ভোট দেওয়া বন্ধ হলে ফলাফল দেখানো হবে';
$txt['poll_expires_on'] = 'ভোট দেওয়া বন্ধ হবে';
$txt['poll_expired_on'] = 'ভোট দেওয়া বন্ধ হয়েছে';
$txt['poll_change_vote'] = 'ভোট মুছুন';
$txt['poll_return_vote'] = 'ভোট দেওয়ার বিকল্প';
$txt['poll_cannot_see'] = 'আপনি বর্তমানে এই পোলের ফলাফল দেখতে পারবেন না।';

$txt['quick_mod_approve'] = 'নির্বাচিত অনুমোদন করুন';
$txt['quick_mod_remove'] = 'নির্বাচিত মুছুন';
$txt['quick_mod_lock'] = 'নির্বাচিত লক/আনলক করুন';
$txt['quick_mod_sticky'] = 'নির্বাচিত স্টিকি/আনস্টিকি করুন';
$txt['quick_mod_move'] = 'নির্বাচিত স্থানান্তর করুন';
$txt['quick_mod_merge'] = 'নির্বাচিত একত্রিত করুন';
$txt['quick_mod_markread'] = 'নির্বাচিত পড়া চিহ্নিত করুন';
$txt['quick_mod_markunread'] = 'নির্বাচিত অ-পড়া চিহ্নিত করুন';
$txt['quick_mod_selected'] = 'নির্বাচিত বিকল্পগুলি দিয়ে করুন';
$txt['quick_mod_go'] = 'যাও';
$txt['quickmod_confirm'] = 'আপনি কি সত্যিই এটি করতে চান?';

$txt['spell_check'] = 'বানান পরীক্ষা';

$txt['quick_reply'] = 'দ্রুত উত্তর';
$txt['quick_reply_warning'] = 'সতর্কতা! এই বিষয়টি বর্তমানে লক করা আছে, কেবল প্রশাসক এবং মডারেটররা উত্তর দিতে পারেন।';
$txt['quick_reply_verification'] = 'আপনার পোস্ট জমা দেওয়ার পর আপনাকে আপনার পোস্ট যাচাই করার জন্য নিয়মিত পোস্ট পৃষ্ঠায় নিয়ে যাওয়া হবে %1$s।';
$txt['quick_reply_verification_guests'] = '(সমস্ত অতিথির জন্য প্রয়োজনীয়)';
$txt['quick_reply_verification_posts'] = '(যাদের পোস্ট সংখ্যা %1$d-এর কম তাদের জন্য প্রয়োজনীয়)';
$txt['wait_for_approval'] = 'নোট: এই পোস্টটি মডারেটর দ্বারা অনুমোদিত না হওয়া পর্যন্ত প্রদর্শিত হবে না।';

$txt['notification_enable_board'] = 'আপনি কি নিশ্চিত যে আপনি এই বোর্ডের জন্য নতুন বিষয়গুলির বিজ্ঞপ্তি সক্ষম করতে চান?';
$txt['notification_disable_board'] = 'আপনি কি নিশ্চিত যে আপনি এই বোর্ডের জন্য নতুন বিষয়গুলির বিজ্ঞপ্তি অক্ষম করতে চান?';
$txt['notification_enable_topic'] = 'আপনি কি নিশ্চিত যে আপনি এই বিষয়ের জন্য নতুন উত্তরগুলির বিজ্ঞপ্তি সক্ষম করতে চান?';
$txt['notification_disable_topic'] = 'আপনি কি নিশ্চিত যে আপনি এই বিষয়ের জন্য নতুন উত্তরগুলির বিজ্ঞপ্তি অক্ষম করতে চান?';

// Mentions
$txt['mentions'] = 'উল্লেখ';

// Likes
$txt['likes'] = 'পছন্দ';
$txt['like'] = 'পছন্দ করুন';
$txt['unlike'] = 'পছন্দ বাতিল করুন';
$txt['like_success'] = 'আপনার বিষয়বস্তু সফলভাবে পছন্দ করা হয়েছে।';
$txt['like_delete'] = 'আপনার বিষয়বস্তু সফলভাবে মুছে ফেলা হয়েছে।';
$txt['like_insert'] = 'আপনার বিষয়বস্তু সফলভাবে যোগ করা হয়েছে।';
$txt['like_error'] = 'আপনার অনুরোধে একটি ত্রুটি ঘটেছে।';
$txt['like_disable'] = 'পছন্দের বৈশিষ্ট্য অক্ষম করা হয়েছে।';
$txt['not_valid_like_type'] = 'পছন্দের প্রকারটি একটি বৈধ প্রকার নয়।';
// Translators, if you need to make more strings to suit your language, e.g. $txt['likes_2'] = 'Two people like this', please do so.
$txt['likes_1'] = '<a href="%1$s">%2$s ব্যক্তি</a> এটি পছন্দ করে।';
$txt['likes_n'] = '<a href="%1$s">%2$s মানুষ</a> এটি পছন্দ করে।';
$txt['you_likes_0'] = 'আপনি এটি পছন্দ করেন।';
$txt['you_likes_1'] = 'আপনি এবং <a href="%1$s">%2$s অন্যান্য ব্যক্তি</a> এটি পছন্দ করেন।';
$txt['you_likes_n'] = 'আপনি এবং <a href="%1$s">%2$s অন্যান্য মানুষ</a> এটি পছন্দ করেন।';

$txt['report_to_mod'] = 'মডারেটরকে রিপোর্ট করুন';
$txt['report_profile'] = '%1$s-এর প্রোফাইল রিপোর্ট করুন';

$txt['unread_topics_visit'] = 'সাম্প্রতিক অ পড়া বিষয়গুলো';
// argument(s): scripturl
$txt['unread_topics_visit_none'] = 'আপনার শেষ দর্শনের পর কোনো অ-পড়া বিষয় পাওয়া যায়নি। <a href="%1$s?action=unread;all">এখানে ক্লিক করে সমস্ত অ-পড়া বিষয়গুলো চেষ্টা করুন</a>.';
$txt['updated_topics_visit_none'] = 'আপনার শেষ দর্শনের পর কোনো আপডেট হওয়া বিষয় পাওয়া যায়নি।';
$txt['unread_topics_all'] = 'সমস্ত অ-পড়া বিষয়';
$txt['unread_replies'] = 'আপডেট হওয়া বিষয়গুলো';

$txt['who_title'] = 'কে অনলাইনে আছে';
$txt['who_and'] = ' এবং ';
$txt['who_viewing_topic'] = ' এই বিষয়টি দেখছে।';
$txt['who_viewing_board'] = ' এই বোর্ডটি দেখছে।';
$txt['who_member'] = 'সদস্য';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'PHP দ্বারা চালিত';
$txt['powered_by_mysql'] = 'MySQL দ্বারা চালিত';
$txt['valid_css'] = 'বৈধ CSS';

$txt['rss'] = 'RSS';
$txt['atom'] = 'অ্যাটম';
$txt['html'] = 'এইচটিএমএল';

$txt['guest'] = 'অতিথি';
$txt['guests'] = 'অতিথিরা';
$txt['user'] = 'ব্যবহারকারী';
$txt['users'] = 'ব্যবহারকারীরা';
$txt['hidden'] = 'লুকানো';

// Plural form of hidden for languages other than English
$txt['hidden_s'] = 'লুকানো';
$txt['buddy'] = 'বন্ধু';
$txt['buddies'] = 'বন্ধুরা';
$txt['most_online_ever'] = 'সর্বাধিক অনলাইনে থাকা';
$txt['most_online_today'] = 'আজ সর্বাধিক অনলাইনে থাকা';

$txt['merge_select_target_board'] = 'একত্রিত বিষয়ের লক্ষ্যমাত্রা বোর্ড নির্বাচন করুন';
$txt['merge_select_poll'] = 'একত্রিত বিষয়ের জন্য কোন ভোট নির্বাচন করবেন';
$txt['merge_topic_list'] = 'একত্রিত করার জন্য বিষয়গুলো নির্বাচন করুন';
$txt['merge_select_subject'] = 'একত্রিত বিষয়ের বিষয় নির্বাচন করুন';
$txt['merge_custom_subject'] = 'কাস্টম বিষয়';
$txt['merge_include_notifications'] = 'নোটিফিকেশন অন্তর্ভুক্ত করবেন?';
$txt['merge_check'] = 'একত্রিত করবেন?';
$txt['merge_no_poll'] = 'কোন ভোট নেই';
$txt['merge_why'] = 'দয়া করে সংক্ষেপে লিখুন কেন এই বিষয়গুলো একত্রিত করা হচ্ছে।';
$txt['merged_subject'] = '[একত্রিত] %1$s';
// argument(s): $txt['movetopic_auto_topic']
$txt['mergetopic_default'] = 'এই বিষয়টি %2$s-এ একত্রিত করা হয়েছে।';

$txt['response_prefix'] = 'উত্তর: ';
$txt['current_icon'] = 'বর্তমান আইকন';
$txt['message_icon'] = 'বার্তার আইকন';

$txt['smileys_current'] = 'বর্তমান স্মাইলি সেট';
$txt['smileys_none'] = 'কোন স্মাইলি নেই';
$txt['smileys_forum_board_default'] = 'ফোরাম/বোর্ড ডিফল্ট';

$txt['search_results'] = 'অনুসন্ধানের ফলাফল';
$txt['search_no_results'] = 'দুঃখিত, কোন মিল পাওয়া যায়নি';

$txt['total_time_logged_days'] = ' দিন, ';
$txt['total_time_logged_hours'] = ' ঘণ্টা এবং ';
$txt['total_time_logged_minutes'] = ' মিনিট';
$txt['total_time_logged_d'] = 'd ';
$txt['total_time_logged_h'] = 'h ';
$txt['total_time_logged_m'] = 'm';

$txt['approve_members_waiting'] = 'সদস্য অনুমোদন';

$txt['activate_code'] = 'আপনার সক্রিয়করণ কোড হল';

$txt['find_members'] = 'সদস্য খুঁজুন';
$txt['find_username'] = 'নাম, ব্যবহারকারীর নাম, অথবা ইমেইল ঠিকানা';
$txt['find_buddies'] = 'শুধুমাত্র বন্ধু দেখান?';
$txt['find_wildcards'] = 'অনুমোদিত ওয়াইল্ডকার্ড: *, ?';
$txt['find_no_results'] = 'কোন ফলাফল পাওয়া যায়নি';
$txt['find_results'] = 'ফলাফল';
$txt['find_close'] = 'বন্ধ করুন';

$txt['unread_since_visit'] = 'শেষ দর্শনের পর অ-পড়া পোস্ট দেখান।';
$txt['show_unread_replies'] = 'আপনার পোস্টে নতুন উত্তর দেখান।';

$txt['change_color'] = 'রঙ পরিবর্তন করুন';

$txt['quickmod_delete_selected'] = 'নির্বাচিত মুছুন';
$txt['quickmod_split_selected'] = 'নির্বাচিত বিভক্ত করুন';

$txt['show_personal_messages_heading'] = 'নতুন বার্তা';
$txt['show_personal_messages'] = 'আপনার ইনবক্সে <strong>%1$s</strong> অ-পড়া ব্যক্তিগত বার্তা রয়েছে।<br><br><a href="%2$s">আপনার ইনবক্সে যান</a>';

$txt['help_popup'] = 'একটু হারিয়ে গেছেন? আমাকে ব্যাখ্যা করতে দিন:';

$txt['previous_next_back'] = 'পূর্ববর্তী বিষয়';
$txt['previous_next_forward'] = 'পরবর্তী বিষয়';

$txt['mark_unread'] = 'অ-পড়া হিসেবে চিহ্নিত করুন';

$txt['ssi_not_direct'] = 'দয়া করে URL দ্বারা সরাসরি SSI.php অ্যাক্সেস করবেন না; আপনি পাথ (%1$s) ব্যবহার করতে পারেন অথবা ?ssi_function=something যোগ করতে পারেন।';
$txt['ssi_session_broken'] = 'SSI.php একটি সেশন লোড করতে অক্ষম! এটি লগআউট এবং অন্যান্য কার্যক্রমে সমস্যা সৃষ্টি করতে পারে - দয়া করে নিশ্চিত করুন যে SSI.php আপনার সমস্ত স্ক্রিপ্টে *কিছুর* আগে অন্তর্ভুক্ত করা হয়েছে!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'পোস্টের পূর্বদর্শন';
$txt['preview_fetch'] = 'পূর্বদর্শন আনছে...';
$txt['preview_new'] = 'নতুন বার্তা';
$txt['pm_error_while_submitting'] = 'এই ব্যক্তিগত বার্তা পাঠানোর সময় নিম্নলিখিত ত্রুটি বা ত্রুটিগুলি ঘটেছে:';
$txt['error_while_submitting'] = 'বার্তাটির নিম্নলিখিত ত্রুটি বা ত্রুটিগুলি রয়েছে যা অব্যাহত রাখার আগে সংশোধন করতে হবে:';
$txt['error_old_topic'] = 'সতর্কতা: এই বিষয়টিতে অন্তত %1$d দিন পোস্ট করা হয়নি।<br>আপনি যদি নিশ্চিত না হন যে আপনি উত্তর দিতে চান, তবে দয়া করে একটি নতুন বিষয় শুরু করার কথা বিবেচনা করুন।';

$txt['split_selected_posts'] = 'নির্বাচিত পোস্টগুলি';
$txt['split_selected_posts_desc'] = 'নিচের পোস্টগুলি বিভক্ত করার পরে একটি নতুন বিষয় তৈরি করবে।';
$txt['split_reset_selection'] = 'নির্বাচন পুনরায় সেট করুন';

$txt['modify_cancel'] = 'বাতিল করুন';
$txt['modify_cancel_all'] = 'সব বাতিল করুন';
$txt['mark_read_short'] = 'পড়া চিহ্নিত করুন';

$txt['alerts'] = 'সতর্কতা';

$txt['pm_short'] = 'আমার বার্তা';
$txt['pm_menu_read'] = 'আপনার বার্তাগুলি পড়ুন';
$txt['pm_menu_send'] = 'একটি বার্তা পাঠান';

$txt['unapproved_posts'] = 'অনুমোদিত পোস্টগুলি (বিষয়: %1$d, পোস্ট: %2$d)';

$txt['ajax_in_progress'] = 'লোড হচ্ছে...';

$txt['mod_reports_waiting'] = 'প্রতিবেদনকৃত পোস্টগুলি';

$txt['view_unread_category'] = 'অ-পড়া পোস্টগুলি';
$txt['new_posts_in_category'] = '%1$s-এ নতুন পোস্টগুলি দেখতে ক্লিক করুন';
$txt['verification'] = 'যাচাইকরণ';
$txt['visual_verification_hidden'] = 'দয়া করে এই বাক্সটি খালি রাখুন';
$txt['visual_verification_description'] = 'ছবিতে প্রদর্শিত অক্ষরগুলি টাইপ করুন';
$txt['visual_verification_sound'] = 'অক্ষরগুলি শোনুন';
$txt['visual_verification_request_new'] = 'আরেকটি চিত্রের জন্য অনুরোধ করুন';

// Sub menu labels
$txt['summary'] = 'সারসংক্ষেপ';
$txt['account'] = 'অ্যাকাউন্ট সেটিংস';
$txt['theme'] = 'দৃষ্টি ও বিন্যাস';
$txt['forumprofile'] = 'ফোরাম প্রোফাইল';
$txt['activate_changed_email_title'] = 'ইমেইল ঠিকানা পরিবর্তিত হয়েছে';
$txt['activate_changed_email_desc'] = 'আপনি আপনার ইমেইল ঠিকানা পরিবর্তন করেছেন। এই ঠিকানাটি যাচাই করার জন্য আপনি একটি ইমেইল পাবেন। আপনার অ্যাকাউন্ট পুনরায় সক্রিয় করতে সেই ইমেইলে লিঙ্কে ক্লিক করুন।';
$txt['modSettings_title'] = 'ফিচার এবং অপশন';
$txt['package'] = 'প্যাকেজ ম্যানেজার';
$txt['errorlog'] = 'ত্রুটি লগ';
$txt['edit_permissions'] = 'অনুমতি';
$txt['mc_unapproved_attachments'] = 'অনুমোদিত সংযুক্তি';
$txt['mc_unapproved_poststopics'] = 'অনুমোদিত পোস্ট এবং বিষয়';
$txt['mc_reported_posts'] = 'প্রতিবেদনকৃত পোস্ট';
$txt['mc_reported_members'] = 'প্রতিবেদনকৃত সদস্য';
$txt['modlog_view'] = 'মডারেশন লগ';
$txt['calendar_menu'] = 'ক্যালেন্ডার দেখুন';

// @todo Send email strings - should move?
$txt['send_email'] = 'ইমেইল পাঠান';

$txt['ignoring_user'] = 'আপনি এই ব্যবহারকারীকে উপেক্ষা করছেন।';
$txt['show_ignore_user_post'] = 'আমাকে পোস্টটি দেখান।';

$txt['spider'] = 'স্পাইডার';
$txt['spiders'] = 'স্পাইডারগুলি';

$txt['downloads'] = 'ডাউনলোড';
$txt['filesize'] = 'ফাইলের আকার';

// Restore topic
$txt['restore_topic'] = 'বিষয় পুনরুদ্ধার করুন';
$txt['restore_message'] = 'পুনরুদ্ধার করুন';
$txt['quick_mod_restore'] = 'নির্বাচিত পুনরুদ্ধার করুন';

// Editor prompt.
$txt['prompt_text_email'] = 'দয়া করে ইমেইল ঠিকানা লিখুন।';
$txt['prompt_text_ftp'] = 'দয়া করে FTP ঠিকানা লিখুন।';
$txt['prompt_text_url'] = 'দয়া করে আপনি যে URL-এ লিঙ্ক করতে চান তা লিখুন।';
$txt['prompt_text_img'] = 'ছবির অবস্থান লিখুন';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'আইটেম মুছুন';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'টেমপ্লেট: ';
$txt['debug_subtemplates'] = 'সাব টেমপ্লেট: ';
$txt['debug_language_files'] = 'ভাষা ফাইল: ';
$txt['debug_stylesheets'] = 'স্টাইল শীট: ';
$txt['debug_files_included'] = 'শামিল ফাইল: ';
$txt['debug_memory_use'] = 'মেমরি ব্যবহৃত: ';
$txt['debug_kb'] = 'কেবি।';
$txt['debug_show'] = 'দেখান';
$txt['debug_cache_hits'] = 'ক্যাশ হিট: ';
$txt['debug_cache_misses'] = 'ক্যাশ মিস: ';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s বাইট';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss জন্য %2$s বাইট';
$txt['debug_queries_used'] = 'ব্যবহৃত প্রশ্ন: %1$d।';
$txt['debug_queries_used_and_warnings'] = 'ব্যবহৃত প্রশ্ন: %1$d, %2$d সতর্কতা।';
$txt['debug_query_in_line'] = '<em>%1$s</em> লাইনে <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'যার জন্য %1$s সেকেন্ড সময় লেগেছে।';
$txt['debug_query_which_took_at'] = 'যার জন্য %1$s সেকেন্ড সময় লেগেছে %2$s অনুরোধে।';
$txt['debug_show_queries'] = '[প্রশ্নগুলি দেখান]';
$txt['debug_hide_queries'] = '[প্রশ্নগুলি লুকান]';
$txt['debug_tokens'] = 'টোকেন: ';
$txt['debug_browser'] = 'ব্রাউজার আইডি: ';
$txt['debug_hooks'] = 'কল করা হুক: ';
$txt['debug_instances'] = 'তৈরি করা ইনস্ট্যান্স: ';
$txt['are_sure_mark_read'] = 'আপনি কি নিশ্চিত যে আপনি বার্তাগুলিকে পড়া হিসেবে চিহ্নিত করতে চান?';

// Inline attachments messages.
$txt['attachments_not_enable'] = 'সংযুক্তি নিষ্ক্রিয় করা হয়েছে';
$txt['attachments_no_data_loaded'] = 'বৈধ সংযুক্তি আইডি নয়।';
$txt['attachments_not_allowed_to_see'] = 'আপনি এই সংযুক্তিটি দেখতে পারবেন না।';
$txt['attachments_no_msg_associated'] = 'এই সংযুক্তির সাথে কোন বার্তা সংযুক্ত নয়।';
$txt['attachments_unapproved'] = 'সংযুক্তিটি অনুমোদনের অপেক্ষায় রয়েছে।';

// Accessibility
$txt['hide_category'] = 'বিভাগ লুকান';
$txt['show_category'] = 'বিভাগ দেখান';
$txt['hide_infocenter'] = 'তথ্য কেন্দ্র লুকান';
$txt['show_infocenter'] = 'তথ্য কেন্দ্র দেখান';

// Notification post control
$txt['notify_topic_0'] = 'অনুসরণ করছেন না';
$txt['notify_topic_1'] = 'কোন সতর্কতা বা ইমেইল নেই';
$txt['notify_topic_2'] = 'সতর্কতা গ্রহণ করুন';
$txt['notify_topic_3'] = 'ইমেইল এবং সতর্কতা গ্রহণ করুন';
$txt['notify_topic_0_desc'] = 'আপনি এই বিষয়ের জন্য কোনো ইমেইল বা সতর্কতা পাবেন না এবং এটি আপনার পড়া হয়নি এমন উত্তর এবং বিষয়ের তালিকায়ও প্রদর্শিত হবে না। তবে আপনি এই বিষয়ের জন্য @মেন্টশনগুলি পাবেন।';
$txt['notify_topic_1_desc'] = 'আপনি কোনো ইমেইল বা সতর্কতা পাবেন না, কেবল অন্যান্য সদস্যদের দ্বারা @মেন্টশন পাবেন।';
$txt['notify_topic_2_desc'] = 'আপনি এই বিষয়ের জন্য সতর্কতা পাবেন।';
$txt['notify_topic_3_desc'] = 'আপনি এই বিষয়ের জন্য ইমেইল এবং সতর্কতা উভয়ই পাবেন।';
$txt['notify_board_1'] = 'কোন সতর্কতা বা ইমেইল নেই';
$txt['notify_board_2'] = 'সতর্কতা গ্রহণ করুন';
$txt['notify_board_3'] = 'ইমেইল এবং সতর্কতা গ্রহণ করুন';
$txt['notify_board_1_desc'] = 'আপনি নতুন বিষয়ের জন্য কোনো ইমেইল বা সতর্কতা পাবেন না';
$txt['notify_board_2_desc'] = 'আপনি এই বোর্ডের জন্য সতর্কতা পাবেন।';
$txt['notify_board_3_desc'] = 'আপনি এই বোর্ডের জন্য ইমেইল এবং সতর্কতা উভয়ই পাবেন।';

$txt['notify_board_prompt'] = 'আপনি কি চান যে যখন কেউ এই বোর্ডে একটি নতুন বিষয় পোস্ট করে, তখন আপনি একটি সতর্কতা ইমেইল পান?';
$txt['notify_board_subscribed'] = '%1$s এই বোর্ডের জন্য নতুন বিষয়ের সতর্কতা গ্রহণে সাবস্ক্রাইব করেছেন।';
$txt['notify_board_unsubscribed'] = '%1$s এই বোর্ডের জন্য নতুন বিষয়ের সতর্কতা গ্রহণে আনসাবস্ক্রাইব করেছেন।';

$txt['notify_topic_prompt'] = 'আপনি কি চান যে যদি কেউ এই বিষয়ের প্রতি উত্তর দেয়, তাহলে আপনি একটি সতর্কতা ইমেইল পান?';
$txt['notify_topic_subscribed'] = '%1$s এই বিষয়ের জন্য নতুন উত্তর সতর্কতায় সাবস্ক্রাইব করেছেন।';
$txt['notify_topic_unsubscribed'] = '%1$s এই বিষয়ের জন্য নতুন উত্তর সতর্কতায় আনসাবস্ক্রাইব করেছেন।';

$txt['notify_announcements_prompt'] = 'আপনি কি চান যে আপনি ফোরামের নিউজলেটার, ঘোষণা এবং গুরুত্বপূর্ণ সতর্কতাগুলি ইমেইলের মাধ্যমে গ্রহণ করুন?';
$txt['notify_announcements_subscribed'] = '%1$s ফোরামের নিউজলেটার, ঘোষণা এবং গুরুত্বপূর্ণ সতর্কতায় সাবস্ক্রাইব করেছেন।';
$txt['notify_announcements_unsubscribed'] = '%1$s ফোরামের নিউজলেটার, ঘোষণা এবং গুরুত্বপূর্ণ সতর্কতায় আনসাবস্ক্রাইব করেছেন।';

$txt['unsubscribe_announcements_plain'] = 'ফোরামের নিউজলেটার, ঘোষণা এবং গুরুত্বপূর্ণ সতর্কতাগুলি আনসাবস্ক্রাইব করতে, এই লিঙ্কটি অনুসরণ করুন: %1$s';
$txt['unsubscribe_announcements_html'] = '<span style="font-size:small"><a href="%1$s">আনসাবস্ক্রাইব</a> করুন ফোরামের নিউজলেটার, ঘোষণা এবং গুরুত্বপূর্ণ সতর্কতাগুলি থেকে।</span>';
$txt['unsubscribe_announcements_manual'] = 'ফোরামের নিউজলেটার, ঘোষণা এবং গুরুত্বপূর্ণ সতর্কতাগুলি আনসাবস্ক্রাইব করতে, আপনার অনুরোধ সহ %1$s-এ আমাদের সাথে যোগাযোগ করুন।';

// Mobile Actions
$txt['mobile_action'] = 'ব্যবহারকারীর কার্যাবলী';
$txt['mobile_moderation'] = 'মডারেশন';
$txt['mobile_user_menu'] = 'মেইন মেনু';
$txt['mobile_generic_menu'] = '%1$s মেনু';

// Formats for lists in a sentence (e.g. "Alice, Bob, and Charlie")
// Examples:
// 	$txt['sentence_list_format'][2] specifies a format for a list with two items
// 	$txt['sentence_list_format']['n'] specifies the default format
// Notes on placeholders:
// 	{1} = তালিকার প্রথম আইটেম, {2} = দ্বিতীয় আইটেম, ইত্যাদি
// 	{-1} = তালিকার শেষ আইটেম, {-2} = দ্বিতীয় শেষ আইটেম, ইত্যাদি
// 	{series} = তালিকার বাকি আইটেমগুলির একত্রিত স্ট্রিং
$txt['sentence_list_format'][1] = '{1}';
$txt['sentence_list_format'][2] = '{1} এবং {-1}';
$txt['sentence_list_format'][3] = '{series}, এবং {-1}';
$txt['sentence_list_format'][4] = '{series}, এবং {-1}';
$txt['sentence_list_format'][5] = '{series}, এবং {-1}';
$txt['sentence_list_format']['n'] = '{series}, এবং {-1}';
// Separators used to build lists in a sentence
$txt['sentence_list_separator'] = ', ';
$txt['sentence_list_separator_alt'] = '; ';

?>
