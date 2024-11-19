<?php
 // সংস্করণ: 2.1.3;  সূচক

 বিশ্বব্যাপী $forum_copyright, $webmaster_email, $scripturl, $context, $boardurl;

 // স্থানীয় নাম, আপনার ভাষার নাম লিখতে সম্পূর্ণ HTML সত্তা ব্যবহার করুন।
 $txt['native_name'] = 'ইংরেজি';

 // লোকেল (strftime, basename)।  আরও তথ্যের জন্য দেখুন:
 // - https://php.net/function.setlocale
 $txt['lang_locale'] = 'en_US';
 $txt['lang_dictionary'] = 'en';
 //https://developers.google.com/recaptcha/docs/language
 $txt['lang_recaptcha'] = 'en';

 // অক্ষর সেট স্ট্রিংগুলির জন্য আপনি বড় হাতের অক্ষর ব্যবহার করতে ভুলবেন না তা নিশ্চিত করুন।
 $txt['lang_character_set'] = 'UTF-8';
 // অক্ষর ডান থেকে বামে সেট?   0 = ltr;  1 = rtl
 $txt['lang_rtl'] = '0';
 // নম্বর বিন্যাস।
 $txt['number_format'] = '1,234.00';

 $txt['days_title'] = 'দিন';
 $txt['days'] = অ্যারে('রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'শনিবার');
 $txt['days_short'] = অ্যারে('রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহস্পতি', 'শুক্র', 'শনি');
 // মাস অবশ্যই 1 => 'জানুয়ারি' দিয়ে শুরু হবে।  (অথবা অনুবাদ, অবশ্যই।)
 $txt['months_title'] = 'মাস';
 $txt['months'] = array(1 => 'জানুয়ারি', 2 => 'ফেব্রুয়ারি', 3 => 'মার্চ', 4 => 'এপ্রিল', 5 => 'মে', 6 => 'জুন  ', 7 => 'জুলাই', 8 => 'আগস্ট', 9 => 'সেপ্টেম্বর', 10 => 'অক্টোবর', 11 => 'নভেম্বর', 12 => 'ডিসেম্বর');
 $txt['months_titles'] = array(1 => 'জানুয়ারি', 2 => 'ফেব্রুয়ারি', 3 => 'মার্চ', 4 => 'এপ্রিল', 5 => 'মে', 6 => 'জুন  ', 7 => 'জুলাই', 8 => 'আগস্ট', 9 => 'সেপ্টেম্বর', 10 => 'অক্টোবর', 11 => 'নভেম্বর', 12 => 'ডিসেম্বর');
 $txt['months_short'] = অ্যারে(1 => 'জান', 2 => 'ফেব্রুয়ারি', 3 => 'মার', 4 => 'এপ্রিল', 5 => 'মে', 6 => 'জুন  ', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec');
 $txt['prev_month'] = 'আগের মাস';
 $txt['next_month'] = 'পরের মাস';
 $txt['start'] = 'শুরু';
 $txt['end'] = 'শেষ';
 $txt['starts'] = 'শুরু';
 $txt['ends'] = 'শেষ';
 $txt['none'] = 'কোনোটিই';

 $txt['minutes_label'] = 'মিনিট';
 $txt['hours_label'] = 'ঘন্টা';
 $txt['years_title'] = 'বছর';

 $txt['time_am'] = 'am';
 $txt['time_pm'] = 'pm';

 // মিনিটের সংক্ষিপ্ত রূপ
 $txt['minutes_short'] = 'মিনিট';
 // ঘন্টার সংক্ষিপ্ত রূপ
 $txt['hour_short'] = 'hr';
 // ঘন্টার সংক্ষিপ্ত রূপ
 $txt['hours_short'] = 'ঘন্টা';
 // দশমিক চিহ্ন
 $txt['decimal_sign'] = '.';

 $txt['admin'] = 'অ্যাডমিন';
 $txt['moderate'] = 'মডারেট';

 $txt['save'] = 'সংরক্ষণ করুন';
 $txt['reset'] = 'রিসেট';
 $txt['upload'] = 'আপলোড';
 $txt['upload_all'] = 'সমস্ত আপলোড করুন';
 $txt['processing'] = 'প্রসেসিং...';

 $txt['modify'] = 'সংশোধন';
 $txt['forum_index'] = '%1$s - সূচক';
 $txt['members'] = 'সদস্য';
 $txt['board_name'] = 'বোর্ডের নাম';
 $txt['posts'] = 'পোস্ট';

 $txt['member_postcount'] = 'পোস্ট';
 $txt['no_subject'] = '(কোন বিষয় নেই)';
 $txt['view_profile'] = 'প্রোফাইল দেখুন';
 $txt['guest_title'] = 'অতিথি';
 $txt['author'] = 'লেখক';
 $txt['on'] = 'চালু';
 $txt['remove'] = 'সরান';
 $txt['start_new_topic'] = 'নতুন বিষয় শুরু করুন';

 $txt['login'] = 'লগ ইন';
 // নিচের স্ট্রিং-এ সাংখ্যিক সত্তা ব্যবহার করুন।
 $txt['username'] = 'ব্যবহারকারীর নাম';
 $txt['password'] = 'পাসওয়ার্ড';

 $txt['username_no_exist'] = 'সেই ব্যবহারকারীর নামটি বিদ্যমান নেই।';
 $txt['no_user_with_email'] = 'সেই ইমেলের সাথে যুক্ত কোনো ব্যবহারকারীর নাম নেই।';

 $txt['board_moderator'] = 'বোর্ড মডারেটর';
 $txt['remove_topic'] = 'বিষয় সরান';
 $txt['topics'] = 'বিষয়';
 $txt['modify_msg'] = 'বার্তা পরিবর্তন করুন';
 $txt['name'] = 'নাম';
 $txt['email'] = 'ইমেল';
 $txt['user_email_address'] = 'ইমেল ঠিকানা';
 $txt['subject'] = 'বিষয়';
 $txt['message'] = 'বার্তা';
 $txt['redirects'] = 'রিডাইরেক্ট';
 $txt['quick_modify'] = 'ইনলাইন পরিবর্তন করুন';
 $txt['quick_modify_message'] = 'আপনি সফলভাবে এই বার্তাটি পরিবর্তন করেছেন।';
 $txt['reason_for_edit'] = 'সম্পাদনার কারণ';

 $txt['choose_pass'] = 'পাসওয়ার্ড চয়ন করুন';
 $txt['verify_pass'] = 'পাসওয়ার্ড যাচাই করুন';
 $txt['notify_announcements'] = 'প্রশাসকদের আমাকে ইমেলের মাধ্যমে গুরুত্বপূর্ণ খবর পাঠাতে অনুমতি দিন';

 $txt['position'] = 'পজিশন';

 // যুক্তি(গুলি): ব্যবহারকারীর নাম
 $txt['view_profile_of_username'] = '%1$s এর প্রোফাইল দেখুন';
 $txt['total'] = 'মোট';
 $txt['website'] = 'ওয়েবসাইট';
 $txt['register'] = 'সাইন আপ';
 $txt['warning_status'] = 'সতর্কতা অবস্থা';
 $txt['user_warn_watch'] = 'ব্যবহারকারী মডারেটর ওয়াচ লিস্টে আছেন';
 $txt['user_warn_moderate'] = 'ব্যবহারকারীর পোস্ট অনুমোদনের সারিতে যোগদান করে';
 $txt['user_warn_mute'] = 'ব্যবহারকারীকে পোস্ট করা নিষিদ্ধ করা হয়েছে';
 $txt['warn_watch'] = 'দেখা হয়েছে';
 $txt['warn_moderate'] = 'মডারেটেড';
 $txt['warn_mute'] = 'নিঃশব্দ';

 $txt['message_index'] = 'মেসেজ ইনডেক্স';
 $txt['news'] = 'সংবাদ';
 $txt['home'] = 'বাড়ি';
 $txt['page'] = 'পৃষ্ঠা';
 $txt['prev'] = 'আগের পৃষ্ঠা';
 $txt['next'] = 'পরবর্তী পৃষ্ঠা';

 $txt['lock_unlock'] = 'লক/আনলক টপিক';
 $txt['post'] = 'পোস্ট';
 $txt['error_occured'] = 'একটি ত্রুটি ঘটেছে';
 $txt['at'] = 'at';
 $txt['by'] = 'দ্বারা';
 $txt['logout'] = 'লগ আউট';
 $txt['started_by'] = 'এর দ্বারা শুরু';
 $txt['topic_started_by'] = '<em>%2$s</em>'-এ <strong>%1$s</strong> দ্বারা শুরু হয়েছে;
 $txt['replies'] = 'উত্তর';
 $txt['last_post'] = 'শেষ পোস্ট';
 $txt['first_post'] = 'প্রথম পোস্ট';
 $txt['last_poster'] = 'শেষ পোস্ট';
 $txt['last_post_message'] = '<strong>শেষ পোস্ট: </strong>%3$s <span class="postby">%2$s by %1$s</span>';
 $txt['last_post_topic'] = '%1$s<br>%2$s' দ্বারা;
 $txt['post_by_member'] = '<strong>%1$s</strong> দ্বারা <strong>%2$s</strong><br>';
 $txt['boardindex_total_posts'] = '%3$s সদস্যদের দ্বারা %2$s বিষয়ে %1$s পোস্ট';
 $txt['show'] = 'দেখান';
 $txt['hide'] = 'লুকান';

 $txt['admin_login'] = 'প্রশাসন লগইন';
 // নিচের স্ট্রিং-এ সাংখ্যিক সত্তা ব্যবহার করুন।
 $txt['topic'] = 'বিষয়';
 $txt['help'] = 'সহায়তা';
 $txt['terms_and_rules'] = 'শর্তাবলী এবং নিয়ম';
 $txt['watch_board'] = 'এই বোর্ডটি দেখুন';
 $txt['unwatch_board'] = 'বোর্ড দেখা বন্ধ করুন';
 $txt['watch_topic'] = 'এই বিষয়টি দেখুন';
 $txt['unwatch_topic'] = 'বিষয় দেখা বন্ধ করুন';
 $txt['watching_topic'] = 'আপনি যে বিষয় দেখছেন';
 $txt['watching_this_topic'] = 'আপনি এই বিষয়টি দেখছেন, এবং এটি সম্পর্কে বিজ্ঞপ্তি পাবেন।';
 $txt['notify'] = 'সূচিত করুন';
 $txt['unnotify'] = 'অনোটিফাই';
 
 // নিচের স্ট্রিং-এ সাংখ্যিক সত্তা ব্যবহার করুন।
 // যুক্তি(গুলি): ফোরামের নাম
 $txt['regards_team'] = 'শুভেচ্ছা,
 %1$s টিম।';

 $txt['notify_replies'] = 'উত্তর সূচিত করুন';
 $txt['move_topic'] = 'বিষয় সরান';
 $txt['move_to'] = 'এতে সরান';
 $txt['pages'] = 'পৃষ্ঠা';
 $txt['users_active'] = 'গত %1$d মিনিটে সক্রিয় ব্যবহারকারীরা';
 $txt['personal_messages'] = 'ব্যক্তিগত বার্তা';
 $txt['reply_quote'] = 'উদ্ধৃতি সহ উত্তর দিন';
 $txt['reply'] = 'উত্তর দিন';
 $txt['reply_noun'] = 'উত্তর দিন';
 $txt['reply_number'] = 'উত্তর #%1$s%2$s';
 $txt['অনুমোদন'] = 'অনুমোদন';
 $txt['unapprove'] = 'অনুমোদন না করা';
 $txt['approve_all'] = 'সব অনুমোদন করুন';
 $txt['issue_warning'] = 'ইস্যু সতর্কতা';
 $txt['awaiting_approval'] = 'অনুমোদনের অপেক্ষায়';
 $txt['attach_awaiting_approve'] = 'অনুমোদনের অপেক্ষায় সংযুক্তিগুলি';
 $txt['post_awaiting_approval'] = 'এই বার্তাটি একজন মডারেটরের অনুমোদনের জন্য অপেক্ষা করছে।';
 $txt['there_are_unapproved_topics'] = 'এই বোর্ডে %1$sটি বিষয় এবং %2$sটি পোস্ট অনুমোদনের অপেক্ষায় আছে।  সেগুলি দেখতে <a href="%3$s">এখানে</a> ক্লিক করুন৷';
 $txt['send_message'] = 'বার্তা পাঠান';

 $txt['msg_alert_no_messages'] = 'আপনার কাছে কোনো বার্তা নেই';
 $txt['msg_alert_one_message'] = 'আপনার <a href="%1$s">1টি বার্তা আছে</a>';
 $txt['msg_alert_many_message'] = 'আপনার <a href="%1$s">%2$dটি বার্তা আছে</a>';
 $txt['msg_alert_one_new'] = '1 নতুন';
 $txt['msg_alert_many_new'] = '%1$d নতুন';
 $txt['new_alert'] = 'নতুন সতর্কতা';
 $txt['remove_message'] = 'এই পোস্টটি সরান';
 $txt['remove_message_question'] = 'এই পোস্টটি সরান?';

 $txt['topic_alert_none'] = 'কোন বার্তা নেই...';
 $txt['pm_alert_none'] = 'কোন বার্তা নেই...';
 $txt['no_messages'] = 'কোন বার্তা নেই';

 $txt['online_users'] = 'ব্যবহারকারীরা অনলাইন';
 $txt['jump_to'] = 'এ যান';
 $txt['go'] = 'যাও';
 $txt['are_sure_remove_topic'] = 'আপনি কি নিশ্চিত যে আপনি এই বিষয়টি সরাতে চান?';
 $txt['yes'] = 'হ্যাঁ';
 $txt['no'] = 'না';

 $txt['search_end_results'] = 'ফলাফলের শেষ';
 $txt['search_on'] = 'চালু';

 $txt['search'] = 'অনুসন্ধান';
 $txt['all'] = 'সব';
 $txt['search_entireforum'] = 'পুরো ফোরাম';
 $txt['search_thisboard'] = 'এই বোর্ড';
 $txt['search_thistopic'] = 'এই বিষয়';
 $txt['search_members'] = 'সদস্য';

 $txt['back'] = 'ব্যাক';
 $txt['continue'] = 'চালিয়ে যান';
 $txt['password_reminder'] = 'পাসওয়ার্ড রিমাইন্ডার';
 $txt['topic_started'] = 'বিষয়টি শুরু হয়েছে';
 $txt['title'] = 'শিরোনাম';
 $txt['post_by'] = 'পোস্ট বাই';
 $txt['memberlist_searchable'] = 'সকল নিবন্ধিত সদস্যদের অনুসন্ধানযোগ্য তালিকা।';
 $txt['welcome_newest_member'] = 'অনুগ্রহ করে স্বাগতম %1$s, আমাদের নতুন সদস্য।';
 $txt['admin_center'] = 'প্রশাসন কেন্দ্র';
 $txt['last_edit_by'] = '<span class="lastedit">শেষ সম্পাদনা</span>: %1$s by %2$s';
 $txt['last_edit_reason'] = '<span id="reason" class="lastedit">কারণ</span>: %1$s';
 $txt['notify_deactivate'] = 'আপনি কি এই বিষয়ে বিজ্ঞপ্তি নিষ্ক্রিয় করতে চান?';
 $txt['modified_time'] = 'শেষ সম্পাদিত';
 $txt['modified_by'] = 'সম্পাদিত';

 $txt['recent_posts'] = 'সাম্প্রতিক পোস্ট';

 $txt['location'] = 'অবস্থান';
 $txt['location_desc'] = 'ভৌগলিক অবস্থান।';
 $txt['gender'] = 'লিঙ্গ';
 $txt['gender_0'] = 'কিছুই নয়';
 $txt['gender_1'] = 'পুরুষ';
 $txt['gender_2'] = 'মহিলা';
 $txt['gender_desc'] = 'আপনার লিঙ্গ';
 $txt['icq'] = 'ICQ';
 $txt['icq_desc'] = 'এটি আপনার ICQ নম্বর।';
 $txt['skype'] = 'স্কাইপ';
 $txt['skype_desc'] = 'আপনার স্কাইপ ব্যবহারকারীর নাম';
 $txt['personal_text'] = 'ব্যক্তিগত পাঠ্য';
 $txt['date_registered'] = 'নিবন্ধিত তারিখ';

 $txt['recent_view'] = 'ফোরামে সাম্প্রতিকতম পোস্টগুলি দেখুন।';
 $txt['recent_updated'] = 'সবচেয়ে সাম্প্রতিক আপডেট হওয়া বিষয়';
 $txt['is_recent_updated'] = '%1$s হল সাম্প্রতিক আপডেট হওয়া বিষয়';

 $txt['male'] = 'পুরুষ';
 $txt['female'] = 'মহিলা';

 $txt['error_invalid_characters_username'] = 'ব্যবহারকারীর নামে ব্যবহার করা অবৈধ অক্ষর।';
 
 // আর্গুমেন্ট(গুলি): ফোরামের নাম, লগইন URL, লগইন জাভাস্ক্রিপ্ট স্নিপেট
 $txt['welcome_guest'] = ' <strong>%1$s</strong>-এ স্বাগতম।  অনুগ্রহ করে <a href="%2$s" onclick="%3$s">লগ ইন</a>.';

 // আর্গুমেন্ট(গুলি): ফোরামের নাম, লগইন URL, লগইন জাভাস্ক্রিপ্ট স্নিপেট, সাইনআপ URL
 $txt['welcome_guest_register'] = ' <strong>%1$s</strong>-এ স্বাগতম।  অনুগ্রহ করে <a href="%2$s" onclick="%3$s">লগ ইন</a> অথবা <a href="%4$s">সাইন আপ</a>৷';

 // যুক্তি(গুলি): $scripturl
 $txt['welcome_guest_activate'] = '<a href="%1$s?action=activate">আপনি কি আপনার অ্যাক্টিভেশন ইমেল মিস করেছেন?</a>';

 // যুক্তি(গুলি): $scripturl
 $txt['register_prompt'] = 'একটি অ্যাকাউন্ট নেই?  <a href="%1$s?action=signup">সাইন আপ</a>.';

 // যুক্তি(গুলি): ফোরামের নাম
 $txt['welcome_to_forum'] = ' <strong>%1$s</strong>-এ স্বাগতম।';

 // @todo নিচের স্প্রিন্টফ করতে
 $txt['hello_member'] = 'আরে,';
 // নিচের স্ট্রিং-এ সাংখ্যিক সত্তা ব্যবহার করুন।
 $txt['hello_guest'] = 'স্বাগত,';
 $txt['select_destination'] = 'দয়া করে একটি গন্তব্য নির্বাচন করুন';

 // এখানে যেকোনো একক উদ্ধৃতি দুবার এড়িয়ে যান.. 'it\'s' -> 'it\\\'s'।
 $txt['posted_by'] = 'পোস্ট করেছে';

 $txt['icon_smiley'] = 'স্মাইলি';
 $txt['icon_angry'] = 'রাগান্বিত';
 $txt['icon_cheesy'] = 'চিজি';
 $txt['icon_laugh'] = 'হাসি';
 $txt['icon_sad'] = 'দুঃখিত';
 $txt['icon_wink'] = 'উইঙ্ক';
 $txt['icon_grin'] = 'হাসি';
 $txt['icon_shocked'] = 'শকড';
 $txt['icon_cool'] = 'কুল';
 $txt['icon_huh'] = 'হুহ';
 $txt['icon_rolleyes'] = 'রোল আইজ';
 $txt['icon_tongue'] = 'জিহ্বা';
 $txt['icon_embarrassed'] = 'বিব্রত';
 $txt['icon_lips'] = 'ঠোঁট সিল করা';
 $txt['icon_undecided'] = 'অনির্ধারিত';
 $txt['icon_kiss'] = 'চুমু';
 $txt['icon_cry'] = 'কান্না';

 $txt['moderator'] = 'মডারেটর';
 $txt['moderators'] = 'মডারেটর';

 $txt['views'] = 'ভিউ';
 $txt['new'] = 'নতুন';

 $txt['view_all_members'] = 'সব সদস্য দেখুন';
 $txt['view'] = 'দেখুন';

 $txt['viewing_members'] = 'সদস্যদের দেখা হচ্ছে %1$s থেকে %2$s';
 $txt['of_total_members'] = '%1$s মোট সদস্যের';

 $txt['forgot_your_password'] = 'আপনার পাসওয়ার্ড ভুলে গেছেন?';

 $txt['date'] = 'তারিখ';
 // নিচের স্ট্রিং-এ সাংখ্যিক সত্তা ব্যবহার করুন।
 $txt['from'] = 'থেকে';
 $txt['check_new_messages'] = 'নতুন বার্তা পরীক্ষা করুন';
 $txt['to'] = 'প্রতি';

 $txt['board_topics'] = 'বিষয়';
 $txt['members_title'] = 'সদস্য';
 $txt['members_list'] = 'সদস্যদের তালিকা';
 $txt['new_posts'] = 'নতুন পোস্ট';
 $txt['old_posts'] = 'কোনো নতুন পোস্ট নেই';
 $txt['redirect_board'] = 'রিডাইরেক্ট বোর্ড';

 $txt['sendtopic_send'] = 'পাঠান';
 $txt['report_sent'] = 'আপনার রিপোর্ট সফলভাবে পাঠানো হয়েছে।';
 $txt['post_becomes_unapproved'] = 'আপনার বার্তাটি অনুমোদিত হয়নি কারণ এটি একটি অননুমোদিত বিষয়ে পোস্ট করা হয়েছিল।  একবার বিষয় অনুমোদিত হলে আপনার বার্তাও অনুমোদিত হবে।';

 $txt['time_offset'] = 'টাইম অফসেট';
 $txt['or'] = 'বা';

 $txt['no_matches'] = 'দুঃখিত, কোনো মিল পাওয়া যায়নি';

 $txt['notification'] = 'বিজ্ঞপ্তি';

 $txt['your_ban'] = 'দুঃখিত %1$s, আপনি এই ফোরাম ব্যবহার থেকে নিষিদ্ধ!';
 $txt['your_ban_expires'] = 'এই নিষেধাজ্ঞার মেয়াদ %1$s শেষ হওয়ার জন্য সেট করা হয়েছে।';
 $txt['your_ban_expires_never'] = 'এই নিষেধাজ্ঞার মেয়াদ শেষ হওয়ার জন্য সেট করা হয়নি।';
 $txt['ban_continue_browse'] = 'আপনি অতিথি হিসেবে ফোরাম ব্রাউজ করা চালিয়ে যেতে পারেন।';

 $txt['mark_as_read'] = 'সমস্ত বার্তা পঠিত হিসাবে চিহ্নিত করুন';

 $txt['locked_topic'] = 'লকড টপিক';
 $txt['normal_topic'] = 'সাধারণ বিষয়';
 $txt['participation_caption'] = 'আপনি পোস্ট করেছেন এমন বিষয়';
 $txt['moved_topic'] = 'মুভড টপিক';

 $txt['go_caps'] = 'GO';

 $txt['print'] = 'প্রিন্ট';
 $txt['profile'] = 'প্রোফাইল';
 $txt['topic_summary'] = 'বিষয় সারাংশ';
 $txt['not_applicable'] = 'N/A';
 $txt['name_in_use'] = 'এই নামটি ইতিমধ্যেই অন্য সদস্যের দ্বারা ব্যবহার করা হচ্ছে।';

 $txt['total_members'] = 'মোট সদস্য';
 $txt['total_posts'] = 'মোট পোস্ট';
 $txt['total_topics'] = 'মোট বিষয়';

 $txt['time_logged_in'] = 'লগ ইন থাকার সময়';

 $txt['preview'] = 'প্রিভিউ';
 $txt['always_logged_in'] = 'চিরদিন';

 $txt['logged'] = 'লগড';
 $txt['show_ip'] = 'আইপি ঠিকানা দেখান';
 // নিচের স্ট্রিং-এ সাংখ্যিক সত্তা ব্যবহার করুন।
 $txt['ip'] = 'IP';
 $txt['url'] = 'URL';
 $txt['www'] = 'WWW';

 $txt['hours'] = 'ঘন্টা';
 $txt['minutes'] = 'মিনিট';
 $txt['seconds'] = 'সেকেন্ড';

 // অর্থপ্রদত্ত সাবস্ক্রিপশন পরিচালনায় বড় হাতের অক্ষর ব্যবহার করা হয়েছে
 $txt['hour'] = 'ঘন্টা';
 $txt['days_word'] = 'দিন';

 $txt['search_for'] = 'অনুসন্ধান করুন';
 $txt['search_match'] = 'ম্যাচ';

 $txt['forum_in_maintenance'] = 'আপনার ফোরাম রক্ষণাবেক্ষণ মোডে আছে।  শুধুমাত্র প্রশাসকরা বর্তমানে লগ ইন করতে পারেন।';
 $txt['maintenance_page'] = 'আপনি <a href="%1$s">সার্ভার সেটিংস</a> এলাকা থেকে রক্ষণাবেক্ষণ মোড বন্ধ করতে পারেন।';

 $txt['read_one_time'] = '1 বার পড়ুন';
 $txt['read_many_times'] = '%1$d বার পড়ুন';

 $txt['forum_stats'] = 'ফোরাম পরিসংখ্যান';
 $txt['latest_member'] = 'সর্বশেষ সদস্য';
 $txt['total_cats'] = 'মোট বিভাগ';
 $txt['latest_post'] = 'সর্বশেষ পোস্ট';

 $txt['total_boards'] = 'মোট বোর্ড';

 $txt['print_page'] = 'প্রিন্ট পৃষ্ঠা';
 $txt['print_page_text'] = 'শুধুমাত্র পাঠ্য';
 $txt['print_page_images'] = 'ছবি সহ পাঠ্য';

 $txt['valid_email'] = 'এটি অবশ্যই একটি বৈধ ইমেল ঠিকানা হতে হবে।';

 $txt['geek'] = 'আমি একজন গিক!!';
 $txt['info_center_title'] = '%1$s - তথ্য কেন্দ্র';

 $txt['watch'] = 'দেখুন';
 $txt['unwatch'] = 'দেখা বন্ধ করুন';

 $txt['check_all'] = 'সব নির্বাচন করুন';

 // নিচের স্ট্রিং-এ সাংখ্যিক সত্তা ব্যবহার করুন।
 $txt['database_error'] = 'ডাটাবেস ত্রুটি';
 $txt['try_again'] = 'অনুগ্রহ করে আবার চেষ্টা করুন।  আপনি যদি এই ত্রুটির পর্দায় ফিরে আসেন, তাহলে একজন প্রশাসকের কাছে ত্রুটিটি রিপোর্ট করুন।';
 $txt['file'] = 'ফাইল';
 $txt['line'] = 'লাইন';
 // নিচের স্ট্রিং-এ সাংখ্যিক সত্তা ব্যবহার করুন।
 $txt['tried_to_repair'] = 'SMF সনাক্ত করেছে এবং স্বয়ংক্রিয়ভাবে আপনার ডাটাবেসে একটি ত্রুটি মেরামত করার চেষ্টা করেছে।  যদি আপনার সমস্যা অব্যাহত থাকে, বা এই ইমেলগুলি পাওয়া অব্যাহত থাকে, অনুগ্রহ করে আপনার হোস্টের সাথে যোগাযোগ করুন।';
 $txt['database_error_versions'] = '<strong>দ্রষ্টব্য:</strong> মনে হচ্ছে আপনার ডাটাবেসের <em>হতে পারে</em> একটি আপগ্রেড প্রয়োজন৷  আপনার ফোরামের ফাইলগুলি বর্তমানে %1$s সংস্করণে রয়েছে, যখন আপনার ডাটাবেসটি %2$s সংস্করণে রয়েছে৷  আপনি upgrade.php এর সর্বশেষ সংস্করণটি কার্যকর করলে উপরের ত্রুটিটি সম্ভবত দূরে যেতে পারে।';
 $txt['template_parse_error'] = 'টেমপ্লেট পার্স ত্রুটি!';
 $txt['template_parse_error_message'] = 'মনে হচ্ছে টেমপ্লেট সিস্টেমের সাথে ফোরামে কিছু খারাপ হয়ে গেছে।  এই সমস্যাটি শুধুমাত্র অস্থায়ী হওয়া উচিত, তাই অনুগ্রহ করে পরে ফিরে আসুন এবং আবার চেষ্টা করুন৷  আপনি যদি এই বার্তাটি দেখতে থাকেন তবে অনুগ্রহ করে প্রশাসকের সাথে যোগাযোগ করুন৷<br><br>আপনি <a href="javascript:location.reload();">এই পৃষ্ঠাটি রিফ্রেশ করার</a>ও চেষ্টা করতে পারেন৷';
 // আর্গুমেন্ট(গুলি): ফাইলের নাম, $boardurl, $scripturl
 $txt['template_parse_error_details'] = '<pre><strong>%1$s</strong></pre> টেমপ্লেট বা ভাষা ফাইল লোড করার সময় একটি সমস্যা হয়েছে৷  অনুগ্রহ করে সিনট্যাক্স পরীক্ষা করুন এবং আবার চেষ্টা করুন - মনে রাখবেন, একক উদ্ধৃতি (<pre>\'</pre>) প্রায়ই একটি স্ল্যাশ (<pre>\\</pre>) দিয়ে এড়িয়ে যেতে হয়।  PHP থেকে আরও নির্দিষ্ট ত্রুটির তথ্য দেখতে, <a href="%2$s%1$s">ফাইলটি সরাসরি অ্যাক্সেস করার</a> চেষ্টা করুন৷<br><br>আপনি চেষ্টা করতে চাইতে পারেন <a href=  "javascript:location.reload();">এই পৃষ্ঠাটি রিফ্রেশ করুন</a> অথবা <a href="%3$s?theme=1">ডিফল্ট থিম ব্যবহার করুন</a>।';
$txt['template_parse_errmsg'] = 'দুর্ভাগ্যবশত ঠিক কী ভুল সে সম্পর্কে এই মুহূর্তে আরও তথ্য পাওয়া যাচ্ছে না।';

 $txt['today'] = '<strong>আজ</strong> এ ';
 $txt['yesterday'] = '<strong>গতকাল</strong> এ ';
 $txt['new_poll'] = 'নতুন পোল';
 $txt['poll_question'] = 'প্রশ্ন';
 $txt['poll_vote'] = 'ভোট জমা দিন';
 $txt['poll_total_voters'] = 'মোট সদস্য ভোট দিয়েছেন';
 $txt['poll_results'] = 'ফলাফল দেখুন';
 $txt['poll_lock'] = 'ভোটিং লক';
 $txt['poll_unlock'] = 'ভোটিং আনলক';
 $txt['poll_edit'] = 'পোল সম্পাদনা করুন';
 $txt['poll'] = 'পোল';
 $txt['one_hour'] = '1 ঘন্টা';
 $txt['one_day'] = '1 দিন';
 $txt['one_week'] = '1 সপ্তাহ';
 $txt['two_weeks'] = '2 সপ্তাহ';
 $txt['one_month'] = '1 মাস';
 $txt['two_months'] = '2 মাস';
 $txt['forever'] = 'চিরদিন';
 $txt['moved'] = 'সরানো';
 $txt['move_why'] = 'অনুগ্রহ করে একটি সংক্ষিপ্ত বিবরণ লিখুন<br>কেন এই বিষয়টি সরানো হচ্ছে।';
 $txt['board'] = 'বোর্ড';
 $txt['in'] = 'in';
 $txt['sticky_topic'] = 'স্টিকি টপিক';

 $txt['delete'] = 'মুছুন';
 $txt['no_change'] = 'কোন পরিবর্তন নেই';

 $txt['your_pms'] = 'আপনার ব্যক্তিগত বার্তা';

 $txt['kilobyte'] = 'KB';
 $txt['megabyte'] = 'MB';

 $txt['more_stats'] = '[আরো পরিসংখ্যান]';

 // নিচের তিনটি স্ট্রিং-এ সাংখ্যিক সত্তা ব্যবহার করুন।
 $txt['code'] = 'কোড';
 $txt['code_select'] = 'নির্বাচন করুন';
 $txt['code_expand'] = 'প্রসারিত করুন';
 $txt['code_shrink'] = 'সঙ্কুচিত';
 $txt['quote_from'] = 'থেকে উদ্ধৃতি';
 $txt['quote'] = 'উদ্ধৃতি';
 $txt['quote_action'] = 'উদ্ধৃতি';
 $txt['quote_selected_action'] = 'নির্বাচিত পাঠ্য উদ্ধৃত করুন';
 $txt['fulledit'] = 'সম্পূর্ণ&nbsp;সম্পাদনা';
 $txt['edit'] = 'সম্পাদনা';
 $txt['quick_edit'] = 'দ্রুত সম্পাদনা';
 $txt['post_options'] = 'আরো...';

 $txt['merge_to_topic_id'] = 'লক্ষ্য বিষয়ের আইডি';
 $txt['split'] = 'বিভক্ত বিষয়';
 $txt['merge'] = 'বিষয় একত্রিত করুন';
 $txt['target_id'] = 'বিষয় আইডি অনুসারে লক্ষ্য নির্বাচন করুন';
 $txt['target_below'] = 'নীচের তালিকা থেকে লক্ষ্য নির্বাচন করুন';
 $txt['subject_new_topic'] = 'নতুন বিষয়ের জন্য বিষয়';
 $txt['split_this_post'] = 'শুধুমাত্র এই পোস্টটি বিভক্ত করুন।';
 $txt['split_after_and_this_post'] = 'এই পোস্টের পরে এবং অন্তর্ভুক্ত বিষয়কে ভাগ করুন।';
 $txt['select_split_posts'] = 'বিভক্ত করার জন্য পোস্ট নির্বাচন করুন।';
 $txt['new_topic'] = 'নতুন বিষয়';
 $txt['split_successful'] = 'বিষয়টি সফলভাবে দুটি বিষয়ে বিভক্ত।';
 $txt['origin_topic'] = 'মূল বিষয়';
 $txt['please_select_split'] = 'আপনি কোন পোস্টগুলিকে বিভক্ত করতে চান তা নির্বাচন করুন।';
 $txt['merge_successful'] = 'বিষয়গুলি সফলভাবে একত্রিত হয়েছে।';
 $txt['new_merged_topic'] = 'নতুন একত্রিত বিষয়';
 $txt['topic_to_merge'] = 'একত্রিত করা বিষয়';
 $txt['target_board'] = 'টার্গেট বোর্ড';
 $txt['target_topic'] = 'টার্গেট টপিক';
 $txt['merge_desc'] = 'এই ফাংশনটি দুটি বিষয়ের বার্তাকে একটি বিষয়ে একত্রিত করবে।  বার্তাগুলি পোস্ট করার সময় অনুসারে সাজানো হবে।  অতএব, প্রথম পোস্ট করা বার্তাটি একত্রিত বিষয়ের প্রথম বার্তা হবে৷';

 $txt['set_sticky'] = 'টপিক স্টিকি সেট করুন';
 $txt['set_nonsticky'] = 'নন-স্টিকি বিষয় সেট করুন';
 $txt['set_lock'] = 'লক টপিক';
 $txt['set_unlock'] = 'বিষয়টি আনলক করুন';

 $txt['search_advanced'] = 'উন্নত অনুসন্ধান';

 $txt['security_risk'] = 'প্রধান নিরাপত্তা ঝুঁকি:';
 $txt['not_removed'] = 'আপনি সরাননি';
 $txt['not_removed_extra'] = '%1$s হল %2$s এর একটি ব্যাকআপ যা SMF দ্বারা তৈরি করা হয়নি৷  এটি সরাসরি অ্যাক্সেস করা যেতে পারে এবং আপনার ফোরামে অননুমোদিত অ্যাক্সেস পেতে ব্যবহার করা যেতে পারে।  আপনি অবিলম্বে এটি মুছে ফেলা উচিত.';
 $txt['generic_warning'] = 'সতর্কতা';
 $txt['agreement_missing'] = 'আপনি নতুন ব্যবহারকারীদের একটি নিবন্ধন চুক্তি গ্রহণ করতে চান;  যাইহোক, ফাইল (agreement.txt) বিদ্যমান নেই।';
 $txt['policy_agreement_missing'] = 'আপনি নতুন ব্যবহারকারীদের একটি গোপনীয়তা নীতি গ্রহণ করতে চান;  যাইহোক, গোপনীয়তা নীতি খালি।';
 $txt['auth_secret_missing'] = 'Settings.php-এ প্রমাণীকরণ গোপন সেট করতে অক্ষম।  এটি আপনার ফোরামের নিরাপত্তাকে দুর্বল করে এবং এটিকে আক্রমণের ঝুঁকিতে ফেলে।  SMF ফাইলটিতে লিখতে পারে তা নিশ্চিত করতে Settings.php-এ ফাইলের অনুমতি পরীক্ষা করুন।';

 $txt['cache_writable'] = 'ক্যাশে ডিরেক্টরি লেখার যোগ্য নয় - এটি আপনার ফোরামের কর্মক্ষমতাকে বিরূপভাবে প্রভাবিত করবে।';

 $txt['page_created_full'] = '%2$d প্রশ্নের সাথে %1$.3f সেকেন্ডে পৃষ্ঠা তৈরি করা হয়েছে।';

 $txt['report_to_mod_func'] = 'একটি আপত্তিজনক বা সমস্যাযুক্ত বার্তা মডারেটর এবং প্রশাসকদের জানাতে এই ফাংশনটি ব্যবহার করুন।';
 $txt['report_profile_func'] = 'প্রশাসকদের অপমানজনক প্রোফাইল সামগ্রী, যেমন স্প্যাম বা অনুপযুক্ত ছবি সম্পর্কে অবহিত করতে এই ফাংশনটি ব্যবহার করুন।';

 $txt['online'] = 'অনলাইন';
 $txt['member_is_online'] = '%1$s অনলাইন';
 $txt['offline'] = 'অফলাইন';
 $txt['member_is_offline'] = '%1$s অফলাইন';
 $txt['pm_online'] = 'ব্যক্তিগত বার্তা (অনলাইন)';
 $txt['pm_offline'] = 'ব্যক্তিগত বার্তা (অফলাইন)';
 $txt['status'] = 'স্থিতি';

 $txt['go_up'] = 'Go Up';
 $txt['go_down'] = 'গো ডাউন';

 // যুক্তি(গুলি): SMF_FULL_VERSION, SMF_SOFTWARE_YEAR, $scripturl
 $forum_copyright = '<a href="%3$s?action=credits" title="License" target="_blank" rel="noopener">%1$s &কপি;  %2$s</a>, <a href="https://www.simplemachines.org" title="Simple Machines" target="_blank" rel="noopener">সাধারণ মেশিন</a>';

 $txt['birthdays'] = 'জন্মদিন:';
 $txt['events'] = 'ইভেন্টস:';
 $txt['birthdays_upcoming'] = 'আসন্ন জন্মদিন:';
 $txt['events_upcoming'] = 'আসন্ন ঘটনা:';
 // ক্যালেন্ডারে ছুটির জন্য প্রম্পট, শুধু ছুটির নাম প্রদর্শন করতে ফাঁকা ছেড়ে দিন।
 $txt['calendar_prompt'] = 'ছুটির দিন:';
 $txt['calendar_month'] = 'মাস';
 $txt['calendar_year'] = 'বছর';
 $txt['calendar_day'] = 'দিন';
 $txt['calendar_event_title'] = 'ইভেন্ট শিরোনাম';
 $txt['calendar_event_options'] = 'ইভেন্ট বিকল্প';
 $txt['calendar_post_in'] = 'পোস্ট ইন';
 $txt['calendar_edit'] = 'ইভেন্ট সম্পাদনা করুন';
 $txt['calendar_export'] = 'এক্সপোর্ট ইভেন্ট';
 $txt['calendar_view_week'] = 'ভিউ উইক';
 $txt['event_delete_confirm'] = 'এই ইভেন্টটি মুছবেন?';
 $txt['event_delete'] = 'ইভেন্ট মুছুন';
 $txt['calendar_post_event'] = 'ইভেন্ট পোস্ট করুন';
 $txt['calendar'] = 'ক্যালেন্ডার';
 $txt['calendar_link'] = 'ক্যালেন্ডারে লিঙ্ক';
 $txt['calendar_upcoming'] = 'আসন্ন ক্যালেন্ডার';
 $txt['calendar_today'] = 'আজকের ক্যালেন্ডার';
 $txt['calendar_week'] = 'সপ্তাহ';
 $txt['calendar_week_title'] = '%2$d এর %1$d সপ্তাহ';
 // %1$s হল মাস, %2$s হল দিন, %3$s হল বছর৷  আপনার ভাষা অনুসারে পরিবর্তন করুন।
 $txt['calendar_week_beginning'] = 'সপ্তাহের শুরু %1$s %2$s, %3$s';
 $txt['calendar_numb_days'] = 'দিনের সংখ্যা';
 $txt['calendar_how_edit'] = 'আপনি কীভাবে এই ইভেন্টগুলি সম্পাদনা করবেন?';
 $txt['calendar_link_event'] = 'পোস্টের জন্য ইভেন্ট লিঙ্ক করুন';
 $txt['calendar_confirm_delete'] = 'আপনি কি নিশ্চিত যে আপনি এই ইভেন্টটি মুছতে চান?';
 $txt['calendar_linked_events'] = 'লিঙ্কড ইভেন্ট';
 $txt['calendar_click_all'] = 'সব %1$s দেখতে ক্লিক করুন';
 $txt['calendar_allday'] = 'সারা দিন';
 $txt['calendar_timezone'] = 'টাইম জোন';
 $txt['calendar_list'] = 'তালিকা';
 $txt['calendar_empty'] = 'প্রদর্শনের জন্য কোনো ইভেন্ট নেই।';

 $txt['movetopic_change_subject'] = 'বিষয়টির বিষয় পরিবর্তন করুন';
 $txt['movetopic_new_subject'] = 'নতুন বিষয়';
 $txt['movetopic_change_all_subjects'] = 'প্রতিটি বার্তার বিষয় পরিবর্তন করুন';
 $txt['move_topic_unapproved_js'] = 'সতর্কতা!  এই বিষয়টি এখনও অনুমোদিত হয়নি৷\\n\\nআপনি একটি পুনঃনির্দেশের বিষয় তৈরি করার পরামর্শ দেওয়া হয় না যদি না আপনি সরানোর পরে অবিলম্বে পোস্টটি অনুমোদন করতে চান৷';
 $txt['movetopic_auto_board'] = '[বোর্ড]';
 $txt['movetopic_auto_topic'] = '[টপিক লিঙ্ক]';

 // যুক্তি(গুলি): $txt['movetopic_auto_board'], $txt['movetopic_auto_topic']
 $txt['movetopic_default'] = 'এই বিষয়টি %1$s এ সরানো হয়েছে।

 %2$s';

 $txt['movetopic_redirect'] = 'সরানো বিষয়ে পুনঃনির্দেশ করুন';

 $txt['post_redirection'] = 'পুনর্নির্দেশের বিষয় পোস্ট করুন';
 $txt['redirect_topic_expires'] = 'পুনর্নির্দেশের বিষয় স্বয়ংক্রিয়ভাবে সরান';
 $txt['mergetopic_redirect'] = 'একত্রিত বিষয়ে পুনর্নির্দেশ করুন';
 $txt['merge_topic_unapproved_js'] = 'সতর্কতা!  এই বিষয়টি এখনও অনুমোদন করা হয়নি৷\\n\\nএটি সুপারিশ করা হয় না যে আপনি একটি পুনঃনির্দেশের বিষয় তৈরি করুন যদি না আপনি একত্রিত হওয়ার পরে অবিলম্বে পোস্টটি অনুমোদন করতে চান৷';

 $txt['theme_template_error'] = '\'%1$s\' টেমপ্লেট লোড করতে অক্ষম।';
 $txt['theme_language_error'] = '\'%1$s\' ভাষা ফাইল লোড করতে অক্ষম।';

 $txt['sub_boards'] = 'সাব-বোর্ড';
 $txt['restricted_board'] = 'সীমাবদ্ধ বোর্ড';

 $txt['smtp_no_connect'] = 'SMTP হোস্টের সাথে সংযোগ করা যায়নি';
 $txt['smtp_port_ssl'] = 'SMTP পোর্ট সেটিং ভুল;  এটি SSL সার্ভারের জন্য 465 হওয়া উচিত।  হোস্টনামের ssl:// উপসর্গ লাগতে পারে।';
 $txt['smtp_bad_response'] = 'মেইল সার্ভার প্রতিক্রিয়া কোড পাওয়া যায়নি';
 $txt['smtp_error'] = 'মেইল পাঠাতে সমস্যা হয়েছে।  ত্রুটি: ';
 $txt['mail_send_unable'] = 'ইমেল ঠিকানা \'%1$s\' এ মেল পাঠাতে অক্ষম;

 $txt['mlist_search'] = 'সদস্যদের জন্য অনুসন্ধান করুন';
 $txt['mlist_search_again'] = 'আবার অনুসন্ধান করুন';
 $txt['mlist_search_filter'] = 'অনুসন্ধান বিকল্প';
 $txt['mlist_search_email'] = 'ইমেল ঠিকানা দ্বারা অনুসন্ধান করুন';
 $txt['mlist_search_messenger'] = 'মেসেঞ্জার ডাকনাম দ্বারা অনুসন্ধান করুন';
 $txt['mlist_search_group'] = 'অবস্থান অনুসারে অনুসন্ধান করুন';
 $txt['mlist_search_name'] = 'নাম দ্বারা অনুসন্ধান করুন';
 $txt['mlist_search_website'] = 'ওয়েবসাইট দ্বারা অনুসন্ধান করুন';
 $txt['mlist_search_results'] = 'এর জন্য অনুসন্ধান ফলাফল';
 $txt['mlist_search_by'] = '%1$s দ্বারা অনুসন্ধান করুন';
 $txt['mlist_menu_view'] = 'সদস্য তালিকা দেখুন';

 $txt['attach_downloaded'] = '%1$d বার ডাউনলোড হয়েছে';
 $txt['attach_viewed'] = '%1$d বার দেখা হয়েছে';

 $txt['settings'] = 'সেটিংস';
 $txt['never'] = 'কখনও না';
 $txt['more'] = 'আরো';
 $txt['etc'] = 'ইত্যাদি';
 
 $txt['hostname'] = 'হোস্টনেম';
 $txt['you_are_post_banned'] = 'দুঃখিত %1$s, আপনাকে এই ফোরামে ব্যক্তিগত বার্তা পোস্ট করা এবং পাঠানো নিষিদ্ধ করা হয়েছে৷';
 $txt['ban_reason'] = 'কারণ';
 $txt['select_item_check'] = 'তালিকায় অন্তত একটি আইটেম নির্বাচন করুন';

 $txt['tables_optimized'] = 'ডেটাবেস টেবিল অপ্টিমাইজড';

 $txt['add_poll'] = 'পোল যোগ করুন';
 $txt['poll_options_limit'] = 'আপনি শুধুমাত্র %1$s পর্যন্ত বিকল্প নির্বাচন করতে পারেন।';
 $txt['poll_remove'] = 'পোল সরান';
 $txt['poll_remove_warn'] = 'আপনি কি বিষয়টি থেকে এই পোলটি সরানোর বিষয়ে নিশ্চিত?';
 $txt['poll_results_expire'] = 'ভোটিং বন্ধ হয়ে গেলে ফলাফল দেখানো হবে';
 $txt['poll_expires_on'] = 'ভোটিং বন্ধ';
 $txt['poll_expired_on'] = 'ভোটিং বন্ধ';
 $txt['poll_change_vote'] = 'ভোট সরান';
 $txt['poll_return_vote'] = 'ভোট দেওয়ার বিকল্প';
 $txt['poll_cannot_see'] = 'আপনি এই মুহূর্তে এই পোলের ফলাফল দেখতে পারবেন না।';

 $txt['quick_mod_approve'] = 'নির্বাচিত অনুমোদন করুন';
 $txt['quick_mod_remove'] = 'নির্বাচিত সরান';
 $txt['quick_mod_lock'] = 'নির্বাচিত লক/আনলক';
 $txt['quick_mod_sticky'] = 'স্টিকি/আনস্টিকি নির্বাচিত';
 $txt['quick_mod_move'] = 'এতে নির্বাচিত সরান';
 $txt['quick_mod_merge'] = 'নির্বাচিত মার্জ';
 $txt['quick_mod_markread'] = 'নির্বাচিত পঠিত চিহ্নিত করুন';
 $txt['quick_mod_markunread'] = 'নির্বাচিত অপঠিত চিহ্নিত করুন';
 $txt['quick_mod_selected'] = 'নির্বাচিত বিকল্পের সাথে করুন';
 $txt['quick_mod_go'] = 'যাও';
 $txt['quickmod_confirm'] = 'আপনি কি নিশ্চিত আপনি এটি করতে চান?';

 $txt['spell_check'] = 'বানান পরীক্ষা';

 $txt['quick_reply'] = 'দ্রুত উত্তর';
 $txt['quick_reply_warning'] = 'সতর্কতা!  এই বিষয় বর্তমানে লক করা আছে, শুধুমাত্র প্রশাসক এবং মডারেটর উত্তর দিতে পারেন.';
 $txt['quick_reply_verification'] = 'আপনার পোস্ট জমা দেওয়ার পর আপনার পোস্ট %1$s যাচাই করার জন্য আপনাকে নিয়মিত পোস্ট পৃষ্ঠায় পাঠানো হবে।';
 $txt['quick_reply_verification_guests'] = '(সমস্ত অতিথিদের জন্য প্রয়োজনীয়)';
 $txt['quick_reply_verification_posts'] = '(%1$d এর কম পোস্ট সহ সকল ব্যবহারকারীর জন্য প্রয়োজনীয়)';
 $txt['wait_for_approval'] = 'দ্রষ্টব্য: এই পোস্টটি মডারেটর কর্তৃক অনুমোদিত না হওয়া পর্যন্ত প্রদর্শিত হবে না।';

 $txt['notification_enable_board'] = 'আপনি কি নিশ্চিত যে আপনি এই বোর্ডের জন্য নতুন বিষয়ের বিজ্ঞপ্তি সক্রিয় করতে চান?';
 $txt['notification_disable_board'] = 'আপনি কি নিশ্চিত যে আপনি এই বোর্ডের জন্য নতুন বিষয়ের বিজ্ঞপ্তি নিষ্ক্রিয় করতে চান?';
 $txt['notification_enable_topic'] = 'আপনি কি নিশ্চিত যে আপনি এই বিষয়ের জন্য নতুন উত্তরের বিজ্ঞপ্তি সক্রিয় করতে চান?';
 $txt['notification_disable_topic'] = 'আপনি কি নিশ্চিত যে আপনি এই বিষয়ের জন্য নতুন উত্তরের বিজ্ঞপ্তি নিষ্ক্রিয় করতে চান?';

 // উল্লেখ
 $txt['mentions'] = 'উল্লেখ';

 // পছন্দ
 $txt['likes'] = 'পছন্দ';
 $txt['like'] = 'লাইক';
 $txt['unlike'] = 'অপছন্দ';
 $txt['like_success'] = 'আপনার বিষয়বস্তু সফলভাবে পছন্দ হয়েছে।';
 $txt['like_delete'] = 'আপনার বিষয়বস্তু সফলভাবে মুছে ফেলা হয়েছে।';
 $txt['like_insert'] = 'আপনার বিষয়বস্তু সফলভাবে ঢোকানো হয়েছে।';
 $txt['like_error'] = 'আপনার অনুরোধে একটি ত্রুটি ছিল।';
 $txt['like_disable'] = 'লাইক বৈশিষ্ট্য নিষ্ক্রিয়।';
 $txt['not_valid_like_type'] = 'পছন্দ করা প্রকারটি বৈধ প্রকার নয়।';
 // অনুবাদক, যদি আপনার ভাষা অনুসারে আরও স্ট্রিং তৈরি করতে হয়, যেমন  $txt['likes_2'] = 'দুজন লোক এটা পছন্দ করে', দয়া করে তা করুন।
 $txt['likes_1'] = '<a href="%1$s">%2$s ব্যক্তি</a> এটি পছন্দ করে৷';
 $txt['likes_n'] = '<a href="%1$s">%2$s লোক</a> এটা পছন্দ করে।';
 $txt['you_likes_0'] = 'আপনি এটা পছন্দ করেন।';
 $txt['you_likes_1'] = 'আপনি এবং <a href="%1$s">%2$s অন্য ব্যক্তি</a> এটা পছন্দ করেন।';
 $txt['you_likes_n'] = 'আপনি এবং <a href="%1$s">%2$s অন্য লোক</a> এটা পছন্দ করেন।';

 $txt['report_to_mod'] = 'মডারেটরের কাছে রিপোর্ট করুন';
 $txt['report_profile'] = '%1$s-এর প্রোফাইল রিপোর্ট করুন';

 $txt['unread_topics_visit'] = 'সাম্প্রতিক অপঠিত বিষয়';
 // যুক্তি(গুলি): scripturl
 $txt['unread_topics_visit_none'] = 'আপনার শেষ দেখার পর থেকে কোনো অপঠিত বিষয় পাওয়া যায়নি।  <a href="%1$s?action=unread;all">সব অপঠিত বিষয় চেষ্টা করতে এখানে ক্লিক করুন</a>।';
 $txt['updated_topics_visit_none'] = 'আপনার শেষ দেখার পর থেকে কোনো আপডেট করা বিষয় পাওয়া যায়নি।';
 $txt['unread_topics_all'] = 'সমস্ত অপঠিত বিষয়';
 $txt['unread_replies'] = 'আপডেট করা বিষয়';

 $txt['who_title'] = 'কে অনলাইন';
 $txt['who_and'] = 'এবং';
 $txt['who_viewing_topic'] = 'এই বিষয়টি দেখছেন।';
 $txt['who_viewing_board'] = 'এই বোর্ডটি দেখছেন।';
 $txt['who_member'] = 'সদস্য';

 // ডিফল্ট থিম দ্বারা আর ব্যবহার করা হয় না, কিন্তু পিছনের কম্প্যাটের জন্য
 $txt['powered_by_php'] = 'PHP দ্বারা চালিত';
 $txt['powered_by_mysql'] = 'মাইএসকিউএল দ্বারা চালিত';
 $txt['valid_css'] = 'বৈধ CSS';

 $txt['rss'] = 'RSS';
 $txt['atom'] = 'পরমাণু';
 $txt['html'] = 'HTML';

 $txt['guest'] = 'অতিথি';
 $txt['guests'] = 'অতিথি';
 $txt['user'] = 'ব্যবহারকারী';
 $txt['users'] = 'ব্যবহারকারী';
 $txt['hidden'] = 'লুকানো';
 
 // ইংরেজি ছাড়া অন্য ভাষার জন্য লুকানো বহুবচন রূপ
 $txt['hidden_s'] = 'লুকানো';
 $txt['buddy'] = 'বন্ধু';
 $txt['buddies'] = 'বন্ধু';
 $txt['most_online_ever'] = 'সর্বাধিক অনলাইন';
 $txt['most_online_today'] = 'সবচেয়ে বেশি অনলাইন আজ';

 $txt['merge_select_target_board'] = 'একত্রিত বিষয়ের লক্ষ্য বোর্ড নির্বাচন করুন';
 $txt['merge_select_poll'] = 'একত্রিত বিষয়ের কোন পোল হওয়া উচিত তা নির্বাচন করুন';
 $txt['merge_topic_list'] = 'একত্রিত করার বিষয় নির্বাচন করুন';
 $txt['merge_select_subject'] = 'একত্রিত বিষয়ের বিষয় নির্বাচন করুন';
 $txt['merge_custom_subject'] = 'কাস্টম বিষয়';
 $txt['merge_include_notifications'] = 'বিজ্ঞপ্তি অন্তর্ভুক্ত করবেন?';
 $txt['merge_check'] = 'একত্রীকরণ?';
 $txt['merge_no_poll'] = 'নো পোল';
 $txt['merge_why'] = 'এই বিষয়গুলি কেন একত্রিত করা হচ্ছে তার একটি সংক্ষিপ্ত বিবরণ লিখুন।';
 $txt['merged_subject'] = '[MERGED] %1$s';
 // যুক্তি(গুলি): $txt['movetopic_auto_topic']
 $txt['mergetopic_default'] = 'এই বিষয়টি %2$s এ মার্জ করা হয়েছে।';

 $txt['response_prefix'] = 'Re:';
 $txt['current_icon'] = 'বর্তমান আইকন';
 $txt['message_icon'] = 'মেসেজ আইকন';

 $txt['smileys_current'] = 'বর্তমান স্মাইলি সেট';
 $txt['smileys_none'] = 'নো স্মাইলিস';
 $txt['smileys_forum_board_default'] = 'ফোরাম/বোর্ড ডিফল্ট';

 $txt['search_results'] = 'অনুসন্ধান ফলাফল';
 $txt['search_no_results'] = 'দুঃখিত, কোনো মিল পাওয়া যায়নি';

 $txt['total_time_logged_days'] = 'দিন,';
 $txt['total_time_logged_hours'] = 'ঘন্টা এবং';
 $txt['total_time_logged_minutes'] = 'মিনিট';
 $txt['total_time_logged_d'] = 'd';
 $txt['total_time_logged_h'] = 'h';
 $txt['total_time_logged_m'] = 'm';

 $txt['approve_members_waiting'] = 'সদস্যদের অনুমোদন';

 $txt['activate_code'] = 'আপনার অ্যাক্টিভেশন কোড হল';

 $txt['find_members'] = 'সদস্যদের খুঁজুন';
 $txt['find_username'] = 'নাম, ব্যবহারকারীর নাম, বা ইমেল ঠিকানা';
 $txt['find_buddies'] = 'শুধু বন্ধুদের দেখান?';
 $txt['find_wildcards'] = 'অনুমোদিত ওয়াইল্ডকার্ড: *, ?';
 $txt['find_no_results'] = 'কোন ফলাফল পাওয়া যায়নি';
 $txt['find_results'] = 'ফলাফল';
 $txt['find_close'] = 'বন্ধ';

 $txt['unread_since_visit'] = 'শেষ দেখার পর থেকে অপঠিত পোস্ট দেখান।';
 $txt['show_unread_replies'] = 'আপনার পোস্টে নতুন উত্তর দেখান।';

 $txt['change_color'] = 'রঙ পরিবর্তন করুন';

 $txt['quickmod_delete_selected'] = 'নির্বাচিত সরান';
 $txt['quickmod_split_selected'] = 'বিভক্ত নির্বাচিত';

 $txt['show_personal_messages_heading'] = 'নতুন বার্তা';
 $txt['show_personal_messages'] = 'আপনার ইনবক্সে <strong>%1$s</strong> অপঠিত ব্যক্তিগত বার্তা রয়েছে।<br><br><a href="%2$s">আপনার ইনবক্সে যান।  </a>';

 $txt['help_popup'] = 'একটু হারিয়েছেন?  আমাকে ব্যাখ্যা করতে দিন:';

 $txt['previous_next_back'] = 'আগের বিষয়';
 $txt['previous_next_forward'] = 'পরবর্তী বিষয়';

 $txt['mark_unread'] = 'অপঠিত চিহ্নিত করুন';

 $txt['ssi_not_direct'] = 'অনুগ্রহ করে সরাসরি URL দ্বারা SSI.php অ্যাক্সেস করবেন না;  আপনি পাথ (%1$s) ব্যবহার করতে বা যোগ করতে চাইতে পারেন ?ssi_function=something.';
 $txt['ssi_session_broken'] = 'SSI.php একটি সেশন লোড করতে অক্ষম!  এটি লগআউট এবং অন্যান্য ফাংশনগুলির সাথে সমস্যা সৃষ্টি করতে পারে - অনুগ্রহ করে নিশ্চিত করুন যে আপনার সমস্ত স্ক্রিপ্টে *অন্য কিছু* আগে SSI.php অন্তর্ভুক্ত করা হয়েছে!';
 
 // এখানে যেকোনো একক উদ্ধৃতি দুবার এড়িয়ে যান.. 'it\'s' -> 'it\\\'s'।
 $txt['preview_title'] = 'প্রিভিউ পোস্ট';
 $txt['preview_fetch'] = 'প্রিভিউ আনা হচ্ছে...';
 $txt['preview_new'] = 'নতুন বার্তা';
 $txt['pm_error_while_submitting'] = 'এই ব্যক্তিগত বার্তা পাঠানোর সময় নিম্নলিখিত ত্রুটি বা ত্রুটি ঘটেছে:';
 $txt['error_while_submitting'] = 'বার্তাটিতে নিম্নলিখিত ত্রুটি বা ত্রুটি রয়েছে যা চালিয়ে যাওয়ার আগে অবশ্যই সংশোধন করা উচিত:';
 $txt['error_old_topic'] = 'সতর্কতা: এই বিষয়টি অন্তত %1$d দিন পোস্ট করা হয়নি।<br>যদি না আপনি নিশ্চিত হন যে আপনি উত্তর দিতে চান, অনুগ্রহ করে একটি নতুন বিষয় শুরু করার কথা বিবেচনা করুন।';

 $txt['split_selected_posts'] = 'নির্বাচিত পোস্ট';
 $txt['split_selected_posts_desc'] = 'নিচের পোস্টগুলি বিভক্ত হওয়ার পরে একটি নতুন বিষয় তৈরি করবে।';
 $txt['split_reset_selection'] = 'রিসেট নির্বাচন';

 $txt['modify_cancel'] = 'বাতিল';
 $txt['modify_cancel_all'] = 'সব বাতিল করুন';
 $txt['mark_read_short'] = 'মার্ক রিড';

 $txt['alerts'] = 'সতর্কতা';

 $txt['pm_short'] = 'আমার বার্তা';
 $txt['pm_menu_read'] = 'আপনার বার্তা পড়ুন';
 $txt['pm_menu_send'] = 'একটি বার্তা পাঠান';

 $txt['unapproved_posts'] = 'অনুমোদিত পোস্ট (বিষয়: %1$d, পোস্ট: %2$d)';

 $txt['ajax_in_progress'] = 'লোড হচ্ছে...';

 $txt['mod_reports_waiting'] = 'প্রতিবেদিত পোস্ট';

 $txt['view_unread_category'] = 'অপঠিত পোস্ট';
 $txt['new_posts_in_category'] = '%1$s-এ নতুন পোস্ট দেখতে ক্লিক করুন';
 $txt['verification'] = 'যাচাই';
 $txt['visual_verification_hidden'] = 'দয়া করে এই বাক্সটি খালি রাখুন';
 $txt['visual_verification_description'] = 'ছবিতে দেখানো অক্ষর টাইপ করুন';
 $txt['visual_verification_sound'] = 'অক্ষরগুলি শুনুন';
 $txt['visual_verification_request_new'] = 'অন্য একটি ছবির অনুরোধ করুন';

 // সাব মেনু লেবেল
 $txt['summary'] = 'সারাংশ';
 $txt['account'] = 'অ্যাকাউন্ট সেটিংস';
 $txt['theme'] = 'লুক অ্যান্ড লেআউট';
 $txt['forumprofile'] = 'ফোরাম প্রোফাইল';
 $txt['activate_changed_email_title'] = 'ইমেল ঠিকানা পরিবর্তন করা হয়েছে';
 $txt['activate_changed_email_desc'] = 'আপনি আপনার ইমেল ঠিকানা পরিবর্তন করেছেন।  এই ঠিকানাটি যাচাই করার জন্য আপনি একটি ইমেল পাবেন।  আপনার অ্যাকাউন্ট পুনরায় সক্রিয় করতে সেই ইমেলের লিঙ্কটিতে ক্লিক করুন।';
 $txt['modSettings_title'] = 'বৈশিষ্ট্য এবং বিকল্প';
 $txt['package'] = 'প্যাকেজ ম্যানেজার';
 $txt['errorlog'] = 'ত্রুটি লগ';
 $txt['edit_permissions'] = 'অনুমতি';
 $txt['mc_unapproved_attachments'] = 'অনুমোদিত সংযুক্তি';
 $txt['mc_unapproved_poststopics'] = 'অনুমোদিত পোস্ট এবং বিষয়';
 $txt['mc_reported_posts'] = 'প্রতিবেদিত পোস্ট';
 $txt['mc_reported_members'] = 'প্রতিবেদিত সদস্য';
 $txt['modlog_view'] = 'মডারেশন লগ';
 $txt['calendar_menu'] = 'ক্যালেন্ডার দেখুন';
 
 // @todo ইমেল স্ট্রিং পাঠান - সরানো উচিত?
 $txt['send_email'] = 'ইমেল পাঠান';

 $txt['ignoring_user'] = 'আপনি এই ব্যবহারকারীকে উপেক্ষা করছেন।';
 $txt['show_ignore_user_post'] = 'আমাকে পোস্টটি দেখাও।';

 $txt['স্পাইডার'] = 'মাকড়সা';
 $txt['spiders'] = 'মাকড়সা';

 $txt['downloads'] = 'ডাউনলোড';
 $txt['filesize'] = 'ফাইলসাইজ';

 // বিষয় পুনরুদ্ধার করুন
 $txt['restore_topic'] = 'বিষয় পুনরুদ্ধার করুন';
 $txt['restore_message'] = 'পুনরুদ্ধার করুন';
 $txt['quick_mod_restore'] = 'নির্বাচিত পুনরুদ্ধার করুন';

 // সম্পাদক প্রম্পট।
 $txt['prompt_text_email'] = 'অনুগ্রহ করে ইমেল ঠিকানা লিখুন।';
 $txt['prompt_text_ftp'] = 'অনুগ্রহ করে FTP ঠিকানা লিখুন।';
 $txt['prompt_text_url'] = 'আপনি যে URLটিতে লিঙ্ক করতে চান দয়া করে সেটি লিখুন।';
 $txt['prompt_text_img'] = 'ছবির অবস্থান লিখুন';

 // এখানে যেকোনো একক উদ্ধৃতি দুবার এড়িয়ে যান.. 'it\'s' -> 'it\\\'s'।
 $txt['autosuggest_delete_item'] = 'আইটেম মুছুন';

 // ডিবাগ সম্পর্কিত - যখন $db_show_debug সত্য হয়।
 $txt['debug_templates'] = 'টেমপ্লেট:';
 $txt['debug_subtemplates'] = 'সাব টেমপ্লেট:';
 $txt['debug_language_files'] = 'ভাষা ফাইল:';
 $txt['debug_stylesheets'] = 'স্টাইল শীট:';
 $txt['debug_files_included'] = 'ফাইল অন্তর্ভুক্ত:';
 $txt['debug_memory_use'] = 'ব্যবহৃত মেমরি:';
 $txt['debug_kb'] = 'KB';
 $txt['debug_show'] = 'শো';
 $txt['debug_cache_hits'] = 'ক্যাশে হিট:';
 $txt['debug_cache_misses'] = 'ক্যাশে মিস:';
 $txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s বাইট';
 $txt['debug_cache_seconds_bytes_total'] = '%2$s বাইটের জন্য %1$ss';
 $txt['debug_queries_used'] = 'ব্যবহৃত প্রশ্ন: %1$d.';
 $txt['debug_queries_used_and_warnings'] = 'ব্যবহৃত প্রশ্ন: %1$d, %2$d সতর্কবার্তা।';
 $txt['debug_query_in_line'] = '<em>%1$s</em> লাইনে <em>%2$s</em>, ';
 $txt['debug_query_which_took'] = 'যা %1$s সেকেন্ড সময় নিয়েছে।';
 $txt['debug_query_which_took_at'] = 'যা অনুরোধে %2$s এ %1$s সেকেন্ড সময় নিয়েছে।';
 $txt['debug_show_queries'] = '[কোয়েরি দেখান]';
 $txt['debug_hide_queries'] = '[কোয়েরি লুকান]';
 $txt['debug_tokens'] = 'টোকেন:';
 $txt['debug_browser'] = 'ব্রাউজার আইডি:';
 $txt['debug_hooks'] = 'হুক বলা হয়:';
 $txt['debug_instances'] = 'ইনস্ট্যান্স তৈরি হয়েছে: ';
 $txt['are_sure_mark_read'] = 'আপনি কি নিশ্চিত যে আপনি বার্তাগুলিকে পঠিত হিসাবে চিহ্নিত করতে চান?';

 // ইনলাইন সংযুক্তি বার্তা।
 $txt['attachments_not_enable'] = 'সংযুক্তি নিষ্ক্রিয়';
 $txt['attachments_no_data_loaded'] = 'একটি বৈধ সংযুক্তি আইডি নয়।';
 $txt['attachments_not_allowed_to_see'] = 'আপনি এই সংযুক্তিটি দেখতে পারবেন না।';
 $txt['attachments_no_msg_associated'] = 'এই সংযুক্তির সাথে কোনো বার্তা যুক্ত নেই।';
 $txt['attachments_unapproved'] = 'সংযুক্তি অনুমোদনের অপেক্ষায় আছে।';
 
 // অ্যাক্সেসযোগ্যতা
 $txt['hide_category'] = 'বিভাগ লুকান';
 $txt['show_category'] = 'বিভাগ দেখান';
 $txt['hide_infocenter'] = 'তথ্য কেন্দ্র লুকান';
 $txt['show_infocenter'] = 'তথ্য কেন্দ্র দেখান';

 // বিজ্ঞপ্তি পোস্ট নিয়ন্ত্রণ
 $txt['notify_topic_0'] = 'অনুসরণ করছে না';
 $txt['notify_topic_1'] = 'কোনও সতর্কতা বা ইমেল নেই';
 $txt['notify_topic_2'] = 'সতর্কতা পান';
 $txt['notify_topic_3'] = 'ইমেল এবং সতর্কতা গ্রহণ করুন';
 $txt['notify_topic_0_desc'] = 'আপনি এই বিষয়ের জন্য কোনো ইমেল বা সতর্কতা পাবেন না এবং এটি আপনার অপঠিত উত্তর এবং বিষয় তালিকায়ও দেখাবে না।  আপনি এখনও এই বিষয়ের জন্য @উল্লেখ পাবেন৷';
 $txt['notify_topic_1_desc'] = 'আপনি কোনো ইমেল বা সতর্কতা পাবেন না কিন্তু শুধুমাত্র অন্য সদস্যদের দ্বারা @উল্লেখ পাবেন।';
 $txt['notify_topic_2_desc'] = 'আপনি এই বিষয়ের জন্য সতর্কতা পাবেন।';
 $txt['notify_topic_3_desc'] = 'আপনি এই বিষয়ের জন্য সতর্কতা এবং ই-মেইল উভয়ই পাবেন।';
 $txt['notify_board_1'] = 'কোনও সতর্কতা বা ইমেল নেই';
 $txt['notify_board_2'] = 'সতর্কতা পান';
 $txt['notify_board_3'] = 'ইমেল এবং সতর্কতা গ্রহণ করুন';
 $txt['notify_board_1_desc'] = 'আপনি নতুন বিষয়ের জন্য কোনো ইমেল বা সতর্কতা পাবেন না';
 $txt['notify_board_2_desc'] = 'আপনি এই বোর্ডের জন্য সতর্কতা পাবেন।';
 $txt['notify_board_3_desc'] = 'আপনি এই বোর্ডের জন্য সতর্কতা এবং ই-মেইল উভয়ই পাবেন।';

 $txt['notify_board_prompt'] = 'যখন কেউ এই বোর্ডে একটি নতুন বিষয় পোস্ট করে আপনি কি একটি বিজ্ঞপ্তি ইমেল চান?';
 $txt['notify_board_subscribed'] = '%1$s এই বোর্ডের জন্য নতুন বিষয় বিজ্ঞপ্তিতে সদস্যতা নিয়েছে।';
 $txt['notify_board_unsubscribed'] = '%1$s এই বোর্ডের জন্য নতুন বিষয় বিজ্ঞপ্তি থেকে সদস্যতা ত্যাগ করা হয়েছে।';

 $txt['notify_topic_prompt'] = 'কেউ এই বিষয়ে উত্তর দিলে আপনি কি একটি বিজ্ঞপ্তি ইমেল চান?';
 $txt['notify_topic_subscribed'] = '%1$s এই বিষয়ের জন্য নতুন উত্তর বিজ্ঞপ্তির সদস্যতা নেওয়া হয়েছে।';
 $txt['notify_topic_unsubscribed'] = '%1$s এই বিষয়ের জন্য নতুন উত্তর বিজ্ঞপ্তি থেকে সদস্যতা ত্যাগ করা হয়েছে।';

 $txt['notify_announcements_prompt'] = 'আপনি কি ইমেলের মাধ্যমে ফোরাম নিউজলেটার, ঘোষণা এবং গুরুত্বপূর্ণ বিজ্ঞপ্তি পেতে চান?';
 $txt['notify_announcements_subscribed'] = '%1$s ফোরাম নিউজলেটার, ঘোষণা এবং গুরুত্বপূর্ণ বিজ্ঞপ্তিগুলিতে সদস্যতা নেওয়া হয়েছে।';
 $txt['notify_announcements_unsubscribed'] = '%1$s ফোরাম নিউজলেটার, ঘোষণা এবং গুরুত্বপূর্ণ বিজ্ঞপ্তি থেকে সদস্যতা ত্যাগ করা হয়েছে।';

 $txt['unsubscribe_announcements_plain'] = 'ফোরাম নিউজলেটার, ঘোষণা এবং গুরুত্বপূর্ণ বিজ্ঞপ্তিগুলি থেকে সদস্যতা ত্যাগ করতে, এই লিঙ্কটি অনুসরণ করুন: %1$s';
 $txt['unsubscribe_announcements_html'] = '<span style="font-size:small"><a href="%1$s">আনসাবস্ক্রাইব করুন</a> ফোরাম নিউজলেটার, ঘোষণা এবং গুরুত্বপূর্ণ বিজ্ঞপ্তিগুলি থেকে৷</span>  ';
 $txt['unsubscribe_announcements_manual'] = 'ফোরাম নিউজলেটার, ঘোষণা এবং গুরুত্বপূর্ণ বিজ্ঞপ্তিগুলি থেকে সদস্যতা ত্যাগ করতে, আপনার অনুরোধের সাথে %1$s এ আমাদের সাথে যোগাযোগ করুন।';
 
 // মোবাইল অ্যাকশন
 $txt['mobile_action'] = 'ব্যবহারকারীর কর্ম';
 $txt['mobile_moderation'] = 'মডারেশন';
 $txt['mobile_user_menu'] = 'প্রধান মেনু';
 $txt['mobile_generic_menu'] = '%1$s মেনু';

 // একটি বাক্যে তালিকার বিন্যাস (যেমন "এলিস, বব, এবং চার্লি")
 // উদাহরণ:
 // $txt['sentence_list_format'][2] দুটি আইটেম সহ একটি তালিকার জন্য একটি বিন্যাস নির্দিষ্ট করে
 // $txt['sentence_list_format']['n'] ডিফল্ট ফর্ম্যাট নির্দিষ্ট করে
 // স্থানধারকদের উপর নোট:
 // {1} = তালিকার প্রথম আইটেম, {2} = দ্বিতীয় আইটেম, ইত্যাদি।
 // {-1} = তালিকার শেষ আইটেম, {-2} = দ্বিতীয় শেষ আইটেম, ইত্যাদি।
 // {series} = তালিকার বাকি আইটেমগুলির সংযুক্ত স্ট্রিং
 $txt['sentence_list_format'][1] = '{1}';
 $txt['sentence_list_format'][2] = '{1} এবং {-1}';
 $txt['sentence_list_format'][3] = '{সিরিজ}, এবং {-1}';
 $txt['sentence_list_format'][4] = '{সিরিজ}, এবং {-1}';
 $txt['sentence_list_format'][5] = '{সিরিজ}, এবং {-1}';
 $txt['sentence_list_format']['n'] = '{সিরিজ}, এবং {-1}';
 // বিভাজক একটি বাক্যে তালিকা তৈরি করতে ব্যবহৃত হয়
 $txt['sentence_list_separator'] = ', ';
 $txt['sentence_list_separator_alt'] = ';  ';

 ?>