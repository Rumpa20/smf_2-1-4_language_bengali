<?php
// Version: 2.1.3; Admin

global $settings, $scripturl;

$txt['settings_saved'] = 'সেটিংস সফলভাবে সংরক্ষিত হয়েছে';
$txt['settings_not_saved'] = 'আপনার পরিবর্তনগুলি সংরক্ষিত হয়নি কারণ: %1$s';

$txt['admin_boards'] = 'বোর্ড এবং বিভাগ';
$txt['admin_users'] = 'সদস্য';
$txt['admin_newsletters'] = 'নিউজলেটার';
$txt['admin_edit_news'] = 'সংবাদ';
$txt['admin_groups'] = 'সদস্যগ্রুপ';
$txt['admin_members'] = 'সদস্য পরিচালনা করুন';
$txt['admin_members_list'] = 'নীচে আপনার ফোরামে বর্তমানে নিবন্ধিত সমস্ত সদস্যের একটি তালিকা রয়েছে।';
$txt['admin_next'] = 'পরবর্তী';
$txt['admin_censored_words'] = 'সেন্সর করা শব্দ';
$txt['admin_censored_where'] = 'বাম দিকে সেন্সর করা শব্দটি লিখুন এবং ডান দিকে এটি কী পরিবর্তন করতে হবে তা লিখুন।';
$txt['admin_censored_desc'] = 'ফোরামের পাবলিক প্রকৃতির কারণে কিছু শব্দ থাকতে পারে যা আপনি আপনার ফোরামের ব্যবহারকারীদের দ্বারা পোস্ট করা নিষিদ্ধ করতে চান। আপনি নীচে যে কোনও শব্দ লিখতে পারেন যা আপনি সদস্যদের দ্বারা ব্যবহৃত হলে সেন্সর করতে চান।<br>একটি বাক্স পরিষ্কার করুন যাতে সেই শব্দটি সেন্সর থেকে সরানো হয়।';
$txt['admin_reserved_names'] = 'সংরক্ষিত নাম';
$txt['admin_modifications'] = 'সংশোধন সেটিংস';
$txt['admin_server_settings'] = 'সার্ভার সেটিংস';
$txt['admin_reserved_set'] = 'সংরক্ষিত নাম নির্ধারণ করুন';
$txt['admin_reserved_line'] = 'প্রতি লাইনে একটি সংরক্ষিত শব্দ।';
$txt['admin_basic_settings'] = 'এই পৃষ্ঠা আপনাকে আপনার ফোরামের মৌলিক সেটিংস পরিবর্তন করতে দেয়। এই সেটিংসগুলির সাথে খুব সাবধান থাকুন, কারণ এগুলি ফোরামকে অকার্যকর করতে পারে।';
$txt['admin_maintain'] = 'রক্ষণাবেক্ষণ মোড সক্ষম করুন';
$txt['admin_title'] = 'ফোরামের শিরোনাম';
$txt['cookie_name'] = 'কুকি নাম';
$txt['admin_webmaster_email'] = 'ওয়েবমাস্টার ইমেইল ঠিকানা';
$txt['cachedir'] = 'ক্যাশ ডিরেক্টরি';
$txt['admin_news'] = 'সংবাদ সক্ষম করুন';
$txt['admin_manage_members'] = 'সদস্য';
$txt['admin_main'] = 'মূল';
$txt['admin_config'] = 'কনফিগারেশন';
$txt['admin_version_check'] = 'বিস্তারিত সংস্করণ পরীক্ষা';
$txt['admin_smffile'] = 'SMF ফাইল';
$txt['admin_smfpackage'] = 'SMF প্যাকেজ';
$txt['admin_logoff'] = 'অ্যাডমিন সেশন শেষ করুন';
$txt['admin_maintenance'] = 'রক্ষণাবেক্ষণ';
$txt['admin_credits'] = 'ক্রেডিট';
$txt['admin_agreement'] = 'নতুন সদস্যদের নিবন্ধন চুক্তি গ্রহণ করতে হবে';
$txt['admin_agreement_minor_edit'] = 'এটি একটি ছোট সম্পাদনা';
$txt['reset_agreement_desc'] = 'এটি সমস্ত সদস্যকে ফোরাম ব্যবহার চালিয়ে যেতে নিবন্ধন চুক্তিটি পুনরায় পড়তে এবং গ্রহণ করতে বাধ্য করবে।';
$txt['admin_privacy_policy'] = 'নতুন সদস্যদের গোপনীয়তা নীতি গ্রহণ করতে হবে';
$txt['reset_privacy_policy_desc'] = 'এটি সমস্ত সদস্যকে ফোরাম ব্যবহার চালিয়ে যেতে গোপনীয়তা নীতিটি পুনরায় পড়তে এবং গ্রহণ করতে বাধ্য করবে।';
$txt['admin_agreement_info'] = 'শেষ আপডেট: %1$s।';
$txt['admin_agreement_default'] = 'ডিফল্ট';
$txt['admin_agreement_select_language'] = 'সম্পাদনার জন্য ভাষা';
$txt['admin_agreement_select_language_change'] = 'পরিবর্তন করুন';
$txt['admin_agreement_not_saved'] = 'চুক্তির পরিবর্তনগুলি সংরক্ষিত হয়নি। সম্ভবত ফাইলের অনুমতি সঠিকভাবে সেট করা হয়নি।';
$txt['admin_delete_members'] = 'নির্বাচিত সদস্য মুছে ফেলুন';
$txt['admin_repair'] = 'সমস্ত বোর্ড এবং বিষয় মেরামত করুন';
$txt['admin_main_welcome'] = 'এটি আপনার &quot;%1$s&quot;। এখান থেকে, আপনি সেটিংস সম্পাদনা করতে, আপনার ফোরাম রক্ষণাবেক্ষণ করতে, লগ দেখার, প্যাকেজ ইনস্টল করতে, থিম পরিচালনা করতে এবং আরও অনেক কিছু করতে পারেন।<br><br>যদি আপনার কোনও সমস্যা হয়, তবে দয়া করে &quot;সমর্থন এবং ক্রেডিট&quot; পৃষ্ঠাটি দেখুন। যদি সেখানে তথ্য আপনার সাহায্য না করে, তাহলে সমস্যা সমাধানের জন্য <a href="https://www.simplemachines.org/community/index.php" target="_blank" rel="noopener">আমাদের সাহায্যের জন্য দেখুন</a>।<br>আপনার প্রশ্ন বা সমস্যার উত্তর খুঁজে পেতে আপনি সম্পর্কিত কার্যকারিতার জন্য আরও তথ্যের জন্য <span class="main_icons help" title="%3$s"></span> প্রতীকগুলিতে ক্লিক করতে পারেন।';
$txt['admin_news_desc'] = 'দয়া করে প্রতি বাক্সে একটি সংবাদ আইটেম রাখুন। <abbr title="বুলেটিন বোর্ড কোড">BBC</abbr> <span title="কারণ সবাই বন্ধনীগুলি পছন্দ করে!">ট্যাগগুলি</span>, যেমন <span class="monospace">[b]</span>, <span class="monospace">[i]</span> এবং <span class="monospace">[u]</span>, আপনার সংবাদে অনুমোদিত, সেইসাথে স্মাইলি। একটি সংবাদ আইটেমের টেক্সট বাক্স পরিষ্কার করুন এটি মুছতে।';
$txt['administrators'] = 'ফোরাম প্রশাসক';
$txt['admin_reserved_desc'] = 'সংরক্ষিত নামগুলি সদস্যদের নির্দিষ্ট ব্যবহারকারীর নাম নিবন্ধন করতে বা তাদের প্রদর্শিত নামগুলিতে এই শব্দগুলি ব্যবহার করতে বাধা দেবে। জমা দেওয়ার আগে নীচ থেকে আপনি যে বিকল্পগুলি ব্যবহার করতে চান সেগুলি নির্বাচন করুন।';
$txt['admin_match_whole'] = 'শুধুমাত্র সম্পূর্ণ নাম মেলান। যদি অচেক করা হয়, তবে নামগুলির মধ্যে অনুসন্ধান করুন।';
$txt['admin_match_case'] = 'কেস মেলান। যদি অচেক করা হয়, তবে অনুসন্ধান কেস অ-সংবেদনশীল হবে।';
$txt['admin_check_user'] = 'ব্যবহারকারীর নাম পরীক্ষা করুন।';
$txt['admin_check_display'] = 'প্রদর্শন নাম পরীক্ষা করুন।';
$txt['admin_fader_delay'] = 'সংবাদ ফেডারের জন্য আইটেমগুলির মধ্যে ফেডিং বিলম্ব, মিলিসেকেন্ডে';
$txt['additional_options_collapsable'] = 'সংশ্লিষ্ট অতিরিক্ত পোস্ট অপশনগুলিকে সংকুচিতযোগ্য সক্ষম করুন';
$txt['guest_post_no_email'] = 'অতিথিদের পোস্টের জন্য ইমেইল ক্ষেত্র দেখান না';
$txt['zero_for_no_limit'] = '(সীমা নেই 0)';
$txt['zero_to_disable'] = '(অক্ষম করতে 0 এ সেট করুন।)';
$txt['dont_show_attach_under_post'] = 'যদি তারা ইতিমধ্যেই পোস্টে এম্বেড করা থাকে তবে পোস্টের নিচে সংযুক্তি দেখান না।';
$txt['dont_show_attach_under_post_sub'] = 'যদি আপনি চান যে সংযুক্তিগুলি দুইবার প্রদর্শিত না হয় তবে এটি সক্ষম করুন। পোস্টে এম্বেড করা সংযুক্তিগুলি এখনও সংযুক্তি সীমার দিকে গণনা করা হয় এবং এখনও সাধারণ সংযুক্তির মতো আচরণ করা যেতে পারে।';

$txt['admin_backup_fail'] = 'Settings.php এর ব্যাকআপ তৈরি করতে ব্যর্থ হয়েছে - নিশ্চিত করুন যে Settings_bak.php বিদ্যমান এবং লিখনযোগ্য।';
$txt['registration_agreement'] = 'নিবন্ধন চুক্তি';
$txt['registration_agreement_desc'] = 'এই চুক্তিটি তখন দেখানো হয় যখন একজন ব্যবহারকারী এই ফোরামে একটি অ্যাকাউন্ট নিবন্ধন করে এবং এটি গ্রহণ করতে হবে যাতে ব্যবহারকারীরা নিবন্ধন চালিয়ে যেতে পারে।';
$txt['privacy_policy'] = 'গোপনীয়তা নীতি';
$txt['privacy_policy_desc'] = 'এই গোপনীয়তা নীতি আপনার ব্যবহারকারীদের কাছে আপনার ব্যক্তিগত ডেটা কীভাবে ব্যবহার করবেন তা নিয়ে আপনার প্রতিশ্রুতিগুলি বর্ণনা করে। এটি তখন দেখানো হয় যখন একজন ব্যবহারকারী এই ফোরামে একটি অ্যাকাউন্ট নিবন্ধন করে এবং এটি গ্রহণ করতে হবে যাতে ব্যবহারকারী নিবন্ধন চালিয়ে যেতে পারে।';
$txt['errors_list'] = 'ফোরামের ত্রুটির তালিকা';
$txt['errors_found'] = 'নিচে উল্লেখিত ত্রুটিগুলি আপনার ফোরামকে বিঘ্নিত করছে';
$txt['errors_fix'] = 'আপনি কি এই ত্রুটিগুলি মেরামত করার চেষ্টা করতে চান?';
$txt['errors_do_recount'] = 'সমস্ত ত্রুটি মেরামত করা হয়েছে এবং একটি উদ্ধার এলাকা তৈরি করা হয়েছে। কিছু মূল পরিসংখ্যান পুনর্গণনা করতে নিচের বোতামে ক্লিক করুন।';
$txt['errors_recount_now'] = 'পরিসংখ্যান পুনর্গণনা করুন';
$txt['errors_fixing'] = 'ফোরামের ত্রুটি মেরামত করা হচ্ছে';
$txt['errors_fixed'] = 'সমস্ত ত্রুটি মেরামত হয়েছে। তাদের সাথে কী করতে হবে তা সিদ্ধান্ত নিতে কোনও বিভাগ, বোর্ড, বা বিষয় তৈরি করা হয়েছে কিনা তা পরীক্ষা করুন।';
$txt['attachments_avatars'] = 'সংযুক্তি এবং অ্যাভাটার';
$txt['attachments_desc'] = 'এখান থেকে আপনি আপনার সিস্টেমে সংযুক্ত ফাইলগুলির প্রশাসন করতে পারেন। আপনি আপনার সিস্টেম থেকে আকার এবং তারিখ অনুযায়ী সংযুক্তি মুছে ফেলতে পারেন। সংযুক্তির পরিসংখ্যানও নীচে প্রদর্শিত হয়।';
$txt['attachment_stats'] = 'ফাইল সংযুক্তির পরিসংখ্যান';
$txt['attachment_integrity_check'] = 'সংযুক্তির অখণ্ডতা পরীক্ষা';
$txt['attachment_integrity_check_desc'] = 'এই ফাংশনটি ডেটাবেসে তালিকাভুক্ত সংযুক্তির অখণ্ডতা এবং আকার পরীক্ষা করবে এবং প্রয়োজন হলে এটি যে ত্রুটিগুলি পায় সেগুলি মেরামত করবে।';
$txt['attachment_check_now'] = 'এখন পরীক্ষা চালান';
$txt['attachment_pruning'] = 'সংযুক্তি ছাঁটাই';
$txt['attachment_pruning_message'] = 'পোস্টে যোগ করার জন্য বার্তা';
$txt['attachment_pruning_warning'] = 'আপনি কি নিশ্চিত যে আপনি এই সংযুক্তিগুলি মুছে ফেলতে চান?\\nএটি পূর্বাবস্থায় ফিরিয়ে আনা যাবে না!';

$txt['attachment_total'] = 'মোট সংযুক্তি';
$txt['attachmentdir_size'] = 'সমস্ত সংযুক্তি ডিরেক্টরির মোট আকার';
$txt['attachmentdir_size_current'] = 'বর্তমান সংযুক্তি ডিরেক্টরির মোট আকার';
$txt['attachmentdir_files_current'] = 'বর্তমান সংযুক্তি ডিরেক্টরিতে মোট ফাইল';
$txt['attachment_space'] = 'মোট উপলব্ধ স্থান';
$txt['attachment_files'] = 'মোট অবশিষ্ট ফাইল';

$txt['attachment_log'] = 'সংযুক্তি লগ';
$txt['attachment_remove_old'] = 'পুরোনো সংযুক্তি মুছে ফেলুন';
$txt['attachment_remove_size'] = 'বড় সংযুক্তি মুছে ফেলুন';
$txt['attachment_name'] = 'সংযুক্তির নাম';
$txt['attachment_file_size'] = 'ফাইলের আকার';
$txt['attachmentdir_size_not_set'] = 'বর্তমানে কোন সর্বাধিক ডিরেক্টরি আকার সেট করা হয়নি';
$txt['attachmentdir_files_not_set'] = 'বর্তমানে কোন ডিরেক্টরি ফাইল সীমা সেট করা হয়নি';
$txt['attachment_delete_admin'] = '[প্রশাসক দ্বারা সংযুক্তি মুছে ফেলা হয়েছে]';
$txt['live'] = 'সিম্পল মেশিন থেকে সরাসরি...';
$txt['remove_all'] = 'লগ পরিষ্কার করুন';
$txt['agreement_not_writable'] = 'সতর্কতা - agreement.txt লেখার জন্য উন্মুক্ত নয়, আপনি যে কোন পরিবর্তন করবেন তা সঞ্চিত হবে না।';

$txt['version_check_desc'] = 'এটি আপনার ইনস্টলেশনের ফাইলগুলির সংস্করণগুলি এবং সর্বশেষ সংস্করণের ফাইলগুলির বিরুদ্ধে দেখায়। যদি এই ফাইলগুলির মধ্যে কোনটি পুরানো হয়, তবে আপনাকে <a href="https://www.simplemachines.org/" target="_blank" rel="noopener">www.simplemachines.org</a> থেকে সর্বশেষ সংস্করণ ডাউনলোড এবং আপগ্রেড করতে হবে।';
$txt['version_check_more'] = '(আরও বিস্তারিত)';

$txt['smf_news_cant_connect'] = 'আপনি simplemachines.org এর সর্বশেষ সংবাদ ফাইলে সংযোগ করতে অক্ষম।';

$txt['manage_calendar'] = 'ক্যালেন্ডার';
$txt['manage_search'] = 'অনুসন্ধান';

$txt['smileys_manage'] = 'স্মাইলি এবং বার্তা আইকন';
$txt['theme_admin'] = 'থিম এবং বিন্যাস';
$txt['registration_center'] = 'নিবন্ধন';

$txt['viewmembers_online'] = 'শেষ অনলাইন';
$txt['viewmembers_today'] = 'আজ';
$txt['viewmembers_day_ago'] = 'দিন আগে';
$txt['viewmembers_days_ago'] = 'দিন আগে';

$txt['display_name'] = 'প্রদর্শন নাম';
$txt['email_address'] = 'ইমেইল ঠিকানা';
$txt['ip_address'] = 'IP ঠিকানা';
$txt['member_id'] = 'ID';

$txt['unknown'] = 'অজানা';

// argument(s): HTTP_REFERER (if applicable), HTTP_USER_AGENT, ip address
$txt['security_wrong'] = 'প্রশাসন লগইন চেষ্টা!
রেফারার: %1$s
ব্যবহারকারী এজেন্ট: %2$s
আইপি: %3$s';

$txt['email_as_html'] = 'এইচটিএমএল ফরম্যাটে পাঠান। (এর মাধ্যমে আপনি ইমেইলে সাধারণ এইচটিএমএল রাখতে পারেন।)';
$txt['email_parsed_html'] = 'এই বার্তায় &lt;br&gt; এবং &amp;nbsp; যোগ করুন।';
// argument(s): $scripturl
$txt['email_variables'] = 'এই বার্তায় আপনি কিছু &quot;ভেরিয়েবল&quot; ব্যবহার করতে পারেন। আরও তথ্যের জন্য <a href="%1$s?action=helpadmin;help=email_members" onclick="return reqOverlayDiv(this.href);" class="help">এখানে</a> ক্লিক করুন।';
$txt['email_force'] = 'এটি সদস্যদের কাছে পাঠান যদিও তারা ঘোষণা গ্রহণ না করার জন্য নির্বাচন করেছে।<br><span class="alert">এটি শুধুমাত্র বিশেষ পরিস্থিতিতে ব্যবহার করা উচিত। প্রচারমূলক বা অন্যান্য অপ্রয়োজনীয় ইমেইল বার্তা পাঠাতে এটি ব্যবহার করা অনেক দেশের গোপনীয়তা এবং অ্যান্টি-স্প্যাম আইন ভঙ্গ করে।</span>';
$txt['email_as_pms'] = 'ব্যক্তিগত বার্তার মাধ্যমে এই গ্রুপগুলিতে এটি পাঠান।';
$txt['email_continue'] = 'অগ্রসর হন';
$txt['email_done'] = 'সম্পন্ন।';

$txt['warnings'] = 'সতর্কতা';
$txt['warnings_desc'] = 'এই সিস্টেমটি প্রশাসক এবং মডারেটরদের ব্যবহারকারীদের সতর্কতা দেওয়ার অনুমতি দেয়, এবং তাদের সতর্কতা স্তর বাড়ানোর সাথে সাথে স্বয়ংক্রিয়ভাবে ব্যবহারকারীর অধিকারগুলি মুছে ফেলতে পারে। এই সিস্টেমের পূর্ণ সুবিধা নিতে, &quot;পোস্ট মডারেশন&quot; সক্ষম করা উচিত।';

$txt['ban_title'] = 'ব্যান তালিকা';

$txt['ban_errors_detected'] = 'ব্যান সংরক্ষণ বা সম্পাদনা করার সময় নিম্নলিখিত ত্রুটি বা ত্রুটিগুলি ঘটেছে';
$txt['ban_description'] = 'এখানে আপনি আইপি, হোস্টনেম, ব্যবহারকারীর নাম, বা ইমেইল দ্বারা সমস্যাযুক্ত ব্যক্তিদের ব্যান করতে পারেন।';
$txt['ban_add_new'] = 'নতুন ব্যান যোগ করুন';
$txt['ban_banned_entity'] = 'ব্যান করা সত্তা';
$txt['ban_on_ip'] = 'আইপিতে ব্যান (যেমন 192.168.10-20.*)';
$txt['ban_on_hostname'] = 'হোস্টনেমে ব্যান (যেমন *.mil)';
$txt['ban_on_email'] = 'ইমেইল ঠিকানায় ব্যান (যেমন *@badsite.com)';
$txt['ban_on_username'] = 'ব্যবহারকারীর নামের উপর ব্যান';
$txt['ban_notes'] = 'নোটস';
$txt['ban_restriction'] = 'সীমাবদ্ধতা';
$txt['ban_full_ban'] = 'সম্পূর্ণ ব্যান';
$txt['ban_partial_ban'] = 'আংশিক ব্যান';
$txt['ban_cannot_post'] = 'পোস্ট করতে পারবে না';
$txt['ban_cannot_register'] = 'নিবন্ধন করতে পারবে না';
$txt['ban_cannot_login'] = 'লগইন করতে পারবে না';
$txt['ban_add'] = 'যোগ করুন';
$txt['ban_edit_list'] = 'ব্যান তালিকা';
$txt['ban_type'] = 'ব্যানের ধরন';
$txt['ban_days'] = 'দিন(গুলি)';
$txt['ban_will_expire_within'] = 'ব্যান মেয়াদ শেষ হবে';
$txt['ban_added'] = 'যোগ করা হয়েছে';
$txt['ban_expires'] = 'মেয়াদ শেষ';
$txt['ban_hits'] = 'হিটস';
$txt['ban_actions'] = 'ক্রিয়াকলাপ';
$txt['ban_expiration'] = 'মেয়াদ শেষ হওয়া';
$txt['ban_reason_desc'] = 'ব্যানের কারণ, যা ব্যান করা সদস্যকে প্রদর্শিত হবে।';
$txt['ban_notes_desc'] = 'যা অন্যান্য কর্মচারীদের সহায়তা করতে পারে এমন নোটস।';
$txt['ban_remove_selected'] = 'নির্বাচিত মুছে ফেলুন';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত ব্যানগুলি মুছে ফেলতে চান?';
$txt['ban_modify'] = 'সংশোধন করুন';
$txt['ban_name'] = 'ব্যানের নাম';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = 'ব্যান সম্পাদনা করুন';
$txt['ban_add_notes'] = '<strong>নোট</strong>: উপরের ব্যান তৈরি করার পরে, আপনি ব্যান ট্রিগার করার জন্য অতিরিক্ত এন্ট্রি যোগ করতে পারেন, যেমন আইপি ঠিকানা, হোস্টনেম এবং ইমেইল ঠিকানা।';
$txt['ban_expired'] = 'মেয়াদ শেষ / অক্ষম';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = 'কোনও সীমাবদ্ধতা নির্বাচিত হয়নি।';

$txt['ban_triggers'] = 'ট্রিগার';
$txt['ban_add_trigger'] = 'ব্যান ট্রিগার যোগ করুন';
$txt['ban_add_trigger_submit'] = 'যোগ করুন';
$txt['ban_edit_trigger'] = 'সংশোধন করুন';
$txt['ban_edit_trigger_title'] = 'ব্যান ট্রিগার সম্পাদনা করুন';
$txt['ban_edit_trigger_submit'] = 'সংশোধন করুন';
$txt['ban_remove_selected_triggers'] = 'নির্বাচিত ব্যান ট্রিগার মুছে ফেলুন';
$txt['ban_no_entries'] = 'বর্তমানে কার্যকর কোন ব্যান নেই।';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত ব্যান ট্রিগারগুলি মুছে ফেলতে চান?';
$txt['ban_trigger_browse'] = 'ব্যান ট্রিগার ব্রাউজ করুন';
$txt['ban_trigger_browse_description'] = 'এই স্ক্রীনটি সমস্ত ব্যান করা সত্তাকে আইপি ঠিকানা, হোস্টনেম, ইমেইল ঠিকানা এবং ব্যবহারকারীর নাম দ্বারা গোষ্ঠীবদ্ধ করে দেখায়।';

$txt['ban_log'] = 'ব্যান লগ';
$txt['ban_log_description'] = 'ব্যান লগে ব্যান করা ব্যবহারকারীদের (\'সম্পূর্ণ ব্যান\' এবং \'নিবন্ধন করতে পারবে না\' ব্যান শুধুমাত্র) ফোরামে প্রবেশের সমস্ত প্রচেষ্টা দেখানো হয়।';
$txt['ban_log_no_entries'] = 'বর্তমানে কোন ব্যান লগ এন্ট্রি নেই।';
$txt['ban_log_ip'] = 'আইপি';
$txt['ban_log_email'] = 'ইমেইল ঠিকানা';
$txt['ban_log_member'] = 'সদস্য';
$txt['ban_log_date'] = 'তারিখ';
$txt['ban_log_remove_all'] = 'লগ পরিষ্কার করুন';
$txt['ban_log_remove_all_confirm'] = 'আপনি কি নিশ্চিত যে আপনি সমস্ত ব্যান লগ এন্ট্রি মুছে ফেলতে চান?';
$txt['ban_log_remove_selected'] = 'নির্বাচিত মুছে ফেলুন';
$txt['ban_log_remove_selected_confirm'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত সমস্ত ব্যান লগ এন্ট্রি মুছে ফেলতে চান?';
$txt['ban_no_triggers'] = 'বর্তমানে কোন ব্যান ট্রিগার নেই।';

$txt['settings_not_writable'] = 'এই সেটিংস পরিবর্তন করা যাবে না কারণ Settings.php শুধুমাত্র পড়ার জন্য।';

$txt['maintain_title'] = 'ফোরাম রক্ষণাবেক্ষণ';
$txt['maintain_info'] = 'এই সরঞ্জামগুলি ব্যবহার করে টেবিলগুলি অপটিমাইজ করুন, ব্যাকআপ তৈরি করুন, ত্রুটি পরীক্ষা করুন এবং বোর্ডগুলি পরিষ্কার করুন।';
$txt['maintain_sub_database'] = 'ডাটাবেস';
$txt['maintain_sub_routine'] = 'রুটিন';
$txt['maintain_sub_members'] = 'সদস্য';
$txt['maintain_sub_topics'] = 'বিষয়বস্তু';
$txt['maintain_done'] = 'রক্ষণাবেক্ষণ কাজ \'%1$s\' সফলভাবে সম্পন্ন হয়েছে।';
$txt['maintain_no_errors'] = 'অভিনন্দন, কোন ত্রুটি পাওয়া যায়নি। পরীক্ষা করার জন্য ধন্যবাদ।';

$txt['maintain_tasks'] = 'নির্ধারিত কাজ';
$txt['maintain_tasks_desc'] = 'SMF দ্বারা নির্ধারিত সমস্ত কাজ পরিচালনা করুন।';
$txt['scheduled_tasks_settings'] = 'সেটিংস';
$txt['scheduled_tasks_settings_desc'] = 'নির্ধারিত কাজগুলি কীভাবে চালানো হবে তা নিয়ন্ত্রণ করার জন্য সেটিংস।';

$txt['scheduled_log'] = 'কাজ লগ';
$txt['scheduled_log_desc'] = 'এই লগে আপনার ফোরামে চালিত সমস্ত নির্ধারিত কাজ দেখানো হয়েছে।';
$txt['admin_log'] = 'প্রশাসনিক লগ';
$txt['admin_log_desc'] = 'আপনার ফোরামের প্রশাসকদের দ্বারা সম্পন্ন প্রশাসনিক কাজগুলির তালিকা।';
$txt['moderation_log'] = 'মডারেশন লগ';
$txt['moderation_log_desc'] = 'আপনার ফোরামে মডারেটরদের দ্বারা সম্পন্ন মডারেশন কার্যক্রমের তালিকা।';
$txt['spider_log_desc'] = 'আপনার ফোরামে সার্চ ইঞ্জিন স্পাইডার কার্যকলাপের সাথে সম্পর্কিত এন্ট্রিগুলি পর্যালোচনা করুন।';
$txt['log_settings_desc'] = 'আপনার ফোরামে লগিং কিভাবে কাজ করবে তা কনফিগার করার জন্য এই বিকল্পগুলি ব্যবহার করুন।';
$txt['modlog_enabled'] = 'মডারেশন লগ সক্ষম করুন';
$txt['adminlog_enabled'] = 'প্রশাসনিক লগ সক্ষম করুন';
$txt['userlog_enabled'] = 'প্রোফাইল সম্পাদনা লগ সক্ষম করুন';

$txt['mailqueue_title'] = 'মেইল';

$txt['db_error_send'] = 'ডাটাবেস সংযোগ ত্রুটির উপর ইমেইল পাঠান';
$txt['db_persist'] = 'একটি স্থায়ী সংযোগ ব্যবহার করুন';
$txt['ssi_db_user'] = 'SSI মোডে ব্যবহার করার জন্য ডাটাবেস ব্যবহারকারীর নাম';
$txt['ssi_db_passwd'] = 'SSI মোডে ব্যবহার করার জন্য ডাটাবেস পাসওয়ার্ড';

$txt['default_language'] = 'ডিফল্ট ফোরাম ভাষা';

$txt['maintenance_subject'] = 'প্রদর্শনের জন্য বিষয়';
$txt['maintenance_message'] = 'প্রদর্শনের জন্য বার্তা';

$txt['errorlog_desc'] = 'ত্রুটি লগ আপনার ফোরামের দ্বারা সম্মুখীন হওয়া প্রতিটি ত্রুটির ট্র্যাক রাখে। ডাটাবেস থেকে যেকোনো ত্রুটি মুছে ফেলতে, চেকবক্সটি মার্ক করুন এবং পৃষ্ঠার নীচে %1$s বোতামে ক্লিক করুন।';
$txt['errorlog_no_entries'] = 'বর্তমানে কোন ত্রুটি লগ এন্ট্রি নেই।';

$txt['theme_settings'] = 'থিম সেটিংস';
$txt['theme_current_settings'] = 'বর্তমান থিম';

$txt['dvc_your'] = 'আপনার সংস্করণ';
$txt['dvc_current'] = 'বর্তমান সংস্করণ';
$txt['dvc_sources'] = 'সূত্র';
$txt['dvc_default'] = 'ডিফল্ট টেম্পলেট';
$txt['dvc_templates'] = 'বর্তমান টেম্পলেট';
$txt['dvc_languages'] = 'ভাষা ফাইল';
$txt['dvc_tasks'] = 'পটভূমির কাজ';

$txt['smileys_default_set_for_theme'] = 'এই থিমের জন্য ডিফল্ট স্মাইলি সেট নির্বাচন করুন';
$txt['smileys_no_default'] = '(গ্লোবাল ডিফল্ট স্মাইলি সেট ব্যবহার করুন)';

$txt['censor_test'] = 'নিষিদ্ধ শব্দ পরীক্ষা করুন';
$txt['censor_test_save'] = 'পরীক্ষা করুন';
$txt['censor_case'] = 'নিষেধাজ্ঞার সময় কেস উপেক্ষা করুন';
$txt['censor_whole_words'] = 'শুধুমাত্র সম্পূর্ণ শব্দ পরীক্ষা করুন';

$txt['admin_confirm_password'] = '(নিশ্চিত করুন)';
$txt['admin_incorrect_password'] = 'ভুল পাসওয়ার্ড';

$txt['age'] = 'ব্যবহারকারীর বয়স';
$txt['activation_status'] = 'সক্রিয়করণের স্থিতি';
$txt['activated'] = 'সক্রিয়';
$txt['not_activated'] = 'সক্রিয় নয়';
$txt['primary'] = 'প্রাথমিক';
$txt['additional'] = 'অতিরিক্ত';
$txt['wild_cards_allowed'] = 'ওয়াইল্ডকার্ড চরিত্র * এবং ? অনুমোদিত';
$txt['search_for'] = 'খুঁজুন';
$txt['search_match'] = 'মিল';
$txt['member_part_of_these_membergroups'] = 'সদস্য এই সদস্যগ্রুপগুলোর অংশ';
$txt['membergroups'] = 'সদস্যগ্রুপ';
$txt['confirm_delete_members'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত সদস্যদের মুছে ফেলতে চান?';

$txt['support_credits_title'] = 'সমর্থন এবং ক্রেডিট';
$txt['support_title'] = 'সমর্থন তথ্য';
$txt['support_versions_current'] = 'বর্তমান SMF সংস্করণ';
$txt['support_versions_forum'] = 'ফোরামের সংস্করণ';
$txt['support_versions_db'] = '%1$s সংস্করণ';
$txt['support_versions_db_engine'] = '%1$s ইঞ্জিন';
$txt['support_versions_server'] = 'সার্ভারের সংস্করণ';
$txt['support_versions_gd'] = 'GD সংস্করণ';
$txt['support_versions_imagemagick'] = 'ImageMagick সংস্করণ';
$txt['support_versions'] = 'সংস্করণ তথ্য';
$txt['support_resources'] = 'সমর্থন সম্পদ';
$txt['support_resources_p1'] = 'আমাদের <a href="%1$s">অনলাইন ম্যানুয়াল</a> SMF এর জন্য প্রধান ডকুমেন্টেশন প্রদান করে। SMF অনলাইন ম্যানুয়ালে সমর্থন প্রশ্নের উত্তর দেওয়ার জন্য এবং <a href="%2$s">বৈশিষ্ট্যগুলি</a>, <a href="%3$s">সেটিংস</a>, <a href="%4$s">থিমগুলি</a>, <a href="%5$s">প্যাকেজগুলি</a> ইত্যাদি ব্যাখ্যা করার জন্য অনেক ডকুমেন্ট রয়েছে। অনলাইন ম্যানুয়াল SMF এর প্রতিটি ক্ষেত্রকে বিস্তারিতভাবে ডকুমেন্ট করে এবং বেশিরভাগ প্রশ্ন দ্রুত উত্তর দিতে পারে।';
$txt['support_resources_p2'] = 'যদি আপনি অনলাইন ম্যানুয়ালে আপনার প্রশ্নগুলোর উত্তর খুঁজে না পান, তবে আপনি আমাদের <a href="%1$s">সমর্থন সম্প্রদায়</a> অনুসন্ধান করতে পারেন অথবা আমাদের <a href="%2$s">ইংরেজি</a> বা আমাদের অনেক <a href="%3$s">আন্তর্জাতিক সমর্থন বোর্ড</a> এ সহায়তা চাইতে পারেন। SMF সমর্থন সম্প্রদায় <a href="%4$s">সমর্থন</a>, <a href="%5$s">কাস্টমাইজেশন</a> এবং SMF নিয়ে আলোচনা, হোস্ট খুঁজে বের করা, এবং অন্যান্য ফোরাম প্রশাসকদের সাথে প্রশাসনিক সমস্যা নিয়ে আলোচনা করার মতো অনেক অন্যান্য বিষয়ের জন্য ব্যবহার করা যেতে পারে।';

$txt['membergroups_members'] = 'নিয়মিত সদস্য';
$txt['membergroups_guests'] = 'অতিথি';
$txt['membergroups_add_group'] = 'গ্রুপ যোগ করুন';
$txt['membergroups_permissions'] = 'অনুমতিসমূহ';

$txt['permitgroups_restrict'] = 'সীমাবদ্ধ';
$txt['permitgroups_standard'] = 'মানক';
$txt['permitgroups_moderator'] = 'মডারেটর';
$txt['permitgroups_maintenance'] = 'রক্ষণাবেক্ষণ';
$txt['permitgroups_inherit'] = 'উত্তরাধিকার';

$txt['confirm_delete_attachments_all'] = 'আপনি কি নিশ্চিত যে আপনি সমস্ত সংযুক্তি মুছে ফেলতে চান?';
$txt['confirm_delete_attachments'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত সংযুক্তিগুলি মুছে ফেলতে চান?';
$txt['attachment_manager_browse_files'] = 'ফাইল ব্রাউজ করুন';
$txt['attachment_manager_repair'] = 'রক্ষণাবেক্ষণ করুন';
$txt['attachment_manager_avatars'] = 'অ্যাভাটার';
$txt['attachment_manager_attachments'] = 'সংযুক্তি';
$txt['attachment_manager_thumbs'] = 'ছোট ছবি';
$txt['attachment_manager_last_active'] = 'শেষ সক্রিয়';
$txt['attachment_manager_member'] = 'সদস্য';
$txt['attachment_manager_avatars_older'] = 'অ্যাক্টিভ না থাকা সদস্যদের অ্যাভাটার মুছে ফেলুন';
$txt['attachment_manager_total_avatars'] = 'মোট অ্যাভাটার';

$txt['attachment_manager_avatars_no_entries'] = 'বর্তমানে কোন অ্যাভাটার নেই।';
$txt['attachment_manager_attachments_no_entries'] = 'বর্তমানে কোন সংযুক্তি নেই।';
$txt['attachment_manager_thumbs_no_entries'] = 'বর্তমানে কোন ছোট ছবি নেই।';

$txt['attachment_manager_settings'] = 'সংযুক্তি সেটিংস';
$txt['attachment_manager_avatar_settings'] = 'অ্যাভাটার সেটিংস';
$txt['attachment_manager_browse'] = 'ফাইল ব্রাউজ করুন';
$txt['attachment_manager_maintenance'] = 'ফাইল রক্ষণাবেক্ষণ';
$txt['attachment_manager_save'] = 'সংরক্ষণ করুন';

$txt['attachmentEnable'] = 'সংযুক্তি মোড';
$txt['attachmentEnable_deactivate'] = 'সংযুক্তি নিষ্ক্রিয় করুন';
$txt['attachmentEnable_enable_all'] = 'সমস্ত সংযুক্তি সক্ষম করুন';
$txt['attachmentEnable_disable_new'] = 'নতুন সংযুক্তি নিষ্ক্রিয় করুন';
$txt['attachmentCheckExtensions'] = 'সংযুক্তির এক্সটেনশন পরীক্ষা করুন';
$txt['attachmentExtensions'] = 'অনুমোদিত সংযুক্তি এক্সটেনশন';
$txt['attachmentShowImages'] = 'পোস্টের নিচে ছবি হিসেবে চিত্র সংযুক্তি প্রদর্শন করুন';
$txt['attachmentUploadDir'] = 'সংযুক্তি ডিরেক্টরি';
$txt['attachmentUploadDir_multiple_configure'] = 'সংযুক্তি ডিরেক্টরিগুলি পরিচালনা করুন';
$txt['attachmentDirSizeLimit'] = 'সর্বাধিক সংযুক্তি ডিরেক্টরি স্থান';
$txt['attachmentPostLimit'] = 'প্রতি পোস্টে সর্বাধিক সংযুক্তি আকার';
$txt['attachmentSizeLimit'] = 'প্রতি সংযুক্তির সর্বাধিক আকার';
$txt['attachmentNumPerPostLimit'] = 'প্রতি পোস্টে সর্বাধিক সংযুক্তির সংখ্যা';
$txt['attachment_img_enc_warning'] = 'GD মডিউল বা IMagick বা MagickWand এক্সটেনশনগুলি বর্তমানে ইনস্টল করা নেই। চিত্র পুনঃকোডিং সম্ভব নয়।';
$txt['attachment_ini_max'] = 'php.ini দ্বারা সর্বাধিক অনুমোদিত: %1$s';
$txt['attachment_image_reencode'] = 'সম্ভাব্য বিপজ্জনক চিত্র সংযুক্তিগুলি পুনঃকোড করুন';
$txt['attachment_image_paranoid_warning'] = 'বিস্তৃত নিরাপত্তা পরীক্ষা একটি বড় সংখ্যক প্রত্যাখ্যাত সংযুক্তির ফলস্বরূপ হতে পারে।';
$txt['attachment_image_paranoid'] = 'আপলোড করা চিত্র সংযুক্তির উপর ব্যাপক নিরাপত্তা পরীক্ষা সম্পন্ন করুন';
$txt['attachmentThumbnails'] = 'পোস্টের নিচে দেখানোর সময় চিত্রের আকার পরিবর্তন করুন';
$txt['attachment_thumb_png'] = 'ছোট ছবিগুলি PNG হিসেবে সংরক্ষণ করুন';
$txt['attachment_thumb_memory'] = 'অ্যাডাপটিভ থাম্বনেইল মেমরি';
$txt['attachment_thumb_memory_note'] = 'যদি নিষ্ক্রিয় করা হয়, তবে মেমরি 128M এ সীমাবদ্ধ থাকে';
$txt['attachmentThumbWidth'] = 'ছোট ছবির সর্বাধিক প্রস্থ';
$txt['attachmentThumbHeight'] = 'ছোট ছবির সর্বাধিক উচ্চতা';
$txt['attachment_thumbnail_settings'] = 'ছোট ছবি সেটিংস';
$txt['attachment_security_settings'] = 'সংযুক্তি নিরাপত্তা সেটিংস';

$txt['attach_dir_does_not_exist'] = 'অবস্থিত নয়';
$txt['attach_dir_not_writable'] = 'লিখার উপযোগী নয়';
// argument(s): session_id, session_var, scripturl
$txt['attach_dir_files_missing'] = 'ফাইল অনুপস্থিত (<a href="%3$s?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">মেরামত করুন</a>)';
$txt['attach_dir_unused'] = 'অব্যবহৃত';
$txt['attach_dir_empty'] = 'খালি';
$txt['attach_dir_ok'] = 'ঠিক আছে';
$txt['attach_dir_basedir'] = 'বেস ডিরেক্টরি';
$txt['attach_dir_desc'] = 'নতুন ডিরেক্টরি তৈরি করুন অথবা নিচে বর্তমান ডিরেক্টরি পরিবর্তন করুন। <br>ফোরামের ডিরেক্টরি কাঠামোর মধ্যে নতুন ডিরেক্টরি তৈরি করতে, শুধু ডিরেক্টরির নাম ব্যবহার করুন। <br>একটি ডিরেক্টরি মুছে ফেলতে, পথ ইনপুট ক্ষেত্রটি খালি করুন। শুধুমাত্র খালি ডিরেক্টরি মুছে ফেলা যেতে পারে। একটি ডিরেক্টরি খালি কিনা তা দেখতে, ফাইলের সংখ্যা পাশে ব্র্যাকেটে ফাইল বা সাব-ডিরেক্টরি চেক করুন। <br>একটি ডিরেক্টরি পুনঃনামকরণ করতে, ইনপুট ক্ষেত্রটিতে এর নাম পরিবর্তন করুন। শুধুমাত্র সাব-ডিরেক্টরি ছাড়া ডিরেক্টরি পুনঃনামকরণ করা যেতে পারে।';
$txt['attach_dir_base_desc'] = 'আপনি নিচের এলাকা ব্যবহার করে বর্তমান বেস ডিরেক্টরি পরিবর্তন করতে পারেন অথবা একটি নতুন তৈরি করতে পারেন। নতুন বেস ডিরেক্টরিগুলি সংযুক্তি ডিরেক্টরি তালিকায় যোগ করা হয়। আপনি একটি বিদ্যমান ডিরেক্টরিকে বেস ডিরেক্টরি হিসেবে নির্ধারণ করতে পারেন।';
$txt['attach_dir_save_problem'] = 'ওহ, একটি সমস্যা দেখা যাচ্ছে।';
$txt['attachments_no_create'] = 'নতুন সংযুক্তি ডিরেক্টরি তৈরি করা সম্ভব নয়। দয়া করে একটি FTP ক্লায়েন্ট বা আপনার সাইটের ফাইল ম্যানেজার ব্যবহার করে এটি করুন।';
$txt['attachments_no_write'] = 'এই ডিরেক্টরি তৈরি করা হয়েছে, কিন্তু এটি লিখার উপযোগী নয়। দয়া করে একটি FTP ক্লায়েন্ট বা আপনার সাইটের ফাইল ম্যানেজার ব্যবহার করে এটি করার চেষ্টা করুন।';
$txt['attach_dir_duplicate_msg'] = 'যোগ করা সম্ভব নয়। এই ডিরেক্টরি ইতিমধ্যেই বিদ্যমান।';
$txt['attach_dir_exists_msg'] = 'স্থানান্তর করা সম্ভব নয়। সেই পথে একটি ডিরেক্টরি ইতিমধ্যেই বিদ্যমান।';
$txt['attach_dir_base_dupe_msg'] = 'যোগ করা সম্ভব নয়। এই বেস ডিরেক্টরি ইতিমধ্যেই তৈরি হয়েছে।';
$txt['attach_dir_base_no_create'] = 'তৈরি করা সম্ভব নয়। দয়া করে পথ ইনপুটটি যাচাই করুন অথবা এই ডিরেক্টরি একটি FTP ক্লায়েন্ট বা আপনার সাইটের ফাইল ম্যানেজার ব্যবহার করে তৈরি করুন এবং পুনরায় চেষ্টা করুন।';
$txt['attach_dir_no_rename'] = 'স্থানান্তর বা পুনঃনামকরণ করা সম্ভব নয়। দয়া করে নিশ্চিত করুন যে পথটি সঠিক বা এই ডিরেক্টরিতে কোন সাব-ডিরেক্টরি নেই।';
$txt['attach_dir_no_delete'] = 'এটি খালি নয় এবং মুছে ফেলা যাবে না। দয়া করে একটি FTP ক্লায়েন্ট বা আপনার সাইটের ফাইল ম্যানেজার ব্যবহার করে এটি করুন।';
$txt['attach_dir_no_remove'] = 'এখনও ফাইল ধারণ করে বা এটি একটি বেস ডিরেক্টরি এবং মুছে ফেলা যাবে না।';
$txt['attach_dir_is_current'] = 'বর্তমান ডিরেক্টরি হিসেবে নির্বাচিত থাকাকালীন এটি মুছে ফেলা সম্ভব নয়।';
$txt['attach_dir_is_current_bd'] = 'বর্তমান বেস ডিরেক্টরি হিসেবে নির্বাচিত থাকাকালীন এটি মুছে ফেলা সম্ভব নয়।';
$txt['attach_dir_invalid'] = 'অবৈধ ডিরেক্টরি';
$txt['attach_last_dir'] = 'শেষ সক্রিয় সংযুক্তি ডিরেক্টরি';
$txt['attach_current_dir'] = 'বর্তমান সংযুক্তি ডিরেক্টরি';
$txt['attach_current'] = 'বর্তমান';
$txt['attach_path_manage'] = 'সংযুক্তি পথ পরিচালনা করুন';
$txt['attach_directories'] = 'সংযুক্তি ডিরেক্টরিসমূহ';
$txt['attach_paths'] = 'সংযুক্তি ডিরেক্টরি পথসমূহ';
$txt['attach_path'] = 'পথ';
$txt['attach_current_size'] = 'আকার (কেবি)';
$txt['attach_num_files'] = 'ফাইল';
$txt['attach_dir_status'] = 'স্থিতি';
$txt['attach_add_path'] = 'পথ যোগ করুন';
$txt['attach_path_current_bad'] = 'অবৈধ বর্তমান সংযুক্তি পথ।';
$txt['attachmentDirFileLimit'] = 'প্রতি ডিরেক্টরিতে সর্বাধিক ফাইলের সংখ্যা';

$txt['attach_base_paths'] = 'বেস ডিরেক্টরি পথসমূহ';
$txt['attach_num_dirs'] = 'ডিরেক্টরি';
$txt['max_image_width'] = 'পোস্ট করা বা সংযুক্ত করা ছবির সর্বাধিক প্রদর্শন প্রস্থ';
$txt['max_image_height'] = 'পোস্ট করা বা সংযুক্ত করা ছবির সর্বাধিক প্রদর্শন উচ্চতা';

$txt['automanage_attachments'] = 'সংযুক্তি ডিরেক্টরির ব্যবস্থাপনার জন্য পদ্ধতি নির্বাচন করুন';
$txt['attachments_normal'] = '(ম্যানুয়াল) SMF ডিফল্ট আচরণ';
$txt['attachments_auto_years'] = '(অটো) বছর অনুযায়ী বিভক্ত করুন';
$txt['attachments_auto_months'] = '(অটো) বছর এবং মাস অনুযায়ী বিভক্ত করুন';
$txt['attachments_auto_days'] = '(অটো) বছর, মাস এবং দিন অনুযায়ী বিভক্ত করুন';
$txt['attachments_auto_16'] = '(অটো) 16টি এলোমেলো ডিরেক্টরি';
$txt['attachments_auto_16x16'] = '(অটো) 16টি এলোমেলো ডিরেক্টরি সহ 16টি এলোমেলো সাব-ডিরেক্টরি';
$txt['attachments_auto_space'] = '(অটো) যখন কোন ডিরেক্টরির স্থান সীমা পৌঁছে যাবে';

$txt['use_subdirectories_for_attachments'] = 'একটি বেস ডিরেক্টরির মধ্যে নতুন ডিরেক্টরি তৈরি করুন';
$txt['use_subdirectories_for_attachments_note'] = 'অন্যথায়, যে কোন নতুন ডিরেক্টরি ফোরামের প্রধান ডিরেক্টরির মধ্যে তৈরি হবে।';
$txt['basedirectory_for_attachments'] = 'সংযুক্তির জন্য একটি বেস ডিরেক্টরি সেট করুন';
$txt['basedirectory_for_attachments_current'] = 'বর্তমান বেস ডিরেক্টরি';
// argument(s): scripturl
$txt['basedirectory_for_attachments_warning'] = '<div class="smalltext">দয়া করে লক্ষ্য করুন যে ডিরেক্টরিটি ভুল। <br>(<a href="%1$s?action=admin;area=manageattachments;sa=attachpaths">সংশোধনের চেষ্টা করুন</a>)</div>';
// argument(s): scripturl
$txt['attach_current_dir_warning'] = '<div class="smalltext">এই ডিরেক্টরিতে একটি সমস্যা দেখা যাচ্ছে। <br>(<a href="%1$s?action=admin;area=manageattachments;sa=attachpaths">সংশোধনের চেষ্টা করুন</a>)</div>';

$txt['attachment_transfer'] = 'সংযুক্তি স্থানান্তর';
$txt['attachment_transfer_desc'] = 'ডিরেক্টরির মধ্যে ফাইল স্থানান্তর করুন।';
$txt['attachment_transfer_select'] = 'ডিরেক্টরি নির্বাচন করুন';
$txt['attachment_transfer_now'] = 'স্থানান্তর করুন';
$txt['attachment_transfer_from'] = 'থেকে ফাইল স্থানান্তর করুন';
$txt['attachment_transfer_auto'] = 'স্বয়ংক্রিয়ভাবে স্থান বা ফাইল সংখ্যা দ্বারা';
$txt['attachment_transfer_auto_select'] = 'বেস ডিরেক্টরি নির্বাচন করুন';
$txt['attachment_transfer_to'] = 'অথবা একটি নির্দিষ্ট ডিরেক্টরিতে।';
$txt['attachment_transfer_empty'] = 'সূত্র ডিরেক্টরি খালি করুন';
$txt['attachment_transfer_no_base'] = 'কোন বেস ডিরেক্টরি উপলব্ধ নেই।';
$txt['attachment_transfer_forum_root'] = 'ফোরামের মূল ডিরেক্টরি।';
$txt['attachment_transfer_no_room'] = 'ডিরেক্টরির আকার বা ফাইল সংখ্যা সীমা পৌঁছে গেছে।';
$txt['attachment_transfer_no_find'] = 'স্থানান্তরের জন্য কোন ফাইল পাওয়া যায়নি।';
$txt['attachments_transferred'] = '%1$d ফাইল %2$s-এ স্থানান্তরিত হয়েছে';
$txt['attachments_not_transferred'] = '%1$d ফাইল স্থানান্তরিত হয়নি।';
$txt['attachment_transfer_no_dir'] = 'অথবা সূত্র ডিরেক্টরি বা লক্ষ্য অপশনগুলির মধ্যে একটি নির্বাচন করা হয়নি।';
$txt['attachment_transfer_same_dir'] = 'আপনি উভয় সূত্র এবং লক্ষ্য হিসেবে একই ডিরেক্টরি নির্বাচন করতে পারবেন না।';
$txt['attachment_transfer_progress'] = 'দয়া করে অপেক্ষা করুন। স্থানান্তর চলমান।';

$txt['mods_cat_avatars'] = 'অ্যাভাটার';
$txt['avatar_directory'] = 'অ্যাভাটার ডিরেক্টরি';
$txt['avatar_directory_wrong'] = 'অ্যাভাটার ডিরেক্টরি বৈধ নয়। এটি আপনার ফোরামে বেশ কয়েকটি সমস্যা সৃষ্টি করবে।';
$txt['avatar_url'] = 'অ্যাভাটার URL';
$txt['avatar_max_width_external'] = 'বহিরাগত অ্যাভাটারের সর্বাধিক প্রস্থ';
$txt['avatar_max_height_external'] = 'বহিরাগত অ্যাভাটারের সর্বাধিক উচ্চতা';
$txt['avatar_action_too_large'] = 'যদি অ্যাভাটারটি খুব বড় হয়...';
$txt['option_refuse'] = 'অস্বীকার করুন';
$txt['option_css_resize'] = 'ব্যবহারকারীর ব্রাউজারে এটি পুনঃআকার করুন';
$txt['option_download_and_resize'] = 'সার্ভারে এটি ডাউনলোড এবং পুনঃআকার করুন';
$txt['avatar_max_width_upload'] = 'আপলোড করা অ্যাভাটারের সর্বাধিক প্রস্থ';
$txt['avatar_max_height_upload'] = 'আপলোড করা অ্যাভাটারের সর্বাধিক উচ্চতা';
$txt['avatar_resize_upload'] = 'অতিরিক্ত বড় অ্যাভাটার পুনঃআকার করুন';
$txt['avatar_resize_upload_note'] = '(GD মডিউল বা IMagick বা MagickWand এক্সটেনশন সহ ImageMagick প্রয়োজন)';
$txt['avatar_download_png'] = 'পুনঃআকারকৃত অ্যাভাটারের জন্য PNG ব্যবহার করুন';
$txt['avatar_img_enc_warning'] = 'GD মডিউল বা Imagick বা MagickWand এক্সটেনশন বর্তমানে ইনস্টল করা নেই। কিছু অ্যাভাটার বৈশিষ্ট্য অক্ষম।';
$txt['avatar_external'] = 'বহিরাগত অ্যাভাটার';
$txt['avatar_upload'] = 'আপলোডযোগ্য অ্যাভাটার';
$txt['avatar_server_stored'] = 'সার্ভারে সংরক্ষিত অ্যাভাটার';
$txt['avatar_server_stored_groups'] = 'সার্ভারে সংরক্ষিত অ্যাভাটার নির্বাচন করতে অনুমতি প্রাপ্ত সদস্যগ্রুপ';
$txt['avatar_upload_groups'] = 'সার্ভারে অ্যাভাটার আপলোড করতে অনুমতি প্রাপ্ত সদস্যগ্রুপ';
$txt['avatar_external_url_groups'] = 'বহিরাগত URL নির্বাচন করতে অনুমতি প্রাপ্ত সদস্যগ্রুপ';
$txt['avatar_select_permission'] = 'প্রতিটি গ্রুপের জন্য অনুমতি নির্বাচন করুন';
$txt['avatar_download_external'] = 'প্রদত্ত URL থেকে অ্যাভাটার ডাউনলোড করুন';
$txt['option_specified_dir'] = 'নির্দিষ্ট ডিরেক্টরি...';
$txt['custom_avatar_dir_wrong'] = 'আপলোড ডিরেক্টরি বৈধ নয়। এটি কাস্টম অ্যাভাটার সঠিকভাবে কাজ করতে বাধা দেবে।';
$txt['custom_avatar_dir'] = 'আপলোড ডিরেক্টরি';
$txt['custom_avatar_dir_desc'] = 'এটি একটি বৈধ এবং লিখনযোগ্য ডিরেক্টরি হওয়া উচিত, যা সার্ভারে সংরক্ষিত ডিরেক্টরির থেকে আলাদা।';
$txt['custom_avatar_url'] = 'আপলোড URL';
$txt['custom_avatar_check_empty'] = 'আপনি যে কাস্টম অ্যাভাটার ডিরেক্টরি উল্লেখ করেছেন তা খালি বা অবৈধ হতে পারে। দয়া করে নিশ্চিত করুন যে এই সেটিংস সঠিক।';
$txt['avatar_reencode'] = 'সম্ভাব্য বিপজ্জনক অ্যাভাটার পুনঃকোড করুন';
$txt['avatar_paranoid_warning'] = 'ব্যাপক নিরাপত্তা পরীক্ষা একটি বড় সংখ্যক অস্বীকৃত অ্যাভাটারে ফলস্বরূপ হতে পারে।';
$txt['avatar_paranoid'] = 'আপলোড করা অ্যাভাটারের উপর ব্যাপক নিরাপত্তা পরীক্ষা সম্পাদন করুন';
$txt['gravatar_settings'] = 'গ্রাভাটার (গ্লোবালি স্বীকৃত অ্যাভাটার)';
$txt['gravatarEnabled'] = 'ফোরামের ব্যবহারকারীদের জন্য গ্রাভাটার সক্রিয় করবেন?';
$txt['gravatarOverride'] = 'সাধারণ অ্যাভাটারের পরিবর্তে গ্রাভাটার ব্যবহার করতে বাধ্য করবেন?';
$txt['gravatarAllowExtraEmail'] = 'গ্রাভাটারের জন্য অতিরিক্ত ইমেল ঠিকানা সংরক্ষণের অনুমতি দেবেন?';
$txt['gravatarMaxRating'] = 'সর্বাধিক অনুমোদিত রেটিং?';
$txt['gravatar_maxG'] = 'G রেটেড (সাধারণত গ্রহণযোগ্য)';
$txt['gravatar_maxPG'] = 'PG রেটেড (পিতামাতার নির্দেশনা)';
$txt['gravatar_maxR'] = 'R রেটেড (সীমাবদ্ধ)';
$txt['gravatar_maxX'] = 'X রেটেড (স্পষ্ট)';
$txt['gravatarDefault'] = 'যখন একটি ইমেল ঠিকানার সাথে কোন গ্রাভাটার মেলে না তখন প্রদর্শনের জন্য ডিফল্ট ছবি';
$txt['gravatar_mm'] = 'একজন ব্যক্তির একটি সাধারণ, কার্টুন-শৈলীর সিলুয়েট আউটলাইন';
$txt['gravatar_identicon'] = 'একটি ইমেল হ্যাশের উপর ভিত্তি করে একটি জ্যামিতিক প্যাটার্ন';
$txt['gravatar_monsterid'] = 'বিভিন্ন রঙ, মুখ ইত্যাদির সাথে একটি তৈরি \'মনস্টার\'';
$txt['gravatar_wavatar'] = 'বিভিন্ন বৈশিষ্ট্য এবং পটভূমি সহ তৈরি মুখ';
$txt['gravatar_retro'] = 'অসাধারণ তৈরি, 8-বিট আর্কেড-শৈলীর পিক্সেলেটেড মুখ';
$txt['gravatar_blank'] = 'একটি স্বচ্ছ PNG ছবি';

$txt['repair_attachments'] = 'সংযুক্তিগুলি রক্ষণাবেক্ষণ';
$txt['repair_attachments_complete'] = 'রক্ষণাবেক্ষণ সম্পন্ন';
$txt['repair_attachments_complete_desc'] = 'সমস্ত নির্বাচিত ত্রুটি এখন সংশোধন করা হয়েছে';
$txt['repair_attachments_no_errors'] = 'কোন ত্রুটি পাওয়া যায়নি';
$txt['repair_attachments_error_desc'] = 'রক্ষণাবেক্ষণের সময় নিম্নলিখিত ত্রুটিগুলি পাওয়া গেছে। আপনি যে ত্রুটিগুলি ঠিক করতে চান সেগুলির পাশে চেক করুন এবং চালিয়ে যান চাপুন।';
$txt['repair_attachments_continue'] = 'চালিয়ে যান';
$txt['repair_attachments_cancel'] = 'বাতিল করুন';
$txt['attach_repair_missing_thumbnail_parent'] = '%1$d থাম্বনেইল একটি পিতামাতার অভাব রয়েছে';
$txt['attach_repair_parent_missing_thumbnail'] = '%1$d পিতামাতা থাম্বনেইল থাকার জন্য চিহ্নিত কিন্তু নেই';
$txt['attach_repair_file_missing_on_disk'] = '%1$d সংযুক্তি/অ্যাভাটার একটি এন্ট্রি রয়েছে কিন্তু ডিস্কে আর নেই';
$txt['attach_repair_file_wrong_size'] = '%1$d সংযুক্তি/অ্যাভাটার ভুল ফাইল আকার হিসেবে রিপোর্ট করা হচ্ছে';
$txt['attach_repair_file_size_of_zero'] = '%1$d সংযুক্তি/অ্যাভাটার ডিস্কে শূন্য আকার রয়েছে। (এগুলি মুছে ফেলা হবে)';
$txt['attach_repair_attachment_no_msg'] = '%1$d সংযুক্তির আর কোনও বার্তা সম্পর্কিত নেই';
$txt['attach_repair_avatar_no_member'] = '%1$d অ্যাভাটার আর কোনও সদস্যের সাথে সম্পর্কিত নেই';
$txt['attach_repair_wrong_folder'] = '%1$d সংযুক্তি ভুল ডিরেক্টরিতে রয়েছে';
$txt['attach_repair_files_without_attachment'] = '%1$d ফাইলের ডাটাবেসে একটি সম্বন্ধিত এন্ট্রি নেই। (এগুলি মুছে ফেলা হবে)';

$txt['news_title'] = 'সংবাদ এবং নিউজলেটার';
$txt['news_settings_desc'] = 'এখানে আপনি সংবাদ এবং নিউজলেটারের সাথে সম্পর্কিত সেটিংস এবং অনুমতিগুলি পরিবর্তন করতে পারেন।';
$txt['news_mailing_desc'] = 'এই মেনু থেকে আপনি সকল সদস্যকে যারা নিবন্ধিত এবং তাদের ইমেল ঠিকানা দিয়েছে তাদের কাছে বার্তা পাঠাতে পারেন। আপনি বিতরণ তালিকা সম্পাদনা করতে পারেন, অথবা সকলের কাছে বার্তা পাঠাতে পারেন। গুরুত্বপূর্ণ আপডেট/সংবাদ তথ্যের জন্য এটি উপকারী।';
$txt['news_error_no_news'] = 'কিছু লেখা হয়নি';
$txt['groups_edit_news'] = 'সংবাদ আইটেম সম্পাদনা করার অনুমতি প্রাপ্ত গোষ্ঠী';
$txt['groups_send_mail'] = 'ফোরাম নিউজলেটার পাঠানোর অনুমতি প্রাপ্ত গোষ্ঠী';
$txt['xmlnews_enable'] = 'XML/RSS সংবাদ সক্ষম করুন';
$txt['xmlnews_maxlen'] = 'সর্বাধিক বার্তার দৈর্ঘ্য';
$txt['xmlnews_maxlen_note'] = '(0 নিষ্ক্রিয় করতে, খারাপ ধারণা।)';
$txt['xmlnews_attachments'] = 'XML/RSS ফিডে সংযুক্তিগুলি অন্তর্ভুক্ত করুন';
$txt['xmlnews_attachments_note'] = 'নোট: কিছু ফিড ফরম্যাট শুধুমাত্র একটি সংযুক্তি প্রতি পোস্টে অন্তর্ভুক্ত করবে।';
$txt['editnews_clickadd'] = 'আরেকটি আইটেম যোগ করুন';
$txt['editnews_remove_selected'] = 'নির্বাচিত মুছে ফেলুন';
$txt['editnews_remove_confirm'] = 'আপনি কি নিশ্চিত যে নির্বাচিত সংবাদ আইটেমগুলি মুছে ফেলতে চান?';
$txt['censor_clickadd'] = 'আরেকটি শব্দ যোগ করুন';

$txt['layout_controls'] = 'ফোরাম';
$txt['logs'] = 'লগ';
$txt['generate_reports'] = 'রিপোর্ট তৈরি করুন';

$txt['update_available'] = 'আপডেট উপলব্ধ';
$txt['update_message'] = 'আপনি একটি পুরনো SMF সংস্করণ ব্যবহার করছেন, যা কিছু বাগ রয়েছে যা পরে সংশোধন করা হয়েছে।
	এটি সুপারিশ করা হচ্ছে যে আপনি যত দ্রুত সম্ভব আপনার ফোরামটি সর্বশেষ সংস্করণে <a href="#" id="update-link" class="bbc_link strong">আপডেট করুন</a>। এটি করতে এক মিনিট সময় লাগে!';

$txt['manageposts'] = 'পোস্ট এবং বিষয়';
$txt['manageposts_title'] = 'পোস্ট এবং বিষয় পরিচালনা করুন';
$txt['manageposts_description'] = 'এখানে আপনি বিষয় এবং পোস্টের সাথে সম্পর্কিত সমস্ত সেটিংস পরিচালনা করতে পারেন।';

$txt['manageposts_seconds'] = 'সেকেন্ড';
$txt['manageposts_minutes'] = 'মিনিট';
$txt['manageposts_characters'] = 'অক্ষর';
$txt['manageposts_days'] = 'দিন';
$txt['manageposts_posts'] = 'পোস্ট';
$txt['manageposts_topics'] = 'বিষয়';

$txt['manageposts_settings'] = 'পোস্ট সেটিংস';
$txt['manageposts_settings_description'] = 'এখানে আপনি পোস্ট এবং পোস্টিংয়ের সাথে সম্পর্কিত সমস্ত কিছু সেট করতে পারেন।';

$txt['manageposts_bbc_settings'] = 'বুলেটিন বোর্ড কোড';
$txt['manageposts_bbc_settings_description'] = 'বুলেটিন বোর্ড কোড ফোরামের বার্তাগুলিতে মার্কআপ যোগ করতে ব্যবহার করা যেতে পারে। উদাহরণস্বরূপ, \'house\' শব্দটি হাইলাইট করতে আপনি টাইপ করতে পারেন [b]house[/b]। সমস্ত বুলেটিন বোর্ড কোড ট্যাগগুলি স্কোয়ার ব্র্যাকেট (\'[\' এবং \']\') দ্বারা ঘিরে থাকে।';
$txt['manageposts_bbc_settings_title'] = 'বুলেটিন বোর্ড কোড সেটিংস';

$txt['manageposts_topic_settings'] = 'বিষয় সেটিংস';
$txt['manageposts_topic_settings_description'] = 'এখানে আপনি বিষয়গুলির সাথে সম্পর্কিত সমস্ত সেটিংস সেট করতে পারেন।';

$txt['managedrafts_settings'] = 'ড্রাফট সেটিংস';
$txt['managedrafts_settings_description'] = 'এখানে আপনি ড্রাফটের সাথে সম্পর্কিত সমস্ত সেটিংস সেট করতে পারেন।';
$txt['manage_drafts'] = 'ড্রাফট';

$txt['removeNestedQuotes'] = 'উদ্ধৃতির সময় নেস্টেড উদ্ধৃতি মুছে ফেলুন';
$txt['disable_wysiwyg'] = 'WYSIWYG সম্পাদক নিষ্ক্রিয় করুন';
$txt['max_messageLength'] = 'সর্বাধিক অনুমোদিত পোস্টের আকার';
$txt['max_messageLength_zero'] = 'সর্বাধিক সীমাহীন করতে 0।';
$txt['convert_to_mediumtext'] = 'আপনার ডাটাবেস 65535 অক্ষরের বেশি বার্তা গ্রহণের জন্য কনফিগার করা হয়নি। অনুগ্রহ করে <a href="%1$s">ডাটাবেস রক্ষণাবেক্ষণ</a> পৃষ্ঠাটি ব্যবহার করুন ডাটাবেসটি রূপান্তর করতে এবং তারপর সর্বাধিক অনুমোদিত পোস্টের আকার বৃদ্ধি করতে ফিরে আসুন।';
$txt['topicSummaryPosts'] = 'বিষয় সারাংশে প্রদর্শনের জন্য পোস্ট';
$txt['spamWaitTime'] = 'একই আইপি থেকে পোস্টগুলির মধ্যে সময়ের প্রয়োজন';
$txt['edit_wait_time'] = 'সৌজন্য সম্পাদনা অপেক্ষার সময়';
$txt['edit_disable_time'] = 'পোস্ট করার পরে সম্পাদনার জন্য সর্বাধিক সময়';
$txt['preview_characters'] = 'শেষ/প্রথম পোস্টের প্রিভিউর সর্বাধিক দৈর্ঘ্য';
$txt['preview_characters_units'] = 'অক্ষর';
$txt['quote_expand'] = 'বৃহৎ উদ্ধৃতির জন্য একটি সম্প্রসারণ লিঙ্ক যোগ করতে ন্যূনতম উদ্ধৃতি উচ্চতা';
$txt['quote_expand_pixels_units'] = 'পিক্সেল';
$txt['message_index_preview_first'] = 'পোস্ট প্রিভিউ ব্যবহার করার সময় প্রথম পোস্টের টেক্সট প্রদর্শন করুন';
$txt['message_index_preview_first_desc'] = 'শেষ পোস্টের টেক্সট প্রদর্শন করতে অচেক রাখুন';
$txt['show_user_images'] = 'বার্তা দৃশ্যে ব্যবহারকারীর অ্যাভাটার দেখান';
$txt['show_blurb'] = 'বার্তা দৃশ্যে ব্যক্তিগত টেক্সট দেখান';
$txt['hide_post_group'] = 'গ্রুপ সদস্যদের জন্য পোস্ট গ্রুপের শিরোনাম লুকান';
$txt['hide_post_group_desc'] = 'এটি সক্ষম করলে, যদি সদস্যটি একটি নন-পোস্ট ভিত্তিক গ্রুপে নিয়োগপ্রাপ্ত হয় তবে বার্তা দৃশ্যে তাদের পোস্ট গ্রুপের শিরোনাম প্রদর্শিত হবে না।';
$txt['subject_toggle'] = 'বিষয়ে শিরোনাম দেখান।';
$txt['show_profile_buttons'] = 'পোস্টের নিচে প্রোফাইল দেখার বোতাম দেখান';
$txt['show_modify'] = 'সংশোধিত পোস্টে শেষ সংশোধনের তারিখ দেখান';

$txt['enableBBC'] = 'বুলেটিন বোর্ড কোড (BBC) সক্ষম করুন';
$txt['enablePostHTML'] = 'পোস্টে <em>মৌলিক</em> HTML সক্ষম করুন';
$txt['autoLinkUrls'] = 'পোস্ট করা URL স্বয়ংক্রিয়ভাবে লিঙ্ক করুন';
$txt['disabledBBC'] = 'সক্রিয় BBC ট্যাগ';
$txt['legacyBBC'] = 'লিগ্যাসি BBC ট্যাগ';
$txt['bbcTagsToUse'] = 'সক্রিয় BBC ট্যাগ';
$txt['enabled_bbc_select'] = 'যে ট্যাগগুলি ব্যবহারের অনুমতি দেওয়া হয়েছে তা নির্বাচন করুন';
$txt['enabled_bbc_select_all'] = 'সমস্ত ট্যাগ নির্বাচন করুন';
$txt['groups_can_use'] = '%1$s ব্যবহার করার অনুমতি প্রাপ্ত সদস্যগোষ্ঠী';

$txt['enableParticipation'] = 'অংশগ্রহণ আইকন সক্ষম করুন';
$txt['oldTopicDays'] = 'উত্তরের আগে বিষয় পুরনো হিসেবে সতর্ক করার সময়';
$txt['defaultMaxTopics'] = 'বার্তা সূচীতে প্রতি পৃষ্ঠায় বিষয়ের সংখ্যা';
$txt['defaultMaxMessages'] = 'বিষয় পৃষ্ঠায় প্রতি পৃষ্ঠায় পোস্টের সংখ্যা';
$txt['disable_print_topic'] = 'প্রিন্ট বিষয়ের বৈশিষ্ট্য নিষ্ক্রিয় করুন';
$txt['enableAllMessages'] = 'সকল পোস্ট দেখানোর জন্য সর্বাধিক বিষয়ের আকার';
$txt['enableAllMessages_zero'] = '\"সকল\" কখনো না দেখানোর জন্য 0।';
$txt['disableCustomPerPage'] = 'প্রতি পৃষ্ঠায় ব্যবহারকারী সংজ্ঞায়িত বিষয়/বার্তার সংখ্যা নিষ্ক্রিয় করুন';
$txt['enablePreviousNext'] = 'পূর্ববর্তী/পরবর্তী বিষয়ের লিঙ্ক সক্ষম করুন';

$txt['not_done_title'] = 'এখনও সম্পন্ন হয়নি';
$txt['not_done_reason'] = 'আপনার সার্ভারকে অতিরিক্ত চাপ থেকে রক্ষা করার জন্য, প্রক্রিয়াটি সাময়িকভাবে স্থগিত করা হয়েছে। এটি কয়েক সেকেন্ডের মধ্যে স্বয়ংক্রিয়ভাবে চলতে থাকবে। যদি না হয়, তাহলে নিচে চালিয়ে যান ক্লিক করুন।';
$txt['not_done_continue'] = 'চালিয়ে যান';

$txt['general_settings'] = 'সাধারণ';
$txt['database_settings'] = 'ডাটাবেস';
$txt['cookies_sessions_settings'] = 'কুকি এবং সেশন';
$txt['security_settings'] = 'নিরাপত্তা';
$txt['caching_settings'] = 'ক্যাশিং';
$txt['export_settings'] = 'ডেটা রপ্তানি';
$txt['load_balancing_settings'] = 'লোড ব্যালেন্সিং';
$txt['phpinfo_settings'] = 'PHP তথ্য';
$txt['phpinfo_localsettings'] = 'স্থানীয় সেটিংস';
$txt['phpinfo_defaultsettings'] = 'ডিফল্ট সেটিংস';
$txt['phpinfo_itemsettings'] = 'সেটিংস';

$txt['language_configuration'] = 'ভাষাসমূহ';
$txt['language_description'] = 'এই বিভাগটি আপনাকে আপনার ফোরামে ইনস্টল করা ভাষাগুলি সম্পাদনা করতে এবং সিম্পল মেশিনস ওয়েবসাইট থেকে নতুন ভাষা ডাউনলোড করতে দেয়। আপনি এখানে ভাষার সাথে সম্পর্কিত সেটিংসও সম্পাদনা করতে পারেন।';
$txt['language_edit'] = 'ভাষা সম্পাদনা করুন';
$txt['language_add'] = 'ভাষা যোগ করুন';
$txt['language_settings'] = 'সেটিংস';
$txt['could_not_language_backup'] = 'এই ভাষা প্যাকটি মুছে ফেলার আগে একটি ব্যাকআপ তৈরি করা যায়নি। ফলস্বরূপ, বর্তমানে কোনও পরিবর্তন করা হয়নি (Packages/backup-এ লেখা যাবে এমন অনুমতি পরিবর্তন করুন, অথবা ব্যাকআপগুলি বন্ধ করুন - এটি সুপারিশ করা হয় না)';

$txt['advanced'] = 'উন্নত';
$txt['simple'] = 'সরল';

$txt['admin_news_newsletter_queue_done'] = 'নিউজলেটার সফলভাবে মেইল কিউতে যোগ করা হয়েছে।';
$txt['admin_news_select_recipients'] = 'দয়া করে নির্বাচন করুন কে নিউজলেটারের একটি কপি পাবে';
$txt['admin_news_select_group'] = 'সদস্যগোষ্ঠী';
$txt['admin_news_select_group_desc'] = 'এই নিউজলেটারটি পাওয়ার জন্য গোষ্ঠীগুলি নির্বাচন করুন।';
$txt['admin_news_select_members'] = 'সদস্য';
$txt['admin_news_select_members_desc'] = 'নিউজলেটার পাওয়ার জন্য অতিরিক্ত সদস্য।';
$txt['admin_news_select_excluded_members'] = 'বিমুক্ত সদস্য';
$txt['admin_news_select_excluded_members_desc'] = 'যারা নিউজলেটার পাবে না।';
$txt['admin_news_select_excluded_groups'] = 'বিমুক্ত গোষ্ঠী';
$txt['admin_news_select_excluded_groups_desc'] = 'যারা নিশ্চিতভাবে নিউজলেটার পাবে না সেগুলি নির্বাচন করুন।';
$txt['admin_news_select_email'] = 'ইমেইল ঠিকানা';
$txt['admin_news_select_email_desc'] = 'একটি সেমি-কোলন দ্বারা পৃথক করা ইমেইল ঠিকানার তালিকা যা নিউজলেটার পাবে (যেমন: ঠিকানা1; ঠিকানা2)। এটি উপরের তালিকাভুক্ত গোষ্ঠীর অতিরিক্ত।<br><span class="alert">নোট: এই ইমেইল ঠিকানাগুলিতে পাঠানো নিউজলেটার সম্পর্কিত যেকোনো অরেজিস্ট্রেশন অনুরোধ আপনি হাতে পরিচালনা করতে হবে।</span>';
$txt['admin_news_select_override_notify'] = 'বিজ্ঞপ্তি সেটিংস ওভাররাইড করুন';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = 'আপনি একটি ইমেইল ঠিকানায় ব্যক্তিগত বার্তা পাঠাতে পারবেন না। যদি আপনি অব্যাহত রাখেন তবে সমস্ত প্রবেশ করা ইমেইল ঠিকানা উপেক্ষা করা হবে।\\n\\nআপনি কি সত্যিই এটি করতে চান?';

$txt['mailqueue_browse'] = 'কিউ ব্রাউজ করুন';
$txt['mailqueue_settings'] = 'সেটিংস';
$txt['mailqueue_test'] = 'পরীক্ষামূলক পাঠান';

$txt['admin_search'] = 'দ্রুত অনুসন্ধান';
$txt['admin_search_type_internal'] = 'কাজ/সেটিং';
$txt['admin_search_type_member'] = 'সদস্য';
$txt['admin_search_type_online'] = 'অনলাইন ম্যানুয়াল';
$txt['admin_search_go'] = 'যাও';
$txt['admin_search_results'] = 'অনুসন্ধান ফলাফল';
$txt['admin_search_results_desc'] = 'অনুসন্ধানের ফলাফল: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = 'পুনরায় অনুসন্ধান করুন';
$txt['admin_search_results_none'] = 'কোন ফলাফল পাওয়া যায়নি।';

$txt['admin_search_section_sections'] = 'অধ্যায়';
$txt['admin_search_section_settings'] = 'সেটিং';

$txt['mods_cat_features'] = 'সাধারণ';
$txt['antispam_title'] = 'অ্যান্টি-স্প্যাম';
$txt['mods_cat_modifications_misc'] = 'বিবিধ';
$txt['mods_cat_layout'] = 'লেআউট';
$txt['moderation_settings_short'] = 'মডারেশন';
$txt['signature_settings_short'] = 'স্বাক্ষর';
$txt['custom_profile_shorttitle'] = 'প্রোফাইল ক্ষেত্র';
$txt['pruning_title'] = 'লগ প্রুনিং';
$txt['pruning_desc'] = 'নিচের বিকল্পগুলি আপনার লগগুলি খুব বড় হয়ে যাওয়া থেকে রক্ষা করার জন্য উপকারী, কারণ বেশিরভাগ সময় পুরনো এন্ট্রিগুলি সত্যিই তেমন কাজে আসে না।';
$txt['log_settings'] = 'লগ সেটিংস';

$txt['boards_edit'] = 'বোর্ড পরিবর্তন করুন';
$txt['mboards_new_cat'] = 'নতুন বিভাগ তৈরি করুন';
$txt['manage_holidays'] = 'ছুটি পরিচালনা করুন';
$txt['calendar_settings'] = 'ক্যালেন্ডার সেটিংস';
$txt['search_weights'] = 'ওজন';
$txt['search_method'] = 'অনুসন্ধান পদ্ধতি';

$txt['smiley_sets'] = 'স্মাইলি সেট';
$txt['smileys_add'] = 'স্মাইলি যোগ করুন';
$txt['smileys_edit'] = 'স্মাইলিগুলি সম্পাদনা করুন';
$txt['smileys_set_order'] = 'স্মাইলির ক্রম সেট করুন';
$txt['icons_edit_message_icons'] = 'বার্তা আইকন';

$txt['membergroups_new_group'] = 'সদস্যগোষ্ঠী যোগ করুন';
$txt['membergroups_edit_groups'] = 'সদস্যগোষ্ঠী সম্পাদনা করুন';
$txt['permissions_groups'] = 'সাধারণ অনুমতিসমূহ';
$txt['permissions_boards'] = 'বোর্ড অনুমতিসমূহ';
$txt['permissions_profiles'] = 'প্রোফাইল সম্পাদনা করুন';
$txt['permissions_post_moderation'] = 'পোস্ট মডারেশন';

$txt['browse_packages'] = 'প্যাকেজ ব্রাউজ করুন';
$txt['download_packages'] = 'প্যাকেজ যোগ করুন';
$txt['installed_packages'] = 'ইনস্টল করা প্যাকেজসমূহ';
$txt['package_file_perms'] = 'ফাইল অনুমতিসমূহ';
$txt['package_settings'] = 'বিকল্পসমূহ';
$txt['themeadmin_admin_title'] = 'পরিচালনা এবং ইনস্টল করুন';
$txt['themeadmin_list_title'] = 'থিম সেটিংস';
$txt['themeadmin_reset_title'] = 'সদস্য বিকল্পসমূহ';
$txt['themeadmin_edit_title'] = 'থিম পরিবর্তন করুন';
$txt['admin_browse_register_new'] = 'নতুন সদস্য নিবন্ধন করুন';

$txt['search_engines'] = 'অনুসন্ধান ইঞ্জিন';
$txt['spiders'] = 'স্পাইডার';
$txt['spider_logs'] = 'স্পাইডার লগ';
$txt['spider_stats'] = 'পরিসংখ্যান';

$txt['paid_subscriptions'] = 'পেইড সাবস্ক্রিপশন';
$txt['paid_subs_view'] = 'সাবস্ক্রিপশন দেখুন';

$txt['hooks_title_list'] = 'ইন্টিগ্রেশন হুক';
$txt['hooks_field_hook_name'] = 'হুকের নাম';
$txt['hooks_field_function_name'] = 'ফাংশনের নাম';
$txt['hooks_field_function_method'] = 'ফাংশন একটি পদ্ধতি এবং এর ক্লাস ইনস্ট্যানশিয়েটেড';
$txt['hooks_field_function'] = 'ফাংশন';
$txt['hooks_field_included_file'] = 'অন্তর্ভুক্ত ফাইল';
$txt['hooks_field_file_name'] = 'ফাইলের নাম';
$txt['hooks_field_hook_exists'] = 'অবস্থা';
$txt['hooks_active'] = 'অবস্থিত';
$txt['hooks_disabled'] = 'নিষ্ক্রিয়';
$txt['hooks_missing'] = 'পাওয়া যায়নি';
$txt['hooks_temp'] = 'অস্থায়ী';
$txt['hooks_no_hooks'] = 'বর্তমানে সিস্টেমে কোন হুক নেই।';
$txt['hooks_button_remove'] = 'অপসারণ করুন';
$txt['hooks_disable_instructions'] = 'হুক সক্ষম বা অক্ষম করতে অবস্থা আইকনে ক্লিক করুন';
$txt['hooks_disable_legend'] = 'লেজেন্ড';
$txt['hooks_disable_legend_exists'] = 'হুকটি বিদ্যমান এবং সক্রিয়';
$txt['hooks_disable_legend_disabled'] = 'হুকটি বিদ্যমান কিন্তু নিষ্ক্রিয় করা হয়েছে';
$txt['hooks_disable_legend_missing'] = 'হুকটি পাওয়া যায়নি';
$txt['hooks_disable_legend_temp'] = 'হুকটি অস্থায়ী';
$txt['hooks_disable_legend_temp_missing'] = 'অস্থায়ী হুক পাওয়া যায়নি';
$txt['hooks_reset_filter'] = 'কোন ফিল্টার নেই';

$txt['board_perms_allow'] = 'অনুমতি দিন';
$txt['board_perms_ignore'] = 'উপেক্ষা করুন';
$txt['board_perms_deny'] = 'নিষেধ করুন';
$txt['all_boards_in_cat'] = 'এই বিভাগের সমস্ত বোর্ড';

$txt['likes_like'] = 'সদস্যগোষ্ঠীগুলি পোস্টে লাইক দেওয়ার অনুমতি পায়';

$txt['mention'] = 'সদস্যগোষ্ঠীগুলি ব্যবহারকারীদের উল্লেখ করার অনুমতি পায়';

$txt['notifications'] = 'বিজ্ঞপ্তি';
$txt['notify_settings'] = 'বিজ্ঞপ্তি সেটিংস';
$txt['notifications_desc'] = 'এই পৃষ্ঠা আপনাকে ব্যবহারকারীদের জন্য ডিফল্ট বিজ্ঞপ্তি বিকল্পগুলি সেট করতে দেয়।';
 // The GDPR page of the EU exists in several languages; change the language code at the end of the url
$txt['notify_announcements_desc'] = 'এই ডিফল্ট বিকল্পটি সক্ষম করা <a href="https://ec.europa.eu/info/law/law-topic/data-protection/eu-data-protection-rules_en" target="_blank" rel="noopener" class="bbc_link">GDPR</a> এবং অনেক অন্যান্য দেশের গোপনীয়তা ও অ্যান্টি-স্প্যাম আইন লঙ্ঘন করে।';

$txt['enable_sm_stats'] = 'স্ট্যাট সংগ্রহের অনুমতি দিন';

?>