<?php
// Version: 2.1.0; ManageSettings

global $scripturl;

// argument(s): theme_id, session_id, session_var, $scripturl
$txt['modSettings_desc'] = 'এই পৃষ্ঠাটি আপনার ফোরামের বৈশিষ্ট্য এবং মৌলিক বিকল্পগুলির সেটিংস পরিবর্তন করার অনুমতি দেয়। আরও বিকল্পগুলির জন্য <a href="%4$s?action=admin;area=theme;sa=list;th=%1$s;%3$s=%2$s">থিম সেটিংস</a> দেখুন। একটি সেটিং সম্পর্কে আরও তথ্যের জন্য সহায়তা আইকনে ক্লিক করুন।';
$txt['modification_settings_desc'] = 'এই পৃষ্ঠায় আপনার ফোরামে যেকোনো পরিবর্তনের দ্বারা যোগ করা সেটিংস রয়েছে।';

$txt['modification_no_misc_settings'] = 'এই এলাকায় এখনও কোন সেটিংস যোগ করা হয়েছে এমন কোন পরিবর্তন ইনস্টল করা হয়নি।';

$txt['pollMode'] = 'পোল মোড';
$txt['disable_polls'] = 'পোল নিষ্ক্রিয় করুন';
$txt['enable_polls'] = 'পোল সক্ষম করুন';
$txt['polls_as_topics'] = 'বিদ্যমান পোলগুলোকে বিষয় হিসেবে দেখান';
$txt['allow_guestAccess'] = 'অতিথিদের ফোরাম ব্রাউজ করার অনুমতি দিন';
$txt['userLanguage'] = 'ব্যবহারকারী-নির্বাচনযোগ্য ভাষা সমর্থন সক্ষম করুন';
$txt['allow_hideOnline'] = 'অ্যাডমিন ছাড়া অন্যদের তাদের অনলাইন স্থিতি লুকানোর অনুমতি দিন';
$txt['titlesEnable'] = 'কাস্টম শিরোনাম সক্ষম করুন';
$txt['enable_buddylist'] = 'বাডি/অগ্রাহ্য তালিকা সক্ষম করুন';
$txt['default_personal_text'] = 'ডিফল্ট ব্যক্তিগত টেক্সট';
$txt['default_personal_text_note'] = 'নতুন নিবন্ধিত সদস্যদের জন্য বরাদ্দ করার জন্য ব্যক্তিগত টেক্সট।';
$txt['time_format'] = 'ডিফল্ট সময়ের ফরম্যাট';
$txt['setting_time_offset'] = 'মোট সময়ের অফসেট';
$txt['setting_default_timezone'] = 'ফোরামের ডিফল্ট সময় অঞ্চল';
$txt['setting_timezone_priority_countries'] = 'প্রথমে এই দেশগুলির সময় অঞ্চলগুলি দেখান';
$txt['setting_timezone_priority_countries_note'] = 'দুই অক্ষরের ISO দেশ কোডের একটি কমা দ্বারা পৃথক তালিকা।';
$txt['failed_login_threshold'] = 'ব্যর্থ লগইন সীমা';
$txt['loginHistoryDays'] = 'লগইন ইতিহাস রাখার দিন';
$txt['lastActive'] = 'ব্যবহারকারীর অনলাইন সময়ের সীমা';
$txt['trackStats'] = 'পরিসংখ্যান ট্র্যাক করুন';
$txt['hitStats'] = 'প্রতিদিনের পৃষ্ঠা ভিউ ট্র্যাক করুন (পরিসংখ্যান ট্র্যাকিং সক্ষম থাকতে হবে)';
$txt['enableCompressedOutput'] = 'কম্প্রেসড আউটপুট সক্ষম করুন';
$txt['databaseSession_enable'] = 'ডাটাবেস চালিত সেশন ব্যবহার করুন';
$txt['databaseSession_loose'] = 'ব্রাউজারগুলোকে ক্যাশ করা পৃষ্ঠায় ফিরে যেতে দিন';
$txt['databaseSession_lifetime'] = 'অব্যবহৃত সেশনের সময়সীমার আগে সেকেন্ড';
$txt['error_log_desc'] = 'ত্রুটি লগ, যদি সক্ষম হয়, ব্যবহারকারীদের দ্বারা আপনার ফোরামে encountered প্রতিটি ত্রুটি লগ করবে। এটি ফোরামের সমস্যাগুলি চিহ্নিত করতে একটি অমূল্য সহায়ক হতে পারে।';
$txt['enableErrorLogging'] = 'ত্রুটি লগিং সক্ষম করুন';
$txt['enableErrorQueryLogging'] = 'ত্রুটি লগে ডাটাবেস প্রশ্ন অন্তর্ভুক্ত করুন';
$txt['markread_title'] = 'পড়া লগ';
$txt['mark_read_desc'] = 'নিচের বিকল্পগুলি বোর্ড এবং বিষয়গুলি স্বয়ংক্রিয়ভাবে পড়া হিসাবে চিহ্নিত করার জন্য কতক্ষণ অপেক্ষা করতে হবে এবং এই তথ্য মুছে ফেলার জন্য কতক্ষণ অপেক্ষা করতে হবে তা নিয়ন্ত্রণ করে।';
$txt['mark_read_beyond'] = 'এই সংখ্যক দিনের পরে নিষ্ক্রিয় থাকা ব্যবহারকারীদের জন্য বোর্ডগুলি স্বয়ংক্রিয়ভাবে পড়া হিসাবে চিহ্নিত করুন';
$txt['mark_read_delete_beyond'] = 'এই সংখ্যক দিনের পরে দেখা বোর্ড এবং বিষয়গুলির তথ্য স্বয়ংক্রিয়ভাবে মুছে ফেলুন';
$txt['mark_read_max_users'] = 'একসাথে প্রক্রিয়া করার জন্য সর্বাধিক ব্যবহারকারী';
$txt['pruningOptions'] = 'লগ এন্ট্রি কাটা সক্ষম করুন';
$txt['pruneErrorLog'] = 'ত্রুটি লগের এন্ট্রি মুছে ফেলুন যা পুরনো';
$txt['pruneModLog'] = 'মডারেশন লগের এন্ট্রি মুছে ফেলুন যা পুরনো';
$txt['pruneBanLog'] = 'ব্যান হিট লগের এন্ট্রি মুছে ফেলুন যা পুরনো';
$txt['pruneReportLog'] = 'মডারেটরে রিপোর্ট লগের এন্ট্রি মুছে ফেলুন যা পুরনো';
$txt['pruneScheduledTaskLog'] = 'নির্ধারিত কাজের লগের এন্ট্রি মুছে ফেলুন যা পুরনো';
$txt['pruneSpiderHitLog'] = 'সার্চ ইঞ্জিন হিট লগ মুছে ফেলুন যা পুরনো';
$txt['cookieTime'] = 'ডিফল্ট লগইন কুকির দৈর্ঘ্য';
$txt['localCookies'] = 'কুকির স্থানীয় স্টোরেজ সক্ষম করুন';
$txt['globalCookies'] = 'সাবডোমেইন স্বাধীন কুকি ব্যবহার করুন';
$txt['globalCookiesDomain'] = 'সাবডোমেইন স্বাধীন কুকির জন্য ব্যবহৃত প্রধান ডোমেইন';
$txt['invalid_cookie_domain'] = 'প্রদত্ত ডোমেইনটি অবৈধ বলে মনে হচ্ছে, দয়া করে এটি পরীক্ষা করুন এবং আবার সংরক্ষণ করুন।';
$txt['secureCookies'] = 'কুকিগুলিকে নিরাপদ করতে বাধ্য করুন';
$txt['httponlyCookies'] = 'কুকিগুলিকে শুধুমাত্র HTTP প্রোটোকলের মাধ্যমে প্রবেশযোগ্য হতে বাধ্য করুন';
$txt['samesiteCookies'] = 'কুকিগুলিকে শুধুমাত্র প্রথম পক্ষের কাছে পাঠানো হবে এমনভাবে বাধ্য করুন';
$txt['samesiteNone'] = 'কিছুই নয়';
$txt['samesiteLax'] = 'শিথিল';
$txt['samesiteStrict'] = 'কঠোর';
$txt['samesiteSecureRequired'] = 'যদি SameSite Cookies \'কিছুই নয়\' এ সেট করা হয়, তবে কুকিগুলি নিরাপদ হতে হবে।';
$txt['securityDisable'] = 'প্রশাসনিক নিরাপত্তা অক্ষম করুন';
$txt['securityDisable_moderate'] = 'মডারেশন নিরাপত্তা অক্ষম করুন';
$txt['send_validation_onChange'] = 'ইমেইল পরিবর্তনের পরে পুনঃসক্রিয়করণের প্রয়োজন';
$txt['approveAccountDeletion'] = 'সদস্যের অ্যাকাউন্ট মুছে ফেলার সময় প্রশাসকের অনুমোদনের প্রয়োজন';
$txt['autoFixDatabase'] = 'ভাঙা টেবিল স্বয়ংক্রিয়ভাবে মেরামত করুন';
$txt['disallow_sendBody'] = 'নোটিফিকেশনে পোস্ট টেক্সট পাঠানো অনুমতি দেবেন না';
$txt['enable_ajax_alerts'] = 'অ্যালার্টের জন্য AJAX ডেস্কটপ নোটিফিকেশন অনুমতি দিন';
$txt['alerts_auto_purge'] = 'পড়া অ্যালার্ট স্বয়ংক্রিয়ভাবে মুছে ফেলুন';
$txt['alerts_auto_purge_7'] = '1 সপ্তাহ পরে';
$txt['alerts_auto_purge_30'] = '1 মাস পরে';
$txt['alerts_auto_purge_90'] = '3 মাস পরে';
$txt['alerts_auto_purge_0'] = 'কখনও নয়';
$txt['alerts_per_page'] = 'প্রতি পৃষ্ঠায় অ্যালার্ট';
$txt['jquery_source'] = 'jQuery লাইব্রেরির জন্য উৎস';
$txt['jquery_custom_label'] = 'কাস্টম';
$txt['jquery_custom'] = 'jQuery লাইব্রেরির জন্য কাস্টম URL';
$txt['jquery_local'] = 'স্থানীয়';
$txt['jquery_google_cdn'] = 'গুগল CDN';
$txt['jquery_jquery_cdn'] = 'jQuery CDN';
$txt['jquery_microsoft_cdn'] = 'মাইক্রোসফট CDN';
$txt['queryless_urls'] = 'সার্চ ইঞ্জিনের জন্য বন্ধুত্বপূর্ণ URL';
$txt['minimize_files'] = 'CSS এবং JavaScript ফাইলগুলি কমিয়ে আনুন';
$txt['queryless_urls_note'] = 'Apache/Lighttpd এর জন্য শুধুমাত্র';
$txt['enableReportPM'] = 'ব্যক্তিগত বার্তার রিপোর্টিং সক্ষম করুন';
$txt['max_pm_recipients'] = 'একটি ব্যক্তিগত বার্তায় সর্বাধিক প্রাপক সংখ্যা';
$txt['max_pm_recipients_note'] = '(সীমা না থাকলে 0, প্রশাসকরা ব্যতিক্রম)';
$txt['pm_posts_verification'] = 'ব্যক্তিগত বার্তা পাঠানোর সময় ব্যবহারকারীদের যাচাই করতে হবে এমন পোস্টের সংখ্যা';
$txt['pm_posts_verification_note'] = '(সীমা না থাকলে 0, প্রশাসকরা ব্যতিক্রম)';
$txt['pm_posts_per_hour'] = 'এক ঘণ্টায় একটি ব্যবহারকারী যতগুলি ব্যক্তিগত বার্তা পাঠাতে পারে';
$txt['pm_posts_per_hour_note'] = '(সীমা না থাকলে 0, মডারেটররা ব্যতিক্রম)';
$txt['compactTopicPagesEnable'] = 'প্রদর্শিত পৃষ্ঠার লিঙ্কের সংখ্যা সীমাবদ্ধ করুন';
$txt['contiguous_page_display'] = 'প্রদর্শন করার জন্য অব্যাহত পৃষ্ঠা';
$txt['to_display'] = 'প্রদর্শন করার জন্য';
$txt['todayMod'] = 'সংক্ষিপ্ত তারিখ প্রদর্শন সক্ষম করুন';
$txt['today_disabled'] = 'অক্ষম';
$txt['today_only'] = 'শুধুমাত্র আজ';
$txt['yesterday_today'] = 'আজ এবং গতকাল';
$txt['onlineEnable'] = 'পোস্ট এবং ব্যক্তিগত বার্তায় অনলাইন/অফলাইন স্থিতি দেখান';
$txt['defaultMaxMembers'] = 'সদস্য তালিকায় প্রতি পৃষ্ঠায় সদস্য সংখ্যা';
$txt['timeLoadPageEnable'] = 'প্রতিটি পৃষ্ঠা তৈরি করতে সময় দেখান';
$txt['disableHostnameLookup'] = 'হোস্টনেম অনুসন্ধান অক্ষম করুন';
$txt['who_enabled'] = 'অনলাইনে থাকা তালিকা সক্ষম করুন';
$txt['meta_keywords'] = 'ফোরামের সাথে সম্পর্কিত মেটা কীওয়ার্ড';
$txt['meta_keywords_note'] = 'সার্চ ইঞ্জিনের জন্য। ডিফল্ট জন্য খালি ছেড়ে দিন।';
$txt['settings_error'] = 'সতর্কতা: Settings.php এর আপডেট ব্যর্থ হয়েছে, সেটিংস সংরক্ষণ করা যাবে না।';
$txt['image_proxy_enabled'] = 'ছবি প্রক্সি সক্ষম করুন';
$txt['image_proxy_secret'] = 'ছবি প্রক্সি গোপন';
$txt['image_proxy_maxsize'] = 'ক্যাশে করার জন্য ছবির সর্বাধিক ফাইল আকার (KB তে)';
$txt['force_ssl'] = 'ফোরাম SSL মোড';
$txt['force_ssl_off'] = 'SSL অক্ষম করুন';
$txt['force_ssl_complete'] = 'ফোরামে SSL বাধ্য করুন';
$txt['search_language'] = 'পূর্ণ পাঠ্য অনুসন্ধান ভাষা';

// পছন্দ সেটিংস।
$txt['enable_likes'] = 'পছন্দ সক্ষম করুন';

// উল্লেখ সেটিংস।
$txt['enable_mentions'] = 'উল্লেখ সক্ষম করুন';

$txt['caching_information'] = 'SMF অ্যাক্সিলারেটর ব্যবহার করে ক্যাশিং সমর্থন করে। বর্তমানে সমর্থিত অ্যাক্সিলারেটরগুলির মধ্যে রয়েছে:
<ul class="normallist">
	<li>APCu</li>
	<li>Memcached</li>
	<li>SQLite3</li>
	<li>PostgreSQL</li>
	<li>Zend প্ল্যাটফর্ম/পারফরম্যান্স স্যুট (Zend অপটিমাইজার নয়)</li>
</ul>
আপনার কাছে উপরের যেকোনো অপটিমাইজারের সাথে PHP কম্পাইল করা থাকলে ক্যাশিং সেরা কাজ করবে, অথবা আপনার কাছে memcached উপলব্ধ থাকলে। যদি আপনার কাছে কোনো অপটিমাইজার ইনস্টল না থাকে তবে SMF ফাইল ভিত্তিক ক্যাশিং করবে।';
$txt['detected_no_caching'] = 'SMF আপনার সার্ভারে একটি সামঞ্জস্যপূর্ণ অ্যাক্সিলারেটর শনাক্ত করতে পারেনি। পরিবর্তে ফাইল ভিত্তিক ক্যাশিং ব্যবহার করা যেতে পারে।';
$txt['detected_accelerators'] = 'SMF নিম্নলিখিত অ্যাক্সিলারেটরগুলি শনাক্ত করেছে: %1$s';

$txt['cache_enable'] = 'ক্যাশিং স্তর';
$txt['cache_off'] = 'কোন ক্যাশিং নেই';
$txt['cache_level1'] = 'স্তর ১ ক্যাশিং (প্রস্তাবিত)';
$txt['cache_level2'] = 'স্তর ২ ক্যাশিং';
$txt['cache_level3'] = 'স্তর ৩ ক্যাশিং (প্রস্তাবিত নয়)';
$txt['cache_accelerator'] = 'ক্যাশিং অ্যাক্সিলারেটর';
$txt['filebased_cache'] = 'SMF ফাইল ভিত্তিক ক্যাশিং';
$txt['sqlite_cache'] = 'SQLite3 ডাটাবেস ভিত্তিক ক্যাশিং';
$txt['postgres_cache'] = 'PostgreSQL ক্যাশিং';
$txt['cachedir_sqlite'] = 'SQLite3 ডাটাবেস ক্যাশ ডিরেক্টরি';
$txt['apcu_cache'] = 'APCu';
$txt['memcacheimplementation_cache'] = 'Memcache';
$txt['memcachedimplementation_cache'] = 'Memcached';
$txt['zend_cache'] = 'Zend প্ল্যাটফর্ম/পারফরম্যান্স স্যুট';
$txt['cache_filebased_settings'] = 'SMF ফাইল ভিত্তিক ক্যাশিং সেটিংস';
$txt['cache_sqlite_settings'] = 'SQLite3 ডাটাবেস ক্যাশিং সেটিংস';
$txt['cache_memcached_settings'] = 'Memcache/Memcached সেটিংস';
$txt['cache_memcached_servers'] = 'Memcache/Memcached সার্ভার';
$txt['cache_memcached_servers_subtext'] = 'উদাহরণ: 127.0.0.1:11211,127.0.0.2';

$txt['loadavg_warning'] = 'দয়া করে লক্ষ্য করুন: নিচের সেটিংসগুলি সাবধানে সম্পাদনা করতে হবে। এগুলির মধ্যে যেকোনো একটি খুব কম সেট করা আপনার ফোরামকে <strong>ব্যবহার অযোগ্য</strong> করে তুলতে পারে! বর্তমান লোড গড় <strong>%01.2f</strong>';
$txt['loadavg_enable'] = 'লোড গড় দ্বারা লোড ব্যালেন্সিং সক্ষম করুন';
$txt['loadavg_auto_opt'] = 'স্বয়ংক্রিয় ডাটাবেস অপ্টিমাইজেশন অক্ষম করার থ্রেশহোল্ড';
$txt['loadavg_search'] = 'অনুসন্ধান অক্ষম করার থ্রেশহোল্ড';
$txt['loadavg_allunread'] = 'সমস্ত অদেখা বিষয়বস্তু অক্ষম করার থ্রেশহোল্ড';
$txt['loadavg_unreadreplies'] = 'অদেখা প্রতিক্রিয়া অক্ষম করার থ্রেশহোল্ড';
$txt['loadavg_show_posts'] = 'ব্যবহারকারীর পোস্ট দেখানো অক্ষম করার থ্রেশহোল্ড';
$txt['loadavg_userstats'] = 'ব্যবহারকারীর পরিসংখ্যান দেখানো অক্ষম করার থ্রেশহোল্ড';
$txt['loadavg_bbc'] = 'পোস্ট দেখানোর সময় BBC ফরম্যাটিং অক্ষম করার থ্রেশহোল্ড';
$txt['loadavg_forum'] = 'ফোরামকে <strong>সম্পূর্ণরূপে</strong> অক্ষম করার থ্রেশহোল্ড';
$txt['loadavg_disabled_windows'] = 'Windows-এ লোড ব্যালেন্সিং সমর্থন উপলব্ধ নেই।';
$txt['loadavg_disabled_osx'] = 'OS:X-এ লোড ব্যালেন্সিং সমর্থন উপলব্ধ নেই।';
$txt['loadavg_disabled_conf'] = 'আপনার হোস্ট কনফিগারেশনের দ্বারা লোড ব্যালেন্সিং সমর্থন অক্ষম করা হয়েছে।';

$txt['setting_password_strength'] = 'ব্যবহারকারীর পাসওয়ার্ডের জন্য প্রয়োজনীয় শক্তি';
$txt['setting_password_strength_low'] = 'কম - ৪ অক্ষরের সর্বনিম্ন';
$txt['setting_password_strength_medium'] = 'মধ্যম - ব্যবহারকারীর নাম ধারণ করতে পারে না';
$txt['setting_password_strength_high'] = 'উচ্চ - বিভিন্ন অক্ষরের মিশ্রণ';
$txt['setting_enable_password_conversion'] = 'পাসওয়ার্ড হ্যাশ রূপান্তর অনুমতি দিন';

$txt['antispam_Settings'] = 'অ্যান্টি-স্প্যাম যাচাইকরণ';
$txt['antispam_Settings_desc'] = 'এই বিভাগটি আপনাকে যাচাইকরণ পরীক্ষা সেট আপ করতে দেয় যাতে নিশ্চিত করা যায় যে ব্যবহারকারী একজন মানব (এবং একটি বট নয়), এবং এগুলি কোথায় এবং কিভাবে প্রয়োগ করা যায় তা সমন্বয় করতে দেয়।';
$txt['setting_reg_verification'] = 'নিবন্ধন পৃষ্ঠায় যাচাইকরণ প্রয়োজন';
$txt['posts_require_captcha'] = 'পোস্ট করার জন্য ব্যবহারকারীদের যাচাইকরণ পাস করতে হবে এমন পোস্টের সংখ্যা';
$txt['posts_require_captcha_desc'] = '(সীমা না থাকলে 0, মডারেটররা ব্যতিক্রম)';
$txt['search_enable_captcha'] = 'সমস্ত অতিথি অনুসন্ধানে যাচাইকরণ প্রয়োজন';
$txt['setting_guests_require_captcha'] = 'অতিথিদের পোস্ট করার সময় যাচাইকরণ পাস করতে হবে';
$txt['setting_guests_require_captcha_desc'] = '(নীচে একটি সর্বনিম্ন পোস্ট সংখ্যা উল্লেখ করলে স্বয়ংক্রিয়ভাবে সেট করা হবে)';
$txt['question_not_defined'] = 'আপনাকে আপনার ফোরামের ডিফল্ট ভাষার জন্য একটি প্রশ্ন এবং উত্তর যোগ করতে হবে (%1$s), অন্যথায় ব্যবহারকারীরা CAPTCHA পূরণ করতে পারবে না, যার মানে নিবন্ধন হবে না।';

$txt['configure_verification_means'] = 'যাচাইকরণ পদ্ধতি কনফিগার করুন';
$txt['setting_qa_verification_number'] = 'যাচাইকরণ প্রশ্নের সংখ্যা যা ব্যবহারকারীকে উত্তর দিতে হবে';
$txt['setting_qa_verification_number_desc'] = '(অক্ষম করতে 0; প্রশ্নগুলি নীচে সেট করা হয়েছে)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">নীচে আপনি সেট করতে পারেন যে কোন অ্যান্টি-স্প্যাম বৈশিষ্ট্যগুলি আপনি সক্ষম করতে চান যখন একটি ব্যবহারকারী নিশ্চিত করতে চান যে তারা একজন মানব। লক্ষ্য করুন যে ব্যবহারকারীকে <em>সমস্ত</em> যাচাইকরণ পাস করতে হবে, তাই যদি আপনি একটি যাচাইকরণ চিত্র এবং একটি প্রশ্ন/উত্তর পরীক্ষা উভয়ই সক্ষম করেন তবে তাদের এগুলি উভয়ই সম্পূর্ণ করতে হবে।</span>';
$txt['setting_visual_verification_type'] = 'প্রদর্শনের জন্য ভিজ্যুয়াল যাচাইকরণ চিত্র';
$txt['setting_visual_verification_type_desc'] = 'চিত্র যত বেশি জটিল হবে, বটগুলি বাইপাস করা তত কঠিন হবে';
$txt['setting_image_verification_off'] = 'কিছুই নয়';
$txt['setting_image_verification_vsimple'] = 'অত্যন্ত সহজ - চিত্রে সাধারণ টেক্সট';
$txt['setting_image_verification_simple'] = 'সহজ - ওভারল্যাপিং রঙিন অক্ষর, কোনো শব্দ নয়';
$txt['setting_image_verification_medium'] = 'মধ্যম - ওভারল্যাপিং রঙিন অক্ষর, শব্দ/লাইন সহ';
$txt['setting_image_verification_high'] = 'উচ্চ - কোণাকৃতি অক্ষর, উল্লেখযোগ্য শব্দ/লাইন';
$txt['setting_image_verification_extreme'] = 'অত্যন্ত - কোণাকৃতি অক্ষর, শব্দ, লাইন এবং ব্লক';
$txt['setting_image_verification_sample'] = 'নমুনা';

// reCAPTCHA
$txt['recaptcha_configure'] = 'reCAPTCHA যাচাইকরণ সিস্টেম';
$txt['recaptcha_configure_desc'] = 'reCAPTCHA যাচাইকরণ সিস্টেম কনফিগার করুন। reCAPTCHA-এর জন্য কী নেই? <a href="https://www.google.com/recaptcha/admin">এখান থেকে আপনার reCAPTCHA কী পান</a>।';
$txt['recaptcha_enabled'] = 'reCAPTCHA যাচাইকরণ সিস্টেম ব্যবহার করুন';
$txt['recaptcha_enable_desc'] = 'এটি অন্তর্নির্মিত ভিজ্যুয়াল যাচাইকরণকে বাড়িয়ে তোলে';
$txt['recaptcha_theme'] = 'reCAPTCHA থিম';
$txt['recaptcha_theme_light'] = 'হালকা';
$txt['recaptcha_theme_dark'] = 'অন্ধকার';
$txt['recaptcha_site_key'] = 'সাইট কী';
$txt['recaptcha_site_key_desc'] = 'এটি আপনার সাইটের HTML কোডে সেট করা হবে যা ব্যবহারকারীদের সার্ভ করা হয়।';
$txt['recaptcha_secret_key'] = 'গোপন কী';
$txt['recaptcha_secret_key_desc'] = 'এটি আপনার সাইট এবং Google-এর মধ্যে যোগাযোগের জন্য। এটি গোপন রাখতে নিশ্চিত হন।';
$txt['recaptcha_no_key_question'] = 'reCAPTCHA-এর জন্য কী নেই?';
$txt['recaptcha_get_key'] = 'এখান থেকে আপনার reCAPTCHA কী পান।';
$txt['languages_recaptcha'] = 'ReCAPTCHA ভাষা';

$txt['setting_image_verification_nogd'] = '<strong>নোট:</strong> এই সার্ভারে GD লাইব্রেরি ইনস্টল নেই তাই বিভিন্ন জটিলতার সেটিংসের কোনো প্রভাব থাকবে না।';
$txt['setup_verification_questions'] = 'যাচাইকরণ প্রশ্ন';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">যদি আপনি চান যে ব্যবহারকারীরা স্প্যাম বট বন্ধ করতে যাচাইকরণ প্রশ্নের উত্তর দিক, তাহলে আপনাকে নীচের টেবিলে কিছু প্রশ্ন সেট আপ করতে হবে। আপনাকে এমন প্রশ্নগুলি নির্বাচন করতে হবে যা আপনার ফোরামের বিষয়ের সাথে সম্পর্কিত। প্রকৃত ব্যবহারকারীরা এই প্রশ্নগুলোর উত্তর দিতে সক্ষম হবে, যখন স্প্যাম বটগুলি তা করতে পারবে না। উত্তরগুলি কেস সংবেদনশীল নয়। আপনি ফরম্যাটিংয়ের জন্য প্রশ্নগুলিতে BBC ব্যবহার করতে পারেন। একটি প্রশ্ন মুছে ফেলতে হলে সেই লাইনের বিষয়বস্তু মুছে ফেলুন।</span>';
$txt['setup_verification_question'] = 'প্রশ্ন';
$txt['setup_verification_answer'] = 'উত্তর';
$txt['setup_verification_add_more'] = 'আরেকটি প্রশ্ন যোগ করুন';
$txt['setup_verification_add_answer'] = 'আরেকটি উত্তর যোগ করুন';

$txt['moderation_settings'] = 'মডারেশন সেটিংস';
$txt['setting_warning_enable'] = 'ব্যবহারকারী সতর্কতা সিস্টেম সক্ষম করুন';
$txt['setting_warning_watch'] = 'ব্যবহারকারী নজরদারির জন্য সতর্কতা স্তর';
$txt['setting_warning_watch_note'] = 'যে সতর্কতা স্তরের পরে ব্যবহারকারী নজরদারি আরম্ভ হয়।';
$txt['setting_warning_moderate'] = 'পোস্ট মডারেশনের জন্য সতর্কতা স্তর';
$txt['setting_warning_moderate_note'] = 'যে সতর্কতা স্তরের পরে ব্যবহারকারীর সমস্ত পোস্ট মডারেটেড হয়।';
$txt['setting_warning_mute'] = 'ব্যবহারকারী মিউট করার জন্য সতর্কতা স্তর';
$txt['setting_warning_mute_note'] = 'যে সতর্কতা স্তরের পরে ব্যবহারকারী আর কোনো পোস্ট করতে পারে না।';
$txt['setting_user_limit'] = 'প্রতিদিন সর্বাধিক ব্যবহারকারী সতর্কতা পয়েন্ট';
$txt['setting_user_limit_note'] = 'এই মানটি হল একক মডারেটর দ্বারা ২৪ ঘণ্টার মধ্যে একটি ব্যবহারকারীকে বরাদ্দ করা সর্বাধিক সতর্কতা পয়েন্ট - সীমা না থাকলে 0।';
$txt['setting_warning_decrement'] = 'প্রতি ২৪ ঘণ্টায় কমানো সতর্কতা পয়েন্ট';
$txt['setting_warning_decrement_note'] = 'শুধুমাত্র তাদের জন্য প্রযোজ্য যারা শেষ ২৪ ঘণ্টায় সতর্কতা পাননি।';
$txt['setting_view_warning_any'] = 'যারা যেকোনো সতর্কতা স্থিতি দেখতে পারে';
$txt['setting_view_warning_own'] = 'যারা তাদের নিজস্ব সতর্কতা স্থিতি দেখতে পারে';

$txt['signature_settings'] = 'স্বাক্ষর সেটিংস';
$txt['signature_settings_desc'] = 'SMF-এ সদস্য স্বাক্ষরগুলি কিভাবে পরিচালিত হবে তা নির্ধারণ করতে এই পৃষ্ঠার সেটিংস ব্যবহার করুন।';
// argument(s): session_id, session_var, scripturl
$txt['signature_settings_warning'] = 'নোট করুন যে সেটিংসগুলি ডিফল্টরূপে বিদ্যমান স্বাক্ষরগুলিতে প্রয়োগ করা হয় না। <a href="%3$s?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">এখন পরিবর্তন প্রয়োগ করুন</a>';
$txt['signature_settings_applied'] = 'আপডেট করা নিয়মগুলি বিদ্যমান স্বাক্ষরগুলিতে প্রয়োগ করা হয়েছে।';
$txt['signature_enable'] = 'স্বাক্ষর সক্ষম করুন';
$txt['signature_max_length'] = 'সর্বাধিক অনুমোদিত অক্ষরের সংখ্যা';
$txt['signature_max_lines'] = 'সর্বাধিক লাইনের সংখ্যা';
$txt['signature_max_images'] = 'সর্বাধিক চিত্রের সংখ্যা';
$txt['signature_max_images_note'] = '(সীমা না থাকলে 0 - স্মাইলিগুলি বাদ দেওয়া হয়)';
$txt['signature_allow_smileys'] = 'স্বাক্ষরে স্মাইলি অনুমোদন করুন';
$txt['signature_max_smileys'] = 'সর্বাধিক স্মাইলির সংখ্যা';
$txt['signature_max_image_width'] = 'স্বাক্ষর চিত্রের সর্বাধিক প্রস্থ (পিক্সেল)';
$txt['signature_max_image_height'] = 'স্বাক্ষর চিত্রের সর্বাধিক উচ্চতা (পিক্সেল)';
$txt['signature_max_font_size'] = 'স্বাক্ষরে অনুমোদিত সর্বাধিক ফন্ট আকার (পিক্সেল)';
$txt['signature_bbc'] = 'সক্রিয় BBC ট্যাগ';

$txt['custom_profile_title'] = 'কাস্টম প্রোফাইল ফিল্ড';
$txt['custom_profile_desc'] = 'এই পৃষ্ঠাটি থেকে আপনি আপনার নিজস্ব ফোরামের প্রয়োজনীয়তার সাথে মানানসই কাস্টম প্রোফাইল ফিল্ড তৈরি করতে পারেন';
$txt['custom_profile_active'] = 'সক্রিয়';
$txt['custom_profile_fieldname'] = 'ফিল্ডের নাম';
$txt['custom_profile_fieldtype'] = 'ফিল্ডের প্রকার';
$txt['custom_profile_fieldorder'] = 'ফিল্ডের অর্ডার';
$txt['custom_profile_make_new'] = 'নতুন ফিল্ড';
$txt['custom_profile_none'] = 'আপনি এখনও কোনো কাস্টম প্রোফাইল ফিল্ড তৈরি করেননি!';
$txt['custom_profile_icon'] = 'আইকন';

$txt['custom_profile_type_text'] = 'টেক্সট';
$txt['custom_profile_type_textarea'] = 'বড় টেক্সট';
$txt['custom_profile_type_select'] = 'নির্বাচন বাক্স';
$txt['custom_profile_type_radio'] = 'রেডিও বোতাম';
$txt['custom_profile_type_check'] = 'চেকবক্স';

$txt['custom_add_title'] = 'প্রোফাইল ফিল্ড যোগ করুন';
$txt['custom_edit_title'] = 'প্রোফাইল ফিল্ড সম্পাদনা করুন';
$txt['custom_edit_general'] = 'ডিসপ্লে সেটিংস';
$txt['custom_edit_input'] = 'ইনপুট সেটিংস';
$txt['custom_edit_advanced'] = 'অ্যাডভান্সড সেটিংস';
$txt['custom_edit_name'] = 'নাম';
$txt['custom_edit_name_desc'] = 'আপনি এই ফিল্ডে অনুবাদযোগ্য টোকেন ব্যবহার করতে পারেন।';
$txt['custom_edit_desc'] = 'বিবরণ';
$txt['custom_edit_profile'] = 'প্রোফাইল সেকশন';
$txt['custom_edit_profile_desc'] = 'যে প্রোফাইল সেকশনে ব্যবহারকারীরা এটি সম্পাদনা করতে পারবে।';
$txt['custom_edit_profile_none'] = 'কিছুই নয়';
$txt['custom_edit_registration'] = 'নিবন্ধনে দেখান';
$txt['custom_edit_registration_disable'] = 'না';
$txt['custom_edit_registration_allow'] = 'হ্যাঁ';
$txt['custom_edit_registration_require'] = 'হ্যাঁ, এবং প্রবেশের প্রয়োজন';
$txt['custom_edit_display'] = 'টপিক ভিউতে দেখান';
$txt['custom_edit_mlist'] = 'সদস্য তালিকায় দেখান';
$txt['custom_edit_picktype'] = 'ফিল্ডের প্রকার';

$txt['custom_edit_max_length'] = 'সর্বাধিক দৈর্ঘ্য';
$txt['custom_edit_max_length_desc'] = '(সীমা না থাকলে 0)';
$txt['custom_edit_dimension'] = 'মাত্রা';
$txt['custom_edit_dimension_row'] = 'লাইন';
$txt['custom_edit_dimension_col'] = 'কলাম';
$txt['custom_edit_bbc'] = 'BBC অনুমোদন করুন';
$txt['custom_edit_options'] = 'বিকল্পসমূহ';
$txt['custom_edit_options_desc'] = 'বিকল্প বাক্স খালি রেখে দিন মুছে ফেলতে। রেডিও বোতাম ডিফল্ট বিকল্প নির্বাচন করে।';
$txt['custom_edit_options_more'] = 'আরও';
$txt['custom_edit_default'] = 'ডিফল্ট অবস্থা';
$txt['custom_edit_active'] = 'সক্রিয়';
$txt['custom_edit_active_desc'] = 'যদি নির্বাচিত না হয় তবে এই ফিল্ডটি কারো কাছে দেখানো হবে না।';
$txt['custom_edit_privacy'] = 'গোপনীয়তা';
$txt['custom_edit_privacy_desc'] = 'কে এই ফিল্ডটি দেখতে এবং সম্পাদনা করতে পারে।';
$txt['custom_edit_privacy_all'] = 'ব্যবহারকারীরা এই ফিল্ডটি দেখতে পারে; মালিক এটি সম্পাদনা করতে পারে';
$txt['custom_edit_privacy_see'] = 'ব্যবহারকারীরা এই ফিল্ডটি দেখতে পারে; শুধুমাত্র অ্যাডমিনরা এটি সম্পাদনা করতে পারে';
$txt['custom_edit_privacy_owner'] = 'ব্যবহারকারীরা এই ফিল্ডটি দেখতে পারে না; মালিক এবং অ্যাডমিনরা এটি সম্পাদনা করতে পারে।';
$txt['custom_edit_privacy_none'] = 'এই ফিল্ডটি শুধুমাত্র অ্যাডমিনদের জন্য দৃশ্যমান';
$txt['custom_edit_can_search'] = 'অনুসন্ধানযোগ্য';
$txt['custom_edit_can_search_desc'] = 'এই ফিল্ডটি সদস্য তালিকা থেকে অনুসন্ধান করা যাবে কি না।';
$txt['custom_edit_mask'] = 'ইনপুট মাস্ক';
$txt['custom_edit_mask_desc'] = 'টেক্সট ফিল্ডগুলির জন্য একটি ইনপুট মাস্ক নির্বাচন করা যেতে পারে যা ডেটা যাচাই করতে ব্যবহৃত হয়।';
$txt['custom_edit_mask_email'] = 'বৈধ ইমেল';
$txt['custom_edit_mask_number'] = 'সংখ্যাসূচক';
$txt['custom_edit_mask_nohtml'] = 'কোন HTML নয়';
$txt['custom_edit_mask_regex'] = 'Regex (অ্যাডভান্সড)';
$txt['custom_edit_enclose'] = 'টেক্সটের মধ্যে আবদ্ধ দেখান (ঐচ্ছিক)';
$txt['custom_edit_enclose_desc'] = 'আমরা <strong>দৃঢ়ভাবে</strong> সুপারিশ করছি যে ব্যবহারকারীর দ্বারা সরবরাহিত ইনপুট যাচাই করতে একটি ইনপুট মাস্ক ব্যবহার করুন।';

$txt['custom_edit_order_move'] = 'স্থানান্তর করুন ';
$txt['custom_edit_order_up'] = 'উপরে';
$txt['custom_edit_order_down'] = 'নিচে';
$txt['custom_edit_placement'] = 'স্থাপন নির্বাচন করুন';
$txt['custom_profile_placement'] = 'স্থাপন';
$txt['custom_profile_placement_standard'] = 'স্ট্যান্ডার্ড (শিরোনামের সাথে)';
$txt['custom_profile_placement_icons'] = 'আইকনের সাথে';
$txt['custom_profile_placement_above_signature'] = 'স্বাক্ষরের উপরে';
$txt['custom_profile_placement_below_signature'] = 'স্বাক্ষরের নিচে';
$txt['custom_profile_placement_below_avatar'] = 'অ্যাভাটারের নিচে';
$txt['custom_profile_placement_above_member'] = 'ব্যবহারকারীর নামের উপরে';
$txt['custom_profile_placement_bottom_poster'] = 'নিচের পোস্টারের তথ্য';
$txt['custom_profile_placement_before_member'] = 'ব্যবহারকারীর নামের আগে';
$txt['custom_profile_placement_after_member'] = 'ব্যবহারকারীর নামের পরে';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'আপনি কি নিশ্চিত যে আপনি এই ফিল্ডটি মুছতে চান - সমস্ত সম্পর্কিত ব্যবহারকারী ডেটা হারিয়ে যাবে!';

$txt['standard_profile_title'] = 'স্ট্যান্ডার্ড প্রোফাইল ফিল্ড';
$txt['standard_profile_field'] = 'ফিল্ড';
$txt['standard_profile_field_timezone'] = 'টাইমজোন';

$txt['languages_lang_name'] = 'ভাষার নাম';
$txt['languages_native_name'] = 'ভাষার স্বদেশী নাম';
$txt['languages_locale'] = 'লোকেল';
$txt['languages_default'] = 'ডিফল্ট';
$txt['languages_character_set'] = 'অক্ষর সেট';
$txt['languages_users'] = 'ব্যবহারকারীরা';
$txt['language_settings_writable'] = 'সতর্কতা: Settings.php লেখার জন্য খোলা নয় তাই ডিফল্ট ভাষার সেটিং সংরক্ষণ করা যাবে না।';
$txt['edit_languages'] = 'ভাষা সম্পাদনা করুন';
$txt['lang_file_not_writable'] = '<strong>সতর্কতা:</strong> প্রধান ভাষার ফাইল (%1$s) লেখার জন্য খোলা নয়। আপনি এটি লেখার জন্য খোলা করতে হবে এর আগে আপনি কোনো পরিবর্তন করতে পারবেন।';
$txt['lang_entries_not_writable'] = '<strong>সতর্কতা:</strong> আপনি যে ভাষার ফাইলটি সম্পাদনা করতে চান (%1$s) লেখার জন্য খোলা নয়। আপনি এটি লেখার জন্য খোলা করতে হবে এর আগে আপনি কোনো পরিবর্তন করতে পারবেন।';
$txt['languages_ltr'] = 'ডান থেকে বামে';

$txt['add_language'] = 'ভাষা যোগ করুন';
$txt['add_language_smf'] = 'সিম্পল মেশিন থেকে ডাউনলোড করুন';
$txt['add_language_smf_browse'] = 'অনুসন্ধানের জন্য ভাষার নাম টাইপ করুন অথবা সব ভাষার জন্য খালি রেখে দিন।';
$txt['add_language_smf_install'] = 'ইনস্টল করুন';
$txt['add_language_found_title'] = 'পাওয়া ভাষা';
$txt['add_language_smf_found'] = 'নিচের ভাষাগুলি পাওয়া গেছে। আপনি যে ভাষাটি ইনস্টল করতে চান তার পাশে ইনস্টল লিঙ্কে ক্লিক করুন। এরপর আপনাকে ইনস্টল করতে প্যাকেজ ম্যানেজারে নিয়ে যাওয়া হবে।';
$txt['add_language_error_no_response'] = 'সিম্পল মেশিনের সাইটটি প্রতিক্রিয়া দিচ্ছে না। অনুগ্রহ করে পরে আবার চেষ্টা করুন।';
$txt['add_language_error_no_files'] = 'কোন ফাইল পাওয়া যায়নি।';
$txt['add_language_smf_desc'] = 'বিবরণ';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'সংস্করণ';

$txt['edit_language_entries_primary'] = 'নিচে এই ভাষা প্যাকের জন্য প্রাথমিক ভাষা সেটিংস রয়েছে।';
$txt['edit_language_entries'] = 'ভাষার এন্ট্রি সম্পাদনা করুন';
// argument(s): $scripturl, $txt['themeadmin_edit_title']
$txt['edit_language_entries_desc'] = 'আপনি এই ভাষার জন্য পৃথক টেক্সট এন্ট্রিগুলি কাস্টমাইজ করতে পারেন। এন্ট্রিগুলি লোড করতে একটি ফাইল নির্বাচন করুন, এবং তারপর সেগুলি নিচে সম্পাদনা করুন।<br><br>যখন আপনি একটি এন্ট্রি সম্পাদনা (অথবা মুছে ফেলেন), তখন মূলের একটি মন্তব্য করা সংস্করণ ফাইলে সংরক্ষিত হয়। যদি আপনি কখনও আপনার সম্পাদিত স্ট্রিংগুলি তাদের মূল অবস্থায় পুনরুদ্ধার করতে চান, অথবা যদি আপনাকে এই ভাষার ফাইলগুলিতে আরও উন্নত অ্যাক্সেসের প্রয়োজন হয়, তবে যান <a href="%1$s?action=admin;area=theme;sa=edit">%2$s</a>, আপনি যে ফাইলটি খুঁজছেন তাতে ব্রাউজ করুন, এবং তারপর SMF-এর অন্তর্নির্মিত টেক্সট সম্পাদক ব্যবহার করে এটি সরাসরি সম্পাদনা করুন।';
$txt['edit_language_entries_file'] = 'সম্পাদনার জন্য এন্ট্রি নির্বাচন করুন';
$txt['languages_dictionary'] = 'ডিকশনারি';
$txt['languages_rtl'] = '\"ডান থেকে বামে\" মোড সক্ষম করুন';

$txt['lang_file_desc_index'] = 'সাধারণ স্ট্রিং';
$txt['lang_file_desc_EmailTemplates'] = 'ইমেইল টেমপ্লেট';

$txt['languages_download'] = 'ভাষা প্যাক ডাউনলোড করুন';
$txt['languages_download_note'] = 'এই পৃষ্ঠা ভাষা প্যাকের মধ্যে অন্তর্ভুক্ত সমস্ত ফাইল এবং প্রতিটির সম্পর্কে কিছু দরকারী তথ্য তালিকাবদ্ধ করে। সমস্ত ফাইল যেগুলোর সংশ্লিষ্ট চেকবক্স চিহ্নিত করা হয়েছে সেগুলি কপি করা হবে।';
$txt['languages_download_info'] = '<strong>নোট:</strong>
	<ul class="normallist">
		<li>যেসব ফাইলের স্থিতি &quot;লেখার জন্য খোলা নয়&quot; অর্থাৎ SMF এই ফাইলটি বর্তমান সময়ে ডিরেক্টরিতে কপি করতে পারবে না এবং আপনাকে গন্তব্যটি লেখার জন্য খোলা করতে হবে অথবা পৃষ্ঠার নিচে আপনার বিবরণ পূরণ করতে হবে।</li>
		<li>একটি ফাইলের সংস্করণ তথ্য সর্বশেষ SMF সংস্করণ প্রদর্শন করে যার জন্য এটি আপডেট করা হয়েছে। যদি এটি সবুজে চিহ্নিত হয় তবে এটি আপনার বর্তমান সংস্করণের চেয়ে নতুন। যদি এটি অ্যাম্বারে হয় তবে এটি বর্তমান সংস্করণের সাথে একই সংস্করণ সংখ্যা নির্দেশ করে, লাল নির্দেশ করে যে আপনার ইনস্টল করা সংস্করণ প্যাকের মধ্যে অন্তর্ভুক্ত সংস্করণের চেয়ে নতুন।</li>
		<li>যেখানে একটি ফাইল ইতিমধ্যে আপনার ফোরামে বিদ্যমান &quot;অ্যালরেডি এক্সিস্টস&quot; কলামে দুটি মানের মধ্যে একটি থাকবে। &quot;একই&quot; নির্দেশ করে যে ফাইলটি একই রূপে বিদ্যমান এবং এটি পুনরায় লেখা প্রয়োজন নেই। &quot;বিভিন্ন&quot; মানে যে বিষয়বস্তু কিছুভাবে পরিবর্তিত হয়েছে এবং পুনরায় লেখা সম্ভবত সর্বোত্তম সমাধান।</li>
	</ul>';
	
	$txt['languages_download_main_files'] = 'প্রাথমিক ফাইলসমূহ';
$txt['languages_download_filename'] = 'ফাইলের নাম';
$txt['languages_download_dest'] = 'গন্তব্য';
$txt['languages_download_writable'] = 'লেখার জন্য খোলা';
$txt['languages_download_version'] = 'সংস্করণ';
$txt['languages_download_older'] = 'আপনার কাছে এই ফাইলের একটি নতুন সংস্করণ ইনস্টল করা আছে। পুনরায় লেখা সুপারিশ করা হয় না।';
$txt['languages_download_exists'] = 'অ্যালরেডি এক্সিস্টস';
$txt['languages_download_exists_same'] = 'একই';
$txt['languages_download_exists_different'] = 'বিভিন্ন';
$txt['languages_download_overwrite'] = 'পুনরায় লিখুন';
$txt['languages_download_not_chmod'] = 'আপনি কপি করার জন্য নির্বাচিত সমস্ত ফাইল লেখার জন্য খোলা না হওয়া পর্যন্ত ইনস্টলেশন চালিয়ে যেতে পারবেন না।';
$txt['languages_download_illegal_paths'] = 'প্যাকেজে অবৈধ পথ রয়েছে - দয়া করে সিম্পল মেশিনের সাথে যোগাযোগ করুন';
$txt['languages_download_complete'] = 'ইনস্টলেশন সম্পন্ন';
$txt['languages_download_complete_desc'] = 'ভাষা প্যাক সফলভাবে ইনস্টল হয়েছে। দয়া করে <a href="%1$s">এখানে</a> ক্লিক করে ভাষার পৃষ্ঠায় ফিরে যান';
$txt['languages_delete_confirm'] = 'আপনি কি নিশ্চিত যে আপনি এই ভাষাটি মুছতে চান?';
$txt['languages_max_inputs_warning'] = 'আপনি একবারে শুধুমাত্র %1$s সম্পাদনা সংরক্ষণ করতে পারেন। দয়া করে এখন সেভ বোতামে ক্লিক করুন, এবং তারপর এই পৃষ্ঠা পুনরায় লোড হওয়ার পরে সম্পাদনা চালিয়ে যান।';
$txt['languages_txt'] = 'স্ট্যান্ডার্ড টেক্সট স্ট্রিং';
$txt['languages_helptxt'] = 'সাহায্য টেক্সট';
$txt['languages_editortxt'] = 'সম্পাদক জন্য ব্যবহারকারী ইন্টারফেস';
$txt['languages_tztxt'] = 'টাইম জোনের বর্ণনা';
$txt['languages_txt_for_timezones'] = 'স্থানীয় নাম';
$txt['languages_txt_for_email_templates'] = 'ইমেইল বার্তা টেমপ্লেট';
$txt['languages_enter_key'] = 'এই টেক্সট স্ট্রিংয়ের জন্য একটি ভেরিয়েবল নাম প্রবেশ করুন';
$txt['languages_invalid_key'] = 'দুঃখিত, কিন্তু এই ভেরিয়েবল নামটি অবৈধ: ';

$txt['allow_cors'] = 'CORS (ক্রস অরিজিন রিসোর্স শেয়ারিং) অনুমোদন করুন';
$txt['allow_cors_credentials'] = 'CORS এর মাধ্যমে শংসাপত্র পাঠানোর অনুমতি দিন';
$txt['cors_domains'] = 'অতিরিক্ত CORS ডোমেইন';
$txt['cors_headers'] = 'অতিরিক্ত CORS হেডার';

$txt['setting_frame_security'] = 'ফ্রেম সিকিউরিটি অপশন';
$txt['setting_frame_security_SAMEORIGIN'] = 'একই উত্স অনুমোদন করুন';
$txt['setting_frame_security_DENY'] = 'সমস্ত ফ্রেম অস্বীকার করুন';
$txt['setting_frame_security_DISABLE'] = 'অক্ষমিত';

$txt['setting_proxy_ip_header'] = 'রিভার্স প্রোক্সি আইপি হেডার';
$txt['setting_proxy_ip_header_disabled'] = 'কোনো প্রোক্সি আইপি হেডার অনুমোদন করবেন না';
$txt['setting_proxy_ip_header_autodetect'] = 'প্রোক্সি আইপি হেডার স্বয়ংক্রিয়ভাবে সনাক্ত করুন';
$txt['setting_proxy_ip_servers'] = 'রিভার্স প্রোক্সি সার্ভারের আইপি';

$txt['select_boards_from_list'] = 'যেসব বোর্ড প্রযোজ্য সেগুলি নির্বাচন করুন';

$txt['topic_move_any'] = 'পড়ার জন্য শুধুমাত্র বোর্ডে বিষয়গুলি সরানোর অনুমতি দিন';

$txt['defaultMaxListItems'] = 'তালিকায় প্রতি পৃষ্ঠায় সর্বাধিক আইটেমের সংখ্যা';

$txt['tfa_mode'] = 'দুই-ফ্যাক্টর প্রমাণীকরণ';
$txt['tfa_mode_forced'] = 'নির্বাচিত সদস্যগ্রুপগুলিতে জোর করুন';
$txt['tfa_mode_forcedall'] = 'সমস্ত ব্যবহারকারীর জন্য জোর করুন';
$txt['tfa_mode_forced_help'] = 'অন্যান্য ব্যবহারকারীদের উপর 2FA জোর দেওয়ার জন্য আপনার অ্যাকাউন্টে 2FA সক্ষম করুন!';
$txt['tfa_mode_enabled'] = 'সক্ষম';
$txt['tfa_mode_disabled'] = 'অক্ষম';
$txt['tfa_mode_subtext'] = 'লগইন করার সময় ব্যবহারকারীদের একটি দ্বিতীয় স্তরের নিরাপত্তা থাকতে দেয়, ব্যবহারকারীদের তাদের অ্যাকাউন্টের সাথে যুক্ত Google Authenticator-এর মতো একটি অ্যাপের প্রয়োজন হবে';

$txt['export_settings_description'] = 'সদস্যরা তাদের প্রোফাইল ডেটার কপি রপ্তানি করতে পারে, ঐচ্ছিকভাবে তাদের পোস্ট এবং ব্যক্তিগত বার্তা অন্তর্ভুক্ত করে।<br>সার্ভারের সম্পদ অতিরিক্ত বোঝা এড়াতে, SMF ধীরে ধীরে রপ্তানি করা ডেটা একটি নিরাপদ ডিরেক্টরিতে সংরক্ষিত ডাউনলোডযোগ্য ফাইলে সংকলন করে।';
$txt['export_dir'] = 'প্রোফাইল ডেটা রপ্তানি ফাইলের জন্য ডিরেক্টরি';
$txt['export_expiry'] = 'স্বয়ংক্রিয়ভাবে প্রোফাইল ডেটা রপ্তানি ফাইল মুছে ফেলুন পরে';
$txt['export_min_diskspace_pct'] = 'ফ্রি স্পেস ডিস্কে  কম হলে রপ্তানি বিরতি দিন';
$txt['export_rate'] = 'পোস্ট এবং ব্যক্তিগত বার্তা রপ্তানির জন্য প্রক্রিয়া করার হার';
$txt['export_rate_desc'] = 'উচ্চ মানগুলি রপ্তানি দ্রুত সংকলন করবে, তবে এটি ফোরামের কর্মক্ষমতাকে প্রভাবিত করতে পারে।';

?>