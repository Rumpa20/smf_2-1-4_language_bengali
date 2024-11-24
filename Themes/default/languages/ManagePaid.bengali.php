<?php
// Version: 2.1.0; ManagePaid

global $boardurl;

// কিছু পেমেন্ট গেটওয়ে ভাষা নির্দিষ্ট তথ্য প্রয়োজন।
$txt['lang_paypal'] = 'IN';

// প্রতীক।
$txt['usd_symbol'] = '$%1.2f';
$txt['eur_symbol'] = '&euro;%1.2f';
$txt['gbp_symbol'] = '&pound;%1.2f';
$txt['cad_symbol'] = 'C$%1.2f';
$txt['aud_symbol'] = 'A$%1.2f';

$txt['usd'] = 'USD ($)';
$txt['eur'] = 'EUR (&euro;)';
$txt['gbp'] = 'GBP (&pound;)';
$txt['cad'] = 'CAD (C$)';
$txt['aud'] = 'AUD (A$)';
$txt['other'] = 'অন্যান্য';

$txt['paid_username'] = 'ব্যবহারকারীর নাম';

$txt['paid_subscriptions_desc'] = 'এই বিভাগ থেকে আপনি আপনার ফোরামে পেইড সাবস্ক্রিপশন পদ্ধতি যোগ, মুছে ফেলতে এবং সম্পাদনা করতে পারেন।';
$txt['paid_subs_settings'] = 'সেটিংস';
$txt['paid_subs_settings_desc'] = 'এখান থেকে আপনি আপনার ব্যবহারকারীদের জন্য উপলব্ধ পেমেন্ট পদ্ধতিগুলি সম্পাদনা করতে পারেন।';
$txt['paid_subs_view'] = 'সাবস্ক্রিপশন দেখুন';
$txt['paid_subs_view_desc'] = 'এই বিভাগ থেকে আপনি আপনার কাছে উপলব্ধ সমস্ত সাবস্ক্রিপশন দেখতে পারেন।';

// সেটিং টাইপ স্ট্রিংস।
$txt['paid_enabled'] = 'পেইড সাবস্ক্রিপশন সক্রিয় করুন';
$txt['paid_enabled_desc'] = 'ফোরামে পেইড সাবস্ক্রিপশন ব্যবহার করার জন্য এটি চেক করা আবশ্যক।';
$txt['paid_email'] = 'নোটিফিকেশন ইমেইল পাঠান';
$txt['paid_email_desc'] = 'সাবস্ক্রিপশন স্বয়ংক্রিয়ভাবে পরিবর্তিত হলে প্রশাসককে অবহিত করুন।';
$txt['paid_email_to'] = 'যোগাযোগের জন্য ইমেইল';
$txt['paid_email_to_desc'] = 'নোটিফিকেশন পাঠানোর জন্য কমা দ্বারা পৃথকিত ঠিকানার তালিকা।';
$txt['paidsubs_test'] = 'টেস্ট মোড সক্রিয় করুন';
$txt['paidsubs_test_desc'] = 'এটি পেইড সাবস্ক্রিপশনকে "টেস্ট" মোডে রাখে, যা সম্ভব হলে PayPal, Authorize.net ইত্যাদিতে স্যান্ডবক্স পেমেন্ট পদ্ধতি ব্যবহার করবে। আপনি যদি জানেন না তবে এটি সক্রিয় করবেন না!';
$txt['paidsubs_test_confirm'] = 'আপনি কি নিশ্চিত যে আপনি টেস্ট মোড সক্রিয় করতে চান?';
$txt['paid_email_no'] = 'কোন নোটিফিকেশন পাঠাবেন না';
$txt['paid_email_error'] = 'সাবস্ক্রিপশন ব্যর্থ হলে অবহিত করুন';
$txt['paid_email_all'] = 'সমস্ত স্বয়ংক্রিয় সাবস্ক্রিপশন পরিবর্তনের উপর অবহিত করুন';
$txt['paid_currency'] = 'মুদ্রা নির্বাচন করুন';
$txt['paid_currency_code'] = 'মুদ্রার কোড';
$txt['paid_currency_code_desc'] = 'পেমেন্ট মার্চেন্ট দ্বারা ব্যবহৃত কোড';
$txt['paid_currency_symbol'] = 'পেমেন্ট পদ্ধতির দ্বারা ব্যবহৃত চিহ্ন';
$txt['paid_currency_symbol_desc'] = 'সংখ্যার অবস্থান নির্ধারণ করতে \'%1.2f\' ব্যবহার করুন। উদাহরণস্বরূপ $%1.2f, %1.2f EUR ইত্যাদি';
$txt['paid_settings_save'] = 'সংরক্ষণ করুন';

$txt['paypal_email'] = 'পেপাল ইমেইল ঠিকানা';
$txt['paypal_email_desc'] = 'যদি আপনি পেপাল ব্যবহার করতে না চান তবে ফাঁকা রেখে দিন।';
$txt['paypal_additional_emails'] = 'প্রাথমিক পেপাল ইমেইল ঠিকানা';
$txt['paypal_additional_emails_desc'] = 'যদি ভিন্ন হয় (ব্যবসায়িক অ্যাকাউন্টের জন্য)';
$txt['paypal_sandbox_email'] = 'পেপাল স্যান্ডবক্স ইমেইল ঠিকানা';
$txt['paypal_sandbox_email_desc'] = 'যদি টেস্ট মোড নিষ্ক্রিয় থাকে বা পেপাল ব্যবহার না করেন তবে এটি ফাঁকা রাখা যেতে পারে।';

// যুক্তি: $boardurl
$txt['paid_note'] = '<strong class="alert">নোট:</strong><br>
SMF বর্তমানে <strong>পেপাল</strong> কে ইনস্টল করা পেমেন্ট পদ্ধতি হিসেবে সমর্থন করে।
<ul class="bbc_list">
	<li>আপনার পেপাল অ্যাকাউন্টে IPN সক্রিয় করা আবশ্যক নয়; তবে যদি আপনি এটি করেন, তবে ফোরাম আপনার অ্যাকাউন্টে করা সকল পেমেন্টের জন্য পেমেন্ট নোটিফিকেশন গ্রহণ করবে, এবং এটি সাবস্ক্রিপশন সম্পর্কিত নয় এমন পেমেন্টের জন্য পেইড সাবস্ক্রিপশন ত্রুটি তৈরি করবে।</li>
	<li>আপনাকে পুনরাবৃত্ত পেমেন্ট ব্যবহার করার জন্য একটি ব্যবসায়িক বা প্রিমিয়ার অ্যাকাউন্ট থাকতে হবে।</li>
	<li>যাচাইকরণের উদ্দেশ্যে আপনাকে আপনার প্রাথমিক পেপাল ইমেইল ঠিকানা প্রদান করতে হবে।</li>
</ul>
<br>
যদি আপনি একটি ভিন্ন পেমেন্ট গেটওয়ে ইনস্টল করেন, তবে আপনাকে পেমেন্ট নোটিফিকেশনের জন্য একটি রিটার্ন URL সেট আপ করতে হতে পারে। সমস্ত পেমেন্ট প্রকারের জন্য, এই রিটার্ন URL হিসাবে সেট করা উচিত:
<br><br>
<ul class="bbc_list">
	<li><strong>%1$s/subscriptions.php</strong></li>
</ul>
<br>
আপনি সাধারণত এটি আপনার গ্রাহক প্যানেলে খুঁজে পাবেন, সাধারণত "রিটার্ন URL" বা "কলব্যাক URL" শব্দটির অধীনে।';

// সাবস্ক্রিপশন স্ট্রিংস দেখুন।
$txt['paid_name'] = 'নাম';
$txt['paid_status'] = 'স্থিতি';
$txt['paid_cost'] = 'মূল্য';
$txt['paid_duration'] = 'কাল';
$txt['paid_active'] = 'সক্রিয়';
$txt['paid_pending'] = 'পেমেন্টের অপেক্ষায়';
$txt['paid_finished'] = 'সমাপ্ত';
$txt['paid_total'] = 'মোট';
$txt['paid_is_active'] = 'সক্রিয় করা হয়েছে';
$txt['paid_none_yet'] = 'আপনি এখনো কোনো সাবস্ক্রিপশন সেট আপ করেননি।';
$txt['paid_payments_pending'] = 'পেমেন্টের অপেক্ষায়';
$txt['paid_order'] = 'অর্ডার';

$txt['yes'] = 'হ্যাঁ';
$txt['no'] = 'না';

// সাবস্ক্রিপশন যোগ/সম্পাদনা/মুছে ফেলুন।
$txt['paid_add_subscription'] = 'সাবস্ক্রিপশন যোগ করুন';
$txt['paid_edit_subscription'] = 'সাবস্ক্রিপশন সম্পাদনা করুন';
$txt['paid_delete_subscription'] = 'সাবস্ক্রিপশন মুছে ফেলুন';

$txt['paid_mod_name'] = 'সাবস্ক্রিপশনের নাম';
$txt['paid_mod_desc'] = 'বিবরণ';
$txt['paid_mod_reminder'] = 'স্মরণ করানোর ইমেইল পাঠান';
$txt['paid_mod_reminder_desc'] = 'সাবস্ক্রিপশন শেষ হওয়ার আগে স্মরণ করানোর জন্য দিন।';
$txt['paid_mod_email'] = 'সম্পন্ন হলে পাঠানোর জন্য ইমেইল';
$txt['paid_mod_email_desc'] = 'যেখানে {NAME} সদস্যের নাম; {FORUM} সম্প্রদায়ের নাম। ইমেইল বিষয়বস্তু প্রথম লাইনে থাকা উচিত। কোনো ইমেইল নোটিফিকেশনের জন্য ফাঁকা রাখুন।';
$txt['paid_mod_cost_usd'] = 'মূল্য (USD)';
$txt['paid_mod_cost_eur'] = 'মূল্য (EUR)';
$txt['paid_mod_cost_gbp'] = 'মূল্য (GBP)';
$txt['paid_mod_cost_cad'] = 'মূল্য (CAD)';
$txt['paid_mod_cost_aud'] = 'মূল্য (AUD)';
$txt['paid_mod_cost_blank'] = 'এই ফাঁকা রেখে দিন যাতে এই মুদ্রা অফার না করা হয়।';
$txt['paid_mod_span'] = 'সাবস্ক্রিপশনের দৈর্ঘ্য';
$txt['paid_mod_span_days'] = 'দিন';
$txt['paid_mod_span_weeks'] = 'সপ্তাহ';
$txt['paid_mod_span_months'] = 'মাস';
$txt['paid_mod_span_years'] = 'বছর';
$txt['paid_mod_active'] = 'সক্রিয়';
$txt['paid_mod_active_desc'] = 'নতুন সদস্যদের যোগ দিতে সাবস্ক্রিপশনটি সক্রিয় থাকতে হবে।';
$txt['paid_mod_prim_group'] = 'সাবস্ক্রিপশনের সময় প্রাথমিক গ্রুপ';
$txt['paid_mod_prim_group_desc'] = 'যখন তারা সাবস্ক্রিপশন করে তখন ব্যবহারকারীকে যে প্রাথমিক গ্রুপে রাখা হবে।';
$txt['paid_mod_add_groups'] = 'সাবস্ক্রিপশনের সময় অতিরিক্ত গ্রুপ';
$txt['paid_mod_add_groups_desc'] = 'সাবস্ক্রিপশনের পরে ব্যবহারকারীকে যোগ করার জন্য অতিরিক্ত গ্রুপ।';
$txt['paid_mod_no_group'] = 'পরিবর্তন করবেন না';
$txt['paid_mod_edit_note'] = 'দয়া করে মনে রাখবেন যে যেহেতু এই গ্রুপে ইতিমধ্যে সাবস্ক্রাইবার রয়েছে, তাই গ্রুপের সেটিংস পরিবর্তন করা যাবে না!';
$txt['paid_mod_delete_warning'] = '<strong>সতর্কতা</strong><br><br>যদি আপনি এই সাবস্ক্রিপশনটি মুছে ফেলেন তবে বর্তমানে সাবস্ক্রাইব করা সমস্ত ব্যবহারকারী সাবস্ক্রিপশন দ্বারা প্রদত্ত যেকোনো প্রবেশাধিকার হারিয়ে ফেলবে। আপনি যদি নিশ্চিত না হন যে আপনি এটি করতে চান তবে এটি মুছে ফেলার পরিবর্তে সাবস্ক্রিপশনটি নিষ্ক্রিয় করার সুপারিশ করা হয়।<br>';
$txt['paid_mod_repeatable'] = 'ব্যবহারকারীকে এই সাবস্ক্রিপশনটি স্বয়ংক্রিয়ভাবে নবায়ন করার অনুমতি দিন';
$txt['paid_mod_fixed_price'] = 'নির্দিষ্ট মূল্য এবং সময়ের জন্য সাবস্ক্রিপশন';
$txt['paid_mod_flexible_price'] = 'সাবস্ক্রিপশন মূল্য অর্ডার করা সময়কাল অনুসারে পরিবর্তিত হয়';
$txt['paid_mod_price_breakdown'] = 'লচনীয় মূল্য বিশ্লেষণ';
$txt['paid_mod_price_breakdown_desc'] = 'এখানে নির্ধারণ করুন যে সাবস্ক্রিপশনটির মূল্য কত হবে তাদের সাবস্ক্রিপশনের সময়কাল অনুসারে। উদাহরণস্বরূপ, এটি এক মাসের জন্য সাবস্ক্রাইব করতে 12USD হতে পারে, কিন্তু এক বছরের জন্য শুধুমাত্র 100USD। যদি আপনি একটি নির্দিষ্ট সময়ের জন্য মূল্য নির্ধারণ করতে না চান তবে এটি ফাঁকা রাখুন।';
$txt['flexible'] = 'লচনীয়';

$txt['paid_per_day'] = 'প্রতিদিনের মূল্য';
$txt['paid_per_week'] = 'প্রতি সপ্তাহের মূল্য';
$txt['paid_per_month'] = 'প্রতি মাসের মূল্য';
$txt['paid_per_year'] = 'প্রতি বছরের মূল্য';
$txt['day'] = 'দিন';
$txt['week'] = 'সপ্তাহ';
$txt['month'] = 'মাস';
$txt['year'] = 'বছর';

// সাবস্ক্রাইব করা ব্যবহারকারীদের দেখুন।
$txt['viewing_users_subscribed'] = 'ব্যবহারকারীদের দেখছেন';
$txt['view_users_subscribed'] = 'দেখছেন যে ব্যবহারকারীরা সাবস্ক্রাইব করেছেন: &quot;%1$s&quot;';
$txt['no_subscribers'] = 'বর্তমানে এই সাবস্ক্রিপশনের জন্য কোনো সাবস্ক্রাইবার নেই।';
$txt['add_subscriber'] = 'নতুন সাবস্ক্রাইবার যোগ করুন';
$txt['edit_subscriber'] = 'সাবস্ক্রাইবার সম্পাদনা করুন';
$txt['delete_selected'] = 'নির্বাচিত মুছে ফেলুন';
$txt['complete_selected'] = 'নির্বাচিত সম্পন্ন করুন';

// @todo এই স্ট্রিংগুলি জাভাস্ক্রিপ্টের সাথে সংযুক্তভাবে ব্যবহৃত হয়। সংখ্যাসূচক সত্তা ব্যবহার করুন।
$txt['delete_are_sure'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত সাবস্ক্রিপশনের সমস্ত রেকর্ড মুছে ফেলতে চান?';
$txt['complete_are_sure'] = 'আপনি কি নিশ্চিত যে আপনি নির্বাচিত সাবস্ক্রিপশনগুলি সম্পন্ন করতে চান?';

$txt['start_date'] = 'শুরুর তারিখ';
$txt['end_date'] = 'শেষ তারিখ';
$txt['start_date_and_time'] = 'শুরুর তারিখ এবং সময়';
$txt['end_date_and_time'] = 'শেষ তারিখ এবং সময়';
$txt['edit'] = 'সম্পাদনা';
$txt['one_username'] = 'দয়া করে একমাত্র একটি ব্যবহারকারীর নাম লিখুন।';
$txt['minute'] = 'মিনিট';
$txt['error_member_not_found'] = 'প্রবেশ করা সদস্যটি পাওয়া যায়নি';
$txt['member_already_subscribed'] = 'এই সদস্য ইতিমধ্যে এই সাবস্ক্রিপশনে সাবস্ক্রাইব করেছেন। দয়া করে তাদের বিদ্যমান সাবস্ক্রিপশনটি সম্পাদনা করুন।';
$txt['search_sub'] = 'ব্যবহারকারী খুঁজুন';

// পেমেন্ট করুন।
$txt['paid_confirm_payment'] = 'পেমেন্ট নিশ্চিত করুন';
$txt['paid_confirm_desc'] = 'পেমেন্টের জন্য এগিয়ে যেতে দয়া করে নিচের বিবরণগুলি পরীক্ষা করুন এবং &quot;অর্ডার&quot; ক্লিক করুন';
$txt['paypal'] = 'পেপ্যাল';
$txt['paid_confirm_paypal'] = 'পেপ্যাল ব্যবহার করে পেমেন্ট করতে <a href="https://www.paypal.com">পেপ্যাল</a> বোতামে ক্লিক করুন। আপনি পেমেন্টের জন্য পেপ্যাল সাইটে নিয়ে যাওয়া হবে।';
$txt['paid_paypal_order'] = 'পেপ্যাল দিয়ে অর্ডার করুন';
$txt['paid_done'] = 'পেমেন্ট সম্পন্ন';
$txt['paid_done_desc'] = 'আপনার পেমেন্টের জন্য ধন্যবাদ। একবার লেনদেন যাচাই হলে সাবস্ক্রিপশনটি সক্রিয় হবে।';
$txt['paid_sub_return'] = 'সাবস্ক্রিপশনে ফিরে যান';
$txt['paid_current_desc'] = 'নিচে আপনার সমস্ত বর্তমান এবং পূর্বের সাবস্ক্রিপশনের একটি তালিকা রয়েছে। একটি বিদ্যমান সাবস্ক্রিপশন বাড়ানোর জন্য, এটি উপরের তালিকা থেকে নির্বাচন করুন।';
$txt['paid_admin_add'] = 'এই সাবস্ক্রিপশনটি যোগ করুন';

$txt['paid_not_set_currency'] = 'আপনি এখনও আপনার মুদ্রা সেট আপ করেননি। দয়া করে এগিয়ে যাওয়ার আগে <a href="%1$s">সেটিংস</a> বিভাগ থেকে এটি করুন।';
$txt['paid_no_cost_value'] = 'আপনাকে একটি মূল্য এবং সাবস্ক্রিপশনের দৈর্ঘ্য প্রবেশ করতে হবে।';
$txt['paid_invalid_duration'] = 'আপনাকে এই সাবস্ক্রিপশনের জন্য একটি বৈধ সময়কাল প্রবেশ করতে হবে।';
$txt['paid_invalid_duration_D'] = 'যদি আপনি দিনের হিসাবে মাপা একটি সাবস্ক্রিপশনের দৈর্ঘ্য প্রবেশ করেন, তাহলে আপনি কেবল 1 থেকে 90 দিন ব্যবহার করতে পারেন। যদি আপনি এই দীর্ঘ সময়ের জন্য সাবস্ক্রিপশন চান, তাহলে আপনাকে সপ্তাহ, মাস বা বছর ব্যবহার করা উচিত।';
$txt['paid_invalid_duration_W'] = 'যদি আপনি সপ্তাহের হিসাবে মাপা একটি সাবস্ক্রিপশনের দৈর্ঘ্য প্রবেশ করেন, তাহলে আপনি কেবল 1 থেকে 52 সপ্তাহ ব্যবহার করতে পারেন। যদি আপনি এই দীর্ঘ সময়ের জন্য সাবস্ক্রিপশন চান, তাহলে আপনাকে মাস বা বছর ব্যবহার করা উচিত।';
$txt['paid_invalid_duration_M'] = 'যদি আপনি মাসের হিসাবে মাপা একটি সাবস্ক্রিপশনের দৈর্ঘ্য প্রবেশ করেন, তাহলে আপনি কেবল 1 থেকে 24 মাস ব্যবহার করতে পারেন। যদি আপনি এই দীর্ঘ সময়ের জন্য সাবস্ক্রিপশন চান, তাহলে আপনাকে বছর ব্যবহার করা উচিত।';
$txt['paid_invalid_duration_Y'] = 'যদি আপনি বছরের হিসাবে মাপা একটি সাবস্ক্রিপশনের দৈর্ঘ্য প্রবেশ করেন, তাহলে আপনি কেবল 1 থেকে 5 বছর ব্যবহার করতে পারেন।';
$txt['paid_all_freq_blank'] = 'আপনাকে চারটি সময়কালের মধ্যে অন্তত একটি জন্য একটি মূল্য প্রবেশ করতে হবে।';

// কিছু ত্রুটি স্ট্রিং।
$txt['paid_no_data'] = 'স্ক্রিপ্টে কোন বৈধ ডেটা পাঠানো হয়নি।';

$txt['paypal_could_not_connect'] = 'পেপ্যাল সার্ভারে সংযোগ করা যায়নি';
$txt['paid_sub_not_active'] = 'সাবস্ক্রিপশনটি নতুন ব্যবহারকারীদের গ্রহণ করছে না।';
$txt['paid_disabled'] = 'পেইড সাবস্ক্রিপশন বর্তমানে নিষ্ক্রিয়।';
$txt['paid_unknown_transaction_type'] = 'অজানা পেইড সাবস্ক্রিপশন লেনদেনের প্রকার।';
$txt['paid_empty_member'] = 'পেইড সাবস্ক্রিপশন হ্যান্ডলার সদস্য আইডি পুনরুদ্ধার করতে পারেনি';
$txt['paid_could_not_find_member'] = 'পেইড সাবস্ক্রিপশন হ্যান্ডলার সদস্য আইডি খুঁজে পেতে পারেনি: %1$d';
$txt['paid_count_not_find_subscription'] = 'পেইড সাবস্ক্রিপশন হ্যান্ডলার সদস্য আইডির জন্য সাবস্ক্রিপশন খুঁজে পেতে পারেনি: %1$s, সাবস্ক্রিপশন আইডি: %2$s';
$txt['paid_count_not_find_subscription_log'] = 'পেইড সাবস্ক্রিপশন হ্যান্ডলার সদস্য আইডির জন্য সাবস্ক্রিপশন লগ এন্ট্রি খুঁজে পেতে পারেনি: %1$s, সাবস্ক্রিপশন আইডি: %2$s';
$txt['paid_count_not_find_outstanding_payment'] = 'সদস্য আইডির জন্য কোন বকেয়া পেমেন্ট এন্ট্রি খুঁজে পাওয়া যায়নি: %1$s, সাবস্ক্রিপশন আইডি: %2$s তাই উপেক্ষা করা হচ্ছে';
$txt['paid_admin_not_setup_gateway'] = 'দুঃখিত, প্রশাসক এখনও পেইড সাবস্ক্রিপশন সেট আপ করতে শেষ করেননি। পরে আবার চেক করুন।';
$txt['paid_make_recurring'] = 'এটি একটি পুনরাবৃত্ত পেমেন্ট করুন';

$txt['subscriptions'] = 'সাবস্ক্রিপশন';
$txt['subscription'] = 'সাবস্ক্রিপশন';
$txt['paid_subs_desc'] = 'নিচে এই ফোরামে উপলব্ধ সমস্ত সাবস্ক্রিপশনের একটি তালিকা রয়েছে।';
$txt['paid_subs_none'] = 'বর্তমানে কোন পেইড সাবস্ক্রিপশন উপলব্ধ নেই।';

$txt['paid_current'] = 'বিদ্যমান সাবস্ক্রিপশন';
$txt['pending_payments'] = 'অপেক্ষমাণ পেমেন্ট';
$txt['pending_payments_desc'] = 'এই সদস্যটি এই সাবস্ক্রিপশনের জন্য নিম্নলিখিত পেমেন্ট করার চেষ্টা করেছেন কিন্তু ফোরাম দ্বারা নিশ্চিতকরণ এখনও পাওয়া যায়নি। যদি আপনি নিশ্চিত হন যে পেমেন্টটি গ্রহণ করা হয়েছে, তাহলে সাবস্ক্রিপশনে কার্যকর করতে &quot;গৃহীত&quot; ক্লিক করুন। বিকল্পভাবে, আপনি পেমেন্টের সমস্ত উল্লেখ মুছে ফেলতে &quot;অপসারণ করুন&quot; ক্লিক করতে পারেন।';
$txt['pending_payments_value'] = 'মূল্য';
$txt['pending_payments_accept'] = 'গৃহীত';
$txt['pending_payments_remove'] = 'অপসারণ করুন';

?>