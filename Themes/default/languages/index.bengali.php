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

